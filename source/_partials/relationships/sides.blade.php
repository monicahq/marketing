@php
    $sides = $copy['sides'];

    // Who each card in `pages` shows: Monica on Ross's page, Ross on Monica's.
    $shown = ['Monica Geller', 'Ross Geller'];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $sides['title'] }}</h2>
            <p class="{{ $closing }}">{{ $sides['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $sides['body'] }}</p>
        </div>

        {{-- Adding a sibling to Ross, and the same relationship read from
             each side. --}}
        <div role="img" aria-label="{{ $sides['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-2/14 p-5 md:p-10">
            <div class="{{ $window }}">
                <div class="flex flex-col gap-1.5 border-b border-border px-4.5 py-4">
                    <span class="text-small font-medium">{{ $sides['typeLabel'] }}</span>
                    <span class="{{ $box }} flex items-center justify-between gap-2 border-border">
                        {{ $sides['type'] }}
                        @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14])
                    </span>
                </div>
                <div class="flex flex-col gap-3.5 p-4.5">
                    <div class="flex flex-col gap-2.5">
                        <span class="{{ $eyebrow }} text-text-muted">{{ $copy['sibling'] }}</span>
                        <div class="flex items-center gap-3">
                            @include('_partials.avatar-initials', ['name' => 'Ross Geller', 'size' => 30])
                            <span class="text-body font-semibold">Ross Geller</span>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <span class="{{ $button }} mn-btn-secondary">{{ $sides['swap'] }}</span>
                    </div>
                    <div class="flex flex-col gap-2.5">
                        <span class="{{ $eyebrow }} text-text-muted">{{ $copy['sibling'] }}</span>
                        <span class="{{ $box }} {{ $focused }} flex items-center gap-2.5 py-1.75">
                            @include('_partials.avatar-initials', ['name' => 'Monica Geller', 'size' => 22])
                            Monica Geller
                        </span>
                    </div>
                </div>
                <div class="flex justify-end gap-2 border-t border-border bg-surface-subtle px-4.5 py-3">
                    <span class="{{ $button }} mn-btn-ghost">{{ $sides['cancel'] }}</span>
                    <span class="{{ $button }} mn-btn-primary">{{ $sides['submit'] }}</span>
                </div>
            </div>

            <div class="grid gap-3 sm:grid-cols-2">
                @foreach ($sides['pages'] as $s => $side)
                    <div class="{{ $window }} flex flex-col gap-2.5 px-4 py-3.5">
                        <span class="{{ $eyebrow }} text-identity-2">{{ $side['title'] }}</span>
                        <div class="flex items-center gap-2.5">
                            @include('_partials.avatar-initials', ['name' => $shown[$s], 'size' => 28])
                            <div class="flex flex-col gap-px">
                                <span class="text-body font-semibold">{{ $shown[$s] }}</span>
                                <span class="{{ $stamp }}">{{ $side['role'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
