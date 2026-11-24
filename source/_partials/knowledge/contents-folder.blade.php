{{-- One folder in Knowledge's contents, as Erica draws it
     (knowledge/index.blade.php): its name and count, then each note or list
     with its kind and when it was edited, and under a note its headings.
     `active` names a heading drawn as the one being followed. `compact`, for
     a narrow column, puts the kind and the date under the title, where a
     wide screen has them beside it. Reads the page's `$glyphs` and
     `$sorted`.

     @include('_partials.knowledge.contents-folder', ['name' => 'Home', 'count' => '6 notes and lists', 'documents' => $copy['home'], 'active' => null]) --}}
<div class="flex flex-col gap-2.5">
    <div class="flex items-center gap-2">
        @include('_partials.icon', ['name' => 'folder', 'size' => 16, 'class' => 'text-text-soft'])
        <span class="text-lede-sm font-semibold tracking-[-0.02em] text-text">{{ $name }}</span>
        <span class="text-small text-text-muted">{{ $count }}</span>
    </div>
    <div class="overflow-hidden rounded-lg border border-border bg-canvas shadow-panel">
        @foreach ($sorted($documents) as [$kind, $document, $line, $edited, $headings])
            <div class="border-b border-border-subtle last:border-b-0">
                <div class="flex items-center gap-3 px-4 py-3 {{ ($compact ?? false) ? 'flex-wrap gap-y-0.5' : '' }}">
                    @include('_partials.icon', ['name' => $glyphs[$kind], 'size' => 16, 'class' => 'flex-none text-text-muted'])
                    <span class="min-w-0 flex-1 truncate text-base font-semibold text-text">{{ $document }}</span>
                    <span class="text-xs text-text-muted {{ ($compact ?? false) ? 'basis-full ps-7' : 'text-end max-sm:hidden' }}">{{ $line }} · {{ $edited }}</span>
                </div>
                @if ($headings !== [])
                    <div class="flex flex-wrap gap-x-4 gap-y-1 ps-11 pe-4 pb-3">
                        @foreach ($headings as $heading)
                            <span class="rounded-xs text-small underline underline-offset-3 {{ $heading === ($active ?? null) ? 'text-text decoration-text outline-2 outline-offset-2 outline-focus' : 'text-text-secondary decoration-border-strong' }}">{{ $heading }}</span>
                        @endforeach
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>
