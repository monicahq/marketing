@php($open = $copy['open'])

{{-- The design keeps a place beside this for a panda in its own library,
     not drawn yet. Until it is, the copy stands in two columns. --}}
<section class="{{ $section }}">
    <div class="{{ $container }} grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
        <div class="flex flex-col gap-4">
            <h2 class="{{ $title }}">{{ $open['title'] }}</h2>
            <p class="{{ $closing }}">{{ $open['lead'] }}</p>
        </div>
        <div class="flex flex-col gap-4">
            @foreach ($open['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
            <p class="{{ $closing }} font-semibold">{{ $open['closing'] }}</p>
            <div class="flex flex-wrap gap-x-6 gap-y-2 pt-1">
                <a href="{{ $page->links['github'] }}" class="inline-flex items-center gap-1.5 text-copy font-medium">{{ $open['github'] }}@include('_partials.icon', ['name' => 'arrow-right', 'size' => 14])</a>
                <a href="{{ $page->links['selfHostingGuide'] }}" class="inline-flex items-center gap-1.5 text-copy font-medium">{{ $open['selfHosting'] }}@include('_partials.icon', ['name' => 'arrow-right', 'size' => 14])</a>
            </div>
        </div>
    </div>
</section>
