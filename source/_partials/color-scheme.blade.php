<meta name="color-scheme" content="light dark">

{{-- Dark mode follows the reader's system setting, and nothing else:
     there is no toggle. The design system keys its dark palette off a
     `.dark` class on <html>, so this sets that class from the media
     query and keeps it in step if the setting changes while the page
     is open.

     Inline and in the <head>, before the stylesheet, so the first
     frame is already the right colour. Turbo never replaces <html>,
     so the class survives every navigation after this one. Shared with
     404.html, which has its own head. --}}
<script>
    (() => {
        const query = window.matchMedia('(prefers-color-scheme: dark)');
        const apply = () => document.documentElement.classList.toggle('dark', query.matches);
        apply();
        query.addEventListener('change', apply);
    })();
</script>
