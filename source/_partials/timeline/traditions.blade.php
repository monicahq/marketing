@php
    $traditions = $copy['traditions'];

    // Each type's icon and colour, in the order of `types`. The last is
    // switched off, so it is drawn grey whatever its colour.
    $typeIcons = [['gift', 4], ['star', 5], ['calendar', 3], ['organization', null]];

    // The palette offered for a type: the eight identity colours, with
    // Thanksgiving's chosen. Literal class strings, for Tailwind's scanner.
    $swatches = ['bg-identity-1', 'bg-identity-2', 'bg-identity-3', 'bg-identity-4', 'bg-identity-5', 'bg-identity-6', 'bg-identity-7', 'bg-identity-8'];
    $chosen = 3;

    $labelClass = 'text-small font-medium';
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $traditions['title'] }}</h2>
            <div class="flex flex-col gap-4">
                <p class="{{ $closing }}">{{ $traditions['lead'] }}</p>
                <p class="{{ $paragraph }}">{{ $traditions['body'] }}</p>
            </div>
        </div>

        {{-- The list of life event types, and one of your own being edited. --}}
        <div role="img" aria-label="{{ $traditions['label'] }}" class="grid items-start gap-5 rounded-lg bg-identity-7/14 p-4 md:p-12 lg:grid-cols-2">
            <div class="{{ $window }}">
                <div class="flex items-center justify-between gap-3 border-b border-border px-4.5 py-3.5">
                    <span class="text-copy font-semibold">{{ $traditions['heading'] }}</span>
                    <span class="{{ $button }} mn-btn-primary">{{ $traditions['add'] }}</span>
                </div>
                <div class="divide-y divide-border-subtle">
                    @foreach ($traditions['types'] as $t => $type)
                        @php($off = isset($type['status']))
                        <div class="flex items-center gap-3 px-4.5 py-3 {{ $t === 0 ? 'bg-hover' : '' }} {{ $off ? 'text-text-muted' : '' }}">
                            <span class="{{ $tile }} size-7 {{ $off ? 'bg-hover' : $tiles[$typeIcons[$t][1]] }}">
                                @include('_partials.icon', ['name' => $typeIcons[$t][0], 'size' => 15])
                            </span>
                            <span class="flex-1 text-base {{ $off ? 'font-medium' : 'font-semibold' }}">{{ $type['name'] }}</span>
                            @if (isset($type['badge']))
                                <span class="mn-badge mn-badge-neutral">{{ $type['badge'] }}</span>
                            @else
                                <span class="text-xs {{ $off ? '' : 'text-text-muted' }}">{{ $type['status'] ?? $traditions['category'] }}</span>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="{{ $window }} flex flex-col gap-3.5 p-4.5">
                <div class="flex flex-wrap items-center justify-between gap-3">
                    <span class="text-heading-sm font-semibold">{{ $traditions['types'][0]['name'] }}</span>
                    <span class="flex items-center gap-2 text-small font-medium">
                        <span class="relative block h-4.5 w-8 rounded-full bg-primary">
                            <span class="absolute top-0.5 right-0.5 size-3.5 rounded-full bg-on-primary"></span>
                        </span>
                        {{ $traditions['offered'] }}
                    </span>
                </div>

                <div class="grid grid-cols-[auto_auto_minmax(0,1fr)] items-end gap-3">
                    <div class="flex flex-col gap-1.5">
                        <span class="{{ $labelClass }}">{{ $traditions['icon'] }}</span>
                        <span class="flex items-center gap-2 rounded-md border border-border px-2.5 py-1.75 text-identity-4">
                            @include('_partials.icon', ['name' => 'gift', 'size' => 16])
                            <span class="text-text-muted">@include('_partials.icon', ['name' => 'chevron-down', 'size' => 14])</span>
                        </span>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <span class="{{ $labelClass }}">{{ $traditions['colour'] }}</span>
                        <span class="flex items-center gap-2 rounded-md border border-border px-2.5 py-1.75">
                            <span class="block size-4 rounded-full {{ $swatches[$chosen] }}"></span>
                            <span class="text-text-muted">@include('_partials.icon', ['name' => 'chevron-down', 'size' => 14])</span>
                        </span>
                    </div>
                    <div class="flex min-w-0 flex-col gap-1.5">
                        <span class="{{ $labelClass }}">{{ $traditions['categoryLabel'] }}</span>
                        <span class="{{ $box }} truncate py-2">{{ $traditions['category'] }}</span>
                    </div>
                </div>

                <div class="flex flex-wrap gap-2">
                    @foreach ($swatches as $s => $swatch)
                        <span class="block size-5.5 rounded-full {{ $swatch }} {{ $s === $chosen ? 'ring-2 ring-text ring-offset-2 ring-offset-canvas' : '' }}"></span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
