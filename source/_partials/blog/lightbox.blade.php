{{--
    The full-screen view of a screenshot, on any page that shows a feature
    post (the post itself and the blog index).

    One native <dialog>, empty until app.js fills it: a click on a screenshot
    link (`a[data-lightbox]`, written by $screenshotFigures in config.php)
    puts that image, its caption and its position in it and opens it with
    showModal(), which brings the focus trap, Escape and the return of focus
    for free. The arrows move between the screenshots of the same post
    (`data-lightbox-group`), as the What's new page of the application does.
    Without JavaScript the link opens the image file instead, and this dialog
    is never shown.

    The scrim and the text on it are fixed colours (the inverse surface), not
    theme tokens: a screenshot is looked at on the same dark ground by day and
    by night. The image is what floats, so it carries `shadow-pop`.

    @include('_partials.blog.lightbox')
--}}
<dialog
    data-lightbox-dialog
    data-position="{{ $page->t('blog.feature.lightbox.position') }}"
    aria-label="{{ $page->t('blog.feature.lightbox.label') }}"
    class="fixed inset-0 m-0 h-dvh max-h-none w-screen max-w-none bg-surface-inverse-sunken/90 p-0 opacity-100 transition-opacity duration-200 ease-standard backdrop:bg-transparent motion-reduce:transition-none starting:open:opacity-0"
>
    <div class="grid h-full grid-rows-[auto_minmax(0,1fr)_auto]">
        <div class="flex items-center justify-between gap-4 px-4 py-3">
            <p data-lightbox-position aria-live="polite" class="text-small font-medium text-on-inverse-strong"></p>

            <button type="button" data-lightbox-close class="mn-btn mn-btn-secondary mn-btn-small">
                @include('_partials.icon', ['name' => 'close', 'size' => 16])
                {{ $page->t('blog.feature.lightbox.close') }}
            </button>
        </div>

        <div class="relative flex min-h-0 items-center justify-center px-4 sm:px-18">
            <img data-lightbox-image src="data:," alt="" class="h-auto max-h-full w-auto max-w-full rounded-lg bg-surface object-contain shadow-pop">

            <button
                type="button"
                data-lightbox-previous
                aria-label="{{ $page->t('blog.feature.lightbox.previous') }}"
                class="absolute top-1/2 left-4 hidden size-9 -translate-y-1/2 cursor-pointer place-items-center rounded-md text-on-inverse-strong transition-colors duration-150 ease-standard hover:bg-on-inverse-raised"
            >
                @include('_partials.icon', ['name' => 'chevron-left', 'size' => 18])
            </button>

            <button
                type="button"
                data-lightbox-next
                aria-label="{{ $page->t('blog.feature.lightbox.next') }}"
                class="absolute top-1/2 right-4 hidden size-9 -translate-y-1/2 cursor-pointer place-items-center rounded-md text-on-inverse-strong transition-colors duration-150 ease-standard hover:bg-on-inverse-raised"
            >
                @include('_partials.icon', ['name' => 'chevron-right', 'size' => 18])
            </button>
        </div>

        <p data-lightbox-caption class="mx-auto max-w-[72ch] px-6 pt-4 pb-6 text-center text-body text-on-inverse-muted text-pretty"></p>
    </div>
</dialog>
