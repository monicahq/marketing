# Monica marketing site: working notes for Claude

Marketing site for **Monica**, the personal CRM. Static [Jigsaw](https://jigsaw.tighten.com) + Tailwind 4 site, built on the Monica design system, shipping in eight languages (English, French, German, Spanish, Portuguese, Dutch, Simplified Chinese and Russian).
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

### The root

`/` has no page of its own, and it is the only URL here whose answer does not come from a file in the build.

Two Cloudflare redirect rules answer it: they read the `Accept-Language` header, which Cloudflare hands to an expression already parsed and sorted by weight as `http.request.accepted_languages`, and 302 to that reader's language, with `defaultLocale` for anyone whose preference we do not publish. They match **both hostnames the site answers on**, `www.monicahq.com` and the apex, and carry `http.host` into the target, so a reader who came to the apex is answered on the apex. Choosing a language is all they do: sending the apex to `www` is a separate decision about the whole domain, and the root is not where to make it. **[`cloudflare/redirect-rules.json`](../cloudflare/redirect-rules.json) is those rules**, and [`redirect-rules.md`](../cloudflare/redirect-rules.md) beside it explains every clause.

Four things follow, and all four are easy to trip over:

- **Nothing in this project runs server-side, and that is the point.** A Cloudflare Pages Function would read the same header in JavaScript, and was the first shape of this, but every hit on `/` would spend a Workers request and bots hit `/` hardest. A redirect the edge makes from zone configuration costs nothing. That is why there is no `functions/` directory and no `_routes.json`.
- **The deploy applies them**, through `scripts/cloudflare/apply-redirect-rules.sh`, which sends the JSON to the zone and then curls the live root to prove the edge answers with it. **Never edit these rules in the dashboard**: the next deploy would put the file's version back. It touches only its own two rules, does nothing when they already match, and needs two secrets, `CLOUDFLARE_RULES_API_TOKEN` (scoped to `Zone > Single Redirect > Edit`) and `CLOUDFLARE_ZONE_ID`. Missing either one fails the deploy.
- **The rules do not list the languages.** Their expressions carry a `{$languages}` marker and the apply script fills it from `lang/`, so a new locale reaches the root by having a copy file. That makes `lang/` load-bearing, so an `afterBuild` listener in `bootstrap.php` checks it against `$locales` in both directions: a stray `lang/it.php` would put Italian in the rules and send those readers to a page that does not exist.
- **Neither rule runs locally or on a preview.** `npm run serve` is a plain PHP file server and `*.pages.dev` is outside the zone, so `/` falls through to the static stub built from `source/index.blade.php`, which only knows how to reach English. That fall-through is deliberate: a mistyped expression leaves the root on a real page rather than nowhere. Checking the real behaviour means checking the live domain:

  ```sh
  curl -sI -H 'Accept-Language: fr-CA,fr;q=0.9' https://www.monicahq.com/ | grep -i location
  ```

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

1. `$locales`, `localeNames` and `ogLocales` in `config.php`, and `languageTags` if the bare code is not the right language tag (as `zh` is not: it is `zh-Hans`).
2. A slug for it on every entry in `routes`.
3. One page file per route under `source/<locale>/`, plus `source/<locale>/blog.blade.php` and `source/<locale>/blog/feed.blade.xml`.
4. Copy `lang/en.php`, translate it. That file is also what puts the language in the root's redirect rules, so there is nothing to do for `/`.
5. A `source/_posts_<locale>/` holding every post. The sitemap lists every post in every locale, so a missing one fails the dead-link check.
6. Its flag in `source/_partials/flag.blade.php`.
7. Regenerate the social cards: add it to `scripts/og/template.html` and `scripts/og/generate.sh`, then `npm run og`.

German runs ~30% longer than English, French ~20%, and Portuguese ~20%. Chinese runs much shorter. Don't pin widths to English label lengths.

### Chinese

Simplified Chinese is the one locale whose code does not say enough on its own, and three things follow from it:

- **The URL prefix is `zh`, the language tag is `zh-Hans`.** A bare `zh` lets a browser draw the page with Traditional or Japanese glyph shapes. `languageTags` in `config.php` maps the one locale that needs it, and `$page->languageTag()` is what `<html lang>`, hreflang (in the head, the sitemap and the locale picker), `inLanguage` and the feed read. Never print `$page->locale` where a language tag is meant.
- **Its slugs are the English ones** (`/zh/pricing/`). A slug in Chinese characters is percent-encoded into something unreadable, and pinyin slugs are rare on Chinese sites.
- **`readingMinutes()` counts Chinese characters on their own**, at 300 a minute, because `str_word_count` sees almost nothing in a language without spaces.

The copy addresses the reader as 你, uses full-width punctuation, and puts a space between Chinese and Latin words or numbers (`Monica 是一个开源的个人 CRM`).

### Russian

- **Its slugs are translated and then transliterated** (`/ru/tseny/`, `/ru/vozmozhnosti/`), because a slug in Cyrillic is percent-encoded into something unreadable, and Latin transliteration is what Russian sites do. The language tag is the bare `ru`.
- **A number never needs a plural form.** Russian has three (1 напоминание, 2 напоминания, 5 напоминаний) and `t()` cannot choose between them, so every string with `:count` is phrased as a label and a number (`Полей: :count`, `Время чтения: :count мин`). Keep it that way when adding one.
- **`readingMinutes()` counts Cyrillic words on their own**, because `str_word_count` only knows Latin letters and would put every Russian post at one minute.

The copy addresses the reader as «вы», lowercase, uses «ёлочки» quotes and writes ё. Monica stays in Latin script, is never declined, and takes feminine agreement (`Monica напомнит`).

## The design system is the authority

`source/_assets/css/design-system/` is vendored verbatim from the v3 design system, `monica-design-system-775829c6-137c-4315-9e1b-8644d7459794`, as the homepage design project (`61528750-b7ae-43b2-bc45-aefec20d3e15`) imports it: `tokens/colors.css`, `tokens/typography.css`, `tokens/shape.css`, `tokens/motion.css`, `base.css` and `components.css`. **Do not edit those files.** Change them in the design project and re-sync. `theme.css` (ours) is the bridge that exposes the tokens to Tailwind.

The design system has its own vocabulary (`--ink`, `--body`, `--hairline`, `--card`, `--identity-1`), declared on `:root`. `theme.css` points the site's utility names at it with `var()` (`--color-text: var(--ink)`) instead of copying values, which is what lets dark mode work without a second set of utilities. Where `theme.css` and the design system declare the same name (`--font-sans`, `--text-caption`, `--text-base`, `--radius-xs`, the three shadows), the two values must be identical, because the design system's copy wins.

Non-negotiable rules, in rough order of how often they get broken:

- **Shadows are tokens, and there are four.** `shadow-panel` (one pixel under a card's hairline), `shadow-nav-active` (the selected row in a segmented control or a sidebar), `shadow-pop` (what genuinely floats: a menu, a tooltip, the chat card, and the drawn windows on the templates, details, reminders, timeline, relationships, vaults, sharing and API pages, which lift off their tinted panels) and `shadow-showcase` (ours, the product picture under the homepage headline, and nothing else). Tailwind's stock shadows stay removed. Never a coloured shadow, and never a shadow on hover.
- **No gradients, no background imagery, no photography.** Flat colour only. The one exception is not ours to flatten: the assistants' own marks on the API page (Claude, OpenAI, Gemini, in `_partials/api/brand.blade.php`) are drawn as each company draws them, Gemini's gradients included. They are inline SVG because OpenAI's is `currentColor` and has to follow dark mode, and they are the only third-party marks on the site. **One illustration family**, deliberately: the pandas, at the foot of every page (by day and by night), behind the homepage headline (`_partials/home/top.blade.php`) and on the rule under the blog index heading (`_partials/blog/index.blade.php`, `assets/images/blog-index/garden.webp`). The last two are light mode only until they have night versions. Nothing else gets one.
- **Two marketing grounds besides the page**: `bg-ground-sage` behind the homepage's agents section, and `bg-ground-cream` for the footer and behind the homepage headline, where it matches the meadow's sky. They are ours, declared at the bottom of `theme.css` with their dark values. Do not add a third. The tinted panels behind the drawings on the templates, details, reminders, timeline, relationships, vaults, sharing and API pages are not grounds: each is an identity colour at 14% (`bg-identity-1/14`), so it follows dark mode on its own.
- **Primary actions are near-black** (`--color-primary`). There is no accent colour: links, focus rings and selection are all near black too. `text-accent` still compiles, and resolves to the link colour.
- **Sentence case everywhere**, including buttons, headings and labels. Uppercase only for 11–12px metadata labels, and applied with the `uppercase` utility so translations stay correct.
- **No emoji**, ever. No exclamation marks, no "Awesome!", no gamification.
- **Hover is subtle and additive**: background, border-colour or text-colour change. Never movement, scale, glow or shadow. Hover is never the only route to an action.
- **Radii are 6 for a control, 8 for a surface, 4 for marks too small for 6.** Fully round is for a badge, a chip and an avatar only. Ordinary buttons are never pills.
- **One font: the system stack.** Nothing is downloaded. `source/_assets/fonts/Inter-Variable.woff2` is still on disk only because the social card template loads it.
- **Every `<img>` carries `width` and `height`**, its file's own pixels, so the browser reserves the box before the bytes arrive and nothing on the page moves. The CSS still does the sizing; the attributes only supply the ratio.
- **`loading="lazy"` below the fold, `fetchpriority="high"` on nothing but the LCP image.** Today no page has an image as its LCP, so nothing carries the hint. When one does, give it to that one image only: handing it to a second tells the browser nothing. The mark in the header is eager because it is in the first screenful of every page; the one in the footer is lazy because it never is.
- **Marketing shows the real product.** No device mockups, browser chrome, stock photography or fabricated screenshots. `_partials/home/product.blade.php` draws the product with the application's own classes and tokens for exactly this reason, and is one `role="img"` with a label, because it is a picture of the interface rather than a working copy. People are drawn with `_partials/avatar-initials.blade.php`, never a generated face.

Voice: address the reader as *you*; Monica refers to itself in the third person. Label actions with verbs ("Add a relationship", not "Create relationship entity"). Relationship direction is always a sentence ("Élise is Marc's partner"), never an arrow.

## Tailwind conventions

Tailwind's stock palette, type scale, radii, fonts and shadows are reset to `initial` in `source/_assets/css/theme.css`. **Every utility that exists came from a design token.** If a class you want doesn't exist, the answer is almost never an arbitrary value. Check whether the design system has a token for it, and add it to `@theme` if so.

- Colour utilities keep the design-system spelling: `text-text-secondary`, `bg-surface-subtle`, `border-border-strong`. Verbose, deliberate, traceable.
- Spacing is 4px-based (`--spacing: 4px`), matching `--space-*`. `p-6` is 24px.
- Marketing rhythm: `py-section-sm lg:py-section` (60px to 88px).
- `mn-*` component classes live in Tailwind's `components` layer, so utilities in markup override them. `class="mn-btn mn-btn-primary w-full"` works. The variants are single-dash (`mn-btn-primary`, `mn-btn-secondary`, `mn-btn-ghost`, `mn-btn-small`), as the v3 design system spells them.
- An `<a class="mn-btn">` carries `no-underline hover:no-underline`, so a button never picks up the link underline whatever the base layer decides next.
- **No `@apply`.** Repeated markup becomes a Blade partial, not a new CSS class.
- **Dark mode follows the reader's system setting**, with no toggle. An inline script in `_partials/color-scheme.blade.php` (included by `_layouts/base.blade.php` and by the 404 page, which has its own head) puts `.dark` on `<html>` from `prefers-color-scheme` before the first paint and follows changes. The design system swaps its own values under `.dark`, and every utility follows because `theme.css` points at them. The colour and shadow tokens are `@theme inline`, so a utility writes the design system's variable itself (`var(--card)`) and resolves it on the element: that is what lets a nested `.dark` (the dark panels on the pricing page) turn just one panel dark. Tailwind's `dark:` variant is redefined in `theme.css` to follow the same class on `<html>` (and only there, so a nested `.dark` panel is not night time), so a `dark:hidden` picture and the colours around it can never disagree. A colour that has to stay the same in both themes (the terminal, the inverse surface) is a fixed value in `theme.css`, not a `var()`. An image that needs a night version uses `<picture>` with a `(prefers-color-scheme: dark)` source, as the footer does.
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
| Templates page                      | `source/_partials/templates/`, one partial per section |
| Details page                        | `source/_partials/details/`, one partial per section |
| Reminders page                      | `source/_partials/reminders/`, one partial per section |
| Timeline page                       | `source/_partials/timeline/`, one partial per section |
| Relationships page                  | `source/_partials/relationships/`, one partial per section |
| Vaults page                         | `source/_partials/vaults/`, one partial per section |
| Sharing page                        | `source/_partials/sharing/`, one partial per section |
| API and MCP page                    | `source/_partials/api/`, one partial per section; the assistants' marks in `api/brand.blade.php` |
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
| Root language redirect              | `cloudflare/redirect-rules.json`, applied by `scripts/cloudflare/apply-redirect-rules.sh` |
| Star count fetch                    | `bootstrap.php`                                     |
| Dead link checking                  | `scripts/links/check.php`, wired up in `bootstrap.php` |
| Locale drift check                  | `bootstrap.php`, against `cloudflare/redirect-rules.json` |
| Design tokens to Tailwind           | `source/_assets/css/theme.css`                      |
| Vendored design system              | `source/_assets/css/design-system/` (do not edit)   |
| Compiled CSS entry                  | `source/_assets/css/main.css`                       |
| Compiled JS entry                   | `source/_assets/js/app.js`                          |
| Icons                               | `source/_partials/icon.blade.php`, the product's own glyphs |
| Avatars (initials)                  | `source/_partials/avatar-initials.blade.php`        |
| Images, OG cards, robots.txt        | `source/assets/`, `source/og/`, `source/robots.txt` |

## SEO and social cards

`source/_partials/seo.blade.php` owns the whole head: title, description, canonical, robots, hreflang, Open Graph, Twitter card and JSON-LD. **A new page gets all of it by extending `_layouts.base` with `locale` and `page` front matter.** Never hand-write a meta tag in a page.

- Every crawler-facing URL is absolute, built from `baseUrl` in `config.production.php`. If the domain changes, that is the first edit, plus the hard-coded line in `source/robots.txt` and the two hostnames in both expressions in `cloudflare/redirect-rules.json`. A production build fails until that third one is done, and the deploy applies it.
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
- **`SoftwareApplication` is only on the two pages that are about buying the product.** Its four offers (monthly, yearly, lifetime, self-hosted) read their prices from `plans` in `config.php`, as bare numbers, because a crawler wants `9.00` and `USD` while a reader wants `$9`. Those two are the only pair on the site that can disagree without anything failing, so **a price change is an edit in `config.php` and, in every `lang/` file, an edit to `pricing.prices`, to `meta.pricing.description` (which names the prices in prose), and to the discount answer in the pricing FAQ (which quotes twelve monthly payments).** No `aggregateRating`: there is no review data, and inventing one is the fastest way to a manual action.
- `scripts/links/check.php` resolves JSON-LD values under the keys in `JSON_LD_URL_KEYS`, which is what checks every breadcrumb `item`. `@id` is deliberately not in that list: it is an identifier spelled like a URL and is never meant to resolve.

Social cards are `source/og/monica-<locale>.png`, one per language, 1200x630. They are generated from `scripts/og/template.html` by `npm run og`, which drives headless Chrome. The PNGs are committed so a build never depends on a browser being installed. **The template mirrors the hero copy by hand**, so when a hero headline changes in `lang/`, update the template and re-run `npm run og`.

The template is opened over `file://`, outside the build, so it resolves the webfont and the panda mark by relative path from `scripts/og/`. Chrome fails those silently: a missing font falls back to a system sans and a missing mark just leaves a gap, in an image nobody looks at until it is on X. Moving either asset means editing the two URLs in the template, and the way to check is to open the output, not to trust the exit code.

## Star count

`bootstrap.php` reads `monicahq/monica` from the GitHub API in a `beforeBuild` listener and writes `starCount` into config, so templates use `$page->starCount`. It floors to the nearest thousand, so 24,956 renders as `24k+`. **Floor, never round**: the `+` promises at least that many.

Failures keep the fallback in `config.php` and print a warning rather than breaking the build. `GITHUB_TOKEN` is read from the environment and only lifts the 60-per-hour unauthenticated rate limit.

## Other conventions

- **Static by default.** Jigsaw outputs files. Nothing runs server-side in production, and the root's language redirect stays that way on purpose: it is zone configuration rather than a Worker, because a Worker would bill a request for every hit on `/`. See "The root" above. Anything that seems to need a Worker needs asking about first.
- **One script, on every page.** `source/_assets/js/app.js` loads three things: [instant.page](https://instant.page) (prefetch on hover), [Turbo Drive](https://turbo.hotwired.dev) (swap `<body>` instead of reloading the document), and [Alpine](https://alpinejs.dev) (the billing toggle on the pricing page and on the homepage, and the pricing page's calculator and FAQ filters, and nothing else). It is on every page because Turbo can only intercept a click from a page already running it, so a page without it is a dead end.
- **Turbo swaps `<body>` and leaves `<head>` and `<html>` alone.** Anything that has to change with the page and lives outside `<body>` will not. That is why the locale picker's links carry `data-turbo="false"`: a Turbo visit across languages would serve French copy in a document still declaring `lang="en"`. Add it to any link or form Turbo has no business handling, such as one posting to somebody else's endpoint.
- **Both prefetchers are on, and they are not interchangeable.** Turbo's own prefetch (on by default since Turbo 8) holds the in-flight fetch in its cache and swaps it into the visit on click, so it is the only one a Turbo visit can consume. instant.page issues `<link rel="prefetch">`, which warms the HTTP cache that an ordinary browser navigation reads, which is what the `data-turbo="false"` locale links do. Turning either off leaves one class of link fetching on click.
- **No `turbo:load` hook re-initialising Alpine.** Turbo replaces the whole `<body>`, which Alpine's own MutationObserver already sees; calling `Alpine.initTree` on top would bind every directive twice. A setup using Turbo's morph refreshes would need the hook, because morph patches nodes in place.
- The FAQ, the features menu in the header and the language menu are native `<details>` and must stay that way. `app.js` adds the one thing `<details>` cannot do, closing on Escape or a click elsewhere, to any `<details data-menu>`. Reach for Alpine only when a native element genuinely cannot do the job, and ask first.
- **Anything Alpine touches is server-rendered in its default state first.** Bind with `x-text` wrapped around real content (`<span x-text="plans[period].price">$90</span>`), never an empty element filled in on load. A control that does nothing without Alpine carries `js-only`, which `_layouts/base.blade.php` hides inside a `<noscript>` block, so a reader without JavaScript is not offered a dead button.
- Alpine state comes from `lang/` through one `json_encode` into `x-data`, so copy never gets hard-coded into an expression. Blade escapes the quotes and the browser decodes them; see `_partials/pricing/plans.blade.php`.
- Class names inside `x-bind:class` are literal strings in the template, so Tailwind's scanner finds them. Building one by concatenation makes it invisible to the scanner and the class silently vanishes from the stylesheet.
- **No new dependencies without asking**, Composer or npm.
- **Marketing copy is the owner's call.** Draft it when asked, but don't rewrite existing headlines, pricing or product claims as a side effect of an unrelated change.

## Known gaps

The homepage, pricing, the v3 teaser, the team page, the blog and the two legal pages exist. The templates page ("Your contacts, your way", route key `templates`) the details page ("Remember the details that matter", route key `details`), the reminders page ("Remember to reach out", route key `reminders`), the timeline page ("Keep the moments worth remembering", route key `timeline`), the relationships page ("Understand how people are connected", route key `relationships`), the vaults page ("A place for each part of your life", route key `vaults`), the sharing page ("Share only what you choose", route key `sharing`) and the API and MCP page ("Your contacts, connected to your tools", route key `api`) exist too. Docs, the MCP and API references, the changelog and a contact address are unbuilt; their links are `#` placeholders in `links` in `config.php`, which the dead link checker lists without failing.

`source/_partials/icon.blade.php` holds the product's own glyphs, copied from the v3 design system. Six (`chevron-left`, `code`, `download`, `panel`, `phone`, `rss`) have no product glyph and are drawn on the same grid; replace them if the product ever draws its own. An unknown name fails the build. Never substitute a third-party icon library; §9.1 of the specification forbids it.

## The blog

`/en/blog/`, ten posts a page, plus a page per post. The 43 posts are Markdown, one file per post per language: most were imported from the old site, and the newest are the rebuild series.

**One collection per locale.** The bodies are translated, so a post is a different file in every language: `source/_posts_en/`, `source/_posts_fr/`, and so on, read by the `posts_en`, `posts_fr`, ... collections that `config.php` builds by looping over `$locales`. Everything else about them (sort order, `perPage`, the helpers) comes from one shared `$postSettings` array, so it cannot drift between languages. One collection per language rather than one with a `locale` field, because Jigsaw's paginator takes a collection and nothing else: it cannot be told to paginate the French eighth of a pile of 344 items, and the French index would otherwise list German posts.

`locale` is a collection setting, so it is stated once per language rather than 39 times, and `$page->locale` is set before `_layouts/post.blade.php` runs. That is what `t()`, the `<html lang>` attribute, the canonical and the hreflang cluster read, and none of them has to know a collection is involved.

**A template that needs the archive names it from the locale**: `$posts = ${'posts_' . $page->lang()}`, in `_layouts/post.blade.php` (for "keep reading"), `_partials/blog/index.blade.php` and `_partials/blog/feed.blade.php`. The sidebar partials are included from the index and inherit `$posts` from it. The sitemap deliberately uses `$posts_en`: slugs are identical across languages, so the English archive is the list of slugs, and a translation missing from one locale becomes a dead-link failure rather than a silent gap.

**The slug does not change between languages.** `/de/blog/life-events/` is the German page. Only `title` and `description` are translated in the front matter; the slug, the date and the author are the same fact in every language's file. That is what lets one `postPath()` serve the canonical, the hreflang cluster, the sitemap and the feed without a per-locale slug table.

**URLs go through `canonicalPath()`.** Three shapes live behind it: an ordinary page named by its route key, the paginated index, and a post. The canonical, the hreflang cluster, the sitemap and the dead-link checker all call it, so they cannot drift apart. `blogPath($locale, $n)` and `postPath($slug, $locale)` are the two building blocks.

**Pagination is Jigsaw's.** Each locale index (`source/<locale>/blog.blade.php`) is four lines of front matter naming its own collection (`posts_fr` on the French one); `perPage` and `prefix` come from the shared settings so they cannot disagree between locales. Templates that reproduce the paginator's arithmetic read `$page->postsPerPage` and `$page->postsPerFeed` instead, so they never have to name a language. Page 2 is `/en/blog/page/2/`, its canonical is itself, and its hreflang points at page 2 in every other language. `$pagination` (the view variable) is the current page; `$page->pagination` is the front-matter block that asked for it, which is a different thing and a trap.

**Dates are timestamps.** YAML reads an unquoted `date: 2018-10-12` as a date and hands it back as ten digits, so anything that displays a date or gives one to a crawler calls `$post->isoDate()`. `readingMinutes()` and `authorInitials()` are collection helpers alongside it.

**`updated` is the one fact about a post that may differ between languages.** It is optional front matter, it feeds `$post->lastmodDate()` and through it the sitemap's `lastmod`, and it falls back to `date` because a post nobody has touched was last modified when it was published. Per locale on purpose: the slug and the date are the same fact in every language, but a French translation corrected on its own should say so without moving the others. Set it only for a change a reader would notice.

**Images go through `bodyHtml()`, never `getContent()`.** It is the rendered Markdown with every `<img>` given its intrinsic `width` and `height` (read off the file with `getimagesize()` at build time), plus `loading="lazy"` and `decoding="async"`. `![alt](src)` is all an author can write, so the alternative is raw `<img>` tags in 344 Markdown files repeating numbers that are already facts about the files on disk. Both the post page and the index card render through it, and `feedContent()` is built on top of it. Lazy on all of them without exception: every image in this collection is inside a post body, under a title, a lede and a byline, and the index carries ten whole posts at once.

**Alt text is per locale and describes the screenshot.** It lives in the Markdown, so it is translated with the body. Say what the screen shows and what state it is in ("the life events tab on a contact, empty, offering to add the first one"), not what the file is. `![image]` is not alt text.

`.mn-prose` in `source/_assets/css/prose.css` styles the rendered Markdown. It is the one place on the site that styles by element rather than by class, because the markup is generated and there is nothing to hang a utility on. Nothing else belongs in that file.

**The feed** is RSS 2.0 at `/<locale>/blog/feed.xml`, the 20 newest posts with their full bodies. `feedContent()` rewrites every `src` and `href` to an absolute URL first, because a feed is read on someone else's host and root-relative markup resolves against that host instead of ours. `rfcDate()` exists because RSS accepts only RFC 2822 dates. `lastBuildDate` is the newest post's date rather than the build's, so rebuilding the site does not tell every reader the feed changed.

Autodiscovery (`rel="alternate" type="application/rss+xml"`) is in `_layouts/base.blade.php`, so it is on every page rather than only the blog: the page someone is on when they decide to subscribe is rarely the index. It points at the current locale's feed. That is safe under Turbo for the same reason `<html lang>` is: the link is identical across a locale, and crossing locales is a full page load because the locale picker carries `data-turbo="false"`.

Posts have no categories: the two the old site used were dropped on import. Adding a post means a Markdown file in **every** `source/_posts_<locale>/` with `title`, `slug`, `date`, `author` and `description` (plus `updated` once it has been changed), and nothing else to register. The same slug and the same date in all of them, the title, the description and the body translated. A post present in one language and missing in another fails the dead-link check, because the sitemap lists it for every locale.

See the [collections docs](https://jigsaw.tighten.com/docs/collections/).

## The features section

`/en/features/` has no page. The route key `features` stays because its slug is the prefix the feature pages nest under (`/en/features/timeline/`), and the header's features menu still links into it while the pages its items describe are written. `pageless` in `config.php` keeps it out of the sitemap.

**The slugs nest**, so `timeline` in English is `features/timeline` and the file is `source/en/features/timeline.blade.php`. The helpers need nothing special for this: they only ever join a slug to a locale prefix. A slug with a slash and a file in a subdirectory are the whole trick.

Each feature page is its own route key with its own partials directory (see the table above), and its breadcrumb is Home then the page itself: there is no Features crumb, because there is no Features page.

## Docs

Full documentation: https://jigsaw.tighten.com/docs

- [Collections](https://jigsaw.tighten.com/docs/collections/)
- [Site variables and helper functions](https://jigsaw.tighten.com/docs/site-variables/)
- [Event listeners](https://jigsaw.tighten.com/docs/event-listeners/)
- [Pretty URLs](https://jigsaw.tighten.com/docs/pretty-urls/)
- [Compiling assets](https://jigsaw.tighten.com/docs/compiling-assets/)
