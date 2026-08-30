---
title: 'We are rebuilding Monica'
slug: we-are-rebuilding-monica
date: 2026-08-30
author: 'Regis Freyd'
description: 'We are rebuilding Monica from scratch, and this new series will document how.'
---
This is the first article in a series called **Building Monica**. I want to use this series to document the process of rebuilding Monica, the open source personal CRM, from scratch. I'll talk about the problems we're trying to solve, the decisions we make along the way, and probably some of the things that don't work as expected.

Almost ten years ago, I started building Monica because I was terrible at remembering things about people. I would forget the name of someone's child, what we had talked about the last time we met, or something important they had told me a few months earlier. I wanted a place where I could write these things down, mostly to compensate for my bad memory, so I started using a [professional CRM](https://highrisehq.com/).

It wasn't a great solution. The software was made for salespeople, which I wasn't, and I didn't particularly want to pay for a tool designed to help me make money when all I wanted was to remember things about my friends and family. I looked for something more appropriate and couldn't find it, so I decided to build my own.

That small project eventually became Monica. I put the code on GitHub, posted it on [Hacker News](https://news.ycombinator.com/item?id=14497295), and things went a little crazy from there. It turned out that I wasn't the only person looking for something like this. Alexis eventually joined me as a co-founder, and over the years thousands of people have used Monica, contributed code, translated it, reported bugs and installed it on their own servers. The project now has more than 25,000 stars on GitHub and has become one of the most well-known open source personal CRMs.

I'm very proud of what Monica has become. But after working on it for so long, I've reached a point where the current version is no longer the personal CRM I would build today.

## Almost ten years of decisions

When I started Monica, I obviously didn't have ten years of experience thinking about how to represent personal relationships in software. Most decisions were made when a problem appeared. We needed contacts, so I built contacts. We needed relationships, so I added relationships. Then came reminders, activities, gifts, notes, pets, addresses and many other features.

There is nothing particularly wrong with building software this way. It's how Monica grew, and many of those decisions made sense at the time. But after almost ten years, they accumulate. New ideas have to work around decisions made years earlier, and things that once looked like implementation details slowly become constraints on what you can do with the product.

Over time, this has made some parts of Monica harder to change than they should be. More importantly, I've changed my mind about some of the original decisions.

## What would I build today?

At some point, I started asking myself a simple question: if Monica didn't exist, and I had to build a personal CRM today with everything I've learned over the last decade, what would it look like?

This quickly led to questions that were much more basic than which features Monica should have. What exactly is a person in Monica? How should relationships between people work? How should Monica represent the user themselves? What happens when something important in someone's life isn't another person, but an animal, an organization or something else entirely? How should reminders work when human relationships don't naturally follow schedules? What should an activity represent? And how much of this should Monica define for you in the first place?

Relationships are a good example. Storing that Monica is Ross's sister doesn't seem particularly complicated. But if Monica is Ross's sister, Ross is also Monica's brother. A parent relationship implies a child relationship. Some relationships have a direction while others don't. Real families include divorces, remarriages, stepchildren, half-siblings, adoption and all sorts of structures that don't fit nicely into a predefined list. Different cultures also describe family relationships differently.

I've spent a lot of time thinking about this for the new version, and I now see relationships as their own domain rather than an attribute attached to a contact. It seems obvious to me now. It wasn't obvious when we designed the first versions of Monica.

Customization is another area where I've changed my mind. Historically, Monica has mostly defined what a contact is and what information can be stored about one, and we've added customization around that structure. For v3, we want to reverse this. Monica will still provide good defaults, because nobody wants to configure fifty things before adding their first contact, but your life shouldn't have to fit the database schema we decided was right for everyone.

Once you start changing things at that level, redesigning a few screens isn't enough. The foundations need to change too.

## What I want v3 to be

Monica v3 isn't meant to be the current product with a nicer interface. The interface will change considerably, and I want it to feel much more playful and personal than most of the software we use today, but that's only part of the work.

I want to build a very powerful system for documenting the people and relationships in someone's life. I'm not especially interested in optimizing everything for simplicity if the result is a product that can only represent simple lives. I'd rather have good defaults for people who don't want to configure anything, while giving those who do an enormous amount of control over how their Monica works.

This means treating relationships as first-class concepts and letting people decide what information matters to them. Monica needs to handle much more than a predefined list of fields attached to a contact. The difficult part will be doing all of this without ending up with enterprise software for managing your friends and family, because that would be pretty awful.

There are also things I don't want to change. Privacy and data ownership still matter enormously to Monica. The project will continue to be open source and self-hostable. If you're going to spend years putting some of the most personal information in your life into a piece of software, I think you should have as much control over that information as possible.

I also don't want Monica to decide how important someone is to you. It can help you remember things, organize information and tell you that you haven't spoken to someone in a while. The relationship itself is still yours to maintain.

## Starting again with ten years of experience

"Starting again" isn't entirely accurate, of course. When I created Monica in 2017, I had an idea and a problem I wanted to solve. This time we have almost ten years of experience working on that problem, thousands of conversations with users, contributions from people around the world, two generations of the product and a fairly long list of things we wouldn't do the same way again.

As we work on v3, I want to document more of this publicly. There are a surprising number of difficult problems behind something that looks fairly simple from the outside, especially when you start thinking seriously about relationships, reminders, customization and how to represent something as messy as a human life in a database. I'll write about those problems, but also about the technical and design decisions we're making and the things we try that don't end up working.

That's what **Building Monica** will be about. I don't know how often I'll publish an article, and I don't want to invent a publishing schedule just for the sake of having one. I'll write when we have something interesting to talk about.

In 2017, I built Monica based on what I understood about the problem at the time. Almost ten years later, I understand that problem very differently. That's why we're rebuilding it.
