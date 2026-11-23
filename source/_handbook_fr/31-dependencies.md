---
title: "Les dépendances sont des engagements"
slug: dependencies
section: engineering
order: 7
description: "Un paquet peut faire gagner un week-end et réclamer de l’attention pendant des années."
updated: 2026-11-18
---

Ajouter un paquet peut être une très bonne décision. Écrire notre propre version d’un problème difficile et déjà bien résolu n’a rien de noble en soi.

Mais installer une dépendance, c’est le début d’une relation, pas la fin d’une tâche. Comme c’est approprié pour Monica.

Ce paquet peut changer d’interface, exiger un nouvel environnement d’exécution, introduire une faille ou cesser d’être maintenu. Nous restons responsables de l’effet sur nos utilisateurs.

### Considérer l’ensemble

Avant d’en ajouter une, nous devrions comprendre le problème qu’elle résout et la partie de Monica qui dépendra d’elle. Une petite commodité utilisée à un seul endroit appelle une autre discussion qu’une bibliothèque placée entre chaque utilisateur et ses informations.

Pouvons-nous comprendre son comportement ? Sa licence convient-elle au projet ? Qu’emporte-t-elle avec elle ? Les gens peuvent-ils auto-héberger Monica sans ouvrir un compte chez un autre service ? Si nous devons la remplacer plus tard, quelle part de l’application s’en souciera ?

Ce sont des questions utiles, pas l’affirmation que chaque dépendance passée a franchi une liste de contrôle formelle. Nous faisons aussi des choix imparfaits.

[Une technologie familière](/fr/manuel/boring-technology/) et un écosystème sain aident, mais la popularité ne garantit pas la maintenance.

Je ne veux pas que nous refusions des paquets par orgueil. Je ne veux pas non plus vingt nouvelles dépendances parce que l’une d’elles dessine une liste déroulante un peu plus jolie.

La commande d’installation est courte. Malheureusement, l’engagement n’a pas à l’être.
