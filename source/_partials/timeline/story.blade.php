@php($story = $copy['story'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- The second step of adding a life event: the details, with the
             description being written. --}}
        <div class="rounded-lg bg-identity-3/14 p-5 max-lg:order-last md:p-10">
            <div role="img" aria-label="{{ $story['label'] }}" class="{{ $window }}">
                <div class="{{ $windowTitle }} py-4">
                    <span class="{{ $tile }} size-7 {{ $tiles[2] }}">
                        @include('_partials.icon', ['name' => 'activity', 'size' => 15])
                    </span>
                    <div class="flex flex-col gap-0.5">
                        <span class="text-copy font-semibold">{{ $story['heading'] }}</span>
                        <span class="{{ $stamp }}">{{ $story['step'] }}</span>
                    </div>
                </div>
                <div class="flex flex-col gap-3.5 p-4.5">
                    @include('_partials.drawn-field', ['label' => $story['what']['label'], 'value' => $story['what']['value']])
                    <div class="grid gap-3 sm:grid-cols-2">
                        @include('_partials.drawn-field', ['label' => $story['when']['label'], 'value' => $story['when']['value']])
                        @include('_partials.drawn-field', ['label' => $story['where']['label'], 'value' => $story['where']['value']])
                    </div>
                    @include('_partials.drawn-field', [
                        'label' => $story['description']['label'],
                        'optional' => $copy['optional'],
                        'value' => $story['description']['value'],
                        'multiline' => true,
                        'focused' => true,
                    ])
                </div>
                <div class="flex justify-end gap-2 border-t border-border bg-surface-subtle px-4.5 py-3">
                    <span class="{{ $button }} mn-btn-ghost">{{ $story['back'] }}</span>
                    <span class="{{ $button }} mn-btn-primary">{{ $story['add'] }}</span>
                </div>
            </div>
        </div>

        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $story['title'] }}</h2>
            <p class="{{ $closing }}">{{ $story['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $story['body'] }}</p>
            <p class="{{ $paragraph }}">{{ $story['close'] }}</p>
        </div>
    </div>
</section>
