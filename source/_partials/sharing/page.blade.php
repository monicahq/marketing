@php
    $copy = $page->t('sharing');

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
    $panel = 'overflow-hidden rounded-lg border border-border shadow-panel';
    $windowTitle = 'flex flex-col gap-0.5 border-b border-border px-4 py-3.5';
    $stamp = 'text-xs text-text-muted';
    $button = 'mn-btn mn-btn-small pointer-events-none';
    $iconTile = 'grid size-7 flex-none place-items-center rounded-md border border-border bg-surface-subtle';
    $footer = 'flex justify-end gap-2 border-t border-border bg-surface-subtle px-4.5 py-3';

    // Joey's phone number, the same wherever his page is drawn.
    $phone = '+1 212 555 0148';
@endphp

@include('_partials.sharing.hero')
@include('_partials.sharing.visitor')
@include('_partials.sharing.selection')
@include('_partials.sharing.expiry')
@include('_partials.sharing.send')
@include('_partials.sharing.update')
@include('_partials.sharing.visits')
@include('_partials.sharing.revoke')
<div class="h-24 lg:h-30"></div>
