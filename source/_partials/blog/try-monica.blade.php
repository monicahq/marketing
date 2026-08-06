{{--
    The sidebar's product panel. `body` is passed in, because the index and a
    post make slightly different cases for the same click.

    @include('_partials.blog.try-monica', ['body' => $page->t('blog.tryMonica.body')])
--}}
{{-- p-4 is the design system's --panel-padding, 16px, expressed on the 4px scale. --}}
<div class="mn-panel flex flex-col gap-3 p-4">
    <div class="flex items-center gap-3">
        <img
            src="/assets/images/monica-panda-mark.svg"
            alt=""
            width="32"
            height="29"
            class="h-auto w-5 flex-none"
        >
        <span class="text-copy font-semibold tracking-[-0.01em]">{{ $page->t('blog.tryMonica.title') }}</span>
    </div>

    <p class="text-body leading-[1.6] text-text-secondary">{{ $body }}</p>

    <a
        href="{{ $page->links['getStarted'] }}"
        class="mn-btn mn-btn--primary mn-btn--sm mt-1 justify-center no-underline hover:no-underline"
    >{{ $page->t('blog.tryMonica.cta') }}</a>

    <span class="text-center font-mono text-mono text-text-muted">{{ $page->t('blog.tryMonica.note') }}</span>
</div>
