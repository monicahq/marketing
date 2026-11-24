@php
    $hero = $copy['hero'];

    // Three folders of the contents: Home, Food and Recipes, Travel.
    $names = collect($knowledge['folders'])->pluck('name');
    $sections = [
        [$names[0], $knowledge['homeCount'], $knowledge['home'], 'bg-identity-4/14'],
        [$names[5], $copy['foodCount'], $copy['food'], 'bg-identity-2/14'],
        [$names[2], $copy['travelCount'], $copy['travel'], 'bg-identity-1/14'],
    ];
@endphp

<section class="px-4 pt-22 pb-8 md:px-6">
    <div class="mx-auto flex w-full max-w-[1200px] flex-col gap-14">
        <div class="grid grid-cols-1 items-end gap-x-16 gap-y-6 lg:grid-cols-2">
            <div class="flex flex-col gap-5">
                <span class="flex items-center gap-2.5 text-caption font-semibold tracking-[0.1em] text-text-muted uppercase">
                    <span class="grid size-7 place-items-center rounded-md bg-identity-4/14 text-identity-4">@include('_partials.icon', ['name' => 'folder', 'size' => 16])</span>
                    {{ $hero['eyebrow'] }}
                </span>
                <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            </div>
            <div class="flex flex-col items-start gap-4 pb-1.5">
                <p class="text-lede-md font-medium text-text text-pretty">{{ $hero['lede'] }}</p>
                <p class="{{ $paragraph }}">{!! $linked($hero['body'], ['link' => [$hero['knowledge'], $page->route('knowledge')]]) !!}</p>
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
            </div>
        </div>

        {{-- Three folders of Knowledge's contents (knowledge/index.blade.php),
             set side by side: each is one folder as the contents list it,
             its notes and lists sorted by title. --}}
        <div role="img" aria-label="{{ $hero['label'] }}" class="grid grid-cols-1 items-start gap-4 text-left text-body lg:grid-cols-3">
            @foreach ($sections as [$name, $count, $documents, $tint])
                <div class="rounded-lg {{ $tint }} p-3 md:p-5">
                    <div class="{{ $window }} p-4">
                        @include('_partials.knowledge.contents-folder', ['name' => $name, 'count' => $count, 'documents' => $documents, 'active' => null, 'compact' => true])
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
