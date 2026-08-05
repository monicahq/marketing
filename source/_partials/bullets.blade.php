{{--
    A quiet list: no markers from the browser, a 6px dot drawn on the
    pseudo-element so long items wrap flush under their own text.

    @include('_partials.bullets', ['items' => $page->t('notALead.items')])
--}}
<ul class="mt-6 flex list-none flex-col gap-3 p-0">
    @foreach ($items as $item)
        <li class="flex gap-3 text-copy leading-[1.6] text-text-secondary before:mt-[9px] before:size-1.5 before:flex-none before:rounded-full before:bg-border-strong before:content-['']">
            {{ $item }}
        </li>
    @endforeach
</ul>
