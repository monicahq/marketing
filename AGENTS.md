# Agent instructions

Marketing site for Monica, the personal CRM. Static Jigsaw + Tailwind site, in four languages.

**The full working notes (conventions, file layout, how the four languages work, SEO, current state of the repo) live in [`.claude/CLAUDE.md`](.claude/CLAUDE.md). Read that file first.** It's kept as the single source so guidance doesn't drift between tools.

Three things that matter regardless:

- Build with `npm run dev` (watch) or `npm run build` (production), never `vendor/bin/jigsaw build` on its own. Vite has to compile the CSS before Jigsaw renders, or the build fails on a missing manifest.
- All visible text lives in `lang/<locale>.php`. Never hard-code a string in a template.
- Jigsaw docs: https://jigsaw.tighten.com/docs

> Note: `CLAUDE.md` in the repo root is a symlink to this file.
