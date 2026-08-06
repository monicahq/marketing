---
title: 'Chandler is in beta'
slug: chandler-is-in-beta
date: 2023-06-08
published_at: 2023-06-08T07:29:00+00:00
author: 'Regis Freyd'
description: 'The new major version is available in beta.'
original_url: https://www.monicahq.com/blog/chandler-is-in-beta
---
We are delighted to announce that after 18 months of hard work, our new version, codename Chandler, is now available in beta: [https://beta.monicahq.com](https://beta.monicahq.com)

Monica was born 7 years ago with the goal of being a personal CRM. This new version is about documenting your life, including what your contacts are doing, but not only.

What does beta mean? It's like having a bunch of mischievous little bugs hiding in our software, playing hide-and-seek with us. We're pretty sure they're there, but we have no idea which ones or where they're hiding! So, we need all the brave souls out there to join our bug-hunting squad and help us flush them out before we release it to the public.

Chandler is a complete reimagining of Monica, built from the ground up. We eliminated the extensive technical debt we had accrued over the years and added or improved many new features. Despite the fact that we did not promote Chandler, we’ve had a lot of users who tested Chandler already and found some bugs that we’ve fixed, but we haven’t tested this software at scale. So please, create an account, and have fun.

The version available on the beta server can be considered stable. We will not reset the database. We’ll backup your data daily, and we will keep the data once we’ll launch the final version officially.

Chandler comes with some limitations:

- You can’t use your current Monica login,
- You can’t import your data,
- There is no mass import of contacts available,
- We don’t have an API yet.

We have plenty of new features, a new layout, and the highly requested dark mode.

On a personal note, the feature I’m most proud of is the ability to customize almost everything in Chandler: from the layout, to the modules you can enable, to the data you can enter about your life.

Chandler is still open source and can be installed on your server for free, if you know how to use Docker or the command line. You can still modify the code if you so desire. Monica is, and always will be, open source. This is the way.

For now, Monica is free on our hosted instance ([https://beta.monicahq.com](https://beta.monicahq.com)), but we will have the same pricing as the current version as soon as we consider the product stable.

I'm incredibly proud of what we've achieved in the past eight years. Back then, I was scared to make my code public because I knew it was of poor quality. Surprisingly, people didn't seem to care. Now, our codebase is still open to the public, and we're no longer concerned about people judging it. The app is still a Laravel application, with VueJS on the front end, using InertiaJS between the front and the back. It’s a super simple stack. We strive to keep our codebase as simple as possible to facilitate maintenance, evolution, and finding developers to assist us.

We will soon migrate our official Docker image to Chandler. We have had over 25 million downloads of the image, which makes us humble.

On behalf of the entire Monica team, thanks for sticking with us all this time. The « entire Monica team » is basically two friends, Alexis and I, who are really passionate about providing cool tools for people to improve their lives. Monica is still a side project for us, we have full time jobs « on the side ». While some people play computer games or watch Netflix, we « play » in Monica’s codebase. And we love it.
