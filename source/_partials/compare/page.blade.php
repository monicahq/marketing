{{--
    A Monica vs competitor comparison, English only. `$key` is the route key and
    the key of its copy in lang/en.php (`compareDex`, `compareFolk`).

    One long article, six numbered sections separated by a hairline, as in the
    design. Every link is a key of `compareDex.refs` in lang/en.php: a `url`
    for another site, or a `page` (route key) or `handbook` (article slug) for
    this one. `$ref` turns a key into an anchor, and `$refs` a list of keys,
    where a map of key => label overrides the shared label.

    The competitor's logo is deliberately not drawn: the site carries no third-party
    marks beyond the few the owner chose.
--}}
@php
    $copy = $page->t($key);

    $container = 'mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section';
    $section = 'scroll-mt-6 border-t border-border';
    $number = 'text-small text-text-muted tabular-nums';
    $title = 'text-display-section font-semibold text-balance';
    $linkClass = 'text-text-secondary underline decoration-border-strong underline-offset-[3px] hover:text-text hover:decoration-text';

    $ref = function (string $key, ?string $label = null) use ($copy, $page, $linkClass) {
        $r = $copy['refs'][$key];

        if (isset($r['page'])) {
            $href = $page->route($r['page']);
            $external = false;
        } elseif (isset($r['handbook'])) {
            $href = $page->handbookPath($r['handbook']);
            $external = false;
        } else {
            $href = $r['url'];
            $external = true;
        }

        return '<a href="' . e($href) . '"' . ($external ? ' target="_blank" rel="noopener"' : '') . ' class="' . $linkClass . '">' . e($label ?? $r['label']) . '</a>';
    };

    $refs = function (array $items) use ($ref) {
        $html = '';

        foreach ($items as $key => $label) {
            $html .= is_int($key) ? $ref($label) : $ref($key, $label);
        }

        return '<div class="flex flex-wrap gap-x-4 gap-y-1.5 text-small">' . $html . '</div>';
    };

    $sections = [
        ['fit', $copy['fit']['title']],
        ['glance', $copy['glance']['title']],
        ['scenarios', $copy['scenarios']['title']],
        ['moving', $copy['moving']['title']],
        ['questions', $copy['questions']['title']],
        ['method', $copy['method']['title']],
    ];

    $dot = '<span aria-hidden="true" class="mt-2.5 size-[5px] flex-none rounded-full bg-text-disabled"></span>';
    $markChip = fn (string $size, string $img) => '<span class="grid ' . $size . ' flex-none place-items-center rounded-lg border border-border bg-canvas shadow-panel"><img src="/assets/images/monica-panda-mark.svg" alt="" width="32" height="29" class="' . $img . ' h-auto"></span>';
@endphp

<article>
    <header>
        <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
            <div class="max-w-225">
                <h1 class="text-display-hero font-semibold text-balance">{{ $copy['title'] }}</h1>

                <div class="mt-5 flex flex-wrap items-center gap-x-2.5 gap-y-2 text-small text-text-muted">
                    <span class="grid size-6 place-items-center rounded-full border border-border bg-surface-subtle">
                        <img src="/assets/images/monica-panda-mark.svg" alt="" width="32" height="29" class="h-auto w-3.5">
                    </span>
                    <span>{{ $copy['by'] }}</span>
                    <span class="inline-flex items-center gap-1.5 rounded-full border border-border bg-surface-subtle px-2.5 py-0.5 text-text-secondary">
                        <span aria-hidden="true" class="size-1.5 rounded-full bg-success"></span>{{ $copy['verified'] }}
                    </span>
                </div>

                <p class="mt-8 max-w-[72ch] text-lede-md text-text-secondary text-pretty">{{ $copy['intro'] }}</p>
                <div class="mt-4">{!! $refs($copy['introRefs']) !!}</div>
            </div>
        </div>
    </header>

    <nav aria-label="{{ $copy['toc'] }}" class="border-t border-border bg-surface-subtle" data-md-skip>
        <div class="mx-auto w-full max-w-marketing px-4 py-8 md:px-8">
            <p class="text-small text-text-muted">{{ $copy['toc'] }}</p>
            <ol class="mt-5 grid gap-x-8 gap-y-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($sections as [$id, $label])
                    <li>
                        <a href="#{{ $id }}" class="flex gap-3 text-lede-sm text-text-secondary no-underline hover:text-text hover:no-underline">
                            <span class="{{ $number }} leading-6">{{ sprintf('%02d', $loop->iteration) }}</span>
                            <span class="underline decoration-border-strong underline-offset-4">{{ $label }}</span>
                        </a>
                    </li>
                @endforeach
            </ol>
        </div>
    </nav>

    {{-- 01: which one fits --}}
    <section id="fit" class="{{ $section }}">
        <div class="{{ $container }}">
            <p class="{{ $number }}">01</p>
            <h2 class="{{ $title }} mt-4">{{ $copy['fit']['title'] }}</h2>

            <div class="mt-10 grid gap-6 md:grid-cols-2">
                @foreach ($copy['fit']['cards'] as $card)
                    <div class="flex flex-col overflow-hidden rounded-lg border border-border bg-canvas shadow-panel">
                        <div class="flex flex-1 flex-col gap-5 p-8">
                            <div class="flex items-center gap-3">
                                @if ($card['who'] === 'Monica')
                                    {!! $markChip('size-9', 'w-5.5') !!}
                                @endif
                                <span class="text-lede-sm font-semibold">{{ $card['who'] }}</span>
                            </div>
                            <h3 class="text-lede font-semibold text-balance">{{ $card['title'] }}</h3>
                            <ul class="flex flex-col gap-3.5">
                                @foreach ($card['items'] as $item)
                                    <li class="flex gap-3 text-lede-sm text-text-secondary">{!! $dot !!}<span>{{ $item }}</span></li>
                                @endforeach
                            </ul>
                            <div class="mt-auto">{!! $refs($card['refs']) !!}</div>
                        </div>
                        <div class="border-t border-border bg-surface-subtle px-8 py-4">
                            @php
                                $cta = $copy['refs'][$card['ctaRef']];
                                $ctaExternal = isset($cta['url']);
                            @endphp
                            <a href="{{ $ctaExternal ? $cta['url'] : $page->route($cta['page']) }}" @if ($ctaExternal) target="_blank" rel="noopener" @endif class="mn-btn mn-btn-secondary no-underline hover:no-underline">
                                {{ $card['cta'] }}
                                @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 02: at a glance --}}
    <section id="glance" class="{{ $section }} bg-surface-subtle">
        <div class="{{ $container }}">
            <p class="{{ $number }}">02</p>
            <h2 class="{{ $title }} mt-4">{{ $copy['glance']['title'] }}</h2>

            <div class="mt-10 overflow-x-auto rounded-lg border border-border bg-canvas shadow-panel">
                <table class="w-full min-w-190 border-collapse text-left text-lede-sm">
                    <thead>
                        <tr>
                            <th scope="col" class="w-1/5 border-b border-border px-5 py-4 text-small font-medium text-text-muted">{{ $copy['glance']['what'] }}</th>
                            <th scope="col" class="w-2/5 border-b border-border border-l border-l-border-subtle px-5 py-4 font-semibold">{{ $copy['name'] }}</th>
                            <th scope="col" class="w-2/5 border-b border-border border-l border-l-border-subtle px-5 py-4 font-semibold">
                                <span class="flex items-center gap-2.5">
                                    <img src="/assets/images/monica-panda-mark.svg" alt="" width="32" height="29" class="h-auto w-5">Monica
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($copy['glance']['rows'] as [$label, $dex, $monica])
                            <tr @class(['border-b border-border-subtle' => ! $loop->last])>
                                <th scope="row" class="px-5 py-4.5 align-top font-semibold text-text">{{ $label }}</th>
                                <td class="border-l border-border-subtle px-5 py-4.5 align-top leading-[1.55] text-text-secondary">{{ $dex }}</td>
                                <td class="border-l border-border-subtle px-5 py-4.5 align-top leading-[1.55] text-text-secondary">{{ $monica }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-5 flex flex-wrap items-center gap-x-4 gap-y-1.5 text-small">
                <span class="font-medium text-text">{{ $copy['glance']['sources'] }}</span>
                @foreach ($copy['glance']['refs'] as $key => $label)
                    {!! is_int($key) ? $ref($label) : $ref($key, $label) !!}
                @endforeach
            </div>
        </div>
    </section>

    {{-- 03: scenarios --}}
    <section id="scenarios" class="{{ $section }}">
        <div class="{{ $container }}">
            <p class="{{ $number }}">03</p>
            <h2 class="{{ $title }} mt-4">{{ $copy['scenarios']['title'] }}</h2>

            <div class="mt-10 grid gap-px overflow-hidden rounded-lg border border-border bg-border md:grid-cols-2">
                @foreach ($copy['scenarios']['items'] as $item)
                    <div class="flex flex-col gap-4 bg-canvas p-8">
                        <span class="flex items-center gap-2 text-small text-text-muted">
                            @if ($loop->last)
                                <img src="/assets/images/monica-panda-mark.svg" alt="" width="32" height="29" class="h-auto w-4">
                            @endif
                            {{ $item['who'] }}
                        </span>
                        <h3 class="text-lede font-semibold text-balance">{{ $item['title'] }}</h3>
                        <p class="text-lede-sm text-text-secondary text-pretty">{{ $item['body'] }}</p>
                        <div class="mt-auto">{!! $refs($item['refs']) !!}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 04: moving --}}
    <section id="moving" class="{{ $section }} bg-surface-subtle">
        <div class="{{ $container }} flex flex-col gap-10">
            <div>
                <p class="{{ $number }}">04</p>
                <h2 class="{{ $title }} mt-4">{{ $copy['moving']['title'] }}</h2>
            </div>

            <div class="max-w-190">
                <div class="border-b border-border">
                    @foreach ($copy['moving']['items'] as $item)
                        <div class="flex flex-col gap-2.5 border-t border-border py-6">
                            <h3 class="text-lede-sm font-semibold">{{ $item['title'] }}</h3>
                            <p class="text-lede-sm text-text-secondary text-pretty">{{ $item['body'] }}</p>
                            {!! $refs($item['refs']) !!}
                        </div>
                    @endforeach
                </div>

                <div class="mt-8 flex flex-col gap-3 border-l-2 border-text pl-5">
                    <p class="text-copy-lg text-text text-pretty">{{ $copy['moving']['note'] }}</p>
                    {!! $refs($copy['moving']['noteRefs']) !!}
                </div>
            </div>
        </div>
    </section>

    {{-- 05: questions --}}
    <section id="questions" class="{{ $section }}">
        <div class="{{ $container }}">
            <p class="{{ $number }}">05</p>
            <h2 class="{{ $title }} mt-4">{{ $copy['questions']['title'] }}</h2>

            <div class="mt-10 grid gap-x-10 gap-y-8 md:grid-cols-3">
                @foreach ($copy['questions']['items'] as $item)
                    <div class="flex flex-col gap-3 border-t border-border pt-5">
                        <h3 class="text-lede-sm font-semibold text-balance">{{ $item['q'] }}</h3>
                        <p class="text-lede-sm text-text-secondary text-pretty">{{ $item['a'] }}</p>
                        <div class="mt-auto">{!! $refs($item['refs']) !!}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 06: method --}}
    <section id="method" class="{{ $section }}">
        <div class="mx-auto w-full max-w-190 px-4 py-section-sm md:px-8 lg:py-section">
            <p class="{{ $number }}">06</p>
            <h2 class="{{ $title }} mt-4">{{ $copy['method']['title'] }}</h2>
            <p class="mt-5 text-copy-lg text-text-secondary text-pretty">{{ $copy['method']['body'] }}</p>

            <div class="mt-8 flex flex-wrap gap-3">
                <a href="{{ $copy['refs'][$copy['fit']['cards'][0]['ctaRef']]['url'] }}" target="_blank" rel="noopener" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $copy['fit']['cards'][0]['cta'] }}</a>
                <a href="{{ $page->route('home') }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">
                    <img src="/assets/images/monica-panda-mark.svg" alt="" width="32" height="29" class="h-auto w-4">{{ $copy['fit']['cards'][1]['cta'] }}
                </a>
            </div>
        </div>
    </section>
</article>
