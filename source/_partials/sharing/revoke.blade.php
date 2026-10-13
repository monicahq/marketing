@php($revoke = $copy['revoke'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- The confirmation before Rachel's link is revoked. --}}
        <div class="flex justify-center rounded-lg bg-identity-3/14 p-5 max-lg:order-last md:p-10">
            <div role="img" aria-label="{{ $revoke['label'] }}" class="{{ $window }} w-full max-w-[420px]">
                <div class="flex flex-col gap-2 p-4.5">
                    <span class="text-copy font-semibold">{{ $revoke['heading'] }}</span>
                    <span class="text-base text-text-secondary text-pretty">{{ $revoke['warning'] }}</span>
                </div>
                <div class="{{ $footer }}">
                    <span class="{{ $button }} mn-btn-ghost">{{ $copy['cancel'] }}</span>
                    <span class="{{ $button }} mn-btn-danger">{{ $revoke['confirm'] }}</span>
                </div>
            </div>
        </div>

        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $revoke['title'] }}</h2>
            <p class="{{ $closing }}">{{ $revoke['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $revoke['body'] }}</p>
        </div>
    </div>
</section>
