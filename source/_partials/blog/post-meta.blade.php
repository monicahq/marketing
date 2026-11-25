{{--
    The line above a post title: date, then how long it takes to read, after
    a "New feature" badge on a feature post (`category: feature`).

    @include('_partials.blog.post-meta', ['post' => $item])
--}}
@php
    $date = $post->isoDate();
@endphp

<div class="flex flex-wrap items-center gap-3 font-mono text-mono text-text-muted">
    @if ($post->isFeature())
        <span class="mn-badge mn-badge-neutral font-sans">{{ $page->t('blog.feature.badge') }}</span>
    @endif
    <time datetime="{{ $date }}">{{ $date }}</time>
    <span aria-hidden="true">·</span>
    <span>{{ $page->t('blog.readingTime', [':count' => $post->readingMinutes()]) }}</span>
</div>
