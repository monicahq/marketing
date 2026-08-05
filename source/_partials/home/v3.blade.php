@php $body = 'max-w-[62ch] text-copy-lg text-text-secondary text-pretty'; @endphp

<section class="border-t border-border">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('v3.title') }}</h2>
        <p class="mt-5 {{ $body }}">{{ $page->t('v3.body') }}</p>
        <p class="mt-4 {{ $body }}">{{ $page->t('v3.body2') }}</p>

        <div class="mt-10 font-mono text-mono text-text-muted">{{ $page->t('v3.listLabel') }}</div>

        <div class="mt-5 grid grid-cols-[repeat(auto-fit,minmax(300px,1fr))] gap-6">
            @foreach ($page->t('v3.features') as $index => $feature)
                @include('_partials.feature-item', [
                    'feature' => $feature,
                    'layout' => 'stacked',
                    'rule' => $index < 3 ? 'standard' : 'quiet',
                ])
            @endforeach
        </div>

        <div class="mt-10 flex flex-wrap items-center gap-4">
            <a href="{{ $page->links['v3'] }}" class="mn-btn mn-btn--primary no-underline hover:no-underline">
                {{ $page->t('v3.cta') }}
            </a>
            <span class="font-mono text-mono text-text-muted">{{ $page->t('v3.note') }}</span>
        </div>
    </div>
</section>
