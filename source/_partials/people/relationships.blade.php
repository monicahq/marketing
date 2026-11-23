@php
    $relationships = $copy['relationships'];

    // Emma's family list: her parents, then her aunt. The tree beside it
    // draws only parentage and partnerships, as the application's does, so
    // Monica is in the list and not in the tree.
    $family = [
        ['Ross Geller', $ui['parent']],
        ['Rachel Green', $ui['parent']],
        ['Monica Geller', $ui['auntUncle']],
    ];
    $line = 'bg-border-strong';
@endphp

<section class="border-y border-border bg-surface-subtle px-4 py-24 md:px-6 lg:py-28">
    <div class="{{ $narrow }} flex flex-col items-center gap-4.5 text-center">
        <h2 class="{{ $title }}">{{ $relationships['title'] }}</h2>
        <p class="max-w-[600px] {{ $paragraph }}">{{ $relationships['body'] }}</p>

        {{-- Emma Geller-Green's relationships tab, as the application draws
             it: the family list on one side, the family tree on the other. --}}
        <div class="mt-10 w-full max-w-[880px] rounded-lg bg-identity-1/14 p-3 text-left md:p-8">
            <div role="img" aria-label="{{ $relationships['label'] }}" class="{{ $window }} grid items-start gap-8 p-4 text-body md:grid-cols-[minmax(0,1fr)_minmax(0,18rem)] md:p-6">
                <div>
                    <div class="mb-3 flex flex-wrap items-center gap-3">
                        <span class="{{ $sectionTitle }}">{{ $ui['family'] }}</span>
                        <span class="font-mono text-small text-text-muted">{{ count($family) }}</span>
                        <span class="ml-auto inline-flex h-7 items-center rounded-full border border-border px-3 text-small font-medium text-text-secondary">{{ $ui['manage'] }}</span>
                    </div>
                    <div class="{{ $panel }}">
                        @foreach ($family as [$name, $role])
                            <div class="flex items-center gap-3 border-b border-border px-4 py-2.5 last:border-b-0">
                                @include('_partials.home.product.avatar', ['name' => $name, 'size' => 30])
                                <span class="min-w-0 flex-1">
                                    <span class="block truncate text-small font-semibold text-text">{{ $name }}</span>
                                    <span class="block text-xs text-text-muted">{{ $role }}</span>
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div>
                    <div class="mb-3 flex h-8 items-center"><span class="{{ $sectionTitle }}">{{ $ui['familyTree'] }}</span></div>
                    <div class="{{ $panel }}">
                        <div class="flex flex-col items-center bg-surface-subtle px-4 py-5">
                            {{-- The parents, each with a stub down to a shared bar. --}}
                            <div class="flex justify-center">
                                @foreach (['Ross Geller' => 'Ross', 'Rachel Green' => 'Rachel'] as $name => $short)
                                    <div class="relative flex flex-col items-center px-1 pb-5">
                                        <span class="absolute bottom-0 left-1/2 h-5 w-px -translate-x-1/2 {{ $line }}"></span>
                                        <span class="absolute bottom-0 h-px {{ $line }} {{ $loop->first ? 'right-0 left-1/2' : 'right-1/2 left-0' }}"></span>
                                        <span class="flex w-20 flex-col items-center gap-1.5">
                                            @include('_partials.home.product.avatar', ['name' => $name, 'size' => 36])
                                            <span class="w-20 truncate text-center text-xs text-text-secondary">{{ $short }}</span>
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                            <span class="h-5 w-px {{ $line }}"></span>
                            <span class="flex w-20 flex-col items-center gap-1.5">
                                <span class="rounded-full ring-2 ring-primary ring-offset-2 ring-offset-surface-subtle">
                                    @include('_partials.home.product.avatar', ['name' => 'Emma Geller-Green', 'size' => 36])
                                </span>
                                <span class="w-20 truncate text-center text-xs font-semibold text-text">Emma</span>
                            </span>
                        </div>
                    </div>
                    <p class="mt-2.5 px-0.5 text-xs text-text-muted text-pretty">{{ $ui['treeNote'] }}</p>
                </div>
            </div>
        </div>

        <a href="{{ $page->route('relationships') }}" class="{{ $more }} mt-3">
            {{ $relationships['link'] }}
            @include('_partials.icon', ['name' => 'arrow-right', 'size' => 15])
        </a>
    </div>
</section>
