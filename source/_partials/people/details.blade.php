@php
    $details = $copy['details'];
    $screen = $details['screen'];
    $entry = 'flex flex-col gap-0.5 rounded-md border border-border bg-surface-subtle px-3.5 py-2.5';
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} {{ $split }}">
        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $details['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $details['body'] }}</p>
            <p class="{{ $closing }}">{{ $details['closing'] }}</p>
            <a href="{{ $page->route('details') }}" class="{{ $more }}">
                {{ $details['link'] }}
                @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])
            </a>
        </div>

        {{-- Three sections of the "Friends and family" template on Rachel's
             page, read rather than edited, each with its own tint: contact
             details, how you met, and a gift idea. --}}
        <div class="rounded-lg bg-identity-3/14 p-4 md:p-8">
            <div role="img" aria-label="{{ $details['label'] }}" class="flex flex-col gap-4 text-body">
                <div class="{{ $panel }} shadow-pop">
                    <div class="{{ $panelHead }}">
                        <span class="{{ $panelMark }} bg-identity-6/12 text-identity-6">@include('_partials.icon', ['name' => 'mail', 'size' => 15])</span>
                        <span class="{{ $panelTitle }}">{{ $ui['contactDetails'] }}</span>
                        <span class="{{ $smallButton }}">{{ $ui['editSection'] }}</span>
                    </div>
                    <div class="{{ $row }}">
                        <span class="text-small text-text-muted">{{ $ui['phones'] }}</span>
                        <div class="{{ $entry }}"><span class="flex flex-wrap items-center gap-1.75"><span dir="ltr">+1 212-555-0148</span><span class="{{ $badge }}">{{ $ui['mobile'] }}</span></span></div>
                    </div>
                    <div class="{{ $row }}">
                        <span class="text-small text-text-muted">{{ $ui['emails'] }}</span>
                        <div class="{{ $entry }}"><span class="flex flex-wrap items-center gap-1.75"><span>rachel@example.com</span><span class="{{ $badge }}">{{ $ui['personal'] }}</span></span></div>
                    </div>
                </div>

                <div class="{{ $panel }}">
                    <div class="{{ $panelHead }}">
                        <span class="{{ $panelMark }} bg-identity-5/12 text-identity-5">@include('_partials.icon', ['name' => 'relationship', 'size' => 15])</span>
                        <span class="{{ $panelTitle }}">{{ $ui['howWeMet'] }}</span>
                        <span class="{{ $smallButton }}">{{ $ui['editSection'] }}</span>
                    </div>
                    <div class="{{ $row }}"><span class="text-small text-text-muted">{{ $ui['dateWeMet'] }}</span><span>{{ $screen['dateMet'] }}</span></div>
                    <div class="{{ $row }}"><span class="text-small text-text-muted">{{ $ui['place'] }}</span><span class="text-pretty">{{ $screen['place'] }}</span></div>
                    <div class="{{ $row }}"><span class="text-small text-text-muted">{{ $ui['introducedBy'] }}</span><span class="{{ $person }}">Monica Geller</span></div>
                </div>

                <div class="{{ $panel }}">
                    <div class="{{ $panelHead }}">
                        <span class="{{ $panelMark }} bg-identity-4/12 text-identity-4">@include('_partials.icon', ['name' => 'gift', 'size' => 15])</span>
                        <span class="{{ $panelTitle }}">{{ $ui['giftIdeas'] }}</span>
                        <span class="{{ $smallButton }}">{{ $ui['editSection'] }}</span>
                    </div>
                    <div class="{{ $row }}">
                        <span class="text-small text-text-muted">{{ $ui['ideas'] }}</span>
                        <div class="{{ $entry }}">
                            <span class="font-medium">{{ $screen['idea'] }}</span>
                            <span class="text-small text-text-secondary">{{ $screen['ideaNote'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
