@php
    // The panda counting its money, by day and by night. The two files share
    // a size, but each still reads its own so a redraw cannot skew the box.
    $pandaDay = '/assets/images/pricing/panda-money-day.webp';
    $pandaNight = '/assets/images/pricing/panda-money-night.webp';
    $pandaDaySize = $page->imageSize($pandaDay);
    $pandaNightSize = $page->imageSize($pandaNight);
@endphp

<section class="px-4 pt-22 pb-14 md:px-6">
    <div class="{{ $container }} relative flex flex-col items-center gap-5 text-center">
        {{-- Decoration, so it carries no alt text. Above the headline on a
             narrow screen; on a wide one it sits beside the headline, out of
             the column's flow so the copy stays centred on the page. Two
             images rather than a <picture>, so the night one follows the
             theme button and not only the system setting. --}}
        <div class="w-44 xl:absolute xl:top-1/2 xl:left-1/2 xl:ml-[290px] xl:w-[276px] xl:-translate-y-1/2">
            <img
                src="{{ $pandaDay }}"
                alt=""
                width="{{ $pandaDaySize['width'] }}"
                height="{{ $pandaDaySize['height'] }}"
                decoding="async"
                class="block h-auto w-full dark:hidden"
            >
            <img
                src="{{ $pandaNight }}"
                alt=""
                width="{{ $pandaNightSize['width'] }}"
                height="{{ $pandaNightSize['height'] }}"
                loading="lazy"
                decoding="async"
                class="hidden h-auto w-full dark:block"
            >
        </div>

        <div class="flex items-center gap-2 rounded-full border border-border py-1 pr-3 pl-1 text-xs text-text-secondary">
            <span class="mn-badge mn-badge-accent">{{ $copy['hero']['badge'] }}</span>
            <span>{{ $copy['hero']['badgeText'] }}</span>
        </div>

        <h1 class="max-w-[640px] text-display-pricing font-semibold text-balance">{{ $copy['hero']['title'] }}</h1>
        <p class="max-w-[540px] text-copy text-text-secondary text-pretty">{{ $copy['hero']['lede'] }}</p>
    </div>
</section>
