@php($hero = $copy['hero'])

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[760px] flex-col items-center gap-5 text-center">
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede text-text-secondary text-pretty">{{ $hero['intro'] }}</p>
            <p class="text-lede font-medium text-text text-pretty">{{ $hero['lede'] }}</p>
            <div class="pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
            </div>
        </div>

        {{-- Creating a link to Joey's page: what the link is called, who it is
             for, when it ends, and what goes out. One picture of the product,
             read out by its label. --}}
        <div class="mt-16 rounded-lg bg-identity-1/14 p-4 md:p-10 lg:p-14">
            <div role="img" aria-label="{{ $hero['label'] }}" class="{{ $window }} mx-auto flex max-w-[960px] flex-col gap-6 p-4.5 md:p-7">
                <div class="flex flex-wrap items-start justify-between gap-4">
                    <div class="flex max-w-[520px] flex-col gap-2">
                        <span class="{{ $eyebrow }} flex items-center gap-1.5 text-text-muted">
                            @include('_partials.icon', ['name' => 'lock', 'size' => 14])
                            {{ $hero['readOnly'] }}
                        </span>
                        <span class="text-heading font-semibold">{{ $hero['heading'] }}</span>
                        <span class="text-base text-text-secondary text-pretty">{{ $hero['body'] }}</span>
                    </div>
                    <div class="{{ $panel }} flex items-center gap-3 px-3.5 py-3">
                        @include('_partials.avatar-initials', ['name' => 'Joey Tribbiani', 'size' => 36])
                        <div class="flex flex-col gap-px">
                            <span class="text-body font-semibold">Joey Tribbiani</span>
                            <span class="{{ $stamp }}">{{ $hero['vault'] }}</span>
                        </div>
                    </div>
                </div>

                <div class="grid items-start gap-5 lg:grid-cols-3">
                    <div class="{{ $panel }} min-w-0 lg:col-span-2">
                        <div class="{{ $windowTitle }}">
                            <span class="text-copy font-semibold">{{ $hero['link'] }}</span>
                            <span class="text-small text-text-secondary">{{ $hero['linkBody'] }}</span>
                        </div>
                        <div class="grid gap-4 p-4 sm:grid-cols-2">
                            @include('_partials.reminders.field', ['label' => $hero['name'], 'value' => $hero['nameValue']])
                            @include('_partials.reminders.field', ['label' => $hero['who'], 'optional' => $copy['optional'], 'value' => 'Rachel Green'])
                            <div class="flex flex-col gap-1.5">
                                <span class="text-small font-medium">{{ $copy['stops'] }}</span>
                                @include('_partials.sharing.select', ['value' => $copy['week']])
                            </div>
                            <div class="flex min-w-0 flex-col gap-1.5">
                                <span class="text-small font-medium">
                                    {{ $copy['password'] }}
                                    <span class="font-normal text-text-muted">{{ $copy['optional'] }}</span>
                                </span>
                                <span class="truncate rounded-md border border-border bg-canvas px-2.5 py-2 text-base text-text-muted">{{ $hero['passwordHint'] }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="{{ $panel }}">
                        <div class="{{ $windowTitle }}">
                            <span class="text-copy font-semibold">{{ $hero['out'] }}</span>
                        </div>
                        <div class="flex flex-col gap-3 p-4">
                            <span class="text-base">{{ $hero['summary'] }}</span>
                            <span class="{{ $button }} mn-btn-primary w-full">{{ $hero['create'] }}</span>
                            <span class="{{ $stamp }}">{{ $hero['note'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
