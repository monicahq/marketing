{{--
    Somebody's avatar in the product picture: their photo when the demo vault
    has one, as the application shows it, else their initials.

    The photos are 80px with an @2x copy, enough for the largest avatar in the
    picture (the contact page's, 76px). `width`/`height` are the file's own
    pixels; the style sizes it. Lazy, because most of them sit on screens that
    are hidden until a reader opens them, and a hidden lazy image is never
    fetched.

    @include('_partials.home.product.avatar', ['name' => 'Chandler Bing', 'size' => 30])
--}}
@php
    $photos = [
        'Chandler Bing' => 'chandler-bing',
        'Monica Geller' => 'monica-geller',
        'Rachel Green' => 'rachel-green',
        'Ross Geller' => 'ross-geller',
    ];
    $photo = $photos[$name] ?? null;
@endphp
@if ($photo)
    <img
        src="/assets/images/home/people/{{ $photo }}.webp"
        srcset="/assets/images/home/people/{{ $photo }}.webp 1x, /assets/images/home/people/{{ $photo }}@2x.webp 2x"
        alt=""
        width="80"
        height="80"
        loading="lazy"
        decoding="async"
        class="flex-none rounded-full object-cover {{ $class ?? '' }}"
        {{-- The size is a number the caller passes, so it cannot be a utility. --}}
        style="width: {{ $size }}px; height: {{ $size }}px"
    >
@else
    @include('_partials.avatar-initials', ['name' => $name, 'size' => $size, 'class' => $class ?? ''])
@endif
