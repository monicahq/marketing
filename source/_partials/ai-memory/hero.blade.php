@php($hero = $copy['hero'])

{{-- The design keeps a place under the headline for a panda illustration
     that has not been drawn yet. Until it is, the headline stands alone
     and the first picture on the page is the conversation in `how`. --}}
<section class="px-4 pt-22 md:px-6">
    <div class="{{ $container }}">
        <div class="mx-auto flex max-w-[760px] flex-col items-center gap-6 text-center">
            <span class="{{ $eyebrow }} text-text-muted">{{ $hero['eyebrow'] }}</span>
            <h1 class="text-display-hero font-semibold text-balance">{{ $hero['title'] }}</h1>
            <p class="text-lede font-medium text-text-soft text-balance">{{ $hero['lede'] }}</p>
            <p class="max-w-[620px] text-copy-lg text-text-secondary text-pretty">{{ $hero['body'] }}</p>
            <div class="flex flex-wrap justify-center gap-2.5 pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $hero['cta'] }}</a>
                <a href="#how-it-works" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $hero['how'] }}</a>
            </div>
            <p class="{{ $note }}">{{ $hero['note'] }}</p>
        </div>
    </div>
</section>
