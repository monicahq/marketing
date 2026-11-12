{{--
    The dark mode button, in the header and in the footer. Takes `class` for
    the frame, because the footer sits on the cream ground and the header on
    the page.

    It holds no state of its own. Both icons are in the markup and `.dark` on
    <html> decides which one shows, so the button can never disagree with the
    page, before or after a Turbo visit. Each icon carries its own label, and a
    hidden one is hidden from a screen reader too, so the button always
    announces what pressing it will do.

    The click is handled in `_partials/color-scheme`, on the document, so it
    survives Turbo swapping <body>. `js-only`, because without JavaScript it
    would do nothing.
--}}
<button
    type="button"
    data-theme-toggle
    class="js-only mn-focusable inline-flex size-9 flex-none cursor-pointer items-center justify-center rounded-md transition-colors duration-150 ease-standard {{ $class ?? '' }}"
>
    <span class="inline-flex dark:hidden">
        @include('_partials.icon', ['name' => 'moon', 'size' => 16, 'class' => ''])
        <span class="sr-only">{{ $page->t('nav.toDark') }}</span>
    </span>
    <span class="hidden dark:inline-flex">
        @include('_partials.icon', ['name' => 'sun', 'size' => 16, 'class' => ''])
        <span class="sr-only">{{ $page->t('nav.toLight') }}</span>
    </span>
</button>
