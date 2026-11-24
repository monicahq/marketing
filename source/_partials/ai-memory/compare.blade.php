@php
    $compare = $copy['compare'];

    // The three approaches grow along one axis, from the assistant's own
    // memory to Monica's. The glyph of the first two, in the order of `items`;
    // the third is Monica's mark.
    $icons = ['device', 'layers'];
@endphp

<section class="{{ $section }} pb-section-sm lg:pb-section">
    <div class="{{ $container }} flex flex-col gap-14 lg:gap-18">
        <div class="grid items-end gap-4 lg:grid-cols-2 lg:gap-16">
            <h2 class="{{ $title }}">{{ $compare['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $compare['lead'] }}</p>
        </div>

        <div class="relative">
            {{-- The axis the three steps sit on, through the middle of their
                 markers. Only drawn when the steps are side by side. --}}
            <span aria-hidden="true" class="absolute top-6.75 right-7 left-4.5 hidden h-0.5 bg-border-strong lg:block"></span>

            <ol class="relative grid gap-10 lg:grid-cols-[minmax(0,0.78fr)_minmax(0,1fr)_minmax(0,1.25fr)]">
                @foreach ($compare['items'] as $i => $item)
                    @if (! $loop->last)
                        <li class="flex flex-col {{ $i === 0 ? 'gap-3' : 'gap-3.5' }}">
                            <span class="flex h-14 items-center">
                                <span class="grid flex-none place-items-center rounded-full border border-border-strong bg-canvas {{ $i === 0 ? 'size-8 text-text-disabled' : 'size-11 text-text-muted' }}">
                                    @include('_partials.icon', ['name' => $icons[$i], 'size' => $i === 0 ? 18 : 22])
                                </span>
                            </span>
                            <span aria-hidden="true" class="mt-1.5 font-mono text-xs text-text-muted">{{ sprintf('%02d', $i + 1) }}</span>
                            <h3 class="{{ $i === 0 ? 'text-copy text-text-soft' : 'text-lede tracking-[-0.015em]' }} font-semibold">{{ $item['title'] }}</h3>
                            <p class="{{ $i === 0 ? 'text-small text-text-muted' : 'text-body text-text-secondary' }} text-pretty">{{ $item['body'] }}</p>
                        </li>
                    @else
                        {{-- Monica's own step, the largest, on a tinted panel. --}}
                        <li class="flex flex-col gap-3.5 rounded-lg border border-identity-1/25 bg-identity-1/8 p-5 lg:-mx-5 lg:-mt-5 lg:pb-6">
                            <span class="flex h-14 items-center">
                                <span class="grid flex-none place-items-center rounded-full bg-identity-1/16 p-1.5">
                                    <span class="grid size-14 place-items-center rounded-full border-2 border-identity-1 bg-canvas">
                                        <img src="{{ $mark }}" alt="" width="32" height="29" loading="lazy" class="h-auto w-8.5">
                                    </span>
                                </span>
                            </span>
                            <span aria-hidden="true" class="mt-1.5 font-mono text-xs text-identity-1">{{ sprintf('%02d', $i + 1) }}</span>
                            <h3 class="text-heading font-semibold">{{ $item['title'] }}</h3>
                            <p class="text-lede-sm text-text-soft text-pretty">{{ $item['body'] }}</p>
                        </li>
                    @endif
                @endforeach
            </ol>
        </div>

        <div class="flex flex-col items-start gap-3.5 border-t border-border pt-6 sm:flex-row">
            <span class="flex-none rounded-full bg-identity-3/10 px-2 py-1 text-caption font-semibold tracking-[0.08em] text-identity-3 uppercase">{{ $compare['goodToKnow'] }}</span>
            <p class="text-copy text-text-secondary text-pretty">{{ $compare['notice'] }}</p>
        </div>
    </div>
</section>
