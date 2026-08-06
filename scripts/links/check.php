<?php

/**
 * Checks every URL the built site emits, against the built site itself.
 *
 * The site is static and its whole URL space is generated from `routes` in
 * config.php, so nearly every kind of dead link is answerable from the build
 * output alone, with no network calls. A link either resolves to a file the
 * build wrote, or it does not.
 *
 * Three decisions worth knowing:
 *
 * - External hosts are listed, never fetched. They are the only URLs here that
 *   need the network, and the only ones that can fail for reasons that have
 *   nothing to do with this repository. A scheduled job is the place for those,
 *   not a build that has to be able to run offline.
 * - Absolute URLs on our own domain (canonical, hreflang, og:url, og:image,
 *   JSON-LD) are resolved against the local build rather than fetched. Fetching
 *   would call a new page broken until the moment it is deployed, and would let
 *   a malformed URL pass whenever the live server happened to redirect it.
 * - '#' is reported but never fails anything. The design shipped with
 *   placeholder destinations and config.php says so; they are a launch
 *   checklist, not a regression.
 *
 * Run it directly for a report:
 *
 *     php scripts/links/check.php build_production
 *
 * bootstrap.php runs it after every build too. See that file for what it does
 * with the result.
 */
final class LinkCheck
{
    /** Schemes with nothing on the other end for a filesystem to check. */
    private const IGNORED_SCHEMES = ['mailto:', 'tel:', 'data:', 'javascript:'];

    /**
     * The JSON-LD keys whose values are links something follows. Everything
     * else in the graph, '@id' above all, is an identifier that happens to be
     * spelled like a URL and is never meant to resolve.
     */
    private const JSON_LD_URL_KEYS = ['url', 'logo', 'image', 'sameAs', 'contentUrl', 'thumbnailUrl', 'item', 'license'];

    private array $errors = [];

    private array $externals = [];

    /** Pages with '#' destinations, keyed by page, valued by count. */
    private array $placeholders = [];

    /** Parsed documents, keyed by absolute file path, because pages cross-reference. */
    private array $documents = [];

    /** Element ids per document, keyed by absolute file path. */
    private array $ids = [];

    private string $baseUrl = '';

    private function __construct(private readonly string $buildPath)
    {
    }

    /**
     * A null $baseUrl is read back out of the build, from the first canonical
     * found. That keeps the command line from having to know which environment
     * wrote the directory it was handed.
     */
    public static function run(string $buildPath, ?string $baseUrl = null): self
    {
        if (! is_dir($buildPath)) {
            throw new RuntimeException("No build directory at [{$buildPath}]. Run `npm run build` first.");
        }

        // Absolute from here on, because resolve() compares realpath() output
        // against it to be sure a link stayed inside the build.
        $check = new self(realpath($buildPath));
        $check->baseUrl = rtrim($baseUrl ?? $check->detectBaseUrl(), '/');

        return $check->check();
    }

    public function passed(): bool
    {
        return $this->errors === [];
    }

    /** @return array<int, array{page: string, url: string, detail: string}> */
    public function errors(): array
    {
        return $this->errors;
    }

    private function check(): self
    {
        $pages = $this->pages();

        foreach ($pages as $page) {
            foreach ($this->urlsIn($page) as [$url, $context]) {
                $this->checkUrl($url, $page, $context);
            }
        }

        $this->checkCanonicals($pages);
        $this->checkAlternates($pages);
        $this->checkSitemap($pages);

        return $this;
    }

    // ------------------------------------------------------------ one URL

    private function checkUrl(string $url, string $page, string $context): void
    {
        $url = trim($url);

        if ($url === '#') {
            $this->placeholders[$this->relative($page)] = ($this->placeholders[$this->relative($page)] ?? 0) + 1;

            return;
        }

        if ($url === '') {
            $this->error($page, $url, "empty {$context}");

            return;
        }

        foreach (self::IGNORED_SCHEMES as $scheme) {
            if (str_starts_with($url, $scheme)) {
                return;
            }
        }

        // A fragment on its own points into the page that wrote it.
        if (str_starts_with($url, '#')) {
            $this->checkFragment(substr($url, 1), $page, $page, $context);

            return;
        }

        // Our own absolute URLs are internal links wearing a domain. Checking
        // them against the build is the whole point: the head is where a
        // hand-built URL does the most damage and gets looked at the least.
        if ($this->baseUrl !== '' && str_starts_with($url, $this->baseUrl)) {
            $url = substr($url, strlen($this->baseUrl)) ?: '/';
        } elseif (preg_match('#^[a-z][a-z0-9+.-]*://#i', $url) || str_starts_with($url, '//')) {
            $host = parse_url($url, PHP_URL_HOST) ?: $url;
            $this->externals[$host][] = $this->relative($page);

            return;
        }

        if (! str_starts_with($url, '/')) {
            $this->error($page, $url, "relative {$context}, which route() and absolute() never produce");

            return;
        }

        [$path, $fragment] = $this->split($url);

        $target = $this->resolve($path);

        if ($target === null) {
            $this->error($page, $url, "{$context} resolves to no file in the build");

            return;
        }

        if ($fragment !== null && $fragment !== '') {
            $this->checkFragment($fragment, $target, $page, $context);
        }
    }

    private function checkFragment(string $fragment, string $target, string $page, string $context): void
    {
        if (! in_array($fragment, $this->idsIn($target), true)) {
            $where = $target === $page ? 'this page' : $this->relative($target);
            $this->error($page, "#{$fragment}", "{$context} points at no id on {$where}");
        }
    }

    // ------------------------------------------------------- whole-site checks

    /**
     * An indexable page has to have a canonical, and it has to name itself.
     * Pointing one file away is the failure that looks fine in a browser and
     * quietly de-indexes the page.
     *
     * A noindex page is exempt from both halves, because pointing elsewhere is
     * the entire job of the root redirect stub.
     */
    private function checkCanonicals(array $pages): void
    {
        foreach ($pages as $page) {
            if ($this->isNoindex($page)) {
                continue;
            }

            $canonical = $this->canonical($page);

            if ($canonical === null) {
                $this->error($page, $this->relative($page), 'page is indexable but declares no canonical');

                continue;
            }

            $target = $this->resolve($this->split($this->internal($canonical))[0]);

            // A canonical that resolves to nothing is already an error from the
            // link scan; do not say it twice.
            if ($target !== null && $target !== $page) {
                $this->error($page, $canonical, 'canonical names another page, ' . $this->relative($target));
            }
        }
    }

    /**
     * Every page in an hreflang cluster must publish the same cluster. That
     * reciprocity is what makes Google treat the translations as one page
     * rather than several competing ones, and a single locale drifting out of the
     * set is invisible in the rendered page.
     */
    private function checkAlternates(array $pages): void
    {
        $clusters = [];

        foreach ($pages as $page) {
            $cluster = [];

            foreach ($this->query($page, '//link[@rel="alternate"][@hreflang]') as $link) {
                $cluster[$link->getAttribute('hreflang')] = $link->getAttribute('href');
            }

            ksort($cluster);
            $clusters[$page] = $cluster;
        }

        foreach ($clusters as $page => $cluster) {
            $targets = [];

            foreach ($cluster as $url) {
                $target = $this->resolve($this->split($this->internal($url))[0]);

                // A cluster member that does not resolve is already an error
                // from the link scan; do not say it twice.
                if ($target === null || $target === $page) {
                    continue;
                }

                // Keyed by file, so x-default and the locale it duplicates
                // report as one page rather than two.
                $targets[$target] = $url;
            }

            foreach ($targets as $target => $url) {
                if ($clusters[$target] !== $cluster) {
                    $this->error(
                        $page,
                        $url,
                        "hreflang cluster differs from the one on {$this->relative($target)}, which breaks reciprocity",
                    );
                }
            }
        }
    }

    /**
     * The sitemap and the build have to agree in both directions. A page listed
     * but never written is a 404 handed straight to a crawler; a page written
     * but never listed is one nobody is told about.
     *
     * noindex decides which pages belong. It is the page's own statement about
     * whether it wants to be found, and listing a noindex URL contradicts
     * itself, so the same signal answers both directions.
     */
    private function checkSitemap(array $pages): void
    {
        $file = "{$this->buildPath}/sitemap.xml";

        if (! is_file($file)) {
            $this->error($file, '/sitemap.xml', 'the sitemap was not built');

            return;
        }

        $listed = [];

        foreach ($this->locations($file) as $url) {
            $target = $this->resolve($this->split($this->internal($url))[0]);

            if ($target === null) {
                $this->error($file, $url, 'sitemap entry resolves to no file in the build');

                continue;
            }

            $listed[$target] = true;
        }

        foreach ($pages as $page) {
            $noindex = $this->isNoindex($page);

            if (! $noindex && ! isset($listed[$page])) {
                $this->error($page, $this->relative($page), 'page is indexable but missing from the sitemap');
            }

            if ($noindex && isset($listed[$page])) {
                $this->error($page, $this->relative($page), 'page is noindex but listed in the sitemap');
            }
        }
    }

    // ------------------------------------------------------------- the build

    /** @return array<int, string> Absolute paths to every built HTML file. */
    private function pages(): array
    {
        $files = [];

        $tree = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($this->buildPath, FilesystemIterator::SKIP_DOTS),
        );

        foreach ($tree as $file) {
            if ($file->isFile() && strtolower($file->getExtension()) === 'html') {
                $files[] = $file->getPathname();
            }
        }

        sort($files);

        return $files;
    }

    /**
     * Pretty URLs mean a path is a directory holding an index.html. The bare
     * file and the .html suffix are tried too, because permalink front matter
     * can write either, as index.html and 404.html both do.
     */
    private function resolve(string $path): ?string
    {
        $path = '/' . ltrim($path, '/');

        $candidates = str_ends_with($path, '/')
            ? [$path . 'index.html']
            : [$path, $path . '/index.html', $path . '.html'];

        foreach ($candidates as $candidate) {
            $file = realpath($this->buildPath . rawurldecode($candidate));

            // realpath also settles the question of whether a crafted path
            // escaped the build directory.
            if ($file !== false && is_file($file) && str_starts_with($file, $this->buildPath . '/')) {
                return $file;
            }
        }

        return null;
    }

    /** @return array<int, array{0: string, 1: string}> [url, context] pairs. */
    private function urlsIn(string $file): array
    {
        $urls = [];

        $attributes = [
            '//a/@href' => 'link',
            '//link/@href' => 'head link',
            '//script/@src' => 'script',
            '//img/@src' => 'image',
            '//form/@action' => 'form action',
            '//meta[@property="og:url" or @property="og:image" or @name="twitter:image"]/@content' => 'social tag',
        ];

        foreach ($attributes as $expression => $context) {
            foreach ($this->query($file, $expression) as $node) {
                $urls[] = [$node->nodeValue ?? '', $context];
            }
        }

        foreach ($this->query($file, '//script[@type="application/ld+json"]') as $node) {
            foreach ($this->jsonLdUrls(json_decode($node->textContent, true)) as $url) {
                $urls[] = [$url, 'structured data'];
            }
        }

        return $urls;
    }

    /** @return array<int, string> */
    private function jsonLdUrls(mixed $node, ?string $key = null): array
    {
        if (is_string($node)) {
            return in_array($key, self::JSON_LD_URL_KEYS, true) ? [$node] : [];
        }

        if (! is_array($node)) {
            return [];
        }

        $urls = [];

        foreach ($node as $childKey => $child) {
            // A list under `sameAs` keeps its parent's key; a nested object
            // gets its own.
            $urls = [...$urls, ...$this->jsonLdUrls($child, is_int($childKey) ? $key : $childKey)];
        }

        return $urls;
    }

    /** @return array<int, string> */
    private function idsIn(string $file): array
    {
        return $this->ids[$file] ??= array_map(
            fn (DOMNode $node) => $node->nodeValue ?? '',
            iterator_to_array($this->query($file, '//*/@id')),
        );
    }

    private function isNoindex(string $file): bool
    {
        foreach ($this->query($file, '//meta[@name="robots"]/@content') as $node) {
            if (str_contains(strtolower($node->nodeValue ?? ''), 'noindex')) {
                return true;
            }
        }

        return false;
    }

    private function canonical(string $file): ?string
    {
        foreach ($this->query($file, '//link[@rel="canonical"]/@href') as $node) {
            return $node->nodeValue;
        }

        return null;
    }

    /** @return array<int, string> */
    private function locations(string $file): array
    {
        $urls = [];

        // getElementsByTagName over the sitemap namespace rather than an XPath
        // query, so the check does not break if the prefix ever changes.
        $document = new DOMDocument();
        $document->loadXML(file_get_contents($file) ?: '');

        foreach ($document->getElementsByTagNameNS('http://www.sitemaps.org/schemas/sitemap/0.9', 'loc') as $node) {
            $urls[] = trim($node->textContent);
        }

        return $urls;
    }

    // ------------------------------------------------------------- plumbing

    /** @return DOMNodeList<DOMNode> */
    private function query(string $file, string $expression): DOMNodeList
    {
        $document = $this->documents[$file] ??= $this->parse($file);

        return (new DOMXPath($document))->query($expression) ?: new DOMNodeList();
    }

    private function parse(string $file): DOMDocument
    {
        $document = new DOMDocument();

        // Blade output is not XHTML and never will be, so libxml complains
        // about perfectly good HTML5. The attributes it reports are correct
        // either way.
        $previous = libxml_use_internal_errors(true);
        $document->loadHTML(file_get_contents($file) ?: '', LIBXML_NOWARNING | LIBXML_NOERROR);
        libxml_clear_errors();
        libxml_use_internal_errors($previous);

        return $document;
    }

    /** Strips our own domain off a URL, leaving anything else untouched. */
    private function internal(string $url): string
    {
        if ($this->baseUrl !== '' && str_starts_with($url, $this->baseUrl)) {
            return substr($url, strlen($this->baseUrl)) ?: '/';
        }

        return $url;
    }

    /** @return array{0: string, 1: ?string} [path, fragment] */
    private function split(string $url): array
    {
        $url = explode('?', $url, 2)[0];

        return str_contains($url, '#')
            ? [explode('#', $url, 2)[0], explode('#', $url, 2)[1]]
            : [$url, null];
    }

    private function detectBaseUrl(): string
    {
        foreach ($this->pages() as $page) {
            $canonical = $this->canonical($page);

            if ($canonical !== null && preg_match('#^(https?://[^/]+)#i', $canonical, $matches)) {
                return $matches[1];
            }
        }

        return '';
    }

    private function relative(string $file): string
    {
        return ltrim(str_replace($this->buildPath, '', $file), '/');
    }

    private function error(string $page, string $url, string $detail): void
    {
        $this->errors[] = [
            'page' => $this->relative($page),
            'url' => $url,
            'detail' => $detail,
        ];
    }

    // --------------------------------------------------------------- report

    /** One line per finding, plus the notices, ready to print or to throw. */
    public function report(): string
    {
        $lines = [];

        foreach ($this->errors as $error) {
            $lines[] = "  {$error['page']}\n    {$error['url']}\n    {$error['detail']}";
        }

        return implode("\n", $lines);
    }

    /** Everything that is worth knowing but is nobody's bug. */
    public function notices(): string
    {
        $lines = [];

        $total = array_sum($this->placeholders);

        if ($total > 0) {
            $lines[] = "  {$total} links point at '#' across " . count($this->placeholders) . ' pages.';

            foreach ($this->unresolvedLinkKeys() as $key) {
                $lines[] = "    config.php links.{$key}";
            }
        }

        foreach ($this->externals as $host => $pages) {
            $lines[] = '  ' . count($pages) . " links to {$host}, not fetched.";
        }

        return implode("\n", $lines);
    }

    /**
     * Which destinations are actually missing. Every '#' in the build comes
     * from one of these, and the count alone does not say which.
     *
     * @return array<int, string>
     */
    private function unresolvedLinkKeys(): array
    {
        $config = __DIR__ . '/../../config.php';

        if (! is_file($config)) {
            return [];
        }

        $links = (require $config)['links'] ?? [];

        return array_keys(array_filter($links, fn ($url) => $url === '#'));
    }
}

// Running the file directly prints the report and sets an exit code, so it
// works as a command and as a CI step. Required from elsewhere, it defines the
// class and does nothing.
if (PHP_SAPI === 'cli' && isset($argv[0]) && realpath($argv[0]) === __FILE__) {
    $check = LinkCheck::run($argv[1] ?? 'build_production');

    if ($notices = $check->notices()) {
        echo "Notices\n{$notices}\n\n";
    }

    if ($check->passed()) {
        echo "No dead links.\n";

        exit(0);
    }

    echo count($check->errors()) . " dead links\n" . $check->report() . "\n";

    exit(1);
}
