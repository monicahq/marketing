@php
    $copy = $page->t('home.pricing');
    $cloud = $copy['cloud'];

    /**
     * Alpine's state, handed over as one JSON object, the same way the pricing
     * page does it. The prices come from `pricing.hosted`, the pricing page's
     * own copy, so the two pages cannot quote different numbers.
     *
     * Yearly first, because it is the default the page renders with.
     */
    $billing = [
        'period' => 'yearly',
        'plans' => [
            'yearly' => [
                'price' => $page->t('pricing.hosted.yearlyPrice'),
                'per' => $cloud['perYear'],
                'note' => $cloud['yearlyNote'],
            ],
            'monthly' => [
                'price' => $page->t('pricing.hosted.monthlyPrice'),
                'per' => $cloud['perMonth'],
                'note' => '',
            ],
        ],
    ];

    $planCard = 'flex flex-col gap-6 rounded-lg border border-border bg-canvas p-7 shadow-panel';
    $planTitle = 'text-xl font-semibold';
    $seg = 'h-6.5 cursor-pointer rounded-xs px-2.5 text-xs font-medium transition-colors duration-150 ease-standard';
@endphp

<section class="border-y border-border bg-surface-subtle px-4 py-28 md:px-6">
    <div class="mx-auto flex max-w-page flex-col items-center gap-12">
        <div class="flex max-w-[640px] flex-col items-center gap-4.5 text-center">
            <div class="flex items-center gap-2.5 rounded-full border border-border bg-canvas py-1 pr-3 pl-1">
                <span class="rounded-full bg-primary px-2.5 py-0.5 text-caption font-medium tracking-[0.08em] text-on-primary uppercase">{{ $copy['badge'] }}</span>
                <span class="text-small font-medium text-text-soft">{{ $copy['badgeText'] }}</span>
            </div>
            <h2 class="text-display-pricing font-semibold">{{ $copy['title'] }}</h2>
            <p class="text-copy-lg text-text-secondary">{{ $copy['lede'] }}</p>
        </div>

        <div class="grid w-full grid-cols-[repeat(auto-fit,minmax(290px,1fr))] gap-4 lg:max-w-[760px]">
            <div class="{{ $planCard }}">
                <div class="flex flex-col gap-3.5">
                    <h3 class="{{ $planTitle }}">{{ $copy['selfHost']['title'] }}</h3>
                    <div class="flex items-baseline gap-1.5">
                        <span class="text-price font-semibold">{{ $copy['selfHost']['price'] }}</span>
                        <span class="text-body text-text-muted">{{ $copy['selfHost']['per'] }}</span>
                    </div>
                </div>
                @include('_partials.home.checklist', ['items' => $copy['selfHost']['items']])
                <a href="{{ $page->links['docs'] }}" class="mn-btn mn-btn-secondary w-full no-underline hover:no-underline">{{ $copy['selfHost']['cta'] }}</a>
            </div>

            {{-- Alpine owns the billing period. Everything below renders in the
                 yearly state first, so the card is complete and correct before
                 the script loads, and if it never does. --}}
            <div class="{{ $planCard }}" x-data="{{ json_encode($billing, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) }}">
                <div class="flex flex-col gap-3.5">
                    <div class="flex items-center justify-between gap-3">
                        <h3 class="{{ $planTitle }}">{{ $cloud['title'] }}</h3>

                        {{-- Hidden without JavaScript, because the buttons would
                             be inert: the reader keeps the yearly price and loses
                             only the choice. --}}
                        <div role="group" aria-label="{{ $cloud['billingLabel'] }}" class="js-only flex rounded-md border border-border bg-surface-subtle p-0.5">
                            <button
                                type="button"
                                x-on:click="period = 'monthly'"
                                x-bind:aria-pressed="period === 'monthly'"
                                x-bind:class="period === 'monthly' ? 'bg-canvas text-text shadow-nav-active' : 'text-text-muted hover:text-text'"
                                class="{{ $seg }}"
                            >{{ $cloud['monthly'] }}</button>
                            <button
                                type="button"
                                x-on:click="period = 'yearly'"
                                x-bind:aria-pressed="period === 'yearly'"
                                x-bind:class="period === 'yearly' ? 'bg-canvas text-text shadow-nav-active' : 'text-text-muted hover:text-text'"
                                class="{{ $seg }}"
                            >{{ $cloud['yearly'] }}</button>
                        </div>
                    </div>

                    {{-- Each binding wraps the yearly text it replaces, so the
                         figures are in the HTML rather than filled in on load. --}}
                    <div class="flex flex-wrap items-baseline gap-1.5" aria-live="polite">
                        <span class="text-price font-semibold" x-text="plans[period].price">{{ $billing['plans']['yearly']['price'] }}</span>
                        <span class="text-body text-text-muted" x-text="plans[period].per">{{ $billing['plans']['yearly']['per'] }}</span>
                        <span class="text-xs font-medium text-success" x-text="plans[period].note">{{ $billing['plans']['yearly']['note'] }}</span>
                    </div>
                </div>
                @include('_partials.home.checklist', ['items' => $cloud['items']])
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary w-full no-underline hover:no-underline">{{ $cloud['cta'] }}</a>
            </div>
        </div>
    </div>
</section>
