{{-- The contribute page: a panda, a short essay, then three ways to help,
     the last one on a dark panel because it is the one that matters most.
     The links are placeholders in `links` in config.php until they exist. --}}
@php
    $copy = $page->t('contribute');
    $links = $page->links;

    // A link inside translated prose: the copy is escaped first, then the
    // placeholder is swapped for the anchor.
    // Underlined as in a blog post (.mn-prose a), since links are as dark as the text.
    $linkClass = 'underline decoration-border-strong underline-offset-[3px] hover:decoration-text';
    $link = fn (string $href, string $text) => '<a href="' . e($href) . '" class="' . $linkClass . '">' . e($text) . '</a>';

    $item = 'grid grid-cols-[48px_minmax(0,1fr)] gap-4';
    $number = 'text-heading font-semibold text-text-disabled';
    $itemTitle = 'text-title font-semibold text-balance text-text';
    $paragraph = 'text-copy text-text-secondary text-pretty';
@endphp

<section class="px-4 pt-16 pb-30 md:px-6">
    <div class="mx-auto w-full max-w-reading">
        <img
            src="/assets/images/contribute/panda-recruitment.webp"
            srcset="/assets/images/contribute/panda-recruitment.webp 1x, /assets/images/contribute/panda-recruitment@2x.webp 2x"
            width="300"
            height="399"
            alt="{{ $copy['imageAlt'] }}"
            class="mx-auto block h-auto w-full max-w-75"
        >

        <div class="mt-10 flex justify-center">
            <p class="inline-flex items-center gap-2.5 rounded-full border border-border py-1 pr-3 pl-1 text-small text-text-secondary">
                <span class="rounded-full bg-primary px-2.5 py-1 font-medium text-on-primary">{{ $copy['badge'] }}</span>
                {{ $copy['since'] }}
            </p>
        </div>

        <h1 class="mt-6 text-center text-display-sm font-bold text-balance text-text md:text-display-lg">{{ $copy['title'] }}</h1>

        <div class="mt-12 flex flex-col gap-5">
            <p class="text-lede-sm text-text text-pretty">{{ $copy['lede'] }}</p>
            @foreach ($copy['body'] as $text)
                <p class="{{ $paragraph }}">{{ $text }}</p>
            @endforeach
            <p class="{{ $paragraph }}">{!! strtr(e($copy['sponsor']), [':sponsor' => $link($links['sponsor'], $copy['sponsorLink'])]) !!}</p>
        </div>

        <ol class="mt-16 flex flex-col gap-4">
            <li class="{{ $item }} border-t border-border py-7">
                <span class="{{ $number }}">01</span>
                <div class="flex flex-col gap-2">
                    <h2 class="{{ $itemTitle }}">{{ $copy['docs']['title'] }}</h2>
                    <p class="{{ $paragraph }}">{{ $copy['docs']['body'] }} <a href="{{ $links['docsGuidelines'] }}" class="{{ $linkClass }}">{{ $copy['docs']['link'] }}</a>.</p>
                </div>
            </li>

            <li class="{{ $item }} border-t border-border py-7">
                <span class="{{ $number }}">02</span>
                <div class="flex flex-col gap-2">
                    <h2 class="{{ $itemTitle }}">{{ $copy['translate']['title'] }}</h2>
                    <p class="{{ $paragraph }}">{{ $copy['translate']['body'] }}</p>
                </div>
            </li>

            {{-- `dark` makes the design system resolve its dark values inside
                 the panel, as the about page's open-source panel does, so the
                 buttons invert with it. --}}
            @php $tokens = $copy['tokens']; @endphp
            <li class="dark {{ $item }} mt-4 rounded-lg bg-surface-subtle px-6 py-10 md:px-9">
                <span class="{{ $number }}">03</span>
                <div class="flex flex-col gap-3">
                    <span class="text-caption font-medium tracking-[0.08em] text-text-muted uppercase">{{ $tokens['eyebrow'] }}</span>
                    <h2 class="text-heading font-semibold text-balance text-text">{{ $tokens['title'] }}</h2>
                    <p class="{{ $paragraph }}">{!! strtr(e($tokens['body']), [
                        ':tracker' => $link($links['issues'], $tokens['trackerLink']),
                        ':skills' => $link($links['skills'], $tokens['skillsLink']),
                    ]) !!}</p>
                    <p class="text-copy text-text text-pretty">{{ $tokens['closing'] }}</p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <a href="{{ $links['issues'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $tokens['issues'] }}</a>
                        <a href="{{ $links['skills'] }}" class="mn-btn mn-btn-secondary no-underline hover:no-underline">{{ $tokens['skillsButton'] }}</a>
                    </div>
                </div>
            </li>
        </ol>
    </div>
</section>
