{{--
    Copies the post's URL to the clipboard.

    The one control on the blog that cannot be built from a native element:
    there is no markup that writes to the clipboard. It carries `js-only`, so a
    reader without JavaScript is not offered a button that does nothing, and the
    address bar still holds the URL either way.

    The two labels come from lang/ through one json_encode into `x-data`,
    rather than being written into the x-text expression, so the copy stays
    translatable. The button ships with its resting label already rendered.
--}}
@php
    $labels = [
        'copy' => $page->t('blog.copyLink'),
        'copied' => $page->t('blog.copyLinkDone'),
    ];
@endphp

<div
    class="js-only ml-auto"
    x-data="{ copied: false, labels: {{ json_encode($labels, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) }} }"
>
    <button
        type="button"
        class="mn-btn mn-btn--secondary mn-btn--sm"
        x-on:click="navigator.clipboard.writeText(window.location.href).then(() => { copied = true; setTimeout(() => copied = false, 2000) })"
        x-text="copied ? labels.copied : labels.copy"
    >{{ $labels['copy'] }}</button>
</div>
