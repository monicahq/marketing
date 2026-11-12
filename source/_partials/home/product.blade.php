@php
    $copy = $page->t('home.product');

    $meadow = '/assets/images/home/meadow-day.webp';
    $meadowSize = $page->imageSize($meadow);

    // The screens a reader can open from the sidebar, in sidebar order, then
    // Chandler Bing's page, which opens from any person's name.
    // Each one shows itself while its radio is checked. The classes are
    // literal strings so Tailwind's scanner can see them.
    $screens = [
        'dashboard' => 'group-has-[#mn-screen-dashboard:checked]/product:flex',
        'reminders' => 'group-has-[#mn-screen-reminders:checked]/product:flex',
        'settings' => 'group-has-[#mn-screen-settings:checked]/product:flex',
        'people' => 'group-has-[#mn-screen-people:checked]/product:flex',
        'possessions' => 'group-has-[#mn-screen-possessions:checked]/product:flex',
        'knowledge' => 'group-has-[#mn-screen-knowledge:checked]/product:flex',
        'profile' => 'group-has-[#mn-screen-profile:checked]/product:flex',
        'group' => 'group-has-[#mn-screen-group:checked]/product:flex',
    ];
    $crumbs = [
        'dashboard' => null,
        'reminders' => $copy['nav']['reminders'],
        'settings' => $copy['settingsCrumb'],
        'people' => $copy['nav']['people'],
        'possessions' => $copy['nav']['possessions'],
        'knowledge' => $copy['nav']['knowledge'],
        'profile' => [$copy['nav']['people'], 'Chandler Bing'],
        'group' => [$copy['nav']['groups'], $copy['group']['title']],
    ];

    // The sidebar, as the application draws it. A null screen is a section
    // the picture has no screen for yet: drawn, but not something to pick.
    $sidebar = [
        'vault' => [
            ['screen' => 'dashboard', 'icon' => 'heart', 'count' => null],
            ['screen' => 'reminders', 'icon' => 'reminder', 'count' => 1],
            ['screen' => 'settings', 'icon' => 'vault', 'count' => null],
        ],
        'people' => [
            ['screen' => 'people', 'icon' => 'people', 'count' => 25],
            ['screen' => null, 'label' => 'animals', 'icon' => 'pet', 'count' => null],
            ['screen' => 'group', 'label' => 'groups', 'icon' => 'family', 'count' => null],
        ],
        'things' => [
            ['screen' => 'possessions', 'icon' => 'key', 'count' => 10],
        ],
        'knowledge' => [
            ['screen' => 'knowledge', 'icon' => 'journal', 'count' => 30],
        ],
    ];

    $card = 'rounded-lg border border-border bg-canvas shadow-panel';

    // Every name of a person in the screens opens Chandler Bing's page, the
    // one contact page the picture has. A label for its radio, so a click is
    // all it takes. Hover underlines, as a link in the product does.
    $toProfile = 'cursor-pointer hover:underline';

    // Life events from lang/, zipped with what is not copy: per event its
    // icon, its tint and who was there, per year its number.
    $timelineFrom = function (array $years, array $numbers, array $looks) {
        $timeline = [];
        foreach ($years as $y => $year) {
            $events = [];
            foreach ($year['events'] as $e => $event) {
                [$icon, $tint, $with] = $looks[$y][$e];
                $events[] = $event + ['icon' => $icon, 'tint' => $tint, 'with' => $with];
            }
            $timeline[] = ['year' => $numbers[$y], 'count' => $year['count'], 'events' => $events];
        }

        return $timeline;
    };
@endphp

{{-- The product, drawn with the product's own classes and tokens rather than
     screenshots, so it is the real interface's spacing and type at any width,
     in both themes, and in every language.

     The sidebar picks a screen. It is a group of native radio buttons, and
     each screen shows itself with `group-has-[#id:checked]`, so switching
     needs no JavaScript and the arrow keys move between screens for free.
     Each screen is still a picture of Monica rather than a working copy, so
     it is one image to a screen reader, described by its label, and nothing
     inside it is a control. --}}
<section class="relative px-4 pb-24 md:px-6">
    {{-- The page from the meadow's foot down, so the lower half of the product
         picture and the awards under it sit on white rather than on the cream
         of home/top. --}}
    <div aria-hidden="true" class="absolute inset-x-0 top-[42%] bottom-0 bg-canvas"></div>

    {{-- The meadow behind the headline (see home/top). Its foot sits 42% of
         the way down the product picture, where the grass gives way to the
         white page, and it grows upward from there all the way to the header.

         The picture alone is not always tall enough for that: the headline
         wraps onto more lines on a phone, and in a longer language. So the box
         is taller than any headline needs, the picture fills it from the foot
         up (`object-cover object-bottom`, zooming in only when it has to), and
         home/top's clip cuts off whatever rises past the header. From lg, the
         box is never shorter than the picture's own height at full width, so
         a wide screen shows it unzoomed.

         Never narrower than 900px, like the footer's, so a phone crops the
         edges instead of shrinking the pandas. Decoration: the footer already
         describes the meadow. --}}
    <div aria-hidden="true" class="absolute bottom-[58%] left-1/2 h-[1100px] w-full min-w-[900px] -translate-x-1/2 lg:h-[max(960px,56.25vw)] dark:hidden">
        <img
            src="{{ $meadow }}"
            alt=""
            width="{{ $meadowSize['width'] }}"
            height="{{ $meadowSize['height'] }}"
            decoding="async"
            class="block size-full object-cover object-bottom"
        >
    </div>

    <div class="group/product relative mx-auto flex h-150 max-w-page overflow-hidden rounded-lg border border-border bg-canvas text-left shadow-showcase max-md:flex-col md:h-170">
        <aside class="flex flex-none flex-col gap-4 border-border bg-surface-subtle max-md:border-b md:w-60 md:border-r md:px-3 md:py-3.5">
            <div aria-hidden="true" class="flex items-center gap-2 px-1.5 max-md:hidden">
                <img src="/assets/images/monica-panda-mark.svg" alt="" width="32" height="29" class="h-auto w-6.5 flex-none">
                <span class="text-body font-semibold text-text">Monica</span>
            </div>
            <div aria-hidden="true" class="flex items-center gap-2 rounded-md border border-border bg-canvas px-2.5 py-1.5 text-small text-text-muted max-md:hidden">
                @include('_partials.icon', ['name' => 'search', 'size' => 14])
                <span class="flex-1">{{ $copy['search'] }}</span>
                <span class="rounded-xs border border-border px-1 text-caption">Ctrl K</span>
            </div>

            <div role="radiogroup" aria-label="{{ $copy['screensLabel'] }}" class="flex flex-col gap-3 max-md:flex-row max-md:gap-1 max-md:overflow-x-auto max-md:px-2 max-md:py-2">
                @foreach ($sidebar as $section => $items)
                    <div class="flex flex-col gap-0.5 max-md:contents">
                        <span aria-hidden="true" class="px-2 pb-1 text-caption font-medium tracking-[0.08em] text-text-muted uppercase max-md:hidden">{{ $copy['sections'][$section] }}</span>
                        @foreach ($items as $item)
                            @if ($item['screen'])
                                <label class="flex flex-none cursor-pointer items-center gap-2.5 rounded-md px-2 py-1.5 text-base font-medium whitespace-nowrap text-text-secondary hover:bg-hover hover:text-text has-checked:bg-canvas has-checked:text-text has-checked:shadow-nav-active has-focus-visible:outline-2 has-focus-visible:outline-offset-1 has-focus-visible:outline-focus {{ $item['screen'] === 'people' ? 'group-has-[#mn-screen-profile:checked]/product:bg-canvas group-has-[#mn-screen-profile:checked]/product:text-text group-has-[#mn-screen-profile:checked]/product:shadow-nav-active' : '' }}">
                                    <input
                                        type="radio"
                                        name="mn-screen"
                                        id="mn-screen-{{ $item['screen'] }}"
                                        value="{{ $item['screen'] }}"
                                        class="sr-only"
                                        @checked($item['screen'] === 'dashboard')
                                    >
                                    @include('_partials.icon', ['name' => $item['icon'], 'class' => $item['icon'] === 'pet' ? 'text-identity-3' : ''])
                                    <span class="flex-1">{{ $copy['nav'][$item['label'] ?? $item['screen']] }}</span>
                                    @if ($item['count'])
                                        <span aria-hidden="true" class="text-small text-text-muted tabular-nums">{{ $item['count'] }}</span>
                                    @endif
                                </label>
                                @if ($item['screen'] === 'people')
                                    {{-- Chandler Bing's page, opened from any name in the
                                         screens. Its radio sits beside People's so the arrow
                                         keys reach it too; the label is the names themselves,
                                         and People stays selected while it is open. --}}
                                    <input type="radio" name="mn-screen" id="mn-screen-profile" value="profile" aria-label="{{ $copy['profile']['pick'] }}" class="peer/profile sr-only">
                                    <span aria-hidden="true" class="hidden rounded-md px-2 py-1 text-small text-text outline-2 outline-offset-1 outline-focus peer-focus-visible/profile:block max-md:flex-none">Chandler Bing</span>
                                @endif
                            @else
                                <div aria-hidden="true" class="flex items-center gap-2.5 px-2 py-1.5 text-base font-medium text-text-secondary max-md:hidden">
                                    @include('_partials.icon', ['name' => $item['icon'], 'class' => $item['icon'] === 'pet' ? 'text-identity-3' : ''])
                                    {{ $copy['nav'][$item['label']] }}
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div>
        </aside>

        <div class="flex min-h-0 min-w-0 flex-1 flex-col">
            <div aria-hidden="true" class="flex h-13 flex-none items-center gap-4 border-b border-border px-5">
                @foreach ($screens as $screen => $shows)
                    <div class="hidden min-w-0 shrink items-center gap-2 text-base font-semibold whitespace-nowrap text-text {{ $shows }}">
                        <span class="grid size-5.5 flex-none place-items-center rounded-xs bg-identity-1 text-caption font-semibold text-white">{{ mb_substr($copy['vault'], 0, 1) }}</span>
                        <span class="truncate">{{ $copy['vault'] }}</span>
                        @foreach ((array) $crumbs[$screen] as $crumb)
                            @include('_partials.icon', ['name' => 'chevron-right', 'size' => 14, 'class' => 'flex-none text-text-muted'])
                            <span class="truncate">{{ $crumb }}</span>
                        @endforeach
                    </div>
                @endforeach
                <div class="flex h-8 w-56 min-w-24 shrink-[3] items-center overflow-hidden rounded-md border border-border px-2.5 text-small text-text-muted max-lg:hidden">{{ $copy['search'] }}</div>
                <div class="flex-1"></div>
                <div class="flex flex-none items-center gap-4 text-small whitespace-nowrap text-text-secondary max-xl:hidden">
                    <span class="flex items-center gap-1.5">@include('_partials.icon', ['name' => 'journal', 'size' => 14]) {{ $copy['docs'] }}</span>
                    <span class="flex items-center gap-1.5">@include('_partials.icon', ['name' => 'shop', 'size' => 14]) {{ $copy['marketplace'] }}</span>
                </div>
                <span class="flex flex-none items-center gap-1.5 rounded-md border border-border px-2.5 py-1 text-small font-medium whitespace-nowrap text-text max-sm:hidden">@include('_partials.icon', ['name' => 'shield', 'size' => 14]) {{ $copy['admin'] }}</span>
                <span class="flex flex-none items-center gap-3 text-text-secondary">
                    @include('_partials.icon', ['name' => 'bell'])
                    @include('_partials.icon', ['name' => 'sun', 'class' => 'max-sm:hidden'])
                    @include('_partials.avatar-initials', ['name' => 'Monica Geller', 'size' => 28])
                </span>
            </div>

            <div class="min-h-0 flex-1 overflow-hidden">
                @foreach ($screens as $screen => $shows)
                    <div role="img" aria-label="{{ $copy[$screen]['label'] }}" class="hidden h-full flex-col {{ $shows }}">
                        @include('_partials.home.product.' . $screen)
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
