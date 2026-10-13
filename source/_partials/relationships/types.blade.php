@php($types = $copy['types'])

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <div class="flex flex-col gap-4">
                <h2 class="{{ $title }}">{{ $types['title'] }}</h2>
                <p class="{{ $closing }}">{{ $types['lead'] }}</p>
            </div>
            <div class="flex flex-col gap-4">
                @foreach ($types['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
            </div>
        </div>

        {{-- The relationship types, and Roommate being edited. --}}
        <div role="img" aria-label="{{ $types['label'] }}" class="grid items-start gap-6 rounded-lg bg-identity-1/14 p-4 md:p-12 lg:grid-cols-2">
            <div class="{{ $window }} flex flex-col gap-4 p-5 md:p-6">
                <div class="flex flex-wrap items-center justify-between gap-3">
                    <span class="text-title font-semibold">{{ $types['heading'] }}</span>
                    <span class="{{ $button }} mn-btn-primary">{{ $types['add'] }}</span>
                </div>
                @foreach ($types['categories'] as $category)
                    <div class="flex flex-wrap items-baseline gap-x-2.5 {{ $loop->first ? '' : 'pt-1' }}">
                        <span class="text-copy font-semibold">{{ $category['name'] }}</span>
                        <span class="text-small text-text-muted">{{ $category['note'] }}</span>
                    </div>
                    <div class="divide-y divide-border overflow-hidden rounded-lg border border-border">
                        @foreach ($category['types'] as $type)
                            {{-- Roommate, the second of the first category, is the one being edited. --}}
                            <div class="flex flex-wrap items-center gap-2.5 px-3.5 py-3 {{ $loop->parent->first && $loop->index === 1 ? 'bg-hover' : '' }}">
                                <span class="text-text-disabled">@include('_partials.icon', ['name' => 'grip', 'size' => 12])</span>
                                <span class="text-body font-semibold">{{ $type['name'] }}</span>
                                <span class="min-w-0 flex-1 text-small text-text-muted">{{ $type['pair'] }}</span>
                                <span class="mn-badge mn-badge-neutral">{{ $type['badge'] }}</span>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>

            <div class="{{ $window }} flex flex-col gap-3.5 p-5 md:p-6">
                <span class="text-copy font-semibold">{{ $types['reads'] }}</span>
                @foreach ($types['options'] as $option)
                    @include('_partials.relationships.choice', ['option' => $option, 'selected' => $loop->first])
                @endforeach
                @include('_partials.reminders.field', ['label' => $types['roleLabel'], 'value' => $types['role'], 'focused' => true])
                <div class="flex flex-col gap-1.5 rounded-lg border border-border bg-surface-subtle px-4 py-3.5 text-body">
                    @foreach ($types['sentences'] as $sentence)
                        <span>{{ $sentence }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
