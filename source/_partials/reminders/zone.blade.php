@php
    $zone = $copy['zone'];

    $clock = 'text-heading-sm font-semibold';
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- A reminder set on London time, and what that time is in New York. --}}
        <div class="rounded-lg bg-identity-6/14 p-5 max-lg:order-last md:p-10">
            <div role="img" aria-label="{{ $zone['label'] }}" class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    @include('_partials.avatar-initials', ['name' => 'Ross Geller', 'size' => 28])
                    <span class="text-copy font-semibold">{{ $zone['heading'] }}</span>
                </div>
                <div class="grid gap-3 p-4.5 sm:grid-cols-3">
                    @include('_partials.reminders.field', ['label' => $copy['day'], 'value' => $zone['day']])
                    @include('_partials.reminders.field', ['label' => $copy['at'], 'value' => $zone['at']])
                    @include('_partials.reminders.field', ['label' => $copy['timeZone'], 'value' => $zone['zone'], 'focused' => true])
                </div>
                <div class="mx-4.5 mb-4.5 grid grid-cols-2 overflow-hidden rounded-lg border border-border">
                    <div class="flex flex-col gap-1 px-4 py-3.5">
                        <span class="{{ $eyebrow }} text-identity-6">{{ $zone['them'] }}</span>
                        <span class="{{ $clock }}">{{ $zone['at'] }}</span>
                    </div>
                    <div class="flex flex-col gap-1 border-l border-border bg-surface-subtle px-4 py-3.5">
                        <span class="{{ $eyebrow }} text-text-muted">{{ $zone['you'] }}</span>
                        <span class="{{ $clock }} text-text-secondary">{{ $zone['yours'] }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $zone['title'] }}</h2>
            <p class="{{ $closing }}">{{ $zone['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $zone['body'] }}</p>
        </div>
    </div>
</section>
