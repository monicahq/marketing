@php($selection = $copy['selection'])

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $selection['title'] }}</h2>
            <div class="flex flex-col gap-4">
                <p class="{{ $closing }}">{{ $selection['lead'] }}</p>
                @foreach ($selection['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
            </div>
        </div>

        {{-- Two links to Joey's page, each with its own sections, and what
             never goes out on any of them. Rachel's link lists all six
             sections with two ticked; the agent's lists only its two. --}}
        <div role="img" aria-label="{{ $selection['label'] }}" class="grid items-start gap-6 rounded-lg bg-identity-3/14 p-4 md:p-12 lg:grid-cols-2">
            @include('_partials.sharing.link', ['link' => $selection['links'][0], 'sections' => [0, 1, 2, 3, 4, 5], 'ticked' => [0, 1]])

            <div class="flex flex-col gap-6">
                @include('_partials.sharing.link', ['link' => $selection['links'][1], 'sections' => [0, 3], 'ticked' => [0, 3]])

                <div class="{{ $window }} flex flex-col gap-2.5 p-4">
                    <span class="{{ $eyebrow }} text-text-muted">{{ $selection['never'] }}</span>
                    <div class="flex flex-wrap gap-1.5">
                        @foreach ($selection['kept'] as $kept)
                            <span class="mn-chip">{{ $kept }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
