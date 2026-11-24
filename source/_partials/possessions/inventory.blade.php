@php
    $inventory = $copy['inventory'];
    $book = $copy['book'];
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} {{ $split }}">
        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $inventory['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $inventory['body'] }}</p>
            <p class="{{ $closing }}">{{ $inventory['closing'] }}</p>
            <a href="{{ $page->route('inventory') }}" class="{{ $more }}">
                {{ $inventory['link'] }}
                @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])
            </a>
        </div>

        {{-- Two possessions of different types, each with the fields its type
             gives it: the demo vault's book, and the city bike. --}}
        <div role="img" aria-label="{{ $inventory['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-3/14 p-4 text-body md:p-8">
            <div class="{{ $window }} flex flex-col gap-4 p-4">
                @include('_partials.possessions.header', ['type' => $ui['books'], 'icon' => 'book', 'tint' => 'blue', 'name' => $book['name'], 'leaf' => null, 'at' => null, 'tags' => null, 'big' => false])
                @include('_partials.possessions.fields', ['groups' => $book['groups']])
            </div>
            <div class="{{ $window }} flex flex-col gap-4 p-4">
                @include('_partials.possessions.header', ['type' => $ui['bicycles'], 'icon' => 'activity', 'tint' => 'rust', 'name' => $bike['name'], 'leaf' => null, 'at' => null, 'tags' => $bike['tags'], 'big' => false])
                @include('_partials.possessions.fields', ['groups' => [$bike['groups'][1]]])
            </div>
        </div>
    </div>
</section>
