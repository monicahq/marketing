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
