@php
    $copy = $page->t('home.awards');

    // The badges as their issuers drew them. Each one is shown 52px tall,
    // and the files are about twice that, for sharp edges on a dense screen.
    $badges = [
        ['src' => '/assets/images/awards/award-github.svg', 'alt' => $copy['github']],
        ['src' => '/assets/images/awards/hacker-news.svg', 'alt' => $copy['hn']],
        ['src' => '/assets/images/awards/product-hunt.svg', 'alt' => $copy['ph']],
    ];
@endphp

<section aria-label="{{ $copy['label'] }}" class="bg-ground-sage px-4 pb-24 md:px-6">
    <div class="mx-auto flex max-w-page flex-col items-center gap-6">
        <span class="text-caption font-medium tracking-[0.08em] text-ground-sage-ink uppercase">{{ $copy['label'] }}</span>
        <div class="flex flex-wrap justify-center gap-x-5 gap-y-4">
            @foreach ($badges as $badge)
                @php $size = $page->imageSize($badge['src']); @endphp
                <img
                    src="{{ $badge['src'] }}"
                    alt="{{ $badge['alt'] }}"
                    width="{{ $size['width'] }}"
                    height="{{ $size['height'] }}"
                    loading="lazy"
                    decoding="async"
                    class="block h-13 w-auto"
                >
            @endforeach
        </div>
    </div>
</section>
