@php
    $copy = $page->t('cookies');

    // The panda keeping a secret, at 160px with an @2x copy. Light mode only
    // until it has a night version; its own shapes read on the dark card.
    $panda = '/assets/images/cookies/panda-secret.webp';
    $panda2x = '/assets/images/cookies/panda-secret@2x.webp';
    $pandaSize = $page->imageSize($panda);
@endphp

{{-- The cookie notice, in the bottom right corner of every page until the
     reader closes it. Whether it has been closed lives in
     `_partials/cookie-notice-state`, which puts `cookie-notice-dismissed` on
     <html> before the first paint; `in-[.cookie-notice-dismissed]:hidden`
     hides it from there.

     `js-only`, because closing it needs the script: a reader without
     JavaScript would get a notice they could never put away. --}}
<aside
    aria-label="{{ $copy['label'] }}"
    class="js-only fixed right-4 bottom-4 left-4 z-50 overflow-hidden rounded-lg border border-border bg-surface shadow-pop sm:left-auto sm:w-110 in-[.cookie-notice-dismissed]:hidden"
>
    <div class="relative px-5 pt-4 pb-5">
        <div class="flex items-start justify-between gap-4">
            <p class="pt-1 text-title font-semibold text-text">{{ $copy['title'] }}</p>
            <button
                type="button"
                data-cookie-notice-dismiss
                aria-label="{{ $copy['close'] }}"
                class="-mr-2 flex size-8 flex-none items-center justify-center rounded-md text-text-secondary hover:bg-surface-subtle hover:text-text"
            >
                @include('_partials.icon', ['name' => 'close', 'size' => 16])
            </button>
        </div>

        <div class="relative z-10 mt-2 flex flex-col gap-3 pr-32 text-small text-text-secondary sm:pr-36">
            <p>{{ $copy['body'] }}</p>
            <p>
                {{ $copy['private'] }}<br>
                {{ $copy['europe'] }}
            </p>
        </div>

        <img
            src="{{ $panda }}"
            srcset="{{ $panda }} 1x, {{ $panda2x }} 2x"
            alt=""
            width="{{ $pandaSize['width'] }}"
            height="{{ $pandaSize['height'] }}"
            decoding="async"
            class="pointer-events-none absolute -right-3 -bottom-8 block h-auto w-36 sm:w-40"
        >
    </div>
</aside>
