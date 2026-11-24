@php
    $hero = $copy['hero'];

    // The possession page's sections, in the order Erica lists them, with
    // the colour and the count each one carries for the bike.
    $sections = [
        ['overview', 'info', 'text-text', null],
        ['timeline', 'timeline', 'text-text', 4],
        ['transactions', 'coin', 'text-identity-2', 1],
        ['insurance', 'lock', 'text-identity-4', null],
        ['valuations', 'activity', 'text-identity-1', null],
        ['provenance', 'family', 'text-identity-5', null],
        ['maintenance', 'settings', 'text-identity-3', 1],
        ['loans', 'relationship', 'text-identity-7', 1],
        ['locations', 'place', 'text-identity-6', 2],
        ['documents', 'file', 'text-text-muted', null],
    ];
    $facts = [
        [$ui['type'], $ui['bicycles']],
        [$ui['keptInFact'], $bike['path']],
        [$ui['status'], $ui['owned']],
        [$ui['acquired'], $bike['acquired']],
    ];
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[760px] flex-col items-center gap-5 text-center">
            <span class="text-caption font-semibold tracking-[0.1em] text-text-muted uppercase">{{ $hero['eyebrow'] }}</span>
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="max-w-[620px] text-lede-md font-medium text-text text-balance">{{ $hero['lede'] }}</p>
            <p class="max-w-[600px] {{ $paragraph }}">{{ $hero['body'] }}</p>
            <div class="flex flex-wrap justify-center gap-2.5 pt-1.5">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
                <a href="{{ $page->route('pricing') }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $hero['plans'] }}</a>
            </div>
        </div>

        {{-- The city bike's page, on its Overview: the header, the list of
             its sections, the fields of the Bicycles type and the facts
             beside them. One picture of the product, read out by its label.
             Below `lg` the parts stack in the application's own order. --}}
        <div class="mx-auto mt-18 max-w-[1080px] rounded-lg bg-identity-4/14 p-3 md:p-8">
            <div role="img" aria-label="{{ $hero['label'] }}" class="{{ $window }}">
                <div class="flex items-center gap-1 border-b border-border bg-surface-subtle px-4 py-2 text-small text-text-muted">
                    <span class="flex items-center gap-2 px-1.5 py-1 text-text">
                        <span class="grid size-5.5 flex-none place-items-center rounded-xs bg-identity-1 text-caption font-semibold text-white">{{ mb_substr($ui['vault'], 0, 1) }}</span>
                        <span class="font-semibold">{{ $ui['vault'] }}</span>
                    </span>
                    @include('_partials.icon', ['name' => 'chevron-right', 'size' => 14, 'class' => 'text-text-disabled'])
                    <span class="truncate px-1.5 py-1">{{ $ui['allPossessions'] }}</span>
                    @include('_partials.icon', ['name' => 'chevron-right', 'size' => 14, 'class' => 'text-text-disabled'])
                    <span class="truncate px-1.5 py-1 font-semibold text-text">{{ $bike['name'] }}</span>
                </div>

                <div class="flex flex-col gap-6 p-4 text-body md:p-7">
                    @include('_partials.possessions.header', ['type' => $ui['bicycles'], 'icon' => 'activity', 'tint' => 'rust', 'name' => $bike['name'], 'leaf' => $bike['leaf'], 'at' => $bike['at'], 'tags' => $bike['tags'], 'edit' => true])

                    <div class="grid grid-cols-1 items-start gap-x-8 gap-y-6 lg:grid-cols-[12rem_minmax(0,1fr)]">
                        <nav class="flex flex-col gap-px max-lg:hidden">
                            @foreach ($sections as [$key, $icon, $colour, $count])
                                <span class="flex min-h-8 items-center gap-2.5 rounded-md px-2.5 py-1.5 text-body {{ $key === 'overview' ? 'bg-surface-subtle font-medium text-text shadow-nav-active' : ($key === 'documents' ? 'text-text-muted' : 'text-text-secondary') }}">
                                    <span class="flex {{ $colour }}">@include('_partials.icon', ['name' => $icon, 'size' => 15])</span>
                                    <span class="min-w-0 flex-1">{{ $ui['sections'][$key] }}</span>
                                    @if ($count)<span class="text-xs text-text-muted">{{ $count }}</span>@endif
                                </span>
                            @endforeach
                        </nav>

                        <div class="grid min-w-0 grid-cols-1 items-start gap-6 xl:grid-cols-[minmax(0,1fr)_15rem]">
                            <div class="flex min-w-0 flex-col gap-6">
                                <div class="flex items-center gap-3 rounded-lg border border-dashed border-border-strong bg-surface-subtle px-4 py-4 text-text-muted">
                                    @include('_partials.icon', ['name' => 'memory', 'size' => 20])
                                    <p class="text-small">{{ $ui['photos'] }}</p>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <div class="flex flex-wrap items-baseline gap-x-4 gap-y-1">
                                        <span class="{{ $sectionTitle }}">{{ $ui['details'] }}</span>
                                        <span class="{{ $muted }}">{{ $ui['fieldsFrom'] }}</span>
                                    </div>
                                    @include('_partials.possessions.fields', ['groups' => $bike['groups']])
                                </div>
                            </div>

                            <aside class="flex min-w-0 flex-col gap-4">
                                <div class="{{ $panel }}">
                                    <dl class="divide-y divide-border-subtle">
                                        @foreach ($facts as [$label, $value])
                                            <div class="flex justify-between gap-4 px-4 py-2.75">
                                                <dt class="{{ $muted }}">{{ $label }}</dt>
                                                <dd class="text-end text-small font-medium text-text">{{ $value }}</dd>
                                            </div>
                                        @endforeach
                                    </dl>
                                </div>
                                <p class="px-1 text-xs text-text-muted">{{ $bike['added'] }}</p>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
