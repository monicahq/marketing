<section class="border-t border-border">
    <div class="mx-auto w-full max-w-form px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('pricing.whyPay.title') }}</h2>

        <p class="mt-5 text-copy-lg text-text-secondary text-pretty">{{ $page->t('pricing.whyPay.body') }}</p>
        <p class="mt-4 text-copy-lg text-text-secondary text-pretty">{{ $page->t('pricing.whyPay.body2') }}</p>

        {{-- The one claim the whole page rests on, so it gets the rule and the
             larger type rather than a heading it does not deserve. --}}
        <p class="mt-8 border-l-2 border-text pl-6 text-heading-sm font-semibold text-pretty">
            {{ $page->t('pricing.whyPay.quote') }}
        </p>

        <p class="mt-6 text-copy leading-[1.6] text-text-muted italic">{{ $page->t('pricing.whyPay.aside') }}</p>
    </div>
</section>
