@php
    $copy = $page->t('mcpServer');

    // Shared by every section, in the same three styles as the personal data
    // management page: plain sections alternate with tinted bands.
    $container = 'mx-auto w-full max-w-marketing';
    $section = 'px-4 py-section-sm md:px-6 lg:py-section';
    $band = 'border-y border-border bg-surface-subtle';
    $split = 'grid items-center gap-14 lg:grid-cols-2';
    $eyebrow = 'text-caption font-semibold tracking-[0.08em] text-text-muted uppercase';
    $title = 'text-display-section font-semibold text-balance';
    $paragraph = 'text-copy-lg text-text-secondary text-pretty';
    $closing = 'text-copy-lg font-semibold text-text text-pretty';
    $note = 'text-small text-text-muted text-pretty';
    $card = 'rounded-lg border border-border bg-canvas shadow-panel';
    $mono = 'font-mono text-xs';
    $chip = 'rounded-xs border border-border bg-surface-subtle px-1.5 py-0.5 font-mono text-xs text-text-secondary';
    $prompt = 'rounded-md border border-border bg-surface-subtle px-3.5 py-2.5 text-body text-text-soft';

    // The drawings of the product. A drawn window lifts off its tinted panel
    // as the design system's popover does.
    $window = 'mn-pop overflow-hidden';
    $windowTitle = 'flex items-center gap-2.5 border-b border-border px-4 py-3';
    $stamp = 'text-xs text-text-muted';
    $markTile = 'grid size-8 flex-none place-items-center rounded-md border border-border bg-surface-subtle';
    $mark = '/assets/images/monica-panda-mark.svg';

    // One colour per kind of record, as on the personal data management
    // page: people, moments, knowledge, belongings, reminders, structures.
    $tones = [
        ['panel' => 'bg-identity-1/14', 'ink' => 'text-identity-1'],
        ['panel' => 'bg-identity-5/14', 'ink' => 'text-identity-5'],
        ['panel' => 'bg-identity-6/14', 'ink' => 'text-identity-6'],
        ['panel' => 'bg-identity-3/14', 'ink' => 'text-identity-3'],
        ['panel' => 'bg-identity-4/14', 'ink' => 'text-identity-4'],
        ['panel' => 'bg-identity-7/14', 'ink' => 'text-identity-7'],
    ];
@endphp

@include('_partials.mcp-server.hero')
@include('_partials.mcp-server.unlocks')
@include('_partials.mcp-server.workflow')
@include('_partials.mcp-server.tools')
@include('_partials.mcp-server.connect')
@include('_partials.mcp-server.clients')
@include('_partials.mcp-server.structured')
@include('_partials.mcp-server.visibility')
@include('_partials.mcp-server.reference')
@include('_partials.mcp-server.self-hosting')
@include('_partials.mcp-server.compare')
@include('_partials.faq', ['title' => $copy['faq']['title'], 'items' => $copy['faq']['items'], 'openFirst' => true])
@include('_partials.mcp-server.closing')
