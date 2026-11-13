@php($expiry = $copy['expiry'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- Choosing when Rachel's link stops working, and a password set on
             it. --}}
        <div role="img" aria-label="{{ $expiry['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-6/14 p-5 max-lg:order-last md:p-10">
            <div class="flex w-full max-w-[360px] flex-col gap-2">
                <span class="text-small font-medium">{{ $copy['stops'] }}</span>
                @include('_partials.sharing.select', ['value' => $copy['week'], 'focused' => true])
                <div class="{{ $window }} flex flex-col p-1">
                    @foreach ($expiry['options'] as $option)
                        <div class="flex items-center gap-2.5 rounded-md p-2 text-base {{ $loop->first ? 'bg-hover' : '' }}">
                            <span class="flex-1 {{ $loop->first ? 'font-medium' : '' }}">{{ $option['label'] }}</span>
                            <span class="{{ $stamp }}">{{ $option['date'] }}</span>
                            {{-- The tick's width is kept on every row, so the
                                 dates line up. --}}
                            <span class="w-4 flex-none">
                                @if ($loop->first)
                                    @include('_partials.icon', ['name' => 'check', 'size' => 16])
                                @endif
                            </span>
                        </div>
                    @endforeach
                    <div class="my-1 border-t border-border"></div>
                    <div class="p-2 text-base">{{ $expiry['forever'] }}</div>
                </div>
            </div>

            <div class="{{ $window }} flex w-full max-w-[340px] flex-col gap-1.5 self-end p-4">
                <span class="text-small font-medium">
                    {{ $copy['password'] }}
                    <span class="font-normal text-text-muted">{{ $copy['optional'] }}</span>
                </span>
                <span class="rounded-md border border-border px-2.5 py-2 text-base tracking-[0.2em]">••••••••••</span>
                <span class="{{ $stamp }}">{{ $expiry['hint'] }}</span>
            </div>
        </div>

        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $expiry['title'] }}</h2>
            <p class="{{ $closing }}">{{ $expiry['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $expiry['body'] }}</p>
        </div>
    </div>
</section>
