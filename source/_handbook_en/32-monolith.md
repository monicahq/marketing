---
title: "The beauty of a monolith"
slug: monolith
section: engineering
order: 8
description: "Keeping related work together until a real problem gives us a reason to separate it."
updated: 2026-11-18
---

A contact has a relationship. That relationship appears in a timeline. A reminder refers to the same person's life.

These concepts already need enough thought without requiring us to debug a network conversation between several applications every time they interact.

A monolith is appealing because it keeps much of that work in one place. The boundary of a problem can stay close to the code we need to read to understand it.

### Simple to reason about is valuable

For a small team, every additional service is something else to deploy, observe, update, and explain. For a self-hosting user, it's another requirement standing between downloading Monica and actually using it.

Splitting code across processes doesn't automatically produce clean boundaries. It can preserve all the confusion and add timeouts. A remarkable achievement, technically.

We should still separate responsibilities inside an application. Code handling relationships shouldn't become an excuse to mix everything with everything else. A monolith isn't a recommendation to create one enormous file.

This is an architectural preference, not a complete description of Monica's production infrastructure. Supporting services and background work can exist without turning every product concept into an independently deployed system.

If a measured problem eventually calls for a different boundary, we can consider it then. [Boring technology](/en/handbook/boring-technology/) doesn't mean refusing to adapt.

Until there's a reason to distribute the complexity, I would rather keep it somewhere a contributor can find it.
