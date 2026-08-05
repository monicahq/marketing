<section>
    <div class="mx-auto grid w-full max-w-marketing grid-cols-[repeat(auto-fit,minmax(320px,1fr))] gap-16 px-4 py-section-sm md:px-8 lg:py-section">
        <div>
            <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('notALead.title') }}</h2>
            <p class="mt-5 max-w-[52ch] text-copy-lg text-text-secondary text-pretty">{{ $page->t('notALead.body') }}</p>
            <p class="mt-8 text-copy leading-[1.6] text-text-muted italic">{{ $page->t('notALead.aside') }}</p>
        </div>

        <div>
            <p class="text-copy font-medium text-text">{{ $page->t('notALead.listTitle') }}</p>
            @include('_partials.bullets', ['items' => $page->t('notALead.items')])
        </div>
    </div>
</section>
