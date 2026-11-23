@php
    $copy = $page->t('personalData');

    // Shared by every section. The page is calmer than the AI memory page:
    // plain sections alternate with tinted bands, each section says its
    // eyebrow, its title and its lead in the same three styles.
    $container = 'mx-auto w-full max-w-marketing';
    $section = 'px-4 py-section-sm md:px-6 lg:py-section';
    $band = 'border-y border-border bg-surface-subtle';
    $split = 'grid items-center gap-14 lg:grid-cols-2';
    $eyebrow = 'text-caption font-semibold tracking-[0.08em] text-text-muted uppercase';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy-lg text-text-secondary text-pretty';
    $closing = 'text-copy-lg font-medium text-text text-pretty';
    $note = 'text-small text-text-muted text-pretty';
    $card = 'rounded-lg border border-border bg-canvas shadow-panel';
    $iconTile = 'grid size-10 flex-none place-items-center rounded-lg border border-border bg-surface-subtle text-text-muted';

    // The drawings of the product. A drawn window lifts off its tinted panel
    // as the design system's popover does.
    $window = 'mn-pop overflow-hidden';
    $windowTitle = 'flex items-center gap-2.5 border-b border-border px-4 py-3';
    $stamp = 'text-xs text-text-muted';
    $markTile = 'grid size-8 flex-none place-items-center rounded-md border border-border bg-surface-subtle';

    // The colour of each kind of record, in the order of `organize.items`:
    // people, knowledge, belongings, moments, places, reminders. The classes
    // are written out whole so Tailwind's scanner finds them.
    $tones = [
        ['panel' => 'bg-identity-1/14', 'wash' => 'bg-identity-1/6', 'edge' => 'border-identity-1/30', 'ink' => 'text-identity-1'],
        ['panel' => 'bg-identity-6/14', 'wash' => 'bg-identity-6/6', 'edge' => 'border-identity-6/30', 'ink' => 'text-identity-6'],
        ['panel' => 'bg-identity-3/14', 'wash' => 'bg-identity-3/6', 'edge' => 'border-identity-3/30', 'ink' => 'text-identity-3'],
        ['panel' => 'bg-identity-5/14', 'wash' => 'bg-identity-5/6', 'edge' => 'border-identity-5/30', 'ink' => 'text-identity-5'],
        ['panel' => 'bg-identity-2/14', 'wash' => 'bg-identity-2/6', 'edge' => 'border-identity-2/30', 'ink' => 'text-identity-2'],
        ['panel' => 'bg-identity-4/14', 'wash' => 'bg-identity-4/6', 'edge' => 'border-identity-4/30', 'ink' => 'text-identity-4'],
    ];
@endphp

@include('_partials.personal-data.hero')
@include('_partials.personal-data.problem')
@include('_partials.personal-data.organize')
@include('_partials.personal-data.questions')
@include('_partials.personal-data.structure')
@include('_partials.personal-data.yours')
@include('_partials.personal-data.knowledge')
@include('_partials.personal-data.ownership')
@include('_partials.personal-data.ai')
@include('_partials.faq', ['title' => $copy['faq']['title'], 'items' => $copy['faq']['items'], 'openFirst' => true])
@include('_partials.personal-data.closing')
