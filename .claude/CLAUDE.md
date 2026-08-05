# Monica marketing site: working notes for Claude

Marketing site for **Monica**, the personal CRM. Static Astro 7 + Tailwind 4 site, built on the Monica design system, shipping in four languages.
The owner is not an Astro expert, so explain Astro-specific choices briefly, and prefer boring, idiomatic Astro over clever setups.

## Guidelines for Git and GitHub

- You MUST create a new branch when doing a new task, unless stated otherwise, based off of main branch. Make sure main is always up-to-date.
- Branch names MUST be of the format YYYY-MM-DD-{name}.
- You MUST follow conventional commits for commit messages.
- You MUST NOT mention Claude Code in PR descriptions, PR comments, or issue comments.
- You MUST NOT add any AI attribution anywhere. No `Co-Authored-By` trailer, no `Claude-Session` line, no "generated with" footer. This applies to commit messages, PR descriptions, comments, and code comments, with no exceptions.

## Writing style

Never use dashes (— or -) as punctuation in documentation or README files. Rephrase sentences using periods, commas, or parentheses instead.

## Development

Start the dev server in background mode:

```
astro dev --background
```

Manage it with `astro dev stop`, `astro dev status`, `astro dev logs`. Don't run `npm run dev` in the foreground. It blocks.

Before claiming a change works: `npx astro check` (typechecks the translation dictionaries too) and `npm run build`. Content-collection and routing errors often only surface at build time.

## The design system is the authority

`src/styles/design-system/` is vendored verbatim from the Claude Design project
`8711a85c-8b75-4074-a0b4-ff23d508475c`. **Do not edit those files.** Change them in the design project and re-sync. `theme.css` (ours) is the bridge that exposes the tokens to Tailwind.

Non-negotiable rules from the design system, in rough order of how often they get broken:

- **No box shadows, anywhere.** Not on buttons, dropdowns, dialogs, sticky headers or hover states. Hierarchy comes from 1px borders, surface contrast, whitespace and type. The shadow utilities are removed from the Tailwind theme, so `shadow-*` simply does not exist.
- **No gradients, no background imagery, no illustration, no photography.** Flat colour only.
- **Primary actions are near-black** (`--color-primary`), never accent blue. The accent is functional only: links, focus rings, selection.
- **Sentence case everywhere**, including buttons, headings and labels. Uppercase only for 11–12px metadata labels, and applied with the `uppercase` utility so translations stay correct.
- **No emoji**, ever. No exclamation marks, no "Awesome!", no gamification.
- **Hover is subtle and additive**: background, border-colour or text-colour change. Never movement, scale, glow or shadow. Hover is never the only route to an action.
- **Radii top out at 8px** on standard surfaces. Ordinary buttons are never pills.
- **Marketing shows the real product.** No device mockups, browser chrome, stock photography or fabricated screenshots. `ContactCard.astro` is built from the application's own `mn-*` classes for exactly this reason.

Voice: address the reader as *you*; Monica refers to itself in the third person. Label actions with verbs ("Add a relationship", not "Create relationship entity"). Relationship direction is always a sentence ("Élise is Marc's partner"), never an arrow.

## Tailwind conventions

Tailwind's stock palette, type scale, radii, fonts and shadows are reset to `initial` in `src/styles/theme.css`. **Every utility that exists came from a design token.** If a class you want doesn't exist, the answer is almost never an arbitrary value. Check whether the design system has a token for it, and add it to `@theme` if so.

- Colour utilities keep the design-system spelling: `text-text-secondary`, `bg-surface-subtle`, `border-border-strong`. Verbose, deliberate, traceable.
- Spacing is 4px-based (`--spacing: 4px`), matching `--space-*`. `p-6` is 24px.
- Marketing rhythm: `py-section-sm lg:py-section` (60px → 88px). Use the `Section.astro` component rather than reapplying it.
- `mn-*` component classes live in Tailwind's `components` layer, so utilities in markup override them. `class="mn-btn mn-btn--primary w-full"` works.
- An `<a class="mn-btn">` needs `no-underline hover:no-underline`, because the design system's base layer underlines links on hover.
- **No `@apply`.** Repeated markup becomes an Astro component, not a new CSS class.

## Internationalization

Four locales: `en`, `fr`, `de`, `es`. **Every URL is locale-prefixed, English included** (`/en/`, `/fr/`), and slugs are translated per locale (`/fr/tarifs`, not `/fr/pricing`).

- All copy lives in `src/i18n/content/<locale>.ts`. **Never hard-code a user-visible string in a component.** If you add a string, add it to all four dictionaries.
- `en.ts` defines the shape; the others are typed `: Dictionary`, so a missing key fails `astro check`. That check is the safety net, so run it.
- Paths come from `path(pageKey, locale)` in `src/i18n/routes.ts`. Never build a URL by string concatenation.
- German runs ~30% longer than English and French ~20%. Don't pin widths to English label lengths.

### Adding a page

Slugs differ per locale, so a page cannot be a plain filename. Add its key and four slugs to `routes.ts`, then generate one path per locale:

```astro
---
// src/pages/[locale]/[pricing].astro  →  /en/pricing, /fr/tarifs, /de/preise, /es/precios
import { locales } from '../../i18n/config';
import { routes } from '../../i18n/routes';

export const getStaticPaths = () =>
  locales.map((locale) => ({ params: { locale, pricing: routes.pricing[locale] } }));
---
```

### Adding a locale

1. `locales` and `localeNames` in `src/i18n/config.ts`.
2. `locales` in `astro.config.mjs`.
3. A slug for it on every entry in `src/i18n/routes.ts`.
4. Copy `content/en.ts`, translate, register it in `ui.ts`.
5. Its flag in `src/components/Flag.astro`.

Then `astro check` lists every key still missing.

## Where things go

| What                                | Where                                       |
| :---------------------------------- | :------------------------------------------ |
| Homepage sections                   | `src/components/home/`                      |
| Shared UI (Container, Section, Icon)| `src/components/`                           |
| Page shell, `<head>`, hreflang      | `src/layouts/BaseLayout.astro`              |
| Copy                                | `src/i18n/content/<locale>.ts`              |
| Routes and translated slugs         | `src/i18n/routes.ts`                        |
| External links                      | `src/config.ts`                             |
| GitHub star count                   | `src/lib/github.ts`                         |
| Design tokens → Tailwind            | `src/styles/theme.css`                      |
| Vendored design system              | `src/styles/design-system/` (do not edit)   |
| Images, webfont                     | `src/assets/`                               |
| Blog posts                          | `src/data/blog/*.md` (once set up)          |

## SEO and social cards

`src/components/Seo.astro` owns the whole head: title, description, canonical, robots, hreflang, Open Graph, Twitter card, and JSON-LD. **A new page gets all of it by rendering through `BaseLayout` with a `page` key.** Never hand-write a meta tag in a page.

- Every URL is absolute, built from `site` in `astro.config.mjs`. Crawlers do not resolve relative ones. If the domain changes, that one value is the only edit.
- hreflang is emitted for all four locales **including the current one**. Reciprocity is what makes the cluster credible; dropping the self-reference breaks it.
- `x-default` points at English, for readers whose language is none of ours.
- `og:locale` needs `language_TERRITORY` (`fr_FR`), not a bare code. The map is `ogLocales` in `src/i18n/config.ts`. hreflang uses the bare code, so the two differ on purpose.
- The sitemap is generated by `@astrojs/sitemap`, configured with `i18n` so every entry carries `xhtml:link` hreflang annotations. The bare `/` redirect is filtered out: listing a `noindex` page in a sitemap contradicts itself.
- `public/robots.txt` hard-codes the sitemap URL. Update it if `site` changes.
- The 404 (`src/pages/404.astro`) sits outside `BaseLayout` on purpose. It has no canonical, no hreflang and no sitemap entry, and it carries `noindex`.

Social cards live in `public/og/monica-<locale>.png`, one per language, 1200x630. They are generated from `scripts/og/template.html` by `npm run og`, which drives headless Chrome. The PNGs are committed so a build never depends on a browser being installed. **The template mirrors the hero copy by hand**, so when the hero headline changes in `src/i18n/content/`, update the template and re-run `npm run og`.

Known limitation: `astro preview` returns 404 for `/sitemap-index.xml` even though the file is in `dist/`. It is a preview-server quirk, not a build problem. Serve `dist/` with any static server to check it.

## Star count

`src/lib/github.ts` reads `monicahq/monica` from the GitHub API during the build and floors it to the nearest thousand, so 24,956 renders as `24k+`. **Floor, never round**: the `+` promises at least that many.

Failures fall back to a hard-coded value and log a warning rather than breaking the build. The result is memoized at module scope so the four locale pages share one request. `GITHUB_TOKEN` is an optional secret declared through `astro:env` in `astro.config.mjs`; it only lifts the 60-per-hour unauthenticated rate limit.

## The blog

Not built. It needs Astro content collections: `src/content.config.ts` declaring a collection with the `glob` loader from `astro/loaders` and a zod schema, Markdown under `src/data/blog/`, and a `src/pages/[locale]/blog/[...id].astro` route using `getCollection` and `render` from `astro:content`.

Current API, which older examples online get wrong: the config lives at `src/content.config.ts` (not `src/content/config.ts`), entries are keyed by `id` (not `slug`), and you render with `const { Content } = await render(post)` (not `post.render()`). Posts also need a locale dimension, either a schema field or one folder per language.

## Deploying

`npm run build` produces a fully static `dist/`. No Node process in production. `site` in `astro.config.mjs` drives canonical URLs and the hreflang alternates, so it must match the real domain.

## Other conventions

- **Static by default.** No SSR, no adapters, no server endpoints unless the task genuinely requires them. Say so first if you think it does.
- **Zero JS unless asked.** The homepage currently ships none: the FAQ and the language menu are native `<details>`. Prefer that, then a plain `<script>`, then (only with the owner's agreement) a UI framework.
- **No new dependencies without asking.** Use `npx astro add <x>` for official integrations so config is wired correctly.
- **Marketing copy is the owner's call.** Draft it when asked, but don't rewrite existing headlines, pricing or product claims as a side effect of an unrelated change.

## Known gaps

Only the homepage exists. Pricing, features, docs, the v3 teaser and the blog are unbuilt; their nav links are the design's `#` placeholders in `src/config.ts`. The star count is read live from the GitHub API at build time (`src/lib/github.ts`), so it refreshes only on a rebuild. The icons in `src/components/Icon.astro` are the design system's placeholder geometry. Monica's real repository SVGs were never supplied and must replace them behind the same API. Never substitute a third-party icon library; §9.1 of the specification forbids it.

## Docs

Full documentation: https://docs.astro.build

- [Routing and dynamic routes](https://docs.astro.build/en/guides/routing/)
- [Astro components](https://docs.astro.build/en/basics/astro-components/)
- [Internationalization](https://docs.astro.build/en/guides/internationalization/)
- [Content collections](https://docs.astro.build/en/guides/content-collections/). This API changed in Astro 5; older examples online are wrong
- [Styling and Tailwind](https://docs.astro.build/en/guides/styling/)
- [Images](https://docs.astro.build/en/guides/images/)
