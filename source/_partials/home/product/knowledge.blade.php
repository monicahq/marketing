{{-- Knowledge: the vault's folders of notes and lists, and their contents page. --}}
@php
    $k = $copy['knowledge'];
    // Per item, in the order of `folders` in lang/: null for a note, the
    // number of items for a list.
    $kinds = [
        [null, null, null, 4],
        [4, null, null, 3],
        [4, null, 3, null],
        [null, 5, null],
        [null, null, 6, 8],
    ];
@endphp
<div class="flex gap-6 p-5 md:p-7">
    <div class="{{ $card }} flex w-64 flex-none flex-col gap-1 self-start p-3 max-lg:hidden">
        <div class="flex items-center gap-2 px-2 py-1 text-body font-semibold text-text">@include('_partials.icon', ['name' => 'journal']) <span class="flex-1">{{ $copy['nav']['knowledge'] }}</span> @include('_partials.icon', ['name' => 'plus', 'class' => 'text-text-secondary'])</div>
        <div class="my-1.5 flex items-center gap-2 rounded-md border border-border px-2.5 py-1.5 text-small text-text-muted">@include('_partials.icon', ['name' => 'search', 'size' => 14]) {{ $k['searchNotes'] }}</div>
        <div class="flex items-center gap-2 rounded-md bg-surface-subtle px-2 py-1.5 text-base font-medium text-text">@include('_partials.icon', ['name' => 'layers', 'size' => 14]) {{ $k['contents'] }}</div>
        @foreach ($k['folders'] as $f => $folder)
            <div class="mt-1 flex items-center gap-2 px-2 py-1.5 text-base font-semibold text-text">
                @include('_partials.icon', ['name' => 'chevron-down', 'size' => 12, 'class' => 'text-text-muted'])
                @include('_partials.icon', ['name' => 'folder', 'size' => 15])
                <span class="flex-1 truncate">{{ $folder['name'] }}</span>
                <span class="text-small font-normal text-text-muted">{{ count($folder['items']) }}</span>
            </div>
            @foreach ($folder['items'] as $i => $item)
                <div class="flex items-center gap-2 py-1 pr-2 pl-10 text-base text-text-secondary">@include('_partials.icon', ['name' => $kinds[$f][$i] ? 'text-lines' : 'file', 'size' => 14, 'class' => 'text-text-muted']) <span class="truncate">{{ $item['title'] }}</span></div>
            @endforeach
        @endforeach
    </div>

    <div class="flex min-w-0 flex-1 flex-col gap-5">
        <div class="flex flex-col gap-1.5">
            <span class="text-heading-sm font-semibold text-text">{{ $k['contents'] }}</span>
            <p class="max-w-150 text-base text-text-secondary">{{ $k['intro'] }}</p>
            <span class="text-small text-text-muted">{{ $k['summary'] }}</span>
        </div>
        @foreach (array_slice($k['folders'], 0, 3) as $f => $folder)
            <div class="flex flex-col gap-2.5">
                <div class="flex items-baseline gap-2">
                    @include('_partials.icon', ['name' => 'folder', 'class' => 'self-center text-text'])
                    <span class="text-body font-semibold text-text">{{ $folder['name'] }}</span>
                    <span class="text-small text-text-muted">{{ str_replace(':count', count($folder['items']), $k['notesAndLists']) }}</span>
                </div>
                <div class="{{ $card }}">
                    @foreach ($folder['items'] as $i => $item)
                        <div class="flex flex-col gap-2 border-border-subtle px-4 py-3 not-last:border-b">
                            <div class="flex items-center gap-3 text-base">
                                @include('_partials.icon', ['name' => $kinds[$f][$i] ? 'text-lines' : 'file', 'class' => 'flex-none text-text-muted'])
                                <span class="flex-1 truncate font-semibold text-text">{{ $item['title'] }}</span>
                                <span class="text-small whitespace-nowrap text-text-muted max-md:hidden">{{ $kinds[$f][$i] ? str_replace(':count', $kinds[$f][$i], $k['list']) : $k['note'] }} · {{ $k['edited'] }}</span>
                            </div>
                            @if ($item['headings'])
                                <div class="flex flex-wrap gap-x-4 gap-y-1 pl-7 text-small text-text-secondary">
                                    @foreach ($item['headings'] as $heading)
                                        <span class="underline decoration-border-strong underline-offset-4">{{ $heading }}</span>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
