{{-- One option of a drawn radio group: the dot, a title and a hint under it.
     `selected` fills the dot and tints the row.

     @include('_partials.relationships.choice', ['option' => ['title' => '…', 'hint' => '…'], 'selected' => true]) --}}
<div class="flex gap-3 rounded-lg border px-3.5 py-3 {{ $selected ? 'border-border-strong bg-hover' : 'border-border' }}">
    <span class="mt-0.5 size-4 flex-none rounded-full {{ $selected ? 'border-5 border-text' : 'border border-border-strong' }}"></span>
    <div class="flex flex-col gap-0.5">
        <span class="text-body">{{ $option['title'] }}</span>
        <span class="{{ $stamp }}">{{ $option['hint'] }}</span>
    </div>
</div>
