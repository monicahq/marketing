# Monica SEO reference

These sheets are generated from the rendered build, not from the live website, so they always describe the pages as they are in this repository. The localized URL structure, the existing H1 headings and the scope of the page content are retained.

<!-- sheets:start -->
| Language | Sheets |
| --- | --- |
| English | [152 pages](en.md) |
| French | [152 pages](fr.md) |
| German | [152 pages](de.md) |
| Spanish | [152 pages](es.md) |
| Portuguese | [152 pages](pt.md) |
| Dutch | [152 pages](nl.md) |
| Simplified Chinese | [152 pages](zh.md) |
| Russian | [152 pages](ru.md) |
<!-- sheets:end -->

## Search and sharing copy

Search titles describe what the page covers and put the subject first, in every language. Titles aim for 60 characters and descriptions for 160, so a search result shows them whole. Every locale translates the English search and sharing copy rather than keeping its own.

Marketing pages have explicit `ogTitle` and `ogDescription` values in their locale dictionary. The translated social copy uses the language and claims of the corresponding page. Legal and other utility pages can use the same wording for search and sharing when a separate hook would add nothing.

Blog posts and handbook articles keep their own titles and summaries. Their social title uses the editorial title without the search title suffix. Blog archive pages after the first page have a localized description with the page number and total, as well as a numbered title.

The H1 headings remain unchanged. Keywords guide the subject of a page; they are not a checklist of exact phrases to insert or an HTML `meta keywords` tag. The targets in [topics.php](../../scripts/seo/topics.php) are editorial choices without search volume or ranking estimates. Branded utility pages have fewer targets. Each editorial article focuses on its own subject rather than a generic CRM query. Additional supporting terms are specified where useful, without a quota for every translation.

## URLs and sharing images

Canonical URLs use the configured production hostname, a language prefix and a trailing slash. They match the page URLs, internal routing, hreflang clusters and sitemap in this branch. This work does not change slugs or add redirects based on differences with production.

Every page has its own sharing card in every language, `/og/<key>-<locale>.jpg`, drawn from the `meta.<key>.ogImage` copy in `lang/<locale>.php` by `npm run og`. Every handbook article and every blog post has one too, `/og/handbook-<slug>-<locale>.jpg` and `/og/blog-<slug>-<locale>.jpg`, drawn from its front matter. The later pages of the blog index share the first page's card. Every card measures 1200 by 630 pixels. See `.claude/CLAUDE.md`, "Social cards".

## Structured data

Every indexable page has an Organization, WebSite and page node. The page type is CollectionPage for indexes, AboutPage for the team and about pages, ContactPage for support, and WebPage otherwise. BreadcrumbList is present where the page has a parent.

SoftwareApplication identifies the same Monica application on the homepage, pricing page and the three product landing pages for personal data management, AI memory and MCP. Prices come from the branch configuration. Individual feature pages and editorial articles do not repeat this node. No ratings or reviews are invented.

Blog posts have BlogPosting, and handbook articles have Article. Both include the existing author, summary, language, sharing image and modification date. Only blog posts have a publication date. The handbook update date is not treated as its original publication date.

The SEO changes describe the content of this branch. They do not change feature availability or certify an application release. Existing functional claims remain owned by the corresponding page copy and product implementation.

## Regeneration and checks

Run these commands in order after editing content or metadata:

```sh
npm run build
npm run seo:report
```

The production build runs the existing link, canonical, hreflang and sitemap checks, followed by the SEO checks. The sheets are exported from the rendered HTML after those checks pass. The export also rewrites the page counts in the table above, between its two comment markers. Do not edit the generated sheets or that table by hand.

`npm run seo:check` checks an existing production build without regenerating the sheets. It validates titles, descriptions, H1 counts, canonicals, OG fields, actual sharing image dimensions, JSON syntax, required schema types, unresolved translation placeholders and agreement with the sitemap. It does not call the production website or external services.

Search and sharing copy is maintained in `lang/<locale>.php`. Rendering and schema are maintained in `source/_partials/seo.blade.php`. The exporter and metadata checks live in `scripts/seo/check.php`.

The build still reports three existing placeholder destinations: `links.selfHostingGuide`, `links.contactSales` and `links.docsGuidelines`. These destinations need real URLs before their links are ready to use. They are separate from the SEO metadata checks.
