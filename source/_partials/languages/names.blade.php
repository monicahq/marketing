@php($names = $copy['names'])

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="grid items-start gap-x-14 gap-y-6 lg:grid-cols-2">
            <h2 class="{{ $title }}">{{ $names['title'] }}</h2>
            <div class="flex flex-col gap-4">
                <p class="{{ $closing }}">{{ $names['lead'] }}</p>
                @foreach ($names['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
            </div>
        </div>

        {{-- Two names that are not written the same way: Ross with his title,
             and Ji-woo, family name first. --}}
        <div role="img" aria-label="{{ $names['label'] }}" class="grid items-start gap-6 rounded-lg bg-identity-3/14 p-4 md:p-12 lg:grid-cols-2">
            <div class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    @include('_partials.avatar-initials', ['name' => 'Ross Geller', 'size' => 28])
                    <span class="text-base font-semibold">{{ $names['prefixValue'] }} Ross Geller</span>
                </div>
                <div class="grid grid-cols-2 gap-3.5 p-4">
                    @include('_partials.drawn-field', ['label' => $names['prefix'], 'optional' => $names['optional'], 'value' => $names['prefixValue']])
                    @include('_partials.languages.placeholder-field', ['label' => $names['suffix'], 'optional' => $names['optional'], 'value' => $names['suffixPlaceholder']])
                    @include('_partials.drawn-field', ['label' => $names['first'], 'value' => 'Ross'])
                    @include('_partials.drawn-field', ['label' => $names['last'], 'value' => 'Geller'])
                    <div class="col-span-2">
                        @include('_partials.drawn-field', ['label' => $names['readsAs'], 'optional' => $names['optional'], 'value' => $names['follow'], 'select' => true])
                    </div>
                </div>
            </div>

            <div class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    @include('_partials.avatar-initials', ['name' => 'Kim Jiwoo', 'size' => 28])
                    <span class="text-base font-semibold">{{ $latin }}</span>
                </div>
                <div class="grid grid-cols-2 gap-3.5 p-4">
                    @include('_partials.drawn-field', ['label' => $names['first'], 'value' => 'Ji-woo'])
                    @include('_partials.drawn-field', ['label' => $names['last'], 'value' => 'Kim'])
                    <div class="col-span-2">
                        @include('_partials.drawn-field', ['label' => $names['readsAs'], 'optional' => $names['optional'], 'value' => $names['familyFirst'], 'select' => true, 'focused' => true])
                    </div>
                    @include('_partials.drawn-field', ['label' => $names['nickname'], 'optional' => $names['optional'], 'value' => 'Jiji'])
                    @include('_partials.drawn-field', ['label' => $names['maiden'], 'optional' => $names['optional'], 'value' => ''])
                </div>
            </div>
        </div>
    </div>
</section>
