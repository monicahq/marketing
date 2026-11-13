---
name: llms-txt
description:
  Use whenever a page is added, removed, renamed or moved on the marketing
  site (a new key in `routes` in config.php, a new Blade page under
  source/<locale>/), whenever a handbook article or a blog post is added, and
  whenever a page's English title or description changes in lang/en.php
  (`meta.breadcrumb.*`, `meta.<key>.description`). Keeps /llms.txt in step
  with the site. Trigger on new page, add a page, route, handbook article,
  blog post, llms.txt, or "for LLMs".
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
2. Nothing else: the title and the description are the ones the page's head
   already uses, so they exist once the page does.

Forgetting step 1 is caught. The template throws, naming the key, and the
build stops: `Page [x] is not listed in /llms.txt. Add it to a section of
'llms' in config.php.` A key in `pageless` (a route with no page) is exempt
and must stay out of `llms`.

## When a handbook article or a blog post is added

Nothing to do in `config.php`. Both are listed automatically under their
index. Make sure the English file has a real `description` in its front
matter, because that line is what a model reads to decide whether to open it.

## When a page is removed or renamed

Remove or rename its key in `llms` as well. A key in `llms` that is no longer
in `routes` fails the build in `localePath()`.

## When copy changes

A change to `meta.<key>.description` or `meta.breadcrumb.<key>` in
`lang/en.php` changes the line in llms.txt with it. Read the line again in
that context: it should still say what the page is to someone who has not seen
the site.

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
and that the build printed no exception.
