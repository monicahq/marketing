@php
    $hero = $copy['hero'];
    $parts = $hero['parts'];
    $heading = 'text-lede-sm font-semibold tracking-[-0.02em] text-text';
    // A part's name, beside the row it names, on a wide screen.
    $part = 'flex items-center justify-end gap-2 text-caption font-semibold tracking-[0.08em] whitespace-nowrap text-text-secondary uppercase max-lg:hidden';
    $rule = 'h-px w-8 bg-text-secondary';
@endphp

<section class="px-4 pt-22 pb-8 md:px-6">
    <div class="mx-auto flex w-full max-w-[1120px] flex-col gap-14">
        <div class="flex flex-col gap-6">
            <span class="flex items-center gap-2.5 text-caption font-semibold tracking-[0.1em] text-text-muted uppercase">
                <span class="grid size-7 place-items-center rounded-md bg-identity-6/14 text-identity-6">@include('_partials.icon', ['name' => 'note', 'size' => 16])</span>
                {{ $hero['eyebrow'] }}
            </span>
            <h1 class="max-w-[900px] text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <div class="grid grid-cols-1 items-end gap-x-16 gap-y-5 md:grid-cols-2">
                <p class="text-lede-md font-medium text-text text-pretty">{{ $hero['lede'] }}</p>
                <div class="flex flex-col items-start gap-4">
                    <p class="{{ $paragraph }}">{!! $linked($hero['body'], ['link' => [$hero['knowledge'], $page->route('knowledge')]]) !!}</p>
                    <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
                </div>
            </div>
        </div>

        {{-- The note being read (knowledge/note.blade.php), with the name of
             each part beside it. The note is one window; on a wide screen
             its rows share a grid with the names, so each name sits level
             with the row it names. --}}
        <div class="flex justify-center rounded-lg bg-identity-6/14 px-3 py-6 md:px-12 md:py-16">
            <div role="img" aria-label="{{ $hero['label'] }}" class="grid w-full max-w-[640px] grid-cols-1 gap-x-6 text-body lg:-ms-30 lg:max-w-[760px] lg:grid-cols-[7.5rem_minmax(0,1fr)]">
                <span class="{{ $part }} lg:row-start-1">{{ $parts['folder'] }}<span class="{{ $rule }}"></span></span>
                <span class="{{ $part }} lg:row-start-2">{{ $parts['title'] }}<span class="{{ $rule }}"></span></span>
                <span class="{{ $part }} lg:row-start-3">{{ $parts['heading'] }}<span class="{{ $rule }}"></span></span>
                <span class="{{ $part }} lg:row-start-5">{{ $parts['heading'] }}<span class="{{ $rule }}"></span></span>
                <span class="{{ $part }} lg:row-start-6">{{ $parts['checklist'] }}<span class="{{ $rule }}"></span></span>

                <div class="{{ $window }} grid gap-y-3 px-5 py-6 text-base leading-[1.65] text-text-secondary text-pretty md:px-8 lg:col-start-2 lg:row-span-6 lg:row-start-1 lg:grid-rows-subgrid">
                    <span class="flex items-center gap-1.5 text-small text-text-muted">@include('_partials.icon', ['name' => 'folder', 'size' => 14]) {{ $note['folder'] }} <span class="text-text-disabled">·</span> {{ $kui['note'] }}</span>
                    <span class="flex flex-wrap items-start gap-x-4 gap-y-2">
                        <span class="flex min-w-48 flex-1 flex-col gap-1">
                            <span class="text-[26px] leading-tight font-semibold tracking-[-0.03em] text-text">{{ $note['title'] }}</span>
                            <span class="text-xs text-text-muted">{{ $note['edited'] }}</span>
                        </span>
                        <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $kui['edit'] }}</span>
                    </span>
                    <span class="{{ $heading }} mt-3 self-center">{{ $note['valve'] }}</span>
                    <p>{{ $note['valveBody'] }}</p>
                    <span class="{{ $heading }} mt-3 self-center">{{ $note['trip'] }}</span>
                    <span class="flex flex-col gap-1">
                        @foreach ($note['tasks'] as [$task, $done])
                            <span class="flex items-baseline gap-2">
                                <span class="relative top-0.5 grid size-3.75 flex-none place-items-center rounded-xs border {{ $done ? 'border-text bg-text text-canvas' : 'border-border-strong bg-canvas' }}">@if ($done)@include('_partials.icon', ['name' => 'check', 'size' => 11])@endif</span>
                                {{ $task }}
                            </span>
                        @endforeach
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
