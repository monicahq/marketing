@php
    $copy = $page->t('timelineReminders');
    $ui = $copy['ui'];

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

    // The application's own pieces, as Erica draws them. Their words are
    // `timelineReminders.ui` in `lang/`, the application's own translations.
    $window = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-pop';
    $panel = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-panel';
    $panelHead = 'flex min-h-12 items-center gap-3 border-b border-border px-4 py-3';
    $panelMark = 'grid size-7 flex-none place-items-center rounded-md border border-border bg-surface-subtle text-text-secondary';
    $panelTitle = 'text-[15px] leading-snug font-semibold tracking-[-0.01em] text-text';
    $sectionTitle = 'text-lede-sm font-semibold tracking-[-0.02em] text-text';
    $stamp = 'text-small text-text-muted';
    $person = 'font-medium text-text underline decoration-border-strong underline-offset-2';
    $field = 'flex h-9 items-center rounded-md border border-border-strong bg-canvas px-3 text-body text-text';
    $label = 'flex items-baseline gap-1.5 text-small font-medium text-text';
@endphp

@include('_partials.timeline-reminders.hero')
@include('_partials.timeline-reminders.dinner')
@include('_partials.timeline-reminders.reminders')
@include('_partials.timeline-reminders.context')
<div class="border-y border-border bg-surface-subtle">
    @include('_partials.faq', ['title' => $copy['faq']['title'], 'items' => $copy['faq']['items'], 'openFirst' => true, 'container' => 'max-w-page px-4 md:px-6'])
</div>
@include('_partials.timeline-reminders.cta')
