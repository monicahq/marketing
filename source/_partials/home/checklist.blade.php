{{--
    What a plan includes, one line each behind a check.

    @include('_partials.home.checklist', ['items' => $copy['cloud']['items']])
--}}
<ul class="flex flex-1 flex-col gap-3">
    @foreach ($items as $item)
        <li class="flex gap-2.5 text-body text-text-soft">
            @include('_partials.icon', ['name' => 'check', 'class' => 'mt-0.5 text-text'])
            {{ $item }}
        </li>
    @endforeach
</ul>
