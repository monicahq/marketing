{{-- The top of a possession's page, as Erica draws it: its type in a tinted
     pill and where it is kept, its name, then its tags.

     @include('_partials.possessions.header', ['type' => 'Bicycles', 'icon' => 'activity', 'tint' => 'rust', 'name' => 'City bike', 'leaf' => 'Bike rack', 'at' => 'at My house', 'tags' => [['Commute', 'teal']], 'edit' => true]) --}}
<div class="flex flex-wrap items-start gap-5">
    <div class="flex min-w-0 flex-1 flex-col gap-2.5">
        <p class="flex flex-wrap items-center gap-2 text-small">
            <span class="inline-flex items-center gap-1.5 rounded-full py-0.5 ps-1 pe-2.5 font-medium {{ $tints[$tint] }}">
                <span class="grid size-5 place-items-center">@include('_partials.icon', ['name' => $icon, 'size' => 14])</span>
                {{ $type }}
            </span>
            @if ($leaf)
                <span class="text-text-muted">{{ $ui['keptIn'] }}</span>
                <span class="text-text-secondary">{{ $leaf }}</span>
                <span class="text-text-muted">{{ $at }}</span>
            @endif
        </p>
        <span class="{{ ($big ?? true) ? 'text-[28px]' : 'text-[20px]' }} leading-tight font-semibold tracking-[-0.03em] text-text">{{ $name }}</span>
        @if ($tags !== null)
            <div class="mt-0.5 flex flex-wrap items-center gap-1.5">
                @foreach ($tags as [$tag, $colour])
                    <span class="inline-flex h-7 items-center gap-1.5 rounded-full ps-2.5 pe-0.5 text-small font-medium {{ $tints[$colour] }}">
                        <span class="size-1.75 rounded-full {{ $dots[$colour] }}"></span>
                        {{ $tag }}
                        <span class="grid size-5.5 place-items-center rounded-full text-text-muted">@include('_partials.icon', ['name' => 'close', 'size' => 12])</span>
                    </span>
                @endforeach
                <span class="flex h-7 items-center gap-1.5 rounded-full border border-dashed border-border-strong px-3 text-xs font-medium text-text-secondary">@include('_partials.icon', ['name' => 'plus', 'size' => 13]) {{ $ui['addTag'] }}</span>
            </div>
        @endif
    </div>
    @if ($edit ?? false)
        <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none max-sm:hidden">{{ $ui['edit'] }} @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14])</span>
    @endif
</div>
