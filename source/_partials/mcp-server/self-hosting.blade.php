@php
    $selfHosting = $copy['selfHosting'];
    $server = '/assets/images/mcp/server.webp';
    $serverSize = $page->imageSize($server);
@endphp

{{-- The one dark band on the page, in both themes: a nested `.dark` turns
     the design system's tokens dark inside it, as the pricing page's dark
     panels do. --}}
<section class="dark bg-canvas px-4 py-section-sm text-text md:px-6 lg:py-section">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex flex-col gap-5">
            <h2 class="{{ $title }}">{{ $selfHosting['title'] }}</h2>
            @foreach ($selfHosting['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
            <div class="pt-2">
                <a href="{{ $page->links['selfHostingGuide'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $selfHosting['cta'] }}</a>
            </div>
        </div>

        {{-- The panda looking after its own server, beside its shelf of
             notebooks. One picture: the band is dark in both themes.
             Decorative, because the heading says it. --}}
        <img
            src="{{ $server }}"
            srcset="{{ $server }} 1x, {{ str_replace('.webp', '@2x.webp', $server) }} 2x"
            alt=""
            width="{{ $serverSize['width'] }}"
            height="{{ $serverSize['height'] }}"
            loading="lazy"
            decoding="async"
            class="mx-auto block h-auto w-full max-w-[560px]"
        >
    </div>
</section>
