<div class="bg-surface-inverse text-on-inverse">
    <div class="mx-auto flex w-full max-w-marketing flex-wrap items-center gap-4 px-4 py-3 max-md:flex-col max-md:items-start max-md:gap-2 md:px-8">
        <span class="text-small font-semibold text-on-inverse-strong">{{ $page->t('announcement.headline') }}</span>
        <span class="text-small text-on-inverse-muted">{{ $page->t('announcement.detail') }}</span>
        <a
            href="{{ $page->links['v3'] }}"
            class="inline-flex items-center gap-2 text-small text-on-inverse-strong underline underline-offset-[3px] hover:text-on-inverse-strong md:ml-auto"
        >
            {{ $page->t('announcement.cta') }}
            @include('_partials.icon', ['name' => 'arrowRight', 'size' => 14])
        </a>
    </div>
</div>
