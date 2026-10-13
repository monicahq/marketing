@php
    $copy = $page->t('home.hero');

    // Demonstration people, from Friends like everyone on this page. They keep
    // their names in every language.
    $faces = ['Rachel Green', 'Ross Geller', 'Chandler Bing', 'Joey Tribbiani'];
@endphp

<section class="relative z-10 px-4 pt-24 pb-14 text-center md:px-6">
    <div class="mx-auto flex max-w-[820px] flex-col items-center gap-6">
        <div class="flex items-center gap-3 rounded-full border border-border bg-canvas py-1.5 pr-3.5 pl-1.5 shadow-panel">
            <div class="flex gap-1">
                @foreach ($faces as $face)
                    @include('_partials.avatar-initials', ['name' => $face, 'size' => 26, 'class' => 'ring-2 ring-canvas'])
                @endforeach
            </div>
            <span class="text-small font-medium text-text-secondary">{{ $copy['pill'] }}</span>
        </div>

        <h1 class="text-display-hero font-semibold text-balance">{{ $copy['title'] }}</h1>
        <p class="text-lede-hero font-medium text-text-soft">{{ $copy['subtitle'] }}</p>
        <p class="max-w-[600px] text-lede-sm leading-relaxed text-text-secondary text-pretty">{{ $copy['lede'] }}</p>

        <div class="flex flex-wrap justify-center gap-2.5 pt-2">
            <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $copy['start'] }}</a>
            <a href="{{ $page->links['github'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $copy['github'] }}</a>

            {{-- The joke: there is no sales team. The tooltip says so on hover
                 and on keyboard focus alike, with no script, and it repeats
                 nothing the button needs to work: the button is still a link. --}}
            <div class="group relative">
                <a
                    href="{{ $page->links['contactSales'] }}"
                    aria-describedby="sales-joke"
                    class="mn-btn mn-btn-ghost no-underline hover:no-underline"
                >{{ $copy['sales'] }}</a>
                <div
                    id="sales-joke"
                    role="tooltip"
                    class="pointer-events-none invisible absolute top-[calc(100%+10px)] left-1/2 z-30 flex -translate-x-1/2 flex-col gap-0.5 rounded-lg border border-border bg-canvas px-3.5 py-2.5 text-left whitespace-nowrap opacity-0 shadow-pop transition-opacity duration-150 ease-standard group-focus-within:visible group-focus-within:opacity-100 group-hover:visible group-hover:opacity-100"
                >
                    <span aria-hidden="true" class="absolute -top-[5px] left-1/2 size-[9px] -translate-x-1/2 rotate-45 border-t border-l border-border bg-canvas"></span>
                    <span class="text-base font-semibold text-text">{{ $copy['salesJoke'] }}</span>
                    <span class="text-small text-text-secondary">{{ $copy['salesTruth'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
