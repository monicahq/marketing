@php
    $tools = $copy['tools'];
    $icons = ['people', 'timeline', 'journal', 'tag', 'reminder', 'layers'];
@endphp

<section id="tools" class="{{ $section }} {{ $band }} scroll-mt-14">
    <div class="{{ $container }} flex flex-col gap-14">
        <div class="flex max-w-[760px] flex-col gap-5">
            <h2 class="{{ $title }}">{{ $tools['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $tools['lead'] }}</p>
        </div>

        <div class="flex flex-col gap-5">
            <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($tools['items'] as $i => $item)
                    <article class="{{ $card }} flex flex-col gap-3 p-6">
                        <div class="flex items-center gap-3">
                            <span class="grid size-9 flex-none place-items-center rounded-lg {{ $tones[$i]['panel'] }} {{ $tones[$i]['ink'] }}">@include('_partials.icon', ['name' => $icons[$i], 'size' => 18])</span>
                            <h3 class="text-copy font-semibold">{{ $item['title'] }}</h3>
                        </div>
                        <p class="text-body text-text-secondary text-pretty">{{ $item['body'] }}</p>
                        <p class="flex-1 text-body text-text-soft italic text-pretty">“{{ $item['prompt'] }}”</p>
                        <ul class="flex flex-wrap gap-1.5 border-t border-border pt-3.5">
                            @foreach ($item['names'] as $tool)
                                <li><code class="{{ $chip }}">{{ $tool }}</code></li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>

            <dl class="dark grid gap-px overflow-hidden rounded-lg border border-border bg-border text-text sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($tools['stats'] as $stat)
                    <div class="flex flex-col-reverse gap-1.5 bg-canvas px-6 py-5.5">
                        <dt class="text-body text-text-secondary">{{ $stat['label'] }}</dt>
                        <dd class="font-mono text-lede font-semibold">{{ $stat['value'] }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>

        <div class="flex justify-center">
            <a href="{{ $page->links['mcp'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">@include('_partials.icon', ['name' => 'journal', 'size' => 15, 'class' => 'text-text-muted']){{ $tools['docs'] }}@include('_partials.icon', ['name' => 'arrow-right', 'size' => 14])</a>
        </div>
    </div>
</section>
