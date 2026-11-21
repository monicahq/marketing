@php
    $moments = $copy['moments'];

    // One mark per kind of event, in the order of `events` in `lang/`. The
    // mark is the identity colour on a low tint of itself. Literal class
    // strings, so Tailwind's scanner finds them.
    $marks = [
        ['icon' => 'heart', 'class' => 'bg-identity-7/14 text-identity-7'],
        ['icon' => 'activity', 'class' => 'bg-identity-1/14 text-identity-1'],
        ['icon' => 'place', 'class' => 'bg-identity-2/14 text-identity-2'],
    ];

    // Everybody who went to Montauk. The weekend is on each of their timelines.
    $weekend = array_map(fn ($who) => $cast[$who], ['ross', 'rachel', 'monica', 'chandler', 'joey']);
@endphp

<section class="px-4 pt-24 md:px-6 lg:pt-30">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $moments['title'] }}</h2>
            <div class="flex flex-col gap-4">
                @foreach ($moments['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
                <p class="{{ $closing }}">{{ $moments['close'] }}</p>
            </div>
        </div>

        <div role="img" aria-label="{{ $moments['label'] }}" class="grid items-start gap-5 rounded-lg bg-identity-3/14 p-4 md:p-10 lg:grid-cols-2 lg:p-12">
            <div class="{{ $window }} flex flex-col gap-1 px-6 pt-5 pb-2">
                <div class="flex flex-wrap items-center justify-between gap-3 pb-3">
                    <span class="text-title font-semibold">{{ $moments['timeline'] }}</span>
                    <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $moments['addEvent'] }}</span>
                </div>
                <div class="flex items-baseline gap-2 pt-1.5 pb-2.5 pl-12">
                    <span class="text-title font-semibold">{{ $moments['year'] }}</span>
                    <span class="{{ $stamp }}">{{ strtr($moments['entries'], [':count' => count($moments['events'])]) }}</span>
                </div>

                @foreach ($moments['events'] as $e => $event)
                    @include('_partials.timeline.entry', [
                        'icon' => $marks[$e]['icon'],
                        'tile' => $marks[$e]['class'],
                        'event' => ['title' => $event['title'], 'date' => $event['date'], 'note' => $event['body']],
                        'with' => $loop->last ? array_column($weekend, 'first') : null,
                        'withLine' => $moments['with'],
                        'last' => $loop->last,
                    ])
                @endforeach
            </div>

            <div class="{{ $window }} pb-1.5">
                <div class="flex flex-col gap-0.5 border-b border-border px-4.5 py-3.5">
                    <span class="text-copy font-semibold">{{ $moments['events'][2]['title'] }}</span>
                    <span class="{{ $stamp }}">{{ strtr($moments['onTimelines'], [':count' => count($weekend)]) }}</span>
                </div>
                @foreach ($weekend as $person)
                    <div class="flex items-center gap-3 px-4.5 py-2.5">
                        @include('_partials.avatar-initials', ['name' => $person['full'], 'size' => 28])
                        <span class="text-base font-semibold">{{ $person['full'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
