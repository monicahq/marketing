@php
    $copy = $page->t('home.awards');

    // The badges in their issuers' look, drawn in HTML by `awards/badge`. Their
    // words are the issuers' and stay in English, as the badges themselves
    // do; `label` is the translated sentence a screen reader hears instead.
    // Colour classes are literal strings, for Tailwind's scanner. A badge
    // with an `href` links to the ranking it claims.
    $badges = [
        [
            'rank' => '1',
            'kicker' => 'GitHub Trending',
            'title' => 'Repository Of The Day',
            'label' => $copy['github'],
            'href' => $page->links['trending'],
            'github' => true,
            'ink' => 'text-trending-ink',
            'accent' => 'border-trending',
            'rankColor' => 'text-trending',
        ],
        [
            'rank' => '65',
            'kicker' => 'Hacker News',
            'title' => '#65 Most Voted Links Of All Time',
            'label' => $copy['hn'],
            'href' => $page->links['hackerNews'],
            'ink' => 'text-hacker-news',
            'accent' => 'border-hacker-news',
            'rankColor' => 'text-hacker-news',
        ],
        [
            'rank' => '4',
            'kicker' => 'Product Hunt',
            'title' => '#4 Product Of The Day',
            'label' => $copy['ph'],
            'ink' => 'text-product-hunt',
            'accent' => 'border-product-hunt',
            'rankColor' => 'text-product-hunt',
        ],
    ];
@endphp

<section aria-label="{{ $copy['label'] }}" class="px-4 pt-20 pb-24 md:px-6">
    <div class="mx-auto flex max-w-page flex-col items-center gap-6">
        <span class="text-caption font-medium tracking-[0.08em] text-ground-sage-ink uppercase">{{ $copy['label'] }}</span>
        <div class="flex flex-wrap items-center justify-center gap-x-5 gap-y-4">
            @foreach ($badges as $badge)
                @include('_partials.home.awards.badge', $badge)
            @endforeach
        </div>
    </div>
</section>
