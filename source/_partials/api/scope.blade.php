@php
    $scope = $copy['scope'];

    // What only the web app does gets its own glyph per item, in the order
    // of the last group's `items`; the other two groups are ticks.
    $webIcons = ['layers', 'people', 'link'];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $scope['title'] }}</h2>
            <div class="flex flex-col gap-4">
                <p class="{{ $closing }}">{{ $scope['lead'] }}</p>
                @foreach ($scope['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
            </div>
        </div>

        {{-- What each connection reaches, and what stays in the web app. --}}
        <div role="img" aria-label="{{ $scope['label'] }}" class="grid items-start gap-4 rounded-lg bg-identity-7/14 p-4 md:p-12 lg:grid-cols-3">
            @foreach ($scope['groups'] as $g => $group)
                @php($web = $loop->last)
                <div class="{{ $window }}">
                    <div class="border-b border-border px-4 py-3 text-body font-semibold">{{ $group['title'] }}</div>
                    <div class="flex flex-col py-2">
                        @foreach ($group['items'] as $i => $item)
                            <span class="flex items-center gap-2.5 px-4 py-1.75 text-base {{ $web ? 'text-text-secondary' : '' }}">
                                <span class="flex-none">@include('_partials.icon', ['name' => $web ? $webIcons[$i] : 'check', 'size' => 15])</span>
                                {{ $item }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
