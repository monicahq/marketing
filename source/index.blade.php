---
locale: en
page: home
permalink: index.html
---
{{--
    With every locale prefixed, the bare root has nothing of its own to serve,
    so it sends readers on. This is the backstop half of that.

    On the live domain, two Cloudflare redirect rules answer / before any file is
    reached: they read Accept-Language and send the reader to their own language.
    See cloudflare/redirect-rules.md. They are zone configuration, so they do not
    run on a *.pages.dev preview, and `npm run serve` knows nothing about them
    either. This file is what answers in both of those cases, and if a rule is
    ever mistyped it is what keeps / on a real page. It can only name one
    language, so it names the default.

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
