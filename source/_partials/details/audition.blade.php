@php($audition = $copy['audition'])

<section class="px-4 pt-24 md:px-6 lg:pt-30">
    <div class="{{ $container }} grid items-center gap-14 lg:grid-cols-2">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $audition['title'] }}</h2>
            @foreach ($audition['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
        </div>

        {{-- Joey's notes, and the reminder they turned into. --}}
        <div role="img" aria-label="{{ $audition['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-2/14 p-5 md:p-10">
            <div class="{{ $window }}">
                <div class="flex items-center gap-3 border-b border-border px-4.5 py-3.5">
                    @include('_partials.avatar-initials', ['name' => 'Joey Tribbiani', 'size' => 32])
                    <span class="min-w-0 flex-1 text-copy font-semibold">Joey Tribbiani</span>
                    <span class="{{ $stamp }}">{{ $audition['notes'] }}</span>
                </div>
                <div class="flex flex-col divide-y divide-border-subtle px-4.5">
                    @foreach ($audition['entries'] as $entry)
                        <div class="flex flex-col gap-1.5 py-4">
                            <p class="{{ $note }}">{{ $entry['text'] }}</p>
                            <span class="{{ $stamp }}">{{ $entry['added'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex flex-col gap-3 rounded-lg border border-border bg-canvas px-4.5 py-3.5 shadow-panel">
                <div class="flex flex-wrap items-center justify-between gap-3">
                    <span class="text-body font-semibold">{{ $audition['reminder'] }}</span>
                    <span class="mn-badge mn-badge-warning">{{ $audition['today'] }}</span>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $audition['remembered'] }}</span>
                    <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $audition['forgot'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
