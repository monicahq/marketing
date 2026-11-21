{{-- Whether the cookie notice (`_partials/cookie-notice`) has been dismissed.

     The notice shows until the reader closes it, and never again after that.
     Closing it sets one first-party cookie, `cookie_notice=dismissed`, for 400
     days (the longest a browser keeps one). It is the "tiny in-house cookie"
     the notice talks about, and nothing but this script reads it: the site is
     static, so no server ever looks.

     Inline and in the <head>, so `cookie-notice-dismissed` is on <html> before
     the first paint and a reader who closed the notice never sees it flash.
     Turbo never replaces <html>, so the class survives every navigation, and
     the click listener is on the document for the same reason. --}}
<script>
    (() => {
        const root = document.documentElement;

        if (document.cookie.split('; ').includes('cookie_notice=dismissed')) {
            root.classList.add('cookie-notice-dismissed');
        }

        document.addEventListener('click', (event) => {
            if (!event.target.closest('[data-cookie-notice-dismiss]')) return;

            const secure = location.protocol === 'https:' ? '; Secure' : '';
            document.cookie = `cookie_notice=dismissed; Max-Age=34560000; Path=/; SameSite=Lax${secure}`;
            root.classList.add('cookie-notice-dismissed');
        });
    })();
</script>
