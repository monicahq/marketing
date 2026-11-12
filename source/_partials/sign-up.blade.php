{{--
    Every button that sends a reader to create an account.

    While `registrationClosedPost` in config.php names a post, the button
    opens a popover saying registration is closed, with a link to that post,
    instead of leading to a form that no longer accepts anyone. Built on
    <details data-menu>, like the language menu, so it opens, closes and takes
    keyboard focus with no JavaScript at all, and app.js closes it on Escape
    or a click elsewhere. Once registration reopens, setting the config key
    to null turns every one of them back into a plain link.

    @include('_partials.sign-up', [
        'label' => $page->t('nav.getStarted'),
        'class' => 'mn-btn-primary',            // the button's variant and any utilities
        'href' => $page->links['getStarted'],   // optional, this is the default
        'align' => 'right',                     // optional, the popover's edge
        'wrapper' => 'w-full',                  // optional, classes on <details>
    ])
--}}
@php
    $href = $href ?? $page->links['getStarted'];
    $wrapper = $wrapper ?? '';
@endphp

@if ($page->registrationClosedPost)
    <details data-menu class="relative {{ $wrapper }}">
        <summary class="mn-btn {{ $class }} cursor-pointer list-none [&::-webkit-details-marker]:hidden">{{ $label }}</summary>

        <div
            class="absolute top-[calc(100%+6px)] {{ ($align ?? 'left') === 'right' ? 'right-0' : 'left-0' }} z-50 w-72 max-w-[calc(100vw-32px)] rounded-lg border border-border bg-canvas p-4 text-left text-small text-text-secondary shadow-pop"
        >
            <p>{{ $page->t('registrationClosed.message') }}</p>
            <a
                href="{{ $page->postPath($page->registrationClosedPost) }}"
                class="mt-2 inline-block font-medium text-text"
            >{{ $page->t('registrationClosed.more') }}</a>
        </div>
    </details>
@else
    <a href="{{ $href }}" class="mn-btn {{ $class }} no-underline hover:no-underline">{{ $label }}</a>
@endif
