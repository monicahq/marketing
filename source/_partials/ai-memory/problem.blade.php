@php($problem = $copy['problem'])

<section class="{{ $section }}">
    <div class="{{ $container }} grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
        <h2 class="{{ $title }}">{{ $problem['title'] }}</h2>
        <div class="flex flex-col gap-4">
            @foreach ($problem['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
            <p class="{{ $closing }} font-semibold">{{ $problem['closing'] }}</p>
        </div>
    </div>
</section>
