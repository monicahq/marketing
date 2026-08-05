<section class="border-t border-border">
    <div class="mx-auto w-full max-w-form px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('finalCta.title') }}</h2>
        <p class="mt-5 text-copy-lg text-text-secondary text-pretty">{{ $page->t('finalCta.body') }}</p>

        <div class="mt-8 flex flex-wrap gap-3">
            <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn--primary no-underline hover:no-underline">
                {{ $page->t('finalCta.primaryCta') }}
            </a>
            <a href="{{ $page->links['v3'] }}" class="mn-btn mn-btn--secondary no-underline hover:no-underline">
                {{ $page->t('finalCta.secondaryCta') }}
            </a>
        </div>

        <p class="mt-5 font-mono text-mono text-text-muted">{{ $page->t('finalCta.note') }}</p>
    </div>
</section>
