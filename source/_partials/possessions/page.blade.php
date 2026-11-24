@php
    $copy = $page->t('possessions');
    $ui = $copy['ui'];
    $bike = $copy['bike'];

    // Shared by every section.
    $container = 'mx-auto w-full max-w-page';
    $narrow = 'mx-auto w-full max-w-[1040px]';
    $split = 'grid grid-cols-1 items-center gap-x-18 gap-y-12 lg:grid-cols-2';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy text-text-secondary text-pretty';
    $closing = 'text-copy font-medium text-text text-pretty';
    $more = 'flex w-fit items-center gap-1.5 text-copy font-medium text-text underline decoration-border-strong underline-offset-4 hover:text-text hover:decoration-text';
    $inline = 'text-text underline decoration-border-strong underline-offset-[3px] hover:text-text hover:decoration-text';

    // Copy with a link set inside a sentence: the sentence is escaped, then
    // each `:key` becomes a link to its destination.
    $linked = function (string $text, array $links) use ($inline) {
        $text = e($text);
        foreach ($links as $key => [$label, $href]) {
            $text = str_replace(':' . $key, '<a href="' . e($href) . '" class="' . $inline . '">' . e($label) . '</a>', $text);
        }

        return $text;
    };

    // The application's own pieces, as Erica draws a possession. Their words
    // are `possessions.ui` in `lang/`, the application's own translations.
    $window = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-pop';
    $panel = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-panel';
    $sectionTitle = 'text-lede-sm font-semibold tracking-[-0.02em] text-text';
    $cardTitle = 'text-[15px] leading-snug font-semibold tracking-[-0.01em] text-text';
    $caption = 'text-caption font-medium tracking-[0.08em] text-text-disabled uppercase';
    $term = 'text-xs text-text-muted';
    $muted = 'text-small text-text-muted';
    $badge = 'inline-flex h-5.5 items-center rounded-full px-2.25 text-caption font-medium';
    $ghost = 'mn-btn mn-btn-ghost mn-btn-small pointer-events-none';
    $secondary = 'mn-btn mn-btn-secondary mn-btn-small pointer-events-none';
    $placeMark = 'grid size-8 flex-none place-items-center rounded-full border border-border bg-surface-subtle text-identity-6';

    // The vault colours, as VaultColourEnum tints a type, a tag or a section.
    // Literal class strings, so Tailwind's scanner finds them.
    $tints = [
        'blue' => 'bg-identity-1/12 text-identity-1',
        'green' => 'bg-identity-2/12 text-identity-2',
        'amber' => 'bg-identity-3/12 text-identity-3',
        'rust' => 'bg-identity-4/12 text-identity-4',
        'violet' => 'bg-identity-5/12 text-identity-5',
        'teal' => 'bg-identity-6/12 text-identity-6',
        'plum' => 'bg-identity-7/12 text-identity-7',
    ];
    $dots = ['green' => 'bg-identity-2', 'teal' => 'bg-identity-6', 'plum' => 'bg-identity-7'];
@endphp

@include('_partials.possessions.hero')
@include('_partials.possessions.inventory')
@include('_partials.possessions.locations')
@include('_partials.possessions.history')
@include('_partials.possessions.together')
@include('_partials.faq', ['title' => $copy['faq']['title'], 'items' => $copy['faq']['items'], 'openFirst' => true, 'container' => 'max-w-page px-4 md:px-6'])
@include('_partials.possessions.cta')
