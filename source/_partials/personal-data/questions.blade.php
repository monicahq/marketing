@php
    $questions = $copy['questions'];

    // Per question: the kind of record that answers it, as its glyph and the
    // colour of that kind in the organize section (belongings, people,
    // belongings, knowledge).
    $looks = [['tag', 2], ['people', 0], ['file', 2], ['journal', 1]];
@endphp

<section class="{{ $section }} {{ $band }}">
    <div class="{{ $container }} flex flex-col gap-14">
        <div class="flex max-w-[720px] flex-col gap-5">
            <span class="{{ $eyebrow }}">{{ $questions['eyebrow'] }}</span>
            <h2 class="{{ $title }}">{{ $questions['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $questions['lead'] }}</p>
        </div>

        <div class="grid gap-5 lg:grid-cols-2">
            @foreach ($questions['items'] as $i => $item)
                @php([$icon, $t] = $looks[$i])
                <div class="{{ $card }} flex flex-col gap-4 p-7">
                    <div class="flex items-start gap-3">
                        <span class="grid size-8 flex-none place-items-center rounded-full {{ $tones[$t]['panel'] }} {{ $tones[$t]['ink'] }}">@include('_partials.icon', ['name' => $icon, 'size' => 16])</span>
                        <h3 class="pt-0.5 text-heading-sm font-semibold text-balance">{{ $item['q'] }}</h3>
                    </div>
                    <p class="text-copy text-text-secondary text-pretty sm:pl-11">{{ $item['a'] }}</p>
                </div>
            @endforeach
        </div>

        <p class="{{ $closing }} max-w-[640px]">{{ $questions['closing'] }}</p>
    </div>
</section>
