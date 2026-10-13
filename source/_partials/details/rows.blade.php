{{-- A card of labelled rows on a drawn contact page. A value may carry a
     line break, written as a newline in `lang/`.

     @include('_partials.details.rows', ['heading' => 'Personal details', 'rows' => [['label' => 'Partner', 'value' => 'Joshua']]]) --}}
<div class="{{ $card }}">
    <div class="{{ $cardTitle }}">{{ $heading }}</div>
    {{-- The label column is as wide as its longest label, so a long value
         keeps the room. The rule between rows is drawn on both cells, because
         `divide-y` would also draw one above the first value. --}}
    <div class="grid grid-cols-[auto_minmax(0,1fr)] gap-x-6 px-4 text-base">
        @foreach ($rows as $row)
            @php($rule = $loop->first ? '' : 'border-t border-border-subtle')
            <span class="py-3 text-text-muted {{ $rule }}">{{ $row['label'] }}</span>
            <span class="py-3 font-medium whitespace-pre-line {{ $rule }}">{{ $row['value'] }}</span>
        @endforeach
    </div>
</div>
