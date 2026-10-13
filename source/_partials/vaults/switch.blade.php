@php
    $switch = $copy['switch'];
    $select = 'flex items-center justify-between gap-2 rounded-md border border-border bg-canvas px-2.5 py-2';
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $switch['title'] }}</h2>
            <p class="{{ $closing }}">{{ $switch['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $switch['body'] }}</p>
        </div>

        {{-- The vault switcher, open while in Work, and the default vault
             setting. --}}
        <div role="img" aria-label="{{ $switch['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-7/14 p-5 md:p-10">
            <div class="flex w-full max-w-[340px] flex-col gap-2">
                <div class="{{ $select }} gap-2.5">
                    <span class="{{ $tile }} size-6 text-xs {{ $vaults[1]['solid'] }}">{{ $initial($vaults[1]['name']) }}</span>
                    <span class="flex-1 text-body font-semibold">{{ $vaults[1]['name'] }}</span>
                    @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14])
                </div>
                <div class="{{ $window }} flex flex-col p-1">
                    <div class="{{ $eyebrow }} px-2 pt-1.5 pb-1 text-text-muted">{{ $copy['heading'] }}</div>
                    @foreach ($vaults as $v => $vault)
                        <div class="flex items-center gap-2.5 rounded-md p-2 {{ $v === 1 ? 'bg-hover' : '' }}">
                            <span class="{{ $tile }} size-6 text-xs {{ $vault['solid'] }}">{{ $initial($vault['name']) }}</span>
                            <div class="flex min-w-0 flex-1 flex-col gap-px">
                                <span class="text-body font-medium">{{ $vault['name'] }}</span>
                                <span class="{{ $stamp }}">{{ $switch['counts'][$v] }}</span>
                            </div>
                            @if ($v === 0)
                                <span class="mn-badge mn-badge-neutral">{{ $copy['default'] }}</span>
                            @else
                                @include('_partials.icon', ['name' => 'check', 'size' => 16])
                            @endif
                        </div>
                    @endforeach
                    <div class="my-1 border-t border-border"></div>
                    <div class="flex items-center gap-2.5 p-2 text-body text-text-secondary">
                        @include('_partials.icon', ['name' => 'vault', 'size' => 16])
                        {{ $switch['all'] }}
                    </div>
                </div>
            </div>

            <div class="{{ $window }} flex w-full max-w-[340px] flex-col gap-1.5 self-end p-4">
                <span class="text-small font-medium">{{ $switch['defaultLabel'] }}</span>
                <span class="{{ $select }} text-base">
                    {{ $vaults[0]['name'] }}
                    @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14])
                </span>
                <span class="{{ $stamp }}">{{ $switch['hint'] }}</span>
            </div>
        </div>
    </div>
</section>
