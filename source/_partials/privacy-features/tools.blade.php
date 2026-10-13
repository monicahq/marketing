@php($tools = $copy['tools'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $tools['title'] }}</h2>
            <p class="{{ $closing }}">{{ $tools['lead'] }}</p>
            @foreach ($tools['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
        </div>

        {{-- A new API key with sensitive values left off, and Claude
             connected, with the button that disconnects it. --}}
        <div role="img" aria-label="{{ $tools['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-7/14 p-5 md:p-10">
            <div class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    @include('_partials.icon', ['name' => 'key', 'size' => 16])
                    <span class="text-copy font-semibold">{{ $tools['create'] }}</span>
                </div>
                <div class="flex flex-col gap-3.5 p-4">
                    @include('_partials.drawn-field', ['label' => $tools['keyName'], 'value' => $tools['keyValue']])
                    <div class="flex items-start gap-2.5">
                        <span class="{{ $check }} mt-px border border-border-strong"></span>
                        <span class="flex flex-col gap-1">
                            <span class="text-base font-medium">{{ $tools['sensitive'] }}</span>
                            <span class="{{ $stamp }} text-pretty">{{ $tools['sensitiveBody'] }}</span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    <span class="text-copy font-semibold">{{ $tools['assistants'] }}</span>
                </div>
                <div class="flex items-center gap-3 px-4 py-3">
                    <span class="grid size-8 flex-none place-items-center rounded-md border border-border">
                        @include('_partials.api.brand', ['name' => 'claude', 'size' => 18])
                    </span>
                    <span class="flex min-w-0 flex-1 flex-col gap-px">
                        <span class="text-base font-semibold">Claude</span>
                        <span class="{{ $stamp }}">{{ $tools['via'] }}</span>
                    </span>
                    <span class="{{ $button }} mn-btn-secondary">{{ $tools['disconnect'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
