#!/usr/bin/env bash
#
# Applies cloudflare/redirect-rules.json to the zone, then proves it works.
# See cloudflare/redirect-rules.md for what the rules say and why.
#
# The languages the rules match are not written out in that file. It carries a
# `{$languages}` marker, and the list is read from lang/, one file per language,
# so a new locale reaches the root by existing rather than by being listed twice.
#
# It touches only its own two rules, matched by `ref` and failing that by name,
# so a copy made by hand in the dashboard is adopted rather than duplicated.
# Hence the per-rule endpoints instead of rewriting the ruleset. A rule that
# already matches the file is skipped, so an ordinary deploy is a no-op.
#
# Usage:
#   scripts/cloudflare/apply-redirect-rules.sh              # apply, then verify
#   scripts/cloudflare/apply-redirect-rules.sh --dry-run    # say what it would do
#   scripts/cloudflare/apply-redirect-rules.sh --no-verify  # apply only
#
# CLOUDFLARE_API_TOKEN needs Zone > Single Redirect > Edit on the zone, and
# CLOUDFLARE_ZONE_ID is the zone rather than the account. With neither, a dry run
# still validates the file and prints the payloads, which is what CI does.

set -euo pipefail

# Everything this reads is a repository path, so it runs from the repository root
# whatever directory it was called from.
cd "$(dirname "${BASH_SOURCE[0]}")/../.."

DEFINITION=${DEFINITION:-cloudflare/redirect-rules.json}
LANGUAGES=${LANGUAGES:-lang}
API=${API:-https://api.cloudflare.com/client/v4}

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

# Read first, so a typo fails before any call and cannot leave the zone half done.
jq -e '.ruleset.phase and .ruleset.kind and .languages.default and (.rules | length) > 0
       and all(.rules[]; .ref and .description and .expression and .action)' \
    "$DEFINITION" >/dev/null || fail "${DEFINITION} is not a complete rules definition."

[ -d "$LANGUAGES" ] || fail "${LANGUAGES}/ is missing, and it is where the languages come from."

default=$(jq -r '.languages.default' "$DEFINITION")

# Every language except the default, which the second rule serves on its own.
# Sorted with LC_ALL=C so the set comes out identical on every run, which is what
# lets the comparison below recognise a rule as unchanged.
shopt -s nullglob
set_of_languages=$(
    for file in "$LANGUAGES"/*.php; do
        basename "$file" .php
    done | grep -Fxv "$default" | LC_ALL=C sort | sed 's/^/"/; s/$/"/' | paste -sd' '
)
shopt -u nullglob

[ -n "$set_of_languages" ] || fail "${LANGUAGES}/ holds no language other than ${default}."

# One resolved copy, so nothing below has to know the markers existed.
definition=$(jq --arg set "{${set_of_languages}}" --arg fallback "$default" '
    walk(if type == "string"
         then split("{$languages}") | join($set) | split("$default") | join($fallback)
         else . end)' "$DEFINITION")

phase=$(jq -r '.ruleset.phase' <<<"$definition")
refs=$(jq -r '.rules[].ref' <<<"$definition")

if [ -z "${CLOUDFLARE_API_TOKEN:-}" ] || [ -z "${CLOUDFLARE_ZONE_ID:-}" ]; then
    [ "$dry_run" = 1 ] || fail 'CLOUDFLARE_API_TOKEN and CLOUDFLARE_ZONE_ID are required.'

    say "No credentials given. ${DEFINITION} is valid, and ${LANGUAGES}/ gives {${set_of_languages}}."
    say 'These are the rules it would apply:'
    jq '.rules' <<<"$definition"
    exit 0
fi

# curl, with the status kept apart from the body: a zone that never had a redirect
# rule answers the entrypoint with 404, which is not a failure. Both land in
# globals, because `body=$(api GET ...)` would lose the status to a subshell.
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

# File and zone are compared over the fields this script owns. `id`, `version` and
# `last_updated` are the zone's business, and `ref` only identifies the pair.
managed='{description, enabled, expression, action, action_parameters}'

zone_path=/zones/${CLOUDFLARE_ZONE_ID}

# ENTRYPOINT_FIXTURE plans against a recorded response instead of the API, on a dry
# run only, so the branches below can be exercised without a token.
if [ "$dry_run" = 1 ] && [ -n "${ENTRYPOINT_FIXTURE:-}" ]; then
    entrypoint=$(cat "$ENTRYPOINT_FIXTURE")
    api_status=$(jq -r 'if .success then 200 else 404 end' <<<"$entrypoint")
    say "Planning against ${ENTRYPOINT_FIXTURE}, not the API."
else
    api GET "${zone_path}/rulesets/phases/${phase}/entrypoint"
    entrypoint=$api_body
fi

# No entrypoint ruleset yet, so the first run creates it, carrying both rules.
if [ "$api_status" = 404 ]; then
    say 'The zone has no redirect rules yet. Creating the ruleset with both.'

    if [ "$dry_run" = 1 ]; then
        jq '.ruleset + {rules: .rules}' <<<"$definition"
        exit 0
    fi

    api POST "${zone_path}/rulesets" "$(jq -c '.ruleset + {rules: .rules}' <<<"$definition")"
    [ "$api_status" = 200 ] || fail "Could not create the ruleset ($api_status): $(errors "$api_body")"

    say 'Created.'
else
    [ "$api_status" = 200 ] || fail "Could not read the ${phase} ruleset ($api_status): $(errors "$entrypoint")"

    ruleset=$(jq -r '.result.id' <<<"$entrypoint")

    for ref in $refs; do
        desired=$(jq -c --arg ref "$ref" '.rules[] | select(.ref == $ref)' <<<"$definition")
        description=$(jq -r '.description' <<<"$desired")

        # On the name too, so a hand-made copy is adopted rather than shadowed.
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

                # No `ref` on an update: it is settable at creation and immutable
                # after, so sending ours to a rule carrying a different one is
                # rejected with 20142. A hand-made rule carries its own id as its
                # ref, which is exactly the rule this branch adopts.
                api PATCH "${zone_path}/rulesets/${ruleset}/rules/$(jq -r '.id' <<<"$rule")" \
                    "$(jq -c 'del(.ref)' <<<"$desired")"
                [ "$api_status" = 200 ] || fail "Could not update ${ref} ($api_status): $(errors "$api_body")"
                ;;
            *)
                # One is shadowing the other, and picking is not this script's call.
                fail "${ref}: the zone has more than one rule matching it. Delete the extra one in the dashboard."
                ;;
        esac
    done
fi

if [ "$verify" = 0 ] || [ "$dry_run" = 1 ]; then
    say 'Not verifying.'
    exit 0
fi

# A mistyped expression is otherwise a silent English homepage for everybody. Each
# case is retried, because a rule takes a moment to reach every colo.
say 'Verifying against the live site.'

failures=0

# Tab as the only separator: `fr-CA, fr;q=0.9` is a legal header, and the default
# IFS would split it in two and shift the expected URL out of the line.
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
done < <(jq -r '.verify[] | [.url, .accept_language, .expect] | @tsv' <<<"$definition")

[ "$failures" = 0 ] || fail "${failures} of the checks in ${DEFINITION} did not pass."

say 'The zone answers as the file says it should.'
