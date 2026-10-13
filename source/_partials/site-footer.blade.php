@php
    $columns = [
        [
            'label' => $page->t('footer.productLabel'),
            'links' => [
                ['label' => $page->t('nav.pricing'), 'href' => $page->route('pricing')],
                ['label' => $page->t('footer.personalCrm'), 'href' => $page->route('personalCrm')],
                ['label' => $page->t('nav.v3'), 'href' => $page->route('v3')],
                ['label' => $page->t('footer.changelog'), 'href' => $page->links['changelog']],
            ],
        ],
        [
            'label' => $page->t('footer.developersLabel'),
            'links' => [
                ['label' => $page->t('nav.docs'), 'href' => $page->links['docs']],
                ['label' => $page->t('footer.mcp'), 'href' => $page->links['mcp']],
                ['label' => $page->t('footer.api'), 'href' => $page->links['api']],
            ],
        ],
        [
            'label' => $page->t('footer.companyLabel'),
            'links' => [
                ['label' => $page->t('nav.blog'), 'href' => $page->route('blog')],
                ['label' => $page->t('footer.team'), 'href' => $page->route('team')],
                ['label' => $page->t('footer.contactSales'), 'href' => $page->links['contactSales']],
                ['label' => $page->t('footer.privacy'), 'href' => $page->route('privacy')],
                ['label' => $page->t('footer.terms'), 'href' => $page->route('terms')],
            ],
        ],
    ];

    // The meadow, by day and by night. The two files need not share a ratio,
    // so each carries its own size.
    $day = '/assets/images/footer/pandas-day.webp';
    $night = '/assets/images/footer/pandas-night.webp';
    $daySize = $page->imageSize($day);
    $nightSize = $page->imageSize($night);
@endphp

{{-- The site's one illustration (the homepage headline sits on it too), a deliberate exception to the design
     system's "no illustration" rule: the closing line is about going outside,
     and this is outside. The ground is cream by day and the night sky's own
     navy by night, so the picture rises out of its own colour. --}}
<footer class="relative mt-18 overflow-hidden bg-ground-cream text-ground-cream-ink">
    <div class="relative z-10 mx-auto flex w-full max-w-page flex-col gap-16 px-4 pt-24 md:px-6">
        <div class="flex flex-col items-center gap-5 text-center">
            <h2 class="text-display-closing font-semibold text-balance">
                @foreach ($page->t('footer.closing') as $line)
                    <span class="block">{{ $line }}</span>
                @endforeach
            </h2>
            <div class="flex flex-wrap justify-center gap-2.5">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $page->t('footer.start') }}</a>
                <a href="{{ $page->links['github'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $page->t('footer.github') }}</a>
            </div>
        </div>

        <div class="flex flex-wrap justify-between gap-10 border-t border-ground-cream-rule pt-8">
            <div class="flex flex-[1_1_220px] flex-col items-start gap-2.5">
                <div class="flex items-center gap-2">
                    {{-- Below the fold on every page, which is what `lazy` is for.
                         The header's copy of the mark stays eager. --}}
                    <img
                        src="/assets/images/monica-panda-mark.svg"
                        alt=""
                        width="32"
                        height="29"
                        loading="lazy"
                        decoding="async"
                        class="block h-auto w-5.5"
                    >
                    <span class="text-copy font-semibold tracking-[-0.02em]">Monica</span>
                </div>
                <span class="text-small text-ground-cream-muted">{{ $page->t('footer.tagline') }}</span>
                <div class="mt-2">
                    @include('_partials.locale-picker')
                </div>
            </div>

            <div class="flex flex-wrap gap-14">
                @foreach ($columns as $column)
                    <div class="flex flex-col gap-2.5 text-base">
                        <span class="text-caption font-medium tracking-[0.08em] text-ground-cream-muted uppercase">{{ $column['label'] }}</span>
                        @foreach ($column['links'] as $link)
                            <a href="{{ $link['href'] }}" class="text-ground-cream-ink no-underline hover:text-ground-cream-ink hover:underline">{{ $link['label'] }}</a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Pulled up under the links by 9vw so the hills start behind them, and
         never narrower than 900px, so a phone crops the edges of the meadow
         rather than shrinking the pandas to specks. --}}
    <picture>
        <source
            media="(prefers-color-scheme: dark)"
            srcset="{{ $night }}"
            width="{{ $nightSize['width'] }}"
            height="{{ $nightSize['height'] }}"
        >
        <img
            src="{{ $day }}"
            alt="{{ $page->t('footer.art') }}"
            width="{{ $daySize['width'] }}"
            height="{{ $daySize['height'] }}"
            loading="lazy"
            decoding="async"
            class="relative left-1/2 -mt-[9vw] block h-auto w-full min-w-[900px] -translate-x-1/2"
        >
    </picture>

    {{-- On a flat band under the meadow rather than over the grass: no
         colour of text is legible against every daisy. --}}
    <div class="flex justify-center bg-ground-sage px-6 py-3.5">
        <span class="text-xs text-ground-sage-ink">{{ $page->t('footer.copyright', [':year' => $page->year]) }}</span>
    </div>
</footer>
