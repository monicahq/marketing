@php
    $search = $copy['search'];
    $paint = $knowledge['list'];

    // Searching keeps only the folders holding a match, and in them only
    // the matches: Home, and its paint list, open beside the column.
    $found = [[$knowledge['folders'][0]['name'], '1', [['list', $paint['title']]]]];
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} flex flex-col gap-12">
        <div class="grid grid-cols-1 items-start gap-x-18 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $search['title'] }}</h2>
            <div class="flex flex-col gap-4.5">
                <p class="{{ $paragraph }}">{{ $search['body'] }}</p>
                <p class="{{ $paragraph }}">{{ $search['body2'] }}</p>
            </div>
        </div>

        {{-- Knowledge searched for a word written in one cell of the paint
             list: the column of folders keeps Home and that list, and the
             list is open beside it. Nothing is highlighted, as Erica
             highlights nothing: the match is the saved text. --}}
        <div role="img" aria-label="{{ $search['label'] }}" class="grid grid-cols-1 items-start gap-6 rounded-lg bg-identity-5/14 p-3 text-left text-body md:p-8 lg:grid-cols-[16rem_minmax(0,1fr)]">
            @include('_partials.knowledge.folders', ['folders' => $found, 'query' => $search['query'], 'contents' => false, 'current' => $paint['title']])
            <div class="{{ $window }} p-4 md:p-5">
                @include('_partials.knowledge.list', ['list' => $paint, 'lui' => $ui])
            </div>
        </div>
    </div>
</section>
