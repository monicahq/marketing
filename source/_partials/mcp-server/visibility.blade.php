@php
    $visibility = $copy['visibility'];
    $screen = $visibility['screen'];
@endphp

<section class="{{ $section }} {{ $band }}">
    <div class="{{ $container }} {{ $split }} items-start">
        {{-- Monica's MCP history: filters, then the calls, the first one
             opened. One picture, read out by its label. --}}
        <figure class="flex flex-col gap-3 lg:order-none">
            <div role="img" aria-label="{{ $screen['label'] }}" class="rounded-lg bg-identity-2/14 p-4 md:p-8">
                <div class="{{ $window }}">
                    <div class="{{ $windowTitle }} flex-wrap">
                        <span class="flex-1 text-body font-semibold">{{ $screen['title'] }}</span>
                        @foreach ($screen['filters'] as $filter)
                            <span class="flex items-center gap-1 rounded-md border border-border px-2 py-0.75 text-xs text-text-secondary">{{ $filter }}@include('_partials.icon', ['name' => 'chevron-down', 'size' => 11])</span>
                        @endforeach
                    </div>
                    <div class="divide-y divide-border">
                        @foreach ($screen['calls'] as $c => [$assistant, $markName, $tool, $when, $ok])
                            <div class="flex flex-col gap-2.5 px-4 py-3">
                                <div class="flex items-center gap-3">
                                    @include('_partials.ai-memory.client-mark', ['name' => $markName, 'size' => 16, 'uid' => 'mcp-call' . $c])
                                    <span class="{{ $mono }} min-w-0 flex-1 truncate">{{ $tool }}</span>
                                    @unless ($ok)
                                        <span class="mn-badge mn-badge-neutral">{{ $screen['failed'] }}</span>
                                    @endunless
                                    <span class="{{ $stamp }} flex-none">{{ $when }}</span>
                                    @include('_partials.icon', ['name' => $loop->first ? 'chevron-down' : 'chevron-right', 'size' => 14, 'class' => 'flex-none text-text-muted'])
                                </div>
                                @if ($loop->first)
                                    <div class="grid gap-2 sm:grid-cols-2">
                                        <div class="flex flex-col gap-1 rounded-md bg-surface-subtle p-2.5">
                                            <span class="{{ $stamp }}">{{ $screen['request'] }}</span>
                                            <span class="{{ $mono }} break-all">{"possession": "armadillo"}</span>
                                        </div>
                                        <div class="flex flex-col gap-1 rounded-md bg-surface-subtle p-2.5">
                                            <span class="{{ $stamp }}">{{ $screen['response'] }}</span>
                                            <span class="{{ $mono }} break-all">{"borrower": "{{ $copy['borrower'] }}", "note": "••••••"}</span>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <figcaption class="{{ $note }}">{{ $visibility['caption'] }}</figcaption>
        </figure>

        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $visibility['title'] }}</h2>
            <p class="text-copy-lg text-text-soft text-pretty">{{ $visibility['lead'] }}</p>
            @foreach ($visibility['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
            <ul class="flex flex-col">
                @foreach ($visibility['points'] as $point)
                    <li class="flex items-start gap-3 border-t border-border py-3 text-body">
                        <span class="pt-0.5 text-success">@include('_partials.icon', ['name' => 'check', 'size' => 15])</span>
                        <span class="text-pretty">{{ $point }}</span>
                    </li>
                @endforeach
            </ul>
            <div class="mn-notice mn-notice-quiet">
                <span class="pt-0.5 text-text-muted">@include('_partials.icon', ['name' => 'info', 'size' => 16])</span>
                <p class="text-body text-text-secondary text-pretty">{{ $visibility['warning'] }}</p>
            </div>
        </div>
    </div>
</section>
