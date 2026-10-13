@php
    $people = $copy['people'];

    // One identity colour per kind of person, as the design draws them: the
    // panel is the colour at a low tint, the name is the colour itself.
    // Literal class strings, so Tailwind's scanner finds them.
    $tones = [
        ['panel' => 'bg-identity-7/14', 'name' => 'text-identity-7'],
        ['panel' => 'bg-identity-3/14', 'name' => 'text-identity-3'],
        ['panel' => 'bg-identity-6/14', 'name' => 'text-identity-6'],
    ];
@endphp

<section class="px-4 pt-24 md:px-6 lg:pt-30">
    <div class="{{ $container }} flex flex-col gap-12">
        <h2 class="{{ $title }} text-center">{{ $people['title'] }}</h2>

        <div class="grid gap-5 lg:grid-cols-3">
            @foreach ($people['cards'] as $c => $person)
                <div class="flex flex-col gap-5 rounded-lg p-7 {{ $tones[$c]['panel'] }}">
                    <div class="flex flex-col gap-2">
                        <h3 class="text-xl font-semibold {{ $tones[$c]['name'] }}">{{ $person['title'] }}</h3>
                        <p class="text-copy text-text-soft text-pretty">{{ $person['body'] }}</p>
                    </div>

                    <div role="img" aria-label="{{ $person['label'] }}" class="{{ $window }} mt-auto">
                        <div class="flex gap-4 overflow-x-auto border-b border-border px-4 pt-3 text-xs font-medium">
                            @foreach ($person['tabs'] as $t => $name)
                                <span class="{{ $tab }} {{ $t === 0 ? $tabOn : $tabOff }}">{{ $name }}</span>
                            @endforeach
                        </div>
                        <div class="flex flex-col divide-y divide-border-subtle px-4 pt-1.5 pb-3 text-small">
                            @foreach ($person['rows'] as $row)
                                <div class="flex justify-between gap-3 py-2.25">
                                    <span class="text-text-muted">{{ $row['label'] }}</span>
                                    <span class="text-right font-medium">{{ $row['value'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <p class="{{ $paragraph }} mx-auto max-w-[560px] text-center">{{ $people['close'] }}</p>
    </div>
</section>
