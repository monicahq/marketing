@php
    $section = $copy['separate'];
    $form = $section['form'];
    $thing = $section['thing'];
    $label = 'flex items-baseline gap-2 text-small font-medium text-text';
@endphp

<section class="border-y border-border bg-surface-subtle px-4 py-24 md:px-6 lg:py-28">
    <div class="{{ $narrow }} flex flex-col items-center gap-4.5 text-center">
        <h2 class="{{ $title }}">{{ $section['title'] }}</h2>
        <p class="max-w-[620px] {{ $paragraph }}">{!! $linked($section['body'], ['link' => [$section['linkLabel'], $page->route('inventory')]]) !!}</p>
        <p class="max-w-[620px] {{ $paragraph }}">{!! $linked($section['body2'], ['link' => [$section['vaults'], $page->route('vaults')]]) !!}</p>

        {{-- The same bookcase twice. On the left, the location, open in the
             form that edits it in settings (its emoji picker left out, since
             this site draws none); on the right, the possession, with the
             fields of the Furniture type. --}}
        <div role="img" aria-label="{{ $section['label'] }}" class="mt-10 grid w-full grid-cols-1 items-start gap-5 text-left text-body lg:grid-cols-2">
            <div class="flex flex-col gap-3">
                <div class="rounded-lg border border-border bg-identity-1/14 p-4 md:p-7">
                    <div class="{{ $window }}">
                        <div class="flex items-center gap-2.5 border-b border-border px-4 py-3">
                            @include('_partials.icon', ['name' => 'place', 'size' => 15, 'class' => 'text-text-muted'])
                            <span class="{{ $cardTitle }}">{{ $form['title'] }}</span>
                        </div>
                        <div class="flex flex-col gap-4.5 p-4">
                            <div class="grid grid-cols-1 gap-4.5 sm:grid-cols-2">
                                <div class="flex flex-col gap-1.5"><span class="{{ $label }}">{{ $ui['name'] }}</span><span class="{{ $input }}">{{ $form['name'] }}</span></div>
                                <div class="flex flex-col gap-1.5">
                                    <span class="{{ $label }}">{{ $ui['sitsInside'] }} <span class="text-xs font-normal text-text-muted">{{ $ui['optional'] }}</span></span>
                                    <span class="{{ $input }} justify-between gap-2"><span class="truncate">{{ $form['parent'] }}</span> @include('_partials.icon', ['name' => 'chevron-down', 'size' => 14, 'class' => 'flex-none text-text-muted'])</span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <span class="{{ $label }}">{{ $ui['address'] }} <span class="text-xs font-normal text-text-muted">{{ $ui['optional'] }}</span></span>
                                <span class="flex h-18 items-start rounded-md border border-border-strong bg-canvas px-3 py-2 text-small text-text-disabled">{{ $ui['addressPlaceholder'] }}</span>
                                <span class="text-xs text-text-muted text-pretty">{{ $form['addressHelp'] }}</span>
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-end gap-3 border-t border-border bg-surface-subtle px-4 py-3">
                            <span class="{{ $secondary }}">{{ $ui['cancel'] }}</span>
                            <span class="{{ $primary }}">{{ $ui['saveChanges'] }}</span>
                        </div>
                    </div>
                </div>
                <span class="px-1 text-small text-text-secondary">{{ $section['placeCaption'] }}</span>
            </div>

            <div class="flex flex-col gap-3">
                <div class="rounded-lg border border-border bg-identity-6/14 p-4 md:p-7">
                    <div class="{{ $window }} flex flex-col gap-4 p-4">
                        @include('_partials.possessions.header', ['type' => $ui['furniture'], 'icon' => 'layers', 'tint' => 'teal', 'name' => $thing['name'], 'leaf' => $thing['leaf'], 'at' => $thing['at'], 'tags' => null, 'big' => false])
                        <div class="flex flex-wrap items-baseline gap-x-3 gap-y-1">
                            <span class="{{ $sectionTitle }}">{{ $ui['details'] }}</span>
                            <span class="{{ $muted }}">{{ $ui['fieldsFrom'] }}</span>
                        </div>
                        @include('_partials.possessions.fields', ['groups' => $thing['groups']])
                    </div>
                </div>
                <span class="px-1 text-small text-text-secondary">{{ $section['thingCaption'] }}</span>
            </div>
        </div>
    </div>
</section>
