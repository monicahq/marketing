{{-- One stay in a possession's "Every stay" list, as Erica draws it: the
     place, whether the possession is there now, the dates and the reason.
     Reads the page's `$ui` and its shared classes.

     @include('_partials.possessions.stay', ['stay' => ['head' => 'My house ›', 'leaf' => 'Storage space', 'period' => '…', 'length' => '…'], 'current' => false]) --}}
<div class="{{ $panel }} flex flex-wrap items-start gap-x-4 gap-y-3 p-4">
    <span class="{{ $placeMark }}">@include('_partials.icon', ['name' => 'place', 'size' => 15])</span>
    <div class="flex min-w-40 flex-1 flex-col gap-1">
        <div class="flex flex-wrap items-baseline gap-1.5">
            <span class="{{ $muted }}">{{ $stay['head'] }}</span>
            <span class="font-semibold text-text">{{ $stay['leaf'] }}</span>
            @if ($current)<span class="{{ $badge }} bg-success-subtle text-success">{{ $ui['hereNow'] }}</span>@endif
        </div>
        <span class="text-small text-text-secondary">{{ $stay['period'] }} <span class="text-text-muted">· {{ $stay['length'] }}</span></span>
        <span class="text-small {{ ($stay['reason'] ?? null) ? 'text-text-secondary' : 'text-text-muted' }}">{{ ($stay['reason'] ?? null) ?: $ui['noReason'] }}</span>
    </div>
    <span class="flex gap-1.5 max-sm:hidden"><span class="{{ $secondary }}">{{ $ui['correct'] }}</span><span class="{{ $ghost }}">{{ $ui['delete'] }}</span></span>
</div>
