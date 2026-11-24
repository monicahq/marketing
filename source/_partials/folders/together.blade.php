@php($together = $copy['together'])

<section class="border-y border-border bg-surface-subtle px-4 py-24 md:px-6 lg:py-28">
    <div class="mx-auto flex w-full max-w-[680px] flex-col items-center gap-4.5 text-center">
        <h2 class="{{ $title }}">{{ $together['title'] }}</h2>
        <p class="{{ $paragraph }}">{!! $linked($together['body'], ['note' => [$together['note'], $page->route('notes')], 'list' => [$together['list'], $page->route('lists')]]) !!}</p>
        <p class="{{ $closing }}">{{ $together['closing'] }}</p>
    </div>
</section>
