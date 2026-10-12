@php
    $copy = $page->t('home.product');

    $navIcons = ['activity', 'people', 'reminder', 'journal', 'gift', 'settings'];
    $vaultDots = ['bg-identity-2', 'bg-identity-1', 'bg-identity-7'];
    $dateTiles = ['bg-identity-7/12 text-identity-7', 'bg-identity-3/12 text-identity-3'];
    $dateIcons = ['gift', 'heart'];
    $relatives = ['Ursula Buffay', 'Mike Hannigan'];

    $card = 'rounded-lg border border-border bg-canvas shadow-panel';
    $cardTitle = 'border-b border-border px-4 py-3 text-copy font-semibold';
@endphp

{{-- The product, drawn with the product's own classes and tokens rather than a
     screenshot, so it is the real interface's spacing and type at any width.
     It is a picture of Monica, not a working copy, so it is one image to a
     screen reader, described by its label, and nothing inside it is a control. --}}
<section class="relative px-4 pb-24 md:px-6">
    <div aria-hidden="true" class="absolute inset-x-0 top-[42%] bottom-0 bg-ground-sage"></div>

    <div
        role="img"
        aria-label="{{ $copy['label'] }}"
        class="relative mx-auto flex min-h-[560px] max-w-page overflow-hidden rounded-lg border border-border bg-canvas text-left shadow-showcase"
    >
        <aside class="flex w-55 flex-none flex-col gap-4.5 border-r border-border bg-surface-subtle px-3 py-3.5 max-md:hidden">
            <div class="flex items-center gap-2.5 rounded-md border border-border bg-canvas px-2 py-1.5">
                <span class="grid size-5.5 place-items-center rounded-xs bg-identity-2 text-caption font-semibold text-white">{{ mb_substr($copy['vault'], 0, 1) }}</span>
                <span class="flex-1 text-base font-semibold text-text">{{ $copy['vault'] }}</span>
                @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14, 'class' => 'text-text-muted'])
            </div>

            <div class="flex flex-col gap-0.5">
                @foreach ($copy['nav'] as $n => $label)
                    <div class="flex items-center gap-2.5 rounded-md p-2 text-base font-medium {{ $n === 1 ? 'bg-canvas text-text shadow-nav-active' : 'text-text-secondary' }}">
                        @include('_partials.icon', ['name' => $navIcons[$n]])
                        {{ $label }}
                    </div>
                @endforeach
            </div>

            <div class="flex flex-col gap-1.5">
                <span class="px-2 text-caption font-medium tracking-[0.08em] text-text-muted uppercase">{{ $copy['vaultsLabel'] }}</span>
                @foreach ($copy['vaults'] as $v => $vault)
                    <div class="flex items-center gap-2.5 px-2 py-1.5 text-small text-text-secondary">
                        <span class="size-2 rounded-full {{ $vaultDots[$v] }}"></span>
                        {{ $vault }}
                    </div>
                @endforeach
            </div>
        </aside>

        <div class="flex min-w-0 flex-1 flex-col">
            <div class="flex h-14 items-center gap-3 border-b border-border px-5">
                <div class="flex h-8 max-w-80 flex-1 items-center gap-2 rounded-md border border-border px-2.5 text-small text-text-muted">
                    @include('_partials.icon', ['name' => 'search', 'size' => 15])
                    {{ $copy['search'] }}
                </div>
                <div class="flex-1"></div>
                <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">{{ $copy['add'] }}</span>
            </div>

            <div class="flex flex-col gap-6 p-5 md:p-7">
                <div class="flex items-center gap-4">
                    @include('_partials.avatar-initials', ['name' => 'Phoebe Buffay', 'size' => 56])
                    <div class="min-w-0 flex-1">
                        <div class="flex items-center gap-2">
                            <span class="text-heading-sm font-semibold text-text">Phoebe Buffay</span>
                            @include('_partials.icon', ['name' => 'star-filled', 'class' => 'text-warning'])
                        </div>
                        <div class="text-base text-text-muted">{{ $copy['meta'] }}</div>
                    </div>
                </div>

                <div class="flex gap-5 overflow-hidden border-b border-border text-base font-medium">
                    @foreach ($copy['tabs'] as $t => $tab)
                        <span class="-mb-px flex-none border-b-2 pb-2.5 {{ $t === 0 ? 'border-text text-text' : 'border-transparent text-text-muted' }}">{{ $tab }}</span>
                    @endforeach
                </div>

                <div class="grid grid-cols-[repeat(auto-fit,minmax(260px,1fr))] gap-4">
                    <div class="{{ $card }}">
                        <div class="{{ $cardTitle }}">{{ $copy['datesTitle'] }}</div>
                        <div class="px-4 py-1">
                            @foreach ($copy['dates'] as $d => $date)
                                <div class="flex items-center gap-3 border-border-subtle py-2.5 not-last:border-b">
                                    <span class="grid size-7.5 flex-none place-items-center rounded-md {{ $dateTiles[$d] }}">
                                        @include('_partials.icon', ['name' => $dateIcons[$d]])
                                    </span>
                                    <div class="flex-1">
                                        <div class="text-base font-semibold">{{ $date['title'] }}</div>
                                        <div class="text-xs text-text-muted">{{ $date['date'] }}</div>
                                    </div>
                                    <span class="text-xs text-text-secondary">{{ $date['when'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="{{ $card }}">
                        <div class="{{ $cardTitle }}">{{ $copy['relationshipsTitle'] }}</div>
                        <div class="px-4 py-1">
                            @foreach ($copy['relationships'] as $r => [$before, $bold, $after])
                                <div class="flex items-center gap-3 border-border-subtle py-2.5 not-last:border-b">
                                    @include('_partials.avatar-initials', ['name' => $relatives[$r], 'size' => 30])
                                    <div class="flex-1 text-base text-text-secondary">{{ $before }}<strong class="font-semibold text-text">{{ $bold }}</strong>{{ $after }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="{{ $card }}">
                        <div class="{{ $cardTitle }}">{{ $copy['noteTitle'] }}</div>
                        <div class="flex flex-col gap-1.5 px-4 py-3.5">
                            <p class="text-base text-text-soft">{{ $copy['note'] }}</p>
                            <span class="text-xs text-text-muted">{{ $copy['noteWhen'] }}</span>
                        </div>
                    </div>

                    <div class="{{ $card }}">
                        <div class="{{ $cardTitle }}">{{ $copy['giftsTitle'] }}</div>
                        <div class="flex flex-wrap gap-2 px-4 py-3.5">
                            @foreach ($copy['gifts'] as $gift)
                                <span class="rounded-full border border-border px-2.5 py-1 text-xs font-medium text-text-soft">{{ $gift }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
