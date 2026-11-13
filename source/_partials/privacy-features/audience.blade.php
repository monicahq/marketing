@php($audience = $copy['audience'])

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $audience['title'] }}</h2>
            <p class="{{ $closing }}">{{ $audience['lead'] }}</p>
            <p class="{{ $paragraph }}">{{ $audience['body'] }}</p>
        </div>

        {{-- Chandler added to the Personal vault, and his page with no
             sharing link: nothing went out to him. --}}
        <div role="img" aria-label="{{ $audience['label'] }}" class="flex flex-col gap-4 rounded-lg bg-identity-2/14 p-5 md:p-10">
            <div class="{{ $window }} flex items-center gap-3 px-3.5 py-3">
                <span class="flex-none text-success">@include('_partials.icon', ['name' => 'check-circle', 'size' => 18])</span>
                {{-- The name is bolded inside the sentence, wherever the
                     language puts it. The copy is escaped first. --}}
                <span class="text-base">{!! str_replace(':name', '<strong class="font-semibold">Chandler Bing</strong>', e($audience['added'])) !!}</span>
            </div>

            <div class="{{ $window }}">
                <div class="{{ $windowTitle }}">
                    @include('_partials.avatar-initials', ['name' => 'Chandler Bing', 'size' => 28])
                    <span class="text-copy font-semibold">Chandler Bing</span>
                </div>
                @include('_partials.privacy-features.fact', ['label' => $audience['notes'], 'value' => $audience['notesValue']])
                @include('_partials.privacy-features.fact', ['label' => $audience['links'], 'value' => $audience['linksValue'], 'muted' => true, 'last' => true])
            </div>
        </div>
    </div>
</section>
