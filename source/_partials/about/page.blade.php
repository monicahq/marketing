@php
    $copy = $page->t('about');

    // The two of us, in the order the copy lists us. The photos are the blog's
    // author photos, so a new picture is one file for both.
    $photos = [
        '/assets/images/authors/regis.webp',
        '/assets/images/authors/alexis.webp',
    ];

    // Shared by every section. The page is a single reading column, narrower
    // than the feature pages, because it is mostly prose.
    $container = 'mx-auto w-full max-w-form';
    $section = 'px-4 pt-24 md:px-6';
    $eyebrow = 'text-caption font-medium tracking-[0.08em] text-text-muted uppercase';
    $heading = 'text-heading font-semibold text-text text-balance';
    $lede = 'text-copy text-text-muted';
    $paragraph = 'text-copy text-text-secondary text-pretty';
    $card = 'rounded-lg border border-border bg-canvas shadow-panel';
@endphp

@include('_partials.about.hero')
@include('_partials.about.team')
@include('_partials.about.facts')
@include('_partials.about.history')
@include('_partials.about.why')
@include('_partials.about.nos')
@include('_partials.about.open-source')
@include('_partials.about.sign-off')
