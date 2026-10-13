@php
    $versions = $copy['versions'];
    $statusBadges = [
        'draft' => ['class' => 'mn-badge mn-badge-warning', 'label' => $copy['draft']],
        'published' => ['class' => 'mn-badge mn-badge-success', 'label' => $copy['published']],
    ];
@endphp

<section class="px-4 pt-24 md:px-6 lg:pt-30">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $versions['title'] }}</h2>
            <div class="flex flex-col gap-4">
                @foreach ($versions['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
            </div>
        </div>

        <div role="img" aria-label="{{ $versions['label'] }}" class="grid items-start gap-5 rounded-lg bg-identity-4/14 p-4 md:p-10 lg:grid-cols-2 lg:p-12">
            <div class="{{ $window }}">
                <div class="border-b border-border px-5 py-4 text-copy font-semibold">{{ $versions['history'] }}</div>
                <div class="flex flex-col divide-y divide-border-subtle">
                    @foreach ($versions['rows'] as $row)
                        <div class="flex items-center gap-3 px-5 py-3.5">
                            <span class="w-6 flex-none font-mono text-mono {{ $row['status'] ? '' : 'text-text-muted' }}">{{ $row['version'] }}</span>
                            <span class="flex-1 text-base {{ $row['status'] ? 'font-medium' : 'text-text-muted' }}">{{ $row['text'] }}</span>
                            @if ($row['status'])
                                <span class="{{ $statusBadges[$row['status']]['class'] }}">{{ $statusBadges[$row['status']]['label'] }}</span>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-wrap items-center justify-between gap-3 border-t border-border bg-surface-subtle px-5 py-3.5">
                    <span class="max-w-[300px] text-small text-text-secondary">{{ $versions['notice'] }}</span>
                    <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">{{ $copy['publish'] }}</span>
                </div>
            </div>

            <div class="{{ $window }}">
                <div class="flex items-center gap-3 border-b border-border px-5 py-4">
                    @include('_partials.avatar-initials', ['name' => 'Rachel Green', 'size' => 28])
                    <span class="text-copy font-semibold">Rachel Green</span>
                </div>
                <div class="divide-y divide-border-subtle px-5 pt-2 pb-4">
                    @foreach ($versions['values'] as $key => $value)
                        @include('_partials.templates.field', ['label' => $fields[$key], 'value' => $value])
                    @endforeach
                </div>
                <div class="mx-5 mb-5 flex flex-col gap-2.5 rounded-md border border-dashed border-border-strong px-4 py-3.5">
                    <span class="{{ $eyebrow }} text-text-muted">{{ $versions['kept'] }}</span>
                    <div class="flex flex-wrap items-center justify-between gap-3">
                        <div class="flex gap-4 text-base">
                            <span class="text-text-muted">{{ $fields['shoeSize'] }}</span>
                            <span class="font-medium">38</span>
                        </div>
                        <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $versions['restore'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
