<?php

/**
 * German copy. Siezen throughout: Monica addresses an adult about their private
 * relationships, and duzen would read as marketing familiarity. German runs
 * roughly 30% longer than English, which the layouts already allow for.
 */

return [
    'meta' => [
        'imageAlt' => "Monica: Erinnern Sie sich an die Menschen, die Ihnen wichtig sind. Das quelloffene persönliche CRM.",

        'home' => [
            'title' => "Monica — das quelloffene persönliche CRM",
            'description' => "Monica hilft Ihnen, sich an die Menschen zu erinnern, die Ihnen wichtig sind: was in ihrem Leben passiert, wichtige Daten, frühere Gespräche und wann Sie sich wieder melden sollten. Privat, quelloffen, selbst hostbar.",
        ],

        'pricing' => [
            'title' => "Monica-Preise — ein gehosteter Tarif, oder kostenlos selbst hosten",
            'description' => "Gehostete Monica kostet 9 USD pro Monat oder 90 USD pro Jahr, mit unbegrenzten Kontakten und ohne Preis pro Kontakt. Oder hosten Sie die quelloffene Anwendung kostenlos auf Ihrer eigenen Infrastruktur.",
        ],

        'privacy' => [
            'title' => "Datenschutzrichtlinie — Monica",
            'description' => "Wie Monica mit Ihren Daten umgeht: was wir erheben, wo es gespeichert wird, wer es sehen kann und was beim Schließen Ihres Kontos passiert. Keine Werbung, keine Tracker, kein Datenverkauf.",
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
            'description' => "Monica v3 ist ein vollständiger Neubau des quelloffenen persönlichen CRM: Einträge, die Sie selbst gestalten, ein mit allem verbundenes Journal, eine vollständige API und eine echte mobile Erfahrung. Weiterhin quelloffen, jetzt unter MIT-Lizenz. Vor Ende 2026.",
        ],
    ],

    'announcement' => [
        'headline' => "Monica v3 kommt vor Ende 2026.",
        'detail' => "Von Grund auf neu gebaut. Weiterhin quelloffen. Jetzt unter MIT-Lizenz.",
        'cta' => "Sehen, was kommt",
    ],

    'nav' => [
        'label' => "Haupt",
        'product' => "Produkt",
        'v3' => "Monica v3",
        'pricing' => "Preise",
        'openSource' => "Quelloffen",
        'blog' => "Blog",
        'docs' => "Dokumentation",
        'signIn' => "Anmelden",
        'getStarted' => "Loslegen",
        'stars' => ":count Sterne",
    ],

    'hero' => [
        'eyebrow' => "Das quelloffene persönliche CRM",
        'title' => "Erinnern Sie sich an die Menschen, die Ihnen wichtig sind.",
        'lede' => "Monica hilft Ihnen, den Überblick über die Menschen in Ihrem Leben zu behalten — was sie Ihnen erzählen, welche Momente Sie teilen und welche Versprechen Sie sich fest vorgenommen hatten.",
        'lede2' => "Privat von Grund auf. Quelloffen. Selbst hostbar. Keine Werbung, kein Datenverkauf, keine peinlichen Benachrichtigungen zur „Aktivierung“.",
        'primaryCta' => "Mit Monica beginnen",
        'githubCta' => "Auf GitHub ansehen · :count Sterne",
        'note' => "Selbst hosten ist kostenlos · Gehostete Version verfügbar · MIT-lizenziert ab v3",
    ],

    'proof' => [
        'starsLabel' => "Sterne auf GitHub",
        'since' => "2017",
        'sinceLabel' => "Quelloffen seit",
        'featured' => "Repository der Woche",
        'featuredLabel' => "Mehrfach hervorgehoben",
        'launch' => "Product Hunt",
        'launchLabel' => "Beachteter Start",
        'aside' => "Offenbar vergessen noch einige andere Menschen Geburtstage.",
    ],

    'notALead' => [
        'title' => "Ein CRM, in dem niemand ein Lead ist.",
        'body' => "Klassische CRM-Systeme helfen Unternehmen, sich an Kunden zu erinnern. Monica hilft Ihnen, sich an Freunde, Familie, Kolleginnen, Nachbarn und alle anderen zu erinnern, die Ihnen wichtig sind.",
        'aside' => "Aufmerksamkeit fällt leichter, wenn Ihr Gedächtnis eine Sicherung hat.",
        'listTitle' => "Halten Sie die Details fest, die Sie sonst vergessen würden:",
        'items' => [
            "was gerade in ihrem Leben passiert;",
            "woher Sie sich kennen;",
            "wichtige Daten;",
            "frühere Gespräche;",
            "Geschenke, Schulden, Versprechen und Ideen;",
            "Erinnerungen, sich wieder zu melden.",
        ],
    ],

    'showcase' => [
        'title' => "Alles über einen Menschen. An einem Ort.",
        'aside' => "Menschen sind kompliziert. Ihre Einträge dürfen deshalb auch ein wenig kompliziert sein.",
        'card' => [
            'name' => "Élise Aubert",
            'meta' => "Schwester · Lyon · Zuletzt heute gesprochen",
            'badge' => "Familie",
            'birthdayLabel' => "Geburtstag",
            'birthday' => "18. März · wird in 7 Monaten 39",
            'metLabel' => "Wie Sie sich kennen",
            'met' => "Von Geburt an",
            'relationshipsLabel' => "Beziehungen",
            'relationships' => [
                ['initials' => "MC", 'label' => "Élise ist Marcs Partnerin", 'meta' => "10 Jahre"],
                ['initials' => "LA", 'label' => "Élise ist Léas Elternteil", 'meta' => "Seit 2019"],
            ],
            'recentlyLabel' => "Kürzlich",
            'timeline' => [
                [
                    'nature' => 'meal',
                    'title' => "Mittagessen im Le Petit Sud",
                    'meta' => "Heute · sie denkt darüber nach, zurück nach Lyon zu ziehen",
                ],
                [
                    'nature' => 'call',
                    'title' => "Anruf wegen Georges",
                    'meta' => "2. August · 22 Minuten",
                ],
            ],
            'reminder' => "Fragen, wie das Vorstellungsgespräch lief",
            'reminderMeta' => "Erinnerung · morgen",
        ],
        'features' => [
            [
                'icon' => 'relationship',
                'title' => "Beziehungen",
                'body' => "Verstehen Sie Familien, Partnerschaften, Freundschaften, Kolleginnen und die Verbindungen dazwischen.",
            ],
            [
                'icon' => 'journal',
                'title' => "Notizen und Journaleinträge",
                'body' => "Erinnern Sie sich an das Geschehene, ohne durch sechs Messenger zu scrollen.",
            ],
            [
                'icon' => 'reminder',
                'title' => "Erinnerungen",
                'body' => "Ihre Mutter anrufen. Ihrem Freund gratulieren. Nach dem Vorstellungsgespräch fragen. Monica erinnert sich; die Anerkennung bleibt bei Ihnen.",
            ],
            [
                'icon' => 'activity',
                'title' => "Aktivitäten",
                'body' => "Führen Sie eine Historie von Essen, Anrufen, Reisen, Ereignissen und den kleinen Momenten, die eine Beziehung ausmachen.",
            ],
            [
                'icon' => 'panel',
                'title' => "Eigene Informationen",
                'body' => "Halten Sie die Details fest, die für Sie zählen, nicht die Felder, die ein Vertriebs-CRM für wichtig hält.",
            ],
        ],
    ],

    'notSocial' => [
        'title' => "Bewusst kein soziales Netzwerk.",
        'body' => "Monica empfiehlt keine Freunde, bewertet keine Beziehungen, blendet keine Werbung ein und teilt niemandem mit, dass Sie sein Profil angesehen haben.",
        'body2' => "Es ist ein privater Ort für Ihre Erinnerungen und Ihre Beziehungen.",
        'quote' => "Kein Feed. Keine Follower. Keine Marken, die eine Persönlichkeit vortäuschen.",
    ],

    'openSource' => [
        'title' => "Ihres heißt Ihres.",
        'body' => "Monica ist seit dem ersten Tag quelloffen. Daran ändert sich nichts.",
        'aside' => "Vertrauen ist nützlich. Quellcode ist besser.",
        'sourceCta' => "Quellcode ansehen",
        'hostingCta' => "Anleitung zum Selbst-Hosten lesen",
        'v3Cta' => "Alles ansehen, was mit Monica v3 kommt",
        'listTitle' => "Mit Monica v3:",
        'items' => [
            "bleibt das Projekt vollständig quelloffen;",
            "wird die Lizenz zu MIT;",
            "können Sie es auf Ihrem eigenen Server betreiben;",
            "nutzt das gehostete Produkt dieselbe Anwendung;",
            "lassen sich Ihre Daten exportieren;",
            "kann der Code eingesehen, verändert und geforkt werden.",
        ],
    ],

    'v3' => [
        'title' => "Monica wird erwachsen. Einigermaßen.",
        'body' => "Monica v3 wird für das kommende Jahrzehnt von Grund auf neu gebaut.",
        'body2' => "Sie wird flexibler, erweiterbarer und deutlich besser auf dem Telefon — und behält dabei die Prinzipien von Privatsphäre und Eigentum, die Monica überhaupt erst nützlich gemacht haben.",
        'listLabel' => "Kommt in v3",
        'features' => [
            [
                'icon' => 'panel',
                'title' => "Einträge, die Sie gestalten",
                'body' => "Wählen Sie die Abschnitte und Felder eines Eintrags, statt unsere Meinung für immer zu übernehmen.",
            ],
            [
                'icon' => 'relationship',
                'title' => "Mehr als Kontakte",
                'body' => "Verbinden Sie Menschen mit Haustieren, Unternehmen, Wohnungen, Fahrzeugen, Projekten und allem anderen, was zu ihrem Leben gehört.",
            ],
            [
                'icon' => 'journal',
                'title' => "Ein Journal, das mit allem verbunden ist",
                'body' => "Halten Sie einen Moment einmal fest und verknüpfen Sie ihn mit den beteiligten Personen, Einträgen, Daten und Erinnerungen.",
            ],
            [
                'icon' => 'tag',
                'title' => "Strukturen aus der Community",
                'body' => "Installieren Sie nützliche Strukturen anderer Monica-Nutzerinnen und passen Sie Ihre Kopie frei an.",
            ],
            [
                'icon' => 'code',
                'title' => "Eine vollständige API und ein MCP-Server",
                'body' => "Alles, was über die Oberfläche verfügbar ist, sollte auch programmatisch verfügbar sein.",
            ],
            [
                'icon' => 'phone',
                'title' => "Eine echte mobile Erfahrung",
                'body' => "Zuerst eine responsive Webanwendung, danach native Anwendungen für iOS und Android.",
            ],
        ],
        'cta' => "Monica v3 entdecken",
        'note' => "Erwartet vor Ende 2026 · Der Beta-Zugang öffnet sich schrittweise",
    ],

    /** Die Seite /v3. Der Schlüssel `v3` oben ist der Abschnitt auf der Startseite. */
    'v3page' => [
        'badge' => "Monica v3 · In Entwicklung",
        'timing' => "Kommt vor Ende 2026",
        'title' => "Monica wird für die nächsten zehn Jahre neu gebaut.",
        'lede' => "Monica hat Tausenden Menschen geholfen, sich an das zu erinnern, was bei den Menschen in ihrem Leben zählt. Jetzt wird sie von Grund auf neu gebaut: flexibler, privater, leichter erweiterbar und besser auf jedem Bildschirm.",
        'lede2' => "Sie bleibt quelloffen. Sie wechselt zur MIT-Lizenz. Und alles, was Monica von Anfang an lohnend gemacht hat, bleibt erhalten.",

        'form' => [
            'label' => "E-Mail-Adresse",
            'placeholder' => "sie@beispiel.de",
            'cta' => "Benachrichtigen Sie mich",
            'note' => "Eine E-Mail, wenn Monica v3 erscheint. Kein Newsletter, kein Tracking-Pixel, kein Lärm.",
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
                    'title' => "Quelloffen, jetzt unter MIT",
                    'body' => "Monica bleibt vollständig quelloffen und selbst hostbar. Version 3 verwendet die MIT-Lizenz und ist damit einfacher zu verstehen, wiederzuverwenden, zu erweitern und zu ergänzen.",
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
                    'icon' => 'arrowRight',
                    'title' => "Bestehende Nutzerinnen und Nutzer bleiben nicht zurück",
                    'body' => "Das Ziel ist ein klarer Migrationsweg für bestehende Monica-Konten, einschließlich Kontakten, Notizen, Erinnerungen und anderen wesentlichen Informationen.",
                ],
            ],
        ],

        'follow' => [
            'title' => "Verfolgen Sie den Neubau von Anfang an.",
            'body' => "Monica v3 ist noch in Entwicklung, und viele wichtige Entscheidungen fallen öffentlich. Tragen Sie sich in die Startliste ein oder folgen Sie dem Repository, um die Arbeit mitzuverfolgen.",
            'note' => "Quelloffen · MIT-Lizenz · Öffentlich entwickelt",
            'primaryCta' => "Start-E-Mail erhalten",
            'secondaryCta' => "Monica auf GitHub folgen",
        ],
    ],

    'founder' => [
        'title' => "Entstanden, weil mein Gedächtnis schlecht ist.",
        'body' => "Ich habe Monica gebaut, weil ich immer wieder Details über Menschen vergessen habe, die mir wirklich wichtig waren.",
        'body2' => "Nicht, weil sie unwichtig gewesen wären. Sondern weil das Leben voll ist, das Gedächtnis unzuverlässig und das menschliche Gehirn offenbar ohne Suchfunktion ausgeliefert wurde.",
        'body3' => "Monica begann 2017 als persönliches Projekt. Inzwischen ist daraus eines der meistbeachteten quelloffenen Projekte für persönliche CRM geworden, getragen und verbessert von Mitwirkenden aus aller Welt.",
        'signature' => "— Régis, Gründer und Mensch, der gelegentlich immer noch Dinge vergisst",
    ],

    'faq' => [
        'title' => "Fragen, die wirklich gestellt werden.",
        'items' => [
            [
                'q' => "Ist Monica wirklich kostenlos?",
                'a' => "Der Code ist kostenlos und bleibt es. Sie können ihn ohne Zahlung auf Ihrem eigenen Server betreiben. Die gehostete Version ist ein kostenpflichtiges Abonnement, weil Server und Sicherungen Geld kosten, und weil sie die Arbeit am quelloffenen Projekt finanziert.",
            ],
            [
                'q' => "Muss ich technisch versiert sein?",
                'a' => "Für die gehostete Version nicht: Sie legen ein Konto an und beginnen. Selbst hosten verlangt etwas mehr, nämlich Docker oder eine PHP-Umgebung, die Sie sicher betreiben können. Die Dokumentation beschreibt beide Wege.",
            ],
            [
                'q' => "Wer kann meine Daten in der gehosteten Version sehen?",
                'a' => "Niemand sieht sie sich an. Der Support kann nur mit Ihrer ausdrücklichen Erlaubnis und für ein konkretes Problem auf ein Konto zugreifen. Ihre Daten werden nie verkauft, nie für Werbung genutzt und nie zum Trainieren eines Modells verwendet.",
            ],
            [
                'q' => "Bekomme ich meine Daten wieder heraus?",
                'a' => "Jederzeit und vollständig, einschließlich der Strukturen, die Sie selbst gebaut haben. Export ist eine Funktion und kein Hindernisparcours.",
            ],
            [
                'q' => "Kann ich vorhandene Kontakte importieren?",
                'a' => "Ja, vCard- und CSV-Dateien. Doppelte Einträge werden Ihnen vor jeder Zusammenführung gezeigt, denn die falschen zwei Menschen zusammenzuführen ist eine denkwürdige Art, einen Nachmittag zu ruinieren.",
            ],
            [
                'q' => "Was passiert mit meinem Konto, wenn v3 erscheint?",
                'a' => "Das Ziel ist ein klarer Migrationsweg für bestehende Konten, samt Kontakten, Notizen, Erinnerungen und weiteren wesentlichen Informationen. Nichts wird gelöscht und nichts wird Ihnen über Nacht aufgezwungen.",
                'link' => ['label' => "Mehr über Monica v3 lesen", 'page' => 'v3'],
            ],
            [
                'q' => "Gibt es eine mobile Anwendung?",
                'a' => "Die Webanwendung funktioniert heute schon auf dem Telefon. Native Anwendungen für iOS und Android folgen nach v3, echte Anwendungen und keine Website in einer Hülle.",
            ],
            [
                'q' => "Macht Monica etwas mit KI?",
                'a' => "Monica v3 stellt einen MCP-Server bereit, sodass Sie Ihren eigenen Assistenten auf Ihre eigenen Daten richten können, wenn Sie möchten. Monica schickt Ihre Beziehungen nicht von sich aus an ein Modell.",
            ],
        ],
    ],

    'plans' => [
        'title' => "Unser Server. Oder Ihrer.",
        'hosted' => [
            'title' => "Monica gehostet",
            'body' => "Für Menschen, die Monica wollen, ohne einen Server zu betreiben.",
            'items' => [
                "automatische Aktualisierungen;",
                "verwaltete Sicherungen;",
                "keine Infrastrukturarbeit;",
                "unterstützt die Entwicklung des quelloffenen Projekts.",
            ],
            'cta' => "Konto erstellen",
        ],
        'selfHosted' => [
            'title' => "Monica selbst hosten",
            'body' => "Für Menschen, die ihre Infrastruktur gern selbst besitzen, oder das zumindest behaupten.",
            'items' => [
                "vollständige Kontrolle;",
                "quelloffener Code;",
                "kein Abonnement bei Monica;",
                "Installation per Docker oder manuell.",
            ],
            'cta' => "Monica selbst hosten",
        ],
    ],

    'finalCta' => [
        'title' => "Seien Sie eine bessere Freundin. Mit administrativer Unterstützung.",
        'body' => "Behalten Sie wichtige Details. Melden Sie sich, wenn es zählt. Halten Sie Ihre Beziehungen aus Werbedatenbanken heraus.",
        'primaryCta' => "Mit Monica beginnen",
        'secondaryCta' => "Monica v3 ansehen",
        'note' => "Quelloffen · Selbst hostbar · Ohne Kreditkarte",
    ],

    /** Die Seite /preise. Die Preise stammen aus dem Design; hier je Locale ändern. */
    'pricing' => [
        'eyebrow' => "Einfache Preise",
        'title' => "Ein gehosteter Tarif. Keine Preise pro Beziehung.",
        'lede' => "Nutzen Sie Monica auf unseren Servern zu einem vorhersehbaren Preis, oder hosten Sie sie kostenlos selbst.",
        'lede2' => "Wir berechnen nichts pro Kontakt, pro Erinnerung, pro wichtigem Geburtstag oder pro Person, die Sie nicht enttäuschen möchten.",
        'currency' => "Preise in USD",
        'taxFootnote' => "Die Preise werden in USD angezeigt. Anfallende Steuern werden vor der Zahlung berechnet.",

        'billing' => [
            'label' => "Abrechnungszeitraum",
            'yearly' => "Jährlich — 2 Monate geschenkt",
            'monthly' => "Monatlich",
        ],

        'hosted' => [
            'title' => "Gehostete Monica",
            'body' => "Für alle, die Monica nutzen wollen, ohne einen Server zu pflegen.",
            'yearlyPrice' => "90 $",
            'yearlyPeriod' => "USD / Jahr",
            'yearlyNote' => "Zwei Monate geschenkt bei jährlicher Abrechnung.",
            'monthlyPrice' => "9 $",
            'monthlyPeriod' => "USD / Monat",
            'monthlyNote' => "Monatlich abgerechnet. Wechseln Sie zu jährlich für zwei Freimonate.",
            'taxNote' => "Je nach Land können Steuern anfallen.",
            'cta' => "Mit Monica beginnen",
            'trial' => "30 Tage testen · Während der Testphase keine Kreditkarte nötig",
            'listTitle' => "Alles, was Sie brauchen, um sich an die Menschen zu erinnern, die zählen:",
            'items' => [
                "unbegrenzte Kontakte;",
                "unbegrenzte Notizen;",
                "unbegrenzte Erinnerungen;",
                "unbegrenzte Aktivitäten und Journaleinträge;",
                "Beziehungsverwaltung;",
                "eigene Felder und Abschnitte;",
                "Dateianhänge;",
                "Datenexport;",
                "automatische Updates;",
                "verwaltete Sicherungen;",
                "E-Mail-Support;",
                "Zugriff von Telefon, Tablet und Computer;",
                "alle künftigen gehosteten Funktionen inbegriffen.",
            ],
            'aside' => "Kein Aufpreis für eine große Familie.",
            'footnote' => "Kündigen Sie, wann Sie möchten. Ihre Kontakte werden nicht als Geisel genommen.",
        ],

        'selfHosted' => [
            'title' => "Lieber Ihr eigener Server?",
            'body' => "Monica ist quelloffen und lässt sich auf einer Infrastruktur Ihrer Wahl installieren.",
            'price' => "0 $",
            'period' => "von Monica",
            'aside' => "Ihr Hosting-Anbieter möchte womöglich trotzdem Geld. Den Kapitalismus haben wir noch nicht besiegt.",
            'cta' => "Anleitung zum Selbst-Hosten ansehen",
            'sourceCta' => "Quellcode auf GitHub ansehen · :count Sterne",
            'listTitle' => "Die Anwendung bekommen Sie kostenlos. Sie stellen den Server, die Updates, die Sicherungen, die Überwachung, die Sicherheitspatches und die ruhige Gewissheit, genau zu wissen, wo Ihre Daten liegen.",
            'items' => [
                "die vollständige quelloffene Anwendung;",
                "unbegrenzte Kontakte;",
                "so viele Nutzerinnen und Nutzer, wie Ihre Infrastruktur trägt;",
                "volle Kontrolle über Ihre Daten;",
                "Datenimport und -export;",
                "Dokumentation der Community;",
                "Unterstützung durch die Community;",
                "die Möglichkeit, den Quellcode einzusehen und zu ändern;",
                "die MIT-Lizenz in Monica v3.",
            ],
            'footnote' => "Die selbst gehostete Ausgabe ist keine abgespeckte Demo. Es ist Monica auf Ihrer Infrastruktur.",
            'footnote2' => "Verwaltete Sicherungen, E-Mail-Versand, Infrastrukturüberwachung und direkter Support gehören zum gehosteten Dienst.",
        ],

        'compare' => [
            'title' => "Dieselbe Monica. Eine andere Person ist für den Server zuständig.",
            'rowHeader' => "Was",
            'hosted' => "Gehostete Monica",
            'selfHosted' => "Selbst gehostete Monica",
            'rows' => [
                ['label' => "Monica-Software", 'hosted' => "Enthalten", 'selfHosted' => "Enthalten"],
                ['label' => "Kontakte", 'hosted' => "Unbegrenzt", 'selfHosted' => "Unbegrenzt"],
                ['label' => "Updates", 'hosted' => "Automatisch", 'selfHosted' => "Sie installieren sie"],
                ['label' => "Sicherungen", 'hosted' => "Von Monica verwaltet", 'selfHosted' => "Sie verwalten sie"],
                ['label' => "Serverwartung", 'hosted' => "Von Monica verwaltet", 'selfHosted' => "Sie übernehmen sie"],
                ['label' => "Speicherort der Daten", 'hosted' => "Monica-Infrastruktur", 'selfHosted' => "Ihre Infrastruktur"],
                ['label' => "Erforderliches technisches Wissen", 'hosted' => "Keines", 'selfHosted' => "Etwas"],
                ['label' => "Support", 'hosted' => "E-Mail-Support", 'selfHosted' => "Community-Support"],
                ['label' => "Kosten", 'hosted' => "Monats- oder Jahresabo", 'selfHosted' => "Kostenlose Software plus Hosting-Kosten"],
                ['label' => "Am besten für", 'hosted' => "Menschen, die wollen, dass Monica läuft", 'selfHosted' => "Menschen, die Server mögen oder müssen"],
            ],
        ],

        'whyPay' => [
            'title' => "Warum zahlen, wenn Monica quelloffen ist?",
            'body' => "Quelloffen heißt, dass Sie Monica betreiben, einsehen, ändern und zu ihr beitragen können. Server, Sicherungen, E-Mail-Versand, Sicherheitsarbeit und Support verschwinden dadurch nicht.",
            'body2' => "Ein gehostetes Abonnement bezahlt die Infrastruktur hinter Ihrem Konto und finanziert die Weiterentwicklung von Monica für alle, auch für jene, die sie selbst hosten.",
            'quote' => "Sie bezahlen uns dafür, Monica zu betreiben, nicht dafür, Ihre eigenen Daten freizuschalten.",
            'aside' => "Server sind einfach Computer, die Rechnungen schicken.",
        ],

        'noCharge' => [
            'title' => "Wofür wir nichts berechnen",
            'items' => [
                ['title' => "Mehr Kontakte", 'body' => "Ihr Preis steigt nicht, weil Sie mehr Menschen kennen."],
                ['title' => "Mehr Erinnerungen", 'body' => "Sich an Jahrestage zu erinnern ist schon stressig genug."],
                ['title' => "Datenexporte", 'body' => "Ihre Daten mitzunehmen ist ein Recht, keine Zusatzfunktion."],
                ['title' => "Grundlegende Privatsphäre", 'body' => "Wir verkaufen kein Privatsphäre-Upgrade. Privatsphäre ist die Voreinstellung."],
                ['title' => "Kündigen", 'body' => "Es gibt keine Kündigungsgebühren und kein zeremonielles Trennungsgespräch."],
                ['title' => "Die API nutzen", 'body' => "Die API gehört zum Produkt, sie ist keine gesonderte Verhandlung."],
            ],
        ],

        'leaving' => [
            'title' => "Ihr Abonnement darf enden. Ihr Zugang zu Ihren Daten nicht.",
            'body' => "Sie können Ihre Daten jederzeit exportieren.",
            'body2' => "Nach der Kündigung bleibt Ihr Konto bis zum Ende des bezahlten Abrechnungszeitraums zugänglich. Danach halten wir es für eine festgelegte Schonfrist bereit, bevor es gelöscht wird.",
            'steps' => [
                ['label' => "Kündigen", 'body' => "Ihr Tarif bleibt bis zum Ende des Abrechnungszeitraums aktiv."],
                ['label' => "Exportieren", 'body' => "Laden Sie Ihre Daten vor oder nach der Kündigung herunter, während der Schonfrist."],
                ['label' => "Löschen", 'body' => "Löschen Sie Ihr Konto sofort in den Einstellungen, wann immer Sie möchten."],
            ],
            'note' => "Schonfrist, Exportformate und Löschfristen sind in der Aufbewahrungsrichtlinie festgelegt.",
        ],

        'trackRecord' => [
            'title' => "Quelloffen, bevor das eine Preisstrategie war",
            'body' => "Monica wird seit 2017 öffentlich entwickelt.",
            'body2' => "Das Projekt hat :count Sterne auf GitHub gesammelt, wurde mehrfach als Repository der Woche ausgewählt, stand an der Spitze von Product Hunt und wurde von der Open-Source-Community ausgezeichnet.",
            'starsLabel' => "Sterne auf GitHub",
            'since' => "2017",
            'sinceLabel' => "Quelloffen seit",
            'launch' => "Nr. 1 des Tages",
            'launchLabel' => "Product Hunt",
            'featured' => "Repository der Woche",
            'featuredLabel' => "Mehrfach hervorgehoben",
            'cta' => "Monica auf GitHub ansehen",
        ],

        'faq' => [
            'title' => "Fragen zum Bezahlen von Monica",
            'items' => [
                ['q' => "Was kostet Monica?", 'a' => [
                    "Gehostete Monica kostet 9 USD pro Monat oder 90 USD pro Jahr.",
                    "Sie können Monica auch kostenlos auf einer Infrastruktur hosten, die Sie verwalten.",
                ]],
                ['q' => "Gilt der Preis pro Nutzer oder pro Kontakt?", 'a' => "Nein. Der gehostete Tarif hat einen Preis pro Konto und enthält unbegrenzte Kontakte."],
                ['q' => "Ist Monica wirklich quelloffen?", 'a' => [
                    "Ja. Der Quellcode von Monica ist öffentlich, und das Projekt hat :count Sterne auf GitHub.",
                    "Monica v3 wird unter der MIT-Lizenz veröffentlicht.",
                ], 'link' => ['label' => "Mehr über Monica v3 lesen", 'page' => 'v3']],
                ['q' => "Ist Selbst-Hosten kostenlos?", 'a' => "Monica berechnet nichts für die selbst gehostete Software. Server und Infrastrukturkosten tragen Sie."],
                ['q' => "Unterscheidet sich die gehostete von der selbst gehosteten Version?", 'a' => [
                    "Beide nutzen dieselbe Anwendung.",
                    "Der gehostete Dienst umfasst Infrastruktur, verwaltete Updates, Sicherungen, Überwachung, E-Mail-Versand und Support. Einzelne Integrationen, die auf von Monica betriebener Infrastruktur beruhen, kann es nur im gehosteten Dienst geben.",
                ]],
                ['q' => "Kann ich von gehostet zu selbst gehostet wechseln?", 'a' => "Ja. Sie können Ihre Monica-Daten exportieren und in eine kompatible selbst gehostete Installation importieren."],
                ['q' => "Kann ich jederzeit kündigen?", 'a' => "Ja. Kündigen Sie in Ihren Kontoeinstellungen. Ihr Abonnement bleibt bis zum Ende des laufenden Abrechnungszeitraums aktiv."],
                ['q' => "Gibt es Kündigungsgebühren?", 'a' => "Nein. Gehen sollte kein Lösegeld kosten."],
                ['q' => "Was passiert, wenn meine Zahlung fehlschlägt?", 'a' => [
                    "Wir benachrichtigen Sie und versuchen die Zahlung erneut, bevor wir das Konto einschränken.",
                    "Ihre Daten werden nicht gelöscht, weil eine Karte abgelaufen ist.",
                ]],
                ['q' => "Wie funktionieren Rückerstattungen?", 'a' => [
                    "Wenn Ihnen versehentlich etwas berechnet wurde oder Sie das Kündigen vergessen haben, melden Sie sich innerhalb von 30 Tagen. Wir prüfen die Anfrage wie vernünftige Menschen.",
                    "Jahresabonnements können innerhalb der in unserer Rückerstattungsrichtlinie festgelegten Frist erstattet werden. Für Konten, die den Dienst ernsthaft missbraucht haben, gibt es keine Rückerstattung.",
                ]],
                ['q' => "Wird der Preis steigen?", 'a' => [
                    "Preise können sich mit Monica ändern, aber wir informieren bestehende Abonnentinnen und Abonnenten vorher.",
                    "Wir ändern Preise nicht stillschweigend in der Hoffnung, dass es niemand merkt.",
                ]],
                ['q' => "Sind Steuern enthalten?", 'a' => "Ob die angezeigten Preise Steuern enthalten, hängt von Ihrem Land und der geltenden Rechtslage ab. Der Endbetrag wird vor der Zahlung angezeigt."],
                ['q' => "Speichert Monica meine Zahlungsdaten?", 'a' => "Zahlungsdaten werden von unserem Zahlungsdienstleister verarbeitet. Monica speichert keine vollständigen Kartennummern."],
                ['q' => "Werden meine Daten für Werbung genutzt?", 'a' => "Nein. Monica verkauft Ihre persönlichen Daten nicht, zeigt keine Werbung und nutzt die Menschen in Ihrem Konto nicht für Werbeprofile."],
                ['q' => "Werden meine Daten zum Training von KI-Modellen genutzt?", 'a' => "Kein Modell wird auf den privaten Inhalten Ihres Monica-Kontos trainiert."],
                ['q' => "Sind Sicherungen enthalten?", 'a' => [
                    "Ja, der gehostete Dienst enthält verwaltete Sicherungen.",
                    "Bei selbst gehosteten Installationen richten Sie Ihre Sicherungen selbst ein und testen sie.",
                ]],
                ['q' => "Kann ich alles exportieren?", 'a' => "Sie können Kontakte, Beziehungen, Notizen, Erinnerungen, Aktivitäten, eigene Felder und weitere unterstützte Kontodaten exportieren. Anhänge sind im dokumentierten Exportformat enthalten."],
                ['q' => "Kann ich mein Konto löschen?", 'a' => "Ja. Die Kontolöschung finden Sie in den Einstellungen, ohne den Support zu kontaktieren."],
                ['q' => "Bieten Sie Rabatte an?", 'a' => "Derzeit nicht. Uns ist ein verständlicher Preis lieber als ein System, in dem alle einzeln verhandeln."],
                ['q' => "Bieten Sie Lifetime-Tarife an?", 'a' => "Nein. Server verursachen weiterhin Kosten, auch nachdem motivierende Startkampagnen vorbei sind."],
                ['q' => "Bieten Sie einen Enterprise-Tarif an?", 'a' => [
                    "Für die Nutzung von Monica ist kein Vertriebsgespräch nötig.",
                    "Bei Fragen zu Sicherheit, Beschaffung oder Hosting in größerem Umfang schreiben Sie uns.",
                ]],
                ['q' => "Kann ich in einer anderen Währung zahlen?", 'a' => "Die Abrechnung erfolgt derzeit in USD. Ihre Bank kann den Betrag umrechnen und eine Fremdwährungsgebühr berechnen."],
                ['q' => "Unterstützt ein Abonnement das Open-Source-Projekt?", 'a' => "Ja. Gehostete Abonnements finanzieren Infrastruktur, Wartung, Support und die weitere quelloffene Entwicklung von Monica."],
            ],
        ],

        'finalCta' => [
            'title' => "Ihr Gedächtnis hat genug unbezahlt gearbeitet.",
            'body' => "Nutzen Sie die gehostete Version und überlassen Sie uns die Infrastruktur, oder installieren Sie Monica auf Ihrem eigenen Server.",
            'body2' => "So oder so bleiben Ihre Kontakte Menschen, keine Leads.",
            'primaryCta' => "Mit Monica beginnen",
            'secondaryCta' => "Monica selbst hosten",
            'note' => "Ein einfacher gehosteter Tarif · Selbst hosten kostenlos · Quelloffen",
        ],
    ],

    'footer' => [
        'tagline' => "Ein privates, quelloffenes persönliches CRM, um sich an die Menschen zu erinnern, die zählen.",
        'productLabel' => "Produkt",
        'buildLabel' => "Entwickeln",
        'projectLabel' => "Projekt",
        'api' => "API",
        'selfHosting' => "Selbst hosten",
        'github' => "GitHub",
        'privacy' => "Datenschutz",
        'terms' => "Nutzungsbedingungen",
        'copyright' => "© :year Monica",
        'since' => "Quelloffen seit 2017",
        'ownership' => "Ihre Daten bleiben Ihre.",
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

    'notFound' => [
        'title' => "Seite nicht gefunden.",
        'body' => "Diese Adresse führt nirgendwohin. Sie wurde vielleicht verschoben, oder es gab sie nie.",
    ],
];
