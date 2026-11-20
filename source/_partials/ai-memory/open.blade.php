@php($open = $copy['open'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        @include('_partials.ai-memory.illustration', ['item' => $copy['illustrations']['open'], 'frame' => 'aspect-square max-h-[440px]'])

        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $open['title'] }}</h2>
            <p class="{{ $closing }}">{{ $open['lead'] }}</p>
            @foreach ($open['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
            <p class="{{ $closing }} font-semibold">{{ $open['closing'] }}</p>
            <div class="flex flex-wrap gap-x-6 gap-y-2 pt-1">
                <a href="{{ $page->links['github'] }}" class="inline-flex items-center gap-1.5 text-copy font-medium">{{ $open['github'] }}@include('_partials.icon', ['name' => 'arrow-right', 'size' => 14])</a>
                <a href="{{ $page->links['selfHostingGuide'] }}" class="inline-flex items-center gap-1.5 text-copy font-medium">{{ $open['selfHosting'] }}@include('_partials.icon', ['name' => 'arrow-right', 'size' => 14])</a>
            </div>
        </div>
    </div>
</section>
