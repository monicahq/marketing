{{--
    The handbook's table of contents, one collapsible group per section.

    Each group is a native <details>, so it opens and closes with no script, as
    the FAQ and the menus do. The group holding the article being read starts
    open; on the index, the first one does.

    The article being read is marked `aria-current="page"` and drawn as the
    selected row of a sidebar, with the design system's nav shadow.
--}}
@php
    $articles = ${'handbook_' . $page->lang()};
    $current = $page->page === 'handbookArticle' ? $page->slug : null;
    $currentSection = $current ? $page->section : null;
@endphp

<nav aria-label="{{ $page->t('handbook.contents') }}" class="flex flex-col gap-1">
    <a
        href="{{ $page->route('handbook') }}"
        @if ($page->page === 'handbook') aria-current="page" @endif
        class="px-2 pb-3 text-caption font-medium tracking-[0.08em] text-text-muted uppercase no-underline hover:text-text hover:no-underline"
    >{{ $page->t('handbook.contents') }}</a>

    @foreach ($page->handbookSections as $index => $section)
        @php
            $open = $currentSection ? $currentSection === $section : $index === 0;
        @endphp

        <details @if ($open) open @endif class="group/section pb-3">
            <summary class="flex h-8 cursor-pointer list-none items-center justify-between gap-2 rounded-md px-2 text-base font-semibold text-text hover:bg-hover [&::-webkit-details-marker]:hidden">
                <span>{{ $page->t("handbook.sections.{$section}") }}</span>
                @include('_partials.icon', ['name' => 'chevron-right', 'size' => 16, 'class' => 'text-text-muted transition-transform duration-150 ease-standard group-open/section:rotate-90'])
            </summary>

            <div class="mt-0.5 flex flex-col gap-0.5 pl-3">
                @foreach ($articles->where('section', $section)->sortBy('order') as $article)
                    <a
                        href="{{ $page->handbookPath($article->slug) }}"
                        @if ($article->slug === $current) aria-current="page" @endif
                        class="block rounded-md px-2 py-1.75 text-base leading-snug font-medium text-pretty no-underline hover:no-underline {{ $article->slug === $current ? 'bg-canvas text-text shadow-nav-active hover:text-text' : 'text-text-secondary hover:bg-hover hover:text-text' }}"
                    >{{ $article->title }}</a>
                @endforeach
            </div>
        </details>
    @endforeach
</nav>
