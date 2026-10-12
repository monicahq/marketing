@php
    $copy = $page->t('home.privacy');

    $cardClass = 'flex flex-col overflow-hidden rounded-lg border border-on-inverse-border bg-surface-inverse-sunken';
    $cardHead = 'flex flex-col gap-2 px-6 pt-6 pb-5';
    $mark = 'mb-2 grid size-8 place-items-center rounded-md border border-on-inverse-selected text-on-inverse-strong';
    $cardTitle = 'text-xl font-semibold text-on-inverse-strong';
    $cardBody = 'text-body text-on-inverse-muted text-pretty';
    $code = 'mt-auto border-t border-on-inverse-border px-6 pt-4.5 pb-5.5 font-mono text-xs leading-[1.8] text-on-inverse';
@endphp

{{-- A dark band in both themes, like the terminal above it: the inverse
     surface at section size. Each card ends on a few lines of code or output
     that make its claim concrete. They are plain text, so a screen reader
     reads the claim and the proof alike. --}}
<section class="bg-surface-inverse px-4 py-30 md:px-6">
    <div class="mx-auto flex max-w-page flex-col gap-16">
        <div class="flex max-w-[900px] flex-col gap-5">
            <span class="text-caption font-medium tracking-[0.08em] text-on-inverse-muted uppercase">{{ $copy['eyebrow'] }}</span>
            <h2 class="text-display-privacy font-semibold text-balance text-on-inverse-strong">{{ $copy['title'] }} <span class="text-on-inverse-faint">{{ $copy['aside'] }}</span></h2>
        </div>

        <div class="grid grid-cols-[repeat(auto-fit,minmax(min(100%,300px),1fr))] gap-4">
            <article class="{{ $cardClass }}">
                <div class="{{ $cardHead }}">
                    <span class="{{ $mark }}">@include('_partials.icon', ['name' => 'file', 'size' => 18])</span>
                    <h3 class="{{ $cardTitle }}">{{ $copy['source']['title'] }}</h3>
                    <p class="{{ $cardBody }}">{{ $copy['source']['body'] }}</p>
                </div>
                <div class="{{ $code }}">
                    <div class="mb-1.5 flex justify-between gap-3 text-on-inverse-faint"><span>app/Privacy.php</span><span>AGPL-3.0</span></div>
                    <div class="grid grid-cols-[20px_1fr] gap-x-3">
                        <span class="text-on-inverse-dim">1</span><span class="text-on-inverse-faint">{{ $copy['source']['comment'] }}</span>
                        <span class="text-on-inverse-dim">2</span><span>public function shared(): array</span>
                        <span class="text-on-inverse-dim">3</span><span>{</span>
                        <span class="text-on-inverse-dim">4</span><span class="pl-4">return <span class="text-terminal-ok">[]</span>;</span>
                        <span class="text-on-inverse-dim">5</span><span>}</span>
                    </div>
                </div>
            </article>

            <article class="{{ $cardClass }}">
                <div class="{{ $cardHead }}">
                    <span class="{{ $mark }}">@include('_partials.icon', ['name' => 'lock', 'size' => 18])</span>
                    <h3 class="{{ $cardTitle }}">{{ $copy['trackers']['title'] }}</h3>
                    <p class="{{ $cardBody }}">{{ $copy['trackers']['body'] }}</p>
                </div>
                <div class="{{ $code }}">
                    <div class="mb-1.5 text-on-inverse-faint">{{ $copy['trackers']['label'] }}</div>
                    @foreach ($copy['trackers']['rows'] as $row)
                        <div class="flex justify-between gap-3"><span class="text-on-inverse-muted">{{ $row }}</span><span class="text-terminal-ok">0</span></div>
                    @endforeach
                </div>
            </article>

            <article class="{{ $cardClass }}">
                <div class="{{ $cardHead }}">
                    <span class="{{ $mark }}">@include('_partials.icon', ['name' => 'vault', 'size' => 18])</span>
                    <h3 class="{{ $cardTitle }}">{{ $copy['selfHost']['title'] }}</h3>
                    <p class="{{ $cardBody }}">{{ $copy['selfHost']['body'] }}</p>
                </div>
                <div class="{{ $code }}">
                    <div class="mb-1.5 text-on-inverse-faint">~/monica</div>
                    <div><span class="text-on-inverse-faint">$</span> docker run -p 8080:80 monica</div>
                    <div class="text-on-inverse-faint">{{ $copy['selfHost']['pulling'] }}</div>
                    <div class="flex items-center gap-2"><span aria-hidden="true" class="size-1.5 rounded-full bg-terminal-ok"></span><span>{{ $copy['selfHost']['running'] }}</span></div>
                </div>
            </article>
        </div>
    </div>
</section>
