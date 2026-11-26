{{--
    Pirsch, cookieless analytics (described in the privacy policy).

    Two gates, because the live site and a pull request preview are the same
    production build, uploaded to two addresses, so the build cannot tell them
    apart:
      1. `production`: a local build never contains the script.
      2. The hostname, checked in the browser: only monicahq.com and its
         subdomains load it, so a *.pages.dev preview never counts as a visit.
    The tag is created from script, with the same id and data-code Pirsch asks
    for, because that is the only way to decide at load time.
--}}
@if ($page->production)
    <script>
        (function () {
            var host = location.hostname;
            if (host !== 'monicahq.com' && !host.endsWith('.monicahq.com')) return;
            var s = document.createElement('script');
            s.defer = true;
            s.src = 'https://api.pirsch.io/pa.js';
            s.id = 'pianjs';
            s.dataset.code = 'lTlFdjRHJTDy7p3P9NQRj6prkSbz83tk';
            document.head.appendChild(s);
        })();
    </script>
@endif
