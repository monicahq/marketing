@php($together = $copy['together'])

{{-- Knowledge has no page yet, so its link is `#`. --}}
<section class="border-y border-border bg-surface-subtle px-4 py-24 md:px-6 lg:py-28">
    <div class="{{ $narrow }} {{ $split }}">
        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $together['title'] }}</h2>
            <p class="{{ $paragraph }}">{!! $linked($together['body'], ['contacts' => [$together['contacts'], $page->route('people')], 'knowledge' => [$together['knowledge'], '#'], 'mcp' => [$together['mcp'], $page->route('mcpServer')]]) !!}</p>
            <p class="{{ $closing }}">{{ $together['closing'] }}</p>
        </div>

        {{-- A question typed to an assistant, and its answer from Monica. --}}
        <div role="img" aria-label="{{ $together['label'] }}" class="flex flex-col gap-3.5 rounded-lg border border-border bg-canvas p-4 text-body md:p-6">
            <div class="flex flex-col gap-3 rounded-lg border border-border px-4 pt-3.5 pb-2.5">
                <p class="text-text">{{ $together['prompt'] }}</p>
                <span class="grid size-6 place-items-center self-end rounded-md bg-primary text-on-primary">
                    @include('_partials.icon', ['name' => 'arrow-right', 'size' => 14, 'class' => '-rotate-90'])
                </span>
            </div>
            <div class="rounded-lg bg-identity-6/14 p-4">
                <div class="{{ $window }}">
                    <div class="flex items-center justify-between gap-2.5 border-b border-border px-3.5 py-2.5">
                        <span class="font-semibold">{{ $together['name'] }}</span>
                        <span class="flex items-center gap-1.5 rounded-full border border-border px-2 py-0.5 text-xs text-text-secondary">
                            <img src="/assets/images/monica-panda-mark.svg" alt="" width="32" height="29" loading="lazy" class="h-auto w-3.5">
                            {{ $together['connected'] }}
                        </span>
                    </div>
                    <p class="px-3.5 py-3 text-text-soft">{{ $together['answer'] }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
