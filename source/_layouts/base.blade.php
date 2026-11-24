{{--
    The page shell every marketing page shares.

    Pages set two front-matter values, `locale` and `page`, and everything else
    follows from them: the language of the copy, the canonical URL, and the
    hreflang links to every other translation.
--}}
<!DOCTYPE html>
<html lang="{{ $page->languageTag() }}">
    <head>
        @include('_partials.head')
    </head>

    <body class="min-h-screen bg-canvas font-sans text-text">
        @include('_partials.site-header')
        @include('_partials.breadcrumb')

        <main>
            @yield('body')
        </main>

        @include('_partials.site-footer')

        @include('_partials.cookie-notice')
    </body>
</html>
