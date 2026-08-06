# Monica marketing site: working notes for Claude

Marketing site for **Monica**, the personal CRM. Static [Jigsaw](https://jigsaw.tighten.com) + Tailwind 4 site, built on the Monica design system, shipping in five languages.
The owner is not a Jigsaw expert, so explain Jigsaw-specific choices briefly, and prefer boring, idiomatic Jigsaw over clever setups.

## Guidelines for Git and GitHub

- You MUST create a new branch when doing a new task, unless stated otherwise, based off of main branch. Make sure main is always up-to-date.
- Branch names MUST be of the format YYYY-MM-DD-{name}.
- You MUST follow conventional commits for commit messages.
- You MUST NOT mention Claude Code in PR descriptions, PR comments, or issue comments.
- You MUST NOT add any AI attribution anywhere. No `Co-Authored-By` trailer, no `Claude-Session` line, no "generated with" footer. This applies to commit messages, PR descriptions, comments, and code comments, with no exceptions.

## Testing locally

- Do not test anything with claude in chrome.

## Writing style

Never use dashes (— or -) as punctuation in documentation or README files. Rephrase sentences using periods, commas, or parentheses instead.

## Development

Jigsaw renders Blade to static HTML. PHP builds the site; it never runs in production.

```
npm run dev      # rebuild on change, compile CSS (leave running)
npm run serve    # serve build_local at localhost:8000
npm run build    # production build into build_production/
npm run links    # check build_production/ for dead links
```

**Vite must run before Jigsaw.** Templates call `vite('source/_assets/css/main.css')`, which reads the manifest, so a bare `vendor/bin/jigsaw build` fails with "The Vite manifest does not exist". The npm scripts handle the ordering: the Jigsaw Vite plugin spawns the Jigsaw build itself.

Before claiming a change works, run `npm run build` and check the output in `build_production/`. There is no type checker here, so a missing translation key surfaces as a build-time exception rather than a warning.

### Dead links

`scripts/links/check.php` runs after every build, from an `afterBuild` listener in `bootstrap.php`. It reads the build output rather than the templates, so it sees the URLs a reader actually gets.

It **fails a production build and only warns on a local one**. A page in progress legitimately links to things nobody has written yet, and a watch loop that refuses to rebuild is a watch loop nobody keeps running. Nothing reaches the web without `npm run build`, so that is where it is strict. `.github/workflows/ci.yml` runs a production build on every pull request, which is what turns a dead link into a red cross.

What it checks, all of it against the files on disk and none of it over the network:

- Every `href`, `src`, `form` action, social tag and JSON-LD URL resolves to a file the build wrote. Absolute URLs on our own domain count, so a hand-built canonical is checked like any other link.
- Fragments (`#open-source`) name an id that exists on the page they land on.
- Canonicals are self-referential, hreflang clusters are reciprocal, and the sitemap and the build agree in both directions. `noindex` is what decides whether a page belongs in the sitemap, which is why the root redirect stub and `404.html` are exempt without being special-cased.
- Relative URLs are an error in themselves, because `route()` and `absolute()` never produce one.

Two things it deliberately does **not** do. External hosts are counted and left alone: they are the only URLs that need the network, and the only ones that fail for reasons unrelated to this repository. And `#` placeholders are reported with the `config.php` keys still missing a destination, but never fail anything, because they are a launch checklist rather than a regression.

## How the languages work

Jigsaw has **no locale routing**, so it is built by hand and lives in two places: `config.php` and the file tree.

- **One directory per locale.** `source/en/index.blade.php`, `source/fr/index.blade.php`, and so on. The filename is the slug, so a French pricing page is literally `source/fr/tarifs.blade.php`. Each page file is front matter plus an `@extends`, nothing more.
- **Every page declares `locale` and `page` in its front matter.** Everything else follows: the copy, the canonical URL, the hreflang cluster.
- **Every URL is locale-prefixed, English included** (`/en/`, `/fr/`), and slugs are translated per locale (`/fr/tarifs/`, never `/fr/pricing/`).

### Copy

All text lives in `lang/<locale>.php`, plain PHP arrays. **Never hard-code a user-visible string in a template.** If you add a string, add it to every `lang/` file.

Read it with `$page->t('hero.title')`, which takes a dot path and returns strings or arrays. Placeholders are `:colon` style: `$page->t('nav.stars', [':count' => $page->starCount])`.

`lang/en.php` is the canonical shape. A key missing from another locale throws during the build, naming the key and the locale, which is the safety net that replaced TypeScript's compile-time check.

### URLs

Three helpers, and the distinction matters:

| Helper | Returns | Use for |
| :--- | :--- | :--- |
| `$page->localePath('home', 'fr')` | `/fr/` | building block |
| `$page->route('home', 'fr')` | `/fr/` | `href` in markup |
| `$page->absolute('/fr/')` | `https://…/fr/` | canonical, hreflang, og:url, sitemap |

**Never build a URL by string concatenation**, and never wrap `route()` in `absolute()`: `route()` is already root-relative, so doing both produced a doubled domain once already.

### Adding a page

1. Add its key and one slug per locale to `routes` in `config.php`.
2. Create one Blade file per locale, named after that locale's slug.
3. Add its copy to every `lang/` file.
4. Add its key to the `lastmod` map in `config.php`. The sitemap throws without it.

### Adding a locale

1. `$locales`, `localeNames` and `ogLocales` in `config.php`.
2. A slug for it on every entry in `routes`.
3. Copy `lang/en.php`, translate it.
4. Its flag in `source/_partials/flag.blade.php`.
5. Regenerate the social cards: add it to `scripts/og/template.html` and `scripts/og/generate.sh`, then `npm run og`.

German runs ~30% longer than English, French ~20%, and Portuguese ~20%. Don't pin widths to English label lengths.

## The design system is the authority

`source/_assets/css/design-system/` is vendored verbatim from the Claude Design project `8711a85c-8b75-4074-a0b4-ff23d508475c`. **Do not edit those files.** Change them in the design project and re-sync. `theme.css` (ours) is the bridge that exposes the tokens to Tailwind.

Non-negotiable rules, in rough order of how often they get broken:

- **No box shadows, anywhere.** Not on buttons, dropdowns, dialogs, sticky headers or hover states. Hierarchy comes from 1px borders, surface contrast, whitespace and type. The shadow utilities are removed from the Tailwind theme, so `shadow-*` simply does not exist.
- **No gradients, no background imagery, no illustration, no photography.** Flat colour only.
- **Primary actions are near-black** (`--color-primary`), never accent blue. The accent is functional only: links, focus rings, selection.
- **Sentence case everywhere**, including buttons, headings and labels. Uppercase only for 11–12px metadata labels, and applied with the `uppercase` utility so translations stay correct.
- **No emoji**, ever. No exclamation marks, no "Awesome!", no gamification.
- **Hover is subtle and additive**: background, border-colour or text-colour change. Never movement, scale, glow or shadow. Hover is never the only route to an action.
- **Radii top out at 8px** on standard surfaces. Ordinary buttons are never pills.
- **Marketing shows the real product.** No device mockups, browser chrome, stock photography or fabricated screenshots. `_partials/home/contact-card.blade.php` is built from the application's own `mn-*` classes for exactly this reason.

Voice: address the reader as *you*; Monica refers to itself in the third person. Label actions with verbs ("Add a relationship", not "Create relationship entity"). Relationship direction is always a sentence ("Élise is Marc's partner"), never an arrow.

## Tailwind conventions

Tailwind's stock palette, type scale, radii, fonts and shadows are reset to `initial` in `source/_assets/css/theme.css`. **Every utility that exists came from a design token.** If a class you want doesn't exist, the answer is almost never an arbitrary value. Check whether the design system has a token for it, and add it to `@theme` if so.

- Colour utilities keep the design-system spelling: `text-text-secondary`, `bg-surface-subtle`, `border-border-strong`. Verbose, deliberate, traceable.
- Spacing is 4px-based (`--spacing: 4px`), matching `--space-*`. `p-6` is 24px.
- Marketing rhythm: `py-section-sm lg:py-section` (60px to 88px).
- `mn-*` component classes live in Tailwind's `components` layer, so utilities in markup override them. `class="mn-btn mn-btn--primary w-full"` works.
- An `<a class="mn-btn">` needs `no-underline hover:no-underline`, because the design system's base layer underlines links on hover.
- **No `@apply`.** Repeated markup becomes a Blade partial, not a new CSS class.
- Tailwind scans Blade through the `@source` lines at the bottom of `main.css`. A new template directory outside `source/` needs adding there or its classes get stripped.

## Templates

Plain Blade with `@include`, not Blade components. Jigsaw's view finder resolves anonymous components under `source/components/`, a directory that would then be built into output, so partials are the safe path.

Partials take data through the `@include` array: `@include('_partials.icon', ['name' => 'star', 'size' => 16])`. Underscore-prefixed directories are never written to the build.

## Where things go

| What                                | Where                                              |
| :---------------------------------- | :------------------------------------------------- |
| Page shell, `<head>`                | `source/_layouts/base.blade.php`                    |
| SEO, Open Graph, JSON-LD            | `source/_partials/seo.blade.php`                    |
| Homepage sections                   | `source/_partials/home/`                            |
| Features tabs                       | `source/_partials/features/`, screenshots in `source/assets/images/features/` |
| Shared partials (icon, flag, header)| `source/_partials/`                                 |
| Locale pages                        | `source/<locale>/`                                  |
| Blog posts                          | `source/_posts_<locale>/` (Markdown), images in `source/assets/images/blog/` |
| Blog templates                      | `source/_layouts/post.blade.php`, `source/_partials/blog/` |
| Blog post body styling              | `source/_assets/css/prose.css`                      |
| Blog RSS feed                       | `source/_partials/blog/feed.blade.php`, `source/<locale>/blog/feed.blade.xml` |
| Terms and privacy policy            | `source/_partials/legal/document.blade.php`, copy in `lang/<locale>.php` |
| Copy                                | `lang/<locale>.php`                                 |
| Routes, helpers, links, locales     | `config.php`                                        |
| Production domain                   | `config.production.php`                             |
| Star count fetch                    | `bootstrap.php`                                     |
| Dead link checking                  | `scripts/links/check.php`, wired up in `bootstrap.php` |
| Design tokens to Tailwind           | `source/_assets/css/theme.css`                      |
| Vendored design system              | `source/_assets/css/design-system/` (do not edit)   |
| Compiled CSS entry                  | `source/_assets/css/main.css`                       |
| Compiled JS entry                   | `source/_assets/js/app.js`                          |
| Fonts                               | `source/_assets/fonts/`                             |
| Images, OG cards, robots.txt        | `source/assets/`, `source/og/`, `source/robots.txt` |

## SEO and social cards

`source/_partials/seo.blade.php` owns the whole head: title, description, canonical, robots, hreflang, Open Graph, Twitter card and JSON-LD. **A new page gets all of it by extending `_layouts.base` with `locale` and `page` front matter.** Never hand-write a meta tag in a page.

- Every crawler-facing URL is absolute, built from `baseUrl` in `config.production.php`. If the domain changes, that is the only edit, plus the hard-coded line in `source/robots.txt`.
- hreflang is emitted for every locale **including the current one**. Reciprocity is what makes the cluster credible.
- `og:locale` needs `language_TERRITORY` (`fr_FR`), from `ogLocales`. hreflang uses the bare code, so the two differ on purpose.
- `source/sitemap.blade.xml` builds the sitemap by walking `routes` and `locales`, with `xhtml:link` hreflang annotations. It is named `.blade.xml` so Jigsaw writes `sitemap.xml` rather than `sitemap.html`. Its XML declaration is echoed as a string, because a literal `<?xml` would be parsed as a PHP open tag.
- **`lastmod` is hand-kept, never the build date.** Three sources, one per family of URL: an ordinary page reads the `lastmod` map in `config.php` (via `$page->lastmodFor($key)`, which throws on a key with no entry), a post reads `$post->lastmodDate()`, and a page of the blog index reads the newest post it lists. Nothing derives it from a file's mtime or from the deploy, because a sitemap that claims every page changed on every deploy teaches a crawler to ignore the field. Move a date when the copy changes in a way a reader would notice, not for a refactor behind identical text.
- `source/index.blade.php` and `source/404.blade.php` both set an explicit `permalink`, because pretty URLs would otherwise write them to `index/index.html` and `404/index.html`. Both carry `noindex`, and neither is in the sitemap.

### The JSON-LD graph

One `@graph` per page, whose nodes reference each other by `@id` instead of repeating themselves. Two of them are site-wide and keep a fixed `@id` on every page in every locale (`/#organization`, `/#website`), so a crawler reading fifty pages sees one organisation rather than fifty. The rest are per page and hang their `@id` off the canonical, which is unique by construction.

| Node | Where | `@id` |
| :--- | :--- | :--- |
| `Organization` | every page | `/#organization` |
| `WebSite` | every page | `/#website` |
| `WebPage` | every page | `<canonical>#webpage` |
| `BreadcrumbList` | any page with more than one crumb | `<canonical>#breadcrumb` |
| `SoftwareApplication` | homepage and pricing | `/#software` |
| `BlogPosting` | posts | `<canonical>#post` |

- **The `WebPage` type is chosen per page**: `CollectionPage` for the blog index, `AboutPage` for the team page, `WebPage` for everything else including a post, which carries its `BlogPosting` alongside rather than instead.
- **The breadcrumb trail is built from the route key**, and its labels are `meta.breadcrumb.*` in `lang/`, one per route key, kept apart from `nav` because a nav label is written to be scanned and a crumb is read out in a search result. The homepage gets no trail: a single crumb states that the root is the root.
- **`SoftwareApplication` is only on the two pages that are about buying the product.** Its three offers read their prices from `plans` in `config.php`, as bare numbers, because a crawler wants `9.00` and `USD` while a reader wants `$9`. Those two are the only pair on the site that can disagree without anything failing, so **a price change is an edit in `config.php` and an edit in five `lang/` files.** No `aggregateRating`: there is no review data, and inventing one is the fastest way to a manual action.
- `scripts/links/check.php` resolves JSON-LD values under the keys in `JSON_LD_URL_KEYS`, which is what checks every breadcrumb `item`. `@id` is deliberately not in that list: it is an identifier spelled like a URL and is never meant to resolve.

Social cards are `source/og/monica-<locale>.png`, one per language, 1200x630. They are generated from `scripts/og/template.html` by `npm run og`, which drives headless Chrome. The PNGs are committed so a build never depends on a browser being installed. **The template mirrors the hero copy by hand**, so when a hero headline changes in `lang/`, update the template and re-run `npm run og`.

The template is opened over `file://`, outside the build, so it resolves the webfont and the panda mark by relative path from `scripts/og/`. Chrome fails those silently: a missing font falls back to a system sans and a missing mark just leaves a gap, in an image nobody looks at until it is on X. Moving either asset means editing the two URLs in the template, and the way to check is to open the output, not to trust the exit code.

## Star count

`bootstrap.php` reads `monicahq/monica` from the GitHub API in a `beforeBuild` listener and writes `starCount` into config, so templates use `$page->starCount`. It floors to the nearest thousand, so 24,956 renders as `24k+`. **Floor, never round**: the `+` promises at least that many.

Failures keep the fallback in `config.php` and print a warning rather than breaking the build. `GITHUB_TOKEN` is read from the environment and only lifts the 60-per-hour unauthenticated rate limit.

## Other conventions

- **Static by default.** Jigsaw outputs files. Nothing runs server-side in production.
- **One script, on every page.** `source/_assets/js/app.js` loads three things: [instant.page](https://instant.page) (prefetch on hover), [Turbo Drive](https://turbo.hotwired.dev) (swap `<body>` instead of reloading the document), and [Alpine](https://alpinejs.dev) (the pricing page's billing toggle, and nothing else). It is on every page because Turbo can only intercept a click from a page already running it, so a page without it is a dead end.
- **Turbo swaps `<body>` and leaves `<head>` and `<html>` alone.** Anything that has to change with the page and lives outside `<body>` will not. That is why the locale picker's links carry `data-turbo="false"`: a Turbo visit across languages would serve French copy in a document still declaring `lang="en"`. The same attribute is on the v3 launch-list form, which posts to somebody else's endpoint. Add it to any link or form Turbo has no business handling.
- **Both prefetchers are on, and they are not interchangeable.** Turbo's own prefetch (on by default since Turbo 8) holds the in-flight fetch in its cache and swaps it into the visit on click, so it is the only one a Turbo visit can consume. instant.page issues `<link rel="prefetch">`, which warms the HTTP cache that an ordinary browser navigation reads, which is what the `data-turbo="false"` locale links do. Turning either off leaves one class of link fetching on click.
- **No `turbo:load` hook re-initialising Alpine.** Turbo replaces the whole `<body>`, which Alpine's own MutationObserver already sees; calling `Alpine.initTree` on top would bind every directive twice. A setup using Turbo's morph refreshes would need the hook, because morph patches nodes in place.
- The FAQ and the language menu are still native `<details>` and must stay that way. Reach for Alpine only when a native element genuinely cannot do the job, and ask first.
- **Anything Alpine touches is server-rendered in its default state first.** Bind with `x-text` wrapped around real content (`<span x-text="plans[period].price">$90</span>`), never an empty element filled in on load. A control that does nothing without Alpine carries `js-only`, which `_layouts/base.blade.php` hides inside a `<noscript>` block, so a reader without JavaScript is not offered a dead button.
- Alpine state comes from `lang/` through one `json_encode` into `x-data`, so copy never gets hard-coded into an expression. Blade escapes the quotes and the browser decodes them; see `_partials/pricing/plans.blade.php`.
- Class names inside `x-bind:class` are literal strings in the template, so Tailwind's scanner finds them. Building one by concatenation makes it invisible to the scanner and the class silently vanishes from the stylesheet.
- **No new dependencies without asking**, Composer or npm.
- **Marketing copy is the owner's call.** Draft it when asked, but don't rewrite existing headlines, pricing or product claims as a side effect of an unrelated change.

## Known gaps

The homepage, the three features pages, pricing, the v3 teaser, the team page, the blog and the two legal pages exist. Docs are unbuilt; that nav link is the design's `#` placeholder in `config.php`. The icons in `source/_partials/icon.blade.php` are the design system's placeholder geometry. Monica's real repository SVGs were never supplied and must replace them behind the same include. Never substitute a third-party icon library; §9.1 of the specification forbids it.

## The blog

`/en/blog/`, ten posts a page, plus a page per post. The 39 posts are the ones imported from the old site, Markdown, one file per post per language.

**One collection per locale.** The bodies are translated, so a post is a different file in every language: `source/_posts_en/`, `source/_posts_fr/`, and so on, read by the `posts_en`, `posts_fr`, ... collections that `config.php` builds by looping over `$locales`. Everything else about them (sort order, `perPage`, the helpers) comes from one shared `$postSettings` array, so it cannot drift between languages. Five collections rather than one with a `locale` field, because Jigsaw's paginator takes a collection and nothing else: it cannot be told to paginate the French tenth of a pile of 195 items, and the French index would otherwise list German posts.

`locale` is a collection setting, so it is stated once per language rather than 39 times, and `$page->locale` is set before `_layouts/post.blade.php` runs. That is what `t()`, the `<html lang>` attribute, the canonical and the hreflang cluster read, and none of them has to know a collection is involved.

**A template that needs the archive names it from the locale**: `$posts = ${'posts_' . $page->lang()}`, in `_layouts/post.blade.php` (for "keep reading"), `_partials/blog/index.blade.php` and `_partials/blog/feed.blade.php`. The sidebar partials are included from the index and inherit `$posts` from it. The sitemap deliberately uses `$posts_en`: slugs are identical across languages, so the English archive is the list of slugs, and a translation missing from one locale becomes a dead-link failure rather than a silent gap.

**The slug does not change between languages.** `/de/blog/life-events/` is the German page. Only `title` and `description` are translated in the front matter; the slug, the date and the author are the same fact in five files. That is what lets one `postPath()` serve the canonical, the hreflang cluster, the sitemap and the feed without a per-locale slug table.

**URLs go through `canonicalPath()`.** Three shapes live behind it: an ordinary page named by its route key, the paginated index, and a post. The canonical, the hreflang cluster, the sitemap and the dead-link checker all call it, so they cannot drift apart. `blogPath($locale, $n)` and `postPath($slug, $locale)` are the two building blocks.

**Pagination is Jigsaw's.** Each locale index (`source/<locale>/blog.blade.php`) is four lines of front matter naming its own collection (`posts_fr` on the French one); `perPage` and `prefix` come from the shared settings so they cannot disagree between locales. Templates that reproduce the paginator's arithmetic read `$page->postsPerPage` and `$page->postsPerFeed` instead, so they never have to name a language. Page 2 is `/en/blog/page/2/`, its canonical is itself, and its hreflang points at page 2 in every other language. `$pagination` (the view variable) is the current page; `$page->pagination` is the front-matter block that asked for it, which is a different thing and a trap.

**Dates are timestamps.** YAML reads an unquoted `date: 2018-10-12` as a date and hands it back as ten digits, so anything that displays a date or gives one to a crawler calls `$post->isoDate()`. `readingMinutes()` and `authorInitials()` are collection helpers alongside it.

**`updated` is the one fact about a post that may differ between languages.** It is optional front matter, it feeds `$post->lastmodDate()` and through it the sitemap's `lastmod`, and it falls back to `date` because a post nobody has touched was last modified when it was published. Per locale on purpose: the slug and the date are the same fact in five files, but a French translation corrected on its own should say so without moving the other four. Set it only for a change a reader would notice.

`.mn-prose` in `source/_assets/css/prose.css` styles the rendered Markdown. It is the one place on the site that styles by element rather than by class, because the markup is generated and there is nothing to hang a utility on. Nothing else belongs in that file.

**The feed** is RSS 2.0 at `/<locale>/blog/feed.xml`, the 20 newest posts with their full bodies. `feedContent()` rewrites every `src` and `href` to an absolute URL first, because a feed is read on someone else's host and root-relative markup resolves against that host instead of ours. `rfcDate()` exists because RSS accepts only RFC 2822 dates. `lastBuildDate` is the newest post's date rather than the build's, so rebuilding the site does not tell every reader the feed changed.

Autodiscovery (`rel="alternate" type="application/rss+xml"`) is in `_layouts/base.blade.php`, so it is on every page rather than only the blog: the page someone is on when they decide to subscribe is rarely the index. It points at the current locale's feed. That is safe under Turbo for the same reason `<html lang>` is: the link is identical across a locale, and crossing locales is a full page load because the locale picker carries `data-turbo="false"`.

Posts have no categories: the two the old site used were dropped on import. Adding a post means a Markdown file in **every** `source/_posts_<locale>/` with `title`, `slug`, `date`, `author` and `description` (plus `updated` once it has been changed), and nothing else to register. The same slug and the same date in all five, the title, the description and the body translated. A post present in one language and missing in another fails the dead-link check, because the sitemap lists it for every locale.

See the [collections docs](https://jigsaw.tighten.com/docs/collections/).

## The features pages

Three tabs (contact management, dashboard, journal), three route keys (`features`, `featuresDashboard`, `featuresJournal`), fifteen pages once the five locales are counted.

**The tabs are pages, not a JavaScript widget.** Each one has its own URL, so it can be linked to, indexed and translated, which is what the old site did. `_partials/features/tabs.blade.php` renders the strip on all three, and `aria-current="page"` marks the one being read.

**The slugs nest**, so `featuresDashboard` in English is `features/dashboard` and the file is `source/en/features/dashboard.blade.php`. The helpers need nothing special for this: they only ever join a slug to a locale prefix. A slug with a slash and a file in a subdirectory are the whole trick.

**One partial builds all three.** `_partials/features/page.blade.php` holds a table of which copy block, which screenshot and whether the API section follows, keyed by the route name, so each of the fifteen page files is four lines of front matter and an `@include`.

The screenshots came from the old site and were cropped on the way in: the browser window drawn around each one, and the drop shadow behind it, are both things the design system forbids. The annotations that were pinned onto them as red labels are now an ordinary list beside the picture, which is what makes them survive a phone, a screen reader and a translation running longer than English.

## Docs

Full documentation: https://jigsaw.tighten.com/docs

- [Collections](https://jigsaw.tighten.com/docs/collections/)
- [Site variables and helper functions](https://jigsaw.tighten.com/docs/site-variables/)
- [Event listeners](https://jigsaw.tighten.com/docs/event-listeners/)
- [Pretty URLs](https://jigsaw.tighten.com/docs/pretty-urls/)
- [Compiling assets](https://jigsaw.tighten.com/docs/compiling-assets/)
