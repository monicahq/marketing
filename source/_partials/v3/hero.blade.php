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

        <div id="notify" class="mt-10 max-w-[580px]">
            {{-- The site is static, so the form posts to somebody else's
                 endpoint. Until `launchList` in config.php has a real one, it
                 posts to '#'. There is no success state here for the same
                 reason: the provider owns the page the reader lands on. --}}
            <form action="{{ $page->links['launchList'] }}" method="post" class="flex gap-3 max-md:flex-col max-md:items-stretch">
                <label class="mn-field min-w-0 flex-1">
                    <span class="mn-label">{{ $page->t('v3page.form.label') }}</span>
                    <input
                        class="mn-input"
                        type="email"
                        name="email"
                        autocomplete="email"
                        required
                        placeholder="{{ $page->t('v3page.form.placeholder') }}"
                    >
                </label>
                <button type="submit" class="mn-btn mn-btn--primary self-end max-md:w-full">
                    {{ $page->t('v3page.form.cta') }}
                </button>
            </form>

            <p class="mt-3 text-small leading-[1.6] text-text-muted">{{ $page->t('v3page.form.note') }}</p>
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
