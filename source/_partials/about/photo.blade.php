{{--
    One of the two of us, as a round photo. Decorative: the name is always
    written out beside it. Below the fold wherever it appears, so lazy.

    @include('_partials.about.photo', ['src' => $photos[0], 'class' => 'size-11'])
--}}
@php
    $size = $page->imageSize($src);
@endphp

<img
    src="{{ $src }}"
    alt=""
    width="{{ $size['width'] }}"
    height="{{ $size['height'] }}"
    loading="lazy"
    decoding="async"
    class="{{ $class }} flex-none rounded-full border border-border object-cover"
>
