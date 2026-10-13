@php
    $hero = $copy['hero'];
    $rachel = $cast['rachel']['full'];
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[780px] flex-col items-center gap-5 text-center">
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="max-w-[640px] text-lede text-text-secondary text-pretty">{{ $hero['lede'] }}</p>
            <p class="max-w-[640px] text-lede font-medium text-text text-pretty">{{ $hero['close'] }}</p>
            <div class="pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
            </div>
        </div>

        {{-- Rachel Green's contact page. One picture of the product, read out
             by its label. --}}
        <div class="mt-16 rounded-lg bg-identity-5/14 p-4 md:p-10 lg:p-14">
            <div role="img" aria-label="{{ $hero['label'] }}" class="{{ $window }}">
                <div class="flex flex-wrap items-center gap-2.5 border-b border-border px-5 py-3 text-base">
                    <span class="grid size-5.5 place-items-center rounded-sm bg-identity-1 text-micro font-semibold text-text-inverse">{{ mb_substr($hero['vault'], 0, 1) }}</span>
                    <span class="font-semibold">{{ $hero['vault'] }}</span>
                    <span class="text-text-disabled">/</span>
                    <span class="text-text-muted">{{ $hero['people'] }}</span>
                    <span class="text-text-disabled">/</span>
                    <span class="font-semibold">{{ $rachel }}</span>
                </div>

                <div class="flex flex-wrap items-center gap-6 px-5 pt-7 md:px-8">
                    <span class="flex-none rounded-full border-2 border-identity-3/50 p-0.5">
                        @include('_partials.avatar-initials', ['name' => $rachel, 'size' => 88])
                    </span>
                    <div class="flex min-w-0 flex-1 flex-col gap-2.5">
                        <span class="text-heading font-semibold md:text-display-sm">{{ $rachel }}</span>
                        @include('_partials.details.meta', ['items' => $hero['meta']])
                    </div>
                    <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">{{ $hero['edit'] }}</span>
                </div>

                {{-- The second tab is open. --}}
                <div class="mn-tabs pointer-events-none px-5 pt-5 md:px-8">
                    @foreach ($hero['tabs'] as $t => $name)
                        @if ($t === 1)
                            <span class="mn-tab" aria-selected="true">{{ $name }} <span class="mn-tab-count">5</span></span>
                        @else
                            <span class="mn-tab">{{ $name }}</span>
                        @endif
                    @endforeach
                </div>

                <div class="grid items-start gap-5 px-5 pt-6 pb-8 md:px-8 lg:grid-cols-2">
                    @include('_partials.details.rows', ['heading' => $hero['personal'], 'rows' => $hero['rows']])
                    @include('_partials.details.note', ['heading' => $hero['lastTime'], 'text' => $hero['note'], 'when' => $hero['added']])
                </div>
            </div>
        </div>
    </div>
</section>
