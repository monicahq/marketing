@php
    $organize = $copy['organize'];

    // Per item, in the order of `items`: its glyph and the drawing above it.
    // The people card links to the personal CRM guide, which covers them in
    // full.
    $icons = ['people', 'journal', 'tag', 'timeline', 'place', 'reminder'];
    $screens = ['contact', 'knowledge', 'possession', 'event', 'places', 'reminder'];
@endphp

<section id="organize" class="{{ $section }} scroll-mt-14">
    <div class="{{ $container }} flex flex-col gap-14">
        <div class="flex max-w-[720px] flex-col gap-5">
            <span class="{{ $eyebrow }}">{{ $organize['eyebrow'] }}</span>
            <h2 class="{{ $title }}">{{ $organize['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $organize['lead'] }}</p>
        </div>

        <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($organize['items'] as $i => $item)
                @php($tone = $tones[$i])
                <article class="{{ $card }} flex flex-col overflow-hidden">
                    @include('_partials.personal-data.screen', ['screen' => $screens[$i], 'tone' => $tone])

                    <div class="flex flex-1 flex-col gap-3 p-6">
                        <div class="flex items-center gap-3">
                            <span class="grid size-9 flex-none place-items-center rounded-lg border {{ $tone['panel'] }} {{ $tone['edge'] }} {{ $tone['ink'] }}">@include('_partials.icon', ['name' => $icons[$i], 'size' => 18])</span>
                            <h3 class="text-copy font-semibold">{{ $item['title'] }}</h3>
                        </div>
                        <p class="flex-1 text-body text-text-secondary text-pretty">{{ $item['body'] }}</p>
                        <div class="mt-1.5 flex flex-col gap-1 rounded-md border px-3.5 py-3 {{ $tone['wash'] }} {{ $tone['edge'] }}">
                            <span class="text-caption font-semibold tracking-[0.08em] uppercase {{ $tone['ink'] }}">{{ $organize['example'] }}</span>
                            <span class="text-body text-text-soft text-pretty">{{ $item['example'] }}</span>
                        </div>
                        @if ($loop->first)
                            <a href="{{ $page->route('personalCrm') }}" class="mt-1 inline-flex items-center gap-1.5 text-body font-medium">{{ $organize['crm'] }}@include('_partials.icon', ['name' => 'arrow-right', 'size' => 14])</a>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
