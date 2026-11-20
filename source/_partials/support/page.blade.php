{{--
    The support page: how to reach the people who build Monica, and where the
    documentation lives.

    Three blocks. The opening claim, a two-cell panel with the address on one
    side and the opening hours on the other, and the four documentation
    entries. The documentation is part of the application (my.monicahq.com),
    so each card leaves the site; their URLs and icons are `supportDocs` in
    config.php, in the same order as `support.docs` in lang/.

    The address is never written into this page as text. See email.blade.php.
--}}
@php
    $docs = collect($page->t('support.docs'))
        ->map(fn ($copy, $i) => $copy + $page->supportDocs[$i]->toArray());
@endphp

<section>
    <div class="mx-auto w-full max-w-marketing px-4 pt-16 pb-10 md:px-8">
        <span class="font-mono text-mono text-text-muted">{{ $page->t('support.eyebrow') }}</span>

        <h1 class="mt-4 max-w-[22ch] text-display-sm font-semibold text-balance md:text-display-lg">
            {{ $page->t('support.title') }}
        </h1>

        <p class="mt-5 max-w-[60ch] text-lede-sm text-text-secondary text-pretty md:text-lede">
            {{ $page->t('support.lede') }}
        </p>
    </div>
</section>

<section class="border-t border-border">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading-sm font-semibold">{{ $page->t('support.contactTitle') }}</h2>

        {{-- The cells draw the divider between them, so it moves from the
             bottom edge to the right edge when the panel goes side by side. --}}
        <div class="mt-5 grid overflow-hidden rounded-lg border border-border md:grid-cols-2">
            <div class="flex flex-col gap-3.5 border-border p-7 max-md:border-b md:border-r">
                <div class="flex items-center gap-2 text-small font-medium text-text-muted">
                    @include('_partials.icon', ['name' => 'mail', 'size' => 16])
                    <span>{{ $page->t('support.emailLabel') }}</span>
                </div>

                @include('_partials.support.email', [
                    'as' => 'text',
                    'class' => 'w-fit break-all text-heading-sm font-semibold text-text underline decoration-border-strong underline-offset-[5px] hover:text-text hover:decoration-text',
                ])

                <p class="text-small leading-[1.6] text-text-secondary text-pretty">{{ $page->t('support.emailHelp') }}</p>

                <div class="mt-1.5">
                    @include('_partials.support.email', [
                        'as' => 'button',
                        'label' => $page->t('support.emailButton'),
                    ])
                </div>
            </div>

            <div class="flex flex-col gap-3.5 bg-surface-subtle p-7">
                <div class="flex items-center gap-2 text-small font-medium text-text-muted">
                    @include('_partials.icon', ['name' => 'clock', 'size' => 16])
                    <span>{{ $page->t('support.hoursLabel') }}</span>
                </div>

                <div class="flex flex-col gap-1">
                    <div class="text-heading-sm font-semibold">{{ $page->t('support.hours') }}</div>
                    <div class="text-copy text-text-secondary">{{ $page->t('support.days') }}</div>
                </div>

                <p class="text-small leading-[1.6] text-text-secondary text-pretty">{{ $page->t('support.hoursHelp') }}</p>
            </div>
        </div>
    </div>
</section>

<section class="border-t border-border">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading-sm font-semibold">{{ $page->t('support.docsTitle') }}</h2>
        <p class="mt-1.5 text-small leading-[1.6] text-text-secondary">{{ $page->t('support.docsLede') }}</p>

        <div class="mt-5 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($docs as $doc)
                <a
                    href="{{ $doc['href'] }}"
                    class="flex flex-col gap-5 rounded-lg border border-border p-6 text-text no-underline transition-colors duration-100 ease-standard hover:border-border-strong hover:bg-surface-subtle hover:text-text hover:no-underline"
                >
                    <div class="flex items-center justify-between gap-3">
                        <div class="grid size-11 place-items-center rounded-lg border border-border bg-surface-subtle">
                            @include('_partials.icon', ['name' => $doc['icon'], 'size' => 20])
                        </div>
                        <span class="text-micro font-semibold tracking-[0.12em] text-text-muted uppercase">{{ $doc['kind'] }}</span>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="flex items-center gap-2 text-lede-sm font-semibold tracking-[-0.01em]">
                            <span>{{ $doc['title'] }}</span>
                            @include('_partials.icon', ['name' => 'arrowRight', 'size' => 16])
                        </div>
                        <p class="text-small leading-[1.6] text-text-secondary text-pretty">{{ $doc['description'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
