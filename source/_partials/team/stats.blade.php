{{--
    Five facts about the project, in one bordered row.

    The borders are drawn by the cells rather than the container, so the grid
    keeps working when it reflows. Every cell carries a left and a top border
    and then removes the ones that would sit on an outside edge: on the wide
    grid that is the first cell's left border and every top border, and on the
    two-column one it is the left border of each odd cell and the top border of
    the first row. `overflow-hidden` on the container is what keeps the cells
    from squaring off its rounded corners.

    Two of these are words rather than numbers. "Hundreds" and "Millions" are
    the honest shape of a figure that nothing here can count and that would be
    wrong a week after it shipped.
--}}
@php
    $cell = 'border-t border-l border-border px-5 py-6 max-lg:odd:border-l-0 max-lg:[&:nth-child(-n+2)]:border-t-0 lg:border-t-0 lg:first:border-l-0';
@endphp

<section>
    <div class="mx-auto w-full max-w-marketing px-4 pb-16 md:px-8">
        <div class="grid grid-cols-2 overflow-hidden rounded-lg border border-border lg:grid-cols-5">
            @foreach ($page->t('team.stats') as $stat)
                <div class="{{ $cell }}">
                    <div class="text-heading font-semibold">{{ $stat['value'] }}</div>
                    <div class="mt-2 text-small text-text-secondary">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
