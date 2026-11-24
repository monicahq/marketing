@php
    $copy = $page->t('notes');

    // The note and the Home folder are the knowledge page's: the same note
    // in the same vault, so the two pages read them from one place.
    $knowledge = $page->t('knowledge');
    $note = $knowledge['note'];
    $kui = $knowledge['ui'];
    // The folder column reads `$ui` for Knowledge's words.
    $ui = $kui;
    $eui = $copy['ui'];

    // Shared by every section.
    $container = 'mx-auto w-full max-w-page';
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
@endphp

@include('_partials.notes.hero')
@include('_partials.notes.markdown')
@include('_partials.notes.headings')
@include('_partials.notes.folders')
@include('_partials.notes.assistant')
@include('_partials.faq', ['title' => $copy['faq']['title'], 'items' => $copy['faq']['items'], 'openFirst' => true, 'container' => 'max-w-page px-4 md:px-6'])
@include('_partials.notes.cta')
