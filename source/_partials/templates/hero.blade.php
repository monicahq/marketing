@php
    $hero = $copy['hero'];
    $heroFields = [
        ['key' => 'cake', 'type' => 'shortText'],
        ['key' => 'cannotEat', 'type' => 'multipleChoice'],
        ['key' => 'coffee', 'type' => 'shortText'],
        ['key' => 'shoeSize', 'type' => 'number'],
    ];
@endphp

<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[760px] flex-col items-center gap-5 text-center">
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="max-w-[620px] text-lede text-text-secondary text-pretty">{{ $hero['lede'] }}</p>
            <div class="pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
            </div>
        </div>

        {{-- A contact page and the template section behind it. One picture of
             the product, read out by its label. --}}
        <div
            role="img"
            aria-label="{{ $hero['label'] }}"
            class="mt-16 grid items-start gap-6 rounded-lg bg-identity-1/14 p-5 md:p-10 lg:grid-cols-2 lg:p-14"
        >
            <div class="{{ $window }}">
                <div class="flex items-center gap-4 px-6 pt-6">
                    @include('_partials.avatar-initials', ['name' => 'Rachel Green', 'size' => 56])
                    <div class="flex min-w-0 flex-col gap-1">
                        <span class="text-heading-sm font-semibold">Rachel Green</span>
                        <span class="text-base text-text-muted">{{ $hero['meta'] }}</span>
                    </div>
                </div>

                <div class="flex gap-6 overflow-x-auto border-b border-border px-6 pt-5 text-base font-medium">
                    @foreach ($hero['tabs'] as $t => $name)
                        <span class="{{ $tab }} {{ $t === 2 ? $tabOn : $tabOff }}">{{ $name }}</span>
                    @endforeach
                </div>

                <div class="flex flex-col gap-5 px-6 pt-5 pb-6">
                    <div>
                        <div class="pb-2 text-copy font-semibold">{{ $copy['section'] }}</div>
                        <div class="divide-y divide-border-subtle border-t border-border-subtle">
                            @foreach ($heroFields as $field)
                                @include('_partials.templates.field', [
                                    'label' => $fields[$field['key']],
                                    'value' => $hero['values'][$field['key']],
                                ])
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <div class="pb-2 text-copy font-semibold">{{ $fields['howWeMet'] }}</div>
                        <p class="border-t border-border-subtle pt-2.5 text-base text-text-soft text-pretty">{{ $hero['story'] }}</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-4 lg:pt-18">
                <span class="{{ $eyebrow }} text-identity-1">{{ $hero['behind'] }}</span>
                <div class="{{ $window }}">
                    <div class="flex items-center gap-2.5 border-b border-border px-4 py-3.5">
                        <span class="min-w-0 flex-1 text-copy font-semibold">{{ $copy['section'] }}</span>
                        <span class="font-mono text-mono whitespace-nowrap text-text-muted">{{ strtr($copy['fieldCount'], [':count' => count($heroFields)]) }}</span>
                    </div>
                    <div class="flex flex-col">
                        @foreach ($heroFields as $field)
                            @include('_partials.templates.builder-field', [
                                'label' => $fields[$field['key']],
                                'type' => $types[$field['type']],
                            ])
                        @endforeach
                        <div class="flex items-center gap-2 px-4 pt-3 pb-4 text-base font-medium text-text-secondary">
                            @include('_partials.icon', ['name' => 'plus', 'size' => 16])
                            {{ $copy['addField'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
