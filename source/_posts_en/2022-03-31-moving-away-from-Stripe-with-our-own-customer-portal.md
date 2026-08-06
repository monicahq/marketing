---
title: 'Moving away from Stripe with our own customer portal'
slug: moving-away-from-Stripe-with-our-own-customer-portal
date: 2022-03-31
published_at: 2022-03-31T17:20:39+00:00
author: 'Regis Freyd'
description: 'We’ve decided to move away from Stripe to Paddle.'
original_url: https://www.monicahq.com/blog/moving-away-from-Stripe-with-our-own-customer-portal
---
Right now we use Stripe to manage our subscriptions. While we adore Stripe from a developer standpoint, it’s a complete mess to deal with taxes worldwide, especially at the end of the fiscal year. Our accountant hates us.
We need to move to another payment processor which will deal with all the taxes the right way. This payment processor is called [Paddle](https://paddle.com).

There is another reason why we want to change our current approach. Monica is first and foremost an open-source product. We have a huge community. Many of you host Monica on your servers. Because we also host the product ourselves so we can monetize it, we currently have included all the code required to manage subscriptions in the main codebase. That’s a lot of code. We deal with subscribing, editing, and deleting a subscription, with all the permissions around it, and so on. It’s not ideal.

We’ve decided to remove all the billing code from the main codebase, and create a new portal, called the Subscription portal, to manage your Monica subscriptions. You will have to create an account on this website and purchase a license key that you will need to paste into your Monica account. Nothing else is required.

If you currently have a subscription, we’ll allow you to easily transition your account to the new one. Further instructions will follow by email for each one of you.

We plan to transition to this new customer portal in the upcoming weeks.

Like everything we do at Monica, our customer portal is completely open-source and the code is [available on Github](https://github.com/monicahq/customers). And once the customer portal will be live, the main Monica codebase will be completely free of the notion of billing.
