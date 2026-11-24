@php($end = $copy['closing'])

<section class="border-t border-border px-4 py-24 md:px-6 lg:py-30">
    <div class="mx-auto flex max-w-[640px] flex-col items-center gap-4.5 text-center">
        <h2 class="{{ $title }}">{{ $end['title'] }}</h2>
        <p class="{{ $paragraph }}">{{ $end['body'] }}</p>
        <p class="{{ $closing }}">{{ $end['lead'] }}</p>
        <div class="flex flex-wrap justify-center gap-2 pt-2">
            <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $end['cta'] }}</a>
            <a href="{{ $page->links['selfHostingGuide'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $end['selfHosting'] }}</a>
        </div>
        <p class="{{ $note }}">{{ $end['note'] }}</p>
    </div>
</section>
