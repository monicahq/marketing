@php($work = $copy['work'])

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} {{ $split }}">
        {{-- The city bike's Maintenance section: its title, the line under
             it and the button that adds a record, then one card per job,
             the latest performed first. --}}
        <div class="rounded-lg bg-identity-2/14 p-3 max-lg:order-2 md:p-8">
            <div role="img" aria-label="{{ $work['label'] }}" class="{{ $window }} flex flex-col gap-5 p-4 text-body md:p-5">
                @include('_partials.possessions.header', ['type' => $ui['bicycles'], 'icon' => 'activity', 'tint' => 'rust', 'name' => $copy['bike']['name'], 'leaf' => $copy['bike']['leaf'], 'at' => $copy['bike']['at'], 'tags' => null, 'big' => false])

                <div class="flex flex-col gap-3">
                    <div class="flex flex-col gap-1">
                        <span class="{{ $sectionTitle }}">{{ $ui['maintenance'] }}</span>
                        <p class="{{ $muted }} text-pretty">{{ $ui['maintenanceLead'] }}</p>
                    </div>
                    <span class="{{ $secondary }} w-fit">@include('_partials.icon', ['name' => 'plus', 'size' => 16]) {{ $ui['maintenanceRecord'] }}</span>
                </div>

                <div class="flex flex-col gap-4">
                    @foreach ($copy['records'] as $record)
                        @include('_partials.maintenance-loans.record', ['record' => $record, 'description' => true])
                    @endforeach
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $work['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $work['body'] }}</p>
            <p class="{{ $closing }}">{{ $work['closing'] }}</p>
        </div>
    </div>
</section>
