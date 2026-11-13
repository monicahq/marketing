@php
    $fields = $copy['fields'];
    $call = $fields['call'];
    $thanksgiving = $fields['thanksgiving'];

    // Which of Thanksgiving's fields are required, and which one is being
    // edited, in the order of its `rows`.
    $required = [true, false, false];
    $editing = 2;

    $check = 'grid size-4 flex-none place-items-center rounded-xs';
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $fields['title'] }}</h2>
            <div class="flex flex-col gap-4">
                <p class="{{ $closing }}">{{ $fields['lead'] }}</p>
                @foreach ($fields['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
            </div>
        </div>

        {{-- The fields of a supplied type and of one of your own. --}}
        <div role="img" aria-label="{{ $fields['label'] }}" class="grid items-start gap-5 rounded-lg bg-identity-5/14 p-4 md:p-12 lg:grid-cols-2">
            <div class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    <span class="{{ $tile }} size-7 {{ $tiles[1] }}">
                        @include('_partials.icon', ['name' => 'device', 'size' => 15])
                    </span>
                    <span class="flex-1 text-copy font-semibold">{{ $call['name'] }}</span>
                    <span class="{{ $stamp }}">{{ $fields['count'] }}</span>
                </div>
                <div class="flex flex-col gap-2.5 px-4.5 py-3.5">
                    @foreach ($call['rows'] as $row)
                        <div class="flex items-center gap-2">
                            <span class="{{ $box }} min-w-0 flex-1 truncate">{{ $row['label'] }}</span>
                            <span class="{{ $box }} w-30 flex-none truncate text-text-secondary">{{ $row['type'] }}</span>
                        </div>
                        @isset($row['options'])
                            <div class="flex flex-wrap gap-1.5 pl-1">
                                @foreach ($row['options'] as $optionText)
                                    <span class="{{ $option }}">{{ $optionText }}</span>
                                @endforeach
                            </div>
                        @endisset
                    @endforeach
                </div>
            </div>

            <div class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    <span class="{{ $tile }} size-7 {{ $tiles[4] }}">
                        @include('_partials.icon', ['name' => 'gift', 'size' => 15])
                    </span>
                    <span class="flex-1 text-copy font-semibold">{{ $thanksgiving['name'] }}</span>
                    <span class="{{ $stamp }}">{{ $fields['count'] }}</span>
                </div>
                <div class="border-b border-border bg-surface-subtle px-4.5 py-2.5 text-small font-semibold">{{ $thanksgiving['group'] }}</div>
                <div class="flex flex-col gap-2.5 px-4.5 py-3.5">
                    @foreach ($thanksgiving['rows'] as $r => $row)
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="{{ $box }} min-w-35 flex-1 truncate {{ $r === $editing ? 'border-focus ring-3 ring-focus/20' : '' }}">{{ $row['label'] }}</span>
                            <span class="{{ $box }} w-27.5 flex-none truncate text-text-secondary">{{ $row['type'] }}</span>
                            <span class="flex items-center gap-1.5 text-small {{ $required[$r] ? '' : 'text-text-secondary' }}">
                                @if ($required[$r])
                                    <span class="{{ $check }} bg-primary text-text-inverse">
                                        @include('_partials.icon', ['name' => 'check', 'size' => 10])
                                    </span>
                                @else
                                    <span class="{{ $check }} border border-border-strong"></span>
                                @endif
                                {{ $fields['required'] }}
                            </span>
                        </div>
                        @isset($row['options'])
                            <div class="flex flex-wrap gap-1.5 pl-1">
                                @foreach ($row['options'] as $optionText)
                                    <span class="{{ $option }}">{{ $optionText }}</span>
                                @endforeach
                            </div>
                        @endisset
                    @endforeach
                </div>
                <div class="flex flex-wrap items-center justify-between gap-3 border-t border-border bg-surface-subtle px-4.5 py-3">
                    <span class="max-w-65 text-xs text-text-secondary">{{ $thanksgiving['note'] }}</span>
                    <span class="{{ $button }} mn-btn-primary">{{ $thanksgiving['save'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
