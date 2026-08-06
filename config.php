<?php

use Illuminate\Support\Arr;

/**
 * Site configuration and the helper functions every template uses.
 *
 * Anything declared here as a closure becomes a method on $page, called with
 * the page as its first argument: `$page->t('hero.title')` runs the 't' closure
 * below. That is Jigsaw's extension point, and it is where the four-language
 * behaviour lives, because Jigsaw has no locale routing of its own.
 */

$locales = ['en', 'fr', 'de', 'es'];

return [
    'baseUrl' => '',
    'production' => false,
    'pretty' => true,
    'trailing_slash' => true,
    'collections' => [],

    // ---------------------------------------------------------------- locales

    'locales' => $locales,
    'defaultLocale' => 'en',

    /** Each language named in itself, which is what a reader scans a menu for. */
    'localeNames' => [
        'en' => 'English',
        'fr' => 'Français',
        'de' => 'Deutsch',
        'es' => 'Español',
    ],

    /**
     * Open Graph wants language_TERRITORY. A bare "fr" is ignored by Facebook's
     * scraper. hreflang is happy with the bare code and keeps using it, so the
     * two deliberately differ.
     */
    'ogLocales' => [
        'en' => 'en_US',
        'fr' => 'fr_FR',
        'de' => 'de_DE',
        'es' => 'es_ES',
    ],

    /**
     * Every URL is locale-prefixed and every slug is translated. A page is
     * referenced by its key, never by a hard-coded path, so a slug can be
     * corrected in one place.
     *
     * Adding a page means adding a key here plus one Blade file per locale
     * named after that locale's slug. See .claude/CLAUDE.md.
     */
    'routes' => [
        'home' => ['en' => '', 'fr' => '', 'de' => '', 'es' => ''],

        // "v3" is the product's version number, so it is the same word in every
        // language. Slugs are still declared per locale, because the next page
        // added will not be.
        'v3' => ['en' => 'v3', 'fr' => 'v3', 'de' => 'v3', 'es' => 'v3'],

        'pricing' => ['en' => 'pricing', 'fr' => 'tarifs', 'de' => 'preise', 'es' => 'precios'],
    ],

    // ------------------------------------------------------------------ links

    /**
     * ⚠️ The '#' entries are placeholders carried over from the design. They
     * need real destinations before launch: the application does not live at a
     * URL this repository knows about yet.
     */
    'links' => [
        'github' => 'https://github.com/monicahq/monica',
        'signIn' => '#',
        'getStarted' => '#',
        'createAccount' => '#',
        'selfHost' => '#',
        'selfHostingGuide' => '#',
        'docs' => '#',
        'api' => '#',
        'blog' => '#',
        'privacy' => '#',

        /**
         * Where the v3 launch-list form posts. The site is static, so this has
         * to be somebody else's endpoint: a form host, a newsletter provider,
         * or a small function elsewhere. Until it has one, the form is inert.
         */
        'launchList' => '#',
    ],

    /** Replaced during the build by bootstrap.php, which reads the real count. */
    'starCount' => '24k+',

    'year' => date('Y'),

    // ---------------------------------------------------------------- helpers

    /**
     * Copy for the current page's locale, by dot path:
     * `$page->t('hero.title')`, `$page->t('nav.stars', [':count' => '24k+'])`.
     * Arrays come back as plain arrays, ready for @foreach.
     *
     * The dictionaries are required here rather than declared as a config key,
     * because Jigsaw wraps nested config arrays in IterableObject. Loading them
     * directly keeps them plain, which is what templates expect.
     */
    't' => function ($page, string $key, array $replace = []) {
        static $dictionaries = [];

        $locale = $page->locale;
        $dictionaries[$locale] ??= require __DIR__ . "/lang/{$locale}.php";

        $value = Arr::get($dictionaries[$locale], $key);

        if ($value === null) {
            throw new Exception("Missing translation [{$key}] for locale [{$locale}].");
        }

        if (! $replace) {
            return $value;
        }

        /**
         * Placeholders are filled at every depth, not just on a bare string.
         * A FAQ answer is a list of paragraphs and a plan is a nested array, so
         * substituting only the top level silently shipped a literal ":count"
         * to the page once already.
         */
        $fill = function ($value) use (&$fill, $replace) {
            if (is_array($value)) {
                return array_map($fill, $value);
            }

            return is_string($value) ? strtr($value, $replace) : $value;
        };

        return $fill($value);
    },

    /**
     * The site-root path for a page in a locale, with no baseUrl:
     * `$page->localePath('home', 'fr')` is /fr/, `pricing` in fr is /fr/tarifs/.
     * This is the building block; templates normally want `route` or `absolute`.
     */
    'localePath' => function ($page, string $key, ?string $locale = null) {
        $locale = $locale ?: $page->locale;
        $slug = $page->routes[$key][$locale];

        return $slug ? "/{$locale}/{$slug}/" : "/{$locale}/";
    },

    /**
     * An href for a link in the markup. Root-relative on purpose: the domain
     * belongs in canonical, hreflang, og:url and the sitemap, not in every
     * internal link. Use `absolute` when a crawler will read the value.
     */
    'route' => function ($page, string $key, ?string $locale = null) {
        return $page->localePath($key, $locale);
    },

    /** Absolute URL. Crawlers and scrapers do not resolve relative ones. */
    'absolute' => function ($page, string $path) {
        return rtrim($page->baseUrl, '/') . '/' . ltrim($path, '/');
    },

    /**
     * The same page in every locale, for the language menu and hreflang.
     * `href` is for markup, `absolute` is for the head and the sitemap.
     */
    'alternates' => function ($page, ?string $key = null) {
        $key = $key ?: $page->page;

        return collect($page->locales)
            ->map(fn ($locale) => [
                'locale' => $locale,
                'href' => $page->route($key, $locale),
                'absolute' => $page->absolute($page->localePath($key, $locale)),
            ])
            ->all();
    },
];
