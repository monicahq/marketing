import jigsaw from '@tighten/jigsaw-vite-plugin';
import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

// Two entry points: the stylesheet, and the site's single script (Alpine, for
// the pricing page's billing toggle). Templates resolve both through `vite()`.
export default defineConfig({
    plugins: [
        jigsaw({
            input: ['source/_assets/css/main.css', 'source/_assets/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
