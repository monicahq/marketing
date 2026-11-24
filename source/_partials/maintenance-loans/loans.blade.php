@php
    $loans = $copy['loans'];
    $j = $loans['joey'];
    $m = $loans['monica'];

    // The earlier loan, returned in August, is the same in both states.
    $earlier = [
        'name' => $monica, 'status' => $ui['returned'], 'tone' => 'neutral',
        'period' => $m['period'], 'span' => $m['length'], 'purpose' => null,
        'facts' => [[$ui['conditionOut'], $ui['likeNew'], true], [$ui['conditionBack'], $ui['likeNew'], true], [$ui['deposit'], $ui['notRecorded'], false]],
    ];
    $states = [
        [
            'caption' => $loans['before'],
            'lent' => true,
            'row' => [
                'name' => $joey, 'status' => $ui['withThem'], 'tone' => 'warning',
                'period' => $j['active'], 'span' => $loans['dueLine'], 'purpose' => $loans['purpose'],
                'facts' => [[$ui['conditionOut'], $ui['likeNew'], true], [$ui['dueBack'], $j['due'], true], [$ui['deposit'], $ui['notRecorded'], false]],
            ],
        ],
        [
            'caption' => $loans['after'],
            'lent' => false,
            'row' => [
                'name' => $joey, 'status' => $ui['returned'], 'tone' => 'neutral',
                'period' => $j['returned'], 'span' => $j['length'], 'purpose' => $loans['purpose'],
                'facts' => [[$ui['conditionOut'], $ui['likeNew'], true], [$ui['conditionBack'], $ui['used'], true], [$ui['deposit'], $ui['notRecorded'], false]],
            ],
        ],
    ];
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} flex flex-col gap-12">
        <div class="flex max-w-[620px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $loans['title'] }}</h2>
            <p class="{{ $paragraph }}">{!! $linked($loans['body'], ['link' => [$loans['contacts'], $page->route('people')]]) !!}</p>
            <p class="{{ $closing }}">{{ $loans['closing'] }}</p>
        </div>

        {{-- The book's Loans section twice, one state after the other: while
             Joey has it, then once it is back. The earlier loan to Monica is
             under both, because a returned loan stays in the list. --}}
        <div role="img" aria-label="{{ $loans['label'] }}" class="grid grid-cols-1 items-start gap-6 rounded-lg bg-identity-1/14 p-3 text-body md:p-8 lg:grid-cols-2">
            @foreach ($states as $state)
                <div class="flex flex-col gap-2.5">
                    <span class="{{ $stateCaption }} px-1">{{ $state['caption'] }}</span>
                    <div class="{{ $window }} flex flex-col gap-5 p-4">
                        @include('_partials.possessions.header', ['type' => $ui['books'], 'icon' => 'book', 'tint' => 'blue', 'name' => $copy['book']['name'], 'leaf' => $copy['book']['leaf'], 'at' => $copy['book']['at'], 'tags' => null, 'big' => false])

                        <div class="flex flex-wrap items-center justify-between gap-3">
                            <span class="{{ $sectionTitle }}">{{ $ui['loans'] }}</span>
                            <span class="{{ $primary }}">@include('_partials.icon', ['name' => 'plus', 'size' => 16]) {{ $ui['addLoan'] }}</span>
                        </div>

                        @if ($state['lent'])
                            @include('_partials.maintenance-loans.active')
                        @else
                            <p class="flex items-center gap-2 {{ $muted }}">@include('_partials.icon', ['name' => 'check', 'size' => 14]) {{ $ui['notLent'] }}</p>
                        @endif

                        <div class="flex flex-col gap-3">
                            <div class="flex flex-wrap items-baseline gap-x-3 gap-y-1">
                                <span class="{{ $cardTitle }}">{{ $ui['everyLoan'] }}</span>
                                <span class="{{ $muted }}">{{ $loans['count'] }}</span>
                                <span class="ms-auto text-xs text-text-muted">{{ $ui['newestFirst'] }}</span>
                            </div>
                            @include('_partials.maintenance-loans.loan', $state['row'])
                            @include('_partials.maintenance-loans.loan', $earlier)
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
