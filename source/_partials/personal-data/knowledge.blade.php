@php
    $knowledge = $copy['knowledge'];
    $screen = $knowledge['screen'];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- Monica's Knowledge area, opened on the Recipes folder: a
             Markdown note and a list. One picture, read out by its label. --}}
        <figure class="flex flex-col gap-3.5">
            <div role="img" aria-label="{{ $screen['label'] }}" class="rounded-lg bg-identity-6/14 p-4 md:p-8">
                <div class="{{ $window }} grid sm:grid-cols-[150px_minmax(0,1fr)]">
                    <div class="flex flex-col gap-0.5 border-b border-border bg-surface-subtle p-2.5 sm:border-r sm:border-b-0">
                        <span class="px-2 pt-1 pb-2 text-xs font-semibold text-text-muted">{{ $screen['title'] }}</span>
                        @foreach ($screen['folders'] as $f => $folder)
                            <span class="flex items-center gap-2 rounded-md px-2 py-1.5 text-xs {{ $f === $screen['open'] ? 'bg-canvas font-semibold shadow-nav-active' : 'text-text-secondary' }}">@include('_partials.icon', ['name' => 'folder', 'size' => 13]){{ $folder }}</span>
                        @endforeach
                    </div>
                    <div class="flex flex-col gap-4 p-4">
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                @include('_partials.icon', ['name' => 'note', 'size' => 14, 'class' => 'text-text-muted'])
                                <span class="text-body font-semibold">{{ $screen['note'] }}</span>
                                <span class="ml-auto {{ $stamp }}">{{ $screen['noteMeta'] }}</span>
                            </div>
                            <div class="flex flex-col gap-1.5 rounded-md border border-border px-3 py-2.5 text-xs leading-relaxed text-text-secondary">
                                @foreach ($screen['noteBody'] as $line)
                                    <p class="{{ $loop->first ? 'font-semibold text-text' : '' }}">{{ $line }}</p>
                                @endforeach
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                @include('_partials.icon', ['name' => 'tasks', 'size' => 14, 'class' => 'text-text-muted'])
                                <span class="text-body font-semibold">{{ $screen['list'] }}</span>
                            </div>
                            @foreach ($screen['listItems'] as $item)
                                <span class="flex items-center gap-2 text-xs {{ $item['done'] ? 'text-text-muted line-through' : '' }}">
                                    <span class="grid size-4 flex-none place-items-center rounded-xs border {{ $item['done'] ? 'border-primary bg-primary text-on-primary' : 'border-border-strong' }}">
                                        @if ($item['done'])
                                            @include('_partials.icon', ['name' => 'check', 'size' => 11])
                                        @endif
                                    </span>
                                    {{ $item['name'] }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <figcaption class="{{ $note }}">{{ $knowledge['caption'] }}</figcaption>
        </figure>

        <div class="flex flex-col gap-5">
            <span class="{{ $eyebrow }} text-identity-6">{{ $knowledge['eyebrow'] }}</span>
            <h2 class="{{ $title }}">{{ $knowledge['title'] }}</h2>
            <p class="text-copy-lg text-text-soft text-pretty">{{ $knowledge['lead'] }}</p>
            @foreach ($knowledge['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
            <div class="pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $knowledge['cta'] }}</a>
            </div>
        </div>
    </div>
</section>
