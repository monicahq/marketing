@php
    $hero = $copy['hero'];
    $deskDay = '/assets/images/mcp/desk-day.webp';
    $deskNight = '/assets/images/mcp/desk-night.webp';
    $deskDaySize = $page->imageSize($deskDay);
    $deskNightSize = $page->imageSize($deskNight);
@endphp

<section class="px-4 pt-22 pb-section-sm md:px-6 lg:pb-section">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex flex-col gap-6">
            <span class="{{ $eyebrow }}">{{ $hero['eyebrow'] }}</span>
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede text-text-soft text-pretty">{{ $hero['lede'] }}</p>
            <p class="{{ $paragraph }}">{{ $hero['body'] }}</p>
            <div class="flex flex-wrap items-center gap-2.5 pt-2">
                <a href="{{ $page->links['mcp'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['connect'] }}</a>
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $hero['start'] }}</a>
                <a href="#tools" class="mn-btn mn-btn-ghost no-underline hover:no-underline">{{ $hero['tools'] }}@include('_partials.icon', ['name' => 'arrow-right', 'size' => 14, 'class' => 'rotate-90'])</a>
            </div>
            <ul class="flex flex-wrap gap-2">
                @foreach ($hero['trust'] as $point)
                    <li class="rounded-full border border-border px-2.5 py-1 text-xs text-text-secondary">{{ $point }}</li>
                @endforeach
            </ul>
        </div>

        <div class="flex flex-col gap-3">
            {{-- The panda at its desk and its filing cabinet, the assistants
                 wired to it, by day and by night: decorative, because the
                 headline says it. The day one is eager since it sits in the
                 first screenful; the night one is lazy, so a reader in light
                 mode never fetches it. --}}
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
            @include('_partials.mcp-server.code', ['text' => $copy['endpoint'], 'caption' => $hero['endpointLabel']])
        </div>
    </div>
</section>
