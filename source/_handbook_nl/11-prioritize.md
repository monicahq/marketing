---
title: "Hoe bepalen we de prioriteit van functies?"
slug: prioritize
section: product
order: 2
description: Hoe we bugs, onze eigen interesses, verzoeken uit de community, onderhoud op lange termijn en de ambitie om Monica leuk om te bouwen in balans houden.
updated: 2026-11-18
---

Dit is een pittig onderwerp. Als onderhouder van het project moet ik voortdurend omgaan met twee tegenstrijdige gedachten. Aan de ene kant is er wat gebruikers willen en nodig hebben. Aan de andere kant is er waar ik zin in heb om aan te werken. Soms vallen die prioriteiten samen, en soms niet.

Ik heb Monica oorspronkelijk voor mezelf gebouwd. Ik heb het open source gemaakt zodat anderen er ook voordeel van hebben. En ik heb besloten onze eigen instantie te hosten zodat mensen zonder de technische kennis om het zelf te hosten het ook kunnen gebruiken.

### We zijn geen traditioneel softwarebedrijf

We willen dat Monica genoeg geld genereert om zichzelf te bedruipen en de tijd te rechtvaardigen die we eraan besteden. Maar de omzet maximaliseren is niet de belangrijkste motivatie achter het project.

Waar ik kan, pleit ik ervoor dat mensen de Docker-image gebruiken en Monica zelf hosten als ze daarvoor de technische kennis hebben. Hoeveel moeite we ook doen om onze gehoste instantie te beveiligen, ze zal je nooit hetzelfde niveau van controle geven als een systeem dat je zelf bezit en goed onderhoudt.

Door deze onafhankelijkheid hebben we de luxe om te beslissen waar we aan willen werken, zonder dat we elke beslissing per se financieel hoeven te rechtvaardigen.

### Bugs gaan voor

Bugs verhelpen moet over het algemeen voorrang krijgen boven het introduceren van nieuwe functies.

Iemand die Monica elke dag gebruikt en drie maanden lang tegen dezelfde irritante bug aanloopt, geeft er waarschijnlijk niets om dat we net vijf nieuwe functies hebben geïntroduceerd.

Natuurlijk zijn niet alle bugs gelijk. Een bug die gegevensverlies veroorzaakt is oneindig veel belangrijker dan een knop die in een bepaalde browser twee pixels scheef staat.

We moeten ons oordeel gebruiken, maar het algemene principe is dat het bestaande product goed laten werken belangrijker is dan het groter maken.

### We willen plezier hebben

Daarom kan ik, naast het verhelpen van bugs, besluiten te werken aan iets wat ik zelf wil in plaats van wat de hele community wil.

Ik wil plezier hebben met dit project. Ik wil genieten van de tijd die ik eraan besteed. Ik doe dit 's avonds en in het weekend, en er zijn tal van andere dingen die ik met die tijd zou kunnen doen.

CalDAV implementeren is bijvoorbeeld niet leuk voor mij. Ik zal het waarschijnlijk nooit doen. En ik zal die bijdrage waarschijnlijk ook niet accepteren als ze uit de community komt, want ik zou haar moeten onderhouden voor de rest van het leven van de software, niet degene die haar heeft aangeleverd.

Dit klinkt misschien egoïstisch. Misschien is het dat ook. Maar het alternatief is mijn vrije tijd besteden aan dingen die ik niet leuk vind, uiteindelijk mijn interesse in het project verliezen en er helemaal mee ophouden.

Ik denk niet dat iemand daar baat bij zou hebben.

De motivatie van de mensen die een open source project onderhouden is een ongelooflijk belangrijke hulpbron. We moeten haar even goed beschermen als de technische kwaliteit van het project.

### Luister naar de community

Ik ben echter ook niet blind. Als ik zie dat iets steeds terugkomt, overweeg ik serieus het te bouwen.

Ik wil anderen helpen, en een manier om anderen te helpen is iets bouwen wat ze nodig hebben.

Feedback van de community is uiterst waardevol, omdat ze ons laat kennismaken met manieren om Monica te gebruiken waar we zelf nooit aan zouden hebben gedacht. Ons eigen leven is niet per se representatief voor dat van anderen.

Dat gezegd hebbende, is het aantal upvotes op een GitHub-issue niet het enige criterium om te beslissen of iets gebouwd moet worden.

Een functie waar honderd mensen om vragen kan fundamenteel ingaan tegen de filosofie van het project. Een functie waar één persoon om vraagt kan een absoluut briljant idee zijn waar iedereen baat bij heeft.

Populariteit is een aanwijzing dat er mogelijk een probleem is dat het oplossen waard is. Ze zegt ons niet per se hoe we het moeten oplossen of of Monica het juiste gereedschap is om het op te lossen.

### Een bijdrage is niet gratis

Een van de misverstanden over open source is dat als iemand bereid is een functie zelf te bouwen, er geen reden is om haar niet te accepteren.

Nou, nee.

De eerste code schrijven is maar een klein deel van de kosten van een functie. Zodra we haar accepteren, worden we er verantwoordelijk voor. We moeten haar testen, documenteren, vertalen, beveiligen, haar bugs verhelpen en ervoor zorgen dat ze blijft werken terwijl de rest van de applicatie zich ontwikkelt.

De persoon die de functie heeft bijgedragen kan de dag erna uit het project verdwijnen. De functie is nu echter onze verantwoordelijkheid.

Daarom kunnen we een perfect uitgevoerde pull request afwijzen. Dat betekent niet per se dat de code slecht is of dat we de moeite niet waarderen. Het betekent gewoon dat we de verantwoordelijkheid voor het onderhoud van die specifieke functie op lange termijn niet willen dragen.

### Houd rekening met de kosten van ja zeggen

Elke functie waaraan we werken, is een functie waarmee we niet aan iets anders werken.

Als we drie weken besteden aan een integratie met een andere software, zijn dat drie weken die we niet besteden aan het verbeteren van de kernfunctionaliteit van Monica.

We hebben een beperkte hoeveelheid tijd. We moeten zoveel mogelijk daarvan besteden aan dingen die Monica fundamenteel beter maken in wat het hoort te doen.

We moeten ook nagaan of de functie nieuwe afhankelijkheden van externe diensten, nieuwe beveiligingsproblemen of totaal nieuwe concepten introduceert die gebruikers moeten begrijpen.

Soms zit achter een ogenschijnlijk simpele functie een absurde hoeveelheid complexiteit verborgen.

### Beloof geen dingen

We geloven niet in het bijhouden van een gedetailleerde openbare roadmap die iedereen vertelt wat er over zes maanden wordt uitgebracht.

We weten niet waar we over zes maanden aan willen werken. We weten niet welke problemen we zullen ontdekken, welke feedback we zullen krijgen of hoe ons persoonlijke leven eruit zal zien.

We kunnen ideeën delen over waar we met het project heen willen, maar die ideeën mogen niet als beloftes worden opgevat.

Evenzo is een open issue op GitHub geen toezegging om iets te bouwen. Het betekent dat we het verzoek kennen en het op een gegeven moment misschien overwegen.

Ik stel liever iemand vandaag teleur door nee te zeggen dan dat ik hem teleurstel met een belofte die we niet nakomen.

### Sommige dingen zullen nooit worden gebouwd

Hoeveel mensen er ook om vragen, er zijn functies die we simpelweg niet zullen bouwen.

Alles wat fundamenteel ingaat tegen het doel van Monica, het product onnodig complex maakt, de privacy in gevaar brengt of de noodzaak wegneemt om daadwerkelijk moeite te doen voor goede relaties, zal waarschijnlijk nooit in het product terechtkomen.

We proberen geen product te bouwen dat iedereen tevredenstelt. Dat zou waarschijnlijk resulteren in een product dat niemand bijzonder leuk vindt.

### Hoe we uiteindelijk beslissen

Als we overwegen aan iets te werken, moeten we onszelf een paar vragen stellen:

- Lost het een echt probleem op?
- Past het binnen de scope van Monica?
- Zou een zinvol deel van onze gebruikers er baat bij hebben?
- Kunnen we het probleem op een eenvoudigere manier oplossen?
- Zijn we bereid het de komende tien jaar te onderhouden?
- Zouden we het leuk vinden om eraan te werken?

We hebben geen ingewikkeld Excel-spreadsheet met gewogen scores nodig om functies te prioriteren. We hebben gezond verstand nodig, een heldere visie op wat Monica moet zijn en genoeg nederigheid om te erkennen dat we het soms bij het verkeerde eind kunnen hebben.

Er zal altijd meer te bouwen zijn dan er tijd is om het te bouwen. Dat is prima.

Monica hoeft niet af te zijn. Het moet nuttig, onderhoudbaar en leuk om aan te werken blijven.
