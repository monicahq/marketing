@php($unknown = $copy['unknown'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- Adding Joey's sister, whose name nobody knows yet. --}}
        <div class="rounded-lg bg-identity-6/14 p-5 max-lg:order-last md:p-10">
            <div role="img" aria-label="{{ $unknown['label'] }}" class="{{ $window }}">
                <div class="flex items-center gap-3 border-b border-border px-4.5 py-3.5">
                    @include('_partials.avatar-initials', ['name' => 'Joey Tribbiani', 'size' => 28])
                    <div class="flex flex-col gap-px">
                        <span class="text-copy font-semibold">{{ $copy['add'] }}</span>
                        <span class="{{ $stamp }}">{{ $unknown['subtitle'] }}</span>
                    </div>
                </div>
                <div class="flex flex-col gap-2.5 p-4.5">
                    <span class="{{ $eyebrow }} text-text-muted">{{ $copy['sibling'] }}</span>
                    @foreach ($unknown['options'] as $option)
                        @include('_partials.relationships.choice', ['option' => $option, 'selected' => $loop->first])
                    @endforeach
                </div>
                <div class="flex gap-3 border-t border-border px-4.5 py-3.5">
                    <span class="mt-0.5 size-4 flex-none rounded-xs border border-border-strong"></span>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-body">{{ $unknown['record']['title'] }}</span>
                        <span class="{{ $stamp }}">{{ $unknown['record']['hint'] }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $unknown['title'] }}</h2>
            <p class="{{ $closing }}">{{ $unknown['lead'] }}</p>
            @foreach ($unknown['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
        </div>
    </div>
</section>
