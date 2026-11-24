{{-- Where a possession is kept now, as the top of its Locations section draws
     it in Erica: the path to the place, then since when, for how long and why.
     Reads the page's `$ui` and its shared classes.

     @include('_partials.possessions.kept-now', ['head' => 'My house › Hallway ›', 'leaf' => 'Bike rack', 'since' => 'Nov 12, 2026', 'length' => '11 days', 'reason' => null]) --}}
<div class="{{ $panel }}">
    <div class="flex flex-wrap items-start gap-x-4 gap-y-3 p-4">
        <span class="{{ $placeMark }}">@include('_partials.icon', ['name' => 'place', 'size' => 16])</span>
        <div class="flex min-w-40 flex-1 flex-col gap-1">
            <span class="{{ $term }}">{{ $ui['keptNowIn'] }}</span>
            <p class="flex flex-wrap items-baseline gap-1.5"><span class="{{ $muted }}">{{ $head }}</span><span class="font-semibold text-text">{{ $leaf }}</span></p>
        </div>
        <span class="{{ $secondary }}">{{ $ui['correct'] }}</span>
    </div>
    <dl class="grid grid-cols-[repeat(auto-fit,minmax(9rem,1fr))] border-t border-border">
        <div class="flex flex-col gap-0.75 border-e border-border px-4 py-3.5"><dt class="{{ $term }}">{{ $ui['since'] }}</dt><dd class="text-small font-semibold text-text">{{ $since }}</dd></div>
        <div class="flex flex-col gap-0.75 border-e border-border px-4 py-3.5"><dt class="{{ $term }}">{{ $ui['timeThere'] }}</dt><dd class="text-small font-semibold text-text">{{ $length }}</dd></div>
        <div class="flex flex-col gap-0.75 px-4 py-3.5"><dt class="{{ $term }}">{{ $ui['why'] }}</dt><dd class="text-small {{ ($reason ?? null) ? 'text-text' : 'text-text-muted' }}">{{ ($reason ?? null) ?: $ui['noReason'] }}</dd></div>
    </dl>
</div>
