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
