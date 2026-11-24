{{--
    One column of the sign-in chooser: which version it is, who it is for, its
    panda, and the button to its sign-in form.

    Takes `version` (`new` or `classic`, the key of its copy under `signIn` in
    lang/), `href`, `button` (the button variant), `tone` (the column's
    background and border), and `pandaDay` and `pandaNight`.

    The pandas are decoration, since the heading says which version this is,
    so they carry no alt text. Both sit in the same 4:3 box with
    `object-contain`, so the day and night drawings (which are not the same
    shape) take the same room and the two columns line up. The day one is
    eager because it is in the first screenful; the night one is lazy, so a
    reader in light mode never fetches it.
--}}
@php
    $copy = $page->t("signIn.{$version}");
    $titleId = "sign-in-{$version}";
    $pandaDaySize = $page->imageSize($pandaDay);
    $pandaNightSize = $page->imageSize($pandaNight);
@endphp

<section class="{{ $tone }} flex items-center justify-center px-8 py-16">
    <div class="flex w-full max-w-[400px] flex-col gap-6">
        <div class="flex flex-col gap-3">
            <span class="text-caption font-medium tracking-[0.06em] text-text-muted uppercase">{{ $copy['eyebrow'] }}</span>
            <h2 id="{{ $titleId }}" class="text-heading font-semibold text-balance">{{ $copy['title'] }}</h2>
            <p class="text-base text-text-secondary text-pretty">{{ $copy['body'] }}</p>
        </div>

        <div class="relative aspect-4/3 w-full">
            <img
                src="{{ $pandaDay }}"
                srcset="{{ $pandaDay }} 1x, {{ str_replace('.webp', '@2x.webp', $pandaDay) }} 2x"
                alt=""
                width="{{ $pandaDaySize['width'] }}"
                height="{{ $pandaDaySize['height'] }}"
                decoding="async"
                class="absolute inset-0 block size-full object-contain dark:hidden"
            >
            <img
                src="{{ $pandaNight }}"
                srcset="{{ $pandaNight }} 1x, {{ str_replace('.webp', '@2x.webp', $pandaNight) }} 2x"
                alt=""
                width="{{ $pandaNightSize['width'] }}"
                height="{{ $pandaNightSize['height'] }}"
                loading="lazy"
                decoding="async"
                class="absolute inset-0 hidden size-full object-contain dark:block"
            >
        </div>

        {{-- Both buttons say the same thing, so each names its version to a
             screen reader through the heading above it. --}}
        <div class="flex flex-col items-start gap-2.5">
            <a
                href="{{ $href }}"
                aria-describedby="{{ $titleId }}"
                class="mn-btn {{ $button }} no-underline hover:no-underline"
            >{{ $copy['cta'] }}</a>
            <span class="font-mono text-mono text-text-muted">{{ parse_url($href, PHP_URL_HOST) }}</span>
        </div>
    </div>
</section>
