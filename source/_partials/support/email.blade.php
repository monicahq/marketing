{{--
    The support address, written so that a scraper reading the HTML does not
    find it.

    Nothing in the page source spells it out. The link carries the address
    reversed and base64-encoded in `data-email`, and app.js decodes it into a
    real `mailto:` link once the page is in a browser. A harvester looking for
    `something@domain.tld` in the markup, or for a `mailto:` href, finds
    neither.

    Two shapes:

    - `text`: the address itself, as a link. Before the script runs, and for a
      reader without JavaScript, the address is still readable: it is written
      backwards and drawn the right way round by `bidi-override`. A person
      reads it; a regular expression does not match it.
    - `button`: a primary button with a label. It is no use without the
      script, so it carries `js-only`.

    @include('_partials.support.email', ['as' => 'text', 'class' => '...'])
    @include('_partials.support.email', ['as' => 'button', 'label' => '...'])
--}}
@php
    $reversed = strrev(implode('@', $page->supportEmail->toArray()));
    $encoded = base64_encode($reversed);
@endphp

@if (($as ?? 'text') === 'button')
    <a
        data-email="{{ $encoded }}"
        class="js-only mn-btn mn-btn--primary no-underline hover:no-underline {{ $class ?? '' }}"
    >{{ $label }}</a>
@else
    <a
        data-email="{{ $encoded }}"
        data-email-text
        class="{{ $class ?? '' }}"
    ><span dir="rtl" class="[unicode-bidi:bidi-override]">{{ $reversed }}</span></a>
@endif
