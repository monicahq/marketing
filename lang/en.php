<?php

/**
 * English copy. This file is the canonical shape: `php please check:lang`
 * compares every other locale against it and fails on a missing key.
 *
 * House voice: sentence case, direct and calm, the reader is "you", Monica
 * refers to itself in the third person. No exclamation marks, no emoji, no
 * artificial enthusiasm.
 *
 * Placeholders are :colon style and are filled by the `t` helper in config.php.
 */

return [
    /**
     * Title and description are per page, keyed by the route name in config.php.
     * The social card is per locale rather than per page, so its alt text sits
     * beside them rather than inside them.
     */
    'meta' => [
        'imageAlt' => "Monica: remember the people you care about. The open-source personal CRM.",

        'home' => [
            'title' => "Monica — the open-source personal CRM",
            'description' => "Monica helps you remember the people you care about: what is happening in their life, important dates, previous conversations, and when to get back in touch. Private, open source, self-hostable.",
        ],

        'v3' => [
            'title' => "Monica v3 — rebuilt for the next ten years",
            'description' => "Monica v3 is a ground-up rebuild of the open-source personal CRM: records you design, a journal connected to everything, a complete API, and a proper mobile experience. Still open source, now MIT licensed. Coming before the end of 2026.",
        ],
    ],

    'announcement' => [
        'headline' => "Monica v3 is coming before the end of 2026.",
        'detail' => "Rebuilt from scratch. Still open source. Now MIT licensed.",
        'cta' => "See what is coming",
    ],

    'nav' => [
        'label' => "Main",
        'product' => "Product",
        'v3' => "Monica v3",
        'pricing' => "Pricing",
        'openSource' => "Open source",
        'blog' => "Blog",
        'docs' => "Documentation",
        'signIn' => "Sign in",
        'getStarted' => "Get started",
        'stars' => ":count stars",
    ],

    'hero' => [
        'eyebrow' => "The open-source personal CRM",
        'title' => "Remember the people you care about.",
        'lede' => "Monica helps you keep track of the people in your life—the things they tell you, the moments you share, and the promises you definitely intended to remember.",
        'lede2' => "Private by design. Open source. Self-hostable. No ads, no data resale, no awkward “engagement” notifications.",
        'primaryCta' => "Start using Monica",
        'githubCta' => "View on GitHub · :count stars",
        'note' => "Free to self-host · Hosted version available · MIT licensed in v3",
    ],

    'proof' => [
        'starsLabel' => "GitHub stars",
        'since' => "2017",
        'sinceLabel' => "Open source since",
        'featured' => "Repository of the Week",
        'featuredLabel' => "Featured multiple times",
        'launch' => "Product Hunt",
        'launchLabel' => "Top launch",
        'aside' => "Apparently, quite a few people also forget birthdays.",
    ],

    'notALead' => [
        'title' => "A CRM, but nobody is a lead.",
        'body' => "Traditional CRMs help companies remember customers. Monica helps you remember friends, family, colleagues, neighbours, and everyone else who matters.",
        'aside' => "Thoughtfulness is easier when your memory has backup.",
        'listTitle' => "Store the details you would otherwise forget:",
        'items' => [
            "what is happening in their life;",
            "how you know each other;",
            "important dates;",
            "previous conversations;",
            "gifts, debts, promises, and ideas;",
            "reminders to get back in touch.",
        ],
    ],

    'showcase' => [
        'title' => "Everything about someone. In one place.",
        'aside' => "People are complicated. Their contact records should be allowed to be slightly complicated too.",
        // A real product surface, not a mockup: this is what a contact record holds.
        'card' => [
            'name' => "Élise Aubert",
            'meta' => "Sister · Lyon · Last spoke today",
            'badge' => "Family",
            'birthdayLabel' => "Birthday",
            'birthday' => "18 March · turns 39 in 7 months",
            'metLabel' => "How you met",
            'met' => "Born into it",
            'relationshipsLabel' => "Relationships",
            'relationships' => [
                ['initials' => "MC", 'label' => "Élise is Marc's partner", 'meta' => "10 years"],
                ['initials' => "LA", 'label' => "Élise is Léa's parent", 'meta' => "Since 2019"],
            ],
            'recentlyLabel' => "Recently",
            'timeline' => [
                [
                    'nature' => 'meal',
                    'title' => "Lunch at Le Petit Sud",
                    'meta' => "Today · she is thinking about moving back to Lyon",
                ],
                [
                    'nature' => 'call',
                    'title' => "Called about Georges",
                    'meta' => "2 August · 22 minutes",
                ],
            ],
            'reminder' => "Ask how the interview went",
            'reminderMeta' => "Reminder · tomorrow",
        ],
        'features' => [
            [
                'icon' => 'relationship',
                'title' => "Relationships",
                'body' => "Understand families, partners, friendships, coworkers, and the connections between them.",
            ],
            [
                'icon' => 'journal',
                'title' => "Notes and journal entries",
                'body' => "Remember what happened without scrolling through six messaging apps.",
            ],
            [
                'icon' => 'reminder',
                'title' => "Reminders",
                'body' => "Call your mother. Congratulate your friend. Ask how the interview went. Monica remembers; you still get the credit.",
            ],
            [
                'icon' => 'activity',
                'title' => "Activities",
                'body' => "Keep a history of meals, calls, trips, events, and the small moments that make up a relationship.",
            ],
            [
                'icon' => 'panel',
                'title' => "Custom information",
                'body' => "Store the details that matter to you, not the fields a sales CRM thinks should matter.",
            ],
        ],
    ],

    'notSocial' => [
        'title' => "Deliberately not a social network.",
        'body' => "Monica does not recommend friends, rank relationships, insert advertising, or tell anyone that you viewed their profile.",
        'body2' => "It is a private place for your memories and your relationships.",
        'quote' => "No feed. No followers. No brands pretending to have personalities.",
    ],

    'openSource' => [
        'title' => "Yours means yours.",
        'body' => "Monica has been open source since the beginning. That is not changing.",
        'aside' => "Trust is useful. Source code is better.",
        'sourceCta' => "Explore the source code",
        'hostingCta' => "Read the self-hosting guide",
        'v3Cta' => "See everything coming in Monica v3",
        'listTitle' => "With Monica v3:",
        'items' => [
            "the project remains fully open source;",
            "the license becomes MIT;",
            "you can run it on your own server;",
            "the hosted product uses the same core application;",
            "your data can be exported;",
            "the code can be inspected, modified, and forked.",
        ],
    ],

    'v3' => [
        'title' => "Monica is growing up. Mostly.",
        'body' => "Monica v3 is being rebuilt from the ground up for the next decade.",
        'body2' => "It will be more flexible, more extensible, and much better on phones—while preserving the privacy and ownership principles that made Monica useful in the first place.",
        'listLabel' => "Coming in v3",
        'features' => [
            [
                'icon' => 'panel',
                'title' => "Records you design",
                'body' => "Choose the sections and fields that belong on a record instead of accepting our opinion forever.",
            ],
            [
                'icon' => 'relationship',
                'title' => "More than contacts",
                'body' => "Connect people to pets, companies, homes, vehicles, projects, and anything else relevant to their lives.",
            ],
            [
                'icon' => 'journal',
                'title' => "A journal connected to everything",
                'body' => "Log moments once and connect them to the people, records, dates, and reminders involved.",
            ],
            [
                'icon' => 'tag',
                'title' => "Community-built structures",
                'body' => "Install useful structures made by other Monica users, then modify your copy freely.",
            ],
            [
                'icon' => 'code',
                'title' => "A complete API and MCP server",
                'body' => "Anything available through the interface should also be available programmatically.",
            ],
            [
                'icon' => 'phone',
                'title' => "A proper mobile experience",
                'body' => "A responsive web application first, followed by native iOS and Android applications.",
            ],
        ],
        'cta' => "Discover Monica v3",
        'note' => "Expected before the end of 2026 · Beta access will open progressively",
    ],

    /** The /v3 teaser page. `v3` above is the homepage section that links to it. */
    'v3page' => [
        'badge' => "Monica v3 · In development",
        'timing' => "Coming before the end of 2026",
        'title' => "Monica is being rebuilt for the next ten years.",
        'lede' => "Monica has helped thousands of people remember what matters about the people in their lives. Now it is being rebuilt from the ground up: more flexible, more private, easier to extend, and better on every screen.",
        'lede2' => "It will remain open source. It will become MIT licensed. And everything that made Monica worth using in the first place is staying.",

        'form' => [
            'label' => "Email address",
            'placeholder' => "you@example.com",
            'cta' => "Tell me when it is ready",
            'note' => "One email when Monica v3 launches. No newsletter, no tracking pixel, no noise.",
        ],

        'proof' => [
            'stars' => ":count GitHub stars",
            'openSource' => "Open source since 2017",
            'selfHostable' => "Self-hostable",
        ],

        'coming' => [
            'label' => "What is coming",
            'title' => "A lot is changing. Monica is becoming more yours.",
            'body' => "Monica v3 is not a visual refresh. It is a new foundation designed to make the product more flexible without making it more complicated.",
            'features' => [
                [
                    'icon' => 'panel',
                    'title' => "Shape Monica around your life",
                    'body' => "Create the sections and fields that make sense to you. Keep Monica simple, or build detailed records for the things you want to remember.",
                ],
                [
                    'icon' => 'relationship',
                    'title' => "Keep track of more than people",
                    'body' => "People remain at the centre of Monica, but they do not exist in isolation. Connect them to pets, companies, homes, vehicles, projects, or any other record that matters in their life.",
                ],
                [
                    'icon' => 'journal',
                    'title' => "Remember what happened",
                    'body' => "Calls, meals, trips, difficult moments, small details worth keeping—add them to a journal that connects naturally to people, dates, and reminders.",
                ],
                [
                    'icon' => 'tag',
                    'title' => "Start from structures built by others",
                    'body' => "Install ready-made templates created by the community, adapt them freely, and keep complete control over your own version.",
                ],
                [
                    'icon' => 'code',
                    'title' => "Build on an open foundation",
                    'body' => "Everything available in the interface will also be available through the API. Monica will be easier to integrate, automate, and extend without relying on hidden or private endpoints.",
                ],
                [
                    'icon' => 'phone',
                    'title' => "Use Monica properly on any screen",
                    'body' => "The web application will be designed for phones from the beginning. Native applications for iOS and Android will follow, built as real applications rather than wrappers around a website.",
                ],
            ],
        ],

        'principles' => [
            'label' => "What does not change",
            'title' => "The principles are not being rewritten.",
            'body' => "Monica v3 is ambitious, but it is still Monica. The commitments behind :count GitHub stars remain part of the foundation.",
            'items' => [
                [
                    'icon' => 'code',
                    'title' => "Open source, now under MIT",
                    'body' => "Monica will remain fully open source and self-hostable. Version 3 will use the MIT license, making it simpler to understand, reuse, extend, and contribute to.",
                ],
                [
                    'icon' => 'lock',
                    'title' => "Your data stays yours",
                    'body' => "No advertising. No sale of personal data. No model trained on your contacts. Your private life is not a business model.",
                ],
                [
                    'icon' => 'download',
                    'title' => "Export everything",
                    'body' => "Export your information whenever you need it—including the custom structures, sections, and fields you created.",
                ],
                [
                    'icon' => 'people',
                    'title' => "Built to be usable by everyone",
                    'body' => "Keyboard navigation, screen readers, localization, and responsive layouts are product requirements, not work postponed until later.",
                ],
                [
                    'icon' => 'arrowRight',
                    'title' => "Existing users are not left behind",
                    'body' => "The goal is to provide a clear migration path for existing Monica accounts, including contacts, notes, reminders, and other essential information.",
                ],
            ],
        ],

        'follow' => [
            'title' => "Follow the rebuild from the beginning.",
            'body' => "Monica v3 is still in development, and many important decisions are being made in the open. Join the launch list or follow the repository to see the work as it happens.",
            'note' => "Open source · MIT licensed · Built in public",
            'primaryCta' => "Get the launch email",
            'secondaryCta' => "Follow Monica on GitHub",
        ],
    ],

    'founder' => [
        'title' => "Built because my memory is bad.",
        'body' => "I created Monica because I kept forgetting details about people I genuinely cared about.",
        'body2' => "Not because they were unimportant. Because life is busy, memory is unreliable, and apparently the human brain did not ship with search.",
        'body3' => "Monica started as a personal project in 2017. It has since become one of the most widely followed open-source personal CRM projects, supported and improved by contributors around the world.",
        'signature' => "— Régis, founder and person who still occasionally forgets things",
    ],

    'faq' => [
        'title' => "Questions people actually ask.",
        'items' => [
            [
                'q' => "Is Monica really free?",
                'a' => "The code is free and always will be. You can run it on your own server without paying anything. The hosted version is a paid subscription, because servers and backups are not free, and it funds the work on the open-source project.",
            ],
            [
                'q' => "Do I need to be technical to use it?",
                'a' => "Not for the hosted version — you create an account and start. Self-hosting asks for a little more: Docker, or a PHP environment you are comfortable maintaining. The documentation walks through both.",
            ],
            [
                'q' => "Who can see my data on the hosted version?",
                'a' => "Nobody browses it. Support staff can only access an account with your explicit permission, for a specific problem. Your data is never sold, never used for advertising, and never used to train a model.",
            ],
            [
                'q' => "Can I get my data out?",
                'a' => "At any time, in full, including the custom structures you built. Export is a feature, not a retention obstacle course.",
            ],
            [
                'q' => "Can I import contacts I already have?",
                'a' => "Yes — vCard and CSV files. Duplicates are shown to you before anything is merged, because merging the wrong two people is a memorable way to ruin an afternoon.",
            ],
            [
                'q' => "What happens to my account when v3 arrives?",
                'a' => "The goal is a clear migration path for existing accounts, including contacts, notes, reminders, and other essential information. Nothing is deleted and nothing is forced on you overnight.",
                'link' => ['label' => "Read about Monica v3", 'page' => 'v3'],
            ],
            [
                'q' => "Is there a mobile application?",
                'a' => "The web application works on a phone today. Native iOS and Android applications come after v3 — real applications, not a website in a shell.",
            ],
            [
                'q' => "Does Monica do anything with AI?",
                'a' => "Monica v3 exposes an MCP server, so you can point your own assistant at your own data if you want to. Monica does not send your relationships to a model on its own initiative.",
            ],
        ],
    ],

    'plans' => [
        'title' => "Use our server. Or yours.",
        'hosted' => [
            'title' => "Monica hosted",
            'body' => "For people who want Monica without operating a server.",
            'items' => [
                "automatic updates;",
                "managed backups;",
                "no infrastructure work;",
                "supports development of the open-source project.",
            ],
            'cta' => "Create an account",
        ],
        'selfHosted' => [
            'title' => "Self-host Monica",
            'body' => "For people who enjoy owning their infrastructure, or at least claim to.",
            'items' => [
                "complete control;",
                "open-source code;",
                "no subscription to Monica;",
                "Docker and manual installation options.",
            ],
            'cta' => "Self-host Monica",
        ],
    ],

    'finalCta' => [
        'title' => "Be a better friend. With administrative support.",
        'body' => "Remember important details. Follow up when it matters. Keep your relationships out of advertising databases.",
        'primaryCta' => "Start using Monica",
        'secondaryCta' => "View Monica v3",
        'note' => "Open source · Self-hostable · No credit card required",
    ],

    'footer' => [
        'tagline' => "A private, open-source personal CRM for remembering the people who matter.",
        'productLabel' => "Product",
        'buildLabel' => "Build",
        'projectLabel' => "Project",
        'api' => "API",
        'selfHosting' => "Self-hosting",
        'github' => "GitHub",
        'privacy' => "Privacy",
        'copyright' => "© :year Monica",
        'since' => "Open source since 2017",
        'ownership' => "Your data stays yours.",
        'languageLabel' => "Change language",
    ],

    'notFound' => [
        'title' => "Page not found.",
        'body' => "This address does not lead anywhere. It may have moved, or it may never have existed.",
    ],
];
