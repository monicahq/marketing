@php
    $templates = $copy['templates'];
    $screen = $templates['screen'];

    // One template per card: its name, as the edit page shows it, and the
    // first page it gives a contact.
    $cards = [
        ['template' => $ui['friendsTemplate'], 'name' => 'Rachel Green', 'tabs' => $ui['friendsTabs'], 'counts' => [null, 7, 5, 4], 'tint' => 'bg-identity-7/14'],
        ['template' => $ui['professionalTemplate'], 'name' => 'Gunther', 'tabs' => $ui['professionalTabs'], 'counts' => [null, 5, 1, 1], 'tint' => 'bg-identity-6/14'],
    ];
@endphp

<section class="border-y border-border bg-surface-subtle px-4 py-24 md:px-6 lg:py-28">
    <div class="{{ $narrow }} flex flex-col items-center gap-4.5 text-center">
        <h2 class="{{ $title }}">{{ $templates['title'] }}</h2>
        <p class="max-w-[620px] {{ $paragraph }}">{!! $linked($templates['body'], ['link' => [$templates['linkLabel'], $page->route('templates')]]) !!}</p>
        <p class="max-w-[620px] {{ $paragraph }}">{{ $templates['body2'] }}</p>

        {{-- The same first tab under two templates: Rachel on "Friends and
             family", Gunther on "Professional network". On a phone, one under
             the other. --}}
        <div role="img" aria-label="{{ $templates['label'] }}" class="mt-10 grid w-full grid-cols-1 gap-5 text-left text-body lg:grid-cols-2">
            @foreach ($cards as $c => $card)
                <div class="flex flex-col gap-3 rounded-lg p-4 md:p-6 {{ $card['tint'] }}">
                    <span class="inline-flex w-fit items-center gap-1.5 rounded-md border border-border bg-canvas px-2.5 py-1.5 text-small font-medium text-text">
                        @include('_partials.icon', ['name' => 'layers', 'size' => 15])
                        {{ $card['template'] }}
                    </span>
                    <div class="{{ $window }} flex flex-col gap-5 p-4 md:p-5">
                        @include('_partials.details.contact-head', ['name' => $card['name'], 'favourite' => $c === 0, 'size' => 48, 'facts' => [], 'tabs' => $card['tabs'], 'open' => 1, 'counts' => $card['counts']])

                        @if ($c === 0)
                            <div class="{{ $panel }}">
                                @include('_partials.details.panel-head', ['icon' => 'profile', 'tint' => 'blue', 'name' => $ui['landmarks']])
                                <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['birthday'] }}</span><span class="inline-flex items-center gap-2">{{ $screen['rachelBirthday'] }} @include('_partials.icon', ['name' => 'clock', 'size' => 15, 'class' => 'text-text-muted'])</span></div>
                                <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['languagesSpoken'] }}</span><span class="flex flex-wrap gap-1.5">@foreach ($screen['rachelLanguages'] as $language)<span class="{{ $choice }}">{{ $language }}</span>@endforeach</span></div>
                            </div>
                            <div class="{{ $panel }}">
                                @include('_partials.details.panel-head', ['icon' => 'mail', 'tint' => 'teal', 'name' => $ui['contactDetails']])
                                <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['emails'] }}</span><div class="{{ $entry }}"><span class="flex flex-wrap items-center gap-1.75"><span class="break-all">rachel.green@fortunata.example</span><span class="{{ $badge }}">{{ $ui['personal'] }}</span></span></div></div>
                                <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['phones'] }}</span><div class="{{ $entry }}"><span class="flex flex-wrap items-center gap-1.75"><span dir="ltr">+1 212-555-0105</span><span class="{{ $badge }}">{{ $ui['home'] }}</span></span></div></div>
                            </div>
                        @else
                            <div class="{{ $panel }}">
                                @include('_partials.details.panel-head', ['icon' => 'briefcase', 'tint' => 'blue', 'name' => $ui['currentRole']])
                                <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['jobRole'] }}</span><span>{{ $screen['guntherRole'] }}</span></div>
                                <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['organisation'] }}</span><span>Central Perk</span></div>
                                <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['industry'] }}</span><span>{{ $ui['hospitality'] }}</span></div>
                            </div>
                            <div class="{{ $panel }}">
                                @include('_partials.details.panel-head', ['icon' => 'mail', 'tint' => 'teal', 'name' => $ui['workContact']])
                                <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['emails'] }}</span><div class="{{ $entry }}"><span class="flex flex-wrap items-center gap-1.75"><span class="break-all">gunther@centralperk.example</span><span class="{{ $badge }}">{{ $ui['work'] }}</span></span></div></div>
                                <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['workAddress'] }}</span><span class="flex flex-col"><span>199 Lafayette Street</span><span>New York, NY 10012</span></span></div>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <a href="{{ $page->route('templates') }}" class="{{ $more }} mt-3">
            {{ $templates['more'] }}
            @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])
        </a>
    </div>
</section>
