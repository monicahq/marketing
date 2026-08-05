<section id="open-source" class="border-t border-border bg-surface-subtle">
    <div class="mx-auto grid w-full max-w-marketing grid-cols-[repeat(auto-fit,minmax(320px,1fr))] gap-16 px-4 py-section-sm md:px-8 lg:py-section">
        <div>
            <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('openSource.title') }}</h2>
            <p class="mt-5 max-w-[50ch] text-copy-lg text-text-secondary text-pretty">{{ $page->t('openSource.body') }}</p>
            <p class="mt-6 text-copy leading-[1.6] text-text-muted italic">{{ $page->t('openSource.aside') }}</p>

            <div class="mt-8 flex flex-wrap gap-2">
                <a href="{{ $page->links['github'] }}" class="mn-btn mn-btn--primary no-underline hover:no-underline">
                    {{ $page->t('openSource.sourceCta') }}
                </a>
                <a href="{{ $page->links['selfHostingGuide'] }}" class="mn-btn mn-btn--secondary no-underline hover:no-underline">
                    {{ $page->t('openSource.hostingCta') }}
                </a>
            </div>
        </div>

        <div>
            <p class="text-copy font-medium text-text">{{ $page->t('openSource.listTitle') }}</p>
            @include('_partials.bullets', ['items' => $page->t('openSource.items')])

            {{-- The list is entirely about v3, so the question it leaves the
                 reader with is answered one link away. --}}
            <a
                href="{{ $page->route('v3') }}"
                class="mt-6 inline-flex items-center gap-2 text-copy text-accent underline-offset-[3px]"
            >
                {{ $page->t('openSource.v3Cta') }}
                @include('_partials.icon', ['name' => 'arrowRight', 'size' => 14])
            </a>
        </div>
    </div>
</section>
