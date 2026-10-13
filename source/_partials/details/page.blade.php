@php
    $copy = $page->t('details');

    // Shared by every section.
    $container = 'mx-auto w-full max-w-marketing';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy-lg text-text-secondary text-pretty';
    $closing = 'text-copy-lg font-medium text-text text-pretty';
    $eyebrow = 'text-caption font-semibold tracking-[0.06em] uppercase';

    // The drawings. A drawn window lifts off its tinted panel with the pop
    // shadow, as the design draws it; a smaller card inside a window keeps the
    // one pixel of `shadow-panel`.
    $window = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-pop';
    $card = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-panel';
    $cardTitle = 'border-b border-border px-4 py-3.5 text-copy font-semibold';
    $note = 'text-body text-text-soft text-pretty';
    $stamp = 'text-xs text-text-muted';
@endphp

@include('_partials.details.hero')
@include('_partials.details.audition')
@include('_partials.details.little')
@include('_partials.details.own')
@include('_partials.details.people')
@include('_partials.details.moments')
@include('_partials.details.cta')
