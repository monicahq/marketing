@php
    $access = $copy['access'];

    // The assistants connected, in the order of `used`.
    $connected = [['claude', 'Claude'], ['openai', 'ChatGPT']];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $access['title'] }}</h2>
            <p class="{{ $closing }}">{{ $access['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $access['body'] }}</p>
        </div>

        {{-- The connections in your settings: two assistants and one key. --}}
        <div role="img" aria-label="{{ $access['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-1/14 p-5 md:p-10">
            <div class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    <span class="flex-1 text-body font-semibold">{{ $access['assistants'] }}</span>
                </div>
                <div class="divide-y divide-border">
                    @foreach ($connected as $c => [$name, $label])
                        <div class="flex items-center gap-3 px-4 py-3">
                            <span class="{{ $markTile }}">@include('_partials.api.brand', ['name' => $name, 'size' => 18])</span>
                            <div class="flex min-w-0 flex-1 flex-col gap-px">
                                <span class="text-base font-semibold">{{ $label }}</span>
                                <span class="{{ $stamp }}">{{ $access['used'][$c] }}</span>
                            </div>
                            <span class="{{ $button }} mn-btn-secondary">{{ $access['disconnect'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    <span class="flex-1 text-body font-semibold">{{ $access['keys'] }}</span>
                    <span class="{{ $button }} mn-btn-secondary">{{ $access['newKey'] }}</span>
                </div>
                <div class="flex items-center gap-3 px-4 py-3">
                    <span class="{{ $markTile }} bg-surface-subtle">@include('_partials.icon', ['name' => 'key', 'size' => 16])</span>
                    <div class="flex min-w-0 flex-1 flex-col gap-px">
                        <span class="text-base font-semibold">{{ $access['keyName'] }}</span>
                        <span class="{{ $mono }} text-text-muted">mk_••••3f9a</span>
                    </div>
                    <span class="{{ $button }} mn-btn-secondary">{{ $access['revoke'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
