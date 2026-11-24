@php
    $copy = $page->t('lists');
    $lui = $copy['ui'];

    // The paint list is the knowledge page's, and the paperback the
    // locations page's: the same records in the same vault.
    $paint = $page->t('knowledge.list');
    $locations = $page->t('locations');

    // Shared by every section.
    $narrow = 'mx-auto w-full max-w-[1040px]';
    $split = 'grid grid-cols-1 items-center gap-x-18 gap-y-12 lg:grid-cols-2';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy text-text-secondary text-pretty';
    $closing = 'text-copy font-medium text-text text-pretty';
    $inline = 'text-text underline decoration-border-strong underline-offset-[3px] hover:text-text hover:decoration-text';
    $window = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-pop';

    // Copy with a link set inside a sentence: the sentence is escaped, then
    // each `:key` becomes a link to its destination.
    $linked = function (string $text, array $links) use ($inline) {
        $text = e($text);
        foreach ($links as $key => [$label, $href]) {
            $text = str_replace(':' . $key, '<a href="' . e($href) . '" class="' . $inline . '">' . e($label) . '</a>', $text);
        }

        return $text;
    };
@endphp

@include('_partials.lists.hero')
@include('_partials.lists.columns')
@include('_partials.lists.ideas')
@include('_partials.lists.assistant')
@include('_partials.faq', ['title' => $copy['faq']['title'], 'items' => $copy['faq']['items'], 'openFirst' => true, 'container' => 'max-w-page px-4 md:px-6'])
@include('_partials.lists.cta')
