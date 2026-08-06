{{--
    A list of questions as native disclosures: keyboard-operable, findable with
    the browser's own find-in-page, and readable with JavaScript off.

    `a` is one paragraph or several. Pricing answers often need two, so the
    string form is cast rather than duplicated as a second key.

    An item may also carry `link`, a label plus a route key, for answers that
    are better finished by the page that covers them in full.

    @include('_partials.faq', ['title' => $page->t('faq.title'), 'items' => $page->t('faq.items')])
--}}
<section class="border-t border-border">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading font-semibold lg:text-display-md">{{ $title }}</h2>

        <div class="mt-8 max-w-[820px] border-t border-border">
            @foreach ($items as $item)
                <details class="group border-b border-border-subtle">
                    <summary class="flex cursor-pointer list-none items-center gap-4 py-5 text-title font-semibold [&::-webkit-details-marker]:hidden">
                        <span>{{ $item['q'] }}</span>
                        <span aria-hidden="true" class="ml-auto font-mono text-[18px] font-normal text-text-muted">
                            <span class="group-open:hidden">+</span>
                            <span class="hidden group-open:inline">&ndash;</span>
                        </span>
                    </summary>
                    <div class="pb-5">
                        @foreach ((array) $item['a'] as $paragraph)
                            <p class="mt-3 max-w-[70ch] text-copy text-text-secondary text-pretty first:mt-0">{{ $paragraph }}</p>
                        @endforeach

                        @isset($item['link'])
                            <a
                                href="{{ $page->route($item['link']['page']) }}"
                                class="mt-3 inline-flex items-center gap-2 text-copy text-accent underline-offset-[3px]"
                            >
                                {{ $item['link']['label'] }}
                                @include('_partials.icon', ['name' => 'arrowRight', 'size' => 14])
                            </a>
                        @endisset
                    </div>
                </details>
            @endforeach
        </div>
    </div>
</section>
