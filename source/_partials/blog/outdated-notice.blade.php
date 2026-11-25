{{--
    The notice above the body of a post that no longer describes Monica.

    A post opts in with `outdated: true` in its front matter. It is a flag
    rather than a rule on the date because age alone says nothing: an essay
    from 2018 can still hold, and an announcement from 2023 already does not.
    Adding the flag leaves `date` and `updated` alone, so the sitemap's
    lastmod does not move for it.

    @include('_partials.blog.outdated-notice', ['post' => $page])
--}}
@php
    $year = substr($post->isoDate(), 0, 4);
@endphp

<div class="mn-notice mn-notice-warning mt-8" role="note">
    <span class="pt-px text-warning">@include('_partials.icon', ['name' => 'reminder', 'size' => 18])</span>
    <div class="min-w-0">
        <p class="text-base font-semibold text-text">
            {{ $page->t('blog.outdated.title', [':year' => $year]) }}
        </p>
        <p class="mt-0.5 text-small text-text-secondary text-pretty">
            {{ $page->t('blog.outdated.body') }}
            <a href="{{ $page->route('home') }}">{{ $page->t('blog.outdated.link') }}</a>
        </p>
    </div>
</div>
