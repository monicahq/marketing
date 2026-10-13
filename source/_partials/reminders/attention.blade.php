@php
    $attention = $copy['attention'];

    // Who each reminder is about, in the order of `overdue` and `upcoming` in
    // `lang/`, and how many reminders sit behind each filter, in the order of
    // `filters`. The first filter is the one selected.
    $overdueName = 'Phoebe Buffay';
    $upcomingNames = ['Joey Tribbiani', 'Rachel Green', 'Chandler Bing'];
    $counts = [5, 1, 1, 3, 18];

    $groupTitle = 'text-base';
    $rowTitle = 'text-copy font-semibold';
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $attention['title'] }}</h2>
            <div class="flex flex-col gap-4">
                @foreach ($attention['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
            </div>
        </div>

        {{-- A vault's reminders page: the record so far, the filters, what is
             overdue and what is coming up. --}}
        <div class="rounded-lg bg-identity-1/14 p-4 md:p-12">
            <div role="img" aria-label="{{ $attention['label'] }}" class="{{ $window }} flex flex-col gap-6 p-5 md:p-8">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <span class="text-heading font-semibold">{{ $attention['heading'] }}</span>
                    <span class="mn-btn mn-btn-primary pointer-events-none">{{ $copy['add'] }}</span>
                </div>

                <div class="flex flex-wrap items-center gap-x-8 gap-y-3 rounded-lg border border-border px-5 py-4">
                    @foreach ($attention['stats'] as $stat)
                        <div class="flex flex-col gap-0.5">
                            <span class="text-xl font-semibold">{{ $stat['value'] }}</span>
                            <span class="text-small text-text-secondary">{{ $stat['label'] }}</span>
                        </div>
                    @endforeach
                    <span class="text-base text-text-muted">{{ $attention['period'] }}</span>
                </div>

                <div class="flex flex-wrap gap-2">
                    @foreach ($attention['filters'] as $f => $filter)
                        <span class="mn-chip pointer-events-none" @if ($f === 0) aria-current="true" @endif>
                            {{ $filter }} <span class="mn-chip-count">{{ $counts[$f] }}</span>
                        </span>
                    @endforeach
                </div>

                <div class="flex flex-col gap-2.5">
                    <div class="{{ $groupTitle }}"><strong class="font-semibold">{{ $copy['overdue'] }}</strong> <span class="ml-2 text-text-muted">{{ $attention['overdueNote'] }}</span></div>
                    <div class="flex flex-wrap items-center gap-4 rounded-lg border border-border px-5 py-4">
                        @include('_partials.avatar-initials', ['name' => $overdueName, 'size' => 32])
                        <div class="flex min-w-50 flex-1 flex-col gap-1">
                            <span class="flex flex-wrap items-center gap-2.5 {{ $rowTitle }}">
                                {{ $attention['overdue']['text'] }}
                                <span class="mn-badge mn-badge-danger">{{ $copy['overdue'] }}</span>
                            </span>
                            <span class="text-small text-text-muted">{{ $attention['overdue']['detail'] }}</span>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="{{ $button }} mn-btn-secondary">{{ $copy['remembered'] }}</span>
                            <span class="{{ $button }} mn-btn-secondary">{{ $copy['forgot'] }}</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-2.5">
                    <div class="{{ $groupTitle }}"><strong class="font-semibold">{{ $attention['upcomingTitle'] }}</strong> <span class="ml-2 text-text-muted">{{ $attention['upcomingNote'] }}</span></div>
                    <div class="divide-y divide-border overflow-hidden rounded-lg border border-border">
                        @foreach ($attention['upcoming'] as $i => $row)
                            <div class="flex items-center gap-4 px-5 py-3.5">
                                @include('_partials.avatar-initials', ['name' => $upcomingNames[$i], 'size' => 32])
                                <div class="flex min-w-0 flex-col gap-1">
                                    <span class="{{ $rowTitle }}">{{ $row['text'] }}</span>
                                    <span class="text-small text-text-muted">{{ $row['detail'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
