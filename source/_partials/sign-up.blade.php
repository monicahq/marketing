{{--
    Every button that sends a reader to create an account.

    While `registrationClosedPost` in config.php names a post, the button
    opens a popover saying registration is closed, with a link to that post,
    instead of leading to a form that no longer accepts anyone. Built on
    <details>, like the language menu, so it opens, closes and takes keyboard
    focus with no JavaScript at all. Once registration reopens, setting the
    config key to null turns every one of them back into a plain link.

    @include('_partials.sign-up', [
        'label' => $page->t('nav.getStarted'),
        'class' => 'mn-btn--primary mn-btn--sm',
        'href' => $page->links['getStarted'],   // optional, this is the default
        'align' => 'right',                     // optional, the popover's edge
        'wrapper' => 'max-md:w-full',           // optional, classes on <details>
    ])
--}}
@php
    $href = $href ?? $page->links['getStarted'];
    $wrapper = $wrapper ?? '';
@endphp

@if ($page->registrationClosedPost)
    <details class="relative {{ $wrapper }}">
        <summary class="mn-btn {{ $class }} cursor-pointer list-none [&::-webkit-details-marker]:hidden">
            {{ $label }}
        </summary>

        <div
            class="absolute top-[calc(100%+6px)] {{ ($align ?? 'left') === 'right' ? 'right-0' : 'left-0' }} z-20 w-72 max-w-[calc(100vw-32px)] rounded-md border border-border bg-surface p-4 text-left text-small text-text-secondary"
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
