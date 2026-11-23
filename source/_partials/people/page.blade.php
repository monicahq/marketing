@php
    $copy = $page->t('people');

    // Shared by every section.
    $container = 'mx-auto w-full max-w-page';
    $narrow = 'mx-auto w-full max-w-[1040px]';
    $split = 'grid items-center gap-x-18 gap-y-12 lg:grid-cols-2';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy text-text-secondary text-pretty';
    $closing = 'text-copy font-medium text-text text-pretty';

    // A link that leads on to the page covering a subject in full.
    $more = 'flex w-fit items-center gap-1.5 text-copy font-medium text-text underline decoration-border-strong underline-offset-4 hover:text-text hover:decoration-text';
    $inline = 'text-text underline decoration-border-strong underline-offset-[3px] hover:text-text hover:decoration-text';

    // The drawings. A drawn window lifts off its tinted panel with the pop
    // shadow, as on the other feature pages.
    $window = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-pop';
    $stamp = 'text-xs text-text-muted';

    // The application's own pieces, as Erica draws them: the labels are
    // `people.ui` in `lang/`, the application's own words for them.
    $ui = $copy['ui'];
    $panel = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-panel';
    $panelHead = 'flex min-h-12 items-center gap-3 border-b border-border px-4 py-3';
    $panelMark = 'grid size-7 flex-none place-items-center rounded-md';
    $panelTitle = 'text-[15px] leading-snug font-semibold tracking-[-0.01em] text-text';
    $smallButton = 'mn-btn mn-btn-secondary mn-btn-small pointer-events-none ml-auto';
    $caption = 'text-caption font-medium tracking-[0.08em] text-text-disabled uppercase';
    $row = 'grid grid-cols-[120px_minmax(0,1fr)] items-baseline gap-4 border-b border-border px-4.5 py-3 last:border-b-0 max-sm:grid-cols-1 max-sm:gap-0.5';
    $badge = 'inline-flex h-5.5 items-center rounded-full bg-hover px-2.25 text-caption font-medium text-text-secondary';
    $sectionTitle = 'text-lede-sm font-semibold tracking-[-0.02em] text-text';
    $person = 'font-medium text-text underline decoration-border-strong underline-offset-2';
@endphp

@include('_partials.people.hero')
@include('_partials.people.details')
@include('_partials.people.relationships')
@include('_partials.people.moments')
@include('_partials.people.assistant')
@include('_partials.faq', ['title' => $copy['faq']['title'], 'items' => $copy['faq']['items'], 'openFirst' => true, 'container' => 'max-w-page px-4 md:px-6'])
@include('_partials.people.cta')
