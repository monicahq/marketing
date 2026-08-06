---
locale: en
page: home
# Without this, pretty URLs would write 404/index.html, and static hosts
# look for 404.html.
permalink: 404.html
---
{{--
    Static hosts serve /404.html for anything they cannot find, and it is served
    for every language, so this page cannot know which one the reader wants.
    Rather than guess, it names all four in their own words and lets them pick.

    Deliberately not extending _layouts.base: a 404 has no canonical, no hreflang
    cluster and no place in the sitemap.
--}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/svg+xml" href="/favicon.svg">
        <link rel="icon" href="/favicon.ico">
        <title>Page not found &mdash; Monica</title>
        <meta name="robots" content="noindex, follow">

        @viteRefresh()
        <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
    </head>

    <body class="min-h-screen bg-canvas font-sans text-text">
        <div class="mx-auto flex min-h-screen w-full max-w-marketing flex-col justify-center px-4 py-section-sm md:px-8">
            <a href="{{ $page->route('home', 'en') }}" class="flex items-center gap-3 text-text no-underline hover:no-underline">
                <img
                    src="/assets/images/monica-panda-mark.svg"
                    alt=""
                    width="32"
                    height="29"
                    class="h-auto w-6 flex-none"
                >
                <span class="text-title font-semibold tracking-[-0.015em]">Monica</span>
            </a>

            <p class="mt-16 font-mono text-mono text-text-muted">404</p>
            <h1 class="mt-4 text-display-sm font-semibold md:text-display-lg">{{ $page->t('notFound.title') }}</h1>
            <p class="mt-5 max-w-[52ch] text-copy-lg text-text-secondary text-pretty">{{ $page->t('notFound.body') }}</p>

            <div class="mt-10 flex flex-wrap gap-2">
                @foreach ($page->locales as $locale)
                    <a
                        href="{{ $page->route('home', $locale) }}"
                        hreflang="{{ $locale }}"
                        lang="{{ $locale }}"
                        class="mn-btn mn-btn--secondary gap-2 no-underline hover:no-underline"
                    >
                        @include('_partials.flag', ['flagLocale' => $locale])
                        <span>{{ $page->localeNames[$locale] }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </body>
</html>
