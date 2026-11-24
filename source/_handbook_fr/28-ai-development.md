---
title: "Comment nous utilisons l’IA pour construire Monica"
slug: ai-development
section: engineering
order: 4
description: "L’aide au codage devrait faciliter la compréhension d’un changement, pas rendre la compréhension facultative."
updated: 2026-11-18
---

Un agent de code peut écrire une quantité convaincante de code. C’est utile. C’est aussi un excellent moyen d’acquérir une quantité convaincante de code que vous n’avez pas encore compris.

Pour Monica, la vraie question est de savoir si un changement assisté résout le problème réel et nous laisse capables de maintenir le résultat. « L’agent a dit que ça marche » ne répond à aucune des deux parties.

C’est le niveau d’exigence que je veux appliquer au travail assisté par l’IA. Ce n’est ni un inventaire de l’outil qui a écrit telle ou telle partie de Monica, ni l’affirmation qu’un processus de relecture automatisé particulier est déjà en place.

### La responsabilité ne se déplace pas

Une personne qui accepte un changement devrait comprendre le comportement qu’il introduit. Cela inclut les cas délicats : l’accès aux données d’une autre personne, les échecs partiels, les dates, les suppressions et les hypothèses sur les relations.

Un test généré peut être utile. Il peut aussi reproduire très consciencieusement l’erreur de l’implémentation. La confiance doit venir de la vérification du comportement voulu, pas du simple constat que deux fichiers générés s’accordent.

Je préfère des changements assez petits pour être lus et discutés. Si expliquer un correctif prend plus de temps qu’en écrire un plus simple, la frappe économisée n’est pas forcément une victoire.

Cela vaut aussi pour les contributeurs. L’aide d’un outil ne dispense pas d’expliquer un problème, de reproduire un bug ou de répondre à la relecture.

[Le code reste un passif](/fr/manuel/code-liability/), quelle que soit la personne qui l’a tapé. L’agent n’hérite pas de la boîte de réception de maintenance. Une limite regrettable de cette technologie par ailleurs très enthousiasmante.
