import jigsaw from '@tighten/jigsaw-vite-plugin';
import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

// Two entry points: the stylesheet, and the site's single script (Alpine, for
// the pricing page's billing toggle). Templates resolve both through `vite()`.
export default defineConfig(({ command }) => ({
    // Assets referenced from inside a bundled file (the webfont, from the
    // @font-face in design-system/fonts.css) are rewritten by Vite as
    // `base` + their path in the manifest. Jigsaw's `vite()` helper serves
    // the build from /assets/build, so `base` has to say the same thing or
    // the font 404s in production while the stylesheet that asks for it
    // loads fine. Only on `build`: the dev server is addressed by origin
    // alone, so a base there would break every module URL.
    base: command === 'build' ? '/assets/build/' : '/',
    plugins: [
        jigsaw({
            input: ['source/_assets/css/main.css', 'source/_assets/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
}));
