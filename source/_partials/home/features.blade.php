@php
    $copy = $page->t('home.features');

    $card = 'flex flex-col gap-1.5 rounded-lg border border-border bg-canvas shadow-panel';
    $title = 'text-xl font-semibold';
    $body = 'text-body text-text-secondary';
    $chip = 'rounded-md border border-border bg-canvas px-3 py-2.5 text-base';

    // Who each reminder is about. The second one is "Mum" in the copy, and her
    // avatar is Lucie's, the same person the product picture above is open on.
    $reminderFaces = ['Priya Raman', 'Lucie Martin', 'Sam Okafor'];
    $vaultTones = [
        ['ground' => 'bg-identity-2/10', 'mark' => 'bg-identity-2'],
        ['ground' => 'bg-identity-1/10', 'mark' => 'bg-identity-1'],
        ['ground' => 'bg-identity-7/10', 'mark' => 'bg-identity-7'],
    ];
@endphp

{{-- One identity colour per card, from the product's vault palette: a tile
     behind the icon and a faint wash behind the example. --}}
<section class="px-4 py-30 md:px-6">
    <div class="mx-auto flex max-w-page flex-col gap-12">
        <div class="flex max-w-[640px] flex-col gap-3.5">
            <h2 class="text-display-section font-semibold">{{ $copy['title'] }}</h2>
            <p class="text-copy-lg text-text-secondary">{{ $copy['lede'] }}</p>
        </div>

        <div class="flex flex-wrap gap-4">
            <article class="{{ $card }} flex-[2_1_460px] overflow-hidden">
                <div class="flex flex-col gap-1.5 px-6 pt-6">
                    <span class="mb-2 grid size-8 place-items-center rounded-md bg-identity-7/14 text-identity-7">@include('_partials.icon', ['name' => 'reminder', 'size' => 18])</span>
                    <h3 class="{{ $title }}">{{ $copy['reminders']['title'] }}</h3>
                    <p class="{{ $body }}">{{ $copy['reminders']['body'] }}</p>
                </div>
                <div class="mt-6 ml-6 flex-1 rounded-tl-lg bg-identity-7/7 py-4 pl-4">
                    <div class="rounded-l-lg border border-r-0 border-border bg-canvas px-4 py-1">
                        @foreach ($copy['reminders']['rows'] as $r => $row)
                            <div class="flex items-center gap-3 border-border-subtle py-2.5 not-last:border-b">
                                @include('_partials.avatar-initials', ['name' => $reminderFaces[$r], 'size' => 28])
                                <span class="flex-1 text-base"><strong class="font-semibold">{{ $row['name'] }}</strong> <span class="text-text-muted">· {{ $row['what'] }}</span></span>
                                <span class="text-xs text-text-secondary">{{ $row['when'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </article>

            <article class="{{ $card }} flex-[1_1_300px] p-6">
                <span class="mb-2 grid size-8 place-items-center rounded-md bg-identity-1/14 text-identity-1">@include('_partials.icon', ['name' => 'relationship', 'size' => 18])</span>
                <h3 class="{{ $title }}">{{ $copy['relationships']['title'] }}</h3>
                <p class="{{ $body }}">{{ $copy['relationships']['body'] }}</p>
                <div class="mt-5 flex flex-1 flex-col justify-center gap-2 rounded-lg bg-identity-1/7 p-4">
                    @foreach ($copy['relationships']['sentences'] as [$before, $bold, $after])
                        <div class="{{ $chip }} text-text-secondary">{{ $before }}<strong class="font-semibold text-text">{{ $bold }}</strong>{{ $after }}</div>
                    @endforeach
                </div>
            </article>

            <article class="{{ $card }} flex-[1_1_300px] p-6">
                <span class="mb-2 grid size-8 place-items-center rounded-md bg-identity-3/16 text-identity-3">@include('_partials.icon', ['name' => 'gift', 'size' => 18])</span>
                <h3 class="{{ $title }}">{{ $copy['gifts']['title'] }}</h3>
                <p class="{{ $body }}">{{ $copy['gifts']['body'] }}</p>
                <div class="mt-5 flex flex-1 flex-wrap content-center gap-2 rounded-lg bg-identity-3/8 p-4">
                    @foreach ($copy['gifts']['ideas'] as $idea)
                        <span class="rounded-full border border-border bg-canvas px-3 py-1.5 text-small font-medium">{{ $idea }}</span>
                    @endforeach
                    <span class="rounded-full border border-border bg-canvas px-3 py-1.5 text-small font-medium text-text-muted line-through">{{ $copy['gifts']['crossed'] }}</span>
                </div>
            </article>

            <article class="{{ $card }} flex-[1_1_300px] p-6">
                <span class="mb-2 grid size-8 place-items-center rounded-md bg-identity-6/14 text-identity-6">@include('_partials.icon', ['name' => 'note', 'size' => 18])</span>
                <h3 class="{{ $title }}">{{ $copy['notes']['title'] }}</h3>
                <p class="{{ $body }}">{{ $copy['notes']['body'] }}</p>
                <div class="mt-5 flex flex-1 flex-col justify-center gap-2 rounded-lg bg-identity-6/7 p-4">
                    {{-- A search field drawn in its focused state: the near-black
                         border and the soft ring the design system gives a field
                         with the caret in it. --}}
                    <div class="flex h-8.5 items-center gap-2 rounded-md border border-text bg-canvas px-2.5 text-base ring-3 ring-text/12">
                        @include('_partials.icon', ['name' => 'search', 'size' => 15, 'class' => 'text-text-muted'])
                        {{ $copy['notes']['query'] }}
                    </div>
                    <div class="{{ $chip }} text-text-secondary"><strong class="font-semibold text-text">{{ $copy['notes']['who'] }}</strong> {{ $copy['notes']['match'] }}</div>
                </div>
            </article>

            <article class="{{ $card }} flex-[1_1_300px] p-6">
                <span class="mb-2 grid size-8 place-items-center rounded-md bg-identity-4/14 text-identity-4">@include('_partials.icon', ['name' => 'pet', 'size' => 18])</span>
                <h3 class="{{ $title }}">{{ $copy['details']['title'] }}</h3>
                <p class="{{ $body }}">{{ $copy['details']['body'] }}</p>
                <div class="mt-5 flex flex-1 flex-col justify-center gap-2 rounded-lg bg-identity-4/7 p-4">
                    @foreach ($copy['details']['fields'] as $field)
                        <div class="{{ $chip }} flex justify-between gap-3">
                            <span class="text-text-muted">{{ $field['label'] }}</span>
                            <strong class="font-semibold">{{ $field['value'] }}</strong>
                        </div>
                    @endforeach
                </div>
            </article>

            <article class="{{ $card }} flex-[2_1_460px] flex-row flex-wrap items-center gap-6 p-6">
                <div class="flex flex-[1_1_220px] flex-col gap-1.5">
                    <span class="mb-2 grid size-8 place-items-center rounded-md bg-identity-2/14 text-identity-2">@include('_partials.icon', ['name' => 'vault', 'size' => 18])</span>
                    <h3 class="{{ $title }}">{{ $copy['vaults']['title'] }}</h3>
                    <p class="{{ $body }}">{{ $copy['vaults']['body'] }}</p>
                </div>
                <div class="grid flex-[1_1_260px] grid-cols-3 gap-2.5">
                    @foreach ($copy['vaults']['vaults'] as $v => $vault)
                        <div class="flex flex-col gap-5.5 rounded-lg p-3.5 {{ $vaultTones[$v]['ground'] }}">
                            <span class="size-6 rounded-xs {{ $vaultTones[$v]['mark'] }}"></span>
                            <div>
                                <div class="text-base font-semibold">{{ $vault['name'] }}</div>
                                <div class="text-xs text-text-secondary">{{ $vault['count'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </article>

            <article class="{{ $card }} flex-[1_1_300px] p-6">
                <span class="mb-2 grid size-8 place-items-center rounded-md bg-identity-5/14 text-identity-5">@include('_partials.icon', ['name' => 'journal', 'size' => 18])</span>
                <h3 class="{{ $title }}">{{ $copy['journal']['title'] }}</h3>
                <p class="{{ $body }}">{{ $copy['journal']['body'] }}</p>
            </article>
        </div>
    </div>
</section>
