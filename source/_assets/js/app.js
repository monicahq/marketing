/* The site's only JavaScript, loaded on every page.
 *
 * Three things, in this order:
 *
 *   instant.page  prefetches a page when the pointer settles on its link, so
 *                 the HTML is usually already in the browser cache by the time
 *                 the click lands.
 *   Turbo Drive   intercepts the click, fetches the page, and swaps <body>
 *                 instead of tearing the document down, so the stylesheet, the
 *                 webfont and this script survive the navigation.
 *   Alpine        the pricing page's billing toggle, and nothing else.
 *
 * Turbo 8 prefetches on hover by default, which would mean two prefetchers
 * racing for the same URL. `<meta name="turbo-prefetch" content="false">` in
 * the layout turns Turbo's off and leaves instant.page to it, because its
 * heuristics are the better of the two: it backs off on slow connections and
 * when the reader has asked to save data, and it falls back to mousedown on
 * touch, where there is no hover to react to.
 *
 * Links that must not be Turbo visits carry `data-turbo="false"`. The locale
 * picker is the case that matters: Turbo replaces <body> but leaves <html lang>
 * alone, so a Turbo visit to another language would serve French copy still
 * declaring itself English. */
import 'instant.page';

import * as Turbo from '@hotwired/turbo';

import Alpine from 'alpinejs';

window.Turbo = Turbo;
window.Alpine = Alpine;

/* No `turbo:load` hook re-initialising Alpine. Turbo replaces the whole <body>,
 * which is a mutation of <html>, and Alpine's own MutationObserver is already
 * watching there and initialises the new tree. Calling `Alpine.initTree` on top
 * of that would bind every directive twice. (A project using Turbo's morph
 * refreshes does need the hook, because morph patches nodes in place.) */
Alpine.start();
