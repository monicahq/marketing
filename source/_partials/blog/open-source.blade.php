{{--
    The sidebar's open-source panel, ending in the live star count.
--}}
<div class="flex flex-col gap-3 rounded-lg border border-border p-4">
    <h2 class="text-micro font-medium tracking-[0.06em] text-text-muted uppercase">
        {{ $page->t('blog.openSource.title') }}
    </h2>

    <p class="text-body leading-[1.6] text-text-secondary">{{ $page->t('blog.openSource.body') }}</p>

    <a
        href="{{ $page->links['github'] }}"
        class="mn-btn mn-btn--secondary mn-btn--sm justify-center gap-2 no-underline hover:no-underline"
    >
        @include('_partials.icon', ['name' => 'star'])
        <span>{{ $page->t('nav.stars', [':count' => $page->starCount]) }}</span>
    </a>
</div>
