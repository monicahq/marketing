---
title: '告别 Stripe，建立我们自己的客户门户'
slug: moving-away-from-Stripe-with-our-own-customer-portal
date: 2022-03-31
published_at: 2022-03-31T17:20:39+00:00
author: 'Regis Freyd'
description: '我们决定从 Stripe 迁移到 Paddle。'
original_url: https://www.monicahq.com/blog/moving-away-from-Stripe-with-our-own-customer-portal
---
目前我们使用 Stripe 来管理订阅。从开发者的角度看，我们非常喜欢 Stripe，但要处理全球各地的税务，实在是一团乱，尤其是在财年末。我们的会计很讨厌我们。
我们需要换一个能正确处理所有税务的支付服务商，它就是 [Paddle](https://paddle.com)。

我们想改变现有做法，还有另一个原因。Monica 首先是一个开源产品，我们有一个庞大的社区，你们中的许多人把 Monica 部署在自己的服务器上。由于我们也自己托管产品以便通过它获得收入，目前主代码库里包含了管理订阅所需的全部代码。这是一大堆代码：我们要处理订阅、修改和删除订阅，以及围绕它们的所有权限，等等。这并不理想。

我们决定把所有计费代码从主代码库中移除，另建一个新的门户，称为订阅门户，用来管理你的 Monica 订阅。你需要在这个网站上创建账户，购买一个许可证密钥，然后把它粘贴到你的 Monica 账户里。除此之外不需要任何其他操作。

如果你目前有订阅，我们会让你轻松地把账户转移到新系统。我们会通过电子邮件分别向每位用户发送后续说明。

我们计划在未来几周内过渡到这个新的客户门户。

和我们在 Monica 做的所有事情一样，我们的客户门户完全开源，代码[可在 GitHub 上获取](https://github.com/monicahq/customers)。等客户门户上线后，Monica 的主代码库里将完全不再有计费这个概念。
