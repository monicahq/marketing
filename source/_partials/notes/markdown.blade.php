@php
    $markdown = $copy['markdown'];

    // The note's text as it sits in the editor: the Markdown that draws the
    // note above, line by line.
    $source = ['## ' . $note['valve'], $note['valveBody'], '', '## ' . $note['trip']];
    foreach ($note['tasks'] as [$task, $done]) {
        $source[] = ($done ? '- [x] ' : '- [ ] ') . $task;
    }

    $label = 'text-small font-medium text-text';
    $input = 'flex h-9 items-center rounded-md border border-border-strong bg-canvas px-3 text-small text-text';
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} {{ $split }}">
        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $markdown['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $markdown['body'] }}</p>
            <p class="{{ $closing }}">{{ $markdown['closing'] }}</p>
        </div>

        {{-- The same note open in its editor (knowledge/_note-form.blade.php):
             the title and the folder, then the text in a plain text area,
             which is Markdown as typed, without colours. --}}
        <div class="rounded-lg bg-identity-2/14 p-3 md:p-8">
            <div role="img" aria-label="{{ $markdown['label'] }}" class="{{ $window }} flex flex-col gap-4 p-4 text-body md:p-5">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-[minmax(0,2fr)_minmax(0,1fr)]">
                    <div class="flex flex-col gap-1.5"><span class="{{ $label }}">{{ $eui['title'] }}</span><span class="{{ $input }} truncate">{{ $note['title'] }}</span></div>
                    <div class="flex flex-col gap-1.5"><span class="{{ $label }}">{{ $eui['folder'] }}</span><span class="{{ $input }} justify-between gap-2">{{ $note['folder'] }} @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14, 'class' => 'flex-none text-text-muted'])</span></div>
                </div>

                <div class="flex flex-col gap-1.5">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="{{ $label }} flex-1">{{ $eui['text'] }}</span>
                        <span class="mn-btn mn-btn-ghost mn-btn-small pointer-events-none">@include('_partials.icon', ['name' => 'link', 'size' => 14]) {{ $eui['addLink'] }}</span>
                    </div>
                    <div class="flex flex-col rounded-md border border-border-strong bg-canvas px-3.5 py-3 font-mono text-[13px] leading-[1.7] text-text">
                        @foreach ($source as $line)
                            <span class="min-h-[1.7em] whitespace-pre-wrap">{{ $line }}</span>
                        @endforeach
                    </div>
                    <p class="text-xs text-text-muted text-pretty">{{ $eui['help'] }}</p>
                </div>

                <div class="flex flex-wrap gap-2">
                    <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">{{ $eui['saveChanges'] }}</span>
                    <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $eui['cancel'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
