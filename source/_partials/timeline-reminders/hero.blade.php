@php
    $hero = $copy['hero'];
    $screen = $hero['screen'];
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[760px] flex-col items-center gap-5 text-center">
            <span class="text-caption font-semibold tracking-[0.1em] text-text-muted uppercase">{{ $hero['eyebrow'] }}</span>
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="max-w-[640px] text-lede-md font-medium text-text text-balance">{{ $hero['lede'] }}</p>
            <div class="flex flex-wrap justify-center gap-2.5 pt-1.5">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
                <a href="{{ $page->route('people') }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $hero['people'] }}</a>
            </div>
        </div>

        {{-- Two records, side by side and nothing joining them: a dinner on
             Rachel's timeline, and a reminder in her Reminders panel. Each is
             drawn as the application draws it, with what it is for under it. --}}
        <div role="img" aria-label="{{ $hero['label'] }}" class="mx-auto mt-18 grid max-w-[880px] grid-cols-1 gap-5 text-left text-body md:grid-cols-2">
            <div class="flex flex-col gap-3.5">
                <div class="flex-1 rounded-lg bg-identity-5/14 p-5 md:p-8">
                    <div class="{{ $window }} px-3 py-4">
                        @include('_partials.people.life-event', ['years' => [['year' => '2026', 'count' => $ui['oneEntry'], 'events' => [$screen['event'] + ['type' => 'meal']]]]])
                    </div>
                </div>
                <span class="px-1 text-body text-text-secondary">{{ $hero['moment'] }}</span>
            </div>
            <div class="flex flex-col gap-3.5">
                <div class="flex-1 rounded-lg bg-identity-3/14 p-5 md:p-8">
                    <div class="{{ $window }}">
                        <div class="{{ $panelHead }}">
                            <span class="{{ $panelMark }}">@include('_partials.icon', ['name' => 'reminder', 'size' => 15])</span>
                            <span class="{{ $panelTitle }}">{{ $ui['reminders'] }}</span>
                            <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none ml-auto">{{ $ui['add'] }}</span>
                        </div>
                        @include('_partials.timeline-reminders.reminder-row', ['title' => $screen['reminder'], 'when' => $screen['reminderWhen'], 'cadence' => $ui['oneTime'], 'first' => true])
                    </div>
                </div>
                <span class="px-1 text-body text-text-secondary">{{ $hero['nudge'] }}</span>
            </div>
        </div>
    </div>
</section>
