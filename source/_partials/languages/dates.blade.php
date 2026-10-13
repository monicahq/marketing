@php
    $dates = $copy['dates'];

    // One choice in a drawn group. The chosen one has the doubled border the
    // design draws; the rest only the hairline.
    $option = 'rounded-md border px-2.5 py-2 text-base tabular-nums';
    $chosen = 'border-text font-medium ring-1 ring-text ring-inset';
    $formats = [['10/13/2026', false], ['13/10/2026', true], ['2026-10-13', false], [$dates['formatLong'], false]];
    $clocks = [[$dates['twelve'], false], [$dates['twentyFour'], true]];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $dates['title'] }}</h2>
            <p class="{{ $closing }}">{{ $dates['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $dates['body'] }}</p>
        </div>

        {{-- Day before month, the 24-hour clock and a space between
             thousands, and the line they produce. --}}
        <div role="img" aria-label="{{ $page->t('languages.dates.label', [':preview' => $dates['previewValue']]) }}" class="rounded-lg bg-identity-1/14 p-5 md:p-10">
            <div class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    <span class="text-base font-semibold">{{ $dates['heading'] }}</span>
                </div>
                <div class="flex flex-col gap-4 p-4">
                    <div class="flex flex-col gap-1.5">
                        <span class="text-small font-medium">{{ $dates['format'] }}</span>
                        <div class="grid grid-cols-2 gap-1.5 sm:grid-cols-4 lg:grid-cols-2 xl:grid-cols-4">
                            @foreach ($formats as [$value, $selected])
                                <span class="{{ $option }} {{ $selected ? $chosen : 'border-border' }}">{{ $value }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <span class="text-small font-medium">{{ $dates['clock'] }}</span>
                        <div class="grid grid-cols-2 gap-1.5">
                            @foreach ($clocks as [$value, $selected])
                                <span class="{{ $option }} {{ $selected ? $chosen : 'border-border' }}">{{ $value }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <span class="text-small font-medium">{{ $dates['numbers'] }}</span>
                        <span class="{{ $option }} flex items-center justify-between border-border">
                            1 234,56
                            <span class="text-text-muted">@include('_partials.icon', ['name' => 'chevron-down', 'size' => 12])</span>
                        </span>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2.5 border-t border-border bg-surface-subtle px-4 py-3">
                    <span class="{{ $eyebrow }} text-text-muted">{{ $dates['preview'] }}</span>
                    <span class="text-base tabular-nums">{{ $dates['previewValue'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
