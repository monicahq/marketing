@php
    $structured = $copy['structured'];
    $screen = $structured['screen'];
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $structured['title'] }}</h2>
            @foreach ($structured['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
            <p class="flex items-center gap-2.5 rounded-md border border-identity-6/30 bg-identity-6/6 px-4 py-3 text-body font-medium">
                <span class="text-identity-6">@include('_partials.icon', ['name' => 'layers', 'size' => 16])</span>
                {{ $structured['callout'] }}
            </p>
        </div>

        {{-- Ross's page in Monica: who he is to the others, what happened to
             him, and what he has of yours. One picture, read out by its
             label. --}}
        <figure class="flex flex-col gap-3">
            <div role="img" aria-label="{{ $screen['label'] }}" class="rounded-lg bg-identity-1/14 p-4 md:p-10">
                <div class="{{ $window }} mx-auto max-w-[460px]">
                    <div class="flex items-center gap-3 border-b border-border px-4 py-3.5">
                        @include('_partials.home.product.avatar', ['name' => $screen['name'], 'size' => 44])
                        <div class="flex min-w-0 flex-col gap-px">
                            <span class="text-body font-semibold">{{ $screen['name'] }}</span>
                            <span class="{{ $stamp }}">{{ $screen['meta'] }}</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 border-b border-border px-4 py-3.5">
                        <span class="text-xs font-semibold text-text-muted">{{ $screen['relationships'] }}</span>
                        @foreach ($screen['rows'] as $row)
                            <div class="flex items-center gap-2.5">
                                @include('_partials.home.product.avatar', ['name' => $row['who'], 'size' => 24])
                                <span class="flex-1 truncate text-base">{{ $row['who'] }}</span>
                                <span class="{{ $stamp }}">{{ $row['what'] }}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex flex-col gap-2 px-4 py-3.5">
                        <span class="text-xs font-semibold text-text-muted">{{ $screen['events'] }}</span>
                        @foreach ($screen['entries'] as $entry)
                            <div class="flex items-center gap-2.5">
                                <span class="size-2 flex-none rounded-full bg-border-strong"></span>
                                <span class="flex-1 text-base">{{ $entry['what'] }}</span>
                                <span class="{{ $stamp }}">{{ $entry['when'] }}</span>
                            </div>
                        @endforeach
                        <span class="mt-1.5 flex items-center gap-1.5 rounded-md bg-surface-subtle px-2.5 py-1.5 text-xs text-text-secondary">@include('_partials.icon', ['name' => 'tag', 'size' => 12]){{ $screen['has'] }}</span>
                    </div>
                </div>
            </div>
            <figcaption class="{{ $note }}">{{ $structured['caption'] }}</figcaption>
        </figure>
    </div>
</section>
