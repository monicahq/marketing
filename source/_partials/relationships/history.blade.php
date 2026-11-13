@php
    $history = $copy['history'];

    // Ross's partners, in the order of `partners`: the current one first.
    $partners = ['Rachel Green', 'Emily Waltham', 'Carol Willick'];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $history['title'] }}</h2>
            <p class="{{ $closing }}">{{ $history['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $history['body'] }}</p>
        </div>

        {{-- Ross's romantic history, and the dates of his marriage to Emily
             being entered. --}}
        <div role="img" aria-label="{{ $history['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-7/14 p-5 md:p-10">
            <div class="{{ $window }}">
                <div class="flex flex-col gap-0.5 border-b border-border px-4.5 py-3.5">
                    <span class="text-copy font-semibold">{{ $history['heading'] }}</span>
                    <span class="{{ $stamp }}">Ross Geller</span>
                </div>
                @foreach ($partners as $p => $name)
                    @if ($p < 2)
                        <div class="{{ $eyebrow }} px-4.5 pt-3 pb-1 text-text-muted {{ $p > 0 ? 'border-t border-border' : '' }}">{{ $p === 0 ? $history['current'] : $history['past'] }}</div>
                    @endif
                    <div class="flex flex-wrap items-center gap-3 px-4.5 py-2.5 {{ $p === 2 ? 'border-t border-border-subtle' : '' }} {{ $loop->last || $p === 0 ? 'pb-4' : '' }}">
                        @include('_partials.avatar-initials', ['name' => $name, 'size' => 32])
                        <div class="flex min-w-40 flex-1 flex-col gap-0.5">
                            <span class="text-body font-semibold">{{ $name }}</span>
                            <span class="{{ $stamp }}">{{ $history['partners'][$p] }}</span>
                        </div>
                        @if ($p > 0)
                            <span class="mn-badge mn-badge-neutral">{{ $history['ended'] }}</span>
                        @endif
                    </div>
                @endforeach
            </div>

            <div class="{{ $window }} grid w-full max-w-[340px] grid-cols-2 gap-3 self-end p-4">
                @include('_partials.drawn-field', ['label' => $history['started'], 'value' => '1998'])
                @include('_partials.drawn-field', ['label' => $history['endedLabel'], 'optional' => $history['optional'], 'value' => '1999', 'focused' => true])
            </div>
        </div>
    </div>
</section>
