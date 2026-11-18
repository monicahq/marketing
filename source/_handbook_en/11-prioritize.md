---
title: How do we prioritize features?
slug: prioritize
section: product
order: 2
description: How we balance bugs, our own interests, community requests, long-term maintenance, and the ambition to keep Monica enjoyable to build.
updated: 2026-11-18
---

This one is spicy. As a project maintainer, I constantly have to deal with two conflicting thoughts. On one hand, we have what users want and need. On the other hand, we have what I like to work on. Sometimes these priorities align, and sometimes they don't.

I've originally built Monica for myself. I've open sourced it so others can take advantage of it too. And I've decided to host our own instance so people who don't have the technical knowledge to host it themselves can use it too.

### We are not a traditional software company

We want Monica to generate enough money to sustain itself and justify the time we spend working on it. However, maximizing revenue is not the primary motivation behind the project.

Whenever I can, I advocate for people to use the Docker image and host Monica themselves if they have the technical knowledge to do so. As much effort as we put into securing our hosted instance, it will never give you the same level of control as a system you own and properly maintain yourself.

This independence gives us the luxury of deciding what we want to work on, without necessarily having to justify every decision from a financial standpoint.

### Bugs come first

Fixing bugs should generally take priority over introducing new features.

Someone who uses Monica every day and encounters the same annoying bug for three months probably doesn't care that we've just introduced five new features.

Of course, not all bugs are equal. A bug that causes data loss is infinitely more important than a button that is misaligned by two pixels on a particular browser.

We should use our judgment, but the general principle is that making the existing product work properly is more important than making it bigger.

### We want to have fun

This is why, apart from fixing bugs, I might decide to work on something that I want rather than what the entire community wants.

I want to have fun with this project. I want to enjoy my time working on it. I spend evenings and weekends doing this, and there are plenty of other things I could be doing with that time.

For instance, implementing CalDAV is not fun for me. I'll probably never do it. And I will also probably not accept this contribution if it comes from the community, since I would have to maintain it for the rest of the software's life, not the person who contributed it.

This might sound selfish. Perhaps it is. But the alternative is to spend my free time working on things I don't enjoy, eventually lose interest in the project, and stop working on it altogether.

I don't think anyone would benefit from that.

The motivation of the people who maintain an open source project is an incredibly important resource. We should protect it just as much as we protect the technical quality of the project.

### Listen to the community

However, I'm also not blind. If I see that something keeps coming up, I'll seriously consider implementing it.

I want to help others, and one way to help others is to build something they need.

Community feedback is extremely valuable because it exposes us to ways of using Monica that we would never have thought of ourselves. Our own lives are not necessarily representative of everyone else's.

That being said, the number of upvotes on a GitHub issue is not the sole criterion for deciding whether something should be built.

A feature requested by a hundred people might fundamentally go against the philosophy of the project. A feature requested by a single person might be an absolutely brilliant idea that would benefit everyone.

Popularity is an indication that there might be a problem worth solving. It doesn't necessarily tell us how to solve it or whether Monica is the right tool to solve it.

### A contribution is not free

One of the misconceptions about open source is that if someone is willing to implement a feature themselves, there is no reason not to accept it.

Well, no.

Writing the initial code is only a small part of the cost of a feature. Once we accept it, we become responsible for it. We need to test it, document it, translate it, secure it, fix its bugs, and make sure it continues to work as the rest of the application evolves.

The person who contributed the feature might disappear from the project the following day. The feature, however, is now our responsibility.

This is why we might reject a perfectly executed pull request. It doesn't necessarily mean that the code is bad or that we don't appreciate the effort. It simply means that we don't want to take on the long-term responsibility of maintaining that particular feature.

### Consider the cost of saying yes

Every feature we work on is a feature we are not working on something else.

If we spend three weeks implementing an integration with another piece of software, that's three weeks we won't spend improving the core functionality of Monica.

We have a limited amount of time. We should spend as much of it as possible on things that make Monica fundamentally better at what it's supposed to do.

We should also consider whether the feature introduces new dependencies on external services, new security concerns, or entirely new concepts that users will need to understand.

Sometimes, a seemingly simple feature has an absurd amount of complexity hiding behind it.

### Don't promise things

We don't believe in maintaining a detailed public roadmap that tells everyone what will be released six months from now.

We don't know what we'll want to work on six months from now. We don't know what problems we'll discover, what feedback we'll receive, or what our personal lives will look like.

We can share ideas about where we want the project to go, but those ideas shouldn't be interpreted as promises.

Similarly, an open issue on GitHub doesn't constitute a commitment to implement something. It means we are aware of the request and might consider it at some point.

I'd rather disappoint someone by saying no today than disappoint them by making a promise we won't keep.

### Some things will never be implemented

Regardless of how many people ask for something, there are features we simply won't implement.

Anything that fundamentally goes against the purpose of Monica, makes the product unnecessarily complex, compromises privacy, or removes the need to actually make an effort to maintain good relationships is unlikely to ever make it into the product.

We are not trying to build a product that satisfies everyone. Doing so would probably result in a product that nobody particularly likes.

### How we ultimately decide

When we consider working on something, we should ask ourselves a few questions:

- Does it solve a real problem?
- Does it fit within the scope of Monica?
- Would it benefit a meaningful portion of our users?
- Can we solve the problem in a simpler way?
- Are we willing to maintain it for the next ten years?
- Would we enjoy working on it?

We don't need a complicated Excel spreadsheet with weighted scores to prioritize features. We need common sense, a clear vision of what Monica should be, and enough humility to recognize that we might sometimes get it wrong.

There will always be more things to build than time to build them. That's perfectly fine.

Monica doesn't need to be finished. It needs to remain useful, maintainable, and enjoyable to work on.
