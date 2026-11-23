@php($context = $copy['context'])

{{-- Knowledge notes have no page yet, so their link is `#`. --}}
<section class="px-4 pb-24 md:px-6 lg:pb-32">
    <div class="{{ $narrow }} grid gap-x-18 gap-y-6 lg:grid-cols-2">
        <h2 class="{{ $title }}">{{ $context['title'] }}</h2>
        <div class="flex flex-col gap-4.5">
            <p class="{{ $paragraph }}">{!! $linked($context['body'], ['relationships' => [$context['relationships'], $page->route('relationships')], 'timeline' => [$context['timeline'], $page->route('timeline')]]) !!}</p>
            <p class="{{ $paragraph }}">{!! $linked($context['body2'], ['notes' => [$context['notes'], '#']]) !!}</p>
        </div>
    </div>
</section>
