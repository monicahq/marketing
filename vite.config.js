import jigsaw from '@tighten/jigsaw-vite-plugin';
import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

// The plugin runs the Jigsaw build when Vite's finishes, and on a failure it
// prints the error and lets the process exit 0. CI then deploys whatever the
// broken build left on disk, and a dead link or a missing translation never
// fails a pull request. So on `build` its hook is taken out, and
// `npm run build` runs Jigsaw itself after Vite, where a failure is the exit
// code. The dev server keeps the plugin's own rebuilds, whose failures are
// only printed anyway.
const withoutJigsawBuild = (plugins) =>
    plugins.map((plugin) => (plugin.name === 'jigsaw' ? { ...plugin, closeBundle: undefined } : plugin));

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
        ...(command === 'build' ? withoutJigsawBuild : (plugins) => plugins)(
            jigsaw({
                input: ['source/_assets/css/main.css', 'source/_assets/js/app.js'],
                refresh: true,
            }),
        ),
        tailwindcss(),
    ],
}));
