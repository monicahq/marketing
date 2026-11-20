@php
    $how = $copy['how'];

    // Who carries out each step, in the order of `steps`. The middle one is
    // Monica itself.
    $actors = [['claude', 'Claude'], null, ['openai', 'ChatGPT']];
    $tools = ['create-possession-loan', null, 'list-possession-loans'];

    // Literal class names, so Tailwind's scanner finds them.
    $panels = ['bg-identity-1/14', 'bg-identity-4/14', 'bg-identity-6/14'];
@endphp

{{-- The same loan, saved by one assistant, seen in Monica, and found again
     by another. Each card's drawing is one picture, read out by its label. --}}
<section id="how-it-works" class="mt-24 scroll-mt-14 border-y border-border bg-surface-subtle px-4 py-section-sm md:px-6 lg:mt-30 lg:py-section">
    <div class="{{ $container }} flex flex-col gap-14">
        <div class="mx-auto flex max-w-[680px] flex-col gap-4 text-center">
            <h2 class="{{ $title }}">{{ $how['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $how['lead'] }}</p>
        </div>

        <ol class="grid gap-6 lg:grid-cols-3">
            @foreach ($how['steps'] as $s => $step)
                <li class="mn-panel flex flex-col gap-4 p-5">
                    <div class="flex items-center gap-2.5">
                        <span class="grid size-6 flex-none place-items-center rounded-full bg-primary text-xs font-semibold text-on-primary">{{ $s + 1 }}</span>
                        <h3 class="text-copy font-semibold">{{ $step['title'] }}</h3>
                    </div>
                    @if ($step['prompt'])
                        <blockquote class="{{ $quote }}">{{ $step['prompt'] }}</blockquote>
                    @endif
                    <p class="text-body text-text-secondary text-pretty">{{ $step['body'] }}</p>

                    <div role="img" aria-label="{{ $step['label'] }}" class="mt-auto rounded-lg {{ $panels[$s] }} p-4">
                        @if ($actors[$s])
                            @php([$brand, $name] = $actors[$s])
                            <div class="{{ $window }}">
                                <div class="{{ $windowTitle }}">
                                    @include('_partials.api.brand', ['name' => $brand, 'size' => 16, 'uid' => 'how' . $s])
                                    <span class="flex-1 text-base font-semibold">{{ $name }}</span>
                                    <span class="flex items-center gap-1.5 rounded-md border border-border px-2 py-0.75 text-xs text-text-secondary">
                                        <img src="{{ $mark }}" alt="" width="32" height="29" loading="lazy" class="h-auto w-3.5">
                                        {{ $how['connected'] }}
                                    </span>
                                </div>
                                <div class="flex flex-col gap-2.5 p-3.5">
                                    <div class="overflow-hidden rounded-md border border-border">
                                        <div class="flex items-center gap-2 bg-surface-subtle px-2.5 py-1.5">
                                            <img src="{{ $mark }}" alt="" width="32" height="29" loading="lazy" class="h-auto w-3.5">
                                            <span class="flex-1 text-xs font-medium">Monica</span>
                                            <span class="{{ $mono }} truncate text-text-muted">{{ $tools[$s] }}</span>
                                        </div>
                                    </div>
                                    <span class="text-base">{{ $step['reply'] }}</span>
                                </div>
                            </div>
                        @else
                            <div class="{{ $window }}">
                                <div class="{{ $windowTitle }}">
                                    <span class="{{ $markTile }} bg-surface-subtle">@include('_partials.icon', ['name' => 'tag', 'size' => 15])</span>
                                    <div class="flex min-w-0 flex-1 flex-col gap-px">
                                        <span class="text-base font-semibold">{{ $copy['tent'] }}</span>
                                        <span class="{{ $stamp }}">{{ $how['garage'] }}</span>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2 p-3.5">
                                    <span class="text-xs font-semibold text-text-muted">{{ $how['loans'] }}</span>
                                    <div class="flex items-center gap-2.5">
                                        @include('_partials.avatar-initials', ['name' => $copy['borrower'], 'size' => 28])
                                        <div class="flex min-w-0 flex-1 flex-col gap-px">
                                            <span class="text-base font-semibold">{{ $copy['borrower'] }}</span>
                                            <span class="{{ $stamp }}">{{ $copy['due'] }}</span>
                                        </div>
                                        <span class="mn-badge mn-badge-warning">{{ $how['onLoan'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </li>
            @endforeach
        </ol>

        <div class="mx-auto flex max-w-[640px] flex-col gap-3 text-center">
            <p class="text-lede-sm font-semibold tracking-[-0.02em]">{{ $how['closing'] }}</p>
            <p class="{{ $note }}">{{ $how['note'] }}</p>
        </div>
    </div>
</section>
