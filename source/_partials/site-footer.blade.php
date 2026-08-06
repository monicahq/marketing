@php
    $columns = [
        [
            'label' => $page->t('footer.productLabel'),
            'links' => [
                ['label' => $page->t('nav.product'), 'href' => $page->route('home')],
                ['label' => $page->t('nav.v3'), 'href' => $page->route('v3')],
                ['label' => $page->t('nav.pricing'), 'href' => $page->route('pricing')],
            ],
        ],
        [
            'label' => $page->t('footer.buildLabel'),
            'links' => [
                ['label' => $page->t('footer.api'), 'href' => $page->links['api']],
                ['label' => $page->t('nav.docs'), 'href' => $page->links['docs']],
                ['label' => $page->t('footer.selfHosting'), 'href' => $page->links['selfHostingGuide']],
            ],
        ],
        [
            'label' => $page->t('footer.projectLabel'),
            'links' => [
                ['label' => $page->t('footer.github'), 'href' => $page->links['github']],
                ['label' => $page->t('nav.blog'), 'href' => $page->route('blog')],
                ['label' => $page->t('footer.privacy'), 'href' => $page->links['privacy']],
            ],
        ],
    ];
@endphp

{{-- The only large dark region in the entire system. --}}
<footer class="bg-surface-inverse text-on-inverse">
    <div class="mx-auto w-full max-w-marketing px-4 pt-12 pb-10 md:px-8">
        <div class="grid grid-cols-2 gap-8 lg:grid-cols-[2fr_1fr_1fr_1fr]">
            <div>
                <div class="flex items-center gap-3">
                    {{-- The white chip stays: the mark's body is near-black and
                         would disappear into the inverse surface without it. --}}
                    <span class="inline-flex rounded-sm bg-white p-0.5">
                        <img
                            src="/assets/images/monica-panda-mark.svg"
                            alt=""
                            width="32"
                            height="29"
                            class="block h-auto w-[18px]"
                        >
                    </span>
                    <span class="text-[16px] font-semibold tracking-[-0.015em] text-on-inverse-strong">Monica</span>
                </div>
                <p class="mt-4 max-w-[38ch] text-small leading-[1.6]">{{ $page->t('footer.tagline') }}</p>
            </div>

            @foreach ($columns as $column)
                <div class="flex flex-col gap-3">
                    <div class="text-micro font-medium tracking-[0.06em] text-on-inverse-muted uppercase">
                        {{ $column['label'] }}
                    </div>
                    @foreach ($column['links'] as $link)
                        <a href="{{ $link['href'] }}" class="text-small text-on-inverse no-underline hover:text-on-inverse-strong">
                            {{ $link['label'] }}
                        </a>
                    @endforeach
                </div>
            @endforeach
        </div>

        <div class="mt-10 flex flex-wrap items-center gap-4 border-t border-on-inverse-border pt-6 text-small text-on-inverse-muted">
            @include('_partials.locale-picker')
            <span>{{ $page->t('footer.copyright', [':year' => $page->year]) }}</span>
            <span class="font-mono text-mono">{{ $page->t('footer.since') }}</span>
            <span>{{ $page->t('footer.ownership') }}</span>
        </div>
    </div>
</footer>
