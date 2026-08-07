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
 * Keeps the root redirect's list of languages in step with config.php.
 *
 * functions/index.js is the one piece of this site that runs on a request rather
 * than at build time, and being JavaScript it cannot read `$locales`. It
 * therefore repeats the list, and a repeated list is one that drifts: a seventh
 * language added to config.php and forgotten there would build and deploy
 * cleanly, and the only symptom would be readers of that language quietly
 * landing on English.
 *
 * So the copy is checked against the original, the same way a missing
 * translation key or a dead link is. It fails a production build and only warns
 * on a local one, because a language being added is legitimately half-done for
 * as long as it takes to write the pages.
 */
$events->afterBuild(function (Jigsaw $jigsaw) {
    $report = function (string $message) use ($jigsaw) {
        if ($jigsaw->getEnvironment() === 'production') {
            throw new Exception($message);
        }

        echo "  [locales] {$message}\n";
    };

    $path = __DIR__ . '/functions/index.js';

    if (! is_readable($path)) {
        $report('functions/index.js is missing. The root redirect is what sends a reader to their own language.');

        return;
    }

    // The declaration this reads is `const LOCALES = ['en', 'fr', ...];`.
    // Renaming it there means renaming it here.
    preg_match('/const LOCALES = \[([^\]]*)\]/', file_get_contents($path), $declaration);
    preg_match_all("/'([a-z-]+)'/", $declaration[1] ?? '', $matches);

    $declared = $matches[1];
    $expected = collect($jigsaw->getConfig('locales'))->all();

    sort($declared);
    sort($expected);

    if ($declared === $expected) {
        return;
    }

    $report(
        'functions/index.js declares [' . implode(', ', $declared) . '] '
        . 'and config.php declares [' . implode(', ', $expected) . ']. '
        . 'The root redirect cannot send a reader to a language it does not list.'
    );
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
