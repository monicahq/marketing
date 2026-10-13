@php($birthday = $copy['birthday'])

<section class="px-4 pt-24 md:px-6 lg:pt-30">
    <div class="{{ $container }} grid items-center gap-14 lg:grid-cols-2">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $birthday['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $birthday['body'] }}</p>
            <p class="{{ $closing }}">{{ $birthday['close'] }}</p>
        </div>

        {{-- What an address book keeps, faded, above what Monica keeps. --}}
        <div role="img" aria-label="{{ $birthday['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-2/14 p-5 md:p-10">
            <div class="{{ $card }} flex flex-col gap-2 px-5 py-4 opacity-70">
                <span class="{{ $eyebrow }} text-text-muted">{{ $birthday['addressBook'] }}</span>
                <div class="grid grid-cols-[110px_minmax(0,1fr)] gap-x-3 gap-y-2 text-base">
                    @foreach ($birthday['rows'] as $row)
                        <span class="text-text-muted">{{ $row['label'] }}</span>
                        <span>{{ $row['value'] }}</span>
                    @endforeach
                </div>
            </div>

            <div class="{{ $window }}">
                <div class="flex items-center gap-3 border-b border-border px-5 py-4">
                    @include('_partials.avatar-initials', ['name' => $cast['ross']['full'], 'size' => 36])
                    <span class="text-lede-sm font-semibold tracking-[-0.01em]">{{ $cast['ross']['full'] }}</span>
                </div>
                <div class="divide-y divide-border-subtle px-5 pt-2 pb-4">
                    @foreach ($birthday['monica'] as $row)
                        @include('_partials.templates.field', $row)
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
