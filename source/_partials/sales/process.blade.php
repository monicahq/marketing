@php($process = $copy['process'])

<section class="{{ $section }}">
    <div class="{{ $container }} grid items-start gap-12 lg:grid-cols-2">
        <div class="flex max-w-[440px] flex-col gap-3">
            <h2 class="{{ $title }}">{{ $process['title'] }}</h2>
            <p class="{{ $lede }}">{{ $process['lede'] }}</p>
        </div>

        <div class="flex flex-col gap-6">
            {{-- A numbered column with a rule joining each step to the next,
                 which stops at the last one. --}}
            <ol class="flex flex-col">
                @foreach ($process['steps'] as $step)
                    <li class="grid grid-cols-[44px_minmax(0,1fr)] gap-4">
                        <div class="flex flex-col items-center">
                            <span aria-hidden="true" data-md-skip class="grid size-9 flex-none place-items-center rounded-full border border-border-strong bg-canvas font-mono text-mono font-semibold text-text">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            @unless ($loop->last)
                                <span aria-hidden="true" class="w-px flex-1 bg-border"></span>
                            @endunless
                        </div>
                        <div class="flex flex-col gap-0.5 pt-1.5 pb-7">
                            <h3 class="text-copy font-semibold text-text">{{ $step['stage'] }}</h3>
                            <p class="text-body text-text-secondary text-pretty">{!! $linked($step['description'], isset($step['link']) ? ['link' => $step['link']] : []) !!}</p>
                        </div>
                    </li>
                @endforeach
            </ol>

            <p class="{{ $note }} pl-[60px]">{{ $process['note'] }}</p>
        </div>
    </div>
</section>
