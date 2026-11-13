@php
    $answer = $copy['answer'];
    $remembered = $answer['remembered'];
    $forgot = $answer['forgot'];

    $panel = 'flex flex-col gap-5 rounded-lg p-7';
    $panelTitle = 'text-xl font-semibold';
    $panelBody = 'text-copy text-text-soft text-pretty';
    $reminder = 'mn-pop mt-auto flex flex-col gap-3 px-4.5 py-4';
    $reminderTop = 'flex flex-wrap items-center justify-between gap-3';
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="mx-auto flex max-w-[640px] flex-col gap-4 text-center">
            <h2 class="{{ $title }}">{{ $answer['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $answer['body'] }}</p>
        </div>

        <div class="grid gap-5 lg:grid-cols-2">
            <div class="{{ $panel }} bg-identity-2/14">
                <div class="flex flex-col gap-2">
                    <h3 class="{{ $panelTitle }} text-identity-2">{{ $copy['remembered'] }}</h3>
                    <p class="{{ $panelBody }}">{{ $remembered['body'] }}</p>
                </div>
                {{-- A reminder due today, answered from the day itself. --}}
                <div role="img" aria-label="{{ $remembered['label'] }}" class="{{ $reminder }}">
                    <div class="{{ $reminderTop }}">
                        <span class="text-body font-semibold">{{ $remembered['reminder'] }}</span>
                        <span class="mn-badge mn-badge-warning">{{ $copy['today'] }}</span>
                    </div>
                    <span class="{{ $stamp }}">{{ $remembered['detail'] }}</span>
                    <div class="flex gap-2">
                        <span class="{{ $button }} mn-btn-primary">{{ $copy['remembered'] }}</span>
                    </div>
                </div>
            </div>

            <div class="{{ $panel }} bg-identity-4/14">
                <div class="flex flex-col gap-2">
                    <h3 class="{{ $panelTitle }} text-identity-4">{{ $copy['forgot'] }}</h3>
                    <p class="{{ $panelBody }}">{{ $forgot['body'] }}</p>
                </div>
                {{-- A yearly reminder whose day has passed without an answer. --}}
                <div role="img" aria-label="{{ $forgot['label'] }}" class="{{ $reminder }}">
                    <div class="{{ $reminderTop }}">
                        <span class="text-body font-semibold">{{ $forgot['reminder'] }}</span>
                        <span class="mn-badge mn-badge-danger">{{ $copy['overdue'] }}</span>
                    </div>
                    <span class="{{ $stamp }}">{{ $forgot['detail'] }}</span>
                    <div class="flex flex-wrap gap-2">
                        <span class="{{ $button }} mn-btn-secondary">{{ $copy['remembered'] }}</span>
                        <span class="{{ $button }} mn-btn-secondary">{{ $copy['forgot'] }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto grid max-w-[960px] gap-x-14 gap-y-4 lg:grid-cols-2">
            @foreach ($answer['notes'] as $note)
                <p class="{{ $paragraph }}">{{ $note }}</p>
            @endforeach
        </div>
    </div>
</section>
