@php
    $copy = $page->t('timeline');

    // Shared by every section.
    $container = 'mx-auto w-full max-w-marketing';
    $section = 'px-4 pt-24 md:px-6 lg:pt-30';
    $split = 'grid items-center gap-14 lg:grid-cols-2';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy-lg text-text-secondary text-pretty';
    $closing = 'text-copy-lg font-medium text-text text-pretty';
    $eyebrow = 'text-caption font-semibold tracking-[0.06em] uppercase';

    // The drawings. A drawn window lifts off its tinted panel as the design
    // system's popover does.
    $window = 'mn-pop overflow-hidden';
    $windowTitle = 'flex items-center gap-3 border-b border-border px-4.5 py-3.5';
    $stamp = 'text-xs text-text-muted';
    $button = 'mn-btn mn-btn-small pointer-events-none';
    $box = 'rounded-md border border-border bg-canvas px-2.5 py-1.75 text-base';
    $option = 'rounded-full border border-border px-2.5 py-0.75 text-xs font-medium';

    // An event type's tile, one per identity colour. Literal class strings,
    // so Tailwind's scanner finds them. Each event type keeps its colour
    // wherever it appears: Thanksgiving is 4, a wedding 7, time together 2.
    $tiles = [
        1 => 'bg-identity-1/14 text-identity-1',
        2 => 'bg-identity-2/14 text-identity-2',
        3 => 'bg-identity-3/14 text-identity-3',
        4 => 'bg-identity-4/14 text-identity-4',
        5 => 'bg-identity-5/14 text-identity-5',
        6 => 'bg-identity-6/14 text-identity-6',
        7 => 'bg-identity-7/14 text-identity-7',
        8 => 'bg-identity-8/14 text-identity-8',
    ];
    $tile = 'grid flex-none place-items-center rounded-md';

    // The people in the drawings, spelled as this language spells them, and
    // the five friends at Thanksgiving in the order the drawings list them.
    $cast = $page->t('cast');
    $separator = $page->t('listSeparator');
    $friends = array_map(fn ($who) => $cast[$who], ['rachel', 'ross', 'chandler', 'joey', 'phoebe']);
@endphp

@include('_partials.timeline.hero')
@include('_partials.timeline.milestones')
@include('_partials.timeline.moment')
@include('_partials.timeline.story')
@include('_partials.timeline.years')
@include('_partials.timeline.traditions')
@include('_partials.timeline.fields')
<div class="h-24 lg:h-30"></div>
