/**
 * Site-wide values that are not copy and not design tokens.
 *
 * ⚠️ The `#` entries are placeholders carried over from the design. They need
 * real destinations before launch — the application does not live at a URL this
 * repository knows about yet.
 */
export const site = {
  /** Shown in the header, the hero CTA and the proof strip. Update by hand. */
  starCount: '25k+',

  /** Year in the footer notice. Read once at build time. */
  year: new Date().getFullYear(),

  links: {
    github: 'https://github.com/monicahq/monica',
    signIn: '#',
    getStarted: '#',
    createAccount: '#',
    selfHost: '#',
    selfHostingGuide: '#',
    docs: '#',
    api: '#',
    blog: '#',
    privacy: '#',
    v3: '#',
  },
} as const;
