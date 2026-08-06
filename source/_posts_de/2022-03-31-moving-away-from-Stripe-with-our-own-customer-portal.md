---
title: "Weg von Stripe, hin zu unserem eigenen Kundenportal"
slug: moving-away-from-Stripe-with-our-own-customer-portal
date: 2022-03-31
published_at: 2022-03-31T17:20:39+00:00
author: 'Regis Freyd'
description: "Wir haben beschlossen, von Stripe zu Paddle zu wechseln."
original_url: https://www.monicahq.com/blog/moving-away-from-Stripe-with-our-own-customer-portal
---
Derzeit nutzen wir Stripe, um unsere Abonnements zu verwalten. So sehr wir Stripe aus Entwicklersicht schätzen, so sehr ist der Umgang mit Steuern weltweit ein einziges Durcheinander, besonders zum Ende des Geschäftsjahres. Unser Buchhalter hasst uns.
Wir müssen zu einem anderen Zahlungsdienstleister wechseln, der alle Steuern richtig abwickelt. Dieser Dienstleister heißt [Paddle](https://paddle.com).

Es gibt noch einen weiteren Grund, warum wir unser Vorgehen ändern wollen. Monica ist in erster Linie ein quelloffenes Produkt. Wir haben eine riesige Gemeinschaft. Viele von Ihnen betreiben Monica auf eigenen Servern. Weil wir das Produkt auch selbst betreiben, um damit Geld zu verdienen, steckt bislang der gesamte Code zur Verwaltung von Abonnements in der Hauptcodebasis. Das ist eine Menge Code. Wir kümmern uns um das Abschließen, Ändern und Kündigen eines Abonnements, um sämtliche Berechtigungen drumherum und so weiter. Ideal ist das nicht.

Wir haben beschlossen, den gesamten Abrechnungscode aus der Hauptcodebasis zu entfernen und ein neues Portal zu schaffen, das Abonnementportal, über das Sie Ihre Monica-Abonnements verwalten. Sie müssen dort ein Konto anlegen und einen Lizenzschlüssel kaufen, den Sie in Ihr Monica-Konto einfügen. Mehr ist nicht nötig.

Wenn Sie derzeit ein Abonnement haben, ermöglichen wir Ihnen einen einfachen Wechsel auf das neue. Weitere Anweisungen folgen für jeden von Ihnen per E-Mail.

Wir planen den Umstieg auf dieses neue Kundenportal in den kommenden Wochen.
