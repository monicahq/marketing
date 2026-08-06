@php
    $cell = 'border-b border-border-subtle px-2 py-3 text-left align-top text-small md:px-4 md:py-4 md:text-copy';
@endphp

<section class="border-t border-border bg-surface-subtle">
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <h2 class="text-heading font-semibold lg:text-display-md">{{ $page->t('pricing.compare.title') }}</h2>

        {{-- Narrow screens scroll the table rather than crushing three columns
             into unreadable widths. --}}
        <div class="mt-8 overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th scope="col" class="{{ $cell }} border-b-border text-micro font-medium tracking-[0.06em] text-text-muted uppercase">
                            <span class="sr-only">{{ $page->t('pricing.compare.rowHeader') }}</span>
                        </th>
                        <th scope="col" class="{{ $cell }} border-b-border text-micro font-medium tracking-[0.06em] text-text-muted uppercase">
                            {{ $page->t('pricing.compare.hosted') }}
                        </th>
                        <th scope="col" class="{{ $cell }} border-b-border text-micro font-medium tracking-[0.06em] text-text-muted uppercase">
                            {{ $page->t('pricing.compare.selfHosted') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($page->t('pricing.compare.rows') as $row)
                        <tr>
                            <th scope="row" class="{{ $cell }} w-[34%] font-medium text-text lg:w-[30%]">{{ $row['label'] }}</th>
                            <td class="{{ $cell }} text-text-secondary">{{ $row['hosted'] }}</td>
                            <td class="{{ $cell }} text-text-secondary">{{ $row['selfHosted'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
