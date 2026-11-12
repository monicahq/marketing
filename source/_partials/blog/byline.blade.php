{{--
    Author avatar and name. `size` is 'sm' on an index card, 'lg' under a post
    title where the role is shown too.

    The avatar is the author's photo when `authorAvatar()` knows one, and
    initials in a circle otherwise. The photos are the one exception to the
    design system's "no photography" rule, by the owner's decision: a byline
    is about a real person. The name is written beside the circle, so either
    way it is decorative.

    The large one sits under a post title, in the first screenful, so it is
    eager. The small ones are on index cards, ten to a page and mostly below
    the fold, so they are lazy.

    @include('_partials.blog.byline', ['post' => $item, 'size' => 'sm'])
--}}
@php
    $large = ($size ?? 'sm') === 'lg';
    $avatar = $post->authorAvatar();
@endphp

<div class="flex items-center gap-3">
    @if ($avatar)
        <img
            src="{{ $avatar }}"
            alt=""
            width="96"
            height="96"
            @unless ($large) loading="lazy" @endunless
            decoding="async"
            class="flex-none rounded-full bg-surface-muted object-cover {{ $large ? 'size-8' : 'size-[22px]' }}"
        >
    @else
        <span
            aria-hidden="true"
            class="inline-flex flex-none items-center justify-center rounded-full bg-surface-muted font-semibold text-text-secondary {{ $large ? 'size-8 text-caption' : 'size-[22px] text-[10px]' }}"
        >{{ $post->authorInitials() }}</span>
    @endif

    @if ($large)
        <span class="flex flex-col">
            <span class="text-body font-medium">{{ $post->author }}</span>
            <span class="text-small text-text-muted">{{ $page->t('blog.authorRole') }}</span>
        </span>
    @else
        <span class="text-small text-text-muted">{{ $post->author }}</span>
    @endif
</div>
