---
title: "Comment nous envisageons les intégrations"
slug: integrations
section: product
order: 8
description: "Le bouton est la partie facile ; ce sont les années qui suivent le bouton où les choses deviennent intéressantes."
updated: 2026-11-18
---

« Monica ne pourrait pas simplement se synchroniser avec cette autre application ? »

Peut-être. Ce « simplement » fait un travail héroïque.

Une connexion entre produits doit gérer des significations différentes, pas seulement des formats différents. Que se passe-t-il quand un nom change des deux côtés ? Quand un enregistrement est supprimé ? Quand un jeton d’accès expire ? Quel système décide de ce qui est correct ?

Pour Monica, une erreur pourrait écraser des informations personnelles que quelqu’un a mis des années à rassembler. C’est bien plus lourd de conséquences qu’un bouton d’import un peu maladroit.

### Quelqu’un est responsable de la connexion

L’autre service peut changer son API, ses tarifs ou ses permissions. Il peut disparaître. Il peut décider qu’une fonctionnalité auparavant gratuite exige désormais une offre professionnelle. Aucune de ces décisions ne devient de notre ressort parce que nous avons écrit une intégration.

L’[exemple de CalDAV](/fr/manuel/prioritize/) explique une limite personnelle de maintenance. C’est un utile rappel qu’accepter une implémentation, c’est aussi accepter le travail qui suit.

Une API peut permettre aux gens de construire des connexions adaptées à leurs propres besoins sans faire de chaque produit externe une partie du cœur de Monica. Elle exige tout de même un comportement clair et un accès prudent aux informations personnelles. « C’est une intégration » n’est pas une exemption en matière de vie privée.

Nous devons considérer le flux de travail réel, les informations échangées et la personne qui le maintiendra. Parfois, la réponse est une connexion directe. Parfois, c’est un export ou un petit script.

Tout connecter est une ambition tentante. Garder les connexions compréhensibles en est une meilleure.
