@php($closing = $copy['closing'])

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col items-center gap-3 text-center">
        <h2 class="{{ $title }}">{{ $closing['title'] }}</h2>
        <p class="{{ $lede }}">{{ $closing['lede'] }}</p>

        <div class="flex flex-wrap justify-center gap-2.5 pt-4">
            <a href="{{ $page->route('home') }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $closing['explore'] }}</a>
            <a href="{{ $page->links['github'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $closing['source'] }}</a>
            <a href="{{ $page->links['selfHostingGuide'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $closing['selfHost'] }}</a>
        </div>

        <p class="mt-16 text-small text-text-muted italic">{{ $closing['credit'] }}</p>
    </div>
</section>
