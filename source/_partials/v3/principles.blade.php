<section>
    <div class="mx-auto grid w-full max-w-marketing grid-cols-[repeat(auto-fit,minmax(320px,1fr))] gap-10 px-4 py-section-sm md:px-8 lg:py-section">
        <div>
            <span class="font-mono text-mono text-text-muted">{{ $page->t('v3page.principles.label') }}</span>
            <h2 class="mt-4 text-heading font-semibold lg:text-display-md">{{ $page->t('v3page.principles.title') }}</h2>
            <p class="mt-4 max-w-[52ch] text-copy-lg text-text-secondary text-pretty">
                {{ $page->t('v3page.principles.body', [':count' => $page->starCount]) }}
            </p>
        </div>

        {{-- A divided list: a rule above every item and one below the last, so
             the column reads as a closed block beside the heading. --}}
        <div class="border-b border-border-subtle">
            @foreach ($page->t('v3page.principles.items') as $index => $item)
                @include('_partials.feature-item', [
                    'feature' => $item,
                    'layout' => 'inline',
                    'rule' => $index === 0 ? 'standard' : 'quiet',
                ])
            @endforeach
        </div>
    </div>
</section>
