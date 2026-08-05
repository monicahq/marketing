<section class="border-t border-border">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('faq.title') }}</h2>

        {{-- Native disclosure: keyboard-operable and readable with JavaScript off. --}}
        <div class="mt-8 max-w-[820px] border-t border-border">
            @foreach ($page->t('faq.items') as $item)
                <details class="group border-b border-border-subtle">
                    <summary class="flex cursor-pointer list-none items-center gap-4 py-5 text-title font-semibold [&::-webkit-details-marker]:hidden">
                        <span>{{ $item['q'] }}</span>
                        <span aria-hidden="true" class="ml-auto font-mono text-[18px] font-normal text-text-muted">
                            <span class="group-open:hidden">+</span>
                            <span class="hidden group-open:inline">&ndash;</span>
                        </span>
                    </summary>
                    <div class="pb-5">
                        <p class="max-w-[70ch] text-copy text-text-secondary text-pretty">{{ $item['a'] }}</p>

                        {{-- An answer may point at the page that covers it in
                             full. `page` is a route key, so the link stays in
                             the reader's language. --}}
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
