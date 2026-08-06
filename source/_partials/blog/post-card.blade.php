{{--
    One post in the index list, in full.

    The index carries whole posts rather than a title and a summary: the
    archive is short, the posts are short, and several of them are a screenshot
    with a sentence around it, which a one-line summary cannot stand in for.
    The title is still the link to the post's own page.

    The body is `getContent()` untouched, so it carries no heading ids. The post
    layout injects those for its table of contents, and doing it here as well
    would put ten posts' worth of ids on one page, where two posts that both
    have a "Photo upload" heading would collide. Nothing on the index links to a
    fragment, so there is nothing to anchor.

    @include('_partials.blog.post-card', ['post' => $item])
--}}
<article class="flex flex-col gap-3 border-b border-border-subtle py-8 last:border-b-0">
    @include('_partials.blog.post-meta', ['post' => $post])

    <a
        href="{{ $page->postPath($post->slug) }}"
        class="block text-heading-sm font-semibold text-text no-underline hover:text-text hover:underline hover:underline-offset-[3px]"
    >{{ $post->title }}</a>

    @include('_partials.blog.byline', ['post' => $post, 'size' => 'sm'])

    <div class="mn-prose mt-3">{!! $post->getContent() !!}</div>
</article>
