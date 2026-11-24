@php
    $locations = $copy['locations'];
    $stays = $bike['stays'];
@endphp

<section class="border-y border-border bg-surface-subtle px-4 py-24 md:px-6 lg:py-28">
    <div class="{{ $narrow }} flex flex-col items-center gap-4.5 text-center">
        <h2 class="{{ $title }}">{{ $locations['title'] }}</h2>
        <p class="max-w-[600px] {{ $paragraph }}">{{ $locations['body'] }}</p>

        {{-- The bike's Locations page: where it is kept now, then every stay,
             the current one and the one before it. --}}
        <div class="mt-10 w-full max-w-[760px] rounded-lg bg-identity-6/14 p-3 text-left md:p-8">
            <div role="img" aria-label="{{ $locations['label'] }}" class="{{ $window }} flex flex-col gap-5 p-4 text-body md:p-6">
                <div class="flex flex-wrap items-start gap-x-4 gap-y-3">
                    <div class="flex min-w-60 flex-1 flex-col gap-1">
                        <span class="{{ $sectionTitle }}">{{ $ui['sections']['locations'] }}</span>
                        <p class="{{ $muted }} text-pretty">{{ $ui['locationsHelp'] }}</p>
                    </div>
                    <span class="flex items-center gap-3">
                        <span class="text-small font-medium text-text underline decoration-border-strong underline-offset-2">{{ $ui['manageLocations'] }}</span>
                        <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">@include('_partials.icon', ['name' => 'arrow-right', 'size' => 15]) {{ $ui['moveElsewhere'] }}</span>
                    </span>
                </div>

                @include('_partials.possessions.kept-now', ['head' => $stays[0]['head'], 'leaf' => $stays[0]['leaf'], 'since' => $bike['since'], 'length' => $stays[0]['length'], 'reason' => null])

                <div class="flex flex-col gap-3">
                    <div class="flex flex-wrap items-baseline gap-x-3 gap-y-1">
                        <span class="{{ $cardTitle }}">{{ $ui['everyStay'] }}</span>
                        <span class="{{ $muted }}">{{ $bike['stayCount'] }}</span>
                        <span class="ms-auto text-xs text-text-muted">{{ $ui['newestFirst'] }}</span>
                    </div>
                    @foreach ($stays as $s => $stay)
                        @include('_partials.possessions.stay', ['stay' => $stay, 'current' => $s === 0])
                    @endforeach
                </div>
            </div>
        </div>

        <a href="{{ $page->route('locations') }}" class="{{ $more }} mt-3">
            {{ $locations['link'] }}
            @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])
        </a>
    </div>
</section>
