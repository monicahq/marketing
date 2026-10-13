{{-- A labelled field on a drawn form. `optional` writes the word after the
     label, `focused` draws the ring the field has while you type in it.

     @include('_partials.reminders.field', ['label' => 'Day', 'value' => 'Tuesday 14 October', 'focused' => false]) --}}
<div class="flex min-w-0 flex-col gap-1.5">
    <span class="text-small font-medium">
        {{ $label }}
        @isset($optional)
            <span class="font-normal text-text-muted">{{ $optional }}</span>
        @endisset
    </span>
    <span class="truncate rounded-md border bg-canvas px-2.5 py-2 text-base {{ ($focused ?? false) ? 'border-focus ring-3 ring-focus/20' : 'border-border' }}">{{ $value }}</span>
</div>
