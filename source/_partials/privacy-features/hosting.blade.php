@php($hosting = $copy['hosting'])

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $hosting['title'] }}</h2>
            <div class="flex flex-col gap-4">
                <p class="{{ $closing }}">{{ $hosting['lead'] }}</p>
                <p class="{{ $paragraph }}">{{ $hosting['body'] }}</p>
            </div>
        </div>

        {{-- The hosted service and your own server, side by side: who runs
             each one, and who looks after it. --}}
        <div role="img" aria-label="{{ $hosting['label'] }}" class="grid items-stretch gap-6 rounded-lg bg-identity-3/14 p-4 md:p-12 lg:grid-cols-2">
            @foreach ($hosting['options'] as $i => $option)
                <div class="{{ $window }} flex flex-col">
                    <div class="flex items-center gap-3 border-b border-border p-4">
                        @if ($i === 0)
                            <img src="/assets/images/monica-panda-mark.svg" alt="" width="32" height="29" loading="lazy" class="h-auto w-6 flex-none">
                        @else
                            <span class="grid w-6 flex-none place-items-center">@include('_partials.icon', ['name' => 'settings', 'size' => 18])</span>
                        @endif
                        <span class="text-copy font-semibold">{{ $option['title'] }}</span>
                    </div>
                    @include('_partials.privacy-features.fact', ['label' => $hosting['operated'], 'value' => $option['operated']])
                    @include('_partials.privacy-features.fact', ['label' => $hosting['upkeep'], 'value' => $option['upkeep'], 'last' => true])
                </div>
            @endforeach
        </div>
    </div>
</section>
