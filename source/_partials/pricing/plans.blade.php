@php
    $lede = 'max-w-[58ch] text-lede-sm text-text-secondary text-pretty md:text-lede-md lg:text-lede';
    $body = 'text-copy text-text-secondary text-pretty';
    $planCard = 'flex flex-col rounded-lg border border-border bg-surface p-region';
    $planTitle = 'text-heading-sm font-semibold';
    $amount = 'text-[44px] leading-none font-semibold tracking-[-0.03em]';

    // The segmented control is two radios and two labels. The peers are named,
    // because `peer-checked:` compiles to a `~` combinator that would match any
    // later sibling: an unnamed peer lights both labels at once. The prices are
    // not siblings of the inputs at all, so those swap through the section's
    // `:has()` instead.
    //
    // Written out per label rather than built from a variable: Tailwind scans
    // for literal class strings, and a concatenated one is invisible to it.
    // The checked colour is marked important because `hover:text-text` ties with
    // it on specificity and wins on source order. The pointer is left sitting on
    // the label the moment it is clicked, so without this the selected option is
    // near-black text on a near-black pill.
    $seg = 'cursor-pointer rounded-full px-4 py-1.5 text-small text-text-secondary transition-colors duration-100 ease-standard hover:text-text';
    $segYearly = 'peer-checked/yearly:bg-surface-inverse peer-checked/yearly:font-medium peer-checked/yearly:text-canvas! peer-focus-visible/yearly:outline-2 peer-focus-visible/yearly:outline-offset-2 peer-focus-visible/yearly:outline-focus';
    $segMonthly = 'peer-checked/monthly:bg-surface-inverse peer-checked/monthly:font-medium peer-checked/monthly:text-canvas! peer-focus-visible/monthly:outline-2 peer-focus-visible/monthly:outline-offset-2 peer-focus-visible/monthly:outline-focus';
@endphp

{{-- `group/billing` is what the price spans read through `group-has-*`. --}}
<section class="group/billing">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <span class="font-mono text-mono text-text-muted">{{ $page->t('pricing.eyebrow') }}</span>

        <h1 class="mt-4 text-display-sm font-semibold md:text-display-lg lg:text-display-xl">
            {{ $page->t('pricing.title') }}
        </h1>

        <p class="mt-6 {{ $lede }}">{{ $page->t('pricing.lede') }}</p>
        <p class="mt-4 {{ $lede }}">{{ $page->t('pricing.lede2') }}</p>

        <div class="mt-8 flex flex-wrap items-center gap-4">
            <fieldset class="inline-flex rounded-full border border-border bg-surface p-[3px]">
                <legend class="sr-only">{{ $page->t('pricing.billing.label') }}</legend>

                <input type="radio" name="billing" id="billing-yearly" class="peer/yearly sr-only" checked>
                <label for="billing-yearly" class="{{ $seg }} {{ $segYearly }}">{{ $page->t('pricing.billing.yearly') }}</label>

                <input type="radio" name="billing" id="billing-monthly" class="peer/monthly sr-only">
                <label for="billing-monthly" class="{{ $seg }} {{ $segMonthly }}">{{ $page->t('pricing.billing.monthly') }}</label>
            </fieldset>

            <span class="font-mono text-mono text-text-muted">{{ $page->t('pricing.currency') }}</span>
        </div>

        <div class="mt-8 grid grid-cols-[repeat(auto-fit,minmax(320px,1fr))] gap-6">
            <div class="{{ $planCard }}">
                <h2 class="{{ $planTitle }}">{{ $page->t('pricing.hosted.title') }}</h2>
                <p class="mt-2 {{ $body }}">{{ $page->t('pricing.hosted.body') }}</p>

                {{-- Fixed height so the two cards' buttons stay on one line as
                     the price swaps between a one-line and a two-line note. --}}
                <div class="mt-6 min-h-24">
                    <div class="flex items-baseline gap-3">
                        <span class="{{ $amount }}">
                            <span class="hidden group-has-[#billing-yearly:checked]/billing:inline">{{ $page->t('pricing.hosted.yearlyPrice') }}</span>
                            <span class="hidden group-has-[#billing-monthly:checked]/billing:inline">{{ $page->t('pricing.hosted.monthlyPrice') }}</span>
                        </span>
                        <span class="text-copy-lg text-text-secondary">
                            <span class="hidden group-has-[#billing-yearly:checked]/billing:inline">{{ $page->t('pricing.hosted.yearlyPeriod') }}</span>
                            <span class="hidden group-has-[#billing-monthly:checked]/billing:inline">{{ $page->t('pricing.hosted.monthlyPeriod') }}</span>
                        </span>
                    </div>

                    <p class="mt-3 {{ $body }}">
                        <span class="hidden group-has-[#billing-yearly:checked]/billing:inline">{{ $page->t('pricing.hosted.yearlyNote') }}</span>
                        <span class="hidden group-has-[#billing-monthly:checked]/billing:inline">{{ $page->t('pricing.hosted.monthlyNote') }}</span>
                    </p>
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
