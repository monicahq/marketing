{{-- The vault's settings: its name and colour, its default template, its export. --}}
@php
    $s = $copy['settings'];
    $swatches = ['bg-identity-1', 'bg-identity-2', 'bg-identity-3', 'bg-identity-4', 'bg-identity-5', 'bg-identity-6', 'bg-identity-7', 'bg-identity-8'];
    $cardHead = 'flex items-center gap-3 border-b border-border px-4 py-3 text-body font-semibold text-text';
    $cardIcon = 'grid size-8 flex-none place-items-center rounded-md border border-border text-text-secondary';
    $field = 'rounded-md border border-border bg-canvas px-3 py-2 text-base text-text';
    $footer = 'flex justify-end border-t border-border bg-surface-subtle px-4 py-3';
@endphp
<div class="flex max-w-200 flex-col gap-6 p-5 md:p-7">
    <div class="flex flex-col gap-1.5">
        <span class="text-heading-sm font-semibold text-text">{{ $s['title'] }}</span>
        <p class="max-w-140 text-base text-text-secondary">{{ $s['intro'] }}</p>
    </div>

    <div class="{{ $card }} overflow-hidden">
        <div class="{{ $cardHead }}"><span class="{{ $cardIcon }}">@include('_partials.icon', ['name' => 'vault'])</span> {{ $s['nameCard'] }}</div>
        <div class="flex flex-col gap-4 p-4">
            <div class="flex flex-col gap-1.5">
                <span class="text-small font-medium text-text">{{ $s['name'] }}</span>
                <span class="{{ $field }}">{{ $copy['vault'] }}</span>
            </div>
            <div class="flex flex-col gap-1.5">
                <span class="text-small font-medium text-text">{{ $s['description'] }} <span class="font-normal text-text-muted">{{ $s['optional'] }}</span></span>
                <span class="{{ $field }} h-20 text-text-muted">{{ $s['descriptionValue'] }}</span>
                <span class="text-small text-text-muted">{{ $s['hint'] }}</span>
            </div>
            <div class="flex flex-col gap-2">
                <span class="text-small font-medium text-text">{{ $s['colour'] }}</span>
                <div class="flex flex-wrap items-center gap-2.5">
                    @foreach ($swatches as $w => $swatch)
                        <span class="size-8 rounded-md {{ $swatch }} {{ $w === 0 ? 'ring-2 ring-text ring-offset-2 ring-offset-canvas' : '' }}"></span>
                    @endforeach
                    <span class="ml-auto flex items-center gap-2.5 max-sm:hidden">
                        <span class="grid size-8 place-items-center rounded-md bg-identity-1 text-small font-semibold text-white">{{ mb_substr($copy['vault'], 0, 1) }}</span>
                        <span class="flex flex-col text-small leading-tight">
                            <span class="font-semibold text-text">{{ $copy['vault'] }}</span>
                            <span class="font-mono text-text-muted">#3f5fd0</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
        <div class="{{ $footer }}"><span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">{{ $s['save'] }}</span></div>
    </div>

    <div class="{{ $card }} overflow-hidden">
        <div class="{{ $cardHead }}"><span class="{{ $cardIcon }}">@include('_partials.icon', ['name' => 'people'])</span> {{ $s['templateCard'] }}</div>
        <div class="flex flex-col gap-1.5 p-4">
            <span class="text-small font-medium text-text">{{ $s['template'] }}</span>
            <span class="{{ $field }} flex max-w-90 items-center justify-between">{{ $s['templateValue'] }} @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14, 'class' => 'text-text-muted'])</span>
        </div>
        <div class="{{ $footer }}"><span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">{{ $s['save'] }}</span></div>
    </div>

    <div class="{{ $card }} overflow-hidden">
        <div class="{{ $cardHead }}"><span class="{{ $cardIcon }}">@include('_partials.icon', ['name' => 'file'])</span> {{ $s['exportCard'] }}</div>
        <p class="max-w-150 p-4 text-base text-text-secondary">{{ $s['exportBody'] }}</p>
    </div>
</div>
