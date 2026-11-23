{{-- One reminder in the Reminders panel of a contact page, as Erica draws a
     coming-up one: its title, when it is sent and how often.

     @include('_partials.timeline-reminders.reminder-row', ['title' => '...', 'when' => 'Nov 25 · in 2 days', 'cadence' => 'One time', 'first' => true]) --}}
<div class="flex flex-col gap-1.25 px-4 py-3.5 {{ ($first ?? false) ? '' : 'border-t border-border' }}">
    <span class="text-small font-semibold text-text">{{ $title }}</span>
    <span class="flex flex-wrap gap-x-4 gap-y-1 text-small text-text-muted">
        <span class="flex items-center gap-1.5">@include('_partials.icon', ['name' => 'clock', 'size' => 15]) {{ $when }}</span>
        <span class="flex items-center gap-1.5">@include('_partials.icon', ['name' => 'calendar-repeat', 'size' => 15]) {{ $cadence }}</span>
    </span>
</div>
