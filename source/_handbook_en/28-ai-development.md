---
title: "How we use AI to build Monica"
slug: ai-development
section: engineering
order: 4
description: "Coding assistance should make a change easier to understand, not make understanding optional."
updated: 2026-11-18
---

A coding agent can write a convincing amount of code. That is useful. It is also an excellent way to acquire a convincing amount of code you haven't understood yet.

For Monica, the interesting question is whether an assisted change solves the actual problem and leaves us able to maintain the result. “The agent said it works” doesn't answer either part.

This is the standard I want AI-assisted work held to. It isn't an inventory of which tool wrote which part of Monica, or a claim that a particular automated review process is already in place.

### Responsibility doesn't move

A person accepting a change should understand the behaviour it introduces. That includes the awkward cases: access to another person's data, partial failures, dates, deletions, and assumptions about relationships.

A generated test can be useful. It can also repeat the implementation's mistake very thoroughly. Confidence needs to come from checking the intended behaviour, not merely seeing two generated files agree.

I prefer changes small enough to read and discuss. If explaining a patch takes longer than writing a simpler one, the saved typing wasn't necessarily a victory.

The same applies to contributors. Help from a tool doesn't remove the need to explain a problem, reproduce a bug, or respond to review.

[Code remains a liability](/en/handbook/code-liability/), whoever typed it. The agent doesn't inherit the maintenance inbox. An unfortunate limitation of this otherwise very exciting technology.
