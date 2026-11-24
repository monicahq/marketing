{{-- One line of a drawn record: a small label, then the value. `last` drops
     the rule under it, and `muted` greys the value out.

     @include('_partials.privacy-features.fact', ['label' => 'Email', 'value' => 'monica@example.com', 'last' => true]) --}}
<div class="grid grid-cols-[minmax(0,110px)_minmax(0,1fr)] gap-3 px-4 py-3 sm:grid-cols-[120px_minmax(0,1fr)] {{ ($last ?? false) ? '' : 'border-b border-border' }}">
    <span class="{{ $eyebrow }} pt-0.5 text-text-muted">{{ $label }}</span>
    <span class="text-base wrap-anywhere {{ ($muted ?? false) ? 'text-text-secondary' : '' }}">{{ $value }}</span>
</div>
