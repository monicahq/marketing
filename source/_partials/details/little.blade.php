@php
    $little = $copy['little'];

    // One person per card, each on its own identity colour: the panel is the
    // colour at a low tint, the field name is the colour itself. Literal class
    // strings, so Tailwind's scanner finds them.
    $people = [
        ['name' => 'Rachel Green', 'panel' => 'bg-identity-7/14', 'label' => 'text-identity-7'],
        ['name' => 'Chandler Bing', 'panel' => 'bg-identity-3/14', 'label' => 'text-identity-3'],
        ['name' => 'Ross Geller', 'panel' => 'bg-identity-6/14', 'label' => 'text-identity-6'],
    ];
@endphp

<section class="px-4 pt-24 md:px-6 lg:pt-30">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $little['title'] }}</h2>
            <div class="flex flex-col gap-4">
                <p class="{{ $closing }}">{{ $little['lead'] }}</p>
                <p class="{{ $paragraph }}">{{ $little['body'] }}</p>
            </div>
        </div>

        <div class="grid gap-5 lg:grid-cols-3">
            @foreach ($little['cards'] as $c => $detail)
                <div class="flex rounded-lg p-7 {{ $people[$c]['panel'] }}">
                    <div role="img" aria-label="{{ $detail['label'] }}" class="{{ $window }} flex flex-1 flex-col gap-3.5 p-4.5">
                        <div class="flex items-center gap-2.5">
                            @include('_partials.avatar-initials', ['name' => $people[$c]['name'], 'size' => 28])
                            <span class="text-body font-semibold">{{ $people[$c]['name'] }}</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="{{ $eyebrow }} {{ $people[$c]['label'] }}">{{ $detail['field'] }}</span>
                            <span class="text-lede-sm font-semibold tracking-[-0.01em]">{{ $detail['value'] }}</span>
                        </div>
                        <span class="text-small text-text-secondary">{{ $detail['note'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
