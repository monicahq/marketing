@php
    $ideas = $copy['ideas'];
    $books = $copy['books'];
    $book = $locations['book'];

    // What the possessions partials read: the locations page's words and
    // shared classes, and the colour of the Books type.
    $ui = $locations['ui'];
    $tints = ['blue' => 'bg-identity-1/12 text-identity-1'];
    $dots = [];
    $panel = 'overflow-hidden rounded-lg border border-border bg-canvas shadow-panel';
    $term = 'text-xs text-text-muted';
    $muted = 'text-small text-text-muted';
    $secondary = 'mn-btn mn-btn-secondary mn-btn-small pointer-events-none';
    $placeMark = 'grid size-8 flex-none place-items-center rounded-full border border-border bg-surface-subtle text-identity-6';
@endphp

<section class="border-y border-border bg-surface-subtle px-4 py-24 md:px-6 lg:py-28">
    <div class="{{ $narrow }} flex flex-col items-center gap-4.5 text-center">
        <h2 class="{{ $title }}">{{ $ideas['title'] }}</h2>
        <p class="max-w-[620px] {{ $paragraph }}">{!! $linked($ideas['body'], ['link' => [$ideas['inventory'], $page->route('inventory')]]) !!}</p>
        <p class="max-w-[620px] {{ $closing }}">{{ $ideas['closing'] }}</p>

        {{-- The same book twice. On the left, its row in the list Books to
             read, a line of text in four columns, the other rows faded. On the right, the copy on
             the shelf, a possession with a type, a place and a history: its
             header and where it is kept, as the locations page draws it. --}}
        <div role="img" aria-label="{{ $ideas['label'] }}" class="mt-10 grid w-full grid-cols-1 items-start gap-5 text-left text-body lg:grid-cols-2">
            <div class="flex flex-col gap-3">
                <div class="rounded-lg border border-border bg-identity-1/14 p-4 md:p-7">
                    <div class="{{ $window }} flex flex-col gap-4 p-4">
                        <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-1.5 text-small text-text-muted">@include('_partials.icon', ['name' => 'folder', 'size' => 14]) {{ $books['folder'] }} <span class="text-text-disabled">·</span> {{ $lui['list'] }}</span>
                            <span class="text-[20px] leading-tight font-semibold tracking-[-0.02em] text-text">{{ $books['title'] }}</span>
                        </div>
                        <div class="overflow-x-auto rounded-lg border border-border shadow-panel">
                            <table class="w-full border-collapse text-[13.5px]">
                                <thead>
                                    <tr>
                                        @foreach ($books['columns'] as $column)
                                            <th class="border-b border-border px-4 py-2.5 text-start text-xs font-medium whitespace-nowrap text-text-muted">{{ $column }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books['items'] as $r => $item)
                                        <tr class="{{ $r === 0 ? 'bg-surface-subtle' : '' }}">
                                            @foreach ($item as $c => $cell)
                                                <td class="border-b border-border-subtle px-4 py-2.75 align-top leading-[1.55] {{ $c === 0 ? 'text-text' : 'text-text-secondary' }} {{ $r === 0 ? '' : 'opacity-50' }}">{{ $cell }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <span class="px-1 text-small text-text-secondary">{{ $ideas['listCaption'] }}</span>
            </div>

            <div class="flex flex-col gap-3">
                <div class="rounded-lg border border-border bg-identity-3/14 p-4 md:p-7">
                    <div class="{{ $window }} flex flex-col gap-4 p-4">
                        @include('_partials.possessions.header', ['type' => $ui['books'], 'icon' => 'book', 'tint' => 'blue', 'name' => $book['name'], 'leaf' => $book['leaf'], 'at' => $book['at'], 'tags' => null, 'big' => false])
                        @include('_partials.possessions.kept-now', ['head' => $book['head'], 'leaf' => $book['leaf'], 'since' => $book['since'], 'length' => $book['length'], 'reason' => null])
                    </div>
                </div>
                <span class="px-1 text-small text-text-secondary">{{ $ideas['thingCaption'] }}</span>
            </div>
        </div>
    </div>
</section>
