{{--
    A line of code on a dark strip, with a button that copies it: the
    endpoint, mostly, which a reader is about to paste into their client.

    The button is the one control here that cannot be built from a native
    element, so it follows the blog's copy-link button: Alpine, labels from
    lang/ through json_encode, the resting label already rendered, and
    `js-only`, so a reader without JavaScript is not offered a button that does
    nothing. The text is selectable either way.

    `text` is what is shown and copied, `caption` an optional small heading
    inside the strip.

    @include('_partials.mcp-server.code', ['text' => $copy['endpoint'], 'caption' => $copy['reference']['hosted']])
--}}
@php
    $labels = ['copy' => $copy['copy'], 'copied' => $copy['copied']];
@endphp
<div
    class="dark flex flex-col overflow-hidden rounded-md border border-border bg-canvas text-text"
    x-data="{ copied: false, labels: {{ json_encode($labels, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) }} }"
>
    @isset($caption)
        <span class="border-b border-border px-3.5 py-2 text-xs text-text-muted">{{ $caption }}</span>
    @endisset
    <div class="flex items-center gap-3 py-2 pr-2 pl-3.5">
        <code class="min-w-0 flex-1 overflow-x-auto font-mono text-small whitespace-nowrap">{{ $text }}</code>
        <button
            type="button"
            class="js-only mn-btn mn-btn-secondary mn-btn-small flex-none"
            x-on:click="navigator.clipboard.writeText({{ json_encode($text, JSON_UNESCAPED_SLASHES) }}).then(() => { copied = true; setTimeout(() => copied = false, 2000) })"
            x-text="copied ? labels.copied : labels.copy"
        >{{ $labels['copy'] }}</button>
    </div>
</div>
