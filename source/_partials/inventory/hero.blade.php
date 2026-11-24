@php
    $hero = $copy['hero'];
    $list = $hero['screen'];

    // The possessions in the list: type tint and icon, as PossessionTypeEnum
    // gives them.
    $rows = [
        ['activity', 'rust'],
        ['book', 'blue'],
        ['layers', 'teal'],
    ];
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto grid max-w-[1040px] grid-cols-1 items-end gap-x-16 gap-y-6 lg:grid-cols-2">
            <div class="flex flex-col gap-5">
                <span class="flex items-center gap-2.5 text-caption font-semibold tracking-[0.1em] text-text-muted uppercase">
                    <span class="grid size-7 place-items-center rounded-md {{ $tints['blue'] }}">@include('_partials.icon', ['name' => 'layers', 'size' => 16])</span>
                    {{ $hero['eyebrow'] }}
                </span>
                <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            </div>
            <div class="flex flex-col gap-4 pb-1.5">
                <p class="text-lede-md font-medium text-text text-pretty">{!! $linked($hero['lede'], ['link' => [$hero['linkLabel'], $page->route('possessions')]]) !!}</p>
                <p class="{{ $paragraph }}">{{ $hero['body'] }}</p>
                <div class="pt-1">
                    <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
                </div>
            </div>
        </div>

        {{-- All possessions, as the application lists them: the locations on
             the left, the count and the declared value, then every possession
             with its type, where it is kept and what it is worth. --}}
        <div class="mx-auto mt-14 max-w-[1040px] rounded-lg bg-identity-1/14 p-3 md:p-8">
            <div role="img" aria-label="{{ $hero['label'] }}" class="{{ $window }} flex flex-col gap-6 p-4 text-body md:p-6">
                <div class="flex flex-wrap items-start justify-between gap-3">
                    <div class="flex flex-col gap-1">
                        <span class="text-[22px] leading-tight font-semibold tracking-[-0.02em] text-text">{{ $ui['allPossessions'] }}</span>
                        <span class="{{ $muted }}">{{ $list['summary'] }}</span>
                    </div>
                    <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">@include('_partials.icon', ['name' => 'plus', 'size' => 14]) {{ $ui['addPossession'] }}</span>
                </div>

                <div class="grid grid-cols-1 items-start gap-6 lg:grid-cols-[13rem_minmax(0,1fr)]">
                    <div class="{{ $panel }} flex flex-col gap-0.5 p-2 max-lg:hidden">
                        <div class="flex items-center justify-between px-2 py-1.5">
                            <span class="{{ $caption }}">{{ $ui['locations'] }}</span>
                            <span class="text-small text-text underline decoration-border-strong underline-offset-2">{{ $ui['manage'] }}</span>
                        </div>
                        <span class="flex items-center gap-2 rounded-md bg-surface-subtle px-2 py-1.5 text-small font-medium text-text">@include('_partials.icon', ['name' => 'layers', 'size' => 14, 'class' => 'text-text-muted']) <span class="flex-1">{{ $ui['allLocations'] }}</span> <span class="text-xs text-text-muted">3</span></span>
                        <span class="flex items-center gap-2 px-2 py-1.5 text-small text-text">@include('_partials.icon', ['name' => 'place', 'size' => 14, 'class' => 'text-text-muted']) <span class="flex-1">{{ $ui['myHouse'] }}</span> <span class="text-xs text-text-muted">3</span></span>
                        @foreach ($list['rooms'] as [$room, $count])
                            <span class="flex items-center gap-2 py-1.5 pr-2 pl-6 text-small text-text">@include('_partials.icon', ['name' => 'chevron-right', 'size' => 12, 'class' => 'text-text-muted']) <span class="flex-1">{{ $room }}</span> <span class="text-xs text-text-muted">{{ $count }}</span></span>
                        @endforeach
                    </div>

                    <div class="flex min-w-0 flex-col gap-3">
                        <span class="px-0.5 {{ $sectionTitle }}">{{ $ui['everythingElse'] }}</span>
                        <ul class="{{ $panel }} divide-y divide-border">
                            @foreach ($list['items'] as $i => [$name, $type, $place, $value])
                                <li class="flex items-center gap-3 px-4 py-3">
                                    <span class="grid size-8 flex-none place-items-center rounded-md {{ $tints[$rows[$i][1]] }}">@include('_partials.icon', ['name' => $rows[$i][0], 'size' => 16])</span>
                                    <span class="min-w-0 flex-1">
                                        <span class="block truncate text-small font-semibold text-text">{{ $name }}</span>
                                        <span class="block truncate {{ $muted }}">{{ $type }} · {{ $place }}</span>
                                    </span>
                                    <span class="w-20 text-end text-small text-text-secondary max-sm:hidden">{{ $value }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
