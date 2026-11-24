{{-- Why Monica exists, in Régis's words, beside the four promises that follow from it. --}}
@php
    $why = $copy['why'];
@endphp

<section class="px-4 pt-18 md:px-6">
    <div class="{{ $container }} grid items-start gap-10 md:grid-cols-2">
        <div class="flex flex-col gap-3.5">
            <h2 class="{{ $heading }}">{{ $why['title'] }}</h2>
            @foreach ($why['body'] as $text)
                <p class="{{ $paragraph }}">{{ $text }}</p>
            @endforeach
            <span class="text-small text-text-muted">{{ $why['signature'] }}</span>
        </div>

        <ul class="flex flex-col rounded-lg border border-border bg-surface-subtle">
            @foreach ($why['promises'] as $promise)
                <li class="flex gap-3 border-b border-border px-5 py-4 last:border-b-0">
                    <span class="flex-none pt-0.5 text-text">@include('_partials.icon', ['name' => 'check', 'size' => 15])</span>
                    <span class="flex flex-col gap-0.5">
                        <span class="text-copy font-semibold text-text">{{ $promise['t'] }}</span>
                        <span class="text-small text-text-muted text-pretty">{{ $promise['b'] }}</span>
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
</section>
