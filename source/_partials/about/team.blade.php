{{-- The two of us, one card each, with three small facts under a hairline. --}}
@php
    $team = $copy['team'];
@endphp

<section id="team" class="{{ $section }} scroll-mt-6">
    <div class="{{ $container }} flex flex-col gap-6">
        <div class="flex flex-col gap-1.5">
            <h2 class="{{ $heading }}">{{ $team['title'] }}</h2>
            <p class="{{ $lede }}">{{ $team['lede'] }}</p>
        </div>

        <div class="grid gap-4 md:grid-cols-2">
            @foreach ($team['people'] as $person)
                <div class="{{ $card }} flex flex-col gap-4 p-6">
                    <div class="flex items-center gap-3">
                        @include('_partials.about.photo', ['src' => $photos[$loop->index], 'class' => 'size-11'])
                        <div class="flex flex-col gap-0.5">
                            <span class="text-copy font-semibold text-text">{{ $person['name'] }}</span>
                            <span class="text-xs text-text-muted">{{ $person['where'] }}</span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <span class="text-copy font-semibold text-text-soft">{{ $person['role'] }}</span>
                        <p class="{{ $paragraph }}">{{ $person['bio'] }}</p>
                    </div>

                    <dl class="mt-auto flex flex-col gap-2 border-t border-border pt-3">
                        @foreach ($person['facts'] as $fact)
                            <div class="flex justify-between gap-4 text-small">
                                <dt class="text-text-muted">{{ $fact['k'] }}</dt>
                                <dd class="text-right text-text-soft">{{ $fact['v'] }}</dd>
                            </div>
                        @endforeach
                    </dl>
                </div>
            @endforeach
        </div>
    </div>
</section>
