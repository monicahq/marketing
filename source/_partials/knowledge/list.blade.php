{{-- A Knowledge list, as Erica draws it (knowledge/list.blade.php): its
     folder and kind, its title, when it was edited and how many items it
     holds, its buttons, its description, then the table of its items, each
     with its actions menu, and the row that adds one. The Delete button is
     left out. `lui` holds the screen's words (list, edit, editColumns,
     addItem), as `knowledge.ui` and `lists.ui` both carry them.

     @include('_partials.knowledge.list', ['list' => $page->t('knowledge.list'), 'lui' => $page->t('knowledge.ui')]) --}}
<div class="flex flex-col gap-5">
    <div class="flex flex-wrap items-start gap-x-4 gap-y-3">
        <div class="flex min-w-48 flex-1 flex-col gap-2">
            <span class="flex items-center gap-1.5 text-small text-text-muted">@include('_partials.icon', ['name' => 'folder', 'size' => 14]) {{ $list['folder'] }} <span class="text-text-disabled">·</span> {{ $lui['list'] }}</span>
            <span class="text-[24px] leading-tight font-semibold tracking-[-0.02em] text-text">{{ $list['title'] }}</span>
            <span class="text-xs text-text-muted">{{ $list['edited'] }} · {{ $list['count'] }}</span>
        </div>
        <span class="flex flex-wrap gap-2">
            <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $lui['edit'] }}</span>
            <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $lui['editColumns'] }}</span>
        </span>
    </div>

    <p class="text-base leading-[1.65] text-text-secondary text-pretty">{{ $list['description'] }}</p>

    <div class="overflow-hidden rounded-lg border border-border bg-canvas shadow-panel">
        <div class="overflow-x-auto">
            <table class="w-full border-collapse text-[13.5px]">
                <thead>
                    <tr>
                        @foreach ($list['columns'] as $column)
                            <th class="border-b border-border px-4 py-2.5 text-start text-xs font-medium whitespace-nowrap text-text-muted">{{ $column }}</th>
                        @endforeach
                        <th class="w-px border-b border-border px-2 py-2.5"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list['items'] as $item)
                        <tr>
                            @foreach ($item as $c => $cell)
                                <td class="border-b border-border-subtle px-4 py-2.75 align-top leading-[1.55] {{ $c === 0 ? 'text-text' : 'text-text-secondary' }}">{{ $cell }}</td>
                            @endforeach
                            <td class="border-b border-border-subtle px-2 py-1.5 align-top"><span class="grid size-7 place-items-center rounded-md text-text-muted">@include('_partials.icon', ['name' => 'menu', 'size' => 15])</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex flex-wrap items-center gap-2 bg-surface-subtle px-3 py-2">
            <span class="mn-btn mn-btn-ghost mn-btn-small pointer-events-none">@include('_partials.icon', ['name' => 'plus', 'size' => 16]) {{ $lui['addItem'] }}</span>
            <span class="ms-auto text-xs text-text-muted">{{ $list['count'] }}</span>
        </div>
    </div>
</div>
