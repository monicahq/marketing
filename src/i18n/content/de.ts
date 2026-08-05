import type { Dictionary } from './en';

/**
 * German copy. Siezen throughout — Monica addresses an adult about their private
 * relationships, and duzen would read as marketing familiarity. German runs
 * roughly 30% longer than English, which the layouts already allow for.
 */
export const de: Dictionary = {
  meta: {
    title: 'Monica — das quelloffene persönliche CRM',
    description:
      'Monica hilft Ihnen, sich an die Menschen zu erinnern, die Ihnen wichtig sind: was in ihrem Leben passiert, wichtige Daten, frühere Gespräche und wann Sie sich wieder melden sollten. Privat, quelloffen, selbst hostbar.',
    /** Alt text for the social sharing card in public/og/. */
    imageAlt:
      'Monica: Erinnern Sie sich an die Menschen, die Ihnen wichtig sind. Das quelloffene persönliche CRM.',
  },

  announcement: {
    headline: 'Monica v3 kommt vor Ende 2026.',
    detail: 'Von Grund auf neu gebaut. Weiterhin quelloffen. Jetzt unter MIT-Lizenz.',
    cta: 'Sehen, was kommt',
  },

  nav: {
    label: 'Haupt',
    product: 'Produkt',
    v3: 'Monica v3',
    pricing: 'Preise',
    openSource: 'Quelloffen',
    blog: 'Blog',
    docs: 'Dokumentation',
    signIn: 'Anmelden',
    getStarted: 'Loslegen',
    stars: (count: string) => `${count} Sterne`,
  },

  hero: {
    eyebrow: 'Das quelloffene persönliche CRM',
    title: 'Erinnern Sie sich an die Menschen, die Ihnen wichtig sind.',
    lede: 'Monica hilft Ihnen, den Überblick über die Menschen in Ihrem Leben zu behalten — was sie Ihnen erzählen, welche Momente Sie teilen und welche Versprechen Sie sich fest vorgenommen hatten.',
    lede2:
      'Privat von Grund auf. Quelloffen. Selbst hostbar. Keine Werbung, kein Datenverkauf, keine peinlichen Benachrichtigungen zur „Aktivierung“.',
    primaryCta: 'Mit Monica beginnen',
    githubCta: (count: string) => `Auf GitHub ansehen · ${count} Sterne`,
    note: 'Selbst hosten ist kostenlos · Gehostete Version verfügbar · MIT-lizenziert ab v3',
  },

  proof: {
    starsLabel: 'Sterne auf GitHub',
    since: '2017',
    sinceLabel: 'Quelloffen seit',
    featured: 'Repository der Woche',
    featuredLabel: 'Mehrfach hervorgehoben',
    launch: 'Product Hunt',
    launchLabel: 'Beachteter Start',
    aside: 'Offenbar vergessen noch einige andere Menschen Geburtstage.',
  },

  notALead: {
    title: 'Ein CRM, in dem niemand ein Lead ist.',
    body: 'Klassische CRM-Systeme helfen Unternehmen, sich an Kunden zu erinnern. Monica hilft Ihnen, sich an Freunde, Familie, Kolleginnen, Nachbarn und alle anderen zu erinnern, die Ihnen wichtig sind.',
    aside: 'Aufmerksamkeit fällt leichter, wenn Ihr Gedächtnis eine Sicherung hat.',
    listTitle: 'Halten Sie die Details fest, die Sie sonst vergessen würden:',
    items: [
      'was gerade in ihrem Leben passiert;',
      'woher Sie sich kennen;',
      'wichtige Daten;',
      'frühere Gespräche;',
      'Geschenke, Schulden, Versprechen und Ideen;',
      'Erinnerungen, sich wieder zu melden.',
    ],
  },

  showcase: {
    title: 'Alles über einen Menschen. An einem Ort.',
    aside:
      'Menschen sind kompliziert. Ihre Einträge dürfen deshalb auch ein wenig kompliziert sein.',
    card: {
      name: 'Élise Aubert',
      meta: 'Schwester · Lyon · Zuletzt heute gesprochen',
      badge: 'Familie',
      birthdayLabel: 'Geburtstag',
      birthday: '18. März · wird in 7 Monaten 39',
      metLabel: 'Wie Sie sich kennen',
      met: 'Von Geburt an',
      relationshipsLabel: 'Beziehungen',
      relationships: [
        { initials: 'MC', label: 'Élise ist Marcs Partnerin', meta: '10 Jahre' },
        { initials: 'LA', label: 'Élise ist Léas Elternteil', meta: 'Seit 2019' },
      ],
      recentlyLabel: 'Kürzlich',
      timeline: [
        {
          nature: 'meal' as const,
          title: 'Mittagessen im Le Petit Sud',
          meta: 'Heute · sie denkt darüber nach, zurück nach Lyon zu ziehen',
        },
        {
          nature: 'call' as const,
          title: 'Anruf wegen Georges',
          meta: '2. August · 22 Minuten',
        },
      ],
      reminder: 'Fragen, wie das Vorstellungsgespräch lief',
      reminderMeta: 'Erinnerung · morgen',
    },
    features: [
      {
        icon: 'relationship' as const,
        title: 'Beziehungen',
        body: 'Verstehen Sie Familien, Partnerschaften, Freundschaften, Kolleginnen und die Verbindungen dazwischen.',
      },
      {
        icon: 'journal' as const,
        title: 'Notizen und Journaleinträge',
        body: 'Erinnern Sie sich an das Geschehene, ohne durch sechs Messenger zu scrollen.',
      },
      {
        icon: 'reminder' as const,
        title: 'Erinnerungen',
        body: 'Ihre Mutter anrufen. Ihrem Freund gratulieren. Nach dem Vorstellungsgespräch fragen. Monica erinnert sich; die Anerkennung bleibt bei Ihnen.',
      },
      {
        icon: 'activity' as const,
        title: 'Aktivitäten',
        body: 'Führen Sie eine Historie von Essen, Anrufen, Reisen, Ereignissen und den kleinen Momenten, die eine Beziehung ausmachen.',
      },
      {
        icon: 'panel' as const,
        title: 'Eigene Informationen',
        body: 'Halten Sie die Details fest, die für Sie zählen — nicht die Felder, die ein Vertriebs-CRM für wichtig hält.',
      },
    ],
  },

  notSocial: {
    title: 'Bewusst kein soziales Netzwerk.',
    body: 'Monica empfiehlt keine Freunde, bewertet keine Beziehungen, blendet keine Werbung ein und teilt niemandem mit, dass Sie sein Profil angesehen haben.',
    body2: 'Es ist ein privater Ort für Ihre Erinnerungen und Ihre Beziehungen.',
    quote: 'Kein Feed. Keine Follower. Keine Marken, die eine Persönlichkeit vortäuschen.',
  },

  openSource: {
    title: 'Ihres heißt Ihres.',
    body: 'Monica ist seit dem ersten Tag quelloffen. Daran ändert sich nichts.',
    aside: 'Vertrauen ist nützlich. Quellcode ist besser.',
    sourceCta: 'Quellcode ansehen',
    hostingCta: 'Anleitung zum Selbst-Hosten lesen',
    listTitle: 'Mit Monica v3:',
    items: [
      'bleibt das Projekt vollständig quelloffen;',
      'wird die Lizenz zu MIT;',
      'können Sie es auf Ihrem eigenen Server betreiben;',
      'nutzt das gehostete Produkt dieselbe Anwendung;',
      'lassen sich Ihre Daten exportieren;',
      'kann der Code eingesehen, verändert und geforkt werden.',
    ],
  },

  v3: {
    title: 'Monica wird erwachsen. Einigermaßen.',
    body: 'Monica v3 wird für das kommende Jahrzehnt von Grund auf neu gebaut.',
    body2:
      'Sie wird flexibler, erweiterbarer und deutlich besser auf dem Telefon — und behält dabei die Prinzipien von Privatsphäre und Eigentum, die Monica überhaupt erst nützlich gemacht haben.',
    listLabel: 'Kommt in v3',
    features: [
      {
        icon: 'panel' as const,
        title: 'Einträge, die Sie gestalten',
        body: 'Wählen Sie die Abschnitte und Felder eines Eintrags, statt unsere Meinung für immer zu übernehmen.',
      },
      {
        icon: 'relationship' as const,
        title: 'Mehr als Kontakte',
        body: 'Verbinden Sie Menschen mit Haustieren, Unternehmen, Wohnungen, Fahrzeugen, Projekten und allem anderen, was zu ihrem Leben gehört.',
      },
      {
        icon: 'journal' as const,
        title: 'Ein Journal, das mit allem verbunden ist',
        body: 'Halten Sie einen Moment einmal fest und verknüpfen Sie ihn mit den beteiligten Personen, Einträgen, Daten und Erinnerungen.',
      },
      {
        icon: 'tag' as const,
        title: 'Strukturen aus der Community',
        body: 'Installieren Sie nützliche Strukturen anderer Monica-Nutzerinnen und passen Sie Ihre Kopie frei an.',
      },
      {
        icon: 'code' as const,
        title: 'Eine vollständige API und ein MCP-Server',
        body: 'Alles, was über die Oberfläche verfügbar ist, sollte auch programmatisch verfügbar sein.',
      },
      {
        icon: 'phone' as const,
        title: 'Eine echte mobile Erfahrung',
        body: 'Zuerst eine responsive Webanwendung, danach native Anwendungen für iOS und Android.',
      },
    ],
    cta: 'Monica v3 entdecken',
    note: 'Erwartet vor Ende 2026 · Der Beta-Zugang öffnet sich schrittweise',
  },

  founder: {
    title: 'Entstanden, weil mein Gedächtnis schlecht ist.',
    body: 'Ich habe Monica gebaut, weil ich immer wieder Details über Menschen vergessen habe, die mir wirklich wichtig waren.',
    body2:
      'Nicht, weil sie unwichtig gewesen wären. Sondern weil das Leben voll ist, das Gedächtnis unzuverlässig und das menschliche Gehirn offenbar ohne Suchfunktion ausgeliefert wurde.',
    body3:
      'Monica begann 2017 als persönliches Projekt. Inzwischen ist daraus eines der meistbeachteten quelloffenen Projekte für persönliche CRM geworden, getragen und verbessert von Mitwirkenden aus aller Welt.',
    signature: '— Régis, Gründer und Mensch, der gelegentlich immer noch Dinge vergisst',
  },

  faq: {
    title: 'Fragen, die wirklich gestellt werden.',
    items: [
      {
        q: 'Ist Monica wirklich kostenlos?',
        a: 'Der Code ist kostenlos und bleibt es. Sie können ihn ohne Zahlung auf Ihrem eigenen Server betreiben. Die gehostete Version ist ein kostenpflichtiges Abonnement, weil Server und Sicherungen Geld kosten — und weil sie die Arbeit am quelloffenen Projekt finanziert.',
      },
      {
        q: 'Muss ich technisch versiert sein?',
        a: 'Für die gehostete Version nicht: Sie legen ein Konto an und beginnen. Selbst hosten verlangt etwas mehr — Docker oder eine PHP-Umgebung, die Sie sicher betreiben können. Die Dokumentation beschreibt beide Wege.',
      },
      {
        q: 'Wer kann meine Daten in der gehosteten Version sehen?',
        a: 'Niemand sieht sie sich an. Der Support kann nur mit Ihrer ausdrücklichen Erlaubnis und für ein konkretes Problem auf ein Konto zugreifen. Ihre Daten werden nie verkauft, nie für Werbung genutzt und nie zum Trainieren eines Modells verwendet.',
      },
      {
        q: 'Bekomme ich meine Daten wieder heraus?',
        a: 'Jederzeit und vollständig, einschließlich der Strukturen, die Sie selbst gebaut haben. Export ist eine Funktion und kein Hindernisparcours.',
      },
      {
        q: 'Kann ich vorhandene Kontakte importieren?',
        a: 'Ja — vCard- und CSV-Dateien. Doppelte Einträge werden Ihnen vor jeder Zusammenführung gezeigt, denn die falschen zwei Menschen zusammenzuführen ist eine denkwürdige Art, einen Nachmittag zu ruinieren.',
      },
      {
        q: 'Was passiert mit meinem Konto, wenn v3 erscheint?',
        a: 'Das Ziel ist ein klarer Migrationsweg für bestehende Konten, samt Kontakten, Notizen, Erinnerungen und weiteren wesentlichen Informationen. Nichts wird gelöscht und nichts wird Ihnen über Nacht aufgezwungen.',
      },
      {
        q: 'Gibt es eine mobile Anwendung?',
        a: 'Die Webanwendung funktioniert heute schon auf dem Telefon. Native Anwendungen für iOS und Android folgen nach v3 — echte Anwendungen, keine Website in einer Hülle.',
      },
      {
        q: 'Macht Monica etwas mit KI?',
        a: 'Monica v3 stellt einen MCP-Server bereit, sodass Sie Ihren eigenen Assistenten auf Ihre eigenen Daten richten können, wenn Sie möchten. Monica schickt Ihre Beziehungen nicht von sich aus an ein Modell.',
      },
    ],
  },

  plans: {
    title: 'Unser Server. Oder Ihrer.',
    hosted: {
      title: 'Monica gehostet',
      body: 'Für Menschen, die Monica wollen, ohne einen Server zu betreiben.',
      items: [
        'automatische Aktualisierungen;',
        'verwaltete Sicherungen;',
        'keine Infrastrukturarbeit;',
        'unterstützt die Entwicklung des quelloffenen Projekts.',
      ],
      cta: 'Konto erstellen',
    },
    selfHosted: {
      title: 'Monica selbst hosten',
      body: 'Für Menschen, die ihre Infrastruktur gern selbst besitzen — oder das zumindest behaupten.',
      items: [
        'vollständige Kontrolle;',
        'quelloffener Code;',
        'kein Abonnement bei Monica;',
        'Installation per Docker oder manuell.',
      ],
      cta: 'Monica selbst hosten',
    },
  },

  finalCta: {
    title: 'Seien Sie eine bessere Freundin. Mit administrativer Unterstützung.',
    body: 'Behalten Sie wichtige Details. Melden Sie sich, wenn es zählt. Halten Sie Ihre Beziehungen aus Werbedatenbanken heraus.',
    primaryCta: 'Mit Monica beginnen',
    secondaryCta: 'Monica v3 ansehen',
    note: 'Quelloffen · Selbst hostbar · Ohne Kreditkarte',
  },

  footer: {
    tagline:
      'Ein privates, quelloffenes persönliches CRM, um sich an die Menschen zu erinnern, die zählen.',
    productLabel: 'Produkt',
    buildLabel: 'Entwickeln',
    projectLabel: 'Projekt',
    api: 'API',
    selfHosting: 'Selbst hosten',
    github: 'GitHub',
    privacy: 'Datenschutz',
    copyright: (year: number) => `© ${year} Monica`,
    since: 'Quelloffen seit 2017',
    ownership: 'Ihre Daten bleiben Ihre.',
    languageLabel: 'Sprache wechseln',
  },
};
