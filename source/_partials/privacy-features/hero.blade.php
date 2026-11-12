@php($hero = $copy['hero'])

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[760px] flex-col items-center gap-5 text-center">
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede font-medium text-text text-pretty">{{ $hero['lede'] }}</p>
            <div class="pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
            </div>
        </div>

        {{-- Rachel's page: her phone number and birthday in plain sight, and a
             health note marked sensitive, hidden until revealed. --}}
        <div class="mt-16 rounded-lg bg-identity-1/14 p-4 md:p-10 lg:p-14">
            <div role="img" aria-label="{{ $hero['label'] }}" class="{{ $window }} mx-auto flex max-w-[760px] flex-col gap-5 p-4.5 md:p-7">
                <div class="flex items-center gap-3.5">
                    @include('_partials.avatar-initials', ['name' => 'Rachel Green', 'size' => 48])
                    <div class="flex flex-col gap-0.5">
                        <span class="text-heading-sm font-semibold">Rachel Green</span>
                        <span class="{{ $stamp }}">{{ $hero['vault'] }}</span>
                    </div>
                </div>

                <div class="overflow-hidden rounded-lg border border-border">
                    @foreach ([[$copy['phone'], $phone], [$hero['birthday'], $hero['birthdayValue']]] as [$label, $value])
                        <div class="grid grid-cols-[minmax(0,140px)_minmax(0,1fr)] items-center gap-3 border-b border-border px-4 py-3">
                            <span class="{{ $eyebrow }} text-text-muted">{{ $label }}</span>
                            <span class="text-body">{{ $value }}</span>
                        </div>
                    @endforeach
                    <div class="grid grid-cols-[minmax(0,140px)_minmax(0,1fr)_auto] items-center gap-3 px-4 py-3">
                        <span class="{{ $eyebrow }} text-text-muted">{{ $copy['healthNote'] }}</span>
                        <span class="flex flex-wrap items-center gap-2">
                            <span aria-hidden="true" class="text-body tracking-[0.18em] text-text-muted">••••••••••••••</span>
                            <span class="mn-badge mn-badge-danger">{{ $copy['sensitive'] }}</span>
                        </span>
                        <span class="{{ $button }} mn-btn-secondary">{{ $hero['reveal'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
