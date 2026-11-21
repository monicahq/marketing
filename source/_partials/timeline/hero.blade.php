@php
    $hero = $copy['hero'];

    // How many entries sit behind each tab, in the order of `tabs`. The first
    // tab is the one selected.
    $tabCounts = [102, 2];

    // Each event's icon and colour, in the order of `events`.
    $eventIcons = [['gift', 4], ['people', 2]];

    // The first five wedding guests drawn, before "and 38 more".
    $guests = array_map(fn ($who) => $cast[$who]['full'], ['monica', 'chandler', 'ross', 'rachel', 'phoebe']);
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[780px] flex-col items-center gap-5 text-center">
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede font-medium text-text text-pretty">{{ $hero['intro'] }}</p>
            <p class="max-w-[640px] text-lede text-text-secondary text-pretty">{{ $hero['lede'] }}</p>
            <div class="pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
            </div>
        </div>

        {{-- A vault's timeline, and a wedding from earlier in the year. One
             picture of the product, read out by its label. --}}
        <div role="img" aria-label="{{ $hero['label'] }}" class="mt-16 grid items-start gap-6 rounded-lg bg-identity-4/14 p-4 md:p-10 lg:grid-cols-2 lg:p-14">
            <div class="{{ $window }} flex flex-col gap-5 p-6">
                <div class="flex items-center gap-3">
                    <span class="{{ $tile }} size-10 bg-identity-1/14 text-title font-semibold text-identity-1">{{ mb_substr($hero['vault'], 0, 1) }}</span>
                    <span class="text-heading font-semibold">{{ $hero['vault'] }}</span>
                </div>

                <div class="flex flex-wrap items-center justify-between gap-3">
                    <div class="flex rounded-lg border border-border bg-surface-subtle p-0.75 text-small font-medium">
                        @foreach ($hero['tabs'] as $t => $tab)
                            <span class="flex gap-2 rounded-md px-3 py-1.5 {{ $t === 0 ? 'bg-canvas shadow-nav-active' : 'text-text-secondary' }}">
                                {{ $tab }} <span class="text-text-muted">{{ $tabCounts[$t] }}</span>
                            </span>
                        @endforeach
                    </div>
                    <span class="{{ $button }} mn-btn-secondary">
                        @include('_partials.icon', ['name' => 'plus', 'size' => 16])
                        {{ $copy['add'] }}
                    </span>
                </div>

                <div class="flex flex-col">
                    <div class="flex items-baseline gap-2 pt-1 pb-3 pl-12">
                        <span class="text-title font-semibold">{{ $hero['year'] }}</span>
                        <span class="{{ $stamp }}">{{ $hero['count'] }}</span>
                    </div>
                    @foreach ($hero['events'] as $e => $event)
                        @include('_partials.timeline.entry', [
                            'icon' => $eventIcons[$e][0],
                            'tile' => $tiles[$eventIcons[$e][1]],
                            'event' => $event,
                            'with' => $e === 0 ? array_column($friends, 'first') : [$cast['phoebe']['first']],
                            'last' => $loop->last,
                        ])
                    @endforeach
                </div>
            </div>

            <div class="flex flex-col gap-4 lg:pt-18">
                <div class="{{ $eyebrow }} text-identity-4">{{ $hero['earlier'] }}</div>
                <div class="{{ $window }}">
                    <div class="flex items-center gap-3 border-b border-border px-4.5 py-4">
                        <span class="{{ $tile }} size-8 {{ $tiles[7] }}">
                            @include('_partials.icon', ['name' => 'heart', 'size' => 16])
                        </span>
                        <div class="flex flex-col gap-0.5">
                            <span class="text-copy font-semibold">{{ $hero['wedding']['title'] }}</span>
                            <span class="{{ $stamp }}">{{ $hero['wedding']['type'] }}</span>
                        </div>
                    </div>
                    <dl class="grid grid-cols-[90px_minmax(0,1fr)] gap-x-3 gap-y-2.5 px-4.5 py-3.5 text-base">
                        @foreach ($hero['wedding']['facts'] as $fact)
                            <dt class="text-text-muted">{{ $fact['label'] }}</dt>
                            <dd class="font-medium">{{ $fact['value'] }}</dd>
                        @endforeach
                    </dl>
                    <div class="flex flex-wrap items-center gap-1.5 border-t border-border-subtle px-4.5 pt-3 pb-4">
                        @foreach ($guests as $guest)
                            @include('_partials.avatar-initials', ['name' => $guest, 'size' => 26])
                        @endforeach
                        <span class="ml-1.5 {{ $stamp }}">{{ $hero['wedding']['more'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
