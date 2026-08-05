{{--
    The design system's icon geometry: 24x24 viewBox, 1.5px stroke, no fill,
    currentColor, round caps and joins. Multi-stroke glyphs separate their paths
    with a pipe, exactly as they do in the design system's Icon.jsx.

    ⚠️ Placeholder set. Per the design system's readme, Monica's real repository
    SVGs were never supplied. These are drawn to the specification so weight and
    rhythm are right, but they must be swapped for the real files. Only the
    glyphs this site uses are vendored. Copy more from the design project as
    pages need them, never from a third-party icon library (§9.1 forbids it).

    Decorative by default. Pass `label` when the icon is the only thing carrying
    the meaning, and it becomes an img with a title.

    @include('_partials.icon', ['name' => 'star', 'size' => 16])
--}}
@php
    $iconPaths = [
        'activity' => 'M3 12h4l2.5-6 4 13 2.5-7h5',
        'arrowRight' => 'M4.5 12h15|M13.5 6l6 6-6 6',
        'calendar' => 'M4.5 6.5h15v13h-15z|M8.5 3.5v5|M15.5 3.5v5|M4.5 11h15',
        'chevronDown' => 'M6 9.5l6 6 6-6',
        'code' => 'M9 8l-4 4 4 4|M15 8l4 4-4 4',
        'download' => 'M12 4v11|M7.5 10.5l4.5 4.5 4.5-4.5|M4.5 19.5h15',
        'journal' => 'M12 7.5C10.5 6 8.5 5.5 4 5.5V18c4.5 0 6.5.5 8 2 1.5-1.5 3.5-2 8-2V5.5c-4.5 0-6.5.5-8 2z|M12 7.5V20',
        'lock' => 'M5.5 10.5h13v9h-13z|M8.5 10.5V7.5a3.5 3.5 0 017 0v3',
        'panel' => 'M4 5.5h16v13H4z|M15 5.5v13',
        'people' => 'M15.5 20v-1.5a4 4 0 00-4-4h-4a4 4 0 00-4 4V20|M13 7a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0|M16.5 3.75a3.5 3.5 0 010 6.5|M20.5 20v-1.5a4 4 0 00-3-3.87',
        'phone' =>'M8.5 3.5l2.5 4-2 2a12 12 0 005.5 5.5l2-2 4 2.5v3A1.5 1.5 0 0119 20C10.6 19.6 3.9 12.9 3.5 4.5A1.5 1.5 0 015 3.5h3.5z',
        'relationship' => 'M9.5 14.5l5-5|M10.5 6.5l1.4-1.4a4 4 0 015.7 5.7l-1.4 1.4|M13.5 17.5l-1.4 1.4a4 4 0 01-5.7-5.7l1.4-1.4',
        'reminder' => 'M18 16V10.5a6 6 0 10-12 0V16l-1.5 2.5h15L18 16z|M9.5 18.5a2.5 2.5 0 005 0',
        'star' => 'M12 4l2.5 5.2 5.5.8-4 4 1 5.5-5-2.8-5 2.8 1-5.5-4-4 5.5-.8L12 4z',
        'tag' => 'M20.5 12.5l-8 8-9-9V3.5H12l8.5 9z|M7.5 8h.01',
    ];

    $iconSize = $size ?? 16;
    $iconLabel = $label ?? null;
@endphp

<svg
    width="{{ $iconSize }}"
    height="{{ $iconSize }}"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="1.5"
    stroke-linecap="round"
    stroke-linejoin="round"
    @if ($iconLabel) role="img" aria-label="{{ $iconLabel }}" @else aria-hidden="true" @endif
    focusable="false"
    class="block flex-none {{ $class ?? '' }}"
>
    @if ($iconLabel)<title>{{ $iconLabel }}</title>@endif
    @foreach (explode('|', $iconPaths[$name]) as $d)
        <path d="{{ $d }}"></path>
    @endforeach
</svg>
