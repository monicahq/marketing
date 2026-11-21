{{--
    Language menu for the footer. Built on <details>, so it opens, closes and
    takes keyboard focus with no JavaScript at all, and each entry is a real
    link to the same page in another locale, which is what a crawler and a
    middle-click both expect.

    These are the one set of links on the site that must not be Turbo visits.
    Turbo swaps <body> and leaves <html lang> as it found it, so switching to
    French would load French copy into a document still declaring itself
    English: wrong for screen readers, hyphenation, and anything reading the
    page's language. `data-turbo="false"` makes each one a full page load.
    instant.page still prefetches them, so the full load is a warm one.
--}}
<details data-menu class="relative">
    <summary
        class="flex cursor-pointer list-none items-center gap-3 rounded-md border border-ground-cream-rule px-3 py-2 text-small text-ground-cream-ink [&::-webkit-details-marker]:hidden"
        aria-label="{{ $page->t('footer.languageLabel') }}"
    >
        @include('_partials.flag', ['flagLocale' => $page->locale])
        <span>{{ $page->localeNames[$page->locale] }}</span>
        @include('_partials.icon', ['name' => 'chevron-down', 'size' => 12, 'class' => 'opacity-60'])
    </summary>

    <div
        class="absolute bottom-[calc(100%+6px)] left-0 z-20 flex min-w-45 flex-col rounded-lg border border-border bg-canvas p-1 shadow-pop"
    >
        @foreach ($page->alternates() as $alternate)
            <a
                href="{{ $alternate['href'] }}"
                hreflang="{{ $page->languageTag($alternate['locale']) }}"
                lang="{{ $page->languageTag($alternate['locale']) }}"
                data-turbo="false"
                @if ($alternate['locale'] === $page->locale) aria-current="true" @endif
                class="flex items-center gap-3 rounded-xs px-3 py-2 text-small text-text no-underline hover:bg-hover hover:text-text hover:no-underline {{ $alternate['locale'] === $page->locale ? 'bg-hover font-medium' : '' }}"
            >
                @include('_partials.flag', ['flagLocale' => $alternate['locale']])
                <span>{{ $page->localeNames[$alternate['locale']] }}</span>
            </a>
        @endforeach
    </div>
</details>
