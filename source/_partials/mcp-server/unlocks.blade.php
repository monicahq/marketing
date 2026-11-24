@php
    $unlocks = $copy['unlocks'];

    // The three stops of a call, left to right: the assistant starts it,
    // Monica answers it. Monica never reads a conversation on its own.
    $stops = [
        ['icon' => 'device', 'tile' => 'bg-identity-5/14 text-identity-5'],
        ['icon' => 'link', 'tile' => 'bg-identity-1/14 text-identity-1'],
        ['icon' => 'vault', 'tile' => 'bg-identity-6/14 text-identity-6'],
    ];
@endphp

<section class="{{ $section }} {{ $band }}">
    <div class="{{ $container }} flex flex-col gap-14">
        <div class="grid gap-6 lg:grid-cols-2 lg:gap-14">
            <h2 class="{{ $title }}">{{ $unlocks['title'] }}</h2>
            <div class="flex flex-col gap-4">
                @foreach ($unlocks['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
                <p class="{{ $closing }}">{{ $unlocks['closing'] }}</p>
            </div>
        </div>

        <ol class="grid gap-4 lg:grid-cols-3 lg:gap-10">
            @foreach ($unlocks['flow'] as $i => $stop)
                <li class="{{ $card }} relative flex flex-col gap-2 p-6">
                    <div class="flex items-center justify-between">
                        <span class="grid size-10 place-items-center rounded-lg {{ $stops[$i]['tile'] }}">@include('_partials.icon', ['name' => $stops[$i]['icon'], 'size' => 18])</span>
                        <span aria-hidden="true" class="{{ $mono }} text-text-muted">{{ sprintf('%02d', $i + 1) }}</span>
                    </div>
                    <h3 class="pt-1.5 text-copy font-semibold">{{ $stop['title'] }}</h3>
                    <p class="text-body text-text-secondary text-pretty">{{ $stop['body'] }}</p>
                    @unless ($loop->last)
                        {{-- The arrow to the next stop, in the gap between the
                             cards. Only drawn when they are side by side. --}}
                        <span aria-hidden="true" class="absolute top-1/2 -right-8 hidden -translate-y-1/2 text-text-muted lg:block">@include('_partials.icon', ['name' => 'arrow-right', 'size' => 16])</span>
                    @endunless
                </li>
            @endforeach
        </ol>
    </div>
</section>
