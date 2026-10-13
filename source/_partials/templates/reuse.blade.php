@php
    $reuse = $copy['reuse'];
    $friends = ['Rachel' => 'Rachel Green', 'Ross' => 'Ross Geller', 'Joey' => 'Joey Tribbiani'];
@endphp

<section class="px-4 pt-24 md:px-6 lg:pt-30">
    <div class="{{ $container }} grid items-center gap-14 lg:grid-cols-2">
        {{-- The words come first, so a phone and a screen reader meet the
             heading before its picture; from lg the picture moves left. --}}
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $reuse['title'] }}</h2>
            @foreach ($reuse['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
        </div>

        <div role="img" aria-label="{{ $reuse['label'] }}" class="flex flex-col gap-3.5 rounded-lg bg-identity-6/14 p-5 md:p-10 lg:order-first">
            <div class="{{ $window }} flex items-center justify-between gap-3 px-4 py-3.5">
                <div class="flex flex-col gap-0.5">
                    <span class="text-xs text-text-muted">{{ $reuse['template'] }}</span>
                    <span class="text-body font-semibold">{{ $fields['howWeMet'] }}</span>
                </div>
                <span class="{{ $badge }}">{{ $types['longText'] }}</span>
            </div>

            <div class="grid gap-3 sm:grid-cols-3">
                @foreach ($reuse['stories'] as $first => $story)
                    <div class="{{ $card }} flex flex-col gap-2.5 p-3.5">
                        <div class="flex items-center gap-2">
                            @include('_partials.avatar-initials', ['name' => $friends[$first], 'size' => 24])
                            <span class="text-base font-semibold">{{ $first }}</span>
                        </div>
                        <span class="{{ $eyebrow }} text-text-muted">{{ $fields['howWeMet'] }}</span>
                        <span class="text-small text-text-soft">{{ $story }}</span>
                    </div>
                @endforeach
            </div>

            <div class="{{ $card }} flex flex-wrap items-center justify-between gap-3 px-4 py-3.5">
                <div class="flex flex-col gap-0.5">
                    <span class="text-body font-semibold">{{ $reuse['default'] }}</span>
                    <span class="text-xs text-text-muted">{{ $reuse['defaultBody'] }}</span>
                </div>
                <span class="flex items-center gap-6 rounded-md border border-border px-2.5 py-1.75 text-base font-medium">
                    {{ $copy['friends'] }}
                    @include('_partials.icon', ['name' => 'chevron-down', 'size' => 12])
                </span>
            </div>
        </div>
    </div>
</section>
