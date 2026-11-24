{{-- A contact's timeline as the application draws it: one block per year,
     newest first, with its count, then each life event on the rail: the
     tinted mark of its type, its title and date, its details (a duration or
     a place) and who was there.

     Each type keeps the glyph and the colour LifeEventTypeEnum gives it.
     Literal class strings, so Tailwind's scanner finds them.

     @include('_partials.people.life-event', ['years' => [['year' => '2026', 'count' => '3 entries', 'events' => [...]]]]) --}}
@php
    $types = [
        'meal' => ['food', 'bg-identity-3/12 text-identity-3'],
        'call' => ['phone', 'bg-identity-1/12 text-identity-1'],
        'together' => ['people', 'bg-identity-5/12 text-identity-5'],
        'job' => ['briefcase', 'bg-identity-2/12 text-identity-2'],
        'trip' => ['globe', 'bg-identity-1/12 text-identity-1'],
    ];
@endphp
<div class="flex flex-col gap-6">
    @foreach ($years as $year)
        <div class="flex flex-col gap-2">
            <div class="flex items-baseline gap-2.5 pl-10">
                <span class="text-[15px] font-semibold text-text">{{ $year['year'] }}</span>
                <span class="text-xs text-text-muted">{{ $year['count'] }}</span>
            </div>
            <div class="relative flex flex-col">
                @if (count($year['events']) > 1)
                    <span class="absolute top-5 bottom-5 left-3.75 w-px bg-border"></span>
                @endif
                @foreach ($year['events'] as $event)
                    @php([$icon, $tint] = $types[$event['type']])
                    <div class="relative grid grid-cols-[2rem_minmax(0,1fr)] gap-x-4 py-2">
                        <span class="relative grid size-8 place-items-center rounded-full bg-surface-subtle">
                            <span class="grid size-full place-items-center rounded-full {{ $tint }}">@include('_partials.icon', ['name' => $icon, 'size' => 15])</span>
                        </span>
                        <div class="-ml-2.5 flex min-w-0 flex-col gap-0.5 rounded-lg px-2.5 pt-1.5 pb-2">
                            <p class="flex flex-wrap items-baseline gap-x-2 text-body">
                                <span class="font-medium text-text">{{ $event['title'] }}</span>
                                <span class="text-small text-text-muted">· {{ $event['date'] }}</span>
                            </p>
                            @if (! empty($event['detail']))
                                <p class="text-small text-text-muted">{{ $event['detail'] }}</p>
                            @endif
                            @if (! empty($event['with']))
                                <p class="text-small text-text-muted">{{ $ui['with'] }} @foreach ($event['with'] as $name)<span class="{{ $person }}">{{ $name }}</span>{{ $loop->last ? '' : ', ' }}@endforeach</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
