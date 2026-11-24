---
title: Philosophie produit
slug: product-philosophy
section: product
order: 1
description: Simple à utiliser, construit par itérations, en partant du problème, des bonnes valeurs par défaut plutôt que des options, et jamais un raccourci pour contourner le travail qu’exigent les relations.
updated: 2026-11-18
---

### Rendre les choses évidentes

Un produit doit être simple à utiliser. Les utilisateurs ne devraient idéalement jamais avoir à chercher de l’aide pour faire quelque chose. Cela dit, un lien vers le centre d’aide doit être présent sur chaque écran pour assister les utilisateurs si, malheureusement, l’interface n’est pas assez claire.

La documentation doit compléter le produit, pas compenser un mauvais design.

Nous ne devons pas supposer qu’une chose est intuitive simplement parce qu’elle l’est pour nous. Nous avons passé des centaines d’heures à construire le produit. Nous savons exactement où tout se trouve et pourquoi les choses fonctionnent comme elles le font. Quelqu’un qui découvre Monica pour la première fois n’a rien de ce savoir.

Nous ne devons pas non plus confondre simplicité et minimalisme. Retirer le libellé d’un bouton peut rendre l’interface plus jolie, mais si les gens ne comprennent plus ce que fait le bouton, qu’avons-nous réellement accompli ?

### Itérer en permanence

Nous devons toujours itérer. La première version d’une fonctionnalité doit être une solution un peu embarrassante mais très fonctionnelle à un problème ou à un besoin. Ensuite, grâce à une boucle de retour rapide (construire, mesurer, apprendre), nous pouvons créer une meilleure version.

Nous ne devons pas trop nous attacher à nos idées d’origine. Ce n’est pas parce que nous avons passé trois semaines à construire quelque chose d’une certaine manière que c’est la bonne manière.

Parfois, la meilleure amélioration que nous puissions apporter à une fonctionnalité est de la repenser complètement. Parfois, c’est d’en retirer la moitié.

Il n’y a pas non plus d’obligation d’améliorer continuellement une fonctionnalité. Si quelque chose marche bien, résout le problème pour lequel cela a été conçu et que les gens en sont contents, nous pouvons simplement le laisser tranquille. Il n’y a aucune raison de redessiner quelque chose tous les deux ans juste pour le plaisir de le redessiner.

### Partir du problème

Nous devons toujours partir du problème, pas de la solution. Nous devons nous concentrer sur des énoncés de problème bien formulés pour comprendre le cœur des difficultés rencontrées par l’utilisateur. C’est seulement après avoir suffisamment réfléchi au problème que nous pouvons comprendre pleinement la vue d’ensemble et envisager une solution.

Quand quelqu’un nous demande d’implémenter une fonctionnalité, ce qu’il fait généralement, c’est décrire sa solution préférée à un problème qu’il rencontre. Notre responsabilité est de comprendre le problème sous-jacent, pas nécessairement d’implémenter sa solution.

Parfois, nous pouvons résoudre ce problème avec une solution bien plus simple. Parfois, le produit le résout déjà, mais nous n’avons pas fait assez d’efforts pour que ce soit évident.

Le fait que nous puissions construire quelque chose n’est pas une très bonne raison de le construire. C’est encore plus vrai à l’ère de l’IA, où écrire le code devient de plus en plus la partie la plus facile de la construction d’un produit.

Comprendre quoi construire reste la partie difficile.

### De bonnes valeurs par défaut plutôt que des options

Autant que possible, nous devons résister à l’ajout d’options de configuration ou de réglages. Il vaut bien mieux avoir de bonnes valeurs par défaut que polluer le produit d’options. Chaque option ajoute de la complexité en termes d’ingénierie, de tests, de documentation et de compréhension du produit.

L’un des traits de personnalité d’un mainteneur de projet est le désir de faire plaisir. Nous voulons que les utilisateurs adorent ce que nous avons mis des nuits et des années à créer.

Alors, chaque fois que nous recevons une demande de fonctionnalité, il est tout naturel d’avoir envie de l’implémenter, surtout s’il s’agit d’ajouter une option. Après tout, nous ne faisons que donner un choix aux utilisateurs. Qu’est-ce qui pourrait mal tourner ?

Eh bien, multipliez ce raisonnement par mille demandes de fonctionnalités et vous vous retrouvez avec un produit que personne ne comprend entièrement, y compris ceux qui l’ont construit.

Ajouter une option est aussi parfois une façon d’éviter de prendre une décision. Au lieu de chercher quel devrait être le meilleur comportement, nous implémentons les deux et laissons l’utilisateur trancher. Ce n’est pas forcément un bon design de produit. Parfois, c’est simplement de la paresse de notre part.

Nous devons résister, autant que possible, à la création d’une situation où notre produit devient si complexe qu’il n’est plus maintenable. 37signals a un excellent article sur [le fait de dire non](https://basecamp.com/gettingreal/05.3-start-with-no). Lisez-le.

Bien sûr, certaines choses ont réellement besoin d’être configurables. La vie des gens est différente. Mais il y a une différence fondamentale entre laisser les gens documenter leur vie comme ils le veulent et les laisser configurer chaque aspect du fonctionnement du logiciel.

### Construire pour la vraie vie

La vie est désordonnée. Les gens oublient des choses. Les relations changent. Les familles sont compliquées. Les informations sont incomplètes. Parfois, nous ne connaissons même pas le nom de quelqu’un que nous avons rencontré plusieurs fois.

Monica doit s’adapter à cette réalité.

Nous ne devons pas forcer les gens à renseigner des informations qu’ils n’ont pas. Nous ne devons pas imposer de flux rigides quand il n’y a aucune bonne raison de le faire. Nous ne devons pas supposer que tout le monde documente sa vie de manière structurée et organisée.

Le produit doit s’adapter aux imperfections de la vraie vie, pas attendre que la vraie vie s’adapte au produit.

### Penser en décennies

La plupart des produits logiciels sont conçus autour de ce dont les utilisateurs ont besoin aujourd’hui. Monica doit aussi tenir compte de ce dont les utilisateurs pourraient avoir besoin dans dix ou vingt ans.

Une information qui semble insignifiante aujourd’hui peut devenir extrêmement précieuse plus tard. Le nom de quelqu’un rencontré lors d’un voyage, une conversation avec vos grands-parents, ou quelque chose de drôle que votre enfant a dit à cinq ans.

Cela a des conséquences sur la façon dont nous concevons le produit. Nous devons être extrêmement prudents quant à la perte d’informations, à l’introduction de changements incompatibles ou aux décisions qui empêcheront les gens d’accéder à leurs données dans des années.

Nous devons aussi nous méfier de la construction de fonctionnalités autour de technologies ou de modes qui n’existeront peut-être plus dans quelques années.

La vie humaine n’a pas fondamentalement changé parce qu’un nouveau framework JavaScript est sorti mardi dernier.

### Respecter l’attention de l’utilisateur

Nous ne voulons pas construire un produit dont les gens sont dépendants.

Nous n’avons pas besoin de séries quotidiennes, de classements, de scores d’engagement ou de succès à débloquer pour encourager les gens à documenter leur vie. Nous ne voulons pas que les utilisateurs se sentent coupables parce qu’ils n’ont pas ouvert Monica depuis deux semaines.

Il n’existe pas de journée réussie mesurée au nombre de notes que vous avez ajoutées dans Monica.

Les notifications et les rappels doivent exister parce qu’ils apportent de la valeur à l’utilisateur, pas parce qu’ils le ramènent dans l’application.

Le résultat idéal de l’utilisation de Monica pourrait très bien être de passer moins de temps devant un écran et plus de temps avec les personnes qui comptent pour vous.

### N’automatisez pas le fait d’être humain

Enfin, nous n’implémenterons jamais une fonctionnalité qui supprime la nécessité de faire un effort pour entretenir des relations saines.

Qu’est-ce que je veux dire par là ? Avoir un cercle social demande du temps et des efforts. Il n’existe pas de moyen facile d’avoir de superbes relations. Monica vous aidera à documenter votre vie, mais elle ne remplacera pas la nécessité de, vous savez, travailler réellement sur vos relations.

Nous pouvons vous rappeler que c’est l’anniversaire de quelqu’un. Nous pouvons vous aider à vous souvenir de ce dont vous avez parlé la dernière fois que vous avez vu quelqu’un. Nous pouvons vous aider à retrouver le prénom de la fille de votre collègue.

Mais se souvenir de l’anniversaire de quelqu’un n’est pas la même chose que se soucier de lui. Envoyer un message automatique à quelqu’un n’est pas la même chose que prendre le temps de lui écrire.

Nous ne voulons pas transformer les relations humaines en une série de tâches à accomplir, à optimiser ou à automatiser. Les gens ne sont pas des prospects dans un pipeline de vente. Les amitiés n’ont pas besoin d’indicateurs de performance.

La technologie peut aider à réduire une partie des frictions liées à l’entretien des relations. Elle ne doit pas supprimer l’effort humain qui donne tout leur sens à ces relations.

Monica doit vous aider à être plus présent dans votre vie, pas la vivre à votre place.
