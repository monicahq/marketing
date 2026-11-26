{{--
    The changes page: every change made to this website, newest first.

    The entries are `changes` in config.php (read from changes.php), written
    in English whatever the page's language, with their UTC time. Only the
    frame around them is translated, in `changes` in lang/. A page an entry
    touched is a route key, labelled with its breadcrumb in the reader's
    language; 'all' is a change every page shows.

    Dates stay numeric (2026-11-26) because that reads the same in all eight
    languages and needs no month names.
--}}
@php
    $entries = collect($page->changes)->sortByDesc('at')->values();
    $link = '<a href="' . e($page->links['changelog']) . '" class="underline decoration-border-strong underline-offset-[3px] hover:decoration-text">' . e($page->t('changes.productChangelog')) . '</a>';
    $lede = str_replace(':link', $link, e($page->t('changes.lede', [':link' => ':link'])));
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="mx-auto w-full max-w-[760px]">
        <div class="flex flex-col gap-2">
            <span class="text-caption font-medium tracking-[0.08em] text-text-muted uppercase">{{ $page->t('changes.eyebrow') }}</span>
            <h1 class="text-display-sm font-semibold text-balance text-text">{{ $page->t('changes.title') }}</h1>
            <p class="text-lede-sm text-text-secondary text-pretty">{!! $lede !!}</p>
        </div>

        <ol class="mt-10 border-t border-border">
            @foreach ($entries as $entry)
                <li class="flex flex-col gap-1 border-b border-border py-4 md:flex-row md:gap-8">
                    <time datetime="{{ str_replace(' ', 'T', $entry['at']) }}:00Z" class="flex shrink-0 items-baseline gap-2 text-small text-text-muted tabular-nums md:w-[150px]">
                        <span class="font-medium text-text-soft">{{ substr($entry['at'], 0, 10) }}</span>
                        <span>{{ substr($entry['at'], 11, 5) }}</span>
                    </time>
                    <div class="flex min-w-0 flex-1 flex-col gap-1">
                        <p class="text-base text-text text-pretty">{{ $entry['summary'] }}</p>
                        <div class="flex flex-wrap items-baseline gap-x-3 gap-y-0.5 text-small text-text-muted">
                            <span>{{ $page->t('changes.pages') }}</span>
                            @foreach ($entry['pages'] as $key)
                                <a href="{{ $page->route($key === 'all' ? 'home' : $key) }}" class="underline decoration-border-strong underline-offset-[3px] hover:text-text hover:decoration-text">{{ $key === 'all' ? $page->t('changes.allPages') : $page->t('meta.breadcrumb.' . $key) }}</a>
                            @endforeach
                        </div>
                    </div>
                </li>
            @endforeach
        </ol>

        <p class="mt-6 text-small text-text-muted">{{ $page->t('changes.utc') }} {{ $page->t('changes.note') }}</p>
    </div>
</section>
