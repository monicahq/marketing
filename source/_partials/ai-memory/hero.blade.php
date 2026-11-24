@php
    $hero = $copy['hero'];
    $libraryDay = '/assets/images/ai-memory/library-day.webp';
    $libraryNight = '/assets/images/ai-memory/library-night.webp';
    $libraryDaySize = $page->imageSize($libraryDay);
    $libraryNightSize = $page->imageSize($libraryNight);
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[760px] flex-col items-center gap-6 text-center">
            <span class="{{ $eyebrow }} text-text-muted">{{ $hero['eyebrow'] }}</span>
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede font-medium text-text-soft text-balance">{{ $hero['lede'] }}</p>
            <p class="max-w-[620px] text-copy-lg text-text-secondary text-pretty">{{ $hero['body'] }}</p>
            <div class="flex flex-wrap justify-center gap-2.5 pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
                <a href="#how-it-works" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $hero['how'] }}</a>
            </div>
            <p class="{{ $note }}">{{ $hero['note'] }}</p>
        </div>

        {{-- The panda's library, by day and by night, as the pricing hero
             draws its panda: decorative, because the headline says it. The
             day one is eager since it sits in the first screenful; the night
             one is lazy, so a reader in light mode never fetches it. --}}
        <div class="mx-auto mt-12 max-w-[1100px]">
            <img
                src="{{ $libraryDay }}"
                srcset="{{ $libraryDay }} 1x, {{ str_replace('.webp', '@2x.webp', $libraryDay) }} 2x"
                alt=""
                width="{{ $libraryDaySize['width'] }}"
                height="{{ $libraryDaySize['height'] }}"
                decoding="async"
                class="block h-auto w-full dark:hidden"
            >
            <img
                src="{{ $libraryNight }}"
                srcset="{{ $libraryNight }} 1x, {{ str_replace('.webp', '@2x.webp', $libraryNight) }} 2x"
                alt=""
                width="{{ $libraryNightSize['width'] }}"
                height="{{ $libraryNightSize['height'] }}"
                loading="lazy"
                decoding="async"
                class="hidden h-auto w-full dark:block"
            >
        </div>
    </div>
</section>
