@php
    $open = $copy['open'];
    $shedDay = '/assets/images/ai-memory/shed-day.webp';
    $shedNight = '/assets/images/ai-memory/shed-night.webp';
    $shedDaySize = $page->imageSize($shedDay);
    $shedNightSize = $page->imageSize($shedNight);
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- The panda in its own library, by day and by night: decorative,
             because the heading beside it says it. Both lazy, since the
             section is far below the fold. --}}
        <div class="mx-auto w-full max-w-[480px]">
            <img
                src="{{ $shedDay }}"
                srcset="{{ $shedDay }} 1x, {{ str_replace('.webp', '@2x.webp', $shedDay) }} 2x"
                alt=""
                width="{{ $shedDaySize['width'] }}"
                height="{{ $shedDaySize['height'] }}"
                loading="lazy"
                decoding="async"
                class="block h-auto w-full dark:hidden"
            >
            <img
                src="{{ $shedNight }}"
                srcset="{{ $shedNight }} 1x, {{ str_replace('.webp', '@2x.webp', $shedNight) }} 2x"
                alt=""
                width="{{ $shedNightSize['width'] }}"
                height="{{ $shedNightSize['height'] }}"
                loading="lazy"
                decoding="async"
                class="hidden h-auto w-full dark:block"
            >
        </div>

        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $open['title'] }}</h2>
            <p class="{{ $closing }}">{{ $open['lead'] }}</p>
            @foreach ($open['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
            <p class="{{ $closing }} font-semibold">{{ $open['closing'] }}</p>
            <div class="flex flex-wrap gap-x-6 gap-y-2 pt-1">
                <a href="{{ $page->links['github'] }}" class="inline-flex items-center gap-1.5 text-copy font-medium">{{ $open['github'] }}@include('_partials.icon', ['name' => 'arrow-right', 'size' => 14])</a>
                <a href="{{ $page->links['selfHostingGuide'] }}" class="inline-flex items-center gap-1.5 text-copy font-medium">{{ $open['selfHosting'] }}@include('_partials.icon', ['name' => 'arrow-right', 'size' => 14])</a>
            </div>
        </div>
    </div>
</section>
