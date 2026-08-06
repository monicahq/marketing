{{--
    The blog's RSS feed, shared by every locale template.

    RSS 2.0 rather than Atom, because it is what "RSS feed" means to almost
    everyone and every reader accepts it. Two namespaces earn their place:
    `content` carries the full post body, which `description` is not allowed to
    do, and `dc` carries an author name, which RSS's own `author` element cannot
    without an email address attached.

    Full bodies rather than summaries. These posts are short, the images are
    the point of half of them, and a feed that makes you click through to read
    two paragraphs is a feed nobody keeps subscribed to.

    Included from source/<locale>/blog/feed.blade.xml, which is front matter
    and one line, so they cannot drift apart.
--}}
@php
    $items = $posts->sortByDesc('date')->take($page->collections->posts->perFeed);

    // The feed's own address, which `atom:link rel="self"` exists to state.
    // Without it a reader that has been handed the file by some other route
    // has no way to know where to look for the next one.
    $self = $page->absolute($page->feedPath());

    // The newest post's date, not the build's. A feed that changes its
    // timestamp every time the site is rebuilt teaches readers to ignore it.
    $updated = $items->first()?->rfcDate();
@endphp
{{-- Echoed, because a literal <?xml would be parsed as a PHP open tag. --}}
{!! '<'.'?xml version="1.0" encoding="UTF-8"?'.'>' !!}
<rss version="2.0"
     xmlns:atom="http://www.w3.org/2005/Atom"
     xmlns:content="http://purl.org/rss/1.0/modules/content/"
     xmlns:dc="http://purl.org/dc/elements/1.1/">
    <channel>
        <title>{{ $page->t('meta.blog.title') }}</title>
        <link>{{ $page->absolute($page->blogPath()) }}</link>
        <description>{{ $page->t('meta.blog.description') }}</description>
        <language>{{ $page->locale }}</language>
        <atom:link href="{{ $self }}" rel="self" type="application/rss+xml"/>
@if ($updated)
        <lastBuildDate>{{ $updated }}</lastBuildDate>
@endif
@foreach ($items as $post)
        <item>
            <title>{{ $post->title }}</title>
            <link>{{ $page->absolute($page->postPath($post->slug)) }}</link>
            {{-- The URL is the identity, and it never changes once published,
                 which is exactly what a guid has to promise. --}}
            <guid isPermaLink="true">{{ $page->absolute($page->postPath($post->slug)) }}</guid>
            <pubDate>{{ $post->rfcDate() }}</pubDate>
            <dc:creator>{{ $post->author }}</dc:creator>
            <description>{{ $post->description }}</description>
            <content:encoded><![CDATA[{!! $post->feedContent() !!}]]></content:encoded>
        </item>
@endforeach
    </channel>
</rss>
