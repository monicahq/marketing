{{-- A card holding one note on a drawn contact page.

     @include('_partials.details.note', ['heading' => 'Dinner on Friday', 'text' => '…', 'when' => 'Added yesterday']) --}}
<div class="{{ $card }}">
    <div class="{{ $cardTitle }}">{{ $heading }}</div>
    <div class="flex flex-col gap-2.5 p-4">
        <p class="{{ $note }}">{{ $text }}</p>
        <span class="{{ $stamp }}">{{ $when }}</span>
    </div>
</div>
