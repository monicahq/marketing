@php
    $stats = [
        ['value' => $page->starCount, 'label' => $page->t('proof.starsLabel')],
        ['value' => $page->t('proof.since'), 'label' => $page->t('proof.sinceLabel')],
        ['value' => $page->t('proof.featured'), 'label' => $page->t('proof.featuredLabel')],
        ['value' => $page->t('proof.launch'), 'label' => $page->t('proof.launchLabel')],
    ];
@endphp

<section class="border-y border-border bg-surface-subtle">
    <div class="mx-auto w-full max-w-marketing px-4 py-10 md:px-8">
        <div class="grid grid-cols-[repeat(auto-fit,minmax(200px,1fr))] gap-8">
            @foreach ($stats as $stat)
                <div>
                    <div class="text-heading font-semibold">{{ $stat['value'] }}</div>
                    <div class="mt-2 font-mono text-mono text-text-muted">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
        <p class="mt-8 text-copy leading-[1.6] text-text-muted italic">{{ $page->t('proof.aside') }}</p>
    </div>
</section>
