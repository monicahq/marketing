@php($compare = $copy['compare'])

<section class="{{ $section }} pb-section-sm lg:pb-section">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="flex max-w-[680px] flex-col gap-4">
            <h2 class="{{ $title }}">{{ $compare['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $compare['lead'] }}</p>
        </div>

        <div class="grid gap-6 lg:grid-cols-3">
            @foreach ($compare['items'] as $item)
                {{-- Monica's own column is the last, set apart by its border. --}}
                <div class="flex flex-col gap-3 rounded-lg border p-6 {{ $loop->last ? 'border-border-strong bg-canvas shadow-panel' : 'border-border bg-surface-subtle' }}">
                    <h3 class="text-copy font-semibold">{{ $item['title'] }}</h3>
                    <p class="text-body text-text-secondary text-pretty">{{ $item['body'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="mn-notice mn-notice-info">
            <span class="pt-0.5 text-text-muted">@include('_partials.icon', ['name' => 'info', 'size' => 16])</span>
            <p class="text-body text-text-secondary text-pretty">{{ $compare['notice'] }}</p>
        </div>
    </div>
</section>
