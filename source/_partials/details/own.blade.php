@php($own = $copy['own'])

<section class="px-4 pt-24 md:px-6 lg:pt-30">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $own['title'] }}</h2>
            <div class="flex flex-col gap-4">
                @foreach ($own['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
            </div>
        </div>

        {{-- Monica Geller's page, the evening of the dinner. --}}
        <div class="rounded-lg bg-identity-1/14 p-4 md:p-10 lg:p-12">
            <div role="img" aria-label="{{ $own['label'] }}" class="{{ $window }} flex flex-col gap-6 p-5 md:p-8">
                <div class="flex flex-wrap items-center gap-6">
                    @include('_partials.avatar-initials', ['name' => $cast['monica']['full'], 'size' => 96])
                    <div class="flex min-w-0 flex-1 flex-col gap-2.5">
                        <span class="text-heading font-semibold md:text-display-sm">{{ $cast['monica']['full'] }}</span>
                        @include('_partials.details.meta', ['items' => $own['meta']])
                    </div>
                </div>

                <div class="grid items-start gap-5 lg:grid-cols-3">
                    @include('_partials.details.rows', ['heading' => $own['connect']['title'], 'rows' => $own['connect']['rows']])
                    @include('_partials.details.rows', ['heading' => $own['dates']['title'], 'rows' => $own['dates']['rows']])
                    @include('_partials.details.note', ['heading' => $own['dinner']['title'], 'text' => $own['dinner']['text'], 'when' => $own['dinner']['added']])
                </div>
            </div>
        </div>
    </div>
</section>
