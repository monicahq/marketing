@php($hero = $copy['hero'])

<section class="px-4 pt-22 pb-8 md:px-6">
    <div class="mx-auto grid w-full max-w-page grid-cols-1 items-center gap-x-14 gap-y-14 lg:grid-cols-[minmax(0,0.8fr)_minmax(0,1.3fr)]">
        <div class="flex flex-col gap-5">
            <span class="flex items-center gap-2.5 text-caption font-semibold tracking-[0.1em] text-text-muted uppercase">
                <span class="grid size-7 place-items-center rounded-md bg-identity-1/14 text-identity-1">@include('_partials.icon', ['name' => 'text-lines', 'size' => 16])</span>
                {{ $hero['eyebrow'] }}
            </span>
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede-md font-medium text-text text-pretty">{{ $hero['lede'] }}</p>
            <p class="{{ $paragraph }}">{!! $linked($hero['body'], ['link' => [$hero['knowledge'], $page->route('knowledge')]]) !!}</p>
            <div class="pt-1">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
            </div>
        </div>

        {{-- The list Books to read, as Erica draws a list being read. The
             names in it are text in a cell, not contacts, so no avatar is
             drawn beside them. --}}
        <div class="rounded-lg bg-identity-1/14 p-3 md:p-8">
            <div role="img" aria-label="{{ $hero['label'] }}" class="{{ $window }} p-4 text-left text-body md:p-5">
                @include('_partials.knowledge.list', ['list' => $copy['books'], 'lui' => $lui])
            </div>
        </div>
    </div>
</section>
