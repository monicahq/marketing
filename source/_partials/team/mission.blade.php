{{--
    The mission statement, with the label in its own column beside it.

    The label column is a fixed 180px on wide screens and stacks above the text
    below `lg`, which is what keeps the prose measure from collapsing on a
    tablet. The signature is set apart by a hairline rather than by a heading:
    it is an attribution, not a section.
--}}
<section class="border-t border-border">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <div class="grid gap-6 lg:grid-cols-[180px_minmax(0,1fr)] lg:gap-10">
            <div class="font-mono text-mono text-text-muted">{{ $page->t('team.missionLabel') }}</div>

            <div class="max-w-[66ch]">
                @foreach ($page->t('team.mission') as $paragraph)
                    <p class="text-copy-lg leading-[1.65] text-text-secondary text-pretty {{ ! $loop->first ? 'mt-5' : '' }}">
                        {{ $paragraph }}
                    </p>
                @endforeach

                <p class="mt-8 border-t border-border-subtle pt-5 text-copy-lg font-medium text-text">
                    {{ $page->t('team.signature') }}
                </p>
            </div>
        </div>
    </div>
</section>
