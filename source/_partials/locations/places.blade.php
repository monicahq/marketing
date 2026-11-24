@php($places = $copy['places'])

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} {{ $split }}">
        {{-- The locations beside a vault's possessions, as Erica lists them:
             every location with the possessions kept there or anywhere
             inside it, all of them in the colour of the place at the top. --}}
        <div class="rounded-lg bg-identity-2/14 p-4 md:p-10">
            <div role="img" aria-label="{{ $places['label'] }}" class="{{ $window }} mx-auto flex w-full max-w-[20rem] flex-col gap-px p-2 text-body">
                <div class="flex items-center px-2 pt-1.5 pb-2">
                    <span class="{{ $caption }}">{{ $ui['locations'] }}</span>
                    <span class="ms-auto text-xs text-text underline decoration-border-strong underline-offset-2">{{ $ui['manage'] }}</span>
                </div>
                <span class="flex min-h-8 items-center gap-2 rounded-md bg-surface-subtle py-1.5 ps-2 pe-2 text-small font-medium text-text shadow-nav-active">
                    @include('_partials.icon', ['name' => 'layers', 'size' => 15, 'class' => 'text-text-muted'])
                    <span class="min-w-0 flex-1 truncate">{{ $ui['allLocations'] }}</span>
                    <span class="text-xs text-text-muted">{{ $places['all'] }}</span>
                </span>
                @foreach ($places['nav'] as [$name, $depth, $count])
                    <span class="flex min-h-8 items-center gap-2 py-1.5 pe-2 text-small text-text-secondary" style="padding-inline-start: {{ 8 + $depth * 16 }}px">
                        @include('_partials.icon', ['name' => $depth === 0 ? 'place' : 'chevron-right', 'size' => 15, 'class' => 'text-identity-1'])
                        <span class="min-w-0 flex-1 truncate">{{ $name }}</span>
                        <span class="text-xs text-text-muted">{{ $count }}</span>
                    </span>
                @endforeach
            </div>
        </div>

        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $places['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $places['body'] }}</p>
            <p class="{{ $closing }}">{{ $places['closing'] }}</p>
        </div>
    </div>
</section>
