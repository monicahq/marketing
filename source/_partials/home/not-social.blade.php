@php $body = 'text-copy-lg text-text-secondary text-pretty'; @endphp

<section class="border-t border-border">
    <div class="mx-auto w-full max-w-form px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('notSocial.title') }}</h2>
        <p class="mt-5 {{ $body }}">{{ $page->t('notSocial.body') }}</p>
        <p class="mt-4 {{ $body }}">{{ $page->t('notSocial.body2') }}</p>

        {{-- Emphasis through a rule and weight, never a tinted panel or a shadow. --}}
        <p class="mt-8 border-l-2 border-text pl-6 text-heading-sm font-semibold text-balance">
            {{ $page->t('notSocial.quote') }}
        </p>
    </div>
</section>
