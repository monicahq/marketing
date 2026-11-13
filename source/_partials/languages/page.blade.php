@php
    $copy = $page->t('languages');

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
    $row = 'flex items-center gap-3 border-b border-border px-3.5 py-3 last:border-b-0';

    // Ji-woo's name, as she writes it and in Latin letters. A name is not
    // copy: it is the same in every language.
    $hangul = '김지우';
    $latin = 'Kim Ji-woo';
@endphp

@include('_partials.languages.hero')
@include('_partials.languages.language')
@include('_partials.languages.names')
@include('_partials.languages.forms')
@include('_partials.languages.display')
@include('_partials.languages.dates')
@include('_partials.languages.timezone')
<div class="h-24 lg:h-30"></div>
