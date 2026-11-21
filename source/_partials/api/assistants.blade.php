@php
    $assistants = $copy['assistants'];

    // The three marks, then a tile for every other client.
    $clients = [['claude', 'Claude'], ['openai', 'ChatGPT'], ['gemini', $assistants['gemini']]];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $assistants['title'] }}</h2>
            <div class="flex flex-col gap-4">
                <p class="{{ $closing }}">{{ $assistants['lead'] }}</p>
                @foreach ($assistants['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
                <a href="{{ $page->links['mcp'] }}" class="{{ $link }}">{{ $assistants['guide'] }}</a>
            </div>
        </div>

        <div role="img" aria-label="{{ $assistants['label'] }}" class="grid gap-4 rounded-lg bg-identity-3/14 p-4 sm:grid-cols-2 md:p-12 lg:grid-cols-4">
            @foreach ($clients as [$name, $label])
                <div class="{{ $window }} flex flex-col gap-3.5 p-5">
                    @include('_partials.api.brand', ['name' => $name, 'size' => 32, 'uid' => 'grid'])
                    <span class="text-copy font-semibold">{{ $label }}</span>
                </div>
            @endforeach
            <div class="flex flex-col gap-3.5 rounded-lg border border-dashed border-border-strong bg-canvas/50 p-5">
                <span class="grid size-8 place-items-center rounded-md border border-border bg-canvas">
                    @include('_partials.icon', ['name' => 'plus', 'size' => 16])
                </span>
                <span class="text-copy font-semibold">{{ $assistants['others'] }}</span>
            </div>
        </div>
    </div>
</section>
