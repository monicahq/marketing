@php
    $hero = $copy['hero'];
    $screen = $hero['screen'];
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
                <a href="{{ $page->route('people') }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $hero['people'] }}</a>
            </div>
        </div>

        {{-- Rachel Green's page, on the "Tastes and attentions" tab of the
             "Friends and family" template: her interests, what she eats, the
             lilies kept as a gift idea and a note. One picture of the
             product, read out by its label. Below `lg` the sections stack in
             the order the template puts them in, as in the application. --}}
        <div class="mx-auto mt-18 max-w-[1040px] rounded-lg bg-identity-3/14 p-3 md:p-8">
            <div role="img" aria-label="{{ $hero['label'] }}" class="{{ $window }}">
                <div class="flex items-center gap-1 border-b border-border bg-surface-subtle px-4 py-2 text-small text-text-muted">
                    <span class="flex items-center gap-2 px-1.5 py-1 text-text">
                        <span class="grid size-5.5 flex-none place-items-center rounded-xs bg-identity-1 text-caption font-semibold text-white">{{ mb_substr($ui['vault'], 0, 1) }}</span>
                        <span class="font-semibold">{{ $ui['vault'] }}</span>
                    </span>
                    @include('_partials.icon', ['name' => 'chevron-right', 'size' => 14, 'class' => 'text-text-disabled'])
                    <span class="px-1.5 py-1">{{ $ui['people'] }}</span>
                    @include('_partials.icon', ['name' => 'chevron-right', 'size' => 14, 'class' => 'text-text-disabled'])
                    <span class="truncate px-1.5 py-1 font-semibold text-text">Rachel Green</span>
                </div>

                <div class="flex flex-col gap-6 p-4 text-body md:p-7">
                    @include('_partials.details.contact-head', [
                        'name' => 'Rachel Green',
                        'favourite' => true,
                        'size' => 88,
                        'facts' => [
                            ['file', $ui['birthday'], $screen['birthday']],
                            ['timeline', $ui['lastInTouch'], $screen['lastInTouch']],
                            ['reminder', $ui['reminders'], $ui['noneWaiting']],
                        ],
                        'tabs' => $ui['friendsTabs'],
                        'open' => 2,
                        'counts' => [null, 7, 5, 4],
                    ])

                    <div class="grid items-start gap-5 lg:grid-cols-2">
                        <div class="flex flex-col gap-5">
                            <div class="{{ $panel }}">
                                @include('_partials.details.panel-head', ['icon' => 'heart', 'tint' => 'plum', 'name' => $ui['interests']])
                                <div class="{{ $row }}">
                                    <span class="{{ $term }}">{{ $ui['hobbies'] }}</span>
                                    <span class="flex flex-wrap gap-1.5">@foreach ($screen['hobbies'] as $hobby)<span class="{{ $choice }}">{{ $hobby }}</span>@endforeach</span>
                                </div>
                                <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['topics'] }}</span><span class="text-pretty">{{ $screen['topics'] }}</span></div>
                            </div>
                            <div class="{{ $panel }}">
                                @include('_partials.details.panel-head', ['icon' => 'gift', 'tint' => 'rust', 'name' => $ui['giftIdeas']])
                                <div class="{{ $row }}">
                                    <span class="{{ $term }}">{{ $ui['ideas'] }}</span>
                                    <div class="{{ $entry }}">
                                        <span class="font-medium">{{ $screen['idea'] }}</span>
                                        <span class="text-small text-text-secondary">{{ $screen['ideaNote'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-5">
                            <div class="{{ $panel }}">
                                @include('_partials.details.panel-head', ['icon' => 'food', 'tint' => 'amber', 'name' => $ui['atTable']])
                                <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['dishes'] }}</span><span class="text-pretty">{{ $screen['dishes'] }}</span></div>
                                <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['drinks'] }}</span><span class="text-pretty">{{ $screen['drinks'] }}</span></div>
                            </div>
                            <div class="{{ $panel }}">
                                @include('_partials.details.panel-head', ['icon' => 'note', 'tint' => 'green', 'name' => $ui['notes']])
                                <div class="flex flex-col gap-2 px-6 py-5 max-sm:px-4 max-sm:py-4">
                                    <span class="text-small font-semibold text-text-soft">{{ $ui['freeNotes'] }}</span>
                                    <p class="text-[14.5px] leading-[1.7] text-pretty text-text">{{ $screen['note'] }}</p>
                                    <span class="text-xs text-text-muted">{{ $screen['noteAdded'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
