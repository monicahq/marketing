<?php

/**
 * Prints every page card's copy as JSON, for scripts/og/pages.mjs:
 * {"en": {"home": {"title": ..., ...}}, "fr": {...}}.
 *
 * A page has a card when lang/en.php has a `meta.<key>.ogImage` block. English
 * is the canonical shape, so a card declared there and missing from another
 * locale fails here, as a missing translation fails the build.
 *
 * A handbook article has a card too, keyed `handbook-<slug>`, built from its
 * own front matter: its section's name as the eyebrow, its title and its
 * description. A blog post is the same, keyed `blog-<slug>`, with the blog
 * card's eyebrow and the year it was published as its own. A `card` map in the front matter overrides any of those
 * fields, for an article whose title or description is too long for a card.
 * The description may be dropped by the template if it still does not fit
 * (`optionalDescription`), since the title alone says what the article is.
 *
 * Locales named as arguments limit it to those, for a quick look at one
 * language while the others are still being written.
 *
 * It is PHP because the copy is PHP: reading lang/ any other way would mean a
 * second copy of it.
 */

use Symfony\Component\Yaml\Yaml;

$root = dirname(__DIR__, 2);
require $root . '/vendor/autoload.php';
$english = require $root . '/lang/en.php';
// A page written in some locales only (route keys with a single slug) has no
// card in the others.
$routes = (require $root . '/config.php')['routes'];
$keys = array_keys(array_filter($english['meta'], fn ($meta) => is_array($meta) && isset($meta['ogImage'])));

$cards = [];

$only = array_slice($argv, 1);

$frontMatter = function (string $file): array {
    if (! preg_match('/\A---\R(.*?)\R---/s', file_get_contents($file), $match)) {
        fwrite(STDERR, "No front matter in {$file}.\n");
        exit(1);
    }

    return Yaml::parse($match[1]);
};

foreach (glob($root . '/lang/*.php') as $file) {
    $locale = basename($file, '.php');
    if ($only && ! in_array($locale, $only, true)) {
        continue;
    }
    $dictionary = require $file;

    foreach ($keys as $key) {
        if (isset($routes[$key]) && ! isset($routes[$key][$locale])) {
            continue;
        }

        $card = $dictionary['meta'][$key]['ogImage'] ?? null;

        if (! is_array($card)) {
            fwrite(STDERR, "Missing translation [meta.{$key}.ogImage] for locale [{$locale}].\n");
            exit(1);
        }

        $cards[$locale][$key] = $card;
    }

    foreach (glob($root . "/source/_handbook_{$locale}/*.md") as $article) {
        $front = $frontMatter($article);
        $card = array_filter([
            'eyebrow' => $dictionary['handbook']['sections'][$front['section']] ?? null,
            'title' => $front['title'] ?? null,
            'description' => $front['description'] ?? null,
            'optionalDescription' => true,
            ...($front['card'] ?? []),
        ], fn ($value) => $value !== null);

        $cards[$locale]['handbook-' . $front['slug']] = $card;
    }

    foreach (glob($root . "/source/_posts_{$locale}/*.md") as $post) {
        $front = $frontMatter($post);

        // YAML reads an unquoted date as a timestamp, a quoted one as a string.
        $year = is_int($front['date']) ? date('Y', $front['date']) : substr((string) $front['date'], 0, 4);

        $cards[$locale]['blog-' . $front['slug']] = array_filter([
            // A feature post says so on its card, where any other post says "Blog".
            'eyebrow' => (($front['category'] ?? null) === 'feature'
                ? $dictionary['blog']['feature']['badge']
                : $dictionary['meta']['blog']['ogImage']['eyebrow']) . ' · ' . $year,
            'title' => $front['title'] ?? null,
            'description' => $front['description'] ?? null,
            'optionalDescription' => true,
            ...($front['card'] ?? []),
        ], fn ($value) => $value !== null);
    }
}

echo json_encode($cards, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
