# Monica Marketing Site

The public marketing site for **Monica**, the personal CRM: landing pages and, later, the blog.

Built with [Astro](https://astro.build) and [Tailwind CSS](https://tailwindcss.com), on top of the Monica design system, in four languages.

**This README assumes you have never used Astro.** It starts from an empty machine and walks through installing, running, editing and deploying. Skip to [Everyday tasks](#everyday-tasks) once you're set up.

---

## Contents

1. [What you need installed](#1-what-you-need-installed)
2. [Running the site for the first time](#2-running-the-site-for-the-first-time)
3. [What just happened](#3-what-just-happened)
4. [Making your first change](#4-making-your-first-change)
5. [How Astro works](#5-how-astro-works)
6. [A tour of the folders](#6-a-tour-of-the-folders)
7. [Everyday tasks](#everyday-tasks)
8. [The design system](#the-design-system)
9. [Tailwind and the design tokens](#tailwind-and-the-design-tokens)
10. [Languages and URLs](#languages-and-urls)
11. [What isn't built yet](#what-isnt-built-yet)
12. [Adding the blog](#adding-the-blog)
13. [Adding interactivity](#adding-interactivity)
14. [Deploying](#deploying)
15. [Troubleshooting](#troubleshooting)
16. [Glossary](#glossary)

---

## 1. What you need installed

Just **Node.js version 22.12 or newer**. Node is the program that runs JavaScript outside a browser; Astro is written in JavaScript, so Node is what actually builds your site.

Check whether you already have it:

```sh
node -v
```

If that prints something like `v22.15.1`, you're done, so skip ahead. If it says "command not found", or prints a version below 22.12, install it:

**macOS**, with [Homebrew](https://brew.sh):

```sh
brew install node
```

**Any platform**: download the LTS installer from [nodejs.org](https://nodejs.org).

**If you juggle several Node versions**, use [nvm](https://github.com/nvm-sh/nvm) instead:

```sh
nvm install 22
nvm use 22
```

Installing Node also installs **npm**, the tool that downloads the project's dependencies. Verify both:

```sh
node -v    # v22.12.0 or higher
npm -v     # any recent version is fine
```

You do *not* need to install Astro globally. It comes with the project.

---

## 2. Running the site for the first time

From the project folder:

```sh
npm install
```

This reads `package.json`, downloads everything the project depends on into a `node_modules/` folder, and takes a minute or two the first time. You only run it again when dependencies change (after a `git pull` that touched `package.json`, for example).

`node_modules/` is large and disposable. It's already in `.gitignore`, so never commit it. If anything ever gets weird, deleting it and re-running `npm install` is a safe reset.

Then start the site:

```sh
npm run dev
```

You'll see something like:

```
 astro  v7.1.6 ready in 312 ms

┃ Local    http://localhost:4321/
┃ Network  use --host to expose
```

Now open that address in a browser:

```sh
open http://localhost:4321                      # default browser, macOS
open -a Firefox http://localhost:4321           # Firefox
open -a "Google Chrome" http://localhost:4321   # Chrome
```

On Linux use `xdg-open http://localhost:4321`; on Windows, `start http://localhost:4321`. Or simply copy the address into your browser's address bar.

You should land on the Monica homepage.

**To stop the server**, press `Ctrl+C` in the terminal where it's running.

---

## 3. What just happened

`npm run dev` started a **development server**, a small web server running on your own machine at `localhost:4321`. Nobody else can see it. `localhost` means "this computer"; `4321` is the port number Astro uses by default.

Three things worth knowing:

**The URL redirects.** `http://localhost:4321/` immediately sends you to `/en/`. That's deliberate: every page on this site carries its language in the URL, English included. The four pages that exist today are:

| URL                         | Page              |
| :-------------------------- | :---------------- |
| `http://localhost:4321/en/` | Homepage, English |
| `http://localhost:4321/fr/` | Homepage, French  |
| `http://localhost:4321/de/` | Homepage, German  |
| `http://localhost:4321/es/` | Homepage, Spanish |

**It reloads itself.** Edit any file under `src/` and save, and the browser updates within a second. No refresh, no restart, no build step. This is the main reason to use the dev server.

**It is not the real site.** The dev server is optimised for fast feedback, not for what visitors get. To see the genuine article, see [Checking the production build](#checking-the-production-build) below.

### Running it in the background

`npm run dev` takes over the terminal. To keep using the same shell, start it detached instead:

```sh
npx astro dev --background     # start it
npx astro dev status           # is it running? where?
npx astro dev logs             # what has it printed?
npx astro dev stop             # stop it
```

### Checking the production build

```sh
npm run build      # writes the real static site into dist/
npm run preview    # serves dist/ at http://localhost:4321
```

`npm run build` produces plain HTML, CSS and images in `dist/`. That folder *is* the website. `npm run preview` serves it so you can check it locally. Always do this before deploying: some problems (a missing translation, a broken image path) only appear in a real build.

### All the commands

| Command             | What it does                                          |
| :------------------ | :---------------------------------------------------- |
| `npm install`       | Downloads dependencies. Run once, then after a `git pull` |
| `npm run dev`       | Development server with live reload                    |
| `npm run build`     | Builds the production site into `dist/`                |
| `npm run preview`   | Serves the built `dist/` locally                       |
| `npx astro check`   | Checks types. **This is what catches a missing translation** |

Get in the habit of running `npx astro check` after editing anything in `src/i18n/`.

---

## 4. Making your first change

Let's change the big headline on the homepage, so you can see where things live.

**1.** Make sure `npm run dev` is running and the page is open in your browser.

**2.** Open `src/i18n/content/en.ts`. Find:

```ts
hero: {
  eyebrow: 'The open-source personal CRM',
  title: 'Remember the people you care about.',
```

**3.** Change `title` to anything, save the file, and look at your browser. It updated already.

**4.** Now open `src/i18n/content/fr.ts` and change the French `title` too, then visit `http://localhost:4321/fr/`.

That's the most important thing to learn about this repo: **all visible text lives in `src/i18n/content/`, never inside a component.** If you go looking for a headline in the HTML, you won't find it. You'll find `{t.hero.title}`, which means "the `hero.title` entry from this page's language".

Try the same with `src/components/home/Hero.astro`. That file has the *structure* (a heading, two paragraphs, two buttons) and no words at all.

---

## 5. How Astro works

Five ideas. If you know HTML, you already know most of it.

**1. It produces plain HTML.**
Astro runs your code at build time and writes out ordinary HTML files. Visitors download HTML and CSS, with no framework runtime and nothing to boot up. This homepage ships **zero JavaScript**: even the FAQ accordion and the language menu are built with the browser's native `<details>` element.

**2. Files in `src/pages/` become URLs.**
The file path *is* the route. There's no router to configure and no list of pages to register.

| File                                   | URL                        |
| :------------------------------------- | :------------------------- |
| `src/pages/about.astro`                | `/about`                   |
| `src/pages/features/import.astro`      | `/features/import`         |
| `src/pages/[locale]/index.astro`       | `/en/`, `/fr/`, `/de/`, `/es/` |

Square brackets mean a **dynamic route**: one file that generates several pages. Our homepage is one file that produces four pages, one per language.

**3. A `.astro` file has two halves.**

```astro
---
// Frontmatter. TypeScript. Runs at BUILD TIME, on your machine.
// It never reaches the browser. Import things, prepare data here.
const plans = ['Free', 'Pro'];
---

<!-- Template. HTML, with {} to drop values in. -->
<h1 class="text-display-md font-semibold">Choose a plan</h1>
<ul>
  {plans.map((plan) => <li>{plan}</li>)}
</ul>
```

The three dashes are the divider. Everything above them is code that runs once, when the site is built. Everything below is markup.

**4. Components are just `.astro` files you import.**
They take **props** (values passed in, like HTML attributes) and can wrap content via `<slot />`. They are not React: no state, no hooks, nothing re-renders. They're templates that run once. Props are declared with an `interface Props` block so the editor can check them:

```astro
---
interface Props { title: string; }
const { title } = Astro.props;
---
<h2>{title}</h2>
```

Used as `<MyComponent title="Pricing" />`.

**5. Layouts are components that wrap a whole page.**
`src/layouts/BaseLayout.astro` holds the `<html>`, the `<head>`, the announcement bar, the header and the footer. Every page imports it and drops its content inside.

That's the entire model. [Full documentation](https://docs.astro.build).

---

## 6. A tour of the folders

```text
/
├── public/                     Copied as-is to the site root (favicon, robots.txt…)
├── src/
│   ├── assets/                 Images + the bundled Inter font. Astro optimizes these.
│   ├── components/
│   │   ├── home/               The homepage's sections, one file each
│   │   └── *.astro             Shared pieces: Container, Section, Icon, SiteHeader…
│   ├── i18n/                   ← ALL TEXT LIVES HERE
│   │   ├── config.ts           The four locales
│   │   ├── routes.ts           Page key → translated slug per locale
│   │   ├── ui.ts               Locale → dictionary
│   │   └── content/            en.ts, fr.ts, de.ts, es.ts
│   ├── layouts/
│   │   └── BaseLayout.astro    The page shell: <head>, header, footer
│   ├── pages/
│   │   └── [locale]/index.astro  The homepage route
│   ├── styles/
│   │   ├── global.css          The single stylesheet entry point
│   │   ├── theme.css           Design tokens → Tailwind utilities
│   │   └── design-system/      Vendored from the design project. Don't edit.
│   └── config.ts               Star count, external links
├── astro.config.mjs            Site config: languages, redirects, Tailwind
├── package.json                Dependencies and the npm run … commands
└── dist/                       Build output. Generated, never edited, not committed.
```

**`public/` vs `src/assets/`**, the one distinction that trips everyone up:

- `public/` is copied byte-for-byte to the output. Reference with an absolute URL: `/favicon.svg`. Use it for files that need a fixed, predictable address.
- `src/assets/` is *imported in code*. Astro compresses, resizes, converts to WebP and fingerprints the filename for caching. Use it for anything displayed on a page.

---

## Everyday tasks

### Change some text

`src/i18n/content/en.ts`, and the matching key in `fr.ts`, `de.ts`, `es.ts`. Then:

```sh
npx astro check
```

`en.ts` defines the shape of the dictionary; the other three are checked against it. If you add a key to English and forget German, this command tells you, with the file and line. **It is the safety net for translations, so use it.**

Text that includes a number or a name is a small function rather than a string with a placeholder:

```ts
stars: (count: string) => `${count} stars`,
```

### Change a colour, a size, or spacing

Don't hard-code a value in a component. Open `src/styles/theme.css` and change the token. Everything using it follows. See [Tailwind and the design tokens](#tailwind-and-the-design-tokens).

### Change a link

`src/config.ts`. Several links are still `#` placeholders because those pages don't exist yet.

### The GitHub star count

You don't set it. `src/lib/github.ts` reads it from the GitHub API during `npm run build` and floors it to the nearest thousand, so 24,956 displays as `24k+`. It's flooring rather than rounding on purpose: the `+` promises "at least this many", so rounding up would be a claim the repository can't back.

Because the site is static, the figure is fixed at build time. Flooring keeps it truthful for months, but it only moves when you rebuild. If you want it to track more closely, point a scheduled deploy hook at your host.

Two things it handles on its own:

- **If GitHub is unreachable**, the build prints a warning and falls back to a hard-coded value rather than failing. A marketing site should never miss a deploy because an API timed out.
- **All four locale pages share one request**, not four, because the result is memoized at module scope.

Optionally set `GITHUB_TOKEN` in the build environment. Unauthenticated calls are limited to 60 per hour per IP, which is plenty for one build but is shared with every other tenant on a CI runner. A token raises the ceiling to 5,000. It's declared as an optional secret in `astro.config.mjs`, so Astro reads it from the environment first and from a local `.env` file second.

### Add a section to the homepage

1. Create `src/components/home/MySection.astro`, modelled on an existing one. Most start with `<Section>` and take a `locale` prop.
2. Add its text to all four files in `src/i18n/content/`.
3. Import it in `src/pages/[locale]/index.astro` and place it in the list.

### Add a whole new page

Slugs are translated per language, so a page can't just be a filename. Two steps:

**1.** Add the page and its four slugs to `src/i18n/routes.ts`:

```ts
export const routes = {
  home: { en: '', fr: '', de: '', es: '' },
  pricing: { en: 'pricing', fr: 'tarifs', de: 'preise', es: 'precios' },
} as const satisfies Record<string, Record<Locale, string>>;
```

**2.** Create a route that generates one URL per locale:

```astro
---
// src/pages/[locale]/[pricing].astro
import { locales } from '../../i18n/config';
import { routes } from '../../i18n/routes';

export const getStaticPaths = () =>
  locales.map((locale) => ({
    params: { locale, pricing: routes.pricing[locale] },
  }));
---
```

That produces `/en/pricing`, `/fr/tarifs`, `/de/preise`, `/es/precios`.

Link to it with `path('pricing', locale)` from `src/i18n/routes.ts`. Never write the URL out by hand. That's how half-translated links happen.

`getStaticPaths` is Astro's way of asking "which pages should this one file produce?" It returns a list, and Astro builds one HTML page per entry.

---

## The design system

The homepage is a faithful implementation of `Homepage.dc.html` from the [Monica design system](https://claude.ai/design/p/8711a85c-8b75-4074-a0b4-ff23d508475c). Its rules aren't decoration. They're the product's identity, and they're easy to break by accident:

- **No box shadows. Anywhere.** Hierarchy comes from one-pixel borders, surface contrast, whitespace and type. The shadow utilities are removed from the Tailwind theme, so `shadow-lg` is a build error rather than a code-review comment.
- **No gradients, no background imagery, no illustration, no photography.** Flat colour only.
- **Primary actions are near-black**, never accent blue. The blue is functional only: links, focus rings, selection.
- **Sentence case everywhere.** Uppercase only for 11–12px metadata labels.
- **No emoji.** No exclamation marks. No "Awesome!".
- **Marketing shows the real product.** The contact card in the "Everything about someone" section is built from the same `mn-*` classes the application itself uses. Not a screenshot, not a device mockup.

`src/styles/design-system/` is vendored straight from the design project. **Don't edit those files**: change them at the source and re-sync, or your edits vanish on the next update.

---

## Tailwind and the design tokens

Tailwind lets you style in the markup, writing `class="mt-6 text-copy text-text-secondary"` instead of CSS in a separate file. `mt-6` is margin-top, `text-copy` is a font size, and so on.

The twist here: `src/styles/theme.css` declares every design token inside Tailwind's `@theme` block, which turns each one into a utility class.

| Token in `theme.css`     | Class you write        | Actual value |
| :----------------------- | :--------------------- | :----------- |
| `--color-surface-subtle` | `bg-surface-subtle`    | #F8F8F8      |
| `--color-text-secondary` | `text-text-secondary`  | #525252      |
| `--text-display-xl`      | `text-display-xl`      | 56px         |
| `--radius-lg`            | `rounded-lg`           | 8px          |
| `--container-marketing`  | `max-w-marketing`      | 1200px       |

Tailwind's stock palette, type scale, radii, fonts and shadows are **reset to nothing**. If a class exists, it came from a design token. There is no `bg-blue-500` to reach for by accident. Spacing is 4px-based to match the design system's scale, so `p-6` is exactly 24px.

To change a colour everywhere, edit the token. To add one, add it to `@theme`, and it becomes a utility.

Class names starting `mn-` (`mn-btn`, `mn-avatar`, `mn-timeline`) are the design system's own component CSS. They're loaded into Tailwind's `components` layer, which means utilities still override them: `class="mn-btn mn-btn--primary w-full"` works.

One gotcha: an `<a>` styled as a button needs `no-underline hover:no-underline`, because the design system underlines links on hover.

---

## Languages and URLs

Four locales ship today: **English, French, German, Spanish**. Every URL carries its locale, English included:

```
/            → redirects to /en/
/en/         English homepage
/fr/         French homepage
/de/         German homepage
/es/         Spanish homepage
```

Slugs are translated too, so a future pricing page is `/fr/tarifs` and never `/fr/pricing`. The map lives in `src/i18n/routes.ts`.

### Adding a fifth language

1. Add it to `locales` and `localeNames` in `src/i18n/config.ts`.
2. Add it to `locales` in `astro.config.mjs`.
3. Add its slug to every entry in `src/i18n/routes.ts`.
4. Copy `content/en.ts` to `content/<locale>.ts`, translate it, register it in `ui.ts`.
5. Add its flag to `src/components/Flag.astro`.

Then run `npx astro check`. It lists every key you still owe.

---

## What isn't built yet

- **The blog.** Content collections aren't set up. See the next section.
- **Every page except the homepage**: pricing, features, documentation, the Monica v3 teaser. Their nav links are the design's `#` placeholders, collected in `src/config.ts`.
- **Real destinations** for sign-in, get-started and the docs. Also `src/config.ts`.
- **The star count** is live, but frozen at build time. It refreshes only when the site is rebuilt.
- **The icons** are the design system's placeholder geometry. Monica's real repository SVGs were never supplied. See the note at the top of `src/components/Icon.astro`.

---

## Adding the blog

Astro's tool for this is **content collections**: a folder of Markdown files plus a schema that validates each post's frontmatter, so a typo in a date fails the build instead of the page.

**1. Declare the collection** in `src/content.config.ts`

```ts
import { defineCollection } from 'astro:content';
import { glob } from 'astro/loaders';
import { z } from 'astro/zod';

const blog = defineCollection({
  loader: glob({ pattern: '**/*.md', base: './src/data/blog' }),
  schema: z.object({
    title: z.string(),
    description: z.string(),
    pubDate: z.coerce.date(),
  }),
});

export const collections = { blog };
```

**2. Write posts** in `src/data/blog/staying-in-touch.md`

```markdown
---
title: 'How to actually stay in touch'
description: 'Reminders beat willpower.'
pubDate: 2026-08-04
---

Your post, in Markdown.
```

**3. Render them** in `src/pages/[locale]/blog/[...id].astro`

```astro
---
import { getCollection, render } from 'astro:content';

export async function getStaticPaths() {
  const posts = await getCollection('blog');
  return posts.map((post) => ({ params: { id: post.id }, props: { post } }));
}

const { post } = Astro.props;
const { Content } = await render(post);
---

<article>
  <h1>{post.data.title}</h1>
  <Content />
</article>
```

You'll also want `src/pages/[locale]/blog/index.astro` listing posts sorted by `pubDate`. Posts also need a language dimension: either a `locale` field in the schema, or one folder per language under `src/data/blog/`.

⚠️ This API changed in Astro 5. Most examples you'll find online use the old `src/content/config.ts` path and `post.render()`, both of which are wrong now. Trust [the official guide](https://docs.astro.build/en/guides/content-collections/).

---

## Adding interactivity

Most of a marketing site needs none, and this one currently uses none. When you do, reach for the cheapest option first:

1. **A `<details>` element.** Accordions and dropdown menus, free, accessible, keyboard-operable, no JavaScript. The FAQ and the language menu both work this way.
2. **A `<script>` tag** inside the `.astro` file. Bundled automatically. Enough for most of the rest.
3. **A framework component** (React, Svelte, Vue) via `npx astro add react`, marked with a *client directive*:

```astro
<PricingToggle client:load />    <!-- load its JavaScript immediately -->
<Testimonials client:visible />  <!-- load it when scrolled into view -->
```

Without a `client:*` directive, the component renders to static HTML and ships no JavaScript at all. This is Astro's "islands" model: interactive bits are isolated islands in a sea of static HTML. Adding a framework is a real decision, so check before you do.

---

## Deploying

```sh
npm run build
```

That writes a fully static `dist/` folder, deployable to Netlify, Vercel, Cloudflare Pages, S3 or any plain web server. No Node process required in production.

`site` in `astro.config.mjs` is set to `https://www.monicahq.com`. It drives canonical URLs and the `hreflang` tags that tell search engines about the four translations, so update it if the domain changes.

Always run `npm run preview` first and click through all four languages.

[Deploy guides](https://docs.astro.build/en/guides/deploy/)

---

## Troubleshooting

**`command not found: npm`**
Node isn't installed, or isn't on your PATH. Go back to [step 1](#1-what-you-need-installed).

**`Cannot find package 'astro'` or similar**
You skipped `npm install`, or dependencies changed. Run `npm install`.

**Port 4321 is already in use**
Something is already running there, probably a dev server you forgot about. Either `npx astro dev stop`, or pick another port: `npm run dev -- --port 3000`.

**The page is blank, or a whole section is missing**
Check the terminal running the dev server; Astro prints errors there, with the file and line. Also check the browser's developer console (`Cmd+Option+I` / `F12`).

**A Tailwind class does nothing**
It probably doesn't exist. The stock palette and type scale are deliberately removed, so `bg-blue-500` and `text-2xl` are not available. Use a design token class, or add the token to `src/styles/theme.css`.

**`npx astro check` reports errors about `fr.ts` / `de.ts` / `es.ts`**
Working as intended: you added or renamed a key in `en.ts` without updating the others. The message names the missing key.

**Edits don't show up**
Confirm the dev server is still running and that you saved the file. If it's genuinely stuck, `Ctrl+C` and `npm run dev` again.

**Everything is broken after a `git pull`**
```sh
rm -rf node_modules
npm install
```

---

## Glossary

| Term | What it means |
| :--- | :------------ |
| **Node.js** | Runs JavaScript outside a browser. Astro needs it to build the site. |
| **npm** | Installs the project's dependencies; also runs the `npm run …` commands. |
| **dependency** | Third-party code the project uses, listed in `package.json`, downloaded into `node_modules/`. |
| **dev server** | The local preview at `localhost:4321` that reloads as you edit. |
| **build** | Turning the source into finished HTML/CSS in `dist/`. |
| **static site** | Pages generated ahead of time, not per visitor. Fast and cheap to host. |
| **frontmatter** | The block between `---` fences at the top of a `.astro` or `.md` file. |
| **component** | A reusable `.astro` file. |
| **props** | Values passed into a component, like HTML attributes. |
| **slot** | Where a component places the content wrapped inside it. |
| **layout** | A component that wraps a whole page. |
| **route** | A URL the site serves, determined by a file's path in `src/pages/`. |
| **dynamic route** | One file with `[brackets]` in its name that generates several pages. |
| **locale** | A language: `en`, `fr`, `de`, `es`. |
| **slug** | The readable part of a URL: `tarifs` in `/fr/tarifs`. |
| **design token** | A named design value (a colour, a size) defined once and reused everywhere. |
| **utility class** | A Tailwind class doing one thing: `mt-6`, `text-copy`. |
| **TypeScript** | JavaScript with type checking. It catches a missing translation before a visitor does. |

---

## Working with Claude Code

Project conventions for AI assistance live in [`.claude/CLAUDE.md`](.claude/CLAUDE.md). `AGENTS.md` points other tools at the same file.
