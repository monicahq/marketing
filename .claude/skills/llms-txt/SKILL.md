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

Every page, handbook article and blog post has a social card: one JPEG per
locale, 1200x630, in `source/og/`, named `<key>-<locale>.jpg`
(`pricing-fr.jpg`, `handbook-principles-de.jpg`, `blog-life-events-en.jpg`).
Nothing draws them during the build or in CI, because that needs Chrome. They
are drawn here, by hand, and committed. A missing card fails the production
build (its `og:image` resolves to nothing), so skipping this turns the pull
request red.

### What a card is made of

- **The background**: `scripts/og/backgrounds/filing-cabinet.png`, the panda
  filing its cabinet in the meadow. It is the default (`defaultBackground` in
  `scripts/og/pages.mjs`), so a card that names no background uses it, and
  today it is the only one. It already carries the Monica mark top left and
  leaves the left half empty for the copy. Its labels (Contacts, Notes,
  Memories, Trip to Kyoto) are part of the drawing and stay English.
- **The template**: `scripts/og/page.html`, which writes the copy over the
  left half: `eyebrow` (orange uppercase line), `title` (serif headline),
  `accent` (italic orange line under it), `description`. Its safe area follows
  the filing cabinet: headline up to x=516, description up to x=476, the block
  ending above y=505, where the rocks begin.
- **The copy**, which comes from one of two places:

| Kind | Key | Copy comes from |
| :--- | :--- | :--- |
| A page | its route key (`pricing`) | a `meta.<key>.ogImage` block in **every** `lang/<locale>.php` |
| A handbook article | `handbook-<slug>` | its front matter: section as eyebrow, `title`, `description`. Nothing to add. |
| A blog post | `blog-<slug>` | its front matter: blog eyebrow and year, `title`, `description`. Nothing to add. |

### Drawing a page's card, step by step

1. **Write the English block** in `lang/en.php`, under `meta.<key>`, next to
   that page's `title` and `description`. Only `title` is required:

   ```php
   'ogImage' => [
       'eyebrow' => "Pricing",
       'title' => "Your server or ours.",
       'accent' => "Your choice.",
       'description' => "Host Monica yourself for free, or choose monthly, yearly or lifetime hosting. Every feature in every plan.",
   ],
   ```

   Optional fields: `alt` (give one when the picture says more than the words
   on it; otherwise the words are the alt text) and `background` (a file name
   in `scripts/og/backgrounds/`, left out to keep `filing-cabinet.png`). Keep
   every field short: the copy shares the card with the drawing. A
   title of five or six words and a description of one sentence is the size
   that fits.
2. **Translate the block into every other `lang/` file** (the `translate`
   skill covers it). The English block is what gives a page a card, and a
   locale without it stops the script with `Missing translation
   [meta.<key>.ogImage] for locale [<locale>]`.
3. **Draw the cards**: `npm run og -- <key>`. This writes the eight JPEGs.
   `npm run og -- --locale=fr <key>` redraws one language only, `npm run og`
   with no argument redraws every card on the site (over a thousand).
   Chrome is found on the usual paths; set `CHROME` to its binary otherwise.
4. **If the script refuses a card**, it is because the copy does not fit even
   at the smallest size (the headline shrinks from 52px to 36px and the
   description from 21px to 17px first), or because the font or background
   did not load. Shorten the field it names, in that locale, and run step 3
   again. German runs about 30% longer than English, so it is usually the one
   that overflows.
5. **Look at the eight images** (`source/og/<key>-*.jpg`) with the Read tool.
   An exit code says nothing about whether a card reads well: check that
   nothing is cut, that the copy stays clear of the drawing, and that the
   Chinese one shows Chinese glyphs.
6. **Commit the JPEGs** with the change, then run `npm run build`. Rendering is
   deterministic, so only cards whose copy changed show up in `git status`.

### Drawing an article's or a post's card

1. Make sure the front matter in every locale has `title` and `description`.
2. Run `npm run og -- handbook-<slug>` or `npm run og -- blog-<slug>`.
3. A description too long for the card is left out, and the script says so.
   To shorten the card without touching the page, add a `card` map to the
   front matter in that locale: `card: {title: Shorter title, description:
   Shorter line}`. It is `card`, not `ogImage`, because a front matter key
   would shadow the helper of the same name.
4. Look at the eight images and commit them, as for a page.

### Keeping cards in step

- **Copy changed** (a page's `ogImage` block, or an article's or post's title
  or description): run the same command again and commit the new JPEGs. A
  card's URL carries a hash of its file, so a redrawn card reaches social
  platforms under a new URL by itself.
- **Page, article or post removed or renamed**: delete its old
  `source/og/<old-key>-*.jpg` and draw the new ones.
- **A new background**: put the file in `scripts/og/backgrounds/` with the
  mark top left and the left half empty, as `filing-cabinet.png` does, and
  name it in the card's `background` field. If its drawing has a different
  shape, the safe area in `scripts/og/page.html` may need adjusting for it.

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
