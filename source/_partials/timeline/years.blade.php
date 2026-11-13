@php
    $years = $copy['years'];

    // Each event's icon and colour, year by year, in the order of `years`.
    $eventIcons = [
        [['activity', 2]],
        [['journal', 3], ['organization', 5]],
        [['activity', 1]],
    ];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $years['title'] }}</h2>
            @foreach ($years['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
            <p class="{{ $closing }}">{{ $years['close'] }}</p>
        </div>

        {{-- Four years of a family's timeline, newest first. --}}
        <div class="rounded-lg bg-identity-1/14 p-5 md:p-10">
            <div role="img" aria-label="{{ $years['label'] }}" class="{{ $window }} flex flex-col px-5.5 pt-5 pb-1.5">
                @foreach ($years['years'] as $y => $year)
                    <div class="flex items-baseline gap-2 pb-3 pl-12 {{ $y > 0 ? 'pt-2' : '' }}">
                        <span class="text-title font-semibold">{{ $year['year'] }}</span>
                        <span class="{{ $stamp }}">{{ $year['count'] }}</span>
                    </div>
                    @foreach ($year['events'] as $e => $event)
                        @include('_partials.timeline.entry', [
                            'icon' => $eventIcons[$y][$e][0],
                            'tile' => $tiles[$eventIcons[$y][$e][1]],
                            'event' => $event,
                            'last' => $loop->parent->last && $loop->last,
                        ])
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</section>
