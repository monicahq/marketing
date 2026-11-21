@php
    $calc = $copy['calculator'];
    $locale = $page->lang();

    /**
     * Every number the calculator uses. The prices come from `plans` in
     * config.php, the same bare numbers the structured data quotes; the rest
     * is the joke, in one place.
     *
     * `pricingCalculator` in app.js receives all of this and does the same
     * arithmetic as `$quote` below. The two have to agree, because this one
     * draws the default quote into the HTML and that one redraws it as soon
     * as Alpine starts.
     */
    $rules = [
        'locale' => $locale,
        'defaults' => [
            'plan' => 'yearly',
            'people' => 150,
            'birthdays' => 3,
            'coffee' => 24,
            'cousins' => 4,
            'reminders' => 120,
            'mum' => 2,
            'pretend' => true,
            'notes' => true,
            'dentist' => false,
            'belated' => true,
            'social' => 'reasonable',
        ],
        'base' => [
            'monthly' => (float) $page->plans['monthly'],
            'yearly' => (float) $page->plans['yearly'],
            'lifetime' => (float) $page->plans['lifetime'],
        ],
        'rates' => ['people' => 0, 'birthdays' => 12, 'coffee' => 4.5, 'cousins' => 2, 'mum' => -5, 'pretend' => 15, 'dentist' => -3, 'belated' => 9],
        'multipliers' => ['hermit' => 0.4, 'reasonable' => 1, 'mayor' => 3.2],
        'prices' => ['monthly' => $prices['monthly'], 'yearly' => $prices['yearly'], 'lifetime' => $prices['lifetime']],
        'lines' => $calc['lines'],
        'per' => $calc['per'],
        'verdicts' => $calc['verdicts'],
    ];

    $sliders = [
        'people' => [0, 1000, 10],
        'birthdays' => [0, 30, 1],
        'coffee' => [0, 100, 1],
        'cousins' => [0, 20, 1],
        'reminders' => [0, 1000, 10],
        'mum' => [0, 30, 1],
    ];

    /**
     * Money the way the reader's language writes it, with the bare `$` rather
     * than `US$`, to match the prices in lang/. Intl.NumberFormat with
     * `currencyDisplay: 'narrowSymbol'` does the same in the browser.
     */
    $currency = new NumberFormatter($locale, NumberFormatter::CURRENCY);
    $currency->setTextAttribute(NumberFormatter::CURRENCY_CODE, 'USD');
    $currency->setSymbol(NumberFormatter::CURRENCY_SYMBOL, '$');
    $decimal = new NumberFormatter($locale, NumberFormatter::DECIMAL);

    $money = fn (float $n) => $currency->format(abs($n));
    $signed = fn (float $n) => $n == 0 ? $money(0) : ($n > 0 ? '+' : '−') . $money($n);

    $quote = function (array $s) use ($rules, $money, $signed, $decimal) {
        $r = $rules['rates'];
        $l = $rules['lines'];
        $base = $rules['base'][$s['plan']];
        $count = fn (string $text, $n, $rate = 0) => strtr($text, [':count' => $decimal->format($n), ':rate' => $money($rate)]);

        // [label, amount, shown]. A number is a charge or a credit; a string
        // is a word in place of one ("included", "free").
        $items = [
            'people' => [$count($l['people'], $s['people'], $r['people']), $s['people'] * $r['people'], true],
            'reminders' => [$count($l['reminders'], $s['reminders']), $l['included'], true],
            'birthdays' => [$count($l['birthdays'], $s['birthdays'], $r['birthdays']), $s['birthdays'] * $r['birthdays'], true],
            'coffee' => [$count($l['coffee'], $s['coffee'], $r['coffee']), $s['coffee'] * $r['coffee'], true],
            'cousins' => [$count($l['cousins'], $s['cousins'], $r['cousins']), $s['cousins'] * $r['cousins'], true],
            'mum' => [$count($l['mum'], $s['mum'], abs($r['mum'])), $s['mum'] * $r['mum'], true],
            'pretend' => [$l['pretend'], $r['pretend'], $s['pretend']],
            'notes' => [$l['notes'], $l['free'], $s['notes']],
            'dentist' => [$l['dentist'], $r['dentist'], $s['dentist']],
            'belated' => [$l['belated'], $r['belated'], $s['belated']],
        ];

        $raw = 0;
        foreach ($items as [, $amount, $shown]) {
            if ($shown && is_numeric($amount)) {
                $raw += $amount;
            }
        }

        $mult = $rules['multipliers'][$s['social']];
        $items['multiplier'] = [strtr($l['multiplier'], [':rate' => $decimal->format($mult)]), $raw * $mult - $raw, true];
        $subtotal = $base + $raw * $mult;

        $lines = ['base' => ['label' => $l['base'][$s['plan']], 'amount' => $money($base), 'tone' => 'charge', 'on' => true]];
        foreach ($items as $key => [$label, $amount, $shown]) {
            $lines[$key] = [
                'label' => $label,
                'amount' => is_numeric($amount) ? $signed($amount) : $amount,
                'tone' => ! is_numeric($amount) ? 'muted' : ($amount < 0 ? 'credit' : 'charge'),
                'on' => (bool) $shown,
            ];
        }

        $v = $rules['verdicts'];
        $verdict = match (true) {
            $s['birthdays'] >= 10 => strtr($v['birthdays'], [':count' => $s['birthdays']]),
            $s['coffee'] >= 50 => $v['coffee'],
            $s['mum'] === 0 => $v['mum'],
            default => $v['default'],
        };

        return [
            'id' => 'Q-' . (($s['people'] * 7 + $s['birthdays'] * 131 + $s['coffee'] * 17 + $s['cousins'] * 3 + $s['mum'] * 29) % 9000 + 1000),
            'lines' => $lines,
            'subtotal' => $money($subtotal),
            'refund' => $signed($base - $subtotal),
            'total' => $rules['prices'][$s['plan']],
            'per' => $rules['per'][$s['plan']],
            'verdict' => $verdict,
        ];
    };

    $default = $quote($rules['defaults']);

    // A line's colour by what it is. Listed in full so Tailwind finds them.
    $tones = "{ 'text-text-muted': quote.lines[key].tone === 'muted', 'text-success': quote.lines[key].tone === 'credit', 'text-text-soft': quote.lines[key].tone === 'charge' }";
    $toneClass = ['muted' => 'text-text-muted', 'credit' => 'text-success', 'charge' => 'text-text-soft'];

    $field = 'flex flex-col gap-0.5';
    $fieldLabel = 'text-base font-semibold text-text';
    $fieldHelp = 'text-xs text-text-muted';
    $seg = 'h-7 flex-1 cursor-pointer rounded-xs text-xs font-medium transition-colors duration-150 ease-standard';
    $row = 'flex items-baseline justify-between gap-4';
@endphp

{{-- A joke with a straight face: eleven made-up factors, an itemised quote,
     and a discount that removes every one of them, so the total is always
     the plan's price.

     The quote on the right is drawn in its default state, so without
     JavaScript it is a complete, correct example. The controls that change it
     are `js-only`, so nobody is offered a slider that does nothing. --}}
<section id="calculator" class="scroll-mt-6 px-4 pt-28 md:px-6" x-data="pricingCalculator({{ json_encode($rules, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) }})">
    <div class="{{ $container }} flex flex-col gap-10">
        <div class="flex flex-col items-center gap-3 text-center">
            <span class="{{ $eyebrow }}">{{ $calc['eyebrow'] }}</span>
            <h2 class="text-display-md font-semibold text-balance">{{ $calc['title'] }}</h2>
            <p class="max-w-[500px] text-copy text-text-secondary text-pretty">{{ $calc['lede'] }}</p>
        </div>

        <div class="grid grid-cols-[repeat(auto-fit,minmax(min(100%,320px),1fr))] items-start gap-4">
            <div class="js-only flex flex-col gap-7 rounded-lg border border-border bg-surface-subtle p-5 md:p-7">
                @foreach ($sliders as $key => [$min, $max, $step])
                    <div class="flex flex-col gap-2.5">
                        <div class="flex items-start justify-between gap-4">
                            <div class="{{ $field }}">
                                <label for="calc-{{ $key }}" class="{{ $fieldLabel }}">{{ $calc['sliders'][$key]['label'] }}</label>
                                <span id="calc-{{ $key }}-help" class="{{ $fieldHelp }}">{{ $calc['sliders'][$key]['help'] }}</span>
                            </div>
                            <output for="calc-{{ $key }}" class="min-w-11 flex-none rounded-md border border-border bg-canvas px-2 py-0.5 text-center font-mono text-xs text-text" x-text="{{ $key }}">{{ $rules['defaults'][$key] }}</output>
                        </div>
                        <input
                            id="calc-{{ $key }}"
                            type="range"
                            min="{{ $min }}"
                            max="{{ $max }}"
                            step="{{ $step }}"
                            value="{{ $rules['defaults'][$key] }}"
                            x-model.number="{{ $key }}"
                            aria-describedby="calc-{{ $key }}-help"
                            class="h-5 w-full cursor-pointer accent-primary"
                        >
                    </div>
                @endforeach

                <div class="flex flex-col gap-3.5 border-t border-border pt-6">
                    @foreach ($calc['toggles'] as $key => $toggle)
                        <div class="flex items-center justify-between gap-4">
                            <div class="{{ $field }}">
                                <span id="calc-{{ $key }}" class="{{ $fieldLabel }}">{{ $toggle['label'] }}</span>
                                <span id="calc-{{ $key }}-help" class="{{ $fieldHelp }}">{{ $toggle['help'] }}</span>
                            </div>
                            <button
                                type="button"
                                role="switch"
                                aria-labelledby="calc-{{ $key }}"
                                aria-describedby="calc-{{ $key }}-help"
                                aria-checked="{{ $rules['defaults'][$key] ? 'true' : 'false' }}"
                                x-bind:aria-checked="{{ $key }} ? 'true' : 'false'"
                                x-on:click="{{ $key }} = ! {{ $key }}"
                                x-bind:class="{ 'bg-primary': {{ $key }}, 'bg-border-strong': ! {{ $key }} }"
                                class="{{ $rules['defaults'][$key] ? 'bg-primary' : 'bg-border-strong' }} relative h-5 w-8.5 flex-none cursor-pointer rounded-full transition-colors duration-150 ease-standard"
                            >
                                <span
                                    x-bind:class="{ 'left-4': {{ $key }}, 'left-0.5': ! {{ $key }} }"
                                    class="{{ $rules['defaults'][$key] ? 'left-4' : 'left-0.5' }} absolute top-0.5 size-4 rounded-full bg-canvas shadow-panel transition-[left] duration-150 ease-standard"
                                ></span>
                            </button>
                        </div>
                    @endforeach
                </div>

                <div class="flex flex-col gap-2.5 border-t border-border pt-6">
                    <div class="{{ $field }}">
                        <span id="calc-social" class="{{ $fieldLabel }}">{{ $calc['social']['label'] }}</span>
                        <span class="{{ $fieldHelp }}">{{ $calc['social']['help'] }}</span>
                    </div>
                    <div role="group" aria-labelledby="calc-social" class="flex flex-wrap gap-1.5">
                        @foreach ($calc['social']['options'] as $key => $label)
                            <button
                                type="button"
                                class="mn-chip"
                                x-on:click="social = '{{ $key }}'"
                                aria-pressed="{{ $key === $rules['defaults']['social'] ? 'true' : 'false' }}"
                                x-bind:aria-pressed="social === '{{ $key }}'"
                            >{{ $label }} ×{{ $decimal->format($rules['multipliers'][$key]) }}</button>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- It floats beside the controls as they scroll, which is what
                 earns it the one raised shadow. --}}
            <div class="overflow-hidden rounded-lg border border-border bg-canvas shadow-pop md:sticky md:top-6">
                <div class="flex flex-col gap-3.5 border-b border-border px-6 pt-5 pb-4">
                    <div class="{{ $row }}">
                        <span class="{{ $eyebrow }}">{{ $calc['quote'] }}</span>
                        <span class="font-mono text-mono text-text-muted" x-text="quote.id">{{ $default['id'] }}</span>
                    </div>
                    <div role="group" aria-label="{{ $calc['planLabel'] }}" class="js-only flex gap-0.5 rounded-md border border-border bg-surface-subtle p-0.5">
                        @foreach ($calc['plans'] as $key => $label)
                            <button
                                type="button"
                                x-on:click="plan = '{{ $key }}'"
                                aria-pressed="{{ $key === $rules['defaults']['plan'] ? 'true' : 'false' }}"
                                x-bind:aria-pressed="plan === '{{ $key }}'"
                                x-bind:class="{ 'bg-canvas text-text shadow-nav-active': plan === '{{ $key }}', 'text-text-muted hover:text-text': plan !== '{{ $key }}' }"
                                class="{{ $seg }} {{ $key === $rules['defaults']['plan'] ? 'bg-canvas text-text shadow-nav-active' : 'text-text-muted hover:text-text' }}"
                            >{{ $label }}</button>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col px-6 pt-2 pb-3">
                    @foreach ($default['lines'] as $key => $line)
                        <div
                            class="{{ $row }} border-b border-dashed border-border py-2.5"
                            x-data="{ key: '{{ $key }}' }"
                            x-show="quote.lines[key].on"
                            @unless ($line['on']) style="display: none" @endunless
                        >
                            <span class="text-small text-text-secondary" x-text="quote.lines[key].label">{{ $line['label'] }}</span>
                            <span class="flex-none font-mono text-xs {{ $toneClass[$line['tone']] }}" x-bind:class="{{ $tones }}" x-text="quote.lines[key].amount">{{ $line['amount'] }}</span>
                        </div>
                    @endforeach

                    <div class="{{ $row }} pt-3 pb-2.5">
                        <span class="text-small font-semibold text-text">{{ $calc['subtotal'] }}</span>
                        <span class="font-mono text-xs text-text" x-text="quote.subtotal">{{ $default['subtotal'] }}</span>
                    </div>
                    <div class="{{ $row }} pt-2.5 pb-1">
                        <div class="{{ $field }}">
                            <span class="text-small font-semibold text-success">{{ $calc['refund'] }}</span>
                            <span class="text-xs text-text-muted">{{ $calc['refundHelp'] }}</span>
                        </div>
                        <span class="flex-none font-mono text-xs text-success" x-text="quote.refund">{{ $default['refund'] }}</span>
                    </div>
                </div>

                <div class="dark flex flex-col gap-4 bg-surface-subtle px-6 pt-5 pb-6 text-text-secondary">
                    <div class="flex items-end justify-between gap-4" aria-live="polite">
                        <div class="{{ $field }}">
                            <span class="font-semibold text-text">{{ $calc['total'] }}</span>
                            <span class="text-xs text-text-muted" x-text="quote.verdict">{{ $default['verdict'] }}</span>
                        </div>
                        <div class="flex flex-none items-baseline gap-1.5">
                            <span class="text-price leading-none font-semibold text-text" x-text="quote.total">{{ $default['total'] }}</span>
                            <span class="text-text-muted" x-text="quote.per">{{ $default['per'] }}</span>
                        </div>
                    </div>
                    <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary w-full no-underline hover:no-underline">{{ $calc['cta'] }}</a>
                    <button
                        type="button"
                        x-on:click="reset()"
                        class="js-only cursor-pointer self-center text-xs text-text-muted underline decoration-border-strong underline-offset-[3px] hover:text-text"
                    >{{ $calc['reset'] }}</button>
                </div>
            </div>
        </div>

        <p class="mx-auto max-w-[560px] text-center text-xs text-text-muted text-pretty">{{ $calc['footnote'] }}</p>
    </div>
</section>
