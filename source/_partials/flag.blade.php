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
    @endswitch
</svg>
