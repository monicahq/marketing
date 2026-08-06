{{--
    The terms of use.

    Rendered from `terms.sections` in lang/, rather than written into the
    markup, because the whole document is translated and a legal text with its
    sentences spread across four Blade files is a legal text that quietly goes
    out of sync.

    A section is a title plus an ordered run of blocks. A block with `items` is
    a list, anything else is a paragraph. That is enough shape for this document
    and keeps the order the author wrote in, which a fixed
    paragraphs-then-list-then-more-paragraphs structure would not.
--}}
@php
    $paragraph = 'max-w-[68ch] text-copy-lg leading-[1.7] text-text-secondary text-pretty';
@endphp

<section>
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <div class="max-w-reading">
            <h1 class="text-display-sm font-semibold md:text-display-md">{{ $page->t('terms.title') }}</h1>

            <p class="mt-4 font-mono text-mono text-text-muted">
                {{ $page->t('terms.updated', [':date' => $page->t('terms.updatedOn')]) }}
            </p>

            @foreach ($page->t('terms.sections') as $section)
                <div class="mt-10 border-t border-border-subtle pt-8">
                    <h2 class="text-heading-sm font-semibold text-text">{{ $section['title'] }}</h2>

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
