{{--
    One award badge, drawn in HTML in its issuer's look rather than shipped as
    a picture of itself: their colours (`ink` for the laurel, the mark and the
    words, `accent` for the border and the rank, literal classes from
    `home/awards` so Tailwind's scanner finds them), their words in English and
    in title case. Those words are part of the drawing, so they are hidden from
    screen readers, and the badge is named by the translated sentence in
    `label` instead.

    With an `href` it is a link to the ranking it claims; without one it is a
    picture (`role="img"`). `mark` (`github` or `docker`) puts that company's
    mark beside the laurel. `titleFirst` sets the title above the small line
    rather than under it.

    `popover` (the text) opens a card under the badge on hover or keyboard
    focus, drawn by `awards/popover`. The badge points at it with
    `aria-describedby`, so a screen reader reads it after the badge's name.
    A badge with a popover and no link takes focus itself (`tabindex`), so the
    keyboard can open it too.
--}}
@php
    $tag = isset($href) ? 'a' : 'div';

    // A rank of two digits is set smaller so it stays inside the opening
    // rather than running into the leaves.
    $rankSize = match (true) {
        strlen($rank) > 2 => 'top-3 text-caption',
        strlen($rank) > 1 => 'top-2.5 text-body',
        default => 'top-1.5 text-xl',
    };
@endphp
@isset($popover)
    <div class="group/badge relative">
@endisset
<{{ $tag }}
    @if (isset($href)) href="{{ $href }}" @else role="img" @endif
    aria-label="{{ $label }}"
    @isset($popover) aria-describedby="{{ $popoverId }}" @endisset
    @if (isset($popover) && ! isset($href)) tabindex="0" @endif
    class="flex h-13 items-center gap-2 rounded-lg border pr-4 pl-2.5 no-underline hover:no-underline {{ $ink }} {{ $accent }}"
>
    <span aria-hidden="true" class="relative block h-10 w-11 flex-none">
        @include('_partials.home.awards.laurel')
        <span class="absolute inset-x-0 text-center {{ $rankSize }} leading-none font-bold tracking-tight {{ $rankColor }}">{{ $rank }}</span>
    </span>
    @if (($mark ?? null) === 'github')
        @include('_partials.github-mark', ['size' => 30])
    @elseif (($mark ?? null) === 'docker')
        @include('_partials.docker-mark', ['size' => 32])
    @endif
    <span aria-hidden="true" class="flex gap-1 leading-none {{ ($titleFirst ?? false) ? 'flex-col-reverse' : 'flex-col' }}">
        <span class="text-caption leading-none font-medium uppercase">{{ $kicker }}</span>
        <span class="text-copy-lg leading-none font-bold tracking-tight whitespace-nowrap">{{ $title }}</span>
    </span>
</{{ $tag }}>
@isset($popover)
        @include('_partials.home.awards.popover', [
            'id' => $popoverId,
            'text' => $popover,
            'image' => $popoverImage,
            'imageWidth' => $popoverImageWidth,
            'width' => $popoverWidth,
            'place' => $popoverPlace,
            'arrow' => $popoverArrow,
            'origin' => $popoverOrigin,
        ])
    </div>
@endisset
