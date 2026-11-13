{{-- The line of facts under a name on a drawn contact page.

     @include('_partials.details.meta', ['items' => [['label' => 'Category', 'value' => 'Friends']]]) --}}
<div class="flex flex-wrap gap-x-6 gap-y-2 text-base">
    @foreach ($items as $item)
        <span><span class="text-text-muted">{{ $item['label'] }}</span> <strong class="font-semibold">{{ $item['value'] }}</strong></span>
    @endforeach
</div>
