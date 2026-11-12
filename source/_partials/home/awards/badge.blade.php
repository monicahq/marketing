{{--
    One award badge, drawn in HTML in its issuer's look rather than shipped as
    a picture of itself: their colours (`ink` for the laurel, the mark and the
    words, `accent` for the border and the rank, literal classes from
    `home/awards` so Tailwind's scanner finds them), their words in English and
    in title case. Those words are part of the drawing, so they are hidden from
    screen readers, and the badge is named by the translated sentence in
    `label` instead.

    With an `href` it is a link to the ranking it claims; without one it is a
    picture (`role="img"`). `github` puts GitHub's mark beside the laurel.
--}}
@php
    $tag = isset($href) ? 'a' : 'div';

    // A rank of two digits is set smaller so it stays inside the opening
    // rather than running into the leaves.
    $rankSize = strlen($rank) > 1 ? 'top-2.5 text-body' : 'top-1.5 text-xl';
@endphp
<{{ $tag }}
    @if (isset($href)) href="{{ $href }}" @else role="img" @endif
    aria-label="{{ $label }}"
    class="flex h-13 items-center gap-2 rounded-lg border pr-4 pl-2.5 no-underline hover:no-underline {{ $ink }} {{ $accent }}"
>
    <span aria-hidden="true" class="relative block h-10 w-11 flex-none">
        @include('_partials.home.awards.laurel')
        <span class="absolute inset-x-0 text-center {{ $rankSize }} leading-none font-bold tracking-tight {{ $rankColor }}">{{ $rank }}</span>
    </span>
    @if ($github ?? false)
        @include('_partials.github-mark', ['size' => 30])
    @endif
    <span aria-hidden="true" class="flex flex-col gap-1 leading-none">
        <span class="text-caption leading-none font-medium uppercase">{{ $kicker }}</span>
        <span class="text-copy-lg leading-none font-bold tracking-tight whitespace-nowrap">{{ $title }}</span>
    </span>
</{{ $tag }}>
