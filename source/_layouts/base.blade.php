{{--
    The page shell every marketing page shares.

    Pages set two front-matter values, `locale` and `page`, and everything else
    follows from them: the language of the copy, the canonical URL, and the
    hreflang links to the other three translations.
--}}
<!DOCTYPE html>
<html lang="{{ $page->locale }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/svg+xml" href="/favicon.svg">
        <link rel="icon" href="/favicon.ico">
        <link rel="sitemap" href="/sitemap.xml">

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
