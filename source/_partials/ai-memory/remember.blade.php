@php
    $remember = $copy['remember'];

    // Per item, in the order of `items`: the glyph, the feature page it links
    // to where there is one, and the identity colour its vignette is drawn
    // in. The classes are written out whole so Tailwind's scanner finds them.
    $icons = ['people', 'journal', 'tag', 'timeline', 'heart', 'reminder'];
    $routes = ['relationships', null, null, 'timeline', null, 'reminders'];
    $tones = [
        ['panel' => 'bg-identity-1/14', 'edge' => 'border-identity-1/30', 'ink' => 'text-identity-1', 'fill' => 'bg-identity-1'],
        ['panel' => 'bg-identity-6/14', 'edge' => 'border-identity-6/30', 'ink' => 'text-identity-6', 'fill' => 'bg-identity-6'],
        ['panel' => 'bg-identity-3/14', 'edge' => 'border-identity-3/30', 'ink' => 'text-identity-3', 'fill' => 'bg-identity-3'],
        ['panel' => 'bg-identity-5/14', 'edge' => 'border-identity-5/30', 'ink' => 'text-identity-5', 'fill' => 'bg-identity-5'],
        ['panel' => 'bg-identity-7/14', 'edge' => 'border-identity-7/30', 'ink' => 'text-identity-7', 'fill' => 'bg-identity-7'],
        ['panel' => 'bg-identity-4/14', 'edge' => 'border-identity-4/30', 'ink' => 'text-identity-4', 'fill' => 'bg-identity-4'],
    ];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="flex max-w-[680px] flex-col gap-4">
            <h2 class="{{ $title }}">{{ $remember['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $remember['lead'] }}</p>
        </div>

        <div class="grid gap-px overflow-hidden rounded-lg border border-border bg-border md:grid-cols-2 lg:grid-cols-3">
            @foreach ($remember['items'] as $i => $item)
                @php($tone = $tones[$i])
                <article class="flex flex-col gap-3.5 bg-canvas px-5 pt-5 pb-7">
                    {{-- The vignette: the item's glyph lifted off a tinted
                         panel, with two chips of what Monica would record.
                         Hidden from screen readers, because the prompt under
                         it says the same thing in words. --}}
                    <div aria-hidden="true" class="relative h-37 overflow-hidden rounded-lg {{ $tone['panel'] }}">
                        <span class="absolute top-1/2 left-6 grid size-16 -translate-y-1/2 place-items-center rounded-lg border bg-canvas shadow-pop {{ $tone['edge'] }} {{ $tone['ink'] }}">
                            @include('_partials.icon', ['name' => $icons[$i], 'size' => 28])
                        </span>
                        <span class="absolute top-9 right-4 left-27 flex flex-col items-start gap-2">
                            <span class="rounded-full border bg-canvas px-2.75 py-1 text-xs font-semibold {{ $tone['edge'] }}">{{ $item['chips'][0] }}</span>
                            <span class="ml-5.5 rounded-full px-2.75 py-1 text-xs font-medium text-on-inverse-strong {{ $tone['fill'] }}">{{ $item['chips'][1] }}</span>
                        </span>
                    </div>

                    <div class="flex flex-1 flex-col gap-3 px-3 pt-1.5">
                        <h3 class="text-copy font-semibold">
                            @if ($routes[$i])
                                <a href="{{ $page->route($routes[$i]) }}">{{ $item['title'] }}</a>
                            @else
                                {{ $item['title'] }}
                            @endif
                        </h3>
                        <p class="flex-1 text-body text-text-secondary text-pretty">{{ $item['body'] }}</p>
                        <span class="mt-3 text-caption font-semibold tracking-[0.06em] text-text-muted uppercase">{{ $remember['try'] }}</span>
                        {{-- The prompt as a message the reader sends. --}}
                        <div class="flex items-start gap-2.5">
                            <span aria-hidden="true" class="grid size-7 flex-none place-items-center rounded-full border border-border bg-surface-subtle text-text-muted">
                                @include('_partials.icon', ['name' => 'profile', 'size' => 14])
                            </span>
                            <p class="rounded-lg border border-border bg-surface-subtle px-3.5 py-2.5 text-body text-pretty">{{ $item['ask'] }}</p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
