---
title: "Une nouvelle Monica arrive"
slug: a-new-version-is-coming
date: 2022-08-28
published_at: 2022-08-28T20:44:00+00:00
author: 'Regis Freyd'
description: "Une toute nouvelle version majeure arrive."
original_url: https://www.monicahq.com/blog/a-new-version-is-coming
---
[Alexis](https://twitter.com/asbin) et moi [(Regis)](https://twitter.com/maazarin) travaillons depuis quelques mois (depuis janvier 2022, en fait) sur une toute nouvelle version de Monica. La première véritable version majeure depuis notre lancement il y a quelques années.

Je suis très tenté de parler d'une version « plus rapide, plus moderne, meilleure », parce que c'est le cas, mais je suis mauvais en marketing, alors je dirai simplement que c'est une nouvelle version et je répondrai ci-dessous aux questions que vous pourriez vous poser.

**Qu'entendez-vous par nouvelle version ?**

Une réécriture complète de Monica, à partir de zéro.

**Vous êtes fous ?**

Oui, mais aussi : le code de Monica est devenu ancien. Ancien au sens où il a 7 ans et où des centaines de contributeurs y ont touché. Certains concepts du code ont été laissés passer, soit parce que nous ne savions pas faire mieux à l'époque, soit parce que nous ne voulions pas froisser des contributeurs, et nous n'en voulons plus. Le projet a beaucoup trop de dépendances, et maintenir le code est devenu plus difficile qu'avant. Changer quelque chose est plus risqué et prend plus de temps. Nous avons aussi vu comment les gens utilisent Monica, ce qu'ils veulent en faire, et le code actuel nous limite beaucoup trop pour prendre en charge ces usages. Enfin, Monica reste un projet parallèle pour nous. Nous en sommes extrêmement passionnés et nous voulons aussi prendre du plaisir à le construire. Or la version actuelle n'était pas si amusante.

**Qu'entendez-vous par réécriture ?**

Nous sommes partis d'un code vide, et nous avons construit à partir de là. Avant, c'était une application Laravel (donc PHP), avec des vues Blade et un peu de Vue par endroits. Maintenant, c'est toujours une application Laravel (donc toujours PHP), entièrement en Vue 3. Nous avons beaucoup simplifié, rendu certaines choses plus souples et donc un peu plus complexes, mais nous pensons pouvoir porter l'avenir de Monica avec.

Cela signifie aussi que nous avons une toute nouvelle structure de données, portée par un nouveau schéma de base de données.

**La nouvelle version s'appellera-t-elle Monica ?**

Pour l'instant, le nom de code de la nouvelle Monica est Chandler. Nous ne le garderons pas : le nom officiel de la nouvelle Monica sera Monica. Par souci de clarté, nous appellerons la nouvelle version Chandler dans la suite de cet article.

**Vous choisissez PHP malgré \<insérez un nouveau langage ou framework> ?**

PHP est un excellent langage. Nous ne sommes plus à l'époque de PHP 4 ou 5. C'est aussi un langage très simple, ce qui veut dire que beaucoup de gens dans le monde lisent et comprennent PHP. Choisir PHP, c'est rendre la contribution plus facile, le débogage plus facile, la maintenance plus facile, et il nous sera plus facile de trouver de l'aide si le besoin s'en fait sentir. Enfin, l'écosystème PHP est formidable, avec Laravel qui offre l'une des meilleures expériences de développement que je connaisse.

**Quelles fonctionnalités contiendra Chandler ?**

Au lancement, nous voulons couvrir 100 % (ou presque) des fonctionnalités de Monica v1. Même à périmètre égal, nous voulions soit les simplifier (les tâches, par exemple), soit les rendre plus robustes (les rappels, notamment).

Une fois cela fait, nous avons tellement d'idées sur ce que Monica devrait devenir que c'en est vertigineux. À l'origine, Monica est né comme le premier CRM personnel (ou PRM, gestionnaire de relations personnelles). Nous l'avons donc présenté ainsi. Mais après des années de travail, de discussions et de lecture des milliers d'emails que vous nous avez envoyés, nous avons compris que Monica est surtout une façon de documenter votre vie, quoi que cela signifie pour vous. Monica parlera donc de documenter votre vie, et de vous donner des outils pour le faire à votre manière.

On lit partout qu'un produit doit avoir un point de vue et une forte personnalité, pour que les gens l'utilisent comme vous l'entendez. C'était la direction de la v1. Nous voulons maintenant changer cela. Nous voulons que chacun utilise et configure Monica comme il l'entend. Qui sommes-nous pour vous dire que vous ne devriez utiliser que 3 pronoms pour vos contacts, ou pour décider des types de relations qui existent chez vous ? Chandler sera entièrement personnalisable, de ce que vous voyez dans l'interface au type de données que vous pouvez saisir. Les gens du marketing diraient « Chandler, c'est vous », et c'est vrai, en un sens. L'inconvénient : d'un point de vue technique, c'est plus difficile à gérer, mais cela nous regarde.

**Quand sera-t-elle prête ? Puis-je l'essayer ?**

Elle sera prête quand elle sera prête. Rappelez-vous : nous n'y travaillons pas à plein temps, pas du tout. Alexis et moi avons des emplois exigeants, des familles, des amis, et Monica (et OfficeLife, aussi).

CELA DIT.

Nous avons déjà beaucoup avancé. Des fonctionnalités importantes que vous connaissez et appréciez manquent encore à la nouvelle version : les événements de vie, les activités, les cadeaux et CalDAV/CardDAV, pour n'en citer que quelques-unes. Les événements de vie, en particulier, représentent un gros morceau, car nous voulons repenser complètement le concept et le rendre vraiment utile. Et, gros « et », nous n'avons pas encore d'API. Comme il s'agit d'un nouveau code, nous ne pouvons pas simplement copier vos contacts de la v1 et espérer les voir apparaître dans la v2. Si nous sortions quelque chose maintenant, vous ne pourriez pas importer vos données. Et cela nous semble problématique.

CELA ÉTANT.

Nous avons quand même besoin de testeurs pour nous aider à trouver des bugs, même si nous ne faisons pas de bugs ici (lol). Nous avons besoin de gens pour corriger les fautes dans la documentation. Ce que nous pourrions faire, c'est lancer Chandler dans un état très alpha, gratuit pour tous tant qu'il ne sera pas sorti de l'alpha.

**Est-ce toujours open source ? Puis-je l'utiliser gratuitement ?**

Oui, c'est toujours open source, avec la même licence qu'avant. Monica est donc gratuite, bien sûr, sauf si vous utilisez la version que nous hébergeons, qui finira par coûter quelque chose, comme la version actuelle. Oui, vous pouvez l'installer où vous voulez, sur votre propre serveur. Comme Chandler n'est pas le même code, nous n'avons pas encore l'écosystème riche d'avant ni toutes ces façons de l'installer partout, mais nous y viendrons. Oui, vous pouvez toujours contribuer au code, corriger des bugs, ajouter des fonctionnalités, même si nous nous réservons le droit de refuser vos pull requests si nous estimons ne pas vouloir prendre en charge ce que vous proposez.

**Quel avenir pour Monica v1 ?**

Nous soutiendrons la v1 jusqu'à ce que Chandler sorte de l'alpha et de la bêta. Elle sera ensuite dépréciée, mais celles et ceux qui l'hébergent pourront continuer à l'utiliser s'ils le souhaitent. La v1 que nous hébergeons nous-mêmes ne sera plus maintenue après cela.

**Peut-on déjà contribuer au code ?**

Le dépôt est déjà [disponible sur GitHub](https://github.com/monicahq/chandler), mais nous sommes loin d'être aussi matures que le dépôt principal actuel. Nous ne sommes donc pas encore prêts à accueillir les contributions de tout le monde, car les choses changent presque chaque jour, mais si cela vous convient, allez-y.

**Et ensuite ?**

Merci d'abord d'avoir lu cet article jusqu'au bout. Nous sommes extrêmement reconnaissants envers notre communauté et sa passion pour ce petit outil que nous prenons plaisir à construire. Alexis et moi restons très motivés, et nous vous remercions de le porter avec nous. Nous vous tiendrons au courant.
