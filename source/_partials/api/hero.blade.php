@php
    $hero = $copy['hero'];

    // The three marks above the headline, named for a screen reader because
    // nothing beside them says which is which.
    $marks = [['claude', 'Claude'], ['openai', 'ChatGPT'], ['gemini', 'Gemini']];
    $mark = '/assets/images/monica-panda-mark.svg';
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[760px] flex-col items-center gap-5 text-center">
            <div class="flex gap-2.5">
                @foreach ($marks as [$name, $label])
                    <span class="mn-panel grid size-10 place-items-center">
                        @include('_partials.api.brand', ['name' => $name, 'size' => 22, 'uid' => 'hero', 'label' => $label])
                    </span>
                @endforeach
            </div>
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede text-text-secondary text-pretty">{{ $hero['intro'] }}</p>
            <p class="text-lede font-medium text-text text-pretty">{{ $hero['lede'] }}</p>
            <div class="pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
            </div>
        </div>

        {{-- A conversation with Claude that ends in a reminder in Monica. One
             picture of the product, read out by its label. --}}
        <div class="mt-16 rounded-lg bg-identity-1/14 p-4 md:p-10 lg:p-14">
            <div role="img" aria-label="{{ $hero['label'] }}" class="{{ $window }} mx-auto max-w-[720px]">
                <div class="{{ $windowTitle }}">
                    @include('_partials.api.brand', ['name' => 'claude', 'size' => 18])
                    <span class="flex-1 text-body font-semibold">{{ $hero['chat'] }}</span>
                    <span class="flex items-center gap-1.5 rounded-md border border-border px-2 py-0.75 text-xs text-text-secondary">
                        <img src="{{ $mark }}" alt="" width="32" height="29" loading="lazy" class="h-auto w-3.5">
                        {{ $hero['connected'] }}
                    </span>
                </div>
                <div class="flex flex-col gap-4 p-5">
                    <div class="max-w-[80%] self-end rounded-lg border border-border bg-surface-subtle px-3.5 py-2.5 text-body">{{ $hero['ask'] }}</div>
                    <div class="flex max-w-[88%] flex-col gap-2.5">
                        <div class="overflow-hidden rounded-lg border border-border">
                            <div class="flex items-center gap-2 border-b border-border bg-surface-subtle px-3 py-2">
                                <img src="{{ $mark }}" alt="" width="32" height="29" loading="lazy" class="h-auto w-4">
                                <span class="flex-1 text-xs font-medium">Monica</span>
                                <span class="{{ $mono }} text-text-muted">create_reminder</span>
                            </div>
                            <div class="flex items-center gap-2.5 px-3 py-2.5">
                                @include('_partials.avatar-initials', ['name' => $cast['joey']['full'], 'size' => 28])
                                <div class="flex min-w-0 flex-1 flex-col gap-px">
                                    <span class="text-base font-semibold">{{ $hero['reminder'] }}</span>
                                    <span class="{{ $stamp }}">{{ $hero['when'] }}</span>
                                </div>
                                <span class="text-success">@include('_partials.icon', ['name' => 'check-circle', 'size' => 16])</span>
                            </div>
                        </div>
                        <span class="text-body">{{ $hero['done'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
