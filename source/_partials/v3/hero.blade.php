@php
    $lede = 'max-w-[58ch] text-lede-sm text-text-secondary text-pretty md:text-lede-md lg:text-lede';

    // The three claims under the rule. Icons live here rather than in lang/,
    // because the glyph is layout, not copy.
    $proof = [
        ['icon' => 'star', 'label' => $page->t('v3page.proof.stars', [':count' => $page->starCount])],
        ['icon' => 'code', 'label' => $page->t('v3page.proof.openSource')],
        ['icon' => 'lock', 'label' => $page->t('v3page.proof.selfHostable')],
    ];
@endphp

<section>
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <div class="flex flex-wrap items-center gap-3">
            <span class="mn-badge">{{ $page->t('v3page.badge') }}</span>

            {{-- The one place on the site with a 2px border: the date is the
                 page's single most important fact. --}}
            <span class="inline-flex items-center gap-2 rounded-full border-2 border-text px-3 py-1 text-caption font-semibold">
                @include('_partials.icon', ['name' => 'calendar', 'size' => 14])
                <span>{{ $page->t('v3page.timing') }}</span>
            </span>
        </div>

        <h1 class="mt-6 text-display-sm font-semibold md:text-display-lg lg:text-display-xl">
            {{ $page->t('v3page.title') }}
        </h1>

        <p class="mt-6 {{ $lede }}">{{ $page->t('v3page.lede') }}</p>
        <p class="mt-4 {{ $lede }}">{{ $page->t('v3page.lede2') }}</p>

        {{-- There is no signup form here. The site is static, so a form would
             have to post to somebody else's endpoint, and asking for an address
             to send one email later is a promise this page does not need to
             make. A reader is told when to come back instead. The border keeps
             the block anchored where the form used to be. --}}
        <div class="mt-10 max-w-[580px] rounded-lg border border-border bg-surface-subtle p-6">
            <p class="text-copy-lg text-pretty">{{ $page->t('v3page.progress.body') }}</p>
            <p class="mt-3 text-small leading-[1.6] text-text-muted">{{ $page->t('v3page.progress.note') }}</p>
        </div>

        <div class="mt-8 flex flex-wrap gap-x-5 gap-y-2 border-t border-border-subtle pt-6 font-mono text-mono text-text-muted">
            @foreach ($proof as $item)
                <span class="flex items-center gap-2">
                    @include('_partials.icon', ['name' => $item['icon'], 'size' => 14])
                    <span>{{ $item['label'] }}</span>
                </span>
            @endforeach
        </div>
    </div>
</section>
