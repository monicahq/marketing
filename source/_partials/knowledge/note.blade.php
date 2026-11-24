{{-- The Water shutoff note, as Erica draws a note being read
     (knowledge/note.blade.php): its folder and kind, its title, when it was
     edited, the Edit button, then its Markdown drawn. `from` set to 'trip'
     draws only what the reader sees once the page has jumped to the second
     heading. The knowledge and notes pages both draw it, from the copy in
     `knowledge.note` and the words in `knowledge.ui`.

     @include('_partials.knowledge.note', ['note' => $page->t('knowledge.note'), 'kui' => $page->t('knowledge.ui'), 'from' => null]) --}}
@php
    $from = $from ?? null;
    $heading = 'text-lede-sm font-semibold tracking-[-0.02em] text-text';
@endphp
<div class="flex flex-col gap-5">
    @if ($from === null)
        <div class="flex flex-wrap items-start gap-x-4 gap-y-3">
            <div class="flex min-w-48 flex-1 flex-col gap-2">
                <span class="flex items-center gap-1.5 text-small text-text-muted">@include('_partials.icon', ['name' => 'folder', 'size' => 14]) {{ $note['folder'] }} <span class="text-text-disabled">·</span> {{ $kui['note'] }}</span>
                <span class="text-[24px] leading-tight font-semibold tracking-[-0.02em] text-text">{{ $note['title'] }}</span>
                <span class="text-xs text-text-muted">{{ $note['edited'] }}</span>
            </div>
            <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $kui['edit'] }}</span>
        </div>
    @endif

    <div class="flex flex-col gap-3 text-base leading-[1.65] text-text-secondary text-pretty">
        @if ($from === null)
            <span class="{{ $heading }}">{{ $note['valve'] }}</span>
            <p>{{ $note['valveBody'] }}</p>
        @endif
        <span class="{{ $heading }} {{ $from === null ? 'mt-4' : '' }}">{{ $note['trip'] }}</span>
        <div class="flex flex-col gap-1">
            @foreach ($note['tasks'] as [$task, $done])
                <span class="flex items-baseline gap-2">
                    <span class="relative top-0.5 grid size-3.75 flex-none place-items-center rounded-xs border {{ $done ? 'border-text bg-text text-canvas' : 'border-border-strong bg-canvas' }}">@if ($done)@include('_partials.icon', ['name' => 'check', 'size' => 11])@endif</span>
                    {{ $task }}
                </span>
            @endforeach
        </div>
    </div>
</div>
