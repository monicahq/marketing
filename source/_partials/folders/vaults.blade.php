@php
    $section = $copy['vaults'];

    // Each vault keeps its own Knowledge: Monica's folders in Personal, and
    // the Work vault's own, all folded.
    $work = array_map(fn ($folder) => [$folder['name'], $folder['count'], null], $section['work']);
    $vaults = [
        [$page->t('vaults.personal'), 'bg-identity-3', $column(null)],
        [$page->t('vaults.work'), 'bg-identity-6', $work],
    ];
@endphp

<section class="border-y border-border bg-surface-subtle px-4 py-24 md:px-6 lg:py-28">
    <div class="{{ $narrow }} {{ $split }}">
        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $section['title'] }}</h2>
            <p class="{{ $paragraph }}">{!! $linked($section['body'], ['link' => [$section['vaults'], $page->route('vaults')]]) !!}</p>
            <p class="{{ $paragraph }}">{!! $linked($section['body2'], ['link' => [$section['assistant'], $page->route('aiMemory')]]) !!}</p>
        </div>

        {{-- The column of folders in two vaults, under each vault's name and
             colour: the same screen, holding different Knowledge. --}}
        <div role="img" aria-label="{{ $section['label'] }}" class="grid grid-cols-1 items-start gap-4 text-body sm:grid-cols-2">
            @foreach ($vaults as [$name, $dot, $folders])
                <div class="flex flex-col gap-2.5">
                    <span class="flex items-center gap-2 px-1 text-small font-semibold text-text"><span class="size-2.5 rounded-full {{ $dot }}"></span>{{ $name }}</span>
                    @include('_partials.knowledge.folders', ['folders' => $folders, 'query' => null, 'contents' => false, 'current' => null])
                </div>
            @endforeach
        </div>
    </div>
</section>
