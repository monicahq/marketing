@php
    $dinner = $copy['dinner'];
    $event = $dinner['event'];

    // The six who were there; each timeline lists the other five.
    $six = ['Monica Geller', 'Rachel Green', 'Ross Geller', 'Chandler Bing', 'Joey Tribbiani', 'Phoebe Buffay'];
    $shown = ['Rachel Green', 'Ross Geller', 'Chandler Bing', 'Joey Tribbiani'];
    $first = fn (string $name) => explode(' ', $name)[0];
@endphp

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} {{ $split }}">
        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $dinner['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $dinner['body'] }}</p>
            <p class="{{ $closing }}">{{ $dinner['closing'] }}</p>
            <a href="{{ $page->route('timeline') }}" class="{{ $more }}">
                {{ $dinner['link'] }}
                @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])
            </a>
        </div>

        {{-- The demo vault's Thanksgiving of 1998, recorded once with six
             people, on the timelines of four of them. --}}
        <div class="flex flex-col gap-3 rounded-lg bg-identity-7/14 p-4 md:p-6">
            <div role="img" aria-label="{{ $dinner['label'] }}" class="grid grid-cols-1 gap-3 text-body sm:grid-cols-2">
                @foreach ($shown as $name)
                    <div class="{{ $panel }} flex flex-col gap-2 p-3">
                        <span class="flex items-center gap-2.5">
                            @include('_partials.home.product.avatar', ['name' => $name, 'size' => 28])
                            <span class="truncate text-small font-semibold text-text">{{ $name }}</span>
                        </span>
                        <div class="grid grid-cols-[2rem_minmax(0,1fr)] gap-x-3 border-t border-border pt-2.5">
                            <span class="grid size-8 place-items-center rounded-full bg-identity-3/12 text-identity-3">@include('_partials.icon', ['name' => 'food', 'size' => 15])</span>
                            <div class="flex min-w-0 flex-col gap-0.5">
                                <span class="text-small font-medium text-text">{{ $event['title'] }}</span>
                                <span class="text-xs text-text-muted">{{ $event['date'] }}</span>
                                <span class="text-xs text-text-muted">{{ $ui['with'] }} {{ collect($six)->reject(fn ($other) => $other === $name)->map($first)->join(', ') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <span class="px-0.5 text-small text-text-secondary">{{ $dinner['caption'] }}</span>
        </div>
    </div>
</section>
