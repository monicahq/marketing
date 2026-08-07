/**
 * The site root, in the reader's own language.
 *
 * Every URL on this site is locale-prefixed (`/en/`, `/fr/`), so `/` has no page
 * of its own and can only send the reader somewhere. It used to send everybody
 * to English. This reads the `Accept-Language` header the browser already sends
 * and redirects to the language it actually asked for, keeping English as the
 * answer for a reader who asks for nothing this site publishes.
 *
 * This is the only code in the project that runs on a request rather than at
 * build time, and it exists because a request header is not something a static
 * file can read. Cloudflare Pages picks it up from `functions/` at the
 * repository root: wrangler bundles it during `pages deploy` (see
 * `.github/workflows/deploy.yml`), and file-based routing maps this file to `/`
 * and nothing else. `source/routes.blade.json` states that same restriction to
 * Pages as `_routes.json`, so every other URL on the site is still a static
 * asset served without invoking this Worker at all.
 *
 * `npm run serve` is a plain PHP file server and knows nothing about Functions,
 * so locally `/` falls through to the static stub built from
 * `source/index.blade.php`, which can only redirect to English. That stub stays
 * in the build as the answer for any server without Functions. It is not the
 * answer in production, where Pages redirects `/index.html` to `/` and this
 * Worker takes it from there.
 */

/**
 * The languages the site is published in, and the one to fall back to.
 *
 * This repeats `$locales` and `defaultLocale` from `config.php`, because nothing
 * carries a value from a PHP build into a JavaScript Worker. The repetition is
 * checked rather than trusted: an `afterBuild` listener in `bootstrap.php`
 * compares the two lists and fails a production build when they drift, so a
 * seventh language added to `config.php` cannot silently leave the root unable
 * to reach it.
 */
const LOCALES = ['en', 'fr', 'de', 'es', 'pt', 'nl'];
const DEFAULT_LOCALE = 'en';

/**
 * The best supported language for an `Accept-Language` header.
 *
 * The header is a weighted preference list: `fr-CA,fr;q=0.9,en;q=0.8`. Three
 * details are what make reading it more than a `split`:
 *
 *   - The weights rank the tags, not the order they appear in. Browsers happen
 *     to send them in descending order, but nothing requires it, and `q=0`
 *     means "not acceptable" rather than "last resort".
 *   - A tag is a language plus optional script and region (`fr-CA`, `zh-Hant`),
 *     and this site publishes plain languages, so only the first subtag is
 *     compared. A reader in Quebec gets French.
 *   - `*` means any language will do, which is the default locale by
 *     definition. It is matched here rather than left to fall through the loop,
 *     so a `*` that outranks a supported tag on weight is still honoured.
 *
 * Anything unparseable is treated as an absent preference, never as an error:
 * the worst outcome available to a reader is the English they used to get.
 */
function preferredLocale(header) {
    if (!header) {
        return DEFAULT_LOCALE;
    }

    const preferences = header
        .split(',')
        .map((entry, order) => {
            const [tag, ...parameters] = entry.split(';');
            const weight = parameters
                .map((parameter) => /^\s*q\s*=\s*([\d.]+)\s*$/i.exec(parameter))
                .find(Boolean);

            return {
                tag: tag.trim().toLowerCase(),
                // A tag with no weight is the maximum, q=1. A weight that is
                // not a number leaves the tag out below, because an unreadable
                // preference is not one this can act on.
                quality: weight ? Number.parseFloat(weight[1]) : 1,
                order,
            };
        })
        .filter(({ tag, quality }) => tag !== '' && quality > 0)
        // `order` only settles ties, and keeps the header's own order among
        // tags of equal weight, which is where a browser puts its real
        // preference.
        .sort((a, b) => b.quality - a.quality || a.order - b.order);

    for (const { tag } of preferences) {
        if (tag === '*') {
            return DEFAULT_LOCALE;
        }

        const language = tag.split('-')[0];

        if (LOCALES.includes(language)) {
            return language;
        }
    }

    return DEFAULT_LOCALE;
}

/**
 * `onRequest` rather than `onRequestGet`, so a HEAD from a crawler or a link
 * checker gets the same redirect as a GET instead of a 405. Nothing here reads
 * a body, and there is no method for which a different answer would be right.
 */
export function onRequest({ request }) {
    const locale = preferredLocale(request.headers.get('Accept-Language'));
    const { search } = new URL(request.url);

    return new Response(null, {
        // 302, not 301: which language the root serves is a fact about the
        // reader, so it must not be remembered by a browser and replayed to a
        // reader whose preferences differ.
        status: 302,
        headers: {
            // The query string survives the hop, so a campaign link to `/`
            // still arrives with its parameters intact. A fragment never
            // reaches the server, and the browser carries it over itself.
            Location: `/${locale}/${search}`,
            // The response depends on a request header, which is what Vary
            // exists to say. `no-store` on top of it because no cache should
            // hold one reader's language and hand it to the next, and a
            // redirect this cheap is not worth caching anyway.
            Vary: 'Accept-Language',
            'Cache-Control': 'no-store',
        },
    });
}
