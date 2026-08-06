{{--
    The API section, which the old site shows on the contact management tab
    only. Kept where it is: it is an argument about the whole product, and
    repeating it under the dashboard and the journal would only dilute it.
--}}
<section class="border-t border-border bg-surface-subtle">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2 lg:gap-12">
            <div>
                <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('features.api.title') }}</h2>
                <p class="mt-5 max-w-[52ch] text-copy leading-[1.6] text-text-secondary text-pretty">
                    {{ $page->t('features.api.body') }}
                </p>
                <p class="mt-4 max-w-[52ch] text-copy leading-[1.6] text-text-secondary text-pretty">
                    {{ $page->t('features.api.body2') }}
                </p>
            </div>

            <figure class="m-0 overflow-hidden rounded-lg border border-border bg-surface">
                {{-- A section down the page, below the screenshot that opens
                     it, so this one waits until the reader is on their way. --}}
                <img
                    src="/assets/images/features/api.webp"
                    alt="{{ $page->t('features.api.imageAlt') }}"
                    width="666"
                    height="483"
                    loading="lazy"
                    decoding="async"
                    class="block h-auto w-full"
                >
            </figure>
        </div>
    </div>
</section>
