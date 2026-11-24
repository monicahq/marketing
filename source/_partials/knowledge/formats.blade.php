@php
    $notes = $copy['notes'];
    $lists = $copy['lists'];
    $note = $copy['note'];
    $list = $copy['list'];
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} flex flex-col gap-14">
        <div class="grid grid-cols-1 items-start gap-x-18 gap-y-12 lg:grid-cols-2">
            <div class="flex flex-col gap-4.5">
                <h2 class="{{ $title }}">{{ $notes['title'] }}</h2>
                <p class="{{ $paragraph }}">{{ $notes['body'] }}</p>
                <p class="{{ $closing }}">{{ $notes['closing'] }}</p>
                <a href="{{ $page->route('notes') }}" class="{{ $more }}">{{ $notes['link'] }} @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])</a>
            </div>
            <div class="flex flex-col gap-4.5">
                <h2 class="{{ $title }}">{{ $lists['title'] }}</h2>
                <p class="{{ $paragraph }}">{{ $lists['body'] }}</p>
                <a href="{{ $page->route('lists') }}" class="{{ $more }}">{{ $lists['link'] }} @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])</a>
            </div>
        </div>

        {{-- A note, read with its Markdown drawn (knowledge/note.blade.php),
             and a list with its table (knowledge/list.blade.php), each
             without the column of folders. The Delete buttons are left
             out. --}}
        <div role="img" aria-label="{{ $lists['label'] }}" class="grid grid-cols-1 items-start gap-6 rounded-lg bg-identity-6/14 p-3 text-left text-body md:p-8 lg:grid-cols-2">
            <div class="{{ $window }} p-4 md:p-5">
                @include('_partials.knowledge.note', ['note' => $note, 'kui' => $ui, 'from' => null])
            </div>

            <div class="{{ $window }} p-4 md:p-5">
                @include('_partials.knowledge.list', ['list' => $list, 'lui' => $ui])
            </div>
        </div>
    </div>
</section>
