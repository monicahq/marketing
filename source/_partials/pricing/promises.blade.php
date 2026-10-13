@php
    // Each promise's glyph, kept here so a translation cannot rename one.
    $icons = ['people' => 'people', 'export' => 'file', 'openSource' => 'key'];
@endphp

<section class="px-4 pt-28 md:px-6">
    <div class="{{ $container }} grid grid-cols-[repeat(auto-fit,minmax(min(100%,240px),1fr))] gap-4">
        @foreach ($copy['promises'] as $key => $promise)
            <div class="flex flex-col gap-2.5 rounded-lg border border-border bg-surface-subtle p-6">
                <span class="grid size-8 place-items-center rounded-md border border-border bg-canvas text-text">
                    @include('_partials.icon', ['name' => $icons[$key], 'size' => 16])
                </span>
                <h3 class="pt-1.5 text-copy font-semibold text-text">{{ $promise['title'] }}</h3>
                <p class="text-body text-text-secondary text-pretty">{{ $promise['body'] }}</p>
            </div>
        @endforeach
    </div>
</section>
