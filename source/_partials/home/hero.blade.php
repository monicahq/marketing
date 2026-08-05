@php
    $lede = 'max-w-[58ch] text-lede-sm text-text-secondary text-pretty md:text-lede-md lg:text-lede';
    $heroButton = 'no-underline hover:no-underline max-md:w-full max-md:justify-center';
@endphp

<section>
    <div class="mx-auto w-full max-w-marketing px-4 py-section-sm md:px-8 lg:py-section">
        <span class="font-mono text-mono text-text-muted">{{ $page->t('hero.eyebrow') }}</span>

        <h1 class="mt-4 text-display-sm font-semibold md:text-display-lg lg:text-display-xl">
            {{ $page->t('hero.title') }}
        </h1>

        <p class="mt-6 {{ $lede }}">{{ $page->t('hero.lede') }}</p>
        <p class="mt-4 {{ $lede }}">{{ $page->t('hero.lede2') }}</p>

        <div class="mt-8 flex flex-wrap gap-3 max-md:flex-col max-md:items-stretch">
            <a href="{{ $page->links['getStarted'] }}" class="mn-btn mn-btn--primary {{ $heroButton }}">
                {{ $page->t('hero.primaryCta') }}
            </a>
            <a href="{{ $page->links['github'] }}" class="mn-btn mn-btn--secondary gap-2 {{ $heroButton }}">
                @include('_partials.icon', ['name' => 'star'])
                <span>{{ $page->t('hero.githubCta', [':count' => $page->starCount]) }}</span>
            </a>
        </div>

        <p class="mt-5 font-mono text-mono text-text-muted">{{ $page->t('hero.note') }}</p>
    </div>
</section>
