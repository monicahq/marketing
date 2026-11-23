@php
    $types = $copy['types'];
    $rows = [['book', 'blue'], ['car', 'rust'], ['activity', 'rust'], ['layers', 'teal']];
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} {{ $split }}">
        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $types['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $types['body'] }}</p>
            <p class="{{ $closing }}">{{ $types['closing'] }}</p>
        </div>

        {{-- The Possession types settings page: each type with its icon, its
             colour and how many fields and groups it carries. --}}
        <div class="rounded-lg bg-identity-3/14 p-4 md:p-8">
            <div role="img" aria-label="{{ $types['label'] }}" class="{{ $window }} flex flex-col gap-4 p-4 text-body md:p-5">
                <div class="flex flex-wrap items-start justify-between gap-3">
                    <span class="text-[20px] leading-tight font-semibold tracking-[-0.02em] text-text">{{ $ui['possessionTypes'] }}</span>
                    <span class="flex gap-2"><span class="{{ $secondary }} max-sm:hidden">{{ $ui['importJson'] }}</span><span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">{{ $ui['newType'] }}</span></span>
                </div>
                <ul class="{{ $panel }}">
                    @foreach ($types['screen'] as $t => [$name, $counts])
                        <li class="flex items-center gap-3 border-b border-border px-4 py-3 last:border-b-0">
                            <span class="grid size-8 flex-none place-items-center rounded-md {{ $tints[$rows[$t][1]] }}">@include('_partials.icon', ['name' => $rows[$t][0], 'size' => 16])</span>
                            <span class="min-w-0 flex-1">
                                <span class="block truncate font-semibold text-text">{{ $name }}</span>
                                <span class="mt-px block {{ $muted }}">{{ $counts }}</span>
                            </span>
                            @include('_partials.icon', ['name' => 'chevron-right', 'size' => 16, 'class' => 'text-text-disabled'])
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
