{{--
    One post in the index list, in full.

    The index carries whole posts rather than a title and a summary: the
    archive is short, the posts are short, and several of them are a screenshot
    with a sentence around it, which a one-line summary cannot stand in for.
    The title is still the link to the post's own page.

    The body is `bodyHtml()`, which is the rendered Markdown with every image
    given its dimensions and `loading="lazy"`, and nothing else. It carries no
    heading ids: the post layout injects those for its table of contents, and
    doing it here as well would put ten posts' worth of ids on one page, where
    two posts that both have a "Photo upload" heading would collide. Nothing on
    the index links to a fragment, so there is nothing to anchor.

    This is the page the lazy loading is really for. Ten whole posts is up to
    fourteen screenshots, and a reader who came to read the newest one has no
    use for the fourteenth before they have scrolled to it.

    @include('_partials.blog.post-card', ['post' => $item])
--}}
{{-- The padding has to beat every gap inside a post, or the break between two
     of them reads as just another paragraph. The largest space a body can
     contain is the 40px above an h2, so 48px each side on a phone and 64px on a
     desktop puts 96px to 128px of clear air between one post and the next.

     It is symmetric because the body's last element has had its bottom margin
     trimmed in prose.css. Without that the rule sat 52px under one post and
     32px over the next, and looked like it belonged to the wrong one. --}}
<article class="flex flex-col gap-3 border-b border-border-subtle py-12 last:border-b-0 lg:py-16">
    @include('_partials.blog.post-meta', ['post' => $post])

    <a
        href="{{ $page->postPath($post->slug) }}"
        class="block text-heading-sm font-semibold text-text no-underline hover:text-text hover:underline hover:underline-offset-[3px]"
    >{{ $post->title }}</a>

    @include('_partials.blog.byline', ['post' => $post, 'size' => 'sm'])

    {{-- 12px of flex gap plus this, so the body starts 36px below the byline:
         further than the 12px holding the date, title and byline together, so
         they group as one header rather than four loose lines. --}}
    <div class="mn-prose mt-6">{!! $post->bodyHtml() !!}</div>
</article>
