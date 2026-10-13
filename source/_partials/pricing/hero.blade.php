<section class="px-4 pt-22 pb-14 md:px-6">
    <div class="{{ $container }} flex flex-col items-center gap-5 text-center">
        <div class="flex items-center gap-2 rounded-full border border-border py-1 pr-3 pl-1 text-xs text-text-secondary">
            <span class="mn-badge mn-badge-accent">{{ $copy['hero']['badge'] }}</span>
            <span>{{ $copy['hero']['badgeText'] }}</span>
        </div>

        <h1 class="max-w-[640px] text-display-pricing font-semibold text-balance">{{ $copy['hero']['title'] }}</h1>
        <p class="max-w-[540px] text-copy text-text-secondary text-pretty">{{ $copy['hero']['lede'] }}</p>
    </div>
</section>
