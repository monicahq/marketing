@php($protect = $copy['protect'])

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $protect['title'] }}</h2>
            <div class="flex flex-col gap-4">
                <p class="{{ $closing }}">{{ $protect['lead'] }}</p>
                <p class="{{ $paragraph }}">{{ $protect['body'] }}</p>
            </div>
        </div>

        {{-- The ways in (a passkey, an authenticator app, recovery codes),
             and how Monica keeps each secret it is given. --}}
        <div role="img" aria-label="{{ $protect['label'] }}" class="grid items-start gap-6 rounded-lg bg-identity-1/14 p-4 md:p-12 lg:grid-cols-2">
            <div class="{{ $window }}">
                @foreach ($protect['methods'] as $i => $method)
                    <div class="flex items-center gap-3 px-4 py-3.5 {{ $loop->last ? '' : 'border-b border-border' }}">
                        <span class="{{ $iconTile }}">@include('_partials.icon', ['name' => ['key', 'device', 'file'][$i], 'size' => 16])</span>
                        <span class="flex min-w-0 flex-1 flex-col gap-0.5">
                            <span class="text-base font-semibold">{{ $method['title'] }}</span>
                            <span class="{{ $stamp }} text-pretty">{{ $method['body'] }}</span>
                        </span>
                        @if ($i === 0)
                            <span class="mn-badge mn-badge-success">{{ $method['action'] }}</span>
                        @else
                            <span class="{{ $button }} {{ $i === 1 ? 'mn-btn-primary' : 'mn-btn-secondary' }}">{{ $method['action'] }}</span>
                        @endif
                    </div>
                @endforeach
            </div>

            <div class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    <span class="text-copy font-semibold">{{ $protect['stores'] }}</span>
                </div>
                @foreach ($protect['rows'] as [$what, $how])
                    <div class="grid grid-cols-[minmax(0,1fr)_auto] items-center gap-3 px-4 py-3 {{ $loop->last ? '' : 'border-b border-border' }}">
                        <span class="text-base">{{ $what }}</span>
                        <span class="font-mono text-xs text-text-secondary">{{ $how }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
