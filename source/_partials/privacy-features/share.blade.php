@php($share = $copy['share'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- Last in the markup on a phone, so the words come before the
             picture; first on a wide screen, as the design alternates. --}}
        <div class="max-lg:order-last rounded-lg bg-identity-6/14 p-5 md:p-10">
            <div role="img" aria-label="{{ $share['label'] }}" class="{{ $window }}">
                <div class="{{ $windowTitle }} flex-wrap">
                    @include('_partials.icon', ['name' => 'link', 'size' => 16])
                    <span class="flex-1 text-copy font-semibold">{{ $share['link'] }}</span>
                    <span class="{{ $button }} mn-btn-secondary">{{ $share['change'] }}</span>
                </div>
                @include('_partials.privacy-features.fact', ['label' => $share['for'], 'value' => 'Rachel Green'])
                @include('_partials.privacy-features.fact', ['label' => $share['shows'], 'value' => $share['showsValue']])
                @include('_partials.privacy-features.fact', ['label' => $share['hidden'], 'value' => $share['hiddenValue']])
                @include('_partials.privacy-features.fact', ['label' => $share['password'], 'value' => $share['passwordValue']])
                @include('_partials.privacy-features.fact', ['label' => $share['ends'], 'value' => $share['endsValue'], 'last' => true])
                <div class="flex justify-end border-t border-border bg-surface-subtle px-4 py-3">
                    <span class="{{ $button }} mn-btn-secondary">{{ $share['revoke'] }}</span>
                </div>
            </div>
        </div>

        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $share['title'] }}</h2>
            <p class="{{ $closing }}">{{ $share['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $share['body'] }}</p>
        </div>
    </div>
</section>
