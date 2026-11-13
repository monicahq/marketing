@php($visitor = $copy['visitor'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $visitor['title'] }}</h2>
            <p class="{{ $closing }}">{{ $visitor['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $visitor['body'] }}</p>
        </div>

        {{-- Joey's page as Rachel opens it. The band across the top is the
             inverse surface, dark in both themes, so the panda's white face
             stands out on it either way. --}}
        <div class="rounded-lg bg-identity-2/14 p-5 md:p-10">
            <div role="img" aria-label="{{ $visitor['label'] }}" class="{{ $window }}">
                <div class="flex flex-wrap items-center gap-2.5 bg-surface-inverse px-3.5 py-2.5 text-on-inverse">
                    <img src="/assets/images/monica-panda-mark.svg" alt="" width="32" height="29" loading="lazy" class="h-auto w-5 flex-none">
                    <span class="flex-1 text-xs">{{ $visitor['by'] }}</span>
                    <span class="flex items-center gap-1.5 rounded-md bg-on-inverse-raised px-2 py-1 text-xs text-on-inverse-strong">
                        @include('_partials.icon', ['name' => 'lock', 'size' => 13])
                        {{ $visitor['until'] }}
                    </span>
                </div>
                <div class="flex flex-col gap-4.5 p-5">
                    <div class="flex items-center gap-3.5">
                        @include('_partials.avatar-initials', ['name' => 'Joey Tribbiani', 'size' => 48])
                        <span class="text-heading-sm font-semibold">Joey Tribbiani</span>
                    </div>
                    <div class="overflow-hidden rounded-lg border border-border">
                        <div class="flex items-center gap-2.5 border-b border-border px-4 py-3">
                            <span class="{{ $iconTile }}">@include('_partials.icon', ['name' => 'place', 'size' => 15])</span>
                            <span class="text-body font-semibold">{{ $copy['sections'][0] }}</span>
                        </div>
                        @include('_partials.sharing.fact', ['label' => $copy['address'], 'value' => $visitor['oldAddress']])
                        @include('_partials.sharing.fact', ['label' => $copy['phone'], 'value' => $phone, 'last' => true])
                    </div>
                    <div class="flex gap-2.5 rounded-lg border border-border bg-surface-subtle px-3.5 py-3 text-xs text-text-secondary">
                        <span class="flex-none">@include('_partials.icon', ['name' => 'info', 'size' => 16])</span>
                        <span>{{ $visitor['notice'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
