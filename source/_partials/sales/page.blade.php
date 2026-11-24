{{--
    The sales page (route key `sales`): the sales team Monica does not have,
    told straight. The homepage's "Contact sales" button and the footer link
    land here.

    Eight sections: the headline with the sleeping panda, the team, the
    process, the numbers, why there is no salesperson, the FAQ, the meeting
    nobody books, and the closing links. Plain sections, separated by a
    hairline, as in the design.

    The pictures are pandas by day and by night, in assets/images/sales/:
    the headline's, one per member of the team, and one in the closing
    argument. Their alt text is `art` in lang/.
--}}
@php
    $copy = $page->t('sales');

    // Shared by every section.
    $container = 'mx-auto w-full max-w-marketing';
    $section = 'border-t border-border px-4 py-section-sm md:px-6 lg:py-section';
    $eyebrow = 'text-caption font-semibold tracking-[0.08em] text-text-muted uppercase';
    $title = 'text-display-section font-semibold text-balance';
    $lede = 'text-copy-lg text-text-secondary text-pretty';
    $note = 'text-body text-text-muted text-pretty';
    $card = 'rounded-lg border border-border bg-canvas shadow-panel';
    $link = 'text-text underline decoration-border-strong underline-offset-[3px] hover:text-text hover:decoration-text';

    // A link in the copy names its destination as a page of this site
    // (`page`, a route key) or as an entry of `links` in config.php
    // (`external`), since lang/ cannot hold a URL. `$href` turns either into
    // a URL; `$linked` escapes a string and sets each `:name` placeholder in
    // it as a link, from a map of name => link.
    $href = fn (array $link) => isset($link['external'])
        ? $page->links[$link['external']]
        : $page->route($link['page']);

    $linked = fn (string $text, array $links) => strtr(e($text), collect($links)
        ->mapWithKeys(fn ($l, $name) => [':' . $name => '<a href="' . e($href($l)) . '" class="' . $link . '">' . e($l['label']) . '</a>'])
        ->all());

    // The shared FAQ partial reads a URL from `href`, so the destinations are
    // resolved here, for the single `link` and for every entry of `links`.
    $faq = collect($copy['faq']['items'])->map(function ($item) use ($href) {
        if (isset($item['link'])) {
            $item['link']['href'] = $href($item['link']);
        }

        foreach ($item['links'] ?? [] as $name => $l) {
            $item['links'][$name]['href'] = $href($l);
        }

        return $item;
    })->all();
@endphp

@include('_partials.sales.hero')
@include('_partials.sales.team')
@include('_partials.sales.process')
@include('_partials.sales.numbers')
@include('_partials.sales.why')
@include('_partials.faq', ['title' => $copy['faq']['title'], 'items' => $faq])
@include('_partials.sales.meeting')
@include('_partials.sales.closing')
