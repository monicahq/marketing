@php
    $one = $copy['one'];

    // The palette offered for a vault: the eight identity colours, with
    // Work's chosen. Literal class strings, for Tailwind's scanner. The hex
    // under the preview is the chosen token's own value.
    $swatches = ['bg-identity-1', 'bg-identity-2', 'bg-identity-3', 'bg-identity-4', 'bg-identity-5', 'bg-identity-6', 'bg-identity-7', 'bg-identity-8'];
    $chosen = 5;
    $hex = '#2f7f86';
    $work = $vaults[1];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $one['title'] }}</h2>
            <p class="{{ $closing }}">{{ $one['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $one['body'] }}</p>
        </div>

        {{-- Creating the Work vault, with its colour being chosen. --}}
        <div class="rounded-lg bg-identity-2/14 p-5 md:p-10">
            <div role="img" aria-label="{{ $one['label'] }}" class="{{ $window }}">
                <div class="flex items-center gap-3 border-b border-border px-4.5 py-3.5">
                    <span class="grid size-7.5 flex-none place-items-center rounded-md border border-border bg-surface-subtle">
                        @include('_partials.icon', ['name' => 'vault', 'size' => 16])
                    </span>
                    <span class="text-copy font-semibold">{{ $one['create'] }}</span>
                </div>
                <div class="flex flex-col gap-4.5 p-4.5">
                    @include('_partials.reminders.field', ['label' => $one['name'], 'value' => $work['name'], 'focused' => true])
                    <div class="flex flex-col gap-1.5">
                        <span class="text-small font-medium">
                            {{ $one['description'] }}
                            <span class="font-normal text-text-muted">{{ $one['optional'] }}</span>
                        </span>
                        <span class="min-h-11 rounded-md border border-border bg-canvas px-2.5 py-2 text-base">{{ $one['value'] }}</span>
                    </div>
                    <div class="flex flex-col gap-2.5">
                        <span class="text-small font-medium">{{ $one['colour'] }}</span>
                        <div class="flex flex-wrap items-center gap-4">
                            <div class="flex flex-1 flex-wrap gap-2">
                                @foreach ($swatches as $s => $swatch)
                                    <span class="block size-7 rounded-md {{ $swatch }} {{ $s === $chosen ? 'ring-2 ring-text ring-offset-2 ring-offset-canvas' : '' }}"></span>
                                @endforeach
                            </div>
                            <div class="flex items-center gap-2.5 border-l border-border pl-4">
                                <span class="{{ $tile }} size-8 text-body {{ $work['solid'] }}">{{ $initial($work['name']) }}</span>
                                <div class="flex flex-col gap-px">
                                    <span class="text-body font-semibold">{{ $work['name'] }}</span>
                                    <span class="font-mono text-xs text-text-muted">{{ $hex }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end gap-2 border-t border-border bg-surface-subtle px-4.5 py-3">
                    <span class="{{ $button }} mn-btn-ghost">{{ $one['cancel'] }}</span>
                    <span class="{{ $button }} mn-btn-primary">{{ $one['submit'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
