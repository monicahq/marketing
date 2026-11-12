<meta name="color-scheme" content="light dark">

{{-- Dark mode follows the reader's system setting until they press the
     button in the header or the footer (`_partials/theme-toggle`). The design
     system keys its dark palette off a `.dark` class on <html>, so this sets
     that class and keeps it in step.

     A choice is kept in localStorage only while it differs from the system
     setting. Pressing the button back to what the system says forgets it, so
     the page goes back to following the system rather than pinning a theme
     the reader never meant to keep. Storage can be missing or refuse (a
     private window, blocked site data), and then the button still works for
     the page in front of them.

     Inline and in the <head>, before the stylesheet, so the first frame is
     already the right colour. Turbo never replaces <html>, so the class
     survives every navigation after this one, and the click listener is on
     the document for the same reason. Shared with 404.html, which has its own
     head. --}}
<script>
    (() => {
        const root = document.documentElement;
        const query = window.matchMedia('(prefers-color-scheme: dark)');

        const stored = () => {
            try {
                return localStorage.getItem('theme');
            } catch {
                return null;
            }
        };

        const store = (theme) => {
            try {
                theme ? localStorage.setItem('theme', theme) : localStorage.removeItem('theme');
            } catch {}
        };

        // `color-scheme` too, so scrollbars and form controls follow the
        // button rather than the system.
        const apply = () => {
            const theme = stored() ?? (query.matches ? 'dark' : 'light');
            root.classList.toggle('dark', theme === 'dark');
            root.style.colorScheme = theme;
        };

        apply();
        query.addEventListener('change', apply);

        document.addEventListener('click', (event) => {
            if (!event.target.closest('[data-theme-toggle]')) return;

            const theme = root.classList.contains('dark') ? 'light' : 'dark';
            store(theme === (query.matches ? 'dark' : 'light') ? null : theme);
            root.classList.toggle('dark', theme === 'dark');
            root.style.colorScheme = theme;
        });
    })();
</script>
