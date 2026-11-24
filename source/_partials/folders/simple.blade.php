@php
    $simple = $copy['simple'];
    $names = collect($knowledge['folders'])->pluck('name');

    // The menu of Personal, the second folder: rename it, move it above the
    // folder before it or below the one after, delete it.
    $menu = ['at' => 1, 'items' => [
        [$fui['rename'], false],
        [str_replace(':other', $names[0], $fui['moveAbove']), false],
        [str_replace(':other', $names[2], $fui['moveBelow']), false],
        [$fui['delete'], true],
    ]];
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} {{ $split }}">
        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $simple['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $simple['body'] }}</p>
            <p class="{{ $closing }}">{{ $simple['closing'] }}</p>
        </div>

        {{-- The column of folders, every folder at one level, Home open, and
             the actions menu of Personal open as Erica draws it. --}}
        <div class="rounded-lg bg-identity-4/14 p-4 md:p-10">
            <div role="img" aria-label="{{ $simple['label'] }}" class="mx-auto w-full max-w-[18rem] text-body">
                @include('_partials.knowledge.folders', ['folders' => $column(0), 'query' => null, 'contents' => false, 'current' => null, 'menu' => $menu])
            </div>
        </div>
    </div>
</section>
