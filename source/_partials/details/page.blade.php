@php
    $copy = $page->t('details');

    // Shared by every section.
    $container = 'mx-auto w-full max-w-marketing';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy-lg text-text-secondary text-pretty';
    $closing = 'text-copy-lg font-medium text-text text-pretty';
    $eyebrow = 'text-caption font-semibold tracking-[0.06em] uppercase';

    // The drawings. A drawn window lifts off its tinted panel as the design
    // system's popover does; a smaller card inside a window is its panel.
    $window = 'mn-pop overflow-hidden';
    $card = 'mn-panel';
    $cardTitle = 'mn-panel-header text-copy font-semibold';
    $note = 'text-body text-text-soft text-pretty';
    $stamp = 'text-xs text-text-muted';

    // The people in the drawings, spelled as this language spells them.
    $cast = $page->t('cast');
    $separator = $page->t('listSeparator');
@endphp

@include('_partials.details.hero')
@include('_partials.details.audition')
@include('_partials.details.little')
@include('_partials.details.own')
@include('_partials.details.people')
@include('_partials.details.moments')
@include('_partials.feature-cta', ['cta' => $copy['cta']])
