{{-- A drawn dropdown, closed: its value and a chevron. `focused` draws the
     ring it has while open.

     @include('_partials.sharing.select', ['value' => 'In 7 days', 'focused' => false]) --}}
<span class="flex items-center justify-between gap-2 rounded-md border bg-canvas px-2.5 py-2 text-base {{ ($focused ?? false) ? 'border-focus ring-3 ring-focus/20' : 'border-border' }}">
    {{ $value }}
    @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14])
</span>
