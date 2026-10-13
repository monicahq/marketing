@php
    $hero = $copy['hero'];

    // Who each reminder in the vault is about, in the order of `overdue` and
    // `upcoming` in `lang/`.
    $overdueNames = ['Phoebe Buffay'];
    $upcomingNames = ['Joey Tribbiani', 'Chandler Bing'];

    $group = $eyebrow . ' border-t border-border px-5 py-2.5';
    $person = 'flex min-w-0 flex-1 flex-col gap-0.5';
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[760px] flex-col items-center gap-5 text-center">
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede text-text-secondary text-pretty">{{ $hero['lede'] }}</p>
            <p class="text-lede font-medium text-text text-pretty">{{ $hero['close'] }}</p>
            <div class="pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
            </div>
        </div>

        {{-- The week's reminders in a vault, and the email one of them sends.
             One picture of the product, read out by its label. --}}
        <div role="img" aria-label="{{ $hero['label'] }}" class="mt-16 grid items-start gap-6 rounded-lg bg-identity-1/14 p-4 md:p-10 lg:grid-cols-2 lg:p-14">
            <div class="{{ $window }}">
                <div class="flex items-center gap-3 px-5 pt-5 pb-4">
                    <span class="grid size-9 flex-none place-items-center rounded-md bg-identity-1/14 text-copy font-semibold text-identity-1">{{ mb_substr($hero['vault'], 0, 1) }}</span>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-xl font-semibold">{{ $hero['vault'] }}</span>
                        <span class="{{ $stamp }}">{{ $hero['count'] }}</span>
                    </div>
                </div>

                <div class="{{ $group }} border-b border-b-danger-edge bg-danger-subtle text-danger">{{ $hero['overdueTitle'] }}</div>
                @foreach ($hero['overdue'] as $i => $reminder)
                    <div class="flex flex-wrap items-center gap-3.5 px-5 py-3.5">
                        @include('_partials.avatar-initials', ['name' => $overdueNames[$i], 'size' => 36])
                        <div class="{{ $person }} min-w-35">
                            <span class="text-body font-semibold">{{ $overdueNames[$i] }}</span>
                            <span class="text-small text-text-secondary">{{ $reminder['text'] }}</span>
                        </div>
                        <span class="text-small font-medium text-danger">{{ $reminder['when'] }}</span>
                        <div class="flex gap-1.5">
                            <span class="{{ $button }} mn-btn-secondary">{{ $copy['remembered'] }}</span>
                            <span class="{{ $button }} mn-btn-secondary">{{ $copy['forgot'] }}</span>
                        </div>
                    </div>
                @endforeach

                <div class="{{ $group }} border-b bg-surface-subtle text-text-muted">{{ $hero['upcomingTitle'] }}</div>
                <div class="divide-y divide-border-subtle">
                    @foreach ($hero['upcoming'] as $i => $reminder)
                        <div class="flex items-center gap-3.5 px-5 py-3.5">
                            @include('_partials.avatar-initials', ['name' => $upcomingNames[$i], 'size' => 36])
                            <div class="{{ $person }}">
                                <span class="text-body font-semibold">{{ $upcomingNames[$i] }}</span>
                                <span class="text-small text-text-secondary">{{ $reminder['text'] }}</span>
                            </div>
                            <span class="text-small text-text-muted">{{ $reminder['when'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex flex-col gap-4 lg:pt-16">
                <div class="{{ $eyebrow }} text-identity-1">{{ $hero['inbox'] }}</div>
                <div class="{{ $window }}">
                    <div class="flex flex-col gap-1 border-b border-border px-4.5 py-3.5">
                        <span class="{{ $stamp }}">{{ $hero['from'] }}</span>
                        <span class="text-copy font-semibold">{{ $hero['upcoming'][0]['text'] }}</span>
                    </div>
                    <div class="flex flex-col gap-3.5 px-4.5 py-4">
                        <p class="text-base text-text-soft text-pretty">{{ $hero['email'] }}</p>
                        <div>
                            <span class="{{ $button }} mn-btn-primary">{{ $hero['open'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
