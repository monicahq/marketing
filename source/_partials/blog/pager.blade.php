{{--
    The end of a post: the previous and the next post, design 1a of "Blog post
    end" in the design project. Older on the left, newer on the right, and
    each card says which way it goes, so the direction never has to be
    guessed from the position alone.

    At either end of the archive the missing side is a quiet box rather than
    a gap, saying this is the latest (or the first) post and offering the
    index, so the pair keeps its shape and a reader is never left at a dead
    end.

    Dates are ISO in monospace, as in the post header and on the cards.

    @include('_partials.blog.pager', ['previous' => $older, 'next' => $newer])
--}}
@php
    $card = 'flex flex-col gap-1.5 rounded-lg border border-border p-4 no-underline shadow-panel transition-colors duration-150 ease-standard hover:bg-hover hover:no-underline';
    $label = 'flex items-center gap-1.5 text-xs font-medium text-text-muted';
    $title = 'text-body leading-[1.4] font-semibold text-text text-pretty';
    $date = 'font-mono text-mono text-text-muted';
    $empty = 'flex flex-col justify-center gap-1.5 rounded-lg border border-border bg-surface-subtle p-4';
    $right = 'sm:items-end sm:text-right';
@endphp

<nav aria-label="{{ $page->t('blog.morePosts') }}" class="mt-12 grid gap-3 sm:grid-cols-2">
    @if ($previous)
        <a href="{{ $page->postPath($previous->slug) }}" rel="prev" class="{{ $card }}">
            <span class="{{ $label }}">
                @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15, 'class' => 'rotate-180'])
                {{ $page->t('blog.previousPost') }}
            </span>
            <span class="{{ $title }}">{{ $previous->title }}</span>
            <time datetime="{{ $previous->isoDate() }}" class="{{ $date }}">{{ $previous->isoDate() }}</time>
        </a>
    @else
        <div class="{{ $empty }}">
            <span class="font-medium text-text-soft">{{ $page->t('blog.firstPost') }}</span>
            <a href="{{ $page->blogPath() }}" class="text-small text-text underline decoration-border-strong underline-offset-[3px] hover:text-text hover:decoration-text">{{ $page->t('blog.seeAllPosts') }}</a>
        </div>
    @endif

    @if ($next)
        <a href="{{ $page->postPath($next->slug) }}" rel="next" class="{{ $card }} {{ $right }}">
            <span class="{{ $label }}">
                {{ $page->t('blog.nextPost') }}
                @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15, 'class' => ''])
            </span>
            <span class="{{ $title }}">{{ $next->title }}</span>
            <time datetime="{{ $next->isoDate() }}" class="{{ $date }}">{{ $next->isoDate() }}</time>
        </a>
    @else
        <div class="{{ $empty }} {{ $right }}">
            <span class="font-medium text-text-soft">{{ $page->t('blog.latestPost') }}</span>
            <a href="{{ $page->blogPath() }}" class="text-small text-text underline decoration-border-strong underline-offset-[3px] hover:text-text hover:decoration-text">{{ $page->t('blog.seeAllPosts') }}</a>
        </div>
    @endif
</nav>
