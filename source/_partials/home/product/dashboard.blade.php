{{-- The vault's dashboard: its timeline of life events, and who is close at hand. --}}
@php
    $d = $copy['dashboard'];
    // Per event, in the order of `years` in lang/: its icon, its tint, and who was there.
    $timeline = $timelineFrom($d['years'], ['2010', '2009', '2008'], [
        [['activity', 'bg-identity-2/12 text-identity-2', ['Jack', 'Erica', 'Chandler', 'Ben', 'Emma', 'Ross', 'Susan']]],
        [
            ['book', 'bg-identity-3/12 text-identity-3', ['Jack', 'Erica', 'Chandler', 'Jack', 'Judy']],
            ['organization', 'bg-identity-5/12 text-identity-5', ['Jack', 'Erica', 'Chandler']],
        ],
        [
            ['activity', 'bg-identity-2/12 text-identity-2', ['Jack', 'Erica', 'Joey', 'Emma']],
            ['health', 'bg-identity-4/12 text-identity-4', ['Jack', 'Erica', 'Phoebe']],
        ],
    ]);
    $favourites = ['Chandler Bing', 'Rachel Green', 'Ross Geller'];
    $recent = ['Phoebe Buffay', 'Frank Buffay Jr.', 'Nora Bing', 'Jack Bing', 'Helena Bing'];
@endphp
<div class="flex flex-col gap-5 p-5 md:p-7">
    <div class="flex items-center gap-3">
        <span class="grid size-11 flex-none place-items-center rounded-lg bg-identity-1/12 text-xl font-semibold text-identity-1">{{ mb_substr($copy['vault'], 0, 1) }}</span>
        <span class="flex-1 text-heading-sm font-semibold text-text">{{ $copy['vault'] }}</span>
        <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none max-sm:hidden">@include('_partials.icon', ['name' => 'plus', 'size' => 14]) {{ $d['add'] }}</span>
    </div>
    <div class="flex flex-wrap gap-x-6 gap-y-1 text-base text-text-secondary">
        @foreach ($d['stats'] as $stat)
            <span>{{ $stat }}</span>
        @endforeach
    </div>

    <div class="flex gap-8">
        <div class="min-w-0 flex-1">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <div class="flex items-center gap-1 rounded-md border border-border bg-surface-subtle p-1 text-small font-medium">
                    <span class="flex items-center gap-2 rounded-sm bg-canvas px-2.5 py-1 text-text shadow-nav-active">@include('_partials.icon', ['name' => 'timeline', 'size' => 14]) {{ $d['timeline'] }} <span class="text-text-muted">102</span></span>
                    <span class="flex items-center gap-2 px-2.5 py-1 text-text-secondary max-sm:hidden">@include('_partials.icon', ['name' => 'reminder', 'size' => 14]) {{ $d['attention'] }} <span class="text-text-muted">1</span></span>
                </div>
                <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none max-lg:hidden">@include('_partials.icon', ['name' => 'plus', 'size' => 14]) {{ $d['addEvent'] }}</span>
            </div>

            @include('_partials.home.product.timeline')
        </div>

        <div class="flex w-64 flex-none flex-col gap-3 max-lg:hidden">
            <div class="flex items-center gap-2 text-body font-semibold text-text">@include('_partials.icon', ['name' => 'star', 'class' => 'text-text-muted']) {{ $d['favourites'] }}</div>
            <div class="{{ $card }} flex flex-col gap-3 p-3.5">
                @foreach ($favourites as $name)
                    <label for="mn-screen-profile" class="{{ $toProfile }} flex items-center gap-3 text-base text-text">@include('_partials.home.product.avatar', ['name' => $name, 'size' => 30]) {{ $name }}</label>
                @endforeach
            </div>
            <div class="mt-3 flex items-center gap-2 text-body font-semibold text-text">@include('_partials.icon', ['name' => 'clock', 'class' => 'text-text-muted']) {{ $d['recent'] }}</div>
            <div class="{{ $card }} flex flex-col gap-3 p-3.5">
                @foreach ($recent as $name)
                    <div class="flex items-center gap-3 text-base text-text">
                        @include('_partials.home.product.avatar', ['name' => $name, 'size' => 28])
                        <label for="mn-screen-profile" class="{{ $toProfile }} flex-1 truncate">{{ $name }}</label>
                        <span class="text-small text-text-muted">{{ $d['today'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
