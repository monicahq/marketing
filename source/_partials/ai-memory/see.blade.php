@php
    $see = $copy['see'];

    // The colour of each job's type, as PossessionMaintenanceTypeEnum gives
    // it: cleaning is teal, a repair rust. The tint is the chip, the second
    // class its dot. Written out whole so Tailwind's scanner finds them.
    $jobTypes = [
        ['bg-identity-6/12 text-identity-6', 'bg-identity-6'],
        ['bg-identity-4/12 text-identity-4', 'bg-identity-4'],
    ];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- The Maintenance section of the recliner's page, as the
             application draws it
             (resources/views/app/vaults/possessions/maintenance.blade.php),
             without the shell, the sections beside it and the buttons that
             edit: the possession's header, then one card per job. One
             picture, read out by its label. --}}
        <div role="img" aria-label="{{ $see['label'] }}" class="rounded-lg bg-identity-3/14 p-4 md:p-10">
            <div class="{{ $window }} mx-auto flex max-w-[480px] flex-col gap-5 bg-canvas p-5 md:p-6">
                {{-- possessions/_header: the type, where it is kept, the name. --}}
                <div class="flex flex-col gap-2.5">
                    <span class="flex flex-wrap items-center gap-2 text-small">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-identity-6/12 py-0.5 ps-1 pe-2.5 font-medium text-identity-6">
                            <span class="flex size-5 items-center justify-center">@include('_partials.icon', ['name' => 'layers', 'size' => 14])</span>
                            {{ $see['type'] }}
                        </span>
                        <span class="text-text-muted">{{ $see['keptIn'] }}</span>
                        <span class="text-text-secondary">{{ $see['place'] }}</span>
                    </span>
                    <span class="text-heading-sm font-semibold text-text">{{ $see['item'] }}</span>
                </div>

                <div class="flex flex-col gap-1">
                    <span class="text-title font-semibold text-text">{{ $see['title'] }}</span>
                    <span class="text-small text-pretty text-text-muted">{{ $see['lead'] }}</span>
                </div>

                {{-- One card per job, newest first. --}}
                <div class="flex flex-col gap-4">
                    @foreach ($see['records'] as $r => $record)
                        <div class="overflow-hidden rounded-lg border border-border bg-canvas shadow-panel">
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-3 p-4">
                                <span class="flex min-w-0 flex-1 flex-wrap items-center gap-2">
                                    <span class="inline-flex h-7 shrink-0 items-center gap-1.5 rounded-full px-2.5 text-small font-medium {{ $jobTypes[$r][0] }}">
                                        <span class="size-1.75 rounded-full {{ $jobTypes[$r][1] }}"></span>
                                        {{ $record['type'] }}
                                    </span>
                                    <span class="min-w-0 truncate text-base font-semibold text-text">{{ $record['title'] }}</span>
                                </span>
                                <span class="flex flex-col gap-0.5 text-end">
                                    <span class="text-xl font-semibold text-text tabular-nums">{{ $record['cost'] }}</span>
                                    <span class="text-xs text-text-muted">{{ $see['costLabel'] }}</span>
                                </span>
                            </div>
                            <dl class="grid grid-cols-2 border-t border-border">
                                @foreach ($record['parts'] as $i => [$value, $isSet])
                                    <div class="flex min-w-0 flex-col gap-0.75 border-border-subtle px-4 py-3 {{ $i % 2 === 0 ? 'border-e' : '' }} {{ $i < 2 ? 'border-b' : '' }}">
                                        <dt class="text-xs text-text-muted">{{ $see['parts'][$i] }}</dt>
                                        <dd class="truncate text-base {{ $isSet ? 'text-text' : 'text-text-muted' }}">{{ $value }}</dd>
                                    </div>
                                @endforeach
                            </dl>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $see['title'] }}</h2>
            @foreach ($see['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
            <p class="{{ $closing }} font-semibold">{{ $see['closing'] }}</p>
        </div>
    </div>
</section>
