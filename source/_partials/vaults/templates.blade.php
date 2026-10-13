@php
    $templates = $copy['templates'];

    // Whose page each card in `cards` is.
    $owners = ['Rachel Green', 'Marcel Duval'];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- A friend and a colleague, each from a vault with its own default
             template. --}}
        <div role="img" aria-label="{{ $templates['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-6/14 p-5 max-lg:order-last md:p-10">
            @foreach ($templates['cards'] as $c => $card)
                <div class="{{ $window }}">
                    <div class="flex items-center gap-3 border-b border-border px-4.5 py-3.5">
                        @include('_partials.avatar-initials', ['name' => $owners[$c], 'size' => 32])
                        <div class="flex min-w-0 flex-1 flex-col gap-px">
                            <span class="text-copy font-semibold">{{ $owners[$c] }}</span>
                            <span class="{{ $stamp }}">{{ $card['template'] }}</span>
                        </div>
                    </div>
                    <dl class="flex flex-col gap-3 px-4.5 py-3.5">
                        @foreach ($card['fields'] as $field)
                            <div class="flex flex-col gap-1">
                                <dt class="{{ $eyebrow }} text-text-muted">{{ $field['label'] }}</dt>
                                <dd class="text-body">{{ $field['value'] }}</dd>
                            </div>
                        @endforeach
                    </dl>
                </div>
            @endforeach

            <div class="{{ $window }} flex w-full max-w-[320px] flex-col gap-1.5 self-end p-4">
                <span class="text-small font-medium">{{ $templates['defaultFor'] }}</span>
                <span class="flex items-center justify-between gap-2 rounded-md border border-border px-2.5 py-2 text-base">
                    {{ $templates['choice'] }}
                    @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14])
                </span>
            </div>
        </div>

        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $templates['title'] }}</h2>
            <p class="{{ $closing }}">{{ $templates['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $templates['body'] }}</p>
        </div>
    </div>
</section>
