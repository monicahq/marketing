---
title: 'Weg bij Stripe, met ons eigen klantenportaal'
slug: moving-away-from-Stripe-with-our-own-customer-portal
date: 2022-03-31
published_at: 2022-03-31T17:20:39+00:00
author: 'Regis Freyd'
description: 'We hebben besloten van Stripe naar Paddle te verhuizen.'
original_url: https://www.monicahq.com/blog/moving-away-from-Stripe-with-our-own-customer-portal
---
Op dit moment gebruiken we Stripe om onze abonnementen te beheren. We zijn dol op Stripe als ontwikkelaar, maar het is een complete puinhoop om er wereldwijd de belastingen mee af te handelen, zeker aan het eind van het boekjaar. Onze boekhouder haat ons.
We moeten over naar een andere betaaldienst die alle belastingen op de juiste manier afhandelt. Die betaaldienst heet [Paddle](https://paddle.com).

Er is nog een reden waarom we onze huidige aanpak willen veranderen. Monica is in de eerste plaats een open source product. We hebben een enorme gemeenschap. Velen van jullie draaien Monica op hun eigen server. Omdat we het product ook zelf hosten om er geld mee te verdienen, zit op dit moment alle code voor het beheren van abonnementen in de hoofdcode. Dat is veel code. We regelen het afsluiten, wijzigen en opzeggen van een abonnement, met alle rechten die daarbij horen, enzovoort. Dat is niet ideaal.

We hebben besloten alle code rond facturatie uit de hoofdcode te halen en een nieuw portaal te maken, het abonnementsportaal, om je abonnementen op Monica te beheren. Je maakt op die website een account aan en koopt een licentiesleutel die je in je Monica-account plakt. Meer is er niet nodig.

Heb je nu een abonnement, dan kun je je account eenvoudig laten overzetten. Iedereen krijgt daarover per e-mail nadere instructies.

We willen de komende weken naar dit nieuwe klantenportaal overstappen.

Zoals alles wat we bij Monica doen is ons klantenportaal volledig open source en staat de code [op GitHub](https://github.com/monicahq/customers). En zodra het klantenportaal live is, is de hoofdcode van Monica volledig vrij van het begrip facturatie.
