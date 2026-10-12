@php
    $copy = $page->t('home.agents');
@endphp

<section class="bg-ground-sage px-4 pt-6 pb-30 md:px-6">
    <div class="mx-auto flex max-w-page flex-wrap items-center gap-14">
        <div class="flex flex-[1_1_340px] flex-col gap-4.5">
            <span class="text-caption font-medium tracking-[0.08em] text-ground-sage-ink uppercase">{{ $copy['eyebrow'] }}</span>
            <h2 class="text-display-section font-semibold text-balance">{{ $copy['title'] }}</h2>
            <p class="text-copy-lg text-text-secondary">{{ $copy['body'] }}</p>
            <div class="flex flex-wrap gap-2.5 pt-1.5">
                <a href="{{ $page->links['mcp'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $copy['mcp'] }}</a>
                <a href="{{ $page->links['api'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $copy['api'] }}</a>
            </div>
        </div>

        {{-- An agent's conversation with Monica, as it would scroll past in a
             terminal, and the same thing from a chat app on top of it. Plain
             text, so a screen reader reads the exchange itself. The terminal
             stays dark in both themes, because that is what a terminal is. --}}
        <div class="relative min-w-0 flex-[1.3_1_440px] pb-30">
            <div class="overflow-hidden rounded-lg bg-surface-inverse shadow-pop">
                <div class="flex h-9 items-center gap-1.5 border-b border-on-inverse-border px-3.5">
                    <span aria-hidden="true" class="size-2.5 rounded-full bg-on-inverse-selected"></span>
                    <span aria-hidden="true" class="size-2.5 rounded-full bg-on-inverse-selected"></span>
                    <span aria-hidden="true" class="size-2.5 rounded-full bg-on-inverse-selected"></span>
                    <span class="flex-1 text-center font-mono text-mono text-on-inverse-muted">~/projects</span>
                </div>
                <div class="overflow-x-auto px-5.5 pt-5 pb-18 font-mono text-small leading-[1.75] text-on-inverse">
                    <div><span class="text-on-inverse-muted">&gt;</span> <span class="text-on-inverse-strong">{{ $copy['prompt'] }}</span></div>
                    <div class="h-2.5"></div>
                    <div><span class="text-terminal-ok">●</span> monica · <span class="text-on-inverse-strong">search_contacts</span>(<span class="text-terminal-string">"Rachel"</span>)</div>
                    <div><span class="text-terminal-ok">●</span> monica · <span class="text-on-inverse-strong">list_gift_ideas</span>(contact: <span class="text-terminal-string">"Rachel Green"</span>)</div>
                    <div class="h-2.5"></div>
                    <div class="text-on-inverse-strong">{{ $copy['answer'] }}</div>
                    <div>{{ $copy['saved'] }}</div>
                    @foreach ($copy['ideas'] as $idea)
                        <div class="pl-3.5">– {{ $idea }}</div>
                    @endforeach
                </div>
            </div>

            <div class="absolute right-0 bottom-0 flex w-[min(340px,82%)] flex-col gap-2.5 rounded-lg border border-border bg-canvas p-3.5 shadow-pop md:-right-2">
                <div class="max-w-[85%] self-end rounded-lg bg-hover px-3 py-2 text-base text-text">{{ $copy['ask'] }}</div>
                <div class="flex items-center gap-1.5 text-mono text-text-muted">
                    @include('_partials.icon', ['name' => 'link', 'size' => 13])
                    {{ $copy['used'] }}
                </div>
                <div class="text-base text-text-soft">{{ $copy['reply'] }}</div>
            </div>
        </div>
    </div>
</section>
