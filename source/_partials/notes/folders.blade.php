@php
    $section = $copy['folders'];

    // The column of folders as it stands beside the note being read: Home
    // open, the other folders folded, the note marked.
    $tree = [];
    foreach ($knowledge['folders'] as $f => $folder) {
        $tree[] = [$folder['name'], $folder['count'], $f === 0 ? array_map(fn ($d) => [$d[0], $d[1]], $knowledge['home']) : null];
    }
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} {{ $split }}">
        <div class="rounded-lg bg-identity-4/14 p-4 max-lg:order-2 md:p-10">
            <div role="img" aria-label="{{ $section['label'] }}" class="mx-auto w-full max-w-[17rem] text-body">
                @include('_partials.knowledge.folders', ['folders' => $tree, 'query' => null, 'contents' => false, 'current' => $note['title']])
            </div>
        </div>

        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $section['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $section['body'] }}</p>
            {{-- The folders page is not written yet. --}}
            <p class="{{ $paragraph }}">{!! $linked($section['body2'], ['link' => [$section['linkLabel'], '#']]) !!}</p>
        </div>
    </div>
</section>
