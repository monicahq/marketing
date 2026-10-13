@php
    $send = $copy['send'];

    // A made-up link on the application's own host, where shared pages live.
    $url = 'https://app.monicahq.com/s/1EG4dAysYFjtwL55uhOJlWxuv0ctmoDebDVWs0rg';
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $send['title'] }}</h2>
            <p class="{{ $closing }}">{{ $send['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $send['body'] }}</p>
        </div>

        {{-- The link, shown once, just after it was created. --}}
        <div class="rounded-lg bg-identity-7/14 p-5 md:p-10">
            <div role="img" aria-label="{{ $send['label'] }}" class="{{ $window }} flex flex-col gap-3.5 p-5">
                <div class="flex flex-col gap-1.5">
                    <span class="text-heading-sm font-semibold">{{ $send['heading'] }}</span>
                    <span class="text-base text-text-secondary text-pretty">{{ $send['warning'] }}</span>
                </div>
                <span class="rounded-md border border-border bg-surface-subtle px-3 py-2.5 font-mono text-xs wrap-anywhere">{{ $url }}</span>
                <div class="flex flex-wrap gap-2">
                    <span class="{{ $button }} mn-btn-primary">{{ $send['copy'] }}</span>
                    <span class="{{ $button }} mn-btn-secondary">{{ $send['open'] }}</span>
                </div>
                <div class="flex gap-2.5 border-t border-border pt-3.5 text-xs text-text-secondary">
                    <span class="flex-none">@include('_partials.icon', ['name' => 'mail', 'size' => 16])</span>
                    <span>{{ $send['note'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
