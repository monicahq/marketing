@php
    $start = $copy['start'];

    // The clients Monica's MCP documentation has a setup guide for, each with
    // its mark (see _partials/ai-memory/client-mark).
    $clients = [
        'ChatGPT' => 'openai',
        'Claude Desktop' => 'claude',
        'Claude Code' => 'claudecode',
        'Cursor' => 'cursor',
        'Codex' => 'codex',
        'VS Code' => 'vscode',
    ];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="flex max-w-[680px] flex-col gap-4">
            <h2 class="{{ $title }}">{{ $start['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $start['lead'] }}</p>
        </div>

        <ol class="grid gap-6 lg:grid-cols-3">
            @foreach ($start['steps'] as $s => $step)
                <li class="flex flex-col gap-3 border-t border-border-strong pt-5">
                    <span class="{{ $eyebrow }} text-text-muted">{{ str_replace(':number', $s + 1, $start['step']) }}</span>
                    <h3 class="text-lede-sm font-semibold tracking-[-0.01em]">{{ $step['title'] }}</h3>
                    <p class="text-body text-text-secondary text-pretty">{{ $step['body'] }}</p>
                    @if ($loop->last)
                        @include('_partials.ai-memory.prompt', ['text' => $start['starterPrompt'], 'label' => $start['starter']])
                    @endif
                </li>
            @endforeach
        </ol>

        <div class="mn-panel mn-panel-inset grid items-center gap-10 p-6 md:p-10 lg:grid-cols-[3fr_2fr]">
            <div class="flex flex-col gap-4">
                <h3 class="text-heading-sm font-semibold text-balance">{{ $start['clientsTitle'] }}</h3>
                @foreach ($start['clients'] as $paragraphText)
                    <p class="text-body text-text-secondary text-pretty">{{ $paragraphText }}</p>
                @endforeach
                <div class="flex flex-wrap gap-2 pt-2">
                    <a href="{{ $page->links['mcp'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $start['guides'] }}</a>
                    <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $start['account'] }}</a>
                </div>
            </div>
            <ul aria-label="{{ $start['clientsLabel'] }}" class="grid grid-cols-2 gap-2">
                @foreach ($clients as $client => $markName)
                    <li class="flex items-center gap-2.5 rounded-md border border-border bg-canvas px-3 py-2.5 text-base font-medium">
                        @include('_partials.ai-memory.client-mark', ['name' => $markName, 'size' => 16])
                        {{ $client }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
