@php
    $faq = $copy['faq'];
    $items = $faq['items'];
    $total = count($items);

    // How many questions each topic holds, for the count on its chip.
    $counts = array_count_values(array_column($items, 'cat'));
    $counts['all'] = $total;

    /**
     * What `pricingFaq` in app.js needs: each question's topic and the text a
     * search looks through, and the progress line with its two numbers still
     * to fill.
     */
    $state = [
        'items' => array_map(fn ($item) => [
            'cat' => $item['cat'],
            'text' => mb_strtolower($item['q'] . ' ' . $item['short'] . ' ' . $item['a']),
        ], $items),
        'progress' => $faq['progress'],
    ];
@endphp

{{-- Every question is a native <details>, so the list works, and is found by
     the browser's find-in-page, with no script at all. What JavaScript adds is
     on top and `js-only`: the search, the topic chips, the count of questions
     opened and the random pick. --}}
<section id="faq" class="scroll-mt-6 px-4 pt-28 pb-24 md:px-6" x-data="pricingFaq({{ json_encode($state, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) }})">
    <div class="{{ $container }} grid items-start gap-12 md:grid-cols-2">
        <div class="flex flex-col gap-5 md:sticky md:top-6">
            <div class="flex flex-col gap-2.5">
                <span class="{{ $eyebrow }}">{{ $faq['eyebrow'] }}</span>
                <h2 class="text-display-md font-semibold text-balance">{{ $faq['title'] }}</h2>
                <p class="text-body text-text-secondary text-pretty">{{ $faq['intro'] }}</p>
            </div>

            <div class="js-only relative">
                <span class="pointer-events-none absolute top-1/2 left-3 -translate-y-1/2 text-text-muted">
                    @include('_partials.icon', ['name' => 'search', 'size' => 15])
                </span>
                <input type="search" x-model="query" aria-label="{{ $faq['search'] }}" placeholder="{{ $faq['search'] }}" class="mn-control pl-9">
            </div>

            <div role="group" aria-label="{{ $faq['categoriesLabel'] }}" class="js-only flex flex-wrap gap-1.5">
                @foreach ($faq['categories'] as $key => $topic)
                    <button
                        type="button"
                        class="mn-chip h-7 px-2.5 text-xs"
                        x-on:click="cat = '{{ $key }}'"
                        x-bind:aria-pressed="cat === '{{ $key }}'"
                    >{{ $topic }} <span class="mn-chip-count">{{ $counts[$key] ?? 0 }}</span></button>
                @endforeach
            </div>

            <div class="js-only flex flex-col items-start gap-2.5 pt-1">
                <div class="h-1 w-full overflow-hidden rounded-full bg-hover">
                    <div class="h-full w-0 bg-primary transition-[width] duration-200 ease-standard" x-bind:style="{ width: percent + '%' }"></div>
                </div>
                <span class="text-xs text-text-muted" aria-live="polite" x-text="progress">{{ strtr($faq['progress']['none'], [':total' => $total]) }}</span>
                <button type="button" class="mn-btn mn-btn-secondary mn-btn-small" x-on:click="surprise()">{{ $faq['random'] }}</button>
            </div>
        </div>

        <div class="border-t border-border">
            @foreach ($items as $i => $item)
                <details
                    class="group border-b border-border"
                    data-faq
                    x-show="visible({{ $i }})"
                    x-on:toggle="track({{ $i }}, $el.open)"
                >
                    <summary class="flex cursor-pointer list-none items-center gap-4 py-4 text-text [&::-webkit-details-marker]:hidden">
                        <span class="w-7 flex-none font-mono text-mono text-text-muted">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="flex-1 text-body font-semibold">{{ $item['q'] }}</span>
                        @include('_partials.icon', ['name' => 'plus', 'class' => 'flex-none text-text-muted transition-transform duration-150 ease-standard group-open:rotate-45'])
                    </summary>
                    <div class="flex flex-col gap-2 pb-5 pl-11 md:pr-8">
                        <p class="text-xl font-semibold text-text">{{ $item['short'] }}</p>
                        <p class="text-body text-text-secondary text-pretty">{{ $item['a'] }}</p>
                        <span class="{{ $eyebrow }} pt-1">{{ $faq['categories'][$item['cat']] }}</span>
                    </div>
                </details>
            @endforeach

            <div class="flex flex-col gap-1 py-8" x-show="none" style="display: none">
                <span class="font-semibold text-text">{{ $faq['emptyTitle'] }}</span>
                <span class="text-text-muted">{{ $faq['emptyBody'] }}</span>
            </div>
        </div>
    </div>
</section>
