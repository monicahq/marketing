{{--
    The whole of a features page, chosen by the tab the reader is on.

    The three tabs differ in exactly three things (which copy block, which
    screenshot, and whether the API section follows), so they are one partial
    with a table rather than three near-identical templates. That is also what
    keeps the twelve page files, four locales times three tabs, down to four
    lines each.

    The screenshot dimensions are the files' own pixels, listed here because the
    markup needs them before the browser has the image. They are not the old
    site's numbers: the browser window drawn around each screenshot, and the
    drop shadow behind it, were cropped off on the way in, because the design
    system allows neither. What is left is the application itself.
--}}
@php
    $tabs = [
        'features' => ['copy' => 'contacts', 'image' => 'contacts', 'width' => 1202, 'height' => 2406, 'api' => true],
        'featuresDashboard' => ['copy' => 'dashboard', 'image' => 'dashboard', 'width' => 1202, 'height' => 720, 'api' => false],
        'featuresJournal' => ['copy' => 'journal', 'image' => 'journal', 'width' => 1202, 'height' => 1606, 'api' => false],
    ];

    $tab = $tabs[$page->page];
@endphp

@include('_partials.features.tabs')

@include('_partials.features.screenshot', [
    'feature' => $page->t("features.{$tab['copy']}"),
    'image' => $tab['image'],
    'width' => $tab['width'],
    'height' => $tab['height'],
])

@include('_partials.features.pillars')

@if ($tab['api'])
    @include('_partials.features.api')
@endif
