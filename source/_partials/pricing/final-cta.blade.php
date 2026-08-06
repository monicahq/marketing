<section class="border-t border-border bg-surface-subtle">
    <div class="mx-auto w-full max-w-form px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('pricing.finalCta.title') }}</h2>

        <p class="mt-5 text-copy-lg text-text-secondary text-pretty">{{ $page->t('pricing.finalCta.body') }}</p>
        <p class="mt-4 text-copy-lg text-text-secondary text-pretty">{{ $page->t('pricing.finalCta.body2') }}</p>

        <div class="mt-8 flex flex-wrap gap-3 max-md:flex-col max-md:items-stretch">
            <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn--primary no-underline hover:no-underline max-md:w-full">
                {{ $page->t('pricing.finalCta.primaryCta') }}
            </a>
            <a href="{{ $page->links['selfHost'] }}" class="mn-btn mn-btn--secondary no-underline hover:no-underline max-md:w-full">
                {{ $page->t('pricing.finalCta.secondaryCta') }}
            </a>
        </div>

        <p class="mt-5 font-mono text-mono text-text-muted">{{ $page->t('pricing.finalCta.note') }}</p>
    </div>
</section>

{{-- The legal footnote sits outside the CTA band, quiet and last. --}}
<div class="border-t border-border">
    <div class="mx-auto w-full max-w-marketing px-4 py-5 md:px-8">
        <p class="font-mono text-mono text-text-muted">{{ $page->t('pricing.taxFootnote') }}</p>
    </div>
</div>
