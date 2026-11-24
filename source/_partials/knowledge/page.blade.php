@php
    $copy = $page->t('knowledge');
    $ui = $copy['ui'];

    // Shared by every section.
    $container = 'mx-auto w-full max-w-page';
    $narrow = 'mx-auto w-full max-w-[1040px]';
    $split = 'grid grid-cols-1 items-center gap-x-18 gap-y-12 lg:grid-cols-2';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy text-text-secondary text-pretty';
    $closing = 'text-copy font-medium text-text text-pretty';
    $more = 'flex w-fit items-center gap-1.5 text-copy font-medium text-text underline decoration-border-strong underline-offset-4 hover:text-text hover:decoration-text';

    // The application's own pieces, as Erica draws Knowledge
    // (resources/views/app/vaults/knowledge/): the column of folders, the
    // contents, a note and a list, without the shell around them. Their
    // words are `knowledge.ui` in `lang/`, the application's own
    // translations.
    $window = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-pop';
    $panel = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-panel';
    $pageTitle = 'text-[24px] leading-tight font-semibold tracking-[-0.02em] text-text';
    $sectionTitle = 'text-lede-sm font-semibold tracking-[-0.02em] text-text';
    $muted = 'text-small text-text-muted';
    $secondary = 'mn-btn mn-btn-secondary mn-btn-small pointer-events-none';
    $ghost = 'mn-btn mn-btn-ghost mn-btn-small pointer-events-none';

    // A note is drawn with the note glyph and a list with lines, as Erica
    // draws them.
    $glyphs = ['note' => 'note', 'list' => 'text-lines'];

    // Erica sorts the documents of a folder by title, in the reader's
    // language, so the drawings do too: the copy lists them in any order.
    $collator = new \Collator($page->locale);
    $sorted = function (array $documents) use ($collator) {
        usort($documents, fn ($a, $b) => $collator->compare($a[1], $b[1]));

        return $documents;
    };
@endphp

@include('_partials.knowledge.hero')
@include('_partials.knowledge.formats')
@include('_partials.knowledge.organise')
@include('_partials.knowledge.assistant')
@include('_partials.faq', ['title' => $copy['faq']['title'], 'items' => $copy['faq']['items'], 'openFirst' => true, 'container' => 'max-w-page px-4 md:px-6'])
@include('_partials.knowledge.cta')
