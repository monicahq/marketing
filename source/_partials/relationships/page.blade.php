@php
    $copy = $page->t('relationships');

    // Shared by every section.
    $container = 'mx-auto w-full max-w-marketing';
    $section = 'px-4 pt-24 md:px-6 lg:pt-30';
    $split = 'grid items-center gap-14 lg:grid-cols-2';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy-lg text-text-secondary text-pretty';
    $closing = 'text-copy-lg font-medium text-text text-pretty';
    $eyebrow = 'text-caption font-semibold tracking-[0.06em] uppercase';

    // The drawings. A drawn window lifts off its tinted panel with the pop
    // shadow, as the design draws it.
    $window = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-pop';
    $stamp = 'text-xs text-text-muted';
    $button = 'mn-btn mn-btn-small pointer-events-none';
    $box = 'rounded-md border bg-canvas px-2.5 py-2 text-base';
    $focused = 'border-focus ring-3 ring-focus/20';
    $groupTitle = $eyebrow . ' px-5 pt-3.5 pb-1.5 text-text-muted';
    $row = 'flex items-center gap-3 px-5 py-2';
@endphp

@include('_partials.relationships.hero')
@include('_partials.relationships.sides')
@include('_partials.relationships.tree')
@include('_partials.relationships.unknown')
@include('_partials.relationships.history')
@include('_partials.relationships.types')
<div class="h-24 lg:h-30"></div>
