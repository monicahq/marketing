{{-- Where an illustration goes until it is drawn: a dashed frame holding
     the reference, the name and the brief the design gives it, as the design
     draws its placeholders. `item` is one entry of `aiMemory.illustrations`,
     `frame` sizes the frame.

     @include('_partials.ai-memory.illustration', ['item' => $copy['illustrations']['hero'], 'frame' => 'aspect-[16/7]']) --}}
<div class="flex flex-col items-center justify-center gap-2 rounded-lg border border-dashed border-border-strong bg-surface-subtle p-6 text-center text-text-muted {{ $frame ?? '' }}">
    @include('_partials.icon', ['name' => 'memory', 'size' => 24])
    <span class="font-mono text-caption tracking-[0.06em] uppercase">{{ $item['ref'] }}</span>
    <span class="text-body font-semibold text-text-soft">{{ $item['title'] }}</span>
    <span class="max-w-[520px] text-small text-pretty">{{ $item['brief'] }}</span>
</div>
