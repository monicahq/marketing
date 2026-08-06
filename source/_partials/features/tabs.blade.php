{{--
    The three features tabs.

    They are links, not a JavaScript tab widget, because each tab is a page with
    its own URL: somebody can send /en/features/journal/ to a friend and a
    crawler can index all three. `aria-current="page"` is what says which one the
    reader is on, and the underline is the same idiom the site header uses, so
    the two rows of navigation read as one system.
--}}
@php
    $tabLink = 'inline-flex h-12 flex-none items-center border-b-2 border-transparent text-copy text-text-secondary no-underline transition-colors duration-100 ease-standard hover:border-text hover:text-text hover:no-underline aria-[current=page]:border-text aria-[current=page]:font-medium aria-[current=page]:text-text';
@endphp

<nav aria-label="{{ $page->t('features.tabsLabel') }}" class="border-b border-border">
    <div class="mx-auto flex w-full max-w-marketing gap-6 overflow-x-auto px-4 md:px-8">
        @foreach ($page->t('features.tabs') as $key => $label)
            <a
                href="{{ $page->route($key) }}"
                @if ($page->page === $key) aria-current="page" @endif
                class="{{ $tabLink }}"
            >{{ $label }}</a>
        @endforeach
    </div>
</nav>
