---
title: 'Vous pouvez désormais supprimer plusieurs personnes, ou changer leur catégorie, en une fois'
slug: bulk-people-actions
date: 2026-11-25
author: 'Regis Freyd'
description: 'Cochez les personnes voulues dans la liste Personnes, puis changez leur catégorie ou supprimez-les d’un seul geste. Monica nomme celles qui partent avant de supprimer qui que ce soit, et un changement de catégorie peut être annulé.'
category: feature
icon: people
screenshot:
  src: /assets/images/blog/2026-11-25-bulk-people-actions-preview.webp
  alt: 'La liste Personnes avec Chandler Bing, Ross Geller et Rachel Green cochés, et une barre au dessus indiquant 3 sélectionnés, avec Changer de catégorie et Supprimer'
  caption: 'Cochez quelques personnes, et une barre propose ce que vous pouvez faire avec elles.'
pullRequest: 8023
docs: https://my.monicahq.com/docs/en/people/find-people
---
Un coffre se remplit au fil des années. Des personnes rencontrées une seule fois, des collègues d’un travail que vous avez quitté, tout le cortège d’un mariage ajouté en une soirée. Tôt ou tard, vous avez envie de faire du tri : ranger l’ancienne équipe sous **Connaissance**, ou laisser partir quelques personnes pour de bon.

Jusqu’ici, cela voulait dire ouvrir chaque personne, l’une après l’autre. Pour passer Chandler, Ross et Rachel à **Ami proche**, vous modifiiez trois pages. Pour supprimer dix personnes, vous supprimiez dix fois, en confirmant à chaque fois.

Désormais, la liste Personnes a une case au début de chaque ligne. Cochez les personnes voulues, ou la case de l’en-tête pour prendre toute la page, et une barre apparaît pour changer leur catégorie ou les supprimer, toutes en même temps. La suppression demande d’abord confirmation et nomme tous ceux qui partent. Après un changement de catégorie, **Rétablir** remet les catégories de chacun comme elles étaient.

## Comment agir sur plusieurs personnes à la fois

1. Ouvrez votre coffre. Sur son tableau de bord, choisissez **Personnes** dans la barre latérale.

   ![Le tableau de bord du coffre Personnel, avec Personnes dans la barre latérale sous le titre Personnes](/assets/images/blog/2026-11-25-bulk-people-actions-dashboard.webp "Le tableau de bord du coffre. Personnes est dans la barre latérale.")

2. La liste a maintenant une case au début de chaque ligne, et une dans l’en-tête.

   ![La liste Personnes, avec une case vide au début des lignes de Chandler Bing, Ross Geller et Rachel Green, et une dans l’en-tête à côté de Nom](/assets/images/blog/2026-11-25-bulk-people-actions-list.webp "Une case sur chaque ligne, et une dans l’en-tête pour toute la page.")

3. Cochez les personnes sur lesquelles vous voulez agir. Pour prendre tout le monde sur la page, cochez plutôt la case de l’en-tête. Les filtres et la recherche laissent la place à une barre qui indique combien de personnes sont sélectionnées. Tant que quelqu’un est sélectionné, choisir une ligne la sélectionne au lieu de l’ouvrir.

4. Pour les ranger dans une catégorie, choisissez **Changer de catégorie**, puis la catégorie sous **Déplacer vers**. Pour retirer leur catégorie, choisissez **Retirer la catégorie**.

   ![Le menu Changer de catégorie ouvert sous la barre de sélection, qui liste Famille, Ami proche, Ami, Collègue, Connaissance et Professionnel sous Déplacer vers, et Retirer la catégorie en bas](/assets/images/blog/2026-11-25-bulk-people-actions-category.webp "Toutes les catégories de votre compte, et un moyen de la retirer.")

   Monica les déplace aussitôt et indique combien de personnes ont changé. Vous avez changé d’avis ? Choisissez **Rétablir** dans ce message, et chacun retrouve la catégorie qu’il avait.

   ![La liste Personnes avec un message indiquant 3 personnes déplacées vers Ami proche, et un bouton Rétablir à sa droite](/assets/images/blog/2026-11-25-bulk-people-actions-undo.webp "Un clic sur Rétablir remet tout en place.")

5. Pour les supprimer à la place, choisissez **Supprimer**. Monica demande d’abord confirmation, en nommant chaque personne qu’elle s’apprête à supprimer. Pour confirmer, choisissez le bouton qui indique combien de personnes partent, comme **Supprimer 3 personnes**. Pour les laisser tranquilles, choisissez **La garder**.

   ![Une boîte de dialogue demandant Supprimer 3 personnes, nommant Chandler Bing, Ross Geller et Rachel Green, avec les boutons La garder et Supprimer 3 personnes](/assets/images/blog/2026-11-25-bulk-people-actions-delete.webp "Monica nomme ceux qui partent avant de supprimer qui que ce soit.")

Pour effacer la sélection, choisissez la croix au bout de la barre, ou appuyez sur Échap. Changer le filtre, la recherche, le tri ou la page l’efface aussi.

## Bon à savoir

Supprimer plusieurs personnes fonctionne exactement comme les supprimer une à une. Tout ce qui est écrit sur leurs fiches part avec elles, et il n’y a pas d’annulation possible, alors lisez les noms avant de confirmer. Le contact qui vous représente n’est jamais supprimé, même sélectionné, et les autres le sont quand même.

Une personne dont le modèle n’a pas de champ de catégorie reste telle quelle quand vous changez une catégorie, et le message le précise.

Vous pouvez agir sur 500 personnes au maximum à la fois.

Les scripts et les assistants IA peuvent faire de même : l’API peut supprimer plusieurs contacts ou changer leurs catégories en une seule requête, et le serveur MCP propose les deux comme outils.
