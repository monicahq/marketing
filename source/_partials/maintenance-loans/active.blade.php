{{-- The top of a possession's Loans section while it is lent, as Erica draws
     it: who has it and since when, when it is due back, and the button that
     records its return. Reads the page's `$ui`, `$copy` and shared classes. --}}
<div class="{{ $panel }} flex flex-wrap items-center gap-x-3.5 gap-y-3 p-4">
    @include('_partials.home.product.avatar', ['name' => $joey, 'size' => 36])
    <div class="flex min-w-48 flex-1 flex-col gap-0.75">
        <span class="text-base text-text">{{ $copy['loans']['sentence'] }}</span>
        <span class="{{ $muted }}">{{ $copy['loans']['dueLine'] }}</span>
    </div>
    <span class="{{ $secondary }}">{{ $ui['markReturned'] }}</span>
</div>
