---
title: "Nous reconstruisons Monica"
slug: we-are-rebuilding-monica
date: 2026-08-30
author: 'Regis Freyd'
description: "Nous reconstruisons Monica de zéro, et cette nouvelle série va documenter comment."
---
Ceci est le premier article d'une série intitulée **Building Monica**. Je veux me servir de cette série pour documenter la reconstruction complète de Monica, le CRM personnel open source. Je parlerai des problèmes que nous essayons de résoudre, des décisions que nous prenons en chemin, et probablement de certaines choses qui ne se passent pas comme prévu.

Il y a presque dix ans, j'ai commencé à construire Monica parce que j'étais incapable de me souvenir de quoi que ce soit à propos des gens. J'oubliais le prénom de l'enfant de quelqu'un, ce dont nous avions parlé la dernière fois que nous nous étions vus, ou une chose importante que l'on m'avait confiée quelques mois plus tôt. Je voulais un endroit où noter tout cela, surtout pour compenser ma mauvaise mémoire, alors j'ai commencé à utiliser un [CRM professionnel](https://highrisehq.com/).

Ce n'était pas une très bonne solution. Le logiciel était conçu pour des commerciaux, ce que je n'étais pas, et je n'avais pas particulièrement envie de payer pour un outil censé m'aider à gagner de l'argent alors que je voulais simplement me souvenir de choses concernant mes amis et ma famille. J'ai cherché quelque chose de plus adapté, sans rien trouver, alors j'ai décidé de le construire moi-même.

Ce petit projet est finalement devenu Monica. J'ai mis le code sur GitHub, je l'ai publié sur [Hacker News](https://news.ycombinator.com/item?id=14497295), et les choses se sont un peu emballées à partir de là. Il s'est avéré que je n'étais pas le seul à chercher quelque chose comme ça. Alexis m'a rejoint comme cofondateur, et au fil des années des milliers de personnes ont utilisé Monica, contribué au code, traduit le projet, signalé des bugs et installé l'application sur leurs propres serveurs. Le projet compte aujourd'hui plus de 25 000 étoiles sur GitHub et est devenu l'un des CRM personnels open source les plus connus.

Je suis très fier de ce que Monica est devenu. Mais après y avoir travaillé aussi longtemps, j'en suis arrivé à un point où la version actuelle n'est plus le CRM personnel que je construirais aujourd'hui.

## Presque dix ans de décisions

Quand j'ai commencé Monica, je n'avais évidemment pas dix ans d'expérience à réfléchir à la façon de représenter les relations humaines dans un logiciel. La plupart des décisions ont été prises au moment où un problème apparaissait. Il nous fallait des contacts, alors j'ai construit des contacts. Il nous fallait des relations, alors j'ai ajouté des relations. Puis sont venus les rappels, les activités, les cadeaux, les notes, les animaux, les adresses et bien d'autres fonctionnalités.

Il n'y a rien de particulièrement mal à construire un logiciel de cette manière. C'est comme ça que Monica a grandi, et beaucoup de ces décisions avaient du sens à l'époque. Mais après presque dix ans, elles s'accumulent. Les nouvelles idées doivent contourner des décisions prises des années plus tôt, et ce qui ressemblait à des détails d'implémentation devient peu à peu une contrainte sur ce que l'on peut faire du produit.

Avec le temps, cela a rendu certaines parties de Monica plus difficiles à faire évoluer qu'elles ne devraient l'être. Plus important encore, j'ai changé d'avis sur certaines des décisions d'origine.

## Que construirais-je aujourd'hui ?

À un moment donné, j'ai commencé à me poser une question simple : si Monica n'existait pas et que je devais construire un CRM personnel aujourd'hui, avec tout ce que j'ai appris au cours de la dernière décennie, à quoi ressemblerait-il ?

Cela a rapidement mené à des questions bien plus fondamentales que celle des fonctionnalités que Monica devrait avoir. Qu'est-ce qu'une personne, exactement, dans Monica ? Comment les relations entre les personnes devraient-elles fonctionner ? Comment Monica devrait-il représenter l'utilisateur lui-même ? Que se passe-t-il quand ce qui compte dans la vie de quelqu'un n'est pas une autre personne, mais un animal, une organisation ou tout autre chose ? Comment les rappels devraient-ils fonctionner alors que les relations humaines ne suivent pas naturellement un calendrier ? Que devrait représenter une activité ? Et, pour commencer, quelle part de tout cela Monica devrait-il définir à votre place ?

Les relations sont un bon exemple. Enregistrer que Monica est la sœur de Ross ne paraît pas très compliqué. Mais si Monica est la sœur de Ross, alors Ross est aussi le frère de Monica. Une relation de parent implique une relation d'enfant. Certaines relations ont un sens, d'autres non. Les vraies familles comportent des divorces, des remariages, des beaux-enfants, des demi-frères et demi-sœurs, des adoptions et toutes sortes de configurations qui n'entrent pas proprement dans une liste prédéfinie. Les cultures décrivent aussi les liens familiaux différemment.

J'ai passé beaucoup de temps à réfléchir à cela pour la nouvelle version, et je vois désormais les relations comme un domaine à part entière plutôt que comme un attribut rattaché à un contact. Cela me paraît évident aujourd'hui. Ça ne l'était pas quand nous avons conçu les premières versions de Monica.

La personnalisation est un autre sujet sur lequel j'ai changé d'avis. Historiquement, c'est surtout Monica qui a défini ce qu'est un contact et quelles informations on peut stocker à son sujet, et nous avons ajouté de la personnalisation autour de cette structure. Pour la v3, nous voulons inverser cela. Monica proposera toujours de bons réglages par défaut, parce que personne n'a envie de configurer cinquante choses avant d'ajouter son premier contact, mais votre vie ne devrait pas avoir à rentrer dans le schéma de base de données que nous avons jugé bon pour tout le monde.

Dès que l'on commence à changer les choses à ce niveau, redessiner quelques écrans ne suffit plus. Les fondations doivent changer aussi.

## Ce que je veux que la v3 soit

Monica v3 n'est pas censée être le produit actuel avec une plus belle interface. L'interface va changer considérablement, et je veux qu'elle soit beaucoup plus ludique et personnelle que la plupart des logiciels que nous utilisons aujourd'hui, mais ce n'est qu'une partie du travail.

Je veux construire un système très puissant pour documenter les personnes et les relations dans la vie de quelqu'un. Optimiser chaque chose pour la simplicité ne m'intéresse pas particulièrement si le résultat est un produit qui ne sait représenter que des vies simples. Je préfère de bons réglages par défaut pour les gens qui ne veulent rien configurer, tout en donnant à ceux qui le souhaitent un contrôle énorme sur le fonctionnement de leur Monica.

Cela veut dire traiter les relations comme des concepts de premier plan et laisser chacun décider quelles informations comptent pour lui. Monica doit savoir gérer bien plus qu'une liste prédéfinie de champs rattachés à un contact. Le plus difficile sera de faire tout cela sans finir avec un logiciel d'entreprise pour gérer ses amis et sa famille, parce que ce serait assez horrible.

Il y a aussi des choses que je ne veux pas changer. La confidentialité et la propriété des données comptent toujours énormément pour Monica. Le projet restera open source et auto-hébergeable. Si vous devez passer des années à confier à un logiciel certaines des informations les plus personnelles de votre vie, je pense que vous devez garder autant de contrôle que possible sur ces informations.

Je ne veux pas non plus que Monica décide de l'importance que quelqu'un a pour vous. Elle peut vous aider à vous souvenir, à organiser des informations et vous signaler que vous n'avez pas parlé à quelqu'un depuis longtemps. La relation, elle, reste la vôtre à entretenir.

## Recommencer avec dix ans d'expérience

« Recommencer » n'est pas tout à fait exact, bien sûr. Quand j'ai créé Monica en 2017, j'avais une idée et un problème que je voulais résoudre. Cette fois, nous avons presque dix ans d'expérience sur ce problème, des milliers de conversations avec des utilisateurs, les contributions de personnes du monde entier, deux générations du produit et une liste assez longue de choses que nous ne referions pas de la même façon.

Pendant que nous travaillons sur la v3, je veux documenter davantage tout cela publiquement. Il y a un nombre surprenant de problèmes difficiles derrière quelque chose qui paraît assez simple vu de l'extérieur, surtout quand on commence à réfléchir sérieusement aux relations, aux rappels, à la personnalisation et à la façon de représenter dans une base de données quelque chose d'aussi désordonné qu'une vie humaine. J'écrirai sur ces problèmes, mais aussi sur les décisions techniques et de design que nous prenons, et sur les choses que nous essayons et qui ne fonctionnent pas.

C'est de cela que parlera **Building Monica**. Je ne sais pas à quelle fréquence je publierai un article, et je n'ai pas envie d'inventer un rythme de publication juste pour en avoir un. J'écrirai quand nous aurons quelque chose d'intéressant à raconter.

En 2017, j'ai construit Monica en fonction de ce que je comprenais du problème à l'époque. Presque dix ans plus tard, je comprends ce problème très différemment. C'est pour cela que nous le reconstruisons.
