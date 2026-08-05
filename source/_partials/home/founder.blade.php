@php $body = 'text-copy-lg text-text-secondary text-pretty'; @endphp

<section class="border-t border-border bg-surface-subtle">
    <div class="mx-auto w-full max-w-form px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('founder.title') }}</h2>
        <p class="mt-5 {{ $body }}">{{ $page->t('founder.body') }}</p>
        <p class="mt-4 {{ $body }}">{{ $page->t('founder.body2') }}</p>
        <p class="mt-4 {{ $body }}">{{ $page->t('founder.body3') }}</p>
        <p class="mt-6 text-small text-text-muted">{{ $page->t('founder.signature') }}</p>
    </div>
</section>
