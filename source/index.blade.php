---
locale: en
page: home
permalink: index.html
---
{{--
    With every locale prefixed, the bare root has nothing of its own to serve,
    so it sends readers on. This is the fallback half of that.

    In production the root is answered by functions/index.js, a Cloudflare Pages
    Function that reads Accept-Language and redirects to the reader's own
    language. Nothing reaches this file there, because Pages redirects
    /index.html to / and the Function answers that. It is what serves the root
    anywhere Functions do not run, which means `npm run serve` and any other
    plain file server. It can only name one language, so it names the default.

    It carries noindex, because a redirect stub is not a page anyone should find
    in search results. That is also why it is absent from the sitemap: listing a
    noindex URL contradicts itself.
--}}
@php $target = $page->route('home', $page->defaultLocale); @endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="0;url={{ $target }}">
        <meta name="robots" content="noindex">
        <link rel="canonical" href="{{ $page->absolute($page->localePath('home', $page->defaultLocale)) }}">
        <title>Redirecting to {{ $target }}</title>
    </head>
    <body>
        <a href="{{ $target }}">Redirecting from <code>/</code> to <code>{{ $target }}</code></a>
    </body>
</html>
