@php
    $moving = $copy['moving'];
    $guitar = $moving['guitar'];
    $stays = $guitar['stays'];
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} {{ $split }}">
        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $moving['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $moving['body'] }}</p>
            <p class="{{ $closing }}">{{ $moving['closing'] }}</p>
        </div>

        {{-- The guitar's Locations section: where it is kept now, then every
             stay, the current one and the one before it. --}}
        <div class="rounded-lg bg-identity-5/14 p-3 md:p-8">
            <div role="img" aria-label="{{ $moving['label'] }}" class="{{ $window }} flex flex-col gap-5 p-4 text-body md:p-5">
                @include('_partials.possessions.header', ['type' => $ui['musicalInstruments'], 'icon' => 'music', 'tint' => 'violet', 'name' => $guitar['name'], 'leaf' => $guitar['leaf'], 'at' => $guitar['at'], 'tags' => null, 'big' => false])

                <div class="flex flex-wrap items-start gap-x-4 gap-y-3">
                    <div class="flex min-w-52 flex-1 flex-col gap-1">
                        <span class="{{ $sectionTitle }}">{{ $ui['locations'] }}</span>
                        <p class="{{ $muted }} text-pretty">{{ $ui['locationsHelp'] }}</p>
                    </div>
                    <span class="flex flex-wrap items-center gap-3">
                        <span class="text-small font-medium text-text underline decoration-border-strong underline-offset-2">{{ $ui['manageLocations'] }}</span>
                        <span class="{{ $primary }}">@include('_partials.icon', ['name' => 'arrow-right', 'size' => 15]) {{ $ui['moveElsewhere'] }}</span>
                    </span>
                </div>

                @include('_partials.possessions.kept-now', ['head' => $stays[0]['head'], 'leaf' => $stays[0]['leaf'], 'since' => $guitar['since'], 'length' => $stays[0]['length'], 'reason' => $stays[0]['reason']])

                <div class="flex flex-col gap-3">
                    <div class="flex flex-wrap items-baseline gap-x-3 gap-y-1">
                        <span class="{{ $cardTitle }}">{{ $ui['everyStay'] }}</span>
                        <span class="{{ $muted }}">{{ $guitar['stayCount'] }}</span>
                        <span class="ms-auto text-xs text-text-muted">{{ $ui['newestFirst'] }}</span>
                    </div>
                    @foreach ($stays as $s => $stay)
                        @include('_partials.possessions.stay', ['stay' => $stay, 'current' => $s === 0])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
