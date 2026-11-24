---
title: 'Building Monica: modeling relationships between people'
slug: modeling-relationships
date: 2026-09-02
author: 'Regis Freyd'
description: 'Deciding what a relationship actually is turned out to be one of the hardest problems in rebuilding Monica.'
---
When we started rebuilding Monica, I knew relationships would be one of the areas we would have to rethink. What I didn't expect was how difficult it would be to even define what a relationship is in the first place.

A personal CRM needs to know how people are related to each other. Someone is your mother, your brother, your friend, your colleague or your partner. Monica has supported this for years, and from the user's perspective it's a pretty simple feature: you select a person, choose a relationship and you're done.

Unfortunately, designing what happens behind that little dropdown is not simple at all.

## Even simple relationships aren't that simple

Let's say Monica is Ross's sister. From Monica's perspective, Ross is her brother. Both statements describe the same relationship, but the words we use depend on which person we're looking at.

The same thing happens everywhere in a family. Rachel is Emma's mother, while Emma is Rachel's daughter. Someone's aunt has a niece or nephew. A grandmother has a granddaughter or grandson.

Other relationships don't work like this. Chandler and Joey are friends. The word is the same regardless of which side you're looking at. Cousins and colleagues can work the same way.

So already we have different behaviours. Sometimes a relationship changes its name depending on which side we're looking at, sometimes it doesn't, and sometimes the word we use depends on the gender of one of the people.

And this is the easy part.

## Families are messy

Imagine two people get married and have two children. They divorce. One of them remarries someone who already has children from another relationship, and perhaps they have another child together.

This is not a particularly unusual family, but we now have parents, children, siblings, half-siblings, stepchildren, stepparents, spouses and former spouses.

It also starts raising questions for which I don't think there is always a universal answer. If you get divorced, does your mother-in-law stop being your mother-in-law? Technically, perhaps. But what if you've known her for twenty years and still consider her part of your family? She certainly doesn't stop being the grandmother of your children just because your marriage ended.

Then there are biological parents, adoptive parents, foster parents and guardians. Someone may have several people they consider parents, and those relationships don't necessarily mean the same thing. There are estranged family members, people who consider someone a brother or sister despite having no biological relationship, former partners who remain very close, and parents raising children together who are no longer a couple.

The clean family tree we tend to imagine when thinking about this problem doesn't survive contact with many actual families.

And even when the family structure itself is straightforward, relationships change. Someone who is your partner today may be your ex-partner in five years. That doesn't mean the old relationship should simply disappear. The fact that two people were married for fifteen years remains part of their history even if they're no longer married.

Relationships have a past, which makes representing only their current state problematic as well.

## Two people may not agree on their relationship

Family relationships give us at least some facts to work with. Friendship is even less precise.

If Monica considers Rachel a close friend, does Rachel necessarily consider Monica a close friend? We have no idea.

The same problem exists with mentors, acquaintances and plenty of other relationships. Someone might consider another person their mentor even if that person would never use the word themselves. Someone may consider an old friend practically family while the other person sees them as someone they knew years ago.

This matters a lot in Monica because the information isn't meant to describe some objective social graph. It's your information about the people in your life.

When you write that someone is your friend, you're describing the relationship as you understand it. Monica doesn't have the other person's version of the story, and in many cases there probably isn't a single correct answer anyway.

This gets particularly strange when software tries to turn relationships into something measurable. Is someone a better friend because you see them every week? Is a friend you haven't seen in five years less important than a colleague you talk to every day? Obviously, frequency tells us something about a relationship, but it doesn't tell us what that relationship means to someone.

## Time doesn't fit nicely either

A colleague can become a friend. A friend can become a partner. A partner can become an ex-partner, and years later the same person might become a friend again.

If Monica records that two people are married and they later divorce, what should happen to the marriage? Removing it would make the current information correct, but would also remove something fairly important about their history.

We could keep dates, except that people often don't know them. I might know that two friends used to be together without having any idea when they started dating or exactly when they separated. Requiring precise dates would make the model cleaner while making the product considerably more annoying to use.

There is also no guarantee that relationships change neatly from one state into another. People don't necessarily wake up one morning and change from "friend" to "partner". Some relationships have a clear beginning, such as a marriage. Many others don't.

The database would very much like us to know when everything started and ended. Most of the time, we don't.

## English isn't the model for the entire world

Another problem is that most of the first examples that come to mind are based on English.

English uses "cousin" for a large number of family relationships, but other languages can be much more precise. Mandarin Chinese, for instance, has different words for cousins depending on which side of the family they come from, their gender and sometimes their age. Swedish distinguishes all four grandparents: *mormor* is your mother's mother, *morfar* your mother's father, *farmor* your father's mother and *farfar* your father's father. English simply gives us "grandmother" and "grandfather."

Korean provides another example. Even something as simple as "older brother" changes depending on who is speaking. A man calls his older brother *hyeong*, while a woman calls her older brother *oppa*. The relationship vocabulary contains information that isn't present in the English word "brother."

This matters for Monica because it is translated into many languages and used around the world. We can't design the entire relationship system around the assumption that English contains the canonical list of relationships and that every other language simply needs to translate those words.

This is a problem we've already encountered in Monica, and rebuilding it doesn't magically make it disappear.

## Family isn't even the hardest part

At least family relationships tend to have names. The rest of our relationships are much less structured.

"Friend" can describe someone you've known for thirty years and talk to every week, but it can also describe someone you see twice a year and still care about very much. A colleague can be the person sitting next to you every day or someone you worked with fifteen years ago.

And people don't fit into one category at a time. Someone can be your colleague, friend and former roommate. Your business partner can also be your brother. Your neighbour can be the parent of your daughter's best friend.

Sometimes the context itself is what matters. You know someone because you went to school together, played on the same team, lived in the same building or worked on the same project. "Friend" might be technically correct, but it loses the information that explains why this person is part of your life in the first place.

This is where a simple question like "how do you know this person?" starts becoming surprisingly difficult to answer with a single field.

## One relationship can imply many others

Suppose Ross is Monica's brother and Ross has a son named Ben. We immediately understand that Monica is Ben's aunt.

Software can reach the same conclusion. And once it starts doing that, it can keep going.

Parents imply children. Children with the same parents may be siblings. Siblings with children create aunts, uncles, nieces and nephews. Add another generation and you have grandparents and grandchildren. Pretty quickly, a small number of relationships can produce a much larger family graph.

But the fact that software *can* infer something doesn't necessarily mean it should.

A parent's new spouse isn't automatically a child's parent. Two people who share a parent may technically be half-siblings, but perhaps they don't know each other. The information Monica has may also simply be incomplete. And even if the family relationship is technically correct, it may not be the relationship the people involved would use to describe each other.

Every time the software infers another relationship, it also gets another opportunity to be wrong.

## There are more questions than answers

The more we work on this, the more edge cases we find.

Should Monica remember the history of a relationship or only its current state? Can two people have several relationships at the same time? Is "best friend" a different relationship from "friend", or is that something else? What happens when we know someone's mother but don't have their mother as a contact in Monica? How do we describe relationships that matter to us but don't have a convenient name?

Some of these are database problems. Most aren't.

The difficult part is deciding what we mean when we say two people have a relationship, because humans don't use that word with anything close to the precision a database would prefer.

From the interface, all of this may eventually amount to a few words on someone's profile: mother, brother, friend, colleague.

Getting those few words right is one of the hardest problems we're dealing with while rebuilding Monica.
