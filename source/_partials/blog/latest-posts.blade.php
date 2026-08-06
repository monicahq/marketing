{{--
    The sidebar's short list of recent posts.

    The design calls this block "most read". Nothing on a static site counts
    reads, so it lists the four newest instead and says so in the heading,
    rather than dressing an arbitrary order up as a ranking.

    Whatever page of the index the reader is on, the list is the same four, so
    it stays a fixed entry point into the archive rather than a second, smaller
    copy of the list beside it.
--}}
@php
    $recent = $posts->sortByDesc('date')->take(4);
@endphp

<div class="flex flex-col gap-4">
    <h2 class="text-micro font-medium tracking-[0.06em] text-text-muted uppercase">
        {{ $page->t('blog.latest') }}
    </h2>

    <div class="flex flex-col gap-3">
        @foreach ($recent as $item)
            <div class="flex flex-col gap-1 border-b border-border-subtle pb-3">
                <a
                    href="{{ $page->postPath($item->slug) }}"
                    class="block text-body leading-[1.45] text-text no-underline hover:text-text hover:underline hover:underline-offset-2"
                >{{ $item->title }}</a>
                <span class="font-mono text-mono text-text-muted">{{ $item->isoDate() }}</span>
            </div>
        @endforeach
    </div>
</div>
