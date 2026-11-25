---
name: feature-post
description: >
  Use whenever a blog post has to be written about a feature that shipped in
  the Monica application (a "new feature" post, `category: feature`), from a
  changelog entry, a pull request or a feature name such as "Template of a
  contact can now be changed". Covers the whole job: researching the feature in
  monicahq/monica, taking the screenshots from a local instance, the front
  matter, the shape of the body, the eight translations, the social cards and
  the checks. Trigger on feature post, new feature post, blog post about a
  feature, announce a feature, write up a changelog entry.
---

# Writing a feature post

A feature post tells a reader that something new works in Monica, why it
matters to them, and exactly how to reach it. It is an ordinary blog post with
`category: feature` in its front matter: it lives in `source/_posts_<locale>/`
like every other post, is listed in date order with them on the blog index,
and gets three extra things from `_layouts/post.blade.php`: a "New feature"
badge beside its date, its main screenshot above the body, and, under the
body, the useful links (documentation, pull request, report a problem) and the
similar features. Every screenshot in it opens full screen on click.

Work through the steps in order. Each one names what done looks like.

## 1. Branch

A new branch off an up to date `main`, named `YYYY-MM-DD-<name>` (the
project's rule), for example `2026-11-25-feature-post-contact-template`.

## 2. Understand the feature

The application is `monicahq/monica`, checked out at `~/code/monica`. Read,
in this order:

1. **The changelog entry**: `changelog/<date>-<id>-<name>.md` on
   `origin/main` (`git -C ~/code/monica fetch && git -C ~/code/monica show
   origin/main:changelog/<file>`). Its body already says how it was before and
   what changes: that is the spine of the post. Its `id` names its screenshots
   in `public/images/changelog/<id>-<n>.webp`.
2. **The pull request** that shipped it: `gh pr list --repo monicahq/monica
   --search "<words>" --state merged`, then `gh pr view <n> --repo
   monicahq/monica --json title,body,files`. Its number goes in the front
   matter. Its body often holds screenshots (`github.com/user-attachments/…`)
   that can be reused.
3. **The help centre guide** it added or changed: `docs/portal/en/<section>/
   <n>-<slug>.md`. Its front matter `slug` and the section give the
   documentation URL, `https://my.monicahq.com/docs/en/<section>/<slug>`. The
   guide is the authority on labels and on the exact path through the
   interface: use its words for buttons and panels.
4. **The code**, only when the three above leave a question open (which
   screen, what a button is called, when a panel is hidden): the view under
   `resources/views/app/`, the routes (`php artisan route:list`).

Done when you can say in two sentences what a reader could not do before and
what they can do now, and you know every click from the vault dashboard to
the feature.

## 3. Take the screenshots

The post needs one main screenshot (the feature at its most useful moment) and
one for most steps. Take them from the local instance, following the
application's own `take-screenshot` skill (`~/code/monica/.claude/skills/
take-screenshot/SKILL.md`), with Iris.

- The instance is served by Herd. Read `APP_URL` in `~/code/monica/.env`; if
  Herd serves it over https while `APP_URL` says http, mint links with
  `APP_URL=https://monica.test php artisan monica:screenshot-link …`, or every
  link answers "Invalid signature".
- Copy `.env` to the scratchpad first, add `MONICA_SCREENSHOT_LINK_ENABLED=true`
  and `DEBUGBAR_ENABLED=false`, run `php artisan config:clear`, and **put the
  original `.env` back and clear the config again when you are done**. Touch
  nothing else in that repository: it is somebody's working copy, often on a
  feature branch.
- One link per capture (it expires in five minutes):

  ```bash
  L=$(APP_URL=https://monica.test php artisan monica:screenshot-link monica.geller@centralperk.example "--to=/vaults/1" | head -1)
  iris --scale 2 --size 1280x900 "$L" -o <scratchpad>/dashboard.png
  ```

- A whole screen for the first steps (the vault dashboard, the contact page),
  cropped to what matters with `magick in.png -crop WxH+X+Y +repage out.png`.
  An element for a panel: `--selector 'section:has(#some-id)' --padding 24`.
- A screen that only appears after a click often has a URL of its own (a
  confirmation reached through `?template=…&version=…`, for example): find it in
  the HTML of the page before reaching for a browser.
- The changelog's own screenshot and those in the pull request are fair to
  reuse, cropped, when the local data cannot show the same thing.
- Look at every image before using it. Iris says nothing about a sign-in page
  or an error screen captured by mistake.

Convert to WebP and name them after the post:

```bash
cwebp -quiet -q 82 in.png -o source/assets/images/blog/<date>-<slug>-<what>.webp
```

`<what>` says what the image is: `preview` for the main one, then
`dashboard`, `contact`, `panel`, `confirm`… Keep the 2x pixels: the body sizes
them, and the full-screen view is where the extra pixels pay off. Nothing needs
`width` or `height`: `bodyHtml()` reads them off the file.

## 4. Write the English post

`source/_posts_en/<date>-<slug>.md`. The slug is short and stays the same in
every language.

### Front matter

```yaml
---
title: 'You can now change the template of a contact'
slug: change-contact-template
date: 2026-11-25
author: 'Regis Freyd'
description: 'One or two sentences: what changed, and the benefit.'
category: feature
icon: layers                      # a name from source/_partials/icon.blade.php
screenshot:
  src: /assets/images/blog/2026-11-25-change-contact-template-preview.webp
  alt: 'What the screenshot shows, and in what state'
  caption: 'The line under it.'    # optional
pullRequest: 8014                  # in monicahq/monica
docs: https://my.monicahq.com/docs/en/people/change-the-template
related: [other-feature-slug]      # optional, see below
---
```

`isFeature()` in `config.php` checks this: a feature post missing `icon`,
`pullRequest`, `docs` or the screenshot's `src` and `alt` fails the build
naming the file, and so does any `category` other than `feature`. The "Report
a problem" link is the issue tracker (`links.issues` in `config.php`), shared
by every feature post.

`related` lists the slugs of other feature posts about the same area, in the
order to show them. It renders as "Similar features" under the links, and
nothing is shown while it is empty. A slug that names no post fails the build.
When you add a post that belongs next to an older one, add the new slug to
the older post's `related` too, in every locale, so the link goes both ways.

The title says what the reader gets, as a sentence: "You can now…". Sentence
case, no exclamation mark, no emoji, never a dash as punctuation.

### Body

Always the same shape, which the layout is designed around:

1. **The situation before**, in a paragraph or two: what a reader had to put up
   with, concretely, with a person from the demo vault (Rachel, Monica,
   Chandler) rather than "a user".
2. **What changes, and the benefit**: what they can do now, and what Monica
   does to make it safe or easy.
3. **`## How to <do the thing>`**, then an ordered list. **The first step
   always starts on the vault dashboard** ("Open your vault. On its dashboard,
   choose **People** in the sidebar."), and every following step is one click
   or one decision, with the interface's own label in bold, until the reader
   has used the feature. A screenshot goes inside the step it illustrates,
   indented under it, with its caption as the image title:

   ```markdown
   1. Open your vault. On its dashboard, choose **People** in the sidebar.

      ![The dashboard of the Personal vault, with People in the sidebar](/assets/images/blog/2026-11-25-change-contact-template-dashboard.webp "The vault dashboard. People is in the sidebar.")

   2. Choose the person whose template you want to change.
   ```

   The steps are drawn with numbered circles (`.mn-prose-feature ol` in
   `prose.css`), and each image becomes a figure that opens full screen
   (`$screenshotFigures` in `config.php`).
4. **Then, when the feature needs it**, a short section or two on what happens
   to the reader's data, what is not possible yet, or how to go back. Keep it
   to what a reader would ask next. The help centre has the rest, and the
   documentation link is right under the post.

Alt text describes the screenshot and its state ("the Template panel on Edit
contact, with Basic contact selected"), never the file. The caption is one
short sentence about why the image is there.

## 5. Translate

Load the `translate` skill and follow it: Sonnet subagents in the background,
the locales split between two of them, one file per agent. For a post, the
brief says: same file name, slug, date, `category`, `icon`, `screenshot.src`,
`pullRequest`, `docs` and `related` in every locale; only `title`,
`description`, `screenshot.alt`, `screenshot.caption` and the body are
translated, including every image's alt text and caption; the app's labels in
bold are translated the way the app shows them, the same way each time.

If the post needed new copy in `lang/` (it should not: the labels around a
feature post are in `blog.feature`), the English goes in first and the same
agents translate it.

## 6. Social cards and llms.txt

Nothing to add to `config.php` or `/llms.txt`: posts are listed on their own.
Draw the cards, one per locale, and look at them:

```bash
npm run og -- blog-<slug>
```

A feature post's card says "New feature · <year>" above the title instead of
"Blog". A title too long for the card can be shortened for the card alone with
`card: {title: …}` in that locale's front matter.

## 7. Check

1. `npm run build` passes (a missing translation key, a broken front matter or
   a dead link fails it).
2. Open the post in the built-in browser (`npm run serve`, then
   `http://localhost:8000/en/blog/<slug>/`), never in Claude in Chrome. Check:
   the badge, the main screenshot, the numbered steps with their screenshots,
   the links block, a click on a screenshot opening it full screen, the arrows
   and Escape, the post on the blog index, a phone width, dark mode, and one
   other language.
3. Read a sample of every translation for dashes used as punctuation,
   exclamation marks and English left behind.

## 8. Commit

Conventional commits, no AI attribution anywhere, for example
`feat(blog): announce changing the template of a contact`. Open the pull
request only when asked.
