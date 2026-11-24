{{-- The vault's reminders, coming up, grouped by when each one is sent. --}}
@php
    $r = $copy['reminders'];
    $tabCounts = [13, 5, 4];
    // Per item, in the order of `items` in lang/: the day, who it is about, and its icon.
    $items = [
        [11, 'Chandler Bing', 'calendar'],
        [11, 'Chandler Bing', 'calendar'],
        [17, 'Chandler Bing', 'calendar'],
        [9, 'Joey Tribbiani', 'gift'],
        [16, 'Phoebe Buffay', 'gift'],
    ];
@endphp
<div class="flex flex-col gap-5 p-5 md:p-7">
    <span class="text-heading-sm font-semibold text-text">{{ $copy['nav']['reminders'] }}</span>
    <div class="flex gap-5 border-b border-border text-base font-medium">
        @foreach ($r['tabs'] as $t => $tab)
            <span class="-mb-px flex flex-none items-center gap-2 border-b-2 px-1 pb-2.5 {{ $t === 0 ? 'border-text text-text' : 'border-transparent text-text-muted' }}">{{ $tab }} <span class="text-small text-text-muted">{{ $tabCounts[$t] }}</span></span>
        @endforeach
    </div>
    <div class="flex items-center gap-2 text-small text-text-muted">
        {{ $r['groupedBy'] }}
        <span class="rounded-md border border-border bg-canvas px-2.5 py-1 font-medium text-text shadow-panel">{{ $r['byWhen'] }}</span>
        <span class="px-2.5 py-1 font-medium text-text-secondary">{{ $r['byContact'] }}</span>
    </div>

    @foreach ($r['items'] as $i => $item)
        @php [$day, $name, $icon] = $items[$i]; @endphp
        @if ($i === 0)
            <div class="flex flex-col gap-3 rounded-lg border border-warning/30 bg-warning-subtle p-3">
                <div class="flex items-center gap-2 text-caption">
                    @include('_partials.icon', ['name' => 'clock', 'size' => 14, 'class' => 'text-warning'])
                    <span class="font-semibold tracking-[0.08em] text-warning uppercase">{{ $r['overdue'] }}</span>
                    <span class="text-small text-text-muted">{{ $r['overdueCount'] }}</span>
                </div>
        @elseif ($i === 1)
            <div class="flex items-center gap-2 pt-1 text-caption">
                <span class="font-semibold tracking-[0.08em] text-text-secondary uppercase">{{ $r['upcoming'] }}</span>
                <span class="text-small text-text-muted">{{ $r['upcomingCount'] }}</span>
            </div>
        @endif

        <div class="{{ $card }} flex items-center gap-5 px-4 py-3.5">
            <div class="flex w-22 flex-none flex-col items-center gap-1.5">
                <span class="flex w-14 flex-col items-center rounded-md border border-dashed border-border-strong py-1.5">
                    <span class="text-caption font-semibold tracking-[0.08em] text-text-muted uppercase">{{ $item['month'] }}</span>
                    <span class="text-xl font-semibold text-text tabular-nums">{{ $day }}</span>
                </span>
                <span class="flex items-center gap-1 text-xs whitespace-nowrap text-text-muted">@include('_partials.icon', ['name' => 'calendar-repeat', 'size' => 12]) {{ $item['repeat'] }}</span>
            </div>
            <div class="min-w-0 flex-1">
                <label for="mn-screen-profile" class="{{ $toProfile }} flex w-fit items-center gap-2 text-base font-semibold text-text">
                    @include('_partials.home.product.avatar', ['name' => $name, 'size' => 26])
                    {{ $name }}
                    @include('_partials.icon', ['name' => 'chevron-right', 'size' => 14, 'class' => 'text-text-muted'])
                </label>
                <div class="mt-1 flex flex-wrap items-center gap-x-1.5 text-base text-text-secondary">
                    @include('_partials.icon', ['name' => $icon, 'size' => 14, 'class' => 'text-text-muted'])
                    {{ $item['title'] }} ·
                    <span class="underline decoration-dotted underline-offset-4 {{ $i === 0 ? 'text-warning' : '' }}">{{ $item['when'] }}</span>
                </div>
            </div>
            <div class="flex flex-none items-center gap-2 max-lg:hidden">
                @if ($i === 0)
                    <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $r['remembered'] }}</span>
                    <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $r['forgot'] }}</span>
                @endif
                <span class="flex items-center gap-1 px-2 text-small font-medium text-text-secondary">{{ $r['more'] }} @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14])</span>
            </div>
        </div>

        @if ($i === 0)
            </div>
        @endif
    @endforeach
</div>
