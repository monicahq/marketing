@php
    $why = $copy['why'];

    // The links set inside the third paragraph, where :explore, :docs,
    // :source, :selfHost and :hosted stand in the copy.
    $destinations = [
        'explore' => ['page' => 'home'],
        'docs' => ['external' => 'docs'],
        'source' => ['external' => 'github'],
        'selfHost' => ['external' => 'selfHostingGuide'],
        'hosted' => ['page' => 'pricing'],
    ];
    $inline = collect($destinations)->map(fn ($to, $name) => $to + ['label' => $why[$name]])->all();
@endphp

<section class="{{ $section }}">
    <div class="mx-auto flex w-full max-w-[640px] flex-col gap-5 lg:py-10">
        <h2 class="mb-3 text-display-md font-semibold text-balance">{{ $why['title'] }}</h2>

        @foreach ($why['paragraphs'] as $paragraph)
            <p class="text-copy-lg text-text-soft text-pretty">{!! $linked($paragraph, $inline) !!}</p>
        @endforeach

        {{-- The panda building software, by day and by night. Both lazy: the
             section is far below the fold. Two images rather than a
             <picture>, so the night one follows the theme button. --}}
        <div class="my-6">
            @foreach (['day' => 'block dark:hidden', 'night' => 'hidden dark:block'] as $time => $visibility)
                @php
                    $src = "/assets/images/sales/building-$time.webp";
                    $size = $page->imageSize($src);
                @endphp
                <img
                    src="{{ $src }}"
                    srcset="{{ $src }} 1x, {{ str_replace('.webp', '@2x.webp', $src) }} 2x"
                    alt="{{ $why['art'] }}"
                    width="{{ $size['width'] }}"
                    height="{{ $size['height'] }}"
                    loading="lazy"
                    decoding="async"
                    class="mx-auto h-auto w-full {{ $visibility }}"
                >
            @endforeach
        </div>

        <p class="text-copy-lg font-medium text-text text-pretty">{{ $why['closing'] }}</p>
    </div>
</section>
