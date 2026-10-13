{{-- The headline and the product picture share one ground: the meadow, which
     rises from behind the product and runs up under the headline. Light mode
     only, because there is no night version of this one yet: in dark mode the
     picture is hidden and the two sections sit on the page as before. The
     cream matches the picture's own sky, so where a wide screen crops its top
     or a narrow one runs out of it, the seam does not show. The clip keeps a
     wide picture from spilling over the header and a narrow one from
     scrolling the page sideways. --}}
<div class="relative overflow-hidden bg-ground-cream dark:bg-transparent">
    @include('_partials.home.hero')
    @include('_partials.home.product')
</div>
