---
title: "Technical debt is not always bad"
slug: technical-debt
section: engineering
order: 6
description: "A deliberate shortcut can help; a shortcut nobody remembers taking is harder to repay."
updated: 2026-11-18
---

Sometimes the small, slightly awkward solution is the correct one.

Monica is built with limited time. Spending three evenings creating the perfect abstraction for a problem that might disappear next week isn't automatically responsible engineering. Sometimes it's a pleasant way to avoid shipping.

Technical debt becomes useful when the compromise is understood, contained, and worth what it lets us do now.

### Know what you're borrowing

An imperfect internal structure might be acceptable for a first version. Ambiguous ownership of personal data isn't the same kind of compromise. Neither is an error path that can silently discard someone's notes.

The important questions are what could go wrong, how hard the decision will be to reverse, and whether a future maintainer can recognize it.

A short explanation of why we took a shortcut can be more valuable than a grand plan to eliminate every imperfection. Future me deserves to know whether something was deliberate. He's already going to be annoyed enough.

Debt also changes with use. An awkward bit of code nobody touches might be less urgent than a small flaw that complicates every feature in the same area.

The [rebuild](/en/handbook/rewrite/) is a reminder that accumulated decisions eventually shape what a product can become. That doesn't mean every original decision was foolish.

We should make compromises consciously, revisit the expensive ones, and resist describing every unpleasant file as an emergency. Sometimes it just needs a better name.
