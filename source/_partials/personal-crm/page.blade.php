@php($copy = $page->t('personalCrm'))

<article>
    <header class="border-b border-border">
        <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
            <div class="max-w-[900px]">
                <p class="font-mono text-mono text-text-muted">{{ $copy['eyebrow'] }}</p>
                <h1 class="mt-5 text-display-md font-semibold tracking-[-0.025em] text-pretty lg:text-display-xl">
                    {{ $copy['title'] }}
                </h1>
                <p class="mt-6 max-w-[72ch] text-lede leading-[1.55] text-text-secondary text-pretty">
                    {{ $copy['lede'] }}
                </p>
                <p class="mt-5 max-w-[72ch] text-copy-lg leading-[1.65] text-text-secondary text-pretty">
                    {{ $copy['intro'] }}
                </p>
            </div>
        </div>
    </header>

    <nav aria-label="{{ $copy['toc']['label'] }}" class="border-b border-border bg-surface-subtle">
        <div class="mx-auto w-full max-w-marketing px-4 py-8 md:px-8">
            <p class="font-mono text-mono text-text-muted">{{ $copy['toc']['label'] }}</p>
            <ol class="mt-5 grid list-none gap-x-8 gap-y-3 p-0 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($copy['toc']['items'] as $index => $item)
                    <li>
                        <a href="#{{ $item['id'] }}" class="group flex gap-3 text-copy text-text-secondary no-underline hover:text-text hover:no-underline">
                            <span class="font-mono text-mono text-text-muted">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="underline decoration-border-strong underline-offset-[4px] group-hover:decoration-text">{{ $item['title'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ol>
        </div>
    </nav>

    <section id="definition" class="scroll-mt-6 border-b border-border">
        <div class="mx-auto grid w-full max-w-marketing gap-10 px-4 py-section-sm md:px-8 lg:grid-cols-[180px_minmax(0,1fr)] lg:py-section">
            <p class="font-mono text-mono text-text-muted">{{ $copy['definition']['label'] }}</p>
            <div class="max-w-[760px]">
                <h2 class="text-heading font-semibold text-pretty lg:text-display-md">{{ $copy['definition']['title'] }}</h2>
                <p class="mt-5 text-copy-lg leading-[1.65] text-text-secondary text-pretty">{{ $copy['definition']['body'] }}</p>
                <p class="mt-5 text-copy-lg leading-[1.65] text-text-secondary text-pretty">{{ $copy['definition']['body2'] }}</p>
                <blockquote class="mt-8 border-l-2 border-text pl-5 text-title leading-[1.55] text-text">
                    {{ $copy['definition']['aside'] }}
                </blockquote>
            </div>
        </div>
    </section>

    <section id="comparison" class="scroll-mt-6 border-b border-border">
        <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
            <div class="max-w-[820px]">
                <p class="font-mono text-mono text-text-muted">{{ $copy['comparison']['label'] }}</p>
                <h2 class="mt-4 text-heading font-semibold text-pretty lg:text-display-md">{{ $copy['comparison']['title'] }}</h2>
                <p class="mt-5 text-copy-lg leading-[1.65] text-text-secondary text-pretty">{{ $copy['comparison']['body'] }}</p>
            </div>

            <div class="mt-10 grid gap-px overflow-hidden rounded-lg border border-border bg-border md:grid-cols-3">
                @foreach ($copy['comparison']['cards'] as $card)
                    <div class="bg-canvas p-6 lg:p-8">
                        <h3 class="text-title font-semibold">{{ $card['title'] }}</h3>
                        <p class="mt-3 text-copy font-medium text-text">{{ $card['question'] }}</p>
                        <p class="mt-3 text-copy leading-[1.6] text-text-secondary">{{ $card['body'] }}</p>
                    </div>
                @endforeach
            </div>

            <h3 class="mt-12 text-heading-sm font-semibold">{{ $copy['comparison']['tableTitle'] }}</h3>
            <div class="mt-5 overflow-x-auto rounded-lg border border-border">
                <table class="w-full min-w-[760px] border-collapse text-left text-copy">
                    <thead class="bg-surface-subtle">
                        <tr>
                            @foreach ($copy['comparison']['tableHeadings'] as $heading)
                                <th scope="col" class="border-b border-border px-5 py-4 font-semibold text-text">{{ $heading }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($copy['comparison']['rows'] as $row)
                            <tr class="border-b border-border-subtle last:border-b-0">
                                @foreach ($row as $cell)
                                    @if ($loop->first)
                                        <th scope="row" class="w-[22%] px-5 py-4 font-medium text-text">{{ $cell }}</th>
                                    @else
                                        <td class="w-[39%] px-5 py-4 align-top leading-[1.55] text-text-secondary">{{ $cell }}</td>
                                    @endif
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <p class="mt-8 max-w-[78ch] text-copy-lg leading-[1.65] text-text-secondary text-pretty">{{ $copy['comparison']['closing'] }}</p>
        </div>
    </section>

    <section id="contents" class="scroll-mt-6 border-b border-border bg-surface-subtle">
        <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
            <div class="max-w-[820px]">
                <p class="font-mono text-mono text-text-muted">{{ $copy['contents']['label'] }}</p>
                <h2 class="mt-4 text-heading font-semibold text-pretty lg:text-display-md">{{ $copy['contents']['title'] }}</h2>
                <p class="mt-5 text-copy-lg leading-[1.65] text-text-secondary text-pretty">{{ $copy['contents']['body'] }}</p>
            </div>

            <div class="mt-10 grid gap-x-10 gap-y-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($copy['contents']['groups'] as $group)
                    <div class="border-t border-border pt-5">
                        <h3 class="text-title font-semibold">{{ $group['title'] }}</h3>
                        <p class="mt-3 text-copy leading-[1.6] text-text-secondary">{{ $group['body'] }}</p>
                    </div>
                @endforeach
            </div>

            <p class="mt-10 max-w-[78ch] border-l-2 border-text pl-5 text-copy-lg leading-[1.65] text-text">{{ $copy['contents']['note'] }}</p>
        </div>
    </section>

    <section class="border-b border-border">
        <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
            <div class="max-w-[820px]">
                <p class="font-mono text-mono text-text-muted">{{ $copy['example']['label'] }}</p>
                <h2 class="mt-4 text-heading font-semibold text-pretty lg:text-display-md">{{ $copy['example']['title'] }}</h2>
                <p class="mt-5 text-copy-lg leading-[1.65] text-text-secondary text-pretty">{{ $copy['example']['body'] }}</p>
            </div>

            <ol class="mt-10 grid list-none gap-px overflow-hidden rounded-lg border border-border bg-border p-0 md:grid-cols-3">
                @foreach ($copy['example']['steps'] as $step)
                    <li class="bg-canvas p-6 lg:p-8">
                        <span class="font-mono text-mono text-text-muted">{{ $step['number'] }}</span>
                        <h3 class="mt-4 text-title font-semibold">{{ $step['title'] }}</h3>
                        <p class="mt-3 text-copy leading-[1.6] text-text-secondary">{{ $step['body'] }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <section id="fit" class="scroll-mt-6 border-b border-border">
        <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
            <div class="max-w-[820px]">
                <p class="font-mono text-mono text-text-muted">{{ $copy['fit']['label'] }}</p>
                <h2 class="mt-4 text-heading font-semibold text-pretty lg:text-display-md">{{ $copy['fit']['title'] }}</h2>
                <p class="mt-5 text-copy-lg leading-[1.65] text-text-secondary text-pretty">{{ $copy['fit']['body'] }}</p>
            </div>

            <div class="mt-10 grid gap-8 lg:grid-cols-2">
                <div class="rounded-lg border border-border p-6 lg:p-8">
                    <h3 class="text-title font-semibold">{{ $copy['fit']['goodTitle'] }}</h3>
                    @include('_partials.bullets', ['items' => $copy['fit']['good']])
                </div>
                <div class="rounded-lg border border-border p-6 lg:p-8">
                    <h3 class="text-title font-semibold">{{ $copy['fit']['notTitle'] }}</h3>
                    @include('_partials.bullets', ['items' => $copy['fit']['not']])
                </div>
            </div>
        </div>
    </section>

    <section id="approaches" class="scroll-mt-6 border-b border-border bg-surface-subtle">
        <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
            <div class="max-w-[820px]">
                <p class="font-mono text-mono text-text-muted">{{ $copy['approaches']['label'] }}</p>
                <h2 class="mt-4 text-heading font-semibold text-pretty lg:text-display-md">{{ $copy['approaches']['title'] }}</h2>
                <p class="mt-5 text-copy-lg leading-[1.65] text-text-secondary text-pretty">{{ $copy['approaches']['body'] }}</p>
            </div>

            <div class="mt-10 grid gap-x-10 gap-y-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($copy['approaches']['items'] as $item)
                    <div class="border-t border-border pt-5">
                        <h3 class="text-title font-semibold">{{ $item['title'] }}</h3>
                        <p class="mt-3 text-copy leading-[1.6] text-text-secondary">{{ $item['body'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="history" class="scroll-mt-6 border-b border-border">
        <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
            <div class="max-w-[820px]">
                <p class="font-mono text-mono text-text-muted">{{ $copy['history']['label'] }}</p>
                <h2 class="mt-4 text-heading font-semibold text-pretty lg:text-display-md">{{ $copy['history']['title'] }}</h2>
                <p class="mt-5 text-copy-lg leading-[1.65] text-text-secondary text-pretty">{{ $copy['history']['body'] }}</p>
            </div>

            <ol class="mt-10 max-w-[900px] list-none border-t border-border p-0">
                @foreach ($copy['history']['items'] as $item)
                    <li class="grid gap-3 border-b border-border-subtle py-6 sm:grid-cols-[140px_minmax(0,1fr)] sm:gap-8">
                        <span class="font-mono text-mono text-text-muted">{{ $item['date'] }}</span>
                        <div>
                            <h3 class="text-title font-semibold">{{ $item['title'] }}</h3>
                            <p class="mt-2 text-copy leading-[1.6] text-text-secondary">{{ $item['body'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>

            <div class="mt-7 flex flex-wrap items-center gap-x-5 gap-y-2 text-small text-text-secondary">
                <span class="font-medium text-text">{{ $copy['history']['sourcesLabel'] }}:</span>
                @foreach ($copy['history']['sources'] as $source)
                    <a href="{{ $source['url'] }}" class="underline-offset-[3px]">{{ $source['label'] }}</a>
                @endforeach
            </div>
        </div>
    </section>

    <section id="privacy" class="scroll-mt-6 border-b border-border">
        <div class="mx-auto grid w-full max-w-marketing gap-10 px-4 py-section-sm md:px-8 lg:grid-cols-[minmax(0,0.9fr)_minmax(0,1.1fr)] lg:py-section">
            <div>
                <p class="font-mono text-mono text-text-muted">{{ $copy['privacy']['label'] }}</p>
                <h2 class="mt-4 text-heading font-semibold text-pretty lg:text-display-md">{{ $copy['privacy']['title'] }}</h2>
                <p class="mt-5 text-copy-lg leading-[1.65] text-text-secondary text-pretty">{{ $copy['privacy']['body'] }}</p>
            </div>

            <div class="border-b border-border-subtle">
                @foreach ($copy['privacy']['principles'] as $item)
                    <div class="border-t border-border-subtle py-5">
                        <h3 class="text-title font-semibold">{{ $item['title'] }}</h3>
                        <p class="mt-2 text-copy leading-[1.6] text-text-secondary">{{ $item['body'] }}</p>
                    </div>
                @endforeach
                <p class="border-t border-border py-5 text-copy-lg leading-[1.65] text-text">{{ $copy['privacy']['closing'] }}</p>
            </div>
        </div>
    </section>

    <section id="hosting" class="scroll-mt-6 border-b border-border bg-surface-subtle">
        <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
            <div class="max-w-[820px]">
                <p class="font-mono text-mono text-text-muted">{{ $copy['hosting']['label'] }}</p>
                <h2 class="mt-4 text-heading font-semibold text-pretty lg:text-display-md">{{ $copy['hosting']['title'] }}</h2>
                <p class="mt-5 text-copy-lg leading-[1.65] text-text-secondary text-pretty">{{ $copy['hosting']['body'] }}</p>
            </div>

            <div class="mt-8 overflow-x-auto rounded-lg border border-border bg-canvas">
                <table class="w-full min-w-[760px] border-collapse text-left text-copy">
                    <thead class="bg-canvas">
                        <tr>
                            @foreach ($copy['hosting']['tableHeadings'] as $heading)
                                <th scope="col" class="border-b border-border px-5 py-4 font-semibold text-text">{{ $heading }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($copy['hosting']['rows'] as $row)
                            <tr class="border-b border-border-subtle last:border-b-0">
                                @foreach ($row as $cell)
                                    @if ($loop->first)
                                        <th scope="row" class="w-[22%] px-5 py-4 font-medium text-text">{{ $cell }}</th>
                                    @else
                                        <td class="w-[39%] px-5 py-4 align-top leading-[1.55] text-text-secondary">{{ $cell }}</td>
                                    @endif
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <p class="mt-7 max-w-[78ch] text-copy-lg leading-[1.65] text-text">{{ $copy['hosting']['note'] }}</p>
        </div>
    </section>

    <section id="choosing" class="scroll-mt-6 border-b border-border">
        <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
            <div class="max-w-[820px]">
                <p class="font-mono text-mono text-text-muted">{{ $copy['choosing']['label'] }}</p>
                <h2 class="mt-4 text-heading font-semibold text-pretty lg:text-display-md">{{ $copy['choosing']['title'] }}</h2>
                <p class="mt-5 text-copy-lg leading-[1.65] text-text-secondary text-pretty">{{ $copy['choosing']['body'] }}</p>
            </div>

            <div class="mt-10 grid gap-x-10 gap-y-8 sm:grid-cols-2">
                @foreach ($copy['choosing']['questions'] as $item)
                    <div class="border-t border-border pt-5">
                        <h3 class="text-title font-semibold">{{ $item['title'] }}</h3>
                        <p class="mt-3 text-copy leading-[1.6] text-text-secondary">{{ $item['body'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="monica" class="scroll-mt-6 border-b border-border bg-surface-subtle">
        <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
            <div class="max-w-[820px]">
                <p class="font-mono text-mono text-text-muted">{{ $copy['monica']['label'] }}</p>
                <h2 class="mt-4 text-heading font-semibold text-pretty lg:text-display-md">{{ $copy['monica']['title'] }}</h2>
                <p class="mt-5 text-copy-lg leading-[1.65] text-text-secondary text-pretty">{{ $copy['monica']['body'] }}</p>
            </div>

            <div class="mt-10 grid gap-px overflow-hidden rounded-lg border border-border bg-border sm:grid-cols-2">
                @foreach ($copy['monica']['principles'] as $item)
                    <div class="bg-canvas p-6 lg:p-8">
                        <h3 class="text-title font-semibold">{{ $item['title'] }}</h3>
                        <p class="mt-3 text-copy leading-[1.6] text-text-secondary">{{ $item['body'] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-8 flex flex-wrap gap-3">
                <a href="{{ $page->route('features') }}" class="mn-btn mn-btn--secondary no-underline hover:no-underline">{{ $copy['monica']['currentCta'] }}</a>
                <a href="{{ $page->route('v3') }}" class="mn-btn mn-btn--secondary no-underline hover:no-underline">{{ $copy['monica']['v3Cta'] }}</a>
                <a href="{{ $page->route('privacy') }}" class="mn-btn mn-btn--quiet no-underline hover:no-underline">{{ $copy['monica']['privacyCta'] }}</a>
            </div>
        </div>
    </section>

    @include('_partials.faq', [
        'title' => $copy['faq']['title'],
        'items' => $copy['faq']['items'],
    ])

    <section class="border-t border-border">
        <div class="mx-auto w-full max-w-form px-4 py-section-sm md:px-8 lg:py-section">
            <h2 class="text-heading font-semibold text-pretty lg:text-display-md">{{ $copy['monica']['finalTitle'] }}</h2>
            <p class="mt-5 text-copy-lg leading-[1.65] text-text-secondary text-pretty">{{ $copy['monica']['finalBody'] }}</p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn--primary no-underline hover:no-underline">{{ $copy['monica']['primaryCta'] }}</a>
                <a href="{{ $page->links['github'] }}" class="mn-btn mn-btn--secondary no-underline hover:no-underline">{{ $copy['monica']['secondaryCta'] }}</a>
            </div>
        </div>
    </section>
</article>
