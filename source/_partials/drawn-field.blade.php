{{-- A labelled field on a drawn form, built from the design system's own
     `mn-field`, `mn-label` and `mn-control`. It is a picture, so the control
     is a span holding the value rather than an input.

     `optional` writes the word after the label. `focused` draws the border and
     ring that `.mn-control:focus` draws while you type. `select` adds the
     chevron of a dropdown, and `multiline` lets the value run over several
     lines, as a textarea would.

     @include('_partials.drawn-field', ['label' => 'Day', 'value' => 'Tuesday 14 October', 'focused' => false]) --}}
<div class="mn-field min-w-0">
    <span class="mn-label">
        {{ $label }}
        @isset($optional)
            <span class="font-normal text-text-muted">{{ $optional }}</span>
        @endisset
    </span>
    <span class="mn-control flex {{ ($multiline ?? false) ? 'h-auto min-h-18 items-start py-2' : 'items-center justify-between gap-2' }} {{ ($focused ?? false) ? 'border-focus ring-3 ring-focus/20' : '' }}">
        <span class="{{ ($multiline ?? false) ? 'text-pretty' : 'truncate' }}">{{ $value }}</span>
        @if ($select ?? false)
            <span class="flex-none text-text-muted">@include('_partials.icon', ['name' => 'chevron-down', 'size' => 12, 'label' => null])</span>
        @endif
    </span>
</div>
