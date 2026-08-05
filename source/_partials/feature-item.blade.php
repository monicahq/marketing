{{--
    An icon in a bordered square beside a title and a sentence. Two arrangements:
    `inline` sets the glyph to the left (the showcase column), `stacked` puts it
    above the title over a top rule (the v3 grid).

    @include('_partials.feature-item', ['feature' => $feature, 'layout' => 'stacked', 'rule' => 'quiet'])
--}}
@php
    $featureLayout = $layout ?? 'inline';
    $featureRule = ($rule ?? 'standard') === 'quiet' ? 'border-border-subtle' : 'border-border';
    $glyph = 'inline-flex size-9 flex-none items-center justify-center rounded-md border border-border text-text';
@endphp

@if ($featureLayout === 'inline')
    <div class="flex gap-4">
        <span class="{{ $glyph }}">
            @include('_partials.icon', ['name' => $feature['icon'], 'size' => 18])
        </span>
        <span class="min-w-0">
            <span class="block text-title font-semibold">{{ $feature['title'] }}</span>
            <span class="mt-2 block text-copy text-text-secondary text-pretty">{{ $feature['body'] }}</span>
        </span>
    </div>
@else
    <div class="border-t pt-5 {{ $featureRule }}">
        <span class="{{ $glyph }}">
            @include('_partials.icon', ['name' => $feature['icon'], 'size' => 18])
        </span>
        <h3 class="mt-4 text-title font-semibold">{{ $feature['title'] }}</h3>
        <p class="mt-2 text-copy text-text-secondary text-pretty">{{ $feature['body'] }}</p>
    </div>
@endif
