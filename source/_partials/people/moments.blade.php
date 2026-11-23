@php
    $moments = $copy['moments'];
    $screen = $moments['screen'];
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} {{ $split }}">
        {{-- A dinner on Rachel's timeline, then the reminders panel: Emma's
             birthday every year, and a call to Ross once. --}}
        <div role="img" aria-label="{{ $moments['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-5/14 p-4 text-body max-lg:order-2 md:p-8">
            <div class="{{ $window }} px-3 py-4">
                @include('_partials.people.life-event', ['years' => [['year' => '2026', 'count' => $ui['oneEntry'], 'events' => [$screen['event'] + ['type' => 'meal', 'detail' => $screen['event']['place']]]]]])
            </div>

            <div class="{{ $panel }}">
                <div class="{{ $panelHead }}">
                    <span class="{{ $panelMark }} border border-border bg-surface-subtle text-text-secondary">@include('_partials.icon', ['name' => 'reminder', 'size' => 15])</span>
                    <span class="{{ $panelTitle }}">{{ $ui['reminders'] }}</span>
                    <span class="{{ $smallButton }}">{{ $ui['add'] }}</span>
                </div>
                @foreach ($screen['reminders'] as $r => $reminder)
                    <div class="flex flex-col gap-1.25 px-4 py-3.5 {{ $loop->first ? '' : 'border-t border-border' }}">
                        <span class="text-small font-semibold text-text">{{ $reminder['title'] }}</span>
                        <span class="flex flex-wrap gap-x-4 gap-y-1 text-small text-text-muted">
                            <span class="flex items-center gap-1.5">@include('_partials.icon', ['name' => 'clock', 'size' => 15]) {{ $reminder['when'] }}</span>
                            <span class="flex items-center gap-1.5">@include('_partials.icon', ['name' => 'calendar-repeat', 'size' => 15]) {{ $r === 0 ? $ui['everyYear'] : $ui['oneTime'] }}</span>
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $moments['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $moments['body'] }}</p>
            <a href="{{ $page->route('timeline') }}" class="{{ $more }}">
                {{ $moments['link'] }}
                @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])
            </a>
        </div>
    </div>
</section>
