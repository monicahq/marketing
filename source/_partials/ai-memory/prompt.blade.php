{{-- A prompt the reader could type, drawn as an assistant's message field
     with the text already in it and the send button under it, so it reads
     as something to say to an assistant rather than a quotation.

     The field is a picture, not a control: the send button is a drawn span
     hidden from screen readers, and the prompt is plain text they read out.
     `label` is the small heading over it ("Try asking"), optional.

     @include('_partials.ai-memory.prompt', ['text' => $item['ask'], 'label' => $remember['try']]) --}}
<div class="flex flex-col gap-1.5 {{ $class ?? '' }}">
    @isset($label)
        <span class="text-caption font-semibold tracking-[0.06em] text-text-muted uppercase">{{ $label }}</span>
    @endisset
    <div class="flex flex-col gap-2 rounded-lg border border-border-strong bg-canvas py-2.5 pr-2.5 pl-3.5">
        <p class="text-body text-pretty">{{ $text }}</p>
        <span aria-hidden="true" class="grid size-6 place-items-center self-end rounded-md bg-primary text-on-primary">
            @include('_partials.icon', ['name' => 'arrow-right', 'size' => 14, 'class' => '-rotate-90'])
        </span>
    </div>
</div>
