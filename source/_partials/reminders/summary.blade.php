{{-- The sentence under a drawn reminder form that says when it will fire,
     with the moment itself in bold. Both halves are escaped before the bold
     is put around the second.

     @include('_partials.reminders.summary', ['sentence' => 'Reminder on :when, once.', 'when' => 'Tuesday 14 October at 18:00']) --}}
<span class="text-small text-text-muted">{!! strtr(e($sentence), [':when' => '<strong class="font-semibold text-text">' . e($when) . '</strong>']) !!}</span>
