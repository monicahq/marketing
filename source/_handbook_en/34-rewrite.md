---
title: "Why we rewrote Monica"
slug: rewrite
section: engineering
order: 10
description: "Almost ten years of learning changed the questions we wanted the product to answer."
updated: 2026-11-18
---

The shortest explanation is in [the rebuild announcement](/en/blog/we-are-rebuilding-monica/): the existing Monica was no longer the personal CRM I would build today.

That doesn't mean the original was a mistake. It solved a problem I had in 2017, then grew as other people brought their needs and ideas. Those decisions were made with what we understood at the time.

Eventually, some of those foundations became constraints.

### More than a different interface

Relationships are a good example. Treating a relationship as a detail attached to one contact makes some things easy initially. Thinking about direction, reciprocal relationships, complicated families, and different cultures changes the problem.

Customization raised another question. Should everyone's life fit the fields we chose, or should people have more control over what their records contain? Good defaults still matter. So does having room for information we didn't anticipate.

Those are changes to the model of the product, not simply reasons to move buttons around.

### Starting again still costs something

A rewrite takes time away from improving the existing application. It also creates work around compatibility and moving information. New code isn't automatically better code, and enthusiasm doesn't migrate anybody's memories.

I wouldn't recommend rewriting an application merely because its old code is embarrassing. Most code becomes embarrassing if you learn enough.

This rebuild comes from a changed understanding of Monica's central problem. The useful part of the exercise is carrying those lessons forward. Recreating every old assumption with nicer indentation would be a very expensive hobby.
