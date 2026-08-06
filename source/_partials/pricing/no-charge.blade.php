<section class="border-t border-border bg-surface-subtle">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('pricing.noCharge.title') }}</h2>

        {{-- Uniform rules: the column count is fluid, so a stronger rule on the
             first row would only line up at one width. --}}
        <div class="mt-10 grid grid-cols-[repeat(auto-fit,minmax(280px,1fr))] gap-x-6 gap-y-8">
            @foreach ($page->t('pricing.noCharge.items') as $item)
                <div class="border-t border-border pt-5">
                    <h3 class="text-title font-semibold">{{ $item['title'] }}</h3>
                    <p class="mt-2 text-copy text-text-secondary text-pretty">{{ $item['body'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
