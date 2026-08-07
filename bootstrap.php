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
 * Keeps the root's redirect rules in step with config.php.
 *
 * `/` is answered by two Cloudflare redirect rules that read Accept-Language.
 * They are zone configuration rather than code, but they are not hand-made:
 * cloudflare/redirect-rules.json is what the deploy applies, through
 * scripts/cloudflare/apply-redirect-rules.sh.
 *
 * A zone expression cannot read `$locales`, so it repeats the list, and a
 * repeated list is one that drifts: a seventh language added to config.php and
 * forgotten in that file would build, deploy and apply cleanly, and the only
 * symptom would be readers of that language quietly landing on English.
 *
 * So the two are compared here, over the rules' expressions rather than the whole
 * file, which is the only part a reader of the zone would see. It fails a
 * production build and only warns on a local one, the same way the dead-link
 * check does, because a language being added is legitimately half-done for as
 * long as it takes to write its pages.
 *
 * What this cannot check is whether the zone matches the file, only whether the
 * file matches config.php. The deploy is what closes that gap, and it verifies
 * the live answers rather than trusting the write.
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

    // The set both expressions have to carry: every locale except the default,
    // in the order config.php declares them, spelled the way the rules language
    // spells a set of strings. English is absent because the second rule is what
    // serves it.
    $set = '{' . collect($jigsaw->getConfig('locales'))
        ->reject(fn ($locale) => $locale === $default)
        ->map(fn ($locale) => "\"{$locale}\"")
        ->implode(' ') . '}';

    $checks = [
        "the language set {$set}" => str_contains($expressions, $set),
        "the default target /{$default}/" => str_contains($expressions, "/{$default}/"),
    ];

    // The rules pin their hostnames, because they apply to a zone that also
    // carries the application, and the site answers on the apex as well as on
    // www. Only a production build knows the domain: baseUrl is empty on a local
    // one, which has no domain to be wrong about.
    if ($host = parse_url((string) $jigsaw->getConfig('baseUrl'), PHP_URL_HOST)) {
        $hosts = array_unique([$host, preg_replace('/^www\./', '', $host)]);
        $hostSet = '{' . collect($hosts)->map(fn ($name) => "\"{$name}\"")->implode(' ') . '}';

        $checks["the host set {$hostSet}"] = str_contains($expressions, $hostSet);
    }

    $missing = collect($checks)->reject(fn ($present) => $present)->keys();

    if ($missing->isEmpty()) {
        return;
    }

    $report(
        'cloudflare/redirect-rules.json no longer agrees with config.php: its expressions are missing '
        . $missing->implode(', ') . '. Correct the file, and the next deploy applies it. '
        . 'Until then / will not reach every language it should.'
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
