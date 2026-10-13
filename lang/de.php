<?php

/**
 * German copy. Siezen throughout: Monica addresses an adult about their private
 * relationships, and duzen would read as marketing familiarity. German runs
 * roughly 30% longer than English, which the layouts already allow for.
 */

return [
    'meta' => [
        'imageAlt' => "Monica: Erinnern Sie sich an die Menschen, die Ihnen wichtig sind. Das quelloffene persönliche CRM.",

        'breadcrumb' => [
            'home' => "Startseite",
            'v3' => "Monica v3",
            'pricing' => "Preise",
            'features' => "Funktionen",
            'featuresDashboard' => "Dashboard",
            'featuresJournal' => "Tagebuch",
            'blog' => "Blog",
            'terms' => "Nutzungsbedingungen",
            'team' => "Team",
            'privacy' => "Datenschutzerklärung",
            'personalCrm' => "Leitfaden persönliches CRM",
            'templates' => "Kontaktvorlagen",
            'page' => "Seite :number",
        ],

        'software' => [
            'monthly' => "Gehostete Monica, monatlich abgerechnet",
            'yearly' => "Gehostete Monica, jährlich abgerechnet",
            'selfHosted' => "Selbst gehostete Monica",
            'lifetime' => "Gehostete Monica, lebenslang",
        ],

        'home' => [
            'title' => "Monica — das quelloffene persönliche CRM",
            'description' => "Monica hilft Ihnen, sich an die Menschen zu erinnern, die Ihnen wichtig sind: was in ihrem Leben passiert, wichtige Daten, frühere Gespräche und wann Sie sich wieder melden sollten. Privat, quelloffen, selbst hostbar.",
        ],

        'pricing' => [
            'title' => "Monica-Preise: kostenlos selbst hosten, oder Monica hosten lassen",
            'description' => "Hosten Sie Monica kostenlos selbst, oder lassen Sie Monica sie für 9 USD im Monat, 90 USD im Jahr oder einmalig 150 USD hosten. Jeder Tarif enthält jede Funktion, unbegrenzte Kontakte und keinen Preis pro Kontakt.",
        ],

        'privacy' => [
            'title' => "Datenschutzrichtlinie — Monica",
            'description' => "Wie Monica mit Ihren Daten umgeht: was wir erheben, wo es gespeichert wird, wer es sehen kann und was beim Schließen Ihres Kontos passiert. Keine Werbung, keine Tracker, kein Datenverkauf.",
        ],

        'team' => [
            'title' => "Team — Monica",
            'description' => "Monica wird von zwei Personen in Montreal gebaut, mit Hunderten von Open-Source-Mitwirkenden. Warum wir ein persönliches CRM bauen, das menschlichen Beziehungen nicht schadet.",
        ],

        'terms' => [
            'title' => "Nutzungsbedingungen — Monica",
            'description' => "Die Nutzungsbedingungen von Monica, dem quelloffenen persönlichen CRM: was der Dienst abdeckt, Ihre Rechte an Ihren Daten, Ihre Pflichten und das rechtliche Kleingedruckte.",
        ],

        'blog' => [
            'title' => "Der Monica-Blog — Release Notes und Produktentscheidungen",
            'description' => "Was wir ausliefern, warum wir es so bauen und wie ein kleines Open-Source-Unternehmen wirklich aussieht. Geschrieben von den Menschen, die Monica machen.",
        ],

        // Ein Beitrag bringt Titel und Beschreibung selbst mit. Hier bleibt nur
        // der Rahmen, den die Website darum legt.
        'post' => [
            'title' => ":title — der Monica-Blog",
        ],

        // Seite 2 einer Liste ist nicht die Liste. Ohne das konkurrieren vier
        // Seiten des Blogs unter einem Titel um dasselbe Ergebnis.
        'paginated' => ":title (Seite :page von :total)",

        'v3' => [
            'title' => "Monica v3 — neu gebaut für die nächsten zehn Jahre",
            'description' => "Monica v3 ist ein vollständiger Neubau des quelloffenen persönlichen CRM: Einträge, die Sie selbst gestalten, ein mit allem verbundenes Journal, eine vollständige API und eine echte mobile Erfahrung. Weiterhin quelloffen. Vor Ende 2026.",
        ],

        // Ein Block je Funktionen-Tab: jeder Tab hat seine eigene URL, und eine
        // Suchmaschine, die alle drei findet, soll sie unterscheiden können.
        'features' => [
            'title' => "Kontaktverwaltung — die Funktionen von Monica",
            'description' => "Halten Sie fest, was Sie über die Menschen wissen, die Ihnen wichtig sind: Beziehungen, Kontaktdaten, private Notizen, Anrufe, Erinnerungen und Geschenke, alles auf einem Eintrag.",
        ],

        'featuresDashboard' => [
            'title' => "Das Dashboard — die Funktionen von Monica",
            'description' => "Das Dashboard von Monica zeigt, wen Sie zuletzt angesehen haben, was als Nächstes ansteht, Ihre bevorzugten Notizen und die geführten Anrufe, damit Sie sich auf das Wesentliche konzentrieren können.",
        ],

        'featuresJournal' => [
            'title' => "Das Journal — die Funktionen von Monica",
            'description' => "Schreiben Sie Journaleinträge, halten Sie fest, wie Ihr Tag verlaufen ist, und lesen Sie die Aktivitäten mit Ihren Kontakten, die Monica automatisch protokolliert.",
        ],

        'templates' => [
            'title' => "Ihre Kontakte, auf Ihre Art: Kontaktvorlagen in Monica",
            'description' => "Bauen Sie Kontaktvorlagen mit eigenen Feldern, Abschnitten und Tabs. Verschiedene Vorlagen für Freunde, Familie und Beruf, Versionen mit Veröffentlichung, wenn sie fertig sind, und teilbare Abschnitte.",
        ],

        'personalCrm' => [
            'title' => "Was ist ein persönliches CRM? Ein praktischer Leitfaden — Monica",
            'description' => "Was ein persönliches CRM ist, wie es sich von einem Adressbuch und einem Vertriebs-CRM unterscheidet, was hineingehört, welche Abwägungen der Datenschutz verlangt und wie Sie den passenden Ansatz wählen.",
        ],
    ],

    'announcement' => [
        'headline' => "Monica v3 kommt vor Ende 2026.",
        'detail' => "Von Grund auf neu gebaut. Weiterhin quelloffen.",
        'cta' => "Sehen, was kommt",
    ],

    'nav' => [
        'label' => "Haupt",
        'product' => "Produkt",
        'personalCrm' => "Was ist ein persönliches CRM",
        'v3' => "Monica v3",
        'features' => "Funktionen",
        'pricing' => "Preise",
        'blog' => "Blog",
        'docs' => "Dokumentation",
        'signIn' => "Anmelden",
        'getStarted' => "Registrieren",
        'stars' => ":count Sterne",

        // The features menu: three columns of what Monica does, and a card
        // pointing at templates, the thing a new reader most often misses.
        'menu' => [
            'groups' => [
                [
                    'title' => "Erinnern",
                    'items' => [
                        ['icon' => 'note', 'title' => "Die Details", 'body' => "Alles über einen Menschen, an einem Ort."],
                        ['icon' => 'reminder', 'title' => "Erinnerungen", 'body' => "Geburtstage, Rückmeldungen, Wiederholungen."],
                        ['icon' => 'timeline', 'title' => "Zeitleiste", 'body' => "Einmal festhalten. Alle Beteiligten haben es."],
                    ],
                ],
                [
                    'title' => "Ordnen",
                    'items' => [
                        ['icon' => 'relationship', 'title' => "Beziehungen", 'body' => "Stammbäume, und wer wen kennt."],
                        ['icon' => 'vault', 'title' => "Tresore", 'body' => "Privates und Berufliches, getrennt."],
                        ['icon' => 'link', 'title' => "Teilen", 'body' => "Einzelne Abschnitte teilen. Jederzeit widerrufbar."],
                    ],
                ],
                [
                    'title' => "Verbinden und schützen",
                    'items' => [
                        ['icon' => 'calendar', 'title' => "Sync und Kalender", 'body' => "Adressbücher, Kalender, vCards."],
                        ['icon' => 'key', 'title' => "Assistenten und API", 'body' => "Ihr Agent kann Menschen nachschlagen."],
                        ['icon' => 'lock', 'title' => "Datenschutz", 'body' => "Passkeys, 2FA, private Felder."],
                    ],
                ],
            ],
            'start' => [
                'label' => "Hier anfangen",
                'title' => "Ihre Kontakte, wie Sie sie wollen",
                'body' => "Gestalten Sie eigene Vorlagen. Tabs, Abschnitte, Felder, Auswahllisten.",
                'rows' => [
                    ['label' => "Freunde", 'detail' => "Geschenke, Haustiere"],
                    ['label' => "Familie", 'detail' => "Stammbaum"],
                    ['label' => "Arbeit", 'detail' => "Firma, Rolle"],
                ],
                'cta' => "So funktionieren Vorlagen",
            ],
        ],
    ],

    /** Die Seite /v3. Der Schlüssel `v3` oben ist der Abschnitt auf der Startseite. */
    'v3page' => [
        'badge' => "Monica v3 · In Entwicklung",
        'timing' => "Kommt vor Ende 2026",
        'title' => "Monica wird für die nächsten zehn Jahre neu gebaut.",
        'lede' => "Monica hat Tausenden Menschen geholfen, sich an das zu erinnern, was bei den Menschen in ihrem Leben zählt. Jetzt wird sie von Grund auf neu gebaut: flexibler, privater, leichter erweiterbar und besser auf jedem Bildschirm.",
        'lede2' => "Sie bleibt quelloffen. Und alles, was Monica von Anfang an lohnend gemacht hat, bleibt erhalten.",

        'progress' => [
            'body' => "Es gibt nichts, wofür man sich anmelden müsste. Monica v3 entsteht öffentlich. Schauen Sie in ein paar Wochen wieder vorbei, um zu sehen, was sich getan hat.",
            'note' => "Keine Startliste, kein Newsletter, kein Tracking-Pixel.",
        ],

        'proof' => [
            'stars' => ":count Sterne auf GitHub",
            'openSource' => "Quelloffen seit 2017",
            'selfHostable' => "Selbst hostbar",
        ],

        'coming' => [
            'label' => "Was kommt",
            'title' => "Vieles ändert sich. Monica wird mehr zu Ihrer eigenen.",
            'body' => "Monica v3 ist keine optische Auffrischung. Es ist ein neues Fundament, das das Produkt flexibler machen soll, ohne es komplizierter zu machen.",
            'features' => [
                [
                    'icon' => 'panel',
                    'title' => "Formen Sie Monica um Ihr Leben herum",
                    'body' => "Legen Sie die Abschnitte und Felder an, die für Sie sinnvoll sind. Halten Sie Monica einfach, oder bauen Sie ausführliche Einträge für das, woran Sie sich erinnern wollen.",
                ],
                [
                    'icon' => 'relationship',
                    'title' => "Erfassen Sie mehr als Menschen",
                    'body' => "Menschen bleiben der Mittelpunkt von Monica, aber sie stehen nicht für sich allein. Verbinden Sie sie mit Haustieren, Unternehmen, Wohnungen, Fahrzeugen, Projekten oder jedem anderen Eintrag, der in ihrem Leben zählt.",
                ],
                [
                    'icon' => 'journal',
                    'title' => "Erinnern Sie sich an das, was passiert ist",
                    'body' => "Anrufe, Essen, Reisen, schwierige Momente, kleine Details, die es wert sind: Tragen Sie sie in ein Journal ein, das sich ganz selbstverständlich mit Menschen, Daten und Erinnerungen verbindet.",
                ],
                [
                    'icon' => 'tag',
                    'title' => "Beginnen Sie mit Strukturen von anderen",
                    'body' => "Installieren Sie fertige Vorlagen aus der Community, passen Sie sie frei an, und behalten Sie die volle Kontrolle über Ihre eigene Fassung.",
                ],
                [
                    'icon' => 'code',
                    'title' => "Bauen Sie auf einem offenen Fundament",
                    'body' => "Alles, was in der Oberfläche verfügbar ist, wird auch über die API verfügbar sein. Monica lässt sich leichter einbinden, automatisieren und erweitern, ohne auf verborgene oder private Endpunkte angewiesen zu sein.",
                ],
                [
                    'icon' => 'phone',
                    'title' => "Nutzen Sie Monica auf jedem Bildschirm richtig",
                    'body' => "Die Webanwendung wird von Anfang an für das Telefon entworfen. Native Anwendungen für iOS und Android folgen, gebaut als echte Anwendungen und nicht als Hülle um eine Website.",
                ],
            ],
        ],

        'principles' => [
            'label' => "Was sich nicht ändert",
            'title' => "Die Grundsätze werden nicht neu geschrieben.",
            'body' => "Monica v3 ist ehrgeizig, aber es ist immer noch Monica. Die Zusagen hinter :count Sternen auf GitHub bleiben Teil des Fundaments.",
            'items' => [
                [
                    'icon' => 'code',
                    'title' => "Quelloffen, und das bleibt so",
                    'body' => "Monica bleibt vollständig quelloffen und selbst hostbar. Der Code lässt sich weiterhin lesen, verändern, forken und ergänzen, genau wie heute.",
                ],
                [
                    'icon' => 'lock',
                    'title' => "Ihre Daten bleiben Ihre",
                    'body' => "Keine Werbung. Kein Verkauf persönlicher Daten. Kein Modell, das auf Ihren Kontakten trainiert wird. Ihr Privatleben ist kein Geschäftsmodell.",
                ],
                [
                    'icon' => 'download',
                    'title' => "Exportieren Sie alles",
                    'body' => "Exportieren Sie Ihre Informationen, wann immer Sie sie brauchen, einschließlich der eigenen Strukturen, Abschnitte und Felder, die Sie angelegt haben.",
                ],
                [
                    'icon' => 'people',
                    'title' => "Gebaut, damit alle sie nutzen können",
                    'body' => "Tastaturbedienung, Screenreader, Lokalisierung und anpassungsfähige Layouts sind Produktanforderungen und keine Arbeit, die auf später verschoben wird.",
                ],
                [
                    'icon' => 'arrow-right',
                    'title' => "Bestehende Nutzerinnen und Nutzer bleiben nicht zurück",
                    'body' => "Das Ziel ist ein klarer Migrationsweg für bestehende Monica-Konten, einschließlich Kontakten, Notizen, Erinnerungen und anderen wesentlichen Informationen.",
                ],
            ],
        ],

        'follow' => [
            'title' => "Verfolgen Sie den Neubau von Anfang an.",
            'body' => "Monica v3 ist noch in Entwicklung, und viele wichtige Entscheidungen fallen öffentlich. Folgen Sie dem Repository, um die Arbeit mitzuverfolgen.",
            'note' => "Quelloffen · Selbst hostbar · Öffentlich entwickelt",
            'cta' => "Monica auf GitHub folgen",
        ],
    ],

    /** Die Seite /preise. Die Preise stammen aus dem Design; hier je Locale ändern. */
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
            'pill' => "Rachel, Ross, Chandler, Joey und die Ente",
            'title' => "Erinnern Sie sich an die Menschen, die Ihnen wichtig sind.",
            'subtitle' => "Wir sind ein quelloffenes persönliches CRM.",
            'lede' => "Privat von Grund auf. Quelloffen. Selbst hostbar. Keine Werbung, kein Datenverkauf, keine peinlichen Benachrichtigungen zur „Aktivierung“.",
            'start' => "Mit Monica beginnen",
            'github' => "Auf GitHub ansehen",
            'sales' => "Vertrieb kontaktieren",
            'salesJoke' => "Kleiner Scherz.",
            'salesTruth' => "Wir haben gar keinen Vertrieb.",
        ],

        'product' => [
            // Read out in place of the picture, which is drawn in markup but is
            // a picture of the product rather than a working copy of it.
            'label' => "Monica, geöffnet auf der Seite von Phoebe Buffay: zwei wichtige Daten, ihre Beziehungen, die neueste Notiz über sie und drei Geschenkideen.",
            'vault' => "Familie",
            'nav' => ["Dashboard", "Menschen", "Erinnerungen", "Journal", "Geschenkideen", "Einstellungen"],
            'vaultsLabel' => "Tresore",
            'vaults' => ["Familie", "Freunde", "Central Perk"],
            'search' => "Menschen suchen",
            'add' => "Person hinzufügen",
            'meta' => "Ursulas Zwillingsschwester · New York · seit 10 Jahren bekannt",
            'tabs' => ["Übersicht", "Zeitleiste", "Notizen", "Geschenkideen"],
            'datesTitle' => "Wichtige Daten",
            'dates' => [
                ['title' => "Geburtstag", 'date' => "16. Februar 1966", 'when' => "in vier Monaten"],
                ['title' => "Hochzeitstag", 'date' => "12. Februar 2004", 'when' => "in vier Monaten"],
            ],
            'relationshipsTitle' => "Beziehungen",
            'relationships' => [
                ["Phoebe ist ", "Ursulas", " Zwillingsschwester."],
                ["Phoebe ist ", "Mikes", " Ehefrau."],
            ],
            'noteTitle' => "Neueste Notiz",
            'note' => "Hat ein neues Lied über eine Katze geschrieben. Sehr stolz darauf. Den Geruch nicht erwähnen.",
            'noteWhen' => "Vor sechs Tagen",
            'giftsTitle' => "Geschenkideen",
            'gifts' => ["Gitarrensaiten", "Massageöl", "Geruchloses Katzenstreu"],
        ],

        'awards' => [
            'label' => "Fremde im Internet sind einverstanden",
            'github' => "GitHub Trending: Repository des Tages, Platz 1",
            'hn' => "Hacker News: Platz 65 der meistgewählten Links aller Zeiten",
            'ph' => "Product Hunt: Produkt des Tages, Platz 4",
        ],

        'agents' => [
            'eyebrow' => "MCP-Server und REST API",
            'title' => "Nutzen Sie Monica als Backend für Ihre Agenten.",
            'body' => "Monica hat keine eingebaute KI und wird nie eine haben, aber wir lassen Ihren eigenen Agenten auf Ihre Daten zugreifen — wenn Sie das möchten.",
            'mcp' => "MCP-Doku ansehen",
            'api' => "API ansehen",
            'prompt' => "Was soll ich Rachel zum Geburtstag schenken?",
            'answer' => "Rachel hat in 23 Tagen Geburtstag.",
            'saved' => "Sie haben im Juli zwei Ideen gespeichert:",
            'ideas' => ["Der Schal, auf den sie bei Bloomingdale’s gezeigt hat", "Alles außer einer Pro-und-Contra-Liste"],
            'ask' => "Trag ein, dass ich heute mit Joey im Central Perk Kaffee getrunken habe.",
            'used' => "Monica verwendet",
            'reply' => "Erledigt. „Kaffee“ am 11. Oktober in Joeys Zeitleiste eingetragen.",
        ],

        'features' => [
            'title' => "Einige unserer Funktionen",
            'lede' => "Alles, was Sie brauchen, um festzuhalten, was in Ihrem Leben passiert",
            'reminders' => [
                'title' => "Geburtstage, bevor sie nachträglich werden.",
                'body' => "Erinnerungen an Daten, Anrufe und Versprechen. Per E-Mail, pünktlich.",
                'rows' => [
                    ['name' => "Rachel Green", 'what' => "Geburtstag", 'when' => "in 23 Tagen"],
                    ['name' => "Chandler Bing", 'what' => "wegen Thanksgiving zurückrufen", 'when' => "morgen"],
                    ['name' => "Joey Tribbiani", 'what' => "Miete zurückzahlen", 'when' => "seit sechs Jahren überfällig"],
                ],
            ],
            'relationships' => [
                'title' => "Wer ist wer, und wer gehört zu wem.",
                'body' => "Stammbäume, Verflossene, Paten. Als ganze Sätze geschrieben.",
                'sentences' => [
                    ["Monica ist die Schwester von ", "Ross", "."],
                    ["Ross ist ", "Rachels", " Hummer."],
                    ["Joey ist ", "jedermanns", " Mitbewohner."],
                ],
            ],
            'gifts' => [
                'title' => "Geschenkideen, im Juli gespeichert.",
                'body' => "Damit der Dezember keine Panik wird.",
                'ideas' => ["Ein Kickertisch", "Das Buch über Dinosaurier"],
                'crossed' => "Eine Pro-und-Contra-Liste",
            ],
            'notes' => [
                'title' => "Notizen, die Sie wiederfinden.",
                'body' => "Durchsuchen Sie jede Notiz, zu jedem Menschen.",
                'query' => "allergisch",
                'who' => "Ross:",
                'match' => "allergisch gegen Kiwi. Monica vergisst das ständig.",
            ],
            'details' => [
                'title' => "Kennt das Küken und die Ente.",
                'body' => "Haustiere, Kinder, Berufe, Essensvorlieben. Die Details, die zählen.",
                'fields' => [
                    ['label' => "Haustiere", 'value' => "Ein Küken und eine Ente"],
                    ['label' => "Kaffee", 'value' => "Central Perk, jeden Tag"],
                ],
            ],
            'vaults' => [
                'title' => "Ein Tresor für jeden Kreis.",
                'body' => "Familie, Freunde, Arbeit. Getrennt gehalten, geteilt mit allen, die Sie einladen.",
                'vaults' => [
                    ['name' => "Familie", 'count' => "24 Menschen"],
                    ['name' => "Freunde", 'count' => "61 Menschen"],
                    ['name' => "Central Perk", 'count' => "6 Menschen"],
                ],
            ],
        ],

        'privacy' => [
            'eyebrow' => "Datenschutz",
            'title' => "Anders als alle anderen in diesem Bereich liegt uns Ihre Privatsphäre am Herzen.",
            'aside' => "Sehr.",
            'source' => [
                'title' => "Open Source",
                'body' => "Prüfen Sie unseren Code und überzeugen Sie sich, dass wir keinen Unsinn treiben.",
                'comment' => "// Was wir mit Dritten teilen",
            ],
            'trackers' => [
                'title' => "Keine Werbung, kein Tracking-Mist",
                'body' => "Nichts zu verkaufen. Niemand, an den wir verkaufen.",
                'label' => "Anfragen an Dritte",
                'rows' => ["Werbung", "Analytics", "Datenhändler", "Fingerprinting"],
            ],
            'selfHost' => [
                'title' => "Wir empfehlen Self-Hosting",
                'body' => "Ein Docker-Befehl. Ihr Server, Ihre Regeln, Ihre Privatsphäre.",
                'pulling' => "Image wird geladen… fertig",
                'running' => "Läuft auf Ihrem Server",
            ],
        ],

        // The prices themselves are not here: the Cloud card reads them from
        // `pricing.prices`, so the homepage and the pricing page cannot quote
        // two different numbers.
        'pricing' => [
            'badge' => "Keine Werbung",
            'badgeText' => "Ihre Daten sind in jedem Tarif portabel.",
            'title' => "Zahlen Sie, wie Sie wollen. Oder gar nicht.",
            'lede' => "Hosten Sie selbst und kostenlos, oder lassen Sie Monica den Betrieb übernehmen.",
            'selfHost' => [
                'title' => "Selbst hosten",
                'price' => "Kostenlos",
                'per' => "für immer",
                'items' => ["Alle Funktionen, keine Grenzen", "Docker-Deployment mit einem Befehl", "Volle Kontrolle über Ihre Daten", "Sie sind die IT-Abteilung"],
                'cta' => "Dokumentation lesen",
            ],
            'cloud' => [
                'title' => "Cloud",
                'billingLabel' => "Abrechnungszeitraum",
                'monthly' => "Monatlich",
                'yearly' => "Jährlich",
                'perMonth' => "pro Monat",
                'perYear' => "pro Jahr",
                'yearlyNote' => "Zwei Monate geschenkt",
                'lifetime' => "Lebenslang",
                'once' => "einmalig",
                'lifetimeNote' => "Keine wiederkehrenden Zahlungen",
                'items' => ["Verwaltetes Hosting", "Automatische Updates und Sicherungen", "Unbegrenzt viele Menschen und Tresore", "Jederzeit kündbar"],
                'cta' => "Mit Monica beginnen",
            ],
        ],

        'faq' => [
            'title' => "Fragen, beantwortet.",
            'items' => [
                ['q' => "Ist das ein Vertriebs-CRM?", 'a' => "Nein. Hier hat niemand eine Pipeline. Monica ist für Familie, Freunde und die Menschen, bei denen Sie sich eigentlich melden wollten."],
                ['q' => "Ist Selbsthosten wirklich kostenlos?", 'a' => "Ja. Alle Funktionen, keine Grenzen, lizenziert unter AGPL-3.0. Den Server bringen Sie mit."],
                ['q' => "Wer kann meine Daten sehen?", 'a' => "Sie und alle, die Sie in einen Tresor einladen. Keine Werbung, keine Tracker, kein Datenverkauf. Wenn Sie selbst hosten, verlassen sie Ihren Server nie."],
                ['q' => "Kann ich zwischen Cloud und Selbsthosting wechseln?", 'a' => "Ja, in beide Richtungen. Alles exportieren, auf der anderen Seite importieren."],
                ['q' => "Funktioniert es mit meinem KI-Agenten?", 'a' => "Wenn er MCP spricht, ja. Für alles andere gibt es außerdem eine vollständige REST API."],
            ],
        ],
    ],

    'pricing' => [
        // The four prices, as a reader sees them. Everything below quotes them
        // through :free, :monthly, :yearly and :lifetime, and the homepage
        // reads them from here, so a price change is one edit per language
        // (plus `plans` in config.php, for the structured data).
        'prices' => [
            'free' => "0 $",
            'monthly' => "9 $",
            'yearly' => "90 $",
            'lifetime' => "150 $",
        ],

        'hero' => [
            'badge' => "Keine Gebühren pro Kontakt",
            'badgeText' => "Monatlich, jährlich, einmalig oder nie zahlen.",
            'title' => "Preise, an die Sie keine Erinnerung brauchen.",
            'lede' => "Hosten Sie Monica kostenlos selbst. Lassen Sie Monica sie für :monthly im Monat oder :yearly im Jahr hosten. Oder zahlen Sie einmal :lifetime und denken Sie nie wieder daran. Der Preis bleibt gleich, ob Sie zehn Menschen kennen oder zehntausend.",
        ],

        'selfHost' => [
            'eyebrow' => "Option eins · kostenlos",
            'title' => "Selbst hosten. Kostenlos, und zwar vollständig.",
            'body' => "Monica ist quelloffen. Ein Docker-Befehl, und sie läuft auf Ihrem eigenen Rechner: Ihr Server, Ihre Regeln, jede Funktion. Keine Testphase, keine gesperrte Stufe, kein Lizenzschlüssel.",
            'items' => [
                "Für immer kostenlos, unter AGPL-Lizenz",
                "Jede Funktion der gehosteten Monica",
                "Ihre Daten verlassen nie Ihre Hardware",
                "Updates, wann Sie sie holen wollen",
            ],
            'cta' => "Anleitung zum Selbst-Hosten lesen",
            'terminal' => [
                'comment' => "# Holen, starten, fertig.",
                'pulling' => "Lade monica:latest…",
                'starting' => "Starte die Datenbank…",
                'running' => "Läuft unter http://localhost:8080",
                'outro' => "# Und jetzt tragen Sie Ihre Mutter ein.",
            ],
        ],

        'plans' => [
            'title' => "Drei Wege hinein. Alle fair.",
            'lede' => "Selbst betreiben, laufend zahlen oder einmal zahlen. Jeder Tarif hat jede Funktion. Sie entscheiden nur, wer sich um den Server kümmert.",
            'footnote' => "Preise in USD. Steuern werden, wo vorgeschrieben, an der Kasse hinzugefügt. In keinem Tarif Gebühren pro Kontakt, pro Erinnerung oder pro Tresor.",

            'selfHost' => [
                'title' => "Selbst hosten",
                'body' => "Für alle, die schon einen Server haben oder einen Vorwand für einen suchen.",
                'per' => "für immer",
                'items' => [
                    "Vollständiger Quellcode, AGPL",
                    "Unbegrenzte Kontakte und Tresore",
                    "Sicherungen und Updates machen Sie",
                    "Support durch die Community",
                ],
                'cta' => "Anleitung zum Selbst-Hosten",
            ],

            'hosted' => [
                'title' => "Gehostet",
                'badge' => "Am häufigsten gewählt",
                'body' => "Für alle, die wollen, dass Monica einfach da ist.",
                'billingLabel' => "Abrechnungszeitraum",
                'monthly' => "Monatlich",
                'yearly' => "Jährlich",
                'perMonth' => "/ Monat",
                'perYear' => "/ Jahr",
                'yearlyNote' => "2 Monate geschenkt",
                'items' => [
                    "Unbegrenzte Kontakte, Erinnerungen, Tresore",
                    "Automatische Updates und tägliche Sicherungen",
                    "Erinnerungen per E-Mail",
                    "E-Mail-Support von echten Menschen",
                    "Jederzeit kündbar, alles exportierbar",
                ],
                'cta' => "Mit Monica beginnen",
            ],

            'lifetime' => [
                'title' => "Lebenslang",
                'badge' => "Einmal zahlen",
                'body' => "Für alle, die lieber nie wieder darüber nachdenken.",
                'per' => "einmalig",
                'items' => [
                    "Alles aus „Gehostet“",
                    "Eine Zahlung, keine Verlängerungen",
                    "Alle künftigen Versionen inbegriffen",
                    "Wechsel zum Selbst-Hosten, wann Sie möchten",
                ],
                'cta' => "Einmal zahlen, :lifetime",
            ],
        ],

        'calculator' => [
            'eyebrow' => "Der beziehungsbasierte Preisrechner",
            'title' => "Was sollte Ihr Sozialleben kosten?",
            'lede' => "Erzählen Sie ihm von den Menschen in Ihrem Leben. Er wägt elf zutiefst persönliche Faktoren ab und ermittelt einen fairen, maßgeschneiderten, völlig wissenschaftlichen Preis.",

            'sliders' => [
                'people' => ['label' => "Menschen, an die Sie sich erinnern möchten", 'help' => "Dunbar sagt 150. Dunbar kennt Ihre Verwandtschaft nicht."],
                'birthdays' => ['label' => "Letztes Jahr vergessene Geburtstage", 'help' => "Inklusive des einen, der Ihnen um 23:48 Uhr eingefallen ist."],
                'coffee' => ['label' => "Wie oft Sie „wir sollten mal einen Kaffee trinken“ gesagt haben", 'help' => "Und dann keinen Kaffee getrunken haben."],
                'cousins' => ['label' => "Kinder von Cousins, deren Namen Sie nicht kennen", 'help' => "Sie wissen, dass es einen Leo gibt. Vielleicht zwei."],
                'reminders' => ['label' => "Erinnerungen, die Sie anlegen würden", 'help' => "Monica verschickt jede einzelne."],
                'mum' => ['label' => "Anrufe bei Ihrer Mutter pro Monat", 'help' => "Sie hat es so oder so bemerkt."],
            ],

            'toggles' => [
                'pretend' => ['label' => "Sie haben schon so getan, als wüssten Sie einen Namen", 'help' => "„Hallo… du.“"],
                'notes' => ['label' => "Sie machen sich auf dem Handy Notizen über Menschen", 'help' => "Monica ist genau diese Idee, nur mit Daten dazu."],
                'dentist' => ['label' => "Sie kennen den Vornamen Ihrer Zahnärztin", 'help' => "Ehrlich gesagt beeindruckend."],
                'belated' => ['label' => "Sie haben schon „nachträglich alles Gute“ geschickt", 'help' => "Das haben alle. Manche öfter als andere."],
            ],

            'social' => [
                'label' => "Ihr Sozialleben",
                'help' => "Als Multiplikator angewandt, weil Multiplikatoren nun mal so funktionieren.",
                'options' => [
                    'hermit' => "Einsiedler",
                    'reasonable' => "Vernünftig",
                    'mayor' => "Bürgermeister des Ortes",
                ],
            ],

            'quote' => "Ihr persönliches Angebot",
            'planLabel' => "Tarif",
            'plans' => [
                'monthly' => "Monatlich",
                'yearly' => "Jährlich",
                'lifetime' => "Lebenslang",
            ],

            // :count is a slider's value, :rate a made-up price per unit.
            'lines' => [
                'base' => [
                    'monthly' => "Monica, monatlich",
                    'yearly' => "Monica, jährlich",
                    'lifetime' => "Monica, lebenslang",
                ],
                'people' => ":count Menschen × :rate",
                'reminders' => ":count Erinnerungen",
                'birthdays' => ":count vergessene Geburtstage × :rate schlechtes Gewissen",
                'coffee' => ":count theoretische Kaffees × :rate",
                'cousins' => ":count namenlose Kinder von Cousins × :rate",
                'mum' => ":count Anrufe bei Mama × :rate Gutschrift",
                'pretend' => "Zuschlag fürs Namen-Vortäuschen",
                'notes' => "Umzug aus Ihrer Notizen-App",
                'dentist' => "Bonus für Vertrautheit mit der Zahnärztin",
                'belated' => "Bearbeitungsgebühr für „nachträglich alles Gute“",
                'multiplier' => "Sozialleben-Multiplikator ×:rate",
                'included' => "inbegriffen",
                'free' => "kostenlos",
            ],

            'subtotal' => "Zwischensumme",
            'refund' => "Beziehungsbasierte Preise",
            'refundHelp' => "Gibt es bei Monica nicht. Vollständig abgezogen.",
            'total' => "Ihr Gesamtbetrag",
            'per' => [
                'monthly' => "/ Monat",
                'yearly' => "/ Jahr",
                'lifetime' => "einmalig",
            ],

            'verdicts' => [
                'birthdays' => ":count Geburtstage im nächsten Jahr, alle abgedeckt.",
                'coffee' => "Gehen Sie einen dieser Kaffees trinken.",
                'mum' => "Rufen Sie Ihre Mutter an. Das Angebot wartet.",
                'default' => "Dasselbe wie für alle anderen. Genau darum geht es.",
            ],

            'cta' => "Diesen verdächtigen Preis sichern",
            'reset' => "Alles vergessen und neu anfangen",
            'footnote' => "Jede Zeile oben ist erfunden, außer dem Gesamtbetrag. Monica kostet dasselbe, ob Sie drei Menschen kennen oder dreitausend, ob Sie jeden Geburtstag behalten oder keinen.",
        ],

        'promises' => [
            'people' => [
                'title' => "Nie ein Preis pro Person",
                'body' => "Jemanden neu kennenzulernen sollte Sie nichts kosten. Kontakte, Erinnerungen und Tresore sind in jedem Tarif unbegrenzt.",
            ],
            'export' => [
                'title' => "Mit allem gehen",
                'body' => "Exportieren Sie Ihr ganzes Konto, wann Sie möchten, und nehmen Sie es mit zu einer selbst gehosteten Monica oder anderswohin. Kündigen ist ein einziger Knopf.",
            ],
            'openSource' => [
                'title' => "Quelloffen seit 2017",
                'body' => "Wer für das Hosting zahlt, bezahlt die Server und die Menschen, die Monica weiterentwickeln, auch für alle, die sie selbst hosten.",
            ],
        ],

        'ninety' => [
            'eyebrow' => ":yearly im Verhältnis",
            'title' => "Was kostet sonst noch neunzig Dollar?",
            'lede' => "Ein Jahr gehostete Monica, neben den Dingen, für die Menschen das Geld meist ausgeben, nachdem sie etwas vergessen haben.",
            'about' => "~ :yearly",
            'items' => [
                'bouquets' => ['title' => "Drei Entschuldigungssträuße", 'body' => "Einer pro vergessenem Geburtstag. Die von der Tankstelle, auf dem Weg gekauft."],
                'gift' => ['title' => "Ein nachträgliches Geschenk per Expressversand", 'body' => "Das meiste davon ist der Versand. Alles davon ist schlechtes Gewissen."],
                'coffees' => ['title' => "Achtzehn Kaffees", 'body' => "Die, die Sie trinken gehen wollten. Monica erinnert Sie daran, wirklich einen zu trinken."],
                'streaming' => ['title' => "Sechs Monate eines Streamingdienstes", 'body' => "Der, von dem Sie vergessen hatten, dass Sie ihn abonniert haben."],
                'cards' => ['title' => "Eine Karte für jeden Cousin", 'body' => "Plus Briefmarken. Plus herausfinden, wo sie inzwischen wohnen."],
                'dinner' => ['title' => "Abendessen für zwei, ohne Nachtisch", 'body' => "Bei dem Sie endlich fragen, wie es ihnen geht, und zuhören."],
                'addressBook' => ['title' => "Ein neues Adressbuch", 'body' => "Leder, schön gemacht, und bis zum Frühling wieder verloren."],
                'monica' => ['title' => "Ein Jahr, in dem Sie sich an alle erinnern", 'body' => "Geburtstage, Namen der Kinder, wie das Vorstellungsgespräch lief. Das ist Monica."],
            ],
            'footnote' => "Die Preise sind ungefähr und beruhen auf Erfahrung. Ein Jahr Monica kostet genau :yearly.",
        ],

        'faq' => [
            'eyebrow' => "Fragen zum Bezahlen",
            'title' => "Häufig gefragt, selten vergessen.",
            'intro' => "Jede Antwort beginnt mit der Kurzfassung. Öffnen Sie die lange, wenn die kurze Sie misstrauisch gemacht hat.",
            'search' => "Fragen durchsuchen",
            'categoriesLabel' => "Fragen nach Thema filtern",
            'categories' => [
                'all' => "Alle",
                'money' => "Geld",
                'plans' => "Tarife",
                'selfHosting' => "Selbst hosten",
                'data' => "Ihre Daten",
                'leaving' => "Gehen",
            ],
            'progress' => [
                'none' => "0 von :total gelesen. Fangen Sie irgendwo an.",
                'some' => ":count von :total gelesen.",
                'many' => ":count von :total gelesen. Sie wissen jetzt mehr darüber als die meisten, die sich anmelden.",
                'all' => "Alle :total gelesen. Sie könnten den Support-Posteingang übernehmen.",
            ],
            'random' => "Irgendeine Frage stellen",
            'emptyTitle' => "Keine Frage passt dazu",
            'emptyBody' => "Versuchen Sie ein kürzeres Wort, oder schreiben Sie dem Support. Dort lesen echte Menschen.",
            'items' => [
                ['cat' => 'money', 'q' => "Was kostet Monica?", 'short' => "Nichts, :monthly, :yearly oder :lifetime.", 'a' => "Selbst hosten ist kostenlos. Gehostete Monica kostet :monthly im Monat oder :yearly im Jahr. Lebenslang kostet :lifetime, einmal gezahlt. Jede Option enthält jede Funktion."],
                ['cat' => 'money', 'q' => "Gilt der Preis pro Nutzer oder pro Kontakt?", 'short' => "Weder noch.", 'a' => "Ein Konto zahlt einen Preis. Legen Sie so viele Kontakte, Erinnerungen, Tresore und Notizen an, wie Sie möchten. Neue Menschen kennenzulernen sollte Sie nie Geld kosten."],
                ['cat' => 'money', 'q' => "Sind Steuern enthalten?", 'short' => "Werden, wo vorgeschrieben, an der Kasse hinzugefügt.", 'a' => "Wenn Ihr Land Umsatzsteuer oder Mehrwertsteuer verlangt, wird sie vor der Zahlung angezeigt. Der Betrag, dem Sie zustimmen, ist der Betrag, der abgebucht wird."],
                ['cat' => 'money', 'q' => "Kann ich in einer anderen Währung zahlen?", 'short' => "Die Preise sind in US-Dollar.", 'a' => "Ihr Kartenanbieter rechnet beim Bezahlen um. Der Betrag in Dollar bleibt von Jahr zu Jahr gleich."],
                ['cat' => 'money', 'q' => "Wird der Preis steigen?", 'short' => "Nicht für den Tarif, den Sie schon haben.", 'a' => "Wenn sich die Preise für Neukunden ändern, behalten bestehende Abonnements ihren Preis. Sie erfahren es rechtzeitig per E-Mail, mit der tatsächlichen Zahl."],
                ['cat' => 'money', 'q' => "Bieten Sie Rabatte an?", 'short' => "Jährlich ist zwei Monate günstiger.", 'a' => "Jährlich zahlen kostet :yearly statt 108 $. Studierende und gemeinnützige Organisationen können dem Support schreiben. Selbst hosten bleibt der größte Rabatt von allen: 100 %."],
                ['cat' => 'plans', 'q' => "Bieten Sie Lifetime-Tarife an?", 'short' => "Ja. :lifetime, einmalig.", 'a' => "Lebenslang ist gehostete Monica ohne Verlängerungen. Er enthält jede künftige Version, solange es die gehostete Monica gibt, und Sie können jederzeit zum Selbst-Hosten wechseln."],
                ['cat' => 'plans', 'q' => "Unterscheidet sich die gehostete von der selbst gehosteten Version?", 'short' => "Dieselbe Monica.", 'a' => "Derselbe Code, dieselben Funktionen. Der einzige Unterschied ist, wer den Server betreibt, die Updates einspielt und die Sicherungen aufbewahrt."],
                ['cat' => 'plans', 'q' => "Bieten Sie einen Enterprise-Tarif an?", 'short' => "Nein.", 'a' => "Monica ist ein persönliches CRM für Ihr eigenes Leben. Ein Vertriebsteam ist mit einem Vertriebswerkzeug besser bedient."],
                ['cat' => 'selfHosting', 'q' => "Ist Monica wirklich quelloffen?", 'short' => "Ja, seit 2017.", 'a' => "Der vollständige Quellcode ist öffentlich und steht unter der AGPL. Sie können ihn lesen, ausführen, ändern und dazu beitragen."],
                ['cat' => 'selfHosting', 'q' => "Ist Selbst-Hosten kostenlos?", 'short' => "Vollständig.", 'a' => "Kein Lizenzschlüssel, keine gesperrten Funktionen, keine Testphase. Sie zahlen für Ihren eigenen Server, falls Sie einen haben, und mit Ihrer eigenen Zeit."],
                ['cat' => 'selfHosting', 'q' => "Kann ich von gehostet zu selbst gehostet wechseln?", 'short' => "Ja, wann Sie möchten.", 'a' => "Exportieren Sie Ihr Konto und importieren Sie es in Ihre eigene Monica. Das Format ist auf beiden Seiten dasselbe, also geht unterwegs nichts verloren."],
                ['cat' => 'selfHosting', 'q' => "Unterstützt ein Abonnement das Open-Source-Projekt?", 'short' => "Direkt.", 'a' => "Die Einnahmen aus dem Hosting bezahlen die Server und die Menschen, die Monica weiterentwickeln, auch die Teile, die Selbst-Hostende kostenlos nutzen."],
                ['cat' => 'data', 'q' => "Speichert Monica meine Zahlungsdaten?", 'short' => "Nein.", 'a' => "Zahlungen wickelt der Zahlungsdienstleister ab. Monica sieht und speichert Ihre Kartennummer nie."],
                ['cat' => 'data', 'q' => "Werden meine Daten für Werbung genutzt?", 'short' => "Nie.", 'a' => "Es gibt keine Werbung, keine Tracker und keine Dritten, die lesen, was Sie über Ihre Familie schreiben."],
                ['cat' => 'data', 'q' => "Werden meine Daten zum Training von KI-Modellen genutzt?", 'short' => "Nein.", 'a' => "Was Sie über die Menschen in Ihrem Leben schreiben, ist kein Trainingsmaterial, weder für Monica noch für irgendjemanden, mit dem Monica zusammenarbeitet."],
                ['cat' => 'data', 'q' => "Sind Sicherungen enthalten?", 'short' => "Täglich, in den gehosteten Tarifen.", 'a' => "Gehostete und lebenslange Konten werden jeden Tag gesichert. Bei einer selbst gehosteten Monica planen Sie die Sicherungen selbst."],
                ['cat' => 'data', 'q' => "Kann ich alles exportieren?", 'short' => "Alles.", 'a' => "Kontakte, Notizen, Erinnerungen, Beziehungen, Dateien. Der Export steht in jedem Tarif zur Verfügung, auch nach der Kündigung."],
                ['cat' => 'leaving', 'q' => "Kann ich jederzeit kündigen?", 'short' => "Ja, mit einem Knopf.", 'a' => "Kein Anruf, kein Halteformular. Ihr Konto bleibt bis zum Ende des bezahlten Zeitraums nutzbar."],
                ['cat' => 'leaving', 'q' => "Gibt es Kündigungsgebühren?", 'short' => "Nein.", 'a' => "Kündigen kostet nichts. Zurückkommen auch nicht."],
                ['cat' => 'leaving', 'q' => "Was passiert, wenn meine Zahlung fehlschlägt?", 'short' => "Nichts verschwindet.", 'a' => "Sie bekommen eine E-Mail und eine Schonfrist, um Ihre Karte zu aktualisieren. Ihre Daten bleiben genau, wo sie waren."],
                ['cat' => 'leaving', 'q' => "Wie funktionieren Rückerstattungen?", 'short' => "Fragen Sie innerhalb von 30 Tagen.", 'a' => "Wenn Monica nichts für Sie ist, schreiben Sie dem Support innerhalb von 30 Tagen nach der Zahlung, und Sie bekommen den vollen Betrag zurück."],
                ['cat' => 'leaving', 'q' => "Kann ich mein Konto löschen?", 'short' => "Ja, endgültig.", 'a' => "Wenn Sie Ihr Konto löschen, werden Ihre Daten von den Servern entfernt. Sicherungen, die sie enthalten, laufen nach ihrem üblichen Zeitplan ab."],
            ],
        ],
    ],

    'personalCrm' => [
        'eyebrow' => "Ein praktischer Leitfaden",
        'title' => "Was ist ein persönliches CRM?",
        'lede' => "Ein persönliches CRM ist ein privater Ort für den Zusammenhang rund um die Menschen in Ihrem Leben: was sie Ihnen erzählt haben, was ihnen wichtig ist und worauf Sie noch zurückkommen wollten.",
        'intro' => "Anders als ein Vertriebs-CRM ist es für Beziehungen gebaut, nicht für Pipelines. Es geht nicht darum, Menschen zu verwalten. Es geht darum, Ihrem Gedächtnis etwas zu helfen, damit Sie mit mehr Zusammenhang auftauchen können.",

        'toc' => [
            'label' => "In diesem Leitfaden",
            'items' => [
                ['id' => 'definition', 'title' => "Die kurze Definition"],
                ['id' => 'comparison', 'title' => "Der Unterschied zu anderen Werkzeugen"],
                ['id' => 'contents', 'title' => "Was darin Platz hat"],
                ['id' => 'fit', 'title' => "Wem es hilft"],
                ['id' => 'approaches', 'title' => "Die wichtigsten Ansätze"],
                ['id' => 'history', 'title' => "Woher es kommt"],
                ['id' => 'privacy', 'title' => "Datenschutz und Ethik"],
                ['id' => 'hosting', 'title' => "Cloud oder selbst gehostet"],
                ['id' => 'choosing', 'title' => "Wie Sie wählen"],
                ['id' => 'monica', 'title' => "Der Ansatz von Monica"],
            ],
        ],

        'definition' => [
            'label' => "Die kurze Definition",
            'title' => "Ein persönliches CRM merkt sich mehr als Kontaktdaten.",
            'body' => "Ihr Adressbuch kennt die Telefonnummer von Sam. Ein persönliches CRM kann Sie daran erinnern, dass Sam für einen Halbmarathon trainiert, dass ihre Tochter Maya heißt und dass Sie versprochen haben, den Titel dieses Buches zu schicken.",
            'body2' => "Es verbindet Fakten mit der Geschichte einer Beziehung. Je nach Werkzeug gehören dazu Notizen, Gespräche, Aktivitäten, wichtige Daten, Erinnerungen, die Verbindungen zwischen Menschen und eigene Angaben, die Ihnen wichtig sind.",
            'aside' => "Ein gutes persönliches CRM hilft Ihnen beim Erinnern. Es entscheidet nicht, wie viel ein Mensch wert ist.",
        ],

        'comparison' => [
            'label' => "Drei verschiedene Aufgaben",
            'title' => "Ein Adressbuch, ein persönliches CRM und ein klassisches CRM sind nicht dasselbe.",
            'body' => "Alle drei speichern Informationen über Menschen, aber sie sind um verschiedene Fragen herum gebaut. Sie alle Kontaktverwaltung zu nennen, verdeckt das Wesentliche: wozu die Information da ist.",
            'cards' => [
                [
                    'title' => "Adressbuch",
                    'question' => "Wie erreiche ich diese Person?",
                    'body' => "Namen, Telefonnummern, E-Mail-Adressen, Postadressen und vielleicht ein Geburtstag. Einfach, vertraut und für viele Menschen genug.",
                ],
                [
                    'title' => "Persönliches CRM",
                    'question' => "Welchen Zusammenhang möchte ich behalten?",
                    'body' => "Die Person, Ihre Beziehung, was passiert ist und was Sie sich merken oder später tun wollen.",
                ],
                [
                    'title' => "Klassisches CRM",
                    'question' => "Wie entwickelt sich diese Kundenbeziehung?",
                    'body' => "Leads, Accounts, Abschlüsse, Serviceanfragen, Umsatz, Teamaktivität und die Stufen eines Geschäftsprozesses.",
                ],
            ],
            'tableTitle' => "Persönliches CRM und klassisches CRM",
            'tableHeadings' => ["", "Persönliches CRM", "Klassisches CRM"],
            'rows' => [
                ["Hauptzweck", "Persönlichen Zusammenhang behalten und Zusagen einhalten", "Vertrieb, Marketing oder Kundenservice koordinieren"],
                ["Abgebildete Menschen", "Freunde, Familie, Nachbarn, Kolleginnen und andere Menschen in Ihrem Leben", "Leads, Kunden, Accounts und geschäftliche Kontakte"],
                ["Typische Informationen", "Verbindungen, Erinnerungen, Gespräche, Daten, Notizen und Wiedervorlagen", "Abschlüsse, Umsatz, Kampagnen, Supportverlauf und Pipeline-Stufen"],
                ["Erfolg heißt", "Sie haben den Zusammenhang, wenn er zählt", "Ein Geschäftsprozess kommt voran und lässt sich messen"],
                ["Genutzt meist von", "Einer Person, manchmal einem Haushalt", "Einem Unternehmen oder Team"],
            ],
            'closing' => "Klassische CRM-Systeme sind nützliche Werkzeuge für die Aufgabe, für die sie gebaut wurden. Schwierig wird es, wenn die Sprache und die Anreize des Vertriebs ins Privatleben getragen werden. Ihre Freunde sind keine Leads, und ein ruhiger Monat ist keine stockende Pipeline.",
        ],

        'contents' => [
            'label' => "Was hineingehört",
            'title' => "Behalten Sie genug Zusammenhang, um nützlich zu sein. Mehr nicht.",
            'body' => "Ein persönliches CRM kann zu einer detaillierten Akte über das Leben eines anderen Menschen werden. Das ist ein Grund, auszuwählen, und kein Grund, jedes verfügbare Feld zu füllen. Halten Sie etwas fest, weil es Ihnen beim Erinnern oder beim Einhalten hilft, nicht weil die Software ein leeres Feld anbietet.",
            'groups' => [
                ['title' => "Identität und Kontaktdaten", 'body' => "Namen, Pronomen, Telefonnummern, E-Mail-Adressen, Orte und die Namen, die eine Person wirklich verwendet."],
                ['title' => "Verbindungen", 'body' => "Woher Sie jemanden kennen, die Menschen um diese Person herum und die Familien- oder Haushaltsverhältnisse, die dem Rest seinen Sinn geben."],
                ['title' => "Wichtige Daten", 'body' => "Geburtstage, Jubiläen, Umzüge, Abschlüsse oder jedes Datum, das dieser Person oder Ihrer gemeinsamen Geschichte etwas bedeutet."],
                ['title' => "Gespräche und Notizen", 'body' => "Worüber Sie gesprochen haben, eine Empfehlung, eine Sorge, die jemand geteilt hat, oder ein Detail, das Sie nicht zum dritten Mal erfragen wollen."],
                ['title' => "Aktivitäten und Erinnerungen", 'body' => "Essen, Anrufe, Reisen, Besuche, Projekte und andere Momente, die Sie später zeitlich einordnen wollen."],
                ['title' => "Zusagen und Wiedervorlagen", 'body' => "Ein Versprechen, ein geliehener Gegenstand, eine Geschenkidee oder eine Erinnerung, nach dem Ausgang zu fragen."],
            ],
            'note' => "Sensible Informationen verlangen einen höheren Maßstab. Wenn es sich wie ein Vertrauensbruch anfühlen würde, eine Notiz der betroffenen Person vorzulesen, dann ist dieses Gefühl eine nützliche Information.",
        ],

        'example' => [
            'label' => "Ein kleines Beispiel",
            'title' => "Wie die Nutzung eines persönlichen CRM tatsächlich aussieht",
            'body' => "Der nützliche Teil ist meist ganz gewöhnlich. Es geht weniger um eine perfekte Datenbank als darum, die kleinen Schleifen zu schließen, die Ihr Gedächtnis sonst offen lässt.",
            'steps' => [
                ["number" => "01", 'title' => "Eine Freundin erwähnt ein Bewerbungsgespräch", 'body' => "Sie machen sich nach dem Gespräch eine kurze Notiz. Kein Protokoll, nur der Zusammenhang, den Sie behalten wollen."],
                ["number" => "02", 'title' => "Sie legen eine Erinnerung an", 'body' => "Die Erinnerung hängt an der Person und erscheint nach dem Gespräch, wenn die Frage danach nützlich ist."],
                ["number" => "03", 'title' => "Sie melden sich mit Zusammenhang", 'body' => "Sie fragen nach, weil es Ihnen wichtig ist. Die Software hat den Zeitpunkt behalten; die Beziehung bleibt Ihre."],
            ],
        ],

        'fit' => [
            'label' => "Passt es",
            'title' => "Manche Menschen brauchen eines. Viele nicht.",
            'body' => "Ein persönliches CRM verdient seinen Platz nur, wenn es ein echtes Problem mit dem Erinnern oder dem Nachfassen löst. Es soll die geistige Last senken und kein neues Verwaltungshobby schaffen.",
            'goodTitle' => "Es kann helfen, wenn Sie…",
            'good' => [
                "mehr Menschen wichtig nehmen, als Sie zuverlässig im Kopf behalten;",
                "Freunde oder Familie über Städte, Länder oder Lebensphasen verstreut haben;",
                "regelmäßig Namen, Daten, Zusagen oder anvertraute Details vergessen;",
                "Menschen begleiten, sich ehrenamtlich engagieren, eine Gemeinschaft organisieren oder für eine große Familie sorgen;",
                "einen privaten Ort für Beziehungswissen wollen, das über Notizen und Kalender verstreut ist.",
            ],
            'notTitle' => "Sie brauchen wahrscheinlich keines, wenn…",
            'not' => [
                "Adressbuch und Kalender schon abdecken, was Sie vergessen;",
                "das Pflegen der Einträge schwerer wiegt als das Problem, das sie lösen;",
                "Sie nur einen Ort für Telefonnummern und Geburtstage möchten;",
                "Sie Team-Pipelines, Massenansprache, Umsatzprognosen oder Kundenanalysen brauchen. Dafür passt ein klassisches CRM besser.",
            ],
        ],

        'approaches' => [
            'label' => "Ein nützlicher Rahmen",
            'title' => "Persönliche CRM-Systeme wägen unterschiedlich ab.",
            'body' => "Persönliches CRM ist eine lose Kategorie und keine Norm. Die Ansätze unten sind eine Möglichkeit, Produkte zu vergleichen, keine offiziellen Bezeichnungen der Branche. Viele Werkzeuge verbinden mehrere davon.",
            'items' => [
                ['title' => "Netzwerk zuerst", 'body' => "Gebaut um berufliche Kontakte, Vermittlungen und das Halten der Verbindung. Nützlich, wenn Arbeit von vielen langjährigen Beziehungen abhängt, kann aber die Sprache des Vertriebs ins Privatleben holen."],
                ['title' => "Automatisierung zuerst", 'body' => "Holt den Zusammenhang aus E-Mails, Kalendern, sozialen Netzwerken oder anderen Diensten. Das senkt die Tipparbeit, verlangt aber weitreichenderen Zugriff und sammelt manchmal mehr, als Sie wollten."],
                ['title' => "Produktivität zuerst", 'body' => "Behandelt das Nachfassen als Aufgabe und wiederkehrende Erinnerung. Klar und umsetzbar, doch eine Beziehung kann sich wie ein Postfach anfühlen, wenn jeder Austausch zur Pflicht wird."],
                ['title' => "Gedächtnis zuerst", 'body' => "Stellt Notizen, Aktivitäten, Daten und die gemeinsame Geschichte in den Mittelpunkt. Das verlangt bewussteres Eintragen, aber Sie entscheiden, was in die Akte kommt."],
                ['title' => "Persönliche Datenbank", 'body' => "Lässt Sie eigene Datensätze, Felder und Verbindungen entwerfen. Flexibel genug für ungewöhnliche Lebensläufe, dafür mit mehr Einrichtung und Pflege."],
            ],
        ],

        'history' => [
            'label' => "Eine kurze Geschichte",
            'title' => "Das persönliche CRM hat sich das Gedächtnis der Unternehmenssoftware geborgt und dann den Zweck geändert.",
            'body' => "Es gibt keinen anerkannten Erfinder des persönlichen CRM. Die Kategorie wuchs allmählich aus Adressbüchern, Kontaktmanagern, CRM-Software für Unternehmen und Werkzeugen für persönliche Informationen.",
            'items' => [
                ['date' => "Vor der Software", 'title' => "Beziehungswissen stand auf Papier", 'body' => "Adressbücher, Korrespondenzmappen, Kalender und beschriftete Karteikarten trennten die Kontaktdaten von allem, was das Gedächtnis unzuverlässig behält."],
                ['date' => "1987", 'title' => "Kontaktverwaltung erreicht den Personal Computer", 'body' => "Act! datiert sein erstes Produkt zur Kontaktverwaltung auf 1987. Frühe Werkzeuge wurden oft als digitaler Rolodex beschrieben, bevor CRM zum gängigen Begriff wurde."],
                ['date' => "Mitte der 1990er", 'title' => "CRM wird eine Geschäftskategorie", 'body' => "Wissenschaftliche Darstellungen setzen das Aufkommen des Begriffs customer relationship management in die Mitte der 1990er, als Kontaktdaten Teil größerer Vertriebs- und Servicesysteme wurden."],
                ['date' => "Ab 1999", 'title' => "CRM zieht in die Cloud", 'body' => "Salesforce startete 1999 mit CRM im Browser. Software aus dem Netz machte gemeinsame Datensätze, automatische Aktualisierungen und Integrationen zur Normalität."],
                ['date' => "2010er", 'title' => "Persönliches CRM wird ein erkennbarer Begriff", 'body' => "Neue Produkte übertrugen einige dieser Ideen auf die beruflichen und privaten Beziehungen einer einzelnen Person. Bis 2019 war die Kategorie etabliert genug, um sowohl Begeisterung als auch Unbehagen über das Optimieren von Freundschaft auszulösen."],
            ],
            'sourcesLabel' => "Quellen für diese Zeitleiste",
            'sources' => [
                ['label' => "Unternehmensgeschichte von Act!", 'url' => 'https://www.act.com/about-us/'],
                ['label' => "Wissenschaftliche Geschichte des CRM", 'url' => 'https://www.sciencedirect.com/science/article/pii/S0963868707000182'],
                ['label' => "Unternehmensgeschichte von Salesforce", 'url' => 'https://www.salesforce.com/company/our-story'],
                ['label' => "Axios über persönliches CRM im Jahr 2019", 'url' => 'https://www.axios.com/2019/08/27/startups-new-frontier-optimizing-your-friendships'],
            ],
        ],

        'privacy' => [
            'label' => "Datenschutz und Ethik",
            'title' => "Das Konto gehört Ihnen. Vieles darin handelt von anderen Menschen.",
            'body' => "Das macht ein persönliches CRM ungewöhnlich sensibel. Es kann Adressen, Familienverhältnisse, private Gespräche, Gesundheitsangaben oder im Vertrauen geteilte Erinnerungen enthalten. Ein Passwort ist nötig, aber gutes Urteilsvermögen beginnt, bevor etwas gespeichert wird.",
            'principles' => [
                ['title' => "Weniger sammeln", 'body' => "Behalten Sie, was einen klaren Zweck hat. Vollständiger ist nicht automatisch nützlicher."],
                ['title' => "Den ursprünglichen Zusammenhang achten", 'body' => "Was in einem privaten Gespräch geteilt wurde, wird nicht zum Freiwild für Anreicherung, Auswertung oder weitere Verbreitung, nur weil es sich kopieren lässt."],
                ['title' => "Wissen, wohin Automatisierung Daten schickt", 'body' => "E-Mail-Abgleich, Transkription, Anreicherung und KI-Funktionen beziehen manchmal andere Dienste ein. Prüfen Sie, was die Anwendung verlässt, warum, wie lange und ob es zum Training von Modellen dient."],
                ['title' => "Für Verlust und Abschied planen", 'body' => "Nutzen Sie strenge Zugriffsrechte und Sicherungen. Stellen Sie sicher, dass Sie Ihre Daten in einem brauchbaren Format exportieren und beim Weggehen löschen können."],
                ['title' => "Für den möglichen Leser schreiben", 'body' => "Ein guter Test ist, ob Sie eine Notiz der Person erklären könnten, die sie beschreibt, ohne sich hinter der Software zu verstecken."],
            ],
            'closing' => "Ein persönliches CRM ist von sich aus weder fürsorglich noch unheimlich. Den Unterschied macht meist, was Sie sammeln, wie es dorthin kam, wer darauf zugreifen kann und was Sie damit tun.",
        ],

        'hosting' => [
            'label' => "Wo es läuft",
            'title' => "Cloud und Selbsthosting verschieben die Verantwortung.",
            'body' => "Ein gehosteter Dienst überlässt den Betrieb der Anwendung einem Anbieter. Selbsthosting gibt Ihnen die Kontrolle über den Server und nimmt diesen Anbieter aus dem Alltag heraus. Keine der beiden Varianten ist von sich aus sicherer. Sicherheit hängt an Aktualisierungen, Zugriffsrechten, Sicherungen, Überwachung und an den Menschen, die dafür zuständig sind.",
            'tableHeadings' => ["", "Gehosteter Dienst", "Selbst gehostet"],
            'rows' => [
                ["Wartung", "Der Anbieter betreibt und aktualisiert den Dienst", "Sie installieren, aktualisieren und überwachen"],
                ["Kontrolle", "Sie arbeiten im Produkt und den Regeln des Anbieters", "Sie bestimmen Server, Konfiguration und Bereitstellung"],
                ["Sicherungen", "Meist vom Anbieter verwaltet; prüfen Sie, was enthalten ist", "Sie richten sie ein, schützen und testen sie"],
                ["Verfügbarkeit", "Meist nutzbar, ohne Infrastruktur zu betreiben", "Hängt an der Infrastruktur, die Sie betreiben"],
                ["Speicherort der Daten", "Hängt vom Anbieter und seinen Unterauftragnehmern ab", "Hängt vom Server und den Diensten ab, die Sie wählen"],
                ["Passt am besten", "Sie wollen das Werkzeug, ohne einen Dienst zu betreiben", "Sie haben das Können und die Lust, es selbst zu betreiben"],
            ],
            'note' => "Selbsthosting gibt Ihnen mehr Kontrolle. Es gibt Ihnen auch mehr Wege, einen schweren Fehler zu machen. Wählen Sie es, weil Sie die Verantwortung wollen, nicht weil das Wort allein sicher klingt.",
        ],

        'choosing' => [
            'label' => "Bevor Sie ein Werkzeug wählen",
            'title' => "Beginnen Sie mit der Gewohnheit, die Sie wollen, und prüfen Sie dann die Software.",
            'body' => "Die längste Funktionsliste sagt selten, welches persönliche CRM den Kontakt mit Ihrem echten Leben übersteht. Ein schlichtes Werkzeug, das Sie weiter benutzen, ist nützlicher als ein perfektes System, das Sie nicht öffnen.",
            'questions' => [
                ['title' => "Wobei soll es Ihnen beim Erinnern helfen?", 'body' => "Namen und Daten brauchen ein anderes Werkzeug als eine ausführliche Historie, Wiedervorlagen oder eine flexible persönliche Datenbank."],
                ['title' => "Wie viel Arbeit macht das Erfassen?", 'body' => "Entscheiden Sie, ob Sie bewusste Notizen von Hand, breite automatische Importe oder etwas dazwischen vorziehen."],
                ['title' => "Welchen Zugriff verlangt es?", 'body' => "Prüfen Sie, ob es E-Mails, Kalender, Kontakte, soziale Netzwerke oder Nachrichten liest und ob jede Berechtigung wirklich nötig ist."],
                ['title' => "Wie nutzt es KI?", 'body' => "Finden Sie heraus, welche Daten an welchen Modellanbieter gehen, was gespeichert bleibt, ob Training erlaubt ist und ob die Funktion abschaltbar ist."],
                ['title' => "Können Sie wieder gehen?", 'body' => "Achten Sie auf vollständigen Export, verständliche Formate, das Löschen des Kontos und einen glaubwürdigen Plan für die langfristige Pflege des Produkts."],
                ['title' => "Wer betreibt es?", 'body' => "Vergleichen Sie die Bequemlichkeit eines gehosteten Dienstes mit der Kontrolle und Arbeit des Selbsthostings. Rechnen Sie Sicherungen und Aktualisierungen mit ein."],
                ['title' => "Passt es zu Ihren Beziehungen?", 'body' => "Feste Felder sind manchmal einfacher. Eigene Datensätze passen manchmal besser. Wählen Sie so viel Flexibilität, wie Sie wirklich nutzen."],
            ],
        ],

        'monica' => [
            'label' => "Der Blick von Monica",
            'title' => "Gedächtnis vor Automatisierung. Beziehungen vor Netzwerken.",
            'body' => "Monica ist eine Antwort auf die Frage nach dem persönlichen CRM, nicht die Definition der Kategorie. Am Anfang stand eine einfache Idee: die Details behalten, die beim Sorgen für Freunde und Familie helfen, ohne diese Menschen zu Interessenten zu machen oder ihr Leben einem Werbesystem zu übergeben.",
            'principles' => [
                ['title' => "Zusammenhang zählt mehr als Kontaktdaten", 'body' => "Monica verbindet Menschen mit Notizen, Aktivitäten, Erinnerungen, wichtigen Daten und den Beziehungen um sie herum."],
                ['title' => "Sie wählen, was in die Akte kommt", 'body' => "Monica setzt auf bewusstes Erinnern statt auf unsichtbare Anreicherung. Das Ziel ist nicht, jedes verfügbare Signal aufzunehmen."],
                ['title' => "Eigentum ist Teil des Produkts", 'body' => "Monica ist quelloffen, lässt sich selbst hosten und bietet eine gehostete Variante für alle, die keinen Server betreiben wollen."],
                ['title' => "Verschiedene Leben brauchen verschiedene Strukturen", 'body' => "Monica v3 entsteht rund um Datensätze und Verbindungen, die sich stärker anpassen lassen, und behält dabei die Grundsätze des Projekts zu Datenschutz und Eigentum."],
            ],
            'currentCta' => "Sehen, was Monica behalten kann",
            'v3Cta' => "Mehr über Monica v3 lesen",
            'privacyCta' => "Datenschutzerklärung von Monica lesen",
            'finalTitle' => "Ein persönliches CRM sollte Ihnen beim Aufmerksamsein helfen und dann aus dem Weg gehen.",
            'finalBody' => "Wenn der Ansatz von Monica dazu passt, wie Sie sich an Menschen erinnern wollen, können Sie die gehostete Variante nutzen oder die quelloffene Anwendung selbst betreiben.",
            'primaryCta' => "Mit Monica beginnen",
            'secondaryCta' => "Monica auf GitHub ansehen",
        ],

        'faq' => [
            'label' => "Häufige Fragen",
            'title' => "Ein paar ehrliche Antworten, bevor Sie ein zweites Gehirn für Ihr Sozialleben bauen.",
            'items' => [
                ['q' => "Ist ein persönliches CRM unheimlich?", 'a' => [
                    "Das kann es sein. Sensible Informationen still zu sammeln, private Gespräche unbedacht zu importieren oder Menschen zu bewerten überschreitet für viele eine vernünftige Grenze.",
                    "Ein kleiner, privater Satz Notizen und Erinnerungen kann aber auch eine gewöhnliche Gedächtnisstütze sein. Was Sie sammeln, wie es dorthin kam und wie Sie es nutzen, zählt mehr als das Wort.",
                ]],
                ['q' => "Kann ich stattdessen meine Kontakte-App, meinen Kalender oder meine Notizen nutzen?", 'a' => "Ja. Wenn diese Werkzeuge das Problem lösen, bleiben Sie dabei. Ein persönliches CRM wird nützlich, wenn Sie Person, Zusammenhang, Verlauf und Nachfassen an einem Ort verbunden haben wollen."],
                ['q' => "Ist ein persönliches CRM nur für berufliches Netzwerken?", 'a' => "Nein. Manche Produkte sind vor allem für berufliche Beziehungen gebaut. Andere richten sich auf Freunde, Familie, Gemeinschaft oder eine Mischung. Die richtige Wahl hängt von den Beziehungen und Gewohnheiten ab, die Sie tatsächlich haben."],
                ['q' => "Ist Selbsthosting privater?", 'a' => "Es kann die Zahl der beteiligten Dienstleister senken und Ihnen mehr Kontrolle geben. Es richtet für Sie keine Aktualisierungen, Sicherungen, Verschlüsselung oder Zugriffsrechte ein. Datenschutz und Sicherheit hängen weiter daran, wie das System betrieben wird."],
                ['q' => "Wie viel sollte ich festhalten?", 'a' => "Beginnen Sie mit dem Minimum, das Ihr Problem löst. Daten, ein paar Notizen und gelegentlich eine Erinnerung reichen vielen Menschen. Fügen Sie Struktur erst hinzu, wenn sie ihre Pflegekosten wert ist."],
            ],
        ],
    ],

    /**
     * The templates page, "Your contacts, your way". Every picture on it is a
     * drawing of the product, so each one carries a `label` that a screen
     * reader reads instead of the drawing itself.
     *
     * The field names and field types are shared by several drawings, so they
     * are written once under `fields` and `types`.
     */
    'templates' => [
        'fields' => [
            'cake' => "Lieblingskuchen",
            'cannotEat' => "Verträgt nicht",
            'coffee' => "Kaffeebestellung",
            'shoeSize' => "Schuhgröße",
            'nameDay' => "Namenstag",
            'giftIdeas' => "Geschenkideen",
            'idea' => "Idee",
            'given' => "Schon geschenkt",
            'howWeMet' => "Wie wir uns kennengelernt haben",
        ],
        'types' => [
            'shortText' => "Kurztext",
            'longText' => "Langtext",
            'number' => "Zahl",
            'multipleChoice' => "Mehrfachauswahl",
            'recurringDate' => "Wiederkehrendes Datum",
            'repeater' => "Wiederholgruppe",
            'checkbox' => "Kontrollkästchen",
        ],
        'section' => "Kleinigkeiten, die man sich merken sollte",
        'addField' => "Feld hinzufügen",
        'fieldCount' => ":count Felder",
        'publish' => "Diese Version veröffentlichen",
        'draft' => "Entwurf",
        'published' => "Veröffentlicht",
        'friends' => "Freunde",

        'hero' => [
            'title' => "Ihre Kontakte, auf Ihre Art.",
            'lede' => "Erinnern Sie sich an das, was Ihnen wichtig ist. Bauen Sie Kontaktvorlagen mit eigenen Feldern, Abschnitten und Tabs, damit die Seite jeder Person Platz für die Details hat, die Sie festhalten möchten.",
            'cta' => "Konto erstellen",
            'label' => "Die Kontaktseite von Rachel Green in Monica, geöffnet im Tab „Kleinigkeiten“, daneben der Abschnitt der Vorlage „Freunde“, der der Seite ihre Felder gibt.",
            'meta' => "Vorlage „Freunde“ · vor 3 Jahren hinzugefügt",
            'tabs' => ["Allgemein", "Kontaktwege", "Kleinigkeiten", "Pläne"],
            'values' => [
                'cake' => "Cheesecake aus Mama’s Little Bakery, Chicago",
                'cannotEat' => ["Hummer", "Rohe Zwiebeln"],
                'coffee' => "Latte im Central Perk",
                'shoeSize' => "38",
            ],
            'story' => "Kam klatschnass in einem Hochzeitskleid ins Central Perk gestolpert, am Tag, an dem sie Barry am Altar stehen ließ. Noch in derselben Nacht zog sie bei mir ein.",
            'behind' => "Die Vorlage dahinter",
        ],

        'birthday' => [
            'title' => "Ein Geburtstag ist nützlich. Der Lieblingskuchen auch.",
            'body' => "Ein Adressbuch speichert Telefonnummern. Vielleicht möchten Sie sich aber auch merken, wie Sie sich kennengelernt haben, worauf jemand hinarbeitet oder was sie oder er nicht essen kann.",
            'close' => "Mit Monica entscheiden Sie, was auf Ihre Kontaktseiten gehört.",
            'label' => "Ein Adressbucheintrag mit einer Telefonnummer und einem Geburtstag, daneben die Seite von Ross Geller in Monica, die zusätzlich seinen Lieblingskuchen, das Kennenlernen, sein aktuelles Ziel und das, was er nicht essen kann, enthält.",
            'addressBook' => "Ein Adressbuch",
            'rows' => [
                ['label' => "Telefon", 'value' => "+1 212 555 0174"],
                ['label' => "Geburtstag", 'value' => "18. Oktober 1967"],
            ],
            'monica' => [
                ['label' => "Geburtstag", 'value' => "18. Oktober · in drei Wochen"],
                ['label' => "Lieblingskuchen", 'value' => "Karottenkuchen, extra viele Walnüsse"],
                ['label' => "Wie wir uns kennengelernt haben", 'value' => "Monicas Bruder, damals im College"],
                ['label' => "Worauf er hinarbeitet", 'value' => "Die Festanstellung an der NYU"],
                ['label' => "Verträgt nicht", 'value' => ["Kiwi", "Hummer"]],
            ],
        ],

        'people' => [
            'title' => "Verschiedene Menschen. Verschiedene Details.",
            'close' => "Erstellen Sie unterschiedliche Vorlagen für die Menschen in Ihrem Leben. Jede kann ihre eigene Struktur haben.",
            'cards' => [
                [
                    'title' => "Freunde",
                    'body' => "Ihre Lieblingsdinge, Pläne für den Sommer und die Geschichte, wie Sie sich kennengelernt haben.",
                    'label' => "Eine Kontaktseite, die aus einer Vorlage „Freunde“ entsteht, mit den Tabs Favoriten, Sommer und Unsere Geschichte.",
                    'tabs' => ["Favoriten", "Sommer", "Unsere Geschichte"],
                    'rows' => [
                        ['label' => "Band", 'value' => "Khruangbin"],
                        ['label' => "Buch", 'value' => "Was vom Tage übrig blieb"],
                        ['label' => "Sommerplan", 'value' => "Mit dem Rad an der Loire, Juli"],
                    ],
                ],
                [
                    'title' => "Familie",
                    'body' => "Die Traditionen, die ihnen am Herzen liegen, wichtige Daten und das Rezept, das sie immer wieder zu schicken versprechen.",
                    'label' => "Eine Kontaktseite, die aus einer Vorlage „Familie“ entsteht, mit den Tabs Traditionen, Daten und Rezepte.",
                    'tabs' => ["Traditionen", "Daten", "Rezepte"],
                    'rows' => [
                        ['label' => "Heiligabend", 'value' => "Austern, dann die Christmette"],
                        ['label' => "Namenstag", 'value' => "26. Juli"],
                        ['label' => "Versprochenes Rezept", 'value' => "Omas Clafoutis"],
                    ],
                ],
                [
                    'title' => "Berufliche Kontakte",
                    'body' => "Ihr Fachgebiet, wo Sie zum ersten Mal miteinander gesprochen haben, und das Thema, das Sie beim nächsten Mal aufgreifen wollten.",
                    'label' => "Eine Kontaktseite, die aus einer Vorlage für berufliche Kontakte entsteht, mit den Tabs Arbeit, Kontaktwege und Nächstes Mal.",
                    'tabs' => ["Arbeit", "Kontaktwege", "Nächstes Mal"],
                    'rows' => [
                        ['label' => "Fachgebiet", 'value' => "Lieferketten im Lebensmittelhandel"],
                        ['label' => "Erstes Gespräch", 'value' => "Lyon, bei einem Logistik-Panel"],
                        ['label' => "Beim nächsten Mal aufgreifen", 'value' => "Ihr Pilotprojekt zur Kühlkette"],
                    ],
                ],
            ],
        ],

        'room' => [
            'title' => "Schaffen Sie Platz für das, was zählt.",
            'body' => [
                "Fügen Sie Felder für Text, Daten, Zahlen oder eine Auswahl aus einer Liste hinzu. Geben Sie ihnen Namen, die für Sie Sinn ergeben.",
                "Fassen Sie zusammengehörige Felder zu Abschnitten zusammen, ordnen Sie diese Abschnitte in Tabs an und bringen Sie alles in die Reihenfolge, die Ihnen gefällt. Für Details, die mehrfach vorkommen, gibt es die Wiederholgruppe.",
            ],
            'close' => "Ein Abschnitt namens „Kleinigkeiten, die man sich merken sollte“? Völlig vernünftig.",
            'label' => "Der Vorlageneditor in Monica, mit einem Entwurf der Vorlage „Freunde“ auf der Seite „Kleinigkeiten“. Das Feld „Verträgt nicht“ ist ausgewählt, und das Feld daneben zeigt seinen Namen, seinen Typ und seine Auswahlliste.",
            'version' => "v2 · basiert auf v1",
            'saved' => "Vor 4 Sekunden gespeichert",
            'import' => "Abschnitt importieren",
            'pages' => [
                ['name' => "Allgemein", 'count' => 5],
                ['name' => "Kleinigkeiten", 'count' => 6],
                ['name' => "Pläne", 'count' => 3],
            ],
            'addPage' => "Seite hinzufügen",
            'field' => "Feld",
            'name' => "Name",
            'type' => "Typ",
            'choices' => "Auswahlmöglichkeiten",
            'choiceList' => ["Erdnüsse", "Gluten", "Schalentiere", "Milchprodukte", "Rohe Zwiebeln"],
            'addChoice' => "Auswahlmöglichkeit hinzufügen",
            'note' => "Änderungen gelten nur für diesen Entwurf.",
        ],

        'reuse' => [
            'title' => "Einmal bauen. Immer wieder nutzen.",
            'body' => [
                "Eine Vorlage gibt mehreren Kontaktseiten dieselbe Struktur. Jede Person behält ihre eigenen Informationen.",
                "Fügen Sie Ihrer Freunde-Vorlage „Wie wir uns kennengelernt haben“ hinzu, und Sie haben auf der Seite jedes Freundes Platz für eine andere Geschichte. Legen Sie für jeden Tresor eine Standardvorlage fest, damit neue Kontakte mit der passenden Struktur beginnen.",
            ],
            'label' => "Ein Feld „Wie wir uns kennengelernt haben“ in der Vorlage „Freunde“, auf den Seiten dreier Freunde mit je einer anderen Geschichte gefüllt, und die Vorlage „Freunde“ als Standard für neue Kontakte im Tresor „Freunde“.",
            'template' => "Vorlage „Freunde“",
            'stories' => [
                'Rachel' => "Im Hochzeitskleid ins Central Perk gestolpert.",
                'Ross' => "Monicas Bruder, damals im College.",
                'Joey' => "Hat auf Chandlers Anzeige für das freie Zimmer geantwortet.",
            ],
            'default' => "Standardvorlage",
            'defaultBody' => "Neue Kontakte im Tresor „Freunde“ beginnen hier",
        ],

        'versions' => [
            'title' => "Ändern Sie Ihre Meinung, ohne Ihre Notizen zu verlieren.",
            'body' => [
                "Vielleicht möchten Sie ein Detail ergänzen, ein Feld umbenennen oder einen Abschnitt verschieben. Ihre Vorlagen können sich mit Ihnen verändern.",
                "Bereiten Sie einen Entwurf vor und veröffentlichen Sie ihn, wenn er fertig ist. Bestehende Kontakte bleiben bei ihrer aktuellen Version, bis Sie sich für ein Update entscheiden.",
                "Entfernen Sie ein Feld aus einer Vorlage, bleiben die bereits eingetragenen Informationen erhalten. Sie können sie weiterhin finden, und sie erscheinen wieder auf der Seite, wenn Sie das Feld zurückholen.",
            ],
            'label' => "Der Versionsverlauf einer Vorlage, mit einem Entwurf v3, der auf die Veröffentlichung wartet, während 34 Kontakte bei v2 bleiben, und der Seite von Rachel Green, die ihre Schuhgröße aus einem entfernten Feld behält, mit einer Schaltfläche, um das Feld zurückzuholen.",
            'history' => "Versionsverlauf",
            'rows' => [
                ['version' => "v3", 'text' => "„Namenstag“ hinzugefügt, „Allergien“ in „Verträgt nicht“ umbenannt", 'status' => 'draft'],
                ['version' => "v2", 'text' => "Veröffentlicht am 2. Juni · 34 Kontakte", 'status' => 'published'],
                ['version' => "v1", 'text' => "Veröffentlicht am 9. Januar · 3 Kontakte", 'status' => null],
            ],
            'notice' => "Wenn Sie v3 veröffentlichen, bleiben 34 Kontakte bei v2, bis Sie sie aktualisieren.",
            'values' => [
                'cake' => "Cheesecake aus Mama’s Little Bakery",
                'coffee' => "Latte im Central Perk",
            ],
            'kept' => "Aus einem entfernten Feld behalten",
            'restore' => "Feld zurückholen",
        ],

        'share' => [
            'title' => "Teilen Sie die Vorlage. Behalten Sie die Details für sich.",
            'body' => [
                "Etwas Nützliches gebaut? Exportieren Sie eine ganze Vorlage oder einen einzelnen Abschnitt, damit jemand anderes sie in sein Konto importieren kann.",
                "Die Datei enthält die Struktur, die Sie gebaut haben, samt Beschriftungen und Auswahllisten. Ihre Kontakte und deren Informationen bleiben bei Ihnen.",
            ],
            'label' => "Export des Abschnitts „Kleinigkeiten, die man sich merken sollte“. Die Datei enthält den Abschnitt, seine sechs Feldbeschriftungen und Typen sowie die Auswahlliste „Verträgt nicht“. Ihre 34 Kontakte und alles, was auf ihren Seiten steht, bleiben bei Ihnen.",
            'export' => "Diesen Abschnitt exportieren",
            'inFile' => "In der Datei",
            'inFileItems' => ["Der Abschnitt und sein Name", "6 Feldbeschriftungen und Typen", "Die Auswahlliste „Verträgt nicht“"],
            'stays' => "Bleibt bei Ihnen",
            'staysItems' => ["Ihre 34 Kontakte", "Alles, was auf ihren Seiten steht"],
            'file' => "kleinigkeiten-die-man-sich-merken-sollte.json · 3 KB",
            'download' => "Herunterladen",
        ],
    ],

    'footer' => [
        // The closing line ends every page, so it is two short sentences rather
        // than a pitch. Each one is its own line.
        'closing' => ["Monica erinnert sich.", "Sie gehen raus."],
        'start' => "Mit Monica beginnen",
        'github' => "Auf GitHub ansehen",

        'tagline' => "Quelloffenes persönliches CRM. AGPL-3.0.",
        'productLabel' => "Produkt",
        'developersLabel' => "Entwickler",
        'companyLabel' => "Unternehmen",
        'personalCrm' => "Was ist ein persönliches CRM?",
        'changelog' => "Änderungsprotokoll",
        'mcp' => "MCP",
        'api' => "API",
        'contactSales' => "Vertrieb kontaktieren",
        'privacy' => "Datenschutz",
        'terms' => "Nutzungsbedingungen",
        'team' => "Team",

        'art' => "Eine Wiese an einem See, mit Pandas, die im Gras faulenzen und in den Bäumen dösen",
        'copyright' => "© :year Monica. Es wurden keine Pandas getrackt.",
        'languageLabel' => "Sprache wechseln",
    ],

    'blog' => [
        'title' => "Blog",
        'lede' => "Notizen zum Bau von Monica, zum Schutz persönlicher Daten und zur kleinen Mechanik des Kontakthaltens.",

        'allPosts' => "Alle Beiträge",
        'keepReading' => "Weiterlesen",
        'onThisPage' => "Auf dieser Seite",
        'latest' => "Neueste Beiträge",

        'readingTime' => ":count Min. Lesezeit",

        // Bisher haben alle Beiträge dieselbe Autorenschaft. Die Bezeichnung
        // steht hier und nicht im Kopf jedes Beitrags, weil sie eine
        // Beschriftung der Website ist und als solche übersetzt gehört.
        'authorRole' => "Gründer",

        'copyLink' => "Link kopieren",
        'copyLinkDone' => "Kopiert",

        'showing' => "Beiträge :from bis :to von :total",
        'pageOf' => "Seite :page von :total",
        'rssFeed' => "RSS-Feed",
        'newerPosts' => "Neuere Beiträge",
        'olderPosts' => "Ältere Beiträge",

        'tryMonica' => [
            'title' => "Monica ausprobieren",
            'body' => "Ein privates, quelloffenes persönliches CRM, um sich an die Menschen zu erinnern, die zählen. Selbst hosten, oder uns machen lassen.",
            'bodyPost' => "Behalten Sie die Menschen in Ihrem Leben im Blick, ohne sie einer Werbedatenbank zu überlassen.",
            'cta' => "Loslegen",
            'note' => "30 Tage testen · Keine Kreditkarte nötig",
        ],


        'openSource' => [
            'title' => "Open Source",
            'body' => "Monica ist seit dem ersten Tag quelloffen. Lesen Sie den Code, betreiben Sie Ihre eigene Instanz, schicken Sie einen Patch.",
        ],
    ],

    /**
     * Übersetzung der auf monicahq.com/terms veröffentlichten Bedingungen.
     * Maßgeblich ist die englische Fassung in lang/en.php: sie wurde
     * veröffentlicht, und sie ist zuerst zu ändern.
     */
    'terms' => [
        'title' => "Unsere Nutzungsbedingungen",
        'updated' => "Letzte Aktualisierung: :date",
        'updatedOn' => "12. April 2018",

        'sections' => [
            [
                'title' => "Umfang des Dienstes",
                'blocks' => [
                    ['text' => "Monica unterstützt die folgenden Browser:"],
                    ['items' => [
                        "Internet Explorer (11+)",
                        "Firefox (50+)",
                        "Chrome (neueste Version)",
                        "Safari (neueste Version)",
                    ]],
                    ['text' => "Ich garantiere nicht, dass die Website mit anderen Browsern funktioniert, aber sehr wahrscheinlich tut sie es einfach."],
                ],
            ],
            [
                'title' => "Rechte",
                'blocks' => [
                    ['text' => "Sie müssen bei der Registrierung eines Kontos nicht Ihren echten Namen angeben. Sie brauchen allerdings eine gültige E-Mail-Adresse, wenn Sie Ihr Konto auf die kostenpflichtige Version umstellen oder Erinnerungen per E-Mail erhalten möchten."],
                    ['text' => "Sie haben das Recht, Ihr Konto jederzeit zu schließen."],
                    ['text' => "Sie haben das Recht, Ihre Daten jederzeit im SQL-Format zu exportieren."],
                    ['text' => "Ihre Daten werden anderen Nutzerinnen und Nutzern nicht absichtlich gezeigt und nicht an Dritte weitergegeben."],
                    ['text' => "Ihre personenbezogenen Daten werden ohne Ihre Einwilligung an niemanden weitergegeben."],
                    ['text' => "Ihre Daten werden stündlich gesichert."],
                    ['text' => "Sollte der Betrieb der Website eingestellt werden, erhalten Sie die Gelegenheit, alle Ihre Daten zu exportieren, bevor sie verschwindet."],
                    ['text' => "Alle neuen Funktionen, die die Privatsphäre berühren, sind ausdrücklich freiwillig."],
                ],
            ],
            [
                'title' => "Pflichten",
                'blocks' => [
                    ['text' => "Sie werden die Website nicht dazu verwenden, nach kanadischem Recht (oder nach irgendeinem Recht) illegale Informationen oder Daten zu speichern."],
                    ['text' => "Sie müssen mindestens 18 Jahre alt sein, um ein Konto anzulegen und die Website zu nutzen."],
                    ['text' => "Sie dürfen die Website nicht missbrauchen, indem Sie wissentlich Schadcode veröffentlichen, der Ihnen oder anderen Nutzerinnen und Nutzern schaden könnte."],
                    ['text' => "Sie dürfen die Website ausschließlich für Zwecke nutzen, die allgemein als moralisch gut gelten."],
                    ['text' => "Sie dürfen keine automatisierten Anfragen an die Website stellen."],
                    ['text' => "Sie dürfen das Einladungssystem nicht missbrauchen."],
                    ['text' => "Für die Sicherheit Ihres Kontos sind Sie selbst verantwortlich."],
                    ['text' => "Ich behalte mir das Recht vor, Konten zu schließen, die das System missbrauchen (etwa Tausende Kontakte mit Hunderttausenden Erinnerungen) oder es in unangemessener Weise nutzen."],
                ],
            ],
            [
                'title' => "Weitere wichtige rechtliche Hinweise",
                'blocks' => [
                    ['text' => "So sehr ich einen großartigen Dienst anbieten möchte, gibt es einige Dinge, die ich zu diesem Dienst nicht versprechen kann. Die Dienste und die Software werden zum Beispiel „wie besehen“ und auf Ihr eigenes Risiko bereitgestellt, ohne ausdrückliche oder stillschweigende Gewährleistung oder Zusicherung jeglicher Art. Ich schließe außerdem jede Gewährleistung der Marktgängigkeit, der Eignung für einen bestimmten Zweck und der Nichtverletzung von Rechten Dritter aus. Monica übernimmt keine Verantwortung für Schäden an Ihrem Computersystem, für Datenverlust oder Datenbeschädigung oder für sonstige Schäden, die sich aus Ihrem Zugriff auf die Dienste oder die Software oder aus deren Nutzung ergeben."],
                    ['text' => "Diese Bedingungen können sich jederzeit ändern, aber ich werde mich dabei nie wie ein Arschloch verhalten. Diese Website zu betreiben ist für mich ein wahr gewordener Traum, und ich hoffe, es so lange tun zu können, wie ich kann."],
                ],
            ],
        ],
    ],

    /**
     * Übersetzung der auf monicahq.com/privacy veröffentlichten Richtlinie.
     * Maßgeblich ist die englische Fassung in lang/en.php: sie wurde
     * veröffentlicht, und sie ist zuerst zu ändern.
     */
    'privacy' => [
        'title' => "Unsere Datenschutzrichtlinie",
        'updated' => "Letzte Aktualisierung: :date",
        'updatedOn' => "30. Mai 2019",

        'sections' => [
            [
                'blocks' => [
                    ['text' => "Monica ist ein Open-Source-Projekt. Die gehostete Version hat einen kostenpflichtigen Tarif, über den wir Geld einnehmen, um Server und zusätzliche Dienste zu bezahlen. Das Hauptziel ist aber nicht, Geld zu verdienen (sonst hätten wir den Quellcode nicht offengelegt)."],
                    ['text' => "Monica gibt es in zwei Varianten: Sie können unsere gehostete Version nutzen oder sie herunterladen und selbst betreiben. Im zweiten Fall verfolgen wir überhaupt nichts. Wir wissen nicht einmal, dass Sie das Produkt heruntergeladen haben. Machen Sie damit, was Sie wollen (aber halten Sie sich an das Recht Ihres Landes)."],
                    ['text' => "Wenn Sie Ihr Konto in unserer gehosteten Version anlegen, geben Sie der Website Informationen über sich, die wir erheben. Dazu gehören Ihr Name, Ihre E-Mail-Adresse und Ihr Passwort, das vor der Speicherung verschlüsselt wird. Weitere personenbezogene Daten speichern wir nicht."],
                    ['text' => "Wenn Sie sich beim Dienst anmelden, verwenden wir Cookies, um Ihre Anmeldedaten zu speichern. Das ist der einzige Zweck der Cookies."],
                    ['text' => "Monica läuft auf Fortrabbit, und außer den Beschäftigten von Fortrabbit haben nur wir Zugriff auf diese Server."],
                    ['text' => "Wir sichern die Datenbank stündlich."],
                    ['text' => "Ihr Passwort wird mit bcrypt verschlüsselt, einem sehr sicheren Verfahren zum Hashen von Passwörtern. Sie können für Ihr Konto zusätzlich die Zwei-Faktor-Authentifizierung aktivieren, wenn Sie eine weitere Sicherheitsebene möchten. Abgesehen von diesen Verschlüsselungsmechanismen sind Ihre Daten in der Datenbank nicht verschlüsselt. Wer Zugriff auf die Datenbank erlangt, kann Ihre Daten lesen. Wir tun unser Bestes, damit das nie passiert, aber es kann passieren."],
                    ['text' => "Kommt es zu einer Datenpanne, benachrichtigen wir die betroffenen Nutzerinnen und Nutzer, um sie zu warnen."],
                    ['text' => "Transaktions-E-Mails werden über Postmark zugestellt."],
                    ['text' => "Wir verwenden ein Open-Source-Werkzeug namens Sentry, um Fehler im Produktivbetrieb zu verfolgen. Deren Dienst zeichnet die Fehler auf, hat aber außer der Konto-ID, mit der ich das Problem nachvollziehen kann, keinen Zugriff auf Informationen."],
                    ['text' => "Die Website zeigt derzeit keine Werbung und wird das auch nie tun. Sie verkauft auch keine Daten an Dritte, mit oder ohne Ihre Einwilligung, und hat das auch nicht vor. Wir sind schlicht dagegen. Scheiß auf Werbung."],
                    ['text' => "Wir setzen keine Tracking-Dienste Dritter wie Google Analytics oder Intercom ein, die Nutzerverhalten oder Nutzerdaten verfolgen, weder auf der Marketing-Website noch in der gehosteten Version. Wir lehnen deren Prinzipien zutiefst ab, denn sie würden diese Daten nutzen, um ein Profil von Ihnen zu erstellen, was wir vollkommen ablehnen."],
                    ['text' => "Alle Daten, die Sie in Monica ablegen, gehören Ihnen. Wir haben keinerlei Rechte daran. Bitte legen Sie dort nichts Illegales ab, sonst bekommen wir Ärger."],
                    ['text' => "Alle Informationen über die Kontakte, die Sie in Monica ablegen, sind allein Ihre. Wir verknüpfen keine Informationen zwischen Konten und verwenden keine Information aus einem Konto, um ein anderes zu füllen (anders als etwa Facebook)."],
                    ['text' => "Für Zahlungen zum Zugang zur kostenpflichtigen Version nutzen wir Stripe. Wir speichern auf unseren Servern weder Kreditkartendaten noch irgendetwas zu den Transaktionen selbst. Wie es die quelloffene Bibliothek vorsieht, mit der wir Zahlungen abwickeln (Laravel Cashier), speichern wir jedoch die letzten 4 Ziffern der Kreditkarte und den Namen des Anbieters (VISA oder MasterCard). Als Nutzerin oder Nutzer werden Sie bei Stripe über eine von dort erzeugte Zufallsnummer identifiziert."],
                    ['text' => "Zu den Zahlungen: Sie können jederzeit auf den kostenlosen Tarif zurückwechseln. Wenn Sie das tun, wird Stripe automatisch aktualisiert, und wir haben keine Möglichkeit mehr, Ihnen etwas zu berechnen, selbst wenn wir es wollten. Je weniger wir mit Zahlungsdaten zu tun haben, desto glücklicher sind wir."],
                    ['text' => "Sie können Ihre Daten jederzeit exportieren. Sie können dafür auch die API nutzen, wenn Sie wissen, wie das geht. Und Sie können uns bitten, das selbst zu übernehmen und Ihnen die Daten zuzuschicken. Ihre Daten werden im SQL-Format exportiert."],
                    ['text' => "Wenn Sie Ihr Konto schließen, löschen wir alle Ihre personenbezogenen Daten sofort aus der Produktivdatenbank. In den Sicherungen, die wir 30 Tage aufbewahren, bleiben Ihre Daten jedoch enthalten. Nach 30 Tagen werden sie vollständig gelöscht. Sie haben das selbst in der Hand, aber wir können ein Konto auf Wunsch auch für Sie löschen."],
                    ['text' => "In bestimmten Situationen können wir verpflichtet sein, personenbezogene Daten auf rechtmäßiges Verlangen von Behörden offenzulegen, etwa zur Erfüllung von Anforderungen der nationalen Sicherheit oder der Strafverfolgung. Wir hoffen einfach, dass das nie passiert."],
                    ['text' => "Wenn Sie gegen die Nutzungsbedingungen verstoßen, schließen wir Ihr Konto und teilen Ihnen das mit. Wenn Sie sich aber an den Grundsatz „sei kein Arschloch“ halten, sollte Ihnen nie etwas passieren und wir sind alle zufrieden."],
                    ['text' => "Monica verwendet ausschließlich Open-Source-Projekte, die überwiegend auf Github liegen."],
                    ['text' => "Wir werden diese Datenschutzrichtlinie aktualisieren, sobald wir neue Praktiken im Umgang mit Informationen einführen. Falls das geschieht, schicken wir eine E-Mail an die in Ihrem Konto hinterlegte Adresse. Wir werden uns dabei nie wie Arschlöcher verhalten und niemals, wirklich niemals, etwas in unsere Arbeit einführen, das Ihr Recht auf absolute Privatsphäre beeinträchtigt."],
                ],
            ],
        ],
    ],

    'team' => [
        'eyebrow' => "Team",
        'title' => "Monica ist ein Team aus 2 Personen. Mit Hunderten von Mitwirkenden.",

        'stats' => [
            ['value' => "2016", 'label' => "Erste Zeile Code"],
            ['value' => "Montreal", 'label' => "Hauptsitz"],
            ['value' => "2", 'label' => "Offizielle Mitglieder"],
            ['value' => "Hunderte", 'label' => "Open-Source-Mitwirkende"],
            ['value' => "Millionen", 'label' => "Verwaltete Kontakte"],
        ],

        'missionLabel' => "Unsere Mission",
        'mission' => [
            "Unsere Mission ist es, Technik so einzusetzen, dass sie menschlichen Beziehungen nicht schadet, wie es große soziale Netzwerke tun können.",
            "In einer Zeit, in der Menschen Tausende virtueller Freunde haben, wollen wir ein Werkzeug anbieten, das hilft, die Beziehungen zu nur einigen wenigen davon zu stärken. Jede Freundschaft soll wirklich zählen.",
            "Monica entstand aus einem persönlichen Bedürfnis: mitzubekommen, was Freunde in anderen Ländern gerade in ihrem Leben taten. Nachdem die erste Version des Werkzeugs fertig war, habe ich beschlossen, den Quellcode offenzulegen und das Projekt auf Hacker News vorzustellen. Der Rest ist Geschichte.",
            "Monica ist heute ein gesundes Open-Source-Projekt. Wir hatten das Glück, eine großartige Community zu bekommen, mit Dutzenden Mitwirkenden und Hunderten Code-Beiträgen. Es wirft auch ein wenig Geld ab: Jeder Dollar, den wir mit diesem Projekt verdienen, fließt zurück in das Projekt, um die Rechnungen zu bezahlen und die Entwicklung voranzubringen.",
            "Danke, dass Sie sich das Projekt ansehen.",
        ],
        'signature' => "Regis Freyd und Alexis Saettler",
    ],

    /**
     * Die drei Funktionsseiten, die sich eine Tab-Leiste und eine abschließende
     * Reihe teilen.
     *
     * Der Text ist der der alten Seite, Satz für Satz: Es ist die Marketing-
     * Copy des Eigentümers, und dieser Aufbau ist eine Neugestaltung, keine
     * Neufassung. Die Anmerkungen waren dort rote Etiketten rund um den
     * Screenshot; hier stehen sie als gewöhnliche Liste daneben, damit sie ein
     * Telefon, einen Screenreader und eine Übersetzung überstehen, die länger
     * ausfällt als das Englische.
     */
    'features' => [
        'tabsLabel' => "Funktionen",
        'tabs' => [
            'features' => "Kontaktverwaltung",
            'featuresDashboard' => "Umfassendes Dashboard",
            'featuresJournal' => "Journal",
        ],

        'calloutsLabel' => "Auf diesem Bildschirm",

        'contacts' => [
            'title' => "Wie Menschen im Blick behalten, was wichtig ist.",
            'lede' => "Halten Sie fest, was Sie über die Menschen wissen, die Ihnen wichtig sind. Und vergessen Sie nie wieder eine Kleinigkeit über sie.",
            'imageAlt' => "Ein Monica-Kontakteintrag: Beziehungen, Kontaktdaten, Notizen, Anrufe, Erinnerungen und Geschenke.",
            'callouts' => [
                "Sehen Sie auf einen Blick die wichtigen Informationen zu Ihrem Kontakt",
                "Halten Sie die Namen von Partnerinnen und Partnern, Kindern und sogar Haustieren fest.",
                "Fügen Sie alle Wege hinzu, diese Person zu erreichen: Telefon, E-Mail, Whatsapp-Name und vieles mehr.",
                "Fügen Sie Notizen zu dieser Person hinzu, die nur Sie sehen.",
                "Halten Sie jedes Telefonat mit Menschen fest, von denen Sie selten hören, damit Sie später daran erinnert werden, sie anzurufen.",
                "Fügen Sie Erinnerungen an wichtige Daten oder Ereignisse hinzu. Einige Erinnerungen werden automatisch für Sie angelegt (Geburtstage zum Beispiel).",
                "Verwalten Sie verschenkte oder geplante Geschenke. Halten Sie fest, ob Sie Geld schulden oder ob Ihnen Geld geschuldet wird.",
            ],
        ],

        'dashboard' => [
            'title' => "Sehen Sie schnell, was wichtig ist und was als Nächstes kommt",
            'lede' => "Damit Sie sich auf das konzentrieren können, was Ihnen wirklich wichtig ist.",
            'imageAlt' => "Das Dashboard von Monica: zuletzt angesehene Kontakte, kommende Erinnerungen, bevorzugte Notizen und protokollierte Anrufe.",
            'callouts' => [
                "Sehen Sie, wen Sie zuletzt angesehen haben",
                "Die Liste der nächsten geplanten Ereignisse oder Erinnerungen zu Ihren Kontakten",
                "Lesen Sie Ihre bevorzugten Notizen zu Ihren Kontakten",
                "Behalten Sie die Anrufe mit den Menschen im Blick, die Ihnen wichtig sind",
            ],
        ],

        'journal' => [
            'title' => "Dokumentieren Sie Ihr Leben. Und sehen Sie, wie Sie sich entwickeln.",
            'lede' => "Schreiben Sie Journaleinträge. Halten Sie kurz fest, wie Ihr Tag verlaufen ist. Automatische Aktivitätsprotokolle.",
            'imageAlt' => "Das Journal von Monica: der Verlauf des Tages, die protokollierten Aktivitäten mit Kontakten und geschriebene Einträge.",
            'callouts' => [
                "Halten Sie fest, wie Ihr Tag verlaufen ist.",
                "Das Journal listet alle Aktivitäten mit Ihren Kontakten automatisch auf.",
                "Im Journal können Sie auch eigene Einträge schreiben. Betrachten Sie es als Ihr privates Online-Tagebuch.",
                "In einer künftigen Version zeigen wir schöne Statistiken zu Ihren Tagen und Aktivitäten.",
            ],
        ],

        'pillars' => [
            [
                'title' => "Alles an einem Ort",
                'body' => "Verwalten, ordnen und verfolgen Sie alle Interaktionen mit Ihren Kontakten an einem zentralen Ort.",
            ],
            [
                'title' => "Im Web",
                'body' => "Greifen Sie einfach auf Monica zu, gehostet auf Ihren oder unseren Servern.",
            ],
            [
                'title' => "Moderne Oberfläche",
                'body' => "Monica ist schön und sehr einfach zu bedienen.",
            ],
        ],

        'api' => [
            'title' => "Geliebt von Nutzern. Verehrt von Entwicklern.",
            'body' => "Unsere Nutzerinnen und Nutzer schätzen, wie schnell und einfach das Produkt ist. Entwickler lieben die API, mit der sie Monica nach eigenem Ermessen automatisieren können.",
            'body2' => "Importieren oder exportieren Sie Ihre Kontakte und deren Daten mühelos über die leistungsfähige REST-API von Monica, oder automatisieren Sie damit viele Bereiche der Anwendung.",
            'imageAlt' => "Die API-Routen von Monica, geöffnet in einem Code-Editor.",
        ],
    ],

    'notFound' => [
        'title' => "Seite nicht gefunden.",
        'body' => "Diese Adresse führt nirgendwohin. Sie wurde vielleicht verschoben, oder es gab sie nie.",
    ],
];
