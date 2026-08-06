<section class="border-t border-border bg-surface-subtle">
    <div class="mx-auto flex w-full max-w-marketing flex-wrap items-center gap-8 px-4 py-section-sm md:px-8 lg:py-section">
        <div class="min-w-[300px] flex-1">
            <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('v3page.follow.title') }}</h2>
            <p class="mt-4 max-w-[54ch] text-copy-lg text-text-secondary text-pretty">{{ $page->t('v3page.follow.body') }}</p>
            <p class="mt-6 font-mono text-mono text-text-muted">{{ $page->t('v3page.follow.note') }}</p>
        </div>

        <div class="flex flex-wrap gap-2 max-md:w-full max-md:flex-col">
            {{-- The repository is the only thing to follow now that there is no
                 launch list, so it takes the primary button. --}}
            <a href="{{ $page->links['github'] }}" class="mn-btn mn-btn--primary gap-2 no-underline hover:no-underline max-md:w-full">
                @include('_partials.icon', ['name' => 'star'])
                <span>{{ $page->t('v3page.follow.cta') }}</span>
            </a>
        </div>
    </div>
</section>
