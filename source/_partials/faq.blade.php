{{--
    A list of questions as native disclosures: keyboard-operable, findable with
    the browser's own find-in-page, and readable with JavaScript off. The title
    sits in its own column beside the list on a wide screen, above it on a
    narrow one.

    `a` is one paragraph or several. Pricing answers often need two, so the
    string form is cast rather than duplicated as a second key.

    An item may also carry `link`, a label plus a route key, for answers that
    are better finished by the page that covers them in full.

    `openFirst` opens the first question, so the list shows what an answer
    looks like before anyone clicks. `container` is the width and gutter, for
    the homepage, whose sections are narrower than the other pages'.

    @include('_partials.faq', ['title' => $page->t('home.faq.title'), 'items' => $page->t('home.faq.items')])
--}}
@php
    $container = $container ?? 'max-w-marketing px-4 md:px-8';
@endphp
<section class="border-t border-border">
    <div class="mx-auto flex w-full flex-wrap gap-12 py-section-sm lg:py-section {{ $container }}">
        <div class="flex-[1_1_280px]">
            <h2 class="text-display-section font-semibold">{{ $title }}</h2>
        </div>

        <div class="flex-[2_1_520px] border-t border-border">
            @foreach ($items as $item)
                <details class="group border-b border-border" @if (($openFirst ?? false) && $loop->first) open @endif>
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 py-5 text-lede-sm font-semibold tracking-[-0.01em] [&::-webkit-details-marker]:hidden">
                        <span>{{ $item['q'] }}</span>
                        @include('_partials.icon', ['name' => 'plus', 'class' => 'text-text-muted transition-transform duration-150 ease-standard group-open:rotate-45'])
                    </summary>
                    <div class="pb-5">
                        @foreach ((array) $item['a'] as $paragraph)
                            <p class="mt-3 max-w-[600px] text-body leading-relaxed text-text-secondary text-pretty first:mt-0">{{ $paragraph }}</p>
                        @endforeach

                        @isset($item['link'])
                            <a
                                href="{{ $page->route($item['link']['page']) }}"
                                class="mt-3 inline-flex items-center gap-2 text-body font-medium text-text underline-offset-[3px]"
                            >
                                {{ $item['link']['label'] }}
                                @include('_partials.icon', ['name' => 'arrow-right', 'size' => 14])
                            </a>
                        @endisset
                    </div>
                </details>
            @endforeach
        </div>
    </div>
</section>
