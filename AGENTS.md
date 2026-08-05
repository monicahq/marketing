# Agent instructions

Marketing site for Monica, the personal CRM. Static Astro 7 site.

**The full working notes (conventions, file layout, blog/content-collection gotchas, current state of the repo) live in [`.claude/CLAUDE.md`](.claude/CLAUDE.md). Read that file first.** It's kept as the single source so guidance doesn't drift between tools.

Two things that matter regardless:

- Start the dev server in background mode: `astro dev --background` (manage with `astro dev stop` / `status` / `logs`). Don't run it in the foreground. It blocks.
- Astro docs: https://docs.astro.build. The content collections API changed across versions, so check the docs rather than trusting older examples.

> Note: `CLAUDE.md` in the repo root is a symlink to this file.
