<?php

use Illuminate\Support\Arr;

/**
 * Site configuration and the helper functions every template uses.
 *
 * Anything declared here as a closure becomes a method on $page, called with
 * the page as its first argument: `$page->t('hero.title')` runs the 't' closure
 * below. That is Jigsaw's extension point, and it is where the multilingual
 * behaviour lives, because Jigsaw has no locale routing of its own.
 */

$locales = ['en', 'fr', 'de', 'es', 'pt', 'nl', 'zh', 'ru'];

/**
 * How the blog is chunked, in one place.
 *
 * Both numbers are read twice: by the collections below, which is what Jigsaw's
 * paginator and the feed template obey, and by the templates that have to
 * reproduce the arithmetic (the sitemap counts pages of the index, the index
 * prints "showing 1 to 10 of 39"). Declaring them here rather than reading them
 * back off one locale's collection keeps those templates from having to name a
 * language they have no opinion about.
 */
$perPage = 10;
$perFeed = 20;

/**
 * A front-matter date as the ISO string a crawler wants.
 *
 * YAML reads an unquoted `date: 2018-10-12` as a date and hands it over as a
 * Unix timestamp; a quoted one stays a string. Both shapes arrive here, and
 * both leave as Y-m-d.
 */
$isoDay = fn ($value) => is_numeric($value)
    ? date('Y-m-d', (int) $value)
    : (string) $value;

/**
 * Gives every image in a rendered post body the attributes Markdown has no
 * syntax for: its intrinsic size, lazy loading and asynchronous decoding.
 *
 * `![alt](src)` is the whole of what an author can say, so the alternative to
 * doing this here is 195 Markdown files full of raw `<img>` tags, each
 * repeating a number that is already a fact about the file on disk. The
 * numbers are read from the file itself with getimagesize(), once per path
 * per build, which is what keeps them true when an image is re-exported.
 *
 * Width and height are what stop the page jumping as each screenshot arrives:
 * the browser can reserve the right box before it has a single byte of the
 * image. The CSS still sizes it (`width: 100%; height: auto` in prose.css), so
 * the attributes only ever supply the ratio.
 *
 * `loading="lazy"` on all of them, unconditionally, because every one of these
 * images is inside a post body, under a title, a lede and a byline. There is
 * no such thing as an above-the-fold image in this collection.
 *
 * An image whose file is missing keeps its markup and loses only the
 * dimensions. Nothing is hidden by that: `src` values are checked against the
 * build by scripts/links/check.php, which fails on the file that is not there
 * rather than on the attribute that could not be worked out.
 */
$imageAttributes = function (string $html): string {
    static $sizes = [];

    return preg_replace_callback('/<img\b([^>]*?)\s*\/?>/i', function ($match) use (&$sizes) {
        $attributes = rtrim($match[1]);

        if (! preg_match('/\bsrc="([^"]+)"/i', $attributes, $src)) {
            return $match[0];
        }

        $path = __DIR__ . '/source' . $src[1];

        if (! array_key_exists($path, $sizes)) {
            $sizes[$path] = is_file($path) ? (getimagesize($path) ?: null) : null;
        }

        if ($sizes[$path] && ! preg_match('/\bwidth=/i', $attributes)) {
            $attributes .= " width=\"{$sizes[$path][0]}\" height=\"{$sizes[$path][1]}\"";
        }

        return "<img{$attributes} loading=\"lazy\" decoding=\"async\">";
    }, $html);
};

/**
 * Everything a posts collection is, apart from where it reads and where it
 * writes. Shared by all five, so a change to the sort order or to a helper
 * cannot land in one language and miss the other four.
 */
$postSettings = [
    'extends' => '_layouts.post',

    /** Newest first, everywhere the collection is read. */
    'sort' => '-date',

    /**
     * Read by Jigsaw's paginator, so each locale's index template declares
     * only `pagination.collection` and inherits the rest. Page 2 and after
     * land on /blog/page/2/ rather than a bare /blog/2/.
     */
    'perPage' => $perPage,
    'prefix' => 'page',

    /**
     * How many posts the feed carries. Ours is not paginated, so this is the
     * whole of it: a reader subscribing today gets the last two years and
     * picks up the rest from the site. Every item carries its full body, so
     * the number is also what keeps the file reasonable.
     */
    'perFeed' => $perFeed,

    /** Names the SEO shape in _partials/seo.blade.php, as `page` does elsewhere. */
    'page' => 'post',

    /**
     * 200 words a minute, floored at one, so a two-paragraph post does not
     * advertise "0 min". Counted on the rendered body with the tags removed,
     * which is the closest thing to what a reader reads.
     *
     * Counted on the translated body, so a German page states how long the
     * German text takes, which is the only number that is true on that page.
     *
     * Chinese has no spaces between words, so `str_word_count` sees almost
     * nothing in it. Its characters are counted on their own, at 300 a
     * minute, and the Latin words left once they are removed (product names,
     * code) at the usual rate.
     */
    'readingMinutes' => function ($post) {
        $text = strip_tags($post->getContent());
        $characters = preg_match_all('/\p{Han}/u', $text);
        $text = preg_replace('/\p{Han}/u', ' ', $text);

        // str_word_count only knows Latin letters, so a Russian post would
        // count as almost no words at all. Cyrillic words are counted on
        // their own and taken out before it runs.
        $cyrillic = preg_match_all('/\p{Cyrillic}+/u', $text);
        $words = $cyrillic + str_word_count(preg_replace('/\p{Cyrillic}+/u', ' ', $text));

        return max(1, (int) ceil($characters / 300 + $words / 200));
    },

    /**
     * The publication date as the ISO string the front matter holds.
     *
     * YAML reads an unquoted `date: 2018-10-12` as a date and hands it
     * over as a Unix timestamp, which sorts correctly and renders as
     * ten digits. Everything that shows a date or hands one to a
     * crawler goes through here instead of touching `date` directly.
     *
     * Deliberately not localised. It is set in the mono face as
     * metadata, it reads the same in every language, and it is the
     * one fact on the page a reader may want to compare or copy.
     */
    'isoDate' => function ($post) use ($isoDay) {
        return $isoDay($post->date);
    },

    /**
     * When this post was last meaningfully changed, for the sitemap's lastmod.
     *
     * `updated` in the front matter when a post has been corrected, rewritten
     * or retranslated, the publication date otherwise, because a post nobody
     * has touched was last modified when it was published.
     *
     * Read per locale rather than per slug, so a French translation fixed on
     * its own says so and the four other languages keep the date they had.
     * That is the only reason `updated` is front matter and not a shared fact
     * like the slug: it is the one thing about a post that legitimately
     * differs between the five files.
     *
     * Only set it for a change a reader would notice. A typo fixed in a
     * heading is not a reason to tell every crawler the article is new.
     */
    'lastmodDate' => function ($post) use ($isoDay) {
        return $post->updated ? $isoDay($post->updated) : $post->isoDate();
    },

    /** The same date as RFC 2822, which is the only format RSS accepts. */
    'rfcDate' => function ($post) {
        $timestamp = is_numeric($post->date) ? (int) $post->date : strtotime((string) $post->date);

        return date(DATE_RSS, $timestamp);
    },

    /**
     * The rendered body as the page shows it: every image carrying its
     * own dimensions, lazy loading and asynchronous decoding.
     *
     * See $imageAttributes above for why that is done here rather than
     * written into the Markdown.
     */
    'bodyHtml' => function ($post) use ($imageAttributes) {
        return $imageAttributes($post->getContent());
    },

    /**
     * The post body, with every URL made absolute, for the feed.
     *
     * A feed is read somewhere else: in a reader, in an email digest,
     * on another domain. Root-relative markup that resolves perfectly
     * on the site resolves against whatever host is displaying it,
     * which is how a feed ends up full of broken screenshots. Both
     * `src` and `href` are rewritten, so images and internal links
     * survive the trip.
     *
     * Built on `bodyHtml`, so a subscriber gets the same dimensions the
     * page has. A reader that ignores `loading` is no worse off for
     * having been told.
     */
    'feedContent' => function ($post) {
        return preg_replace_callback(
            '/\b(src|href)="(\/[^"]*)"/',
            fn ($match) => $match[1] . '="' . $post->absolute($match[2]) . '"',
            $post->bodyHtml(),
        );
    },

    /** "Regis Freyd" becomes "RF", for the avatar circle. */
    'authorInitials' => function ($post) {
        return collect(preg_split('/\s+/', trim($post->author)))
            ->filter()
            ->take(2)
            ->map(fn ($word) => mb_strtoupper(mb_substr($word, 0, 1)))
            ->implode('');
    },
];

return [
    'baseUrl' => '',
    'production' => false,
    'pretty' => true,
    'trailing_slash' => true,

    // ------------------------------------------------------------------ blog

    /**
     * One posts collection per locale: `posts_fr` reads source/_posts_fr, one
     * Markdown file per post, and writes /fr/blog/<slug>/.
     *
     * The bodies are translated, so a post is a different file in every
     * language and there is nowhere for one file to carry five of them. Five
     * collections rather than one with a `locale` field, because Jigsaw's
     * paginator takes a collection and nothing else: it cannot be told to
     * paginate the French tenth of a pile of 195 items, and the French index
     * would otherwise list German posts.
     *
     * The slug does not change between languages. `/de/blog/life-events/` is
     * the German page, and keeping the last segment stable is what lets one
     * `postPath()` serve the canonical, the hreflang cluster, the sitemap and
     * the feed without a per-locale slug table. The title and the description
     * in the front matter are translated; the slug, the date and the author
     * are the same fact in five files.
     *
     * `locale` is a collection setting rather than front matter, so it is
     * stated once per language instead of 39 times, and every item carries the
     * one thing its directory already implies. `$page->lang()` reads it.
     *
     * `{slug}` is the post's own front-matter slug rather than the filename,
     * which is date-prefixed so each directory reads chronologically.
     */
    'collections' => collect($locales)->mapWithKeys(fn ($locale) => [
        "posts_{$locale}" => $postSettings + [
            'locale' => $locale,
            'path' => "{$locale}/blog/{slug}",
        ],
    ])->all(),

    /** The blog's two sizes, for templates that reproduce the paginator's arithmetic. */
    'postsPerPage' => $perPage,
    'postsPerFeed' => $perFeed,

    // ---------------------------------------------------------------- locales

    'locales' => $locales,
    'defaultLocale' => 'en',

    /** Each language named in itself, which is what a reader scans a menu for. */
    'localeNames' => [
        'en' => 'English',
        'fr' => 'Français',
        'de' => 'Deutsch',
        'es' => 'Español',
        'pt' => 'Português',
        'nl' => 'Nederlands',
        'zh' => '简体中文',
        'ru' => 'Русский',
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

        // The copy is Brazilian, so the territory is BR. hreflang stays the
        // bare "pt", which is what a reader searching in any Portuguese
        // variant should match.
        'pt' => 'pt_BR',

        // The copy is written for the Netherlands rather than Flanders, so the
        // territory is NL. hreflang stays the bare "nl", which is what a reader
        // searching in either variant should match.
        'nl' => 'nl_NL',

        // Simplified Chinese is the script of the mainland, so the territory
        // is CN.
        'zh' => 'zh_CN',

        // The copy is written for Russia, so the territory is RU.
        'ru' => 'ru_RU',
    ],

    /**
     * The language tag a browser and a crawler read, in `<html lang>`,
     * hreflang, `inLanguage` and the feed. It is the locale code itself unless
     * listed here, through `languageTag()`.
     *
     * Chinese is the one exception. A bare "zh" names the language but not
     * the script, so a browser left to guess may draw the page with
     * Traditional or Japanese glyph shapes. "zh-Hans" says Simplified. The
     * URL prefix stays the bare "zh", because that is what the root's
     * redirect rule reads off Accept-Language.
     */
    'languageTags' => [
        'zh' => 'zh-Hans',
    ],

    /**
     * Every URL is locale-prefixed and every slug is translated, except in
     * Chinese, which keeps the English slugs: a slug in Chinese characters is
     * percent-encoded into something nobody can read, and pinyin slugs are
     * rare on Chinese sites. Russian is translated and then transliterated
     * (/ru/tseny/), for the same reason and because that is what Russian
     * sites do. A page is
     * referenced by its key, never by a hard-coded path, so a slug can be
     * corrected in one place.
     *
     * Adding a page means adding a key here plus one Blade file per locale
     * named after that locale's slug. See .claude/CLAUDE.md.
     */
    'routes' => [
        'home' => ['en' => '', 'fr' => '', 'de' => '', 'es' => '', 'pt' => '', 'nl' => '', 'zh' => '', 'ru' => ''],

        // "v3" is the product's version number, so it is the same word in every
        // language. Slugs are still declared per locale, because the next page
        // added will not be.
        'v3' => ['en' => 'v3', 'fr' => 'v3', 'de' => 'v3', 'es' => 'v3', 'pt' => 'v3', 'nl' => 'v3', 'zh' => 'v3', 'ru' => 'v3'],

        'pricing' => [
            'en' => 'pricing',
            'fr' => 'tarifs',
            'de' => 'preise',
            'es' => 'precios',
            'pt' => 'precos',
            'nl' => 'prijzen',
            'zh' => 'pricing',
            'ru' => 'tseny',
        ],

        /**
         * The features section has no page of its own. Its slug is still the
         * prefix the feature pages nest under (/en/features/timeline/), and
         * the header's features menu still links to it while the pages those
         * items describe are being written, so the key stays. `pageless`
         * below keeps it out of the sitemap.
         */
        'features' => [
            'en' => 'features',
            'fr' => 'fonctionnalites',
            'de' => 'funktionen',
            'es' => 'funcionalidades',
            'pt' => 'recursos',
            'nl' => 'functies',
            'zh' => 'features',
            'ru' => 'vozmozhnosti',
        ],

        // "Blog" is the same word in every language we ship. Declared per locale
        // anyway, so the day one of them wants a different word it is an edit
        // here rather than a new mechanism.
        'blog' => ['en' => 'blog', 'fr' => 'blog', 'de' => 'blog', 'es' => 'blog', 'pt' => 'blog', 'nl' => 'blog', 'zh' => 'blog', 'ru' => 'blog'],

        'terms' => [
            'en' => 'terms',
            'fr' => 'conditions-utilisation',
            'de' => 'nutzungsbedingungen',
            'es' => 'condiciones-de-uso',
            'pt' => 'termos-de-uso',
            'nl' => 'gebruiksvoorwaarden',
            'zh' => 'terms',
            'ru' => 'usloviya',
        ],

        'team' => [
            'en' => 'team',
            'fr' => 'equipe',
            'de' => 'team',
            'es' => 'equipo',
            'pt' => 'equipe',
            'nl' => 'team',
            'zh' => 'team',
            'ru' => 'komanda',
        ],

        'privacy' => [
            'en' => 'privacy',
            'fr' => 'confidentialite',
            'de' => 'datenschutz',
            'es' => 'privacidad',
            'pt' => 'privacidade',
            'nl' => 'privacybeleid',
            'zh' => 'privacy',
            'ru' => 'konfidentsialnost',
        ],

        // The guide that answers the question the nav asks. Its slug says
        // "personal CRM" in each language rather than transliterating the
        // English one, because that is the phrase a reader searches for.
        'personalCrm' => [
            'en' => 'personal-crm',
            'fr' => 'crm-personnel',
            'de' => 'persoenliches-crm',
            'es' => 'crm-personal',
            'pt' => 'crm-pessoal',
            'nl' => 'persoonlijke-crm',
            'zh' => 'personal-crm',
            'ru' => 'lichnaya-crm',
        ],

        // "Your contacts, your way": what a contact template is and what you
        // can build with one. The header's "Start here" card leads here. It
        // nests under the features section like the two tabs above, but is
        // not a tab: it is a page of its own, with no tab strip.
        'templates' => [
            'en' => 'features/templates',
            'fr' => 'fonctionnalites/modeles',
            'de' => 'funktionen/vorlagen',
            'es' => 'funcionalidades/plantillas',
            'pt' => 'recursos/modelos',
            'nl' => 'functies/sjablonen',
            'zh' => 'features/templates',
            'ru' => 'vozmozhnosti/shablony',
        ],

        // "Remember the details that matter": what a contact page holds, from
        // the little things to the people around someone and what happened
        // with them. The first item of the header's features menu leads here.
        // Nested under the features section like the templates page, and like
        // it, not a tab.
        'details' => [
            'en' => 'features/details',
            'fr' => 'fonctionnalites/details',
            'de' => 'funktionen/details',
            'es' => 'funcionalidades/detalles',
            'pt' => 'recursos/detalhes',
            'nl' => 'functies/details',
            'zh' => 'features/details',
            'ru' => 'vozmozhnosti/detali',
        ],

        // "Remember to reach out": reminders, once or on a rhythm, and how the
        // nudge reaches you. The header's "Reminders" menu item leads here.
        // Nested under the features section like the details page, and like
        // it, not a tab.
        'reminders' => [
            'en' => 'features/reminders',
            'fr' => 'fonctionnalites/rappels',
            'de' => 'funktionen/erinnerungen',
            'es' => 'funcionalidades/recordatorios',
            'pt' => 'recursos/lembretes',
            'nl' => 'functies/herinneringen',
            'zh' => 'features/reminders',
            'ru' => 'vozmozhnosti/napominaniya',
        ],

        // "Keep the moments worth remembering": life events, the timeline
        // they make, and the types and fields behind them. The header's
        // "Timeline" menu item leads here. Nested under the features section
        // like the reminders page, and like it, not a tab.
        'timeline' => [
            'en' => 'features/timeline',
            'fr' => 'fonctionnalites/chronologie',
            'de' => 'funktionen/zeitleiste',
            'es' => 'funcionalidades/cronologia',
            'pt' => 'recursos/linha-do-tempo',
            'nl' => 'functies/tijdlijn',
            'zh' => 'features/timeline',
            'ru' => 'vozmozhnosti/khronologiya',
        ],

        // "Understand how people are connected": relationships, the family
        // tree they draw, and the types behind them. The header's
        // "Relationships" menu item leads here. Nested under the features
        // section like the timeline page, and like it, not a tab.
        'relationships' => [
            'en' => 'features/relationships',
            'fr' => 'fonctionnalites/relations',
            'de' => 'funktionen/beziehungen',
            'es' => 'funcionalidades/relaciones',
            'pt' => 'recursos/relacionamentos',
            'nl' => 'functies/relaties',
            'zh' => 'features/relationships',
            'ru' => 'vozmozhnosti/otnosheniya',
        ],

        // "A place for each part of your life": vaults, what each one keeps
        // apart, and switching between them. The header's "Vaults" menu item
        // leads here. Nested under the features section like the
        // relationships page, and like it, not a tab.
        'vaults' => [
            'en' => 'features/vaults',
            'fr' => 'fonctionnalites/coffres',
            'de' => 'funktionen/tresore',
            'es' => 'funcionalidades/bovedas',
            'pt' => 'recursos/cofres',
            'nl' => 'functies/kluizen',
            'zh' => 'features/vaults',
            'ru' => 'vozmozhnosti/khranilishcha',
        ],

        // "Share only what you choose": read-only links to a few sections of
        // a contact's page, their end date and password, their visits, and
        // revoking them. Nested under the features section like the vaults
        // page, and like it, not a tab.
        'sharing' => [
            'en' => 'features/sharing',
            'fr' => 'fonctionnalites/partage',
            'de' => 'funktionen/teilen',
            'es' => 'funcionalidades/compartir',
            'pt' => 'recursos/compartilhamento',
            'nl' => 'functies/delen',
            'zh' => 'features/sharing',
            'ru' => 'vozmozhnosti/dostup',
        ],

        // "Your contacts, connected to your tools": the MCP server and the
        // JSON API. The header's "Assistants and API" menu item leads here.
        // API is the same word in every language we ship, so only the
        // section prefix changes.
        'api' => [
            'en' => 'features/api',
            'fr' => 'fonctionnalites/api',
            'de' => 'funktionen/api',
            'es' => 'funcionalidades/api',
            'pt' => 'recursos/api',
            'nl' => 'functies/api',
            'zh' => 'features/api',
            'ru' => 'vozmozhnosti/api',
        ],
    ],

    /**
     * Route keys with no page behind them. The sitemap skips them, because a
     * sitemap entry is a promise that the URL answers.
     */
    'pageless' => ['features'],

    // ---------------------------------------------------------------- lastmod

    /**
     * When each page was last meaningfully changed, for the sitemap.
     *
     * A crawler treats lastmod as a hint about whether re-fetching a URL is
     * worth its time, and it only stays a useful hint while it is true. So this
     * is a hand-kept fact rather than the build date or the file's mtime: both
     * of those say "everything changed" every time anything is deployed, which
     * teaches a crawler to ignore the field entirely.
     *
     * One date per page, not per locale. The copy for all five lives in the
     * same `lang/` edit, so they change together.
     *
     * Update the entry when the page's copy changes in a way a reader would
     * notice. A CSS tweak or a refactor behind identical text is not one.
     *
     * Every key in `routes` needs an entry here, except `blog`: the index's
     * lastmod is the newest post it lists, which the sitemap works out from the
     * archive rather than from a number somebody has to remember. A key in
     * `pageless` needs none either, because it has no page to date.
     */
    'lastmod' => [
        'home' => '2026-10-11',
        'v3' => '2026-08-06',
        'pricing' => '2026-10-12',
        'terms' => '2026-08-06',
        'team' => '2026-08-06',
        'privacy' => '2026-08-06',
        'personalCrm' => '2026-08-23',
        'templates' => '2026-10-12',
        'details' => '2026-10-12',
        'reminders' => '2026-10-12',
        'timeline' => '2026-10-12',
        'relationships' => '2026-10-13',
        'vaults' => '2026-10-13',
        'sharing' => '2026-10-13',
        'api' => '2026-10-13',
    ],

    // ------------------------------------------------------------------ links

    /**
     * ⚠️ The '#' entries are placeholders carried over from the design. They
     * need real destinations before launch.
     *
     * The application itself lives at app.monicahq.com. Anything that sends a
     * reader into it belongs on that host, not on this one: it is a different
     * origin, so Turbo leaves those links alone and they load normally.
     */
    'links' => [
        'github' => 'https://github.com/monicahq/monica',
        'signIn' => 'https://app.monicahq.com',
        'getStarted' => 'https://app.monicahq.com/register',
        'selfHostingGuide' => '#',
        'docs' => '#',
        'api' => '#',
        'mcp' => '#',
        'changelog' => '#',

        // There is no sales team, which is the joke on the homepage button.
        // It still needs somewhere to go: a contact address, most likely.
        'contactSales' => '#',
    ],

    // ------------------------------------------------------------------ plans

    /**
     * The hosted plans' prices as bare numbers, for the offers in the
     * structured data. A crawler wants 9.00 and USD; a reader wants "$9", and
     * that string stays in `lang/` (`pricing.prices`) with the rest of the
     * pricing copy.
     *
     * Which means the two have to be changed together. They are the only pair
     * on the site that can disagree without anything failing, so a price
     * change is an edit here and an edit in five `lang/` files.
     *
     * Only USD, because that is the only currency the pricing page quotes.
     */
    'plans' => [
        'currency' => 'USD',
        'monthly' => '9.00',
        'yearly' => '90.00',

        // Paid once, never renewed.
        'lifetime' => '150.00',

        // The application is free; the server is the reader's problem.
        'selfHosted' => '0.00',
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

        $locale = $page->lang();
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
        $locale = $locale ?: $page->lang();
        $slug = $page->routes[$key][$locale] ?? null;

        if ($slug === null) {
            throw new Exception("Route [{$key}] is not available for locale [{$locale}].");
        }

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
     * An image's intrinsic size, read off the file: `['width' => …, 'height' => …]`.
     *
     * Every <img> carries its own pixels as `width` and `height`, and this is
     * how a template gets them without repeating numbers that are already a
     * fact about the file. A missing file fails the build, naming the path,
     * rather than shipping an image with no box reserved for it.
     */
    'imageSize' => function ($page, string $src) {
        $path = __DIR__ . '/source' . $src;
        $size = false;

        if (is_file($path) && str_ends_with($path, '.svg')) {
            // getimagesize() does not read SVG. Its size is the `width` and
            // `height` on the root element, which every badge here carries.
            if (preg_match('/<svg\b[^>]*>/', file_get_contents($path), $root)
                && preg_match('/\bwidth="([\d.]+)"/', $root[0], $w)
                && preg_match('/\bheight="([\d.]+)"/', $root[0], $h)) {
                $size = [(int) round($w[1]), (int) round($h[1])];
            }
        } elseif (is_file($path)) {
            $size = getimagesize($path);
        }

        if (! $size) {
            throw new Exception("Image [{$src}] is missing or unreadable.");
        }

        return ['width' => $size[0], 'height' => $size[1]];
    },

    /**
     * The locale a page is being rendered in.
     *
     * Ordinary pages declare `locale` in their front matter. A post inherits it
     * from its collection, which is one per language, so both arrive at the
     * same variable and nothing downstream has to know which kind of page it is
     * looking at.
     */
    'lang' => function ($page) {
        return $page->locale ?: $page->defaultLocale;
    },

    /**
     * The language tag for a locale, the current page's by default. See
     * `languageTags`: it is the locale code except where the code alone does
     * not say enough.
     */
    'languageTag' => function ($page, ?string $locale = null) {
        $locale ??= $page->lang();

        return $page->languageTags[$locale] ?? $locale;
    },

    /**
     * The blog index, which paginates. Page 1 is /fr/blog/, page 2 and after
     * are /fr/blog/page/2/, matching the `prefix` set in the index templates'
     * front matter. Jigsaw builds those paths itself; this reproduces them for
     * the head and the sitemap, which are written before pagination is known.
     */
    'blogPath' => function ($page, ?string $locale = null, int $number = 1) {
        $index = $page->localePath('blog', $locale ?: $page->lang());

        return $number > 1 ? "{$index}page/{$number}/" : $index;
    },

    /** A single post: /fr/blog/life-events/. */
    'postPath' => function ($page, string $slug, ?string $locale = null) {
        return $page->localePath('blog', $locale ?: $page->lang()) . "{$slug}/";
    },

    /**
     * The RSS feed: /fr/blog/feed.xml. One per locale, like everything else
     * here, so a reader who subscribes from the French blog gets a feed whose
     * links land back on the French pages.
     */
    'feedPath' => function ($page, ?string $locale = null) {
        return $page->blogPath($locale) . 'feed.xml';
    },

    /**
     * Where a page is canonical, in any locale. Three shapes live behind one
     * call — an ordinary page named by its route key, the paginated blog index,
     * and a post — so canonical, hreflang, the sitemap and the dead-link
     * checker cannot drift apart. Adding a fourth shape means editing here once.
     */
    'canonicalPath' => function ($page, ?string $locale = null, int $number = 1) {
        $locale = $locale ?: $page->lang();

        if ($page->page === 'post') {
            return $page->postPath($page->slug, $locale);
        }

        if ($page->page === 'blog') {
            return $page->blogPath($locale, $number);
        }

        return $page->localePath($page->page, $locale);
    },

    /**
     * When the page behind a route key was last changed: `$page->lastmodFor('pricing')`.
     *
     * Throws on a key with no entry, the same way `t()` throws on a missing
     * translation, because a page added to `routes` and forgotten here would
     * otherwise drop out of the sitemap's lastmod silently. A build that fails
     * naming the key is a one-line fix; a sitemap quietly missing a date is not
     * something anybody goes looking for.
     */
    'lastmodFor' => function ($page, string $key) {
        $date = $page->lastmod[$key] ?? null;

        if ($date === null) {
            throw new Exception("Missing lastmod for page [{$key}]. Add it to the 'lastmod' map in config.php.");
        }

        return $date;
    },

    /**
     * The same page in every locale, for the language menu and hreflang.
     * `href` is for markup, `absolute` is for the head and the sitemap.
     *
     * Page 2 of the English blog points at page 2 of the French one, not at the
     * French front page, because a cluster is only reciprocal if both ends
     * agree — and the checker tests exactly that.
     */
    'alternates' => function ($page, ?string $key = null, int $number = 1) {
        $routeKey = $key;

        if ($routeKey === null && ! in_array($page->page, ['blog', 'post'], true)) {
            $routeKey = $page->page;
        }

        $locales = $routeKey
            ? collect($page->routes[$routeKey])->keys()->all()
            : $page->locales;

        return collect($locales)
            ->map(function ($locale) use ($page, $key, $number) {
                $path = $key ? $page->localePath($key, $locale) : $page->canonicalPath($locale, $number);

                return [
                    'locale' => $locale,
                    'href' => $path,
                    'absolute' => $page->absolute($path),
                ];
            })
            ->all();
    },
];
