{{--
    Somebody's initials in a circle, for when there is no picture: the design
    system's AvatarInitials, in Blade. A generated face is never drawn.

    Each name lands on one of the eight identity colours, picked from the
    letters of the name itself, so the same person is the same colour wherever
    they appear. The letters are added up and wrapped at a prime, exactly as
    the design system does it, so a long name does not drift towards the same
    total as every other long name.

    The classes are literal strings in the array below rather than built from
    the number, so Tailwind's scanner can see them.

    Decorative: the name is always written out beside it.

    @include('_partials.avatar-initials', ['name' => 'Lucie Martin', 'size' => 30])
--}}
@php
    $tints = [
        'bg-identity-1/12 text-identity-1',
        'bg-identity-2/12 text-identity-2',
        'bg-identity-3/12 text-identity-3',
        'bg-identity-4/12 text-identity-4',
        'bg-identity-5/12 text-identity-5',
        'bg-identity-6/12 text-identity-6',
        'bg-identity-7/12 text-identity-7',
        'bg-identity-8/12 text-identity-8',
    ];

    $words = preg_split('/\s+/u', trim($name), -1, PREG_SPLIT_NO_EMPTY);
    $initials = $words === []
        ? '?'
        : mb_strtoupper(mb_substr($words[0], 0, 1) . (count($words) > 1 ? mb_substr(end($words), 0, 1) : ''));

    $sum = 0;
    foreach (mb_str_split($name) as $letter) {
        $sum = ($sum + mb_ord($letter)) % 997;
    }

    $avatarSize = $size ?? 30;
@endphp
<span
    aria-hidden="true"
    class="flex flex-none items-center justify-center rounded-full font-bold tracking-[-0.01em] select-none {{ $tints[$sum % count($tints)] }} {{ $class ?? '' }}"
    {{-- The size is a number the caller passes, so it cannot be a utility. --}}
    style="width: {{ $avatarSize }}px; height: {{ $avatarSize }}px; font-size: {{ round($avatarSize * 0.38) }}px"
>{{ $initials }}</span>
