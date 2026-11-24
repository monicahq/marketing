{{--
    The page shell for a page that stands apart from the website: the same
    <head> as every marketing page (so the same SEO, theme and script), but
    no site header, breadcrumb or site footer. The page draws its own header
    and footer inside `body`, and its own <main>.

    Used by the sign-in chooser, the step between the website and the two
    sign-in forms, where the site's navigation would only be a distraction.
--}}
<!DOCTYPE html>
<html lang="{{ $page->languageTag() }}">
    <head>
        @include('_partials.head')
    </head>

    <body class="min-h-screen bg-canvas font-sans text-text">
        @yield('body')

        @include('_partials.cookie-notice')
    </body>
</html>
