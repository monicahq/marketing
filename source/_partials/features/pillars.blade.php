{{--
    The three claims that close every tab: one place, web based, modern.

    The same row appears on all three pages, as it does on the old site, which
    is why the copy is one shared block rather than three copies of it.
--}}
<section class="border-t border-border">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3 md:gap-10">
            @foreach ($page->t('features.pillars') as $pillar)
                <div>
                    <h2 class="text-title font-semibold">{{ $pillar['title'] }}</h2>
                    <p class="mt-2 text-copy leading-[1.6] text-text-secondary text-pretty">{{ $pillar['body'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
