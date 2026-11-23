@php
    $hero = $copy['hero'];
    $screen = $hero['screen'];

    // Possessions and knowledge have no page yet, so their links are `#`.
    $body = str_replace(
        [':possessions', ':knowledge'],
        [
            '<a href="#" class="' . $inline . '">' . e($hero['possessions']) . '</a>',
            '<a href="#" class="' . $inline . '">' . e($hero['knowledge']) . '</a>',
        ],
        e($hero['body']),
    );

    // The tabs a "Friends and family" contact gets, with their counts.
    $tabIcons = ['people', 'file', 'file', 'relationship'];
    $tabCounts = [null, 5, 2, 4];
    $facts = [
        ['file', $ui['birthday'], $screen['birthdayValue']],
        ['timeline', $ui['lastInTouch'], $screen['lastValue']],
        ['reminder', $ui['reminders'], $ui['noneWaiting']],
    ];
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[760px] flex-col items-center gap-5 text-center">
            <span class="text-caption font-semibold tracking-[0.1em] text-text-muted uppercase">{{ $hero['eyebrow'] }}</span>
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="max-w-[620px] text-lede-md font-medium text-text text-balance">{{ $hero['lede'] }}</p>
            <p class="max-w-[600px] {{ $paragraph }}">{!! $body !!}</p>
            <div class="flex flex-wrap justify-center gap-2.5 pt-1.5">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
                <a href="{{ $page->route('pricing') }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $hero['plans'] }}</a>
            </div>
        </div>

        {{-- Rachel Green's overview tab, as the application draws it: the
             vault breadcrumb, the header and its facts, the tabs, then her
             timeline beside her immediate family and her reminders. Below
             `lg` the columns stack in that order, as they do in the
             application. One picture of the product, read out by its label. --}}
        <div class="mx-auto mt-18 max-w-[1040px] rounded-lg bg-identity-7/14 p-3 md:p-8">
            <div role="img" aria-label="{{ $hero['label'] }}" class="{{ $window }}">
                <div class="flex items-center gap-1 border-b border-border bg-surface-subtle px-4 py-2 text-small text-text-muted">
                    <span class="flex items-center gap-2 px-1.5 py-1 text-text">
                        <span class="grid size-5.5 flex-none place-items-center rounded-xs bg-identity-1 text-caption font-semibold text-white">{{ mb_substr($ui['vault'], 0, 1) }}</span>
                        <span class="font-semibold">{{ $ui['vault'] }}</span>
                    </span>
                    @include('_partials.icon', ['name' => 'chevron-right', 'size' => 14, 'class' => 'text-text-disabled'])
                    <span class="px-1.5 py-1">{{ $ui['people'] }}</span>
                    @include('_partials.icon', ['name' => 'chevron-right', 'size' => 14, 'class' => 'text-text-disabled'])
                    <span class="truncate px-1.5 py-1 font-semibold text-text">Rachel Green</span>
                </div>

                <div class="flex flex-col gap-6 p-4 text-body md:p-7">
                    <div class="flex flex-wrap items-start gap-5">
                        <span class="flex-none rounded-full p-0.75 max-sm:hidden">
                            @include('_partials.home.product.avatar', ['name' => 'Rachel Green', 'size' => 88])
                        </span>
                        <div class="min-w-60 flex-1">
                            <div class="flex items-center justify-between gap-3">
                                <span class="text-[28px] leading-tight font-semibold tracking-[-0.03em] text-text">Rachel Green</span>
                                <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none max-md:hidden">@include('_partials.icon', ['name' => 'profile', 'size' => 14]) {{ $ui['edit'] }}</span>
                            </div>
                            <ul class="mt-4 flex flex-wrap gap-x-5.5 gap-y-2">
                                @foreach ($facts as [$icon, $label, $value])
                                    <li class="flex items-center gap-1.75 text-small text-text-secondary">
                                        @include('_partials.icon', ['name' => $icon, 'class' => 'text-text-muted'])
                                        {{ $label }} <b class="font-semibold text-text">{{ $value }}</b>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-end gap-0.5 border-b border-border">
                        @foreach ($ui['tabs'] as $t => $tab)
                            <span class="-mb-px flex h-9 flex-none items-center gap-1.75 border-b-2 px-2.5 text-body font-medium {{ $t === 0 ? 'border-primary font-semibold text-text' : 'border-transparent text-text-muted' }}">
                                @include('_partials.icon', ['name' => $tabIcons[$t], 'size' => 15])
                                {{ $tab }}
                                @if ($tabCounts[$t])
                                    <span class="grid h-4.75 min-w-4.75 place-items-center rounded-full px-1.25 text-caption font-semibold text-text-disabled">{{ $tabCounts[$t] }}</span>
                                @endif
                            </span>
                        @endforeach
                    </div>

                    <div class="grid items-start gap-5 lg:grid-cols-[minmax(0,1.5fr)_minmax(0,1fr)]">
                        <div class="flex flex-col gap-5">
                            <div class="flex flex-wrap items-end justify-between gap-3 px-0.5">
                                <span class="{{ $sectionTitle }}">{{ $ui['timeline'] }}</span>
                                <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">@include('_partials.icon', ['name' => 'plus', 'size' => 14]) {{ $ui['addEvent'] }}</span>
                            </div>
                            @include('_partials.people.life-event', ['years' => $screen['timeline']])
                        </div>

                        <div class="flex flex-col gap-5">
                            <div class="{{ $panel }}">
                                <div class="{{ $panelHead }}">
                                    <span class="{{ $panelMark }} border border-border bg-surface-subtle text-text-secondary">@include('_partials.icon', ['name' => 'family', 'size' => 15])</span>
                                    <span class="{{ $panelTitle }}">{{ $ui['immediateFamily'] }}</span>
                                    <span class="{{ $smallButton }}">{{ $ui['add'] }}</span>
                                </div>
                                <div class="pb-1.5">
                                    <div class="flex items-baseline gap-1.5 px-4 pt-3 pb-1.5">
                                        <span class="{{ $caption }}">{{ $ui['children'] }}</span>
                                        <span class="text-caption font-medium text-text-muted">1</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 px-4 py-2">
                                        @include('_partials.home.product.avatar', ['name' => 'Emma Geller-Green', 'size' => 30])
                                        <span class="min-w-0 flex-1 truncate text-small font-semibold text-text">Emma Geller-Green</span>
                                    </div>
                                </div>
                            </div>

                            <div class="{{ $panel }}">
                                <div class="{{ $panelHead }}">
                                    <span class="{{ $panelMark }} border border-border bg-surface-subtle text-text-secondary">@include('_partials.icon', ['name' => 'reminder', 'size' => 15])</span>
                                    <span class="{{ $panelTitle }}">{{ $ui['reminders'] }}</span>
                                    <span class="{{ $smallButton }}">{{ $ui['add'] }}</span>
                                </div>
                                <div class="flex flex-wrap gap-0.5 px-2">
                                    @foreach ($ui['reminderTabs'] as $t => $tab)
                                        <span class="-mb-px flex h-9 items-center gap-1.5 border-b-2 px-2 text-small font-medium {{ $t === 0 ? 'border-primary font-semibold text-text' : 'border-transparent text-text-muted' }}">{{ $tab }} <span class="text-caption text-text-disabled">{{ [1, 0, 0, 1][$t] }}</span></span>
                                    @endforeach
                                </div>
                                <div class="flex flex-col gap-1.25 border-t border-border px-4 py-3.5">
                                    <span class="text-small font-semibold text-text">{{ $screen['reminder'] }}</span>
                                    <span class="flex flex-wrap gap-x-4 gap-y-1 text-small text-text-muted">
                                        <span class="flex items-center gap-1.5">@include('_partials.icon', ['name' => 'clock', 'size' => 15]) {{ $screen['reminderWhen'] }}</span>
                                        <span class="flex items-center gap-1.5">@include('_partials.icon', ['name' => 'calendar-repeat', 'size' => 15]) {{ $ui['oneTime'] }}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
