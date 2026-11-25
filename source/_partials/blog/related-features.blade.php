{{--
    "Similar features", under a feature post's links: the other feature posts
    its front matter names in `related`, each with its own icon and date.
    Nothing is drawn when the list is empty, which is the case for the first
    feature post of a kind.

    @include('_partials.blog.related-features', ['related' => $page->relatedPosts($posts)])
--}}
@if ($related->isNotEmpty())
    <section aria-labelledby="related-features-title" class="mt-10 flex flex-col gap-3">
        <h2 id="related-features-title" class="text-micro font-medium tracking-[0.06em] text-text-muted uppercase">
            {{ $page->t('blog.feature.related') }}
        </h2>

        <div class="flex flex-col">
            @foreach ($related as $item)
                <a
                    href="{{ $page->postPath($item->slug) }}"
                    class="-mx-2.5 flex items-center gap-3 rounded-md px-2.5 py-2 text-text no-underline transition-colors duration-150 ease-standard hover:bg-hover hover:no-underline"
                >
                    <span class="grid size-7 flex-none place-items-center rounded-md border border-border bg-surface-subtle text-text">
                        @include('_partials.icon', ['name' => $item->icon ?? 'file', 'size' => 14])
                    </span>
                    <span class="min-w-0 flex-1 text-small font-medium text-text">{{ $item->title }}</span>
                    <time datetime="{{ $item->isoDate() }}" class="font-mono text-mono whitespace-nowrap text-text-muted">{{ $item->isoDate() }}</time>
                </a>
            @endforeach
        </div>
    </section>
@endif
