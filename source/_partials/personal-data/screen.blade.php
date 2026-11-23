{{-- One small drawing of the product above a card of the organize section:
     a window on the card's tinted panel, drawn with the application's own
     classes, read out by its label. `screen` names which one, `tone` is the
     card's colours.

     @include('_partials.personal-data.screen', ['screen' => 'contact', 'tone' => $tones[0]]) --}}
@php
    $s = $copy['organize']['screens'][$screen];
@endphp
<div role="img" aria-label="{{ $s['label'] }}" class="flex aspect-[16/10] items-center justify-center border-b border-border p-5 {{ $tone['panel'] }}">
    <div class="{{ $window }} w-full max-w-[300px]">
        @switch($screen)
            @case('contact')
                <div class="flex items-center gap-3 border-b border-border px-3.5 py-3">
                    @include('_partials.home.product.avatar', ['name' => $s['name'], 'size' => 36])
                    <div class="flex min-w-0 flex-col gap-px">
                        <span class="text-base font-semibold">{{ $s['name'] }}</span>
                        <span class="{{ $stamp }} truncate">{{ $s['meta'] }}</span>
                    </div>
                </div>
                <div class="flex flex-col gap-2 px-3.5 py-2.5">
                    @foreach ($s['rows'] as $row)
                        <div class="flex items-center gap-2">
                            @include('_partials.home.product.avatar', ['name' => $row['who'], 'size' => 20])
                            <span class="flex-1 truncate text-xs font-medium">{{ $row['who'] }}</span>
                            <span class="{{ $stamp }}">{{ $row['what'] }}</span>
                        </div>
                    @endforeach
                    <span class="flex items-center gap-1.5 border-t border-border pt-2 {{ $stamp }}">@include('_partials.icon', ['name' => 'timeline', 'size' => 12]){{ $s['last'] }}</span>
                </div>
                @break

            @case('knowledge')
                <div class="flex items-center gap-2 border-b border-border px-3.5 py-2.5">
                    @include('_partials.icon', ['name' => 'folder', 'size' => 14, 'class' => 'text-text-muted'])
                    <span class="text-base font-semibold">{{ $s['folder'] }}</span>
                </div>
                <div class="divide-y divide-border">
                    @foreach ($s['entries'] as $entry)
                        <div class="flex items-center gap-2.5 px-3.5 py-2">
                            @include('_partials.icon', ['name' => $entry['kind'] === 'list' ? 'tasks' : 'note', 'size' => 14, 'class' => 'text-text-muted'])
                            <div class="flex min-w-0 flex-col">
                                <span class="truncate text-xs font-medium">{{ $entry['name'] }}</span>
                                <span class="{{ $stamp }}">{{ $entry['meta'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                @break

            @case('possession')
                <div class="{{ $windowTitle }}">
                    <span class="{{ $markTile }}">@include('_partials.icon', ['name' => 'tag', 'size' => 15])</span>
                    <div class="flex min-w-0 flex-1 flex-col gap-px">
                        <span class="text-base font-semibold">{{ $s['name'] }}</span>
                        <span class="{{ $stamp }}">{{ $s['kind'] }}</span>
                    </div>
                    <span class="mn-badge mn-badge-neutral">{{ $s['status'] }}</span>
                </div>
                <dl class="grid grid-cols-2 gap-3 px-4 py-3">
                    @foreach ($s['facts'] as [$factName, $value])
                        <div class="flex flex-col gap-0.5">
                            <dt class="{{ $stamp }}">{{ $factName }}</dt>
                            <dd class="text-base font-semibold">{{ $value }}</dd>
                        </div>
                    @endforeach
                </dl>
                @break

            @case('event')
                <div class="{{ $windowTitle }}">
                    <span class="{{ $markTile }}">@include('_partials.icon', ['name' => 'timeline', 'size' => 15])</span>
                    <div class="flex min-w-0 flex-1 flex-col gap-px">
                        <span class="text-base font-semibold">{{ $s['name'] }}</span>
                        <span class="{{ $stamp }}">{{ $s['date'] }}</span>
                    </div>
                </div>
                <div class="flex flex-col gap-2.5 px-4 py-3">
                    <span class="flex -space-x-1.5">
                        @foreach (['monica', 'rachel', 'ross', 'chandler'] as $who)
                            @include('_partials.home.product.avatar', ['name' => $page->t("cast.{$who}.full"), 'size' => 24, 'class' => 'border-2 border-canvas'])
                        @endforeach
                    </span>
                    <span class="text-xs text-text-secondary">{{ $s['note'] }}</span>
                </div>
                @break

            @case('places')
                <div class="flex items-center gap-1.5 border-b border-border px-3.5 py-2.5 text-xs">
                    @include('_partials.icon', ['name' => 'home', 'size' => 13, 'class' => 'text-text-muted'])
                    @foreach ($s['path'] as $step)
                        @unless ($loop->first)
                            @include('_partials.icon', ['name' => 'chevron-right', 'size' => 12, 'class' => 'text-text-muted'])
                        @endunless
                        <span class="{{ $loop->last ? 'font-semibold' : 'text-text-secondary' }}">{{ $step }}</span>
                    @endforeach
                </div>
                <div class="flex flex-col gap-1.5 px-3.5 py-2.5">
                    @foreach ($s['items'] as $thing)
                        <span class="flex items-center gap-2 text-xs {{ $loop->last ? 'text-text-muted italic' : '' }}">@include('_partials.icon', ['name' => 'tag', 'size' => 12, 'class' => 'text-text-muted']){{ $thing }}</span>
                    @endforeach
                </div>
                @break

            @case('reminder')
                <div class="flex items-center gap-3 px-3.5 py-3">
                    @include('_partials.home.product.avatar', ['name' => $s['who'], 'size' => 32])
                    <div class="flex min-w-0 flex-1 flex-col gap-px">
                        <span class="text-base font-semibold">{{ $s['who'] }} <span class="font-normal text-text-muted">· {{ $s['what'] }}</span></span>
                        <span class="{{ $stamp }}">{{ $s['when'] }}</span>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-2 border-t border-border px-3.5 py-2.5">
                    <span class="flex items-center gap-1.5 {{ $stamp }}">@include('_partials.icon', ['name' => 'mail', 'size' => 12]){{ $s['channel'] }}</span>
                    <span class="mn-badge mn-badge-neutral">{{ $s['next'] }}</span>
                </div>
                @break
        @endswitch
    </div>
</div>
