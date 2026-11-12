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
                 fetched. It takes the whole of the text column rather than
                 the prose measure, so the picture is not shrunk to a line
                 length. --}}
            <div class="border-t border-border-subtle pt-5 lg:col-start-2 lg:mt-3">
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
            </div>
        </div>
    </div>
</section>
