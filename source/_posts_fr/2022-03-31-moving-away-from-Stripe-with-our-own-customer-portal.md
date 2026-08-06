---
title: "Quitter Stripe pour notre propre portail client"
slug: moving-away-from-Stripe-with-our-own-customer-portal
date: 2022-03-31
published_at: 2022-03-31T17:20:39+00:00
author: 'Regis Freyd'
description: "Nous avons décidé de quitter Stripe pour Paddle."
original_url: https://www.monicahq.com/blog/moving-away-from-Stripe-with-our-own-customer-portal
---
Aujourd'hui, nous utilisons Stripe pour gérer nos abonnements. Autant nous adorons Stripe du point de vue d'un développeur, autant la gestion des taxes dans le monde entier est un vrai casse-tête, surtout en fin d'exercice comptable. Notre comptable nous déteste.
Nous devons passer à un autre prestataire de paiement qui traitera correctement toutes ces taxes. Ce prestataire s'appelle [Paddle](https://paddle.com).

Il y a une autre raison à ce changement d'approche. Monica est avant tout un produit open source. Nous avons une immense communauté. Beaucoup d'entre vous hébergent Monica sur leurs serveurs. Comme nous hébergeons aussi le produit nous-mêmes pour le monétiser, nous avons jusqu'ici inclus tout le code nécessaire à la gestion des abonnements dans le code principal. Cela représente beaucoup de code. Nous gérons la souscription, la modification et la suppression d'un abonnement, avec toutes les permissions autour, et ainsi de suite. Ce n'est pas idéal.

Nous avons décidé de retirer tout le code de facturation du code principal et de créer un nouveau portail, appelé portail d'abonnement, pour gérer vos abonnements Monica. Vous devrez créer un compte sur ce site et acheter une clé de licence à coller dans votre compte Monica. Rien d'autre n'est nécessaire.

Si vous avez actuellement un abonnement, nous vous permettrons de basculer facilement votre compte vers le nouveau. Des instructions détaillées suivront par email pour chacun d'entre vous.

Nous prévoyons de passer à ce nouveau portail client dans les prochaines semaines.
