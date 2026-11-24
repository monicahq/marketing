@php
    $hero = $copy['hero'];

    // Home is open on its notes and lists; Monica has folded the others.
    $tree = [];
    foreach ($copy['folders'] as $f => $folder) {
        $tree[] = [$folder['name'], $folder['count'], $f === 0 ? array_map(fn ($d) => [$d[0], $d[1]], $copy['home']) : null];
    }

    // The contents, as far as the window shows them: Home, then the top of
    // Personal, where the picture is cut.
    $sections = [
        [$copy['folders'][0]['name'], $copy['homeCount'], $copy['home']],
        [$copy['folders'][1]['name'], $copy['personalCount'], $copy['personal']],
    ];
@endphp

<section class="px-4 pt-22 pb-8 md:px-6">
    <div class="{{ $container }} flex flex-col items-center gap-14">
        <div class="flex max-w-[760px] flex-col items-center gap-5 text-center">
            <span class="flex items-center gap-2.5 text-caption font-semibold tracking-[0.1em] text-text-muted uppercase">
                <span class="grid size-7 place-items-center rounded-md bg-identity-6/14 text-identity-6">@include('_partials.icon', ['name' => 'journal', 'size' => 16])</span>
                {{ $hero['eyebrow'] }}
            </span>
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede-md font-medium text-text text-balance">{{ $hero['lede'] }}</p>
            <p class="max-w-[580px] {{ $paragraph }}">{{ $hero['body'] }}</p>
            <div class="flex flex-wrap justify-center gap-2.5 pt-1">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
                <a href="{{ $page->route('pricing') }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $hero['plans'] }}</a>
            </div>
        </div>

        {{-- Knowledge's contents, with the column of folders beside them, as
             Erica draws knowledge/index.blade.php. The window is a crop of
             the screen: it stops partway through the second folder. --}}
        <div class="w-full rounded-lg bg-identity-6/14 p-3 md:p-8 lg:p-10">
            <div role="img" aria-label="{{ $hero['label'] }}" class="{{ $window }} mx-auto max-h-[640px] max-w-[1040px] p-4 text-body md:p-5">
                <div class="grid grid-cols-1 items-start gap-6 md:grid-cols-[15rem_minmax(0,1fr)]">
                    <div class="max-md:hidden">
                        @include('_partials.knowledge.folders', ['folders' => $tree, 'query' => null, 'contents' => true, 'current' => null])
                    </div>

                    <div class="flex min-w-0 flex-col gap-7 text-left">
                        <div class="flex flex-col gap-2">
                            <span class="{{ $pageTitle }}">{{ $ui['contents'] }}</span>
                            <p class="text-base text-text-secondary text-pretty">{{ $ui['contentsLead'] }}</p>
                            <p class="text-xs text-text-muted">{{ $ui['summary'] }}</p>
                        </div>

                        @foreach ($sections as [$name, $count, $documents])
                            <div class="flex flex-col gap-2.5">
                                <div class="flex items-center gap-2">
                                    @include('_partials.icon', ['name' => 'folder', 'size' => 16, 'class' => 'text-text-soft'])
                                    <span class="{{ $sectionTitle }}">{{ $name }}</span>
                                    <span class="{{ $muted }}">{{ $count }}</span>
                                </div>
                                <div class="{{ $panel }}">
                                    @foreach ($sorted($documents) as [$kind, $document, $line, $edited, $headings])
                                        <div class="border-b border-border-subtle last:border-b-0">
                                            <div class="flex items-center gap-3 px-4 py-3">
                                                @include('_partials.icon', ['name' => $glyphs[$kind], 'size' => 16, 'class' => 'flex-none text-text-muted'])
                                                <span class="min-w-0 flex-1 truncate text-base font-semibold text-text">{{ $document }}</span>
                                                <span class="text-end text-xs text-text-muted max-sm:hidden">{{ $line }} · {{ $edited }}</span>
                                            </div>
                                            @if ($headings !== [])
                                                <div class="flex flex-wrap gap-x-4 gap-y-1 ps-11 pe-4 pb-3">
                                                    @foreach ($headings as $heading)
                                                        <span class="text-small text-text-secondary underline decoration-border-strong underline-offset-3">{{ $heading }}</span>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
