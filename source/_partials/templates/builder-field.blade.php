{{-- One row of the drawn template editor: a field's name, and its type as a
     badge. `selected` draws the row the editor has open.

     @include('_partials.templates.builder-field', ['label' => 'Shoe size', 'type' => 'Number']) --}}
<div class="flex items-center justify-between gap-3 py-3 {{ ($selected ?? false) ? 'mx-2 rounded-md bg-hover px-2 outline-1 -outline-offset-1 outline-border-strong' : 'px-4' }}">
    <span class="text-base font-semibold">{{ $label }}</span>
    <span class="mn-badge mn-badge-neutral">{{ $type }}</span>
</div>
