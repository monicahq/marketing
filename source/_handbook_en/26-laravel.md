---
title: "Why we use Laravel"
slug: laravel
section: engineering
order: 2
description: "A familiar framework, useful conventions, and more time for the parts of Monica that are actually Monica."
updated: 2026-11-18
---

I chose PHP and Laravel for the original Monica. In [the 2017 article](/en/blog/laravel/), I wrote about the documentation, the community, and how quickly I could build something useful.

The useful point wasn't that PHP had won some eternal language competition. It was that I could make the thing I wanted to make and understand how to maintain it.

That remains a much more interesting criterion than winning an argument in a comment section.

### Conventions are a form of help

A familiar framework gives contributors a starting point. They shouldn't need to learn an entirely personal philosophy of routing before fixing a bug in a reminder.

It also gives us established ways to handle ordinary application work. Monica's unusual problems are about people's lives: relationships, incomplete information, privacy, memories. We don't need every ordinary web development problem to become unusual as well.

Laravel doesn't make our decisions correct. We can still build confusing abstractions, write a bad query, or put too much logic in the wrong place. A framework is useful assistance, not adult supervision.

The [LaraDB article](/en/blog/laradb/) shows a more recent example of the ecosystem helping the rebuild: a small inspection tool that grew out of actual development needs.

Other frameworks could serve this product well. This one fits our experience and the work we're doing. That's enough. Your aunt's birthday is unlikely to care which language remembered it.
