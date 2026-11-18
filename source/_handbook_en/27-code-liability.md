---
title: "Code is a liability"
slug: code-liability
section: engineering
order: 3
description: "The value is what the software lets people do; the code is what we have to look after."
updated: 2026-11-18
---

A new feature can add value. The code underneath it adds responsibility.

Someone has to understand it, review it, test it, translate the messages it introduces, and fix it when a dependency changes. Eventually that someone might be me on a Sunday when I had planned to do literally anything else.

This is why I don't find the number of lines added to Monica especially impressive.

### The bill arrives later

Imagine two ways to represent the same piece of personal information. One fits an existing concept. The other adds its own screens, permissions, background jobs, and settings.

The second approach might be justified. But we should be able to name the benefit, because every one of those moving parts now belongs to the project.

This becomes even more relevant when generating code is cheap. A tool can produce a large implementation quickly without making the result cheap to understand or safe to maintain.

Deleting useful behaviour recklessly isn't the answer. [Removing features](/en/handbook/removing-features/) requires care for the people relying on them. The best time to avoid unnecessary code is before accepting the obligation.

A short solution isn't automatically good, either. Ten incomprehensible lines can be more work than fifty obvious ones.

I want enough code to make Monica useful and understandable. I don't want a large collection of code merely proving that we were very busy. The repository isn't a loyalty programme. We don't get a free sandwich after a million lines.
