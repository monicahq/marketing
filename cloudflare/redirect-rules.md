# The root, in the reader's own language

Every URL on this site is locale-prefixed (`/en/`, `/fr/`), so `/` has no page of
its own and can only send the reader somewhere. Two Cloudflare redirect rules
answer it: they read the `Accept-Language` header the browser already sends and
redirect to the language it asked for, with English for a reader who asks for
nothing this site publishes.

**[`redirect-rules.json`](redirect-rules.json) is those two rules**, in the shape
the Rulesets API takes them. It is not a copy of something configured elsewhere:
`scripts/cloudflare/apply-redirect-rules.sh` sends it to the zone on every deploy
and then checks that the edge answers with it. Nothing about the root is
configured by hand, and this file is the explanation the JSON has no room for.
Edit the JSON, never the dashboard.

A redirect rule was chosen over a Pages Function, which could read the same
header in JavaScript, because every hit on `/` would spend a Workers request and
bots hit `/` hardest. The edge already knows how to make this redirect, and
making it there costs nothing.

## What the deploy needs

Two repository secrets, read by the deploy workflow and by nothing else:

| Secret | What it is |
| :--- | :--- |
| `CLOUDFLARE_RULES_API_TOKEN` | A token carrying **Zone > Single Redirect > Edit** on `monicahq.com`, and nothing else |
| `CLOUDFLARE_ZONE_ID` | The zone id of `monicahq.com`, from the dashboard's overview page |

A second token rather than the one the Pages upload uses, because publishing a
site and rewriting a zone's redirects are different powers and nothing needs
both. **If either secret is missing, the deploy fails at that step**, after the
site itself has published. That is deliberate: rules that are not being applied
should be noisy rather than quiet.

## What the script does

- Applies **only its own two rules**, matched on their `ref` and failing that on
  their name, so a copy somebody once made by hand is adopted and corrected
  rather than duplicated. Every other redirect rule in the zone is left alone,
  which is why it uses the per-rule endpoints instead of rewriting the ruleset.
  An adopted rule keeps whatever `ref` it already had, because a `ref` can be set
  when a rule is created and not afterwards, so the name is what goes on
  identifying it.
- **Does nothing when nothing changed.** A rule whose stored form already matches
  the file is skipped, so an ordinary deploy adds no version to the zone's
  history.
- **Creates the ruleset** on a zone that has never had a redirect rule, rather
  than failing on the 404 a missing phase entrypoint returns.
- **Refuses to guess** when two rules in the zone answer to the same job, because
  one is shadowing the other and picking between them is not its call.
- **Verifies against the live site** afterwards, using the `verify` cases in the
  JSON, retrying each while the rule reaches every colo. A mistyped expression is
  otherwise a silent English homepage for everybody.

Run it by hand the way the deploy does, or ask it what it would change:

```sh
scripts/cloudflare/apply-redirect-rules.sh --dry-run    # no writes, prints the plan
scripts/cloudflare/apply-redirect-rules.sh --no-verify  # apply, skip the live check
```

With no credentials in the environment, `--dry-run` still validates the file and
prints the rules it would send, which is what CI does on every pull request.

## Why the rules read the way they do

- `http.request.accepted_languages` is the `Accept-Language` header parsed for
  us, sorted by weight in descending order, with `*` dropped. So `[0]` is the
  reader's preferred tag, and the weights are honoured without any arithmetic in
  the expression.
- `substring(..., 0, 2)` folds a tag to its language, so `fr-CA` and `fr-CH` both
  read as `fr`. Every locale here is a plain two-letter language.
- `lower()` because the header is case insensitive and `FR-ca` is a legal way to
  write it.
- **The language set is every locale except the default**, in the order
  `$locales` declares them in `config.php`. English is absent on purpose: the
  second rule is what serves it, and listing it in both would make the two rules
  overlap. An `afterBuild` listener in `bootstrap.php` compares that set against
  `$locales` and fails a production build when the two disagree, so a language
  added to the site cannot stay unreachable from `/` unnoticed.
- **Both hostnames are matched, and the reader keeps the one they arrived on.**
  The site answers on `https://monicahq.com/` as well as on
  `https://www.monicahq.com/`, so a rule naming only one of them would leave half
  the readers on English. `http.host` in the target is what carries the reader's
  own host through, so the apex sends them to `https://monicahq.com/fr/` and
  never moves them to `www`. That is why both targets are expressions: a static
  one can only name a single host.
- **These rules choose a language and nothing else.** Sending the apex to `www`
  would be canonicalising the host, which is a separate decision about the whole
  domain, and the root is a bad place to make it: every other apex URL already
  stays on the apex, and a root that behaved differently would be the odd one
  out. Landing on `https://monicahq.com/fr/` is fine for search too, because that
  page's canonical already names the `www` copy, exactly as it does for any other
  apex URL a reader reaches today.
- `http.host` is pinned in the match in the first place because a redirect rule
  applies to the whole zone, and this zone also carries `app.monicahq.com`.
  `http.request.uri.path eq "/"` is pinned for the same reason: only the bare
  root has no page of its own.
- **302, with the query string preserved**, so a campaign link to `/` keeps its
  parameters, and no browser remembers a language decision that was made for
  somebody else.
- The two expressions are mutually exclusive, so their order in the zone's list
  does not matter, and neither does where the script appends them.
- Nothing here uses a regular expression, which is a Business plan feature.
  `substring`, `lower` and `concat` are available on every plan.
- **If neither rule fires, nothing breaks.** `/` falls through to the static stub
  built from `source/index.blade.php`, which redirects to English. That is what
  answers on a `*.pages.dev` preview and under `npm run serve`, where zone rules
  do not run at all.

## What they deliberately do not do

- **No `Vary: Accept-Language` on the 302.** Adding it would take a third rule, a
  response header transform. The window is a shared cache holding the redirect
  and replaying it for a reader whose preferences differ, which costs that reader
  one wrong language on the root and a click on the language picker.
- **`q=0` is not honoured.** A reader writing `fr;q=0` means "not French", and
  Cloudflare does not document whether such a tag is dropped from the array. If
  it is kept, that reader gets French. Nobody writes that header by hand except
  to test it.
- **Nothing runs off the zone.** Preview deployments answer in English, which is
  what they did before any of this existed.
- **They do not send the apex to `www`.** `https://monicahq.com/en/`, and every
  other path, answers on the apex rather than redirecting, which is duplicate
  content held together by the canonical tags pointing at `www`. Fixing that is a
  separate rule about the whole domain, not about language, and it is not this
  file's business:

  ```
  http.host eq "monicahq.com"
  -> concat("https://www.monicahq.com", http.request.uri.path)   301
  ```

  If it is ever added, these two rules still work and nothing loops: whichever
  fires first, the reader ends on `https://www.monicahq.com/<lang>/`, in two hops
  instead of one. Worth folding the language choice into that rule at the time,
  rather than leaving both.
