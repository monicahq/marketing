{{--
    The handbook's frame: the table of contents on the left, and whatever the
    page puts in `handbook` beside it (the index, or an article and its
    sidebar).

    Wider than the rest of the site's pages, because an article page holds
    three columns. Below `lg` they stack, and the table of contents goes last:
    on a phone the reader came for the text, not for the list of other texts.

    The column rules run the whole height between the header and the footer.
    The footer keeps 72px above itself (`mt-18`), which would leave the rules
    stopping short of it, so this cancels that margin with an equal negative
    one (the two collapse to nothing). The columns' own bottom padding is the
    space before the footer instead.
--}}
@extends('_layouts.base')

@section('body')
    <div class="mx-auto -mb-18 flex w-full max-w-350 flex-col lg:flex-row">
        <aside class="border-border px-4 py-12 max-lg:order-last max-lg:border-t lg:w-68 lg:flex-none lg:border-r lg:pr-5 lg:pl-6">
            @include('_partials.handbook.contents')
        </aside>

        @yield('handbook')
    </div>
@endsection
