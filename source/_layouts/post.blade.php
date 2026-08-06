{{--
    A single blog post.

    The post is one Markdown file in source/_posts_<locale>, and its locale
    comes from its collection, so `$page->locale` is set before this template
    runs and the base layout, the `t()` lookups, the canonical and the hreflang
    cluster all read it without knowing a collection is involved.

    What this template does have to work out is which archive the post belongs
    to, for "keep reading" below. The collections are one per language, so the
    name is built from the locale: a French post is a neighbour of French posts.
--}}
@php
    $posts = ${'posts_' . $page->lang()};

    $posts = $posts->sortByDesc('date')->values();
    $position = $posts->search(fn ($item) => $item->slug === $page->slug);

    // The two neighbours in time, older first, so "keep reading" is the rest of
    // the archive rather than a second copy of the index's top two.
    $related = collect([$posts->get($position + 1), $posts->get($position - 1)])
        ->filter()
        ->take(2);

    // Headings carry no ids of their own: the Markdown parser does not add them
    // and the design needs them to anchor "on this page". Both jobs are done in
    // one pass here, so a heading and its link cannot disagree about the id.
    //
    // h2 and h3 sit at the same level in the list on purpose. Most of these
    // posts open at h3 and never use h2 at all, so nesting by tag name would
    // leave the majority of them with an empty contents box.
    $headings = [];
    $body = preg_replace_callback(
        '/<h([23])>(.*?)<\/h\1>/s',
        function ($match) use (&$headings) {
            $text = trim(html_entity_decode(strip_tags($match[2]), ENT_QUOTES, 'UTF-8'));
            $id = Illuminate\Support\Str::slug($text) ?: 'section-' . (count($headings) + 1);

            $headings[] = ['id' => $id, 'text' => $text];

            return "<h{$match[1]} id=\"{$id}\">{$match[2]}</h{$match[1]}>";
        },
        // Not getContent(): bodyHtml() is the same markup with every image
        // given its dimensions and lazy loading. See config.php.
        $page->bodyHtml(),
    );

    // One heading is a title, not a table of contents.
    $contents = count($headings) > 1 ? $headings : [];
@endphp

@extends('_layouts.base')

@section('body')
    <div class="mx-auto w-full max-w-marketing px-4 pt-8 pb-24 md:px-8">
        <a
            href="{{ $page->blogPath() }}"
            class="mb-8 inline-flex items-center gap-2 text-small text-text-muted no-underline transition-colors duration-100 ease-standard hover:text-text hover:no-underline"
        >
            @include('_partials.icon', ['name' => 'chevronLeft', 'size' => 14])
            <span>{{ $page->t('blog.allPosts') }}</span>
        </a>

        <div class="grid items-start gap-10 lg:grid-cols-[minmax(0,1fr)_320px] lg:gap-16">
            <main class="min-w-0">
                <article>
                    @include('_partials.blog.post-meta', ['post' => $page])

                    <h1 class="mt-4 max-w-[20ch] text-display-md font-semibold text-pretty md:text-display-lg">
                        {{ $page->title }}
                    </h1>

                    <p class="mt-5 max-w-[56ch] text-lede text-text-secondary text-pretty">
                        {{ $page->description }}
                    </p>

                    <div class="mt-6 flex flex-wrap items-center gap-3 border-y border-border-subtle py-4">
                        @include('_partials.blog.byline', ['post' => $page, 'size' => 'lg'])
                        @include('_partials.blog.copy-link')
                    </div>

                    <div class="mn-prose mt-8">{!! $body !!}</div>
                </article>

                @if ($related->isNotEmpty())
                    <section class="mt-12">
                        <h2 class="mb-5 text-title font-semibold">{{ $page->t('blog.keepReading') }}</h2>

                        <div class="grid gap-6 sm:grid-cols-2">
                            @foreach ($related as $item)
                                <div class="flex flex-col gap-2 border-t border-border pt-4">
                                    <span class="font-mono text-mono text-text-muted">{{ $item->isoDate() }}</span>
                                    <a
                                        href="{{ $page->postPath($item->slug) }}"
                                        class="text-title font-semibold tracking-[-0.02em] text-text no-underline hover:text-text hover:underline hover:underline-offset-2"
                                    >{{ $item->title }}</a>
                                    <p class="max-w-[64ch] text-body leading-[1.65] text-text-secondary text-pretty">
                                        {{ $item->description }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </section>
                @endif
            </main>

            <aside class="flex flex-col gap-6 lg:sticky lg:top-6">
                @if ($contents)
                    <nav aria-label="{{ $page->t('blog.onThisPage') }}" class="flex flex-col gap-3">
                        <h2 class="text-micro font-medium tracking-[0.06em] text-text-muted uppercase">
                            {{ $page->t('blog.onThisPage') }}
                        </h2>
                        <div class="flex flex-col gap-2 border-l border-border pl-3">
                            @foreach ($contents as $heading)
                                <a
                                    href="#{{ $heading['id'] }}"
                                    class="text-small leading-[1.45] text-text-secondary no-underline hover:text-text hover:underline hover:underline-offset-2"
                                >{{ $heading['text'] }}</a>
                            @endforeach
                        </div>
                    </nav>
                @endif

                @include('_partials.blog.try-monica', ['body' => $page->t('blog.tryMonica.bodyPost')])
            </aside>
        </div>
    </div>
@endsection
