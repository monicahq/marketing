---
title: "La beauté d’un monolithe"
slug: monolith
section: engineering
order: 8
description: "Garder le travail lié au même endroit jusqu’à ce qu’un vrai problème nous donne une raison de le séparer."
updated: 2026-11-18
---

Un contact a une relation. Cette relation apparaît dans une chronologie. Un rappel renvoie à la vie de la même personne.

Ces concepts demandent déjà assez de réflexion sans qu’il faille, en plus, déboguer une conversation réseau entre plusieurs applications chaque fois qu’ils interagissent.

Un monolithe séduit parce qu’il garde une grande partie de ce travail au même endroit. La frontière d’un problème peut rester proche du code qu’il faut lire pour le comprendre.

### Ce qui est simple à raisonner a de la valeur

Pour une petite équipe, chaque service supplémentaire est une chose de plus à déployer, à surveiller, à mettre à jour et à expliquer. Pour une personne qui auto-héberge, c’est une exigence de plus entre le téléchargement de Monica et son utilisation réelle.

Répartir le code entre des processus ne produit pas automatiquement des frontières nettes. On peut conserver toute la confusion et y ajouter des délais d’attente. Une belle prouesse, techniquement.

Nous devons quand même séparer les responsabilités à l’intérieur d’une application. Le code qui gère les relations ne doit pas devenir un prétexte pour tout mélanger avec tout. Un monolithe n’est pas une recommandation de créer un énorme fichier unique.

C’est une préférence d’architecture, pas une description complète de l’infrastructure de production de Monica. Des services d’appui et du travail de fond peuvent exister sans que chaque concept du produit devienne un système déployé indépendamment.

Si un problème mesuré finit par appeler une autre frontière, nous pourrons l’envisager à ce moment-là. [La technologie ennuyeuse](/fr/manuel/boring-technology/) ne veut pas dire refuser de s’adapter.

Tant qu’il n’y a pas de raison de distribuer la complexité, je préfère la garder à un endroit où un contributeur peut la trouver.
