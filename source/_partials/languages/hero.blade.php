@php
    $hero = $copy['hero'];
    $list = $hero['window'];
    $people = [
        ['Chandler Bing', 'Chandler Bing', $list['chandler'], null],
        ['Élodie Durand', 'Élodie Durand', $list['elodie'], null],
        ['Ross Geller', 'Dr. Ross Geller', $list['ross'], null],
        ['Kim Jiwoo', $latin, $hangul, 'ko'],
    ];
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[760px] flex-col items-center gap-5 text-center">
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede font-medium text-text text-pretty">{{ $hero['lede'] }}</p>
            <p class="text-lede text-text-secondary text-pretty">{{ $hero['body'] }}</p>
            <div class="pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
            </div>
        </div>

        {{-- The contact list of somebody who uses Monica in French, so it is
             French on every page. Ji-woo's row shows her name in Hangul. --}}
        <div class="mt-16 rounded-lg bg-identity-1/14 p-4 md:p-10 lg:p-14">
            <div role="img" aria-label="{{ $hero['label'] }}" lang="fr" class="{{ $window }} mx-auto max-w-[760px]">
                <div class="flex flex-wrap items-center gap-3 border-b border-border px-4 py-3.5">
                    <span class="flex-1 text-heading-sm font-semibold">{{ $list['title'] }}</span>
                    <span class="flex min-w-45 items-center gap-2 rounded-md border border-border px-2.5 py-1.5 text-small text-text-muted">
                        @include('_partials.icon', ['name' => 'search', 'size' => 14])
                        {{ $list['search'] }}
                    </span>
                </div>
                @foreach ($people as [$avatar, $name, $detail, $detailLang])
                    <div class="flex items-center gap-3 border-b border-border px-4 py-2.5 last:border-b-0">
                        @include('_partials.avatar-initials', ['name' => $avatar, 'size' => 30])
                        <span class="min-w-0 flex-1 truncate text-base font-semibold">{{ $name }}</span>
                        <span @if ($detailLang) lang="{{ $detailLang }}" @endif class="text-small text-text-secondary">{{ $detail }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
