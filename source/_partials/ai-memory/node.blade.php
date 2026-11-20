{{-- One record in the structure diagram: a glyph or a person's initials,
     what kind of record it is, its name, and optionally one more detail. --}}
<div class="mn-pop flex w-full max-w-[300px] flex-col gap-2 px-4 py-3">
    <div class="flex items-center gap-2.5">
        @isset($person)
            @include('_partials.avatar-initials', ['name' => $person, 'size' => 32])
        @else
            <span class="grid size-8 flex-none place-items-center rounded-md border border-border bg-surface-subtle">@include('_partials.icon', ['name' => $icon, 'size' => 16])</span>
        @endisset
        <div class="flex min-w-0 flex-col gap-px">
            <span class="text-xs text-text-muted">{{ $kind }}</span>
            <span class="text-base font-semibold">{{ $name }}</span>
        </div>
    </div>
    @isset($detail)
        <span class="flex items-center gap-1 text-xs text-text-secondary">@include('_partials.icon', ['name' => 'place', 'size' => 12]){{ $detail }}</span>
    @endisset
</div>
