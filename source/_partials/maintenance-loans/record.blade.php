{{-- One job in a possession's Maintenance section, as Erica draws it: its
     type in a tinted chip, its title, its cost, then who performed it, when,
     the condition before and after and the next due date, and the
     description when there is one. The Edit and Delete buttons are left out.
     Reads the page's `$ui`, `$jobs` and shared classes.

     @include('_partials.maintenance-loans.record', ['record' => $copy['records'][0], 'description' => true]) --}}
@php
    $parts = [$ui['performedBy'], $ui['performed'], $ui['condition'], $ui['nextDue']];
@endphp
<div class="{{ $panel }}">
    <div class="flex flex-wrap items-center gap-x-4 gap-y-3 p-4">
        <span class="flex min-w-0 flex-1 flex-wrap items-center gap-2">
            <span class="inline-flex h-7 shrink-0 items-center gap-1.5 rounded-full px-2.5 text-small font-medium {{ $jobs[$record['type']][0] }}">
                <span class="size-1.75 rounded-full {{ $jobs[$record['type']][1] }}"></span>
                {{ $ui[$record['type']] }}
            </span>
            <span class="min-w-0 truncate text-base font-semibold text-text">{{ $record['title'] }}</span>
        </span>
        <span class="flex flex-col gap-0.5 text-end">
            @if ($record['cost'] !== null)
                <span class="text-[18px] font-semibold tracking-[-0.01em] text-text tabular-nums">{{ $record['cost'] }}</span>
                <span class="text-xs text-text-muted">{{ $ui['cost'] }}</span>
            @else
                <span class="text-[18px] font-semibold tracking-[-0.01em] text-text-muted">{{ $ui['noCost'] }}</span>
            @endif
        </span>
    </div>
    <dl class="grid grid-cols-2 border-t border-border">
        @foreach ($record['parts'] as $i => [$value, $isSet])
            <div class="flex min-w-0 flex-col gap-0.75 border-border-subtle px-4 py-3 {{ $i % 2 === 0 ? 'border-e' : '' }} {{ $i < 2 ? 'border-b' : '' }}">
                <dt class="{{ $term }}">{{ $parts[$i] }}</dt>
                <dd class="truncate text-base {{ $isSet ? 'text-text' : 'text-text-muted' }}">{{ $value }}</dd>
            </div>
        @endforeach
    </dl>
    @if (($description ?? true) && $record['description'] !== null)
        <div class="border-t border-border px-4 py-3.5">
            <p class="text-small text-text-secondary text-pretty">{{ $record['description'] }}</p>
        </div>
    @endif
</div>
