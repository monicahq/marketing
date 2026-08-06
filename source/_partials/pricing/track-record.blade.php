@php
    // The star count is the only figure fetched at build time; the rest are
    // fixed facts, so they live in lang/ with their labels.
    $stats = [
        ['value' => $page->starCount, 'label' => $page->t('pricing.trackRecord.starsLabel')],
        ['value' => $page->t('pricing.trackRecord.since'), 'label' => $page->t('pricing.trackRecord.sinceLabel')],
        ['value' => $page->t('pricing.trackRecord.launch'), 'label' => $page->t('pricing.trackRecord.launchLabel')],
        ['value' => $page->t('pricing.trackRecord.featured'), 'label' => $page->t('pricing.trackRecord.featuredLabel')],
    ];
@endphp

<section class="border-t border-border bg-surface-subtle">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('pricing.trackRecord.title') }}</h2>

        <p class="mt-5 max-w-[62ch] text-copy-lg text-text-secondary text-pretty">{{ $page->t('pricing.trackRecord.body') }}</p>
        <p class="mt-4 max-w-[62ch] text-copy-lg text-text-secondary text-pretty">
            {{ $page->t('pricing.trackRecord.body2', [':count' => $page->starCount]) }}
        </p>

        <div class="mt-10 grid grid-cols-[repeat(auto-fit,minmax(220px,1fr))] gap-8">
            @foreach ($stats as $stat)
                <div>
                    <div class="text-heading font-semibold text-pretty">{{ $stat['value'] }}</div>
                    <div class="mt-2 font-mono text-mono text-text-muted">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>

        <a href="{{ $page->links['github'] }}" class="mn-btn mn-btn--secondary mt-8 gap-2 no-underline hover:no-underline">
            @include('_partials.icon', ['name' => 'star'])
            <span>{{ $page->t('pricing.trackRecord.cta') }}</span>
        </a>
    </div>
</section>
