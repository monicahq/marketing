@php($problem = $copy['problem'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex flex-col gap-5">
            <h2 class="{{ $title }}">{{ $problem['title'] }}</h2>
            @foreach ($problem['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
            <p class="{{ $closing }} font-semibold">{{ $problem['closing'] }}</p>
        </div>

        @include('_partials.ai-memory.illustration', ['item' => $copy['illustrations']['problem'], 'frame' => 'aspect-square max-h-[440px]'])
    </div>
</section>
