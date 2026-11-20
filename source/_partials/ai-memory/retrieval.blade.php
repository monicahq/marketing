@php($retrieval = $copy['retrieval'])

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="flex max-w-[680px] flex-col gap-4">
            <h2 class="{{ $title }}">{{ $retrieval['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $retrieval['lead'] }}</p>
        </div>

        <div class="grid gap-6 lg:grid-cols-3">
            @foreach ($retrieval['items'] as $item)
                <article class="mn-panel flex flex-col">
                    <div class="flex items-center justify-between gap-3 border-b border-border px-5 py-3.5">
                        <h3 class="text-copy font-semibold">{{ $item['title'] }}</h3>
                        <span class="mn-badge mn-badge-neutral">{{ $retrieval['badge'] }}</span>
                    </div>
                    <div class="flex flex-col gap-3 p-5">
                        <div class="{{ $quote }} flex flex-col gap-1">
                            <span class="text-caption font-semibold tracking-[0.06em] text-text-muted uppercase">{{ $retrieval['ask'] }}</span>
                            <span>{{ $item['ask'] }}</span>
                        </div>
                        <p class="text-body text-text-secondary text-pretty">{{ $item['body'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>

        <p class="{{ $note }}">{{ $retrieval['note'] }}</p>
    </div>
</section>
