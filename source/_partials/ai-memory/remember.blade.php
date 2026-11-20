@php
    $remember = $copy['remember'];

    // The glyph of each item, and the feature page it links to where there
    // is one, in the order of `items`.
    $icons = ['people', 'journal', 'tag', 'timeline', 'heart', 'reminder'];
    $routes = ['relationships', null, null, 'timeline', null, 'reminders'];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="flex max-w-[680px] flex-col gap-4">
            <h2 class="{{ $title }}">{{ $remember['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $remember['lead'] }}</p>
        </div>

        <div class="grid gap-px overflow-hidden rounded-lg border border-border bg-border md:grid-cols-2 lg:grid-cols-3">
            @foreach ($remember['items'] as $i => $item)
                <article class="flex flex-col gap-3 bg-canvas p-6">
                    <span class="grid size-8 place-items-center rounded-md border border-border bg-surface-subtle">@include('_partials.icon', ['name' => $icons[$i], 'size' => 16])</span>
                    <h3 class="text-copy font-semibold">
                        @if ($routes[$i])
                            <a href="{{ $page->route($routes[$i]) }}">{{ $item['title'] }}</a>
                        @else
                            {{ $item['title'] }}
                        @endif
                    </h3>
                    <p class="text-body text-text-secondary text-pretty">{{ $item['body'] }}</p>
                    <div class="mt-auto flex flex-col gap-1 border-t border-border pt-3">
                        <span class="text-caption font-semibold tracking-[0.06em] text-text-muted uppercase">{{ $remember['try'] }}</span>
                        <span class="text-body text-text-soft">{{ $item['ask'] }}</span>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
