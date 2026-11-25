<?php

use TightenCo\Jigsaw\Jigsaw;

/** @var \Illuminate\Container\Container $container */
/** @var \TightenCo\Jigsaw\Events\EventBus $events */

/**
 * Reads the repository's star count from the GitHub API once, before the build,
 * and writes it into config so every template can use `$page->starCount`.
 *
 * Two consequences worth knowing:
 *
 * - The figure is frozen at build time. Flooring it to the nearest thousand
 *   keeps it truthful for months, but it only moves when the site is rebuilt.
 *   Schedule a deploy hook if you want it to track more closely.
 * - A marketing site must never fail to deploy because an API was slow. Any
 *   failure keeps the fallback already in config.php and logs a warning.
 */
$events->beforeBuild(function (Jigsaw $jigsaw) {
    $repository = 'monicahq/monica';

    $headers = [
        'Accept: application/vnd.github+json',
        // GitHub rejects requests without a User-Agent.
        'User-Agent: monica-marketing-site',
    ];

    // Optional. Unauthenticated builds get 60 requests per hour per IP, which is
    // plenty for one build but is shared with everything else on a CI runner.
    // A token raises the ceiling to 5,000 and makes the limit a non-issue.
    if ($token = getenv('GITHUB_TOKEN')) {
        $headers[] = "Authorization: Bearer {$token}";
    }

    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'header' => implode("\r\n", $headers),
            'timeout' => 5,
            'ignore_errors' => true,
        ],
    ]);

    $body = @file_get_contents("https://api.github.com/repos/{$repository}", false, $context);
    $count = $body ? (json_decode($body, true)['stargazers_count'] ?? null) : null;

    if (! is_int($count)) {
        echo "  [github] Could not read the star count for {$repository}. Using the fallback.\n";

        return;
    }

    // Floor to the nearest thousand, because the "+" promises "at least this
    // many". 24,956 becomes "24k+", never "25k+".
    $jigsaw->setConfig('starCount', $count < 1000 ? (string) $count : intdiv($count, 1000) . 'k+');
});

/**
 * Checks what the root's redirect rules assume about this repository.
 *
 * `/` is answered by two Cloudflare redirect rules that read Accept-Language.
 * cloudflare/redirect-rules.json is what the deploy applies, through
 * scripts/cloudflare/apply-redirect-rules.sh, and the languages it matches are
 * not written there: the script fills a `{$languages}` marker from the lang/
 * directory, one file per language.
 *
 * Which moves where drift can happen. The list can no longer be forgotten, but
 * lang/ is now load-bearing in a way it was not: a stray lang/it.php would put
 * Italian in the rules and send those readers to a page that does not exist,
 * and a locale in `$locales` with no lang/ file would be missing from the rules
 * while the rest of the site expects it. Neither is visible in the build output,
 * so both are checked here, along with the two things the file still spells out
 * for itself, the default language and the hostnames.
 *
 * It fails a production build and only warns on a local one, the same way the
 * dead-link check does, because a language being added is legitimately half-done
 * for as long as it takes to write its pages.
 *
 * What this cannot check is whether the zone matches the file. The deploy closes
 * that gap by verifying the live answers rather than trusting the write.
 */
$events->afterBuild(function (Jigsaw $jigsaw) {
    $report = function (string $message) use ($jigsaw) {
        if ($jigsaw->getEnvironment() === 'production') {
            throw new Exception($message);
        }

        echo "  [rules] {$message}\n";
    };

    $path = __DIR__ . '/cloudflare/redirect-rules.json';
    $definition = is_readable($path) ? json_decode(file_get_contents($path), true) : null;

    if (! is_array($definition['rules'] ?? null)) {
        $report('cloudflare/redirect-rules.json is missing or unreadable. It is what says how the root reaches each language.');

        return;
    }

    // Only the expressions, match and target both, because the rest of the file
    // is names and settings that say nothing about which languages exist.
    $expressions = collect($definition['rules'])
        ->flatMap(fn ($rule) => [
            $rule['expression'] ?? '',
            $rule['action_parameters']['from_value']['target_url']['expression'] ?? '',
        ])
        ->implode("\n");

    $default = $jigsaw->getConfig('defaultLocale');
    $problems = [];

    // lang/ is the list the rules are built from, so it has to be $locales
    // exactly, in both directions.
    $translated = collect(glob(__DIR__ . '/lang/*.php'))
        ->map(fn ($file) => basename($file, '.php'))
        ->sort()
        ->values();
    $declared = collect($jigsaw->getConfig('locales'))->sort()->values();

    if ($translated->all() !== $declared->all()) {
        $problems[] = 'lang/ holds [' . $translated->implode(', ') . '] while config.php declares ['
            . $declared->implode(', ') . '], and the redirect rules are built from lang/';
    }

    if (($definition['languages']['default'] ?? null) !== $default) {
        $problems[] = "its default language is not {$default}";
    }

    // The markers are what keep the list out of the file. Spelling a language set
    // back into an expression would freeze it, and nothing downstream would say
    // so, which is the failure this listener exists to prevent.
    foreach (['{$languages}', '$default'] as $marker) {
        if (! str_contains($expressions, $marker)) {
            $problems[] = "its expressions no longer use {$marker}";
        }
    }

    // The rules pin their hostnames, because they apply to a zone that also
    // carries the application, and the site answers on the apex as well as on
    // www. Only a production build knows the domain: baseUrl is empty on a local
    // one, which has no domain to be wrong about.
    if ($host = parse_url((string) $jigsaw->getConfig('baseUrl'), PHP_URL_HOST)) {
        $hosts = array_unique([$host, preg_replace('/^www\./', '', $host)]);
        $hostSet = '{' . collect($hosts)->map(fn ($name) => "\"{$name}\"")->implode(' ') . '}';

        if (! str_contains($expressions, $hostSet)) {
            $problems[] = "its expressions no longer match on {$hostSet}";
        }
    }

    if ($problems === []) {
        return;
    }

    $report(
        "The root's redirect rules are out of step: " . implode('; ', $problems)
        . '. Correct cloudflare/redirect-rules.json, and the next deploy applies it. '
        . 'Until then / will not reach every language it should.'
    );
});

/**
 * Puts each post's Markdown where its page links to it.
 *
 * Jigsaw names the file with pathinfo(), which reads everything after the last
 * dot of the slug as an extension, so the release notes (`v0.2.0`, `v2.10.0`)
 * come out as `v0.2.md` and `v2.10.md`. This moves each one to its full slug
 * before the link check runs, which is what would otherwise fail the build.
 *
 * Two slugs that differ only after their last dot (`v1.2.0` and `v1.2.3`)
 * would have been written to the same file, one over the other. That is not
 * repairable after the fact, so it fails the build instead.
 */
$events->afterBuild(function (Jigsaw $jigsaw) {
    $destination = $jigsaw->getDestinationPath();

    foreach ($jigsaw->getConfig('locales') as $locale) {
        $claimed = [];

        foreach ($jigsaw->getCollection("posts_{$locale}") as $post) {
            $path = trim($post->getPath(), '/');
            $written = pathinfo($path, PATHINFO_DIRNAME) . '/' . pathinfo($path, PATHINFO_FILENAME) . '.md';

            if ($written === "{$path}.md") {
                continue;
            }

            if (isset($claimed[$written])) {
                throw new Exception("Posts [{$claimed[$written]}] and [{$path}] were both written as Markdown to /{$written}. Rename one slug.");
            }

            $claimed[$written] = $path;
        }

        foreach ($claimed as $written => $path) {
            rename("{$destination}/{$written}", "{$destination}/{$path}.md");
        }
    }
});

/**
 * Copies cloudflare/_headers to the root of the build, where Cloudflare Pages
 * reads it. Jigsaw never writes a file whose name starts with an underscore,
 * so it cannot sit in source/ like robots.txt does. The file says why each
 * rule is there.
 */
$events->afterBuild(function (Jigsaw $jigsaw) {
    copy(__DIR__ . '/cloudflare/_headers', $jigsaw->getDestinationPath() . '/_headers');
});

/**
 * Writes _redirects to the root of the build, where Cloudflare Pages reads
 * it, for the same reason _headers is copied rather than kept in source/.
 *
 * The features index (/en/features/, /fr/fonctionnalites/) is `pageless`: its
 * slug only prefixes the feature pages. Search engines still show it, so each
 * locale's copy is sent with a 301 to that locale's people page, the first of
 * the feature pages. Both are read from `routes`, so a renamed slug moves the
 * rule with it. Written with and without the trailing slash, because Pages matches
 * the path as typed.
 */
$events->afterBuild(function (Jigsaw $jigsaw) {
    $routes = $jigsaw->getConfig('routes');
    $lines = ['# Written by bootstrap.php at build time. Do not edit in the build.'];

    foreach ($jigsaw->getConfig('locales') as $locale) {
        $from = "/{$locale}/{$routes['features'][$locale]}";
        $to = "/{$locale}/{$routes['people'][$locale]}/";
        $lines[] = "{$from}/ {$to} 301";
        $lines[] = "{$from} {$to} 301";
    }

    file_put_contents($jigsaw->getDestinationPath() . '/_redirects', implode("\n", $lines) . "\n");
});

/**
 * Writes a Markdown copy of every page the build wrote, from the built HTML,
 * for the pages Jigsaw does not already write one for. After the post files
 * are in place, so it does not write over them, and before the link check,
 * which is what fails a build where a page lost its copy. See
 * scripts/markdown/pages.php.
 */
$events->afterBuild(function (Jigsaw $jigsaw) {
    require_once __DIR__ . '/scripts/markdown/pages.php';

    PageMarkdown::run($jigsaw->getDestinationPath(), $jigsaw->getConfig('baseUrl'));
});

/**
 * Checks every link the build just wrote, against the build itself.
 *
 * This is the same safety net as a missing translation key: the site has no
 * type checker, so an invariant that is not enforced at build time is one
 * nobody finds until a reader does. A slug corrected in `routes` and missed in
 * one locale produces a page that builds cleanly and 404s in French.
 *
 * It fails a production build and only warns on a local one. A page in progress
 * legitimately links to things that are not written yet, and a watch loop that
 * refuses to rebuild is a watch loop nobody keeps running. Nothing reaches the
 * web without going through `npm run build`, so the strict half is the half
 * that matters.
 *
 * See scripts/links/check.php for what it checks and what it deliberately does
 * not, external hosts above all.
 */
$events->afterBuild(function (Jigsaw $jigsaw) {
    require_once __DIR__ . '/scripts/links/check.php';

    $check = LinkCheck::run($jigsaw->getDestinationPath(), $jigsaw->getConfig('baseUrl'));

    if ($notices = $check->notices()) {
        echo "  [links] Notices\n{$notices}\n";
    }

    if ($check->passed()) {
        return;
    }

    $report = count($check->errors()) . " dead links\n" . $check->report();

    if ($jigsaw->getEnvironment() === 'production') {
        throw new Exception($report);
    }

    echo "  [links] {$report}\n";
});
