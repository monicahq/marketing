@php
    $scripts = $copy['scripts'];

    // The request and the response. Code, so the same in every language,
    // except the vault's name, which is the one this language's Personal
    // vault carries everywhere else on the site.
    $vault = $page->t('vaults.personal');
    $request = "Authorization: Bearer mk_••••••••••••\nContent-Type: application/json\n\n{\n  \"first_name\": \"Gunther\",\n  \"last_name\": \"Central Perk\"\n}";
    $response = "{\n  \"data\": {\n    \"id\": \"9c41…\",\n    \"first_name\": \"Gunther\",\n    \"vault\": \"{$vault}\"\n  }\n}";
    $code = 'm-0 overflow-x-auto p-3.5 font-mono text-xs leading-[1.65] text-text-soft';
@endphp

<section class="{{ $section }}">
    <div class="{{ $container }} {{ $split }}">
        {{-- Creating Gunther through the API, and what comes back. --}}
        <div class="min-w-0 rounded-lg bg-identity-6/14 p-5 max-lg:order-last md:p-10">
            <div role="img" aria-label="{{ $scripts['label'] }}" class="{{ $window }}">
                <div class="flex flex-wrap items-center gap-2 border-b border-border px-3.5 py-2.5">
                    <span class="mn-badge mn-badge-neutral">POST</span>
                    <span class="{{ $mono }} wrap-anywhere">/api/vaults/{vault}/contacts</span>
                </div>
                <pre class="{{ $code }} border-b border-border bg-surface-subtle">{{ $request }}</pre>
                <div class="flex items-center gap-2 border-b border-border px-3.5 py-2">
                    <span class="mn-badge mn-badge-success">201 Created</span>
                </div>
                <pre class="{{ $code }}">{{ $response }}</pre>
            </div>
        </div>

        <div class="flex max-w-[480px] flex-col gap-4.5">
            <h2 class="{{ $title }}">{{ $scripts['title'] }}</h2>
            <p class="{{ $closing }}">{{ $scripts['lead'] }}</p>
            @foreach ($scripts['body'] as $paragraphText)
                <p class="{{ $paragraph }}">{{ $paragraphText }}</p>
            @endforeach
            <a href="{{ $page->links['api'] }}" class="{{ $link }}">{{ $copy['explore'] }}</a>
        </div>
    </div>
</section>
