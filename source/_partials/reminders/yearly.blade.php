@php
    $yearly = $copy['yearly'];

    $box = 'size-4 flex-none rounded-xs';
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- Chandler's birthday, with a reminder turned on for the date. --}}
        <div class="rounded-lg bg-identity-3/14 p-5 max-lg:order-last md:p-10">
            <div role="img" aria-label="{{ $yearly['label'] }}" class="{{ $window }} flex flex-col gap-3.5 p-4.5">
                @include('_partials.drawn-field', ['label' => $yearly['birthday'], 'optional' => $copy['optional'], 'value' => $yearly['date']])

                <div class="flex flex-wrap gap-x-6 gap-y-3 text-base">
                    <span class="flex items-center gap-2 text-text-secondary">
                        <span class="{{ $box }} border border-border-strong"></span>
                        {{ $yearly['noYear'] }}
                    </span>
                    <span class="flex items-center gap-2">
                        <span class="{{ $box }} grid place-items-center bg-primary text-text-inverse">
                            @include('_partials.icon', ['name' => 'check', 'size' => 10])
                        </span>
                        {{ $yearly['remind'] }}
                    </span>
                </div>

                <div class="flex flex-col gap-3.5 rounded-lg border border-border bg-surface-subtle p-4">
                    <div class="grid gap-2.5 sm:grid-cols-3">
                        @include('_partials.drawn-field', ['label' => $copy['repeats'], 'value' => $yearly['repeats']])
                        @include('_partials.drawn-field', ['label' => $copy['at'], 'value' => $yearly['at']])
                        @include('_partials.drawn-field', ['label' => $copy['timeZone'], 'value' => $yearly['zone']])
                    </div>
                    <div class="border-t border-border pt-3.5">
                        @include('_partials.drawn-field', ['label' => $copy['says'], 'optional' => $copy['optional'], 'value' => $yearly['says']])
                    </div>
                    @include('_partials.reminders.summary', ['sentence' => $yearly['summary'], 'when' => $yearly['when']])
                </div>
            </div>
        </div>

        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $yearly['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $yearly['body'] }}</p>
            <p class="{{ $closing }}">{{ $yearly['close'] }}</p>
        </div>
    </div>
</section>
