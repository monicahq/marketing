@php
    $hero = $copy['hero'];
    $book = $copy['book'];
@endphp

<section class="px-4 pt-22 pb-8 md:px-6">
    <div class="{{ $container }} grid grid-cols-1 items-center gap-x-14 gap-y-14 lg:grid-cols-[minmax(0,1fr)_minmax(0,1.25fr)]">
        <div class="flex flex-col gap-5">
            <span class="flex items-center gap-2.5 text-caption font-semibold tracking-[0.1em] text-text-muted uppercase">
                <span class="grid size-7 place-items-center rounded-md {{ $tints['blue'] }}">@include('_partials.icon', ['name' => 'place', 'size' => 16])</span>
                {{ $hero['eyebrow'] }}
            </span>
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede-md font-medium text-text text-pretty">{{ $hero['lede'] }}</p>
            <p class="{{ $paragraph }}">{{ $hero['body'] }}</p>
            <div class="flex flex-wrap gap-2.5 pt-1">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
                <a href="{{ $page->route('possessions') }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $hero['possessions'] }}</a>
            </div>
        </div>

        {{-- The locations in settings, as a tree, and below it the top of
             the paperback's Locations section: where it is kept now. --}}
        <div role="img" aria-label="{{ $hero['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-1/14 p-3 text-body md:p-6">
            <div class="{{ $window }} flex flex-col gap-4 p-4">
                <div class="flex flex-wrap items-start justify-between gap-3">
                    <div class="flex min-w-48 flex-1 flex-col gap-1">
                        <span class="text-[20px] leading-tight font-semibold tracking-[-0.02em] text-text">{{ $ui['locations'] }}</span>
                        <span class="{{ $muted }} text-pretty">{{ $ui['locationsDescription'] }}</span>
                    </div>
                    <span class="{{ $primary }}">{{ $ui['newLocation'] }}</span>
                </div>
                <div class="{{ $panel }}">
                    @foreach ($copy['tree'] as [$name, $depth, $line])
                        @include('_partials.locations.tree-row', ['name' => $name, 'depth' => $depth, 'line' => $line, 'first' => $loop->first])
                    @endforeach
                </div>
            </div>

            <div class="{{ $window }} flex flex-col gap-4 p-4 sm:ms-12">
                @include('_partials.possessions.header', ['type' => $ui['books'], 'icon' => 'book', 'tint' => 'blue', 'name' => $book['name'], 'leaf' => $book['leaf'], 'at' => $book['at'], 'tags' => null, 'big' => false])
                @include('_partials.possessions.kept-now', ['head' => $book['head'], 'leaf' => $book['leaf'], 'since' => $book['since'], 'length' => $book['length'], 'reason' => null])
            </div>
        </div>
    </div>
</section>
