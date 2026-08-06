{{--
    The line above a post title: date, then how long it takes to read.

    @include('_partials.blog.post-meta', ['post' => $item])
--}}
@php
    $date = $post->isoDate();
@endphp

<div class="flex flex-wrap items-center gap-3 font-mono text-mono text-text-muted">
    <time datetime="{{ $date }}">{{ $date }}</time>
    <span aria-hidden="true">·</span>
    <span>{{ $page->t('blog.readingTime', [':count' => $post->readingMinutes()]) }}</span>
</div>
