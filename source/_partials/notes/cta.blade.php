@php($cta = $copy['cta'])

<section class="flex flex-col items-center gap-4.5 px-6 pt-8 pb-24 text-center lg:pb-32">
    <h2 class="max-w-[640px] {{ $title }}">{{ $cta['title'] }}</h2>
    <p class="max-w-[480px] {{ $paragraph }}">{{ $cta['body'] }}</p>
    <div class="pt-1.5">
        <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $cta['button'] }}</a>
    </div>
</section>
