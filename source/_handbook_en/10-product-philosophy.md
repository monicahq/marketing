---
title: Product philosophy
slug: product-philosophy
section: marketing
order: 4
description: Simple to use, built by iteration, problem first, smart defaults over options, and never a shortcut around the work relationships take.
updated: 2026-11-18
---

### Make things obvious

A product should be simple to use. Users should ideally never have to look for help to do something. That being said, a link to the help center should be present on every screen in order to assist users if, unfortunately, the UI is not clear enough.

Documentation should complement the product, not compensate for bad design.

We shouldn't assume that something is intuitive just because it is intuitive to us. We've spent hundreds of hours building the product. We know exactly where everything is and why things work the way they do. Someone discovering Monica for the first time has none of that knowledge.

We also shouldn't confuse simplicity with minimalism. Removing a label from a button might make the interface look better, but if people no longer understand what the button does, what have we actually accomplished?

### Iterate constantly

We should always iterate. The first version of a feature should be a somewhat embarrassing but very functional solution to a problem or a need. Then, using a fast-paced build-measure-learn feedback loop, we can create a better version.

We shouldn't get too attached to our original ideas. Just because we've spent three weeks building something a certain way doesn't mean it's the right way to do it.

Sometimes, the best improvement we can make to a feature is to completely rethink it. Sometimes, it's to remove half of what we've built.

There is also no obligation to continually improve a feature. If something works well, solves the problem it was designed to solve, and people are happy with it, we can simply leave it alone. There is no need to redesign something every two years just for the sake of redesigning it.

### Start with the problem

We should always start with the problem, not the solution. We should focus on well-formed problem statements in order to understand the core of the issues faced by the user. Only after giving the problem enough thought can we fully understand the big picture and envision a solution.

When someone asks us to implement a feature, what they're usually doing is describing their preferred solution to a problem they have. It's our responsibility to understand the underlying problem, not necessarily to implement their solution.

Sometimes, we can solve that problem with a much simpler solution. Sometimes, the product already solves it, but we haven't done a good enough job of making that obvious.

The fact that we can build something is not a particularly good reason to build it. This is even more true in the age of AI, where writing the code is increasingly becoming the easiest part of building a product.

Understanding what to build is still the hard part.

### Smart defaults over options

As much as possible, we should resist adding configuration options or settings. It's much better to have smart defaults than to pollute the product with options. Every option adds complexity in terms of engineering, testing, documentation, and understanding the product.

One of the personality traits of a project maintainer is the desire to please people. We want users to love what we've spent nights and years creating.

So, every time we receive a feature request, it's only natural to want to implement it, especially if it's about adding an option. After all, we're just giving users a choice. What could possibly go wrong?

Well, multiply that reasoning by a thousand feature requests and you end up with a product that nobody fully understands, including the people who built it.

Adding an option is also sometimes a way of avoiding making a decision. Instead of figuring out what the best behaviour should be, we implement both and let the user decide. That's not necessarily good product design. Sometimes, it's just laziness on our part.

We should resist, as much as possible, creating a situation where our product becomes so complex that it is no longer maintainable. 37signals has a great article about [saying no](https://basecamp.com/gettingreal/05.3-start-with-no). Read this.

Of course, some things genuinely need to be configurable. People's lives are different. But there is a fundamental difference between letting people document their lives the way they want and letting them configure every aspect of how the software works.

### Build for real life

Life is messy. People forget things. Relationships change. Families are complicated. Information is incomplete. Sometimes, we don't even know the name of someone we've met several times.

Monica should accommodate that reality.

We shouldn't force people to fill out information they don't have. We shouldn't impose rigid workflows when there is no good reason to do so. We shouldn't assume that everyone documents their life in a structured and organized way.

The product should adapt to the imperfections of real life, not expect real life to adapt to the product.

### Think in decades

Most software products are designed around what users need today. Monica also needs to consider what users might need ten or twenty years from now.

A seemingly insignificant piece of information today might become extremely valuable in the future. The name of someone you met on a trip, a conversation with your grandparents, or something funny your child said when they were five years old.

This has implications for how we design the product. We should be extremely careful about losing information, introducing breaking changes, or making decisions that will prevent people from accessing their data years from now.

We should also be wary of building features around technologies or trends that might no longer exist in a few years.

Human life hasn't fundamentally changed because a new JavaScript framework came out last Tuesday.

### Respect the user's attention

We don't want to build a product that people are addicted to.

We don't need streaks, leaderboards, engagement scores, or achievements to encourage people to document their lives. We don't want users to feel guilty because they haven't opened Monica in two weeks.

There is no such thing as a successful day measured by how many notes you've added to Monica.

Notifications and reminders should exist because they bring value to the user, not because they bring the user back into the application.

The ideal outcome of using Monica might very well be spending less time in front of a screen and more time with the people you care about.

### Don't automate being human

Finally, we will never implement a feature that removes the need to make an effort in maintaining healthy relationships.

What do I mean by that? Having a social circle requires time and effort. There is no easy way to have great relationships. Monica will help you document your life, but it won't replace the need to, you know, actually work on your relationships.

We can remind you that it's someone's birthday. We can help you remember what you talked about the last time you saw someone. We can help you remember the name of your colleague's daughter.

But remembering someone's birthday is not the same thing as caring about them. Sending someone an automated message is not the same thing as taking the time to write to them.

We don't want to turn human relationships into a series of tasks that need to be completed, optimized, or automated. People are not leads in a sales pipeline. Friendships don't need performance indicators.

Technology can help remove some of the friction involved in maintaining relationships. It shouldn't remove the human effort that makes those relationships meaningful in the first place.

Monica should help you be more present in your life, not live it on your behalf.
