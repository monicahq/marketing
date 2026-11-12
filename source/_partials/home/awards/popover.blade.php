{{--
    The card that pops open under an award badge (`awards/badge`) while the
    pointer is on it or the keyboard focus is in it: a panda by day and by
    night (`image`, the base name of four files in `assets/images/home/`:
    `-day`, `-night` and an `@2x` of each), and the copy beside it (`text`,
    one string or a list of paragraphs). `imageWidth` and `width` size the
    picture and the card. `place`, `arrow` and `origin` put the card, its
    arrow and the point it grows from: centred under the badge by default, and
    held to the outer edge for the badges at either end of the row on a wide
    screen, so the card never runs off the page. All of them are literal
    classes from `home/awards`, for Tailwind's scanner.

    CSS only. The badge's wrapper is `group/badge`, and its hover or
    focus-within shows the card. The outer box starts at the badge's bottom
    edge and its top padding is the gap, so the pointer can travel from the
    badge to the card without crossing empty space and closing it.

    "Pop" is the one place the site scales and overshoots, by the owner's
    decision: the card grows from 75% at its top edge with `ease-pop`. It only
    animates open; closing is immediate. `motion-reduce` drops the movement
    and keeps the card. Two images rather than a <picture>, so the night one
    follows the theme button and not only the system setting.
--}}
@php
    $base = '/assets/images/home/' . $image;
    $day = $base . '-day.webp';
    $night = $base . '-night.webp';
    $daySize = $page->imageSize($day);
    $nightSize = $page->imageSize($night);
@endphp
<div class="invisible absolute top-full z-40 {{ $width }} max-w-[calc(100vw-2rem)] pt-3 {{ $place }} group-focus-within/badge:visible group-hover/badge:visible">
    <div
        id="{{ $id }}"
        role="tooltip"
        class="relative flex {{ $origin }} scale-75 items-center gap-4 rounded-lg border border-border bg-surface p-4 text-left opacity-0 shadow-pop transition-[opacity,scale] duration-0 ease-pop group-focus-within/badge:scale-100 group-focus-within/badge:opacity-100 group-focus-within/badge:duration-300 group-hover/badge:scale-100 group-hover/badge:opacity-100 group-hover/badge:duration-300 motion-reduce:scale-100 motion-reduce:transition-none"
    >
        <span aria-hidden="true" class="absolute -top-1.5 size-3 -translate-x-1/2 rotate-45 {{ $arrow }} border-t border-l border-border bg-surface"></span>
        <div class="{{ $imageWidth }} flex-none">
            <img
                src="{{ $day }}"
                srcset="{{ $day }} 1x, {{ $base }}-day@2x.webp 2x"
                alt=""
                width="{{ $daySize['width'] }}"
                height="{{ $daySize['height'] }}"
                loading="lazy"
                decoding="async"
                class="block h-auto w-full dark:hidden"
            >
            <img
                src="{{ $night }}"
                srcset="{{ $night }} 1x, {{ $base }}-night@2x.webp 2x"
                alt=""
                width="{{ $nightSize['width'] }}"
                height="{{ $nightSize['height'] }}"
                loading="lazy"
                decoding="async"
                class="hidden h-auto w-full rounded-md dark:block"
            >
        </div>
        <div class="flex flex-col gap-2 text-small text-text-secondary">
            @foreach ((array) $text as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach
        </div>
    </div>
</div>
