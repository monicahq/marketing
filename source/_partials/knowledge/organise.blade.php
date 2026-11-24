@php
    $section = $copy['folderSection'];

    // Searching Knowledge filters the column of folders down to what
    // matches: one folder, one note.
    $found = [[$copy['folders'][0]['name'], '1', [['note', $copy['note']['title']]]]];
@endphp

<section class="border-y border-border bg-surface-subtle px-4 py-24 md:px-6 lg:py-28">
    <div class="{{ $narrow }} {{ $split }}">
        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $section['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $section['body'] }}</p>
            <p class="{{ $closing }}">{{ $section['closing'] }}</p>
            <a href="{{ $page->route('folders') }}" class="{{ $more }}">{{ $section['link'] }} @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])</a>
        </div>

        <div class="rounded-lg bg-identity-3/14 p-4 md:p-10">
            <div role="img" aria-label="{{ $section['label'] }}" class="mx-auto w-full max-w-[18rem] text-body">
                @include('_partials.knowledge.folders', ['folders' => $found, 'query' => $section['query'], 'contents' => false, 'current' => null])
            </div>
        </div>
    </div>
</section>
