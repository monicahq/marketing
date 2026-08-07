# The root, in the reader's own language

Every URL on this site is locale-prefixed (`/en/`, `/fr/`), so `/` has no page of
its own and can only send the reader somewhere. Two Cloudflare redirect rules
answer it: they read the `Accept-Language` header the browser already sends and
redirect to the language it asked for, with English for a reader who asks for
nothing this site publishes.

**This file is the source of truth for those two rules, and nothing applies it.**
They are zone configuration, not code, so applying them is a copy and paste into
the dashboard. What the build does check is that this file still agrees with
`$locales` in `config.php`: a language added there and forgotten here fails a
production build, naming what to paste. See the listener in `bootstrap.php`.

A redirect rule was chosen over a Pages Function, which could read the same
header in JavaScript, because every hit on `/` would spend a Workers request and
bots hit `/` hardest. The edge already knows how to make this redirect, and
making it there costs nothing.

## Where they go

Cloudflare dashboard, zone `monicahq.com`, Rules, then Redirect Rules. Two rules,
both **302**, both with **Preserve query string** enabled, so a campaign link to
`/` keeps its parameters. Their expressions are mutually exclusive, so their
order in the list does not matter.

## Rule 1, a language we publish

Name: `root: language we publish`

Expression:

```
http.host eq "www.monicahq.com" and http.request.uri.path eq "/" and substring(lower(http.request.accepted_languages[0]), 0, 2) in {"fr" "de" "es" "pt" "nl"}
```

Target URL, **dynamic**:

```
concat("https://www.monicahq.com/", substring(lower(http.request.accepted_languages[0]), 0, 2), "/")
```

## Rule 2, everything else

Name: `root: default language`

Expression:

```
http.host eq "www.monicahq.com" and http.request.uri.path eq "/" and not (substring(lower(http.request.accepted_languages[0]), 0, 2) in {"fr" "de" "es" "pt" "nl"})
```

Target URL, **static**:

```
https://www.monicahq.com/en/
```

## Why they read the way they do

- `http.request.accepted_languages` is the `Accept-Language` header parsed for
  us, sorted by weight in descending order, with `*` dropped. So `[0]` is the
  reader's preferred tag, and the weights are honoured without any arithmetic in
  the expression.
- `substring(..., 0, 2)` folds a tag to its language, so `fr-CA` and `fr-CH` both
  read as `fr`. Every locale here is a plain two-letter language.
- `lower()` because the header is case insensitive and `FR-ca` is a legal way to
  write it.
- **The set is every locale except the default**, in the order `$locales`
  declares them. English is absent on purpose: rule 2 is what serves it, and
  listing it in both would make the two rules overlap.
- `http.host` is pinned because a redirect rule applies to the whole zone, and
  this zone also carries `app.monicahq.com`. `http.request.uri.path eq "/"` is
  pinned for the same reason: only the bare root has no page of its own.
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

## Checking it

After pasting, against the live site:

```sh
curl -sI -H 'Accept-Language: fr-CA,fr;q=0.9,en;q=0.8' https://www.monicahq.com/ | grep -i location
curl -sI -H 'Accept-Language: de-DE,de;q=0.9'          https://www.monicahq.com/ | grep -i location
curl -sI -H 'Accept-Language: ja,ko;q=0.8'             https://www.monicahq.com/ | grep -i location
curl -sI                                               https://www.monicahq.com/ | grep -i location
```

Expected: `/fr/`, `/de/`, `/en/`, `/en/`. The dashboard's expression editor also
previews a match against a request you describe, which is the cheapest way to
check a change to the set before saving it.
