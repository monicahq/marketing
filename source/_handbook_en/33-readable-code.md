---
title: "Code is written for humans"
slug: readable-code
section: engineering
order: 9
description: "A future contributor should be able to follow a relationship without first solving a riddle."
updated: 2026-11-18
---

A computer is perfectly happy executing code that makes a human miserable.

Unfortunately, humans are the ones who have to fix it.

Monica is open source. Someone approaching a bug may not know our history, our terminology, or the clever idea that seemed obvious when we wrote the code. They might be contributing in a language that isn't their first. They should still have a reasonable chance of understanding what's happening.

### Say what the code means

A relationship has a direction. A reminder has a date and a context. A deletion has consequences. Names and structure should make those things visible rather than hide them behind a generic mechanism that could mean anything.

A little repetition can be easier to understand than an abstraction trying to accommodate six vaguely similar cases. The right abstraction is useful. The premature one becomes a small framework nobody asked to maintain.

Comments are particularly valuable when they explain why: a cultural assumption we avoided, an unexpected date rule, a compatibility decision. A comment announcing that the next line saves a record is less of a revelation.

In the [original Laravel article](/en/blog/laravel/), I wrote about removing most events and listeners because too much behaviour had become hard to follow. That's a historical example, not a universal ban on events.

I want future contributors to spend their time understanding the human problem. Decoding my former enthusiasm for cleverness shouldn't be a prerequisite.
