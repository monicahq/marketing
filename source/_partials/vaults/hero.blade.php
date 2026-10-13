@php
    $hero = $copy['hero'];

    // Who each vault's card shows before "and 20 more", and its two figures,
    // in the order of `stats`. Personal first.
    $people = [
        ['Rachel Green', 'Chandler Bing', 'Ross Geller', 'Joey Tribbiani'],
        ['Marcel Duval', 'Inès Ortega', 'Sam Whitfield'],
    ];
    $figures = [[0, 2], [3, 1]];
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[760px] flex-col items-center gap-5 text-center">
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede text-text-secondary text-pretty">{{ $hero['intro'] }}</p>
            <p class="text-lede font-medium text-text text-pretty">{{ $hero['lede'] }}</p>
            <div class="pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
            </div>
        </div>

        {{-- The list of your vaults: Personal, Work, and room for another.
             One picture of the product, read out by its label. --}}
        <div class="mt-16 rounded-lg bg-identity-1/14 p-4 md:p-10 lg:p-14">
            <div role="img" aria-label="{{ $hero['label'] }}" class="{{ $window }} mx-auto flex max-w-[960px] flex-col gap-5 p-4.5 md:p-7">
                <div class="flex flex-wrap items-center justify-between gap-3">
                    <span class="text-title font-semibold">{{ $copy['heading'] }}</span>
                    <span class="{{ $button }} mn-btn-primary">
                        @include('_partials.icon', ['name' => 'plus', 'size' => 16])
                        {{ $hero['new'] }}
                    </span>
                </div>

                <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($vaults as $v => $vault)
                        <div class="flex flex-col overflow-hidden rounded-lg border border-border shadow-panel">
                            <div class="flex flex-1 flex-col gap-3.5 p-4">
                                <div class="flex items-center gap-3">
                                    <span class="{{ $tile }} size-10 text-copy {{ $vault['tint'] }}">{{ $initial($vault['name']) }}</span>
                                    <div class="flex min-w-0 flex-1 flex-col gap-0.5">
                                        <span class="text-copy font-semibold">{{ $vault['name'] }}</span>
                                        <span class="{{ $stamp }}">{{ $hero['vaults'][$v]['opened'] }}</span>
                                    </div>
                                    @if ($v === 0)
                                        <span class="mn-badge mn-badge-neutral">{{ $copy['default'] }}</span>
                                    @endif
                                </div>
                                <div class="flex flex-wrap items-center gap-1.5">
                                    @foreach ($people[$v] as $name)
                                        @include('_partials.avatar-initials', ['name' => $name, 'size' => 28])
                                    @endforeach
                                    <span class="pl-1 text-small text-text-secondary">{{ $hero['vaults'][$v]['more'] }}</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 border-t border-border bg-surface-subtle">
                                @foreach ($hero['stats'] as $s => $stat)
                                    <div class="flex flex-col gap-0.5 px-4 py-3 {{ $s > 0 ? 'border-l border-border' : '' }}">
                                        <span class="text-copy font-semibold">{{ $figures[$v][$s] }}</span>
                                        <span class="{{ $eyebrow }} text-text-muted">{{ $stat }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                    <div class="flex flex-col justify-center gap-2.5 rounded-lg border border-dashed border-border-strong p-5 md:max-lg:col-span-2">
                        <span class="grid size-9 place-items-center rounded-md border border-border bg-surface-subtle">
                            @include('_partials.icon', ['name' => 'plus', 'size' => 16])
                        </span>
                        <span class="text-copy font-semibold">{{ $hero['another']['title'] }}</span>
                        <span class="text-small text-text-secondary text-pretty">{{ $hero['another']['body'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
