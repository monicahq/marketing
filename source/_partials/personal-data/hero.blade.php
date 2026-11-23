@php
    $hero = $copy['hero'];
    $shelvesDay = '/assets/images/personal-data/shelves-day.webp';
    $shelvesNight = '/assets/images/personal-data/shelves-night.webp';
    $shelvesDaySize = $page->imageSize($shelvesDay);
    $shelvesNightSize = $page->imageSize($shelvesNight);
@endphp

<section class="px-4 pt-22 pb-section-sm md:px-6 lg:pb-section">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex flex-col gap-6">
            <span class="{{ $eyebrow }}">{{ $hero['eyebrow'] }}</span>
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede text-text-soft text-pretty">{{ $hero['lede'] }}</p>
            <p class="{{ $paragraph }}">{{ $hero['body'] }}</p>
            <div class="flex flex-wrap gap-2.5 pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
                <a href="#organize" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $hero['organize'] }}</a>
            </div>
            <p class="{{ $note }}">{{ $hero['note'] }}</p>
        </div>

        {{-- The panda organizing its shelves, by day and by night:
             decorative, because the headline says it. The day one is eager
             since it sits in the first screenful; the night one is lazy, so a
             reader in light mode never fetches it. --}}
        <div class="mx-auto w-full max-w-[520px]">
            <img
                src="{{ $shelvesDay }}"
                srcset="{{ $shelvesDay }} 1x, {{ str_replace('.webp', '@2x.webp', $shelvesDay) }} 2x"
                alt=""
                width="{{ $shelvesDaySize['width'] }}"
                height="{{ $shelvesDaySize['height'] }}"
                decoding="async"
                class="block h-auto w-full dark:hidden"
            >
            <img
                src="{{ $shelvesNight }}"
                srcset="{{ $shelvesNight }} 1x, {{ str_replace('.webp', '@2x.webp', $shelvesNight) }} 2x"
                alt=""
                width="{{ $shelvesNightSize['width'] }}"
                height="{{ $shelvesNightSize['height'] }}"
                loading="lazy"
                decoding="async"
                class="hidden h-auto w-full dark:block"
            >
        </div>
    </div>
</section>
