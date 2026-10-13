@php
    $copy = $page->t('templates');
    $fields = $copy['fields'];
    $types = $copy['types'];

    // Shared by every section.
    $container = 'mx-auto w-full max-w-marketing';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy-lg text-text-secondary text-pretty';
    $closing = 'text-copy-lg font-medium text-text text-pretty';
    $eyebrow = 'text-caption font-semibold tracking-[0.06em] uppercase';

    // The drawings. A drawn window lifts off its tinted panel as the design
    // system's popover does; a smaller card inside a panel is its panel.
    $window = 'mn-pop overflow-hidden';
    $card = 'mn-panel';
    $badge = 'mn-badge mn-badge-neutral';

    // The people in the drawings, spelled as this language spells them.
    $cast = $page->t('cast');
@endphp

@include('_partials.templates.hero')
@include('_partials.templates.birthday')
@include('_partials.templates.people')
@include('_partials.templates.room')
@include('_partials.templates.reuse')
@include('_partials.templates.versions')
@include('_partials.templates.share')
