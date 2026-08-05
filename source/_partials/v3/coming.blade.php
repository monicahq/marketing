<section class="border-y border-border bg-surface-subtle">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <span class="font-mono text-mono text-text-muted">{{ $page->t('v3page.coming.label') }}</span>

        <h2 class="mt-4 text-heading font-semibold lg:text-display-md">{{ $page->t('v3page.coming.title') }}</h2>
        <p class="mt-4 max-w-[62ch] text-copy-lg text-text-secondary text-pretty">{{ $page->t('v3page.coming.body') }}</p>

        {{-- The column count is fluid (three, two or one, on a 320px minimum),
             so every cell takes the same rule. Varying it by row would only
             line up at one width. --}}
        <div class="mt-8 grid grid-cols-[repeat(auto-fit,minmax(320px,1fr))] gap-x-10 gap-y-6">
            @foreach ($page->t('v3page.coming.features') as $index => $feature)
                @include('_partials.feature-item', [
                    'feature' => $feature,
                    'layout' => 'stacked',
                    'rule' => 'standard',
                    'number' => str_pad($index + 1, 2, '0', STR_PAD_LEFT),
                ])
            @endforeach
        </div>
    </div>
</section>
