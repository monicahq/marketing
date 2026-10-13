{{--
    The page shell every marketing page shares.

    Pages set two front-matter values, `locale` and `page`, and everything else
    follows from them: the language of the copy, the canonical URL, and the
    hreflang links to the other three translations.
--}}
<!DOCTYPE html>
<html lang="{{ $page->languageTag() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="color-scheme" content="light dark">

        {{-- Dark mode follows the reader's system setting, and nothing else:
             there is no toggle. The design system keys its dark palette off a
             `.dark` class on <html>, so this sets that class from the media
             query and keeps it in step if the setting changes while the page
             is open.

             Inline and in the <head>, before the stylesheet, so the first
             frame is already the right colour. Turbo never replaces <html>,
             so the class survives every navigation after this one. --}}
        <script>
            (() => {
                const query = window.matchMedia('(prefers-color-scheme: dark)');
                const apply = () => document.documentElement.classList.toggle('dark', query.matches);
                apply();
                query.addEventListener('change', apply);
            })();
        </script>

        <link rel="icon" type="image/svg+xml" href="/favicon.svg">
        <link rel="icon" href="/favicon.ico">
        <link rel="sitemap" href="/sitemap.xml">

        {{-- How a feed reader finds the feed: you paste any page of the site
             into it and it looks here. On every page rather than only the blog,
             because the page somebody happens to be standing on when they
             decide to subscribe is rarely the index. It points at the current
             locale's feed, so a reader browsing in French subscribes in
             French. --}}
        <link
            rel="alternate"
            type="application/rss+xml"
            title="{{ $page->t('meta.blog.title') }}"
            href="{{ $page->absolute($page->feedPath()) }}"
        >

        @include('_partials.seo')

        @viteRefresh()
        <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">

        {{-- A module, so it is deferred and runs after parsing.

             On every page, not just the ones with an Alpine component: Turbo
             can only intercept a click on a page that is already running it, so
             a page without this script is a dead end that navigates the old way.
             Everything the script enhances is server-rendered in its default
             state first, so the page is complete before it arrives. --}}
        <script type="module" src="{{ vite('source/_assets/js/app.js') }}"></script>

        {{-- Controls that only do something once the script is running carry
             `js-only`, so they are not offered to a reader who will not get it.
             Declared here rather than in the stylesheet, because a <noscript>
             block is the only way to ask about JavaScript in CSS, and alongside
             the script so the two cannot drift apart. --}}
        <noscript>
            <style>.js-only { display: none !important }</style>
        </noscript>
    </head>

    <body class="min-h-screen bg-canvas font-sans text-text">
        @include('_partials.announcement-bar')
        @include('_partials.site-header')

        <main>
            @yield('body')
        </main>

        @include('_partials.site-footer')
    </body>
</html>
