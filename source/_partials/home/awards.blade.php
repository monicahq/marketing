@php
    $copy = $page->t('home.awards');

    // The badges in their issuers' look, drawn in HTML by `awards/badge`. Their
    // words are the issuers' and stay in English, as the badges themselves
    // do; `label` is the translated sentence a screen reader hears instead.
    // Colour classes are literal strings, for Tailwind's scanner. A badge
    // with an `href` links to the ranking it claims.
    //
    // One column on a phone, two by two from `md`, one row from 1216px: the
    // width at which the four fit side by side (about 1150px of badges and
    // gaps, plus the section's padding). No token falls there, since `lg` is
    // 1024px and `xl` 1440px, hence the one arbitrary breakpoint. Each
    // popover is held to its badge's outer edge wherever the badge sits at
    // the edge of the layout (left column, right column, either end of the
    // row) and centred otherwise, so no card runs off the page. The arrow
    // positions are half each badge's width, measured, so they point at the
    // badge's middle.
    $badges = [
        [
            'rank' => '1',
            'kicker' => 'GitHub Trending',
            'title' => 'Repository Of The Day',
            'label' => $copy['github'],
            'href' => $page->links['trending'],
            'mark' => 'github',
            'popover' => $copy['trendingPopover'],
            'popoverId' => 'awards-trending-popover',
            'popoverImage' => 'panda-throne',
            'popoverImageWidth' => 'w-28',
            'popoverWidth' => 'w-100',
            'popoverPlace' => 'left-1/2 -translate-x-1/2 md:left-0 md:translate-x-0',
            'popoverArrow' => 'left-1/2 md:left-36',
            'popoverOrigin' => 'origin-top md:origin-top-left',
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
            'popover' => $copy['hnPopover'],
            'popoverId' => 'awards-hn-popover',
            'popoverImage' => 'panda-desk',
            'popoverImageWidth' => 'w-40',
            'popoverWidth' => 'w-120',
            'popoverPlace' => 'left-1/2 -translate-x-1/2 md:right-0 md:left-auto md:translate-x-0 min-[1216px]:right-auto min-[1216px]:left-1/2 min-[1216px]:-translate-x-1/2',
            'popoverArrow' => 'left-1/2 md:right-38 md:left-auto min-[1216px]:right-auto min-[1216px]:left-1/2',
            'popoverOrigin' => 'origin-top md:origin-top-right min-[1216px]:origin-top',
            'ink' => 'text-hacker-news',
            'accent' => 'border-hacker-news',
            'rankColor' => 'text-hacker-news',
        ],
        [
            'rank' => '4',
            'kicker' => 'Product Hunt',
            'title' => '#4 Product Of The Day',
            'label' => $copy['ph'],
            'popover' => $copy['phPopover'],
            'popoverId' => 'awards-ph-popover',
            'popoverImage' => 'panda-cage',
            'popoverImageWidth' => 'w-40',
            'popoverWidth' => 'w-120',
            'popoverPlace' => 'left-1/2 -translate-x-1/2 md:left-0 md:translate-x-0 min-[1216px]:left-1/2 min-[1216px]:-translate-x-1/2',
            'popoverArrow' => 'left-1/2 md:left-31 min-[1216px]:left-1/2',
            'popoverOrigin' => 'origin-top md:origin-top-left min-[1216px]:origin-top',
            'ink' => 'text-product-hunt',
            'accent' => 'border-product-hunt',
            'rankColor' => 'text-product-hunt',
        ],
        [
            'rank' => '14M',
            'kicker' => '14M Downloads',
            'title' => 'Docker Hub',
            'titleFirst' => true,
            'label' => $copy['docker'],
            'href' => $page->links['dockerHub'],
            'mark' => 'docker',
            'popover' => $copy['dockerPopover'],
            'popoverId' => 'awards-docker-popover',
            'popoverImage' => 'panda-whale',
            'popoverImageWidth' => 'w-40',
            'popoverWidth' => 'w-120',
            'popoverPlace' => 'left-1/2 -translate-x-1/2 md:right-0 md:left-auto md:translate-x-0',
            'popoverArrow' => 'left-1/2 md:right-24 md:left-auto',
            'popoverOrigin' => 'origin-top md:origin-top-right',
            'ink' => 'text-docker',
            'accent' => 'border-docker',
            'rankColor' => 'text-docker',
        ],
    ];
@endphp

<section aria-label="{{ $copy['label'] }}" class="px-4 pt-20 pb-24 md:px-6">
    <div class="mx-auto flex max-w-300 flex-col items-center gap-6">
        <span class="text-caption font-medium tracking-[0.08em] text-ground-sage-ink uppercase">{{ $copy['label'] }}</span>
        <div class="grid grid-cols-1 justify-items-center gap-x-5 gap-y-4 md:grid-cols-2 min-[1216px]:flex min-[1216px]:items-center min-[1216px]:justify-center">
            @foreach ($badges as $badge)
                @include('_partials.home.awards.badge', $badge)
            @endforeach
        </div>
    </div>
</section>
