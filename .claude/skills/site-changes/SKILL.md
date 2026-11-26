---
name: site-changes
description:
  Use on every change to the marketing site, however small: a page, a blog
  post, copy, a translation, a style, the header or footer, a redirect. Every
  change needs an entry on the /changes page before it is done. Trigger on any
  edit under source/, lang/, config.php, or the build and deploy setup, and on
  "changes page", "changelog of the site", "log this change".
---

# `site-changes` skill instructions

`/changes` lists every change made to the marketing site (not to the
application), newest first, with the pages each one touched. It is fed by
`changes.php` at the root of the repository, read by `config.php` and drawn by
`source/_partials/changes/page.blade.php`.

**A change to the site is not finished until it has an entry there.** Check
this before committing, the way you check the build.

## What counts

Anything a reader of the site could notice: a new or removed page, a post,
changed copy or translation, a layout or style change, the header, the footer,
a redirect, a fixed link. Invisible work (a refactor behind identical output,
tests, CI, docs in the repository) does not.

Changes to the application itself belong in the product changelog, not here.

## The entry

Add one line to `changes.php`:

```php
['at' => '2026-11-26 15:35', 'summary' => 'Added the changes page.', 'pages' => ['changes']],
```

- `at` is **UTC**, `Y-m-d H:i`. Get it with `date -u '+%Y-%m-%d %H:%M'`, never
  from the local clock.
- `summary` is one sentence in English, past tense, saying what a reader would
  see. It is not translated: the page says so itself. Sentence case, no dashes
  as punctuation, no emoji, no exclamation mark.
- `pages` is a list of route keys from `routes` in `config.php`, each shown
  under the page's own name and linking to it. Use `'all'` for a change every
  page shows (header, footer, a style). A post is `'blog'`.
- One entry per change, not per file. Several commits in one pull request that
  say the same thing are one entry.

Then move `changes` in `lastmod` in `config.php` to the same day, because the
sitemap dates the page by it.

## Check

Before claiming done, run `git diff --stat` and ask: did this touch `source/`,
`lang/` or `config.php` in a way a reader would notice? If so, `changes.php`
must be in the diff. Then `npm run build`: the page throws on a route key that
does not exist.
