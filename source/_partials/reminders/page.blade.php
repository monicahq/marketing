@php
    $copy = $page->t('reminders');

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
    $windowTitle = 'flex items-center gap-3 border-b border-border px-4.5 py-3.5';
    $stamp = 'text-xs text-text-muted';
    $button = 'mn-btn mn-btn-small pointer-events-none';
@endphp

@include('_partials.reminders.hero')
@include('_partials.reminders.once')
@include('_partials.reminders.yearly')
@include('_partials.reminders.habit')
@include('_partials.reminders.zone')
@include('_partials.reminders.channels')
@include('_partials.reminders.answer')
@include('_partials.reminders.attention')
@include('_partials.reminders.cta')
