@php
    $numbers = $copy['numbers'];

    // The chart's geometry, in the SVG's own units: four quarters spread
    // along the x axis, every value on the zero line at y=200.
    $quarterX = [114, 261, 408, 556];
    $gridlines = [30 => 20, 20 => 80, 10 => 140, 0 => 200];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-10">
        <div class="flex max-w-[640px] flex-col gap-3">
            <h2 class="{{ $title }}">{{ $numbers['title'] }}</h2>
            <p class="{{ $lede }}">{{ $numbers['lede'] }}</p>
        </div>

        <dl class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($numbers['kpis'] as $kpi)
                <div class="{{ $card }} flex flex-col-reverse gap-2 p-5">
                    <dt class="text-base text-text-secondary">{{ $kpi }}</dt>
                    <dd class="text-display-md leading-none font-semibold text-text tabular-nums">0</dd>
                </div>
            @endforeach
        </dl>

        <figure class="{{ $card }} overflow-hidden">
            <div class="flex flex-wrap items-center justify-between gap-3 border-b border-border px-5 py-3.5">
                <h3 id="sales-chart-title" class="text-body font-semibold text-text">{{ $numbers['chartTitle'] }}</h3>
                <span class="text-xs text-text-muted">{{ $numbers['chartRange'] }}</span>
            </div>

            <div class="px-5 pt-6 pb-2">
                <svg viewBox="0 0 640 240" role="img" aria-labelledby="sales-chart-title sales-chart-description" class="block h-auto w-full overflow-visible">
                    <desc id="sales-chart-description">{{ $numbers['chartDescription'] }}</desc>

                    <g class="fill-text-muted text-xs">
                        @foreach ($gridlines as $value => $y)
                            <line x1="40" y1="{{ $y }}" x2="630" y2="{{ $y }}" class="{{ $value === 0 ? 'stroke-border-strong' : 'stroke-border' }}" />
                            <text x="28" y="{{ $y + 4 }}" text-anchor="end">{{ $value }}</text>
                        @endforeach

                        @foreach ($numbers['quarters'] as $i => $quarter)
                            <text x="{{ $quarterX[$i] }}" y="228" text-anchor="middle">{{ $quarter }}</text>
                        @endforeach
                    </g>

                    <polyline points="{{ collect($quarterX)->map(fn ($x) => "$x,200")->implode(' ') }}" class="fill-none stroke-text" stroke-width="2" stroke-linecap="round" />
                    @foreach ($quarterX as $x)
                        <circle cx="{{ $x }}" cy="200" r="4.5" class="fill-canvas stroke-text" stroke-width="2" />
                    @endforeach
                </svg>
            </div>

            <figcaption class="px-5 pt-3 pb-4.5 text-base text-text-secondary">{{ $numbers['chartCaption'] }}</figcaption>
        </figure>

        <p class="{{ $note }}">{{ $numbers['note'] }}</p>
    </div>
</section>
