@php
    $copy = $page->t('vaults');

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
    $row = 'flex items-center gap-3 px-4 py-2';

    // The two vaults, each with its identity colour: Personal is 1, Work 6.
    // A solid tile keeps a white letter in both themes, because the identity
    // colours do not change in the dark. Literal class strings, so Tailwind's
    // scanner finds them.
    $vaults = [
        ['name' => $copy['personal'], 'solid' => 'bg-identity-1 text-on-inverse-strong', 'tint' => 'bg-identity-1/14 text-identity-1'],
        ['name' => $copy['work'], 'solid' => 'bg-identity-6 text-on-inverse-strong', 'tint' => 'bg-identity-6/14 text-identity-6'],
    ];
    $initial = fn ($name) => mb_substr($name, 0, 1);
    $tile = 'grid flex-none place-items-center rounded-md font-semibold';
@endphp

@include('_partials.vaults.hero')
@include('_partials.vaults.one')
@include('_partials.vaults.split')
@include('_partials.vaults.templates')
@include('_partials.vaults.switch')
@include('_partials.vaults.apart')
<div class="h-24 lg:h-30"></div>
