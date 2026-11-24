---
title: "Comment nous abordons les tests"
slug: testing
section: engineering
order: 5
description: "La confiance devrait suivre les conséquences d’une erreur, surtout quand cette erreur pourrait faire perdre les souvenirs de quelqu’un."
updated: 2026-11-18
---

Dans mon [article de 2017 sur Laravel](/fr/blog/laravel/), j’ai reconnu que lancer le projet sans tests unitaires lui avait fait du mal. Corriger une chose pouvait en casser une autre. Ce n’était pas une découverte particulièrement agréable.

La leçon n’est pas qu’un nombre de tests rend un logiciel sûr. C’est que l’intuition seule protège mal un comportement dont les gens dépendent.

### Tester la conséquence

Pour Monica, certaines erreurs comptent bien plus que d’autres. Une note qui disparaît, un rappel qui se déclenche le mauvais jour, ou une information qui devient visible par la mauvaise personne méritent plus d’attention qu’un détail décoratif légèrement mal aligné.

Nous devrions tester ce que la personne s’attend à voir se produire, y compris ce qui ne doit pas se produire. Une requête réussie ne suffit pas si elle a enregistré l’information sur le mauvais contact.

Un test de non-régression est particulièrement utile quand il capture une vraie défaillance : les conditions qui l’ont causée et le résultat correct. Il donne aux changements futurs quelque chose de concret à préserver.

Les tests demandent aussi du jugement. Répéter chaque appel de méthode interne dans un test peut rendre un remaniement pénible sans rendre le produit plus sûr. Une suite verte peut encore laisser passer un parcours confus ou un contrôle inaccessible.

Ce sont des priorités, pas une affirmation sur la couverture actuelle, des critères de mise en production ou un programme de tests exhaustif. Cela demande des preuves tirées du code réel.

[La livraison](/fr/manuel/shipping/) et les tests vont ensemble. Nous voulons avancer vite parce que nous comprenons les risques, et non parce que nous ne les avons pas cherchés.
