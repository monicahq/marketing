{{--
    The mission statement, with the label in its own column beside it.

    The label column is a fixed 180px on wide screens and stacks above the text
    below `lg`, which is what keeps the prose measure from collapsing on a
    tablet. The closing picture of the two of us is set apart by a hairline
    rather than by a heading: it stands where a signature would.
--}}
@php
    $earthDay = '/assets/images/team/earth-day.webp';
    $earthNight = '/assets/images/team/earth-night.webp';
    $earthDaySize = $page->imageSize($earthDay);
    $earthNightSize = $page->imageSize($earthNight);

    // The two of us, each beside our own pin on the globe: Régis in Québec,
    // on the left, and Alexis in France, on the right. The photos are the
    // blog's author photos. A name is the same in every language.
    $people = [
        ['name' => 'Régis', 'photo' => '/assets/images/authors/regis.webp', 'position' => 'top-[68%] left-[30.5%] -translate-x-1/2 md:top-[62%] md:left-[32%] md:translate-x-0'],
        ['name' => 'Alexis', 'photo' => '/assets/images/authors/alexis.webp', 'position' => 'top-[68%] right-[30.5%] translate-x-1/2 md:top-[62%] md:right-[32%] md:translate-x-0'],
    ];

    foreach ($people as $key => $person) {
        $people[$key]['size'] = $page->imageSize($person['photo']);
    }
@endphp

<section class="border-t border-border">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <div class="grid gap-6 lg:grid-cols-[180px_minmax(0,1fr)] lg:gap-10">
            <div class="font-mono text-mono text-text-muted">{{ $page->t('team.missionLabel') }}</div>

            <div class="max-w-[66ch]">
                @foreach ($page->t('team.mission') as $paragraph)
                    <p class="text-copy-lg leading-[1.65] text-text-secondary text-pretty {{ ! $loop->first ? 'mt-5' : '' }}">
                        {{ $paragraph }}
                    </p>
                @endforeach
            </div>

            {{-- The two of us, an ocean apart, in place of a signature. Two
                 images rather than a <picture>, so the night one follows
                 the theme button and not only the system setting. Below
                 the fold, so both are lazy, and the hidden one is never
                 fetched. It spans both columns, so it sits centred on the page
                 rather than under the text, and is not shrunk to a line
                 length. --}}
            <div class="border-t border-border-subtle pt-5 lg:col-span-2 lg:mt-3">
                <div class="relative">
                <img
                    src="{{ $earthDay }}"
                    alt="{{ $page->t('team.art') }}"
                    width="{{ $earthDaySize['width'] }}"
                    height="{{ $earthDaySize['height'] }}"
                    loading="lazy"
                    decoding="async"
                    class="block h-auto w-full dark:hidden"
                >
                <img
                    src="{{ $earthNight }}"
                    alt="{{ $page->t('team.art') }}"
                    width="{{ $earthNightSize['width'] }}"
                    height="{{ $earthNightSize['height'] }}"
                    loading="lazy"
                    decoding="async"
                    class="hidden h-auto w-full dark:block"
                >

                {{-- Who is at each end of the line: always shown, as a small
                     card beside each pin, turned towards the ocean so it
                     covers neither the flag nor the panda. On a phone there
                     is no room beside the pins, so each card sits under its
                     own pin instead. The positions are
                     the pins' own, as fractions of the picture, so they hold
                     at any width; both pictures put the pins in the same
                     place. --}}
                @foreach ($people as $person)
                    <div class="{{ $person['position'] }} absolute flex items-center gap-1.5 rounded-md border border-border bg-canvas py-0.5 pr-2 pl-0.5 shadow-pop md:gap-2 md:rounded-lg md:py-1 md:pr-3 md:pl-1">
                        <img
                            src="{{ $person['photo'] }}"
                            alt=""
                            width="{{ $person['size']['width'] }}"
                            height="{{ $person['size']['height'] }}"
                            loading="lazy"
                            decoding="async"
                            class="size-4 flex-none rounded-full object-cover md:size-7"
                        >
                        <span class="text-micro font-semibold whitespace-nowrap text-text md:text-small">{{ $person['name'] }}</span>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
