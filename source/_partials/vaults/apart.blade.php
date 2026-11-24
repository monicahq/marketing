@php($apart = $copy['apart'])

{{-- The closing section: what a vault is not. No drawing, as the design has
     it. --}}
<section class="{{ $section }}">
    <div class="{{ $container }} grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
        <h2 class="{{ $title }}">{{ $apart['title'] }}</h2>
        <div class="flex flex-col gap-4">
            <p class="{{ $closing }}">{{ $apart['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $apart['body'] }}</p>
        </div>
    </div>
</section>
