{{-- The open-source panel, dark as the pricing page's self-hosting one is:
     `dark` on the panel makes the design system resolve its dark values
     inside it, so the buttons and the list invert with it. --}}
@php
    $openSource = $copy['openSource'];
@endphp

<section class="{{ $section }}">
    <div class="dark {{ $container }} grid items-center gap-8 rounded-lg bg-surface-subtle p-6 text-text-secondary md:grid-cols-2 md:p-10">
        <div class="flex flex-col items-start gap-3.5">
            <span class="{{ $eyebrow }}">{{ $openSource['eyebrow'] }}</span>
            <h2 class="{{ $heading }}">{{ $openSource['title'] }}</h2>
            <p class="text-copy text-pretty">{{ $openSource['body'] }}</p>
            <div class="flex flex-wrap gap-2 pt-1.5">
                <a href="{{ $page->links['github'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $openSource['github'] }}</a>
                <a href="{{ $page->links['docs'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $openSource['docs'] }}</a>
            </div>
        </div>

        <ul class="flex flex-col rounded-lg border border-border bg-canvas">
            @foreach ($openSource['items'] as $item)
                <li class="flex flex-col gap-0.5 border-b border-border px-4.5 py-3.5 last:border-b-0">
                    <span class="text-copy font-semibold text-text">{{ $item['t'] }}</span>
                    <span class="text-small text-text-muted">{{ $item['b'] }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</section>
