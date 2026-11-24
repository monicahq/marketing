@php
    $end = $copy['closing'];

    // One dot per kind of record, in the organize section's colours.
    $dots = ['bg-identity-1', 'bg-identity-6', 'bg-identity-3', 'bg-identity-5', 'bg-identity-2', 'bg-identity-4'];
@endphp

<section class="border-t border-border px-4 py-24 md:px-6 lg:py-30">
    <div class="mx-auto flex max-w-[760px] flex-col items-center gap-5 text-center">
        <span aria-hidden="true" class="flex gap-1.5">
            @foreach ($dots as $dot)
                <span class="size-2.5 rounded-full {{ $dot }}"></span>
            @endforeach
        </span>
        <span class="{{ $eyebrow }}">{{ $end['eyebrow'] }}</span>
        <h2 class="{{ $title }}">{{ $end['title'] }}</h2>
        <p class="{{ $paragraph }}">{{ $end['body'] }}</p>
        <p class="{{ $closing }}">{{ $end['lead'] }}</p>
        <div class="flex flex-wrap justify-center gap-2.5 pt-2">
            <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $end['cta'] }}</a>
            <a href="{{ $page->route('personalCrm') }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $end['crm'] }}</a>
        </div>
        <p class="{{ $note }}">{{ $end['note'] }}</p>
    </div>
</section>
