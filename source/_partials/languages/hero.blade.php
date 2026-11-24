@php
    $hero = $copy['hero'];
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[760px] flex-col items-center gap-5 text-center">
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede font-medium text-text text-pretty">{{ $hero['lede'] }}</p>
            <p class="text-lede text-text-secondary text-pretty">{{ $hero['body'] }}</p>
            <div class="pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
            </div>
        </div>

        {{-- The pandas around the world, one picture for both themes: its
             background is transparent, so it sits on the page by day and by
             night alike. 836px at most, the 1x file's own width, with an @2x
             copy for retina screens. Eager, because its top is in the first
             screenful on a desktop. --}}
        <img
            src="/assets/images/languages/globe.webp"
            srcset="/assets/images/languages/globe.webp 1x, /assets/images/languages/globe@2x.webp 2x"
            alt="{{ $hero['alt'] }}"
            width="836"
            height="471"
            decoding="async"
            class="mx-auto mt-12 h-auto w-full max-w-[836px]"
        >
    </div>
</section>
