{{-- The column of folders beside every Knowledge screen, as Erica draws it
     (knowledge/_folders.blade.php): its title and the plus that adds a note,
     a list or a folder, the search field, Contents, then each folder with its
     notes and lists. A folder whose documents are `null` is drawn folded.
     The rename and action menus are left out. Reads the page's `$ui`,
     `$glyphs` and `$sorted`.

     @include('_partials.knowledge.folders', ['folders' => [['Home', '6', [['note', 'Water shutoff']]]], 'query' => null, 'contents' => true, 'current' => null]) --}}
@php
    $entry = 'flex min-h-8 items-center gap-2 rounded-md px-2 py-1.5 text-small';
    $idle = 'text-text-secondary';
    $currentEntry = 'bg-surface-subtle font-medium text-text shadow-nav-active';
@endphp
<div class="flex flex-col gap-2 rounded-lg border border-border bg-canvas p-2 text-left shadow-panel">
    <div class="flex items-center gap-2 ps-2 pt-1">
        @include('_partials.icon', ['name' => 'journal', 'size' => 16, 'class' => 'text-text'])
        <span class="flex-1 text-base font-semibold text-text">{{ $ui['knowledge'] }}</span>
        <span class="grid size-7 place-items-center rounded-md text-text-muted">@include('_partials.icon', ['name' => 'plus', 'size' => 16])</span>
    </div>

    <div class="px-1">
        <span class="flex h-8 items-center gap-2 rounded-md border {{ $query ? 'border-text' : 'border-border' }} bg-canvas px-2.5">
            @include('_partials.icon', ['name' => 'search', 'size' => 15, 'class' => 'text-text-muted'])
            <span class="min-w-0 flex-1 truncate text-small {{ $query ? 'text-text' : 'text-text-disabled' }}">{{ $query ?: $ui['search'] }}</span>
        </span>
    </div>

    <div class="flex flex-col gap-px pb-1">
        <span class="{{ $entry }} {{ $contents ? $currentEntry : $idle }}">
            @include('_partials.icon', ['name' => 'layers', 'size' => 15, 'class' => 'flex-none text-text-muted'])
            <span class="min-w-0 flex-1">{{ $ui['contents'] }}</span>
        </span>

        @foreach ($folders as [$name, $count, $documents])
            <div class="mt-1 flex flex-col gap-px">
                <span class="flex min-h-8 items-center gap-2 rounded-md px-2 py-1.5 text-[13.5px] font-semibold text-text">
                    @include('_partials.icon', ['name' => 'chevron-down', 'size' => 13, 'class' => 'flex-none text-text-muted ' . ($documents === null ? '-rotate-90' : '')])
                    @include('_partials.icon', ['name' => 'folder', 'size' => 16, 'class' => 'flex-none text-text-soft'])
                    <span class="min-w-0 flex-1 truncate">{{ $name }}</span>
                    <span class="text-xs font-normal text-text-muted">{{ $count }}</span>
                </span>
                @foreach ($sorted($documents ?? []) as [$kind, $document])
                    <span class="{{ $entry }} ps-7.5 {{ $document === $current ? $currentEntry : $idle }}">
                        @include('_partials.icon', ['name' => $glyphs[$kind], 'size' => 15, 'class' => 'flex-none text-text-muted'])
                        <span class="min-w-0 flex-1 truncate">{{ $document }}</span>
                    </span>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
