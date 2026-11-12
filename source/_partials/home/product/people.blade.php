{{-- Everybody in the vault, favourites first. --}}
@php
    $p = $copy['people'];
    $filterIcons = ['people', 'star', 'profile'];
    $filterCounts = [24, 3, null];
    $categoryCounts = [11, 3, 4, 6];
    // Name, email, phone and the kind of phone. Nothing here is translated.
    $favourites = [
        ['Chandler Bing', 'chandler.bing@', '+1 212 555 0108', 'mobile'],
        ['Ross Geller', 'ross.geller@', '+1 212 555 0118', 'home'],
        ['Rachel Green', 'rachel.green@', '+1 212 555 0105', 'home'],
    ];
    $everybody = [
        ['Erica Bing', null, null, null],
        ['Helena Bing', 'helena.bing@', '+1 702 555 0170', 'work'],
        ['Jack Bing', null, null, null],
        ['Nora Bing', 'nora.tyler.bing@', '+1 212 555 0160', 'work'],
        ['Frank Buffay Jr.', 'frank.buffay@', '+1 212 555 0150', 'home'],
        ['Phoebe Buffay', 'phoebe.buffay@', '+1 212 555 0116', 'home'],
        ['Ursula Buffay', null, null, null],
        ['Susan Bunch', 'susan.bunch@', '+1 212 555 0112', 'home'],
        ['Richard Burke', 'richard.burke@', '+1 212 555 0121', 'home'],
    ];
    $group = 'flex items-center gap-2 border-b border-border px-4 pt-4 pb-2 text-caption font-medium tracking-[0.08em] text-text-muted uppercase';
@endphp
<div class="flex flex-col gap-4 p-5 md:p-7">
    <div class="flex items-center justify-between gap-3">
        <span class="text-heading-sm font-semibold text-text">{{ $p['title'] }}</span>
        <span class="flex items-center gap-2">
            <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">@include('_partials.icon', ['name' => 'plus', 'size' => 14]) {{ $p['add'] }}</span>
            <span class="grid size-8 place-items-center rounded-md border border-border text-text-secondary max-sm:hidden">@include('_partials.icon', ['name' => 'menu'])</span>
        </span>
    </div>

    <div class="flex items-center gap-2">
        @foreach ($p['filters'] as $f => $filter)
            <span class="flex flex-none items-center gap-1.5 rounded-full border px-3 py-1 text-small font-medium {{ $f === 0 ? 'border-text bg-primary text-on-primary' : 'border-border text-text-secondary' }} {{ $f === 2 ? 'max-sm:hidden' : '' }}">
                @include('_partials.icon', ['name' => $filterIcons[$f], 'size' => 14])
                {{ $filter }}
                @if ($filterCounts[$f])
                    <span class="opacity-70">{{ $filterCounts[$f] }}</span>
                @endif
            </span>
        @endforeach
        <span class="ml-auto flex h-8 w-60 items-center gap-2 rounded-md border border-border px-2.5 text-small text-text-muted max-xl:hidden">{{ $p['searchNames'] }}</span>
    </div>

    <div class="flex flex-col gap-2 max-md:hidden">
        <span class="text-small font-medium text-text">{{ $p['categories'] }}</span>
        <div class="flex flex-wrap items-center gap-2">
            @foreach ($p['categoryNames'] as $c => $category)
                <span class="flex items-center gap-2 rounded-md border border-border px-2.5 py-1 text-small text-text">
                    <span class="size-3.5 rounded-xs border border-border-strong"></span>
                    {{ $category }} <span class="text-text-muted">{{ $categoryCounts[$c] }}</span>
                </span>
            @endforeach
            <span class="rounded-md border border-border-strong px-2.5 py-1 text-small font-medium text-text max-lg:hidden">{{ $p['show'] }}</span>
        </div>
    </div>

    <div class="{{ $card }} overflow-hidden">
        <div class="grid grid-cols-[1fr_auto] gap-4 border-b border-border px-4 py-2.5 text-small text-text-muted lg:grid-cols-[1.6fr_1fr_1.3fr_0.8fr]">
            <span class="flex items-center gap-1 font-medium text-text">{{ $p['columns'][0] }} @include('_partials.icon', ['name' => 'chevron-down', 'size' => 12])</span>
            <span class="max-lg:hidden">{{ $p['columns'][1] }}</span>
            <span class="max-lg:hidden">{{ $p['columns'][2] }}</span>
            <span>{{ $p['columns'][3] }}</span>
        </div>
        @foreach ([[$p['favourites'], $favourites, 3], [$p['everybodyElse'], $everybody, 21]] as [$heading, $rows, $count])
            <div class="{{ $group }}">{{ $heading }} <span class="text-small tracking-normal text-text-secondary normal-case">{{ $count }}</span></div>
            @foreach ($rows as [$name, $email, $phone, $kind])
                <div class="grid grid-cols-[1fr_auto] items-center gap-4 border-b border-border-subtle px-4 py-2.5 text-base lg:grid-cols-[1.6fr_1fr_1.3fr_0.8fr]">
                    <label for="mn-screen-profile" class="{{ $toProfile }} flex min-w-0 items-center gap-3 font-semibold text-text">@include('_partials.home.product.avatar', ['name' => $name, 'size' => 30]) <span class="truncate">{{ $name }}</span></label>
                    <span class="truncate text-text-secondary max-lg:hidden">{{ $email ? $email . '…' : '—' }}</span>
                    <span class="truncate text-text-secondary max-lg:hidden">{{ $phone ? $phone . ' (' . $p['phoneKinds'][$kind] . ')' : '—' }}</span>
                    <span class="text-text-muted">{{ $p['notYet'] }}</span>
                </div>
            @endforeach
        @endforeach
    </div>
</div>
