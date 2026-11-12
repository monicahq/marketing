{{-- Chandler Bing's page, opened from any name in the other screens. --}}
@php
    $c = $copy['profile'];
    $d = $copy['dashboard'];
    $first = $copy['reminders']['items'][0];
    $tabIcons = ['people', 'file', 'file', 'file', 'relationship'];
    $tabCounts = [null, 4, 4, 2, 14];
    $reminderCounts = [4, 1, 0, 3];

    // His life events: the dashboard's 2010 and 2009, seen from his side, then 2007.
    $timeline = $timelineFrom([$d['years'][0], $d['years'][1], $c['earlier']], ['2010', '2009', '2007'], [
        [['activity', 'bg-identity-2/12 text-identity-2', ['Jack', 'Erica', 'Monica', 'Ben', 'Emma', 'Ross', 'Susan']]],
        [
            ['book', 'bg-identity-3/12 text-identity-3', ['Jack', 'Erica', 'Monica', 'Jack', 'Judy']],
            ['organization', 'bg-identity-5/12 text-identity-5', ['Jack', 'Erica', 'Monica']],
        ],
        [
            ['book', 'bg-identity-3/12 text-identity-3', ['Jack', 'Erica', 'Monica']],
            ['plane', 'bg-identity-6/12 text-identity-6', ['Jack', 'Erica', 'Monica', 'Ross', 'Rachel', 'Emma', 'Ben', 'Carol', 'Susan']],
        ],
    ]);

    $family = [
        [$c['children'], 2, [['Erica Bing', 22], ['Jack Bing', 22]]],
        [$c['partner'], 1, [['Monica Geller', 57]]],
    ];
    $cardHead = 'flex items-center gap-3 border-b border-border px-4 py-3 text-body font-semibold text-text';
    $cardIcon = 'grid size-8 flex-none place-items-center rounded-md border border-border text-text-secondary';
    $group = 'flex items-center gap-2 px-4 pt-3.5 pb-1 text-caption font-medium tracking-[0.08em] text-text-muted uppercase';
@endphp
<div class="flex flex-col gap-5 p-5 md:p-7">
    <div class="flex items-start gap-5">
        <span class="relative flex-none rounded-full p-1 ring-2 ring-warning/40 max-sm:hidden">
            @include('_partials.home.product.avatar', ['name' => 'Chandler Bing', 'size' => 76])
            <span class="absolute right-0 bottom-0 grid size-6 place-items-center rounded-full border-2 border-canvas bg-warning text-white">@include('_partials.icon', ['name' => 'star-filled', 'size' => 12])</span>
        </span>
        <div class="flex min-w-0 flex-1 flex-col gap-2">
            <div class="flex items-center justify-between gap-3">
                <span class="text-heading-sm font-semibold text-text">Chandler Bing</span>
                <span class="flex items-center gap-2">
                    <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none max-md:hidden">@include('_partials.icon', ['name' => 'profile', 'size' => 14]) {{ $c['edit'] }}</span>
                    <span class="grid size-8 place-items-center rounded-md border border-border text-text-secondary">@include('_partials.icon', ['name' => 'menu'])</span>
                </span>
            </div>
            <div class="flex flex-wrap gap-x-5 gap-y-1 text-base text-text-secondary">
                <span class="flex items-center gap-1.5">@include('_partials.icon', ['name' => 'file', 'size' => 14, 'class' => 'text-text-muted']) {{ $c['category'] }} <strong class="font-semibold text-text">{{ $c['categoryValue'] }}</strong></span>
                <span class="flex items-center gap-1.5">@include('_partials.icon', ['name' => 'file', 'size' => 14, 'class' => 'text-text-muted']) {{ $c['birthday'] }} <strong class="font-semibold text-text">{{ $c['birthdayValue'] }}</strong> @include('_partials.icon', ['name' => 'clock', 'size' => 14, 'class' => 'text-text-muted'])</span>
                <span class="flex items-center gap-1.5">@include('_partials.icon', ['name' => 'timeline', 'size' => 14, 'class' => 'text-text-muted']) {{ $c['lastInTouch'] }} <strong class="font-semibold text-text">{{ $c['never'] }}</strong></span>
                <span class="flex items-center gap-1.5">@include('_partials.icon', ['name' => 'reminder', 'size' => 14, 'class' => 'text-text-muted']) {{ $c['reminders'] }} <strong class="font-semibold text-text">{{ $c['awaiting'] }}</strong></span>
            </div>
        </div>
    </div>

    <div class="flex gap-5 overflow-hidden border-b border-border text-base font-medium">
        @foreach ($c['tabs'] as $t => $tab)
            <span class="-mb-px flex flex-none items-center gap-2 border-b-2 px-1 pb-2.5 {{ $t === 0 ? 'border-text text-text' : 'border-transparent text-text-muted' }}">
                @include('_partials.icon', ['name' => $tabIcons[$t], 'size' => 14])
                {{ $tab }}
                @if ($tabCounts[$t])
                    <span class="text-small text-text-muted">{{ $tabCounts[$t] }}</span>
                @endif
            </span>
        @endforeach
    </div>

    <div class="flex gap-8">
        <div class="min-w-0 flex-1">
            <div class="flex items-center justify-between gap-3">
                <span class="text-body font-semibold text-text">{{ $c['timeline'] }}</span>
                <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none max-sm:hidden">@include('_partials.icon', ['name' => 'plus', 'size' => 14]) {{ $d['addEvent'] }}</span>
            </div>
            @include('_partials.home.product.timeline')
        </div>

        <div class="flex w-72 flex-none flex-col gap-4 max-lg:hidden">
            <div class="{{ $card }}">
                <div class="{{ $cardHead }}"><span class="{{ $cardIcon }}">@include('_partials.icon', ['name' => 'family'])</span> <span class="flex-1">{{ $c['familyTitle'] }}</span> <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $c['add'] }}</span></div>
                @foreach ($family as [$heading, $count, $people])
                    <div class="pb-2 not-last:border-b not-last:border-border">
                        <div class="{{ $group }}">{{ $heading }} <span class="text-small tracking-normal text-text-secondary normal-case">{{ $count }}</span></div>
                        @foreach ($people as [$name, $age])
                            <div class="flex items-center gap-3 px-4 py-1.5 text-base">
                                @include('_partials.home.product.avatar', ['name' => $name, 'size' => 28])
                                <label for="mn-screen-profile" class="{{ $toProfile }} flex-1 font-medium text-text">{{ $name }}</label>
                                <span class="flex items-center gap-1 text-small text-text-muted">@include('_partials.icon', ['name' => 'gift', 'size' => 13]) {{ $age }}</span>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>

            <div class="{{ $card }}">
                <div class="{{ $cardHead }}"><span class="{{ $cardIcon }}">@include('_partials.icon', ['name' => 'people'])</span> <span class="flex-1">{{ $c['groupsTitle'] }}</span> <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $c['addToGroup'] }}</span></div>
                @foreach ($c['groups'] as $g => $item)
                    <div class="flex items-center gap-3 border-border-subtle px-4 py-2.5 not-last:border-b">
                        <div class="min-w-0 flex-1 text-base">
                            <div class="font-semibold text-text">{{ $item['name'] }}</div>
                            <div class="text-small text-text-muted">{{ $item['meta'] }}</div>
                        </div>
                        @if ($g > 0)
                            <span class="rounded-full bg-surface-subtle px-2 py-0.5 text-xs text-text-secondary">{{ $c['left'] }}</span>
                        @endif
                    </div>
                @endforeach
            </div>

            <div class="{{ $card }}">
                <div class="{{ $cardHead }}"><span class="{{ $cardIcon }}">@include('_partials.icon', ['name' => 'reminder'])</span> <span class="flex-1">{{ $c['reminders'] }}</span> <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $c['add'] }}</span></div>
                <div class="flex flex-wrap gap-x-4 border-b border-border px-4 pt-2 text-small font-medium">
                    @foreach ($c['reminderTabs'] as $t => $tab)
                        <span class="-mb-px flex items-center gap-1.5 border-b-2 py-2 {{ $t === 0 ? 'border-text text-text' : 'border-transparent text-text-muted' }}">{{ $tab }} <span class="text-xs text-text-muted">{{ $reminderCounts[$t] }}</span></span>
                    @endforeach
                </div>
                <div class="flex flex-col gap-2 p-4">
                    <span class="text-base font-semibold text-text">{{ $first['title'] }}</span>
                    <span class="w-fit rounded-full border border-danger-edge bg-danger-subtle px-2 py-0.5 text-xs font-medium text-danger">{{ $c['overdue'] }}</span>
                    <span class="flex flex-wrap items-center gap-x-3 text-small text-text-secondary">
                        <span class="flex items-center gap-1">@include('_partials.icon', ['name' => 'clock', 'size' => 13]) {{ $c['reminderWhen'] }}</span>
                        <span class="flex items-center gap-1">@include('_partials.icon', ['name' => 'calendar-repeat', 'size' => 13]) {{ $first['repeat'] }}</span>
                    </span>
                    <span class="flex gap-2 pt-1">
                        <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $copy['reminders']['remembered'] }}</span>
                        <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $copy['reminders']['forgot'] }}</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
