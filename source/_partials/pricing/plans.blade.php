@php
    $lede = 'max-w-[58ch] text-lede-sm text-text-secondary text-pretty md:text-lede-md lg:text-lede';
    $body = 'text-copy text-text-secondary text-pretty';
    $planCard = 'flex flex-col rounded-lg border border-border bg-surface p-region';
    $planTitle = 'text-heading-sm font-semibold';
    $amount = 'text-[44px] leading-none font-semibold tracking-[-0.03em]';

    $seg = 'cursor-pointer rounded-full px-4 py-1.5 text-small transition-colors duration-100 ease-standard focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-focus';

    /**
     * Alpine's state, handed over as one JSON object rather than assembled in
     * the markup, so the copy stays in lang/ and the template stays readable.
     *
     * `yearly` first, because it is the default the page renders with.
     */
    $billing = [
        'period' => 'yearly',
        'plans' => [
            'yearly' => [
                'price' => $page->t('pricing.hosted.yearlyPrice'),
                'period' => $page->t('pricing.hosted.yearlyPeriod'),
                'note' => $page->t('pricing.hosted.yearlyNote'),
            ],
            'monthly' => [
                'price' => $page->t('pricing.hosted.monthlyPrice'),
                'period' => $page->t('pricing.hosted.monthlyPeriod'),
                'note' => $page->t('pricing.hosted.monthlyNote'),
            ],
        ],
    ];
@endphp

{{-- The one interactive region on the site. Alpine owns the billing period;
     everything below is rendered in the yearly state first, so the page is
     complete and correct before the script loads, and if it never does. --}}
<section x-data="{{ json_encode($billing, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) }}">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <span class="font-mono text-mono text-text-muted">{{ $page->t('pricing.eyebrow') }}</span>

        <h1 class="mt-4 text-display-sm font-semibold md:text-display-lg lg:text-display-xl">
            {{ $page->t('pricing.title') }}
        </h1>

        <p class="mt-6 {{ $lede }}">{{ $page->t('pricing.lede') }}</p>
        <p class="mt-4 {{ $lede }}">{{ $page->t('pricing.lede2') }}</p>

        <div class="mt-8 flex flex-wrap items-center gap-4">
            {{-- Hidden without JavaScript, because the buttons would be inert:
                 the reader keeps the yearly price and loses only the choice,
                 rather than being given a control that does nothing. --}}
            <div class="js-only inline-flex rounded-full border border-border bg-surface p-[3px]" role="group" aria-label="{{ $page->t('pricing.billing.label') }}">
                <button
                    type="button"
                    x-on:click="period = 'yearly'"
                    x-bind:aria-pressed="period === 'yearly'"
                    x-bind:class="period === 'yearly' ? 'bg-surface-inverse font-medium text-canvas' : 'text-text-secondary hover:text-text'"
                    class="{{ $seg }}"
                >{{ $page->t('pricing.billing.yearly') }}</button>

                <button
                    type="button"
                    x-on:click="period = 'monthly'"
                    x-bind:aria-pressed="period === 'monthly'"
                    x-bind:class="period === 'monthly' ? 'bg-surface-inverse font-medium text-canvas' : 'text-text-secondary hover:text-text'"
                    class="{{ $seg }}"
                >{{ $page->t('pricing.billing.monthly') }}</button>
            </div>

            <span class="font-mono text-mono text-text-muted">{{ $page->t('pricing.currency') }}</span>
        </div>

        <div class="mt-8 grid grid-cols-[repeat(auto-fit,minmax(320px,1fr))] gap-6">
            <div class="{{ $planCard }}">
                <h2 class="{{ $planTitle }}">{{ $page->t('pricing.hosted.title') }}</h2>
                <p class="mt-2 {{ $body }}">{{ $page->t('pricing.hosted.body') }}</p>

                {{-- Fixed height so the two cards' buttons stay on one line as
                     the price swaps between a one-line and a two-line note. --}}
                {{-- Each binding wraps the yearly text it will replace, so the
                     figures are in the HTML rather than filled in on load.
                     aria-live keeps a screen reader informed when they change. --}}
                <div class="mt-6 min-h-24" aria-live="polite">
                    <div class="flex items-baseline gap-3">
                        <span class="{{ $amount }}" x-text="plans[period].price">{{ $page->t('pricing.hosted.yearlyPrice') }}</span>
                        <span class="text-copy-lg text-text-secondary" x-text="plans[period].period">{{ $page->t('pricing.hosted.yearlyPeriod') }}</span>
                    </div>

                    <p class="mt-3 {{ $body }}" x-text="plans[period].note">{{ $page->t('pricing.hosted.yearlyNote') }}</p>
                    <p class="mt-2 font-mono text-mono text-text-muted">{{ $page->t('pricing.hosted.taxNote') }}</p>
                </div>

                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn--primary mt-6 self-start no-underline hover:no-underline">
                    {{ $page->t('pricing.hosted.cta') }}
                </a>
                <p class="mt-3 font-mono text-mono text-text-muted">{{ $page->t('pricing.hosted.trial') }}</p>

                <p class="mt-8 text-copy font-medium text-text">{{ $page->t('pricing.hosted.listTitle') }}</p>
                @include('_partials.bullets', ['items' => $page->t('pricing.hosted.items')])

                <p class="mt-5 text-copy leading-[1.6] text-text-muted italic">{{ $page->t('pricing.hosted.aside') }}</p>
                <p class="mt-6 border-t border-border-subtle pt-5 {{ $body }}">{{ $page->t('pricing.hosted.footnote') }}</p>
            </div>

            <div class="{{ $planCard }}">
                <h2 class="{{ $planTitle }}">{{ $page->t('pricing.selfHosted.title') }}</h2>
                <p class="mt-2 {{ $body }}">{{ $page->t('pricing.selfHosted.body') }}</p>

                <div class="mt-6 min-h-24">
                    <div class="flex items-baseline gap-3">
                        <span class="{{ $amount }}">{{ $page->t('pricing.selfHosted.price') }}</span>
                        <span class="text-copy-lg text-text-secondary">{{ $page->t('pricing.selfHosted.period') }}</span>
                    </div>
                    <p class="mt-3 text-copy leading-[1.6] text-text-muted italic">{{ $page->t('pricing.selfHosted.aside') }}</p>
                </div>

                <a href="{{ $page->links['selfHostingGuide'] }}" class="mn-btn mn-btn--secondary mt-6 self-start no-underline hover:no-underline">
                    {{ $page->t('pricing.selfHosted.cta') }}
                </a>
                <p class="mt-3 text-small">
                    <a href="{{ $page->links['github'] }}" class="text-accent underline-offset-[3px]">
                        {{ $page->t('pricing.selfHosted.sourceCta', [':count' => $page->starCount]) }}
                    </a>
                </p>

                <p class="mt-8 {{ $body }}">{{ $page->t('pricing.selfHosted.listTitle') }}</p>
                @include('_partials.bullets', ['items' => $page->t('pricing.selfHosted.items')])

                <p class="mt-6 border-t border-border-subtle pt-5 text-copy font-medium text-text text-pretty">
                    {{ $page->t('pricing.selfHosted.footnote') }}
                </p>
                <p class="mt-3 {{ $body }}">{{ $page->t('pricing.selfHosted.footnote2') }}</p>
            </div>
        </div>
    </div>
</section>
