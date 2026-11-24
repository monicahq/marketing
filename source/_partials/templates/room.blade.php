@php
    $room = $copy['room'];
    $sectionFields = [
        ['key' => 'cake', 'type' => 'shortText'],
        ['key' => 'cannotEat', 'type' => 'multipleChoice', 'selected' => true],
        ['key' => 'shoeSize', 'type' => 'number'],
        ['key' => 'nameDay', 'type' => 'recurringDate'],
        ['key' => 'giftIdeas', 'type' => 'repeater'],
    ];
    $repeated = [
        ['key' => 'idea', 'type' => 'shortText'],
        ['key' => 'given', 'type' => 'checkbox'],
    ];
@endphp

<section class="px-4 pt-24 md:px-6 lg:pt-30">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $room['title'] }}</h2>
            <div class="flex flex-col gap-4">
                @foreach ($room['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
                <p class="{{ $closing }}">{{ $room['close'] }}</p>
            </div>
        </div>

        {{-- The template editor, with one field open. --}}
        <div class="rounded-lg bg-identity-5/14 p-4 md:p-10 lg:p-12">
            <div role="img" aria-label="{{ $room['label'] }}" class="mn-pop flex flex-col gap-6 p-5 md:p-8">
                <div class="flex flex-wrap items-start justify-between gap-4">
                    <div class="flex flex-col gap-1.5">
                        <div class="flex flex-wrap items-center gap-3">
                            <span class="text-heading font-semibold">{{ $copy['friends'] }}</span>
                            <span class="mn-badge mn-badge-warning">{{ $copy['draft'] }}</span>
                            <span class="font-mono text-mono text-text-muted">{{ $room['version'] }}</span>
                        </div>
                        <span class="text-base text-text-muted">{{ $room['saved'] }}</span>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="mn-btn mn-btn-secondary mn-btn-small pointer-events-none">{{ $room['import'] }}</span>
                        <span class="mn-btn mn-btn-primary mn-btn-small pointer-events-none">{{ $copy['publish'] }}</span>
                    </div>
                </div>

                <div class="mn-tabs pointer-events-none">
                    @foreach ($room['pages'] as $p => $tabPage)
                        <span class="mn-tab" @if ($p === 1) aria-selected="true" @endif>
                            {{ $tabPage['name'] }}
                            <span class="mn-tab-count">{{ $tabPage['count'] }}</span>
                        </span>
                    @endforeach
                    <span class="mn-tab text-text-secondary">
                        @include('_partials.icon', ['name' => 'plus', 'size' => 15])
                        {{ $room['addPage'] }}
                    </span>
                </div>

                <div class="grid items-start gap-5 lg:grid-cols-2">
                    <div class="{{ $card }}">
                        <div class="mn-panel-header">
                            <span class="grid size-7 flex-none place-items-center rounded-md bg-identity-5/14 text-identity-5">
                                @include('_partials.icon', ['name' => 'heart', 'size' => 16])
                            </span>
                            <span class="min-w-0 flex-1 text-copy font-semibold">{{ $copy['section'] }}</span>
                            <span class="font-mono text-mono whitespace-nowrap text-text-muted">{{ strtr($copy['fieldCount'], [':count' => 6]) }}</span>
                        </div>
                        <div class="flex flex-col py-1">
                            @foreach ($sectionFields as $field)
                                @include('_partials.templates.builder-field', [
                                    'label' => $fields[$field['key']],
                                    'type' => $types[$field['type']],
                                    'selected' => $field['selected'] ?? false,
                                ])
                            @endforeach

                            {{-- The repeater's own fields, one step in. --}}
                            <div class="mr-4 mb-2 ml-6 flex flex-col border-l border-border pl-4">
                                @foreach ($repeated as $field)
                                    <div class="flex items-center justify-between gap-3 py-2">
                                        <span class="text-small font-semibold">{{ $fields[$field['key']] }}</span>
                                        <span class="{{ $badge }}">{{ $types[$field['type']] }}</span>
                                    </div>
                                @endforeach
                            </div>

                            <div class="flex items-center gap-2 px-4 pt-2.5 pb-3.5 text-base font-medium text-text-secondary">
                                @include('_partials.icon', ['name' => 'plus', 'size' => 16])
                                {{ $copy['addField'] }}
                            </div>
                        </div>
                    </div>

                    <div class="{{ $card }}">
                        <div class="mn-panel-header text-copy font-semibold">{{ $room['field'] }}</div>
                        <div class="flex flex-col gap-4 p-4">
                            @include('_partials.drawn-field', ['label' => $room['name'], 'value' => $fields['cannotEat'], 'focused' => true])
                            @include('_partials.drawn-field', ['label' => $room['type'], 'value' => $types['multipleChoice'], 'select' => true])
                            <div class="mn-field">
                                <span class="mn-label">{{ $room['choices'] }}</span>
                                <span class="flex flex-wrap gap-1.5">
                                    @foreach ($room['choiceList'] as $choice)
                                        <span class="rounded-full border border-border px-2.5 py-0.75 text-xs font-medium">{{ $choice }}</span>
                                    @endforeach
                                    <span class="rounded-full border border-dashed border-border-strong px-2.5 py-0.75 text-xs font-medium text-text-muted">{{ $room['addChoice'] }}</span>
                                </span>
                            </div>
                            <span class="text-small text-text-muted">{{ $room['note'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
