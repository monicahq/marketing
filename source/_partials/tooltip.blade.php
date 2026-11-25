{{--
    A one-line tooltip under an icon button, as the homepage's sales joke
    draws its own. It shows on hover and on keyboard focus, with no script,
    and repeats nothing the button needs to work.

    The parent carries `group relative`; the button carries
    `aria-describedby` naming `id`. Keyboard focus only (`:focus-visible`),
    so a mouse click on the theme button does not leave it pinned open.

    @include('_partials.tooltip', ['id' => 'header-github-tip', 'text' => '…'])
--}}
<div
    id="{{ $id }}"
    role="tooltip"
    class="pointer-events-none invisible absolute top-[calc(100%+10px)] left-1/2 z-50 -translate-x-1/2 rounded-md border border-border bg-canvas px-2.5 py-1.5 text-small font-medium whitespace-nowrap text-text opacity-0 shadow-pop transition-opacity duration-150 ease-standard group-hover:visible group-hover:opacity-100 group-has-focus-visible:visible group-has-focus-visible:opacity-100"
>
    <span aria-hidden="true" class="absolute -top-[5px] left-1/2 size-[9px] -translate-x-1/2 rotate-45 border-t border-l border-border bg-canvas"></span>
    {{ $text }}
</div>
