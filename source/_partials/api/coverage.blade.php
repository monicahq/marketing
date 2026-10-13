@php
    $coverage = $copy['coverage'];

    // The bars under each percentage, JSON API first. Literal class strings
    // rather than a width built from the number, so Tailwind's scanner finds
    // them; the figure itself is copy in `featureValues`.
    $bars = ['w-[72.4%]', 'w-[44.7%]'];

    $strong = fn ($text) => '<strong class="font-semibold text-text">' . e($text) . '</strong>';
    $cell = 'px-4 py-3.5 text-right';
    $figure = 'text-copy font-semibold tabular-nums';
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $coverage['title'] }}</h2>
            <p class="{{ $closing }}">{{ $coverage['lead'] }}</p>
        </div>

        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            {{-- Real figures rather than a drawing, so a real table. --}}
            <div class="mn-panel">
                <table class="w-full table-fixed border-collapse">
                    <caption class="sr-only">{{ $coverage['caption'] }}</caption>
                    <thead class="bg-surface-subtle">
                        <tr class="border-b border-border">
                            <td class="w-[42%] px-4 py-3"></td>
                            <th scope="col" class="{{ $eyebrow }} px-4 py-3 text-right text-text-muted">JSON API</th>
                            <th scope="col" class="{{ $eyebrow }} px-4 py-3 text-right text-text-muted">MCP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-border">
                            <th scope="row" class="px-4 py-3.5 text-left text-body font-normal text-text-secondary">{{ $coverage['operations'] }}</th>
                            @foreach ($coverage['operationsValues'] as $value)
                                <td class="{{ $cell }} {{ $figure }}">{{ $value }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row" class="px-4 py-3.5 text-left text-body font-normal text-text-secondary">{{ $coverage['feature'] }}</th>
                            @foreach ($coverage['featureValues'] as $v => $value)
                                <td class="{{ $cell }}">
                                    <span class="flex flex-col items-end gap-1.5">
                                        <span class="{{ $figure }}">{{ $value }}</span>
                                        <span class="block h-1 w-full max-w-30 overflow-hidden rounded-xs bg-border" aria-hidden="true">
                                            <span class="block h-full bg-text {{ $bars[$v] }}"></span>
                                        </span>
                                    </span>
                                </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex flex-col gap-4">
                <p class="text-copy-lg text-text text-pretty">{!! strtr(e($coverage['tools']), [':tools' => $strong($coverage['toolsCount']), ':endpoints' => $strong($coverage['endpoints'])]) !!}</p>
                <p class="text-copy text-text-secondary text-pretty">{!! strtr(e($coverage['audit']), [':date' => $strong($coverage['date'])]) !!}</p>
            </div>
        </div>
    </div>
</section>
