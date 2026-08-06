---
title: 'A new Monica is coming'
slug: a-new-version-is-coming
date: 2022-08-28
published_at: 2022-08-28T20:44:00+00:00
author: 'Regis Freyd'
description: 'A completely new major version is coming.'
original_url: https://www.monicahq.com/blog/a-new-version-is-coming
---
[Alexis](https://twitter.com/asbin) and I [(Regis)](https://twitter.com/maazarin) have been working for a few months now (well, since January 2022 actually) on a a brand new version of Monica. The actual first new major version since we launched a few years ago.

I’m super tempted to call it a “faster, newer, better version”, because it is, but I’m not good at marketing, so I’ll just say that it’s a new version and I’ll answer the questions you might have below.

**What do we mean by new version?**

A complete rewrite, from scratch, of Monica.

**Are you insane?**

Yes, but also, Monica is an old code base now. Old in the sense that it’s 7 years old and it has been touched by hundred of contributors. There are some concepts in the code that we let through, because we either didn’t know any better back then or because we didn’t want to piss off contributors, that we don’t want anymore. The project has way too many dependencies, and maintaining the code has become harder than it was before. Changing something is riskier, and takes more time. Also, we’ve seen how people use Monica, what they want to do with it, and the current code limits us way too much if we want to support what people want to use Monica for. Finally, Monica is still a side project for us. We are extremely passionate about it, and we want to also have fun building it. And the current version wasn’t that fun.

**What do you mean by rewrite?**

We mean that we’ve started from an empty code base, and we started from there. Previously, it was a Laravel app (so, PHP), with Blade views and some Vue here and there. Now, it’s still a Laravel app (so, still PHP), with Vue 3 entirely. We’ve simplified a lot of stuff, we’ve made some stuff more flexible and therefore a bit more complex, but we believe we can support the future of Monica with it.

This also means we have a brand new data structure, supported by a new database schema.

**Will the new version be called Monica?**

Right now, the new Monica's code name is Chandler. We won’t keep this name though–the official name of the new Monica will be Monica. For the sake of clarity, we'll call the new version Chandler throughout the rest of the article.

**You choose PHP despite \<insert new language/framework>?**

PHP is a great language. It’s not the PHP 4 or 5 era anymore. Also, it’s a very simple language –this means that there are a lot of people in the world that read and understand PHP. Choosing PHP means it’s easier to contribute to the project, easier to debug, easier to maintain and easier for us to find people to help us, if needs arise in the future. Finally, the PHP ecosystem is just great, with Laravel paving the way for one of the best Developer Experience I know.

**What features will Chandler contain?**

At launch, we want to match 100% (or almost) the feature set that Monica v1 offers. Even if we match features, we wanted to either simplify them (tasks for instance), or make them more robust (reminders, for example).

Once this is done, we have so many ideas for what Monica should become that it’s overwhelming. Basically, Monica was born as the first personal CRM (or PRM–personal relationship manager) out there. So we branded it that way. But after years of working on it and talking to people and reading the thousands of emails you’ve sent us, we realized that Monica really is a way to document your life, whatever that means for you. So, Monica will be about documenting your life, and giving you tools to help you document it the way you want it.

We read everywhere that products should be opinionated, and have a strong personality so people use your tools the way you want them to use it. This was the direction of v1. Now we want to change that statement. We want people to use and configure Monica the way they want. Who are we to tell you that you should use only 3 pronouns for your contacts, or tell you which relationship types you should have? Chandler will be completely customizable, from what you see in the UI, to the type of data you can enter. Marketing people would say "Chandler is all about you” and it’s true, in a sense. The drawback: from a technical point of view, it’s harder to manage, but this one is on us.

**When will it be ready? Can I try it?**

It’ll be ready when it’s ready. Remember, we don’t work full time on this, at all. Alexis and I have both demanding day jobs, and we have families, and friends, and Monica (and OfficeLife, as well).

HOWEVER.

We have done a lot already. Some big features that you know and love are still missing from the new version: life events, activities, gifts and CalDav/CardDav, to name a few. Life events, in particular, is really big because we want to completely rethink the concept and make it really useful. Also, and this is a huge “also”, right now, we don’t have an API yet. Since this is a new code base, we can’t simply copy and paste your existing v1 contacts and expect them to show in v2. So, if we were to release something now, you couldn’t import your data. And we think this is a problem.

THAT BEING SAID.

We still need testers to help us find bugs, even though we don’t do bugs here (lol). We need people to help fix docs spelling errors. So what we could do, is launch Chandler in a very alpha state, free for all until it’s not alpha anymore.

**Is it still open source? Can I use it for free?**

Yes, it’s still open source, with the same license as before. That means Monica is free, of course, unless you use the version that we host, that eventually will cost something, like the current version. Yes, you can install it wherever you like, on your own server. Since Chandler is not the same code base, we haven’t the same rich ecosystem that we had before and all those many different ways to install it everywhere, but we’ll get there. Yes, you can still contribute to the code, fix bugs, add features – even though we still have the right to refuse your pull requests if we think we don’t want to support what you want us to support.

**What is the future of Monica v1?**

We’ll support v1 until Chandler is out of alpha/beta. Then, it’ll be deprecated but people who have hosted it will be able to continue use it if they want. The v1 version we host ourselves will not be supported after this.

**Can you contribute to the code base already?**

The repository is already [available on Github](https://github.com/monicahq/chandler), but we are far from being as mature as the current main repo. That means we are not yet ready to support contributions from everyone, as things change almost every day, but if you accept this, go ahead.

**What's next?**

First of all, thank you so much for having read this blog post entirely. We are super grateful for our community, how you are still passionate about this little tool that we have fun building. Alexis and I are still super motivated about this tool, and we thank you for caring with us. We'll keep in touch.
