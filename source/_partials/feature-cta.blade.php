{{-- The closing call to action on a feature page: a heading, a sentence and
     the button that opens an account, on a tinted panel.

     @include('_partials.feature-cta', ['cta' => $copy['cta']]) --}}
<section class="px-4 py-24 md:px-6 lg:py-30">
    <div class="mx-auto w-full max-w-marketing">
        <div class="flex flex-col items-center gap-5 rounded-lg bg-identity-2/14 px-6 py-12 text-center md:py-22">
            <h2 class="max-w-[640px] text-display-section font-semibold text-balance">{{ $cta['title'] }}</h2>
            <p class="max-w-[560px] text-copy-lg text-text-soft text-pretty">{{ $cta['body'] }}</p>
            <div class="pt-2">
                <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $cta['button'] }}</a>
            </div>
        </div>
    </div>
</section>
