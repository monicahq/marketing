@php
    $structure = $copy['structure'];
    $screen = $structure['screen'];
    $benefits = [['link', 0], ['clock', 3], ['settings', 2]];

    // The sections of a possession's page, as PossessionViewModel::sections()
    // lists them: icon, colour (the application's vault colours are the
    // design system's identity colours) and count. Written out whole so
    // Tailwind's scanner finds the classes.
    $sections = [
        'overview' => ['info', 'text-text', null],
        'timeline' => ['timeline', 'text-text', 4],
        'transactions' => ['coin', 'text-identity-2', 1],
        'insurance' => ['lock', 'text-identity-4', 1],
        'valuations' => ['activity', 'text-identity-1', null],
        'provenance' => ['family', 'text-identity-5', null],
        'maintenance' => ['settings', 'text-identity-3', 1],
        'loans' => ['relationship', 'text-identity-7', null],
        'locations' => ['place', 'text-identity-6', 1],
        'documents' => ['file', 'text-identity-8', null],
    ];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-14">
        <div class="grid items-start gap-6 lg:grid-cols-2 lg:gap-14">
            <div class="flex flex-col gap-5">
                <span class="{{ $eyebrow }}">{{ $structure['eyebrow'] }}</span>
                <h2 class="{{ $title }}">{{ $structure['title'] }}</h2>
            </div>
            <div class="flex flex-col gap-4 lg:pt-2">
                @foreach ($structure['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
                <p class="{{ $closing }}">{{ $structure['closing'] }}</p>
            </div>
        </div>

        {{-- The Timeline section of Rosita's page, as the application draws
             it (resources/views/app/vaults/possessions/timeline.blade.php),
             without the shell around it: no app sidebar, no breadcrumb, no
             Edit button. What stays is what the section is about, a record
             with its own sections and a history read from them. One picture,
             read out by its label. --}}
        <figure class="flex flex-col gap-3.5">
            <div role="img" aria-label="{{ $screen['label'] }}" class="rounded-lg bg-identity-6/14 p-4 md:p-10">
                <div class="{{ $window }} mx-auto flex max-w-[880px] flex-col gap-6 bg-canvas p-5 md:p-7">
                    {{-- possessions/_header: the type, where it is kept, the name, the tags. --}}
                    <div class="flex flex-col gap-2.5">
                        <span class="flex flex-wrap items-center gap-2 text-small">
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-identity-6/12 py-0.5 ps-1 pe-2.5 font-medium text-identity-6">
                                <span class="flex size-5 items-center justify-center">@include('_partials.icon', ['name' => 'layers', 'size' => 14])</span>
                                {{ $screen['type'] }}
                            </span>
                            <span class="text-text-muted">{{ $screen['keptIn'] }}</span>
                            <span class="text-text-secondary">{{ $screen['place'] }}</span>
                        </span>
                        <span class="flex items-center gap-2.5">
                            <span class="text-heading-sm font-semibold text-text">{{ $screen['name'] }}</span>
                            @include('_partials.icon', ['name' => 'star-filled', 'size' => 18, 'class' => 'text-identity-3'])
                        </span>
                        <span class="mt-0.5 flex">
                            <span class="inline-flex h-7 items-center gap-1.5 rounded-full bg-identity-7/12 px-2.5 text-small font-medium text-identity-7">
                                <span class="size-1.75 rounded-full bg-identity-7"></span>
                                {{ $screen['tag'] }}
                            </span>
                        </span>
                    </div>

                    <div class="grid items-start gap-x-8 gap-y-6 md:grid-cols-[13.5rem_minmax(0,1fr)]">
                        {{-- possessions/_sections, Timeline current, Documents not built yet. --}}
                        <div class="flex flex-col gap-px max-md:hidden">
                            @foreach ($sections as $key => [$icon, $ink, $count])
                                <span class="flex min-h-8 items-center gap-2.5 rounded-md px-2.5 py-1.5 text-base {{ $key === 'timeline' ? 'bg-surface-subtle font-medium text-text shadow-nav-active' : ($key === 'documents' ? 'text-text-muted' : 'text-text-secondary') }}">
                                    <span class="flex {{ $ink }}">@include('_partials.icon', ['name' => $icon, 'size' => 15])</span>
                                    <span class="min-w-0 flex-1">{{ $screen['sections'][$key] }}</span>
                                    @if ($count)
                                        <span class="text-xs text-text-muted tabular-nums">{{ $count }}</span>
                                    @endif
                                </span>
                            @endforeach
                        </div>

                        {{-- possessions/timeline: the lead, the chips, the entries by year. --}}
                        <div class="flex min-w-0 flex-col gap-5">
                            <div class="flex flex-col gap-1">
                                <span class="text-title font-semibold text-text">{{ $screen['title'] }}</span>
                                <span class="text-small text-pretty text-text-muted">{{ $screen['lead'] }}</span>
                            </div>

                            <div class="flex flex-wrap items-center gap-2">
                                <span class="mn-chip" aria-current="true">{{ $screen['all'] }} <span class="mn-chip-count">4</span></span>
                                @foreach (['transactions', 'insurance', 'maintenance', 'locations'] as $key)
                                    <span class="mn-chip">{{ $screen['sections'][$key] }} <span class="mn-chip-count">1</span></span>
                                @endforeach
                            </div>

                            @foreach ($screen['groups'] as $group)
                                <div class="flex flex-col gap-3">
                                    <span class="flex flex-wrap items-baseline gap-x-3 gap-y-1">
                                        <span class="text-body font-semibold text-text">{{ $group['year'] }}</span>
                                        <span class="text-small text-text-muted">{{ $group['count'] }}</span>
                                    </span>
                                    <div class="flex flex-col">
                                        @foreach ($group['entries'] as $entry)
                                            @php([$icon, $ink] = $sections[$entry['section']])
                                            {{-- possessions/_timeline-entry: the rail, then the noun, the date, the title. --}}
                                            <div class="grid grid-cols-[2rem_minmax(0,1fr)] gap-x-4">
                                                <div class="flex flex-col items-center">
                                                    <span class="flex size-8 flex-none items-center justify-center rounded-full border border-border bg-surface-subtle {{ $ink }}">@include('_partials.icon', ['name' => $icon, 'size' => 15])</span>
                                                    <span class="my-1 min-h-3 w-px flex-1 {{ $loop->last ? '' : 'bg-border' }}"></span>
                                                </div>
                                                <div class="flex min-w-0 flex-col gap-1 pt-1 pb-6">
                                                    <span class="flex flex-wrap items-center gap-2 text-small">
                                                        <span class="font-medium text-text-soft">{{ $entry['noun'] }}</span>
                                                        <span class="text-text-muted">{{ $entry['date'] }}</span>
                                                        @isset($entry['badge'])
                                                            <span class="mn-badge mn-badge-success">@include('_partials.icon', ['name' => 'check', 'size' => 12]){{ $entry['badge'] }}</span>
                                                        @endisset
                                                    </span>
                                                    <span class="text-base font-semibold text-text">{{ $entry['title'] }}</span>
                                                    <span class="text-small text-pretty text-text-secondary">{{ $entry['detail'] }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <figcaption class="{{ $note }} text-center">{{ $structure['caption'] }}</figcaption>
        </figure>

        <div class="grid gap-8 md:grid-cols-3">
            @foreach ($structure['benefits'] as $i => $benefit)
                @php([$icon, $t] = $benefits[$i])
                <div class="flex flex-col gap-2.5 border-t-2 pt-5 {{ $tones[$t]['edge'] }}">
                    <span class="{{ $tones[$t]['ink'] }}">@include('_partials.icon', ['name' => $icon, 'size' => 18])</span>
                    <h3 class="text-copy font-semibold">{{ $benefit['title'] }}</h3>
                    <p class="text-body text-text-secondary text-pretty">{{ $benefit['body'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
