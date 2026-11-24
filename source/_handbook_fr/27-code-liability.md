---
title: "Le code est un passif"
slug: code-liability
section: engineering
order: 3
description: "La valeur, c’est ce que le logiciel permet aux gens de faire ; le code, c’est ce dont nous devons nous occuper."
updated: 2026-11-18
---

Une nouvelle fonctionnalité peut apporter de la valeur. Le code qui la porte apporte de la responsabilité.

Quelqu’un doit le comprendre, le relire, le tester, traduire les messages qu’il introduit et le corriger quand une dépendance change. À terme, ce quelqu’un peut être moi, un dimanche où j’avais prévu de faire littéralement n’importe quoi d’autre.

C’est pourquoi je ne trouve pas le nombre de lignes ajoutées à Monica particulièrement impressionnant.

### La facture arrive plus tard

Imaginez deux façons de représenter la même information personnelle. L’une s’intègre à un concept existant. L’autre ajoute ses propres écrans, permissions, tâches de fond et réglages.

La seconde approche peut se justifier. Mais nous devrions pouvoir nommer le bénéfice, parce que chacune de ces pièces mobiles appartient désormais au projet.

Cela devient encore plus vrai quand générer du code ne coûte presque rien. Un outil peut produire rapidement une grosse implémentation sans que le résultat devienne pour autant simple à comprendre ou sûr à maintenir.

Supprimer sans précaution des comportements utiles n’est pas la réponse. [Retirer des fonctionnalités](/fr/manuel/removing-features/) demande des égards envers ceux qui s’y fient. Le meilleur moment pour éviter du code inutile, c’est avant d’accepter l’obligation.

Une solution courte n’est pas automatiquement bonne non plus. Dix lignes incompréhensibles peuvent coûter plus de travail que cinquante lignes évidentes.

Je veux assez de code pour que Monica soit utile et compréhensible. Je ne veux pas une grosse collection de code qui prouve seulement que nous avons été très occupés. Le dépôt n’est pas un programme de fidélité. Nous ne recevons pas de sandwich gratuit après un million de lignes.
