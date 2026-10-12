@php
    $copy = $page->t('home.awards');

    // The badges as their issuers drew them. They do not share a shape: the
    // GitHub one is 3:1 where the other two are 5:1, so at one common height
    // it reads as the small one. Each carries its own height instead, chosen
    // so the three look like a set. Literal classes, for Tailwind's scanner.
    $badges = [
        ['src' => '/assets/images/awards/award-github.webp', 'alt' => $copy['github'], 'height' => 'h-18'],
        ['src' => '/assets/images/awards/hacker-news.svg', 'alt' => $copy['hn'], 'height' => 'h-13'],
        ['src' => '/assets/images/awards/product-hunt.svg', 'alt' => $copy['ph'], 'height' => 'h-13'],
    ];
@endphp

<section aria-label="{{ $copy['label'] }}" class="bg-ground-sage px-4 pb-24 md:px-6">
    <div class="mx-auto flex max-w-page flex-col items-center gap-6">
        <span class="text-caption font-medium tracking-[0.08em] text-ground-sage-ink uppercase">{{ $copy['label'] }}</span>
        <div class="flex flex-wrap items-center justify-center gap-x-5 gap-y-4">
            @foreach ($badges as $badge)
                @php $size = $page->imageSize($badge['src']); @endphp
                <img
                    src="{{ $badge['src'] }}"
                    alt="{{ $badge['alt'] }}"
                    width="{{ $size['width'] }}"
                    height="{{ $size['height'] }}"
                    loading="lazy"
                    decoding="async"
                    class="block w-auto {{ $badge['height'] }}"
                >
            @endforeach
        </div>
    </div>
</section>
