{{-- A group's page: Central Perk regulars, opened from Groups in the sidebar
     and from the group's name on Chandler Bing's page. --}}
@php
    $g = $copy['group'];
    $c = $copy['profile'];
    $members = ['Monica Geller', 'Rachel Green', 'Ross Geller', 'Chandler Bing', 'Joey Tribbiani', 'Phoebe Buffay', 'Gunther'];
    $tabCounts = [null, 7, 0];
    $everybody = ['Monica', 'Chandler', 'Rachel', 'Ross', 'Joey', 'Phoebe', 'Gunther'];

    $timeline = $timelineFrom($g['years'], ['2004', '1999', '1994'], [
        [
            ['activity', 'bg-identity-2/12 text-identity-2', $everybody],
            ['note', 'bg-identity-8/12 text-identity-8', []],
        ],
        [['activity', 'bg-identity-2/12 text-identity-2', ['Joey', 'Rachel', 'Chandler', 'Monica']]],
        [['activity', 'bg-identity-2/12 text-identity-2', ['Rachel', 'Monica', 'Ross', 'Chandler', 'Joey', 'Phoebe']]],
    ]);

    $cardHead = 'flex flex-wrap items-center gap-x-3 gap-y-2 border-b border-border px-4 py-3 text-body font-semibold text-text';
    $cardIcon = 'grid size-8 flex-none place-items-center rounded-md border border-border text-text-secondary';
@endphp
<div class="flex flex-col gap-5 p-5 md:p-7">
    <div class="flex items-start justify-between gap-4">
        <div class="flex min-w-0 flex-col gap-1.5">
            <span class="text-heading-sm font-semibold text-text">{{ $g['title'] }}</span>
            <p class="max-w-110 text-base text-text-secondary">{{ $g['description'] }}</p>
        </div>
        <span class="flex flex-none items-center gap-2">
            <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none max-lg:hidden">{{ $g['edit'] }}</span>
            <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none max-md:hidden">@include('_partials.icon', ['name' => 'plus', 'size' => 14]) {{ $copy['dashboard']['add'] }}</span>
            <span class="grid size-8 place-items-center rounded-md border border-border text-text-secondary">@include('_partials.icon', ['name' => 'menu'])</span>
        </span>
    </div>
    <div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-base text-text-secondary">
        <span class="flex items-center gap-3">
            <span class="flex">
                @foreach ($members as $m => $name)
                    <label for="mn-screen-profile" class="{{ $toProfile }} flex rounded-full bg-canvas ring-2 ring-canvas {{ $m > 0 ? '-ml-1.5' : '' }}">@include('_partials.home.product.avatar', ['name' => $name, 'size' => 28])</label>
                @endforeach
            </span>
            {{ $g['members'] }}
        </span>
        <span class="flex items-center gap-1.5">@include('_partials.icon', ['name' => 'calendar', 'size' => 14, 'class' => 'text-text-muted']) {{ $g['since'] }}</span>
    </div>

    <div class="flex gap-5 border-b border-border text-base font-medium">
        @foreach ($g['tabs'] as $t => $tab)
            <span class="-mb-px flex flex-none items-center gap-2 border-b-2 px-1 pb-2.5 {{ $t === 0 ? 'border-text text-text' : 'border-transparent text-text-muted' }}">
                @if ($t === 0)
                    @include('_partials.icon', ['name' => 'family', 'size' => 14])
                @endif
                {{ $tab }}
                @if ($tabCounts[$t] !== null)
                    <span class="text-small text-text-muted">{{ $tabCounts[$t] }}</span>
                @endif
            </span>
        @endforeach
    </div>

    <div class="flex gap-6">
        <div class="flex min-w-0 flex-1 flex-col gap-5">
            <div class="{{ $card }} overflow-hidden">
                <div class="flex items-center gap-2 border-b border-border px-3 py-2 text-base font-medium">
                    <span class="flex items-center gap-1.5 px-2 py-1 text-text-secondary">@include('_partials.icon', ['name' => 'activity', 'size' => 14]) {{ $g['activity'] }}</span>
                    <span class="flex items-center gap-1.5 rounded-md border border-text px-2 py-1 text-text">@include('_partials.icon', ['name' => 'note', 'size' => 14]) {{ $g['note'] }}</span>
                </div>
                <div class="flex flex-col gap-1.5 px-4 py-3">
                    <span class="text-small font-medium text-text">{{ $g['question'] }}</span>
                    <span class="h-14 rounded-md border border-border px-3 py-2 text-base text-text-muted">{{ $g['placeholder'] }}</span>
                </div>
                <div class="flex items-center justify-between gap-4 border-t border-border bg-surface-subtle px-4 py-2.5">
                    <span class="max-w-90 text-small text-text-muted max-sm:hidden">{{ $g['savedOn'] }}</span>
                    <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">{{ $g['save'] }}</span>
                </div>
            </div>

            <div>
                <div class="flex flex-wrap items-baseline gap-x-3">
                    <span class="text-body font-semibold text-text">{{ $g['history'] }}</span>
                    <span class="text-small text-text-muted">{{ $g['historyHint'] }}</span>
                </div>
                @include('_partials.home.product.timeline')
            </div>
        </div>

        <div class="flex w-72 flex-none flex-col gap-4 max-lg:hidden">
            <div class="{{ $card }}">
                <div class="{{ $cardHead }}"><span class="{{ $cardIcon }}">@include('_partials.icon', ['name' => 'reminder'])</span> <span class="flex-1">{{ $c['reminders'] }}</span> <span class="flex items-center gap-1 text-small font-medium text-text-secondary">@include('_partials.icon', ['name' => 'plus', 'size' => 14]) {{ $c['add'] }}</span></div>
                <p class="p-4 text-base text-text-muted">{{ $g['remindersEmpty'] }}</p>
            </div>
            <div class="{{ $card }}">
                <div class="{{ $cardHead }}"><span class="{{ $cardIcon }}">@include('_partials.icon', ['name' => 'file'])</span> <span class="flex-1">{{ $g['files'] }}</span> <span class="flex items-center gap-1 text-small font-medium text-text-secondary">@include('_partials.icon', ['name' => 'plus', 'size' => 14]) {{ $c['add'] }}</span></div>
                <p class="p-4 text-base text-text-muted">{{ $g['filesEmpty'] }}</p>
            </div>
        </div>
    </div>
</div>
