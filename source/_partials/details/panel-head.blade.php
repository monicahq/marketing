{{-- The header of a section on a contact page, as Erica's panel draws it:
     the section's tinted mark, its name, and the Edit button.

     @include('_partials.details.panel-head', ['icon' => 'gift', 'tint' => 'rust', 'name' => 'Gift ideas']) --}}
<div class="{{ $panelHead }}">
    <span class="{{ $panelMark }} {{ $tints[$tint] }}">@include('_partials.icon', ['name' => $icon, 'size' => 15])</span>
    <span class="{{ $panelTitle }}">{{ $name }}</span>
    <span class="{{ $editButton }}">{{ $ui['edit'] }}</span>
</div>
