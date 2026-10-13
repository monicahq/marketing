{{-- A drawn field left empty, showing its placeholder in the muted colour an
     empty input gives it. Otherwise the same as `_partials.drawn-field`.

     @include('_partials.languages.placeholder-field', ['label' => 'Suffix', 'value' => 'Jr, PhD']) --}}
<div class="mn-field min-w-0">
    <span class="mn-label">
        {{ $label }}
        @isset($optional)
            <span class="font-normal text-text-muted">{{ $optional }}</span>
        @endisset
    </span>
    <span class="mn-control flex items-center text-text-muted">
        <span class="truncate">{{ $value }}</span>
    </span>
</div>
