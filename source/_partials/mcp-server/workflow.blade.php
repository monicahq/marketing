@php
    $workflow = $copy['workflow'];

    // Who answers in each step's drawing (none for the second, which is
    // Monica itself), the tool it calls, and the panel behind it.
    $actors = [['claude', 'Claude'], null, ['openai', 'ChatGPT']];
    $tools = ['create-possession-loan', null, 'list-possession-loans'];
    $panels = ['bg-identity-1/14', 'bg-identity-3/14', 'bg-identity-2/14'];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-14">
        <h2 class="{{ $title }} max-w-[760px]">{{ $workflow['title'] }}</h2>

        <ol class="grid gap-10 lg:grid-cols-3 lg:gap-6">
            @foreach ($workflow['steps'] as $s => $step)
                <li class="flex flex-col gap-4">
                    <div class="flex items-center gap-2.5">
                        <span class="grid size-6 flex-none place-items-center rounded-full bg-primary text-xs font-semibold text-on-primary">{{ $s + 1 }}</span>
                        <h3 class="text-copy font-semibold">{{ $step['title'] }}</h3>
                    </div>
                    @if ($step['prompt'])
                        <p class="{{ $prompt }}">{{ $step['prompt'] }}</p>
                    @endif
                    <p class="text-body text-text-secondary text-pretty">{{ $step['body'] }}</p>

                    <figure class="mt-auto flex flex-col gap-2.5">
                        <div role="img" aria-label="{{ $step['label'] }}" class="rounded-lg p-4 {{ $panels[$s] }}">
                            @if ($actors[$s])
                                @php([$brand, $name] = $actors[$s])
                                <div class="{{ $window }}">
                                    <div class="{{ $windowTitle }}">
                                        @include('_partials.api.brand', ['name' => $brand, 'size' => 16, 'uid' => 'mcp-flow' . $s])
                                        <span class="flex-1 text-base font-semibold">{{ $name }}</span>
                                        <span class="flex items-center gap-1.5 rounded-md border border-border px-2 py-0.75 text-xs text-text-secondary">
                                            <img src="{{ $mark }}" alt="" width="32" height="29" loading="lazy" class="h-auto w-3.5">
                                            {{ $workflow['connected'] }}
                                        </span>
                                    </div>
                                    <div class="flex flex-col gap-2.5 p-3.5">
                                        <div class="flex items-center gap-2 overflow-hidden rounded-md border border-border bg-surface-subtle px-2.5 py-1.5">
                                            <img src="{{ $mark }}" alt="" width="32" height="29" loading="lazy" class="h-auto w-3.5">
                                            <span class="text-xs font-medium">Monica</span>
                                            <span class="{{ $mono }} ml-auto truncate text-text-muted">{{ $tools[$s] }}</span>
                                        </div>
                                        <span class="text-base">{{ $step['reply'] }}</span>
                                    </div>
                                </div>
                            @else
                                <div class="{{ $window }}">
                                    <div class="{{ $windowTitle }}">
                                        <span class="{{ $markTile }}">@include('_partials.icon', ['name' => 'tag', 'size' => 15])</span>
                                        <div class="flex min-w-0 flex-1 flex-col gap-px">
                                            <span class="truncate text-base font-semibold">{{ $copy['costume'] }}</span>
                                            <span class="flex items-center gap-1 {{ $stamp }}">@include('_partials.icon', ['name' => 'place', 'size' => 12]){{ $workflow['closet'] }}</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2.5 p-3.5">
                                        <span class="text-xs font-semibold text-text-muted">{{ $workflow['loans'] }}</span>
                                        <div class="flex items-center gap-2.5">
                                            @include('_partials.home.product.avatar', ['name' => $copy['borrower'], 'size' => 28])
                                            <div class="flex min-w-0 flex-1 flex-col gap-px">
                                                <span class="text-base font-semibold">{{ $copy['borrower'] }}</span>
                                                <span class="{{ $stamp }}">{{ $copy['due'] }}</span>
                                            </div>
                                            <span class="mn-badge mn-badge-neutral">{{ $workflow['onLoan'] }}</span>
                                        </div>
                                        <div class="flex items-center gap-2.5 opacity-70">
                                            @include('_partials.home.product.avatar', ['name' => $copy['borrower'], 'size' => 28])
                                            <div class="flex min-w-0 flex-1 flex-col gap-px">
                                                <span class="text-base">{{ $copy['borrower'] }}</span>
                                                <span class="{{ $stamp }}">{{ $workflow['returned'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <figcaption class="{{ $note }}">{{ $step['caption'] }}</figcaption>
                    </figure>
                </li>
            @endforeach
        </ol>

        <p class="text-heading font-semibold text-balance">{{ $workflow['closing'] }} <span class="text-text-muted">{{ $workflow['closingMuted'] }}</span></p>
    </div>
</section>
