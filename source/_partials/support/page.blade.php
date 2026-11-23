{{--
    The support page: how to reach the people who build Monica, and where the
    documentation lives.

    Three blocks. The opening claim, a two-cell panel with the address on one
    side and the opening hours on the other, and the four documentation cards.
    The documentation is part of the application (my.monicahq.com), so each
    card leaves the site; their URLs, icons and identity colours are
    `supportDocs` in config.php, in the same order as `support.docs` in lang/.

    The address is never written into this page as text. See email.blade.php.
--}}
@php
    // The tile around each card's icon, keyed by the identity colour named in
    // config.php. Literal class strings, so Tailwind's scanner sees them.
    $tones = [
        'identity-1' => ['tile' => 'text-identity-1 bg-identity-1/9 border-identity-1/20', 'kind' => 'text-identity-1'],
        'identity-5' => ['tile' => 'text-identity-5 bg-identity-5/9 border-identity-5/20', 'kind' => 'text-identity-5'],
        'identity-6' => ['tile' => 'text-identity-6 bg-identity-6/9 border-identity-6/20', 'kind' => 'text-identity-6'],
        'identity-7' => ['tile' => 'text-identity-7 bg-identity-7/9 border-identity-7/20', 'kind' => 'text-identity-7'],
    ];

    $docs = collect($page->t('support.docs'))
        ->map(fn ($copy, $i) => $copy + $page->supportDocs[$i]->toArray());

    $container = 'mx-auto w-full max-w-page';
    $heading = 'text-xl font-semibold text-text';
    $note = 'text-base text-text-secondary text-pretty';
    $caption = 'flex items-center gap-2 text-base font-medium text-text-muted';
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="flex max-w-[640px] flex-col gap-4">
            <span class="text-caption font-medium tracking-[0.08em] text-text-muted uppercase">{{ $page->t('support.eyebrow') }}</span>
            <h1 class="text-display-sm font-semibold text-balance text-text md:text-display-lg">{{ $page->t('support.title') }}</h1>
            <p class="text-lede-sm text-text-secondary text-pretty">{{ $page->t('support.lede') }}</p>
        </div>
    </div>
</section>

<section class="px-4 pt-18 md:px-6">
    <div class="{{ $container }} flex flex-col gap-5">
        <h2 class="{{ $heading }}">{{ $page->t('support.contactTitle') }}</h2>

        {{-- The cells draw the divider between them, so it moves from the
             bottom edge to the right edge when the panel goes side by side. --}}
        <div class="grid overflow-hidden rounded-lg border border-border bg-canvas shadow-panel md:grid-cols-2">
            <div class="flex flex-col gap-3.5 border-border p-7 max-md:border-b md:border-r">
                <div class="{{ $caption }}">
                    @include('_partials.icon', ['name' => 'mail', 'size' => 16])
                    <span>{{ $page->t('support.emailLabel') }}</span>
                </div>

                @include('_partials.support.email', [
                    'as' => 'text',
                    'class' => 'w-fit break-all text-heading-sm font-semibold text-text underline decoration-border-strong underline-offset-[5px] hover:text-text hover:decoration-text',
                ])

                <p class="{{ $note }}">{{ $page->t('support.emailHelp') }}</p>

                <div class="mt-1.5">
                    @include('_partials.support.email', [
                        'as' => 'button',
                        'label' => $page->t('support.emailButton'),
                    ])
                </div>
            </div>

            <div class="flex flex-col gap-3.5 bg-surface-subtle p-7">
                <div class="{{ $caption }}">
                    @include('_partials.icon', ['name' => 'clock', 'size' => 16])
                    <span>{{ $page->t('support.hoursLabel') }}</span>
                </div>

                <div class="flex flex-col gap-1">
                    <div class="text-heading-sm font-semibold text-text">{{ $page->t('support.hours') }}</div>
                    <div class="text-copy text-text-soft">{{ $page->t('support.days') }}</div>
                </div>

                <p class="{{ $note }}">{{ $page->t('support.hoursHelp') }}</p>
            </div>
        </div>
    </div>
</section>

<section class="px-4 pt-18 md:px-6">
    <div class="{{ $container }} flex flex-col gap-5">
        <div class="flex flex-col gap-1.5">
            <h2 class="{{ $heading }}">{{ $page->t('support.docsTitle') }}</h2>
            <p class="{{ $note }}">{{ $page->t('support.docsLede') }}</p>
        </div>

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($docs as $doc)
                @php($tone = $tones[$doc['tone']])
                <a
                    href="{{ $doc['href'] }}"
                    class="flex flex-col gap-5 rounded-lg border border-border bg-canvas p-6 text-text no-underline shadow-panel transition-colors duration-150 ease-standard hover:bg-surface-subtle hover:text-text hover:no-underline"
                >
                    <div class="flex items-center justify-between gap-3">
                        <div class="grid size-11 place-items-center rounded-lg border {{ $tone['tile'] }}">
                            @include('_partials.icon', ['name' => $doc['icon'], 'size' => 20])
                        </div>
                        <span class="text-caption font-semibold tracking-[0.12em] uppercase {{ $tone['kind'] }}">{{ $doc['kind'] }}</span>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="flex items-center gap-2 text-lede-sm font-semibold tracking-[-0.01em]">
                            <span>{{ $doc['title'] }}</span>
                            @include('_partials.icon', ['name' => 'arrow-right', 'size' => 16])
                        </div>
                        <p class="{{ $note }}">{{ $doc['description'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
