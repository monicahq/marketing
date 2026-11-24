@php
    $team = $copy['team'];

    // Each member's picture, by day and by night, in the order of
    // `sales.team.members` in lang/: assets/images/sales/<name>-day.webp and
    // -night.webp, each with an @2x copy. All six are 3:2, so the three cards
    // keep one height.
    $pictures = ['head', 'ae', 'bd'];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-10">
        <div class="flex max-w-[640px] flex-col gap-3">
            <h2 class="{{ $title }}">{{ $team['title'] }}</h2>
            <p class="{{ $lede }}">{{ $team['lede'] }}</p>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($team['members'] as $member)
                <article class="{{ $card }} flex flex-col overflow-hidden">
                    {{-- Lazy, both of them: the team is below the fold. Two
                         images rather than a <picture>, so the night one
                         follows the theme button. --}}
                    <div class="border-b border-border">
                        @foreach (['day' => 'block dark:hidden', 'night' => 'hidden dark:block'] as $time => $visibility)
                            @php
                                $src = "/assets/images/sales/{$pictures[$loop->parent->index]}-$time.webp";
                                $size = $page->imageSize($src);
                            @endphp
                            <img
                                src="{{ $src }}"
                                srcset="{{ $src }} 1x, {{ str_replace('.webp', '@2x.webp', $src) }} 2x"
                                alt="{{ $member['art'] }}"
                                width="{{ $size['width'] }}"
                                height="{{ $size['height'] }}"
                                loading="lazy"
                                decoding="async"
                                class="h-auto w-full {{ $visibility }}"
                            >
                        @endforeach
                    </div>
                    <div class="flex flex-col gap-1 px-5 pt-4 pb-5">
                        <h3 class="text-copy font-semibold text-text">{{ $member['role'] }}</h3>
                        <p class="text-body text-text-secondary">{{ $member['description'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>

        <p class="{{ $note }}">{{ $team['note'] }}</p>
    </div>
</section>
