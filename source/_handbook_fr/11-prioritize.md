---
title: Comment priorisons-nous les fonctionnalités ?
slug: prioritize
section: product
order: 2
description: Comment nous arbitrons entre les bugs, nos propres envies, les demandes de la communauté, la maintenance à long terme et l’ambition de garder Monica agréable à construire.
updated: 2026-11-18
---

Celui-ci est épicé. En tant que mainteneur de projet, je dois constamment composer avec deux pensées contradictoires. D’un côté, ce que veulent et dont ont besoin les utilisateurs. De l’autre, ce sur quoi j’aime travailler. Parfois ces priorités coïncident, parfois non.

J’ai construit Monica à l’origine pour moi. Je l’ai ouverte en open source pour que d’autres puissent en profiter aussi. Et j’ai décidé d’héberger notre propre instance pour que les personnes qui n’ont pas les connaissances techniques pour l’héberger elles-mêmes puissent l’utiliser aussi.

### Nous ne sommes pas une entreprise de logiciel traditionnelle

Nous voulons que Monica génère assez d’argent pour se financer elle-même et justifier le temps que nous passons dessus. Cependant, maximiser le chiffre d’affaires n’est pas la motivation première du projet.

Chaque fois que je le peux, je recommande aux gens d’utiliser l’image Docker et d’héberger Monica eux-mêmes s’ils ont les connaissances techniques pour le faire. Quels que soient les efforts que nous mettons à sécuriser notre instance hébergée, elle ne vous donnera jamais le même niveau de contrôle qu’un système que vous possédez et maintenez correctement vous-même.

Cette indépendance nous donne le luxe de décider ce sur quoi nous voulons travailler, sans avoir à justifier chaque décision d’un point de vue financier.

### Les bugs d’abord

Corriger les bugs doit généralement avoir la priorité sur l’introduction de nouvelles fonctionnalités.

Quelqu’un qui utilise Monica tous les jours et rencontre le même bug agaçant pendant trois mois se fiche probablement que nous venions d’introduire cinq nouvelles fonctionnalités.

Bien sûr, tous les bugs ne se valent pas. Un bug qui provoque une perte de données est infiniment plus important qu’un bouton décalé de deux pixels sur un navigateur particulier.

Nous devons faire preuve de jugement, mais le principe général est que faire fonctionner correctement le produit existant est plus important que de le rendre plus gros.

### Nous voulons nous amuser

C’est pourquoi, en dehors des corrections de bugs, je peux décider de travailler sur quelque chose que je veux plutôt que sur ce que veut toute la communauté.

Je veux m’amuser avec ce projet. Je veux prendre plaisir à y travailler. J’y passe mes soirées et mes week-ends, et j’aurais plein d’autres choses à faire de ce temps.

Par exemple, implémenter CalDAV ne m’amuse pas. Je ne le ferai probablement jamais. Et je n’accepterai probablement pas non plus cette contribution si elle vient de la communauté, car c’est moi qui devrais la maintenir pendant toute la vie du logiciel, pas la personne qui l’a proposée.

Cela peut paraître égoïste. C’est peut-être le cas. Mais l’alternative serait de passer mon temps libre sur des choses que je n’aime pas, de finir par perdre l’intérêt pour le projet et d’arrêter complètement d’y travailler.

Je ne pense pas que quiconque y gagnerait.

La motivation des personnes qui maintiennent un projet open source est une ressource incroyablement importante. Nous devons la protéger autant que nous protégeons la qualité technique du projet.

### Écouter la communauté

Cependant, je ne suis pas aveugle non plus. Si je vois que quelque chose revient sans cesse, j’envisagerai sérieusement de l’implémenter.

Je veux aider les autres, et une façon d’aider les autres est de construire ce dont ils ont besoin.

Les retours de la communauté sont extrêmement précieux, car ils nous exposent à des façons d’utiliser Monica auxquelles nous n’aurions jamais pensé nous-mêmes. Nos propres vies ne sont pas forcément représentatives de celles de tout le monde.

Cela dit, le nombre de votes positifs sur une issue GitHub n’est pas le seul critère pour décider si quelque chose doit être construit.

Une fonctionnalité demandée par une centaine de personnes peut aller fondamentalement à l’encontre de la philosophie du projet. Une fonctionnalité demandée par une seule personne peut être une idée absolument brillante qui profiterait à tous.

La popularité indique qu’il y a peut-être un problème qui vaut la peine d’être résolu. Elle ne nous dit pas forcément comment le résoudre ni si Monica est le bon outil pour le faire.

### Une contribution n’est pas gratuite

Une des idées reçues sur l’open source est que, si quelqu’un est prêt à implémenter une fonctionnalité lui-même, il n’y a aucune raison de ne pas l’accepter.

Eh bien, non.

Écrire le code initial n’est qu’une petite partie du coût d’une fonctionnalité. Une fois que nous l’acceptons, nous en devenons responsables. Nous devons la tester, la documenter, la traduire, la sécuriser, corriger ses bugs et nous assurer qu’elle continue de fonctionner à mesure que le reste de l’application évolue.

La personne qui a proposé la fonctionnalité peut disparaître du projet dès le lendemain. La fonctionnalité, elle, est désormais notre responsabilité.

C’est pourquoi nous pouvons rejeter une pull request parfaitement exécutée. Cela ne signifie pas forcément que le code est mauvais ou que nous n’apprécions pas l’effort. Cela signifie simplement que nous ne voulons pas assumer la responsabilité à long terme de la maintenance de cette fonctionnalité particulière.

### Considérer le coût de dire oui

Chaque fonctionnalité sur laquelle nous travaillons est une fonctionnalité de plus que nous ne faisons pas ailleurs.

Si nous passons trois semaines à implémenter une intégration avec un autre logiciel, ce sont trois semaines que nous ne passerons pas à améliorer le cœur de Monica.

Nous avons un temps limité. Nous devons en consacrer le plus possible à ce qui rend Monica fondamentalement meilleure dans ce qu’elle est censée faire.

Nous devons aussi nous demander si la fonctionnalité introduit de nouvelles dépendances envers des services externes, de nouveaux problèmes de sécurité ou des concepts entièrement nouveaux que les utilisateurs devront comprendre.

Parfois, une fonctionnalité apparemment simple cache une complexité absurde.

### Ne promettez rien

Nous ne croyons pas à une feuille de route publique détaillée qui dirait à tout le monde ce qui sera publié dans six mois.

Nous ne savons pas sur quoi nous voudrons travailler dans six mois. Nous ne savons pas quels problèmes nous découvrirons, quels retours nous recevrons, ni à quoi ressembleront nos vies personnelles.

Nous pouvons partager des idées sur la direction que nous voulons donner au projet, mais ces idées ne doivent pas être interprétées comme des promesses.

De même, une issue ouverte sur GitHub ne constitue pas un engagement à implémenter quelque chose. Elle signifie que nous avons connaissance de la demande et que nous pourrons l’envisager à un moment ou un autre.

Je préfère décevoir quelqu’un en disant non aujourd’hui que le décevoir en faisant une promesse que nous ne tiendrons pas.

### Certaines choses ne seront jamais implémentées

Quel que soit le nombre de personnes qui demandent quelque chose, il y a des fonctionnalités que nous n’implémenterons tout simplement pas.

Tout ce qui va fondamentalement à l’encontre de la raison d’être de Monica, rend le produit inutilement complexe, compromet la vie privée ou supprime la nécessité de faire réellement un effort pour entretenir de bonnes relations a peu de chances d’entrer un jour dans le produit.

Nous n’essayons pas de construire un produit qui satisfait tout le monde. Ce serait probablement aboutir à un produit que personne n’aime particulièrement.

### Comment nous décidons en fin de compte

Quand nous envisageons de travailler sur quelque chose, nous devons nous poser quelques questions :

- Est-ce que cela résout un vrai problème ?
- Est-ce que cela entre dans le périmètre de Monica ?
- Est-ce que cela profiterait à une part significative de nos utilisateurs ?
- Pouvons-nous résoudre le problème de façon plus simple ?
- Sommes-nous prêts à le maintenir pendant les dix prochaines années ?
- Aurions-nous plaisir à y travailler ?

Nous n’avons pas besoin d’un tableau Excel compliqué avec des scores pondérés pour prioriser les fonctionnalités. Nous avons besoin de bon sens, d’une vision claire de ce que Monica doit être et d’assez d’humilité pour reconnaître que nous nous trompons parfois.

Il y aura toujours plus de choses à construire que de temps pour les construire. C’est parfaitement normal.

Monica n’a pas besoin d’être terminée. Elle doit rester utile, maintenable et agréable à construire.
