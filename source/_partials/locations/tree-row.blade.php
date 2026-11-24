{{-- One location in the tree in settings, as Erica draws it: indented by
     its depth, its icon (a house for a place with an address, layers for a
     place inside another), its name, the line under it, and its controls.
     Erica nests the rows in lists; drawn flat here, the indent says the same.
     The indent is the one Erica uses on a narrow screen, because this drawing
     always sits in a narrow column.

     @include('_partials.locations.tree-row', ['name' => 'Living room', 'depth' => 1, 'line' => 'At the address of My house']) --}}
<div
    class="flex items-center gap-3 py-2.5 pe-3 ps-[calc(12px+var(--location-depth)*14px)] {{ $first ?? false ? '' : 'border-t border-border' }}"
    style="--location-depth: {{ $depth }}"
>
    <div class="flex min-w-0 flex-1 items-center gap-3">
        <span class="grid size-8 flex-none place-items-center rounded-md border border-border bg-surface-subtle text-text-muted">@include('_partials.icon', ['name' => $depth === 0 ? 'home' : 'layers', 'size' => 16])</span>
        <span class="min-w-0 flex-1">
            <span class="block truncate font-semibold text-text">{{ $name }}</span>
            <span class="mt-px block {{ $muted }} text-pretty">{{ $line }}</span>
        </span>
    </div>
    <div class="ms-auto flex flex-none items-center gap-1 max-sm:hidden">
        <span class="{{ $secondary }}">{{ $ui['edit'] }}</span>
        <span class="{{ $iconButton }}">@include('_partials.icon', ['name' => 'plus', 'size' => 15])</span>
        <span class="{{ $iconButton }}">@include('_partials.icon', ['name' => 'close', 'size' => 15])</span>
    </div>
</div>
