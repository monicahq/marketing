{{-- Everything the vault owns, opened on one location and its rooms. --}}
@php
    $o = $copy['possessions'];
    $roomCounts = [0, 1, 3, 1, 1];
    // The bar under the location: the four rooms holding something, then no specific spot.
    $segments = [
        ['Bedroom', 1, 'bg-identity-2', 'grow'],
        ['Kitchen', 3, 'bg-identity-3', 'grow-3'],
        ['Living room', 1, 'bg-identity-4', 'grow'],
        ['Storage space', 1, 'bg-identity-5', 'grow'],
        ['No specific spot', 1, 'bg-border-strong', 'grow'],
    ];
    $segmentLabels = [$o['rooms'][1], $o['rooms'][2], $o['rooms'][3], $o['rooms'][4], $o['noSpot']];
    $featuredIcons = [['briefcase', 'bg-identity-4/12 text-identity-4'], ['gift', 'bg-identity-3/12 text-identity-3']];
    $itemIcons = [
        ['food', 'bg-identity-7/12 text-identity-7'],
        ['briefcase', 'bg-identity-4/12 text-identity-4'],
        ['home', 'bg-identity-6/12 text-identity-6'],
        ['ball', 'bg-identity-2/12 text-identity-2'],
        ['profile', 'bg-identity-2/12 text-identity-2'],
    ];
@endphp
<div class="flex flex-col gap-5 p-5 md:p-7">
    <div class="flex items-start justify-between gap-3">
        <div class="flex flex-col gap-1">
            <span class="text-heading-sm font-semibold text-text">{{ $o['title'] }}</span>
            <span class="text-base text-text-secondary">{{ $o['summary'] }}</span>
        </div>
        <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none max-sm:hidden">{{ $o['add'] }}</span>
    </div>

    <div class="flex gap-5">
        <div class="{{ $card }} flex w-60 flex-none flex-col gap-0.5 self-start p-2.5 max-lg:hidden">
            <div class="flex items-center justify-between px-2 py-1.5">
                <span class="text-caption font-medium tracking-[0.08em] text-text-muted uppercase">{{ $o['locations'] }}</span>
                <span class="text-small text-text underline underline-offset-2">{{ $o['manage'] }}</span>
            </div>
            <div class="flex items-center gap-2 px-2 py-1.5 text-base text-text">@include('_partials.icon', ['name' => 'layers', 'size' => 14, 'class' => 'text-text-muted']) <span class="flex-1">{{ $o['all'] }}</span> <span class="text-small text-text-muted">10</span></div>
            <div class="flex items-center gap-2 rounded-md border border-border bg-surface-subtle px-2 py-1.5 text-base font-medium text-text">@include('_partials.icon', ['name' => 'place', 'size' => 14, 'class' => 'text-identity-1']) <span class="flex-1">{{ $o['house'] }}</span> <span class="text-small text-text-muted">7</span></div>
            @foreach ($o['rooms'] as $r => $room)
                <div class="flex items-center gap-2 py-1.5 pr-2 pl-5 text-base text-text">@include('_partials.icon', ['name' => 'chevron-right', 'size' => 12, 'class' => 'text-identity-1']) <span class="flex-1">{{ $room }}</span> <span class="text-small text-text-muted">{{ $roomCounts[$r] }}</span></div>
            @endforeach
        </div>

        <div class="flex min-w-0 flex-1 flex-col gap-5">
            <div class="{{ $card }} flex flex-col gap-3 p-4">
                <div class="flex items-start justify-between gap-4">
                    <div class="flex flex-col">
                        <span class="text-body font-semibold text-text">{{ $o['house'] }}</span>
                        <span class="text-small text-text-muted">{{ $o['house'] }}</span>
                    </div>
                    <div class="flex gap-6 text-small text-text-muted">
                        <span class="flex flex-col">{{ $o['count'] }} <span class="text-xl font-semibold text-text">7</span></span>
                        <span class="flex flex-col">{{ $o['declared'] }} <span class="text-xl font-semibold text-text">{{ $o['total'] }}</span></span>
                    </div>
                </div>
                <div class="flex gap-1">
                    @foreach ($segments as [$key, $count, $colour, $grow])
                        <span class="h-1.5 basis-0 rounded-full {{ $colour }} {{ $grow }}"></span>
                    @endforeach
                </div>
                <div class="flex flex-wrap gap-x-4 gap-y-1 text-small text-text-secondary">
                    @foreach ($segments as $s => [$key, $count, $colour])
                        <span class="flex items-center gap-1.5"><span class="size-2 rounded-full {{ $colour }}"></span> {{ $segmentLabels[$s] }} <span class="text-text-muted">{{ $count }}</span></span>
                    @endforeach
                </div>
            </div>

            <span class="text-body font-semibold text-text">{{ $o['featured'] }}</span>
            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ($o['featuredItems'] as $f => $item)
                    <div class="{{ $card }} flex gap-3 p-4">
                        <span class="grid size-8 flex-none place-items-center rounded-md {{ $featuredIcons[$f][1] }}">@include('_partials.icon', ['name' => $featuredIcons[$f][0]])</span>
                        <div class="min-w-0 flex-1 text-base">
                            <div class="font-semibold text-text">{{ $item['title'] }}</div>
                            <div class="text-small text-text-muted">{{ $item['meta'] }}</div>
                            <p class="mt-1.5 text-text-secondary">{{ $item['body'] }}</p>
                        </div>
                        @include('_partials.icon', ['name' => 'star-filled', 'class' => 'flex-none text-warning'])
                    </div>
                @endforeach
            </div>

            <span class="text-body font-semibold text-text">{{ $o['keptAt'] }}</span>
            <div class="{{ $card }}">
                @foreach ($o['items'] as $i => $item)
                    <div class="flex items-center gap-3 border-border-subtle px-4 py-3 not-last:border-b">
                        <span class="grid size-8 flex-none place-items-center rounded-md {{ $itemIcons[$i][1] }}">@include('_partials.icon', ['name' => $itemIcons[$i][0]])</span>
                        <div class="min-w-0 flex-1 text-base">
                            <div class="font-semibold text-text">{{ $item['title'] }}</div>
                            <div class="text-small text-text-muted">{{ $item['meta'] }}</div>
                        </div>
                        <span class="text-base text-text">{{ $item['value'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
