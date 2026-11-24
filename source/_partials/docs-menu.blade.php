{{--
    The docs menu in the header: the handbook, the documentation and
    contributing, each a heading link and three pages inside, then a strip of
    quick links, then a card for installing Monica on your own server.

    Built like the features menu beside it (see site-header.blade.php), with
    the same native <details>, the same hover and pop, and the same classes,
    so the two read as one family. Copy comes from `nav.docsMenu` in lang/;
    the destinations are listed here, in the same order, because a URL is
    not copy.

    The handbook is written in fewer languages than the site, so its links
    land on the default locale's copy from a page in any other language. Such
    a link crosses languages and carries `hreflang` and `data-turbo="false"`,
    for the reason the locale picker's links do. `locale` on a destination
    says which language it is in, when that is not the page's own.
--}}
@php
    $docsMenu = $page->t('nav.docsMenu');
    $handbookLocale = $page->routeLocale('handbook');
    $inHandbook = fn (string $slug) => ['href' => $page->handbookPath($slug, $handbookLocale), 'locale' => $handbookLocale];

    $docsLinks = [
        [
            'href' => ['href' => $page->route('handbook', $handbookLocale), 'locale' => $handbookLocale],
            'items' => [$inHandbook('principles'), $inHandbook('money'), $inHandbook('your-data')],
        ],
        [
            'href' => ['href' => $page->links['docs']],
            'items' => [['href' => $page->links['docsGuide']], ['href' => $page->links['selfHostingGuide']], ['href' => $page->links['api']]],
        ],
        [
            'href' => ['href' => $page->route('contribute')],
            'items' => [['href' => $page->links['github']], ['href' => $page->route('contribute')], ['href' => $page->links['issues']]],
        ],
    ];
    $quickLinks = [
        ['href' => $page->links['changelog']],
        $inHandbook('roadmap'),
        ['href' => $page->route('support')],
    ];
    $startLink = $page->links['selfHostingGuide'];

    // One identity colour per column, as the design draws it. Literal class
    // strings, so Tailwind's scanner finds them.
    $docsTones = [
        ['tile' => 'bg-identity-5/12 text-identity-5', 'icon' => 'text-identity-5'],
        ['tile' => 'bg-identity-6/12 text-identity-6', 'icon' => 'text-identity-6'],
        ['tile' => 'bg-identity-3/12 text-identity-3', 'icon' => 'text-identity-3'],
    ];

    // The attributes a link needs when it leads to another language.
    $crossing = fn (array $link) => isset($link['locale']) && $link['locale'] !== $page->lang()
        ? 'hreflang="' . e($page->languageTag($link['locale'])) . '" data-turbo="false"'
        : '';

    // The pages this menu opens on this site, so its button reads as the
    // current section on any of them, as a plain nav link does.
    $docsCurrent = in_array($page->page, ['handbook', 'handbookArticle', 'contribute'], true);
@endphp

<details data-menu data-menu-hover class="group/docs">
    <summary
        @if ($docsCurrent) aria-current="page" @endif
        class="{{ $navLink }} cursor-pointer list-none group-open/docs:bg-hover group-open/docs:text-text [&::-webkit-details-marker]:hidden"
    >
        {{ $docsMenu['label'] }}
        @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14, 'class' => 'transition-transform duration-150 ease-standard group-open/docs:rotate-180'])
    </summary>

    <div class="absolute inset-x-4 top-full z-50 pt-2 sm:inset-x-7">
        <div class="flex max-h-[calc(100dvh-140px)] origin-top-left flex-wrap overflow-y-auto rounded-lg border border-border bg-canvas shadow-pop transition-[opacity,scale] duration-300 ease-pop starting:scale-90 starting:opacity-0 motion-reduce:transition-none">
            <div class="flex min-w-0 flex-[3_1_700px] flex-col">
                {{-- Each column is a subgrid of the same six rows (heading,
                     rule, label, three items), so a description that wraps to
                     two lines in one column keeps the rest level, as in the
                     features menu. --}}
                <div class="grid gap-2 px-5 pt-6 pb-5 sm:grid-cols-3 sm:gap-y-1">
                    @foreach ($docsMenu['groups'] as $g => $group)
                        <section class="flex min-w-0 flex-col gap-1 sm:row-span-6 sm:grid sm:grid-rows-subgrid">
                            <a href="{{ $docsLinks[$g]['href']['href'] }}" {!! $crossing($docsLinks[$g]['href']) !!} class="flex flex-col gap-2.5 rounded-lg p-3 text-text no-underline hover:bg-hover hover:text-text hover:no-underline">
                                <span class="flex items-center gap-2.5">
                                    <span class="grid size-8 flex-none place-items-center rounded-md {{ $docsTones[$g]['tile'] }}">
                                        @include('_partials.icon', ['name' => $group['icon'], 'size' => 18])
                                    </span>
                                    <span class="text-lede-sm font-semibold tracking-[-0.01em]">{{ $group['title'] }}</span>
                                    <span class="ml-auto text-text-muted">
                                        @include('_partials.icon', ['name' => 'arrow-right', 'size' => 16])
                                    </span>
                                </span>
                                <span class="text-base leading-snug text-pretty text-text-secondary">{{ $group['body'] }}</span>
                            </a>
                            <div class="mx-3 my-1 h-px bg-border-subtle"></div>
                            <span class="px-3 pt-1 pb-0.5 text-caption font-semibold tracking-[0.08em] text-text-muted uppercase">{{ $docsMenu['inside'] }}</span>
                            @foreach ($group['items'] as $i => $item)
                                <a href="{{ $docsLinks[$g]['items'][$i]['href'] }}" {!! $crossing($docsLinks[$g]['items'][$i]) !!} class="flex items-center gap-2.5 rounded-md px-3 py-2 text-base font-medium text-text no-underline hover:bg-hover hover:text-text hover:no-underline">
                                    <span class="flex-none {{ $docsTones[$g]['icon'] }}">
                                        @include('_partials.icon', ['name' => $item['icon']])
                                    </span>
                                    {{ $item['title'] }}
                                </a>
                            @endforeach
                        </section>
                    @endforeach
                </div>

                <div class="mt-auto flex flex-wrap items-center gap-2 border-t border-border bg-surface-subtle px-8 py-3.5">
                    <span class="mr-3 text-caption font-semibold tracking-[0.08em] text-text-muted uppercase">{{ $docsMenu['quick']['label'] }}</span>
                    @foreach ($docsMenu['quick']['items'] as $q => $quick)
                        <a href="{{ $quickLinks[$q]['href'] }}" {!! $crossing($quickLinks[$q]) !!} class="flex items-center gap-1.5 rounded-md border border-border bg-canvas py-1.25 pr-2 pl-2.5 text-base font-medium text-text no-underline shadow-panel hover:border-border-strong hover:bg-hover hover:text-text hover:no-underline">
                            @include('_partials.icon', ['name' => $quick['icon'], 'size' => 15])
                            {{ $quick['title'] }}
                            <span class="ml-0.5 text-text-muted">
                                @include('_partials.icon', ['name' => 'chevron-right', 'size' => 14])
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Beside the columns when the panel has room, under them when it
                 has not, as the features menu's card is. --}}
            <aside class="flex min-w-0 flex-[1_1_300px] flex-col border-border bg-surface-subtle p-6 max-lg:border-t lg:border-l">
                <a href="{{ $startLink }}" class="flex flex-1 flex-col gap-1.5 rounded-lg border border-border bg-canvas p-5 text-text no-underline shadow-panel hover:border-border-strong hover:bg-hover hover:text-text hover:no-underline">
                    <span class="text-caption font-semibold tracking-[0.08em] text-text-muted uppercase">{{ $docsMenu['start']['label'] }}</span>
                    <span class="text-lede-sm leading-snug font-semibold tracking-[-0.015em] text-balance">{{ $docsMenu['start']['title'] }}</span>
                    <span class="text-base text-pretty text-text-secondary">{{ $docsMenu['start']['body'] }}</span>
                    <code class="mt-2 truncate rounded-md border border-border-subtle bg-surface-subtle px-3 py-2.5 font-mono text-xs text-text-soft">{{ $docsMenu['start']['command'] }}</code>
                    <span class="mt-auto flex items-center gap-1.5 pt-4 text-base font-medium">
                        {{ $docsMenu['start']['cta'] }}
                        @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])
                    </span>
                </a>
            </aside>
        </div>
    </div>
</details>
