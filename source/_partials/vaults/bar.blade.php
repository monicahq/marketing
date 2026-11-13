{{-- The top of a drawn vault: its tile, its name, the page, and the search
     box, which `query` fills in and focuses. `placeholder` is what an empty
     box shows.

     @include('_partials.vaults.bar', ['vault' => $vaults[0], 'placeholder' => 'Search Personal']) --}}
<div class="flex flex-wrap items-center gap-2.5 border-b border-border px-4 py-3">
    <span class="{{ $tile }} size-6 text-xs {{ $vault['solid'] }}">{{ $initial($vault['name']) }}</span>
    <span class="text-body font-semibold">{{ $vault['name'] }}</span>
    <span class="text-text-muted">@include('_partials.icon', ['name' => 'chevron-right', 'size' => 14])</span>
    <span class="flex-1 text-body font-semibold">{{ $copy['split']['people'] }}</span>
    <span class="flex min-w-[150px] items-center gap-2 rounded-md border px-2.5 py-1.5 text-small {{ isset($query) ? 'border-focus ring-3 ring-focus/20' : 'border-border text-text-muted' }}">
        @include('_partials.icon', ['name' => 'search', 'size' => 14])
        {{ $query ?? $placeholder }}
    </span>
</div>
