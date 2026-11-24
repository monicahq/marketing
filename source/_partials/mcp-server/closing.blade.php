@php($end = $copy['closing'])

<section class="border-t border-border px-4 py-24 md:px-6 lg:py-30">
    <div class="mx-auto flex max-w-[720px] flex-col items-center gap-5 text-center">
        {{-- Two assistants, one Monica in the middle. --}}
        <span aria-hidden="true" class="flex items-center gap-2.5">
            <span class="grid size-10 flex-none place-items-center rounded-md border border-border bg-surface-subtle text-text-muted">@include('_partials.icon', ['name' => 'device', 'size' => 18])</span>
            <span class="h-px w-7 bg-border-strong"></span>
            <span class="grid size-12 place-items-center rounded-lg border border-border bg-canvas shadow-panel"><img src="{{ $mark }}" alt="" width="32" height="29" loading="lazy" class="h-auto w-7"></span>
            <span class="h-px w-7 bg-border-strong"></span>
            <span class="grid size-10 flex-none place-items-center rounded-md border border-border bg-surface-subtle text-text-muted">@include('_partials.icon', ['name' => 'device', 'size' => 18])</span>
        </span>
        <h2 class="{{ $title }}">{{ $end['title'] }}</h2>
        <p class="{{ $paragraph }}">{{ $end['body'] }}</p>
        <div class="flex flex-wrap justify-center gap-2.5 pt-2">
            <a href="{{ $page->links['mcp'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $end['connect'] }}</a>
            <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $end['start'] }}</a>
        </div>
        <a href="{{ $page->route('aiMemory') }}" class="inline-flex items-center gap-1.5 text-copy font-medium">{{ $end['aiMemory'] }}@include('_partials.icon', ['name' => 'arrow-right', 'size' => 14])</a>
        <p class="{{ $note }}">{{ $end['note'] }}</p>
    </div>
</section>
