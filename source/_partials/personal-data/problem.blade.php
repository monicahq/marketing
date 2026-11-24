@php
    $problem = $copy['problem'];
    $icons = ['layers', 'search', 'link'];
@endphp

<section class="{{ $section }} {{ $band }}">
    <div class="{{ $container }} flex flex-col gap-16">
        <div class="grid gap-14 lg:grid-cols-2">
            <div class="flex flex-col gap-5">
                <span class="{{ $eyebrow }}">{{ $problem['eyebrow'] }}</span>
                <h2 class="{{ $title }}">{{ $problem['title'] }}</h2>
                <p class="{{ $paragraph }}">{{ $problem['body'] }}</p>
                <p class="{{ $closing }}">{{ $problem['lead'] }}</p>
            </div>

            <ul class="flex flex-col gap-3">
                @foreach ($problem['items'] as $i => $item)
                    <li class="{{ $card }} grid grid-cols-[40px_minmax(0,1fr)] gap-4 px-5.5 py-5">
                        <span class="{{ $iconTile }}">@include('_partials.icon', ['name' => $icons[$i], 'size' => 18])</span>
                        <div class="flex flex-col gap-1.5">
                            <h3 class="text-copy font-semibold">{{ $item['title'] }}</h3>
                            <p class="text-body text-text-secondary text-pretty">{{ $item['body'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <p class="text-heading font-semibold text-balance">{{ $problem['closing'] }} <span class="text-text-muted">{{ $problem['closingMuted'] }}</span></p>
    </div>
</section>
