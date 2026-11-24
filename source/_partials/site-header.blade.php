@php
    $home = $page->route('home');
    $details = $page->route('details');

    // The features menu: three columns (people, possessions, knowledge),
    // each a heading link and its items, then a strip of what every space
    // has, then a card pointing at the MCP server. Copy comes from
    // `nav.menu` in `lang/`; the destinations are listed here, in the same
    // order, because a URL is not copy. `#` marks a page not written yet.
    $menu = $page->t('nav.menu');
    $menuLinks = [
        ['href' => $page->route('people'), 'items' => [$page->route('details'), $page->route('relationships'), $page->route('timelineReminders')]],
        ['href' => $page->route('possessions'), 'items' => [$page->route('inventory'), $page->route('locations'), $page->route('maintenanceLoans')]],
        ['href' => $page->route('knowledge'), 'items' => ['#', '#', '#']],
    ];
    $spaceLinks = [
        $page->route('templates'),
        $page->route('vaults'),
        $page->route('sharing'),
        $page->route('languages'),
        $page->route('privacyFeatures'),
    ];

    // One identity colour per column, as the design draws it. Literal class
    // strings, so Tailwind's scanner finds them.
    $groupTones = [
        ['tile' => 'bg-identity-7/12 text-identity-7', 'icon' => 'text-identity-7'],
        ['tile' => 'bg-identity-1/12 text-identity-1', 'icon' => 'text-identity-1'],
        ['tile' => 'bg-identity-2/12 text-identity-2', 'icon' => 'text-identity-2'],
    ];

    // The plain links after the menu. `current` names the route keys that mark
    // the link as the page being read; a post is a blog page too.
    //
    // The handbook is written in fewer languages than the site, so from a
    // page in any other one it lands on the default locale's copy. That link
    // crosses languages, and carries `hreflang` and `data-turbo="false"` for
    // the reason the locale picker's links do.
    $handbookLocale = $page->routeLocale('handbook');

    $navItems = [
        ['label' => $page->t('nav.pricing'), 'href' => $page->route('pricing'), 'current' => ['pricing']],
        ['label' => $page->t('nav.blog'), 'href' => $page->route('blog'), 'current' => ['blog', 'post']],
        [
            'label' => $page->t('nav.handbook'),
            'href' => $page->route('handbook', $handbookLocale),
            'current' => ['handbook', 'handbookArticle'],
            'locale' => $handbookLocale,
        ],
        ['label' => $page->t('nav.docs'), 'href' => $page->links['docs'], 'current' => []],
        ['label' => $page->t('nav.contribute'), 'href' => $page->route('contribute'), 'current' => ['contribute']],
    ];

    $navLink = 'flex items-center gap-1 rounded-md px-2.5 py-2 text-base font-medium text-text-secondary no-underline transition-colors duration-150 ease-standard hover:bg-hover hover:text-text hover:no-underline aria-[current=page]:text-text';
@endphp

<header class="relative z-40 border-b border-border bg-canvas">
    {{-- `relative` is on this container rather than on the menu, so the open
         panel spans the header's width instead of the width of one button.
         The width and the side padding are the application's own docs
         header (erica, `components/docs/header.blade.php`): 1560px, 16px
         then 28px, so the two headers line up when a reader crosses from
         one to the other. Wider than the page below it, on purpose. --}}
    <div class="relative mx-auto flex min-h-15 w-full max-w-390 flex-wrap items-center gap-x-8 gap-y-2 px-4 max-lg:py-3 sm:px-7">
        <a href="{{ $home }}" class="flex items-center gap-2 text-text no-underline hover:text-text hover:no-underline">
            {{-- `width`/`height` are the SVG's intrinsic ratio, so the browser
                 reserves the right box before it loads; `w-6 h-auto` sizes it. --}}
            <img
                src="/assets/images/monica-panda-mark.svg"
                alt=""
                width="32"
                height="29"
                class="h-auto w-6 flex-none"
            >
            <span class="text-lede-sm font-semibold tracking-[-0.02em]">Monica</span>
        </a>

        <nav
            aria-label="{{ $page->t('nav.label') }}"
            class="flex min-w-0 flex-1 flex-wrap items-center gap-1 max-lg:order-3 max-lg:basis-full max-lg:-mx-2.5"
        >
            {{-- A native <details>, like the language menu: it opens on a click,
                 a tap or the keyboard with no script at all. app.js only adds
                 closing it on Escape or a click elsewhere. It does not open on
                 hover, because hover is never the only way to an action and a
                 menu that opens under a passing pointer is one nobody asked
                 for. --}}
            <details data-menu class="group/menu">
                <summary class="{{ $navLink }} cursor-pointer list-none group-open/menu:bg-hover group-open/menu:text-text [&::-webkit-details-marker]:hidden">
                    {{ $page->t('nav.features') }}
                    @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14, 'class' => 'transition-transform duration-150 ease-standard group-open/menu:rotate-180'])
                </summary>

                <div class="absolute inset-x-4 top-full z-50 pt-2 sm:inset-x-7">
                    <div class="flex max-h-[calc(100dvh-140px)] flex-wrap overflow-y-auto rounded-lg border border-border bg-canvas shadow-pop">
                        <div class="flex min-w-0 flex-[3_1_700px] flex-col">
                            <div class="grid gap-2 px-5 pt-6 pb-5 sm:grid-cols-3">
                                @foreach ($menu['groups'] as $g => $group)
                                    <section class="flex min-w-0 flex-col gap-1">
                                        <a href="{{ $menuLinks[$g]['href'] }}" class="flex flex-col gap-2.5 rounded-lg p-3 text-text no-underline hover:bg-hover hover:text-text hover:no-underline">
                                            <span class="flex items-center gap-2.5">
                                                <span class="grid size-8 flex-none place-items-center rounded-md {{ $groupTones[$g]['tile'] }}">
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
                                        @foreach ($group['items'] as $i => $item)
                                            <a href="{{ $menuLinks[$g]['items'][$i] }}" class="flex gap-2.5 rounded-md px-3 py-2 text-text no-underline hover:bg-hover hover:text-text hover:no-underline">
                                                <span class="flex-none pt-px {{ $groupTones[$g]['icon'] }}">
                                                    @include('_partials.icon', ['name' => $item['icon']])
                                                </span>
                                                <span class="flex flex-col gap-0.5">
                                                    <span class="text-base font-medium">{{ $item['title'] }}</span>
                                                    <span class="text-xs text-text-muted">{{ $item['body'] }}</span>
                                                </span>
                                            </a>
                                        @endforeach
                                    </section>
                                @endforeach
                            </div>

                            <div class="mt-auto flex flex-wrap items-center gap-2 border-t border-border bg-surface-subtle px-8 py-3.5">
                                <span class="mr-3 text-caption font-semibold tracking-[0.08em] text-text-muted uppercase">{{ $menu['spaces']['label'] }}</span>
                                @foreach ($menu['spaces']['items'] as $s => $space)
                                    <a href="{{ $spaceLinks[$s] }}" class="flex items-center gap-1.5 rounded-md border border-border bg-canvas py-1.25 pr-2 pl-2.5 text-base font-medium text-text no-underline shadow-panel hover:border-border-strong hover:bg-hover hover:text-text hover:no-underline">
                                        @include('_partials.icon', ['name' => $space['icon'], 'size' => 15])
                                        {{ $space['title'] }}
                                        <span class="ml-0.5 text-text-muted">
                                            @include('_partials.icon', ['name' => 'chevron-right', 'size' => 14])
                                        </span>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <aside class="flex min-w-0 flex-[1_1_300px] flex-col border-border bg-surface-subtle p-6 max-lg:border-t lg:border-l">
                            <a href="{{ $page->route('mcpServer') }}" class="flex flex-1 flex-col gap-4 rounded-lg border border-border bg-canvas p-5 text-text no-underline shadow-panel hover:border-border-strong hover:bg-hover hover:text-text hover:no-underline">
                                <span class="flex flex-col gap-1.5">
                                    <span class="text-caption font-semibold tracking-[0.08em] text-text-muted uppercase">{{ $menu['assistant']['label'] }}</span>
                                    <span class="text-lede-sm leading-snug font-semibold tracking-[-0.015em] text-balance">{{ $menu['assistant']['title'] }}</span>
                                    <span class="text-base text-pretty text-text-secondary">{{ $menu['assistant']['body'] }}</span>
                                </span>
                                {{-- A picture of an exchange with an assistant, not a
                                     working chat, so it is read as one image. --}}
                                <span role="img" aria-label="{{ $menu['assistant']['question'] }} {{ $menu['assistant']['answer'] }}" class="flex flex-col gap-2 rounded-md border border-border-subtle bg-surface-subtle p-3">
                                    <span aria-hidden="true" class="max-w-[85%] self-end rounded-lg bg-primary px-2.5 py-1.75 text-xs leading-snug text-on-primary">{{ $menu['assistant']['question'] }}</span>
                                    <span aria-hidden="true" class="max-w-[92%] self-start rounded-lg border border-border bg-canvas px-2.5 py-2 text-xs leading-snug text-text-soft">{{ $menu['assistant']['answer'] }}</span>
                                </span>
                                <span class="mt-auto flex items-center gap-1.5 text-base font-medium">
                                    {{ $menu['assistant']['cta'] }}
                                    @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])
                                </span>
                            </a>
                        </aside>
                    </div>
                </div>
            </details>

            @foreach ($navItems as $item)
                <a
                    href="{{ $item['href'] }}"
                    @if (in_array($page->page, $item['current'], true)) aria-current="page" @endif
                    @if (($item['locale'] ?? $page->lang()) !== $page->lang())
                        hreflang="{{ $page->languageTag($item['locale']) }}"
                        data-turbo="false"
                    @endif
                    class="{{ $navLink }}"
                >{{ $item['label'] }}</a>
            @endforeach
        </nav>

        <div class="flex items-center gap-2 max-lg:ml-auto">
            {{-- The star count, as laravel.com shows its own. The visible text
                 is only the number, so the label names the destination too,
                 and contains the number, so voice control finds it by what a
                 reader sees. `starCount` is fetched at build time by
                 bootstrap.php.

                 It and the theme button are left out below `sm`: on a phone
                 they push the two buttons onto a line of their own under the
                 logo in German and French. The footer has both a GitHub
                 button and a theme button at every width. --}}
            <a
                href="{{ $page->links['github'] }}"
                aria-label="{{ $page->t('nav.github', [':count' => $page->starCount]) }}"
                class="hidden h-9 items-center gap-2 rounded-md px-2.5 text-base font-medium text-text-secondary no-underline transition-colors duration-150 ease-standard hover:bg-hover hover:text-text hover:no-underline sm:flex"
            >
                @include('_partials.github-mark', ['size' => 18])
                <span>{{ $page->starCount }}</span>
            </a>
            @include('_partials.theme-toggle', ['class' => 'text-text-secondary hover:bg-hover hover:text-text max-sm:hidden'])
            <a href="{{ $page->links['signIn'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">
                {{ $page->t('nav.signIn') }}
            </a>
            <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $page->t('nav.getStarted') }}</a>
        </div>
    </div>
</header>
