---
title: "Building Monica: relaties tussen mensen modelleren"
slug: modeling-relationships
date: 2026-09-02
author: 'Regis Freyd'
description: "Bepalen wat een relatie eigenlijk is, blijkt een van de moeilijkste problemen te zijn bij het herbouwen van Monica."
---
Toen we Monica begonnen te herbouwen, wist ik dat relaties een van de onderdelen zouden zijn die we opnieuw moesten doordenken. Wat ik niet had verwacht, was hoe moeilijk het zou zijn om überhaupt te definiëren wat een relatie is.

Een persoonlijke CRM moet weten hoe mensen met elkaar verbonden zijn. Iemand is je moeder, je broer, je vriend, je collega of je partner. Monica ondersteunt dat al jaren, en vanuit het perspectief van de gebruiker is het een vrij eenvoudige functie: je kiest een persoon, je kiest een relatie en je bent klaar.

Helaas is het ontwerpen van wat er achter dat kleine keuzemenu gebeurt helemaal niet eenvoudig.

## Zelfs eenvoudige relaties zijn niet zo eenvoudig

Stel dat Monica de zus van Ross is. Vanuit het perspectief van Monica is Ross haar broer. Beide uitspraken beschrijven dezelfde relatie, maar de woorden die we gebruiken hangen af van naar welke persoon we kijken.

Datzelfde gebeurt overal in een familie. Rachel is de moeder van Emma, terwijl Emma de dochter van Rachel is. Iemands tante heeft een nicht of een neef. Een grootmoeder heeft een kleindochter of een kleinzoon.

Andere relaties werken niet zo. Chandler en Joey zijn vrienden. Het woord is hetzelfde, van welke kant je ook kijkt. Bij neven, nichten en collega's kan het net zo werken.

We hebben dus al verschillend gedrag. Soms verandert een relatie van naam afhankelijk van de kant waarvan we kijken, soms niet, en soms hangt het woord dat we gebruiken af van het geslacht van een van de twee mensen.

En dit is het makkelijke deel.

## Families zijn rommelig

Stel je voor dat twee mensen trouwen en twee kinderen krijgen. Ze scheiden. Een van hen hertrouwt met iemand die al kinderen heeft uit een andere relatie, en misschien krijgen ze samen nog een kind.

Dat is geen bijzonder ongewone familie, maar we hebben nu ouders, kinderen, broers en zussen, halfbroers en halfzussen, stiefkinderen, stiefouders, partners en ex-partners.

Het roept ook vragen op waar volgens mij niet altijd een universeel antwoord op bestaat. Als je scheidt, houdt je schoonmoeder dan op je schoonmoeder te zijn? Formeel misschien. Maar wat als je haar al twintig jaar kent en haar nog altijd als familie beschouwt? Ze houdt in elk geval niet op de grootmoeder van je kinderen te zijn omdat jouw huwelijk voorbij is.

Dan zijn er nog biologische ouders, adoptieouders, pleegouders en voogden. Iemand kan meerdere mensen hebben die hij als ouders beschouwt, en die relaties betekenen niet noodzakelijk hetzelfde. Er zijn familieleden met wie het contact verbroken is, mensen die iemand als broer of zus zien zonder enige biologische band, ex-partners die heel dicht bij elkaar blijven, en ouders die samen kinderen opvoeden zonder nog een koppel te zijn.

De nette stamboom die we ons bij dit probleem graag voorstellen, overleeft het contact met veel echte families niet.

En zelfs wanneer de familiestructuur zelf eenvoudig is, veranderen relaties. Wie vandaag je partner is, kan over vijf jaar je ex-partner zijn. Dat betekent niet dat de oude relatie eenvoudigweg moet verdwijnen. Dat twee mensen vijftien jaar getrouwd waren, blijft deel van hun geschiedenis, ook als ze dat niet langer zijn.

Relaties hebben een verleden, waardoor alleen hun huidige toestand weergeven ook problematisch is.

## Twee mensen zijn het niet altijd eens over hun relatie

Familierelaties geven ons tenminste een paar feiten om mee te werken. Vriendschap is nog minder precies.

Als Monica Rachel als een goede vriendin beschouwt, beschouwt Rachel Monica dan noodzakelijk als een goede vriendin? We hebben geen idee.

Hetzelfde probleem bestaat bij mentoren, kennissen en tal van andere relaties. Iemand kan een ander als zijn mentor zien, ook als die persoon dat woord zelf nooit zou gebruiken. Iemand kan een oude vriend praktisch als familie zien, terwijl de ander in hem iemand ziet die hij jaren geleden kende.

Dat is heel belangrijk in Monica, omdat de informatie niet bedoeld is om een objectieve sociale graaf te beschrijven. Het is jouw informatie over de mensen in jouw leven.

Wanneer je opschrijft dat iemand je vriend is, beschrijf je de relatie zoals jij die begrijpt. Monica heeft de versie van de andere persoon niet, en in veel gevallen is er waarschijnlijk toch geen enkel juist antwoord.

Het wordt bijzonder vreemd wanneer software relaties in iets meetbaars probeert te veranderen. Is iemand een betere vriend omdat je hem elke week ziet? Is een vriendin die je vijf jaar niet hebt gezien minder belangrijk dan een collega met wie je elke dag praat? Natuurlijk zegt frequentie ons iets over een relatie, maar het zegt ons niet wat die relatie voor iemand betekent.

## De tijd past er ook niet netjes in

Een collega kan een vriend worden. Een vriend kan een partner worden. Een partner kan een ex-partner worden, en jaren later kan diezelfde persoon opnieuw een vriend worden.

Als Monica vastlegt dat twee mensen getrouwd zijn en ze later scheiden, wat moet er dan met het huwelijk gebeuren? Het verwijderen zou de huidige informatie correct maken, maar zou ook iets vrij belangrijks uit hun geschiedenis wissen.

We zouden datums kunnen bewaren, behalve dat mensen die vaak niet kennen. Ik kan weten dat twee vrienden vroeger samen waren zonder enig idee te hebben wanneer ze zijn begonnen of wanneer ze precies uit elkaar zijn gegaan. Exacte datums verplichten zou het model netter maken en het product aanzienlijk irritanter.

Er is ook geen garantie dat relaties netjes van de ene toestand in de andere overgaan. Mensen worden niet noodzakelijk op een ochtend wakker en gaan van "vriend" naar "partner". Sommige relaties hebben een duidelijk begin, zoals een huwelijk. Veel andere niet.

De database zou heel graag willen dat we weten wanneer alles begon en eindigde. Meestal weten we dat niet.

## Het Engels is niet het model voor de hele wereld

Een ander probleem is dat de meeste voorbeelden die als eerste in je opkomen op het Engels gebaseerd zijn.

Het Engels gebruikt "cousin" voor een groot aantal familierelaties, terwijl andere talen veel preciezer kunnen zijn. Het Mandarijn heeft bijvoorbeeld verschillende woorden voor neven en nichten, afhankelijk van welke kant van de familie ze komen, hun geslacht en soms hun leeftijd. Het Zweeds onderscheidt alle vier de grootouders: *mormor* is de moeder van je moeder, *morfar* de vader van je moeder, *farmor* de moeder van je vader en *farfar* de vader van je vader. Het Engels geeft ons simpelweg "grandmother" en "grandfather".

Het Koreaans levert nog een voorbeeld. Zelfs iets zo eenvoudigs als "oudere broer" verandert afhankelijk van wie er spreekt. Een man noemt zijn oudere broer *hyeong*, terwijl een vrouw hem *oppa* noemt. Het relatievocabulaire bevat informatie die niet in het Engelse woord "brother" zit.

Dat is belangrijk voor Monica, want Monica is in veel talen vertaald en wordt over de hele wereld gebruikt. We kunnen het hele relatiesysteem niet ontwerpen op de aanname dat het Engels de canonieke lijst van relaties bevat en dat elke andere taal die woorden alleen hoeft te vertalen.

Dat is een probleem dat we in Monica al zijn tegengekomen, en het herbouwen laat het niet als bij toverslag verdwijnen.

## Familie is niet eens het moeilijkste deel

Familierelaties hebben tenminste meestal een naam. De rest van onze relaties is veel minder gestructureerd.

"Vriend" kan iemand beschrijven die je dertig jaar kent en met wie je elke week praat, maar ook iemand die je twee keer per jaar ziet en die je heel veel doet. Een collega kan de persoon zijn die elke dag naast je zit, of iemand met wie je vijftien jaar geleden werkte.

En mensen passen niet in één categorie tegelijk. Iemand kan je collega, je vriend en je vroegere huisgenoot zijn. Je zakenpartner kan ook je broer zijn. Je buurvrouw kan de ouder zijn van de beste vriendin van je dochter.

Soms is de context zelf wat telt. Je kent iemand omdat je samen naar school ging, in hetzelfde team speelde, in hetzelfde gebouw woonde of aan hetzelfde project werkte. "Vriend" is misschien formeel juist, maar het verliest de informatie die verklaart waarom die persoon deel uitmaakt van je leven.

Hier wordt een eenvoudige vraag als "hoe ken je deze persoon?" verrassend moeilijk om met één veld te beantwoorden.

## Eén relatie kan er veel andere impliceren

Stel dat Ross de broer van Monica is en dat Ross een zoon heeft die Ben heet. We begrijpen onmiddellijk dat Monica de tante van Ben is.

Software kan tot dezelfde conclusie komen. En zodra ze daarmee begint, kan ze doorgaan.

Ouders impliceren kinderen. Kinderen met dezelfde ouders zijn misschien broers en zussen. Broers en zussen met kinderen leveren tantes, ooms, nichten en neven op. Voeg nog een generatie toe en je hebt grootouders en kleinkinderen. Vrij snel kan een klein aantal relaties een veel grotere familiegraaf opleveren.

Maar het feit dat software iets *kan* afleiden, betekent niet noodzakelijk dat ze het moet doen.

De nieuwe partner van een ouder is niet automatisch een ouder van het kind. Twee mensen die een ouder delen zijn formeel misschien halfbroers of halfzussen, maar kennen elkaar mogelijk niet. De informatie die Monica heeft kan ook simpelweg onvolledig zijn. En zelfs als de familierelatie formeel juist is, is het misschien niet de relatie die de betrokkenen zelf zouden gebruiken om elkaar te beschrijven.

Elke keer dat de software nog een relatie afleidt, krijgt ze ook nog een kans om het mis te hebben.

## Er zijn meer vragen dan antwoorden

Hoe langer we hieraan werken, hoe meer randgevallen we vinden.

Moet Monica de geschiedenis van een relatie onthouden of alleen de huidige toestand? Kunnen twee mensen meerdere relaties tegelijk hebben? Is "beste vriend" een andere relatie dan "vriend", of is dat iets anders? Wat gebeurt er als we de moeder van iemand kennen maar die moeder geen contact in Monica is? Hoe beschrijven we relaties die belangrijk voor ons zijn maar geen handige naam hebben?

Sommige daarvan zijn databaseproblemen. De meeste niet.

Het moeilijke deel is beslissen wat we bedoelen wanneer we zeggen dat twee mensen een relatie hebben, want mensen gebruiken dat woord niet met iets dat in de buurt komt van de precisie die een database zou verkiezen.

In de interface komt dit alles uiteindelijk misschien neer op een paar woorden op iemands profiel: moeder, broer, vriend, collega.

Die paar woorden juist krijgen is een van de moeilijkste problemen waar we bij het herbouwen van Monica mee bezig zijn.
