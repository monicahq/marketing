@php
    $useful = $copy['useful'];
    $screen = $useful['screen'];
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} {{ $split }}">
        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $useful['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $useful['body'] }}</p>
            <p class="{{ $closing }}">{{ $useful['closing'] }}</p>
        </div>

        {{-- Two sections of Phoebe Buffay's page: how you met, and what she
             eats, with one field nobody has filled in. --}}
        <div class="rounded-lg bg-identity-7/14 p-4 md:p-8">
            <div role="img" aria-label="{{ $useful['label'] }}" class="flex flex-col gap-4 text-body">
                <div class="{{ $panel }} shadow-pop">
                    @include('_partials.details.panel-head', ['icon' => 'relationship', 'tint' => 'violet', 'name' => $ui['howWeMet']])
                    <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['place'] }}</span><span class="text-pretty">{{ $screen['place'] }}</span></div>
                    <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['introducedBy'] }}</span><span class="font-medium text-text underline decoration-border-strong underline-offset-2">Monica Geller</span></div>
                </div>
                <div class="{{ $panel }}">
                    @include('_partials.details.panel-head', ['icon' => 'food', 'tint' => 'amber', 'name' => $ui['atTable']])
                    <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['drinks'] }}</span><span>{{ $screen['drinks'] }}</span></div>
                    <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['diet'] }}</span><span>{{ $screen['diet'] }}</span></div>
                    <div class="{{ $row }}"><span class="{{ $term }}">{{ $ui['allergies'] }}</span><span class="{{ $empty }}">{{ $ui['notRecorded'] }}</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
