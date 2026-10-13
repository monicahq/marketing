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
 *   Alpine        the billing toggle, on the pricing page and the homepage,
 *                 and the pricing page's calculator and FAQ filters. Nothing
 *                 else.
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

/* The pricing page's two components. Both receive everything they need,
 * copy included, as one JSON argument from their Blade partial, and both are
 * drawn in their default state by that partial before Alpine starts. */

/* The relationship-based pricing calculator: `_partials/pricing/calculator`.
 * `quote` is the same arithmetic as the partial's `$quote`, which draws the
 * default quote into the HTML; the two have to agree. */
Alpine.data('pricingCalculator', (rules) => {
    const money = new Intl.NumberFormat(rules.locale, { style: 'currency', currency: 'USD', currencyDisplay: 'narrowSymbol' });
    const decimal = new Intl.NumberFormat(rules.locale);

    const format = (n) => money.format(Math.abs(n));
    const signed = (n) => (n === 0 ? format(0) : (n > 0 ? '+' : '−') + format(n));
    const fill = (text, count, rate = 0) => text.replace(':count', decimal.format(count)).replace(':rate', format(rate));

    return {
        ...rules.defaults,

        reset() {
            Object.assign(this, rules.defaults);
        },

        get quote() {
            const r = rules.rates;
            const l = rules.lines;
            const base = rules.base[this.plan];

            // [label, amount, shown]. A number is a charge or a credit; a
            // string is a word in place of one ("included", "free").
            const items = {
                people: [fill(l.people, this.people, r.people), this.people * r.people, true],
                reminders: [fill(l.reminders, this.reminders), l.included, true],
                birthdays: [fill(l.birthdays, this.birthdays, r.birthdays), this.birthdays * r.birthdays, true],
                coffee: [fill(l.coffee, this.coffee, r.coffee), this.coffee * r.coffee, true],
                cousins: [fill(l.cousins, this.cousins, r.cousins), this.cousins * r.cousins, true],
                mum: [fill(l.mum, this.mum, Math.abs(r.mum)), this.mum * r.mum, true],
                pretend: [l.pretend, r.pretend, this.pretend],
                notes: [l.notes, l.free, this.notes],
                dentist: [l.dentist, r.dentist, this.dentist],
                belated: [l.belated, r.belated, this.belated],
            };

            const raw = Object.values(items).reduce((sum, [, amount, shown]) => sum + (shown && typeof amount === 'number' ? amount : 0), 0);
            const mult = rules.multipliers[this.social];
            items.multiplier = [l.multiplier.replace(':rate', decimal.format(mult)), raw * mult - raw, true];
            const subtotal = base + raw * mult;

            const lines = { base: { label: l.base[this.plan], amount: format(base), tone: 'charge', on: true } };
            for (const [key, [label, amount, shown]] of Object.entries(items)) {
                const number = typeof amount === 'number';
                lines[key] = {
                    label,
                    amount: number ? signed(amount) : amount,
                    tone: !number ? 'muted' : amount < 0 ? 'credit' : 'charge',
                    on: !!shown,
                };
            }

            const v = rules.verdicts;
            const verdict =
                this.birthdays >= 10 ? v.birthdays.replace(':count', this.birthdays)
                : this.coffee >= 50 ? v.coffee
                : this.mum === 0 ? v.mum
                : v.default;

            return {
                id: 'Q-' + (((this.people * 7 + this.birthdays * 131 + this.coffee * 17 + this.cousins * 3 + this.mum * 29) % 9000) + 1000),
                lines,
                subtotal: format(subtotal),
                refund: signed(base - subtotal),
                total: rules.prices[this.plan],
                per: rules.per[this.plan],
                verdict,
            };
        },
    };
});

/* The pricing FAQ's search, topic chips, reading progress and random pick:
 * `_partials/pricing/faq`. The questions themselves are native <details>;
 * this only hides the ones that do not match and counts the ones opened. */
Alpine.data('pricingFaq', (state) => ({
    query: '',
    cat: 'all',
    opened: {},

    visible(i) {
        const item = state.items[i];
        const query = this.query.trim().toLocaleLowerCase();

        return (this.cat === 'all' || item.cat === this.cat) && (!query || item.text.includes(query));
    },

    get none() {
        return state.items.every((_, i) => !this.visible(i));
    },

    track(i, open) {
        if (open) this.opened[i] = true;
    },

    get count() {
        return Object.keys(this.opened).length;
    },

    get percent() {
        return Math.round((this.count / state.items.length) * 100);
    },

    get progress() {
        const total = state.items.length;
        const p = state.progress;
        const text = this.count === 0 ? p.none : this.count < 5 ? p.some : this.count < total ? p.many : p.all;

        return text.replace(':count', this.count).replace(':total', total);
    },

    // Opens one question nobody has opened yet, and only that one.
    surprise() {
        const details = [...this.$root.querySelectorAll('details[data-faq]')];
        const unread = details.filter((_, i) => !this.opened[i]);
        const pool = unread.length ? unread : details;
        const pick = pool[Math.floor(Math.random() * pool.length)];

        this.query = '';
        this.cat = 'all';
        details.forEach((d) => (d.open = d === pick));
        this.$nextTick(() => pick.scrollIntoView({ block: 'nearest' }));
    },
}));

/* No `turbo:load` hook re-initialising Alpine. Turbo replaces the whole <body>,
 * which is a mutation of <html>, and Alpine's own MutationObserver is already
 * watching there and initialises the new tree. Calling `Alpine.initTree` on top
 * of that would bind every directive twice. (A project using Turbo's morph
 * refreshes does need the hook, because morph patches nodes in place.) */
Alpine.start();

/* The features menu in the header and the language menu in the footer are
 * native <details>, so they open, close and take focus with no script at all.
 * What <details> does not do on its own is close when the reader presses
 * Escape or clicks somewhere else, which is what a menu is expected to do.
 * These listeners add that to any <details data-menu>.
 *
 * On the document rather than on each menu, so they survive Turbo swapping
 * <body> without having to be bound again. */
const openMenus = () => document.querySelectorAll('details[data-menu][open]');

document.addEventListener('click', (event) => {
    openMenus().forEach((menu) => {
        // A link inside the menu closes it too: a same-page `#fragment` is not
        // a navigation, so nothing else would, and the panel would sit open
        // over the section it just jumped to.
        if (!menu.contains(event.target) || event.target.closest('a')) menu.open = false;
    });
});

/* Turbo snapshots the page as it leaves it, and Back restores the snapshot, so
 * a menu open at that moment would come back open. */
document.addEventListener('turbo:before-cache', () => {
    openMenus().forEach((menu) => {
        menu.open = false;
    });
});

document.addEventListener('keydown', (event) => {
    if (event.key !== 'Escape') return;

    openMenus().forEach((menu) => {
        menu.open = false;
        menu.querySelector('summary')?.focus();
    });
});
