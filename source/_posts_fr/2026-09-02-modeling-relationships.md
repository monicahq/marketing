---
title: "Building Monica : modéliser les relations entre les personnes"
slug: modeling-relationships
date: 2026-09-02
author: 'Regis Freyd'
description: "Décider ce qu'est réellement une relation s'est révélé être l'un des problèmes les plus difficiles de la reconstruction de Monica."
---
Quand nous avons commencé à reconstruire Monica, je savais que les relations feraient partie des sujets qu'il nous faudrait repenser. Ce que je n'avais pas prévu, c'est à quel point il serait difficile ne serait-ce que de définir ce qu'est une relation.

Un CRM personnel doit savoir comment les gens sont liés entre eux. Quelqu'un est votre mère, votre frère, votre ami, votre collègue ou votre conjoint. Monica gère cela depuis des années, et du point de vue de l'utilisateur, c'est une fonctionnalité assez simple : vous sélectionnez une personne, vous choisissez une relation, et c'est terminé.

Malheureusement, concevoir ce qui se passe derrière ce petit menu déroulant n'est pas simple du tout.

## Même les relations simples ne le sont pas tant que ça

Disons que Monica est la sœur de Ross. Du point de vue de Monica, Ross est son frère. Les deux phrases décrivent la même relation, mais les mots que nous employons dépendent de la personne que nous regardons.

La même chose se produit partout dans une famille. Rachel est la mère d'Emma, tandis qu'Emma est la fille de Rachel. La tante de quelqu'un a une nièce ou un neveu. Une grand-mère a une petite-fille ou un petit-fils.

D'autres relations ne fonctionnent pas comme ça. Chandler et Joey sont amis. Le mot est le même quel que soit le côté que l'on regarde. Les cousins et les collègues peuvent fonctionner de la même façon.

Nous avons donc déjà des comportements différents. Parfois une relation change de nom selon le côté que l'on regarde, parfois non, et parfois le mot que nous employons dépend du genre de l'une des deux personnes.

Et c'est la partie facile.

## Les familles sont compliquées

Imaginez deux personnes qui se marient et ont deux enfants. Elles divorcent. L'une d'elles se remarie avec quelqu'un qui a déjà des enfants d'une autre relation, et peut-être qu'elles ont ensemble un enfant de plus.

Ce n'est pas une famille particulièrement inhabituelle, mais nous avons désormais des parents, des enfants, des frères et sœurs, des demi-frères et demi-sœurs, des beaux-enfants, des beaux-parents, des conjoints et des ex-conjoints.

Cela soulève aussi des questions auxquelles je ne crois pas qu'il existe toujours une réponse universelle. Si vous divorcez, votre belle-mère cesse-t-elle d'être votre belle-mère ? Techniquement, peut-être. Mais si vous la connaissez depuis vingt ans et que vous la considérez toujours comme faisant partie de votre famille ? Elle ne cesse certainement pas d'être la grand-mère de vos enfants simplement parce que votre mariage est terminé.

Il y a ensuite les parents biologiques, les parents adoptifs, les familles d'accueil et les tuteurs. Quelqu'un peut avoir plusieurs personnes qu'il considère comme ses parents, et ces relations ne signifient pas nécessairement la même chose. Il y a les membres de la famille dont on s'est éloigné, les gens qui considèrent quelqu'un comme un frère ou une sœur sans aucun lien biologique, les anciens partenaires qui restent très proches, et les parents qui élèvent des enfants ensemble sans plus former un couple.

Le bel arbre généalogique que nous avons tendance à imaginer en réfléchissant à ce problème ne survit pas au contact de beaucoup de familles réelles.

Et même quand la structure familiale est simple, les relations changent. La personne qui est votre conjoint aujourd'hui sera peut-être votre ex dans cinq ans. Cela ne veut pas dire que l'ancienne relation devrait simplement disparaître. Le fait que deux personnes ont été mariées pendant quinze ans reste une partie de leur histoire, même si elles ne le sont plus.

Les relations ont un passé, ce qui rend également problématique le fait de ne représenter que leur état actuel.

## Deux personnes ne sont pas forcément d'accord sur leur relation

Les relations familiales nous donnent au moins quelques faits sur lesquels travailler. L'amitié est encore moins précise.

Si Monica considère Rachel comme une amie proche, est-ce que Rachel considère nécessairement Monica comme une amie proche ? Nous n'en avons aucune idée.

Le même problème existe avec les mentors, les connaissances et bien d'autres relations. Quelqu'un peut considérer une personne comme son mentor même si cette personne n'emploierait jamais ce mot elle-même. Quelqu'un peut considérer un vieil ami comme pratiquement de la famille alors que l'autre y voit une personne qu'il a connue il y a des années.

Cela compte beaucoup dans Monica, parce que l'information n'a pas pour but de décrire un graphe social objectif. Ce sont vos informations sur les gens de votre vie.

Quand vous écrivez que quelqu'un est votre ami, vous décrivez la relation telle que vous la comprenez. Monica n'a pas la version de l'autre personne, et dans bien des cas il n'existe probablement pas de réponse unique et correcte.

Cela devient particulièrement étrange quand un logiciel essaie de transformer les relations en quelque chose de mesurable. Est-ce que quelqu'un est un meilleur ami parce que vous le voyez chaque semaine ? Est-ce qu'un ami que vous n'avez pas vu depuis cinq ans compte moins qu'un collègue avec qui vous parlez tous les jours ? Évidemment, la fréquence nous dit quelque chose sur une relation, mais elle ne nous dit pas ce que cette relation signifie pour quelqu'un.

## Le temps ne rentre pas bien dans les cases non plus

Un collègue peut devenir un ami. Un ami peut devenir un conjoint. Un conjoint peut devenir un ex, et des années plus tard la même personne peut redevenir un ami.

Si Monica enregistre que deux personnes sont mariées et qu'elles divorcent ensuite, qu'est-ce qui devrait arriver au mariage ? Le supprimer rendrait l'information actuelle correcte, mais effacerait aussi quelque chose d'assez important de leur histoire.

Nous pourrions conserver des dates, sauf que les gens ne les connaissent souvent pas. Je peux savoir que deux amis ont été ensemble sans avoir la moindre idée de quand ils ont commencé à se fréquenter ni de quand exactement ils se sont séparés. Exiger des dates précises rendrait le modèle plus propre tout en rendant le produit bien plus agaçant à utiliser.

Rien ne garantit non plus que les relations passent proprement d'un état à un autre. Les gens ne se réveillent pas nécessairement un matin en passant de « ami » à « conjoint ». Certaines relations ont un début clair, comme un mariage. Beaucoup d'autres non.

La base de données aimerait beaucoup que nous sachions quand tout a commencé et quand tout s'est terminé. La plupart du temps, nous ne le savons pas.

## L'anglais n'est pas le modèle du monde entier

Autre problème : la plupart des premiers exemples qui viennent à l'esprit sont fondés sur l'anglais.

L'anglais utilise « cousin » pour un grand nombre de relations familiales, alors que d'autres langues peuvent être beaucoup plus précises. Le mandarin, par exemple, a des mots différents pour les cousins selon le côté de la famille d'où ils viennent, leur genre et parfois leur âge. Le suédois distingue les quatre grands-parents : *mormor* est la mère de votre mère, *morfar* le père de votre mère, *farmor* la mère de votre père et *farfar* le père de votre père. L'anglais nous donne simplement « grandmother » et « grandfather ».

Le coréen fournit un autre exemple. Même quelque chose d'aussi simple que « grand frère » change selon qui parle. Un homme appelle son grand frère *hyeong*, une femme l'appelle *oppa*. Le vocabulaire des relations contient une information qui n'est pas présente dans le mot anglais « brother ».

Cela compte pour Monica, parce que Monica est traduite dans de nombreuses langues et utilisée dans le monde entier. Nous ne pouvons pas concevoir tout le système de relations en partant du principe que l'anglais contient la liste canonique des relations et que toutes les autres langues n'ont qu'à traduire ces mots.

C'est un problème que nous avons déjà rencontré dans Monica, et la reconstruction ne le fait pas disparaître par magie.

## La famille n'est même pas le plus dur

Au moins, les relations familiales ont généralement un nom. Le reste de nos relations est beaucoup moins structuré.

« Ami » peut décrire quelqu'un que vous connaissez depuis trente ans et à qui vous parlez chaque semaine, mais aussi quelqu'un que vous voyez deux fois par an et à qui vous tenez énormément. Un collègue peut être la personne assise à côté de vous tous les jours, ou quelqu'un avec qui vous avez travaillé il y a quinze ans.

Et les gens n'entrent pas dans une seule catégorie à la fois. Quelqu'un peut être votre collègue, votre ami et votre ancien colocataire. Votre associé peut aussi être votre frère. Votre voisin peut être le parent de la meilleure amie de votre fille.

Parfois, c'est le contexte lui-même qui compte. Vous connaissez quelqu'un parce que vous êtes allés à l'école ensemble, avez joué dans la même équipe, habité le même immeuble ou travaillé sur le même projet. « Ami » est peut-être techniquement correct, mais on perd l'information qui explique pourquoi cette personne fait partie de votre vie.

C'est là qu'une question simple comme « comment connaissez-vous cette personne ? » devient étonnamment difficile à traiter avec un seul champ.

## Une relation peut en impliquer beaucoup d'autres

Supposons que Ross soit le frère de Monica et que Ross ait un fils qui s'appelle Ben. Nous comprenons immédiatement que Monica est la tante de Ben.

Un logiciel peut arriver à la même conclusion. Et une fois qu'il commence à le faire, il peut continuer.

Des parents impliquent des enfants. Des enfants qui ont les mêmes parents sont peut-être frères et sœurs. Des frères et sœurs qui ont des enfants créent des tantes, des oncles, des nièces et des neveux. Ajoutez une génération et vous avez des grands-parents et des petits-enfants. Très vite, un petit nombre de relations peut produire un graphe familial bien plus grand.

Mais le fait qu'un logiciel *puisse* déduire quelque chose ne veut pas dire qu'il devrait le faire.

Le nouveau conjoint d'un parent n'est pas automatiquement un parent de l'enfant. Deux personnes qui partagent un parent sont peut-être techniquement demi-frères ou demi-sœurs, mais elles ne se connaissent peut-être pas. Les informations dont Monica dispose peuvent aussi être tout simplement incomplètes. Et même si la relation familiale est techniquement correcte, ce n'est peut-être pas celle que les personnes concernées emploieraient pour se décrire.

Chaque fois que le logiciel déduit une relation de plus, il se donne aussi une occasion de plus de se tromper.

## Il y a plus de questions que de réponses

Plus nous travaillons sur ce sujet, plus nous trouvons de cas particuliers.

Monica devrait-elle se souvenir de l'histoire d'une relation ou seulement de son état actuel ? Deux personnes peuvent-elles avoir plusieurs relations en même temps ? « Meilleur ami » est-il une relation différente de « ami », ou bien autre chose ? Que se passe-t-il quand nous connaissons la mère de quelqu'un mais que cette mère n'est pas un contact dans Monica ? Comment décrire des relations qui comptent pour nous mais qui n'ont pas de nom pratique ?

Certaines de ces questions sont des problèmes de base de données. La plupart ne le sont pas.

Le plus difficile est de décider ce que nous voulons dire quand nous disons que deux personnes ont une relation, parce que les humains n'emploient pas ce mot avec quoi que ce soit d'approchant la précision qu'une base de données préférerait.

Depuis l'interface, tout cela finira peut-être par se résumer à quelques mots sur le profil de quelqu'un : mère, frère, ami, collègue.

Réussir ces quelques mots est l'un des problèmes les plus difficiles auxquels nous faisons face en reconstruisant Monica.
