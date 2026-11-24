@php
    $columns = $copy['columns'];
    $references = $copy['references'];
    $input = 'flex h-8 min-w-0 flex-1 items-center rounded-md border border-border-strong bg-canvas px-2.5 text-small text-text';
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} flex flex-col gap-14">
        <div class="grid grid-cols-1 items-start gap-x-18 gap-y-12 lg:grid-cols-2">
            <div class="flex flex-col gap-4.5">
                <h2 class="{{ $title }}">{{ $columns['title'] }}</h2>
                <p class="{{ $paragraph }}">{{ $columns['body'] }}</p>
                <p class="{{ $closing }}">{{ $columns['closing'] }}</p>
            </div>
            <div class="flex flex-col gap-4.5">
                <h2 class="{{ $title }}">{{ $references['title'] }}</h2>
                <p class="{{ $paragraph }}">{{ $references['body'] }}</p>
                <p class="{{ $paragraph }}">{!! $linked($references['body2'], ['link' => [$references['note'], $page->route('notes')]]) !!}</p>
            </div>
        </div>

        {{-- The paint list, and beside it the page that edits its columns
             (knowledge/list-columns.blade.php), without the column of
             folders: each column's name in a field with its Rename button and
             its menu (move before, move after, remove), then the field that
             adds one. --}}
        <div role="img" aria-label="{{ $references['label'] }}" class="grid grid-cols-1 items-start gap-6 rounded-lg bg-identity-4/14 p-3 text-left text-body md:p-8 lg:grid-cols-2">
            <div class="{{ $window }} p-4 md:p-5">
                @include('_partials.knowledge.list', ['list' => $paint, 'lui' => $lui])
            </div>

            <div class="{{ $window }} flex flex-col gap-5 p-4 md:p-5">
                <div class="flex flex-wrap items-start gap-x-4 gap-y-3">
                    <div class="flex min-w-48 flex-1 flex-col gap-1.5">
                        <span class="text-[24px] leading-tight font-semibold tracking-[-0.02em] text-text">{{ str_replace(':title', $paint['title'], $lui['columnsOf']) }}</span>
                        <p class="text-small text-text-secondary text-pretty">{{ $lui['columnsLead'] }}</p>
                    </div>
                    <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $lui['back'] }}</span>
                </div>

                <div class="overflow-hidden rounded-lg border border-border bg-canvas shadow-panel">
                    @foreach ($paint['columns'] as $column)
                        <div class="flex items-center gap-2 border-b border-border-subtle px-3 py-2 last:border-b-0">
                            <span class="{{ $input }}">{{ $column }}</span>
                            <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $lui['rename'] }}</span>
                            <span class="grid size-7 flex-none place-items-center rounded-md text-text-muted">@include('_partials.icon', ['name' => 'menu', 'size' => 15])</span>
                        </div>
                    @endforeach
                </div>

                <div class="flex flex-wrap items-end gap-2">
                    <div class="flex min-w-48 flex-1 flex-col gap-1.5">
                        <span class="text-small font-medium text-text">{{ $lui['newColumn'] }}</span>
                        <span class="flex h-9 items-center rounded-md border border-border-strong bg-canvas px-3 text-small text-text-disabled">{{ $lui['newColumnPlaceholder'] }}</span>
                    </div>
                    <span class="mn-btn mn-btn-primary pointer-events-none">{{ $lui['addColumn'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
