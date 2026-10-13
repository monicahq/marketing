@php
    $habit = $copy['habit'];

    // Who each repeating reminder is about, in the order of `rows` in `lang/`.
    $names = ['Phoebe Buffay', 'Rachel Green'];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $habit['title'] }}</h2>
            <p class="{{ $closing }}">{{ $habit['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $habit['body'] }}</p>
        </div>

        {{-- Two repeating reminders, and the menu that picks the rhythm. --}}
        <div role="img" aria-label="{{ $habit['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-7/14 p-5 md:p-10">
            <div class="{{ $window }} divide-y divide-border-subtle">
                @foreach ($habit['rows'] as $i => $row)
                    <div class="flex items-center gap-3.5 px-4.5 py-4">
                        @include('_partials.avatar-initials', ['name' => $names[$i], 'size' => 36])
                        <div class="flex min-w-0 flex-col gap-1">
                            <span class="text-body font-semibold">{{ $row['text'] }}</span>
                            <span class="{{ $stamp }}">{{ $row['detail'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="flex w-full max-w-65 flex-col self-end rounded-lg border border-border bg-canvas p-1.5 text-base shadow-pop">
                <span class="px-2.5 py-2 text-xs text-text-muted">{{ $copy['repeats'] }}</span>
                @foreach ($habit['options'] as $o => $option)
                    @if ($o === $habit['chosen'])
                        <span class="flex items-center justify-between rounded-md bg-hover px-2.5 py-2 font-medium">
                            {{ $option }}
                            @include('_partials.icon', ['name' => 'check', 'size' => 14])
                        </span>
                    @else
                        <span class="px-2.5 py-2">{{ $option }}</span>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
