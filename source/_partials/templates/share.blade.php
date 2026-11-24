@php($share = $copy['share'])

<section class="px-4 py-24 md:px-6 lg:py-30">
    <div class="{{ $container }} grid items-center gap-14 lg:grid-cols-2">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $share['title'] }}</h2>
            @foreach ($share['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
        </div>

        <div class="rounded-lg bg-identity-1/14 p-5 md:p-10">
            <div role="img" aria-label="{{ $share['label'] }}" class="{{ $window }}">
                <div class="flex flex-col gap-1 border-b border-border px-5 py-4">
                    <span class="text-copy font-semibold">{{ $share['export'] }}</span>
                    <span class="text-small text-text-muted">{{ $copy['section'] }}</span>
                </div>
                <div class="grid gap-5 px-5 py-4 sm:grid-cols-2">
                    <div class="flex flex-col gap-2.5">
                        <span class="{{ $eyebrow }} text-success">{{ $share['inFile'] }}</span>
                        @foreach ($share['inFileItems'] as $item)
                            <span class="text-base font-medium">{{ $item }}</span>
                        @endforeach
                    </div>
                    <div class="flex flex-col gap-2.5">
                        <span class="{{ $eyebrow }} text-text-muted">{{ $share['stays'] }}</span>
                        @foreach ($share['staysItems'] as $item)
                            <span class="text-base text-text-secondary">{{ $item }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-wrap items-center justify-between gap-3 border-t border-border bg-surface-subtle px-5 py-3.5">
                    <span class="min-w-0 font-mono text-mono break-all text-text-secondary">{{ $share['file'] }}</span>
                    <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">{{ $share['download'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
