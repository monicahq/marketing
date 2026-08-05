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
- Adding a page means adding a key + four slugs to `routes.ts` and a `getStaticPaths` that maps locale → slug. See the README.
- German runs ~30% longer than English and French ~20%. Don't pin widths to English label lengths.

## Where things go

| What                                | Where                                       |
| :---------------------------------- | :------------------------------------------ |
| Homepage sections                   | `src/components/home/`                      |
| Shared UI (Container, Section, Icon)| `src/components/`                           |
| Page shell, `<head>`, hreflang      | `src/layouts/BaseLayout.astro`              |
| Copy                                | `src/i18n/content/<locale>.ts`              |
| Routes and translated slugs         | `src/i18n/routes.ts`                        |
| Star count, external links          | `src/config.ts`                             |
| Design tokens → Tailwind            | `src/styles/theme.css`                      |
| Vendored design system              | `src/styles/design-system/` (do not edit)   |
| Images, webfont                     | `src/assets/`                               |
| Blog posts                          | `src/data/blog/*.md` (once set up)          |

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
