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

export function isLocale(value: string | undefined): value is Locale {
  return locales.includes(value as Locale);
}
