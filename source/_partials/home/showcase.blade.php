<section class="border-t border-border bg-surface-subtle">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('showcase.title') }}</h2>
        <p class="mt-5 max-w-[56ch] text-copy leading-[1.6] text-text-muted italic">
            {{ $page->t('showcase.aside') }}
        </p>

        <div class="mt-8 grid grid-cols-1 items-start gap-8 lg:mt-10 lg:grid-cols-[minmax(0,1.15fr)_minmax(0,1fr)] lg:gap-12">
            @include('_partials.home.contact-card')

            <div class="flex flex-col gap-6">
                @foreach ($page->t('showcase.features') as $feature)
                    @include('_partials.feature-item', ['feature' => $feature])
                @endforeach
            </div>
        </div>
    </div>
</section>
