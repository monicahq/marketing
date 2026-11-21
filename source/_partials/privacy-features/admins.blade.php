@php($admins = $copy['admins'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- Last in the markup on a phone, so the words come before the
             picture; first on a wide screen, as the design alternates. The
             band across the top is the inverse surface, dark in both themes. --}}
        <div class="max-lg:order-last rounded-lg bg-identity-2/14 p-5 md:p-10">
            <div role="img" aria-label="{{ $admins['label'] }}" class="{{ $window }}">
                <div class="flex items-center gap-2 bg-surface-inverse px-4 py-2 text-xs font-medium text-on-inverse">
                    @include('_partials.icon', ['name' => 'lock', 'size' => 14])
                    {{ $admins['space'] }}
                </div>
                <div class="{{ $windowTitle }}">
                    @include('_partials.avatar-initials', ['name' => 'Monica Geller', 'size' => 28])
                    <span class="text-copy font-semibold">Monica Geller</span>
                </div>
                @include('_partials.privacy-features.fact', ['label' => $admins['email'], 'value' => 'monica@example.com'])
                @include('_partials.privacy-features.fact', ['label' => $admins['signIn'], 'value' => $admins['signInValue']])
                @include('_partials.privacy-features.fact', ['label' => $admins['storage'], 'value' => $admins['storageValue']])
                <div class="flex gap-2.5 bg-surface-subtle px-4 py-3.5 text-xs text-text-secondary">
                    <span class="flex-none">@include('_partials.icon', ['name' => 'info', 'size' => 15])</span>
                    <span class="text-pretty">{{ $admins['notice'] }}</span>
                </div>
            </div>
        </div>

        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $admins['title'] }}</h2>
            <p class="{{ $closing }}">{{ $admins['lead'] }}</p>
            @foreach ($admins['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
        </div>
    </div>
</section>
