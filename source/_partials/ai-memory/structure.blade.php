@php($structure = $copy['structure'])

<section class="{{ $section }}">
    <div class="{{ $container }} flex flex-col gap-12">
        <div class="{{ $split }}">
            <div class="flex flex-col gap-4.5">
                <h2 class="{{ $title }}">{{ $structure['title'] }}</h2>
                <p class="{{ $closing }}">{{ $structure['lead'] }}</p>
                @foreach ($structure['body'] as $paragraphText)
                    <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
                @endforeach
            </div>

            {{-- How records link to each other: a diagram, not a screen, and
                 its caption says so. --}}
            <figure class="flex flex-col gap-3">
                <div role="img" aria-label="{{ $structure['label'] }}" class="flex flex-col items-center rounded-lg bg-identity-5/14 p-6 md:p-10">
                    @include('_partials.ai-memory.node', ['icon' => 'book', 'kind' => $structure['belonging'], 'name' => $copy['book'], 'detail' => $structure['garage']])
                    @include('_partials.ai-memory.link', ['label' => $structure['loan'], 'detail' => $structure['dueShort']])
                    @include('_partials.ai-memory.node', ['person' => $copy['borrower'], 'kind' => $structure['person'], 'name' => $copy['borrower']])
                    @include('_partials.ai-memory.link', ['label' => $structure['tookPart'], 'detail' => $structure['withYou']])
                    @include('_partials.ai-memory.node', ['icon' => 'timeline', 'kind' => $structure['event'], 'name' => $structure['dinner'], 'people' => array_map(fn ($who) => $page->t("cast.{$who}.full"), ['monica', 'rachel', 'ross'])])
                </div>
                <figcaption class="{{ $note }} text-center">{{ $structure['caption'] }}</figcaption>
            </figure>
        </div>
        <p class="text-lede-sm mx-auto max-w-[640px] text-center font-semibold tracking-[-0.02em] text-balance">{{ $structure['closing'] }}</p>
    </div>
</section>
