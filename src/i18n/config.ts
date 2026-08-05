/** The locales the marketing site ships in. */
export const locales = ['en', 'fr', 'de', 'es'] as const;

export type Locale = (typeof locales)[number];

export const defaultLocale: Locale = 'en';

/**
 * Endonyms — each language named in itself, which is what a reader scanning a
 * language menu is looking for. Never translate these.
 */
export const localeNames: Record<Locale, string> = {
  en: 'English',
  fr: 'Français',
  de: 'Deutsch',
  es: 'Español',
};

/**
 * Open Graph wants language_TERRITORY, not a bare language code. `og:locale`
 * with a plain "fr" is ignored by Facebook's scraper, so map it explicitly.
 * hreflang, by contrast, is happy with the bare code and stays as-is.
 */
export const ogLocales: Record<Locale, string> = {
  en: 'en_US',
  fr: 'fr_FR',
  de: 'de_DE',
  es: 'es_ES',
};

export function isLocale(value: string | undefined): value is Locale {
  return locales.includes(value as Locale);
}
