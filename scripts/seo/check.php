<?php

declare(strict_types=1);

// Check the rendered site and export its editorial sheets from the same data.
// No network calls: the current checkout is the only reference.
require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/../../config.php';
$production = require __DIR__ . '/../../config.production.php';
$topics = require __DIR__ . '/topics.php';
$build = realpath($argv[1] ?? __DIR__ . '/../../build_production');
$export = in_array('--report', $argv, true);
if ($build === false) {
    fwrite(STDERR, "Build the site before checking SEO.\n");
    exit(1);
}
$domain = rtrim($production['baseUrl'], '/');
$routes = [];
// The pages that live under the blog and the handbook are collection items,
// not routes, so they are recognised by the route they nest under.
$collections = [];
foreach ($config['routes'] as $key => $locales) {
    if (in_array($key, $config['pageless'], true)) {
        continue;
    }
    foreach ($locales as $locale => $slug) {
        $routePath = '/' . $locale . '/' . ($slug === '' ? '' : $slug . '/');
        $routes[$routePath] = $key;
        if (in_array($key, ['blog', 'handbook'], true)) {
            $collections[$routePath] = $key;
        }
    }
}
$routeFor = function (string $path) use ($routes, $collections): ?string {
    if (isset($routes[$path])) {
        return $routes[$path];
    }
    foreach ($collections as $root => $key) {
        if (!str_starts_with($path, $root)) {
            continue;
        }
        if ($key === 'handbook') {
            return 'handbookArticle';
        }
        // `page` is the pagination prefix in `$postSettings` in config.php.
        return preg_match('~^' . preg_quote($root, '~') . 'page/\d+/$~', $path) ? 'blog' : 'post';
    }
    return null;
};
$errors = [];
$sheets = [];
$pages = [];
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($build, FilesystemIterator::SKIP_DOTS));
foreach ($iterator as $file) {
    if ($file->getExtension() !== 'html') {
        continue;
    }
    $relative = substr($file->getPathname(), strlen($build));
    $path = str_ends_with($relative, '/index.html') ? substr($relative, 0, -10) : $relative;
    $document = new DOMDocument;
    $previous = libxml_use_internal_errors(true);
    $document->loadHTML('<?xml encoding="UTF-8">' . file_get_contents($file->getPathname()), LIBXML_NONET);
    libxml_clear_errors();
    libxml_use_internal_errors($previous);
    $xpath = new DOMXPath($document);
    $meta = fn (string $key) => $xpath->query('//head/meta[@name="' . $key . '" or @property="' . $key . '"]');
    $value = fn (string $key) => $meta($key)->item(0)?->getAttribute('content') ?? '';
    if (str_contains($value('robots'), 'noindex')) {
        continue;
    }
    $fail = function (string $message) use (&$errors, $path): void {
        $errors[] = "$path $message";
    };
    $text = fn (DOMNode $node) => preg_replace('/\s+/u', ' ', trim($node->textContent));
    $titles = $xpath->query('//head/title');
    $headings = $xpath->query('//h1');
    $canonicals = $xpath->query('//head/link[@rel="canonical"]');
    foreach (['title' => $titles, 'H1' => $headings, 'canonical' => $canonicals] as $label => $nodes) {
        if ($nodes->length !== 1) {
            $fail("Expected one $label, found {$nodes->length}.");
        }
    }
    $title = $titles->length ? $text($titles->item(0)) : '';
    $h1 = $headings->length ? $text($headings->item(0)) : '';
    $canonical = $canonicals->item(0)?->getAttribute('href') ?? '';
    if ($canonical !== $domain . $path || $value('og:url') !== $canonical) {
        $fail('Canonical and og:url must match the rendered URL.');
    }
    foreach (['description', 'og:title', 'og:description', 'og:image', 'og:image:alt', 'og:type', 'twitter:card'] as $key) {
        if ($meta($key)->length !== 1 || trim($value($key)) === '') {
            $fail("Expected one nonempty $key.");
        }
    }
    foreach ([$title, $h1, $value('description'), $value('og:title'), $value('og:description')] as $copy) {
        // Any `:word` that starts the text or follows a space is a placeholder
        // `t()` left unresolved (`:count`, `:page`). French puts a space before
        // a colon, but never letters straight after it.
        if ($copy === '' || preg_match('/(?:^|[\s(«"])\:[a-z][A-Za-z]*\b/u', $copy)) {
            $fail('Empty text or unresolved translation placeholder.');
        }
    }
    $imagePath = parse_url($value('og:image'), PHP_URL_PATH) ?: '';
    $size = $imagePath !== '' && is_file($build . $imagePath) ? getimagesize($build . $imagePath) : false;
    if (!$size || $size[0] !== 1200 || $size[1] !== 630 || $value('og:image:width') !== '1200' || $value('og:image:height') !== '630') {
        $fail('The sharing image and declared dimensions must be 1200 by 630.');
    }
    $graph = [];
    $scripts = $xpath->query('//head/script[@type="application/ld+json"]');
    if ($scripts->length !== 1) {
        $fail('Expected one JSON-LD graph.');
    }
    foreach ($scripts as $script) {
        try {
            $data = json_decode($script->textContent, true, 512, JSON_THROW_ON_ERROR);
            $graph = $data['@graph'] ?? [];
        } catch (JsonException $exception) {
            $fail('Invalid JSON-LD: ' . $exception->getMessage());
        }
    }
    $types = array_column($graph, '@type');
    $route = $routeFor($path);
    if ($route === null) {
        $fail('Is indexable but matches no key in `routes` in config.php, nor a blog post or handbook article.');
        $pages[] = $canonical;
        continue;
    }
    $required = ['Organization', 'WebSite'];
    if ($route === 'post') {
        $required[] = 'BlogPosting';
    } elseif ($route === 'handbookArticle') {
        $required[] = 'Article';
    }
    if (in_array($route, ['home', 'pricing', 'personalData', 'aiMemory', 'mcpServer'], true)) {
        $required[] = 'SoftwareApplication';
    }
    if ($route !== 'home') {
        $required[] = 'BreadcrumbList';
    }
    foreach ($required as $type) {
        if (!in_array($type, $types, true)) {
            $fail("Missing $type schema.");
        }
    }
    if ($value('og:type') !== (in_array($route, ['post', 'handbookArticle'], true) ? 'article' : 'website')) {
        $fail('Open Graph type does not match the page family.');
    }
    $locale = explode('/', trim($path, '/'))[0];
    if (!isset($topics[$locale][$route]) && !in_array($route, ['post', 'handbookArticle'], true)) {
        $fail("Missing editorial search targets for $locale/$route.");
    }
    // Editorial articles keep their own topic rather than targeting the same
    // generic CRM phrase across every historical post and handbook essay.
    [$primary, $secondary, $supporting] = $topics[$locale][$route] ?? [$h1, [], []];
    $intent = match ($route) {
        'home', 'personalData', 'aiMemory', 'mcpServer', 'templates', 'details', 'reminders', 'timeline', 'relationships', 'vaults', 'sharing', 'api', 'privacyFeatures', 'languages' => 'Evaluate the product or a specific use case',
        'pricing' => 'Compare hosting options and prices',
        'personalCrm' => 'Understand personal CRM and decide whether it is useful',
        'support' => 'Find help or documentation',
        'terms', 'privacy' => 'Read service terms or data handling information',
        'post', 'handbookArticle' => 'Read about the specific subject of this article',
        'blog', 'handbook' => 'Browse editorial articles',
        'contribute' => 'Find practical ways to contribute',
        'v3' => 'Understand the planned rebuild',
        default => 'Learn about the people and project behind Monica',
    };
    $sheets[$locale][$path] = [
        'Slug' => $path,
        'Canonical' => $canonical,
        'Search intent' => $intent,
        'SEO title' => $title,
        'Meta description' => $value('description'),
        'H1' => $h1,
        'OG title' => $value('og:title'),
        'OG description' => $value('og:description'),
        'OG image' => $value('og:image') . ' (1200 × 630, shared brand card for this language)',
        'Schema' => implode(', ', $types),
        'Primary keyword' => $primary,
        'Secondary keywords' => implode(', ', $secondary) ?: 'No additional target',
        'Supporting keywords' => implode(', ', $supporting) ?: 'No additional target',
        'Copy decision' => in_array($route, ['post', 'handbookArticle'], true) ? 'Retain the article title and summary; social previews use the editorial title.' : 'Use the localized search and sharing copy in lang/' . $locale . '.php; retain the existing H1.',
    ];
    $pages[] = $canonical;
}
$sitemap = new DOMDocument;
$sitemap->load($build . '/sitemap.xml', LIBXML_NONET);
$listed = [];
foreach ($sitemap->getElementsByTagName('loc') as $node) {
    $listed[] = trim($node->textContent);
}
if (array_diff($pages, $listed) || array_diff($listed, $pages)) {
    $errors[] = 'The sitemap and indexable HTML pages must have identical URL sets.';
}
if ($errors) {
    fwrite(STDERR, implode("\n", $errors) . "\n");
    exit(1);
}
printf("SEO checks passed for %d indexable pages in %d languages.\n", count($pages), count($sheets));
if ($export) {
    $destination = __DIR__ . '/../../docs/seo';
    if (!is_dir($destination)) {
        mkdir($destination, 0755, true);
    }
    ksort($sheets);
    foreach ($sheets as $locale => $entries) {
        ksort($entries);
        $markdown = "# Monica SEO sheets for $locale\n\n";
        $markdown .= "These " . count($entries) . " sheets reflect the rendered pages in this branch. Regenerate them with `npm run seo:report` after building.\n\n";
        $markdown .= "Search targets are editorial choices without search-volume estimates. They are not meta keywords or a requirement to repeat every phrase. Article titles identify their specific topic. See [the editorial policy](README.md).\n\n";
        $escape = fn (string $value) => str_replace(["\r", "\n", '|'], ['', ' ', '\\|'], $value);
        foreach ($entries as $path => $fields) {
            $markdown .= "## $path\n\n| Field | Content |\n| --- | --- |\n";
            foreach ($fields as $label => $content) {
                $markdown .= '| ' . $label . ' | ' . $escape($content) . " |\n";
            }
            $markdown .= "\n";
        }
        file_put_contents("$destination/$locale.md", $markdown);
    }
    // The index's table counts the sheets, so it is written from them too.
    $names = ['en' => 'English', 'fr' => 'French', 'de' => 'German', 'es' => 'Spanish', 'pt' => 'Portuguese', 'nl' => 'Dutch', 'zh' => 'Simplified Chinese', 'ru' => 'Russian'];
    $table = "<!-- sheets:start -->\n| Language | Sheets |\n| --- | --- |\n";
    foreach (array_keys($config['localeNames']) as $locale) {
        if (isset($sheets[$locale])) {
            $table .= '| ' . ($names[$locale] ?? $locale) . ' | [' . count($sheets[$locale]) . " pages]($locale.md) |\n";
        }
    }
    $table .= '<!-- sheets:end -->';
    $index = "$destination/README.md";
    $readme = file_get_contents($index);
    $updated = preg_replace('/<!-- sheets:start -->.*?<!-- sheets:end -->/s', $table, $readme, 1, $replaced);
    if ($replaced !== 1) {
        fwrite(STDERR, "docs/seo/README.md has lost its sheets markers.\n");
        exit(1);
    }
    file_put_contents($index, $updated);
    echo "SEO sheets written to docs/seo/.\n";
}
