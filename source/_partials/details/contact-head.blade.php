{{-- The top of a contact page: the portrait (ringed, with its star, for a
     favourite), the name, the facts under it, then the tabs its template
     gives it with one of them open.

     @include('_partials.details.contact-head', ['name' => 'Rachel Green', 'favourite' => true, 'size' => 88, 'facts' => [...], 'tabs' => [...], 'open' => 2, 'counts' => [...]]) --}}
<div class="flex flex-wrap items-start gap-5">
    <span class="relative flex-none rounded-full border-2 p-0.75 max-sm:hidden {{ $favourite ? 'border-warning/40' : 'border-transparent' }}">
        @include('_partials.home.product.avatar', ['name' => $name, 'size' => $size])
        @if ($favourite)
            <span class="absolute -right-0.5 -bottom-0.5 grid size-6.5 place-items-center rounded-full border-2 border-canvas bg-warning text-white">@include('_partials.icon', ['name' => 'star-filled', 'size' => 13])</span>
        @endif
    </span>
    <div class="min-w-0 flex-1">
        <div class="flex items-center justify-between gap-3">
            <span class="{{ $size > 60 ? 'text-[28px]' : 'text-[22px]' }} leading-tight font-semibold tracking-[-0.03em] text-text">{{ $name }}</span>
            @if ($size > 60)
                <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none max-md:hidden">@include('_partials.icon', ['name' => 'profile', 'size' => 14]) {{ $ui['editContact'] }}</span>
            @endif
        </div>
        @if ($facts)
            <ul class="mt-3 flex flex-wrap gap-x-5.5 gap-y-2">
                @foreach ($facts as [$icon, $label, $value])
                    <li class="flex items-center gap-1.75 text-small text-text-secondary">
                        @include('_partials.icon', ['name' => $icon, 'size' => 16, 'class' => 'text-text-muted'])
                        {{ $label }} <b class="font-semibold text-text">{{ $value }}</b>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>

<div class="flex flex-wrap items-end gap-0.5 border-b border-border">
    @foreach ($tabs as $t => $tab)
        <span class="-mb-px flex h-9 flex-none items-center gap-1.75 border-b-2 px-2.5 text-body font-medium {{ $t === $open ? 'border-primary font-semibold text-text' : 'border-transparent text-text-muted' }}">
            @include('_partials.icon', ['name' => $t === 0 ? 'people' : ($t === count($tabs) - 1 ? 'relationship' : 'file'), 'size' => 15])
            {{ $tab }}
            @if ($counts[$t] ?? null)
                <span class="grid h-4.75 min-w-4.75 place-items-center rounded-full px-1.25 text-caption font-semibold {{ $t === $open ? 'bg-hover text-text-secondary' : 'text-text-disabled' }}">{{ $counts[$t] }}</span>
            @endif
        </span>
    @endforeach
</div>
