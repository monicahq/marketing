{{-- What will never be built, one small card each. --}}
@php
    $nos = $copy['nos'];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-6">
        <div class="flex flex-col gap-1.5">
            <h2 class="{{ $heading }}">{{ $nos['title'] }}</h2>
            <p class="{{ $lede }}">{{ $nos['lede'] }}</p>
        </div>

        <ul class="grid gap-3 sm:grid-cols-2 md:grid-cols-3">
            @foreach ($nos['items'] as $no)
                <li class="{{ $card }} flex gap-2.5 px-4.5 py-4">
                    <span class="flex-none pt-0.5 text-text-muted">@include('_partials.icon', ['name' => 'close', 'size' => 15])</span>
                    <span class="flex flex-col gap-0.5">
                        <span class="text-copy font-semibold text-text">{{ $no['t'] }}</span>
                        <span class="text-small text-text-muted text-pretty">{{ $no['b'] }}</span>
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
</section>
