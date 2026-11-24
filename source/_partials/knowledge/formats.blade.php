@php
    $notes = $copy['notes'];
    $lists = $copy['lists'];
    $note = $copy['note'];
    $list = $copy['list'];

    // The top of a note's or a list's page: its folder and kind, its title,
    // when it was edited.
    $kindLine = 'flex items-center gap-1.5 text-small text-text-muted';
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} flex flex-col gap-14">
        <div class="grid grid-cols-1 items-start gap-x-18 gap-y-12 lg:grid-cols-2">
            <div class="flex flex-col gap-4.5">
                <h2 class="{{ $title }}">{{ $notes['title'] }}</h2>
                <p class="{{ $paragraph }}">{{ $notes['body'] }}</p>
                <p class="{{ $closing }}">{{ $notes['closing'] }}</p>
                {{-- The notes page is not written yet. --}}
                <a href="#" class="{{ $more }}">{{ $notes['link'] }} @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])</a>
            </div>
            <div class="flex flex-col gap-4.5">
                <h2 class="{{ $title }}">{{ $lists['title'] }}</h2>
                <p class="{{ $paragraph }}">{{ $lists['body'] }}</p>
                {{-- The lists page is not written yet. --}}
                <a href="#" class="{{ $more }}">{{ $lists['link'] }} @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])</a>
            </div>
        </div>

        {{-- A note, read with its Markdown drawn (knowledge/note.blade.php),
             and a list with its table (knowledge/list.blade.php), each
             without the column of folders. The Delete buttons are left
             out. --}}
        <div role="img" aria-label="{{ $lists['label'] }}" class="grid grid-cols-1 items-start gap-6 rounded-lg bg-identity-6/14 p-3 text-left text-body md:p-8 lg:grid-cols-2">
            <div class="{{ $window }} flex flex-col gap-5 p-4 md:p-5">
                <div class="flex flex-wrap items-start gap-x-4 gap-y-3">
                    <div class="flex min-w-48 flex-1 flex-col gap-2">
                        <span class="{{ $kindLine }}">@include('_partials.icon', ['name' => 'folder', 'size' => 14]) {{ $note['folder'] }} <span class="text-text-disabled">·</span> {{ $ui['note'] }}</span>
                        <span class="{{ $pageTitle }}">{{ $note['title'] }}</span>
                        <span class="text-xs text-text-muted">{{ $note['edited'] }}</span>
                    </div>
                    <span class="{{ $secondary }}">{{ $ui['edit'] }}</span>
                </div>

                <div class="flex flex-col gap-3 text-base leading-[1.65] text-text-secondary text-pretty">
                    <span class="{{ $sectionTitle }}">{{ $note['valve'] }}</span>
                    <p>{{ $note['valveBody'] }}</p>
                    <span class="{{ $sectionTitle }} mt-4">{{ $note['trip'] }}</span>
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

            <div class="{{ $window }} flex flex-col gap-5 p-4 md:p-5">
                <div class="flex flex-wrap items-start gap-x-4 gap-y-3">
                    <div class="flex min-w-48 flex-1 flex-col gap-2">
                        <span class="{{ $kindLine }}">@include('_partials.icon', ['name' => 'folder', 'size' => 14]) {{ $list['folder'] }} <span class="text-text-disabled">·</span> {{ $ui['list'] }}</span>
                        <span class="{{ $pageTitle }}">{{ $list['title'] }}</span>
                        <span class="text-xs text-text-muted">{{ $list['edited'] }} · {{ $list['count'] }}</span>
                    </div>
                    <span class="flex flex-wrap gap-2"><span class="{{ $secondary }}">{{ $ui['edit'] }}</span><span class="{{ $secondary }}">{{ $ui['editColumns'] }}</span></span>
                </div>

                <p class="text-base leading-[1.65] text-text-secondary text-pretty">{{ $list['description'] }}</p>

                <div class="{{ $panel }}">
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse text-[13.5px]">
                            <thead>
                                <tr>
                                    @foreach ($list['columns'] as $column)
                                        <th class="border-b border-border px-4 py-2.5 text-start text-xs font-medium whitespace-nowrap text-text-muted">{{ $column }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list['items'] as $item)
                                    <tr>
                                        @foreach ($item as $c => $cell)
                                            <td class="border-b border-border-subtle px-4 py-2.75 align-top leading-[1.55] {{ $c === 0 ? 'text-text' : 'text-text-secondary' }}">{{ $cell }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-wrap items-center gap-2 bg-surface-subtle px-3 py-2">
                        <span class="{{ $ghost }}">@include('_partials.icon', ['name' => 'plus', 'size' => 16]) {{ $ui['addItem'] }}</span>
                        <span class="ms-auto text-xs text-text-muted">{{ $list['count'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
