@php
    $home = $page->route('home');

    // Nav items in order. Entries whose destination is a page that does not
    // exist yet keep the design's placeholder href. `current` names the route
    // key, so aria-current follows the page being rendered.
    $navItems = [
        ['label' => $page->t('nav.product'), 'href' => $home, 'current' => 'home'],
        ['label' => $page->t('nav.v3'), 'href' => $page->route('v3'), 'current' => 'v3'],
        ['label' => $page->t('nav.pricing'), 'href' => $page->route('pricing'), 'current' => 'pricing'],
        ['label' => $page->t('nav.openSource'), 'href' => '#open-source'],
        ['label' => $page->t('nav.blog'), 'href' => $page->links['blog']],
        ['label' => $page->t('nav.docs'), 'href' => $page->links['docs']],
    ];

    $navLink = 'inline-flex flex-none items-center border-b-2 border-transparent text-small text-text-secondary no-underline transition-colors duration-100 ease-standard hover:border-text hover:text-text hover:no-underline aria-[current=page]:border-text aria-[current=page]:font-medium aria-[current=page]:text-text max-lg:h-9 lg:h-16';
@endphp

<header class="border-b border-border">
    {{-- `min-h-16` is what centres a single row on desktop. Below `lg` the bar
         wraps into two rows, the min-height stops doing anything, and the logo
         ends up flush against the announcement bar above it, so the wrapped
         layout pays for its own vertical padding.

         The gap is split: 24px between items on a row, 12px between the rows,
         which is enough to separate them without a mobile header that tall. --}}
    <div class="mx-auto flex min-h-16 w-full max-w-marketing flex-wrap items-stretch gap-x-6 gap-y-3 px-4 max-lg:py-4 md:px-8">
        <a href="{{ $home }}" class="flex items-center gap-3 text-text no-underline hover:no-underline">
            {{-- `width`/`height` are the SVG's intrinsic ratio, so the browser
                 reserves the right box before it loads; `w-6 h-auto` sizes it.
                 The JPG needed `mix-blend-multiply` to hide its white
                 background. This one is transparent, so the hack is gone. --}}
            <img
                src="/assets/images/monica-panda-mark.svg"
                alt=""
                width="32"
                height="29"
                class="h-auto w-6 flex-none"
            >
            <span class="text-title font-semibold tracking-[-0.015em]">Monica</span>
        </a>

        <nav
            aria-label="{{ $page->t('nav.label') }}"
            {{-- The bottom padding moved to the container, so the space below
                 the nav matches the space above the logo. --}}
            class="flex min-w-0 items-stretch gap-6 max-lg:order-3 max-lg:h-auto max-lg:basis-full max-lg:overflow-x-auto lg:ml-8"
        >
            @foreach ($navItems as $item)
                <a
                    href="{{ $item['href'] }}"
                    @if (($item['current'] ?? null) === $page->page) aria-current="page" @endif
                    class="{{ $navLink }}"
                >{{ $item['label'] }}</a>
            @endforeach
        </nav>

        <div class="flex-1"></div>

        <div class="flex items-center gap-2">
            <a
                href="{{ $page->links['github'] }}"
                class="mn-btn mn-btn--secondary mn-btn--sm gap-2 no-underline hover:no-underline"
            >
                @include('_partials.icon', ['name' => 'star'])
                <span>{{ $page->t('nav.stars', [':count' => $page->starCount]) }}</span>
            </a>
            <a href="{{ $page->links['signIn'] }}" class="mn-btn mn-btn--quiet mn-btn--sm no-underline hover:no-underline">
                {{ $page->t('nav.signIn') }}
            </a>
            <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn--primary mn-btn--sm no-underline hover:no-underline">
                {{ $page->t('nav.getStarted') }}
            </a>
        </div>
    </div>
</header>
