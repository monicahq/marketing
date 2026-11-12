{{--
    The two of us, one row each: a cut-out portrait standing in a tinted arch,
    and the words beside it. The rows alternate sides on a wide screen and
    stack on a narrow one.

    The arch is flat colour, an identity colour at 14% like the panels on the
    feature pages, so it follows dark mode on its own. The design draws it
    with a radial gradient, which the site does not use.

    The portrait is decoration: the name is written out beside it, so it
    carries no alt text. One file at the size it is drawn and one at twice
    that for a retina screen; `width` and `height` are the first one's pixels.
--}}
@php
    $team = $copy['team'];
@endphp

<section id="team" class="{{ $section }} scroll-mt-6">
    <div class="{{ $container }} flex flex-col gap-6">
        <div class="flex flex-col gap-1.5">
            <h2 class="{{ $heading }}">{{ $team['title'] }}</h2>
            <p class="{{ $lede }}">{{ $team['lede'] }}</p>
        </div>

        <div class="flex flex-col gap-18 pt-6">
            @foreach ($team['people'] as $person)
                @php
                    $portrait = $portraits[$loop->index];
                    $size = $page->imageSize($portrait['src']);
                @endphp

                <div class="flex flex-col items-center gap-10 md:gap-12 {{ $portrait['row'] }}">
                    <div class="relative flex h-100 w-full max-w-85 flex-none items-end justify-center">
                        <div class="{{ $portrait['arch'] }} absolute inset-x-0 bottom-0 h-[78%] rounded-t-full rounded-b-lg"></div>
                        <img
                            src="{{ $portrait['src'] }}"
                            srcset="{{ $portrait['src'] }} 1x, {{ $portrait['src2x'] }} 2x"
                            alt=""
                            width="{{ $size['width'] }}"
                            height="{{ $size['height'] }}"
                            loading="lazy"
                            decoding="async"
                            class="relative block h-full w-auto rounded-b-lg object-contain object-bottom"
                        >
                    </div>

                    <div class="flex min-w-0 flex-1 flex-col gap-4.5">
                        <div class="flex flex-col gap-1.5">
                            <span class="flex items-center gap-2 text-caption font-semibold tracking-[0.06em] text-text-muted uppercase">
                                <span class="{{ $portrait['dot'] }} size-2 rounded-full" aria-hidden="true"></span>
                                {{ $person['where'] }}
                            </span>
                            <h3 class="text-heading font-semibold text-text">{{ $person['name'] }}</h3>
                        </div>

                        <div class="flex flex-col gap-2">
                            <span class="text-lede-sm font-semibold text-text-soft">{{ $person['role'] }}</span>
                            <p class="{{ $paragraph }}">{{ $person['bio'] }}</p>
                        </div>

                        <dl class="grid grid-cols-[repeat(auto-fit,minmax(140px,1fr))] gap-4 pt-1.5">
                            @foreach ($person['facts'] as $fact)
                                <div class="flex flex-col gap-1">
                                    <dt class="text-xs text-text-muted">{{ $fact['k'] }}</dt>
                                    <dd class="text-body font-medium text-text">{{ $fact['v'] }}</dd>
                                </div>
                            @endforeach
                        </dl>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
