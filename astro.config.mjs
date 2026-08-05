// @ts-check
import { defineConfig } from 'astro/config';

import tailwindcss from '@tailwindcss/vite';

// https://astro.build/config
export default defineConfig({
  // Needed for canonical URLs, hreflang alternates and, later, the sitemap.
  site: 'https://www.monicahq.com',

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

  vite: {
    plugins: [tailwindcss()],
  },
});
