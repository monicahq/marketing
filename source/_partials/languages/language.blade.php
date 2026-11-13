@php
    $language = $copy['language'];

    // Each language under its own name, so it is tagged with its own language
    // tag. English carries no second label, as the design draws it.
    $choices = [
        ['English', 'en', null],
        ['Español', 'es', $language['names']['es']],
        ['Deutsch', 'de', $language['names']['de']],
        ['Français', 'fr', $language['names']['fr']],
        ['日本語', 'ja', $language['names']['ja']],
        ['한국어', 'ko', $language['names']['ko']],
        ['中文', 'zh-Hans', $language['names']['zh']],
    ];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $language['title'] }}</h2>
            <p class="{{ $closing }}">{{ $language['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $language['body'] }}</p>
        </div>

        {{-- The language setting, open, with French chosen. --}}
        <div role="img" aria-label="{{ $language['label'] }}" class="rounded-lg bg-identity-2/14 p-5 md:p-10">
            <div class="flex w-full max-w-90 flex-col gap-2">
                <span class="text-small font-medium">{{ $language['field'] }}</span>
                <span lang="fr" class="flex items-center justify-between rounded-md border border-text bg-canvas px-2.5 py-2 text-base ring-3 ring-text/20">
                    Français
                    @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14])
                </span>
                <div class="flex flex-col rounded-lg border border-border bg-canvas p-1 shadow-pop">
                    @foreach ($choices as [$native, $tag, $translated])
                        <span class="flex items-center gap-2.5 rounded-md p-2 {{ $tag === 'fr' ? 'bg-hover' : '' }}">
                            <span lang="{{ $tag }}" class="flex-1 text-base {{ $tag === 'fr' ? 'font-medium' : '' }}">{{ $native }}</span>
                            @if ($translated)
                                <span class="text-xs text-text-muted">{{ $translated }}</span>
                            @endif
                            @if ($tag === 'fr')
                                @include('_partials.icon', ['name' => 'check', 'size' => 16])
                            @endif
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
