{{--
    One post in the index list.

    @include('_partials.blog.post-card', ['post' => $item])
--}}
<article class="flex flex-col gap-3 border-b border-border-subtle py-6">
    @include('_partials.blog.post-meta', ['post' => $post])

    <a
        href="{{ $page->postPath($post->slug) }}"
        class="block text-heading-sm font-semibold text-text no-underline hover:text-text hover:underline hover:underline-offset-[3px]"
    >{{ $post->title }}</a>

    <p class="max-w-[64ch] text-copy text-text-secondary text-pretty">{{ $post->description }}</p>

    <div class="mt-1">
        @include('_partials.blog.byline', ['post' => $post, 'size' => 'sm'])
    </div>
</article>
