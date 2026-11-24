---
title: "Dependencies are commitments"
slug: dependencies
section: engineering
order: 7
description: "A package can save a weekend and still require attention for years."
updated: 2026-11-18
---

Adding a package can be a very good decision. Writing our own version of a difficult, well-solved problem isn't inherently noble.

But installing a dependency is the beginning of a relationship, not the end of a task. How appropriate for Monica.

That package can change its interface, require a new runtime, introduce a vulnerability, or stop being maintained. We still own the effect on our users.

### Consider the whole arrangement

Before adding one, we should understand the problem it solves and the part of Monica that will depend on it. A small convenience used in one place deserves a different discussion from a library sitting between every user and their information.

Can we understand its behaviour? Does its licence fit the project? What else does it bring along? Can people self-host Monica without acquiring an account with another service? If we need to replace it later, how much of the application will care?

These are useful questions, not a claim that every past dependency has passed a formal checklist. We make imperfect choices too.

[Familiar technology](/en/handbook/boring-technology/) and a healthy ecosystem help, but popularity isn't a maintenance guarantee.

I don't want us to reject packages out of pride. I also don't want twenty new dependencies because one of them draws a slightly nicer dropdown.

The installation command is short. Unfortunately, the commitment doesn't have to be.
