---
title: 'De mobiele applicatie is er'
slug: mobile-application
date: 2018-05-28
published_at: 2018-05-28T00:00:00+00:00
author: 'Regis Freyd'
description: 'De officiële mobiele applicatie is uit.'
original_url: https://www.monicahq.com/blog/mobile-application
---
Sinds de openbare lancering in juni 2017 krijg ik bijna elke dag mails met de vraag om een mobiele applicatie.

Ik begrijp dat wel. Een mobiele app voor Monica is heel logisch. Je wilt de informatie meteen bij de hand hebben, waar je ook bent, op het juiste moment. Niet pas als je thuis achter je computer zit.

We zijn 6 maanden geleden aan de mobiele applicatie begonnen. Dat is lang. Toch denk ik dat de meeste mensen zich niet realiseren hoeveel werk er nodig is om een mobiele applicatie uit te brengen. Zeker als 99,9% van de code door één persoon wordt gemaakt (de geweldige @mokto). Die een dagelijkse baan heeft. En er niet voor betaald wordt.

In die maanden hebben we veel moeite gestoken in alles wat de mobiele applicatie nodig zou hebben. De API is flink veranderd om bepaalde functies mogelijk te maken. We hebben de backend gestabiliseerd om te zorgen dat het foutloos werkt. We hebben ook veel tijd besteed aan het goed inrichten van de repository van de mobiele app op GitHub, zodat we in de toekomst sneller kunnen werken (denk aan een goede CI, unittests, automatisch publiceren in de winkels, enzovoort).

En zes maanden later zijn we er trots op te kunnen melden dat de eerste versie van de mobiele applicatie beschikbaar is [voor iOS](https://itunes.apple.com/ca/app/monica-personal-crm/id1339447754?mt=8) en [Android](https://play.google.com/store/apps/details?id=com.monicahq.app).

![De mobiele applicatie van Monica op drie telefoons: het profiel van een contact, de lege contactenlijst en het activiteitenscherm.](/assets/images/blog/2018-05-28-mobile-app.webp)

Er is wel één kanttekening: *deze eerste versie is alleen-lezen*. Dat betekent dat je niets kunt toevoegen of bewerken. We willen een goede applicatie, maar we willen rustig te werk gaan en zeker weten dat het goed werkt. Zodra we er vertrouwen in hebben dat deze versie voor iedereen werkt, voegen we functies toe waarmee je je gegevens volledig kunt bewerken (tip: we zijn al aan een nieuwe versie begonnen).

Verder heeft deze mobiele app alles wat je van ons gewend bent:

- Een eenvoudige, vriendelijke interface.
- Je kunt verbinden met onze gehoste versie van Monica, of inloggen op je eigen installatie.
- De code is open source. Je kunt de code lezen, issues insturen en aan de code bijdragen. Alles wat we doen is open en doorzichtig, en wij geloven dat alleen samenwerking tot het beste product leidt.
- Open source betekent dat je *de mobiele applicatie kunt bouwen en draaien zonder langs de officiële winkels van Apple en Google te gaan*, wat ik nogal bijzonder vind.
- We tonen geen advertenties en verkopen je gegevens niet door.
- Er zit geen enkele vorm van tracking in onze code.
- De app is gratis. Zonder addertjes.

### Hoe kun je helpen?

We hebben vooral mensen nodig die de applicatie willen testen en [ons willen laten weten of er fouten in zitten](https://github.com/monicahq/chandler/issues). Ook horen we graag wat we hierna zouden moeten bouwen, of hoe we de app beter kunnen maken (qua gebruikerservaring of qua indeling).

### Wat komt er hierna?

De komende dagen verbeteren we de documentatie in de officiële repository op GitHub, zodat ontwikkelaars die willen helpen heel makkelijk kunnen aanhaken.

De komende maanden voegen we de mogelijkheid toe je gegevens binnen de mobiele applicatie te bewerken. Het uiteindelijke doel is dat alles wat je op het web kunt doen ook op mobiel kan (behalve je gegevens exporteren, want hoe bewaar je op iOS een bestand...). Daarom bouwen we functies nu eerst in de API en daarna in de interface (zowel web als mobiel).

Tot slot: ik ben erg trots op wat we tot nu toe hebben bereikt, en nog trotser op de gemeenschap die ons elke dag helpt. Jullie feedback en hulp maken Monica mogelijk.
