@php
    $connect = $copy['connect'];
    $oauth = $connect['oauth'];
    $key = $connect['key'];
    $cardHead = 'flex flex-col gap-2 border-b border-border bg-surface-subtle px-6 py-5';
    $fieldLabel = 'text-caption font-semibold tracking-[0.08em] text-text-muted uppercase';
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-14">
        <div class="flex max-w-[760px] flex-col gap-5">
            <h2 class="{{ $title }}">{{ $connect['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $connect['lead'] }}</p>
        </div>

        <div class="grid gap-5 lg:grid-cols-2">
            {{-- Option A: OAuth. --}}
            <article class="{{ $card }} flex flex-col overflow-hidden">
                <div class="{{ $cardHead }}">
                    <span class="{{ $fieldLabel }}">{{ $oauth['eyebrow'] }}</span>
                    <h3 class="text-heading-sm font-semibold">{{ $oauth['title'] }}</h3>
                </div>
                <div class="flex flex-1 flex-col gap-5 p-6">
                    <p class="text-body text-text-secondary text-pretty">{{ $oauth['body'] }}</p>
                    <ol class="flex flex-col gap-2.5">
                        @foreach ($oauth['steps'] as $n => $stepText)
                            <li class="flex items-start gap-3 text-body">
                                <span class="grid size-5.5 flex-none place-items-center rounded-full border border-border-strong text-xs font-semibold">{{ $n + 1 }}</span>
                                <span class="pt-0.5">{{ $stepText }}</span>
                            </li>
                        @endforeach
                    </ol>
                    <div class="flex flex-col gap-2">
                        <span class="{{ $fieldLabel }}">{{ $connect['endpoint'] }}</span>
                        @include('_partials.mcp-server.code', ['text' => $copy['endpoint']])
                    </div>
                    <div class="flex flex-col gap-2">
                        <span class="{{ $fieldLabel }}">{{ $connect['firstPrompt'] }}</span>
                        <p class="{{ $prompt }}">{{ $oauth['prompt'] }}</p>
                    </div>

                    {{-- Monica's consent screen. One picture, read out by its label. --}}
                    <figure class="mt-auto flex flex-col gap-2.5">
                        @php($consent = $oauth['screen'])
                        <div role="img" aria-label="{{ $consent['label'] }}" class="rounded-lg bg-identity-1/14 p-4 md:p-6">
                            <div class="{{ $window }} mx-auto flex max-w-[360px] flex-col items-center gap-3.5 px-5 py-6 text-center">
                                <div class="flex items-center gap-3">
                                    <span class="grid size-10 flex-none place-items-center rounded-md border border-border bg-surface-subtle">@include('_partials.api.brand', ['name' => 'claude', 'size' => 20])</span>
                                    <span class="h-px w-6 bg-border-strong"></span>
                                    <span class="grid size-10 flex-none place-items-center rounded-md border border-border bg-surface-subtle"><img src="{{ $mark }}" alt="" width="32" height="29" loading="lazy" class="h-auto w-5.5"></span>
                                </div>
                                <span class="text-copy font-semibold text-balance">{{ $consent['title'] }}</span>
                                <span class="text-xs text-text-secondary text-pretty">{{ $consent['body'] }}</span>
                                <span class="flex items-center gap-1.5 rounded-md bg-surface-subtle px-2.5 py-1 text-xs">
                                    <span class="text-text-muted">{{ $consent['redirect'] }}</span>
                                    <span class="font-mono font-medium">{{ $consent['host'] }}</span>
                                </span>
                                <div class="grid w-full grid-cols-2 gap-2 pt-1">
                                    <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $consent['deny'] }}</span>
                                    <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">{{ $consent['allow'] }}</span>
                                </div>
                            </div>
                        </div>
                        <figcaption class="{{ $note }}">{{ $oauth['caption'] }}</figcaption>
                    </figure>
                </div>
            </article>

            {{-- Option B: an API key. --}}
            <article class="{{ $card }} flex flex-col overflow-hidden">
                <div class="{{ $cardHead }}">
                    <span class="{{ $fieldLabel }}">{{ $key['eyebrow'] }}</span>
                    <h3 class="text-heading-sm font-semibold">{{ $key['title'] }}</h3>
                </div>
                <div class="flex flex-1 flex-col gap-5 p-6">
                    <p class="text-body text-text-secondary text-pretty">{{ $key['body'] }}</p>
                    <div class="flex flex-col gap-2">
                        <span class="{{ $fieldLabel }}">{{ $connect['endpoint'] }}</span>
                        @include('_partials.mcp-server.code', ['text' => $copy['endpoint']])
                    </div>
                    <div class="flex flex-col gap-2">
                        <span class="{{ $fieldLabel }}">{{ $key['header'] }}</span>
                        <div class="dark overflow-x-auto rounded-md border border-border bg-canvas px-3.5 py-3 text-text">
                            <code class="font-mono text-small whitespace-nowrap"><span class="text-text-muted">Authorization:</span> Bearer YOUR_MONICA_API_KEY</code>
                        </div>
                        <p class="{{ $note }}">{{ $key['headerNote'] }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <span class="{{ $fieldLabel }}">{{ $connect['firstPrompt'] }}</span>
                        <p class="{{ $prompt }}">{{ $key['prompt'] }}</p>
                    </div>

                    {{-- Monica's API keys settings. One picture, read out by its label. --}}
                    <figure class="mt-auto flex flex-col gap-2.5">
                        @php($keys = $key['screen'])
                        <div role="img" aria-label="{{ $keys['label'] }}" class="rounded-lg bg-identity-5/14 p-4 md:p-6">
                            <div class="{{ $window }} mx-auto max-w-[400px]">
                                <div class="{{ $windowTitle }}">
                                    <span class="{{ $markTile }}">@include('_partials.icon', ['name' => 'key', 'size' => 15])</span>
                                    <span class="flex-1 text-body font-semibold">{{ $keys['title'] }}</span>
                                    <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">{{ $keys['create'] }}</span>
                                </div>
                                <div class="divide-y divide-border">
                                    @foreach ($keys['keys'] as $row)
                                        <div class="flex items-center gap-3 px-4 py-3">
                                            <div class="flex min-w-0 flex-1 flex-col gap-px">
                                                <span class="truncate text-base font-semibold">{{ $row['name'] }}</span>
                                                <span class="{{ $stamp }} truncate">{{ $row['meta'] }}</span>
                                            </div>
                                            <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $keys['revoke'] }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <figcaption class="{{ $note }}">{{ $key['caption'] }}</figcaption>
                    </figure>
                </div>
            </article>
        </div>

        <div class="flex flex-col items-start justify-between gap-3 rounded-lg border border-dashed border-border-strong px-5 py-4 md:flex-row md:items-center">
            <p class="text-body text-text-soft">{{ $connect['selfHosted'] }} <code class="font-mono text-small text-text">{{ $copy['selfHosted'] }}</code>.</p>
            <a href="{{ $page->links['mcp'] }}" class="inline-flex flex-none items-center gap-1.5 text-body font-medium">{{ $connect['guides'] }}@include('_partials.icon', ['name' => 'arrow-right', 'size' => 14])</a>
        </div>
    </div>
</section>
