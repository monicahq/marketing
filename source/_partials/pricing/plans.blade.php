@php
    $plans = $copy['plans'];
    $hosted = $plans['hosted'];

    /**
     * Alpine's state for the hosted card, handed over as one JSON object so
     * the copy stays in lang/. Yearly first, because it is the default the
     * page renders with.
     */
    $billing = [
        'period' => 'yearly',
        'plans' => [
            'yearly' => ['price' => $prices['yearly'], 'per' => $hosted['perYear'], 'note' => $hosted['yearlyNote']],
            'monthly' => ['price' => $prices['monthly'], 'per' => $hosted['perMonth'], 'note' => ''],
        ],
    ];

    $card = 'flex flex-col gap-5 rounded-lg border border-border p-6';
    $title = 'flex items-center gap-2 text-copy font-semibold text-text';
    $body = 'text-small text-text-muted';
    $priceRow = 'flex min-h-11 flex-wrap items-baseline gap-1.5';
    $amount = 'text-price font-semibold text-text';
    $seg = 'h-7 flex-1 cursor-pointer rounded-xs text-xs font-medium transition-colors duration-150 ease-standard';
@endphp

<section class="px-4 pt-26 md:px-6">
    <div class="{{ $container }} flex flex-col items-center gap-10">
        <div class="flex flex-col items-center gap-3 text-center">
            <h2 class="text-display-md font-semibold text-balance">{{ $plans['title'] }}</h2>
            <p class="max-w-[500px] text-copy text-text-secondary text-pretty">{{ $plans['lede'] }}</p>
        </div>

        <div class="grid w-full grid-cols-[repeat(auto-fit,minmax(min(100%,270px),1fr))] items-stretch gap-4">
            <div class="{{ $card }} bg-canvas shadow-panel">
                <div class="flex flex-col gap-1">
                    <h3 class="{{ $title }}">{{ $plans['selfHost']['title'] }}</h3>
                    <p class="{{ $body }}">{{ $plans['selfHost']['body'] }}</p>
                </div>
                <div class="{{ $priceRow }}">
                    <span class="{{ $amount }}">{{ $prices['free'] }}</span>
                    <span class="text-text-muted">{{ $plans['selfHost']['per'] }}</span>
                </div>
                @include('_partials.home.checklist', ['items' => $plans['selfHost']['items']])
                <a href="{{ $page->links['selfHostingGuide'] }}" class="mn-btn mn-btn-secondary w-full no-underline hover:no-underline">{{ $plans['selfHost']['cta'] }}</a>
            </div>

            {{-- The plan most people pick, drawn dark: `dark` makes the design
                 system resolve its dark values inside the card, so the badge,
                 the control and the button invert with it.

                 Alpine owns the billing period. The card renders in the yearly
                 state first, so it is complete and correct before the script
                 loads, and if it never does. --}}
            <div class="dark {{ $card }} bg-surface-subtle text-text-secondary" x-data="{{ json_encode($billing, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) }}">
                <div class="flex flex-col gap-1">
                    <h3 class="{{ $title }}">
                        {{ $hosted['title'] }}
                        <span class="mn-badge mn-badge-accent">{{ $hosted['badge'] }}</span>
                    </h3>
                    <p class="{{ $body }}">{{ $hosted['body'] }}</p>
                </div>

                {{-- Hidden without JavaScript, because the buttons would be
                     inert: the reader keeps the yearly price and loses only
                     the choice. --}}
                <div role="group" aria-label="{{ $hosted['billingLabel'] }}" class="js-only flex gap-0.5 rounded-md border border-border bg-canvas p-0.5">
                    @foreach (['monthly', 'yearly'] as $period)
                        <button
                            type="button"
                            x-on:click="period = '{{ $period }}'"
                            aria-pressed="{{ $period === $billing['period'] ? 'true' : 'false' }}"
                            x-bind:aria-pressed="period === '{{ $period }}'"
                            x-bind:class="{ 'bg-surface-muted text-text shadow-nav-active': period === '{{ $period }}', 'text-text-muted hover:text-text': period !== '{{ $period }}' }"
                            class="{{ $seg }} {{ $period === $billing['period'] ? 'bg-surface-muted text-text shadow-nav-active' : 'text-text-muted hover:text-text' }}"
                        >{{ $hosted[$period] }}</button>
                    @endforeach
                </div>

                <div class="{{ $priceRow }}" aria-live="polite">
                    <span class="{{ $amount }}" x-text="plans[period].price">{{ $billing['plans']['yearly']['price'] }}</span>
                    <span class="text-text-muted" x-text="plans[period].per">{{ $billing['plans']['yearly']['per'] }}</span>
                    <span class="ml-auto text-xs font-medium text-success" x-text="plans[period].note">{{ $billing['plans']['yearly']['note'] }}</span>
                </div>
                @include('_partials.home.checklist', ['items' => $hosted['items']])
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary w-full no-underline hover:no-underline">{{ $hosted['cta'] }}</a>
            </div>

            <div class="{{ $card }} bg-canvas shadow-panel">
                <div class="flex flex-col gap-1">
                    <h3 class="{{ $title }}">
                        {{ $plans['lifetime']['title'] }}
                        <span class="mn-badge mn-badge-neutral">{{ $plans['lifetime']['badge'] }}</span>
                    </h3>
                    <p class="{{ $body }}">{{ $plans['lifetime']['body'] }}</p>
                </div>
                <div class="{{ $priceRow }}">
                    <span class="{{ $amount }}">{{ $prices['lifetime'] }}</span>
                    <span class="text-text-muted">{{ $plans['lifetime']['per'] }}</span>
                </div>
                @include('_partials.home.checklist', ['items' => $plans['lifetime']['items']])
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-secondary w-full no-underline hover:no-underline">{{ $plans['lifetime']['cta'] }}</a>
            </div>
        </div>

        <p class="text-center text-xs text-text-muted">{{ $plans['footnote'] }}</p>
    </div>
</section>
