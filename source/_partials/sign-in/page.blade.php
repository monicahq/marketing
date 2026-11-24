{{--
    The sign-in chooser: the step between the website and the application,
    while the new Monica and Monica classic run side by side with separate
    accounts. The header's sign-in button opens it.

    A small header (the mark, and the way back), two columns that each send
    the reader to one sign-in form, and one line underneath saying why there
    are two. The columns sit side by side from 720px and stack below, the new
    version first. Their URLs are `signIn` and `signInClassic` in `links` in
    config.php, and the host under each button is read off that URL, so the
    two cannot disagree.
--}}
@php
    $copy = $page->t('signIn');
@endphp

<div class="flex min-h-screen flex-col">
    <header class="flex h-14 items-center justify-between gap-4 border-b border-border px-4 md:px-6">
        <a href="{{ $page->route('home') }}" class="flex items-center gap-2.5 text-text no-underline hover:no-underline">
            <img
                src="/assets/images/monica-panda-mark.svg"
                alt=""
                width="32"
                height="29"
                class="h-auto w-6 flex-none"
            >
            <span class="text-copy font-semibold tracking-[-0.01em]">Monica</span>
        </a>

        <a href="{{ $page->route('home') }}" class="text-base text-text">{{ $copy['back'] }}</a>
    </header>

    <main class="grid flex-1 md:grid-cols-2">
        <h1 class="sr-only">{{ $copy['title'] }}</h1>

        @include('_partials.sign-in.version', [
            'version' => 'new',
            'href' => $page->links['signIn'],
            'button' => 'mn-btn-primary',
            'pandaDay' => '/assets/images/sign-in/panda-party-day.webp',
            'pandaNight' => '/assets/images/sign-in/panda-party-night.webp',
            'tone' => 'bg-canvas',
        ])

        @include('_partials.sign-in.version', [
            'version' => 'classic',
            'href' => $page->links['signInClassic'],
            'button' => 'mn-btn-secondary',
            'pandaDay' => '/assets/images/sign-in/grandpa-panda-day.webp',
            'pandaNight' => '/assets/images/sign-in/grandpa-panda-night.webp',
            'tone' => 'bg-surface-subtle border-t border-border md:border-t-0 md:border-l',
        ])
    </main>

    <footer class="flex justify-center border-t border-border px-4 py-4 md:px-6">
        <p class="text-center text-xs text-text-muted text-pretty">{{ $copy['note'] }}</p>
    </footer>
</div>
