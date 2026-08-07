---
title: 'Er komt een nieuwe Monica aan'
slug: a-new-version-is-coming
date: 2022-08-28
published_at: 2022-08-28T20:44:00+00:00
author: 'Regis Freyd'
description: 'Er komt een volledig nieuwe hoofdversie aan.'
original_url: https://www.monicahq.com/blog/a-new-version-is-coming
---
[Alexis](https://twitter.com/asbin) en ik [(Regis)](https://twitter.com/maazarin) werken nu een paar maanden (nou ja, sinds januari 2022) aan een gloednieuwe versie van Monica. De eerste echt nieuwe hoofdversie sinds we een paar jaar geleden lanceerden.

Ik word erg verleid om het een "snellere, nieuwere, betere versie" te noemen, want dat is het, maar ik ben slecht in marketing, dus ik zeg gewoon dat het een nieuwe versie is en beantwoord hieronder de vragen die je misschien hebt.

**Wat bedoelen we met een nieuwe versie?**

Een volledige herschrijving van Monica, vanaf nul.

**Zijn jullie gek geworden?**

Ja, maar ook: de code van Monica is inmiddels oud. Oud in de zin dat het 7 jaar oud is en dat honderden bijdragers eraan hebben gezeten. Er zitten dingen in de code die we destijds hebben doorgelaten, omdat we het toen niet beter wisten of omdat we bijdragers niet voor het hoofd wilden stoten, die we niet meer willen. Het project heeft veel te veel afhankelijkheden en het onderhouden van de code is lastiger geworden dan het was. Iets veranderen is riskanter en kost meer tijd. We hebben ook gezien hoe mensen Monica gebruiken en wat ze ermee willen, en de huidige code beperkt ons veel te veel als we willen ondersteunen waar mensen Monica voor willen inzetten. En tot slot is Monica voor ons nog steeds een project naast ons werk. We zijn er enorm gepassioneerd over en we willen er ook plezier in hebben om het te bouwen. En dat was de huidige versie niet meer.

**Wat bedoelen jullie met herschrijven?**

Dat we met een lege code zijn begonnen en het daarvandaan hebben opgebouwd. Eerder was het een Laravel-app (dus PHP), met Blade-views en hier en daar wat Vue. Nu is het nog steeds een Laravel-app (dus nog steeds PHP), maar volledig met Vue 3. We hebben veel vereenvoudigd, sommige dingen flexibeler en daardoor iets ingewikkelder gemaakt, maar we denken dat we de toekomst van Monica ermee aankunnen.

Het betekent ook dat we een gloednieuwe gegevensstructuur hebben, gedragen door een nieuw databaseschema.

**Gaat de nieuwe versie Monica heten?**

Op dit moment is de codenaam van de nieuwe Monica Chandler. Die naam houden we niet: de officiële naam van de nieuwe Monica wordt Monica. Voor de duidelijkheid noemen we de nieuwe versie in de rest van dit artikel Chandler.

**Kozen jullie PHP ondanks \<vul nieuwe taal of framework in>?**

PHP is een prima taal. We leven niet meer in het tijdperk van PHP 4 of 5. Het is bovendien een heel eenvoudige taal, wat betekent dat veel mensen ter wereld PHP kunnen lezen en begrijpen. PHP kiezen betekent dat het makkelijker is aan het project bij te dragen, makkelijker te debuggen, makkelijker te onderhouden en makkelijker voor ons om mensen te vinden die ons helpen als dat later nodig is. En het ecosysteem van PHP is gewoon prachtig, met Laravel als wegbereider van een van de beste ontwikkelaarservaringen die ik ken.

**Welke functies krijgt Chandler?**

Bij de lancering willen we 100% (of bijna) de functies van Monica v1 evenaren. Ook als we ze evenaren, wilden we ze ofwel vereenvoudigen (taken bijvoorbeeld) ofwel robuuster maken (herinneringen bijvoorbeeld).

Zodra dat gedaan is hebben we zoveel ideeën over wat Monica zou moeten worden dat het overweldigend is. Monica is ontstaan als de eerste persoonlijke CRM (of PRM, personal relationship manager) die er was. Zo hebben we het ook in de markt gezet. Maar na jaren eraan werken, met mensen praten en de duizenden e-mails lezen die jullie ons hebben gestuurd, beseften we dat Monica eigenlijk een manier is om je leven vast te leggen, wat dat voor jou ook betekent. Monica gaat dus over je leven vastleggen, en je gereedschap geven om dat te doen zoals jij dat wilt.

Overal lees je dat producten een uitgesproken mening en een sterke persoonlijkheid moeten hebben, zodat mensen je gereedschap gebruiken zoals jij dat wilt. Dat was de richting van v1. Die uitspraak willen we nu veranderen. We willen dat mensen Monica gebruiken en instellen zoals zij dat willen. Wie zijn wij om te zeggen dat je maar 3 voornaamwoorden voor je contacten mag gebruiken, of welke soorten relaties je zou moeten hebben? Chandler wordt volledig aanpasbaar, van wat je in de interface ziet tot het soort gegevens dat je kunt invoeren. Marketingmensen zouden zeggen "Chandler draait helemaal om jou", en dat is in zekere zin waar. Het nadeel: technisch gezien is dat lastiger te beheren, maar dat is onze zorg.

**Wanneer is het klaar? Kan ik het proberen?**

Het is klaar als het klaar is. Bedenk dat we hier absoluut niet fulltime aan werken. Alexis en ik hebben allebei veeleisende banen, en we hebben gezinnen, vrienden en Monica (en OfficeLife).

MAAR.

We hebben al veel gedaan. Een paar grote functies die je kent en waar je van houdt ontbreken nog in de nieuwe versie: levensgebeurtenissen, activiteiten, cadeaus en CalDAV/CardDAV, om er een paar te noemen. Levensgebeurtenissen zijn extra groot omdat we het hele idee opnieuw willen doordenken en echt nuttig willen maken. En, dat is een enorme "en", we hebben nu nog geen API. Omdat dit een nieuwe code is, kunnen we je bestaande v1-contacten niet zomaar kopiëren en verwachten dat ze in v2 verschijnen. Zouden we nu iets uitbrengen, dan kon je je gegevens dus niet importeren. En dat vinden we een probleem.

DAT GEZEGD HEBBENDE.

We hebben nog steeds testers nodig die ons helpen fouten te vinden, ook al maken wij hier geen fouten (lol). We hebben mensen nodig die spelfouten in de documentatie helpen oplossen. Wat we dus zouden kunnen doen is Chandler in een zeer vroege alfastaat uitbrengen, gratis voor iedereen tot het geen alfa meer is.

**Is het nog steeds open source? Kan ik het gratis gebruiken?**

Ja, het is nog steeds open source, met dezelfde licentie als eerst. Dat betekent dat Monica uiteraard gratis is, tenzij je de versie gebruikt die wij hosten, die uiteindelijk iets gaat kosten, net als de huidige versie. Ja, je kunt het installeren waar je wilt, op je eigen server. Omdat Chandler niet dezelfde code is, hebben we nog niet het rijke ecosysteem dat we eerder hadden met al die verschillende manieren om het overal te installeren, maar dat komt goed. En ja, je kunt nog steeds aan de code bijdragen, fouten oplossen en functies toevoegen, al behouden we ons het recht voor je pull request te weigeren als we vinden dat we niet willen ondersteunen wat jij wilt.

**Wat is de toekomst van Monica v1?**

We ondersteunen v1 tot Chandler uit alfa en bèta is. Daarna komt het te vervallen, maar wie het zelf host kan het blijven gebruiken als hij dat wil. De v1 die wij zelf hosten wordt daarna niet meer ondersteund.

**Kun je nu al aan de code bijdragen?**

De repository staat [al op GitHub](https://github.com/monicahq/chandler), maar we zijn nog lang niet zo volwassen als de huidige hoofdrepository. Dat betekent dat we nog niet klaar zijn om bijdragen van iedereen te ondersteunen, omdat er bijna elke dag dingen veranderen, maar als je dat accepteert: ga je gang.

**Wat komt er hierna?**

Allereerst: heel erg bedankt dat je dit hele bericht hebt gelezen. We zijn enorm dankbaar voor onze gemeenschap en voor het feit dat jullie nog steeds gepassioneerd zijn over dit kleine hulpmiddel dat wij met plezier bouwen. Alexis en ik zijn nog altijd erg gemotiveerd, en we danken jullie dat jullie er met ons om geven. We houden contact.
