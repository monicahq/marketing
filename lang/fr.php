<?php

/**
 * French copy. Not a literal translation of the English: the jokes are rewritten
 * so they land, and the register stays vouvoiement, calm and direct, never
 * commercial. Typographic spaces before : ; ? are non-breaking (U+00A0).
 */

return [
    'meta' => [
        'imageAlt' => "Monica : souvenez-vous des gens qui comptent pour vous. Le CRM personnel open source.",

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
            'page' => "Page :number",
        ],

        'software' => [
            'monthly' => "Monica hébergée, facturée au mois",
            'yearly' => "Monica hébergée, facturée à l’année",
            'selfHosted' => "Monica auto-hébergée",
        ],

        'home' => [
            'title' => "Monica — le CRM personnel open source",
            'description' => "Monica vous aide à vous souvenir des gens qui comptent : ce qui se passe dans leur vie, les dates importantes, vos conversations passées et le moment de reprendre contact. Privé, open source, auto-hébergeable.",
        ],

        'pricing' => [
            'title' => "Tarifs Monica — une offre hébergée, ou l'auto-hébergement gratuit",
            'description' => "Monica hébergée coûte 9 USD par mois ou 90 USD par an, avec des contacts illimités et aucun tarif au contact. Ou hébergez gratuitement l'application open source sur votre propre infrastructure.",
        ],

        'privacy' => [
            'title' => "Politique de confidentialité — Monica",
            'description' => "Comment Monica traite vos données : ce que nous collectons, où c'est stocké, qui peut y accéder et ce qui se passe quand vous fermez votre compte. Pas de publicité, pas de traceurs, pas de revente de données.",
        ],

        'team' => [
            'title' => "Équipe — Monica",
            'description' => "Monica est construite par deux personnes à Montréal, avec des centaines de contributeurs open source. Pourquoi nous bâtissons un CRM personnel qui ne nuit pas aux relations humaines.",
        ],

        'terms' => [
            'title' => "Conditions d'utilisation — Monica",
            'description' => "Les conditions d'utilisation de Monica, le CRM personnel open source : ce que couvre le service, vos droits sur vos données, vos responsabilités et les mentions légales.",
        ],

        'blog' => [
            'title' => "Le blog de Monica — notes de version et choix de conception",
            'description' => "Ce que nous livrons, pourquoi nous le construisons ainsi, et à quoi ressemble vraiment une petite entreprise open source. Écrit par les personnes qui font Monica.",
        ],

        // Un article apporte son propre titre et sa propre description : il ne
        // reste ici que le cadre que le site met autour.
        'post' => [
            'title' => ":title — le blog de Monica",
        ],

        // La page 2 d'une liste n'est pas la liste. Sans cela, quatre pages du
        // blog se disputent un même résultat sous un même titre.
        'paginated' => ":title (page :page sur :total)",

        'v3' => [
            'title' => "Monica v3 — reconstruite pour les dix prochaines années",
            'description' => "Monica v3 est une reconstruction complète du CRM personnel open source : des fiches que vous concevez, un journal relié à tout le reste, une API complète et une vraie expérience mobile. Toujours open source. Avant la fin de 2026.",
        ],

        // Un bloc par onglet des fonctionnalités : chaque onglet a sa propre
        // URL, et un moteur de recherche qui trouve les trois doit pouvoir les
        // distinguer.
        'features' => [
            'title' => "Gestion des contacts — les fonctionnalités de Monica",
            'description' => "Notez ce que vous savez des personnes qui comptent pour vous : relations, coordonnées, notes privées, appels, rappels et cadeaux, le tout sur une même fiche de contact.",
        ],

        'featuresDashboard' => [
            'title' => "Le tableau de bord — les fonctionnalités de Monica",
            'description' => "Le tableau de bord de Monica montre qui vous avez consulté en dernier, ce qui arrive ensuite, vos notes favorites et les appels que vous avez passés, pour vous concentrer sur ce qui compte vraiment.",
        ],

        'featuresJournal' => [
            'title' => "Le journal — les fonctionnalités de Monica",
            'description' => "Écrivez des entrées de journal, indiquez comment s’est passée votre journée et relisez les activités avec vos contacts que Monica consigne automatiquement.",
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
        'v3' => "Monica v3",
        'features' => "Fonctionnalités",
        'pricing' => "Tarifs",
        'blog' => "Blog",
        'docs' => "Documentation",
        'signIn' => "Se connecter",
        'getStarted' => "Commencer",
        'stars' => ":count étoiles",
    ],

    'hero' => [
        'eyebrow' => "Le CRM personnel open source",
        'title' => "Souvenez-vous des gens qui comptent pour vous.",
        'lede' => "Monica vous aide à garder trace des gens qui traversent votre vie — ce qu’ils vous racontent, les moments que vous partagez et les promesses que vous aviez pourtant l’intention de tenir.",
        'lede2' => "Privée par conception. Open source. Auto-hébergeable. Aucune publicité, aucune revente de données, aucune notification gênante pour vous « réengager ».",
        'primaryCta' => "Commencer avec Monica",
        'githubCta' => "Voir sur GitHub · :count étoiles",
        'note' => "Auto-hébergement gratuit · Version hébergée disponible",
    ],

    'proof' => [
        'starsLabel' => "Étoiles sur GitHub",
        'since' => "2017",
        'sinceLabel' => "Open source depuis",
        'featured' => "Dépôt de la semaine",
        'featuredLabel' => "Mis en avant plusieurs fois",
        'launch' => "Product Hunt",
        'launchLabel' => "Lancement remarqué",
        'aside' => "Apparemment, beaucoup de gens oublient aussi les anniversaires.",
    ],

    'notALead' => [
        'title' => "Un CRM où personne n’est un prospect.",
        'body' => "Les CRM classiques aident les entreprises à se souvenir de leurs clients. Monica vous aide à vous souvenir de vos amis, de votre famille, de vos collègues, de vos voisins et de tous ceux qui comptent.",
        'aside' => "L’attention aux autres devient plus simple quand votre mémoire a une sauvegarde.",
        'listTitle' => "Conservez les détails que vous oublieriez autrement :",
        'items' => [
            "ce qui se passe dans leur vie ;",
            "comment vous vous connaissez ;",
            "les dates importantes ;",
            "vos conversations passées ;",
            "les cadeaux, les dettes, les promesses et les idées ;",
            "les rappels pour reprendre contact.",
        ],
    ],

    'showcase' => [
        'title' => "Tout sur quelqu’un. Au même endroit.",
        'aside' => "Les gens sont compliqués. Leurs fiches ont bien le droit d’être un peu compliquées aussi.",
        'card' => [
            'name' => "Élise Aubert",
            'meta' => "Sœur · Lyon · Dernier échange aujourd’hui",
            'badge' => "Famille",
            'birthdayLabel' => "Anniversaire",
            'birthday' => "18 mars · aura 39 ans dans 7 mois",
            'metLabel' => "Comment vous vous êtes connus",
            'met' => "De naissance",
            'relationshipsLabel' => "Relations",
            'relationships' => [
                ['initials' => "MC", 'label' => "Élise est la compagne de Marc", 'meta' => "10 ans"],
                ['initials' => "LA", 'label' => "Élise est le parent de Léa", 'meta' => "Depuis 2019"],
            ],
            'recentlyLabel' => "Récemment",
            'timeline' => [
                [
                    'nature' => 'meal',
                    'title' => "Déjeuner au Petit Sud",
                    'meta' => "Aujourd’hui · elle envisage de revenir vivre à Lyon",
                ],
                [
                    'nature' => 'call',
                    'title' => "Appel au sujet de Georges",
                    'meta' => "2 août · 22 minutes",
                ],
            ],
            'reminder' => "Demander comment s’est passé l’entretien",
            'reminderMeta' => "Rappel · demain",
        ],
        'features' => [
            [
                'icon' => 'relationship',
                'title' => "Relations",
                'body' => "Comprenez les familles, les couples, les amitiés, les collègues et les liens entre eux.",
            ],
            [
                'icon' => 'journal',
                'title' => "Notes et journal",
                'body' => "Retrouvez ce qui s’est passé sans faire défiler six applications de messagerie.",
            ],
            [
                'icon' => 'reminder',
                'title' => "Rappels",
                'body' => "Appeler votre mère. Féliciter votre ami. Demander comment s’est passé l’entretien. Monica se souvient ; le mérite reste pour vous.",
            ],
            [
                'icon' => 'activity',
                'title' => "Activités",
                'body' => "Gardez l’historique des repas, des appels, des voyages, des événements et des petits moments qui font une relation.",
            ],
            [
                'icon' => 'panel',
                'title' => "Informations sur mesure",
                'body' => "Conservez les détails qui comptent pour vous, pas les champs qu’un CRM commercial juge importants.",
            ],
        ],
    ],

    'notSocial' => [
        'title' => "Volontairement pas un réseau social.",
        'body' => "Monica ne recommande pas d’amis, ne classe pas vos relations, n’insère pas de publicité et ne prévient personne que vous avez consulté son profil.",
        'body2' => "C’est un espace privé pour vos souvenirs et vos relations.",
        'quote' => "Aucun fil d’actualité. Aucun abonné. Aucune marque qui se prend pour une personne.",
    ],

    'openSource' => [
        'title' => "À vous veut dire à vous.",
        'body' => "Monica est open source depuis le premier jour. Cela ne change pas.",
        'aside' => "La confiance, c’est utile. Le code source, c’est mieux.",
        'sourceCta' => "Explorer le code source",
        'hostingCta' => "Lire le guide d’auto-hébergement",
        'v3Cta' => "Voir tout ce qui arrive avec Monica v3",
        'listTitle' => "Avec Monica v3 :",
        'items' => [
            "le projet reste entièrement open source ;",
            "vous pouvez l’exécuter sur votre propre serveur ;",
            "la version hébergée utilise la même application ;",
            "vos données peuvent être exportées ;",
            "le code peut être inspecté, modifié et forké.",
        ],
    ],

    'v3' => [
        'title' => "Monica grandit. À peu près.",
        'body' => "Monica v3 est reconstruite de fond en comble pour la décennie à venir.",
        'body2' => "Elle sera plus souple, plus extensible et bien meilleure sur téléphone — tout en préservant les principes de confidentialité et de propriété qui ont rendu Monica utile dès le départ.",
        'listLabel' => "À venir en v3",
        'features' => [
            [
                'icon' => 'panel',
                'title' => "Des fiches que vous concevez",
                'body' => "Choisissez les sections et les champs d’une fiche au lieu d’accepter notre avis pour toujours.",
            ],
            [
                'icon' => 'relationship',
                'title' => "Plus que des contacts",
                'body' => "Reliez les gens à des animaux, des entreprises, des logements, des véhicules, des projets et tout ce qui compte dans leur vie.",
            ],
            [
                'icon' => 'journal',
                'title' => "Un journal relié à tout",
                'body' => "Consignez un moment une seule fois et reliez-le aux personnes, aux fiches, aux dates et aux rappels concernés.",
            ],
            [
                'icon' => 'tag',
                'title' => "Des structures créées par la communauté",
                'body' => "Installez des structures utiles créées par d’autres utilisateurs de Monica, puis modifiez votre copie librement.",
            ],
            [
                'icon' => 'code',
                'title' => "Une API complète et un serveur MCP",
                'body' => "Tout ce qui est accessible dans l’interface doit l’être aussi par programmation.",
            ],
            [
                'icon' => 'phone',
                'title' => "Une vraie expérience mobile",
                'body' => "D’abord une application web responsive, puis des applications natives iOS et Android.",
            ],
        ],
        'cta' => "Découvrir Monica v3",
        'note' => "Attendue avant la fin de 2026 · L’accès bêta s’ouvrira progressivement",
    ],

    /** La page /v3. La clé `v3` ci-dessus est la section de la page d'accueil. */
    'v3page' => [
        'badge' => "Monica v3 · En développement",
        'timing' => "Avant la fin de 2026",
        'title' => "Monica est reconstruite pour les dix prochaines années.",
        'lede' => "Monica a aidé des milliers de personnes à se souvenir de ce qui compte chez celles et ceux qui les entourent. Elle est aujourd'hui reconstruite de fond en comble : plus souple, plus privée, plus facile à étendre, et meilleure sur tous les écrans.",
        'lede2' => "Elle restera open source. Et tout ce qui faisait l'intérêt de Monica reste en place.",

        'form' => [
            'label' => "Adresse e-mail",
            'placeholder' => "vous@exemple.com",
            'cta' => "Prévenez-moi au lancement",
            'note' => "Un seul e-mail, au lancement de Monica v3. Pas de newsletter, pas de pixel de suivi, pas de bruit.",
        ],

        'proof' => [
            'stars' => ":count étoiles sur GitHub",
            'openSource' => "Open source depuis 2017",
            'selfHostable' => "Auto-hébergeable",
        ],

        'coming' => [
            'label' => "Ce qui arrive",
            'title' => "Beaucoup de choses changent. Monica devient davantage la vôtre.",
            'body' => "Monica v3 n'est pas un simple rafraîchissement visuel. C'est une nouvelle fondation, pensée pour rendre le produit plus souple sans le rendre plus compliqué.",
            'features' => [
                [
                    'icon' => 'panel',
                    'title' => "Façonnez Monica autour de votre vie",
                    'body' => "Créez les sections et les champs qui ont du sens pour vous. Gardez Monica simple, ou construisez des fiches détaillées pour ce que vous tenez à retenir.",
                ],
                [
                    'icon' => 'relationship',
                    'title' => "Suivez plus que des personnes",
                    'body' => "Les gens restent au centre de Monica, mais ils n'existent pas isolément. Reliez-les à des animaux, des entreprises, des logements, des véhicules, des projets ou toute autre fiche qui compte dans leur vie.",
                ],
                [
                    'icon' => 'journal',
                    'title' => "Souvenez-vous de ce qui s'est passé",
                    'body' => "Appels, repas, voyages, moments difficiles, petits détails qui méritent d'être gardés : ajoutez-les à un journal relié naturellement aux personnes, aux dates et aux rappels.",
                ],
                [
                    'icon' => 'tag',
                    'title' => "Partez de structures créées par d'autres",
                    'body' => "Installez des modèles prêts à l'emploi créés par la communauté, adaptez-les librement, et gardez le contrôle complet de votre propre version.",
                ],
                [
                    'icon' => 'code',
                    'title' => "Construisez sur une base ouverte",
                    'body' => "Tout ce qui est disponible dans l'interface le sera aussi via l'API. Monica sera plus facile à intégrer, à automatiser et à étendre, sans dépendre de points d'accès cachés ou privés.",
                ],
                [
                    'icon' => 'phone',
                    'title' => "Utilisez vraiment Monica sur tous les écrans",
                    'body' => "L'application web sera conçue pour le téléphone dès le départ. Des applications natives iOS et Android suivront, construites comme de vraies applications et non comme des habillages de site web.",
                ],
            ],
        ],

        'principles' => [
            'label' => "Ce qui ne change pas",
            'title' => "Les principes ne sont pas réécrits.",
            'body' => "Monica v3 est ambitieuse, mais c'est toujours Monica. Les engagements qui ont valu au projet :count étoiles sur GitHub font toujours partie des fondations.",
            'items' => [
                [
                    'icon' => 'code',
                    'title' => "Open source, et elle le restera",
                    'body' => "Monica restera entièrement open source et auto-hébergeable. Le code pourra être lu, modifié, forké et enrichi, exactement comme aujourd'hui.",
                ],
                [
                    'icon' => 'lock',
                    'title' => "Vos données restent les vôtres",
                    'body' => "Pas de publicité. Aucune revente de données personnelles. Aucun modèle entraîné sur vos contacts. Votre vie privée n'est pas un modèle économique.",
                ],
                [
                    'icon' => 'download',
                    'title' => "Exportez tout",
                    'body' => "Exportez vos informations quand vous le souhaitez, y compris les structures, sections et champs personnalisés que vous avez créés.",
                ],
                [
                    'icon' => 'people',
                    'title' => "Conçue pour être utilisable par tout le monde",
                    'body' => "Navigation au clavier, lecteurs d'écran, localisation et mises en page adaptatives sont des exigences produit, pas du travail remis à plus tard.",
                ],
                [
                    'icon' => 'arrowRight',
                    'title' => "Les utilisateurs actuels ne sont pas laissés de côté",
                    'body' => "L'objectif est d'offrir un chemin de migration clair pour les comptes Monica existants : contacts, notes, rappels et autres informations essentielles.",
                ],
            ],
        ],

        'follow' => [
            'title' => "Suivez la reconstruction depuis le début.",
            'body' => "Monica v3 est encore en développement, et beaucoup de décisions importantes se prennent au grand jour. Inscrivez-vous à la liste de lancement ou suivez le dépôt pour voir le travail avancer.",
            'note' => "Open source · Auto-hébergeable · Développée en public",
            'primaryCta' => "Recevoir l'e-mail de lancement",
            'secondaryCta' => "Suivre Monica sur GitHub",
        ],
    ],

    'founder' => [
        'title' => "Créée parce que j’ai une mauvaise mémoire.",
        'body' => "J’ai créé Monica parce que j’oubliais sans cesse des détails sur des gens qui comptaient vraiment pour moi.",
        'body2' => "Pas parce qu’ils étaient sans importance. Parce que la vie est chargée, que la mémoire est peu fiable et que le cerveau humain n’est apparemment pas livré avec une fonction de recherche.",
        'body3' => "Monica a commencé comme un projet personnel en 2017. C’est devenu depuis l’un des projets de CRM personnel open source les plus suivis, soutenu et amélioré par des contributeurs du monde entier.",
        'signature' => "— Régis, fondateur et personne qui oublie encore des choses de temps en temps",
    ],

    'faq' => [
        'title' => "Les questions que l’on pose vraiment.",
        'items' => [
            [
                'q' => "Monica est-elle vraiment gratuite ?",
                'a' => "Le code est gratuit et le restera. Vous pouvez l’exécuter sur votre propre serveur sans rien payer. La version hébergée est un abonnement payant, parce que les serveurs et les sauvegardes ont un coût, et parce qu’elle finance le travail sur le projet open source.",
            ],
            [
                'q' => "Faut-il être technique pour l’utiliser ?",
                'a' => "Pas pour la version hébergée : vous créez un compte et vous commencez. L’auto-hébergement demande un peu plus : Docker, ou un environnement PHP que vous savez maintenir. La documentation couvre les deux.",
            ],
            [
                'q' => "Qui peut voir mes données sur la version hébergée ?",
                'a' => "Personne ne les parcourt. Le support ne peut accéder à un compte qu’avec votre autorisation explicite, pour un problème précis. Vos données ne sont jamais vendues, jamais utilisées pour de la publicité et jamais utilisées pour entraîner un modèle.",
            ],
            [
                'q' => "Puis-je récupérer mes données ?",
                'a' => "À tout moment, intégralement, y compris les structures que vous avez créées. L’export est une fonctionnalité, pas un parcours d’obstacles destiné à vous retenir.",
            ],
            [
                'q' => "Puis-je importer les contacts que j’ai déjà ?",
                'a' => "Oui — fichiers vCard et CSV. Les doublons vous sont présentés avant toute fusion, parce que fusionner les deux mauvaises personnes est une façon mémorable de gâcher un après-midi.",
            ],
            [
                'q' => "Qu’arrive-t-il à mon compte quand la v3 sortira ?",
                'a' => "L’objectif est un chemin de migration clair pour les comptes existants, contacts, notes, rappels et autres informations essentielles compris. Rien n’est supprimé et rien ne vous est imposé du jour au lendemain.",
                'link' => ['label' => "En savoir plus sur Monica v3", 'page' => 'v3'],
            ],
            [
                'q' => "Existe-t-il une application mobile ?",
                'a' => "L’application web fonctionne déjà sur téléphone. Les applications natives iOS et Android arriveront après la v3 — de vraies applications, pas un site web dans une coquille.",
            ],
            [
                'q' => "Monica fait-elle quelque chose avec l’IA ?",
                'a' => "Monica v3 expose un serveur MCP : vous pouvez y brancher votre propre assistant sur vos propres données si vous le souhaitez. Monica n’envoie pas vos relations à un modèle de sa propre initiative.",
            ],
        ],
    ],

    'plans' => [
        'title' => "Notre serveur. Ou le vôtre.",
        'hosted' => [
            'title' => "Monica hébergée",
            'body' => "Pour celles et ceux qui veulent Monica sans gérer de serveur.",
            'items' => [
                "mises à jour automatiques ;",
                "sauvegardes gérées ;",
                "aucun travail d’infrastructure ;",
                "soutient le développement du projet open source.",
            ],
            'cta' => "Créer un compte",
        ],
        'selfHosted' => [
            'title' => "Auto-héberger Monica",
            'body' => "Pour celles et ceux qui aiment posséder leur infrastructure, ou qui le prétendent.",
            'items' => [
                "contrôle total ;",
                "code open source ;",
                "aucun abonnement à Monica ;",
                "installation avec Docker ou manuelle.",
            ],
            'cta' => "Auto-héberger Monica",
        ],
    ],

    'finalCta' => [
        'title' => "Soyez un meilleur ami. Avec un soutien administratif.",
        'body' => "Retenez les détails importants. Reprenez contact au bon moment. Gardez vos relations hors des bases de données publicitaires.",
        'primaryCta' => "Commencer avec Monica",
        'secondaryCta' => "Voir Monica v3",
        'note' => "Open source · Auto-hébergeable · Sans carte bancaire",
    ],

    /** La page /tarifs. Les prix viennent du design ; à changer ici, par locale. */
    'pricing' => [
        'eyebrow' => "Tarifs simples",
        'title' => "Une seule offre hébergée. Aucun tarif à la relation.",
        'lede' => "Utilisez Monica sur nos serveurs pour un prix prévisible, ou hébergez-la vous-même gratuitement.",
        'lede2' => "Nous ne facturons ni au contact, ni au rappel, ni à l'anniversaire important, ni à la personne que vous essayez de ne pas décevoir.",
        'currency' => "Prix en USD",
        'taxFootnote' => "Les prix sont affichés en USD. Les taxes applicables sont calculées avant le paiement.",

        'billing' => [
            'label' => "Périodicité de facturation",
            'yearly' => "Annuel — 2 mois offerts",
            'monthly' => "Mensuel",
        ],

        'hosted' => [
            'title' => "Monica hébergée",
            'body' => "Pour celles et ceux qui veulent Monica sans entretenir de serveur.",
            'yearlyPrice' => "90 $",
            'yearlyPeriod' => "USD / an",
            'yearlyNote' => "Deux mois offerts en facturation annuelle.",
            'monthlyPrice' => "9 $",
            'monthlyPeriod' => "USD / mois",
            'monthlyNote' => "Facturé au mois. Passez à l'annuel pour deux mois offerts.",
            'taxNote' => "Des taxes peuvent s'appliquer selon votre pays.",
            'cta' => "Commencer avec Monica",
            'trial' => "Essai de 30 jours · Aucune carte bancaire pendant l'essai",
            'listTitle' => "Tout ce qu'il faut pour se souvenir des gens qui comptent :",
            'items' => [
                "contacts illimités ;",
                "notes illimitées ;",
                "rappels illimités ;",
                "activités et entrées de journal illimitées ;",
                "gestion des relations ;",
                "champs et sections personnalisés ;",
                "pièces jointes ;",
                "export des données ;",
                "mises à jour automatiques ;",
                "sauvegardes gérées ;",
                "support par e-mail ;",
                "accès depuis téléphone, tablette et ordinateur ;",
                "toutes les futures fonctionnalités hébergées incluses.",
            ],
            'aside' => "Aucun supplément pour une grande famille.",
            'footnote' => "Résiliez quand vous voulez. Vos contacts ne seront pas pris en otage.",
        ],

        'selfHosted' => [
            'title' => "Vous préférez votre propre serveur ?",
            'body' => "Monica est open source et s'installe sur l'infrastructure de votre choix.",
            'price' => "0 $",
            'period' => "côté Monica",
            'aside' => "Votre hébergeur, lui, voudra sans doute de l'argent. Nous n'avons pas encore vaincu le capitalisme.",
            'cta' => "Voir le guide d'auto-hébergement",
            'sourceCta' => "Parcourir le code sur GitHub · :count étoiles",
            'listTitle' => "L'application est gratuite. Vous fournissez le serveur, les mises à jour, les sauvegardes, la supervision, les correctifs de sécurité, et la tranquillité de savoir exactement où vivent vos données.",
            'items' => [
                "l'application open source complète ;",
                "des contacts illimités ;",
                "autant d'utilisateurs que votre infrastructure le permet ;",
                "le contrôle total de vos données ;",
                "l'import et l'export des données ;",
                "la documentation communautaire ;",
                "le support communautaire ;",
                "la possibilité d'inspecter et de modifier le code source.",
            ],
            'footnote' => "L'édition auto-hébergée n'est pas une démo bridée. C'est Monica, sur votre infrastructure.",
            'footnote2' => "Les sauvegardes gérées, l'envoi d'e-mails, la supervision de l'infrastructure et le support direct font partie du service hébergé.",
        ],

        'compare' => [
            'title' => "La même Monica. Une autre personne responsable du serveur.",
            'rowHeader' => "Quoi",
            'hosted' => "Monica hébergée",
            'selfHosted' => "Monica auto-hébergée",
            'rows' => [
                ['label' => "Logiciel Monica", 'hosted' => "Inclus", 'selfHosted' => "Inclus"],
                ['label' => "Contacts", 'hosted' => "Illimités", 'selfHosted' => "Illimités"],
                ['label' => "Mises à jour", 'hosted' => "Automatiques", 'selfHosted' => "Vous les installez"],
                ['label' => "Sauvegardes", 'hosted' => "Gérées par Monica", 'selfHosted' => "Vous les gérez"],
                ['label' => "Maintenance du serveur", 'hosted' => "Gérée par Monica", 'selfHosted' => "Vous la gérez"],
                ['label' => "Emplacement des données", 'hosted' => "Infrastructure Monica", 'selfHosted' => "Votre infrastructure"],
                ['label' => "Connaissances techniques requises", 'hosted' => "Aucune", 'selfHosted' => "Quelques-unes"],
                ['label' => "Support", 'hosted' => "Support par e-mail", 'selfHosted' => "Support communautaire"],
                ['label' => "Coût", 'hosted' => "Abonnement mensuel ou annuel", 'selfHosted' => "Logiciel gratuit plus frais d'hébergement"],
                ['label' => "Idéal pour", 'hosted' => "Les gens qui veulent que Monica fonctionne", 'selfHosted' => "Les gens qui aiment les serveurs, ou qui y sont contraints"],
            ],
        ],

        'whyPay' => [
            'title' => "Pourquoi payer si Monica est open source ?",
            'body' => "L'open source vous permet d'exécuter, d'inspecter, de modifier Monica et d'y contribuer. Il ne fait pas disparaître les serveurs, les sauvegardes, l'envoi d'e-mails, le travail de sécurité ni le support.",
            'body2' => "Un abonnement hébergé paie l'infrastructure qui fait tourner votre compte et finance le développement continu de Monica pour tout le monde, y compris pour celles et ceux qui l'auto-hébergent.",
            'quote' => "Vous nous payez pour faire tourner Monica, pas pour déverrouiller vos propres données.",
            'aside' => "Un serveur, c'est un ordinateur qui envoie des factures.",
        ],

        'noCharge' => [
            'title' => "Ce que nous ne facturons pas",
            'items' => [
                ['title' => "Plus de contacts", 'body' => "Votre tarif n'augmente pas parce que vous connaissez plus de monde."],
                ['title' => "Plus de rappels", 'body' => "Se souvenir des anniversaires est déjà assez stressant."],
                ['title' => "L'export des données", 'body' => "Repartir avec vos données est un droit, pas une option payante."],
                ['title' => "La confidentialité", 'body' => "Nous ne vendons pas d'option vie privée. La confidentialité est la valeur par défaut."],
                ['title' => "La résiliation", 'body' => "Aucun frais de résiliation, et aucun appel de rupture protocolaire."],
                ['title' => "L'utilisation de l'API", 'body' => "L'API fait partie du produit, ce n'est pas une négociation à part."],
            ],
        ],

        'leaving' => [
            'title' => "Votre abonnement peut s'arrêter. Votre accès à vos données, non.",
            'body' => "Vous pouvez exporter vos données à tout moment.",
            'body2' => "À la résiliation, votre compte reste accessible jusqu'à la fin de la période payée. Ensuite, nous le gardons disponible pendant un délai de grâce défini avant suppression.",
            'steps' => [
                ['label' => "Résilier", 'body' => "Votre offre reste active jusqu'à la fin de la période de facturation."],
                ['label' => "Exporter", 'body' => "Téléchargez vos données avant ou après la résiliation, pendant le délai de grâce."],
                ['label' => "Supprimer", 'body' => "Supprimez votre compte immédiatement depuis les réglages, quand vous le décidez."],
            ],
            'note' => "Le délai de grâce, les formats d'export et les délais de suppression sont détaillés dans la politique de conservation.",
        ],

        'trackRecord' => [
            'title' => "Open source avant que ce soit une stratégie tarifaire",
            'body' => "Monica est développée au grand jour depuis 2017.",
            'body2' => "Le projet a réuni :count étoiles sur GitHub, a été choisi plusieurs fois comme dépôt de la semaine, est arrivé en tête de Product Hunt et a été reconnu par la communauté open source.",
            'starsLabel' => "Étoiles sur GitHub",
            'since' => "2017",
            'sinceLabel' => "Open source depuis",
            'launch' => "N° 1 du jour",
            'launchLabel' => "Product Hunt",
            'featured' => "Dépôt de la semaine",
            'featuredLabel' => "Mis en avant plusieurs fois",
            'cta' => "Voir Monica sur GitHub",
        ],

        'faq' => [
            'title' => "Questions sur le paiement de Monica",
            'items' => [
                ['q' => "Combien coûte Monica ?", 'a' => [
                    "Monica hébergée coûte 9 USD par mois ou 90 USD par an.",
                    "Vous pouvez aussi héberger Monica gratuitement sur une infrastructure que vous gérez.",
                ]],
                ['q' => "Le prix est-il par utilisateur ou par contact ?", 'a' => "Non. L'offre hébergée a un seul prix par compte et inclut des contacts illimités."],
                ['q' => "Monica est-elle vraiment open source ?", 'a' => [
                    "Oui. Le code source de Monica est public, et le projet compte :count étoiles sur GitHub.",
                    "Monica v3 restera open source et auto-hébergeable.",
                ], 'link' => ['label' => "En savoir plus sur Monica v3", 'page' => 'v3']],
                ['q' => "L'auto-hébergement est-il gratuit ?", 'a' => "Monica ne facture pas le logiciel auto-hébergé. Le serveur et les frais d'infrastructure sont à votre charge."],
                ['q' => "La version hébergée diffère-t-elle de la version auto-hébergée ?", 'a' => [
                    "Elles utilisent la même application.",
                    "Le service hébergé comprend l'infrastructure, les mises à jour gérées, les sauvegardes, la supervision, l'envoi d'e-mails et le support. Certaines intégrations qui dépendent de l'infrastructure opérée par Monica peuvent n'exister que sur le service hébergé.",
                ]],
                ['q' => "Puis-je passer de l'hébergé à l'auto-hébergé ?", 'a' => "Oui. Vous pouvez exporter vos données Monica et les importer dans une installation auto-hébergée compatible."],
                ['q' => "Puis-je résilier à tout moment ?", 'a' => "Oui. Résiliez depuis les réglages de votre compte. Votre abonnement reste actif jusqu'à la fin de la période en cours."],
                ['q' => "Y a-t-il des frais de résiliation ?", 'a' => "Non. Partir ne devrait pas exiger une rançon."],
                ['q' => "Que se passe-t-il si mon paiement échoue ?", 'a' => [
                    "Nous vous prévenons et réessayons le paiement avant de restreindre le compte.",
                    "Vos données ne sont pas supprimées parce qu'une carte a expiré.",
                ]],
                ['q' => "Comment fonctionnent les remboursements ?", 'a' => [
                    "Si vous avez été débité par erreur ou avez oublié de résilier, écrivez-nous dans les 30 jours. Nous examinerons la demande comme des êtres humains raisonnables.",
                    "Les abonnements annuels peuvent être remboursés dans le délai défini par notre politique de remboursement. Les remboursements ne s'appliquent pas aux comptes ayant gravement abusé du service.",
                ]],
                ['q' => "Le prix va-t-il augmenter ?", 'a' => [
                    "Les prix peuvent évoluer avec Monica, mais nous prévenons les abonnés existants à l'avance.",
                    "Nous ne changeons pas les prix en silence en espérant que personne ne s'en aperçoive.",
                ]],
                ['q' => "Les taxes sont-elles incluses ?", 'a' => "Les prix affichés incluent ou excluent les taxes selon votre pays et la loi applicable. Le montant final est indiqué avant le paiement."],
                ['q' => "Monica conserve-t-elle mes informations de paiement ?", 'a' => "Les informations de paiement sont traitées par notre prestataire. Monica ne stocke pas les numéros de carte complets."],
                ['q' => "Mes données servent-elles à la publicité ?", 'a' => "Non. Monica ne vend pas vos données personnelles, n'affiche pas de publicité et n'utilise pas les personnes de votre compte pour construire des profils publicitaires."],
                ['q' => "Mes données servent-elles à entraîner des modèles d'IA ?", 'a' => "Aucun modèle n'est entraîné sur le contenu privé de votre compte Monica."],
                ['q' => "Les sauvegardes sont-elles incluses ?", 'a' => [
                    "Oui, le service hébergé comprend des sauvegardes gérées.",
                    "Les installations auto-hébergées exigent que vous configuriez et testiez vos propres sauvegardes.",
                ]],
                ['q' => "Puis-je tout exporter ?", 'a' => "Vous pouvez exporter contacts, relations, notes, rappels, activités, champs personnalisés et les autres données prises en charge. Les pièces jointes sont incluses selon le format d'export documenté."],
                ['q' => "Puis-je supprimer mon compte ?", 'a' => "Oui. La suppression du compte se fait depuis les réglages, sans passer par le support."],
                ['q' => "Proposez-vous des réductions ?", 'a' => "Pas pour l'instant. Nous préférons un prix compréhensible à un système où chacun négocie de son côté."],
                ['q' => "Proposez-vous une offre à vie ?", 'a' => "Non. Les serveurs continuent d'avoir des dépenses après la fin des campagnes de lancement enthousiastes."],
                ['q' => "Proposez-vous une offre entreprise ?", 'a' => [
                    "Aucun rendez-vous commercial n'est nécessaire pour utiliser Monica.",
                    "Pour les questions de sécurité, d'achats ou d'hébergement en volume, écrivez-nous.",
                ]],
                ['q' => "Puis-je payer dans une autre devise ?", 'a' => "La facturation se fait actuellement en USD. Votre banque peut convertir le montant et facturer des frais de change."],
                ['q' => "S'abonner soutient-il le projet open source ?", 'a' => "Oui. Les abonnements hébergés financent l'infrastructure, la maintenance, le support et le développement open source continu de Monica."],
            ],
        ],

        'finalCta' => [
            'title' => "Votre mémoire a fait assez d'heures non payées.",
            'body' => "Prenez la version hébergée et laissez-nous gérer l'infrastructure, ou installez Monica sur votre propre serveur.",
            'body2' => "Dans les deux cas, vos contacts restent des gens, pas des prospects.",
            'primaryCta' => "Commencer avec Monica",
            'secondaryCta' => "Auto-héberger Monica",
            'note' => "Une offre hébergée simple · Auto-hébergement gratuit · Open source",
        ],
    ],

    'footer' => [
        'tagline' => "Un CRM personnel privé et open source pour se souvenir des gens qui comptent.",
        'productLabel' => "Produit",
        'projectLabel' => "Projet",
        'github' => "GitHub",
        'privacy' => "Confidentialité",
        'terms' => "Conditions d'utilisation",
        'team' => "Équipe",
        'copyright' => "© :year Monica",
        'since' => "Open source depuis 2017",
        'ownership' => "Vos données restent les vôtres.",
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

        // Tous les articles ont le même auteur pour l'instant. Ce libellé vit
        // ici plutôt que dans l'en-tête de chaque article, parce que c'est une
        // étiquette du site et qu'elle doit se traduire comme telle.
        'authorRole' => "Fondateur",

        'copyLink' => "Copier le lien",
        'copyLinkDone' => "Copié",

        'showing' => "Articles :from à :to sur :total",
        'pageOf' => "Page :page sur :total",
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
     * anglaise dans lang/en.php fait foi : c'est elle qui a été publiée, et
     * c'est elle qu'il faut modifier en premier.
     */
    'terms' => [
        'title' => "Nos conditions d'utilisation",
        'updated' => "Dernière mise à jour : :date",
        'updatedOn' => "12 avril 2018",

        'sections' => [
            [
                'title' => "Portée du service",
                'blocks' => [
                    ['text' => "Monica prend en charge les navigateurs suivants :"],
                    ['items' => [
                        "Internet Explorer (11+)",
                        "Firefox (50+)",
                        "Chrome (dernière version)",
                        "Safari (dernière version)",
                    ]],
                    ['text' => "Je ne garantis pas que le site fonctionnera avec d'autres navigateurs, mais il est très probable que ce soit simplement le cas."],
                ],
            ],
            [
                'title' => "Droits",
                'blocks' => [
                    ['text' => "Vous n'êtes pas obligé de fournir votre véritable nom lorsque vous créez un compte. Vous avez en revanche besoin d'une adresse e-mail valide si vous souhaitez passer à la version payante ou recevoir des rappels par e-mail."],
                    ['text' => "Vous avez le droit de fermer votre compte à tout moment."],
                    ['text' => "Vous avez le droit d'exporter vos données à tout moment, au format SQL."],
                    ['text' => "Vos données ne seront pas intentionnellement montrées à d'autres utilisateurs ni partagées avec des tiers."],
                    ['text' => "Vos données personnelles ne seront partagées avec personne sans votre consentement."],
                    ['text' => "Vos données sont sauvegardées toutes les heures."],
                    ['text' => "Si le site cesse son activité, vous aurez la possibilité d'exporter toutes vos données avant sa disparition."],
                    ['text' => "Toute nouvelle fonctionnalité touchant à la vie privée sera strictement facultative."],
                ],
            ],
            [
                'title' => "Responsabilités",
                'blocks' => [
                    ['text' => "Vous n'utiliserez pas le site pour stocker des informations ou des données illégales au regard du droit canadien (ou de toute autre loi)."],
                    ['text' => "Vous devez avoir au moins 18 ans pour créer un compte et utiliser le site."],
                    ['text' => "Vous ne devez pas abuser du site en publiant sciemment du code malveillant susceptible de vous nuire ou de nuire aux autres utilisateurs."],
                    ['text' => "Vous ne devez utiliser le site que pour des usages largement reconnus comme moralement bons."],
                    ['text' => "Vous n'avez pas le droit d'adresser des requêtes automatisées au site."],
                    ['text' => "Vous n'avez pas le droit d'abuser du système d'invitation."],
                    ['text' => "Il vous appartient de garder votre compte sécurisé."],
                    ['text' => "Je me réserve le droit de fermer les comptes qui abusent du système (des milliers de contacts assortis de centaines de milliers de rappels, par exemple) ou qui l'utilisent de manière déraisonnable."],
                ],
            ],
            [
                'title' => "Autres mentions légales importantes",
                'blocks' => [
                    ['text' => "Même si je veux offrir un excellent service, il y a certaines choses que je ne peux pas promettre à son sujet. Les services et les logiciels sont par exemple fournis « en l'état », à vos propres risques, sans garantie ni condition expresse ou implicite d'aucune sorte. Je décline également toute garantie de qualité marchande, d'adéquation à un usage particulier ou d'absence de contrefaçon. Monica ne saurait être tenue responsable d'un quelconque dommage causé à votre système informatique, d'une perte ou d'une corruption de données, ni de tout autre préjudice résultant de votre accès aux services ou aux logiciels, ou de leur utilisation."],
                    ['text' => "Ces conditions peuvent changer à tout moment, mais je ne me comporterai jamais comme un salaud à ce sujet. Faire tourner ce site est un rêve devenu réalité, et j'espère pouvoir le faire aussi longtemps que possible."],
                ],
            ],
        ],
    ],

    /**
     * Traduction de la politique publiée sur monicahq.com/privacy. La version
     * anglaise dans lang/en.php fait foi : c'est elle qui a été publiée, et
     * c'est elle qu'il faut modifier en premier.
     */
    'privacy' => [
        'title' => "Notre politique de confidentialité",
        'updated' => "Dernière mise à jour : :date",
        'updatedOn' => "30 mai 2019",

        'sections' => [
            [
                'blocks' => [
                    ['text' => "Monica est un projet open source. La version hébergée propose une offre payante qui nous permet de percevoir de l'argent afin de payer les serveurs et des services supplémentaires, mais le but premier n'est pas de gagner de l'argent (sinon nous n'en aurions pas ouvert le code)."],
                    ['text' => "Monica existe en deux versions : vous pouvez utiliser notre version hébergée, ou bien la télécharger et la faire tourner vous-même. Dans ce second cas, nous ne suivons absolument rien. Nous ne savons même pas que vous avez téléchargé le produit. Faites-en ce que vous voulez (mais respectez les lois de votre pays)."],
                    ['text' => "Lorsque vous créez votre compte sur notre version hébergée, vous fournissez au site des informations vous concernant, que nous collectons. Il s'agit de votre nom, de votre adresse e-mail et de votre mot de passe, qui est chiffré avant d'être stocké. Nous ne stockons aucune autre information personnelle."],
                    ['text' => "Lorsque vous vous connectez au service, nous utilisons des cookies pour mémoriser vos identifiants. C'est le seul usage que nous faisons des cookies."],
                    ['text' => "Monica tourne sur Fortrabbit et nous sommes les seuls, en dehors des employés de Fortrabbit, à avoir accès à ces serveurs."],
                    ['text' => "Nous effectuons des sauvegardes horaires de la base de données."],
                    ['text' => "Votre mot de passe est chiffré avec bcrypt, un algorithme de hachage de mots de passe très sûr. Vous pouvez également activer l'authentification à deux facteurs sur votre compte si vous souhaitez une couche de sécurité supplémentaire. En dehors de ces mécanismes de chiffrement, vos données ne sont pas chiffrées dans la base. Si quelqu'un accède à la base de données, il pourra lire vos données. Nous faisons de notre mieux pour que cela n'arrive jamais, mais cela peut arriver."],
                    ['text' => "En cas de violation de données, nous contacterons les utilisateurs concernés pour les avertir."],
                    ['text' => "Les e-mails transactionnels sont acheminés par Postmark."],
                    ['text' => "Nous utilisons un outil open source appelé Sentry pour suivre les erreurs qui surviennent en production. Leur service enregistre les erreurs, mais ils n'ont accès à aucune information en dehors de l'identifiant du compte, qui me permet de comprendre ce qui se passe."],
                    ['text' => "Le site n'affiche pas de publicité aujourd'hui et n'en affichera jamais. Il ne vend pas non plus de données à des tiers, avec ou sans votre consentement, et n'a pas l'intention de le faire. Nous y sommes tout simplement opposés. Merde à la publicité."],
                    ['text' => "Nous n'utilisons aucun service tiers de pistage, comme Google Analytics ou Intercom, qui suivrait les comportements ou les données des utilisateurs, ni sur le site vitrine ni sur la version hébergée. Nous sommes profondément opposés à leurs principes, car ils utiliseraient ces données pour vous profiler, ce à quoi nous sommes totalement opposés."],
                    ['text' => "Toutes les données que vous mettez dans Monica vous appartiennent. Nous n'avons aucun droit dessus. N'y mettez pas de contenu illégal, sans quoi nous aurions des ennuis."],
                    ['text' => "Toutes les informations sur les contacts que vous mettez dans Monica vous sont privées. Nous ne croisons pas les informations entre les comptes et n'utilisons pas une information d'un compte pour en alimenter un autre (contrairement à Facebook, par exemple)."],
                    ['text' => "Nous utilisons Stripe pour encaisser les paiements donnant accès à la version payante. Nous ne stockons sur nos serveurs ni les informations de carte bancaire ni quoi que ce soit concernant les transactions elles-mêmes. Toutefois, comme le prévoit la bibliothèque open source que nous utilisons pour traiter les paiements (Laravel Cashier), nous conservons les 4 derniers chiffres de la carte ainsi que le nom du réseau (VISA ou MasterCard). En tant qu'utilisateur, vous êtes identifié chez Stripe par un numéro aléatoire qu'ils génèrent et utilisent."],
                    ['text' => "À propos des paiements, vous pouvez revenir à l'offre gratuite quand vous le souhaitez. Lorsque vous le faites, Stripe est automatiquement mis à jour et nous n'avons aucun moyen de vous facturer à nouveau, même si nous le voulions. Moins nous manipulons d'informations de paiement, plus nous sommes heureux."],
                    ['text' => "Vous pouvez exporter vos données à tout moment. Vous pouvez également utiliser l'API pour exporter l'ensemble de vos données si vous savez le faire. Vous pouvez enfin nous demander de nous en charger nous-mêmes et de vous les envoyer. Vos données seront exportées au format SQL."],
                    ['text' => "Lorsque vous fermez votre compte, nous détruisons immédiatement toutes vos informations personnelles de la base de données de production, mais vos informations restent présentes dans les sauvegardes que nous conservons 30 jours. Passé ce délai, vos informations seront entièrement détruites. Vous gardez la main sur cette opération, mais nous pouvons supprimer un compte pour vous si vous nous le demandez."],
                    ['text' => "Dans certaines situations, nous pouvons être tenus de divulguer des données personnelles en réponse à des demandes légales d'autorités publiques, notamment pour répondre à des exigences de sécurité nationale ou d'application de la loi. Nous espérons simplement que cela n'arrivera jamais."],
                    ['text' => "Si vous enfreignez les conditions d'utilisation, nous fermerons votre compte et vous en informerons. Cela dit, si vous suivez la règle « ne soyez pas un salaud », il ne devrait jamais rien vous arriver et tout le monde sera content."],
                    ['text' => "Monica n'utilise que des projets open source, hébergés pour l'essentiel sur Github."],
                    ['text' => "Nous mettrons à jour cette politique de confidentialité dès que nous introduirons de nouvelles pratiques en matière d'informations. Le cas échéant, nous enverrons un e-mail à l'adresse indiquée dans votre compte. Nous ne nous comporterons jamais comme des salauds à ce sujet et n'introduirons jamais, au grand jamais, quoi que ce soit dans ce que nous faisons qui porterait atteinte à votre droit à une confidentialité absolue."],
                ],
            ],
        ],
    ],

    'team' => [
        'eyebrow' => "Équipe",
        'title' => "Monica, c'est une équipe de 2. Et des centaines de contributeurs.",

        'stats' => [
            ['value' => "2016", 'label' => "Première ligne de code"],
            ['value' => "Montréal", 'label' => "Siège social"],
            ['value' => "2", 'label' => "Membres officiels"],
            ['value' => "Des centaines", 'label' => "Contributeurs open source"],
            ['value' => "Des millions", 'label' => "Contacts gérés"],
        ],

        'missionLabel' => "Notre mission",
        'mission' => [
            "Notre mission est d'utiliser la technologie d'une manière qui ne nuit pas aux relations humaines, comme peuvent le faire les grands réseaux sociaux.",
            "À une époque où les gens ont des milliers d'amis virtuels, nous voulons offrir un outil qui aide à renforcer les liens avec quelques-uns d'entre eux seulement. Que chaque amitié compte vraiment.",
            "Monica est née d'un besoin personnel : garder le fil de ce que devenaient des amis vivant dans d'autres pays. Après avoir construit la première version de l'outil, j'ai décidé d'en ouvrir le code, de le présenter sur Hacker News, et la suite appartient à l'histoire.",
            "Monica est aujourd'hui un projet open source en bonne santé. Nous avons la chance d'avoir une belle communauté, avec des dizaines de contributeurs et des centaines de contributions au code. Le projet rapporte aussi un peu d'argent : chaque dollar gagné y est réinvesti, pour payer les factures et faire avancer le développement.",
            "Merci de vous intéresser au projet.",
        ],
        'signature' => "Regis Freyd et Alexis Saettler",
    ],

    /**
     * Les trois pages de fonctionnalités, qui partagent une barre d’onglets et
     * une même rangée de conclusion.
     *
     * La copie est celle de l’ancien site, phrase par phrase : c’est la copie
     * marketing du propriétaire, et cette version est une refonte, pas une
     * réécriture. Les annotations étaient des étiquettes rouges épinglées
     * autour de la capture d’écran ; ici, elles forment une liste à côté de
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
            'imageAlt' => "Une fiche de contact Monica : relations, coordonnées, notes, appels, rappels et cadeaux.",
            'callouts' => [
                "Voyez d’un coup d’œil les informations importantes de votre contact",
                "Indiquez les noms des conjoints, des enfants et même des animaux.",
                "Ajoutez toutes les façons de joindre cette personne : téléphone, e-mail, pseudo Whatsapp, et bien plus encore.",
                "Ajoutez des notes, privées, à propos de cette personne.",
                "Indiquez chaque fois que vous appelez des personnes dont vous avez peu de nouvelles, pour qu’on vous rappelle de les appeler à l’avenir.",
                "Ajoutez des rappels pour les dates ou les événements importants. Certains rappels sont remplis automatiquement pour vous (les anniversaires, par exemple).",
                "Gérez les cadeaux offerts ou que vous souhaitez offrir. Indiquez si vous devez de l’argent ou si on vous en doit.",
            ],
        ],

        'dashboard' => [
            'title' => "Voyez rapidement ce qui compte et ce qui arrive ensuite",
            'lede' => "Pour vous concentrer sur ce qui compte vraiment pour vous.",
            'imageAlt' => "Le tableau de bord de Monica : contacts consultés récemment, prochains rappels, notes favorites et appels consignés.",
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
            'imageAlt' => "Le journal de Monica : le déroulé de la journée, les activités consignées avec les contacts et les entrées écrites.",
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
