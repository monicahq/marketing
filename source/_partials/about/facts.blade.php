{{--
    Nine small facts in one bordered grid. Each cell draws its own right and
    bottom border and pulls itself a pixel past the grid's edge, so whatever
    the column count the borders on the outside fall under the container's
    `overflow-hidden` and only the inner rules show.
--}}
@php
    $facts = $copy['facts'];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-6">
        <div class="flex flex-col gap-1.5">
            <h2 class="{{ $heading }}">{{ $facts['title'] }}</h2>
            <p class="{{ $lede }}">{{ $facts['lede'] }}</p>
        </div>

        <dl class="{{ $card }} grid grid-cols-2 overflow-hidden md:grid-cols-3">
            @foreach ($facts['items'] as $fact)
                <div class="-mr-px -mb-px flex flex-col gap-1 border-r border-b border-border px-5 py-4">
                    <dt class="{{ $eyebrow }}">{{ $fact['k'] }}</dt>
                    <dd class="text-title font-semibold text-text">{{ $fact['v'] }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
</section>
