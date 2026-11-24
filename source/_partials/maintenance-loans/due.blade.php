@php
    $due = $copy['due'];
    $form = $due['form'];
    $brake = $copy['records'][0];
    $label = 'flex items-baseline gap-2 text-small font-medium text-text';
    $input = 'flex h-9 items-center rounded-md border border-border-strong bg-canvas px-3 text-small text-text';
    $optional = '<span class="text-xs font-normal text-text-muted">' . e($ui['optional']) . '</span>';
@endphp

<section class="border-y border-border bg-surface-subtle px-4 py-24 md:px-6 lg:py-28">
    <div class="{{ $narrow }} {{ $split }}">
        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $due['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $due['body'] }}</p>
            <p class="{{ $paragraph }}">{!! $linked($due['body2'], ['link' => [$due['linkLabel'], $page->route('reminders')]]) !!}</p>
        </div>

        {{-- The brake adjustment, open in the form that edits it, in the
             amber Erica gives a maintenance form. The next due date is a
             date and nothing more: no reminder is drawn beside it, because
             none is set. --}}
        <div class="rounded-lg bg-identity-3/14 p-3 md:p-8">
            <div role="img" aria-label="{{ $due['label'] }}" class="overflow-hidden rounded-lg border border-identity-3/45 bg-canvas text-body shadow-pop">
                <div class="flex min-h-12 items-center gap-3 border-b border-identity-3/30 bg-identity-3/9 px-4 py-3.5">
                    <span class="grid size-7 flex-none place-items-center rounded-md border border-identity-3/35 bg-canvas text-identity-3">@include('_partials.icon', ['name' => 'note', 'size' => 15])</span>
                    <span class="flex min-w-0 flex-1 flex-col">
                        <span class="{{ $cardTitle }} text-identity-3">{{ $ui['editRecord'] }}</span>
                        <span class="{{ $term }}">{{ $ui['recordedOn'] }}</span>
                    </span>
                </div>

                <div class="flex flex-col gap-4.5 p-4">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="flex flex-col gap-1.5"><span class="{{ $label }}">{{ $ui['type'] }}</span><span class="{{ $input }} justify-between gap-2">{{ $ui[$brake['type']] }} @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14, 'class' => 'flex-none text-text-muted'])</span></div>
                        <div class="flex flex-col gap-1.5"><span class="{{ $label }}">{{ $ui['title'] }}</span><span class="{{ $input }} truncate">{{ $brake['title'] }}</span></div>
                        <div class="flex flex-col gap-1.5"><span class="{{ $label }}">{{ $ui['performedBy'] }} {!! $optional !!}</span><span class="{{ $input }} truncate">{{ $brake['parts'][0][0] }}</span></div>
                        <div class="flex flex-col gap-1.5"><span class="{{ $label }}">{{ $ui['performed'] }}</span><span class="{{ $input }} justify-between gap-2 tabular-nums">{{ $form['performed'] }} @include('_partials.icon', ['name' => 'calendar', 'size' => 14, 'class' => 'flex-none text-text-muted'])</span></div>
                        <div class="flex flex-col gap-1.5"><span class="{{ $label }}">{{ $ui['costField'] }} {!! $optional !!}</span><span class="{{ $input }} tabular-nums">{{ $form['cost'] }}</span></div>
                        <div class="flex flex-col gap-1.5"><span class="{{ $label }}">{{ $ui['currency'] }} {!! $optional !!}</span><span class="{{ $input }} justify-between gap-2"><span class="truncate">{{ $form['currency'] }}</span> @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14, 'class' => 'flex-none text-text-muted'])</span></div>
                        <div class="flex flex-col gap-1.5"><span class="{{ $label }}">{{ $ui['conditionBefore'] }} {!! $optional !!}</span><span class="{{ $input }} justify-between gap-2">{{ $ui['used'] }} @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14, 'class' => 'flex-none text-text-muted'])</span></div>
                        <div class="flex flex-col gap-1.5"><span class="{{ $label }}">{{ $ui['conditionAfter'] }} {!! $optional !!}</span><span class="{{ $input }} justify-between gap-2">{{ $ui['likeNew'] }} @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14, 'class' => 'flex-none text-text-muted'])</span></div>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <span class="{{ $label }}">{{ $ui['nextDue'] }} {!! $optional !!}</span>
                        <span class="{{ $input }} justify-between gap-2 tabular-nums sm:w-[calc(50%-8px)]">{{ $form['next'] }} @include('_partials.icon', ['name' => 'calendar', 'size' => 14, 'class' => 'flex-none text-text-muted'])</span>
                        <span class="text-xs text-text-muted text-pretty">{{ $ui['nextDueHelp'] }}</span>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <span class="{{ $label }}">{{ $ui['description'] }} {!! $optional !!}</span>
                        <span class="flex min-h-18 items-start rounded-md border border-border-strong bg-canvas px-3 py-2 text-small text-text text-pretty">{{ $brake['description'] }}</span>
                    </div>
                </div>

                <div class="flex flex-wrap gap-2 border-t border-border bg-surface-subtle px-4 py-3">
                    <span class="{{ $primary }}">{{ $ui['saveChanges'] }}</span>
                    <span class="{{ $secondary }}">{{ $ui['cancel'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
