{{--
    An icon in a bordered square beside a title and a sentence. Two arrangements:
    `inline` sets the glyph to the left (the showcase column, the v3 principles),
    `stacked` puts it above the title (the v3 grids).

    `rule` draws a top border: 'standard', 'quiet' or 'none'. Stacked defaults to
    'standard', because the rule is what makes the grid read as columns. Inline
    defaults to 'none', and takes vertical padding when a rule is asked for, so a
    run of them reads as a divided list.

    `number` is the design's 01–06 counter, shown beside the glyph. Stacked only.

    @include('_partials.feature-item', ['feature' => $feature, 'layout' => 'stacked', 'rule' => 'quiet'])
--}}
@php
    $featureLayout = $layout ?? 'inline';
    $featureRule = $rule ?? ($featureLayout === 'stacked' ? 'standard' : 'none');
    $featureRuleClass = match ($featureRule) {
        'standard' => 'border-t border-border',
        'quiet' => 'border-t border-border-subtle',
        default => '',
    };
    $featureNumber = $number ?? null;
    $glyph = 'inline-flex size-9 flex-none items-center justify-center rounded-md border border-border text-text';
@endphp

@if ($featureLayout === 'inline')
    <div class="flex gap-4 {{ $featureRuleClass }} {{ $featureRule === 'none' ? '' : 'py-5' }}">
        <span class="{{ $glyph }}">
            @include('_partials.icon', ['name' => $feature['icon'], 'size' => 18])
        </span>
        <span class="min-w-0">
            <span class="block text-title font-semibold">{{ $feature['title'] }}</span>
            <span class="mt-2 block text-copy text-text-secondary text-pretty">{{ $feature['body'] }}</span>
        </span>
    </div>
@else
    <div class="pt-5 {{ $featureRuleClass }}">
        <span class="flex items-center gap-4">
            <span class="{{ $glyph }}">
                @include('_partials.icon', ['name' => $feature['icon'], 'size' => 18])
            </span>
            @isset($featureNumber)
                <span class="font-mono text-mono text-text-muted">{{ $featureNumber }}</span>
            @endisset
        </span>
        <h3 class="mt-4 text-title font-semibold">{{ $feature['title'] }}</h3>
        <p class="mt-2 text-copy text-text-secondary text-pretty">{{ $feature['body'] }}</p>
    </div>
@endif
