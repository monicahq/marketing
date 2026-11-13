{{-- How it started, as a timeline: a hairline down the side, a ring per step. --}}
@php
    $history = $copy['history'];
@endphp

<section id="history" class="{{ $section }} scroll-mt-6">
    <div class="{{ $container }} flex flex-col gap-7">
        <div class="flex flex-col gap-1.5">
            <h2 class="{{ $heading }}">{{ $history['title'] }}</h2>
            <p class="{{ $lede }}">{{ $history['lede'] }}</p>
        </div>

        <ol class="ml-1.25 flex flex-col border-l border-border">
            @foreach ($history['items'] as $step)
                <li class="relative flex flex-col gap-1 pb-7 pl-6 last:pb-0">
                    <span class="absolute top-0.75 -left-1.25 size-2.25 rounded-full border-[1.5px] border-text bg-canvas" aria-hidden="true"></span>
                    <span class="font-mono text-mono text-text-muted">{{ $step['year'] }}</span>
                    <span class="text-body font-semibold text-text">{{ $step['title'] }}</span>
                    <p class="max-w-130 {{ $paragraph }}">{{ $step['body'] }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>
