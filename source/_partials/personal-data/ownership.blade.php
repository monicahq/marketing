@php
    $ownership = $copy['ownership'];
    $archive = '/assets/images/personal-data/archive.webp';
    $archiveSize = $page->imageSize($archive);

    // Per card: its glyph and its identity colour.
    $looks = [
        ['icon' => 'file', 'tile' => 'bg-identity-2/25 text-identity-2'],
        ['icon' => 'device', 'tile' => 'bg-identity-6/25 text-identity-6'],
        ['icon' => 'profile', 'tile' => 'bg-identity-7/25 text-identity-7'],
    ];
@endphp

{{-- The one dark band on the page, in both themes: a nested `.dark` turns
     the design system's tokens dark inside it, as the pricing page's dark
     panels do. --}}
<section class="dark bg-canvas px-4 py-section-sm text-text md:px-6 lg:py-section">
    <div class="{{ $container }} flex flex-col gap-16">
        <div class="{{ $split }}">
            <div class="flex flex-col gap-5">
                <span class="{{ $eyebrow }}">{{ $ownership['eyebrow'] }}</span>
                <h2 class="{{ $title }}">{{ $ownership['title'] }}</h2>
                <p class="text-lede text-text-soft text-pretty">{{ $ownership['lead'] }}</p>
                @foreach ($ownership['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
                <a href="{{ $page->links['github'] }}" class="inline-flex items-center gap-1.5 text-copy font-medium">{{ $ownership['github'] }}@include('_partials.icon', ['name' => 'arrow-right', 'size' => 14])</a>
            </div>

            {{-- The panda reading in its archive. One picture, not two: the
                 band is dark in both themes, so the night drawing is the only
                 one it needs. Decorative, because the heading says it. --}}
            <img
                src="{{ $archive }}"
                srcset="{{ $archive }} 1x, {{ str_replace('.webp', '@2x.webp', $archive) }} 2x"
                alt=""
                width="{{ $archiveSize['width'] }}"
                height="{{ $archiveSize['height'] }}"
                loading="lazy"
                decoding="async"
                class="mx-auto block h-auto w-full max-w-[560px]"
            >
        </div>

        <div class="grid gap-px overflow-hidden rounded-lg border border-border bg-border md:grid-cols-3">
            @foreach ($ownership['items'] as $i => $item)
                <div class="flex flex-col gap-2.5 bg-canvas p-7">
                    <span class="grid size-9 place-items-center rounded-lg {{ $looks[$i]['tile'] }}">@include('_partials.icon', ['name' => $looks[$i]['icon'], 'size' => 18])</span>
                    <h3 class="pt-1.5 text-copy font-semibold">{{ $item['title'] }}</h3>
                    <p class="text-body text-text-secondary text-pretty">{{ $item['body'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
