@php
    $section = $copy['copy'];
    $book = $copy['book'];
    $field = 'rounded-md border border-border bg-canvas p-3';
@endphp

<section class="border-y border-border bg-surface-subtle px-4 py-24 md:px-6 lg:py-28">
    <div class="{{ $narrow }} flex flex-col items-center gap-4.5 text-center">
        <h2 class="{{ $title }}">{{ $section['title'] }}</h2>
        <p class="max-w-[620px] {{ $paragraph }}">{{ $section['body'] }}</p>
        <p class="max-w-[620px] {{ $closing }}">{{ $section['closing'] }}</p>

        {{-- Two real screens side by side: the paperback's own page, and the
             Books type in settings, whose fields it fills in. --}}
        <div role="img" aria-label="{{ $section['label'] }}" class="mt-10 grid w-full grid-cols-1 items-start gap-5 text-left text-body lg:grid-cols-2">
            <div class="rounded-lg bg-identity-1/14 p-4 md:p-7">
                <div class="{{ $window }} flex flex-col gap-4 p-4">
                    @include('_partials.possessions.header', ['type' => $ui['books'], 'icon' => 'book', 'tint' => 'blue', 'name' => $book['name'], 'leaf' => $book['leaf'], 'at' => $book['at'], 'tags' => [[$book['tag'], 'plum']], 'big' => false])
                    <div class="flex flex-wrap items-baseline gap-x-3 gap-y-1">
                        <span class="{{ $sectionTitle }}">{{ $ui['details'] }}</span>
                        <span class="{{ $muted }}">{{ $ui['fieldsFrom'] }}</span>
                    </div>
                    @include('_partials.possessions.fields', ['groups' => $book['groups']])
                </div>
            </div>

            <div class="rounded-lg bg-identity-3/14 p-4 md:p-7">
                <div class="{{ $window }} flex flex-col gap-4 p-4">
                    <span class="flex items-center gap-1.5 {{ $muted }}">@include('_partials.icon', ['name' => 'chevron-left', 'size' => 14]) {{ $ui['backToTypes'] }}</span>
                    <div class="flex flex-wrap items-start justify-between gap-3">
                        <div class="flex flex-col gap-0.5">
                            <span class="text-[20px] leading-tight font-semibold tracking-[-0.02em] text-text">{{ $ui['books'] }}</span>
                            <span class="{{ $muted }}">{{ $book['typeSummary'] }}</span>
                        </div>
                        <span class="{{ $secondary }} max-sm:hidden">{{ $ui['exportJson'] }}</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="{{ $sectionTitle }}">{{ $ui['fieldGroups'] }}</span>
                        <span class="{{ $muted }}">{{ $ui['fieldGroupsHelp'] }}</span>
                    </div>
                    <div class="rounded-lg border border-border bg-canvas">
                        <div class="flex flex-wrap items-center gap-2.5 rounded-t-lg border-b border-border bg-surface-subtle px-3 py-2.5">
                            <span class="{{ $input }} min-w-0 flex-1 font-medium"><span class="truncate">{{ $book['groups'][0][0] }}</span></span>
                            <span class="{{ $muted }}">{{ $book['groupCount'] }}</span>
                            <span class="flex items-center">
                                <span class="{{ $iconButton }}">@include('_partials.icon', ['name' => 'chevron-down', 'size' => 15])</span>
                                <span class="{{ $iconButton }}">@include('_partials.icon', ['name' => 'plus', 'size' => 15])</span>
                                <span class="{{ $iconButton }}">@include('_partials.icon', ['name' => 'close', 'size' => 15])</span>
                            </span>
                        </div>
                        <div class="flex flex-col gap-3 p-3">
                            @foreach ($book['typeFields'] as [$label, $kind])
                                <div class="{{ $field }} flex flex-wrap items-end gap-2.5">
                                    <span class="flex min-w-32 flex-1 flex-col gap-1.5"><span class="text-xs font-medium text-text">{{ $ui['fieldName'] }}</span><span class="{{ $input }}">{{ $label }}</span></span>
                                    <span class="flex w-40 flex-col gap-1.5"><span class="text-xs font-medium text-text">{{ $ui['kind'] }}</span><span class="{{ $input }} justify-between">{{ $kind }} @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14, 'class' => 'text-text-muted'])</span></span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <span class="{{ $secondary }} w-fit">@include('_partials.icon', ['name' => 'plus', 'size' => 14]) {{ $ui['addField'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
