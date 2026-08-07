#!/usr/bin/env bash
#
# Applies cloudflare/redirect-rules.json to the zone, then proves it works.
#
# The root is the one URL on this site that no file answers: two redirect rules
# read Accept-Language and send the reader to their own language. Those rules are
# zone configuration, so this is what carries them from the repository to
# Cloudflare, on every deploy. See cloudflare/redirect-rules.md for what they say
# and why.
#
# It touches nothing but its own two rules. They are matched by their `ref`, and
# failing that by their name, so a copy created by hand in the dashboard is
# adopted and updated rather than duplicated. Every other redirect rule in the
# zone is left exactly as it is, which is why this uses the per-rule endpoints
# rather than rewriting the whole ruleset.
#
# It is also a no-op when nothing changed: a rule whose stored form already
# matches the file is skipped, so an ordinary deploy does not add a version to
# the zone's history.
#
# Usage:
#   scripts/cloudflare/apply-redirect-rules.sh              # apply, then verify
#   scripts/cloudflare/apply-redirect-rules.sh --dry-run    # say what it would do
#   scripts/cloudflare/apply-redirect-rules.sh --no-verify  # apply only
#
# Environment:
#   CLOUDFLARE_API_TOKEN   needs Zone > Single Redirect > Edit on this zone
#   CLOUDFLARE_ZONE_ID     the zone, not the account
#   DEFINITION             the rules file, defaults to cloudflare/redirect-rules.json
#   API                    the API root, so the write path can be pointed at a
#                          stand-in and exercised without touching the zone
#
# A dry run with neither credential still validates the file and prints the
# payloads, which is what CI does on a pull request.

set -euo pipefail

DEFINITION=${DEFINITION:-cloudflare/redirect-rules.json}
API=https://api.cloudflare.com/client/v4

dry_run=0
verify=1

for argument in "$@"; do
    case $argument in
        --dry-run) dry_run=1 ;;
        --no-verify) verify=0 ;;
        *) echo "Unknown option: ${argument}" >&2; exit 64 ;;
    esac
done

say() { echo "[rules] $*"; }
fail() { echo "[rules] $*" >&2; exit 1; }

command -v jq >/dev/null || fail 'jq is required and was not found.'
[ -r "$DEFINITION" ] || fail "${DEFINITION} is missing."

# The file is read before anything else, so a typo is a failure that costs no
# API call and cannot leave the zone half updated.
jq -e '.ruleset.phase and .ruleset.kind and (.rules | length) > 0
       and all(.rules[]; .ref and .description and .expression and .action)' \
    "$DEFINITION" >/dev/null || fail "${DEFINITION} is not a complete rules definition."

phase=$(jq -r '.ruleset.phase' "$DEFINITION")
refs=$(jq -r '.rules[].ref' "$DEFINITION")

if [ -z "${CLOUDFLARE_API_TOKEN:-}" ] || [ -z "${CLOUDFLARE_ZONE_ID:-}" ]; then
    [ "$dry_run" = 1 ] || fail 'CLOUDFLARE_API_TOKEN and CLOUDFLARE_ZONE_ID are required.'

    say "No credentials given. ${DEFINITION} is valid; these are the rules it would apply:"
    jq '.rules' "$DEFINITION"
    exit 0
fi

# curl, with the status code kept apart from the body: the difference between "no
# redirect rule has ever existed on this zone" and a real failure is a 404, not
# anything in the payload.
#
# Both are left in globals rather than printed, because a caller writing
# `body=$(api GET ...)` would run this in a subshell and lose the status with it.
api_status=
api_body=
api() {
    local method=$1 path=$2 body=${3:-} response
    local -a arguments=(
        --silent --show-error --request "$method"
        --header "Authorization: Bearer ${CLOUDFLARE_API_TOKEN}"
        --header 'Content-Type: application/json'
        --write-out '\n%{http_code}'
    )

    if [ -n "$body" ]; then
        arguments+=(--data "$body")
    fi

    response=$(curl "${arguments[@]}" "${API}${path}")
    api_status=${response##*$'\n'}
    api_body=${response%$'\n'*}
}

errors() { jq -r '[.errors[]? | "\(.code): \(.message)"] | join("; ")' <<<"$1"; }

# The rules as the file wants them, and the same rules as the zone has them, are
# compared over the fields this script owns. `id`, `version` and `last_updated`
# are the zone's business, and `ref` is what identifies the pair.
managed='{description, enabled, expression, action, action_parameters}'

zone_path=/zones/${CLOUDFLARE_ZONE_ID}

# ENTRYPOINT_FIXTURE plans against a recorded response instead of the API. It is
# honoured on a dry run only, and it exists so the three branches below can be
# exercised without a token, which is the only part of this script that branches.
if [ "$dry_run" = 1 ] && [ -n "${ENTRYPOINT_FIXTURE:-}" ]; then
    entrypoint=$(cat "$ENTRYPOINT_FIXTURE")
    api_status=$(jq -r 'if .success then 200 else 404 end' <<<"$entrypoint")
    say "Planning against ${ENTRYPOINT_FIXTURE}, not the API."
else
    api GET "${zone_path}/rulesets/phases/${phase}/entrypoint"
    entrypoint=$api_body
fi

# A zone with no redirect rule at all has no entrypoint ruleset yet, so the first
# run creates it, carrying both rules with it.
if [ "$api_status" = 404 ]; then
    say 'The zone has no redirect rules yet. Creating the ruleset with both.'

    if [ "$dry_run" = 1 ]; then
        jq '.ruleset + {rules: .rules}' "$DEFINITION"
        exit 0
    fi

    api POST "${zone_path}/rulesets" "$(jq -c '.ruleset + {rules: .rules}' "$DEFINITION")"
    [ "$api_status" = 200 ] || fail "Could not create the ruleset ($api_status): $(errors "$api_body")"

    say 'Created.'
else
    [ "$api_status" = 200 ] || fail "Could not read the ${phase} ruleset ($api_status): $(errors "$entrypoint")"

    ruleset=$(jq -r '.result.id' <<<"$entrypoint")

    for ref in $refs; do
        desired=$(jq -c --arg ref "$ref" '.rules[] | select(.ref == $ref)' "$DEFINITION")
        description=$(jq -r '.description' <<<"$desired")

        # Matched on ref, or on the name a hand-made copy would carry, so this
        # adopts what somebody already pasted rather than adding a second rule
        # that shadows it.
        matches=$(jq -c --arg ref "$ref" --arg description "$description" \
            '[.result.rules[]? | select(.ref == $ref or .description == $description)]' <<<"$entrypoint")

        case $(jq 'length' <<<"$matches") in
            0)
                say "${ref}: not in the zone, adding it."
                [ "$dry_run" = 1 ] && continue

                api POST "${zone_path}/rulesets/${ruleset}/rules" "$desired"
                [ "$api_status" = 200 ] || fail "Could not add ${ref} ($api_status): $(errors "$api_body")"
                ;;
            1)
                rule=$(jq -c '.[0]' <<<"$matches")

                if [ "$(jq -S "$managed" <<<"$rule")" = "$(jq -S "$managed" <<<"$desired")" ]; then
                    say "${ref}: already as the file says it, leaving it alone."
                    continue
                fi

                say "${ref}: differs from the file, updating it."
                [ "$dry_run" = 1 ] && continue

                # `ref` is left out of an update. It is settable when a rule is
                # created and immutable afterwards, so sending ours to a rule
                # that already carries a different one is rejected with 20142,
                # "expected the reference to be empty". A rule made by hand in
                # the dashboard carries its own id as its ref, which is exactly
                # the rule this branch is here to adopt, so it would fail every
                # time. Dropping the field keeps whatever ref the rule has, and
                # the name is what keeps matching it.
                api PATCH "${zone_path}/rulesets/${ruleset}/rules/$(jq -r '.id' <<<"$rule")" \
                    "$(jq -c 'del(.ref)' <<<"$desired")"
                [ "$api_status" = 200 ] || fail "Could not update ${ref} ($api_status): $(errors "$api_body")"
                ;;
            *)
                # Two rules claiming the same job means one is shadowing the
                # other, and guessing which to keep is not this script's call.
                fail "${ref}: the zone has more than one rule matching it. Delete the extra one in the dashboard."
                ;;
        esac
    done
fi

if [ "$verify" = 0 ] || [ "$dry_run" = 1 ]; then
    say 'Not verifying.'
    exit 0
fi

# The rules are only really applied when the edge answers with them, and a
# mistyped expression is otherwise a silent 200 on a page nobody visits. Each
# case is retried, because a rule takes a moment to reach every colo.
say 'Verifying against the live site.'

failures=0

# IFS is the tab and nothing else, because `Accept-Language: fr-CA, fr;q=0.9` is
# a legal header and the default IFS would split it into two fields and shift the
# expected URL out of the line.
while IFS=$'\t' read -r url language expected; do
    location=

    for attempt in 1 2 3; do
        location=$(curl --silent --show-error --head --max-time 15 \
            --header "Accept-Language: ${language}" "$url" \
            | tr -d '\r' | awk 'tolower($1) == "location:" { print $2 }')

        [ "$location" = "$expected" ] && break
        [ "$attempt" = 3 ] || sleep 5
    done

    if [ "$location" = "$expected" ]; then
        say "  ${url} as ${language} -> ${location}"
    else
        say "  ${url} as ${language} -> ${location:-no redirect}, expected ${expected}"
        failures=$((failures + 1))
    fi
done < <(jq -r '.verify[] | [.url, .accept_language, .expect] | @tsv' "$DEFINITION")

[ "$failures" = 0 ] || fail "${failures} of the checks in ${DEFINITION} did not pass."

say 'The zone answers as the file says it should.'
