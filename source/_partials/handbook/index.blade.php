{{--
    The handbook's front page: the introduction, the reading panda, and every
    article by section, each with its length.

    The panda is the illustration family's, by day and by night: two <img>
    switched by `.dark` on <html>, as the footer meadow is, so it follows the
    theme button rather than the system setting. It is in the first screenful,
    so the day one is not lazy; the night one is, and a browser does not fetch
    a lazy image that is not displayed.
--}}
@php
    $articles = ${'handbook_' . $page->lang()};

    $day = '/assets/images/handbook/panda-reading-day.webp';
    $night = '/assets/images/handbook/panda-reading-night.webp';
    $daySize = $page->imageSize($day);
    $nightSize = $page->imageSize($night);
@endphp

<div class="min-w-0 flex-1 px-4 pt-16 pb-24 md:px-12">
    <div class="mx-auto flex max-w-reading flex-col gap-10">
        <div class="flex flex-wrap-reverse items-center gap-6">
            <div class="flex flex-[1_1_320px] flex-col gap-4">
                <h1 class="text-heading font-semibold text-text">{{ $page->t('handbook.title') }}</h1>
                <p class="text-lede-sm leading-relaxed text-pretty text-text-secondary">{{ $page->t('handbook.intro') }}</p>
            </div>

            <img
                src="{{ $day }}"
                srcset="{{ $day }} 1x, {{ str_replace('.webp', '@2x.webp', $day) }} 2x"
                alt="{{ $page->t('handbook.art') }}"
                width="{{ $daySize['width'] }}"
                height="{{ $daySize['height'] }}"
                decoding="async"
                class="block h-auto w-60 max-w-full flex-none dark:hidden"
            >
            <img
                src="{{ $night }}"
                srcset="{{ $night }} 1x, {{ str_replace('.webp', '@2x.webp', $night) }} 2x"
                alt="{{ $page->t('handbook.art') }}"
                width="{{ $nightSize['width'] }}"
                height="{{ $nightSize['height'] }}"
                loading="lazy"
                decoding="async"
                class="hidden h-auto w-60 max-w-full flex-none dark:block"
            >
        </div>

        @foreach ($page->handbookSections as $section)
            @php
                $items = $articles->where('section', $section)->sortBy('order');
            @endphp

            <section class="flex flex-col gap-1">
                <div class="flex items-baseline gap-3 border-b border-border pb-2">
                    <h2 class="text-lede-sm font-semibold tracking-[-0.02em] text-text">{{ $page->t("handbook.sections.{$section}") }}</h2>
                    <span class="ml-auto text-small text-text-muted tabular-nums">{{ $page->t('handbook.articles', [':count' => $items->count()]) }}</span>
                </div>

                @foreach ($items as $article)
                    {{-- The title, a dotted leader, and the length, as a printed
                         table of contents draws them. The leader is decoration. --}}
                    <a
                        href="{{ $page->handbookPath($article->slug) }}"
                        class="group flex items-baseline gap-3 py-2.5 text-text no-underline hover:text-text hover:no-underline"
                    >
                        <span class="text-copy leading-snug font-medium underline decoration-border-strong underline-offset-4 group-hover:decoration-text">{{ $article->title }}</span>
                        <span aria-hidden="true" class="min-w-6 flex-[1_1_24px] -translate-y-1 border-b border-dotted border-border-strong"></span>
                        <span class="text-small whitespace-nowrap text-text-muted tabular-nums">{{ $page->t('handbook.words', [':count' => $article->wordCount()]) }}</span>
                    </a>
                @endforeach
            </section>
        @endforeach
    </div>
</div>
