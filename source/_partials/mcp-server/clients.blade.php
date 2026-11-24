@php
    $clients = $copy['clients'];

    // The clients the MCP documentation has a setup guide for, each with its
    // mark, as on the AI memory page (see _partials/ai-memory/client-mark).
    $names = [
        'Claude Desktop' => 'claude',
        'ChatGPT' => 'openai',
        'Claude Code' => 'claudecode',
        'Cursor' => 'cursor',
        'OpenAI Codex' => 'codex',
        'VS Code' => 'vscode',
    ];
@endphp

<section class="{{ $section }} {{ $band }}">
    <div class="{{ $container }} grid items-start gap-10 lg:grid-cols-2 lg:gap-14">
        <div class="flex flex-col gap-5">
            <h2 class="{{ $title }}">{{ $clients['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $clients['body'] }}</p>
        </div>
        <div class="flex flex-col gap-5">
            <ul aria-label="{{ $clients['label'] }}" class="grid grid-cols-2 gap-2">
                @foreach ($names as $client => $markName)
                    <li class="flex items-center gap-2.5 rounded-md border border-border bg-canvas px-3 py-2.5 text-base font-medium">
                        @include('_partials.ai-memory.client-mark', ['name' => $markName, 'size' => 16])
                        {{ $client }}
                    </li>
                @endforeach
            </ul>
            <p class="text-body text-text-secondary text-pretty">{{ $clients['note'] }}</p>
            <div>
                <a href="{{ $page->links['mcp'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $clients['cta'] }}</a>
            </div>
        </div>
    </div>
</section>
