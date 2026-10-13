@php
    $tree = $copy['tree'];

    // The family tree, drawn on a 420 by 310 grid as the design draws it:
    // each person's box, its left edge and top, and its width. Ross, the page
    // being read, is ringed.
    $nodes = [
        ['name' => 'Jack Geller', 'x' => 80, 'y' => 12, 'w' => 100],
        ['name' => 'Judy Geller', 'x' => 240, 'y' => 12, 'w' => 100],
        ['name' => 'Monica Geller', 'x' => 10, 'y' => 128, 'w' => 120],
        ['name' => 'Ross Geller', 'x' => 150, 'y' => 128, 'w' => 120, 'self' => true],
        ['name' => 'Rachel Green', 'x' => 290, 'y' => 128, 'w' => 120],
        ['name' => 'Emma Geller-Green', 'x' => 140, 'y' => 228, 'w' => 140],
    ];

    // Ross's immediate family on his overview, in the order of `groups`,
    // with each person's age.
    $family = [
        [['Jack Geller', 68], ['Judy Geller', 66]],
        [['Monica Geller', 57]],
        [['Rachel Green', 57]],
        [['Emma Geller-Green', 24]],
    ];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $tree['title'] }}</h2>
            <div class="flex flex-col gap-4">
                @foreach ($tree['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
            </div>
        </div>

        {{-- Ross's family tree, and his immediate family on his overview. --}}
        <div role="img" aria-label="{{ $tree['label'] }}" class="grid items-start gap-6 rounded-lg bg-identity-3/14 p-4 md:p-12 lg:grid-cols-2">
            <div class="{{ $window }} flex flex-col gap-3.5 p-5">
                <span class="text-copy font-semibold">{{ $tree['heading'] }}</span>
                {{-- Fixed width, as a tree is: it scrolls sideways on a phone
                     rather than squeezing the generations together. --}}
                <div class="overflow-x-auto rounded-lg border border-border bg-surface-subtle px-2 py-5">
                    <div class="relative mx-auto h-[310px] w-[420px]">
                        <svg width="420" height="310" viewBox="0 0 420 310" fill="none" stroke="currentColor" stroke-width="1.2" aria-hidden="true" class="absolute inset-0 text-border-strong">
                            <path d="M130 88V100H290V88M210 100V116M70 116H210M70 116V128M210 116V128M234 152H326M210 204V228"></path>
                        </svg>
                        @foreach ($nodes as $node)
                            <div class="absolute flex flex-col items-center gap-1.5" style="left: {{ $node['x'] }}px; top: {{ $node['y'] }}px; width: {{ $node['w'] }}px">
                                @if ($node['self'] ?? false)
                                    <span class="flex rounded-full ring-2 ring-text ring-offset-2 ring-offset-canvas">
                                        @include('_partials.avatar-initials', ['name' => $node['name'], 'size' => 48])
                                    </span>
                                    <span class="text-small font-semibold whitespace-nowrap">{{ $node['name'] }}</span>
                                @else
                                    @include('_partials.avatar-initials', ['name' => $node['name'], 'size' => 48])
                                    <span class="text-small whitespace-nowrap text-text-secondary">{{ $node['name'] }}</span>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                <span class="text-small text-text-muted">{{ $tree['note'] }}</span>
            </div>

            <div class="{{ $window }} pb-2">
                <div class="flex items-center gap-3 border-b border-border px-5 py-4">
                    <span class="grid size-7.5 flex-none place-items-center rounded-md border border-border bg-surface-subtle">
                        @include('_partials.icon', ['name' => 'family', 'size' => 16])
                    </span>
                    <span class="min-w-0 flex-1 text-copy font-semibold">{{ $tree['family'] }}</span>
                    <span class="{{ $button }} mn-btn-secondary">{{ $tree['add'] }}</span>
                </div>
                @foreach ($tree['groups'] as $g => $group)
                    <div class="{{ $g > 0 ? 'mt-1.5 border-t border-border' : '' }}">
                        <div class="{{ $groupTitle }}">{{ $group }} <span class="ml-1">{{ count($family[$g]) }}</span></div>
                        @foreach ($family[$g] as [$name, $age])
                            <div class="{{ $row }}">
                                @include('_partials.avatar-initials', ['name' => $name, 'size' => 30])
                                <span class="min-w-0 flex-1 truncate text-body font-semibold">{{ $name }}</span>
                                <span class="text-small text-text-muted">{{ $age }}</span>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
