@php($end = $copy['closing'])

{{-- The closing call to action. Not the shared feature-cta: this one offers
     two ways in, an assistant or the API, and sits on the page rather than a
     tinted panel, as the design draws it. --}}
<section class="px-4 py-24 md:px-6 lg:py-30">
    <div class="mx-auto flex max-w-[640px] flex-col items-center gap-4.5 text-center">
        <h2 class="{{ $title }}">{{ $end['title'] }}</h2>
        <p class="{{ $paragraph }}">{{ $end['body'] }}</p>
        <div class="flex flex-wrap justify-center gap-2 pt-2">
            <a href="{{ $page->links['mcp'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $end['connect'] }}</a>
            <a href="{{ $page->links['api'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $copy['explore'] }}</a>
        </div>
    </div>
</section>
