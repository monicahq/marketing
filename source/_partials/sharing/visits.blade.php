@php($visits = $copy['visits'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $visits['title'] }}</h2>
            <p class="{{ $closing }}">{{ $visits['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $visits['body'] }}</p>
        </div>

        {{-- The visit history of Rachel's link, with one failed password. --}}
        <div class="rounded-lg bg-identity-2/14 p-5 md:p-10">
            <div role="img" aria-label="{{ $visits['label'] }}" class="{{ $window }}">
                <div class="flex items-center gap-2.5 border-b border-border px-4 py-3">
                    <span class="{{ $iconTile }}">@include('_partials.icon', ['name' => 'activity', 'size' => 15])</span>
                    <span class="flex-1 text-body font-semibold">{{ $visits['heading'] }}</span>
                    <span class="{{ $stamp }}">{{ $visits['total'] }}</span>
                </div>
                <div class="divide-y divide-border">
                    @foreach ($visits['entries'] as $entry)
                        <div class="flex flex-wrap items-center gap-3 px-4 py-3">
                            <div class="flex min-w-40 flex-1 flex-col gap-0.5">
                                <span class="text-base font-semibold">{{ $entry['what'] }}</span>
                                <span class="{{ $stamp }}">{{ $entry['when'] }}</span>
                            </div>
                            @isset($entry['badge'])
                                <span class="mn-badge mn-badge-warning">{{ $entry['badge'] }}</span>
                            @endisset
                        </div>
                    @endforeach
                </div>
                <div class="border-t border-border bg-surface-subtle px-4 py-2.5 {{ $stamp }}">{{ $visits['note'] }}</div>
            </div>
        </div>
    </div>
</section>
