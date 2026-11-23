---
name: llms-txt
description:
  Use whenever a page is added, removed, renamed or moved on the marketing
  site (a new key in `routes` in config.php, a new Blade page under
  source/<locale>/), whenever a handbook article or a blog post is added, and
  whenever a page's English title or description changes in lang/en.php
  (`meta.breadcrumb.*`, `meta.<key>.description`). Keeps /llms.txt in step
  with the site, and draws the social cards (`npm run og`) that every new
  page, article and post needs. Trigger on new page, add a page, route,
  handbook article, blog post, social card, og image, llms.txt, or "for LLMs".
---

# `llms-txt` skill instructions

`/llms.txt` is the site described for a language model (llmstxt.org, in the
shape of https://docs.stripe.com/llms.txt): a title, a summary, a pointer to
the product documentation at https://my.monicahq.com/llms.txt, then one section
of links per area of the site, each with one line of description.

It is **generated**, never written by hand. `source/llms.blade.txt` builds it
on every build from three sources:

| What | Comes from |
| :--- | :--- |
| Which pages, in which section, in what order | `llms` in `config.php` |
| A page's link title | `meta.breadcrumb.<key>` in `lang/en.php` |
| A page's description | `meta.<key>.description` in `lang/en.php` |
| Handbook articles | `source/_handbook_en/`, listed under the handbook as their `.md` files |
| Blog posts | `source/_posts_en/`, listed under the blog, newest first |

## When a page is added

1. Add its route key to the right section of `llms` in `config.php`, at the
   place a reader would look for it. The sections today are Product,
   Features, Company, Handbook, Blog and Legal. A new section is a new key in
   that array, in the order the file should list it.
2. Nothing else for llms.txt: the title and the description are the ones the
   page's head already uses, so they exist once the page does.
3. Draw its social cards (see "Social cards" below).

Forgetting step 1 is caught. The template throws, naming the key, and the
build stops: `Page [x] is not listed in /llms.txt. Add it to a section of
'llms' in config.php.` A key in `pageless` (a route with no page) is exempt
and must stay out of `llms`.

## When a handbook article or a blog post is added

Nothing to do in `config.php`. Both are listed automatically under their
index. Make sure the English file has a real `description` in its front
matter, because that line is what a model reads to decide whether to open it.

Then draw its social cards (see "Social cards" below).

## When a page is removed or renamed

Remove or rename its key in `llms` as well. A key in `llms` that is no longer
in `routes` fails the build in `localePath()`.

## When copy changes

A change to `meta.<key>.description` or `meta.breadcrumb.<key>` in
`lang/en.php` changes the line in llms.txt with it. Read the line again in
that context: it should still say what the page is to someone who has not seen
the site.

## Social cards

Every page, handbook article and blog post has one JPEG per locale in
`source/og/`. Nothing draws them during the build or in CI, because that needs
Chrome: they are drawn here, by hand, and committed. A missing card fails the
production build (its `og:image` resolves to nothing), so skipping this step
turns the pull request red.

| What was added or changed | Copy comes from | Command |
| :--- | :--- | :--- |
| A page | a `meta.<key>.ogImage` block in **every** `lang/` file (only `title` is required; see the "Social cards" section of `.claude/CLAUDE.md` for the other fields) | `npm run og -- <key>` |
| A handbook article | its front matter (`title`, `description`, `section`), so nothing to add | `npm run og -- handbook-<slug>` |
| A blog post | its front matter (`title`, `description`, `date`), so nothing to add | `npm run og -- blog-<slug>` |

1. For a page, write the `ogImage` block in `lang/en.php` first, then in every
   other locale (the `translate` skill covers that). The English block is what
   gives a page a card, and a locale missing it fails the build.
2. Run the command. It writes eight JPEGs, one per locale, and refuses a card
   whose copy does not fit rather than writing it; shorten the copy (or set
   `card:` in an article's or post's front matter) and run it again.
3. Look at the eight images. An exit code says nothing about whether a card
   reads well.
4. Commit the JPEGs with the change.

Redraw the same way when a card's copy changes: a page's `ogImage` block, or
the title or description of an article or post. When a page, article or post
is removed or renamed, delete its old JPEGs from `source/og/`.

## What not to put in it

- Other languages. The file is English and says once where the other
  locales are; eight copies of the list would be noise.
- Hand-written lines. Anything a model should read about a page belongs in
  that page's description, where search engines read it too.
- The product documentation. It lives with the application and has its own
  llms.txt, which this file points to. If that URL ever changes, it is the
  one hard-coded link in `source/llms.blade.txt`.

## Check

Run `npm run build` and read `build_production/llms.txt`. Confirm that the new
page is in the section you meant, that its description reads as a sentence,
that `git status` shows its new JPEGs under `source/og/`, and that the build
printed no exception.
