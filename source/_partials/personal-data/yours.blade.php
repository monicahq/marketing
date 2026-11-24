@php
    $yours = $copy['yours'];
    $screen = $yours['screen'];
    $icons = ['vault', 'settings', 'plus'];

    // The icon and colour of each profile type, from the application's own
    // short lists (EntityType::ICONS and EntityType::COLOURS, the latter the
    // design system's identity colours, tinted at 12%).
    $types = [
        ['key', 'bg-identity-1/12 text-identity-1'],
        ['pet', 'bg-identity-2/12 text-identity-2'],
        ['sun', 'bg-identity-3/12 text-identity-3'],
    ];
@endphp

<section class="{{ $section }} {{ $band }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex flex-col gap-5">
            <span class="{{ $eyebrow }}">{{ $yours['eyebrow'] }}</span>
            <h2 class="{{ $title }}">{{ $yours['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $yours['body'] }}</p>
            <p class="{{ $closing }}">{{ $yours['closing'] }}</p>
            <ul class="mt-3 flex flex-col">
                @foreach ($yours['items'] as $i => $item)
                    <li class="grid grid-cols-[36px_minmax(0,1fr)] gap-4 border-t border-border py-4.5">
                        <span class="grid size-9 place-items-center rounded-lg border border-border bg-canvas">@include('_partials.icon', ['name' => $icons[$i], 'size' => 18])</span>
                        <div class="flex flex-col gap-1.5 pt-1.5">
                            <h3 class="text-copy font-semibold">{{ $item['title'] }}</h3>
                            <p class="text-body text-text-secondary text-pretty">{{ $item['body'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Settings, Contacts and more, as the application draws it
             (resources/views/app/settings/account/entity-types/index.blade.php),
             without the settings shell and without the block of examples:
             the page header, the create button, and the list of profile
             types, contacts first. One picture, read out by its label. --}}
        <div role="img" aria-label="{{ $screen['label'] }}" class="rounded-lg bg-identity-5/14 p-4 md:p-10">
            <div class="{{ $window }} mx-auto flex max-w-[480px] flex-col gap-6 bg-canvas p-5 md:p-6">
                {{-- x-page-header --}}
                <div class="flex flex-col gap-1.5">
                    <span class="text-heading-sm font-semibold text-text">{{ $screen['title'] }}</span>
                    <span class="text-base text-pretty text-text-muted">{{ $screen['description'] }}</span>
                </div>

                <div class="flex flex-col gap-3">
                    <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none self-start">@include('_partials.icon', ['name' => 'plus', 'size' => 16]){{ $screen['create'] }}</span>
                    <span class="text-base text-pretty text-text-muted">{{ $screen['createNote'] }}</span>
                </div>

                {{-- x-page-section, then the panel: contacts, then the sortable rows. --}}
                <div class="flex flex-col gap-3">
                    <div class="flex flex-col gap-0.5">
                        <span class="text-title font-semibold text-text">{{ $screen['list'] }}</span>
                        <span class="text-small text-text-muted">{{ $screen['listNote'] }}</span>
                    </div>
                    <div class="{{ $card }} overflow-hidden">
                        <div class="flex items-center gap-3 border-b border-border py-3.5 pr-4 pl-11">
                            <span class="flex size-8 shrink-0 items-center justify-center rounded-sm bg-hover text-text-secondary">@include('_partials.icon', ['name' => 'profile', 'size' => 16])</span>
                            <div class="min-w-0 flex-1">
                                <span class="flex flex-wrap items-center gap-x-2 gap-y-1">
                                    <span class="text-base font-semibold text-text">{{ $screen['contacts'] }}</span>
                                    <span class="mn-badge mn-badge-neutral">{{ $screen['builtIn'] }}</span>
                                </span>
                                <span class="flex flex-wrap items-center gap-x-1.5 gap-y-1 text-xs text-text-muted">
                                    <span>{{ $screen['contactsCount'] }}</span>
                                    <span>·</span>
                                    <span class="inline-flex items-center gap-1">@include('_partials.icon', ['name' => 'lock', 'size' => 14]){{ $screen['locked'] }}</span>
                                </span>
                            </div>
                        </div>
                        @foreach ($screen['types'] as $i => $type)
                            @php([$icon, $tint] = $types[$i])
                            <div class="flex items-center gap-3 border-b border-border py-3.5 pr-4 pl-2 last:border-b-0">
                                <span class="flex shrink-0 p-1 text-text-muted">@include('_partials.icon', ['name' => 'grip', 'size' => 15])</span>
                                <span class="flex size-8 shrink-0 items-center justify-center rounded-sm {{ $tint }}">@include('_partials.icon', ['name' => $icon, 'size' => 18])</span>
                                <span class="min-w-0 flex-1 text-base font-semibold text-text">{{ $type['name'] }}</span>
                                <span class="ml-auto flex shrink-0 items-center gap-2.5">
                                    <span class="text-xs text-text-muted">{{ $type['count'] }}</span>
                                    <span class="mn-btn mn-btn-ghost mn-btn-small pointer-events-none">{{ $screen['edit'] }}</span>
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
