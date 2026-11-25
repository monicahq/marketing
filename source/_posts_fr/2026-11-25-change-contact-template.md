---
title: 'Vous pouvez désormais changer le modèle d’un contact'
slug: change-contact-template
date: 2026-11-25
author: 'Regis Freyd'
description: 'Passez quelqu’un sur un autre modèle quand sa page ne lui correspond plus. Monica vous montre d’abord ce qui va se passer, et rien de ce que vous avez écrit n’est jamais supprimé.'
category: feature
icon: layers
screenshot:
  src: /assets/images/blog/2026-11-25-change-contact-template-preview.webp
  alt: 'Le panneau Modèle de Modifier le contact, qui propose de passer Monica Geller au modèle Réseau professionnel et indique que Catégorie, Genre, Anniversaire et Adresse vont dans Réponses inutilisées'
  caption: 'Avant que quoi que ce soit change, Monica liste ce qui ira dans Réponses inutilisées.'
pullRequest: 8014
docs: https://my.monicahq.com/docs/en/people/change-the-template
---
Chaque contact dans Monica est façonné par un modèle. Le modèle décide des onglets, des sections et des champs que sa page affiche : un ami proche peut avoir une page sur les anniversaires et les restaurants préférés, et un collègue une page sur son équipe et son responsable.

Jusqu’ici, un contact restait pour toujours sur le modèle avec lequel il avait été créé. Si vous aviez ajouté Rachel avec **Contact de base** et qu’elle était devenue plus tard votre collègue, impossible de lui donner la page **Collègue**. Si vous aviez choisi le mauvais modèle par erreur, il fallait faire avec, ou supprimer le contact et tout recommencer, en perdant tout ce que vous aviez écrit sur elle.

Désormais, vous pouvez faire passer n’importe qui sur un autre modèle, ou sur une autre version de celui qu’il utilise, quand vous le voulez. Avant que quoi que ce soit change, Monica vous montre exactement ce qui va se passer : les réponses qui n’ont pas de place dans le nouveau modèle et vont dans **Réponses inutilisées**, celles qui reviennent, et les rappels qui s’arrêtent ou reprennent. Rien de ce que vous avez écrit n’est jamais supprimé, et vous pouvez revenir en arrière à tout moment.

## Comment changer le modèle d’un contact

1. Ouvrez votre coffre. Sur son tableau de bord, choisissez **Personnes** dans la barre latérale.

   ![Le tableau de bord du coffre Personnel, avec Personnes dans la barre latérale sous le titre Personnes](/assets/images/blog/2026-11-25-change-contact-template-dashboard.webp "Le tableau de bord du coffre. Personnes est dans la barre latérale.")

2. Dans la liste des personnes, choisissez celle dont vous voulez changer le modèle. Les informations sous son nom se terminent par le modèle que sa page utilise.

   ![La page de contact de Monica Geller, avec Modèle Contact de base à la fin des informations sous son nom, et le bouton Modifier le contact en haut à droite](/assets/images/blog/2026-11-25-change-contact-template-contact.webp "La page du contact indique quel modèle elle utilise. Modifier le contact est en haut à droite.")

3. Choisissez **Modifier le contact**, en haut à droite de sa page.

4. Faites défiler jusqu’au panneau **Modèle**. Ouvrez la liste sous **Modèle utilisé pour**, suivi de son nom. Elle affiche tous les modèles que vous pouvez utiliser pour les contacts. Un modèle qui a plusieurs versions publiées les liste toutes, et celle que la personne utilise actuellement est cochée.

   ![Le panneau Modèle de Modifier le contact, avec Contact de base sélectionné dans la liste](/assets/images/blog/2026-11-25-change-contact-template-panel.webp "Le panneau Modèle, en bas de Modifier le contact.")

5. Choisissez le nouveau modèle. Monica ne change encore rien. Une boîte apparaît à la place, qui demande s’il faut passer la personne sur ce modèle et liste ce qui va arriver à sa page.

   ![La boîte qui demande de passer Monica au modèle Ami proche, indique qu’aucune donnée ne sera perdue, avec les boutons Annuler et Changer de modèle](/assets/images/blog/2026-11-25-change-contact-template-confirm.webp "Monica demande avant de changer quoi que ce soit.")

6. Lisez les listes de la boîte. Quand elles vous conviennent, choisissez **Changer de modèle**. Pour laisser tout comme avant, choisissez **Annuler**.

Monica vous ramène à la page du contact, qui affiche maintenant les onglets et les sections du nouveau modèle.

Le panneau **Modèle** n’apparaît que lorsqu’il y a quelque chose à choisir. Si vous n’avez qu’un seul modèle pour les contacts, avec une seule version publiée, il n’y a rien vers quoi basculer, et le panneau reste masqué.

## Ce qui arrive à ce que vous avez écrit

Une réponse qui a un champ correspondant dans le nouveau modèle y est déplacée, et son rappel continue de fonctionner. Un anniversaire reste un anniversaire.

Une réponse sans place dans le nouveau modèle va dans **Réponses inutilisées**. Elle ne s’affiche plus sur la page, mais Monica la conserve, et elle revient toute seule dès que la personne utilise de nouveau un modèle avec un champ correspondant. Un rappel sur une date qui part là s’arrête, et reprend quand la date revient.

Le nom, la photo, les relations, les événements de vie et les groupes appartiennent à la personne plutôt qu’au modèle, donc un changement de modèle n’y touche jamais.

## Vous avez changé d’avis ?

Choisissez de nouveau l’ancien modèle dans **Modifier le contact**, et tout ce qui était parti dans **Réponses inutilisées** revient. Vous pouvez aussi ouvrir **Historique des versions** depuis le menu à côté de **Modifier le contact** et revenir au modèle que la personne utilisait avant.

Les scripts et les assistants IA peuvent faire la même chose, avec les mêmes règles : l’API et le serveur MCP peuvent tous deux prévisualiser un changement de modèle et l’effectuer.
