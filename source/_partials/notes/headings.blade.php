@php($headings = $copy['headings'])

<section class="border-y border-border bg-surface-subtle px-4 py-24 md:px-6 lg:py-28">
    <div class="{{ $narrow }} flex flex-col gap-12">
        <div class="flex max-w-[620px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $headings['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $headings['body'] }}</p>
            <p class="{{ $paragraph }}">{!! $linked($headings['body2'], ['link' => [$headings['listLabel'], $page->route('lists')]]) !!}</p>
        </div>

        {{-- On the left, the Home folder in Knowledge's contents, the note's
             second heading being followed. On the right, where it lands: the
             note, scrolled to that heading, as the anchor Erica gives each
             heading puts it. --}}
        <div role="img" aria-label="{{ $headings['label'] }}" class="grid grid-cols-1 items-center gap-6 rounded-lg bg-identity-6/14 p-3 text-left text-body md:p-8 lg:grid-cols-[minmax(0,1.15fr)_auto_minmax(0,1fr)]">
            <div class="{{ $window }} p-4 md:p-5">
                @include('_partials.knowledge.contents-folder', ['name' => $knowledge['folders'][0]['name'], 'count' => $knowledge['homeCount'], 'documents' => $knowledge['home'], 'active' => $note['trip']])
            </div>
            <span class="grid size-8 place-items-center justify-self-center rounded-full border border-border bg-canvas text-text-muted max-lg:rotate-90">@include('_partials.icon', ['name' => 'arrow-right', 'size' => 16])</span>
            <div class="{{ $window }} p-4 md:p-5">
                @include('_partials.knowledge.note', ['note' => $note, 'kui' => $kui, 'from' => 'trip'])
            </div>
        </div>
    </div>
</section>
