import { locales, type Locale } from './config';

/**
 * Every URL is locale-prefixed and every slug is translated:
 * `/en/pricing`, `/fr/tarifs`, `/de/preise`, `/es/precios`.
 *
 * A page is referenced by its key, never by a hard-coded path, so a slug can be
 * corrected in one place without hunting through markup. The homepage has an
 * empty slug in every locale, which makes it `/en/`, `/fr/`, and so on.
 *
 * To add a page: add its key here with a slug per locale, then create
 * `src/pages/[locale]/<the-english-slug>.astro`… except Astro routes on the
 * file name, so a translated slug needs a dynamic route. See CLAUDE.md.
 */
export const routes = {
  home: { en: '', fr: '', de: '', es: '' },
} as const satisfies Record<string, Record<Locale, string>>;

export type PageKey = keyof typeof routes;

/** Build the path for a page in a locale, e.g. `path('home', 'fr')` → `/fr/`. */
export function path(page: PageKey, locale: Locale): string {
  const slug = routes[page][locale];
  return slug ? `/${locale}/${slug}/` : `/${locale}/`;
}

/** The same page in every locale — for the language menu and hreflang tags. */
export function alternates(page: PageKey): { locale: Locale; path: string }[] {
  return locales.map((locale) => ({ locale, path: path(page, locale) }));
}
