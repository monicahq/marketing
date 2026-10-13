{{-- One sharing link's sections, ticked or not. `sections` are places in the
     copy's `sections`, `ticked` the ones the link shows. The last section,
     the sensitive fields, carries its badge.

     @include('_partials.sharing.link', ['link' => [...], 'sections' => [0, 3], 'ticked' => [0, 3]]) --}}
@php($check = 'grid size-4 flex-none place-items-center rounded-xs')

<div class="{{ $window }}">
    <div class="{{ $windowTitle }}">
        <span class="text-copy font-semibold">{{ $link['title'] }}</span>
        <span class="text-small text-text-secondary">{{ $link['meta'] }}</span>
    </div>
    <div class="py-2">
        @foreach ($sections as $s)
            <div class="flex flex-wrap items-center gap-3 px-4 py-2 text-base">
                @if (in_array($s, $ticked, true))
                    <span class="{{ $check }} bg-primary text-text-inverse">
                        @include('_partials.icon', ['name' => 'check', 'size' => 12])
                    </span>
                    <span class="font-medium">{{ $copy['sections'][$s] }}</span>
                @else
                    <span class="{{ $check }} border border-border-strong"></span>
                    <span class="text-text-secondary">{{ $copy['sections'][$s] }}</span>
                @endif
                @if ($s === array_key_last($copy['sections']))
                    <span class="mn-badge mn-badge-danger">{{ $copy['selection']['sensitive'] }}</span>
                @endif
            </div>
        @endforeach
    </div>
</div>
