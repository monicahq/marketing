@php($grow = $copy['grow'])

{{-- Locations, maintenance and loans and lists have no page yet, so their
     links are `#`. --}}
<section class="px-4 pb-24 md:px-6 lg:pb-32">
    <div class="{{ $narrow }} grid grid-cols-1 gap-x-18 gap-y-6 lg:grid-cols-2">
        <h2 class="{{ $title }}">{{ $grow['title'] }}</h2>
        <div class="flex flex-col gap-4.5">
            <p class="{{ $paragraph }}">{!! $linked($grow['body'], ['locations' => [$grow['locations'], '#'], 'care' => [$grow['care'], '#']]) !!}</p>
            <p class="{{ $paragraph }}">{!! $linked($grow['body2'], ['list' => [$grow['list'], '#']]) !!}</p>
        </div>
    </div>
</section>
