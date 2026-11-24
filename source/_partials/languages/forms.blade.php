@php
    $forms = $copy['forms'];
    $ways = [
        [$hangul, 'ko', $forms['written']],
        [$latin, null, $forms['transliteration']],
        [$forms['pronunciationValue'], null, $forms['pronunciation']],
    ];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- Last in the markup on a phone, so the words come before the
             picture; first on a wide screen, as the design alternates. --}}
        <div role="img" aria-label="{{ $forms['label'] }}" class="max-lg:order-last rounded-lg bg-identity-6/14 p-5 md:p-10">
            <div class="{{ $window }} flex flex-col gap-3 p-4">
                <div class="flex flex-col gap-0.5">
                    <span class="text-base font-semibold">{{ $forms['heading'] }}</span>
                    <span class="{{ $stamp }} text-pretty">{{ $forms['hint'] }}</span>
                </div>
                <div class="overflow-hidden rounded-lg border border-border">
                    @foreach ($ways as [$name, $nameLang, $kind])
                        <div class="{{ $row }}">
                            <span class="flex min-w-0 flex-1 flex-col gap-0.5">
                                <span @if ($nameLang) lang="{{ $nameLang }}" @endif class="text-copy font-semibold">{{ $name }}</span>
                                <span class="{{ $stamp }}">{{ $kind }}</span>
                            </span>
                        </div>
                    @endforeach
                </div>
                <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none self-start">{{ $forms['add'] }}</span>
            </div>
        </div>

        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $forms['title'] }}</h2>
            <p class="{{ $closing }}">{{ $forms['lead'] }}</p>
            @foreach ($forms['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
        </div>
    </div>
</section>
