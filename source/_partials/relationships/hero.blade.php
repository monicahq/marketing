@php
    $hero = $copy['hero'];

    // The people in each group, in the order of `groups`.
    $people = [
        ['Monica Geller', 'Jack Geller', 'Judy Geller', 'Emma Geller-Green'],
        ['Rachel Green'],
        ['Chandler Bing', 'Joey Tribbiani', 'Phoebe Buffay'],
    ];
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[760px] flex-col items-center gap-5 text-center">
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede text-text-secondary text-pretty">{{ $hero['intro'] }}</p>
            <p class="text-lede font-medium text-text text-pretty">{{ $hero['lede'] }}</p>
            <div class="pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
            </div>
        </div>

        {{-- Ross Geller's relationships: family in one column, romantic and
             friends in the other. One picture of the product, read out by its
             label. --}}
        <div class="mt-16 rounded-lg bg-identity-5/14 p-4 md:p-10 lg:p-14">
            <div role="img" aria-label="{{ $hero['label'] }}" class="{{ $window }} mx-auto max-w-[760px]">
                <div class="flex flex-wrap items-center gap-3 border-b border-border px-5 py-4">
                    @include('_partials.avatar-initials', ['name' => 'Ross Geller', 'size' => 36])
                    <div class="flex min-w-0 flex-1 flex-col gap-0.5">
                        <span class="text-heading-sm font-semibold">Ross Geller</span>
                        <span class="{{ $stamp }}">{{ $hero['count'] }}</span>
                    </div>
                    <span class="{{ $button }} mn-btn-secondary">{{ $copy['add'] }}</span>
                </div>

                <div class="grid md:grid-cols-2">
                    {{-- The first group fills the left column, the others share
                         the right. --}}
                    @foreach ([[0], [1, 2]] as $c => $column)
                        <div class="flex flex-col py-2 {{ $c > 0 ? 'border-border max-md:border-t md:border-l' : '' }}">
                            @foreach ($column as $g)
                                @php($group = $hero['groups'][$g])
                                <div class="{{ $groupTitle }} {{ $loop->first ? '' : 'pt-4' }}">
                                    {{ $group['title'] }} <span class="ml-1">{{ count($people[$g]) }}</span>
                                </div>
                                @foreach ($people[$g] as $p => $name)
                                    <div class="{{ $row }}">
                                        @include('_partials.avatar-initials', ['name' => $name, 'size' => 30])
                                        <span class="min-w-0 flex-1 truncate text-body font-semibold">{{ $name }}</span>
                                        <span class="text-small text-text-secondary">{{ $group['roles'][$p] }}</span>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
