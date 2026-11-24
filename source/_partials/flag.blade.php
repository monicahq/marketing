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

        {{--
            China, because Simplified is the mainland's script. The four small
            stars keep their official positions and each points at the large
            one, on the flag's own 30x20 grid scaled by two.
        --}}
        @case('zh')
            <rect width="60" height="40" fill="#ee1c25"></rect>
            <g fill="#ffff00">
                <polygon points="10,4 11.35,8.15 15.71,8.15 12.18,10.71 13.53,14.85 10,12.29 6.47,14.85 7.82,10.71 4.29,8.15 8.65,8.15"></polygon>
                <polygon points="18.29,5.03 19.24,3.93 18.49,2.69 19.83,3.26 20.78,2.16 20.66,3.61 21.99,4.18 20.58,4.5 20.45,5.95 19.7,4.7"></polygon>
                <polygon points="22.02,8.28 23.32,7.64 23.12,6.2 24.13,7.25 25.44,6.61 24.76,7.89 25.77,8.93 24.34,8.69 23.66,9.97 23.45,8.53"></polygon>
                <polygon points="22.08,13.45 23.53,13.4 23.93,12 24.43,13.37 25.88,13.31 24.73,14.21 25.23,15.57 24.03,14.76 22.88,15.66 23.28,14.26"></polygon>
                <polygon points="18.44,16.75 19.8,17.26 20.71,16.13 20.64,17.58 22,18.09 20.6,18.48 20.53,19.93 19.73,18.71 18.33,19.1 19.24,17.96"></polygon>
            </g>
            @break

        @case('ru')
            <rect width="60" height="13.34" fill="#fff"></rect>
            <rect y="13.33" width="60" height="13.34" fill="#0039a6"></rect>
            <rect y="26.66" width="60" height="13.34" fill="#d52b1e"></rect>
            @break
    @endswitch
</svg>
