@php
    $milestones = $copy['milestones'];

    // How many event types sit in each category, in the order of
    // `categories`. The first is the one selected.
    $categoryCounts = [9, 6, 5, 6, 4];

    // Each event type's icon and colour, in the order of `types`.
    $typeIcons = [['device', 1], ['mail', 6], ['calendar', 3], ['family', 2], ['people', 5], ['heart', 7], ['star', 4]];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $milestones['title'] }}</h2>
            @foreach ($milestones['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
        </div>

        {{-- The first step of adding a life event: pick a category, then a
             type. --}}
        <div class="rounded-lg bg-identity-5/14 p-4 md:p-8">
            <div role="img" aria-label="{{ $milestones['label'] }}" class="{{ $window }}">
                <div class="flex flex-col gap-0.5 border-b border-border px-4.5 py-4">
                    <span class="text-copy font-semibold">{{ $copy['add'] }}</span>
                    <span class="{{ $stamp }}">{{ $milestones['step'] }}</span>
                </div>
                <div class="grid sm:grid-cols-[minmax(0,0.9fr)_minmax(0,1.3fr)]">
                    <div class="flex flex-col border-border bg-surface-subtle px-2 py-3 text-small max-sm:border-b sm:border-r">
                        <span class="px-2.5 pt-1.5 pb-2 text-caption font-semibold tracking-[0.06em] text-text-muted uppercase">{{ $milestones['categoriesTitle'] }}</span>
                        @foreach ($milestones['categories'] as $c => $category)
                            <span class="flex justify-between gap-2 rounded-md px-2.5 py-2 {{ $c === 0 ? 'bg-hover font-medium' : 'text-text-secondary' }}">
                                {{ $category }} <span class="text-text-muted">{{ $categoryCounts[$c] }}</span>
                            </span>
                        @endforeach
                    </div>
                    <div class="flex flex-col divide-y divide-border-subtle text-base">
                        @foreach ($milestones['types'] as $t => $type)
                            <div class="flex items-center gap-3 px-3.5 py-2.5">
                                <span class="{{ $tile }} size-7 {{ $tiles[$typeIcons[$t][1]] }}">
                                    @include('_partials.icon', ['name' => $typeIcons[$t][0], 'size' => 15])
                                </span>
                                <span class="flex-1 font-medium">{{ $type['name'] }}</span>
                                <span class="{{ $stamp }}">{{ $type['fields'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
