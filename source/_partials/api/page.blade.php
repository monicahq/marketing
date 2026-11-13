@php
    $copy = $page->t('api');

    // Shared by every section.
    $container = 'mx-auto w-full max-w-marketing';
    $section = 'px-4 pt-24 md:px-6 lg:pt-30';
    $split = 'grid items-center gap-14 lg:grid-cols-2';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy-lg text-text-secondary text-pretty';
    $closing = 'text-copy-lg font-medium text-text text-pretty';
    $eyebrow = 'text-caption font-semibold tracking-[0.06em] uppercase';
    $link = 'self-start text-copy font-medium underline';

    // The drawings. A drawn window lifts off its tinted panel as the design
    // system's popover does.
    $window = 'mn-pop overflow-hidden';
    $windowTitle = 'flex items-center gap-2.5 border-b border-border px-4 py-3';
    $stamp = 'text-xs text-text-muted';
    $button = 'mn-btn mn-btn-small pointer-events-none';
    $mono = 'font-mono text-xs';
    $markTile = 'grid size-8 flex-none place-items-center rounded-md border border-border';

    // The people in the drawings, spelled as this language spells them.
    $cast = $page->t('cast');
@endphp

@include('_partials.api.hero')
@include('_partials.api.conversation')
@include('_partials.api.assistants')
@include('_partials.api.scripts')
@include('_partials.api.coverage')
@include('_partials.api.scope')
@include('_partials.api.access')
@include('_partials.api.closing')
