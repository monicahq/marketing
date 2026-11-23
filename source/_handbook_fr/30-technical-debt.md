---
title: "La dette technique n’est pas toujours mauvaise"
slug: technical-debt
section: engineering
order: 6
description: "Un raccourci délibéré peut aider ; un raccourci dont personne ne se souvient est plus difficile à rembourser."
updated: 2026-11-18
---

Parfois, la petite solution un peu bancale est la bonne.

Monica est construite avec un temps limité. Passer trois soirées à créer l’abstraction parfaite pour un problème qui pourrait disparaître la semaine prochaine n’est pas automatiquement de l’ingénierie responsable. C’est parfois une agréable façon d’éviter de livrer.

La dette technique devient utile quand le compromis est compris, contenu et vaut ce qu’il nous permet de faire maintenant.

### Savoir ce que l’on emprunte

Une structure interne imparfaite peut être acceptable pour une première version. Une propriété ambiguë des données personnelles n’est pas le même genre de compromis. Un chemin d’erreur qui peut faire disparaître silencieusement les notes de quelqu’un non plus.

Les questions importantes sont : qu’est-ce qui pourrait mal tourner, à quel point la décision sera-t-elle difficile à défaire, et un futur mainteneur pourra-t-il la reconnaître.

Une courte explication de la raison d’un raccourci peut valoir plus qu’un grand plan pour éliminer toutes les imperfections. Le moi du futur mérite de savoir si quelque chose était délibéré. Il va déjà être assez agacé comme ça.

La dette change aussi avec l’usage. Un bout de code bancal que personne ne touche peut être moins urgent qu’un petit défaut qui complique chaque fonctionnalité du même secteur.

[La refonte](/fr/manuel/rewrite/) rappelle que les décisions accumulées finissent par façonner ce qu’un produit peut devenir. Cela ne veut pas dire que chaque décision d’origine était stupide.

Nous devrions faire nos compromis consciemment, revenir sur les coûteux et résister à l’envie de décrire chaque fichier désagréable comme une urgence. Parfois, il lui faut simplement un meilleur nom.
