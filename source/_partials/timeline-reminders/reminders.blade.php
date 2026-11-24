@php
    $reminders = $copy['reminders'];
    $screen = $reminders['screen'];
@endphp

<section class="border-y border-border bg-surface-subtle px-4 py-24 md:px-6 lg:py-28">
    <div class="{{ $narrow }} flex flex-col items-center gap-4.5 text-center">
        <h2 class="{{ $title }}">{{ $reminders['title'] }}</h2>
        <p class="max-w-[620px] {{ $paragraph }}">{{ $reminders['body'] }}</p>

        {{-- Two separate pieces of Rachel's page: the dinner on her timeline,
             and the form that adds a reminder to her Reminders panel. --}}
        <div role="img" aria-label="{{ $reminders['label'] }}" class="mt-10 grid w-full grid-cols-1 items-start gap-5 text-left text-body lg:grid-cols-2">
            <div class="rounded-lg bg-identity-5/14 p-4 md:p-7">
                <div class="{{ $window }} flex flex-col gap-4 p-4 md:p-5">
                    <div class="flex flex-wrap items-end justify-between gap-3 px-0.5">
                        <span class="{{ $sectionTitle }}">{{ $ui['timeline'] }}</span>
                        <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">@include('_partials.icon', ['name' => 'plus', 'size' => 14]) {{ $ui['addEvent'] }}</span>
                    </div>
                    @include('_partials.people.life-event', ['years' => [['year' => '2026', 'count' => $ui['oneEntry'], 'events' => [$screen['event'] + ['type' => 'meal']]]]])
                </div>
            </div>

            <div class="rounded-lg bg-identity-3/14 p-4 md:p-7">
                <div class="{{ $window }}">
                    <div class="flex min-h-12 items-start gap-3 border-b border-border px-4 py-3">
                        <span class="{{ $panelMark }}">@include('_partials.icon', ['name' => 'reminder', 'size' => 15])</span>
                        <span class="flex flex-col">
                            <span class="{{ $panelTitle }}">{{ $ui['addReminder'] }}</span>
                            <span class="text-xs text-text-muted">{{ $ui['about'] }}</span>
                        </span>
                    </div>
                    <div class="flex flex-col gap-4 p-4">
                        <div class="flex flex-col gap-1.5">
                            <span class="{{ $label }}">{{ $ui['what'] }} <span class="text-xs font-normal text-text-muted">{{ $ui['required'] }}</span></span>
                            <span class="{{ $field }} truncate">{{ $screen['reminder'] }}</span>
                        </div>
                        <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                            <div class="flex flex-col gap-1.5">
                                <span class="{{ $label }}">{{ $ui['date'] }} <span class="text-xs font-normal text-text-muted">{{ $ui['required'] }}</span></span>
                                <span class="{{ $field }} justify-between">{{ $screen['date'] }} @include('_partials.icon', ['name' => 'calendar', 'size' => 15, 'class' => 'text-text-muted'])</span>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <span class="{{ $label }}">{{ $ui['repeat'] }}</span>
                                <span class="{{ $field }} justify-between">{{ $ui['once'] }} @include('_partials.icon', ['name' => 'chevron-down', 'size' => 15, 'class' => 'text-text-muted'])</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 border-t border-border pt-4">
                            <div class="flex items-center gap-3">
                                <p class="min-w-0 flex-1 text-small text-text-secondary">{{ $ui['notificationTime'] }} <strong class="font-semibold text-text">18:00</strong> · <strong class="font-semibold text-text">America/Toronto</strong></p>
                                <span class="mn-btn mn-btn-ghost mn-btn-small pointer-events-none">{{ $ui['change'] }}</span>
                            </div>
                            <p class="text-xs text-text-muted">{{ $ui['notify'] }}</p>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 border-t border-border bg-surface-subtle px-4 py-3">
                        <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $ui['cancel'] }}</span>
                        <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">{{ $ui['addReminderButton'] }}</span>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ $page->route('reminders') }}" class="{{ $more }} mt-3">
            {{ $reminders['link'] }}
            @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])
        </a>
    </div>
</section>
