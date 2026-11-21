@php($see = $copy['see'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- A recliner's page in Monica: what it cost, where it is, and when it
             was last looked after. One picture, read out by its label. --}}
        <div role="img" aria-label="{{ $see['label'] }}" class="rounded-lg bg-identity-3/14 p-4 md:p-10">
            <div class="{{ $window }} mx-auto max-w-[480px]">
                <div class="{{ $windowTitle }}">
                    <span class="{{ $markTile }} bg-surface-subtle">@include('_partials.icon', ['name' => 'tag', 'size' => 15])</span>
                    <div class="flex min-w-0 flex-1 flex-col gap-px">
                        <span class="text-body font-semibold">{{ $see['item'] }}</span>
                        <span class="flex items-center gap-1 {{ $stamp }}">@include('_partials.icon', ['name' => 'place', 'size' => 12]){{ $see['place'] }}</span>
                    </div>
                </div>
                <dl class="grid grid-cols-3 gap-3 border-b border-border px-4 py-3.5">
                    @foreach ($see['facts'] as [$label, $value])
                        <div class="flex flex-col gap-0.5">
                            <dt class="{{ $stamp }}">{{ $label }}</dt>
                            <dd class="text-base font-semibold">{{ $value }}</dd>
                        </div>
                    @endforeach
                </dl>
                <div class="flex flex-col gap-2.5 px-4 py-3.5">
                    <span class="text-xs font-semibold text-text-muted">{{ $see['maintenance'] }}</span>
                    @foreach ($see['entries'] as [$what, $when])
                        <div class="flex items-center gap-2.5">
                            <span class="size-2 flex-none rounded-full bg-border-strong"></span>
                            <span class="flex-1 text-base">{{ $what }}</span>
                            <span class="{{ $stamp }}">{{ $when }}</span>
                        </div>
                    @endforeach
                    <span class="mn-badge mn-badge-info self-start">{{ $see['next'] }}</span>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $see['title'] }}</h2>
            @foreach ($see['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
            <p class="{{ $closing }} font-semibold">{{ $see['closing'] }}</p>
        </div>
    </div>
</section>
