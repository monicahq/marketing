@php($cta = $copy['cta'])

<section class="px-4 py-24 md:px-6 lg:py-30">
    <div class="{{ $container }}">
        <div class="flex flex-col items-center gap-5 rounded-lg bg-identity-2/14 px-6 py-12 text-center md:py-22">
            <h2 class="{{ $title }} max-w-[640px]">{{ $cta['title'] }}</h2>
            <p class="max-w-[560px] text-copy-lg text-text-soft text-pretty">{{ $cta['body'] }}</p>
            <div class="pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $cta['button'] }}</a>
            </div>
        </div>
    </div>
</section>
