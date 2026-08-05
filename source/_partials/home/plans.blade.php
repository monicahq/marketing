@php
    // Two independent units, so each one earns its border.
    $plans = [
        $page->t('plans.hosted') + ['href' => $page->links['createAccount'], 'variant' => 'mn-btn--primary'],
        $page->t('plans.selfHosted') + ['href' => $page->links['selfHost'], 'variant' => 'mn-btn--secondary'],
    ];
@endphp

<section id="pricing" class="border-t border-border bg-surface-subtle">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('plans.title') }}</h2>

        <div class="mt-8 grid grid-cols-[repeat(auto-fit,minmax(320px,1fr))] gap-6">
            @foreach ($plans as $plan)
                <div class="flex flex-col rounded-lg border border-border bg-surface p-region">
                    <h3 class="text-heading-sm font-semibold">{{ $plan['title'] }}</h3>
                    <p class="mt-3 text-copy text-text-secondary text-pretty">{{ $plan['body'] }}</p>
                    @include('_partials.bullets', ['items' => $plan['items']])
                    <a href="{{ $plan['href'] }}" class="mn-btn {{ $plan['variant'] }} mt-8 self-start no-underline hover:no-underline">
                        {{ $plan['cta'] }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
