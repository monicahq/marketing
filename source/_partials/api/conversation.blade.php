@php
    $conversation = $copy['conversation'];

    // The tool each request in `requests` uses, and the glyph beside it.
    $tools = [['search', 'search_contacts'], ['calendar', 'create_life_event'], ['reminder', 'create_reminder']];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $conversation['title'] }}</h2>
            <p class="{{ $closing }}">{{ $conversation['lead'] }}</p>
            @foreach ($conversation['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
        </div>

        {{-- Three things you might ask, and the tool each one reaches. --}}
        <div role="img" aria-label="{{ $conversation['label'] }}" class="flex flex-col gap-3 rounded-lg bg-identity-2/14 p-5 md:p-10">
            <span class="{{ $eyebrow }} text-text-soft">{{ $conversation['examples'] }}</span>
            @foreach ($conversation['requests'] as $r => $request)
                <div class="{{ $window }} flex flex-col gap-2 px-4 py-3.5">
                    <span class="text-copy font-medium">{{ $request }}</span>
                    <span class="{{ $mono }} flex items-center gap-1.5 text-text-muted">
                        @include('_partials.icon', ['name' => $tools[$r][0], 'size' => 13])
                        {{ $tools[$r][1] }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>
</section>
