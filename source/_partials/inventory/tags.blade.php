@php($tags = $copy['tags'])

<section class="px-4 py-24 md:px-6 lg:py-32">
    <div class="{{ $narrow }} {{ $split }}">
        {{-- The Possession tags settings page: the account's tags, each with
             its colour. --}}
        <div class="rounded-lg bg-identity-7/14 p-4 max-lg:order-2 md:p-8">
            <div role="img" aria-label="{{ $tags['label'] }}" class="{{ $window }} flex flex-col gap-4 p-4 text-body md:p-5">
                <div class="flex flex-col gap-1">
                    <span class="text-[20px] leading-tight font-semibold tracking-[-0.02em] text-text">{{ $ui['possessionTags'] }}</span>
                </div>
                <div class="flex flex-wrap items-baseline gap-x-4 gap-y-1 px-0.5">
                    <span class="{{ $sectionTitle }}">{{ $ui['yourTags'] }}</span>
                    <span class="{{ $muted }}">{{ $tags['screen']['count'] }}</span>
                </div>
                <ul class="{{ $panel }}">
                    @foreach ($tags['screen']['tags'] as [$tag, $colour])
                        <li class="flex items-center gap-3 border-b border-border px-4 py-3 last:border-b-0">
                            <span class="grid size-8 flex-none place-items-center rounded-md {{ $tints[$colour] }}"><span class="size-2.5 rounded-full {{ $dots[$colour] }}"></span></span>
                            <span class="min-w-0 flex-1 truncate font-semibold text-text">{{ $tag }}</span>
                            <span class="flex flex-none gap-1.5 max-sm:hidden"><span class="{{ $ghost }}">{{ $ui['edit'] }}</span><span class="{{ $ghost }} text-danger">{{ $ui['delete'] }}</span></span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="flex flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $tags['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $tags['body'] }}</p>
            <p class="{{ $closing }}">{{ $tags['closing'] }}</p>
        </div>
    </div>
</section>
