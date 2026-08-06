{{--
    The page's opening claim, under a mono eyebrow.

    Capped at 20ch so the headline breaks after "team of 2." on a wide screen,
    which is where the design puts the turn.
--}}
<section>
    <div class="mx-auto w-full max-w-marketing px-4 pt-16 pb-10 md:px-8">
        <span class="font-mono text-mono text-text-muted">{{ $page->t('team.eyebrow') }}</span>

        <h1 class="mt-4 max-w-[20ch] text-display-sm font-semibold text-pretty md:text-display-lg lg:text-display-xl">
            {{ $page->t('team.title') }}
        </h1>
    </div>
</section>
