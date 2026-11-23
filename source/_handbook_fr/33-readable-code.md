---
title: "Le code est écrit pour des humains"
slug: readable-code
section: engineering
order: 9
description: "Un futur contributeur devrait pouvoir suivre une relation sans avoir d’abord à résoudre une énigme."
updated: 2026-11-18
---

Un ordinateur exécute sans broncher du code qui rend un humain malheureux.

Malheureusement, ce sont les humains qui doivent le corriger.

Monica est open source. Quelqu’un qui aborde un bug ne connaît peut-être ni notre histoire, ni notre terminologie, ni l’idée astucieuse qui semblait évidente quand nous avons écrit le code. Il contribue peut-être dans une langue qui n’est pas la sienne. Il devrait quand même avoir une chance raisonnable de comprendre ce qui se passe.

### Dire ce que le code signifie

Une relation a une direction. Un rappel a une date et un contexte. Une suppression a des conséquences. Les noms et la structure devraient rendre ces choses visibles plutôt que de les cacher derrière un mécanisme générique qui pourrait vouloir dire n’importe quoi.

Un peu de répétition peut être plus facile à comprendre qu’une abstraction qui tente d’accueillir six cas vaguement semblables. La bonne abstraction est utile. La prématurée devient un petit framework dont personne n’a demandé la maintenance.

Les commentaires sont particulièrement précieux quand ils expliquent le pourquoi : une hypothèse culturelle que nous avons évitée, une règle de date inattendue, un choix de compatibilité. Un commentaire qui annonce que la ligne suivante enregistre un enregistrement est moins une révélation.

Dans [l’article d’origine sur Laravel](/fr/blog/laravel/), j’ai écrit que j’avais supprimé la plupart des événements et des écouteurs parce que trop de comportements étaient devenus difficiles à suivre. C’est un exemple historique, pas une interdiction universelle des événements.

Je veux que les futurs contributeurs passent leur temps à comprendre le problème humain. Décoder mon ancien enthousiasme pour l’astuce ne devrait pas être un prérequis.
