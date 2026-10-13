{{-- One row of a drawn contact page: what the field is called, and what has
     been written in it. A list of values is drawn as chips, the way the
     product shows a multiple choice field.

     @include('_partials.templates.field', ['label' => 'Coffee order', 'value' => 'Flat white']) --}}
<div class="grid grid-cols-[minmax(96px,140px)_minmax(0,1fr)] items-center gap-3 py-2.5 text-base">
    <span class="text-text-muted">{{ $label }}</span>
    @if (is_array($value))
        <span class="flex flex-wrap gap-1.5">
            @foreach ($value as $choice)
                <span class="rounded-full bg-hover px-2.5 py-0.5 text-xs font-medium">{{ $choice }}</span>
            @endforeach
        </span>
    @else
        <span class="font-medium">{{ $value }}</span>
    @endif
</div>
