@php
    $display = $copy['display'];
    $ways = [
        [$hangul, 'ko', $display['written'], false],
        [$latin, null, $display['transliteration'], true],
        [$copy['forms']['pronunciationValue'], null, $copy['forms']['pronunciation'], false],
    ];
    $where = 'text-caption font-semibold tracking-[0.06em] text-text-muted uppercase';
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $display['title'] }}</h2>
            <div class="flex flex-col gap-4">
                <p class="{{ $closing }}">{{ $display['lead'] }}</p>
                <p class="{{ $paragraph }}">{{ $display['body'] }}</p>
            </div>
        </div>

        {{-- The transliteration chosen as the display name, and the three
             places it then appears. --}}
        <div role="img" aria-label="{{ $display['label'] }}" class="grid items-center gap-6 rounded-lg bg-identity-7/14 p-4 md:p-12 lg:grid-cols-2">
            <div class="{{ $window }}">
                @foreach ($ways as [$name, $nameLang, $kind, $chosen])
                    <div class="{{ $row }} {{ $chosen ? 'bg-surface-subtle' : '' }}">
                        <span class="size-4 flex-none rounded-full {{ $chosen ? 'border-5 border-text' : 'border border-border-strong' }}"></span>
                        <span class="flex min-w-0 flex-1 flex-col gap-0.5">
                            <span class="flex flex-wrap items-center gap-2">
                                <span @if ($nameLang) lang="{{ $nameLang }}" @endif class="text-base font-semibold">{{ $name }}</span>
                                @if ($chosen)
                                    <span class="mn-badge mn-badge-neutral">{{ $display['badge'] }}</span>
                                @endif
                            </span>
                            <span class="{{ $stamp }}">{{ $kind }}</span>
                        </span>
                    </div>
                @endforeach
            </div>

            <div class="flex flex-col gap-3">
                <div class="{{ $window }} flex items-center gap-3 px-3.5 py-2.5">
                    @include('_partials.avatar-initials', ['name' => 'Kim Jiwoo', 'size' => 30])
                    <span class="flex-1 text-base font-semibold">{{ $latin }}</span>
                    <span class="{{ $where }}">{{ $display['list'] }}</span>
                </div>
                <div class="{{ $window }} flex items-center gap-3 px-3.5 py-2.5">
                    <span class="flex-1 text-heading-sm font-semibold">{{ $latin }}</span>
                    <span class="{{ $where }}">{{ $display['pageTitle'] }}</span>
                </div>
                <div class="{{ $window }} flex items-center gap-3 px-3.5 py-2.5">
                    <span class="flex-none">@include('_partials.icon', ['name' => 'reminder', 'size' => 16])</span>
                    <span class="min-w-0 flex-1 text-base">{{ str_replace(':name', $latin, $display['birthday']) }}</span>
                    <span class="{{ $where }}">{{ $display['notification'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
