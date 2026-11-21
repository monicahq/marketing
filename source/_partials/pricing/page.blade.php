@php
    /**
     * The whole page's copy, read once with the four prices filled in. The
     * prices live in `pricing.prices` and nowhere else, so the copy quotes
     * them as :free, :monthly, :yearly and :lifetime, and the sections below
     * share this one `$copy` rather than each reading `lang/` again.
     */
    $prices = $page->t('pricing.prices');

    $copy = $page->t('pricing', [
        ':free' => $prices['free'],
        ':monthly' => $prices['monthly'],
        ':yearly' => $prices['yearly'],
        ':lifetime' => $prices['lifetime'],
    ]);

    // Shared by every section: the width, and the small uppercase label.
    $container = 'mx-auto w-full max-w-page';
    $eyebrow = 'text-caption font-medium tracking-[0.08em] text-text-muted uppercase';
@endphp

@include('_partials.pricing.hero')
@include('_partials.pricing.self-host')
@include('_partials.pricing.plans')
@include('_partials.pricing.calculator')
@include('_partials.pricing.promises')
@include('_partials.pricing.ninety')
@include('_partials.pricing.faq')
