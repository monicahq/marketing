---
title: "How we approach testing"
slug: testing
section: engineering
order: 5
description: "Confidence should follow the consequences of a mistake, especially when the mistake could lose somebody’s memories."
updated: 2026-11-18
---

In my [2017 Laravel post](/en/blog/laravel/), I admitted that launching without unit tests had hurt the project. Fixing one thing could break another. It wasn't an especially enjoyable discovery.

The lesson isn't that a test count makes software safe. It's that intuition alone is a poor way to protect behaviour people depend on.

### Test the consequence

For Monica, some mistakes matter much more than others. A note disappearing, a reminder firing on the wrong day, or information becoming visible to the wrong person deserves more attention than a decorative detail being slightly misaligned.

We should test what the person expects to happen, including what must not happen. A successful request isn't enough if it saved the information against the wrong contact.

A regression test is particularly useful when it captures a real failure: the conditions that caused it, and the correct outcome. It gives future changes something concrete to preserve.

Tests also need judgment. Repeating every internal method call in a test can make refactoring painful without making the product safer. A green suite can still miss a confusing workflow or an inaccessible control.

These are priorities, not a claim about current coverage, release gates, or an exhaustive testing programme. Those need evidence from the actual codebase.

[Shipping](/en/handbook/shipping/) and testing belong together. We want to move quickly because we understand the risks, rather than because we haven't looked for them.
