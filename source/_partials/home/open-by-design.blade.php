@php
    $copy = $page->t('home.open');

    // One glyph and one identity colour per point, in the order of the copy.
    $marks = [
        ['icon' => 'file', 'tone' => 'text-identity-2'],
        ['icon' => 'vault', 'tone' => 'text-identity-1'],
        ['icon' => 'lock', 'tone' => 'text-identity-7'],
        ['icon' => 'layers', 'tone' => 'text-identity-3'],
    ];
@endphp

<section class="px-4 pb-30 md:px-6">
    <div class="mx-auto flex max-w-page flex-wrap gap-12 border-t border-border pt-18">
        <div class="flex flex-[1_1_300px] flex-col gap-3.5">
            <h2 class="text-display-section font-semibold">{{ $copy['title'] }}</h2>
            <p class="max-w-[360px] text-copy-lg text-text-secondary">{{ $copy['lede'] }}</p>
        </div>

        <div class="grid flex-[2_1_520px] grid-cols-[repeat(auto-fit,minmax(230px,1fr))] gap-x-10 gap-y-8">
            @foreach ($copy['items'] as $i => $item)
                <div class="flex flex-col gap-2">
                    @include('_partials.icon', ['name' => $marks[$i]['icon'], 'size' => 20, 'class' => $marks[$i]['tone']])
                    <h3 class="text-lede-sm font-semibold tracking-[-0.02em]">{{ $item['title'] }}</h3>
                    <p class="text-body text-text-secondary">{{ $item['body'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
