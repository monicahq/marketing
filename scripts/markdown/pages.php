<?php

use League\HTMLToMarkdown\Converter\TableConverter;
use League\HTMLToMarkdown\HtmlConverter;

/**
 * Writes a Markdown copy of every page the build wrote, next to it:
 * /fr/tarifs/index.html becomes /fr/tarifs.md, and /fr/index.html /fr.md.
 *
 * Read from the build rather than from the templates, as the link check is,
 * so the Markdown says exactly what the page says and cannot drift from it.
 * Only the page's own content is kept: the innermost <main>, without the
 * header, the footer or the cookie notice.
 *
 * A page Jigsaw already writes as Markdown (a blog post, a handbook article)
 * keeps the file Jigsaw wrote, because that one comes from the source text
 * rather than from the rendered page. A page with noindex (the root's redirect
 * stub) gets none: nothing should lead anyone to it.
 *
 * What the conversion does to the markup, before the converter sees it:
 *
 * - A drawing of the interface (`role="img"`) becomes its label, in italics.
 *   It is a picture made of a few hundred elements, and its label is the
 *   sentence that already says what it shows.
 * - Anything a reader of text has no use for is removed: scripts, inline SVG
 *   icons, buttons, form controls, what is hidden from a screen reader, the
 *   night copy of an image that has a day one, navigation (<nav>, and the
 *   sidebars in <aside>, which repeat what the page lists or link elsewhere),
 *   and anything marked `data-md-skip`, which is the switch for everything
 *   else.
 * - A terminal or a code sample drawn in <div>s is marked `data-md-code`, and
 *   becomes a code block: one line per child element, indented by four spaces
 *   where the child is indented with a `pl-` utility.
 * - Siblings marked `data-md-item` become the items of one list.
 * - The question of a <details> (the FAQs) is set in bold above its answer.
 * - A link whose destination is still `#` (a page nobody has written yet)
 *   keeps its words and loses its link.
 * - Every link and image is made absolute, because the file is read away from
 *   the page and a root-relative URL means nothing there.
 */
final class PageMarkdown
{
    /** Elements removed with everything inside them. */
    private const DROPPED = 'script, style, noscript, template, svg, button, input, select, textarea, '
        . 'nav, aside, [aria-hidden="true"], [data-md-skip], [hidden], img[alt=""], img[class~="dark:block"]';

    private HtmlConverter $converter;

    public function __construct(private string $baseUrl)
    {
        $this->converter = new HtmlConverter([
            'header_style' => 'atx',
            'strip_tags' => true,
            'strip_placeholder_links' => true,
            'hard_break' => true,
            'remove_nodes' => 'head',
        ]);

        $this->converter->getEnvironment()->addConverter(new TableConverter());
    }

    /** @return int How many files it wrote. */
    public static function run(string $destination, string $baseUrl): int
    {
        $writer = new self(rtrim($baseUrl, '/'));
        $written = 0;

        $pages = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($destination, FilesystemIterator::SKIP_DOTS));

        foreach ($pages as $file) {
            if ($file->getFilename() !== 'index.html') {
                continue;
            }

            $directory = $file->getPath();

            // The root's own index.html is the redirect stub, whose directory
            // is the build itself and which would land at /.md.
            if ($directory === rtrim($destination, '/')) {
                continue;
            }

            $target = "{$directory}.md";

            if (is_file($target)) {
                continue;
            }

            $markdown = $writer->convert(file_get_contents($file->getPathname()));

            if ($markdown !== null) {
                file_put_contents($target, $markdown);
                $written++;
            }
        }

        return $written;
    }

    public function convert(string $html): ?string
    {
        $document = \Dom\HTMLDocument::createFromString($html, LIBXML_NOERROR);

        foreach ($document->querySelectorAll('meta[name="robots"]') as $robots) {
            if (str_contains($robots->getAttribute('content') ?? '', 'noindex')) {
                return null;
            }
        }

        // The blog nests the article's <main> inside the page's, so the
        // innermost one is the content and the outer one also holds the
        // sidebar.
        $mains = $document->querySelectorAll('main');
        $main = $mains->item($mains->length - 1);

        if ($main === null) {
            return null;
        }

        foreach ($main->querySelectorAll('[role="img"]') as $drawing) {
            if (! $drawing->isConnected) {
                continue;
            }

            $label = trim($drawing->getAttribute('aria-label') ?? '');
            $replacement = $document->createElement('p');

            if ($label !== '') {
                $emphasis = $document->createElement('em');
                $emphasis->textContent = $label;
                $replacement->appendChild($emphasis);
            }

            $drawing->replaceWith($replacement);
        }

        // The list is taken before anything is removed, so a node inside one
        // already removed is skipped rather than removed a second time.
        foreach ($main->querySelectorAll(self::DROPPED) as $node) {
            if ($node->isConnected) {
                $node->remove();
            }
        }

        foreach ($main->querySelectorAll('[data-md-code]') as $code) {
            $lines = [];

            // Walked by sibling rather than through `children`, which PHP has
            // only from 8.5, and CI builds on 8.4.
            for ($line = $code->firstElementChild; $line !== null; $line = $line->nextElementSibling) {
                $indent = preg_match('/(^|\s)pl-/', $line->getAttribute('class') ?? '') ? '    ' : '';
                $lines[] = $indent . str_replace("\u{00A0}", ' ', trim($line->textContent, " \n\r\t"));
            }

            $pre = $document->createElement('pre');
            $pre->appendChild($document->createElement('code'))->textContent = implode("\n", $lines);
            $code->replaceWith($pre);
        }

        // Elements laid out as a list (a row of links drawn as a table of
        // contents) become one: consecutive siblings marked `data-md-item`
        // share a <ul>, one <li> each.
        foreach ($main->querySelectorAll('[data-md-item]') as $item) {
            $list = $item->previousElementSibling;

            if ($list?->tagName !== 'UL' || ! $list->hasAttribute('data-md-list')) {
                $list = $document->createElement('ul');
                $list->setAttribute('data-md-list', '');
                $item->before($list);
            }

            $list->appendChild($document->createElement('li'))->appendChild($item);
        }

        // A question in a <details> would otherwise read as one more line of
        // text before its answer.
        foreach ($main->querySelectorAll('summary') as $summary) {
            $question = $document->createElement('p');
            $question->appendChild($document->createElement('strong'))->textContent = trim($summary->textContent);
            $summary->replaceWith($question);
        }

        foreach ($main->querySelectorAll('a[href="#"]') as $placeholder) {
            $placeholder->replaceWith($document->createTextNode($placeholder->textContent));
        }

        foreach ($main->querySelectorAll('a[href], img[src]') as $node) {
            // A link left with no text (an icon, a badge) would be `[ ](url)`.
            if ($node->tagName === 'A' && trim($node->textContent) === '' && $node->querySelector('img') === null) {
                $node->remove();

                continue;
            }

            $attribute = $node->tagName === 'IMG' ? 'src' : 'href';
            $node->setAttribute($attribute, $this->absolute($node->getAttribute($attribute)));
        }

        $markdown = $this->converter->convert($document->saveHtml($main));

        // The converter keeps the whitespace of the elements it dropped:
        // trailing spaces, lines of nothing but spaces, runs of blank lines.
        // Leading spaces go too, since four of them would make a line a code
        // block, except inside a fenced block (the odd terminal on a page),
        // whose indentation is the content.
        $parts = preg_split('/^(```.*?^```)$/ms', $markdown, -1, PREG_SPLIT_DELIM_CAPTURE);

        foreach ($parts as $i => $part) {
            if ($i % 2 === 0) {
                $part = preg_replace('/[ \t]+$/m', '', $part);
                $part = preg_replace('/^[ \t]+(?=\S)/m', '', $part);
                $part = preg_replace('/(?<=\S)[ \t]{2,}(?=\S)/', ' ', $part);
                // And the spaces a link's markup left inside its brackets.
                $part = preg_replace('/\[[ \t]+(?=\S)/', '[', $part);
                $part = preg_replace('/(?<=\S)[ \t]+\]\(/', '](', $part);
                $parts[$i] = preg_replace("/\n{3,}/", "\n\n", $part);
            }
        }

        $markdown = implode('', $parts);

        return trim($markdown) . "\n";
    }

    private function absolute(string $url): string
    {
        return str_starts_with($url, '/') && ! str_starts_with($url, '//')
            ? $this->baseUrl . $url
            : $url;
    }
}
