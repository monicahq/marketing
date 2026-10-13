<?php

/**
 * French copy. Not a literal translation of the English: the jokes are rewritten
 * so they land, and the register stays vouvoiement, calm and direct, never
 * commercial. Typographic rules:
 * - spaces before : ? ; ! and », and after « are non-breaking (U+00A0= )
 * - apostrophes are typographic (U+2019=’)
 */

return [
    'meta' => [
        'imageAlt' => "Monica : souvenez-vous des gens qui comptent pour vous. Le CRM personnel open source.",

        'breadcrumb' => [
            'home' => "Accueil",
            'v3' => "Monica v3",
            'pricing' => "Tarifs",
            'features' => "Fonctionnalités",
            'featuresDashboard' => "Tableau de bord",
            'featuresJournal' => "Journal",
            'blog' => "Blog",
            'terms' => "Conditions d’utilisation",
            'team' => "Équipe",
            'privacy' => "Politique de confidentialité",
            'personalCrm' => "Guide du CRM personnel",
            'templates' => "Modèles de contact",
            'details' => "Fiches de contact",
            'reminders' => "Rappels",
            'timeline' => "Chronologie",
            'page' => "Page :number",
        ],

        'software' => [
            'monthly' => "Monica hébergée, facturée au mois",
            'yearly' => "Monica hébergée, facturée à l’année",
            'selfHosted' => "Monica auto-hébergée",
            'lifetime' => "Monica hébergée, à vie",
        ],

        'home' => [
            'title' => "Monica — le CRM personnel open source",
            'description' => "Monica vous aide à vous souvenir des gens qui comptent : ce qui se passe dans leur vie, les dates importantes, vos conversations passées et le moment de reprendre contact. Privé, open source, auto-hébergeable.",
        ],

        'pricing' => [
            'title' => "Tarifs Monica : l’auto-hébergement gratuit, ou Monica hébergée pour vous",
            'description' => "Hébergez Monica gratuitement, ou laissez Monica l’héberger pour 9 USD par mois, 90 USD par an ou 150 USD une fois. Chaque offre a toutes les fonctionnalités, des contacts illimités et aucun tarif au contact.",
        ],

        'privacy' => [
            'title' => "Politique de confidentialité — Monica",
            'description' => "Comment Monica traite vos données : ce que nous collectons, où c’est stocké, qui peut y accéder et ce qui se passe quand vous fermez votre compte. Pas de publicité, pas de traceurs, pas de revente de données.",
        ],

        'team' => [
            'title' => "Équipe — Monica",
            'description' => "Monica est construite par deux personnes à Montréal, avec des centaines de contributeurs open source. Pourquoi nous bâtissons un CRM personnel qui ne nuit pas aux relations humaines.",
        ],

        'terms' => [
            'title' => "Conditions d’utilisation — Monica",
            'description' => "Les conditions d’utilisation de Monica, le CRM personnel open source : ce que couvre le service, vos droits sur vos données, vos responsabilités et les mentions légales.",
        ],

        'blog' => [
            'title' => "Le blog de Monica — notes de version et choix de conception",
            'description' => "Ce que nous livrons, pourquoi nous le construisons ainsi, et à quoi ressemble vraiment une petite entreprise open source. Écrit par les personnes qui font Monica.",
        ],

        // Un article apporte son propre titre et sa propre description : il ne
        // reste ici que le cadre que le site met autour.
        'post' => [
            'title' => ":title — le blog de Monica",
        ],

        // La page 2 d'une liste n'est pas la liste. Sans cela, quatre pages du
        // blog se disputent un même résultat sous un même titre.
        'paginated' => ":title (page :page sur :total)",

        'v3' => [
            'title' => "Monica v3 — reconstruite pour les dix prochaines années",
            'description' => "Monica v3 est une reconstruction complète du CRM personnel open source : des fiches que vous concevez, un journal relié à tout le reste, une API complète et une vraie expérience mobile. Toujours open source. Avant la fin de 2026.",
        ],

        // Un bloc par onglet des fonctionnalités : chaque onglet a sa propre
        // URL, et un moteur de recherche qui trouve les trois doit pouvoir les
        // distinguer.
        'features' => [
            'title' => "Gestion des contacts — les fonctionnalités de Monica",
            'description' => "Notez ce que vous savez des personnes qui comptent pour vous : relations, coordonnées, notes privées, appels, rappels et cadeaux, le tout sur une même fiche de contact.",
        ],

        'featuresDashboard' => [
            'title' => "Le tableau de bord — les fonctionnalités de Monica",
            'description' => "Le tableau de bord de Monica montre qui vous avez consulté en dernier, ce qui arrive ensuite, vos notes favorites et les appels que vous avez passés, pour vous concentrer sur ce qui compte vraiment.",
        ],

        'featuresJournal' => [
            'title' => "Le journal — les fonctionnalités de Monica",
            'description' => "Écrivez des entrées de journal, indiquez comment s’est passée votre journée et relisez les activités avec vos contacts que Monica consigne automatiquement.",
        ],

        'templates' => [
            'title' => "Vos contacts, à votre façon : les modèles de contact de Monica",
            'description' => "Créez des modèles de contact avec vos champs, sections et onglets. Un modèle par cercle, des versions publiées quand vous êtes prêt, des sections à partager.",
        ],

        'details' => [
            'title' => "Retenez les détails qui comptent : les fiches de contact dans Monica",
            'description' => "Gardez ensemble les détails que les gens vous confient : ce qu’ils vous ont dit la dernière fois, les petites choses, leurs proches et les moments partagés.",
        ],

        'reminders' => [
            'title' => "Pensez à donner des nouvelles : les rappels dans Monica",
            'description' => "Programmez un rappel pour un anniversaire, un grand jour ou un ami que vous voulez appeler. Une fois ou à intervalles réguliers, dans son fuseau horaire, par e-mail ou dans Monica, avec une trace de ce à quoi vous avez pensé.",
        ],

        'timeline' => [
            'title' => "Gardez les moments qui comptent : la chronologie dans Monica",
            'description' => "Notez ce qui s’est passé, qui était là et les détails que vous voulez garder. Des événements de vie dans la chronologie de chacun en une seule fois, vos propres types d’événements et de champs, et un regard en arrière année par année.",
        ],

        'personalCrm' => [
            'title' => "Qu’est-ce qu’un CRM personnel ? Le guide pratique — Monica",
            'description' => "Ce qu’est un CRM personnel, en quoi il diffère d’un carnet d’adresses et d’un CRM commercial, quoi y noter, les compromis de confidentialité et comment choisir la bonne approche.",
        ],
    ],

    'announcement' => [
        'headline' => "Monica v3 arrive avant la fin de 2026.",
        'detail' => "Reconstruite de zéro. Toujours open source.",
        'cta' => "Découvrir ce qui arrive",
    ],

    'nav' => [
        'label' => "Principale",
        'product' => "Produit",
        'personalCrm' => "Qu’est-ce qu’un CRM personnel",
        'v3' => "Monica v3",
        'features' => "Fonctionnalités",
        'pricing' => "Tarifs",
        'blog' => "Blog",
        'docs' => "Documentation",
        'signIn' => "Connexion",
        'getStarted' => "Inscription",
        'stars' => ":count étoiles",

        // The features menu: three columns of what Monica does, and a card
        // pointing at templates, the thing a new reader most often misses.
        'menu' => [
            'groups' => [
                [
                    'title' => "Se souvenir",
                    'items' => [
                        ['icon' => 'note', 'title' => "Les détails", 'body' => "Tout sur quelqu’un, au même endroit."],
                        ['icon' => 'reminder', 'title' => "Rappels", 'body' => "Anniversaires, relances, récurrences."],
                        ['icon' => 'timeline', 'title' => "Chronologie", 'body' => "Notez-le une fois, pour tous ceux qui étaient là."],
                    ],
                ],
                [
                    'title' => "Organiser",
                    'items' => [
                        ['icon' => 'relationship', 'title' => "Relations", 'body' => "Arbres généalogiques, et qui connaît qui."],
                        ['icon' => 'vault', 'title' => "Coffres", 'body' => "Perso et pro, bien séparés."],
                        ['icon' => 'link', 'title' => "Partage", 'body' => "Partagez quelques sections. Révocable à tout moment."],
                    ],
                ],
                [
                    'title' => "Connecter et protéger",
                    'items' => [
                        ['icon' => 'calendar', 'title' => "Synchro et agendas", 'body' => "Carnets d’adresses, agendas, vCards."],
                        ['icon' => 'key', 'title' => "Assistants et API", 'body' => "Votre agent peut retrouver n’importe qui."],
                        ['icon' => 'lock', 'title' => "Confidentialité", 'body' => "Clés d’accès, 2FA, champs privés."],
                    ],
                ],
            ],
            'start' => [
                'label' => "Pour commencer",
                'title' => "Vos contacts, à votre façon",
                'body' => "Concevez vos propres modèles. Onglets, sections, champs, choix.",
                'rows' => [
                    ['label' => "Ami", 'detail' => "Cadeaux, animaux"],
                    ['label' => "Famille", 'detail' => "Arbre généalogique"],
                    ['label' => "Travail", 'detail' => "Entreprise, poste"],
                ],
                'cta' => "Voir comment fonctionnent les modèles",
            ],
        ],
    ],

    /** La page /v3. La clé `v3` ci-dessus est la section de la page d'accueil. */
    'v3page' => [
        'badge' => "Monica v3 · En développement",
        'timing' => "Avant la fin de 2026",
        'title' => "Monica est reconstruite pour les dix prochaines années.",
        'lede' => "Monica a aidé des milliers de personnes à se souvenir de ce qui compte chez celles et ceux qui les entourent. Elle est aujourd’hui reconstruite de fond en comble : plus souple, plus privée, plus facile à étendre, et meilleure sur tous les écrans.",
        'lede2' => "Elle restera open source. Et tout ce qui faisait l’intérêt de Monica reste en place.",

        'progress' => [
            'body' => "Il n’y a rien à quoi s’inscrire. Monica v3 se construit au grand jour : revenez dans quelques semaines pour voir ce qui a changé.",
            'note' => "Pas de liste de lancement, pas de newsletter, pas de pixel de suivi.",
        ],

        'proof' => [
            'stars' => ":count étoiles sur GitHub",
            'openSource' => "Open source depuis 2017",
            'selfHostable' => "Auto-hébergeable",
        ],

        'coming' => [
            'label' => "Ce qui arrive",
            'title' => "Beaucoup de choses changent. Monica devient davantage la vôtre.",
            'body' => "Monica v3 n’est pas un simple rafraîchissement visuel. C’est une nouvelle fondation, pensée pour rendre le produit plus souple sans le rendre plus compliqué.",
            'features' => [
                [
                    'icon' => 'panel',
                    'title' => "Façonnez Monica autour de votre vie",
                    'body' => "Créez les sections et les champs qui ont du sens pour vous. Gardez Monica simple, ou construisez des fiches détaillées pour ce que vous tenez à retenir.",
                ],
                [
                    'icon' => 'relationship',
                    'title' => "Suivez plus que des personnes",
                    'body' => "Les gens restent au centre de Monica, mais ils n’existent pas isolément. Reliez-les à des animaux, des entreprises, des logements, des véhicules, des projets ou toute autre fiche qui compte dans leur vie.",
                ],
                [
                    'icon' => 'journal',
                    'title' => "Souvenez-vous de ce qui s’est passé",
                    'body' => "Appels, repas, voyages, moments difficiles, petits détails qui méritent d’être gardés : ajoutez-les à un journal relié naturellement aux personnes, aux dates et aux rappels.",
                ],
                [
                    'icon' => 'tag',
                    'title' => "Partez de structures créées par d’autres",
                    'body' => "Installez des modèles prêts à l’emploi créés par la communauté, adaptez-les librement, et gardez le contrôle complet de votre propre version.",
                ],
                [
                    'icon' => 'code',
                    'title' => "Construisez sur une base ouverte",
                    'body' => "Tout ce qui est disponible dans l’interface le sera aussi via l’API. Monica sera plus facile à intégrer, à automatiser et à étendre, sans dépendre de points d’accès cachés ou privés.",
                ],
                [
                    'icon' => 'phone',
                    'title' => "Utilisez vraiment Monica sur tous les écrans",
                    'body' => "L’application web sera conçue pour le téléphone dès le départ. Des applications natives iOS et Android suivront, construites comme de vraies applications et non comme des habillages de site web.",
                ],
            ],
        ],

        'principles' => [
            'label' => "Ce qui ne change pas",
            'title' => "Les principes ne sont pas réécrits.",
            'body' => "Monica v3 est ambitieuse, mais c’est toujours Monica. Les engagements qui ont valu au projet :count étoiles sur GitHub font toujours partie des fondations.",
            'items' => [
                [
                    'icon' => 'code',
                    'title' => "Open source, et elle le restera",
                    'body' => "Monica restera entièrement open source et auto-hébergeable. Le code pourra être lu, modifié, forké et enrichi, exactement comme aujourd’hui.",
                ],
                [
                    'icon' => 'lock',
                    'title' => "Vos données restent les vôtres",
                    'body' => "Pas de publicité. Aucune revente de données personnelles. Aucun modèle entraîné sur vos contacts. Votre vie privée n’est pas un modèle économique.",
                ],
                [
                    'icon' => 'download',
                    'title' => "Exportez tout",
                    'body' => "Exportez vos informations quand vous le souhaitez, y compris les structures, sections et champs personnalisés que vous avez créés.",
                ],
                [
                    'icon' => 'people',
                    'title' => "Conçue pour être utilisable par tout le monde",
                    'body' => "Navigation au clavier, lecteurs d’écran, localisation et mises en page adaptatives sont des exigences produit, pas du travail remis à plus tard.",
                ],
                [
                    'icon' => 'arrow-right',
                    'title' => "Les utilisateurs actuels ne sont pas laissés de côté",
                    'body' => "L’objectif est d’offrir un chemin de migration clair pour les comptes Monica existants : contacts, notes, rappels et autres informations essentielles.",
                ],
            ],
        ],

        'follow' => [
            'title' => "Suivez la reconstruction depuis le début.",
            'body' => "Monica v3 est encore en développement, et beaucoup de décisions importantes se prennent au grand jour. Suivez le dépôt pour voir le travail avancer.",
            'note' => "Open source · Auto-hébergeable · Développée en public",
            'cta' => "Suivre Monica sur GitHub",
        ],
    ],

    /** La page /tarifs. Les prix viennent du design ; à changer ici, par locale. */
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
            'pill' => "Rachel, Ross, Chandler, Joey et le canard",
            'title' => "Souvenez-vous des gens qui comptent pour vous.",
            'subtitle' => "Nous sommes un CRM personnel open source.",
            'lede' => "Privée par conception. Open source. Auto-hébergeable. Aucune publicité, aucune revente de données, aucune notification gênante pour vous « réengager ».",
            'start' => "Commencer avec Monica",
            'github' => "Voir sur GitHub",
            'sales' => "Contacter les ventes",
            'salesJoke' => "On plaisante.",
            'salesTruth' => "Nous n’avons pas d’équipe commerciale.",
        ],

        'product' => [
            // Read out in place of the picture, which is drawn in markup but is
            // a picture of the product rather than a working copy of it.
            'label' => "Monica, ouverte sur la fiche de Phoebe Buffay : deux dates importantes, ses relations, la dernière note la concernant et trois idées de cadeaux.",
            'vault' => "Famille",
            'nav' => ["Tableau de bord", "Personnes", "Rappels", "Journal", "Idées cadeaux", "Paramètres"],
            'vaultsLabel' => "Coffres",
            'vaults' => ["Famille", "Amis", "Central Perk"],
            'search' => "Rechercher une personne",
            'add' => "Ajouter une personne",
            'meta' => "Sœur jumelle d’Ursula · New York · connue depuis 10 ans",
            'tabs' => ["Aperçu", "Chronologie", "Notes", "Idées cadeaux"],
            'datesTitle' => "Dates importantes",
            'dates' => [
                ['title' => "Anniversaire", 'date' => "16 février 1966", 'when' => "dans quatre mois"],
                ['title' => "Anniversaire de mariage", 'date' => "12 février 2004", 'when' => "dans quatre mois"],
            ],
            'relationshipsTitle' => "Relations",
            'relationships' => [
                ["Phoebe est la sœur jumelle d’", "Ursula", "."],
                ["Phoebe est l’épouse de ", "Mike", "."],
            ],
            'noteTitle' => "Dernière note",
            'note' => "A écrit une nouvelle chanson sur un chat. Très fière d’elle. Ne surtout pas parler de l’odeur.",
            'noteWhen' => "Il y a six jours",
            'giftsTitle' => "Idées cadeaux",
            'gifts' => ["Cordes de guitare", "Huile de massage", "Litière pour chat inodore"],
        ],

        'awards' => [
            'label' => "Des inconnus sur Internet approuvent",
            'github' => "GitHub Trending : dépôt du jour n° 1",
            'hn' => "Hacker News : n° 65 des liens les plus votés de tous les temps",
            'ph' => "Product Hunt : produit du jour n° 4",
        ],

        'agents' => [
            'eyebrow' => "Serveur MCP et API REST",
            'title' => "Utilisez Monica comme backend pour vos agents.",
            'body' => "Monica n’intègre aucune IA, et n’en intégrera jamais, mais nous laissons votre propre agent accéder à vos données — si vous le souhaitez.",
            'mcp' => "Explorer la doc MCP",
            'api' => "Explorer l’API",
            'prompt' => "Qu’est-ce que je pourrais offrir à Rachel pour son anniversaire ?",
            'answer' => "L’anniversaire de Rachel est dans 23 jours.",
            'saved' => "Vous avez noté deux idées en juillet :",
            'ideas' => ["L’écharpe qu’elle a montrée chez Bloomingdale’s", "Tout sauf une liste de pour et de contre"],
            'ask' => "Note que j’ai pris un café avec Joey au Central Perk aujourd’hui.",
            'used' => "Monica utilisée",
            'reply' => "C’est fait. « Café » ajouté à la chronologie de Joey, le 11 octobre.",
        ],

        'features' => [
            'title' => "Quelques-unes de nos fonctionnalités",
            'lede' => "Tout le nécessaire pour noter ce qui se passe dans votre vie",
            'reminders' => [
                'title' => "Les anniversaires, avant qu’il soit trop tard.",
                'body' => "Des rappels pour les dates, les appels et les promesses. Par e-mail, à l’heure.",
                'rows' => [
                    ['name' => "Rachel Green", 'what' => "anniversaire", 'when' => "dans 23 jours"],
                    ['name' => "Chandler Bing", 'what' => "rappeler au sujet de Thanksgiving", 'when' => "demain"],
                    ['name' => "Joey Tribbiani", 'what' => "rembourser le loyer", 'when' => "six ans de retard"],
                ],
            ],
            'relationships' => [
                'title' => "Qui est qui, et qui est à qui.",
                'body' => "Arbres généalogiques, ex, parrains et marraines. Écrits comme des phrases.",
                'sentences' => [
                    ["Monica est la sœur de ", "Ross", "."],
                    ["Ross est le homard de ", "Rachel", "."],
                    ["Joey est le colocataire de ", "tout le monde", "."],
                ],
            ],
            'gifts' => [
                'title' => "Des idées cadeaux, notées en juillet.",
                'body' => "Pour que décembre ne tourne pas à la panique.",
                'ideas' => ["Un baby-foot", "Ce livre sur les dinosaures"],
                'crossed' => "Une liste de pour et de contre",
            ],
            'notes' => [
                'title' => "Des notes que vous retrouvez.",
                'body' => "Cherchez dans toutes les notes, sur chaque personne.",
                'query' => "allergique",
                'who' => "Ross :",
                'match' => "allergique aux kiwis. Monica l’oublie tout le temps.",
            ],
            'details' => [
                'title' => "Se souvient du poussin et du canard.",
                'body' => "Animaux, enfants, métiers, préférences alimentaires. Les détails qui comptent.",
                'fields' => [
                    ['label' => "Animaux", 'value' => "Un poussin et un canard"],
                    ['label' => "Café", 'value' => "Central Perk, tous les jours"],
                ],
            ],
            'vaults' => [
                'title' => "Un coffre pour chaque cercle.",
                'body' => "Famille, amis, travail. Bien séparés, partagés avec qui vous invitez.",
                'vaults' => [
                    ['name' => "Famille", 'count' => "24 personnes"],
                    ['name' => "Amis", 'count' => "61 personnes"],
                    ['name' => "Central Perk", 'count' => "6 personnes"],
                ],
            ],
        ],

        'privacy' => [
            'eyebrow' => "Confidentialité",
            'title' => "Contrairement à tous les autres acteurs du secteur, nous tenons à votre vie privée.",
            'aside' => "Beaucoup.",
            'source' => [
                'title' => "Open source",
                'body' => "Auditez notre code pour vérifier que nous ne faisons pas de bêtises.",
                'comment' => "// Ce que nous partageons avec des tiers",
            ],
            'trackers' => [
                'title' => "Ni pub, ni pisteurs, ni conneries",
                'body' => "Rien à vendre. Personne à qui le vendre.",
                'label' => "Requêtes vers des tiers",
                'rows' => ["Publicité", "Statistiques", "Courtiers en données", "Empreinte numérique"],
            ],
            'selfHost' => [
                'title' => "Nous vous conseillons l’auto-hébergement",
                'body' => "Une seule commande Docker. Votre serveur, vos règles, votre vie privée.",
                'pulling' => "Téléchargement de l’image… terminé",
                'running' => "Fonctionne sur votre serveur",
            ],
        ],

        // The prices themselves are not here: the Cloud card reads them from
        // `pricing.prices`, so the homepage and the pricing page cannot quote
        // two different numbers.
        'pricing' => [
            'badge' => "Sans publicité",
            'badgeText' => "Vos données sont portables, quelle que soit l’offre.",
            'title' => "Payez comme vous voulez. Ou pas.",
            'lede' => "Hébergez-la vous-même gratuitement, ou laissez Monica s’en charger pour vous.",
            'selfHost' => [
                'title' => "Auto-hébergement",
                'price' => "Gratuit",
                'per' => "pour toujours",
                'items' => ["Toutes les fonctionnalités, sans limite", "Déploiement Docker en une commande", "Contrôle total de vos données", "Le service informatique, c’est vous"],
                'cta' => "Lire la documentation",
            ],
            'cloud' => [
                'title' => "Cloud",
                'billingLabel' => "Périodicité de facturation",
                'monthly' => "Mensuel",
                'yearly' => "Annuel",
                'perMonth' => "par mois",
                'perYear' => "par an",
                'yearlyNote' => "Deux mois offerts",
                'lifetime' => "À vie",
                'once' => "une seule fois",
                'lifetimeNote' => "Aucun paiement récurrent",
                'items' => ["Hébergement géré", "Mises à jour et sauvegardes automatiques", "Personnes et coffres illimités", "Résiliable à tout moment"],
                'cta' => "Commencer avec Monica",
            ],
        ],

        'faq' => [
            'title' => "Vos questions, nos réponses.",
            'items' => [
                ['q' => "Est-ce un CRM commercial ?", 'a' => "Non. Personne ici n’a de pipeline. Monica est faite pour la famille, les amis et les gens avec qui vous comptez garder le contact."],
                ['q' => "L’auto-hébergement est-il vraiment gratuit ?", 'a' => "Oui. Toutes les fonctionnalités, sans limite, sous licence AGPL-3.0. Vous fournissez le serveur."],
                ['q' => "Qui peut voir mes données ?", 'a' => "Vous, et les personnes que vous invitez dans un coffre. Ni publicité, ni traceurs, ni revente de données. En auto-hébergement, elles ne quittent jamais votre serveur."],
                ['q' => "Puis-je passer du cloud à l’auto-hébergement ?", 'a' => "Oui, dans les deux sens. Exportez tout, importez-le de l’autre côté."],
                ['q' => "Est-ce que ça marche avec mon agent IA ?", 'a' => "S’il parle MCP, oui. Il existe aussi une API REST complète pour tout le reste."],
            ],
        ],
    ],

    'pricing' => [
        // The four prices, as a reader sees them. Everything below quotes them
        // through :free, :monthly, :yearly and :lifetime, and the homepage
        // reads them from here, so a price change is one edit per language
        // (plus `plans` in config.php, for the structured data).
        'prices' => [
            'free' => "0 $",
            'monthly' => "9 $",
            'yearly' => "90 $",
            'lifetime' => "150 $",
        ],

        'hero' => [
            'badge' => "Aucun frais par contact",
            'badgeText' => "Payez au mois, à l’année, une seule fois, ou jamais.",
            'title' => "Des tarifs qui se passent de rappel.",
            'lede' => "Hébergez-la vous-même pour rien. Laissez Monica s’en charger pour :monthly par mois ou :yearly par an. Ou payez :lifetime une fois et n’y pensez plus jamais. Le prix est le même, que vous connaissiez dix personnes ou dix mille.",
        ],

        'selfHost' => [
            'eyebrow' => "Première option · gratuite",
            'title' => "Hébergez-la vous-même. C’est gratuit, et c’est Monica tout entière.",
            'body' => "Monica est open source. Une seule commande Docker et elle tourne sur votre propre machine : votre serveur, vos règles, toutes les fonctionnalités. Pas d’essai, pas de formule bridée, pas de clé de licence.",
            'items' => [
                "Gratuite pour toujours, sous licence AGPL",
                "Toutes les fonctionnalités de Monica hébergée",
                "Vos données ne quittent jamais votre matériel",
                "Les mises à jour quand vous décidez de les récupérer",
            ],
            'cta' => "Lire le guide d’auto-hébergement",
            'terminal' => [
                'comment' => "# On récupère, on lance, c’est fini.",
                'pulling' => "Récupération de monica:latest…",
                'starting' => "Démarrage de la base de données…",
                'running' => "En service sur http://localhost:8080",
                'outro' => "# Maintenant, ajoutez votre mère.",
            ],
        ],

        'plans' => [
            'title' => "Trois façons d’y entrer. Toutes honnêtes.",
            'lede' => "Faites-la tourner vous-même, payez au fur et à mesure, ou payez une fois. Chaque offre a toutes les fonctionnalités. Vous choisissez seulement qui s’occupe du serveur.",
            'footnote' => "Prix en USD. Taxes ajoutées au paiement lorsque la loi l’exige. Aucun frais par contact, par rappel ou par coffre, quelle que soit l’offre.",

            'selfHost' => [
                'title' => "Auto-hébergée",
                'body' => "Pour celles et ceux qui ont déjà un serveur, ou qui cherchent une excuse pour en avoir un.",
                'per' => "pour toujours",
                'items' => [
                    "Code source complet, AGPL",
                    "Contacts et coffres illimités",
                    "Sauvegardes et mises à jour à votre charge",
                    "Support communautaire",
                ],
                'cta' => "Guide d’auto-hébergement",
            ],

            'hosted' => [
                'title' => "Hébergée",
                'badge' => "La plus choisie",
                'body' => "Pour celles et ceux qui veulent que Monica soit là, tout simplement.",
                'billingLabel' => "Périodicité de facturation",
                'monthly' => "Mensuel",
                'yearly' => "Annuel",
                'perMonth' => "/ mois",
                'perYear' => "/ an",
                'yearlyNote' => "2 mois offerts",
                'items' => [
                    "Contacts, rappels et coffres illimités",
                    "Mises à jour automatiques et sauvegardes quotidiennes",
                    "Rappels envoyés par e-mail",
                    "Support par e-mail assuré par de vraies personnes",
                    "Résiliation à tout moment, export complet",
                ],
                'cta' => "Commencer avec Monica",
            ],

            'lifetime' => [
                'title' => "À vie",
                'badge' => "Paiement unique",
                'body' => "Pour celles et ceux qui préfèrent ne plus jamais y penser.",
                'per' => "une fois",
                'items' => [
                    "Tout ce que propose l’offre hébergée",
                    "Un seul paiement, aucun renouvellement",
                    "Toutes les versions futures incluses",
                    "Passage à l’auto-hébergement quand vous voulez",
                ],
                'cta' => "Payer une fois, :lifetime",
            ],
        ],

        'calculator' => [
            'eyebrow' => "Le calculateur de tarif relationnel",
            'title' => "Combien devrait coûter votre vie sociale ?",
            'lede' => "Parlez-lui des gens de votre vie. Il pèse onze facteurs profondément personnels et produit un prix juste, sur mesure et parfaitement scientifique.",

            'sliders' => [
                'people' => ['label' => "Personnes dont vous aimeriez vous souvenir", 'help' => "Dunbar dit 150. Dunbar n’a jamais vu votre belle-famille au complet."],
                'birthdays' => ['label' => "Anniversaires oubliés l’an dernier", 'help' => "Y compris celui qui vous est revenu à 23 h 48."],
                'coffee' => ['label' => "Fois où vous avez dit « on se fait un café »", 'help' => "Et puis, pas de café."],
                'cousins' => ['label' => "Enfants de cousins dont vous ignorez le prénom", 'help' => "Vous savez qu’il y a un Léo. Peut-être deux."],
                'reminders' => ['label' => "Rappels que vous programmeriez", 'help' => "Monica les envoie tous, sans exception."],
                'mum' => ['label' => "Appels à votre mère, par mois", 'help' => "Elle l’a remarqué, dans un sens comme dans l’autre."],
            ],

            'toggles' => [
                'pretend' => ['label' => "Vous avez déjà fait semblant de vous souvenir d’un prénom", 'help' => "« Ah, salut… toi. »"],
                'notes' => ['label' => "Vous prenez des notes sur les gens dans votre téléphone", 'help' => "Monica, c’est cette idée, avec les dates en plus."],
                'dentist' => ['label' => "Vous connaissez le prénom de votre dentiste", 'help' => "Franchement, chapeau."],
                'belated' => ['label' => "Vous avez déjà souhaité un « joyeux anniversaire en retard »", 'help' => "Tout le monde l’a fait. Certains plus que d’autres."],
            ],

            'social' => [
                'label' => "Votre vie sociale",
                'help' => "Appliquée comme multiplicateur, parce que c’est comme ça que marchent les multiplicateurs.",
                'options' => [
                    'hermit' => "Ermite",
                    'reasonable' => "Raisonnable",
                    'mayor' => "Maire du village",
                ],
            ],

            'quote' => "Votre devis personnalisé",
            'planLabel' => "Offre",
            'plans' => [
                'monthly' => "Mensuel",
                'yearly' => "Annuel",
                'lifetime' => "À vie",
            ],

            // :count is a slider's value, :rate a made-up price per unit.
            'lines' => [
                'base' => [
                    'monthly' => "Monica, au mois",
                    'yearly' => "Monica, à l’année",
                    'lifetime' => "Monica, à vie",
                ],
                'people' => ":count personnes × :rate",
                'reminders' => ":count rappels",
                'birthdays' => ":count anniversaires oubliés × :rate de culpabilité",
                'coffee' => ":count cafés théoriques × :rate",
                'cousins' => ":count enfants de cousins anonymes × :rate",
                'mum' => ":count appels à maman × :rate de crédit",
                'pretend' => "Supplément pour prénom feint",
                'notes' => "Migration depuis votre appli de notes",
                'dentist' => "Bonus de familiarité dentaire",
                'belated' => "Frais de rattrapage « joyeux anniversaire en retard »",
                'multiplier' => "Multiplicateur de vie sociale ×:rate",
                'included' => "inclus",
                'free' => "gratuit",
            ],

            'subtotal' => "Sous-total",
            'refund' => "Tarif relationnel",
            'refundHelp' => "Ça n’existe pas chez Monica. Retiré intégralement.",
            'total' => "Votre total",
            'per' => [
                'monthly' => "/ mois",
                'yearly' => "/ an",
                'lifetime' => "une fois",
            ],

            'verdicts' => [
                'birthdays' => ":count anniversaires l’an prochain, tous couverts.",
                'coffee' => "Allez donc prendre un de ces cafés.",
                'mum' => "Appelez votre mère. Le devis peut attendre.",
                'default' => "Le même prix que tout le monde. C’est tout l’intérêt.",
            ],

            'cta' => "Bloquer ce prix suspect",
            'reset' => "Tout oublier et recommencer",
            'footnote' => "Chaque ligne ci-dessus est inventée, sauf le total. Monica coûte le même prix, que vous connaissiez trois personnes ou trois mille, que vous vous souveniez de tous les anniversaires ou d’aucun.",
        ],

        'promises' => [
            'people' => [
                'title' => "Jamais facturé à la personne",
                'body' => "Rencontrer quelqu’un ne devrait rien vous coûter. Contacts, rappels et coffres sont illimités dans toutes les offres.",
            ],
            'export' => [
                'title' => "Partez avec tout",
                'body' => "Exportez votre compte entier quand vous voulez, et emportez-le vers une Monica auto-hébergée ou ailleurs. Résilier tient en un bouton.",
            ],
            'openSource' => [
                'title' => "Open source depuis 2017",
                'body' => "Payer l’hébergement finance les serveurs et les personnes qui continuent de construire Monica, y compris pour tous ceux qui l’hébergent eux-mêmes.",
            ],
        ],

        'ninety' => [
            'eyebrow' => ":yearly en perspective",
            'title' => "Qu’est-ce qui coûte quatre-vingt-dix dollars ?",
            'lede' => "Une année de Monica hébergée, à côté de ce qu’on dépense d’habitude après avoir oublié quelque chose.",
            'about' => "~ :yearly",
            'items' => [
                'bouquets' => ['title' => "Trois bouquets d’excuses", 'body' => "Un par anniversaire oublié. Ceux de la station-service, achetés en chemin."],
                'gift' => ['title' => "Un cadeau en retard, livré en express", 'body' => "L’essentiel du prix, c’est la livraison. La totalité, c’est la culpabilité."],
                'coffees' => ['title' => "Dix-huit cafés", 'body' => "Ceux que vous deviez prendre. Monica vous rappelle d’en prendre vraiment un."],
                'streaming' => ['title' => "Six mois d’un service de streaming", 'body' => "Celui dont vous aviez oublié l’abonnement."],
                'cards' => ['title' => "Une carte pour chaque cousin", 'body' => "Plus les timbres. Plus le temps de retrouver où ils habitent maintenant."],
                'dinner' => ['title' => "Un dîner pour deux, sans dessert", 'body' => "Celui où vous demandez enfin comment ça va, et où vous écoutez la réponse."],
                'addressBook' => ['title' => "Un nouveau carnet d’adresses", 'body' => "En cuir, joliment fait, et de nouveau perdu au printemps."],
                'monica' => ['title' => "Une année à se souvenir de tout le monde", 'body' => "Anniversaires, prénoms des enfants, comment s’est passé l’entretien d’embauche. Ça, c’est Monica."],
            ],
            'footnote' => "Prix approximatifs, tirés de l’expérience. Une année de Monica coûte exactement :yearly.",
        ],

        'faq' => [
            'eyebrow' => "Questions sur le paiement",
            'title' => "Questions fréquentes, rarement oubliées.",
            'intro' => "Chaque réponse commence par la version courte. Ouvrez la longue si la courte a éveillé vos soupçons.",
            'search' => "Rechercher une question",
            'categoriesLabel' => "Filtrer les questions par thème",
            'categories' => [
                'all' => "Tout",
                'money' => "Argent",
                'plans' => "Offres",
                'selfHosting' => "Auto-hébergement",
                'data' => "Vos données",
                'leaving' => "Partir",
            ],
            'progress' => [
                'none' => "0 sur :total lues. Commencez où vous voulez.",
                'some' => ":count sur :total lues.",
                'many' => ":count sur :total lues. Vous en savez désormais plus que la plupart des gens qui s’inscrivent.",
                'all' => "Les :total lues. Vous pourriez répondre au support à notre place.",
            ],
            'random' => "Une question au hasard",
            'emptyTitle' => "Aucune question ne correspond",
            'emptyBody' => "Essayez un mot plus court, ou écrivez au support. De vraies personnes vous lisent.",
            'items' => [
                ['cat' => 'money', 'q' => "Combien coûte Monica ?", 'short' => "Rien, :monthly, :yearly ou :lifetime.", 'a' => "L’auto-hébergement est gratuit. Monica hébergée coûte :monthly par mois ou :yearly par an. L’offre à vie coûte :lifetime, en un seul paiement. Chaque option inclut toutes les fonctionnalités."],
                ['cat' => 'money', 'q' => "Le prix est-il par utilisateur ou par contact ?", 'short' => "Ni l’un ni l’autre.", 'a' => "Un compte, un prix. Ajoutez autant de contacts, de rappels, de coffres et de notes que vous voulez. Rencontrer de nouvelles personnes ne devrait jamais vous coûter d’argent."],
                ['cat' => 'money', 'q' => "Les taxes sont-elles incluses ?", 'short' => "Ajoutées au paiement lorsque la loi l’exige.", 'a' => "Si votre pays applique une taxe sur les ventes ou la TVA, elle s’affiche avant le paiement, de sorte que le montant que vous acceptez est celui qui vous est débité."],
                ['cat' => 'money', 'q' => "Puis-je payer dans une autre devise ?", 'short' => "Les prix sont en dollars américains.", 'a' => "Votre banque convertit le montant au moment du paiement. Le montant en dollars reste le même d’une année sur l’autre."],
                ['cat' => 'money', 'q' => "Le prix va-t-il augmenter ?", 'short' => "Pas pour l’offre que vous avez déjà.", 'a' => "Si les prix changent pour les nouveaux clients, les abonnements existants gardent leur prix. Nous vous prévenons longtemps à l’avance, par e-mail, avec le chiffre exact."],
                ['cat' => 'money', 'q' => "Proposez-vous des réductions ?", 'short' => "L’annuel revient deux mois moins cher.", 'a' => "Payer à l’année coûte :yearly au lieu de 108 $. Les étudiants et les associations peuvent écrire au support. L’auto-hébergement reste la plus grosse réduction de toutes : 100 %."],
                ['cat' => 'plans', 'q' => "Proposez-vous une offre à vie ?", 'short' => "Oui. :lifetime, une seule fois.", 'a' => "L’offre à vie, c’est Monica hébergée sans renouvellement. Elle inclut toutes les versions futures tant que Monica hébergée existe, et vous pouvez passer à l’auto-hébergement à tout moment."],
                ['cat' => 'plans', 'q' => "La version hébergée diffère-t-elle de la version auto-hébergée ?", 'short' => "C’est la même Monica.", 'a' => "Même code, mêmes fonctionnalités. La seule différence, c’est qui fait tourner le serveur, applique les mises à jour et garde les sauvegardes."],
                ['cat' => 'plans', 'q' => "Proposez-vous une offre entreprise ?", 'short' => "Non.", 'a' => "Monica est un CRM personnel, pour votre propre vie. Une équipe commerciale sera mieux servie par un outil commercial."],
                ['cat' => 'selfHosting', 'q' => "Monica est-elle vraiment open source ?", 'short' => "Oui, depuis 2017.", 'a' => "Le code source complet est public, sous licence AGPL. Vous pouvez le lire, l’exécuter, le modifier et y contribuer."],
                ['cat' => 'selfHosting', 'q' => "L’auto-hébergement est-il gratuit ?", 'short' => "Entièrement.", 'a' => "Pas de clé de licence, pas de fonctionnalité verrouillée, pas d’essai. Vous payez votre propre serveur, si vous en avez un, et votre propre temps."],
                ['cat' => 'selfHosting', 'q' => "Puis-je passer de l’hébergé à l’auto-hébergé ?", 'short' => "Oui, quand vous voulez.", 'a' => "Exportez votre compte et importez-le dans votre propre Monica. Le format est le même des deux côtés, donc rien ne se perd en route."],
                ['cat' => 'selfHosting', 'q' => "S’abonner soutient-il le projet open source ?", 'short' => "Directement.", 'a' => "Les revenus de l’hébergement paient les serveurs et les personnes qui continuent de développer Monica, y compris les parties que les auto-hébergeurs utilisent gratuitement."],
                ['cat' => 'data', 'q' => "Monica conserve-t-elle mes informations de paiement ?", 'short' => "Non.", 'a' => "Les paiements sont traités par le prestataire de paiement. Monica ne voit ni ne conserve jamais votre numéro de carte."],
                ['cat' => 'data', 'q' => "Mes données servent-elles à la publicité ?", 'short' => "Jamais.", 'a' => "Pas de publicité, pas de traceurs, et aucun tiers ne lit ce que vous écrivez sur votre famille."],
                ['cat' => 'data', 'q' => "Mes données servent-elles à entraîner des modèles d’IA ?", 'short' => "Non.", 'a' => "Ce que vous écrivez sur les gens de votre vie n’est pas de la matière d’entraînement, ni pour Monica, ni pour quiconque travaille avec Monica."],
                ['cat' => 'data', 'q' => "Les sauvegardes sont-elles incluses ?", 'short' => "Quotidiennes, sur les offres hébergées.", 'a' => "Les comptes hébergés et à vie sont sauvegardés chaque jour. Sur une Monica auto-hébergée, c’est à vous de planifier les sauvegardes."],
                ['cat' => 'data', 'q' => "Puis-je tout exporter ?", 'short' => "Tout.", 'a' => "Contacts, notes, rappels, relations, fichiers. L’export est disponible dans toutes les offres, y compris après la résiliation."],
                ['cat' => 'leaving', 'q' => "Puis-je résilier à tout moment ?", 'short' => "Oui, en un bouton.", 'a' => "Pas d’appel téléphonique, pas de formulaire pour vous retenir. Votre compte reste utilisable jusqu’à la fin de la période payée."],
                ['cat' => 'leaving', 'q' => "Y a-t-il des frais de résiliation ?", 'short' => "Non.", 'a' => "Résilier ne coûte rien. Revenir non plus."],
                ['cat' => 'leaving', 'q' => "Que se passe-t-il si mon paiement échoue ?", 'short' => "Rien ne disparaît.", 'a' => "Vous recevez un e-mail et disposez d’un délai de grâce pour mettre à jour votre carte. Vos données restent exactement où elles étaient."],
                ['cat' => 'leaving', 'q' => "Comment fonctionnent les remboursements ?", 'short' => "Demandez dans les 30 jours.", 'a' => "Si Monica n’est pas faite pour vous, écrivez au support dans les 30 jours suivant le paiement, et il vous est intégralement remboursé."],
                ['cat' => 'leaving', 'q' => "Puis-je supprimer mon compte ?", 'short' => "Oui, définitivement.", 'a' => "Supprimer votre compte efface vos données des serveurs. Les sauvegardes qui les contiennent expirent selon leur calendrier habituel."],
            ],
        ],
    ],

    'personalCrm' => [
        'eyebrow' => "Un guide pratique",
        'title' => "Qu’est-ce qu’un CRM personnel ?",
        'lede' => "Un CRM personnel est un espace privé où retenir le contexte autour des gens qui traversent votre vie : ce qu’ils vous ont raconté, ce qui compte pour eux et ce que vous vouliez leur redemander.",
        'intro' => "Contrairement à un CRM commercial, il est conçu pour des relations, pas pour un tunnel de vente. L’objectif n’est pas de gérer les gens. Il est de donner un coup de main à votre mémoire, pour arriver avec un peu plus de contexte.",

        'toc' => [
            'label' => "Dans ce guide",
            'items' => [
                ['id' => 'definition', 'title' => "La définition courte"],
                ['id' => 'comparison', 'title' => "Ce qui le distingue des autres outils"],
                ['id' => 'contents', 'title' => "Ce qu’on peut y garder"],
                ['id' => 'fit', 'title' => "À qui il sert"],
                ['id' => 'approaches', 'title' => "Les grandes approches"],
                ['id' => 'history', 'title' => "D’où cela vient"],
                ['id' => 'privacy', 'title' => "Vie privée et éthique"],
                ['id' => 'hosting', 'title' => "Cloud ou auto-hébergement"],
                ['id' => 'choosing', 'title' => "Comment choisir"],
                ['id' => 'monica', 'title' => "L’approche de Monica"],
            ],
        ],

        'definition' => [
            'label' => "La définition courte",
            'title' => "Un CRM personnel retient plus que des coordonnées.",
            'body' => "Votre carnet d’adresses connaît le numéro de Sam. Un CRM personnel peut vous rappeler que Sam s’entraîne pour un semi-marathon, que sa fille s’appelle Maya et que vous aviez promis de lui envoyer le titre de ce livre.",
            'body2' => "Il relie des faits à l’histoire d’une relation. Selon l’outil, cela peut comprendre des notes, des conversations, des activités, des dates importantes, des rappels, les liens entre les personnes et les informations sur mesure que vous jugez utiles.",
            'aside' => "Un bon CRM personnel vous aide à vous souvenir. Il ne décide pas de la valeur d’une personne.",
        ],

        'comparison' => [
            'label' => "Trois usages différents",
            'title' => "Un carnet d’adresses, un CRM personnel et un CRM traditionnel ne font pas le même travail.",
            'body' => "Tous les trois stockent des informations sur des personnes, mais ils sont bâtis autour de questions différentes. Les appeler tous « gestion de contacts » masque l’essentiel : à quoi sert l’information.",
            'cards' => [
                [
                    'title' => "Carnet d’adresses",
                    'question' => "Comment joindre cette personne ?",
                    'body' => "Des noms, des numéros de téléphone, des adresses e-mail, des adresses postales et parfois un anniversaire. Simple, familier et suffisant pour beaucoup de gens.",
                ],
                [
                    'title' => "CRM personnel",
                    'question' => "Quel contexte ai-je envie de retenir ?",
                    'body' => "La personne, votre relation, ce qui s’est passé et ce que vous voulez retenir ou faire plus tard.",
                ],
                [
                    'title' => "CRM traditionnel",
                    'question' => "Où en est cette relation client ?",
                    'body' => "Des pistes, des comptes, des affaires, des demandes de service, du chiffre d’affaires, l’activité de l’équipe et les étapes d’un processus commercial.",
                ],
            ],
            'tableTitle' => "CRM personnel et CRM traditionnel",
            'tableHeadings' => ["", "CRM personnel", "CRM traditionnel"],
            'rows' => [
                ["Objectif principal", "Retenir le contexte personnel et tenir ses engagements", "Coordonner la vente, le marketing ou le service client"],
                ["Personnes représentées", "Des amis, la famille, des voisins, des collègues et les autres gens de votre vie", "Des pistes, des clients, des comptes et des contacts professionnels"],
                ["Informations habituelles", "Des liens, des souvenirs, des conversations, des dates, des notes et des rappels", "Des affaires, du chiffre d’affaires, des campagnes, l’historique du support et les étapes du tunnel"],
                ["La réussite ressemble à", "Vous avez le contexte dont vous avez besoin au moment où il compte", "Un processus commercial avance et se mesure"],
                ["Utilisé en général par", "Une personne, parfois un foyer", "Une entreprise ou une équipe"],
            ],
            'closing' => "Les CRM traditionnels sont de bons outils pour la tâche qu’ils ont été conçus pour accomplir. Les ennuis commencent quand le vocabulaire et les logiques de la vente débarquent dans la vie privée. Vos amis ne sont pas des prospects, et un mois plus calme n’est pas un tunnel bloqué.",
        ],

        'contents' => [
            'label' => "Ce qu’on y met",
            'title' => "Gardez assez de contexte pour que ce soit utile. Pas plus.",
            'body' => "Un CRM personnel peut devenir un dossier détaillé sur la vie de quelqu’un d’autre. C’est une raison d’être sélectif, pas une raison de remplir tous les champs disponibles. Notez une information parce qu’elle vous aide à vous souvenir ou à tenir un engagement, pas parce que le logiciel vous propose une case vide.",
            'groups' => [
                ['title' => "Identité et coordonnées", 'body' => "Des noms, des pronoms, des numéros de téléphone, des adresses e-mail, des lieux et les noms que la personne utilise réellement."],
                ['title' => "Liens", 'body' => "Comment vous connaissez quelqu’un, les personnes qui lui sont proches et les liens de famille ou de foyer qui donnent du sens au reste."],
                ['title' => "Dates importantes", 'body' => "Des anniversaires, des dates de rencontre, un déménagement, un diplôme ou toute date qui compte pour cette personne ou pour votre histoire commune."],
                ['title' => "Conversations et notes", 'body' => "Ce dont vous avez parlé, une recommandation qu’on vous a faite, une inquiétude qu’on vous a confiée ou un détail que vous ne voulez pas redemander une troisième fois."],
                ['title' => "Activités et souvenirs", 'body' => "Des repas, des appels, des voyages, des visites, des projets et les autres moments que vous voudrez peut-être resituer plus tard."],
                ['title' => "Engagements et rappels", 'body' => "Une promesse faite, un objet prêté, une idée de cadeau ou un rappel pour demander comment cela s’est passé."],
            ],
            'note' => "Les informations sensibles méritent une exigence plus haute. Si les noter ressemblerait à une trahison au moment de les relire devant la personne concernée, ce sentiment est une information utile.",
        ],

        'example' => [
            'label' => "Un petit exemple",
            'title' => "À quoi ressemble vraiment l’usage d’un CRM personnel",
            'body' => "La partie utile est en général très ordinaire. Il s’agit moins de bâtir une base de données parfaite que de refermer les petites boucles que votre mémoire laisserait ouvertes.",
            'steps' => [
                ["number" => "01", 'title' => "Un ami parle d’un entretien", 'body' => "Vous prenez une note courte après la conversation. Pas une transcription, juste le contexte que vous voulez retenir."],
                ["number" => "02", 'title' => "Vous programmez un rappel", 'body' => "Le rappel est rattaché à la personne et arrive après l’entretien, au moment où la question sera utile."],
                ["number" => "03", 'title' => "Vous reprenez contact avec du contexte", 'body' => "Vous demandez comment cela s’est passé parce que vous y tenez. Le logiciel s’est souvenu du calendrier ; la relation reste la vôtre."],
            ],
        ],

        'fit' => [
            'label' => "Pertinence",
            'title' => "Certaines personnes en ont besoin. Beaucoup d’autres non.",
            'body' => "Un CRM personnel ne mérite sa place que s’il résout un vrai problème de mémoire ou de suivi. Il doit alléger la charge mentale, pas créer un nouveau loisir administratif.",
            'goodTitle' => "Il peut aider si vous…",
            'good' => [
                "tenez à plus de gens que votre mémoire immédiate ne peut en retenir ;",
                "avez des amis ou de la famille dispersés entre plusieurs villes, pays ou étapes de vie ;",
                "oubliez régulièrement des prénoms, des dates, des promesses ou les détails qu’on vous confie ;",
                "accompagnez, faites du bénévolat, animez une communauté ou vous occupez d’une famille élargie ;",
                "voulez un seul espace privé pour un contexte relationnel éparpillé entre des notes et des agendas.",
            ],
            'notTitle' => "Vous n’en avez probablement pas besoin si…",
            'not' => [
                "votre carnet d’adresses et votre agenda couvrent déjà ce que vous oubliez ;",
                "tenir des fiches vous pèse plus que le problème qu’elles résolvent ;",
                "vous voulez seulement un endroit pour des numéros de téléphone et des anniversaires ;",
                "vous cherchez des tunnels de vente en équipe, de la prospection de masse, des prévisions commerciales ou de l’analyse client. Un CRM traditionnel fait mieux ce travail.",
            ],
        ],

        'approaches' => [
            'label' => "Un cadre utile",
            'title' => "Les CRM personnels ne font pas les mêmes compromis.",
            'body' => "Le CRM personnel est une catégorie floue, pas une norme. Les approches ci-dessous servent à comparer des produits, ce ne sont pas des étiquettes officielles du secteur. Beaucoup d’outils en combinent plusieurs.",
            'items' => [
                ['title' => "Le réseau d’abord", 'body' => "Bâti autour des relations professionnelles, des mises en relation et du maintien du contact. Utile quand le travail dépend de nombreuses relations de longue durée, mais le vocabulaire de la vente peut s’inviter dans la vie privée."],
                ['title' => "L’automatisation d’abord", 'body' => "Récupère le contexte depuis la messagerie, les agendas, les réseaux sociaux ou d’autres services. La saisie manuelle diminue, en échange d’un accès plus large et parfois d’une collecte plus vaste que prévu."],
                ['title' => "La productivité d’abord", 'body' => "Traite les relances comme des tâches et des rappels récurrents. C’est clair et actionnable, mais une relation peut finir par ressembler à une boîte de réception si chaque échange devient une obligation."],
                ['title' => "La mémoire d’abord", 'body' => "Place au centre les notes, les activités, les dates et l’histoire commune. Cela demande une saisie plus volontaire, mais vous décidez de ce qui entre dans la fiche."],
                ['title' => "Base de données personnelle", 'body' => "Vous laisse concevoir vos propres fiches, vos champs et vos liens. Assez souple pour des vies inhabituelles, au prix d’une mise en place et d’un entretien plus lourds."],
            ],
        ],

        'history' => [
            'label' => "Une brève histoire",
            'title' => "Le CRM personnel a emprunté la mémoire des logiciels d’entreprise, puis en a changé la finalité.",
            'body' => "Personne ne s’accorde sur l’inventeur du CRM personnel. La catégorie a grandi peu à peu, à partir des carnets d’adresses, des gestionnaires de contacts, des logiciels de CRM d’entreprise et des outils d’information personnelle.",
            'items' => [
                ['date' => "Avant les logiciels", 'title' => "Le contexte relationnel tenait sur du papier", 'body' => "Carnets d’adresses, dossiers de correspondance, agendas et fiches annotées séparaient déjà les coordonnées du reste, que la mémoire retient mal."],
                ['date' => "1987", 'title' => "La gestion de contacts arrive sur les ordinateurs personnels", 'body' => "Act! fait remonter son premier logiciel de gestion de contacts à 1987. Les premiers outils étaient souvent décrits comme des Rolodex numériques, avant que le mot CRM ne s’impose."],
                ['date' => "Milieu des années 1990", 'title' => "Le CRM devient une catégorie d’entreprise", 'body' => "Les travaux universitaires situent l’apparition de l’expression customer relationship management au milieu des années 1990, quand les fiches de contact sont devenues une pièce de systèmes de vente et de service plus larges."],
                ['date' => "À partir de 1999", 'title' => "Le CRM passe dans le cloud", 'body' => "Salesforce est lancée en 1999 avec un CRM accessible par le web. Le logiciel en ligne a rendu normales les fiches partagées, les mises à jour automatiques et les intégrations."],
                ['date' => "Années 2010", 'title' => "Le CRM personnel devient une étiquette identifiable", 'body' => "De nouveaux produits ont appliqué une partie de ces idées aux relations professionnelles et privées d’une personne. En 2019, la catégorie était assez installée pour susciter autant d’enthousiasme que de gêne à l’idée d’optimiser l’amitié."],
            ],
            'sourcesLabel' => "Sources de cette chronologie",
            'sources' => [
                ['label' => "Histoire de l’entreprise Act!", 'url' => 'https://www.act.com/about-us/'],
                ['label' => "Histoire universitaire du CRM", 'url' => 'https://www.sciencedirect.com/science/article/pii/S0963868707000182'],
                ['label' => "Histoire de l’entreprise Salesforce", 'url' => 'https://www.salesforce.com/company/our-story'],
                ['label' => "Axios sur le CRM personnel en 2019", 'url' => 'https://www.axios.com/2019/08/27/startups-new-frontier-optimizing-your-friendships'],
            ],
        ],

        'privacy' => [
            'label' => "Vie privée et éthique",
            'title' => "Le compte est le vôtre. Une grande partie de ce qu’il contient parle d’autres personnes.",
            'body' => "Cela rend un CRM personnel particulièrement sensible. Il peut contenir des adresses, des liens de famille, des conversations privées, des détails de santé ou des souvenirs confiés en confidence. Un mot de passe est nécessaire, mais le discernement commence avant le premier enregistrement.",
            'principles' => [
                ['title' => "Collecter moins", 'body' => "Gardez ce qui a une raison d’être claire. Plus complet n’est pas automatiquement plus utile."],
                ['title' => "Respecter le contexte d’origine", 'body' => "Une information partagée dans une conversation privée ne devient pas exploitable pour de l’enrichissement, de l’analyse ou une diffusion plus large sous prétexte qu’elle est facile à copier."],
                ['title' => "Savoir où l’automatisation envoie les données", 'body' => "La synchronisation des e-mails, la transcription, l’enrichissement et les fonctions d’IA passent parfois par d’autres services. Vérifiez ce qui quitte l’application, pourquoi, pour combien de temps et si cela sert à entraîner des modèles."],
                ['title' => "Prévoir la perte et le départ", 'body' => "Utilisez des accès solides et des sauvegardes. Assurez-vous de pouvoir exporter vos données dans un format exploitable et de les supprimer au moment de partir."],
                ['title' => "Écrire pour le lecteur possible", 'body' => "Un bon test consiste à vous demander si vous pourriez expliquer une note à la personne qu’elle décrit, sans vous cacher derrière le logiciel."],
            ],
            'closing' => "Un CRM personnel n’est ni attentionné ni malsain par nature. La différence tient souvent à ce que vous collectez, à la façon dont c’est arrivé là, à qui peut y accéder et à ce que vous en faites.",
        ],

        'hosting' => [
            'label' => "Où il tourne",
            'title' => "Le cloud et l’auto-hébergement déplacent la responsabilité.",
            'body' => "Un service hébergé confie l’exploitation de l’application à un prestataire. L’auto-hébergement vous donne la main sur le serveur et écarte ce prestataire du quotidien. Aucun des deux choix n’est plus sûr d’office. La sécurité dépend des mises à jour, des accès, des sauvegardes, de la surveillance et des personnes qui s’en occupent.",
            'tableHeadings' => ["", "Service hébergé", "Auto-hébergé"],
            'rows' => [
                ["Maintenance", "Le prestataire exploite et met à jour le service", "Vous installez, mettez à jour et surveillez"],
                ["Contrôle", "Vous travaillez dans le produit et les règles du prestataire", "Vous maîtrisez le serveur, la configuration et le déploiement"],
                ["Sauvegardes", "Gérées en général par le prestataire ; vérifiez ce qui est inclus", "Vous les configurez, les protégez et les testez"],
                ["Disponibilité", "Accessible en général sans gérer d’infrastructure", "Dépend de l’infrastructure que vous exploitez"],
                ["Localisation des données", "Dépend du prestataire et de ses sous-traitants", "Dépend du serveur et des services que vous choisissez"],
                ["Convient si", "Vous voulez l’outil sans exploiter un service", "Vous avez les compétences et l’envie de l’exploiter vous-même"],
            ],
            'note' => "L’auto-hébergement donne plus de contrôle. Il donne aussi plus d’occasions de commettre une erreur sérieuse. Choisissez-le parce que vous voulez cette responsabilité, pas parce que l’étiquette a l’air rassurante.",
        ],

        'choosing' => [
            'label' => "Avant de choisir un outil",
            'title' => "Partez de l’habitude que vous voulez prendre, puis examinez le logiciel.",
            'body' => "La plus longue liste de fonctionnalités dit rarement quel CRM personnel survivra au contact de votre vie réelle. Un outil modeste que vous continuez d’utiliser vaut mieux qu’un système parfait que vous évitez d’ouvrir.",
            'questions' => [
                ['title' => "De quoi voulez-vous vous souvenir ?", 'body' => "Des prénoms et des dates n’appellent pas le même outil qu’un historique détaillé, des rappels de relance ou une base de données personnelle souple."],
                ['title' => "Combien de travail demande la saisie ?", 'body' => "Décidez si vous préférez des notes prises volontairement, de larges imports automatiques ou quelque chose entre les deux."],
                ['title' => "Quels accès demande-t-il ?", 'body' => "Regardez s’il lit vos e-mails, vos agendas, vos contacts, vos réseaux sociaux ou vos messages, et si chaque autorisation est nécessaire."],
                ['title' => "Comment utilise-t-il l’IA ?", 'body' => "Cherchez quelles données partent vers quel fournisseur de modèle, ce qui est conservé, si l’entraînement est autorisé et si la fonction peut être désactivée."],
                ['title' => "Pouvez-vous partir ?", 'body' => "Cherchez un export complet, des formats compréhensibles, la suppression du compte et un plan crédible pour l’entretien du produit sur la durée."],
                ['title' => "Qui l’exploite ?", 'body' => "Comparez le confort d’un service hébergé avec le contrôle et le travail de l’auto-hébergement. Comptez les sauvegardes et les mises à jour dans la décision."],
                ['title' => "Peut-il coller à vos relations ?", 'body' => "Des champs rigides sont parfois plus simples. Des fiches sur mesure collent parfois mieux. Choisissez la souplesse que vous utiliserez vraiment."],
            ],
        ],

        'monica' => [
            'label' => "Le point de vue de Monica",
            'title' => "La mémoire plutôt que l’automatisation. Les relations plutôt que le réseau.",
            'body' => "Monica est une réponse à la question du CRM personnel, pas la définition de la catégorie. Elle est partie d’une idée simple : retenir les détails qui aident à prendre soin de ses amis et de sa famille, sans transformer ces gens en prospects ni confier leur vie à un système publicitaire.",
            'principles' => [
                ['title' => "Le contexte compte plus que les coordonnées", 'body' => "Monica relie les personnes à des notes, des activités, des rappels, des dates importantes et les liens autour d’elles."],
                ['title' => "Vous choisissez ce qui entre dans la fiche", 'body' => "Monica préfère une mémoire volontaire à un enrichissement invisible. Le but n’est pas d’avaler tous les signaux possibles."],
                ['title' => "La propriété fait partie du produit", 'body' => "Monica est open source, peut être auto-hébergée et propose une version hébergée pour qui ne veut pas gérer de serveur."],
                ['title' => "Des vies différentes demandent des structures différentes", 'body' => "Monica v3 se construit autour de fiches et de liens plus personnalisables, en gardant les principes de confidentialité et de propriété du projet."],
            ],
            'currentCta' => "Voir ce que Monica peut retenir",
            'v3Cta' => "En savoir plus sur Monica v3",
            'privacyCta' => "Lire la politique de confidentialité de Monica",
            'finalTitle' => "Un CRM personnel doit vous aider à être attentif, puis s’effacer.",
            'finalBody' => "Si l’approche de Monica correspond à la façon dont vous voulez vous souvenir des gens, vous pouvez utiliser la version hébergée ou installer vous-même l’application open source.",
            'primaryCta' => "Commencer avec Monica",
            'secondaryCta' => "Voir Monica sur GitHub",
        ],

        'faq' => [
            'label' => "Questions fréquentes",
            'title' => "Quelques réponses honnêtes avant de bâtir un second cerveau pour votre vie sociale.",
            'items' => [
                ['q' => "Est-ce malsain d’utiliser un CRM personnel ?", 'a' => [
                    "Cela peut l’être. Collecter en silence des informations sensibles, importer des conversations privées sans précaution ou noter les gens dépasse les limites raisonnables pour beaucoup de monde.",
                    "Un petit ensemble privé de notes et de rappels peut aussi être une aide ordinaire à la mémoire. Ce que vous collectez, la façon dont c’est arrivé là et l’usage que vous en faites comptent plus que l’étiquette.",
                ]],
                ['q' => "Puis-je utiliser mon application de contacts, mon agenda ou mes notes à la place ?", 'a' => "Oui. Si ces outils règlent le problème, continuez avec eux. Un CRM personnel devient utile quand vous voulez relier la personne, le contexte, l’historique et le suivi au même endroit."],
                ['q' => "Un CRM personnel sert-il seulement au réseau professionnel ?", 'a' => "Non. Certains produits visent surtout les relations professionnelles. D’autres se concentrent sur les amis, la famille, une communauté ou un mélange. Le bon choix dépend des relations et des habitudes que vous avez vraiment."],
                ['q' => "L’auto-hébergement protège-t-il mieux la vie privée ?", 'a' => "Il peut réduire le nombre de prestataires impliqués et vous donner plus de contrôle. Il ne configure pas pour vous les mises à jour, les sauvegardes, le chiffrement ni les accès. La confidentialité et la sécurité dépendent toujours de la façon dont le système est exploité."],
                ['q' => "Combien d’informations faut-il noter ?", 'a' => "Commencez par le minimum qui règle votre problème. Des dates, quelques notes et un rappel de temps en temps suffisent à beaucoup de gens. N’ajoutez de la structure que lorsqu’elle mérite son coût d’entretien."],
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
            'cake' => "Gâteau préféré",
            'cannotEat' => "Ne mange pas",
            'coffee' => "Commande de café",
            'shoeSize' => "Pointure",
            'nameDay' => "Fête du prénom",
            'giftIdeas' => "Idées de cadeaux",
            'idea' => "Idée",
            'given' => "Déjà offert",
            'howWeMet' => "Notre rencontre",
        ],
        'types' => [
            'shortText' => "Texte court",
            'longText' => "Texte long",
            'number' => "Nombre",
            'multipleChoice' => "Choix multiple",
            'recurringDate' => "Date récurrente",
            'repeater' => "Groupe répétable",
            'checkbox' => "Case à cocher",
        ],
        'section' => "Petites choses à retenir",
        'addField' => "Ajouter un champ",
        'fieldCount' => ":count champs",
        'publish' => "Publier cette version",
        'draft' => "Brouillon",
        'published' => "Publiée",
        'friends' => "Amis",

        'hero' => [
            'title' => "Vos contacts, à votre façon.",
            'lede' => "Retenez ce qui compte pour vous. Créez des modèles de contact avec vos propres champs, sections et onglets, pour que la fiche de chaque personne ait la place des détails que vous voulez garder.",
            'cta' => "Créer votre compte",
            'label' => "La fiche de contact de Rachel Green dans Monica, ouverte sur l’onglet Petites choses, à côté de la section du modèle Amis qui donne ses champs à la fiche.",
            'meta' => "Modèle Amis · ajouté il y a 3 ans",
            'tabs' => ["Général", "Moyens de contact", "Petites choses", "Projets"],
            'values' => [
                'cake' => "Cheesecake de Mama’s Little Bakery, à Chicago",
                'cannotEat' => ["Homard", "Oignon cru"],
                'coffee' => "Latte, au Central Perk",
                'shoeSize' => "38",
            ],
            'story' => "Entrée en trombe au Central Perk, trempée, en robe de mariée, le jour où elle a plaqué Barry devant l’autel. Elle a emménagé le soir même.",
            'behind' => "Le modèle derrière cette fiche",
        ],

        'birthday' => [
            'title' => "Un anniversaire, c’est utile. Connaître son gâteau préféré aussi.",
            'body' => "Un carnet d’adresses garde des numéros de téléphone. Vous aimeriez peut-être aussi retenir comment vous vous êtes rencontrés, ce qu’une personne cherche à accomplir, ou ce qu’elle ne peut pas manger.",
            'close' => "Avec Monica, vous choisissez ce qui figure sur vos fiches de contact.",
            'label' => "Une entrée de carnet d’adresses avec un numéro de téléphone et un anniversaire, et la fiche de Ross Geller dans Monica, qui contient aussi son gâteau préféré, comment vous vous êtes rencontrés, ce qu’il cherche à accomplir et ce qu’il ne peut pas manger.",
            'addressBook' => "Un carnet d’adresses",
            'rows' => [
                ['label' => "Téléphone", 'value' => "+1 212 555 0174"],
                ['label' => "Anniversaire", 'value' => "18 octobre 1967"],
            ],
            'monica' => [
                ['label' => "Anniversaire", 'value' => "18 octobre · dans trois semaines"],
                ['label' => "Gâteau préféré", 'value' => "Carrot cake, double ration de noix"],
                ['label' => "Notre rencontre", 'value' => "Le frère de Monica, à l’université"],
                ['label' => "Objectif", 'value' => "La titularisation à NYU"],
                ['label' => "Ne mange pas", 'value' => ["Kiwi", "Homard"]],
            ],
        ],

        'people' => [
            'title' => "Des personnes différentes. Des détails différents.",
            'close' => "Créez des modèles différents pour les personnes de votre vie. Chacun peut avoir sa propre structure.",
            'cards' => [
                [
                    'title' => "Amis",
                    'body' => "Leurs choses préférées, leurs projets pour l’été et l’histoire de votre rencontre.",
                    'label' => "Une fiche de contact construite à partir d’un modèle Amis, avec les onglets Préférences, Été et Notre histoire.",
                    'tabs' => ["Préférences", "Été", "Notre histoire"],
                    'rows' => [
                        ['label' => "Groupe", 'value' => "Khruangbin"],
                        ['label' => "Livre", 'value' => "Les Vestiges du jour"],
                        ['label' => "Projet d’été", 'value' => "La Loire à vélo, en juillet"],
                    ],
                ],
                [
                    'title' => "Famille",
                    'body' => "Les traditions qui leur tiennent à cœur, les dates importantes et la recette qu’ils promettent toujours d’envoyer.",
                    'label' => "Une fiche de contact construite à partir d’un modèle Famille, avec les onglets Traditions, Dates et Recettes.",
                    'tabs' => ["Traditions", "Dates", "Recettes"],
                    'rows' => [
                        ['label' => "Réveillon de Noël", 'value' => "Huîtres, puis messe de minuit"],
                        ['label' => "Fête du prénom", 'value' => "26 juillet"],
                        ['label' => "Recette promise", 'value' => "Le clafoutis de mamie"],
                    ],
                ],
                [
                    'title' => "Contacts professionnels",
                    'body' => "Leur domaine d’expertise, l’endroit où vous avez échangé pour la première fois et le sujet que vous vouliez reprendre la prochaine fois.",
                    'label' => "Une fiche de contact construite à partir d’un modèle pour les contacts professionnels, avec les onglets Travail, Moyens de contact et Prochaine fois.",
                    'tabs' => ["Travail", "Moyens de contact", "Prochaine fois"],
                    'rows' => [
                        ['label' => "Expertise", 'value' => "Chaînes logistiques dans la grande distribution alimentaire"],
                        ['label' => "Premier échange", 'value' => "Lyon, lors d’une table ronde sur la logistique"],
                        ['label' => "À reprendre", 'value' => "Son projet pilote de chaîne du froid"],
                    ],
                ],
            ],
        ],

        'room' => [
            'title' => "Faites de la place à ce qui compte.",
            'body' => [
                "Ajoutez des champs pour du texte, des dates, des nombres ou un choix dans une liste. Donnez-leur des noms qui ont du sens pour vous.",
                "Regroupez les champs liés en sections, répartissez ces sections en onglets et mettez le tout dans l’ordre que vous préférez. Pour les détails qui reviennent en plusieurs exemplaires, utilisez un groupe répétable.",
            ],
            'close' => "Une section « Petites choses à retenir » ? Tout à fait raisonnable.",
            'label' => "L’éditeur de modèles dans Monica, avec un brouillon du modèle Amis ouvert sur sa page Petites choses. Le champ Ne mange pas est sélectionné, et le panneau à côté affiche son nom, son type et sa liste de choix.",
            'version' => "v2 · basée sur v1",
            'saved' => "Enregistré il y a 4 secondes",
            'import' => "Importer une section",
            'pages' => [
                ['name' => "Général", 'count' => 5],
                ['name' => "Petites choses", 'count' => 6],
                ['name' => "Projets", 'count' => 3],
            ],
            'addPage' => "Ajouter une page",
            'field' => "Champ",
            'name' => "Nom",
            'type' => "Type",
            'choices' => "Choix",
            'choiceList' => ["Cacahuètes", "Gluten", "Crustacés", "Produits laitiers", "Oignon cru"],
            'addChoice' => "Ajouter un choix",
            'note' => "Ce que vous modifiez s’applique uniquement à ce brouillon.",
        ],

        'reuse' => [
            'title' => "Construisez-le une fois. Réutilisez-le.",
            'body' => [
                "Un modèle donne la même structure à plusieurs fiches de contact. Chaque personne garde ses propres informations.",
                "Ajoutez « Notre rencontre » à votre modèle Amis, et vous avez un endroit pour une histoire différente sur la fiche de chaque ami. Choisissez un modèle par défaut pour chaque coffre afin de donner aux nouveaux contacts le bon point de départ.",
            ],
            'label' => "Un seul champ Notre rencontre dans le modèle Amis, rempli avec une histoire différente sur les fiches de trois amis, et le modèle Amis choisi par défaut pour les nouveaux contacts du coffre Amis.",
            'template' => "Modèle Amis",
            'stories' => [
                'Rachel' => "Entrée au Central Perk en robe de mariée.",
                'Ross' => "Le frère de Monica, à l’université.",
                'Joey' => "A répondu à l’annonce pour la chambre libre de Chandler.",
            ],
            'default' => "Modèle par défaut",
            'defaultBody' => "Les nouveaux contacts du coffre Amis commencent ici",
        ],

        'versions' => [
            'title' => "Changez d’avis sans perdre vos notes.",
            'body' => [
                "Vous voudrez peut-être ajouter un détail, renommer un champ ou déplacer une section. Vos modèles peuvent évoluer avec vous.",
                "Préparez un brouillon et publiez-le quand il est prêt. Les contacts existants restent sur leur version actuelle tant que vous ne choisissez pas de les mettre à jour.",
                "Retirez un champ d’un modèle, et les informations déjà saisies sont conservées. Vous pouvez toujours les retrouver, et elles reviennent sur la fiche si vous remettez le champ.",
            ],
            'label' => "L’historique des versions d’un modèle, avec un brouillon v3 en attente de publication pendant que 34 contacts restent sur la v2, et la fiche de Rachel Green qui conserve sa pointure issue d’un champ retiré, avec un bouton pour remettre le champ.",
            'history' => "Historique des versions",
            'rows' => [
                ['version' => "v3", 'text' => "Ajout de « Fête du prénom », « Allergies » renommé en « Ne mange pas »", 'status' => 'draft'],
                ['version' => "v2", 'text' => "Publiée le 2 juin · 34 contacts", 'status' => 'published'],
                ['version' => "v1", 'text' => "Publiée le 9 janvier · 3 contacts", 'status' => null],
            ],
            'notice' => "La publication de la v3 laisse 34 contacts sur la v2 jusqu’à ce que vous les mettiez à jour.",
            'values' => [
                'cake' => "Cheesecake de Mama’s Little Bakery",
                'coffee' => "Latte, au Central Perk",
            ],
            'kept' => "Conservé depuis un champ retiré",
            'restore' => "Remettre le champ",
        ],

        'share' => [
            'title' => "Partagez le modèle. Gardez les détails pour vous.",
            'body' => [
                "Vous avez créé quelque chose d’utile ? Exportez un modèle entier ou une seule section pour que quelqu’un d’autre l’importe dans son compte.",
                "Le fichier contient la structure que vous avez construite, avec ses libellés et ses listes de choix. Vos contacts et leurs informations restent chez vous.",
            ],
            'label' => "Export de la section Petites choses à retenir. Le fichier contient la section, les libellés et les types de ses six champs et la liste de choix Ne mange pas. Vos 34 contacts et tout ce qui est écrit sur leurs fiches restent chez vous.",
            'export' => "Exporter cette section",
            'inFile' => "Dans le fichier",
            'inFileItems' => ["La section et son nom", "6 libellés et types de champs", "La liste de choix « Ne mange pas »"],
            'stays' => "Reste chez vous",
            'staysItems' => ["Vos 34 contacts", "Tout ce qui est écrit sur leurs fiches"],
            'file' => "petites-choses-a-retenir.json · 3 Ko",
            'download' => "Télécharger",
        ],

    ],

    /**
     * The details page, "Remember the details that matter". Every picture on
     * it is a drawing of the product, so each one carries a `label` that a
     * screen reader reads instead of the drawing itself. The people are the
     * Friends characters, whose names are not translated and live in the
     * partials.
     */
    'details' => [
        'hero' => [
            'title' => "Retenez les détails qui comptent.",
            'lede' => "Son numéro est dans votre téléphone. Le prénom de son nouveau compagnon, son plat préféré et ce qu’elle vous a raconté la dernière fois sont plus difficiles à retrouver.",
            'close' => "Gardez ces détails ensemble dans Monica, prêts pour la prochaine conversation.",
            'cta' => "Créer votre compte",
            'label' => "La fiche de contact de Rachel Green dans Monica, ouverte sur l’onglet Général. Son compagnon s’appelle Joshua, son plat préféré est la lasagne de Monica sans bœuf, et elle travaille aux achats chez Bloomingdale’s. Une note d’il y a six jours indique qu’elle a un entretien à Paris le mois prochain.",
            'vault' => "Personnel",
            'people' => "Personnes",
            'meta' => [
                ['label' => "Catégorie", 'value' => "Amis"],
                ['label' => "Anniversaire", 'value' => "5 mai · dans trois semaines"],
                ['label' => "Dernier contact", 'value' => "il y a six jours"],
            ],
            'edit' => "Modifier le contact",
            'tabs' => ["Aperçu", "Général", "Moyens de contact", "Relations"],
            'personal' => "Informations personnelles",
            'rows' => [
                ['label' => "Compagnon", 'value' => "Joshua, depuis février"],
                ['label' => "Plat préféré", 'value' => "La lasagne de Monica, sans bœuf"],
                ['label' => "Travaille chez", 'value' => "Bloomingdale’s, aux achats"],
            ],
            'lastTime' => "Ce qu’elle vous a dit la dernière fois",
            'note' => "Entretien à Paris le mois prochain, pour un poste chez Louis Vuitton. N’en a pas encore parlé à son père. Cherche un appartement près du Marais.",
            'added' => "Ajouté il y a six jours",
        ],

        'audition' => [
            'title' => "« Comment s’est passée l’audition ? »",
            'body' => [
                "Joey a parlé d’une audition la semaine dernière. Vous vous souvenez que c’était important pour lui. Avoir ce détail sur sa fiche vous donne un point de départ pour reprendre la conversation.",
                "Gardez une trace de ce que les gens vous racontent : un nouveau travail, un déménagement à venir, un projet dont ils ne cessent de parler.",
            ],
            'label' => "Deux notes sur la fiche de Joey Tribbiani : une audition jeudi pour une série médicale, et un départ de l’appartement d’ici la fin de l’été. En dessous, un rappel prévu aujourd’hui pour demander à Joey comment s’est passée l’audition.",
            'notes' => "Notes",
            'entries' => [
                ['text' => "Audition jeudi pour un rôle dans une série médicale. Deuxième rappel. Il répète la scène des larmes sur le toit.", 'added' => "Ajouté il y a 8 jours"],
                ['text' => "Quitte l’appartement d’ici la fin de l’été. Cherche du côté du Queens.", 'added' => "Ajouté il y a 3 semaines"],
            ],
            'reminder' => "Demander à Joey comment s’est passée l’audition",
            'today' => "Aujourd’hui",
            'remembered' => "J’y ai pensé",
            'forgot' => "J’ai oublié",
        ],

        'little' => [
            'title' => "Les petites choses méritent une place.",
            'lead' => "Les fleurs préférées de Rachel. Comment Chandler prend son café. Le nom du dernier projet de recherche de Ross.",
            'body' => "Certains détails sont utiles. D’autres vous rappellent simplement qui est quelqu’un. Gardez-en autant ou aussi peu que vous voulez, avec vos propres mots.",
            'cards' => [
                ['field' => "Fleurs préférées", 'value' => "Des pivoines. Jamais de lys.", 'note' => "Les blanches, chez le fleuriste de la 6e Avenue.", 'label' => "Les fleurs préférées de Rachel Green : des pivoines, jamais de lys. Les blanches, chez le fleuriste de la 6e Avenue."],
                ['field' => "Café", 'value' => "Noir, deux sucres", 'note' => "Dans la tasse orange, si elle est propre.", 'label' => "Comment Chandler Bing prend son café : noir, deux sucres, dans la tasse orange si elle est propre."],
                ['field' => "Projet de recherche", 'value' => "Les couches sédimentaires du Crétacé supérieur", 'note' => "Lui demander des nouvelles des fouilles au Montana. Prévoir vingt minutes.", 'label' => "Le projet de recherche de Ross Geller : les couches sédimentaires du Crétacé supérieur. Lui demander des nouvelles des fouilles au Montana, et prévoir vingt minutes."],
            ],
        ],

        'own' => [
            'title' => "Donnez à chaque personne sa propre fiche.",
            'body' => [
                "Gardez ensemble les coordonnées, les dates importantes et les informations personnelles. Ajoutez une photo, et organisez le reste avec un modèle adapté à ce que vous voulez retenir.",
                "Ouvrez la fiche de Monica Geller avant le dîner pour vérifier son adresse, son anniversaire ou le plat que vous avez promis d’apporter.",
            ],
            'label' => "La fiche de contact de Monica Geller dans Monica : son adresse et son numéro de téléphone, son anniversaire et son anniversaire de mariage, et une note d’hier sur le dessert que vous avez promis d’apporter au dîner de vendredi.",
            'meta' => [
                ['label' => "Catégorie", 'value' => "Amis"],
                ['label' => "Anniversaire", 'value' => "22 avril"],
                ['label' => "Rappels", 'value' => "1 aujourd’hui"],
            ],
            'connect' => [
                'title' => "Moyens de contact",
                'rows' => [
                    ['label' => "Adresse", 'value' => "90 Bedford Street, Apt 20\nNew York, NY 10014"],
                    ['label' => "Téléphone", 'value' => "+1 212 555 0187"],
                ],
            ],
            'dates' => [
                'title' => "Dates importantes",
                'rows' => [
                    ['label' => "Anniversaire", 'value' => "22 avril 1969"],
                    ['label' => "Mariage", 'value' => "15 mai, avec Chandler"],
                ],
            ],
            'dinner' => [
                'title' => "Dîner de vendredi",
                'text' => "Vous avez promis d’apporter le dessert. Pas le trifle. Elle a déjà dressé une liste des options acceptables.",
                'added' => "Ajouté hier",
            ],
        ],

        'people' => [
            'title' => "Faites de la place pour leurs proches.",
            'lead' => "Se souvenir de quelqu’un, c’est souvent se souvenir aussi de ses proches.",
            'body' => "Reliez Ross à Monica, sa sœur, à Rachel, son ancienne compagne, et à Emma, sa fille. Quand vous savez que quelqu’un existe sans l’avoir encore rencontré, vous pouvez noter le lien avec juste un prénom, ou même sans.",
            'label' => "Les relations de Ross Geller dans Monica. Famille : Monica, sa sœur, et Emma, sa fille. Ancienne compagne : Rachel. Pas encore rencontrés : Charlie, une collègue dont on ne connaît que le prénom, et un cousin de Long Island dont on ne connaît pas le nom.",
            'heading' => "Les proches de Ross Geller",
            'add' => "Ajouter",
            'groups' => [
                ['title' => "Famille", 'people' => [
                    ['name' => "Monica Geller", 'detail' => "Monica est la sœur de Ross."],
                    ['name' => "Emma Geller-Green", 'detail' => "Emma est la fille de Ross."],
                ]],
                ['title' => "Ancienne compagne", 'people' => [
                    ['name' => "Rachel Green", 'detail' => "Rachel est l’ancienne compagne de Ross."],
                ]],
                ['title' => "Pas encore rencontrés", 'people' => [
                    ['name' => "Charlie", 'detail' => "Collègue de Ross · juste un prénom", 'known' => false],
                    ['name' => "Nom inconnu", 'detail' => "Le cousin de Ross, de Long Island", 'known' => false, 'named' => false],
                ]],
            ],
        ],

        'moments' => [
            'title' => "Gardez les moments à côté des détails.",
            'body' => [
                "Une fiche de contact peut contenir à la fois les faits du quotidien et ce qui s’est passé.",
                "Notez un dîner avec Phoebe, un appel avec Chandler ou un voyage avec toute la bande. Ajoutez tous ceux qui étaient là, et l’événement apparaît dans la chronologie de chacun.",
            ],
            'close' => "La prochaine fois que vous vous voyez, vous savez où reprendre la dernière conversation.",
            'label' => "Une chronologie dans Monica avec trois entrées pour 2026 : un dîner avec Phoebe le 3 octobre, un appel avec Chandler le 21 septembre, et un week-end à Montauk le 14 août avec Ross, Rachel, Monica, Chandler et Joey. À côté, le week-end à Montauk apparaît dans la chronologie de chacun des cinq.",
            'timeline' => "Chronologie",
            'addEvent' => "Ajouter un événement",
            'entries' => ":count entrées",
            'events' => [
                ['title' => "Dîner avec Phoebe", 'date' => "3 octobre", 'body' => "Le restaurant thaï de Grove Street. Elle écrit de nouveau des chansons sur son taxi."],
                ['title' => "Appel avec Chandler", 'date' => "21 septembre", 'body' => "Quarante minutes. Il pense quitter son poste en reconfiguration de données."],
                ['title' => "Un week-end à Montauk", 'date' => "14 août", 'body' => "La maison sur la plage, louée de nouveau. Joey a perdu les clés de la voiture dans le sable."],
            ],
            'with' => "Avec :names",
            'onTimelines' => "Dans :count chronologies",
        ],

        'cta' => [
            'title' => "Vous n’avez pas besoin de tout retenir.",
            'body' => "Commencez par une personne et quelques détails que vous aimeriez garder. Ajoutez-en d’autres dès que quelque chose vous semble digne d’être retenu.",
            'button' => "Créer votre compte",
        ],
    ],

    'reminders' => [
        // Words more than one drawing uses.
        'remembered' => "J’y ai pensé",
        'forgot' => "J’ai oublié",
        'overdue' => "En retard",
        'today' => "Aujourd’hui",
        'add' => "Ajouter un rappel",
        'day' => "Jour",
        'at' => "À",
        'timeZone' => "Fuseau horaire",
        'repeats' => "Répétition",
        'says' => "Message",
        'optional' => "facultatif",

        'hero' => [
            'title' => "Pensez à donner des nouvelles.",
            'lede' => "Un anniversaire. Un grand jour. Un ami que vous voulez appeler depuis un moment.",
            'close' => "Programmez un rappel dans Monica et recevez un petit signal le moment venu.",
            'cta' => "Créer votre compte",
            'label' => "Les rappels d’une coffre Personnel dans Monica, trois cette semaine. En retard : appeler Phoebe, il y a deux jours, avec des boutons pour répondre J’y ai pensé ou J’ai oublié. Dans les sept prochains jours : demander à Joey comment s’est passée l’audition, mardi, et l’anniversaire de Chandler dans cinq jours. À côté, l’e-mail que Monica envoie mardi à 09:00 pour vous rappeler de penser à Joey, avec un bouton pour ouvrir sa fiche.",
            'vault' => "Personnel",
            'count' => "3 rappels cette semaine",
            'overdueTitle' => "En retard",
            'overdue' => [
                ['text' => "Appeler Phoebe", 'when' => "il y a 2 jours"],
            ],
            'upcomingTitle' => "Sept prochains jours",
            'upcoming' => [
                ['text' => "Demander à Joey comment s’est passée l’audition.", 'when' => "mardi"],
                ['text' => "Anniversaire de Chandler", 'when' => "dans 5 jours"],
            ],
            'inbox' => "Dans votre boîte de réception, mardi 09:00",
            'from' => "De la part de Monica",
            'email' => "Vous avez demandé qu’on vous parle de Joey Tribbiani aujourd’hui.",
            'open' => "Ouvrir la fiche de Joey",
        ],

        'once' => [
            'title' => "L’audition de Joey a lieu mardi.",
            'lead' => "Vous ne pouvez pas lui obtenir le rôle. Vous pouvez penser à lui demander comment ça s’est passé.",
            'body' => "Ajoutez un rappel sur la fiche de Joey, choisissez le jour et l’heure, et écrivez ce que Monica doit vous dire : « Demander à Joey comment s’est passée l’audition. »",
            'label' => "L’ajout d’un rappel sur la fiche de Joey Tribbiani dans Monica : le mardi 14 octobre à 18:00, il dira « Demander à Joey comment s’est passée l’audition. » Il n’a lieu qu’une fois.",
            'heading' => "Ajouter un rappel pour Joey",
            'day' => "mardi 14 octobre",
            'at' => "18:00",
            'says' => "Demander à Joey comment s’est passée l’audition.",
            'summary' => "Rappel le :when, une seule fois.",
            'when' => "mardi 14 octobre à 18:00",
            'cancel' => "Annuler",
        ],

        'yearly' => [
            'title' => "Certaines dates reviennent chaque année.",
            'body' => "Enregistrez l’anniversaire de Chandler et activez un rappel pour cette date. Monica vous le rappellera le jour même, chaque année.",
            'close' => "Si vous corrigez la date plus tard, le rappel suit.",
            'label' => "L’anniversaire de Chandler Bing dans Monica, le 8 avril 1968, avec un rappel activé pour cette date. Il se répète chaque année à 09:00, heure de New York, et dira « Anniversaire de Chandler ». Le prochain aura lieu le 8 avril 2027.",
            'birthday' => "Anniversaire",
            'date' => "8 avril 1968",
            'noYear' => "Je ne connais pas l’année",
            'remind' => "Me rappeler cette date",
            'repeats' => "Chaque année",
            'at' => "09:00",
            'zone' => "New York",
            'says' => "Anniversaire de Chandler",
            'summary' => "Prochain rappel le :when, le jour même.",
            'when' => "8 avril 2027 à 09:00",
        ],

        'habit' => [
            'title' => "Faites de la prise de nouvelles une habitude.",
            'lead' => "Appeler Phoebe tous les mois. Prendre des nouvelles de Rachel toutes les trois semaines.",
            'body' => "Un rappel peut n’avoir lieu qu’une fois, ou revenir toutes les quelques semaines, tous les quelques mois ou tous les quelques ans. Choisissez le rythme qui convient à chaque personne.",
            'label' => "Deux rappels récurrents dans Monica : appeler Phoebe, tous les mois, prochain le 3 novembre, et prendre des nouvelles de Rachel, toutes les trois semaines, prochain le 24 octobre. À côté, le menu qui choisit la répétition d’un rappel, réglé sur toutes les 3 semaines.",
            'rows' => [
                ['text' => "Appeler Phoebe", 'detail' => "3 novembre · dans trois semaines · Tous les mois"],
                ['text' => "Prendre des nouvelles de Rachel", 'detail' => "24 octobre · dans onze jours · Toutes les 3 semaines"],
            ],
            'options' => ["Une fois", "Toutes les semaines", "Toutes les 3 semaines", "Tous les mois", "Tous les ans"],
            // The option drawn as chosen, counted from zero.
            'chosen' => 2,
        ],

        'zone' => [
            'title' => "Votre heure, où qu’ils soient.",
            'lead' => "Chaque rappel a sa propre heure et son propre fuseau horaire.",
            'body' => "Si Ross est à Londres, vous pouvez caler un rappel sur sa journée. Il garde ce fuseau horaire même si vous voyagez ou modifiez vos propres réglages.",
            'label' => "Un rappel dans Monica pour souhaiter bonne chance à Ross Geller pour sa conférence, le jeudi 23 octobre à 08:30, heure de Londres. Il est 08:30 pour Ross à Londres et 03:30 pour vous à New York.",
            'heading' => "Souhaiter bonne chance à Ross pour sa conférence",
            'day' => "jeudi 23 octobre",
            'at' => "08:30",
            'zone' => "Londres",
            'them' => "Ross à Londres",
            'you' => "Vous à New York",
            'yours' => "03:30",
        ],

        'channels' => [
            'title' => "Choisissez comment le rappel vous parvient.",
            'lead' => "Recevez vos rappels par e-mail ou pendant que vous utilisez Monica.",
            'body' => "Telegram et les SMS sont aussi disponibles lorsqu’ils sont activés sur votre instance Monica. Choisissez les canaux qui vous conviennent, et envoyez-vous un test pour vérifier qu’ils sont connectés.",
            'label' => "Les paramètres de notification dans Monica. L’e-mail est connecté, avec un bouton pour envoyer un test. Les notifications dans Monica sont activées. Telegram et les SMS sont activés sur cette instance, chacun avec un bouton pour se connecter.",
            'heading' => "Notifications",
            'sub' => "Où vos rappels vous parviennent",
            'rows' => [
                ['name' => "E-mail", 'detail' => "monica@geller.example", 'status' => "Connecté", 'action' => "Envoyer un test"],
                ['name' => "Dans Monica", 'detail' => "La cloche en haut de chaque page", 'status' => "Activé"],
                ['name' => "Telegram", 'detail' => "Activé sur cette instance", 'action' => "Connecter"],
                ['name' => "SMS", 'detail' => "Activé sur cette instance", 'action' => "Connecter"],
            ],
        ],

        'answer' => [
            'title' => "Y avez-vous pensé ?",
            'body' => "Quand le jour d’un rappel arrive, vous pouvez dire à Monica comment ça s’est passé.",
            'remembered' => [
                'body' => "Vous avez appelé Chandler, souhaité un bon anniversaire à Rachel ou demandé à Joey comment s’est passée l’audition. Indiquez que vous y avez pensé dès le jour même.",
                'label' => "Un rappel prévu aujourd’hui dans Monica : demander à Joey comment s’est passée l’audition, mardi 14 octobre à 18:00, une seule fois, avec un bouton pour répondre J’y ai pensé.",
                'reminder' => "Demander à Joey comment s’est passée l’audition.",
                'detail' => "mardi 14 octobre · 18:00 · Une seule fois",
            ],
            'forgot' => [
                'body' => "La journée vous a échappé. À partir du lendemain, vous pouvez indiquer que vous avez oublié.",
                'label' => "Un rappel en retard dans Monica : l’anniversaire de Phoebe, le 16 février, il y a deux jours. Il se répète chaque année et reviendra le 16 février 2027. Des boutons pour répondre J’y ai pensé ou J’ai oublié.",
                'reminder' => "Anniversaire de Phoebe",
                'detail' => "16 février · il y a 2 jours · Chaque année · prochain le 16 février 2027",
            ],
            'notes' => [
                "Votre réponse range cette occurrence dans votre historique. Sans réponse, elle reste en retard pour que vous puissiez y revenir.",
                "Pour les rappels récurrents, la date suivante revient quand même. Oublier l’anniversaire de Phoebe cette année n’annule pas le rappel de l’année prochaine.",
            ],
        ],

        'attention' => [
            'title' => "Voyez ce qui demande votre attention.",
            'body' => [
                "Retrouvez les rappels d’une personne sur sa fiche, ou ouvrez les rappels de votre coffre pour voir tout le monde ensemble.",
                "Voyez ce qui est en retard, ce qui est prévu aujourd’hui et ce qui arrive. Parcourez votre historique pour revoir les rappels auxquels vous avez pensé et ceux que vous avez oubliés.",
            ],
            'label' => "La page des rappels d’un coffre dans Monica. Sur 24 rappels au cours des 12 derniers mois, 75 % ont été honorés et 25 % oubliés. Des filtres : tous 5, en retard 1, aujourd’hui 1, à venir 3 et historique 18. En retard : appeler Phoebe, 11 octobre, il y a deux jours, tous les mois. À venir, du plus proche au plus lointain : demander à Joey comment s’est passée l’audition demain, prendre des nouvelles de Rachel dans onze jours, et l’anniversaire de Chandler le 8 avril 2027, qui suit sa date d’anniversaire.",
            'heading' => "Rappels",
            'stats' => [
                ['value' => "75 %", 'label' => "honorés"],
                ['value' => "25 %", 'label' => "oubliés"],
            ],
            'period' => "sur 24 rappels au cours des 12 derniers mois",
            'filters' => ["Tous", "En retard", "Aujourd’hui", "À venir", "Historique"],
            'overdueNote' => "Le jour est passé sans réponse.",
            'overdue' => ['text' => "Appeler Phoebe", 'detail' => "11 octobre · il y a 2 jours · Tous les mois"],
            'upcomingTitle' => "À venir",
            'upcomingNote' => "Du plus proche au plus lointain.",
            'upcoming' => [
                ['text' => "Demander à Joey comment s’est passée l’audition.", 'detail' => "14 octobre · demain · Une seule fois"],
                ['text' => "Prendre des nouvelles de Rachel", 'detail' => "24 octobre · dans onze jours · Toutes les 3 semaines"],
                ['text' => "Anniversaire de Chandler", 'detail' => "8 avril 2027 · dans 6 mois · Chaque année · Suit l’anniversaire"],
            ],
        ],

        'cta' => [
            'title' => "Un petit coup de pouce pour passer à l’acte.",
            'body' => "Vous avez pensé à appeler Chandler. Donnez à cette pensée un jour et une heure.",
            'button' => "Créer votre compte",
        ],
    ],

    'timeline' => [
        // Mots que plusieurs dessins utilisent.
        'with' => "Avec :names",
        'add' => "Ajouter un événement",
        'optional' => "facultatif",

        'hero' => [
            'title' => "Gardez les moments qui valent la peine d’être retenus.",
            'intro' => "Un dîner entre amis. Un nouvel emploi. L’après-midi dont tout le monde parle encore.",
            'lede' => "Notez ce qui s’est passé, qui était là et les détails que vous voulez garder. Monica réunit ces moments dans une chronologie à laquelle vous pouvez revenir.",
            'cta' => "Créer votre compte",
            'label' => "La chronologie d’un coffre Personnel dans Monica, 102 entrées, dont 2 qui demandent votre attention. En 2026 : Thanksgiving chez Monica le 26 novembre, au 90 Bedford Street, New York, où Joey portait le pantalon extensible et où personne n’a parlé du trifle, avec Rachel, Ross, Chandler, Joey et Phoebe. Et un café avec Phoebe le 3 octobre, censé être rapide, jusqu’à ce que, trois heures plus tard, elle ait organisé tout votre printemps. À côté, plus tôt la même année, le mariage de Monica et Chandler le 15 mai : au Moondance Diner, puis sur le toit, avec Joey comme officiant, ordonné en ligne, et 43 invités.",
            'vault' => "Personnel",
            'tabs' => ["Votre chronologie", "Demande votre attention"],
            'year' => "2026",
            'count' => "2 entrées",
            'events' => [
                ['title' => "Thanksgiving chez Monica", 'date' => "26/11", 'place' => "90 Bedford Street, New York", 'note' => "Joey portait le pantalon extensible. Personne n’a parlé du trifle."],
                ['title' => "Café avec Phoebe", 'date' => "03/10", 'note' => "Censé être rapide. Trois heures plus tard, elle avait organisé tout mon printemps."],
            ],
            'earlier' => "Plus tôt la même année",
            'wedding' => [
                'title' => "Le mariage de Monica et Chandler",
                'type' => "Mariage · 15 mai",
                'facts' => [
                    ['label' => "Lieu", 'value' => "Le Moondance Diner, puis le toit"],
                    ['label' => "Officiant", 'value' => "Joey, ordonné en ligne"],
                ],
                'more' => "et 38 autres",
            ],
        ],

        'milestones' => [
            'title' => "Les grandes étapes. Les mardis ordinaires.",
            'body' => [
                "Le mariage de Monica et Chandler mérite une entrée. Un café avec Phoebe qui s’est transformé en conversation de trois heures aussi.",
                "Choisissez parmi 40 types d’événements prédéfinis, dont les appels, les repas, les visites, les voyages et les nouveaux emplois. Il y a de la place pour les moments de tous les jours comme pour les grandes occasions que tout le monde note dans un agenda.",
            ],
            'label' => "La première étape de l’ajout d’un événement de vie dans Monica : choisir ce qui s’est passé. Cinq catégories, avec Relations et famille sélectionnée, et ses types d’événements : appel, message, repas, visite, moment ensemble, mariage et naissance, chacun avec le nombre de champs qu’il demande.",
            'step' => "Étape 1 sur 2 · Choisir ce qui s’est passé",
            'categoriesTitle' => "Catégories",
            'categories' => ["Relations et famille", "Travail et études", "Santé et bien-être", "Loisirs et culture", "Voyages et expériences"],
            'types' => [
                ['name' => "Appel", 'fields' => "3 champs"],
                ['name' => "Message", 'fields' => "3 champs"],
                ['name' => "Repas", 'fields' => "3 champs"],
                ['name' => "Visite", 'fields' => "2 champs"],
                ['name' => "Moment ensemble", 'fields' => "1 champ"],
                ['name' => "Mariage", 'fields' => "3 champs"],
                ['name' => "Naissance", 'fields' => "1 champ"],
            ],
        ],

        'moment' => [
            'title' => "Un moment. Tous ceux qui étaient là.",
            'lead' => "Thanksgiving chez Monica, c’étaient Rachel, Ross, Chandler, Joey et Phoebe. Vous ne devriez avoir à le noter qu’une seule fois.",
            'body' => "Ajoutez les personnes qui y ont participé, et l’événement apparaît dans la chronologie de chacune. Si vous modifiez les détails plus tard, le même changement apparaît dans toutes les chronologies concernées.",
            'label' => "Thanksgiving chez Monica, le 26 novembre 2026, noté une seule fois avec Rachel, Ross, Chandler, Joey et Phoebe. En dessous, trois de leurs chronologies, chacune montrant le même Thanksgiving : celle de Rachel, au-dessus d’un appel le 12 novembre ; celle de Joey, au-dessus d’une audition le 14 octobre ; et celle de Phoebe, au-dessus d’un café avec Phoebe le 3 octobre.",
            'event' => "Thanksgiving chez Monica",
            'when' => "26 novembre 2026 · noté une seule fois",
            'date' => "26/11",
            'timeline' => "Chronologie de :name",
            // L’entrée sous Thanksgiving dans chaque chronologie, dans l’ordre
            // où le modèle les dessine : Rachel, Joey, Phoebe.
            'before' => ["Appel · 12/11", "Audition · 14/10", "Café avec Phoebe · 03/10"],
        ],

        'story' => [
            'title' => "Gardez plus que la date.",
            'lead' => "Où êtes-vous allés ? Qu’est-ce qui a rendu ce moment mémorable ?",
            'body' => "Ajoutez un lieu, une description et les détails qui conviennent à l’occasion. Une balade dans les Hudson Highlands devient plus qu’une date quand vous vous rappelez que Chandler a porté les deux jumeaux pendant les deux derniers miles.",
            'close' => "Écrivez une courte phrase ou gardez toute l’histoire.",
            'label' => "La deuxième étape de l’ajout d’un événement de vie dans Monica, les détails d’un moment ensemble : une balade dans les Hudson Highlands, New York, le 15 mai 2010. La description est en cours de rédaction : six miles, et Chandler a porté les deux jumeaux pendant les deux derniers. Ross a expliqué les formations rocheuses pendant toute la montée. Déjeuner sur la crête.",
            'heading' => "Moment ensemble",
            'step' => "Étape 2 sur 2 · Les détails",
            'what' => ['label' => "Ce qui s’est passé", 'value' => "Une balade dans les Hudson Highlands"],
            'when' => ['label' => "Quand", 'value' => "15 mai 2010"],
            'where' => ['label' => "Où", 'value' => "Hudson Highlands, New York"],
            'description' => ['label' => "Description", 'value' => "Six miles, et Chandler a porté les deux jumeaux pendant les deux derniers. Ross a expliqué les formations rocheuses pendant toute la montée. Déjeuner sur la crête."],
            'back' => "Retour",
            'add' => "Ajouter l’événement",
        ],

        'years' => [
            'title' => "Revenez en arrière, année par année.",
            'body' => [
                "La chronologie de votre coffre réunit les événements que vous avez notés, les plus récents en premier et les plus anciens regroupés par année.",
                "Suivez l’histoire des cours de natation à la première rentrée des classes. Ouvrez la fiche d’une personne pour voir les événements auxquels elle a participé.",
            ],
            'close' => "Les dates donnent l’ordre. Vos notes font revenir les souvenirs.",
            'label' => "Une chronologie dans Monica, les plus récents en premier, regroupés par année. 2010 : une balade dans les Hudson Highlands le 15 mai. 2009 : les jumeaux entrent à la maternelle le 8 septembre, et Erica se casse le bras le 11 juin. 2008 : cours de natation le 17 juillet. Chaque entrée a son lieu et une note.",
            // Du plus récent au plus ancien. L’icône et la couleur de chaque
            // événement sont dans le modèle, dans cet ordre.
            'years' => [
                ['year' => "2010", 'count' => "1 entrée", 'events' => [
                    ['title' => "Une balade dans les Hudson Highlands", 'date' => "15/05", 'place' => "Hudson Highlands, New York", 'note' => "Six miles, et Chandler a porté les deux jumeaux pendant les deux derniers."],
                ]],
                ['year' => "2009", 'count' => "2 entrées", 'events' => [
                    ['title' => "Les jumeaux entrent à la maternelle", 'date' => "08/09", 'place' => "Une école élémentaire, Westchester", 'note' => "Jack et Judy ont fait le trajet pour les voir entrer."],
                    ['title' => "Erica se casse le bras", 'date' => "11/06", 'place' => "Un hôpital, Westchester", 'note' => "Tombée du portique, en voulant arriver au sommet avant Jack."],
                ]],
                ['year' => "2008", 'count' => "1 entrée", 'events' => [
                    ['title' => "Cours de natation", 'date' => "17/07", 'place' => "Une piscine, Westchester", 'note' => "Joey a proposé de leur apprendre. Monica a engagé quelqu’un."],
                ]],
            ],
        ],

        'traditions' => [
            'title' => "Laissez de la place à vos propres traditions.",
            'lead' => "« Repas » fait l’affaire. « Thanksgiving chez Monica » conviendrait peut-être mieux.",
            'body' => "Créez vos propres types d’événements, rangez-les dans des catégories, et choisissez une icône et une couleur pour les repérer facilement. Vous pouvez aussi modifier les types fournis par Monica ou désactiver ceux que vous n’utilisez pas.",
            'label' => "Les types d’événements de vie dans Monica. Deux types à vous dans la catégorie Nos traditions, Thanksgiving chez Monica et Soirée du sapin de Noël, puis Repas, fourni par Monica, et Entretien, désactivé. À côté, Thanksgiving chez Monica en cours de modification : proposé à la saisie, une icône de cadeau, une couleur orange choisie parmi huit, dans la catégorie Nos traditions.",
            'heading' => "Types d’événements de vie",
            'add' => "Ajouter un type",
            'category' => "Nos traditions",
            'types' => [
                ['name' => "Thanksgiving chez Monica"],
                ['name' => "Soirée du sapin de Noël"],
                ['name' => "Repas", 'badge' => "Fourni"],
                ['name' => "Entretien", 'status' => "Désactivé"],
            ],
            'offered' => "Proposé à la saisie",
            'icon' => "Icône",
            'colour' => "Couleur",
            'categoryLabel' => "Catégorie",
        ],

        'fields' => [
            'title' => "Choisissez les détails que chaque événement contient.",
            'lead' => "Un appel et un dîner de Thanksgiving n’appellent pas les mêmes détails.",
            'body' => [
                "Pour les appels avec Rachel, vous pouvez garder le canal et une note sur ce dont vous avez parlé. Pour Thanksgiving, vous pouvez ajouter qui recevait, ce que vous avez apporté, et si Joey a fini la dinde.",
                "Ajoutez vos propres champs, organisez-les en groupes et choisissez ceux qui sont obligatoires. Les changements s’appliquent aux événements que vous notez à partir de là ; les entrées précédentes gardent les champs avec lesquels elles ont été notées.",
            ],
            'label' => "Les champs de deux types d’événements de vie dans Monica. Appel en a trois : le canal, une liste déroulante entre téléphone, vidéo ou appel vocal dans une application ; la direction, une liste déroulante ; et ce dont vous avez parlé, un texte long. Thanksgiving chez Monica en a trois dans un groupe nommé Le dîner : qui recevait, un contact, obligatoire ; ce que vous avez apporté, un texte court ; et Joey a-t-il fini la dinde, une liste déroulante entre oui, non ou avec de l’aide, en cours de modification. L’enregistrement s’applique aux événements notés à partir de maintenant, et l’entrée de l’an dernier garde ses champs.",
            'count' => "3 champs",
            'required' => "Obligatoire",
            'call' => [
                'name' => "Appel",
                'rows' => [
                    ['label' => "Canal", 'type' => "Liste déroulante", 'options' => ["Téléphone", "Vidéo", "Appel vocal dans une application"]],
                    ['label' => "Direction", 'type' => "Liste déroulante"],
                    ['label' => "Ce dont vous avez parlé", 'type' => "Texte long"],
                ],
            ],
            'thanksgiving' => [
                'name' => "Thanksgiving chez Monica",
                'group' => "Le dîner",
                'rows' => [
                    ['label' => "Qui recevait", 'type' => "Contact"],
                    ['label' => "Ce que vous avez apporté", 'type' => "Texte court"],
                    ['label' => "Joey a-t-il fini la dinde ?", 'type' => "Liste déroulante", 'options' => ["Oui", "Non", "Avec de l’aide"]],
                ],
                'note' => "S’applique aux événements que vous notez à partir de maintenant. L’entrée de l’an dernier garde ses champs.",
                'save' => "Enregistrer les modifications",
            ],
        ],
    ],

    'footer' => [
        // The closing line ends every page, so it is two short sentences rather
        // than a pitch. Each one is its own line.
        'closing' => ["Monica se souvient.", "Vous, allez prendre l’air."],
        'start' => "Commencer avec Monica",
        'github' => "Voir sur GitHub",

        'tagline' => "CRM personnel open source. AGPL-3.0.",
        'productLabel' => "Produit",
        'developersLabel' => "Développeurs",
        'companyLabel' => "Entreprise",
        'personalCrm' => "Qu’est-ce qu’un CRM personnel ?",
        'changelog' => "Nouveautés",
        'mcp' => "MCP",
        'api' => "API",
        'contactSales' => "Contacter les ventes",
        'privacy' => "Confidentialité",
        'terms' => "Conditions d’utilisation",
        'team' => "Équipe",

        'art' => "Une prairie au bord d’un lac, avec des pandas qui se prélassent dans l’herbe et font la sieste dans les arbres",
        'copyright' => "© :year Monica. Aucun panda n’a été traqué.",
        'languageLabel' => "Changer de langue",
    ],

    'blog' => [
        'title' => "Blog",
        'lede' => "Notes sur la construction de Monica, sur la confidentialité des données personnelles et sur la petite mécanique du fait de rester en contact.",

        'allPosts' => "Tous les articles",
        'keepReading' => "À lire ensuite",
        'onThisPage' => "Sur cette page",
        'latest' => "Derniers articles",

        'readingTime' => ":count min de lecture",

        // Tous les articles ont le même auteur pour l’instant. Ce libellé vit
        // ici plutôt que dans l’en-tête de chaque article, parce que c’est une
        // étiquette du site et qu'elle doit se traduire comme telle.
        'authorRole' => "Fondateur",

        'copyLink' => "Copier le lien",
        'copyLinkDone' => "Copié",

        'showing' => "Articles :from à :to sur :total",
        'pageOf' => "Page :page sur :total",
        'rssFeed' => "Flux RSS",
        'newerPosts' => "Articles plus récents",
        'olderPosts' => "Articles plus anciens",

        'tryMonica' => [
            'title' => "Essayer Monica",
            'body' => "Un CRM personnel privé et open source pour se souvenir des gens qui comptent. Auto-hébergez-le, ou laissez-nous nous en charger.",
            'bodyPost' => "Gardez le fil des gens de votre vie sans les confier à une base de données publicitaire.",
            'cta' => "Commencer",
            'note' => "Essai de 30 jours · Aucune carte bancaire requise",
        ],


        'openSource' => [
            'title' => "Open source",
            'body' => "Monica est open source depuis le premier jour. Lisez le code, faites tourner votre propre instance, proposez un correctif.",
        ],
    ],

    /**
     * Traduction des conditions publiées sur monicahq.com/terms. La version
     * anglaise dans lang/en.php fait foi : c’est elle qui a été publiée, et
     * c’est elle qu'il faut modifier en premier.
     */
    'terms' => [
        'title' => "Nos conditions d’utilisation",
        'updated' => "Dernière mise à jour : :date",
        'updatedOn' => "12 avril 2018",

        'sections' => [
            [
                'title' => "Portée du service",
                'blocks' => [
                    ['text' => "Monica prend en charge les navigateurs suivants :"],
                    ['items' => [
                        "Internet Explorer (11+)",
                        "Firefox (50+)",
                        "Chrome (dernière version)",
                        "Safari (dernière version)",
                    ]],
                    ['text' => "Je ne garantis pas que le site fonctionnera avec d’autres navigateurs, mais il est très probable que ce soit simplement le cas."],
                ],
            ],
            [
                'title' => "Droits",
                'blocks' => [
                    ['text' => "Vous n’êtes pas obligé de fournir votre véritable nom lorsque vous créez un compte. Vous avez en revanche besoin d’une adresse e-mail valide si vous souhaitez passer à la version payante ou recevoir des rappels par e-mail."],
                    ['text' => "Vous avez le droit de fermer votre compte à tout moment."],
                    ['text' => "Vous avez le droit d’exporter vos données à tout moment, au format SQL."],
                    ['text' => "Vos données ne seront pas intentionnellement montrées à d’autres utilisateurs ni partagées avec des tiers."],
                    ['text' => "Vos données personnelles ne seront partagées avec personne sans votre consentement."],
                    ['text' => "Vos données sont sauvegardées toutes les heures."],
                    ['text' => "Si le site cesse son activité, vous aurez la possibilité d’exporter toutes vos données avant sa disparition."],
                    ['text' => "Toute nouvelle fonctionnalité touchant à la vie privée sera strictement facultative."],
                ],
            ],
            [
                'title' => "Responsabilités",
                'blocks' => [
                    ['text' => "Vous n’utiliserez pas le site pour stocker des informations ou des données illégales au regard du droit canadien (ou de toute autre loi)."],
                    ['text' => "Vous devez avoir au moins 18 ans pour créer un compte et utiliser le site."],
                    ['text' => "Vous ne devez pas abuser du site en publiant sciemment du code malveillant susceptible de vous nuire ou de nuire aux autres utilisateurs."],
                    ['text' => "Vous ne devez utiliser le site que pour des usages largement reconnus comme moralement bons."],
                    ['text' => "Vous n’avez pas le droit d’adresser des requêtes automatisées au site."],
                    ['text' => "Vous n’avez pas le droit d’abuser du système d’invitation."],
                    ['text' => "Il vous appartient de garder votre compte sécurisé."],
                    ['text' => "Je me réserve le droit de fermer les comptes qui abusent du système (des milliers de contacts assortis de centaines de milliers de rappels, par exemple) ou qui l’utilisent de manière déraisonnable."],
                ],
            ],
            [
                'title' => "Autres mentions légales importantes",
                'blocks' => [
                    ['text' => "Même si je veux offrir un excellent service, il y a certaines choses que je ne peux pas promettre à son sujet. Les services et les logiciels sont par exemple fournis « en l’état », à vos propres risques, sans garantie ni condition expresse ou implicite d’aucune sorte. Je décline également toute garantie de qualité marchande, d’adéquation à un usage particulier ou d’absence de contrefaçon. Monica ne saurait être tenue responsable d’un quelconque dommage causé à votre système informatique, d’une perte ou d’une corruption de données, ni de tout autre préjudice résultant de votre accès aux services ou aux logiciels, ou de leur utilisation."],
                    ['text' => "Ces conditions peuvent changer à tout moment, mais je ne me comporterai jamais comme un salaud à ce sujet. Faire tourner ce site est un rêve devenu réalité, et j’espère pouvoir le faire aussi longtemps que possible."],
                ],
            ],
        ],
    ],

    /**
     * Traduction de la politique publiée sur monicahq.com/privacy. La version
     * anglaise dans lang/en.php fait foi : c’est elle qui a été publiée, et
     * c’est elle qu'il faut modifier en premier.
     */
    'privacy' => [
        'title' => "Notre politique de confidentialité",
        'updated' => "Dernière mise à jour : :date",
        'updatedOn' => "30 mai 2019",

        'sections' => [
            [
                'blocks' => [
                    ['text' => "Monica est un projet open source. La version hébergée propose une offre payante qui nous permet de percevoir de l’argent afin de payer les serveurs et des services supplémentaires, mais le but premier n’est pas de gagner de l’argent (sinon nous n’en aurions pas ouvert le code)."],
                    ['text' => "Monica existe en deux versions : vous pouvez utiliser notre version hébergée, ou bien la télécharger et la faire tourner vous-même. Dans ce second cas, nous ne suivons absolument rien. Nous ne savons même pas que vous avez téléchargé le produit. Faites-en ce que vous voulez (mais respectez les lois de votre pays)."],
                    ['text' => "Lorsque vous créez votre compte sur notre version hébergée, vous fournissez au site des informations vous concernant, que nous collectons. Il s’agit de votre nom, de votre adresse e-mail et de votre mot de passe, qui est chiffré avant d’être stocké. Nous ne stockons aucune autre information personnelle."],
                    ['text' => "Lorsque vous vous connectez au service, nous utilisons des cookies pour mémoriser vos identifiants. C’est le seul usage que nous faisons des cookies."],
                    ['text' => "Monica tourne sur Fortrabbit et nous sommes les seuls, en dehors des employés de Fortrabbit, à avoir accès à ces serveurs."],
                    ['text' => "Nous effectuons des sauvegardes horaires de la base de données."],
                    ['text' => "Votre mot de passe est chiffré avec bcrypt, un algorithme de hachage de mots de passe très sûr. Vous pouvez également activer l’authentification à deux facteurs sur votre compte si vous souhaitez une couche de sécurité supplémentaire. En dehors de ces mécanismes de chiffrement, vos données ne sont pas chiffrées dans la base. Si quelqu’un accède à la base de données, il pourra lire vos données. Nous faisons de notre mieux pour que cela n’arrive jamais, mais cela peut arriver."],
                    ['text' => "En cas de violation de données, nous contacterons les utilisateurs concernés pour les avertir."],
                    ['text' => "Les e-mails transactionnels sont acheminés par Postmark."],
                    ['text' => "Nous utilisons un outil open source appelé Sentry pour suivre les erreurs qui surviennent en production. Leur service enregistre les erreurs, mais ils n’ont accès à aucune information en dehors de l’identifiant du compte, qui me permet de comprendre ce qui se passe."],
                    ['text' => "Le site n’affiche pas de publicité aujourd’hui et n’en affichera jamais. Il ne vend pas non plus de données à des tiers, avec ou sans votre consentement, et n’a pas l’intention de le faire. Nous y sommes tout simplement opposés. Merde à la publicité."],
                    ['text' => "Nous n’utilisons aucun service tiers de pistage, comme Google Analytics ou Intercom, qui suivrait les comportements ou les données des utilisateurs, ni sur le site vitrine ni sur la version hébergée. Nous sommes profondément opposés à leurs principes, car ils utiliseraient ces données pour vous profiler, ce à quoi nous sommes totalement opposés."],
                    ['text' => "Toutes les données que vous mettez dans Monica vous appartiennent. Nous n’avons aucun droit dessus. N’y mettez pas de contenu illégal, sans quoi nous aurions des ennuis."],
                    ['text' => "Toutes les informations sur les contacts que vous mettez dans Monica vous sont privées. Nous ne croisons pas les informations entre les comptes et n’utilisons pas une information d’un compte pour en alimenter un autre (contrairement à Facebook, par exemple)."],
                    ['text' => "Nous utilisons Stripe pour encaisser les paiements donnant accès à la version payante. Nous ne stockons sur nos serveurs ni les informations de carte bancaire ni quoi que ce soit concernant les transactions elles-mêmes. Toutefois, comme le prévoit la bibliothèque open source que nous utilisons pour traiter les paiements (Laravel Cashier), nous conservons les 4 derniers chiffres de la carte ainsi que le nom du réseau (VISA ou MasterCard). En tant qu’utilisateur, vous êtes identifié chez Stripe par un numéro aléatoire qu’ils génèrent et utilisent."],
                    ['text' => "À propos des paiements, vous pouvez revenir à l’offre gratuite quand vous le souhaitez. Lorsque vous le faites, Stripe est automatiquement mis à jour et nous n’avons aucun moyen de vous facturer à nouveau, même si nous le voulions. Moins nous manipulons d’informations de paiement, plus nous sommes heureux."],
                    ['text' => "Vous pouvez exporter vos données à tout moment. Vous pouvez également utiliser l’API pour exporter l’ensemble de vos données si vous savez le faire. Vous pouvez enfin nous demander de nous en charger nous-mêmes et de vous les envoyer. Vos données seront exportées au format SQL."],
                    ['text' => "Lorsque vous fermez votre compte, nous détruisons immédiatement toutes vos informations personnelles de la base de données de production, mais vos informations restent présentes dans les sauvegardes que nous conservons 30 jours. Passé ce délai, vos informations seront entièrement détruites. Vous gardez la main sur cette opération, mais nous pouvons supprimer un compte pour vous si vous nous le demandez."],
                    ['text' => "Dans certaines situations, nous pouvons être tenus de divulguer des données personnelles en réponse à des demandes légales d’autorités publiques, notamment pour répondre à des exigences de sécurité nationale ou d’application de la loi. Nous espérons simplement que cela n’arrivera jamais."],
                    ['text' => "Si vous enfreignez les conditions d’utilisation, nous fermerons votre compte et vous en informerons. Cela dit, si vous suivez la règle « ne soyez pas un salaud », il ne devrait jamais rien vous arriver et tout le monde sera content."],
                    ['text' => "Monica n’utilise que des projets open source, hébergés pour l’essentiel sur Github."],
                    ['text' => "Nous mettrons à jour cette politique de confidentialité dès que nous introduirons de nouvelles pratiques en matière d’informations. Le cas échéant, nous enverrons un e-mail à l’adresse indiquée dans votre compte. Nous ne nous comporterons jamais comme des salauds à ce sujet et n’introduirons jamais, au grand jamais, quoi que ce soit dans ce que nous faisons qui porterait atteinte à votre droit à une confidentialité absolue."],
                ],
            ],
        ],
    ],

    'team' => [
        'eyebrow' => "Équipe",
        'title' => "Monica, c’est une équipe de 2. Et des centaines de contributeurs.",

        'stats' => [
            ['value' => "2016", 'label' => "Première ligne de code"],
            ['value' => "Montréal", 'label' => "Siège social"],
            ['value' => "2", 'label' => "Membres officiels"],
            ['value' => "Des centaines", 'label' => "Contributeurs open source"],
            ['value' => "Des millions", 'label' => "Contacts gérés"],
        ],

        'missionLabel' => "Notre mission",
        'mission' => [
            "Notre mission est d’utiliser la technologie d’une manière qui ne nuit pas aux relations humaines, comme peuvent le faire les grands réseaux sociaux.",
            "À une époque où les gens ont des milliers d’amis virtuels, nous voulons offrir un outil qui aide à renforcer les liens avec quelques-uns d’entre eux seulement. Que chaque amitié compte vraiment.",
            "Monica est née d’un besoin personnel : garder le fil de ce que devenaient des amis vivant dans d’autres pays. Après avoir construit la première version de l’outil, j’ai décidé d’en ouvrir le code, de le présenter sur Hacker News, et la suite appartient à l’histoire.",
            "Monica est aujourd’hui un projet open source en bonne santé. Nous avons la chance d’avoir une belle communauté, avec des dizaines de contributeurs et des centaines de contributions au code. Le projet rapporte aussi un peu d’argent : chaque dollar gagné y est réinvesti, pour payer les factures et faire avancer le développement.",
            "Merci de vous intéresser au projet.",
        ],
        'signature' => "Regis Freyd et Alexis Saettler",
    ],

    /**
     * Les trois pages de fonctionnalités, qui partagent une barre d’onglets et
     * une même rangée de conclusion.
     *
     * La copie est celle de l’ancien site, phrase par phrase : c’est la copie
     * marketing du propriétaire, et cette version est une refonte, pas une
     * réécriture. Les annotations étaient des étiquettes rouges épinglées
     * autour de la capture d’écran ; ici, elles forment une liste à côté de
     * l’image, pour survivre à un téléphone, à un lecteur d’écran et à une
     * traduction plus longue que l’anglais.
     */
    'features' => [
        'tabsLabel' => "Fonctionnalités",
        'tabs' => [
            'features' => "Gestion des contacts",
            'featuresDashboard' => "Tableau de bord complet",
            'featuresJournal' => "Journal",
        ],

        'calloutsLabel' => "Sur cet écran",

        'contacts' => [
            'title' => "Comment les gens gardent le fil de ce qui compte.",
            'lede' => "Notez ce que vous savez des personnes qui comptent pour vous. Et n’oubliez plus jamais un seul détail à leur sujet.",
            'imageAlt' => "Une fiche de contact Monica : relations, coordonnées, notes, appels, rappels et cadeaux.",
            'callouts' => [
                "Voyez d’un coup d’œil les informations importantes de votre contact",
                "Indiquez les noms des conjoints, des enfants et même des animaux.",
                "Ajoutez toutes les façons de joindre cette personne : téléphone, e-mail, pseudo Whatsapp, et bien plus encore.",
                "Ajoutez des notes, privées, à propos de cette personne.",
                "Indiquez chaque fois que vous appelez des personnes dont vous avez peu de nouvelles, pour qu’on vous rappelle de les appeler à l’avenir.",
                "Ajoutez des rappels pour les dates ou les événements importants. Certains rappels sont remplis automatiquement pour vous (les anniversaires, par exemple).",
                "Gérez les cadeaux offerts ou que vous souhaitez offrir. Indiquez si vous devez de l’argent ou si on vous en doit.",
            ],
        ],

        'dashboard' => [
            'title' => "Voyez rapidement ce qui compte et ce qui arrive ensuite",
            'lede' => "Pour vous concentrer sur ce qui compte vraiment pour vous.",
            'imageAlt' => "Le tableau de bord de Monica : contacts consultés récemment, prochains rappels, notes favorites et appels consignés.",
            'callouts' => [
                "Voyez qui vous avez consulté en dernier",
                "La liste des prochains événements ou rappels concernant vos contacts",
                "Consultez vos notes favorites à propos de vos contacts",
                "Gardez une trace des appels passés avec les personnes qui comptent pour vous",
            ],
        ],

        'journal' => [
            'title' => "Documentez votre vie. Et voyez comment vous évoluez.",
            'lede' => "Écrivez des entrées de journal. Indiquez rapidement comment s’est passée votre journée. Historique d’activité automatique.",
            'imageAlt' => "Le journal de Monica : le déroulé de la journée, les activités consignées avec les contacts et les entrées écrites.",
            'callouts' => [
                "Indiquez comment s’est passée votre journée.",
                "Le journal liste automatiquement toutes les activités avec vos contacts.",
                "Le journal vous permet aussi d’écrire des entrées. Voyez-le comme votre journal intime en ligne.",
                "Dans une prochaine version, nous afficherons de belles statistiques sur vos journées et vos activités.",
            ],
        ],

        'pillars' => [
            [
                'title' => "Tout au même endroit",
                'body' => "Gérez, organisez et suivez toutes les interactions avec vos contacts à un endroit central.",
            ],
            [
                'title' => "Sur le web",
                'body' => "Accédez facilement à Monica, hébergée sur vos serveurs ou sur les nôtres.",
            ],
            [
                'title' => "Interface moderne",
                'body' => "Monica est belle et très simple à utiliser.",
            ],
        ],

        'api' => [
            'title' => "Appréciée des utilisateurs. Adorée des développeurs.",
            'body' => "Nos utilisateurs apprécient la rapidité et la simplicité du produit. Les développeurs adorent l’API, qui leur permet d’automatiser Monica comme ils l’entendent.",
            'body2' => "Importez ou exportez facilement vos contacts et leurs données grâce à la puissante API REST de Monica, ou utilisez l’API pour automatiser de nombreuses parties de l’application.",
            'imageAlt' => "Les routes de l’API de Monica, ouvertes dans un éditeur de code.",
        ],
    ],

    'notFound' => [
        'title' => "Page introuvable.",
        'body' => "Cette adresse ne mène nulle part. Elle a peut-être changé, ou elle n’a peut-être jamais existé.",
    ],
];
