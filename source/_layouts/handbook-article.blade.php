{{--
    One handbook article: the Markdown file in source/_handbook_<locale>/, in
    the handbook's frame, with its sidebar on the right.

    Its locale comes from its collection, as a post's does, so `t()`, the
    canonical and the hreflang cluster read it without knowing a collection is
    involved.
--}}
@php
    $words = $page->wordCount();
    $minutes = $page->readingMinutes();

    // The book and the fact are picked from the slug rather than at random:
    // the page is built once and served to everyone, so a random pick would
    // only change on deploy. This way an article always says the same thing.
    $seed = crc32($page->slug);
    $books = $page->t('handbook.books');
    $book = $books[$seed % count($books)];
    $facts = $page->t('handbook.facts');
    $fact = $facts[$seed % count($facts)];
    $percent = number_format($words * 100 / $book['words'], 2) . '%';

    // Jigsaw writes the article as Markdown next to its page (see
    // `output_markdown` in config.php). The assistants are pointed at that
    // file, which reads better to them than the page around it.
    $markdownPath = rtrim($page->handbookPath($page->slug), '/') . '.md';
    $prompt = rawurlencode($page->t('handbook.actions.prompt', [':url' => $page->absolute($markdownPath)]));

    $action = 'flex h-8 items-center gap-2 rounded-md px-2.5 text-small font-medium text-text-secondary no-underline transition-colors duration-150 ease-standard hover:bg-hover hover:text-text hover:no-underline';
    $separator = '<span aria-hidden="true" class="mx-1.5 h-4 w-px bg-border"></span>';

    $copy = [
        'markdown' => $page->markdown(),
        'copy' => $page->t('handbook.actions.copy'),
        'copied' => $page->t('handbook.actions.copied'),
    ];

    $avatar = '/assets/images/authors/regis.webp';
@endphp

@extends('_layouts.handbook')

@section('handbook')
    <article class="min-w-0 flex-1 px-4 pt-10 pb-24 md:px-12">
        <div class="mx-auto flex max-w-170 flex-col gap-8">
            <div role="group" aria-label="{{ $page->t('handbook.actions.label') }}" class="flex flex-wrap items-center gap-y-1 border-b border-border pb-3">
                {{-- The one control here that needs a script: there is no
                     markup that writes to the clipboard. `js-only` keeps it
                     from a reader without JavaScript, who still has "View as
                     Markdown" right beside it. Alpine, as the blog's copy-link
                     button is, with its copy from lang/ through json_encode. --}}
                <div
                    class="js-only flex items-center"
                    x-data="{ copied: false, copy: {{ json_encode($copy, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) }} }"
                >
                    <button
                        type="button"
                        class="{{ $action }} cursor-pointer"
                        x-on:click="navigator.clipboard.writeText(copy.markdown).then(() => { copied = true; setTimeout(() => copied = false, 2500) })"
                    >
                        @include('_partials.icon', ['name' => 'file', 'size' => 16])
                        <span aria-live="polite" x-text="copied ? copy.copied : copy.copy">{{ $copy['copy'] }}</span>
                    </button>
                    {!! $separator !!}
                </div>

                {{-- Not a page, so not a Turbo visit. --}}
                <a href="{{ $markdownPath }}" data-turbo="false" class="{{ $action }}">
                    @include('_partials.icon', ['name' => 'note', 'size' => 16])
                    <span>{{ $page->t('handbook.actions.markdown') }}</span>
                </a>
                {!! $separator !!}
                <a href="https://claude.ai/new?q={{ $prompt }}" target="_blank" rel="noopener" class="{{ $action }}">
                    @include('_partials.icon', ['name' => 'link', 'size' => 16])
                    <span>{{ $page->t('handbook.actions.claude') }}</span>
                </a>
                {!! $separator !!}
                <a href="https://chatgpt.com/?q={{ $prompt }}" target="_blank" rel="noopener" class="{{ $action }}">
                    @include('_partials.icon', ['name' => 'link', 'size' => 16])
                    <span>{{ $page->t('handbook.actions.chatgpt') }}</span>
                </a>
            </div>

            <header class="flex flex-col gap-3">
                <div class="flex items-center gap-1.5 text-small text-text-muted">
                    <a href="{{ $page->route('handbook') }}" class="text-text-muted hover:text-text">{{ $page->t('meta.breadcrumb.handbook') }}</a>
                    @include('_partials.icon', ['name' => 'chevron-right', 'size' => 14])
                    <span>{{ $page->t("handbook.sections.{$page->section}") }}</span>
                </div>
                <h1 class="text-heading font-semibold text-pretty text-text">{{ $page->title }}</h1>
            </header>

            {{-- bodyHtml would add image sizes, but the handbook has no images;
                 the rendered Markdown is the whole of it. --}}
            <div class="mn-prose max-w-none text-lede-sm leading-relaxed text-text-soft">{!! $page->getContent() !!}</div>
        </div>
    </article>

    <aside class="border-border px-4 pt-10 pb-12 max-lg:border-t md:px-12 lg:w-70 lg:flex-none lg:border-l lg:px-6 lg:pt-22">
        <div class="flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <span class="text-caption font-medium tracking-[0.08em] text-text-muted uppercase">{{ $page->t('handbook.writtenBy') }}</span>
                <div class="flex items-center gap-3 rounded-lg border border-border bg-canvas p-4 shadow-panel">
                    {{-- The author's photo, as the blog byline shows it. The
                         name is written beside it, so it is decorative. --}}
                    <img
                        src="{{ $avatar }}"
                        alt=""
                        width="96"
                        height="96"
                        loading="lazy"
                        decoding="async"
                        class="size-10 flex-none rounded-full bg-surface-muted object-cover"
                    >
                    <div class="flex flex-col gap-0.5">
                        <span class="text-copy font-semibold tracking-[-0.01em] text-text">{{ $page->t('handbook.author') }}</span>
                        <span class="text-small text-text-muted">{{ $page->t('handbook.authorRole') }}</span>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-2.5">
                <div class="flex items-center gap-2.5 text-base text-text-secondary">
                    @include('_partials.icon', ['name' => 'text-lines', 'size' => 16, 'class' => 'text-text-muted'])
                    <span>{{ $page->t('handbook.words', [':count' => $words]) }}</span>
                </div>
                <div class="flex items-center gap-2.5 text-base text-text-secondary">
                    @include('_partials.icon', ['name' => 'clock', 'size' => 16, 'class' => 'text-text-muted'])
                    <span>{{ $page->t('handbook.minutes', [':count' => $minutes]) }}</span>
                </div>
                <p class="mt-1 text-small leading-relaxed text-pretty text-text-muted">
                    {{-- Split around the three placeholders so each can be set
                         apart, while the sentence itself stays in lang/. --}}
                    @foreach (preg_split('/(:percent|:title|:author)/', $page->t('handbook.comparison'), -1, PREG_SPLIT_DELIM_CAPTURE) as $part)
                        @if ($part === ':percent')
                            <span class="rounded-xs border border-border bg-surface-subtle px-1.25 py-px font-mono text-mono text-text-soft">{{ $percent }}</span>
                        @elseif ($part === ':title')
                            <strong class="font-semibold text-text-soft">{{ $book['title'] }}</strong>
                        @elseif ($part === ':author')
                            <strong class="font-semibold text-text-soft">{{ $book['author'] }}</strong>
                        @else
                            {{ $part }}
                        @endif
                    @endforeach
                </p>
            </div>

            <div class="flex flex-col gap-1.5 border-t border-border pt-6">
                <h2 class="text-base font-semibold text-text">{{ $page->t('handbook.factTitle') }}</h2>
                <p class="text-small leading-relaxed text-pretty text-text-muted">{{ $fact }}</p>
            </div>
        </div>
    </aside>
@endsection
