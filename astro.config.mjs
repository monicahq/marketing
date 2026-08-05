// @ts-check
import { defineConfig, envField } from 'astro/config';

import tailwindcss from '@tailwindcss/vite';

import sitemap from '@astrojs/sitemap';

// https://astro.build/config
export default defineConfig({
  // Every canonical URL, hreflang alternate, sitemap entry and og:image URL is
  // built from this. It must match the domain the site is actually served from,
  // or search engines are handed addresses that do not resolve.
  site: 'https://www.monicahq.com',

  // Generated URLs end in a slash (/en/, /fr/tarifs/). Enforcing it means one
  // canonical form per page instead of two that look like duplicate content.
  trailingSlash: 'always',

  i18n: {
    locales: ['en', 'fr', 'de', 'es'],
    defaultLocale: 'en',
    routing: {
      // Every URL carries its locale: /en/… and /fr/… alike. English is not
      // treated as the un-prefixed default.
      prefixDefaultLocale: true,
    },
  },

  // With every locale prefixed, the bare root has nothing to serve. Static
  // builds do not run the SSR locale redirect, so send it on explicitly.
  redirects: {
    '/': '/en/',
  },

  env: {
    schema: {
      // Optional. The star count is read from the GitHub API at build time;
      // without a token that call is limited to 60 requests per hour per IP,
      // which a shared CI runner can exhaust. Setting this raises it to 5,000.
      // Read from the build environment first, then from a local .env file.
      GITHUB_TOKEN: envField.string({
        context: 'server',
        access: 'secret',
        optional: true,
      }),
    },
  },

  vite: {
    plugins: [tailwindcss()],
  },

  integrations: [
    sitemap({
      // Tells the sitemap which URLs are translations of each other, so every
      // entry carries xhtml:link rel="alternate" hreflang annotations. This is
      // the second half of multilingual SEO: the <link> tags in the page head
      // say it, and the sitemap says it again where crawlers look first.
      i18n: {
        defaultLocale: 'en',
        locales: { en: 'en', fr: 'fr', de: 'de', es: 'es' },
      },
      // The bare root is a redirect stub carrying noindex. Listing a page in a
      // sitemap while telling robots not to index it is a contradiction.
      filter: (page) => new URL(page).pathname !== '/',
    }),
  ],
});