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

        'pricing' => [
            'title' => "Monica pricing — one hosted plan, or self-host for free",
            'description' => "Hosted Monica is $9 USD per month or $90 per year, with unlimited contacts and no per-contact pricing. Or self-host the open-source application for free on your own infrastructure.",
        ],

        'privacy' => [
            'title' => "Privacy policy — Monica",
            'description' => "How Monica handles your data: what we collect, where it is stored, who can see it, and what happens when you close your account. No ads, no trackers, no data resale.",
        ],

        'team' => [
            'title' => "Team — Monica",
            'description' => "Monica is built by two people in Montreal, with hundreds of open-source contributors. Why we build a personal CRM that does not harm human relationships.",
        ],

        'terms' => [
            'title' => "Terms of use — Monica",
            'description' => "The terms of use for Monica, the open-source personal CRM: what the service covers, your rights over your data, your responsibilities, and the legal small print.",
        ],

        'blog' => [
            'title' => "The Monica blog — release notes and product decisions",
            'description' => "What we ship, why we build it that way, and what running a small open-source company actually looks like. Written by the people making Monica.",
        ],

        // A post brings its own title and description, so this is only the
        // frame the site puts around them.
        'post' => [
            'title' => ":title — the Monica blog",
        ],

        // Page 2 of a list is not the list. Without this, four pages of the
        // blog compete for one result under one title.
        'paginated' => ":title (page :page of :total)",

        'v3' => [
            'title' => "Monica v3 — rebuilt for the next ten years",
            'description' => "Monica v3 is a ground-up rebuild of the open-source personal CRM: records you design, a journal connected to everything, a complete API, and a proper mobile experience. Still open source. Coming before the end of 2026.",
        ],

        // One block per features tab, because each tab is its own URL and a
        // crawler that finds all three should be able to tell them apart.
        'features' => [
            'title' => "Contact management — Monica features",
            'description' => "Write down what you know about the people you care about: relationships, contact details, private notes, calls, reminders and gifts, all on one contact record.",
        ],

        'featuresDashboard' => [
            'title' => "The dashboard — Monica features",
            'description' => "The Monica dashboard shows who you last consulted, what is coming next, your favourite notes and the calls you have made, so you can focus on what really matters to you.",
        ],

        'featuresJournal' => [
            'title' => "The journal — Monica features",
            'description' => "Write journal entries, record how your day went, and read the activities with your contacts that Monica logs for you automatically.",
        ],
    ],

    'announcement' => [
        'headline' => "Monica v3 is coming before the end of 2026.",
        'detail' => "Rebuilt from scratch. Still open source.",
        'cta' => "See what is coming",
    ],

    'nav' => [
        'label' => "Main",
        'product' => "Product",
        'v3' => "Monica v3",
        'features' => "Features",
        'pricing' => "Pricing",
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
        'note' => "Free to self-host · Hosted version available",
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
        'lede2' => "It will remain open source. And everything that made Monica worth using in the first place is staying.",

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
                    'title' => "Open source, and staying open source",
                    'body' => "Monica will remain fully open source and self-hostable. The code can be read, modified, forked, and contributed to, exactly as it can today.",
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
            'note' => "Open source · Self-hostable · Built in public",
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

    /** The /pricing page. Prices are the design's; change them here, once per locale. */
    'pricing' => [
        'eyebrow' => "Simple pricing",
        'title' => "One hosted plan. No relationship-based pricing.",
        'lede' => "Use Monica on our servers for one predictable price, or self-host it for free.",
        'lede2' => "We do not charge per contact, per reminder, per important birthday, or per person you are trying not to disappoint.",
        'currency' => "Prices in USD",
        'taxFootnote' => "Prices are shown in USD. Applicable taxes are calculated before payment.",

        'billing' => [
            'label' => "Billing period",
            'yearly' => "Yearly — save 2 months",
            'monthly' => "Monthly",
        ],

        'hosted' => [
            'title' => "Hosted Monica",
            'body' => "For people who want Monica without maintaining a server.",
            'yearlyPrice' => "$90",
            'yearlyPeriod' => "USD / year",
            'yearlyNote' => "Two months free when billed yearly.",
            'monthlyPrice' => "$9",
            'monthlyPeriod' => "USD / month",
            'monthlyNote' => "Billed monthly. Switch to yearly for two months free.",
            'taxNote' => "Taxes may apply depending on your location.",
            'cta' => "Start using Monica",
            'trial' => "30-day trial · No credit card required during the trial",
            'listTitle' => "Everything you need to remember the people who matter:",
            'items' => [
                "unlimited contacts;",
                "unlimited notes;",
                "unlimited reminders;",
                "unlimited activities and journal entries;",
                "relationship management;",
                "custom fields and sections;",
                "file attachments;",
                "data export;",
                "automatic updates;",
                "managed backups;",
                "email support;",
                "access from phone, tablet, and desktop;",
                "all future hosted features included.",
            ],
            'aside' => "No fee for having a large family.",
            'footnote' => "Cancel whenever you want. Your contacts will not be held hostage.",
        ],

        'selfHosted' => [
            'title' => "Prefer your own server?",
            'body' => "Monica is open source and can be installed on infrastructure you control.",
            'price' => "$0",
            'period' => "from Monica",
            'aside' => "Your hosting provider may still want money. We have not yet defeated capitalism.",
            'cta' => "View the self-hosting guide",
            'sourceCta' => "Browse the source on GitHub · :count stars",
            'listTitle' => "You get the application for free. You provide the server, updates, backups, monitoring, security patches, and the quiet confidence of knowing exactly where your data lives.",
            'items' => [
                "the full open-source application;",
                "unlimited contacts;",
                "unlimited users, as far as your infrastructure allows;",
                "full control over your data;",
                "data import and export;",
                "community documentation;",
                "community support;",
                "the ability to inspect and modify the source code.",
            ],
            'footnote' => "The self-hosted edition is not a stripped-down demo. It is Monica running on your infrastructure.",
            'footnote2' => "Managed backups, hosted email delivery, infrastructure monitoring, and direct support are part of the hosted service.",
        ],

        'compare' => [
            'title' => "Same Monica. Different person responsible for the server.",
            'rowHeader' => "What",
            'hosted' => "Hosted Monica",
            'selfHosted' => "Self-hosted Monica",
            'rows' => [
                ['label' => "Monica software", 'hosted' => "Included", 'selfHosted' => "Included"],
                ['label' => "Contacts", 'hosted' => "Unlimited", 'selfHosted' => "Unlimited"],
                ['label' => "Updates", 'hosted' => "Automatic", 'selfHosted' => "You install them"],
                ['label' => "Backups", 'hosted' => "Managed by Monica", 'selfHosted' => "You manage them"],
                ['label' => "Server maintenance", 'hosted' => "Managed by Monica", 'selfHosted' => "You manage it"],
                ['label' => "Data location", 'hosted' => "Monica infrastructure", 'selfHosted' => "Your infrastructure"],
                ['label' => "Technical knowledge required", 'hosted' => "None", 'selfHosted' => "Some"],
                ['label' => "Support", 'hosted' => "Email support", 'selfHosted' => "Community support"],
                ['label' => "Cost", 'hosted' => "Monthly or yearly subscription", 'selfHosted' => "Free software plus hosting costs"],
                ['label' => "Best for", 'hosted' => "People who want Monica to work", 'selfHosted' => "People who enjoy servers, or are required to"],
            ],
        ],

        'whyPay' => [
            'title' => "Why pay when Monica is open source?",
            'body' => "Open source means you can run, inspect, modify, and contribute to Monica. It does not make servers, backups, email delivery, security work, or support disappear.",
            'body2' => "A hosted subscription pays for the infrastructure that runs your account and helps fund the continued development of Monica for everyone—including people who self-host it.",
            'quote' => "You pay us to operate Monica, not to unlock your own data.",
            'aside' => "Servers are just computers that send invoices.",
        ],

        'noCharge' => [
            'title' => "Things we do not charge for",
            'items' => [
                ['title' => "More contacts", 'body' => "Your pricing does not increase because you know more people."],
                ['title' => "More reminders", 'body' => "Remembering anniversaries is already stressful enough."],
                ['title' => "Data exports", 'body' => "Taking your data with you is a right, not a premium feature."],
                ['title' => "Basic privacy", 'body' => "We do not sell a privacy upgrade. Privacy is the default."],
                ['title' => "Cancelling", 'body' => "There are no cancellation fees and no ceremonial breakup call."],
                ['title' => "Using the API", 'body' => "The API is part of the product, not a separate enterprise negotiation."],
            ],
        ],

        'leaving' => [
            'title' => "Your subscription can end. Your access to your data should not.",
            'body' => "You can export your data at any time.",
            'body2' => "When you cancel, your account remains accessible until the end of the paid billing period. After that, we keep the account available for a defined grace period before deletion.",
            'steps' => [
                ['label' => "Cancel", 'body' => "Your plan remains active until the end of the billing period."],
                ['label' => "Export", 'body' => "Download your data before or after cancellation, during the grace period."],
                ['label' => "Delete", 'body' => "Delete your account immediately from Settings when you choose."],
            ],
            'note' => "Grace period, export formats and deletion timelines are set out in the retention policy.",
        ],

        'trackRecord' => [
            'title' => "Open source before it was a pricing strategy",
            'body' => "Monica has been developed in public since 2017.",
            'body2' => "The project has earned :count GitHub stars, been selected as Repository of the Week multiple times, reached the top of Product Hunt, and received recognition from the open-source community.",
            'starsLabel' => "GitHub stars",
            'since' => "2017",
            'sinceLabel' => "Open source since",
            'launch' => "#1 Product of the Day",
            'launchLabel' => "Product Hunt",
            'featured' => "Repository of the Week",
            'featuredLabel' => "Featured multiple times",
            'cta' => "See Monica on GitHub",
        ],

        'faq' => [
            'title' => "Questions about paying for Monica",
            'items' => [
                ['q' => "How much does Monica cost?", 'a' => [
                    "Hosted Monica costs \$9 USD per month or \$90 USD per year.",
                    "You can also self-host Monica for free on infrastructure you manage.",
                ]],
                ['q' => "Is the price per user or per contact?", 'a' => "No. The hosted plan has one account price and includes unlimited contacts."],
                ['q' => "Is Monica really open source?", 'a' => [
                    "Yes. Monica's source code is publicly available, and the project has :count stars on GitHub.",
                    "Monica v3 will stay open source and self-hostable.",
                ], 'link' => ['label' => "Read about Monica v3", 'page' => 'v3']],
                ['q' => "Is self-hosting free?", 'a' => "Monica does not charge for the self-hosted software. You are responsible for the server and any infrastructure costs."],
                ['q' => "Is the hosted version different from the self-hosted version?", 'a' => [
                    "They use the same core application.",
                    "The hosted service includes infrastructure, managed updates, backups, monitoring, email delivery, and support. Some integrations that depend on Monica-operated infrastructure may be available only on the hosted service.",
                ]],
                ['q' => "Can I move from hosted to self-hosted?", 'a' => "Yes. You can export your Monica data and import it into a compatible self-hosted installation."],
                ['q' => "Can I cancel at any time?", 'a' => "Yes. Cancel from your account settings. Your subscription remains active until the end of the current billing period."],
                ['q' => "Are there cancellation fees?", 'a' => "No. Leaving should not require a ransom payment."],
                ['q' => "What happens if my payment fails?", 'a' => [
                    "We will notify you and retry the payment before restricting the account.",
                    "Your data is not deleted immediately because a card expired.",
                ]],
                ['q' => "How do refunds work?", 'a' => [
                    "If you were charged by mistake or forgot to cancel, contact us within 30 days. We will review the request like reasonable human beings.",
                    "Annual subscriptions can be refunded within the period defined in our refund policy. Refunds are not available for accounts that have seriously abused the service.",
                ]],
                ['q' => "Will the price increase?", 'a' => [
                    "Prices may change as Monica evolves, but we will notify existing subscribers in advance.",
                    "We do not change prices silently and hope nobody notices.",
                ]],
                ['q' => "Are taxes included?", 'a' => "Displayed prices exclude or include taxes depending on your location and applicable law. The final amount is shown before payment."],
                ['q' => "Is my payment information stored by Monica?", 'a' => "Payment information is processed by our payment provider. Monica does not store complete card numbers."],
                ['q' => "Is my data used for advertising?", 'a' => "No. Monica does not sell your personal data, display advertising, or use the people in your account to build advertising profiles."],
                ['q' => "Is my data used to train AI models?", 'a' => "No model is trained on the private contents of your Monica account."],
                ['q' => "Are backups included?", 'a' => [
                    "Yes, the hosted service includes managed backups.",
                    "Self-hosted installations require you to configure and test your own backups.",
                ]],
                ['q' => "Can I export everything?", 'a' => "You can export contacts, relationships, notes, reminders, activities, custom fields, and other supported account data. Attachments are included using the documented export format."],
                ['q' => "Can I delete my account?", 'a' => "Yes. Account deletion is available from Settings and does not require contacting support."],
                ['q' => "Do you offer discounts?", 'a' => "Not currently. We prefer one understandable price over a system where everyone negotiates separately."],
                ['q' => "Do you offer lifetime plans?", 'a' => "No. Servers continue having expenses after motivational launch campaigns end."],
                ['q' => "Do you offer an enterprise plan?", 'a' => [
                    "No enterprise sales call is required to use Monica.",
                    "For security, procurement, or volume-hosting questions, contact us.",
                ]],
                ['q' => "Can I pay in another currency?", 'a' => "Billing is currently in USD. Your bank may convert the amount and charge a currency-conversion fee."],
                ['q' => "Does subscribing support the open-source project?", 'a' => "Yes. Hosted subscriptions fund Monica's infrastructure, maintenance, support, and continued open-source development."],
            ],
        ],

        'finalCta' => [
            'title' => "Your memory has done enough unpaid work.",
            'body' => "Use the hosted version and let us manage the infrastructure, or install Monica on your own server.",
            'body2' => "Either way, your contacts remain people, not leads.",
            'primaryCta' => "Start using Monica",
            'secondaryCta' => "Self-host Monica",
            'note' => "One simple hosted plan · Free to self-host · Open source",
        ],
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
        'terms' => "Terms",
        'team' => "Team",
        'copyright' => "© :year Monica",
        'since' => "Open source since 2017",
        'ownership' => "Your data stays yours.",
        'languageLabel' => "Change language",
    ],

    'blog' => [
        'title' => "Blog",
        'lede' => "Notes on building Monica, keeping personal data private, and the small mechanics of staying in touch.",

        'allPosts' => "All posts",
        'keepReading' => "Keep reading",
        'onThisPage' => "On this page",
        'latest' => "Latest posts",

        'readingTime' => ":count min read",

        // Every post so far has the same author. Kept in lang/ rather than in
        // each post's front matter for that reason: it is a label on the site,
        // and it has to be translated like one.
        'authorRole' => "Founder",

        'copyLink' => "Copy link",
        'copyLinkDone' => "Copied",

        'showing' => "Showing :from to :to of :total posts",
        'pageOf' => "Page :page of :total",
        'newerPosts' => "Newer posts",
        'olderPosts' => "Older posts",

        'tryMonica' => [
            'title' => "Try Monica",
            'body' => "A private, open-source personal CRM for remembering the people who matter. Self-host it, or let us run it.",
            'bodyPost' => "Keep track of the people in your life without handing them to an advertising database.",
            'cta' => "Get started",
            'note' => "30-day trial · No credit card required",
        ],


        'openSource' => [
            'title' => "Open source",
            'body' => "Monica has been open source since the beginning. Read the code, run your own instance, send a patch.",
        ],
    ],

    /**
     * Copied verbatim from the terms published at monicahq.com/terms. This is
     * the authoritative wording; the other three locales are translations of
     * it. Change it here first.
     */
    'terms' => [
        'title' => "Our terms of use",
        'updated' => "Last update: :date",
        'updatedOn' => "April 12, 2018",

        'sections' => [
            [
                'title' => "Scope of service",
                'blocks' => [
                    ['text' => "Monica supports the following browsers:"],
                    ['items' => [
                        "Internet Explorer (11+)",
                        "Firefox (50+)",
                        "Chrome (latest)",
                        "Safari (latest)",
                    ]],
                    ['text' => "I do not guarantee that the site will work with other browsers, but it's very likely that it will just work."],
                ],
            ],
            [
                'title' => "Rights",
                'blocks' => [
                    ['text' => "You don't have to provide your real name when you register to an account. You do however need a valid email address if you want to upgrade your account to the paid version, or receive reminders by email."],
                    ['text' => "You have the right to close your account at any time."],
                    ['text' => "You have the right to export your data at any time, in the SQL format."],
                    ['text' => "Your data will not be intentionally shown to other users or shared with third parties."],
                    ['text' => "Your personal data will not be shared with anyone without your consent."],
                    ['text' => "Your data is backed up every hour."],
                    ['text' => "If the site ceases operation, you will receive an opportunity to export all your data before the site dies."],
                    ['text' => "Any new features that affect privacy will be strictly opt-in."],
                ],
            ],
            [
                'title' => "Responsibilities",
                'blocks' => [
                    ['text' => "You will not use the site to store illegal information or data under the Canadian law (or any law)."],
                    ['text' => "You have to be at least 18+ to create an account and use the site."],
                    ['text' => "You must not abuse the site by knowingly posting malicious code that could harm you or the other users."],
                    ['text' => "You must only use the site to do things that are widely accepted as morally good."],
                    ['text' => "You may not make automated requests to the site."],
                    ['text' => "You may not abuse the invitation system."],
                    ['text' => "You are responsible for keeping your account secure."],
                    ['text' => "I reserve the right to close accounts that abuse the system (thousands of contacts with hundred of thousands of reminders for instance) or use it in an unreasonable manner."],
                ],
            ],
            [
                'title' => "Other important legal stuff",
                'blocks' => [
                    ['text' => "Though I want to provide a great service, there are certain things about the service I cannot promise. For example, the services and software are provided “as-is”, at your own risk, without express or implied warranty or condition of any kind. I also disclaim any warranties of merchantability, fitness for a particular purpose or non-infringement. Monica will have no responsibility for any harm to your computer system, loss or corruption of data, or other harm that results from your access to or use of the Services or Software."],
                    ['text' => "These Terms can change at any time, but I'll never be a dick about it. Running this site is a dream come true to me, and I hope I'll be able to run it as long as I can."],
                ],
            ],
        ],
    ],

    /**
     * Copied verbatim from the policy published at monicahq.com/privacy. This
     * is the authoritative wording; the other three locales are translations of
     * it. Change it here first.
     *
     * One untitled section: the published policy is a flat run of paragraphs
     * with no headings, and inventing some would be editing a legal document.
     */
    'privacy' => [
        'title' => "Our privacy policy",
        'updated' => "Last update: :date",
        'updatedOn' => "Aug 06, 2026",

        'sections' => [
            [
                'blocks' => [
                    ['text' => "Monica is an open-source project. The hosted version has a premium plan that lets us collect money so we can pay for the servers and additional services, but the main goal is not to make money (otherwise we wouldn't have open-sourced it)."],
                    ['text' => "Monica comes in two flavors: you can either use our hosted version, or download it and run it yourself. In the latter case, we do not track anything at all. We don't know that you've even downloaded the product. Do whatever you want with it (but respect your local laws)."],
                    ['text' => "When you create your account on our hosted version, you are giving the site information about yourself that we collect. This includes your name, your email address and your password, that is encrypted before being stored. We do not store any other personal information."],
                    ['text' => "When you login to the service, we are using cookies to remember your login credentials. This is the only purpose of the cookies."],
                    ['text' => "Monica runs on Fortrabbit and we are the only ones, apart from Fortrabbit's employees, who have access to those servers."],
                    ['text' => "We do hourly backups of the database."],
                    ['text' => "Your password is encrypted with bcrypt, a password hashing algorithm that is highly secure. You can also activate two factor authentication on your account if you need an extra layer of security. Apart from those encryption mechanisms, your data is not encrypted in the database. If someone gets access to the database, they will be able to read your data. We do our best to make sure that this never happens, but it can happen."],
                    ['text' => "If a data breach happens, we will contact the users who are affected to warn them about the breach."],
                    ['text' => "Transactional emails are served through Postmark."],
                    ['text' => "We use an open-source tool called Sentry to track errors that happen in production. Their service records the errors, but they don't have access to any information apart from the account ID, which lets me debug what's going on."],
                    ['text' => "The site does not currently and will never show ads. It also does not, and don't intend to, sell data to a third party, with or without your consent. We are just against this. Fuck ads."],
                    ['text' => "We do not use any tracking third parties, like Google Analytics or Intercom, that track user behaviours or data, neither on the marketing site or the hosted version. We are deeply against their principles as they would use those data to profile you, which we are totally against."],
                    ['text' => "All the data you put on Monica belongs to you. We do not have any rights on it. Please don't put illegal stuff on it, otherwise we'd be in trouble."],
                    ['text' => "All the information about the contacts you put on Monica are private to you. We do not cross link information between accounts or use one information in an account to populate another account (unlike Facebook for instance)."],
                    ['text' => "We use Stripe to collect payments made to access the paid version. We do not store credit card information or anything concerning the transactions themselves on our servers. However, as per the open-source library we use to process the payments (Laravel Cashier), we store the last 4 digits of the credit card, the brand name (VISA or MasterCard). As a user, you are identified on Stripe by a random number that they generate and use."],
                    ['text' => "Regarding the payments, you can downgrade to the free plan whenever you like. When you do, Stripe is automatically updated and we have no way to charge you again, even if we would like to. The less we deal with payment information, the happier we are."],
                    ['text' => "You can export your data at any time. You can also use the API to export all your data if you know how to do it. You can also request that we process this ourselves and send it to you. Your data will be exported in the SQL format."],
                    ['text' => "When you close your account, we immediately destroy all your personal information from the production database, but your information is kept in the backups that we keep for 30 days. After 30 days, your information will be completely destroyed. While you have control over this, we can delete an account for you if you ask us."],
                    ['text' => "In certain situations, we may be required to disclose personal data in response to lawful requests by public authorities, including to meet national security or law enforcement requirements. We just hope that this never happens."],
                    ['text' => "If you violate the terms of use we will terminate your account and notify you about it. However if you follow the \"don't be a dick\" policy, nothing should ever happen to you and we'll all be happy."],
                    ['text' => "Monica uses only open-source projects that are mainly hosted on Github."],
                    ['text' => "We will update this privacy policy as soon as we introduce new information practices. If we do, we will send an email to the email address specified in your account. We will never be a dick about it and will never, ever, introduce something in what we do that will affect your right to the absolute privacy."],
                ],
            ],
        ],
    ],


    /**
     * The mission text is the copy published at monicahq.com/team, word for
     * word, including its grammar. This is the canonical wording; the other
     * three locales are translations of it.
     *
     * The two stat values that were numbers on the old page are words here.
     * Nothing in this build can count contributors across a repository whose
     * history was reset, or contacts on a server it never talks to, and a
     * figure that is wrong a week after it ships is worse than an honest
     * magnitude.
     */
    'team' => [
        'eyebrow' => "Team",
        'title' => "Monica is a team of 2. With hundreds of contributors.",

        'stats' => [
            ['value' => "2016", 'label' => "First line of code"],
            ['value' => "Montreal", 'label' => "Headquarters"],
            ['value' => "2", 'label' => "Official members"],
            ['value' => "Hundreds", 'label' => "Open source contributors"],
            ['value' => "Millions", 'label' => "Contacts managed"],
        ],

        'missionLabel' => "Our mission",
        'mission' => [
            "Our mission is to use technology in a way that does not harm human relationships, like big social networks can do.",
            "In an age where people have thousands of virtual friends, we want to provide a tool that helps people strengthen the relationships with only a few of these friends. Make each friendship matter a lot.",
            "Monica is born out of a personal need to keep track of what friends living in other countries were doing with their lives. After having built the first version of the tool, I decided to open sourced it, promote it on Hacker News and the rest is history.",
            "Monica is now an healthy open source project. We've been fortunate enough to have a great community, with dozens of contributors and hundreds of code contributions. It also generates a bit of money - every dollar we make on this project is reinvested in the project, to pay the bills and help further development.",
            "Thanks for checking out the project.",
        ],
        'signature' => "Regis Freyd and Alexis Saettler",
    ],

    /**
     * The three features pages, which share one tab strip and one closing row.
     *
     * The copy is the old site's, sentence for sentence, because it is the
     * owner's marketing copy and this build is a redesign rather than a
     * rewrite. The annotations were red labels pinned around the screenshot
     * there; here they are an ordinary list beside it, so they survive a phone,
     * a screen reader and a translation that runs longer than English.
     *
     * `pillars` and `api` are shared by all three tabs, which is why they sit
     * outside the per-tab blocks.
     */
    'features' => [
        'tabsLabel' => "Features",
        'tabs' => [
            'features' => "Contact management",
            'featuresDashboard' => "Powerful dashboard",
            'featuresJournal' => "Journal",
        ],

        'calloutsLabel' => "On this screen",

        'contacts' => [
            'title' => "How people keep track of what's important.",
            'lede' => "Write down what you know about the people you care about. And never forget again a single thing about them.",
            'imageAlt' => "A Monica contact record: relationships, contact details, notes, calls, reminders and gifts.",
            'callouts' => [
                "Have a quick glance of important information of your contact",
                "Indicate the names of significant others, children and even pets.",
                "Add all the different ways of contacting this person: phone, email, Whatsapp nickname, and much more.",
                "Add notes, private to you, about this person.",
                "Indicate each time you call people you don't hear about often, so you can be reminded to call them in the future.",
                "Add reminders about important dates or events. Some reminders are automatically filled for you (birthdays, for instance).",
                "Manage gifts offered or that you want to offer. Indicate if you owe or if you are owed money.",
            ],
        ],

        'dashboard' => [
            'title' => "Quickly see what's important and what's coming next",
            'lede' => "So you can focus on what really matters to you.",
            'imageAlt' => "The Monica dashboard: recently consulted contacts, upcoming reminders, favourite notes and logged calls.",
            'callouts' => [
                "See who you’ve last consulted",
                "List of next planned events or reminders about your contacts",
                "Consult your favorite notes about your contacts",
                "Keep track of the calls you’ve made with people you care about",
            ],
        ],

        'journal' => [
            'title' => "Document your life. And see how you evolve.",
            'lede' => "Write journal entries. Quickly indicate how your day went. Automatic activity logs.",
            'imageAlt' => "The Monica journal: how the day went, the activities logged with contacts, and written entries.",
            'callouts' => [
                "Indicate how your day went.",
                "The journal lists all the activities with your contacts automatically.",
                "The journal also lets you write journal entries. Think of it as your private online journal.",
                "In a future version, we'll display nice statistics about your days and activities.",
            ],
        ],

        'pillars' => [
            [
                'title' => "All in one place",
                'body' => "Manage, organize and track all the interactions with your contacts in a central place.",
            ],
            [
                'title' => "Web based",
                'body' => "Easily access Monica, either hosted on your or our servers.",
            ],
            [
                'title' => "Modern interface",
                'body' => "Monica is beautiful and very simple to use.",
            ],
        ],

        'api' => [
            'title' => "Loved by users. Adored by developers.",
            'body' => "Our users are happy with how fast and simple the product is. Developers love the API that allow them to automate Monica as they see fit.",
            'body2' => "Easily import or export your contacts and their data with Monica's powerful REST API, or use the API to automate many areas of the application.",
            'imageAlt' => "Monica's API routes, open in a code editor.",
        ],
    ],

    'notFound' => [
        'title' => "Page not found.",
        'body' => "This address does not lead anywhere. It may have moved, or it may never have existed.",
    ],
];
