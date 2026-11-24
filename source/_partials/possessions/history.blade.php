@php
    $history = $copy['history'];
    $service = $bike['service'];
    $loan = $bike['loan'];
    $cell = 'flex min-w-0 flex-col gap-0.75 border-e border-b border-border-subtle px-4 py-3 even:border-e-0';
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} {{ $split }}">
        {{-- One record from the bike's Maintenance page, and one from its
             Loans page. --}}
        <div role="img" aria-label="{{ $history['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-2/14 p-4 text-body max-lg:order-2 md:p-8">
            <div class="{{ $panel }} shadow-pop">
                <div class="flex flex-wrap items-center gap-x-4 gap-y-3 p-4">
                    <div class="flex min-w-0 flex-1 flex-wrap items-center gap-2">
                        <span class="inline-flex h-7 flex-none items-center gap-1.5 rounded-full px-2.5 text-small font-medium {{ $tints['green'] }}"><span class="size-1.75 rounded-full bg-identity-2"></span>{{ $ui['servicing'] }}</span>
                        <span class="min-w-0 font-semibold text-text">{{ $service['title'] }}</span>
                    </div>
                    <div class="flex flex-col gap-0.5 text-end">
                        <span class="text-[18px] font-semibold tracking-[-0.01em] text-text tabular-nums">{{ $service['cost'] }}</span>
                        <span class="text-xs text-text-muted">{{ $ui['cost'] }}</span>
                    </div>
                </div>
                <dl class="grid grid-cols-2 border-t border-border">
                    <div class="{{ $cell }}"><dt class="{{ $term }}">{{ $ui['performedBy'] }}</dt><dd class="text-body text-text">{{ $service['by'] }}</dd></div>
                    <div class="{{ $cell }}"><dt class="{{ $term }}">{{ $ui['performed'] }}</dt><dd class="text-body text-text">{{ $service['on'] }}</dd></div>
                    <div class="{{ $cell }}"><dt class="{{ $term }}">{{ $ui['condition'] }}</dt><dd class="text-body text-text">{{ $service['condition'] }}</dd></div>
                    <div class="{{ $cell }}"><dt class="{{ $term }}">{{ $ui['nextDue'] }}</dt><dd class="text-body text-text">{{ $service['next'] }}</dd></div>
                </dl>
            </div>

            <div class="{{ $panel }}">
                <div class="flex flex-wrap items-start gap-x-4 gap-y-3 p-4">
                    @include('_partials.home.product.avatar', ['name' => 'Ross Geller', 'size' => 32])
                    <div class="flex min-w-0 flex-1 flex-col gap-1">
                        <div class="flex flex-wrap items-baseline gap-1.5">
                            <span class="text-text"><span class="text-text-muted">{{ $ui['lentTo'] }}</span> <span class="font-semibold underline decoration-border-strong underline-offset-2">Ross Geller</span></span>
                            <span class="{{ $badge }} bg-hover text-text-secondary">{{ $ui['returned'] }}</span>
                        </div>
                        <span class="text-small text-text-secondary">{{ $loan['period'] }} <span class="text-text-muted">· {{ $loan['length'] }}</span></span>
                    </div>
                </div>
                <dl class="grid grid-cols-3 border-t border-border [&>div]:border-b-0 [&>div:last-child]:border-e-0">
                    <div class="{{ $cell }}"><dt class="{{ $term }}">{{ $ui['conditionOut'] }}</dt><dd class="text-small text-text">{{ $ui['likeNew'] }}</dd></div>
                    <div class="{{ $cell }}"><dt class="{{ $term }}">{{ $ui['conditionBack'] }}</dt><dd class="text-small text-text">{{ $ui['used'] }}</dd></div>
                    <div class="{{ $cell }}"><dt class="{{ $term }}">{{ $ui['deposit'] }}</dt><dd class="text-small text-text-muted">{{ $ui['notRecorded'] }}</dd></div>
                </dl>
            </div>
        </div>

        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $history['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $history['body'] }}</p>
            <a href="{{ $page->route('maintenanceLoans') }}" class="{{ $more }}">
                {{ $history['link'] }}
                @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])
            </a>
        </div>
    </div>
</section>
