{{--
    A legal document: the terms of use, the privacy policy.

    The text lives in lang/ under the key passed in, rather than in the markup,
    because these documents are translated into every locale and a legal text
    with its sentences spread across one Blade file per language is a legal text
    that quietly goes out of sync.

    The shape is a title, a date, and a run of sections. A section is an
    optional heading plus an ordered run of blocks, where a block with `items`
    is a list and anything else is a paragraph. That is enough for both
    documents and keeps the order the author wrote in, which a fixed
    paragraphs-then-list shape would not. The terms are four titled sections;
    the privacy policy is one untitled run of paragraphs, so it is a single
    section with no title and no rule above it.

    @include('_partials.legal.document', ['key' => 'terms'])
--}}
@php
    $paragraph = 'max-w-[68ch] text-copy-lg leading-[1.7] text-text-secondary text-pretty';
@endphp

<section>
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <div class="max-w-reading">
            <h1 class="text-display-sm font-semibold md:text-display-md">{{ $page->t("{$key}.title") }}</h1>

            <p class="mt-4 font-mono text-mono text-text-muted">
                {{ $page->t("{$key}.updated", [':date' => $page->t("{$key}.updatedOn")]) }}
            </p>

            @foreach ($page->t("{$key}.sections") as $section)
                @php $titled = ! empty($section['title']); @endphp

                <div class="mt-10 {{ $titled ? 'border-t border-border-subtle pt-8' : '' }}">
                    @if ($titled)
                        <h2 class="text-heading-sm font-semibold text-text">{{ $section['title'] }}</h2>
                    @endif

                    @foreach ($section['blocks'] as $block)
                        @if (isset($block['items']))
                            {{-- The same 5px dot the rendered Markdown uses, so
                                 a list reads the same wherever it appears. --}}
                            <ul class="mt-4 flex flex-col gap-3">
                                @foreach ($block['items'] as $item)
                                    <li class="flex gap-3 {{ $paragraph }}">
                                        <span aria-hidden="true" class="mt-[11px] size-[5px] flex-none rounded-full bg-border-strong"></span>
                                        <span>{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="mt-4 {{ $paragraph }}">{{ $block['text'] }}</p>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>
