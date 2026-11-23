{{-- A possession's Details panel, as Erica draws it: one captioned band per
     field group of its type, each field a small card in a grid.

     @include('_partials.possessions.fields', ['groups' => [['Identification', [['Brand', 'Brompton'], ...]]]]) --}}
<div class="{{ $panel }}">
    @foreach ($groups as [$group, $fields])
        <div class="border-b border-border bg-surface-subtle px-4 py-2.25"><span class="{{ $caption }}">{{ $group }}</span></div>
        <dl class="grid grid-cols-[repeat(auto-fit,minmax(9rem,1fr))] {{ $loop->last ? '' : 'border-b border-border' }}">
            @foreach ($fields as [$label, $value])
                <div class="flex flex-col gap-0.75 border-e border-border-subtle px-4 py-3">
                    <dt class="{{ $term }}">{{ $label }}</dt>
                    <dd class="text-body text-text">{{ $value }}</dd>
                </div>
            @endforeach
        </dl>
    @endforeach
</div>
