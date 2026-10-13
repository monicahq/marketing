@php
    $zone = $copy['timezone'];
    $cities = [
        [$zone['lisbon'], 'Europe/Lisbon · 14:05', true],
        [$zone['lismore'], 'Australia/Sydney · 00:05', false],
    ];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- Last in the markup on a phone, so the words come before the
             picture; first on a wide screen, as the design alternates. --}}
        <div role="img" aria-label="{{ $zone['label'] }}" class="max-lg:order-last flex flex-col gap-4 rounded-lg bg-identity-2/14 p-5 md:p-10">
            <div class="{{ $window }}">
                <div class="flex flex-wrap gap-x-5 border-b border-border px-4">
                    @foreach ($zone['tabs'] as $t => $tab)
                        <span class="-mb-px border-b-2 py-3 text-base font-medium {{ $t === 0 ? 'border-text text-text' : 'border-transparent text-text-secondary' }}">{{ $tab }}</span>
                    @endforeach
                </div>
                <div class="flex flex-col gap-2 p-4">
                    <span class="flex items-center gap-2 rounded-md border border-text px-2.5 py-2 text-base ring-3 ring-text/20">
                        @include('_partials.icon', ['name' => 'search', 'size' => 14])
                        {{ $zone['query'] }}
                    </span>
                    <div class="flex flex-col">
                        @foreach ($cities as [$city, $where, $highlighted])
                            <span class="flex flex-wrap items-center gap-x-2.5 gap-y-0.5 rounded-md p-2 {{ $highlighted ? 'bg-hover' : '' }}">
                                @include('_partials.icon', ['name' => 'place', 'size' => 15])
                                <span class="flex-1 text-base {{ $highlighted ? 'font-medium' : '' }}">{{ $city }}</span>
                                <span class="text-xs text-text-muted tabular-nums">{{ $where }}</span>
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="{{ $window }} flex w-full max-w-90 items-center gap-3 self-end px-3.5 py-3">
                <span class="flex-none">@include('_partials.icon', ['name' => 'reminder', 'size' => 16])</span>
                <span class="flex min-w-0 flex-1 flex-col gap-0.5">
                    <span class="text-base font-semibold">{{ $zone['reminder'] }}</span>
                    <span class="{{ $stamp }}">{{ $zone['reminderWhen'] }}</span>
                </span>
            </div>
        </div>

        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $zone['title'] }}</h2>
            <p class="{{ $closing }}">{{ $zone['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $zone['body'] }}</p>
        </div>
    </div>
</section>
