{{--
    The links under a feature post: its documentation, the pull request that
    shipped it, and where to report a problem with it. "Useful links" in the
    Feature Post design.

    The first two come from the post's front matter (`docs`, `pullRequest`),
    the third is the issue tracker every feature shares. Each row shows the
    address it goes to in mono, so a reader knows they are leaving the site
    before they click, and the address is hidden on a phone, where the
    description already needs the room.

    @include('_partials.blog.feature-links', ['post' => $page])
--}}
@php
    $links = [
        [
            'icon' => 'file',
            'key' => 'docs',
            'href' => $post->docs,
            'display' => preg_replace('#^https?://#', '', $post->docs),
        ],
        [
            'icon' => 'code',
            'key' => 'pullRequest',
            'href' => $post->pullRequestUrl(),
            'display' => 'monicahq/monica#' . (int) $post->pullRequest,
        ],
        [
            'icon' => 'info',
            'key' => 'report',
            'href' => $page->links['issues'],
            'display' => preg_replace('#^https?://#', '', $page->links['issues']),
        ],
    ];
@endphp

<section aria-labelledby="feature-links-title" class="mt-14 flex flex-col gap-3.5">
    <h2 id="feature-links-title" class="text-micro font-medium tracking-[0.06em] text-text-muted uppercase">
        {{ $page->t('blog.feature.links.title') }}
    </h2>

    <div class="overflow-hidden rounded-lg border border-border bg-surface shadow-panel">
        @foreach ($links as $link)
            <a
                href="{{ $link['href'] }}"
                @class([
                    'flex items-center gap-3.5 px-4 py-3.5 text-text no-underline transition-colors duration-150 ease-standard hover:bg-hover hover:no-underline',
                    'border-t border-border' => ! $loop->first,
                ])
            >
                <span class="grid size-9 flex-none place-items-center rounded-md border border-border bg-surface-subtle text-text">
                    @include('_partials.icon', ['name' => $link['icon'], 'size' => 16])
                </span>

                <span class="flex min-w-0 flex-1 flex-col gap-0.5">
                    <span class="text-base font-semibold text-text">{{ $page->t("blog.feature.links.{$link['key']}.title") }}</span>
                    <span class="text-small text-text-muted text-pretty">{{ $page->t("blog.feature.links.{$link['key']}.description") }}</span>
                </span>

                <span class="hidden max-w-55 truncate font-mono text-mono text-text-muted md:block">{{ $link['display'] }}</span>

                <span class="flex text-text-muted">
                    @include('_partials.icon', ['name' => 'arrow-right', 'size' => 16])
                </span>
            </a>
        @endforeach
    </div>
</section>
