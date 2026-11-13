{{--
    The trail under the header, on every page but the homepage.

    It draws `$page->breadcrumbTrail()`, the same list the BreadcrumbList in
    the JSON-LD is built from, so the page and its search result say the same
    thing. The last crumb is the page itself: it is text with
    `aria-current="page"`, never a link to where the reader already is.

    Each chevron sits inside the crumb before it, hidden from screen readers,
    so the list is announced with as many items as there are crumbs.

    The container is the header's own (1560px, 16px then 28px), so the trail
    starts under the mark rather than under the page body.
--}}
@php
    // Jigsaw hands a paginated template its current page as a view variable,
    // the same one `seo.blade.php` reads.
    $trail = $page->breadcrumbTrail(isset($pagination) ? $pagination->currentPage : 1);
@endphp

@if (count($trail) > 1)
    <nav aria-label="{{ $page->t('meta.breadcrumb.label') }}" class="border-b border-border bg-canvas">
        <ol class="mx-auto flex min-h-10 w-full max-w-390 items-center gap-1.5 px-4 py-2 text-small sm:px-7">
            @foreach ($trail as $crumb)
                @if ($loop->last)
                    <li aria-current="page" class="min-w-0 truncate font-medium text-text">{{ $crumb['name'] }}</li>
                @else
                    <li class="flex shrink-0 items-center gap-1.5">
                        <a href="{{ $crumb['path'] }}" class="text-text-muted no-underline transition-colors duration-100 ease-standard hover:text-text hover:no-underline">{{ $crumb['name'] }}</a>
                        <span aria-hidden="true" class="flex text-text-disabled">
                            @include('_partials.icon', ['name' => 'chevron-right', 'size' => 13])
                        </span>
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>
@endif
