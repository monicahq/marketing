@php($assistant = $copy['assistant'])

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} {{ $split }}">
        {{-- A request typed to an assistant, and its answer once the item is
             added to the list in Monica. --}}
        <div role="img" aria-label="{{ $assistant['label'] }}" class="flex flex-col gap-3.5 rounded-lg bg-identity-2/14 p-4 text-body max-lg:order-2 md:p-6">
            <div class="flex items-end gap-3 rounded-lg border border-border bg-canvas px-4 py-3.5">
                <p class="flex-1 text-text">{{ $assistant['prompt'] }}</p>
                <span class="grid size-6 flex-none place-items-center rounded-md bg-primary text-on-primary">
                    @include('_partials.icon', ['name' => 'arrow-right', 'size' => 14, 'class' => '-rotate-90'])
                </span>
            </div>
            <div class="{{ $window }}">
                <div class="flex items-center justify-between gap-2.5 border-b border-border px-3.5 py-2.5">
                    <span class="font-semibold">{{ $assistant['name'] }}</span>
                    <span class="flex items-center gap-1.5 rounded-full border border-border px-2 py-0.5 text-xs text-text-secondary">
                        <img src="/assets/images/monica-panda-mark.svg" alt="" width="32" height="29" loading="lazy" class="h-auto w-3.5">
                        {{ $assistant['connected'] }}
                    </span>
                </div>
                <p class="px-3.5 py-3 text-text-soft">{{ $assistant['answer'] }}</p>
            </div>
        </div>

        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $assistant['title'] }}</h2>
            <p class="{{ $paragraph }}">{!! $linked($assistant['body'], ['link' => [$assistant['linkLabel'], $page->route('aiMemory')]]) !!}</p>
        </div>
    </div>
</section>
