@php
    $people = $copy['people'];
    $groupTitle = $eyebrow . ' px-4.5 pt-3.5 pb-1 text-text-muted';
@endphp

<section id="people" class="scroll-mt-20 px-4 pt-24 md:px-6 lg:pt-30">
    <div class="{{ $container }} grid items-center gap-14 lg:grid-cols-2">
        {{-- Ross Geller's relationships, from family to people he has only
             mentioned. --}}
        <div class="rounded-lg bg-identity-6/14 p-5 max-lg:order-last md:p-10">
            <div role="img" aria-label="{{ $people['label'] }}" class="{{ $window }} pb-2">
                <div class="flex items-center gap-3 border-b border-border px-4.5 py-3.5">
                    <span class="min-w-0 flex-1 text-copy font-semibold">{{ $people['heading'] }}</span>
                    <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $people['add'] }}</span>
                </div>

                @foreach ($people['groups'] as $g => $group)
                    <div class="{{ $g > 0 ? 'mt-1.5 border-t border-border-subtle' : '' }}">
                        <div class="{{ $groupTitle }}">{{ $group['title'] }}</div>
                        @foreach ($group['people'] as $person)
                            <div class="flex items-center gap-3 px-4.5 py-2.5">
                                @if ($person['known'] ?? true)
                                    @include('_partials.avatar-initials', ['name' => $person['name'], 'size' => 32])
                                @else
                                    <span class="size-8 flex-none rounded-full border border-dashed border-border-strong"></span>
                                @endif
                                <div class="flex min-w-0 flex-col gap-0.5">
                                    <span class="text-body font-semibold {{ ($person['named'] ?? true) ? '' : 'text-text-secondary' }}">{{ $person['name'] }}</span>
                                    <span class="{{ $stamp }}">{{ $person['detail'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>

        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $people['title'] }}</h2>
            <p class="{{ $closing }}">{{ $people['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $people['body'] }}</p>
        </div>
    </div>
</section>
