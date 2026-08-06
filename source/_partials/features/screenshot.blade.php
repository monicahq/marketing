{{--
    A tab's headline, its screenshot, and the notes that go with the screen.

    `feature` is the copy block (title, lede, imageAlt, callouts) and `image` is
    the file's base name; `width` and `height` are the file's own pixels, so the
    browser reserves the right box before the image arrives and nothing on the
    page jumps.

    The old site pinned the notes onto the screenshot as red labels at fixed
    coordinates. That arrangement only holds at one width, in one language, and
    says nothing to a screen reader, so the notes are a list beside the picture
    here. On a wide screen the list stays put while the screenshot scrolls,
    which is the closest honest equivalent of standing beside the image.

    @include('_partials.features.screenshot', [
        'feature' => $page->t('features.journal'),
        'image' => 'journal', 'width' => 1234, 'height' => 1698,
    ])
--}}
<section>
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <h1 class="max-w-[24ch] text-display-sm font-semibold text-pretty md:text-display-lg lg:text-display-xl">
            {{ $feature['title'] }}
        </h1>

        <p class="mt-6 max-w-[58ch] text-lede-sm text-text-secondary text-pretty md:text-lede-md lg:text-lede">
            {{ $feature['lede'] }}
        </p>

        <div class="mt-10 grid grid-cols-1 items-start gap-10 lg:mt-12 lg:grid-cols-[minmax(0,1fr)_minmax(0,320px)] lg:gap-12">
            {{-- The real application, screenshotted. No device frame, no browser
                 chrome: the border and the subtle surface are the whole of the
                 presentation. --}}
            <figure class="m-0 overflow-hidden rounded-lg border border-border bg-surface-subtle">
                <img
                    src="/assets/images/features/{{ $image }}.webp"
                    alt="{{ $feature['imageAlt'] }}"
                    width="{{ $width }}"
                    height="{{ $height }}"
                    class="block h-auto w-full"
                >
            </figure>

            <div class="lg:sticky lg:top-8">
                <span class="font-mono text-mono text-text-muted uppercase">
                    {{ $page->t('features.calloutsLabel') }}
                </span>

                @include('_partials.bullets', ['items' => $feature['callouts']])
            </div>
        </div>
    </div>
</section>
