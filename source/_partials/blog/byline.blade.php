{{--
    Author avatar and name. `size` is 'sm' on an index card, 'lg' under a post
    title where the role is shown too.

    The avatar is initials in a circle, not a photograph: the design system
    allows no photography, and there is exactly one author.

    @include('_partials.blog.byline', ['post' => $item, 'size' => 'sm'])
--}}
@php
    $large = ($size ?? 'sm') === 'lg';
@endphp

<div class="flex items-center gap-3">
    <span
        aria-hidden="true"
        class="inline-flex flex-none items-center justify-center rounded-full bg-surface-muted font-semibold text-text-secondary {{ $large ? 'size-8 text-caption' : 'size-[22px] text-[10px]' }}"
    >{{ $post->authorInitials() }}</span>

    @if ($large)
        <span class="flex flex-col">
            <span class="text-body font-medium">{{ $post->author }}</span>
            <span class="text-small text-text-muted">{{ $page->t('blog.authorRole') }}</span>
        </span>
    @else
        <span class="text-small text-text-muted">{{ $post->author }}</span>
    @endif
</div>
