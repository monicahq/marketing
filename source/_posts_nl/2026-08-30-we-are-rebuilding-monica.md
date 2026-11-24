---
title: 'We bouwen Monica opnieuw'
slug: we-are-rebuilding-monica
date: 2026-08-30
author: 'Regis Freyd'
description: 'We bouwen Monica helemaal opnieuw, en deze nieuwe reeks documenteert hoe.'
---
Dit is het eerste artikel in een reeks die **Building Monica** heet. Ik wil deze reeks gebruiken om te documenteren hoe we Monica, de open source persoonlijke CRM, helemaal opnieuw opbouwen. Ik ga schrijven over de problemen die we proberen op te lossen, de beslissingen die we onderweg nemen en waarschijnlijk ook over een aantal dingen die niet lopen zoals verwacht.

Bijna tien jaar geleden begon ik Monica te bouwen omdat ik verschrikkelijk slecht was in het onthouden van dingen over mensen. Ik vergat de naam van iemands kind, waar we het over hadden gehad toen we elkaar voor het laatst zagen, of iets belangrijks dat iemand me een paar maanden eerder had verteld. Ik wilde een plek om dat allemaal op te schrijven, vooral om mijn slechte geheugen te compenseren, dus begon ik een [professionele CRM](https://highrisehq.com/) te gebruiken.

Dat was geen goede oplossing. De software was gemaakt voor verkopers, en dat was ik niet, en ik had niet veel zin om te betalen voor een tool die me moest helpen geld te verdienen terwijl ik alleen dingen over mijn vrienden en familie wilde onthouden. Ik zocht iets dat beter paste, vond niets, en besloot het zelf te bouwen.

Dat kleine project werd uiteindelijk Monica. Ik zette de code op GitHub, plaatste hem op [Hacker News](https://news.ycombinator.com/item?id=14497295), en vanaf daar ging het er een beetje wild aan toe. Ik was blijkbaar niet de enige die naar zoiets op zoek was. Alexis kwam er later als medeoprichter bij, en in de loop der jaren hebben duizenden mensen Monica gebruikt, code bijgedragen, het project vertaald, fouten gemeld en de applicatie op hun eigen server gezet. Het project heeft nu meer dan 25.000 sterren op GitHub en is een van de bekendste open source persoonlijke CRM's geworden.

Ik ben heel trots op wat Monica is geworden. Maar na er zo lang aan gewerkt te hebben, ben ik op een punt gekomen waarop de huidige versie niet meer de persoonlijke CRM is die ik vandaag zou bouwen.

## Bijna tien jaar aan beslissingen

Toen ik met Monica begon, had ik natuurlijk geen tien jaar ervaring in het nadenken over hoe je persoonlijke relaties in software weergeeft. De meeste beslissingen werden genomen op het moment dat er een probleem opdook. We hadden contacten nodig, dus bouwde ik contacten. We hadden relaties nodig, dus voegde ik relaties toe. Daarna kwamen herinneringen, activiteiten, cadeaus, notities, huisdieren, adressen en veel andere functies.

Er is niets bijzonder verkeerd aan software zo bouwen. Zo is Monica gegroeid, en veel van die beslissingen waren op dat moment logisch. Maar na bijna tien jaar tellen ze op. Nieuwe ideeën moeten om beslissingen heen werken die jaren eerder zijn genomen, en wat eruitzag als een implementatiedetail wordt langzaam een grens aan wat je met het product kunt doen.

In de loop van de tijd zijn sommige delen van Monica daardoor moeilijker te veranderen dan ze zouden moeten zijn. En belangrijker nog: ik ben van gedachten veranderd over een aantal van de oorspronkelijke beslissingen.

## Wat zou ik vandaag bouwen?

Op een bepaald moment begon ik me een eenvoudige vraag te stellen: als Monica niet bestond en ik vandaag een persoonlijke CRM moest bouwen, met alles wat ik het afgelopen decennium heb geleerd, hoe zou die er dan uitzien?

Dat leidde snel tot vragen die veel fundamenteler waren dan welke functies Monica zou moeten hebben. Wat is een persoon eigenlijk in Monica? Hoe zouden relaties tussen mensen moeten werken? Hoe zou Monica de gebruiker zelf moeten weergeven? Wat gebeurt er als het belangrijke in iemands leven geen andere persoon is, maar een dier, een organisatie of iets heel anders? Hoe zouden herinneringen moeten werken als menselijke relaties van zichzelf geen schema volgen? Wat zou een activiteit moeten voorstellen? En hoeveel hiervan zou Monica eigenlijk voor je moeten bepalen?

Relaties zijn een goed voorbeeld. Opslaan dat Monica de zus van Ross is, lijkt niet bijzonder ingewikkeld. Maar als Monica de zus van Ross is, is Ross ook de broer van Monica. Een ouderrelatie veronderstelt een kindrelatie. Sommige relaties hebben een richting, andere niet. Echte families hebben scheidingen, nieuwe huwelijken, stiefkinderen, halfbroers en halfzussen, adoptie en allerlei structuren die niet netjes in een vaste lijst passen. Verschillende culturen beschrijven familiebanden ook anders.

Ik heb hier voor de nieuwe versie veel over nagedacht, en ik zie relaties nu als een eigen domein in plaats van als een eigenschap die aan een contact hangt. Dat lijkt me nu volkomen logisch. Dat was het niet toen we de eerste versies van Monica ontwierpen.

Aanpasbaarheid is nog een gebied waarover ik van gedachten ben veranderd. Historisch heeft vooral Monica bepaald wat een contact is en welke informatie je erover kunt bewaren, en hebben we rond die structuur aanpasbaarheid toegevoegd. Voor v3 willen we dat omdraaien. Monica blijft goede standaardinstellingen bieden, want niemand wil vijftig dingen instellen voordat hij zijn eerste contact toevoegt, maar jouw leven zou niet in het databaseschema hoeven passen dat wij voor iedereen goed vonden.

Zodra je dingen op dat niveau verandert, is een paar schermen opnieuw ontwerpen niet genoeg. De fundering moet ook veranderen.

## Wat ik wil dat v3 wordt

Monica v3 is niet bedoeld als het huidige product met een mooiere interface. De interface gaat flink veranderen, en ik wil dat die veel speelser en persoonlijker aanvoelt dan de meeste software die we vandaag gebruiken, maar dat is maar een deel van het werk.

Ik wil een heel krachtig systeem bouwen om de mensen en relaties in iemands leven te documenteren. Alles optimaliseren voor eenvoud interesseert me niet zo als het resultaat een product is dat alleen eenvoudige levens kan weergeven. Ik heb liever goede standaardinstellingen voor mensen die niets willen instellen, en geef mensen die dat wel willen enorm veel controle over hoe hun Monica werkt.

Dat betekent relaties als volwaardige concepten behandelen en mensen zelf laten bepalen welke informatie voor hen belangrijk is. Monica moet veel meer aankunnen dan een vaste lijst velden die aan een contact hangt. Het moeilijke wordt om dat allemaal te doen zonder te eindigen met bedrijfssoftware voor het beheren van je vrienden en familie, want dat zou behoorlijk vreselijk zijn.

Er zijn ook dingen die ik niet wil veranderen. Privacy en eigenaarschap over je gegevens blijven enorm belangrijk voor Monica. Het project blijft open source en je kunt het zelf blijven hosten. Als je jarenlang een deel van de meest persoonlijke informatie in je leven aan software toevertrouwt, vind ik dat je zoveel mogelijk controle over die informatie moet hebben.

Ik wil ook niet dat Monica bepaalt hoe belangrijk iemand voor je is. Ze kan je helpen dingen te onthouden, informatie te organiseren en je vertellen dat je iemand al een tijd niet hebt gesproken. De relatie zelf blijf je zelf onderhouden.

## Opnieuw beginnen, met tien jaar ervaring

"Opnieuw beginnen" is natuurlijk niet helemaal juist. Toen ik Monica in 2017 maakte, had ik een idee en een probleem dat ik wilde oplossen. Deze keer hebben we bijna tien jaar ervaring met dat probleem, duizenden gesprekken met gebruikers, bijdragen van mensen over de hele wereld, twee generaties van het product en een behoorlijk lange lijst met dingen die we niet nog eens zo zouden doen.

Terwijl we aan v3 werken, wil ik hier meer van in het openbaar documenteren. Achter iets dat van buiten redelijk eenvoudig lijkt, zitten verrassend veel moeilijke problemen, vooral als je serieus gaat nadenken over relaties, herinneringen, aanpasbaarheid en hoe je iets zo rommelig als een mensenleven in een database weergeeft. Ik ga over die problemen schrijven, maar ook over de technische keuzes en ontwerpkeuzes die we maken en over de dingen die we proberen en die niet blijken te werken.

Daar gaat **Building Monica** over. Ik weet niet hoe vaak ik een artikel zal publiceren, en ik wil geen publicatieschema bedenken alleen maar om er een te hebben. Ik schrijf wanneer we iets interessants te vertellen hebben.

In 2017 bouwde ik Monica op basis van wat ik toen van het probleem begreep. Bijna tien jaar later begrijp ik dat probleem heel anders. Daarom bouwen we het opnieuw.
