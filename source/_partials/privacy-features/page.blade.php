@php
    $copy = $page->t('privacyFeatures');

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
    $windowTitle = 'flex items-center gap-2.5 border-b border-border px-4 py-3';
    $stamp = 'text-xs text-text-muted';
    $button = 'mn-btn mn-btn-small pointer-events-none';
    $iconTile = 'grid size-8 flex-none place-items-center rounded-md border border-border bg-surface-subtle';
    $check = 'grid size-4 flex-none place-items-center rounded-xs';

    // Rachel's phone number, the same wherever her page is drawn.
    $phone = '+1 212 555 0172';
@endphp

@include('_partials.privacy-features.hero')
@include('_partials.privacy-features.audience')
@include('_partials.privacy-features.hidden')
@include('_partials.privacy-features.share')
@include('_partials.privacy-features.tools')
@include('_partials.privacy-features.protect')
@include('_partials.privacy-features.admins')
@include('_partials.privacy-features.hosting')
@include('_partials.privacy-features.logs')
<div class="h-24 lg:h-30"></div>
