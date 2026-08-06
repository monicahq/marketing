---
title: "Chandler est en bêta"
slug: chandler-is-in-beta
date: 2023-06-08
published_at: 2023-06-08T07:29:00+00:00
author: 'Regis Freyd'
description: "La nouvelle version majeure est disponible en bêta."
original_url: https://www.monicahq.com/blog/chandler-is-in-beta
---
Nous sommes ravis d'annoncer qu'après 18 mois d'un travail acharné, notre nouvelle version, nom de code Chandler, est désormais disponible en bêta : [https://beta.monicahq.com](https://beta.monicahq.com)

Monica est née il y a 7 ans avec l'objectif d'être un CRM personnel. Cette nouvelle version parle de documenter votre vie, y compris ce que font vos contacts, mais pas seulement.

Que signifie « bêta » ? C'est comme avoir une bande de petits bugs espiègles cachés dans notre logiciel, qui jouent à cache-cache avec nous. Nous sommes à peu près sûrs qu'ils sont là, mais nous n'avons aucune idée desquels ni d'où ils se cachent. Nous avons donc besoin de toutes les âmes courageuses pour rejoindre notre escouade de chasse aux bugs et nous aider à les débusquer avant la sortie publique.

Chandler est une réinvention complète de Monica, repensée de fond en comble. Nous avons éliminé l'importante dette technique accumulée au fil des ans et ajouté ou amélioré de nombreuses fonctionnalités. Bien que nous n'ayons fait aucune promotion, beaucoup d'utilisateurs ont déjà testé Chandler et trouvé des bugs que nous avons corrigés, mais nous n'avons pas testé ce logiciel à grande échelle. Alors s'il vous plaît, créez un compte et amusez-vous.

La version disponible sur le serveur de bêta peut être considérée comme stable. Nous ne réinitialiserons pas la base de données. Nous sauvegarderons vos données quotidiennement et nous les conserverons lors du lancement officiel de la version finale.

Chandler comporte quelques limites :

- Vous ne pouvez pas utiliser vos identifiants Monica actuels,
- Vous ne pouvez pas importer vos données,
- Aucun import de masse de contacts n'est disponible,
- Nous n'avons pas encore d'API.

Nous avons de nombreuses nouveautés, une nouvelle mise en page et le très demandé mode sombre.

Sur un plan personnel, la fonctionnalité dont je suis le plus fier est la possibilité de tout personnaliser ou presque dans Chandler : de la mise en page aux modules que vous pouvez activer, jusqu'aux données que vous pouvez consigner sur votre vie.

Chandler reste open source et peut être installé gratuitement sur votre serveur, si vous savez utiliser Docker ou la ligne de commande. Vous pouvez toujours modifier le code si vous le souhaitez. Monica est, et restera toujours, open source. C'est la voie.

Pour l'instant, Monica est gratuite sur notre instance hébergée ([https://beta.monicahq.com](https://beta.monicahq.com)), mais nous appliquerons les mêmes tarifs que la version actuelle dès que nous considérerons le produit comme stable.

Je suis incroyablement fier de ce que nous avons accompli en huit ans. À l'époque, j'avais peur de rendre mon code public parce que je le savais de piètre qualité. Curieusement, cela n'a semblé déranger personne. Aujourd'hui, notre code est toujours ouvert au public et nous ne craignons plus le jugement. L'application reste une application Laravel, avec VueJS côté client et InertiaJS entre le front et le back. Une pile très simple. Nous nous efforçons de garder notre code aussi simple que possible pour faciliter la maintenance, l'évolution et le recrutement de développeurs pour nous aider.

Nous migrerons bientôt notre image Docker officielle vers Chandler. Cette image a été téléchargée plus de 25 millions de fois, ce qui nous rend humbles.

Au nom de toute l'équipe Monica, merci de nous être restés fidèles tout ce temps. « Toute l'équipe Monica », ce sont en réalité deux amis, Alexis et moi, vraiment passionnés par l'idée de proposer des outils sympas pour améliorer la vie des gens. Monica reste un projet parallèle pour nous, nous avons des emplois à plein temps « à côté ». Pendant que certains jouent à des jeux vidéo ou regardent Netflix, nous « jouons » dans le code de Monica. Et nous adorons ça.
