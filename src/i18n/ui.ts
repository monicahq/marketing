import { en, type Dictionary } from './content/en';
import { fr } from './content/fr';
import { de } from './content/de';
import { es } from './content/es';
import type { Locale } from './config';

/**
 * Every locale's copy, keyed by locale. Each translation file is annotated
 * `: Dictionary`, so `astro check` fails on a missing, extra, or misspelled key
 * instead of shipping a page with a blank section.
 */
export const ui: Record<Locale, Dictionary> = { en, fr, de, es };

/** Copy for one locale. */
export function useTranslations(locale: Locale): Dictionary {
  return ui[locale];
}
