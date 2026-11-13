@php
    $lists = $copy['split'];

    // The people in each vault, in the order of their roles.
    $personal = ['Rachel Green', 'Chandler Bing', 'Ross Geller', 'Joey Tribbiani', 'Phoebe Buffay'];
    $work = ['Marcel Duval', 'Inès Ortega', 'Sam Whitfield'];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $lists['title'] }}</h2>
            <div class="flex flex-col gap-4">
                <p class="{{ $closing }}">{{ $lists['lead'] }}</p>
                <p class="{{ $paragraph }}">{{ $lists['body'] }}</p>
            </div>
        </div>

        {{-- Monica's two vaults side by side, and a search in Work that does
             not reach into Personal. --}}
        <div role="img" aria-label="{{ $lists['label'] }}" class="grid items-start gap-6 rounded-lg bg-identity-3/14 p-4 md:p-12 lg:grid-cols-2">
            <div class="{{ $window }}">
                @include('_partials.vaults.bar', ['vault' => $vaults[0], 'placeholder' => $lists['search']])
                <div class="py-1.5">
                    @foreach ($personal as $p => $name)
                        <div class="{{ $row }}">
                            @include('_partials.avatar-initials', ['name' => $name, 'size' => 30])
                            <span class="min-w-0 flex-1 truncate text-body font-semibold">{{ $name }}</span>
                            <span class="text-small text-text-secondary">{{ $lists['personalRoles'][$p] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="{{ $window }}">
                @include('_partials.vaults.bar', ['vault' => $vaults[1], 'query' => $lists['query']])
                <div class="flex flex-col items-center gap-2 px-6 py-8 text-center">
                    <span class="grid size-10 place-items-center rounded-md border border-border bg-surface-subtle text-text-muted">
                        @include('_partials.icon', ['name' => 'search', 'size' => 20])
                    </span>
                    <span class="text-copy font-semibold">{{ $lists['empty']['title'] }}</span>
                    <span class="max-w-[300px] text-small text-text-secondary text-pretty">{{ $lists['empty']['body'] }}</span>
                </div>
                <div class="border-t border-border py-1.5">
                    @foreach ($work as $p => $name)
                        <div class="{{ $row }}">
                            @include('_partials.avatar-initials', ['name' => $name, 'size' => 30])
                            <span class="min-w-0 flex-1 truncate text-body font-semibold">{{ $name }}</span>
                            <span class="text-small text-text-secondary">{{ $lists['workRoles'][$p] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
