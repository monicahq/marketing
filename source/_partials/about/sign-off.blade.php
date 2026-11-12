{{-- The closing line, signed by both of us. --}}
@php
    $signOff = $copy['signOff'];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col items-center gap-4 rounded-lg border border-border bg-surface-subtle px-6 py-16 text-center">
        <h2 class="max-w-115 text-display-sm font-semibold text-balance text-text">{{ $signOff['title'] }}</h2>
        <p class="max-w-105 {{ $paragraph }}">{{ $signOff['body'] }}</p>
        <div class="flex items-center gap-4 pt-2">
            @foreach ($signOff['names'] as $name)
                <span class="flex items-center gap-2">
                    @include('_partials.about.photo', ['src' => $photos[$loop->index], 'class' => 'size-7'])
                    <span class="text-small font-semibold text-text">{{ $name }}</span>
                </span>
            @endforeach
        </div>
    </div>
</section>
