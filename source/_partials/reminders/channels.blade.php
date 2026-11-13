@php($channels = $copy['channels'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $channels['title'] }}</h2>
            <p class="{{ $closing }}">{{ $channels['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $channels['body'] }}</p>
        </div>

        {{-- The notification settings: two channels on, two ready to connect. --}}
        <div class="rounded-lg bg-identity-5/14 p-5 md:p-10">
            <div role="img" aria-label="{{ $channels['label'] }}" class="{{ $window }}">
                <div class="flex flex-col gap-0.5 border-b border-border px-4.5 py-3.5">
                    <span class="text-copy font-semibold">{{ $channels['heading'] }}</span>
                    <span class="{{ $stamp }}">{{ $channels['sub'] }}</span>
                </div>
                <div class="divide-y divide-border-subtle">
                    @foreach ($channels['rows'] as $row)
                        <div class="flex flex-wrap items-center gap-3 px-4.5 py-3.5">
                            <div class="flex min-w-40 flex-1 flex-col gap-0.5">
                                <span class="text-body font-semibold">{{ $row['name'] }}</span>
                                <span class="{{ $stamp }}">{{ $row['detail'] }}</span>
                            </div>
                            @isset($row['status'])
                                <span class="mn-badge mn-badge-success">{{ $row['status'] }}</span>
                            @endisset
                            @isset($row['action'])
                                <span class="{{ $button }} mn-btn-secondary">{{ $row['action'] }}</span>
                            @endisset
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
