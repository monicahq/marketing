{{-- Who makes Monica, in two paragraphs, and the two ways down the page. --}}
@php
    $hero = $copy['hero'];
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }} flex flex-col gap-5">
        <span class="{{ $eyebrow }}">{{ $hero['eyebrow'] }}</span>
        <h1 class="text-display-sm font-semibold text-balance text-text md:text-display-lg">{{ $hero['title'] }}</h1>
        <p class="text-copy-lg font-medium text-text-soft text-pretty">{{ $hero['lede'] }}</p>

        <div class="grid gap-6 pt-1 md:grid-cols-2">
            @foreach ($hero['body'] as $text)
                <p class="{{ $paragraph }}">{{ $text }}</p>
            @endforeach
        </div>

        <div class="flex flex-wrap gap-2 pt-2">
            <a href="#team" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['team'] }}</a>
            <a href="#history" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $hero['history'] }}</a>
        </div>
    </div>
</section>
