{{--
    A 20x14 flag for the language menu. Drawn inline rather than encoded into a
    data URI so it stays crisp and costs no extra bytes.

    A flag is decorative here: the language is always named in words beside it,
    because a flag identifies a country and not a language.

    @include('_partials.flag', ['flagLocale' => 'fr'])
--}}
<svg
    viewBox="0 0 60 40"
    width="20"
    height="14"
    aria-hidden="true"
    focusable="false"
    class="block flex-none rounded-[2px] shadow-none ring-1 ring-white/15 ring-inset"
>
    @switch($flagLocale)
        @case('en')
            <rect width="60" height="40" fill="#012169"></rect>
            <path d="M0,0 L60,40 M60,0 L0,40" stroke="#fff" stroke-width="8"></path>
            <path d="M0,0 L60,40 M60,0 L0,40" stroke="#c8102e" stroke-width="4"></path>
            <path d="M30,0 V40 M0,20 H60" stroke="#fff" stroke-width="12"></path>
            <path d="M30,0 V40 M0,20 H60" stroke="#c8102e" stroke-width="6"></path>
            @break

        @case('fr')
            <rect width="20" height="40" fill="#0055a4"></rect>
            <rect x="20" width="20" height="40" fill="#fff"></rect>
            <rect x="40" width="20" height="40" fill="#ef4135"></rect>
            @break

        @case('de')
            <rect width="60" height="13.34" fill="#000"></rect>
            <rect y="13.33" width="60" height="13.34" fill="#dd0000"></rect>
            <rect y="26.66" width="60" height="13.34" fill="#ffce00"></rect>
            @break

        @case('es')
            <rect width="60" height="40" fill="#aa151b"></rect>
            <rect y="10" width="60" height="20" fill="#f1bf00"></rect>
            @break

        {{--
            Brazil, because the Portuguese copy is Brazilian. The band across
            the globe is left out: at 20x14 it is a smudge, and the flag is
            decorative anyway.
        --}}
        @case('pt')
            <rect width="60" height="40" fill="#009c3b"></rect>
            <polygon points="30,4 56,20 30,36 4,20" fill="#ffdf00"></polygon>
            <circle cx="30" cy="20" r="7" fill="#002776"></circle>
            @break

        @case('nl')
            <rect width="60" height="13.34" fill="#ae1c28"></rect>
            <rect y="13.33" width="60" height="13.34" fill="#fff"></rect>
            <rect y="26.66" width="60" height="13.34" fill="#21468b"></rect>
            @break
    @endswitch
</svg>
