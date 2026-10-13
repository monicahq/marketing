@php
    $home = $page->route('home');
    $features = $page->route('features');
    $details = $page->route('details');

    // The features menu, one destination per item, in the order of
    // `nav.menu.groups` in `lang/`. Each item goes to the page or section that
    // shows it best: the details page for what lives on a contact and for the
    // people around them, the dashboard for reminders, the journal for the
    // timeline, and the homepage's own sections for assistants and privacy.
    // The fragments are
    // ids on those sections, so the dead link checker fails if one is renamed.
    // Listed here rather than in `lang/`, because a URL is not copy.
    $menu = $page->t('nav.menu');
    $menuLinks = [
        [$details, $page->route('featuresDashboard'), $page->route('featuresJournal')],
        ["{$details}#people", $features, $features],
        ["{$features}#api", "{$home}#agents", "{$home}#privacy"],
    ];

    // One identity colour per column, as the design draws it. Literal class
    // strings, so Tailwind's scanner finds them.
    $groupTones = [
        ['dot' => 'bg-identity-7', 'tile' => 'bg-identity-7/12 text-identity-7'],
        ['dot' => 'bg-identity-1', 'tile' => 'bg-identity-1/12 text-identity-1'],
        ['dot' => 'bg-identity-2', 'tile' => 'bg-identity-2/12 text-identity-2'],
    ];
    $rowDots = ['bg-identity-1', 'bg-identity-2', 'bg-identity-3'];

    // The plain links after the menu. `current` names the route keys that mark
    // the link as the page being read; a post is a blog page too.
    $navItems = [
        ['label' => $page->t('nav.pricing'), 'href' => $page->route('pricing'), 'current' => ['pricing']],
        ['label' => $page->t('nav.blog'), 'href' => $page->route('blog'), 'current' => ['blog', 'post']],
        ['label' => $page->t('nav.docs'), 'href' => $page->links['docs'], 'current' => []],
    ];

    $navLink = 'flex items-center gap-1 rounded-md px-2.5 py-2 text-base font-medium text-text-secondary no-underline transition-colors duration-150 ease-standard hover:bg-hover hover:text-text hover:no-underline aria-[current=page]:text-text';
@endphp

<header class="relative z-40 border-b border-border bg-canvas">
    {{-- `relative` is on this container rather than on the menu, so the open
         panel spans the header's width instead of the width of one button. --}}
    <div class="relative mx-auto flex min-h-15 w-full max-w-page flex-wrap items-center gap-x-8 gap-y-2 px-4 max-lg:py-3 md:px-6">
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

                <div class="absolute inset-x-4 top-full z-50 pt-2 md:inset-x-6">
                    <div class="flex max-h-[calc(100dvh-140px)] flex-wrap overflow-y-auto rounded-lg border border-border bg-canvas shadow-pop">
                        <div class="grid min-w-0 flex-[3_1_640px] gap-x-6 gap-y-5 p-6 sm:grid-cols-3 md:p-7">
                            @foreach ($menu['groups'] as $g => $group)
                                <div class="flex flex-col gap-1">
                                    <div class="mb-1.5 flex items-center gap-2 border-b border-border pb-2.5">
                                        <span class="size-1.5 rounded-full {{ $groupTones[$g]['dot'] }}"></span>
                                        <span class="text-caption font-medium tracking-[0.08em] text-text-muted uppercase">{{ $group['title'] }}</span>
                                    </div>
                                    @foreach ($group['items'] as $i => $item)
                                        <a href="{{ $menuLinks[$g][$i] }}" class="-mx-2 flex gap-3 rounded-md p-2 text-text no-underline hover:bg-hover hover:text-text hover:no-underline">
                                            <span class="grid size-7.5 flex-none place-items-center rounded-md {{ $groupTones[$g]['tile'] }}">
                                                @include('_partials.icon', ['name' => $item['icon']])
                                            </span>
                                            <span class="flex flex-col gap-px">
                                                <span class="text-base leading-snug font-semibold">{{ $item['title'] }}</span>
                                                <span class="text-xs text-text-muted">{{ $item['body'] }}</span>
                                            </span>
                                        </a>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>

                        <div class="flex min-w-0 flex-[1_1_300px] flex-col gap-4 border-border bg-surface-subtle p-6 max-lg:border-t md:p-7 lg:border-l">
                            <span class="text-caption font-medium tracking-[0.08em] text-text-muted uppercase">{{ $menu['start']['label'] }}</span>
                            <a href="{{ $page->route('templates') }}" class="flex flex-col gap-4 rounded-lg border border-border bg-canvas p-4.5 text-text no-underline shadow-panel hover:border-border-strong hover:text-text hover:no-underline">
                                <span class="flex flex-col gap-1">
                                    <span class="text-lede-sm font-semibold tracking-[-0.02em]">{{ $menu['start']['title'] }}</span>
                                    <span class="text-small text-text-secondary">{{ $menu['start']['body'] }}</span>
                                </span>
                                <span class="flex flex-col gap-1.5">
                                    @foreach ($menu['start']['rows'] as $r => $row)
                                        <span class="flex items-center gap-2.5 rounded-md border border-border px-2.5 py-2 text-small">
                                            <span class="size-2 flex-none rounded-full {{ $rowDots[$r] }}"></span>
                                            <span class="flex-1 font-medium">{{ $row['label'] }}</span>
                                            <span class="min-w-0 truncate text-caption text-text-muted normal-case">{{ $row['detail'] }}</span>
                                        </span>
                                    @endforeach
                                </span>
                                <span class="flex items-center gap-1.5 text-small font-medium">
                                    {{ $menu['start']['cta'] }}
                                    @include('_partials.icon', ['name' => 'arrow-right', 'size' => 14])
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </details>

            @foreach ($navItems as $item)
                <a
                    href="{{ $item['href'] }}"
                    @if (in_array($page->page, $item['current'], true)) aria-current="page" @endif
                    class="{{ $navLink }}"
                >{{ $item['label'] }}</a>
            @endforeach
        </nav>

        <div class="flex items-center gap-2 max-lg:ml-auto">
            <a href="{{ $page->links['signIn'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">
                {{ $page->t('nav.signIn') }}
            </a>
            <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">
                {{ $page->t('nav.getStarted') }}
            </a>
        </div>
    </div>
</header>
