<?php

/**
 * Dutch copy. Not a literal translation of the English: the jokes are rewritten
 * so they land, and the register stays "je", calm and direct, never commercial.
 *
 * Written for the Netherlands rather than Flanders, which is why it says "je"
 * and not "u": Dutch marketing copy that addresses a reader as "u" reads as a
 * bank letter, and the house voice is the opposite of that.
 */

return [
    'meta' => [
        'imageAlt' => "Monica: onthoud de mensen die je dierbaar zijn. De open source persoonlijke CRM.",

        'breadcrumb' => [
            'home' => "Start",
            'v3' => "Monica v3",
            'pricing' => "Prijzen",
            'features' => "Functies",
            'featuresDashboard' => "Krachtig dashboard",
            'featuresJournal' => "Dagboek",
            'blog' => "Blog",
            'terms' => "Gebruiksvoorwaarden",
            'team' => "Team",
            'privacy' => "Privacybeleid",
            'personalCrm' => "Gids persoonlijke CRM",
            'page' => "Pagina :number",
        ],

        'software' => [
            'monthly' => "Monica gehost, per maand gefactureerd",
            'yearly' => "Monica gehost, per jaar gefactureerd",
            'selfHosted' => "Monica in eigen beheer",
        ],

        'home' => [
            'title' => "Monica — de open source persoonlijke CRM",
            'description' => "Monica helpt je de mensen te onthouden die je dierbaar zijn: wat er in hun leven speelt, belangrijke data, eerdere gesprekken en wanneer je weer contact opneemt. Privé, open source, in eigen beheer te draaien.",
        ],

        'pricing' => [
            'title' => "Prijzen van Monica — één gehost abonnement, of gratis in eigen beheer",
            'description' => "Monica gehost kost 9 USD per maand of 90 USD per jaar, met onbeperkt contacten en geen prijs per contact. Of draai de open source applicatie gratis op je eigen infrastructuur.",
        ],

        'privacy' => [
            'title' => "Privacybeleid — Monica",
            'description' => "Hoe Monica met je gegevens omgaat: wat we verzamelen, waar het staat, wie het kan inzien en wat er gebeurt als je je account opzegt. Geen advertenties, geen trackers, geen doorverkoop van gegevens.",
        ],

        'team' => [
            'title' => "Team — Monica",
            'description' => "Monica wordt gebouwd door twee mensen in Montreal, met honderden open source bijdragers. Waarom we een persoonlijke CRM bouwen die menselijke relaties geen schade toebrengt.",
        ],

        'terms' => [
            'title' => "Gebruiksvoorwaarden — Monica",
            'description' => "De gebruiksvoorwaarden van Monica, de open source persoonlijke CRM: wat de dienst omvat, je rechten op je gegevens, je verantwoordelijkheden en de juridische kleine lettertjes.",
        ],

        'blog' => [
            'title' => "De blog van Monica — releasenotes en productkeuzes",
            'description' => "Wat we uitbrengen, waarom we het zo bouwen en hoe een klein open source bedrijf er werkelijk uitziet. Geschreven door de mensen die Monica maken.",
        ],

        'post' => [
            'title' => ":title — de blog van Monica",
        ],

        'paginated' => ":title (pagina :page van :total)",

        'v3' => [
            'title' => "Monica v3 — herbouwd voor de komende tien jaar",
            'description' => "Monica v3 is een volledige herbouw van de open source persoonlijke CRM: records die je zelf ontwerpt, een dagboek dat overal aan vastzit, een complete API en een fatsoenlijke mobiele ervaring. Nog steeds open source. Verwacht voor het eind van 2026.",
        ],

        'features' => [
            'title' => "Contactbeheer — functies van Monica",
            'description' => "Schrijf op wat je weet over de mensen die je dierbaar zijn: relaties, contactgegevens, privénotities, telefoontjes, herinneringen en cadeaus, allemaal op één contactrecord.",
        ],

        'featuresDashboard' => [
            'title' => "Het dashboard — functies van Monica",
            'description' => "Het dashboard van Monica laat zien wie je het laatst hebt bekeken, wat eraan komt, je favoriete notities en de telefoontjes die je hebt gepleegd, zodat je je kunt richten op wat er echt toe doet.",
        ],

        'featuresJournal' => [
            'title' => "Het dagboek — functies van Monica",
            'description' => "Schrijf dagboeknotities, leg vast hoe je dag was en lees de activiteiten met je contacten die Monica automatisch voor je bijhoudt.",
        ],

        'personalCrm' => [
            'title' => "Wat is een persoonlijke CRM? Een praktische gids — Monica",
            'description' => "Wat een persoonlijke CRM is, hoe die verschilt van een adresboek en een sales-CRM, wat je erin zet, welke privacyafwegingen erbij horen en hoe je de juiste aanpak kiest.",
        ],
    ],

    'announcement' => [
        'headline' => "Monica v3 komt voor het eind van 2026.",
        'detail' => "Opnieuw opgebouwd. Nog steeds open source.",
        'cta' => "Bekijk wat eraan komt",
    ],

    'nav' => [
        'label' => "Hoofdmenu",
        'product' => "Product",
        'personalCrm' => "Wat is een persoonlijke CRM",
        'v3' => "Monica v3",
        'features' => "Functies",
        'pricing' => "Prijzen",
        'blog' => "Blog",
        'docs' => "Documentatie",
        'signIn' => "Inloggen",
        'getStarted' => "Aanmelden",
        'stars' => ":count sterren",

        // The features menu: three columns of what Monica does, and a card
        // pointing at templates, the thing a new reader most often misses.
        'menu' => [
            'groups' => [
                [
                    'title' => "Onthouden",
                    'items' => [
                        ['icon' => 'note', 'title' => "De details", 'body' => "Alles over iemand, op één plek."],
                        ['icon' => 'reminder', 'title' => "Herinneringen", 'body' => "Verjaardagen, opvolgen, terugkerend."],
                        ['icon' => 'timeline', 'title' => "Tijdlijn", 'body' => "Eén keer vastleggen. Iedereen die erbij was, krijgt het."],
                    ],
                ],
                [
                    'title' => "Ordenen",
                    'items' => [
                        ['icon' => 'relationship', 'title' => "Relaties", 'body' => "Stambomen, en wie wie kent."],
                        ['icon' => 'vault', 'title' => "Kluizen", 'body' => "Privé en werk, netjes gescheiden."],
                        ['icon' => 'link', 'title' => "Delen", 'body' => "Deel een paar secties. Altijd in te trekken."],
                    ],
                ],
                [
                    'title' => "Verbinden en beschermen",
                    'items' => [
                        ['icon' => 'calendar', 'title' => "Synchronisatie en agenda's", 'body' => "Adresboeken, agenda's, vCards."],
                        ['icon' => 'key', 'title' => "Assistenten en API", 'body' => "Je agent kan mensen opzoeken."],
                        ['icon' => 'lock', 'title' => "Privacy", 'body' => "Passkeys, 2FA, privévelden."],
                    ],
                ],
            ],
            'start' => [
                'label' => "Begin hier",
                'title' => "Je contacten, op jouw manier",
                'body' => "Ontwerp je eigen sjablonen. Tabbladen, secties, velden, keuzes.",
                'rows' => [
                    ['label' => "Vriend", 'detail' => "Cadeaus, huisdieren"],
                    ['label' => "Familie", 'detail' => "Stamboom"],
                    ['label' => "Werk", 'detail' => "Bedrijf, functie"],
                ],
                'cta' => "Zo werken sjablonen",
            ],
        ],
    ],

    /** De /v3-pagina. `v3` hierboven is de sectie op de startpagina die ernaar linkt. */
    'v3page' => [
        'badge' => "Monica v3 · In ontwikkeling",
        'timing' => "Komt voor het eind van 2026",
        'title' => "Monica wordt herbouwd voor de komende tien jaar.",
        'lede' => "Monica heeft duizenden mensen geholpen te onthouden wat ertoe doet bij de mensen in hun leven. Nu wordt het van de grond af herbouwd: flexibeler, privéer, makkelijker uit te breiden en beter op elk scherm.",
        'lede2' => "Het blijft open source. En alles wat Monica in de eerste plaats de moeite waard maakte, blijft.",

        'progress' => [
            'body' => "Er valt niets aan te melden. Monica v3 wordt in de openbaarheid gebouwd, dus kom over een paar weken terug om te zien wat er veranderd is.",
            'note' => "Geen wachtlijst, geen nieuwsbrief, geen trackingpixel.",
        ],

        'proof' => [
            'stars' => ":count GitHub-sterren",
            'openSource' => "Open source sinds 2017",
            'selfHostable' => "In eigen beheer te draaien",
        ],

        'coming' => [
            'label' => "Wat eraan komt",
            'title' => "Er verandert veel. Monica wordt meer van jou.",
            'body' => "Monica v3 is geen nieuw jasje. Het is een nieuw fundament, ontworpen om het product flexibeler te maken zonder het ingewikkelder te maken.",
            'features' => [
                [
                    'icon' => 'panel',
                    'title' => "Vorm Monica naar je eigen leven",
                    'body' => "Maak de secties en velden die voor jou logisch zijn. Houd Monica eenvoudig, of bouw uitgebreide records voor de dingen die je wilt onthouden.",
                ],
                [
                    'icon' => 'relationship',
                    'title' => "Houd meer bij dan alleen mensen",
                    'body' => "Mensen blijven het middelpunt van Monica, maar ze staan niet op zichzelf. Verbind ze met huisdieren, bedrijven, huizen, voertuigen, projecten of elk ander record dat in hun leven meetelt.",
                ],
                [
                    'icon' => 'journal',
                    'title' => "Onthoud wat er gebeurd is",
                    'body' => "Telefoontjes, etentjes, reizen, moeilijke momenten, kleine details die het bewaren waard zijn: zet ze in een dagboek dat vanzelf aansluit op mensen, data en herinneringen.",
                ],
                [
                    'icon' => 'tag',
                    'title' => "Begin met structuren van anderen",
                    'body' => "Installeer kant-en-klare sjablonen van de gemeenschap, pas ze vrij aan en houd volledige controle over je eigen versie.",
                ],
                [
                    'icon' => 'code',
                    'title' => "Bouw op een open fundament",
                    'body' => "Alles wat in de interface beschikbaar is, komt ook via de API beschikbaar. Monica wordt makkelijker te integreren, te automatiseren en uit te breiden, zonder afhankelijk te zijn van verborgen of privé-endpoints.",
                ],
                [
                    'icon' => 'phone',
                    'title' => "Gebruik Monica fatsoenlijk op elk scherm",
                    'body' => "De webapplicatie wordt vanaf het begin voor telefoons ontworpen. Native applicaties voor iOS en Android volgen daarna, gebouwd als echte applicaties en niet als een omhulsel om een website.",
                ],
            ],
        ],

        'principles' => [
            'label' => "Wat niet verandert",
            'title' => "De principes worden niet herschreven.",
            'body' => "Monica v3 is ambitieus, maar het blijft Monica. De beloftes achter :count GitHub-sterren blijven onderdeel van het fundament.",
            'items' => [
                [
                    'icon' => 'code',
                    'title' => "Open source, en dat blijft zo",
                    'body' => "Monica blijft volledig open source en in eigen beheer te draaien. De code kan worden gelezen, aangepast, geforkt en verbeterd, precies zoals nu.",
                ],
                [
                    'icon' => 'lock',
                    'title' => "Je gegevens blijven van jou",
                    'body' => "Geen advertenties. Geen verkoop van persoonsgegevens. Geen model dat op je contacten getraind wordt. Je privéleven is geen verdienmodel.",
                ],
                [
                    'icon' => 'download',
                    'title' => "Exporteer alles",
                    'body' => "Exporteer je informatie wanneer je maar wilt, inclusief de eigen structuren, secties en velden die je hebt gemaakt.",
                ],
                [
                    'icon' => 'people',
                    'title' => "Gebouwd om voor iedereen bruikbaar te zijn",
                    'body' => "Toetsenbordnavigatie, schermlezers, vertalingen en responsieve schermindelingen zijn producteisen, geen werk dat tot later wordt uitgesteld.",
                ],
                [
                    'icon' => 'arrow-right',
                    'title' => "Bestaande gebruikers blijven niet achter",
                    'body' => "Het doel is een duidelijk migratiepad voor bestaande Monica-accounts, inclusief contacten, notities, herinneringen en andere essentiële informatie.",
                ],
            ],
        ],

        'follow' => [
            'title' => "Volg de herbouw vanaf het begin.",
            'body' => "Monica v3 is nog in ontwikkeling en veel belangrijke keuzes worden in de openbaarheid gemaakt. Volg de repository om het werk te zien terwijl het gebeurt.",
            'note' => "Open source · In eigen beheer te draaien · In het openbaar gebouwd",
            'cta' => "Volg Monica op GitHub",
        ],
    ],

    /** De /prijzen-pagina. De prijzen komen uit het ontwerp; wijzig ze hier, één keer per taal. */
    // ---------------------------------------------------------------- home
    //
    // The homepage, section by section, in page order. Every person in it is
    // from Friends, and only from Friends: the product picture is open on
    // Phoebe, the reminders and the agent are about Rachel, Chandler and Joey.
    // They keep their names in every language; what is said about them is
    // translated.
    //
    // A sentence with one word in bold is written as three pieces, before, bold
    // and after, so a translation can move the bold word to wherever its
    // grammar puts it without anyone writing markup in a copy file.
    'home' => [
        'hero' => [
            'pill' => "Rachel, Ross, Chandler, Joey en de eend",
            'title' => "Onthoud de mensen die je dierbaar zijn.",
            'subtitle' => "We zijn een open source persoonlijke CRM.",
            'lede' => "Privé van opzet. Open source. In eigen beheer te draaien. Geen advertenties, geen doorverkoop van gegevens, geen ongemakkelijke meldingen over “betrokkenheid”.",
            'start' => "Begin met Monica",
            'github' => "Bekijk op GitHub",
            'sales' => "Contact met sales",
            'salesJoke' => "Grapje.",
            'salesTruth' => "We hebben geen salesteam.",
        ],

        'product' => [
            // Read out in place of the picture, which is drawn in markup but is
            // a picture of the product rather than a working copy of it.
            'label' => "Monica, geopend op de pagina van Phoebe Buffay: twee belangrijke data, haar relaties, de laatste notitie over haar en drie cadeau-ideeën.",
            'vault' => "Familie",
            'nav' => ["Dashboard", "Mensen", "Herinneringen", "Dagboek", "Cadeau-ideeën", "Instellingen"],
            'vaultsLabel' => "Kluizen",
            'vaults' => ["Familie", "Vrienden", "Central Perk"],
            'search' => "Zoek mensen",
            'add' => "Persoon toevoegen",
            'meta' => "Tweelingzus van Ursula · New York · al 10 jaar bekend",
            'tabs' => ["Overzicht", "Tijdlijn", "Notities", "Cadeau-ideeën"],
            'datesTitle' => "Belangrijke data",
            'dates' => [
                ['title' => "Verjaardag", 'date' => "16 februari 1966", 'when' => "over vier maanden"],
                ['title' => "Trouwdag", 'date' => "12 februari 2004", 'when' => "over vier maanden"],
            ],
            'relationshipsTitle' => "Relaties",
            'relationships' => [
                ["Phoebe is de tweelingzus van ", "Ursula", "."],
                ["Phoebe is de vrouw van ", "Mike", "."],
            ],
            'noteTitle' => "Laatste notitie",
            'note' => "Heeft een nieuw liedje over een kat geschreven. Is er heel trots op. Niet over de geur beginnen.",
            'noteWhen' => "Zes dagen geleden",
            'giftsTitle' => "Cadeau-ideeën",
            'gifts' => ["Gitaarsnaren", "Massageolie", "Geurloze kattenbakvulling"],
        ],

        'awards' => [
            'label' => "Vreemden op internet keuren het goed",
            'github' => "GitHub Trending: #1 repository van de dag",
            'hn' => "Hacker News: #65 meest gestemde links aller tijden",
            'ph' => "Product Hunt: #4 product van de dag",
        ],

        'agents' => [
            'eyebrow' => "MCP-server en REST API",
            'title' => "Gebruik Monica als backend voor je agents.",
            'body' => "We zijn superontwikkelaarsvriendelijk.",
            'mcp' => "Bekijk de MCP-documentatie",
            'api' => "Bekijk de API",
            'prompt' => "Wat zal ik Rachel geven voor haar verjaardag?",
            'answer' => "Rachel is over 23 dagen jarig.",
            'saved' => "Je hebt in juli twee ideeën bewaard:",
            'ideas' => ["De sjaal die ze aanwees bij Bloomingdale’s", "Alles behalve een lijst met voors en tegens"],
            'ask' => "Noteer dat ik vandaag met Joey koffie heb gedronken in Central Perk.",
            'used' => "Monica gebruikt",
            'reply' => "Klaar. “Koffie” toegevoegd aan de tijdlijn van Joey op 11 oktober.",
        ],

        'features' => [
            'title' => "Je geheugen, met back-up.",
            'lede' => "Alles wat het weten waard is over iemand, op één rustige plek.",
            'reminders' => [
                'title' => "Verjaardagen, niet pas achteraf.",
                'body' => "Herinneringen voor data, telefoontjes en beloftes. Per e-mail, op tijd.",
                'rows' => [
                    ['name' => "Rachel Green", 'what' => "verjaardag", 'when' => "over 23 dagen"],
                    ['name' => "Chandler Bing", 'what' => "terugbellen over Thanksgiving", 'when' => "morgen"],
                    ['name' => "Joey Tribbiani", 'what' => "huur terugbetalen", 'when' => "zes jaar te laat"],
                ],
            ],
            'relationships' => [
                'title' => "Wie is wie, en van wie.",
                'body' => "Stambomen, exen, peetouders. Geschreven als zinnen.",
                'sentences' => [
                    ["Monica is de zus van ", "Ross", "."],
                    ["Ross is de kreeft van ", "Rachel", "."],
                    ["Joey is ", "ieders", " huisgenoot."],
                ],
            ],
            'gifts' => [
                'title' => "Cadeau-ideeën, bewaard in juli.",
                'body' => "Zodat december geen paniek wordt.",
                'ideas' => ["Een tafelvoetbalspel", "Dat boek over dinosaurussen"],
                'crossed' => "Een lijst met voors en tegens",
            ],
            'notes' => [
                'title' => "Notities die je terugvindt.",
                'body' => "Doorzoek elke notitie, bij iedereen.",
                'query' => "allergisch",
                'who' => "Ross:",
                'match' => "allergisch voor kiwi. Monica vergeet het steeds.",
            ],
            'details' => [
                'title' => "Onthoudt het kuikentje en de eend.",
                'body' => "Huisdieren, kinderen, banen, eetvoorkeuren. De details die ertoe doen.",
                'fields' => [
                    ['label' => "Huisdieren", 'value' => "Een kuiken en een eend"],
                    ['label' => "Koffie", 'value' => "Central Perk, elke dag"],
                ],
            ],
            'vaults' => [
                'title' => "Een kluis voor elke kring.",
                'body' => "Familie, vrienden, werk. Netjes gescheiden, gedeeld met wie jij uitnodigt.",
                'vaults' => [
                    ['name' => "Familie", 'count' => "24 mensen"],
                    ['name' => "Vrienden", 'count' => "61 mensen"],
                    ['name' => "Central Perk", 'count' => "6 mensen"],
                ],
            ],
            'journal' => [
                'title' => "Een dagboek zonder publiek.",
                'body' => "Schrijf over je dag. Niemand gaat het liken, en dat is nou juist de bedoeling.",
            ],
        ],

        'open' => [
            'title' => "Open van opzet.",
            'lede' => "Je vrienden zijn geen verdienmodel.",
            'items' => [
                ['title' => "Open source", 'body' => "Elke regel code staat op GitHub. Lees hem, fork hem, controleer hem."],
                ['title' => "In eigen beheer", 'body' => "Eén Docker-commando. Jouw server, jouw regels."],
                ['title' => "Geen advertenties, geen trackers", 'body' => "Niets te verkopen, en niemand om het aan te verkopen."],
                ['title' => "Vertrek wanneer je wilt", 'body' => "Exporteer alles, wanneer je maar wilt. Geen gijzelingen."],
            ],
        ],

        // The prices themselves are not here: the Cloud card reads them from
        // `pricing.hosted`, so the homepage and the pricing page cannot quote
        // two different numbers.
        'pricing' => [
            'badge' => "Geen advertenties",
            'badgeText' => "Bij elk abonnement neem je je gegevens mee.",
            'title' => "Betaal zoals je wilt. Of niet.",
            'lede' => "Draai het gratis in eigen beheer, of laat Monica het voor je draaien.",
            'selfHost' => [
                'title' => "Eigen beheer",
                'price' => "Gratis",
                'per' => "voor altijd",
                'items' => ["Alle functies, geen limieten", "Installatie met één Docker-commando", "Volledige controle over je gegevens", "Jij bent de IT-afdeling"],
                'cta' => "Lees de documentatie",
            ],
            'cloud' => [
                'title' => "Cloud",
                'billingLabel' => "Factuurperiode",
                'monthly' => "Maandelijks",
                'yearly' => "Jaarlijks",
                'perMonth' => "per maand",
                'perYear' => "per jaar",
                'yearlyNote' => "Twee maanden gratis",
                'items' => ["Beheerde hosting", "Automatische updates en back-ups", "Onbeperkt mensen en kluizen", "Altijd opzegbaar"],
                'cta' => "Begin met Monica",
            ],
        ],

        'faq' => [
            'title' => "Vragen, beantwoord.",
            'items' => [
                ['q' => "Is dit een sales-CRM?", 'a' => "Nee. Niemand hier heeft een pijplijn. Monica is voor familie, vrienden en de mensen met wie je contact wilt houden."],
                ['q' => "Is eigen beheer echt gratis?", 'a' => "Ja. Alle functies, geen limieten, onder de AGPL-3.0-licentie. Jij zorgt voor de server."],
                ['q' => "Wie kan mijn gegevens zien?", 'a' => "Jij, en wie je uitnodigt in een kluis. Geen advertenties, geen trackers, geen doorverkoop van gegevens. In eigen beheer verlaten ze je server nooit."],
                ['q' => "Kan ik wisselen tussen cloud en eigen beheer?", 'a' => "Ja, in beide richtingen. Exporteer alles en importeer het aan de andere kant."],
                ['q' => "Werkt het met mijn AI-agent?", 'a' => "Als die MCP spreekt, ja. Voor al het andere is er ook een volledige REST API."],
            ],
        ],
    ],

    'pricing' => [
        'eyebrow' => "Eenvoudige prijzen",
        'title' => "Eén gehost abonnement. Geen prijs per relatie.",
        'lede' => "Gebruik Monica op onze servers voor één voorspelbare prijs, of draai het gratis in eigen beheer.",
        'lede2' => "We rekenen niet per contact, per herinnering, per belangrijke verjaardag of per persoon die je liever niet teleurstelt.",
        'currency' => "Prijzen in USD",
        'taxFootnote' => "Prijzen worden getoond in USD. Toepasselijke belastingen worden vóór betaling berekend.",

        'billing' => [
            'label' => "Factuurperiode",
            'yearly' => "Per jaar — 2 maanden voordeel",
            'monthly' => "Per maand",
        ],

        'hosted' => [
            'title' => "Monica gehost",
            'body' => "Voor mensen die Monica willen zonder een server te onderhouden.",
            'yearlyPrice' => "$90",
            'yearlyPeriod' => "USD / jaar",
            'yearlyNote' => "Twee maanden gratis bij jaarlijkse facturatie.",
            'monthlyPrice' => "$9",
            'monthlyPeriod' => "USD / maand",
            'monthlyNote' => "Maandelijks gefactureerd. Stap over op jaarlijks voor twee maanden gratis.",
            'taxNote' => "Afhankelijk van je locatie kan er belasting bijkomen.",
            'cta' => "Begin met Monica",
            'trial' => "30 dagen proberen · Geen creditcard nodig tijdens de proefperiode",
            'listTitle' => "Alles wat je nodig hebt om de mensen te onthouden die tellen:",
            'items' => [
                "onbeperkt contacten;",
                "onbeperkt notities;",
                "onbeperkt herinneringen;",
                "onbeperkt activiteiten en dagboeknotities;",
                "relatiebeheer;",
                "eigen velden en secties;",
                "bijlagen;",
                "gegevensexport;",
                "automatische updates;",
                "beheerde back-ups;",
                "ondersteuning per e-mail;",
                "toegang vanaf telefoon, tablet en computer;",
                "alle toekomstige functies van de gehoste versie inbegrepen.",
            ],
            'aside' => "Geen toeslag voor een grote familie.",
            'footnote' => "Zeg op wanneer je wilt. Je contacten worden niet gegijzeld.",
        ],

        'selfHosted' => [
            'title' => "Liever je eigen server?",
            'body' => "Monica is open source en kan worden geïnstalleerd op infrastructuur die jij beheert.",
            'price' => "$0",
            'period' => "van Monica",
            'aside' => "Je hostingpartij wil misschien nog steeds geld. Het kapitalisme hebben we nog niet verslagen.",
            'cta' => "Bekijk de handleiding voor eigen beheer",
            'sourceCta' => "Bekijk de broncode op GitHub · :count sterren",
            'listTitle' => "De applicatie krijg je gratis. Jij zorgt voor de server, de updates, de back-ups, de monitoring, de beveiligingspatches en de rust van precies te weten waar je gegevens staan.",
            'items' => [
                "de volledige open source applicatie;",
                "onbeperkt contacten;",
                "onbeperkt gebruikers, voor zover je infrastructuur het toelaat;",
                "volledige controle over je gegevens;",
                "import en export van gegevens;",
                "documentatie van de gemeenschap;",
                "ondersteuning door de gemeenschap;",
                "de mogelijkheid de broncode in te zien en aan te passen.",
            ],
            'footnote' => "De versie in eigen beheer is geen uitgeklede demo. Het is Monica, draaiend op jouw infrastructuur.",
            'footnote2' => "Beheerde back-ups, e-mailbezorging, monitoring van de infrastructuur en directe ondersteuning horen bij de gehoste dienst.",
        ],

        'compare' => [
            'title' => "Dezelfde Monica. Een andere verantwoordelijke voor de server.",
            'rowHeader' => "Wat",
            'hosted' => "Monica gehost",
            'selfHosted' => "Monica in eigen beheer",
            'rows' => [
                ['label' => "Software van Monica", 'hosted' => "Inbegrepen", 'selfHosted' => "Inbegrepen"],
                ['label' => "Contacten", 'hosted' => "Onbeperkt", 'selfHosted' => "Onbeperkt"],
                ['label' => "Updates", 'hosted' => "Automatisch", 'selfHosted' => "Jij installeert ze"],
                ['label' => "Back-ups", 'hosted' => "Beheerd door Monica", 'selfHosted' => "Jij beheert ze"],
                ['label' => "Serveronderhoud", 'hosted' => "Beheerd door Monica", 'selfHosted' => "Jij beheert het"],
                ['label' => "Locatie van de gegevens", 'hosted' => "Infrastructuur van Monica", 'selfHosted' => "Jouw infrastructuur"],
                ['label' => "Benodigde technische kennis", 'hosted' => "Geen", 'selfHosted' => "Enige"],
                ['label' => "Ondersteuning", 'hosted' => "Per e-mail", 'selfHosted' => "Door de gemeenschap"],
                ['label' => "Kosten", 'hosted' => "Abonnement per maand of per jaar", 'selfHosted' => "Gratis software plus hostingkosten"],
                ['label' => "Geschikt voor", 'hosted' => "Mensen die willen dat Monica gewoon werkt", 'selfHosted' => "Mensen die van servers houden, of die het moeten"],
            ],
        ],

        'whyPay' => [
            'title' => "Waarom betalen als Monica open source is?",
            'body' => "Open source betekent dat je Monica mag draaien, inzien, aanpassen en verbeteren. Het laat servers, back-ups, e-mailbezorging, beveiligingswerk en ondersteuning niet verdwijnen.",
            'body2' => "Een gehost abonnement betaalt de infrastructuur waarop je account draait en helpt de verdere ontwikkeling van Monica voor iedereen te financieren, ook voor wie het in eigen beheer draait.",
            'quote' => "Je betaalt ons om Monica te laten draaien, niet om je eigen gegevens vrij te spelen.",
            'aside' => "Servers zijn gewoon computers die facturen sturen.",
        ],

        'noCharge' => [
            'title' => "Waar we niet voor rekenen",
            'items' => [
                ['title' => "Meer contacten", 'body' => "Je prijs gaat niet omhoog omdat je meer mensen kent."],
                ['title' => "Meer herinneringen", 'body' => "Jubilea onthouden is al stressvol genoeg."],
                ['title' => "Gegevensexport", 'body' => "Je gegevens meenemen is een recht, geen premiumfunctie."],
                ['title' => "Basisprivacy", 'body' => "We verkopen geen privacy-upgrade. Privacy is de standaard."],
                ['title' => "Opzeggen", 'body' => "Er zijn geen opzegkosten en geen plechtig afscheidsgesprek."],
                ['title' => "De API gebruiken", 'body' => "De API hoort bij het product, niet bij een apart zakelijk onderhandelingstraject."],
            ],
        ],

        'leaving' => [
            'title' => "Je abonnement mag eindigen. Je toegang tot je gegevens niet.",
            'body' => "Je kunt je gegevens op elk moment exporteren.",
            'body2' => "Als je opzegt, blijft je account bereikbaar tot het eind van de betaalde factuurperiode. Daarna houden we het account nog een vastgestelde respijtperiode beschikbaar voordat het wordt verwijderd.",
            'steps' => [
                ['label' => "Opzeggen", 'body' => "Je abonnement blijft actief tot het eind van de factuurperiode."],
                ['label' => "Exporteren", 'body' => "Download je gegevens voor of na het opzeggen, tijdens de respijtperiode."],
                ['label' => "Verwijderen", 'body' => "Verwijder je account meteen vanuit Instellingen, wanneer je wilt."],
            ],
            'note' => "De respijtperiode, de exportformaten en de termijnen voor verwijdering staan in het bewaarbeleid.",
        ],

        'trackRecord' => [
            'title' => "Open source voordat het een prijsstrategie was",
            'body' => "Monica wordt sinds 2017 in de openbaarheid ontwikkeld.",
            'body2' => "Het project heeft :count GitHub-sterren verzameld, is meermaals uitgeroepen tot Repository van de week, stond bovenaan op Product Hunt en kreeg erkenning uit de open source gemeenschap.",
            'starsLabel' => "GitHub-sterren",
            'since' => "2017",
            'sinceLabel' => "Open source sinds",
            'launch' => "#1 Product van de dag",
            'launchLabel' => "Product Hunt",
            'featured' => "Repository van de week",
            'featuredLabel' => "Meermaals uitgelicht",
            'cta' => "Bekijk Monica op GitHub",
        ],

        'faq' => [
            'title' => "Vragen over betalen voor Monica",
            'items' => [
                ['q' => "Wat kost Monica?", 'a' => [
                    "Monica gehost kost \$9 USD per maand of \$90 USD per jaar.",
                    "Je kunt Monica ook gratis in eigen beheer draaien op infrastructuur die jij beheert.",
                ]],
                ['q' => "Is de prijs per gebruiker of per contact?", 'a' => "Nee. Het gehoste abonnement heeft één prijs per account en bevat onbeperkt contacten."],
                ['q' => "Is Monica echt open source?", 'a' => [
                    "Ja. De broncode van Monica is openbaar en het project heeft :count sterren op GitHub.",
                    "Monica v3 blijft open source en in eigen beheer te draaien.",
                ], 'link' => ['label' => "Lees over Monica v3", 'page' => 'v3']],
                ['q' => "Is eigen beheer gratis?", 'a' => "Monica rekent niets voor de software in eigen beheer. Jij bent verantwoordelijk voor de server en de kosten van de infrastructuur."],
                ['q' => "Verschilt de gehoste versie van die in eigen beheer?", 'a' => [
                    "Ze gebruiken dezelfde kernapplicatie.",
                    "De gehoste dienst omvat de infrastructuur, beheerde updates, back-ups, monitoring, e-mailbezorging en ondersteuning. Sommige koppelingen die afhangen van infrastructuur van Monica zijn mogelijk alleen in de gehoste dienst beschikbaar.",
                ]],
                ['q' => "Kan ik van gehost naar eigen beheer overstappen?", 'a' => "Ja. Je kunt je gegevens uit Monica exporteren en importeren in een compatibele installatie in eigen beheer."],
                ['q' => "Kan ik op elk moment opzeggen?", 'a' => "Ja. Zeg op vanuit je accountinstellingen. Je abonnement blijft actief tot het eind van de lopende factuurperiode."],
                ['q' => "Zijn er opzegkosten?", 'a' => "Nee. Weggaan zou geen losgeld mogen kosten."],
                ['q' => "Wat gebeurt er als mijn betaling mislukt?", 'a' => [
                    "We laten het je weten en proberen de betaling opnieuw voordat we het account beperken.",
                    "Je gegevens worden niet meteen verwijderd omdat een pas verlopen is.",
                ]],
                ['q' => "Hoe werken terugbetalingen?", 'a' => [
                    "Ben je per ongeluk in rekening gebracht of vergeten op te zeggen, neem dan binnen 30 dagen contact op. We beoordelen het verzoek als redelijke mensen.",
                    "Jaarabonnementen kunnen worden terugbetaald binnen de termijn uit ons terugbetalingsbeleid. Voor accounts die de dienst ernstig hebben misbruikt is terugbetaling niet mogelijk.",
                ]],
                ['q' => "Gaat de prijs omhoog?", 'a' => [
                    "Prijzen kunnen veranderen naarmate Monica zich ontwikkelt, maar we laten het bestaande abonnees vooraf weten.",
                    "We veranderen prijzen niet stilletjes in de hoop dat niemand het merkt.",
                ]],
                ['q' => "Zijn belastingen inbegrepen?", 'a' => "Of de getoonde prijzen belasting bevatten of niet hangt af van je locatie en de geldende wetgeving. Het eindbedrag zie je vóór de betaling."],
                ['q' => "Bewaart Monica mijn betaalgegevens?", 'a' => "Betaalgegevens worden verwerkt door onze betaaldienst. Monica bewaart geen volledige kaartnummers."],
                ['q' => "Worden mijn gegevens voor advertenties gebruikt?", 'a' => "Nee. Monica verkoopt je persoonsgegevens niet, toont geen advertenties en gebruikt de mensen in je account niet om advertentieprofielen te bouwen."],
                ['q' => "Worden mijn gegevens gebruikt om AI-modellen te trainen?", 'a' => "Er wordt geen model getraind op de privé-inhoud van je Monica-account."],
                ['q' => "Zijn back-ups inbegrepen?", 'a' => [
                    "Ja, de gehoste dienst bevat beheerde back-ups.",
                    "Bij installaties in eigen beheer moet je zelf back-ups instellen en testen.",
                ]],
                ['q' => "Kan ik alles exporteren?", 'a' => "Je kunt contacten, relaties, notities, herinneringen, activiteiten, eigen velden en andere ondersteunde accountgegevens exporteren. Bijlagen zitten erbij, volgens het gedocumenteerde exportformaat."],
                ['q' => "Kan ik mijn account verwijderen?", 'a' => "Ja. Je account verwijderen kan vanuit Instellingen en daar hoef je geen contact voor op te nemen met support."],
                ['q' => "Bieden jullie kortingen?", 'a' => "Op dit moment niet. We hebben liever één begrijpelijke prijs dan een systeem waarin iedereen apart onderhandelt."],
                ['q' => "Bieden jullie levenslange abonnementen?", 'a' => "Nee. Servers blijven kosten maken nadat de enthousiaste lanceercampagne voorbij is."],
                ['q' => "Bieden jullie een enterprise-abonnement?", 'a' => [
                    "Er is geen verkoopgesprek nodig om Monica te gebruiken.",
                    "Voor vragen over beveiliging, inkoop of hosting op grote schaal kun je contact opnemen.",
                ]],
                ['q' => "Kan ik in een andere valuta betalen?", 'a' => "Er wordt op dit moment in USD gefactureerd. Je bank kan het bedrag omrekenen en daar kosten voor rekenen."],
                ['q' => "Steunt een abonnement het open source project?", 'a' => "Ja. Gehoste abonnementen financieren de infrastructuur, het onderhoud, de ondersteuning en de doorlopende open source ontwikkeling van Monica."],
            ],
        ],

    ],

    'personalCrm' => [
        'eyebrow' => "Een praktische gids",
        'title' => "Wat is een persoonlijke CRM?",
        'lede' => "Een persoonlijke CRM is een privéplek om te onthouden wat er speelt rond de mensen in je leven: wat ze je vertelden, wat voor hen belangrijk is en waar je nog op terug wilde komen.",
        'intro' => "Anders dan een sales-CRM is die gebouwd voor relaties, niet voor pijplijnen. Het gaat er niet om mensen te beheren. Het gaat erom je geheugen een handje te helpen, zodat je met meer context komt opdagen.",

        'toc' => [
            'label' => "In deze gids",
            'items' => [
                ['id' => 'definition', 'title' => "De korte definitie"],
                ['id' => 'comparison', 'title' => "Hoe die verschilt van andere hulpmiddelen"],
                ['id' => 'contents', 'title' => "Wat je erin kunt bewaren"],
                ['id' => 'fit', 'title' => "Wie erbij geholpen is"],
                ['id' => 'approaches', 'title' => "De belangrijkste aanpakken"],
                ['id' => 'history', 'title' => "Waar het vandaan komt"],
                ['id' => 'privacy', 'title' => "Privacy en ethiek"],
                ['id' => 'hosting', 'title' => "Cloud of in eigen beheer"],
                ['id' => 'choosing', 'title' => "Hoe je kiest"],
                ['id' => 'monica', 'title' => "De aanpak van Monica"],
            ],
        ],

        'definition' => [
            'label' => "De korte definitie",
            'title' => "Een persoonlijke CRM onthoudt meer dan contactgegevens.",
            'body' => "Je adresboek kent het nummer van Sam. Een persoonlijke CRM kan je eraan herinneren dat Sam voor een halve marathon traint, dat haar dochter Maya heet en dat je hebt beloofd de titel van dat boek te sturen.",
            'body2' => "Die verbindt feiten met de geschiedenis van een relatie. Afhankelijk van het hulpmiddel horen daar notities, gesprekken, activiteiten, belangrijke data, herinneringen, de banden tussen mensen en eigen gegevens bij die jij belangrijk vindt.",
            'aside' => "Een goede persoonlijke CRM helpt je onthouden. Die bepaalt niet wat een mens waard is.",
        ],

        'comparison' => [
            'label' => "Drie verschillende taken",
            'title' => "Een adresboek, een persoonlijke CRM en een traditionele CRM zijn niet hetzelfde.",
            'body' => "Alle drie bewaren informatie over mensen, maar ze zijn rond andere vragen gebouwd. Ze allemaal contactbeheer noemen verbergt het belangrijkste: waarvoor de informatie dient.",
            'cards' => [
                [
                    'title' => "Adresboek",
                    'question' => "Hoe bereik ik deze persoon?",
                    'body' => "Namen, telefoonnummers, e-mailadressen, postadressen en misschien een verjaardag. Simpel, vertrouwd en voor veel mensen genoeg.",
                ],
                [
                    'title' => "Persoonlijke CRM",
                    'question' => "Wat wil ik onthouden over deze persoon?",
                    'body' => "De persoon, jullie relatie, wat er is gebeurd en wat je later wilt onthouden of doen.",
                ],
                [
                    'title' => "Traditionele CRM",
                    'question' => "Hoe vordert deze klantrelatie?",
                    'body' => "Leads, accounts, deals, serviceverzoeken, omzet, teamactiviteit en de fasen van een zakelijk proces.",
                ],
            ],
            'tableTitle' => "Persoonlijke CRM tegenover traditionele CRM",
            'tableHeadings' => ["", "Persoonlijke CRM", "Traditionele CRM"],
            'rows' => [
                ["Belangrijkste doel", "Persoonlijke context onthouden en afspraken nakomen", "Verkoop, marketing of klantenservice afstemmen"],
                ["Wie erin staat", "Vrienden, familie, buren, collega's en andere mensen in je leven", "Leads, klanten, accounts en zakelijke contacten"],
                ["Gebruikelijke informatie", "Banden, herinneringen, gesprekken, data, notities en signalen om iets op te pakken", "Deals, omzet, campagnes, supportgeschiedenis en pijplijnfasen"],
                ["Geslaagd wanneer", "Je de context hebt op het moment dat die telt", "Een zakelijk proces vordert en te meten is"],
                ["Meestal gebruikt door", "Eén persoon, soms een huishouden", "Een bedrijf of team"],
            ],
            'closing' => "Traditionele CRM's zijn nuttige hulpmiddelen voor het werk waarvoor ze zijn gemaakt. Het wordt lastig als de taal en de prikkels van de verkoop meeverhuizen naar het privéleven. Je vrienden zijn geen leads, en een stille maand is geen vastgelopen pijplijn.",
        ],

        'contents' => [
            'label' => "Wat erin gaat",
            'title' => "Bewaar genoeg context om nuttig te zijn. Niet meer dan dat.",
            'body' => "Een persoonlijke CRM kan een uitgebreid dossier over het leven van iemand anders worden. Dat is een reden om te kiezen, geen reden om elk beschikbaar veld te vullen. Bewaar iets omdat het je helpt onthouden of nakomen, niet omdat de software een leeg vakje aanbiedt.",
            'groups' => [
                ['title' => "Identiteit en contactgegevens", 'body' => "Namen, voornaamwoorden, telefoonnummers, e-mailadressen, plaatsen en de namen die iemand echt gebruikt."],
                ['title' => "Banden", 'body' => "Hoe je iemand kent, de mensen om die persoon heen en de familie- of huishoudverhoudingen die de rest begrijpelijk maken."],
                ['title' => "Belangrijke data", 'body' => "Verjaardagen, jubilea, verhuizingen, diploma's of elke datum die voor die persoon of voor jullie gedeelde geschiedenis telt."],
                ['title' => "Gesprekken en notities", 'body' => "Waarover jullie het hadden, een tip die iemand gaf, een zorg die iemand deelde of een detail dat je niet voor de derde keer wilt vragen."],
                ['title' => "Activiteiten en herinneringen", 'body' => "Etentjes, telefoontjes, reizen, bezoeken, projecten en andere momenten die je later misschien in de tijd wilt plaatsen."],
                ['title' => "Afspraken en signalen", 'body' => "Een belofte die je deed, iets wat je uitleende, een cadeau-idee of een herinnering om te vragen hoe iets is gegaan."],
            ],
            'note' => "Gevoelige informatie verdient een hogere drempel. Als iets opschrijven zou voelen als verraad zodra je het voorleest aan de persoon die het beschrijft, dan is dat gevoel nuttige informatie.",
        ],

        'example' => [
            'label' => "Een klein voorbeeld",
            'title' => "Hoe het gebruik van een persoonlijke CRM er echt uitziet",
            'body' => "Het nuttige deel is meestal heel gewoon. Het gaat minder om een perfecte database en meer om het sluiten van de kleine lussen die je geheugen anders open laat.",
            'steps' => [
                ["number" => "01", 'title' => "Een vriendin vertelt over een sollicitatiegesprek", 'body' => "Je maakt na het gesprek een korte notitie. Geen verslag, alleen de context die je wilt onthouden."],
                ["number" => "02", 'title' => "Je zet een herinnering", 'body' => "De herinnering hangt aan de persoon en komt na het gesprek langs, op het moment dat ernaar vragen nuttig is."],
                ["number" => "03", 'title' => "Je komt terug met context", 'body' => "Je vraagt hoe het ging omdat je het belangrijk vindt. De software onthield het moment; de relatie blijft van jou."],
            ],
        ],

        'fit' => [
            'label' => "Passend",
            'title' => "Sommige mensen hebben er een nodig. Veel mensen niet.",
            'body' => "Een persoonlijke CRM verdient zijn plek alleen als die een echt probleem met onthouden of opvolgen oplost. Die moet de mentale last verlichten, geen nieuwe administratieve hobby maken.",
            'goodTitle' => "Het kan helpen als je…",
            'good' => [
                "meer mensen belangrijk vindt dan je betrouwbaar in je hoofd houdt;",
                "vrienden of familie hebt die over steden, landen of levensfasen verspreid zijn;",
                "regelmatig namen, data, beloftes of gedeelde details vergeet;",
                "iemand begeleidt, vrijwilligerswerk doet, een gemeenschap organiseert of voor een grote familie zorgt;",
                "één privéplek wilt voor context over relaties die nu over notities en agenda's verspreid ligt.",
            ],
            'notTitle' => "Je hebt er waarschijnlijk geen nodig als…",
            'not' => [
                "je adresboek en agenda al dekken wat je vergeet;",
                "het bijhouden zwaarder weegt dan het probleem dat het oplost;",
                "je alleen een plek wilt voor telefoonnummers en verjaardagen;",
                "je teampijplijnen, massacontact, verkoopprognoses of klantanalyses wilt. Daarvoor past een traditionele CRM beter.",
            ],
        ],

        'approaches' => [
            'label' => "Een nuttig kader",
            'title' => "Persoonlijke CRM's maken andere afwegingen.",
            'body' => "Persoonlijke CRM is een losse categorie, geen norm. De aanpakken hieronder zijn een manier om producten te vergelijken, geen officiële benamingen uit de sector. Veel hulpmiddelen combineren er meerdere.",
            'items' => [
                ['title' => "Netwerk eerst", 'body' => "Gebouwd rond zakelijke contacten, introducties en contact houden. Nuttig als werk van veel langlopende relaties afhangt, maar het kan de taal van de verkoop het privéleven binnenbrengen."],
                ['title' => "Automatisering eerst", 'body' => "Haalt context uit e-mail, agenda's, sociale netwerken of andere diensten. Dat scheelt handwerk, in ruil voor bredere toegang en soms een ruimere verzameling dan je bedoelde."],
                ['title' => "Productiviteit eerst", 'body' => "Behandelt opvolgen als taken en terugkerende herinneringen. Duidelijk en werkbaar, al kan een relatie op een postvak gaan lijken als elk contact een verplichting wordt."],
                ['title' => "Geheugen eerst", 'body' => "Zet notities, activiteiten, data en de gedeelde geschiedenis centraal. Dat vraagt bewuster invoeren, maar jij bepaalt wat er wordt vastgelegd."],
                ['title' => "Persoonlijke database", 'body' => "Laat je eigen records, velden en verbindingen ontwerpen. Flexibel genoeg voor ongewone levens, met meer inrichting en onderhoud als prijs."],
            ],
        ],

        'history' => [
            'label' => "Een korte geschiedenis",
            'title' => "De persoonlijke CRM leende het geheugen van zakelijke software en gaf het een ander doel.",
            'body' => "Er is geen erkende uitvinder van de persoonlijke CRM. De categorie groeide geleidelijk uit adresboeken, contactbeheerders, zakelijke CRM-software en hulpmiddelen voor persoonlijke informatie.",
            'items' => [
                ['date' => "Voor de software", 'title' => "Context over relaties stond op papier", 'body' => "Adresboeken, correspondentiemappen, agenda's en beschreven kaartjes hielden contactgegevens gescheiden van al het andere, dat het geheugen slecht vasthoudt."],
                ['date' => "1987", 'title' => "Contactbeheer bereikt de personal computer", 'body' => "Act! dateert zijn eerste product voor contactbeheer op 1987. Vroege hulpmiddelen werden vaak een digitale Rolodex genoemd, voordat CRM de gangbare term werd."],
                ['date' => "Midden jaren negentig", 'title' => "CRM wordt een zakelijke categorie", 'body' => "Academische overzichten plaatsen het opkomen van de term customer relationship management in het midden van de jaren negentig, toen contactgegevens deel werden van bredere verkoop- en servicesystemen."],
                ['date' => "Vanaf 1999", 'title' => "CRM verhuist naar de cloud", 'body' => "Salesforce begon in 1999 met CRM via het web. Software uit de cloud maakte gedeelde records, automatische updates en koppelingen normaal."],
                ['date' => "Jaren 2010", 'title' => "Persoonlijke CRM wordt een herkenbaar label", 'body' => "Nieuwe producten pasten een deel van die ideeën toe op de zakelijke en persoonlijke relaties van één mens. In 2019 was de categorie gevestigd genoeg om zowel enthousiasme als onbehagen op te roepen over het optimaliseren van vriendschap."],
            ],
            'sourcesLabel' => "Bronnen voor deze tijdlijn",
            'sources' => [
                ['label' => "Bedrijfsgeschiedenis van Act!", 'url' => 'https://www.act.com/about-us/'],
                ['label' => "Academische geschiedenis van CRM", 'url' => 'https://www.sciencedirect.com/science/article/pii/S0963868707000182'],
                ['label' => "Bedrijfsgeschiedenis van Salesforce", 'url' => 'https://www.salesforce.com/company/our-story'],
                ['label' => "Axios over persoonlijke CRM in 2019", 'url' => 'https://www.axios.com/2019/08/27/startups-new-frontier-optimizing-your-friendships'],
            ],
        ],

        'privacy' => [
            'label' => "Privacy en ethiek",
            'title' => "Het account gaat over jou. Veel van wat erin staat gaat over anderen.",
            'body' => "Dat maakt een persoonlijke CRM ongewoon gevoelig. Er kunnen adressen, familiebanden, privégesprekken, gezondheidsgegevens of in vertrouwen gedeelde herinneringen in staan. Een wachtwoord is nodig, maar goed oordeel begint voordat er iets wordt opgeslagen.",
            'principles' => [
                ['title' => "Verzamel minder", 'body' => "Bewaar wat een duidelijk doel heeft. Vollediger is niet automatisch nuttiger."],
                ['title' => "Respecteer de oorspronkelijke context", 'body' => "Wat in een privégesprek is gedeeld wordt geen vrij materiaal voor verrijking, analyse of ruimere verspreiding omdat het te kopiëren valt."],
                ['title' => "Weet waar automatisering gegevens naartoe stuurt", 'body' => "E-mailsynchronisatie, transcriptie, verrijking en AI-functies gaan soms via andere diensten. Ga na wat de toepassing verlaat, waarom, hoe lang en of het wordt gebruikt om modellen te trainen."],
                ['title' => "Reken op verlies en vertrek", 'body' => "Gebruik stevige toegangsrechten en back-ups. Zorg dat je je gegevens in een bruikbaar formaat kunt exporteren en bij vertrek kunt verwijderen."],
                ['title' => "Schrijf voor de mogelijke lezer", 'body' => "Een goede test is of je een notitie zou kunnen uitleggen aan de persoon die erin staat, zonder je achter de software te verschuilen."],
            ],
            'closing' => "Een persoonlijke CRM is van zichzelf niet zorgzaam en niet luguber. Het verschil zit meestal in wat je verzamelt, hoe het daar kwam, wie erbij kan en wat je ermee doet.",
        ],

        'hosting' => [
            'label' => "Waar die draait",
            'title' => "Cloud en eigen beheer verplaatsen de verantwoordelijkheid.",
            'body' => "Bij een gehoste dienst laat je een aanbieder de toepassing draaien. In eigen beheer draaien geeft je de controle over de server en haalt die aanbieder uit het dagelijks gebruik. Geen van beide is automatisch veiliger. Veiligheid hangt af van updates, toegangsrechten, back-ups, toezicht en de mensen die daarvoor verantwoordelijk zijn.",
            'tableHeadings' => ["", "Gehoste dienst", "In eigen beheer"],
            'rows' => [
                ["Onderhoud", "De aanbieder draait en werkt de dienst bij", "Jij installeert, werkt bij en houdt in de gaten"],
                ["Controle", "Je werkt binnen het product en de regels van de aanbieder", "Je bepaalt server, configuratie en uitrol"],
                ["Back-ups", "Meestal door de aanbieder geregeld; ga na wat erbij hoort", "Jij stelt ze in, beveiligt ze en test ze"],
                ["Beschikbaarheid", "Meestal bruikbaar zonder infrastructuur te beheren", "Hangt af van de infrastructuur die je zelf draait"],
                ["Waar de gegevens staan", "Hangt af van de aanbieder en zijn subverwerkers", "Hangt af van de server en diensten die je kiest"],
                ["Past het best", "Je wilt het hulpmiddel zonder een dienst te draaien", "Je hebt de kennis en de zin om het zelf te draaien"],
            ],
            'note' => "In eigen beheer draaien geeft meer controle. Het geeft ook meer manieren om een serieuze fout te maken. Kies het omdat je die verantwoordelijkheid wilt, niet omdat het label veilig klinkt.",
        ],

        'choosing' => [
            'label' => "Voordat je een hulpmiddel kiest",
            'title' => "Begin bij de gewoonte die je wilt en bekijk daarna de software.",
            'body' => "De langste functielijst zegt zelden welke persoonlijke CRM het contact met je echte leven overleeft. Een eenvoudig hulpmiddel dat je blijft gebruiken is nuttiger dan een perfect systeem dat je niet opent.",
            'questions' => [
                ['title' => "Waarbij wil je hulp met onthouden?", 'body' => "Namen en data vragen een ander hulpmiddel dan een uitgebreide geschiedenis, signalen om iets op te pakken of een flexibele persoonlijke database."],
                ['title' => "Hoeveel werk kost het vastleggen?", 'body' => "Bepaal of je bewuste notities met de hand wilt, brede automatische imports of iets daartussen."],
                ['title' => "Welke toegang vraagt het?", 'body' => "Ga na of het e-mail, agenda's, contacten, sociale netwerken of berichten leest, en of elke toestemming nodig is."],
                ['title' => "Hoe gebruikt het AI?", 'body' => "Zoek uit welke gegevens naar welke modelaanbieder gaan, wat er bewaard blijft, of trainen is toegestaan en of de functie uit kan."],
                ['title' => "Kun je weg?", 'body' => "Let op volledige export, begrijpelijke formaten, het verwijderen van je account en een geloofwaardig plan voor het onderhoud van het product op langere termijn."],
                ['title' => "Wie draait het?", 'body' => "Vergelijk het gemak van een gehoste dienst met de controle en het werk van eigen beheer. Neem back-ups en updates mee in de afweging."],
                ['title' => "Past het bij jouw relaties?", 'body' => "Vaste velden zijn soms eenvoudiger. Records op maat passen soms beter. Kies de flexibiliteit die je echt gaat gebruiken."],
            ],
        ],

        'monica' => [
            'label' => "Het standpunt van Monica",
            'title' => "Geheugen boven automatisering. Relaties boven netwerken.",
            'body' => "Monica is één antwoord op de vraag naar een persoonlijke CRM, niet de definitie van de categorie. Het begon met een simpel idee: de details onthouden die helpen om voor vrienden en familie te zorgen, zonder die mensen in prospects te veranderen of hun leven aan een advertentiesysteem te geven.",
            'principles' => [
                ['title' => "Context telt meer dan contactgegevens", 'body' => "Monica verbindt mensen met notities, activiteiten, herinneringen, belangrijke data en de banden om hen heen."],
                ['title' => "Jij kiest wat wordt vastgelegd", 'body' => "Monica kiest bewust onthouden boven onzichtbare verrijking. Het doel is niet om elk mogelijk signaal binnen te halen."],
                ['title' => "Eigendom hoort bij het product", 'body' => "Monica is open source, kan in eigen beheer draaien en heeft een gehoste versie voor wie geen server wil beheren."],
                ['title' => "Andere levens vragen andere structuren", 'body' => "Monica v3 wordt gebouwd rond records en verbindingen die je meer kunt aanpassen, met dezelfde uitgangspunten van het project over privacy en eigendom."],
            ],
            'currentCta' => "Bekijk wat Monica kan onthouden",
            'v3Cta' => "Lees over Monica v3",
            'privacyCta' => "Lees het privacybeleid van Monica",
            'finalTitle' => "Een persoonlijke CRM moet je helpen opletten en daarna uit de weg gaan.",
            'finalBody' => "Als de aanpak van Monica past bij de manier waarop je mensen wilt onthouden, kun je de gehoste dienst gebruiken of de open source toepassing zelf draaien.",
            'primaryCta' => "Begin met Monica",
            'secondaryCta' => "Bekijk Monica op GitHub",
        ],

        'faq' => [
            'label' => "Veelgestelde vragen",
            'title' => "Een paar eerlijke antwoorden voordat je een tweede brein voor je sociale leven bouwt.",
            'items' => [
                ['q' => "Is een persoonlijke CRM gebruiken luguber?", 'a' => [
                    "Dat kan. Stil gevoelige informatie verzamelen, privégesprekken zonder zorg importeren of mensen een score geven gaat voor veel mensen over een redelijke grens.",
                    "Een kleine, private verzameling notities en herinneringen kan ook een gewone steun voor het geheugen zijn. Wat je verzamelt, hoe het daar kwam en hoe je het gebruikt telt zwaarder dan het label.",
                ]],
                ['q' => "Kan ik in plaats daarvan mijn contacten-app, agenda of notities gebruiken?", 'a' => "Ja. Als die hulpmiddelen het probleem oplossen, blijf ze dan gebruiken. Een persoonlijke CRM wordt nuttig als je de persoon, de context, de geschiedenis en het opvolgen op één plek verbonden wilt hebben."],
                ['q' => "Is een persoonlijke CRM alleen voor zakelijk netwerken?", 'a' => "Nee. Sommige producten zijn vooral voor zakelijke relaties gebouwd. Andere richten zich op vrienden, familie, een gemeenschap of een mengeling. De juiste keuze hangt af van de relaties en gewoonten die je echt hebt."],
                ['q' => "Is in eigen beheer draaien privacyvriendelijker?", 'a' => "Het kan het aantal betrokken dienstverleners verkleinen en je meer controle geven. Het regelt geen updates, back-ups, versleuteling of toegangsrechten voor je. Privacy en veiligheid hangen nog steeds af van hoe het systeem wordt beheerd."],
                ['q' => "Hoeveel moet ik vastleggen?", 'a' => "Begin met het minimum dat je probleem oplost. Wat data, een paar notities en af en toe een herinnering zijn voor veel mensen genoeg. Voeg pas structuur toe als die het onderhoud waard is."],
            ],
        ],
    ],

    'footer' => [
        // The closing line ends every page, so it is two short sentences rather
        // than a pitch. Each one is its own line.
        'closing' => ["Monica onthoudt.", "Jij gaat naar buiten."],
        'start' => "Begin met Monica",
        'github' => "Bekijk op GitHub",

        'tagline' => "Open source persoonlijke CRM. AGPL-3.0.",
        'productLabel' => "Product",
        'developersLabel' => "Ontwikkelaars",
        'companyLabel' => "Bedrijf",
        'personalCrm' => "Wat is een persoonlijke CRM?",
        'changelog' => "Wijzigingslog",
        'mcp' => "MCP",
        'api' => "API",
        'contactSales' => "Contact met sales",
        'privacy' => "Privacy",
        'terms' => "Voorwaarden",
        'team' => "Team",

        'art' => "Een weide aan een meer, met panda's die in het gras liggen te luieren en in de bomen een dutje doen",
        'copyright' => "© :year Monica. Er zijn geen panda's gevolgd.",
        'languageLabel' => "Taal wijzigen",
    ],

    'blog' => [
        'title' => "Blog",
        'lede' => "Aantekeningen over het bouwen van Monica, het privé houden van persoonlijke gegevens en de kleine mechaniek van contact houden.",

        'allPosts' => "Alle berichten",
        'keepReading' => "Verder lezen",
        'onThisPage' => "Op deze pagina",
        'latest' => "Nieuwste berichten",

        'readingTime' => ":count min lezen",

        'authorRole' => "Oprichter",

        'copyLink' => "Link kopiëren",
        'copyLinkDone' => "Gekopieerd",

        'showing' => ":from tot :to van :total berichten",
        'pageOf' => "Pagina :page van :total",
        'rssFeed' => "RSS-feed",
        'newerPosts' => "Nieuwere berichten",
        'olderPosts' => "Oudere berichten",

        'tryMonica' => [
            'title' => "Probeer Monica",
            'body' => "Een privé, open source persoonlijke CRM om de mensen te onthouden die tellen. Draai het zelf, of laat ons het draaien.",
            'bodyPost' => "Houd bij wat er speelt bij de mensen in je leven zonder ze aan een advertentiedatabase te geven.",
            'cta' => "Aan de slag",
            'note' => "30 dagen proberen · Geen creditcard nodig",
        ],


        'openSource' => [
            'title' => "Open source",
            'body' => "Monica is vanaf het begin open source. Lees de code, draai je eigen installatie, stuur een patch.",
        ],
    ],

    /**
     * Vertaling van de voorwaarden zoals gepubliceerd op monicahq.com/terms. De
     * Engelse tekst is de gezaghebbende versie; wijzig die eerst.
     */
    'terms' => [
        'title' => "Onze gebruiksvoorwaarden",
        'updated' => "Laatste wijziging: :date",
        'updatedOn' => "12 april 2018",

        'sections' => [
            [
                'title' => "Reikwijdte van de dienst",
                'blocks' => [
                    ['text' => "Monica ondersteunt de volgende browsers:"],
                    ['items' => [
                        "Internet Explorer (11+)",
                        "Firefox (50+)",
                        "Chrome (laatste versie)",
                        "Safari (laatste versie)",
                    ]],
                    ['text' => "Ik garandeer niet dat de site met andere browsers werkt, maar het is heel waarschijnlijk dat het gewoon werkt."],
                ],
            ],
            [
                'title' => "Rechten",
                'blocks' => [
                    ['text' => "Je hoeft je echte naam niet op te geven als je een account aanmaakt. Wel heb je een geldig e-mailadres nodig als je je account wilt upgraden naar de betaalde versie, of als je herinneringen per e-mail wilt ontvangen."],
                    ['text' => "Je hebt het recht je account op elk moment op te zeggen."],
                    ['text' => "Je hebt het recht je gegevens op elk moment te exporteren, in SQL-formaat."],
                    ['text' => "Je gegevens worden niet met opzet aan andere gebruikers getoond of met derden gedeeld."],
                    ['text' => "Je persoonsgegevens worden zonder jouw toestemming met niemand gedeeld."],
                    ['text' => "Van je gegevens wordt elk uur een back-up gemaakt."],
                    ['text' => "Als de site ophoudt te bestaan, krijg je de gelegenheid al je gegevens te exporteren voordat de site verdwijnt."],
                    ['text' => "Nieuwe functies die de privacy raken, zijn strikt opt-in."],
                ],
            ],
            [
                'title' => "Verantwoordelijkheden",
                'blocks' => [
                    ['text' => "Je gebruikt de site niet om informatie of gegevens op te slaan die illegaal zijn naar Canadees recht (of naar welk recht dan ook)."],
                    ['text' => "Je moet minstens 18 jaar zijn om een account aan te maken en de site te gebruiken."],
                    ['text' => "Je mag de site niet misbruiken door bewust kwaadaardige code te plaatsen die jou of andere gebruikers schade kan berokkenen."],
                    ['text' => "Je gebruikt de site uitsluitend voor dingen die algemeen als moreel goed worden beschouwd."],
                    ['text' => "Je mag geen geautomatiseerde verzoeken naar de site sturen."],
                    ['text' => "Je mag het uitnodigingssysteem niet misbruiken."],
                    ['text' => "Je bent zelf verantwoordelijk voor de beveiliging van je account."],
                    ['text' => "Ik behoud me het recht voor accounts te sluiten die het systeem misbruiken (duizenden contacten met honderdduizenden herinneringen bijvoorbeeld) of het op een onredelijke manier gebruiken."],
                ],
            ],
            [
                'title' => "Andere belangrijke juridische zaken",
                'blocks' => [
                    ['text' => "Hoewel ik een goede dienst wil leveren, zijn er dingen die ik niet kan beloven. De diensten en de software worden bijvoorbeeld geleverd “zoals ze zijn”, op eigen risico, zonder uitdrukkelijke of stilzwijgende garantie of voorwaarde van welke aard dan ook. Ik wijs ook elke garantie af van verkoopbaarheid, geschiktheid voor een bepaald doel of niet-inbreuk. Monica is niet verantwoordelijk voor schade aan je computersysteem, verlies of beschadiging van gegevens, of andere schade die voortkomt uit je toegang tot of gebruik van de diensten of de software."],
                    ['text' => "Deze voorwaarden kunnen op elk moment veranderen, maar ik zal er nooit onaardig over doen. Deze site draaien is voor mij een droom die uitkomt, en ik hoop dat ik hem zo lang mogelijk kan blijven draaien."],
                ],
            ],
        ],
    ],

    /**
     * Vertaling van het beleid zoals gepubliceerd op monicahq.com/privacy. De
     * Engelse tekst is de gezaghebbende versie; wijzig die eerst.
     *
     * Eén sectie zonder titel: het gepubliceerde beleid is een doorlopende reeks
     * alinea's zonder koppen, en er koppen bij verzinnen zou neerkomen op het
     * bewerken van een juridisch document.
     */
    'privacy' => [
        'title' => "Ons privacybeleid",
        'updated' => "Laatste wijziging: :date",
        'updatedOn' => "6 augustus 2026",

        'sections' => [
            [
                'blocks' => [
                    ['text' => "Monica is een open source project. De gehoste versie heeft een betaald abonnement waarmee we geld ophalen om de servers en aanvullende diensten te betalen, maar het hoofddoel is niet om geld te verdienen (anders hadden we het niet open source gemaakt)."],
                    ['text' => "Monica bestaat in twee smaken: je kunt onze gehoste versie gebruiken, of het downloaden en zelf draaien. In dat laatste geval houden we helemaal niets bij. We weten niet eens dat je het product hebt gedownload. Doe ermee wat je wilt (maar respecteer je lokale wetgeving)."],
                    ['text' => "Als je een account aanmaakt op onze gehoste versie, geef je de site informatie over jezelf die wij verzamelen. Dat zijn je naam, je e-mailadres en je wachtwoord, dat versleuteld wordt voordat het wordt opgeslagen. We slaan geen andere persoonsgegevens op."],
                    ['text' => "Als je inlogt op de dienst, gebruiken we cookies om je inloggegevens te onthouden. Dat is het enige doel van de cookies."],
                    ['text' => "Monica draait op Fortrabbit en wij zijn, afgezien van de medewerkers van Fortrabbit, de enigen die toegang hebben tot die servers."],
                    ['text' => "We maken elk uur een back-up van de database."],
                    ['text' => "Je wachtwoord wordt versleuteld met bcrypt, een zeer veilig algoritme om wachtwoorden te hashen. Je kunt ook tweefactorauthenticatie op je account inschakelen als je een extra beveiligingslaag wilt. Afgezien van die versleutelingsmechanismen zijn je gegevens in de database niet versleuteld. Als iemand toegang krijgt tot de database, kan die je gegevens lezen. We doen ons uiterste best om dat te voorkomen, maar het kan gebeuren."],
                    ['text' => "Als er een datalek plaatsvindt, nemen we contact op met de betrokken gebruikers om ze voor het lek te waarschuwen."],
                    ['text' => "Transactionele e-mails worden verstuurd via Postmark."],
                    ['text' => "We gebruiken een open source tool genaamd Sentry om fouten bij te houden die in productie optreden. Hun dienst legt de fouten vast, maar ze hebben geen toegang tot enige informatie behalve het account-ID, waarmee ik kan uitzoeken wat er aan de hand is."],
                    ['text' => "De site toont op dit moment geen advertenties en zal dat ook nooit doen. Hij verkoopt ook geen gegevens aan derden, met of zonder je toestemming, en is dat ook niet van plan. Wij zijn daar gewoon tegen. Fuck advertenties."],
                    ['text' => "We gebruiken geen trackers van derden, zoals Google Analytics of Intercom, die het gedrag of de gegevens van gebruikers volgen, niet op de marketingsite en niet op de gehoste versie. We zijn diep gekant tegen hun uitgangspunten, omdat ze die gegevens zouden gebruiken om je te profileren, en daar zijn wij volledig tegen."],
                    ['text' => "Alle gegevens die je in Monica zet, zijn van jou. Wij hebben er geen enkel recht op. Zet er alsjeblieft geen illegale dingen in, want dan zijn wij in de problemen."],
                    ['text' => "Alle informatie over de contacten die je in Monica zet, is privé voor jou. We leggen geen verbanden tussen accounts en gebruiken informatie uit het ene account niet om een ander account te vullen (in tegenstelling tot bijvoorbeeld Facebook)."],
                    ['text' => "We gebruiken Stripe om betalingen voor de betaalde versie te innen. We slaan geen creditcardgegevens of iets over de transacties zelf op onze servers op. Wel bewaren we, conform de open source bibliotheek die we gebruiken om betalingen te verwerken (Laravel Cashier), de laatste 4 cijfers van de creditcard en de merknaam (VISA of MasterCard). Als gebruiker word je bij Stripe geïdentificeerd met een willekeurig nummer dat zij genereren en gebruiken."],
                    ['text' => "Wat betalingen betreft: je kunt wanneer je wilt teruggaan naar het gratis abonnement. Als je dat doet, wordt Stripe automatisch bijgewerkt en hebben we geen enkele manier meer om je opnieuw te belasten, ook al zouden we dat willen. Hoe minder we met betaalgegevens te maken hebben, hoe gelukkiger we zijn."],
                    ['text' => "Je kunt je gegevens op elk moment exporteren. Je kunt ook de API gebruiken om al je gegevens te exporteren als je weet hoe dat moet. Je kunt ons ook vragen dit zelf te doen en het naar je op te sturen. Je gegevens worden geëxporteerd in SQL-formaat."],
                    ['text' => "Als je je account opzegt, vernietigen we al je persoonsgegevens onmiddellijk uit de productiedatabase, maar je gegevens blijven bewaard in de back-ups die we 30 dagen houden. Na 30 dagen zijn je gegevens volledig vernietigd. Je hebt hier zelf controle over, maar we kunnen een account ook voor je verwijderen als je daarom vraagt."],
                    ['text' => "In bepaalde situaties kunnen we verplicht zijn persoonsgegevens vrij te geven naar aanleiding van rechtmatige verzoeken van overheidsinstanties, onder meer om te voldoen aan eisen van nationale veiligheid of rechtshandhaving. We hopen alleen maar dat dit nooit gebeurt."],
                    ['text' => "Als je de gebruiksvoorwaarden schendt, beëindigen we je account en laten we je dat weten. Houd je je aan het “doe niet lullig”-beleid, dan zou je nooit iets moeten overkomen en zijn we allemaal gelukkig."],
                    ['text' => "Monica gebruikt uitsluitend open source projecten die grotendeels op GitHub staan."],
                    ['text' => "We werken dit privacybeleid bij zodra we nieuwe werkwijzen rond gegevens invoeren. Als we dat doen, sturen we een bericht naar het e-mailadres dat in je account staat. We zullen er nooit onaardig over doen en zullen nooit, echt nooit, iets invoeren dat je recht op volledige privacy aantast."],
                ],
            ],
        ],
    ],


    /**
     * De missietekst is een vertaling van de tekst zoals gepubliceerd op
     * monicahq.com/team, zin voor zin. Het Engels is de gezaghebbende versie.
     *
     * De twee cijfers die op de oude pagina getallen waren, staan hier als
     * woorden. Niets in deze build kan bijdragers tellen in een repository
     * waarvan de geschiedenis opnieuw is begonnen, of contacten op een server
     * waarmee het nooit praat, en een cijfer dat een week na publicatie al
     * onjuist is, is slechter dan een eerlijke orde van grootte.
     */
    'team' => [
        'eyebrow' => "Team",
        'title' => "Monica is een team van 2. Met honderden bijdragers.",

        'stats' => [
            ['value' => "2016", 'label' => "Eerste regel code"],
            ['value' => "Montreal", 'label' => "Hoofdkantoor"],
            ['value' => "2", 'label' => "Officiële leden"],
            ['value' => "Honderden", 'label' => "Open source bijdragers"],
            ['value' => "Miljoenen", 'label' => "Beheerde contacten"],
        ],

        'missionLabel' => "Onze missie",
        'mission' => [
            "Onze missie is technologie te gebruiken op een manier die menselijke relaties geen schade toebrengt, zoals grote sociale netwerken dat wel kunnen doen.",
            "In een tijd waarin mensen duizenden virtuele vrienden hebben, willen we een hulpmiddel bieden dat helpt de band met slechts een paar van die vrienden te versterken. Zodat elke vriendschap er echt toe doet.",
            "Monica is ontstaan uit een persoonlijke behoefte om bij te houden wat vrienden in andere landen met hun leven deden. Nadat ik de eerste versie van het hulpmiddel had gebouwd, besloot ik het open source te maken, promootte ik het op Hacker News en de rest is geschiedenis.",
            "Monica is inmiddels een gezond open source project. We hebben het geluk gehad een geweldige gemeenschap te krijgen, met tientallen bijdragers en honderden bijdragen aan de code. Het levert ook een beetje geld op, en elke dollar die we met dit project verdienen wordt in het project geherinvesteerd, om de rekeningen te betalen en de verdere ontwikkeling te steunen.",
            "Bedankt dat je een kijkje bij het project hebt genomen.",
        ],
        'signature' => "Regis Freyd en Alexis Saettler",
    ],

    /**
     * De drie functiepagina's, die één tabbalk en één afsluitende rij delen.
     *
     * De tekst is die van de oude site, zin voor zin, omdat het de marketingtekst
     * van de eigenaar is en deze build een herontwerp is en geen herschrijving.
     * De aantekeningen waren daar rode labels rond de schermafbeelding; hier zijn
     * het een gewone lijst ernaast, zodat ze een telefoon, een schermlezer en een
     * vertaling die langer uitvalt dan het Engels overleven.
     */
    'features' => [
        'tabsLabel' => "Functies",
        'tabs' => [
            'features' => "Contactbeheer",
            'featuresDashboard' => "Krachtig dashboard",
            'featuresJournal' => "Dagboek",
        ],

        'calloutsLabel' => "Op dit scherm",

        'contacts' => [
            'title' => "Zo houden mensen bij wat belangrijk is.",
            'lede' => "Schrijf op wat je weet over de mensen die je dierbaar zijn. En vergeet nooit meer iets over ze.",
            'imageAlt' => "Een contactrecord in Monica: relaties, contactgegevens, notities, telefoontjes, herinneringen en cadeaus.",
            'callouts' => [
                "Zie in één oogopslag de belangrijke informatie over je contact",
                "Noteer de namen van partners, kinderen en zelfs huisdieren.",
                "Voeg alle manieren toe waarop je deze persoon kunt bereiken: telefoon, e-mail, WhatsApp-naam en veel meer.",
                "Voeg notities toe over deze persoon, alleen zichtbaar voor jou.",
                "Noteer elke keer dat je mensen belt die je niet vaak spreekt, zodat je eraan herinnerd kunt worden ze weer te bellen.",
                "Voeg herinneringen toe voor belangrijke data of gebeurtenissen. Sommige herinneringen worden automatisch voor je ingevuld (verjaardagen bijvoorbeeld).",
                "Beheer cadeaus die je hebt gegeven of wilt geven. Noteer of je geld schuldig bent of tegoed hebt.",
            ],
        ],

        'dashboard' => [
            'title' => "Zie snel wat belangrijk is en wat eraan komt",
            'lede' => "Zodat je je kunt richten op wat er echt toe doet.",
            'imageAlt' => "Het dashboard van Monica: recent bekeken contacten, komende herinneringen, favoriete notities en genoteerde telefoontjes.",
            'callouts' => [
                "Zie wie je het laatst hebt bekeken",
                "Lijst met komende gebeurtenissen of herinneringen over je contacten",
                "Bekijk je favoriete notities over je contacten",
                "Houd bij welke telefoontjes je hebt gepleegd met de mensen die je dierbaar zijn",
            ],
        ],

        'journal' => [
            'title' => "Leg je leven vast. En zie hoe je verandert.",
            'lede' => "Schrijf dagboeknotities. Geef snel aan hoe je dag was. Automatische activiteitenlogboeken.",
            'imageAlt' => "Het dagboek van Monica: hoe de dag ging, de vastgelegde activiteiten met contacten en geschreven notities.",
            'callouts' => [
                "Geef aan hoe je dag was.",
                "Het dagboek toont automatisch alle activiteiten met je contacten.",
                "In het dagboek kun je ook zelf notities schrijven. Zie het als je privédagboek online.",
                "In een volgende versie tonen we mooie statistieken over je dagen en activiteiten.",
            ],
        ],

        'pillars' => [
            [
                'title' => "Alles op één plek",
                'body' => "Beheer, ordent en volg alle contactmomenten met je contacten op één centrale plek.",
            ],
            [
                'title' => "Via het web",
                'body' => "Gebruik Monica eenvoudig, gehost op jouw servers of de onze.",
            ],
            [
                'title' => "Moderne interface",
                'body' => "Monica ziet er mooi uit en is heel eenvoudig te gebruiken.",
            ],
        ],

        'api' => [
            'title' => "Geliefd bij gebruikers. Aanbeden door ontwikkelaars.",
            'body' => "Onze gebruikers zijn blij met hoe snel en eenvoudig het product is. Ontwikkelaars houden van de API waarmee ze Monica naar eigen inzicht kunnen automatiseren.",
            'body2' => "Importeer of exporteer je contacten en hun gegevens eenvoudig met de krachtige REST-API van Monica, of gebruik de API om allerlei onderdelen van de applicatie te automatiseren.",
            'imageAlt' => "De API-routes van Monica, geopend in een code-editor.",
        ],
    ],

    'notFound' => [
        'title' => "Pagina niet gevonden.",
        'body' => "Dit adres leidt nergens heen. Misschien is het verhuisd, of heeft het nooit bestaan.",
    ],
];
