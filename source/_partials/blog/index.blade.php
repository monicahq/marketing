{{--
    The blog index, shared by every locale template.

    Jigsaw's paginator hands the template one page's worth of items in
    `$pagination->items`, and builds /blog/, /blog/page/2/ and so on from the
    `pagination` block in each locale template's front matter. The prev/next
    links come from the paginator too, rather than being assembled here, so the
    markup and the files on disk cannot disagree.
--}}
@php
    // This locale's archive. The collections are one per language, so the name
    // is built from the locale; the sidebar's partials are included from here
    // and inherit it.
    $posts = ${'posts_' . $page->lang()};

    $first = $pagination->currentPage === 1;
    $shown = $pagination->items->count();
    $offset = ($pagination->currentPage - 1) * $page->postsPerPage;
@endphp

<div class="mx-auto w-full max-w-marketing px-4 pt-12 pb-24 md:px-8">
    {{-- Stacked below sm, a row above it. Explicit breakpoints rather than
         flex-wrap: wrapping is decided from the lede's own width, and that
         sentence is long enough that the button would either sit on its own row
         at every width or squeeze the lede into a column beside it. --}}
    <div class="flex flex-col gap-4 border-b border-border pb-8 sm:flex-row sm:items-start sm:justify-between">
        <div class="min-w-0">
            <h1 class="text-display-md font-semibold">{{ $page->t('blog.title') }}</h1>
            <p class="mt-4 max-w-[56ch] text-lede-md leading-[1.6] text-text-secondary">{{ $page->t('blog.lede') }}</p>
        </div>

        {{-- The feed has always been in the head of every page, where only a
             reader extension finds it. This is the same URL, for everyone else.

             It leaves the site's own JavaScript alone on both counts, and
             neither attribute is decoration. Turbo swaps <body> on a same-origin
             click, and the target is an XML document rather than a page, so this
             is exactly the kind of link Turbo has no business handling.
             instant.page would prefetch it on hover, and the feed carries twenty
             full post bodies, so that is 70KB or so fetched for a pointer that
             merely swept past. --}}
        <a
            href="{{ $page->feedPath() }}"
            type="application/rss+xml"
            data-turbo="false"
            data-no-instant
            class="mn-btn mn-btn--secondary mn-btn--sm no-underline hover:no-underline"
        >
            @include('_partials.icon', ['name' => 'rss', 'size' => 14])
            {{ $page->t('blog.rssFeed') }}
        </a>
    </div>

    <div class="mt-8 grid items-start gap-10 lg:grid-cols-[minmax(0,1fr)_320px] lg:gap-16">
        <main class="min-w-0">
            {{-- Page 2 and after say where the reader is, because the heading
                 above is identical on every page of the list. --}}
            @unless ($first)
                <p class="border-b border-border-subtle pb-6 font-mono text-mono text-text-muted">
                    {{ $page->t('blog.pageOf', [
                        ':page' => $pagination->currentPage,
                        ':total' => $pagination->totalPages,
                    ]) }}
                </p>
            @endunless

            <div class="flex flex-col">
                @foreach ($pagination->items as $item)
                    @include('_partials.blog.post-card', ['post' => $item])
                @endforeach
            </div>

            <div class="flex flex-wrap items-center justify-between gap-4 pt-6">
                <span class="font-mono text-mono text-text-muted">
                    {{ $page->t('blog.showing', [
                        ':from' => $offset + 1,
                        ':to' => $offset + $shown,
                        ':total' => $posts->count(),
                    ]) }}
                </span>

                {{-- Newer sits left of older, matching the direction the list
                     itself runs. Neither is rendered when there is nowhere to
                     go, so a reader is never offered a link to this page. --}}
                <div class="flex items-center gap-2">
                    @if ($pagination->previous)
                        <a
                            href="{{ $pagination->previous }}"
                            rel="prev"
                            class="mn-btn mn-btn--secondary mn-btn--sm no-underline hover:no-underline"
                        >{{ $page->t('blog.newerPosts') }}</a>
                    @endif

                    @if ($pagination->next)
                        <a
                            href="{{ $pagination->next }}"
                            rel="next"
                            class="mn-btn mn-btn--secondary mn-btn--sm no-underline hover:no-underline"
                        >{{ $page->t('blog.olderPosts') }}</a>
                    @endif
                </div>
            </div>
        </main>

        <aside class="flex flex-col gap-6 lg:sticky lg:top-6">
            @include('_partials.blog.try-monica', ['body' => $page->t('blog.tryMonica.body')])
            @include('_partials.blog.latest-posts')
            @include('_partials.blog.open-source')
        </aside>
    </div>
</div>
