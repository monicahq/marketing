{{-- The headline and the product picture share one ground: the meadow, which
     rises from behind the product and runs up under the headline, by day and
     by night (see home/product). The ground colour stands in for the
     picture's sky where a wide screen crops its top or a narrow one runs out
     of it, so the seam does not show: cream by day, and by night the dark
     value of the same token, the closest of our grounds to the night sky. The
     clip keeps a wide picture from spilling over the header and a narrow one
     from scrolling the page sideways. --}}
<div class="relative overflow-hidden bg-ground-cream">
    @include('_partials.home.hero')
    @include('_partials.home.product')
</div>
