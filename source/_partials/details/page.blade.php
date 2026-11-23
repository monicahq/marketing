@php
    $copy = $page->t('details');
    $ui = $copy['ui'];

    // Shared by every section.
    $container = 'mx-auto w-full max-w-page';
    $narrow = 'mx-auto w-full max-w-[1040px]';
    $split = 'grid grid-cols-1 items-center gap-x-18 gap-y-12 lg:grid-cols-2';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy text-text-secondary text-pretty';
    $closing = 'text-copy font-medium text-text text-pretty';
    $more = 'flex w-fit items-center gap-1.5 text-copy font-medium text-text underline decoration-border-strong underline-offset-4 hover:text-text hover:decoration-text';
    $inline = 'text-text underline decoration-border-strong underline-offset-[3px] hover:text-text hover:decoration-text';

    // Copy with a link set inside a sentence: the sentence is escaped, then
    // each `:key` becomes a link to its destination.
    $linked = function (string $text, array $links) use ($inline) {
        $text = e($text);
        foreach ($links as $key => [$label, $href]) {
            $text = str_replace(':' . $key, '<a href="' . e($href) . '" class="' . $inline . '">' . e($label) . '</a>', $text);
        }

        return $text;
    };

    // The application's own pieces, as Erica draws them. Their words are
    // `details.ui` in `lang/`, the application's own translations.
    $window = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-pop';
    $panel = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-panel';
    $panelHead = 'flex min-h-12 items-center gap-3 border-b border-border px-4 py-3';
    $panelMark = 'grid size-7 flex-none place-items-center rounded-md';
    $panelTitle = 'text-[15px] leading-snug font-semibold tracking-[-0.01em] text-text';
    $editButton = 'mn-btn mn-btn-secondary mn-btn-small pointer-events-none ml-auto';
    $row = 'grid grid-cols-[120px_minmax(0,1fr)] items-baseline gap-4 border-b border-border px-4.5 py-3 last:border-b-0 max-sm:grid-cols-1 max-sm:gap-0.5';
    $term = 'text-small text-text-muted';
    $entry = 'flex flex-col gap-0.5 rounded-md border border-border bg-surface-subtle px-3.5 py-2.5';
    $badge = 'inline-flex h-5.5 items-center rounded-full bg-hover px-2.25 text-caption font-medium text-text-secondary';
    $choice = 'inline-flex h-6 items-center rounded-full border border-border bg-surface-subtle px-2.25 text-xs text-text-soft';
    $empty = 'text-text-disabled';

    // The section tints, one identity colour each, as DefaultSectionEnum
    // assigns them. Literal class strings, so Tailwind's scanner finds them.
    $tints = [
        'blue' => 'bg-identity-1/12 text-identity-1',
        'green' => 'bg-identity-2/12 text-identity-2',
        'amber' => 'bg-identity-3/12 text-identity-3',
        'rust' => 'bg-identity-4/12 text-identity-4',
        'violet' => 'bg-identity-5/12 text-identity-5',
        'teal' => 'bg-identity-6/12 text-identity-6',
        'plum' => 'bg-identity-7/12 text-identity-7',
    ];
@endphp

@include('_partials.details.hero')
@include('_partials.details.useful')
@include('_partials.details.templates')
@include('_partials.details.names')
@include('_partials.details.context')
@include('_partials.details.assistant')
@include('_partials.faq', ['title' => $copy['faq']['title'], 'items' => $copy['faq']['items'], 'openFirst' => true, 'container' => 'max-w-page px-4 md:px-6'])
@include('_partials.details.cta')
