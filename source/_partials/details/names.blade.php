@php
    $names = $copy['names'];
    $screen = $names['screen'];

    // Phoebe's name, three ways: as she writes it (the one shown), in
    // Cyrillic, and how it is said.
    $forms = [
        ['name' => 'Phoebe Buffay', 'meta' => $screen['english'], 'shown' => true, 'phonetic' => false],
        ['name' => 'Фиби Буффе', 'meta' => $screen['russian'], 'shown' => false, 'phonetic' => false],
        ['name' => 'ˈfiːbi buːˈfeɪ', 'meta' => $screen['ipa'], 'shown' => false, 'phonetic' => true],
    ];
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} grid grid-cols-1 items-center gap-x-14 gap-y-12 lg:grid-cols-[minmax(0,1.35fr)_minmax(0,1fr)]">
        {{-- The "Change the name" panel on Phoebe's edit page, with the
             written form she is shown under selected. --}}
        <div class="rounded-lg bg-identity-5/14 p-4 max-lg:order-2 md:p-6">
            <div role="img" aria-label="{{ $names['label'] }}" class="{{ $window }} text-body">
                <div class="flex min-h-12 items-center gap-3 border-b border-border px-4 py-3">
                    <span class="grid size-7 flex-none place-items-center rounded-md border border-border bg-surface-subtle text-text-secondary">@include('_partials.icon', ['name' => 'people', 'size' => 15])</span>
                    <span class="{{ $panelTitle }}">{{ $ui['changeName'] }}</span>
                </div>
                <div class="flex flex-col gap-3 p-4 md:p-5">
                    <span class="text-small font-semibold text-text">{{ $ui['name'] }}</span>
                    <p class="text-small text-text-muted text-pretty">{{ $ui['nameHelp'] }}</p>
                    <div class="overflow-hidden rounded-lg border border-border">
                        @foreach ($forms as $form)
                            <div class="flex items-center gap-3.5 border-b border-border px-4 py-3.5 last:border-b-0 {{ $form['shown'] ? 'bg-surface-subtle' : '' }}">
                                <span class="grid size-4 flex-none place-items-center rounded-full border {{ $form['shown'] ? 'border-primary' : 'border-border-strong' }}">
                                    @if ($form['shown'])<span class="size-2 rounded-full bg-primary"></span>@endif
                                </span>
                                <span class="flex min-w-0 flex-1 flex-col gap-0.5">
                                    <span class="flex flex-wrap items-center gap-2">
                                        <span class="font-semibold text-text">{{ $form['name'] }}</span>
                                        @if ($form['shown'])<span class="{{ $badge }}">{{ $ui['displayName'] }}</span>@endif
                                    </span>
                                    <span class="text-small text-text-muted">{{ $form['meta'] }}</span>
                                    @if ($form['phonetic'])<span class="text-small text-text-muted text-pretty">{{ $ui['phoneticNote'] }}</span>@endif
                                </span>
                                <span class="flex flex-none gap-1 max-sm:hidden">
                                    <span class="mn-btn mn-btn-ghost mn-btn-small pointer-events-none">{{ $ui['edit'] }}</span>
                                    <span class="mn-btn mn-btn-ghost mn-btn-small pointer-events-none">{{ $ui['remove'] }}</span>
                                </span>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex flex-col items-start gap-1.5 pt-1">
                        <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none h-auto min-h-8 max-w-full py-1.5 text-left whitespace-normal">{{ $ui['addForm'] }} @include('_partials.icon', ['name' => 'plus', 'size' => 15])</span>
                        <span class="text-small text-text-muted">{{ $ui['finds'] }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $names['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $names['body'] }}</p>
            <a href="{{ $page->route('languages') }}" class="{{ $more }}">
                {{ $names['link'] }}
                @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])
            </a>
        </div>
    </div>
</section>
