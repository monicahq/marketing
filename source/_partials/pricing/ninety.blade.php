@php
    $ninety = $copy['ninety'];

    // Each card's glyph, kept here so a translation cannot rename one.
    $icons = [
        'bouquets' => 'heart',
        'gift' => 'gift',
        'coffees' => 'activity',
        'streaming' => 'device',
        'cards' => 'mail',
        'dinner' => 'place',
        'addressBook' => 'journal',
        'monica' => 'star-filled',
    ];
@endphp

<section class="px-4 pt-28 md:px-6">
    <div class="{{ $container }} flex flex-col items-center gap-10">
        <div class="flex flex-col items-center gap-3 text-center">
            <span class="{{ $eyebrow }}">{{ $ninety['eyebrow'] }}</span>
            <h2 class="text-display-md font-semibold text-balance">{{ $ninety['title'] }}</h2>
            <p class="max-w-[500px] text-copy text-text-secondary text-pretty">{{ $ninety['lede'] }}</p>
        </div>

        <ul class="grid w-full grid-cols-[repeat(auto-fit,minmax(min(100%,220px),1fr))] gap-3">
            @foreach ($ninety['items'] as $key => $item)
                <li class="flex flex-col gap-2 rounded-lg border border-border bg-canvas p-4.5 shadow-panel">
                    <div class="flex items-center justify-between">
                        {{-- Every other thing costs about a year of Monica; Monica costs exactly that. --}}
                        <span class="font-mono text-mono text-text-muted">{{ $loop->last ? $prices['yearly'] : $ninety['about'] }}</span>
                        <span class="grid size-7 place-items-center rounded-md border border-border bg-surface-subtle text-text">
                            @include('_partials.icon', ['name' => $icons[$key], 'size' => 15])
                        </span>
                    </div>
                    <h3 class="pt-1 text-body font-semibold text-text">{{ $item['title'] }}</h3>
                    <p class="text-small text-text-secondary text-pretty">{{ $item['body'] }}</p>
                </li>
            @endforeach
        </ul>

        <p class="text-center text-xs text-text-muted">{{ $ninety['footnote'] }}</p>
    </div>
</section>
