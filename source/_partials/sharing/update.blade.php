@php($update = $copy['update'])

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $update['title'] }}</h2>
            <div class="flex flex-col gap-4">
                <p class="{{ $closing }}">{{ $update['lead'] }}</p>
                <p class="{{ $paragraph }}">{{ $update['body'] }}</p>
            </div>
        </div>

        {{-- Joey's new address, saved in your Monica, and already on Rachel's
             page behind the same link. --}}
        <div role="img" aria-label="{{ $update['label'] }}" class="grid items-center gap-6 rounded-lg bg-identity-1/14 p-4 md:p-12 lg:grid-cols-2">
            <div class="{{ $window }}">
                <div class="flex items-center gap-2.5 border-b border-border px-4 py-3">
                    @include('_partials.avatar-initials', ['name' => 'Joey Tribbiani', 'size' => 24])
                    <span class="flex-1 text-body font-semibold">{{ $update['edit'] }}</span>
                    <span class="{{ $stamp }}">{{ $update['where'] }}</span>
                </div>
                <div class="p-4">
                    @include('_partials.reminders.field', ['label' => $copy['address'], 'value' => $update['newAddress'], 'focused' => true])
                </div>
                <div class="{{ $footer }} px-4">
                    <span class="{{ $button }} mn-btn-primary">{{ $update['save'] }}</span>
                </div>
            </div>

            <div class="{{ $window }}">
                <div class="flex items-center gap-2.5 border-b border-border px-4 py-3">
                    @include('_partials.icon', ['name' => 'link', 'size' => 16])
                    <span class="flex-1 text-body font-semibold">{{ $update['shared'] }}</span>
                    <span class="{{ $stamp }}">{{ $update['same'] }}</span>
                </div>
                @include('_partials.sharing.fact', ['label' => $copy['address'], 'value' => $update['newAddress']])
                @include('_partials.sharing.fact', ['label' => $copy['phone'], 'value' => $phone, 'last' => true])
            </div>
        </div>
    </div>
</section>
