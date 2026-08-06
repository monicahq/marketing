<section class="border-t border-border">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('pricing.leaving.title') }}</h2>

        <p class="mt-5 max-w-[62ch] text-copy-lg text-text-secondary text-pretty">{{ $page->t('pricing.leaving.body') }}</p>
        <p class="mt-4 max-w-[62ch] text-copy-lg text-text-secondary text-pretty">{{ $page->t('pricing.leaving.body2') }}</p>

        {{-- The application's own row group, so the three steps look like the
             settings screen the reader will actually use. --}}
        <div class="mn-rowgroup mn-rowgroup--bordered mt-8 max-w-[820px]">
            @foreach ($page->t('pricing.leaving.steps') as $step)
                <div class="mn-row">
                    <span class="mn-row__main">
                        <span class="mn-row__label">{{ $step['label'] }}</span>
                        <span class="mn-row__desc whitespace-normal">{{ $step['body'] }}</span>
                    </span>
                </div>
            @endforeach
        </div>

        <p class="mt-5 font-mono text-mono text-text-muted">{{ $page->t('pricing.leaving.note') }}</p>
    </div>
</section>
