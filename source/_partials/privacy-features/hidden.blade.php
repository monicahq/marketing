@php($hidden = $copy['hidden'])

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $hidden['title'] }}</h2>
            <div class="flex flex-col gap-4">
                <p class="{{ $closing }}">{{ $hidden['lead'] }}</p>
                @foreach ($hidden['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
            </div>
        </div>

        {{-- Marking the health note sensitive, and the contact list that will
             not take it as a column. --}}
        <div role="img" aria-label="{{ $hidden['label'] }}" class="grid items-start gap-6 rounded-lg bg-identity-3/14 p-4 md:p-12 lg:grid-cols-2">
            <div class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    <span class="text-copy font-semibold">{{ $hidden['edit'] }}</span>
                </div>
                <div class="flex flex-col gap-3.5 p-4">
                    @include('_partials.drawn-field', ['label' => $hidden['fieldLabel'], 'value' => $copy['healthNote']])
                    <div class="flex items-start gap-2.5 rounded-md border border-border p-3">
                        <span class="{{ $check }} mt-px bg-primary text-text-inverse">
                            @include('_partials.icon', ['name' => 'check', 'size' => 12])
                        </span>
                        <span class="flex flex-col gap-1">
                            <span class="text-base font-medium">{{ $hidden['mark'] }}</span>
                            <span class="{{ $stamp }} text-pretty">{{ $hidden['markBody'] }}</span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="{{ $window }}">
                <div class="grid grid-cols-[minmax(0,1.4fr)_minmax(0,1fr)] border-b border-border bg-surface-subtle">
                    <span class="{{ $eyebrow }} px-4 py-2.5 text-text-muted">{{ $hidden['name'] }}</span>
                    <span class="{{ $eyebrow }} px-4 py-2.5 text-text-muted">{{ $copy['phone'] }}</span>
                </div>
                @foreach ([['Rachel Green', $phone], ['Ross Geller', '+1 212 555 0119']] as [$name, $number])
                    <div class="grid grid-cols-[minmax(0,1.4fr)_minmax(0,1fr)] items-center border-b border-border">
                        <span class="flex min-w-0 items-center gap-2.5 px-4 py-2.5 text-base font-semibold">
                            @include('_partials.avatar-initials', ['name' => $name, 'size' => 24])
                            <span class="truncate">{{ $name }}</span>
                        </span>
                        <span class="px-4 py-2.5 text-base">{{ $number }}</span>
                    </div>
                @endforeach
                <div class="flex gap-2 px-4 py-2.5 {{ $stamp }}">
                    <span class="flex-none">@include('_partials.icon', ['name' => 'info', 'size' => 15])</span>
                    <span class="text-pretty">{{ $hidden['column'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
