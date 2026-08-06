---
title: "L'application mobile est là"
slug: mobile-application
date: 2018-05-28
published_at: 2018-05-28T00:00:00+00:00
author: 'Regis Freyd'
description: "L'application mobile officielle a atterri."
original_url: https://www.monicahq.com/blog/mobile-application
---
Je reçois des emails réclamant une application mobile presque tous les jours depuis le lancement public de juin 2017.

Je comprends pourquoi. Une application mobile pour Monica a tellement de sens. Vous voulez avoir l'information immédiatement disponible, où que vous soyez, au bon moment. Pas quand vous êtes chez vous devant votre ordinateur.

Nous avons commencé à travailler sur l'application mobile il y a 6 mois. C'est long. Je ne crois pourtant pas que la plupart des gens mesurent le travail nécessaire pour livrer une application mobile. Surtout quand 99,9 % du code est écrit par une seule personne (le formidable @mokto). Qui a un travail à plein temps. Et qui n'est pas payé pour cela.

Pendant ces mois, nous avons beaucoup travaillé à mettre en place tout ce dont l'application mobile aurait besoin. L'API a beaucoup changé pour permettre certaines fonctionnalités. Nous avons stabilisé le backend pour être sûrs que tout fonctionne parfaitement. Nous avons aussi passé beaucoup de temps à bien configurer le dépôt GitHub de l'application mobile, ce qui nous permettra d'avancer plus vite à l'avenir (une bonne intégration continue, des tests unitaires, la publication automatique sur les stores, etc.).

Six mois plus tard, nous sommes fiers d'annoncer que la première version de l'application mobile est disponible [sur iOS](https://itunes.apple.com/ca/app/monica-personal-crm/id1339447754?mt=8) et sur [Android](https://play.google.com/store/apps/details?id=com.monicahq.app).

![L'application mobile de Monica sur trois téléphones : la fiche d'un contact, la liste de contacts vide et l'écran des activités.](/assets/images/blog/2018-05-28-mobile-app.webp)

Une réserve cependant : *cette première version est en lecture seule*. Vous ne pouvez donc ni ajouter ni modifier quoi que ce soit. Nous voulons une application de qualité, mais nous voulons avancer lentement et nous assurer qu'elle fonctionne bien. Dès que nous serons sûrs que cette version marche pour tout le monde, nous ajouterons de quoi manipuler complètement vos données comme vous l'entendez (petit indice : nous avons déjà commencé à travailler sur une nouvelle version).

À part cela, cette application mobile a tout ce que vous attendez de nous :

- Une interface simple et agréable.
- Vous pouvez vous connecter à notre version hébergée de Monica, ou à votre propre instance.
- Le code est open source. Vous pouvez le lire, ouvrir des tickets, y contribuer. Tout ce que nous faisons est ouvert et transparent, et nous croyons que seule la collaboration mène au meilleur produit.
- Open source signifie que vous pouvez *compiler et exécuter l'application mobile sans passer par les stores officiels d'Apple et de Google*, ce qui est assez remarquable, à mon avis.
- Nous n'affichons pas de publicité et nous ne revendons pas vos données.
- Nous n'avons aucun traceur dans notre code.
- L'application est gratuite. Sans contrepartie.

### Comment aider ?

Nous avons besoin de personnes qui veulent tester l'application et [nous signaler les bugs](https://github.com/monicahq/chandler/issues), pour l'essentiel. Nous aimerions aussi votre avis sur ce que nous devrions construire ensuite, ou sur la façon d'améliorer l'application (en matière d'expérience ou de mise en page).

### La suite

Dans les prochains jours, nous améliorerons la documentation du dépôt GitHub officiel, afin que les développeurs qui veulent aider puissent rejoindre le projet très facilement.

Dans les prochains mois, nous ajouterons la possibilité de modifier vos données depuis l'application mobile. L'objectif final est que tout ce que vous pouvez faire sur le web soit faisable sur mobile (à l'exception de l'export de vos données, car comment stocker un fichier sur iOS...). C'est pour cela que nous construisons désormais les fonctionnalités d'abord dans l'API, puis dans l'interface (web et mobile).

Pour conclure, je dirais que je suis très fier de ce que nous avons accompli jusqu'ici, et plus fier encore de la communauté qui nous aide chaque jour. Vos retours et votre aide rendent Monica possible.
