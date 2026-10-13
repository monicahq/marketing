@php($once = $copy['once'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $once['title'] }}</h2>
            <p class="{{ $closing }}">{{ $once['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $once['body'] }}</p>
        </div>

        {{-- Adding a one-off reminder on Joey's page. --}}
        <div class="rounded-lg bg-identity-2/14 p-5 md:p-10">
            <div role="img" aria-label="{{ $once['label'] }}" class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    @include('_partials.avatar-initials', ['name' => 'Joey Tribbiani', 'size' => 28])
                    <span class="text-copy font-semibold">{{ $once['heading'] }}</span>
                </div>
                <div class="flex flex-col gap-4 p-4.5">
                    <div class="grid gap-3 sm:grid-cols-2">
                        @include('_partials.reminders.field', ['label' => $copy['day'], 'value' => $once['day']])
                        @include('_partials.reminders.field', ['label' => $copy['at'], 'value' => $once['at']])
                    </div>
                    @include('_partials.reminders.field', ['label' => $copy['says'], 'value' => $once['says'], 'focused' => true])
                    @include('_partials.reminders.summary', ['sentence' => $once['summary'], 'when' => $once['when']])
                </div>
                <div class="flex justify-end gap-2 border-t border-border bg-surface-subtle px-4.5 py-3">
                    <span class="{{ $button }} mn-btn-ghost">{{ $once['cancel'] }}</span>
                    <span class="{{ $button }} mn-btn-primary">{{ $copy['add'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
