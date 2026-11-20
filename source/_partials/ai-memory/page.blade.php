@php
    $copy = $page->t('aiMemory');

    // Shared by every section.
    $container = 'mx-auto w-full max-w-marketing';
    $section = 'px-4 pt-24 md:px-6 lg:pt-30';
    $split = 'grid items-center gap-14 lg:grid-cols-2';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy-lg text-text-secondary text-pretty';
    $closing = 'text-copy-lg font-medium text-text text-pretty';
    $eyebrow = 'text-caption font-semibold tracking-[0.06em] uppercase';
    $note = 'text-small text-text-muted text-pretty';
    $quote = 'rounded-lg border border-border bg-surface-subtle px-3.5 py-3 text-body text-text-soft';

    // The drawings. A drawn window lifts off its tinted panel as the design
    // system's popover does.
    $window = 'mn-pop overflow-hidden';
    $windowTitle = 'flex items-center gap-2.5 border-b border-border px-4 py-3';
    $stamp = 'text-xs text-text-muted';
    $button = 'mn-btn mn-btn-small pointer-events-none';
    $mono = 'font-mono text-xs';
    $markTile = 'grid size-8 flex-none place-items-center rounded-md border border-border';
    $mark = '/assets/images/monica-panda-mark.svg';
@endphp

@include('_partials.ai-memory.hero')
@include('_partials.ai-memory.problem')
@include('_partials.ai-memory.how')
@include('_partials.ai-memory.remember')
@include('_partials.ai-memory.see')
@include('_partials.ai-memory.structure')
@include('_partials.ai-memory.retrieval')
@include('_partials.ai-memory.visibility')
@include('_partials.ai-memory.start')
@include('_partials.ai-memory.open')
@include('_partials.ai-memory.compare')
@include('_partials.faq', ['title' => $copy['faq']['title'], 'items' => $copy['faq']['items']])
@include('_partials.ai-memory.closing')
