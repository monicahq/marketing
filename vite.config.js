import jigsaw from '@tighten/jigsaw-vite-plugin';
import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

// The site ships no JavaScript. CSS is the only entry point.
export default defineConfig({
    plugins: [
        jigsaw({
            input: ['source/_assets/css/main.css'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
