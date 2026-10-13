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
    $weekend = ['Ross Geller', 'Rachel Green', 'Monica Geller', 'Chandler Bing', 'Joey Tribbiani'];
    $firstNames = array_map(fn ($name) => explode(' ', $name)[0], $weekend);
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
                <div class="flex items-baseline gap-2 pt-1.5 pb-2.5 pl-11">
                    <span class="text-title font-semibold">2026</span>
                    <span class="{{ $stamp }}">{{ strtr($moments['entries'], [':count' => count($moments['events'])]) }}</span>
                </div>

                @foreach ($moments['events'] as $e => $event)
                    <div class="flex gap-4">
                        <div class="flex flex-none flex-col items-center">
                            <span class="grid size-7 place-items-center rounded-full {{ $marks[$e]['class'] }}">
                                @include('_partials.icon', ['name' => $marks[$e]['icon'], 'size' => 14])
                            </span>
                            @unless ($loop->last)
                                <span class="min-h-4 w-px flex-1 bg-border"></span>
                            @endunless
                        </div>
                        <div class="flex flex-col gap-1 pt-1 pb-5 text-base">
                            <span><strong class="font-semibold">{{ $event['title'] }}</strong> <span class="text-text-muted">· {{ $event['date'] }}</span></span>
                            <span class="text-text-secondary">{{ $event['body'] }}</span>
                            @if ($loop->last)
                                <span class="text-text-muted">{{ strtr($moments['with'], [':names' => implode(', ', $firstNames)]) }}</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="{{ $window }} pb-1.5">
                <div class="flex flex-col gap-0.5 border-b border-border px-4.5 py-3.5">
                    <span class="text-copy font-semibold">{{ $moments['events'][2]['title'] }}</span>
                    <span class="{{ $stamp }}">{{ strtr($moments['onTimelines'], [':count' => count($weekend)]) }}</span>
                </div>
                @foreach ($weekend as $name)
                    <div class="flex items-center gap-3 px-4.5 py-2.5">
                        @include('_partials.avatar-initials', ['name' => $name, 'size' => 28])
                        <span class="text-base font-semibold">{{ $name }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
