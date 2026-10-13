{{-- One entry on a drawn timeline: the event's icon on the line, then its
     title and date, and whatever else was recorded. `place`, `note` and
     `with` are optional; `last` stops the line under the icon.

     @include('_partials.timeline.entry', ['icon' => 'gift', 'tile' => $tiles[4], 'event' => [...], 'with' => ['Rachel'], 'last' => false]) --}}
<div class="flex gap-4">
    <div class="flex flex-none flex-col items-center">
        <span class="grid size-8 place-items-center rounded-full {{ $tile }}">
            @include('_partials.icon', ['name' => $icon, 'size' => 15])
        </span>
        @unless ($last ?? false)
            <span class="w-px flex-1 bg-border"></span>
        @endunless
    </div>
    <div class="flex min-w-0 flex-col gap-1 pt-1.5 text-base {{ ($last ?? false) ? 'pb-2' : 'pb-5.5' }}">
        <span><strong class="font-semibold">{{ $event['title'] }}</strong> <span class="text-text-muted">· {{ $event['date'] }}</span></span>
        @isset($event['place'])
            <span class="text-text-muted">{{ $event['place'] }}</span>
        @endisset
        <span class="text-text-secondary">{{ $event['note'] }}</span>
        @isset($with)
            <span class="text-text-muted">{!! strtr(e($copy['with']), [':names' => implode(', ', array_map(fn ($name) => '<span class="text-text underline decoration-border-strong underline-offset-3">' . e($name) . '</span>', $with))]) !!}</span>
        @endisset
    </div>
</div>
