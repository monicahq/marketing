@php($ai = $copy['ai'])

{{-- Deliberately short: the AI memory page tells the rest. --}}
<section class="px-4 py-section-sm md:px-6">
    <div class="{{ $container }} {{ $card }} grid items-start gap-6 p-6 md:p-10 lg:grid-cols-2 lg:gap-14">
        <div class="flex flex-col gap-4">
            <span class="{{ $eyebrow }}">{{ $ai['eyebrow'] }}</span>
            <h2 class="text-heading font-semibold text-balance">{{ $ai['title'] }}</h2>
        </div>
        <div class="flex flex-col gap-3.5">
            @foreach ($ai['body'] as $paragraphText)
                <p class="text-copy text-text-secondary text-pretty">{{ $paragraphText }}</p>
            @endforeach
            <a href="{{ $page->route('aiMemory') }}" class="inline-flex items-center gap-1.5 text-copy font-medium">{{ $ai['link'] }}@include('_partials.icon', ['name' => 'arrow-right', 'size' => 14])</a>
        </div>
    </div>
</section>
