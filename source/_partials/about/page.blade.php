@php
    $copy = $page->t('about');

    // The two of us, in the order the copy lists us. The photos are the blog's
    // author photos, so a new picture is one file for both.
    $photos = [
        '/assets/images/authors/regis.webp',
        '/assets/images/authors/alexis.webp',
    ];

    // The large cut-out portraits in the team section, each with a retina
    // copy at twice the pixels, and the identity colour of its arch. The
    // classes are literal so Tailwind's scanner sees them.
    $portraits = [
        ['src' => '/assets/images/about/regis.webp', 'src2x' => '/assets/images/about/regis@2x.webp', 'arch' => 'bg-identity-3/14', 'dot' => 'bg-identity-3', 'row' => 'md:flex-row'],
        ['src' => '/assets/images/about/alexis.webp', 'src2x' => '/assets/images/about/alexis@2x.webp', 'arch' => 'bg-identity-1/14', 'dot' => 'bg-identity-1', 'row' => 'md:flex-row-reverse'],
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
