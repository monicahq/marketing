{{-- One line of a shared page: a small label, then the value. `last` drops
     the rule under it.

     @include('_partials.sharing.fact', ['label' => 'Phone', 'value' => '+1 212 555 0148', 'last' => true]) --}}
<div class="grid grid-cols-[110px_minmax(0,1fr)] gap-3 px-4 py-3 {{ ($last ?? false) ? '' : 'border-b border-border' }}">
    <span class="{{ $eyebrow }} pt-0.5 text-text-muted">{{ $label }}</span>
    <span class="text-base">{{ $value }}</span>
</div>
