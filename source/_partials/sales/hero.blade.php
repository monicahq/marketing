@php
    $hero = $copy['hero'];

    // The panda asleep at the sales desk, by day and by night. The two files
    // do not share a ratio, so each reads its own size.
    $deskDay = '/assets/images/sales/desk-day.webp';
    $deskNight = '/assets/images/sales/desk-night.webp';
    $deskDaySize = $page->imageSize($deskDay);
    $deskNightSize = $page->imageSize($deskNight);
@endphp

<section class="px-4 pt-22 pb-section-sm md:px-6 lg:pb-section">
    <div class="{{ $container }} grid items-center gap-14 lg:grid-cols-2">
        <div class="flex flex-col items-start gap-5">
            <span class="{{ $eyebrow }}">{{ $hero['eyebrow'] }}</span>
            <h1 class="text-display-lg font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="{{ $lede }} max-w-[520px]">{{ $hero['lede'] }}</p>
            <p class="text-copy-lg text-text-soft">{{ $hero['aside'] }}</p>
            <div class="pt-2">
                <a href="#book-a-meeting" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
            </div>
        </div>

        {{-- Decorative, because the headline says it. The day one is eager
             since it sits in the first screenful; the night one is lazy, so a
             reader in light mode never fetches it. Two images rather than a
             <picture>, so the night one follows the theme button. --}}
        <div>
            <img
                src="{{ $deskDay }}"
                srcset="{{ $deskDay }} 1x, {{ str_replace('.webp', '@2x.webp', $deskDay) }} 2x"
                alt=""
                width="{{ $deskDaySize['width'] }}"
                height="{{ $deskDaySize['height'] }}"
                decoding="async"
                class="mx-auto block h-auto w-full max-w-[560px] dark:hidden"
            >
            <img
                src="{{ $deskNight }}"
                srcset="{{ $deskNight }} 1x, {{ str_replace('.webp', '@2x.webp', $deskNight) }} 2x"
                alt=""
                width="{{ $deskNightSize['width'] }}"
                height="{{ $deskNightSize['height'] }}"
                loading="lazy"
                decoding="async"
                class="mx-auto hidden h-auto w-full max-w-[560px] dark:block"
            >
        </div>
    </div>
</section>
