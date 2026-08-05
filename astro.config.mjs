// @ts-check
import { defineConfig, envField } from 'astro/config';

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
});
