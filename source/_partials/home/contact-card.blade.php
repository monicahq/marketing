{{--
    A real product surface: this is a Monica contact record, not a device mockup
    or a fabricated screenshot. Built from the same mn-* classes the application
    uses, so it cannot drift away from the product it is advertising.
--}}
@php
    $card = $page->t('showcase.card');

    // Initials, not a synthetic face. Derived so a translated name stays correct.
    $initials = collect(explode(' ', $card['name']))
        ->map(fn ($word) => mb_substr($word, 0, 1))
        ->join('');

    // A nature is a word plus a coloured marker; the colour never carries
    // meaning on its own.
    $natureIcons = ['meal' => 'activity', 'call' => 'phone'];

    $metaLabel = 'block font-mono text-mono text-text-muted uppercase';
@endphp

<div class="overflow-hidden rounded-lg border border-border bg-surface">
    <div class="flex items-center gap-4 border-b border-border p-5">
        <span class="mn-avatar size-11 text-copy">{{ $initials }}</span>
        <span class="min-w-0 flex-1">
            <span class="block text-lede font-semibold tracking-[-0.015em]">{{ $card['name'] }}</span>
            <span class="mt-0.5 block text-small text-text-muted">{{ $card['meta'] }}</span>
        </span>
        <span class="mn-badge">{{ $card['badge'] }}</span>
    </div>

    <div class="grid grid-cols-1 gap-4 border-b border-border-subtle p-5 md:grid-cols-2 md:gap-6">
        <span>
            <span class="{{ $metaLabel }}">{{ $card['birthdayLabel'] }}</span>
            <span class="mt-2 block text-small">{{ $card['birthday'] }}</span>
        </span>
        <span>
            <span class="{{ $metaLabel }}">{{ $card['metLabel'] }}</span>
            <span class="mt-2 block text-small">{{ $card['met'] }}</span>
        </span>
    </div>

    <div class="px-5 pt-4 pb-2">
        <span class="{{ $metaLabel }}">{{ $card['relationshipsLabel'] }}</span>
    </div>
    <div class="mn-rowgroup">
        @foreach ($card['relationships'] as $relationship)
            <div class="mn-row">
                <span class="mn-avatar size-[26px] flex-none text-[10px]">{{ $relationship['initials'] }}</span>
                <span class="mn-row__main">
                    {{-- Relationship direction is always a sentence, never an arrow. --}}
                    <span class="mn-row__label">{{ $relationship['label'] }}</span>
                </span>
                <span class="mn-row__meta">{{ $relationship['meta'] }}</span>
            </div>
        @endforeach
    </div>

    <div class="border-t border-border-subtle px-5 pt-4 pb-2">
        <span class="{{ $metaLabel }}">{{ $card['recentlyLabel'] }}</span>
    </div>
    <div class="mn-timeline px-5 pb-5">
        @foreach ($card['timeline'] as $entry)
            <div class="mn-timeline__item">
                <div class="mn-timeline__rail">
                    <span class="mn-timeline__dot mn-timeline__dot--nature mn-nature--{{ $entry['nature'] }}">
                        @include('_partials.icon', ['name' => $natureIcons[$entry['nature']], 'size' => 11])
                    </span>
                </div>
                <div class="mn-timeline__body">
                    <div class="mn-timeline__title">{{ $entry['title'] }}</div>
                    <div class="mn-timeline__meta">{{ $entry['meta'] }}</div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mn-row mn-row--attention border-t border-border-subtle">
        <span class="mn-row__main">
            <span class="mn-row__label">{{ $card['reminder'] }}</span>
            <span class="mn-row__desc">{{ $card['reminderMeta'] }}</span>
        </span>
    </div>
</div>
