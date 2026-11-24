@php
    $copy = $page->t('folders');
    $fui = $copy['ui'];

    // The folders, the Home folder and the paint list are the knowledge
    // page's: the same records in the same vault.
    $knowledge = $page->t('knowledge');
    // The folder column reads `$ui` for Knowledge's words.
    $ui = $knowledge['ui'];

    // Shared by every section.
    $narrow = 'mx-auto w-full max-w-[1040px]';
    $split = 'grid grid-cols-1 items-center gap-x-18 gap-y-12 lg:grid-cols-2';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy text-text-secondary text-pretty';
    $closing = 'text-copy font-medium text-text text-pretty';
    $inline = 'text-text underline decoration-border-strong underline-offset-[3px] hover:text-text hover:decoration-text';
    $window = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-pop';

    // Copy with a link set inside a sentence: the sentence is escaped, then
    // each `:key` becomes a link to its destination.
    $linked = function (string $text, array $links) use ($inline) {
        $text = e($text);
        foreach ($links as $key => [$label, $href]) {
            $text = str_replace(':' . $key, '<a href="' . e($href) . '" class="' . $inline . '">' . e($label) . '</a>', $text);
        }

        return $text;
    };

    // What the knowledge partials need: a note's and a list's glyphs, and
    // Erica's order for a folder's documents, by title in this language.
    $glyphs = ['note' => 'note', 'list' => 'text-lines'];
    $collator = new \Collator($page->locale);
    $sorted = function (array $documents) use ($collator) {
        usort($documents, fn ($a, $b) => $collator->compare($a[1], $b[1]));

        return $documents;
    };

    // The column of folders with every folder folded but the one named,
    // which shows its documents (or only those given).
    $column = function (?int $open, ?array $documents = null) use ($knowledge) {
        $tree = [];
        foreach ($knowledge['folders'] as $f => $folder) {
            $tree[] = [$folder['name'], $folder['count'], $f === $open ? array_map(fn ($d) => [$d[0], $d[1]], $documents ?? $knowledge['home']) : null];
        }

        return $tree;
    };
@endphp

@include('_partials.folders.hero')
@include('_partials.folders.simple')
@include('_partials.folders.together')
@include('_partials.folders.search')
@include('_partials.folders.vaults')
@include('_partials.faq', ['title' => $copy['faq']['title'], 'items' => $copy['faq']['items'], 'openFirst' => true, 'container' => 'max-w-page px-4 md:px-6'])
@include('_partials.folders.cta')
