{{-- Life events, year by year, as the dashboard and a contact page both draw them.
     $timeline: a list of ['year', 'count', 'events'], each event carrying its copy
     plus 'icon', 'tint' and 'with' (first names, each opening a contact page).
     A note has an empty place and nobody with it, and draws neither line. --}}
@foreach ($timeline as $year)
    <div class="mt-6 flex items-baseline gap-2 pl-10">
        <span class="text-body font-semibold text-text">{{ $year['year'] }}</span>
        <span class="text-small text-text-muted">{{ $year['count'] }}</span>
    </div>
    @foreach ($year['events'] as $event)
        <div class="mt-4 flex gap-4">
            <div class="flex flex-none flex-col items-center gap-1">
                <span class="grid size-7 place-items-center rounded-full {{ $event['tint'] }}">@include('_partials.icon', ['name' => $event['icon'], 'size' => 14])</span>
                <span class="w-px flex-1 bg-border"></span>
            </div>
            <div class="min-w-0 pb-1 text-base">
                <div class="font-medium text-text">{{ $event['title'] }} <span class="font-normal text-text-muted">· {{ $event['date'] }}</span></div>
                @if ($event['place'])
                    <div class="text-text-muted">{{ $event['place'] }}</div>
                @endif
                <div class="text-text-muted">{{ $event['body'] }}</div>
                @if ($event['with'])
                    <div class="text-text-muted">{{ $copy['dashboard']['with'] }} @foreach ($event['with'] as $name)<label for="mn-screen-profile" class="{{ $toProfile }} text-text underline decoration-border-strong underline-offset-2">{{ $name }}</label>{{ $loop->last ? '' : ', ' }}@endforeach</div>
                @endif
            </div>
        </div>
    @endforeach
@endforeach
