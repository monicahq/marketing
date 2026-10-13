@php($logs = $copy['logs'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $logs['title'] }}</h2>
            <p class="{{ $closing }}">{{ $logs['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $logs['body'] }}</p>
        </div>

        {{-- The activity log: what happened, when, and from which address.
             The addresses are from the ranges set aside for documentation. --}}
        <div class="rounded-lg bg-identity-6/14 p-5 md:p-10">
            <div role="img" aria-label="{{ $logs['label'] }}" class="{{ $window }}">
                <div class="mn-tabs pointer-events-none px-4">
                    <span class="mn-tab" aria-selected="true">{{ $logs['activity'] }}</span>
                    <span class="mn-tab">{{ $logs['emails'] }}</span>
                </div>
                @foreach ($logs['entries'] as $i => [$what, $when])
                    <div class="flex flex-wrap items-center gap-3 px-4 py-3 {{ $loop->last ? '' : 'border-b border-border' }}">
                        <span class="flex min-w-40 flex-1 flex-col gap-0.5">
                            <span class="text-base font-semibold">{{ $what }}</span>
                            <span class="{{ $stamp }}">{{ $when }}</span>
                        </span>
                        <span class="font-mono text-xs text-text-secondary">{{ ['203.0.113.24', '203.0.113.24', '198.51.100.7', '203.0.113.24'][$i] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
