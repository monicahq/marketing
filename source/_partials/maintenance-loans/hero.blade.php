@php
    $hero = $copy['hero'];
@endphp

<section class="px-4 pt-22 pb-8 md:px-6">
    <div class="{{ $container }} flex flex-col items-center gap-14">
        <div class="flex max-w-[720px] flex-col items-center gap-5 text-center">
            <span class="flex items-center gap-2.5 text-caption font-semibold tracking-[0.1em] text-text-muted uppercase">
                <span class="grid size-7 place-items-center rounded-md bg-identity-2/14 text-identity-2">@include('_partials.icon', ['name' => 'calendar-repeat', 'size' => 16])</span>
                {{ $hero['eyebrow'] }}
            </span>
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede-md font-medium text-text text-balance">{{ $hero['lede'] }}</p>
            <p class="max-w-[560px] {{ $paragraph }}">{!! $linked($hero['body'], ['link' => [$hero['possessionsLabel'], $page->route('possessions')]]) !!}</p>
            <div class="flex flex-wrap justify-center gap-2.5 pt-1">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
                <a href="{{ $page->route('possessions') }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $hero['possessions'] }}</a>
            </div>
        </div>

        {{-- Two possessions, each from its own page: the bike's latest
             maintenance record, and the top of the book's Loans section
             while Joey has it. Two separate pieces, not one invented
             screen. --}}
        <div role="img" aria-label="{{ $hero['label'] }}" class="grid w-full grid-cols-1 overflow-hidden rounded-lg text-left text-body lg:grid-cols-2">
            <div class="flex flex-col gap-3.5 bg-identity-4/14 p-4 md:p-10">
                <span class="{{ $stateCaption }}">{{ $hero['serviced'] }}</span>
                <div class="{{ $window }} flex flex-col gap-4 p-4">
                    @include('_partials.possessions.header', ['type' => $ui['bicycles'], 'icon' => 'activity', 'tint' => 'rust', 'name' => $copy['bike']['name'], 'leaf' => $copy['bike']['leaf'], 'at' => $copy['bike']['at'], 'tags' => null, 'big' => false])
                    <span class="{{ $sectionTitle }}">{{ $ui['maintenance'] }}</span>
                    @include('_partials.maintenance-loans.record', ['record' => $copy['records'][0], 'description' => false])
                </div>
            </div>
            <div class="flex flex-col gap-3.5 bg-identity-1/14 p-4 md:p-10">
                <span class="{{ $stateCaption }}">{{ $hero['borrowed'] }}</span>
                <div class="{{ $window }} flex flex-col gap-4 p-4">
                    @include('_partials.possessions.header', ['type' => $ui['books'], 'icon' => 'book', 'tint' => 'blue', 'name' => $copy['book']['name'], 'leaf' => $copy['book']['leaf'], 'at' => $copy['book']['at'], 'tags' => null, 'big' => false])
                    <span class="{{ $sectionTitle }}">{{ $ui['loans'] }}</span>
                    @include('_partials.maintenance-loans.active')
                </div>
            </div>
        </div>
    </div>
</section>
