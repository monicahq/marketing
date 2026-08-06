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
 * Both prefetchers stay on, because they feed different kinds of navigation and
 * neither one covers the other's:
 *
 *   Turbo's prefetch (on by default since Turbo 8, 100ms hover) keeps the
 *   in-flight fetch in its own cache and swaps it straight into the visit when
 *   the click lands. It is the only prefetch a Turbo visit can consume, so
 *   turning it off would leave every internal link fetching on click.
 *
 *   instant.page (65ms hover) issues <link rel="prefetch">, which warms the
 *   browser's HTTP cache. That is what an ordinary browser navigation reads,
 *   which here means the locale picker: those links are `data-turbo="false"`
 *   and Turbo never touches them.
 *
 * On a link Turbo does drive, both fire. The later request is normally served
 * from the cache the earlier one filled, so the duplicate costs little, and
 * dropping either library would leave one class of link unprefetched.
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
