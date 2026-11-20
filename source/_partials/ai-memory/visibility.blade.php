@php
    $visibility = $copy['visibility'];

    // The brand mark of each assistant that appears in the drawing.
    $brands = ['Claude' => 'claude', 'ChatGPT' => 'openai'];
    $connected = ['Claude', 'ChatGPT'];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }} items-start">
        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $visibility['title'] }}</h2>
            @foreach ($visibility['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
            <div class="mn-notice mn-notice-quiet mt-2 flex-col gap-2">
                <h3 class="flex items-center gap-2 text-copy font-semibold">@include('_partials.icon', ['name' => 'info', 'size' => 16]){{ $visibility['warningTitle'] }}</h3>
                <p class="text-body text-text-secondary text-pretty">{{ $visibility['warning'] }}</p>
            </div>
        </div>

        {{-- The assistant call history with one call opened, and the
             connected assistants under it. One picture, read out by its label. --}}
        <div role="img" aria-label="{{ $visibility['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-2/14 p-4 md:p-10">
            <div class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    <span class="flex-1 text-body font-semibold">{{ $visibility['history'] }}</span>
                    <span class="{{ $stamp }}">{{ $visibility['kept'] }}</span>
                </div>
                <div class="divide-y divide-border">
                    @foreach ($visibility['calls'] as $c => [$assistant, $tool, $when])
                        <div class="flex flex-col gap-2.5 px-4 py-3">
                            <div class="flex items-center gap-3">
                                @include('_partials.api.brand', ['name' => $brands[$assistant], 'size' => 16, 'uid' => 'call' . $c])
                                <span class="{{ $mono }} min-w-0 flex-1 truncate">{{ $tool }}</span>
                                <span class="{{ $stamp }} flex-none">{{ $when }}</span>
                                @include('_partials.icon', ['name' => $loop->first ? 'chevron-down' : 'chevron-right', 'size' => 14, 'class' => 'flex-none text-text-muted'])
                            </div>
                            @if ($loop->first)
                                <div class="grid gap-2 sm:grid-cols-2">
                                    <div class="flex flex-col gap-1 rounded-md bg-surface-subtle p-2.5">
                                        <span class="{{ $stamp }}">{{ $visibility['request'] }}</span>
                                        <span class="{{ $mono }} break-all">{"possession": "tent"}</span>
                                    </div>
                                    <div class="flex flex-col gap-1 rounded-md bg-surface-subtle p-2.5">
                                        <span class="{{ $stamp }}">{{ $visibility['response'] }}</span>
                                        <span class="{{ $mono }} break-all">{"borrower": "{{ $copy['borrower'] }}", "note": "••••••"}</span>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    <span class="flex-1 text-body font-semibold">{{ $visibility['assistants'] }}</span>
                </div>
                <div class="divide-y divide-border">
                    @foreach ($connected as $c => $assistant)
                        <div class="flex items-center gap-3 px-4 py-3">
                            <span class="{{ $markTile }}">@include('_partials.api.brand', ['name' => $brands[$assistant], 'size' => 18, 'uid' => 'connected' . $c])</span>
                            <div class="flex min-w-0 flex-1 flex-col gap-px">
                                <span class="text-base font-semibold">{{ $assistant }}</span>
                                <span class="{{ $stamp }}">{{ $visibility['used'][$c] }}</span>
                            </div>
                            <span class="{{ $button }} mn-btn-secondary">{{ $visibility['disconnect'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
