@php
    $moment = $copy['moment'];

    // The three timelines drawn under the event, in the order of `before`.
    $timelines = array_map(fn ($who) => $cast[$who], ['rachel', 'joey', 'phoebe']);

    $entry = 'flex flex-col gap-0.5 border-l-2 pl-3 text-small';
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $moment['title'] }}</h2>
            <div class="flex flex-col gap-4">
                <p class="{{ $closing }}">{{ $moment['lead'] }}</p>
                <p class="{{ $paragraph }}">{{ $moment['body'] }}</p>
            </div>
        </div>

        {{-- Thanksgiving, recorded once, and the same entry on three of the
             timelines it belongs to. --}}
        <div role="img" aria-label="{{ $moment['label'] }}" class="flex flex-col gap-5 rounded-lg bg-identity-2/14 p-4 md:p-12">
            <div class="{{ $window }} flex flex-wrap items-center gap-4 px-5 py-4">
                <span class="{{ $tile }} size-9 {{ $tiles[4] }}">
                    @include('_partials.icon', ['name' => 'gift', 'size' => 16])
                </span>
                <div class="flex min-w-50 flex-1 flex-col gap-0.5">
                    <span class="text-copy font-semibold">{{ $moment['event'] }}</span>
                    <span class="{{ $stamp }}">{{ $moment['when'] }}</span>
                </div>
                <div class="flex flex-wrap gap-1.5">
                    @foreach ($friends as $friend)
                        <span class="flex items-center gap-1.5 rounded-full border border-border py-0.75 pr-2.5 pl-0.75 text-xs font-medium">
                            @include('_partials.avatar-initials', ['name' => $friend['full'], 'size' => 20])
                            {{ $friend['first'] }}
                        </span>
                    @endforeach
                </div>
            </div>

            <div class="grid gap-4 md:grid-cols-3">
                @foreach ($timelines as $i => $person)
                    <div class="mn-panel flex flex-col gap-3 p-4">
                        <div class="flex items-center gap-2">
                            @include('_partials.avatar-initials', ['name' => $person['full'], 'size' => 24])
                            <span class="text-base font-semibold">{{ strtr($moment['timeline'], [':name' => $person['first']]) }}</span>
                        </div>
                        <div class="{{ $entry }} border-identity-4/30">
                            <strong class="font-semibold">{{ $moment['event'] }}</strong>
                            <span class="text-text-muted">{{ $moment['date'] }}</span>
                        </div>
                        <div class="{{ $entry }} border-border text-text-secondary">{{ $moment['before'][$i] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
