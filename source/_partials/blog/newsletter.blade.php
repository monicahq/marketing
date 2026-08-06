{{--
    The sidebar's newsletter box.

    Like the v3 launch list, the site is static, so this posts to somebody
    else's endpoint. Until `newsletter` in config.php has a real one it posts to
    '#', and the build's placeholder notice lists it alongside the others.

    `data-turbo="false"` because Turbo intercepts form submissions and expects
    to render the response, which is not a conversation to have with a signup
    provider that owns the page the reader lands on.

    @include('_partials.blog.newsletter', ['showNote' => true])
--}}
<div class="flex flex-col gap-3 rounded-lg border border-border bg-surface p-4">
    <h2 class="text-micro font-medium tracking-[0.06em] text-text-muted uppercase">
        {{ $page->t('blog.newsletter.title') }}
    </h2>

    <p class="text-body leading-[1.6] text-text-secondary">{{ $page->t('blog.newsletter.body') }}</p>

    <form action="{{ $page->links['newsletter'] }}" method="post" data-turbo="false" class="flex flex-col gap-3">
        <label class="mn-field">
            <span class="sr-only">{{ $page->t('blog.newsletter.label') }}</span>
            <input
                class="mn-input"
                type="email"
                name="email"
                autocomplete="email"
                required
                placeholder="{{ $page->t('blog.newsletter.placeholder') }}"
            >
        </label>
        <button type="submit" class="mn-btn mn-btn--secondary mn-btn--sm justify-center">
            {{ $page->t('blog.newsletter.cta') }}
        </button>
    </form>

    @if ($showNote ?? true)
        <span class="text-caption text-text-muted">{{ $page->t('blog.newsletter.note') }}</span>
    @endif
</div>
