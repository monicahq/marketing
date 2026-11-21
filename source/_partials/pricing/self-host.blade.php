@php
    $selfHost = $copy['selfHost'];
    $terminal = $selfHost['terminal'];
@endphp

{{-- The free option first, as a dark panel. `dark` on the panel itself makes
     the design system resolve its dark values inside it, so the button, the
     checks and the terminal all invert with it and need no colours of their
     own. In dark mode the panel matches the rest of the page, which is what
     the design asks for: it is set apart by its surface, not by contrast. --}}
<section class="px-4 md:px-6">
    <div class="dark {{ $container }} grid grid-cols-[repeat(auto-fit,minmax(min(100%,300px),1fr))] items-center gap-10 rounded-lg bg-surface-subtle p-6 text-text-secondary md:p-10">
        <div class="flex flex-col items-start gap-4">
            <span class="{{ $eyebrow }}">{{ $selfHost['eyebrow'] }}</span>
            <h2 class="text-heading font-semibold text-balance text-text">{{ $selfHost['title'] }}</h2>
            <p class="text-body text-pretty">{{ $selfHost['body'] }}</p>
            @include('_partials.home.checklist', ['items' => $selfHost['items']])
            <a href="{{ $page->links['selfHostingGuide'] }}" class="mn-btn mn-btn-primary mt-2 no-underline hover:no-underline">{{ $selfHost['cta'] }}</a>
        </div>

        {{-- Plain text, so a screen reader reads the command as written. --}}
        <div class="overflow-hidden rounded-lg border border-border bg-canvas font-mono text-xs leading-[1.8]">
            <div class="border-b border-border px-3.5 py-2.5 text-text-muted">~/monica</div>
            <div class="overflow-x-auto px-4.5 py-4 text-text-soft">
                <div class="text-text-muted">{{ $terminal['comment'] }}</div>
                <div class="whitespace-pre"><span class="text-text-muted">$</span> docker run -d -p 8080:80 monica</div>
                <div class="text-text-muted">&nbsp;&nbsp;{{ $terminal['pulling'] }}</div>
                <div class="text-text-muted">&nbsp;&nbsp;{{ $terminal['starting'] }}</div>
                <div class="text-success">✓ {{ $terminal['running'] }}</div>
                <div class="text-text-muted">{{ $terminal['outro'] }}</div>
            </div>
        </div>
    </div>
</section>
