@php
    $copy = $page->t('maintenanceLoans');
    $ui = $copy['ui'];

    // Shared by every section.
    $container = 'mx-auto w-full max-w-page';
    $narrow = 'mx-auto w-full max-w-[1040px]';
    $split = 'grid grid-cols-1 items-center gap-x-18 gap-y-12 lg:grid-cols-2';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy text-text-secondary text-pretty';
    $closing = 'text-copy font-medium text-text text-pretty';
    $inline = 'text-text underline decoration-border-strong underline-offset-[3px] hover:text-text hover:decoration-text';
    $stateCaption = 'text-caption font-semibold tracking-[0.1em] text-text-secondary uppercase';

    // Copy with a link set inside a sentence: the sentence is escaped, then
    // each `:key` becomes a link to its destination.
    $linked = function (string $text, array $links) use ($inline) {
        $text = e($text);
        foreach ($links as $key => [$label, $href]) {
            $text = str_replace(':' . $key, '<a href="' . e($href) . '" class="' . $inline . '">' . e($label) . '</a>', $text);
        }

        return $text;
    };

    // The application's own pieces, as Erica draws a possession's
    // Maintenance and Loans sections (resources/views/app/vaults/possessions/
    // maintenance.blade.php, loans.blade.php and _maintenance-form.blade.php),
    // without the shell around them. The possession's header is the
    // possessions page's partial. Their words are `maintenanceLoans.ui` in
    // `lang/`, the application's own translations.
    $window = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-pop';
    $panel = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-panel';
    $sectionTitle = 'text-lede-sm font-semibold tracking-[-0.02em] text-text';
    $cardTitle = 'text-[15px] leading-snug font-semibold tracking-[-0.01em] text-text';
    $term = 'text-xs text-text-muted';
    $muted = 'text-small text-text-muted';
    $badge = 'inline-flex h-5.5 items-center rounded-full border px-2.25 text-caption font-medium whitespace-nowrap';
    $secondary = 'mn-btn mn-btn-secondary mn-btn-small pointer-events-none';
    $primary = 'mn-btn mn-btn-primary mn-btn-small pointer-events-none';

    // The vault colours, as VaultColourEnum tints a type. Literal class
    // strings, so Tailwind's scanner finds them.
    $tints = [
        'blue' => 'bg-identity-1/12 text-identity-1',
        'rust' => 'bg-identity-4/12 text-identity-4',
    ];
    $dots = [];

    // The colour of each job's type, as PossessionMaintenanceTypeEnum gives
    // it: a repair is rust, a servicing green, a cleaning teal. The chip,
    // then its dot.
    $jobs = [
        'repair' => ['bg-identity-4/12 text-identity-4', 'bg-identity-4'],
        'servicing' => ['bg-identity-2/12 text-identity-2', 'bg-identity-2'],
        'cleaning' => ['bg-identity-6/12 text-identity-6', 'bg-identity-6'],
    ];

    // A loan's status, as the Badge component draws its tone: a loan still
    // out is a warning, a returned one neutral.
    $tones = [
        'warning' => 'border-warning-edge bg-warning-subtle text-warning',
        'neutral' => 'border-transparent bg-hover text-text-secondary',
    ];

    // The demo vault's names in this language, which is also how the avatar
    // partial finds the photo of the people who have one.
    $joey = $page->t('cast.joey.full');
    $monica = $page->t('cast.monica.full');
@endphp

@include('_partials.maintenance-loans.hero')
@include('_partials.maintenance-loans.work')
@include('_partials.maintenance-loans.due')
@include('_partials.maintenance-loans.loans')
@include('_partials.maintenance-loans.assistant')
@include('_partials.faq', ['title' => $copy['faq']['title'], 'items' => $copy['faq']['items'], 'openFirst' => true, 'container' => 'max-w-page px-4 md:px-6'])
@include('_partials.maintenance-loans.cta')
