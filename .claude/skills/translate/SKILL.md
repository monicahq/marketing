---
name: translate
description:
  Use whenever copy in lang/en.php is added or changed and has to reach the
  other locales (fr, de, es, pt, nl, zh, ru), or when a translation in lang/
  or a blog post in source/_posts_<locale>/ needs writing or fixing. Trigger on
  translate, translation, locale, lang file, or "in every language".
---

# `translate` skill instructions

English (`lang/en.php`, `source/_posts_en/`) is the source. Every other locale
is translated from it, and a key missing from any `lang/` file fails the build.

## Who translates: Sonnet subagents, always

Translations are **always** done by subagents running on Sonnet, never inline
by the main agent and never on another model.

- Call the Agent tool with `model: "sonnet"`. Run them with
  `run_in_background: true` and keep implementing while they work.
- Split the locales across two or three agents (for example fr, de, es, pt in
  one and nl, zh, ru in another), all sent in the same message so they run in
  parallel. Never give two agents the same file.
- The main agent writes the English first. Translation starts only once the
  English keys are final, so the shape the agents copy does not move under
  them.
- When the agents report back, check their work (see "Checking" below) before
  calling the change done.

## What to put in the brief

A subagent sees nothing but its prompt, so every brief states:

1. **The files it owns** (`lang/fr.php`, ...) and that it edits nothing else.
2. **Where the English is**: the key paths in `lang/en.php`, or a phrase to
   search for, and **where each translation goes** in the target file (same
   position as in `en.php`: after which key, before which key).
3. **Shape**: keys stay identical, only values are translated, every list
   keeps its length and order. PHP doc comments stay in English.
4. **What never changes**: Monica, Régis, Alexis, GitHub, AGPL, Docker, CRM,
   MCP, API, product names, years, prices and other numbers, `:placeholders`.
5. **House style**, from `.claude/CLAUDE.md`:
   - Sentence case everywhere. No emoji, no exclamation marks.
   - Never a dash (— or -) as punctuation inside a sentence: commas, periods,
     colons or parentheses instead. The ` — Monica` suffix on meta titles is
     the one exception.
   - Typographic apostrophes (’), as the files already use.
   - Match the form of address and the terminology each `lang/` file already
     uses ("self-host", "open source", "personal CRM", "subscription"): read
     the neighbouring blocks first.
   - Chinese: 你, full-width punctuation, a space between Chinese and Latin
     words or numbers (`Monica 是一个开源的个人 CRM`).
   - Russian: «вы» in lowercase, «ёлочки» quotes, ё written. Monica stays in
     Latin script, is never declined, takes feminine agreement. A string with
     `:count` is phrased as a label and a number (`Полей: :count`), never as a
     plural form.
   - German runs about 30% longer than English: that is fine, never shorten
     the meaning to fit.
6. **PHP**: strings are double quoted, so a literal `"` or `$` is escaped.
7. **The report**: one line per file, "done" or the problem.

For a blog post, the brief also says: same slug and date in every locale, only
`title`, `description` and the body are translated, and alt text describes the
screenshot in the target language.

## Checking

After the agents finish, the main agent:

- runs `npm run build`, which throws on any key missing from a locale;
- greps the new keys in every `lang/` file to see they all landed;
- reads a sample of each language for dashes used as punctuation, emoji,
  exclamation marks and English left untranslated.

Marketing copy is the owner's call: translate what changed in English, and do
not reword existing translations as a side effect.
