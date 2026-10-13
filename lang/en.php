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

        /**
         * The page names in a breadcrumb trail: one per route key, plus the
         * root and the label a page of the blog index gets.
         *
         * Kept apart from `nav` on purpose. A nav label is written to be
         * scanned in a bar four items wide; a breadcrumb is read out in a
         * search result and can afford to say what the page is.
         *
         * `features` is "Features" both as its own page and as the parent of
         * the two other tabs, so one URL never carries two names.
         */
        'breadcrumb' => [
            'home' => "Home",
            'v3' => "Monica v3",
            'pricing' => "Pricing",
            'features' => "Features",
            'featuresDashboard' => "Powerful dashboard",
            'featuresJournal' => "Journal",
            'blog' => "Blog",
            'terms' => "Terms of use",
            'team' => "Team",
            'privacy' => "Privacy policy",
            'personalCrm' => "Personal CRM guide",
            'templates' => "Contact templates",
            'details' => "Contact details",
            'reminders' => "Reminders",
            'timeline' => "Timeline",
            'relationships' => "Relationships",
            'page' => "Page :number",
        ],

        /**
         * What each of the three offers is called in the SoftwareApplication
         * structured data. The prices themselves are numbers in config.php,
         * because a crawler wants 9.00 and USD, not "$9".
         */
        'software' => [
            'monthly' => "Hosted Monica, billed monthly",
            'yearly' => "Hosted Monica, billed yearly",
            'selfHosted' => "Self-hosted Monica",
            'lifetime' => "Hosted Monica, lifetime",
        ],

        'home' => [
            'title' => "Monica — the open-source personal CRM",
            'description' => "Monica helps you remember the people you care about: what is happening in their life, important dates, previous conversations, and when to get back in touch. Private, open source, self-hostable.",
        ],

        'pricing' => [
            'title' => "Monica pricing: self-host for free, or let Monica host it",
            'description' => "Self-host Monica for free, or let Monica host it for $9 USD a month, $90 a year or $150 once. Every plan has every feature, with unlimited contacts and no per-contact pricing.",
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

        'templates' => [
            'title' => "Your contacts, your way: contact templates in Monica",
            'description' => "Build contact templates with your own fields, sections and tabs. Different templates for friends, family and work, versions you publish when ready, and sections you can share.",
        ],

        'details' => [
            'title' => "Remember the details that matter: contact pages in Monica",
            'description' => "Keep the details people share with you together: what they told you last time, the little things, the people around them, and the moments you shared.",
        ],

        'reminders' => [
            'title' => "Remember to reach out: reminders in Monica",
            'description' => "Set a reminder for a birthday, a big day or a friend you mean to call. Once or on a rhythm, in their time zone, by email or in Monica, and a record of what you remembered.",
        ],

        'timeline' => [
            'title' => "Keep the moments worth remembering: the timeline in Monica",
            'description' => "Record what happened, who was there and the details you want to keep. Life events on everyone’s timeline at once, your own event types and fields, and a look back year by year.",
        ],

        'relationships' => [
            'title' => "Understand how people are connected: relationships in Monica",
            'description' => "Keep track of the people around someone, with relationships that read correctly from both sides. Family trees, people you have not met yet, past relationships and your own relationship types.",
        ],

        'personalCrm' => [
            'title' => "What is a personal CRM? A practical guide — Monica",
            'description' => "What a personal CRM is, how it differs from an address book and sales CRM, what to store, the privacy tradeoffs, and how to choose the right approach.",
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
        'personalCrm' => "What is a personal CRM",
        'v3' => "Monica v3",
        'features' => "Features",
        'pricing' => "Pricing",
        'blog' => "Blog",
        'docs' => "Documentation",
        'signIn' => "Login",
        'getStarted' => "Signup",
        'stars' => ":count stars",

        // The features menu: three columns of what Monica does, and a card
        // pointing at templates, the thing a new reader most often misses.
        'menu' => [
            'groups' => [
                [
                    'title' => "Remember",
                    'items' => [
                        ['icon' => 'note', 'title' => "The details", 'body' => "Everything about someone, in one place."],
                        ['icon' => 'reminder', 'title' => "Reminders", 'body' => "Birthdays, follow-ups, repeats."],
                        ['icon' => 'timeline', 'title' => "Timeline", 'body' => "Log it once. Everyone there gets it."],
                    ],
                ],
                [
                    'title' => "Organise",
                    'items' => [
                        ['icon' => 'relationship', 'title' => "Relationships", 'body' => "Family trees, and who knows whom."],
                        ['icon' => 'vault', 'title' => "Vaults", 'body' => "Personal and work, kept apart."],
                        ['icon' => 'link', 'title' => "Sharing", 'body' => "Share a few sections. Revoke any time."],
                    ],
                ],
                [
                    'title' => "Connect and protect",
                    'items' => [
                        ['icon' => 'calendar', 'title' => "Sync and calendars", 'body' => "Address books, calendars, vCards."],
                        ['icon' => 'key', 'title' => "Assistants and API", 'body' => "Your agent can look people up."],
                        ['icon' => 'lock', 'title' => "Privacy", 'body' => "Passkeys, 2FA, private fields."],
                    ],
                ],
            ],
            'start' => [
                'label' => "Start here",
                'title' => "Your contacts, your way",
                'body' => "Design your own templates. Tabs, sections, fields, choices.",
                'rows' => [
                    ['label' => "Friend", 'detail' => "Gifts, pets"],
                    ['label' => "Family", 'detail' => "Family tree"],
                    ['label' => "Work", 'detail' => "Company, role"],
                ],
                'cta' => "See how templates work",
            ],
        ],
    ],

    /** The /v3 teaser page. */
    'v3page' => [
        'badge' => "Monica v3 · In development",
        'timing' => "Coming before the end of 2026",
        'title' => "Monica is being rebuilt for the next ten years.",
        'lede' => "Monica has helped thousands of people remember what matters about the people in their lives. Now it is being rebuilt from the ground up: more flexible, more private, easier to extend, and better on every screen.",
        'lede2' => "It will remain open source. And everything that made Monica worth using in the first place is staying.",

        'progress' => [
            'body' => "There is nothing to sign up for. Monica v3 is being built in the open, so come back in a few weeks to see what has changed.",
            'note' => "No launch list, no newsletter, no tracking pixel.",
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
                    'icon' => 'arrow-right',
                    'title' => "Existing users are not left behind",
                    'body' => "The goal is to provide a clear migration path for existing Monica accounts, including contacts, notes, reminders, and other essential information.",
                ],
            ],
        ],

        'follow' => [
            'title' => "Follow the rebuild from the beginning.",
            'body' => "Monica v3 is still in development, and many important decisions are being made in the open. Follow the repository to see the work as it happens.",
            'note' => "Open source · Self-hostable · Built in public",
            'cta' => "Follow Monica on GitHub",
        ],
    ],

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
            'pill' => "Rachel, Ross, Chandler, Joey, and the duck",
            'title' => "Remember the people you care about.",
            'subtitle' => "We are an open source personal CRM.",
            'lede' => "Private by design. Open source. Self-hostable. No ads, no data resale, no awkward “engagement” notifications.",
            'start' => "Start using Monica",
            'github' => "View on GitHub",
            'sales' => "Contact sales",
            'salesJoke' => "Just kidding.",
            'salesTruth' => "We have no sales team.",
        ],

        'product' => [
            // Read out in place of the picture, which is drawn in markup but is
            // a picture of the product rather than a working copy of it.
            'label' => "Monica, open on Phoebe Buffay’s page: two important dates, her relationships, the latest note about her and three gift ideas.",
            'vault' => "Family",
            'nav' => ["Dashboard", "People", "Reminders", "Journal", "Gift ideas", "Settings"],
            'vaultsLabel' => "Vaults",
            'vaults' => ["Family", "Friends", "Central Perk"],
            'search' => "Search people",
            'add' => "Add a person",
            'meta' => "Ursula’s twin sister · New York · known for 10 years",
            'tabs' => ["Overview", "Timeline", "Notes", "Gift ideas"],
            'datesTitle' => "Important dates",
            'dates' => [
                ['title' => "Birthday", 'date' => "16 February 1966", 'when' => "in four months"],
                ['title' => "Wedding anniversary", 'date' => "12 February 2004", 'when' => "in four months"],
            ],
            'relationshipsTitle' => "Relationships",
            'relationships' => [
                ["Phoebe is ", "Ursula’s", " twin sister."],
                ["Phoebe is ", "Mike’s", " wife."],
            ],
            'noteTitle' => "Latest note",
            'note' => "Wrote a new song about a cat. Very proud of it. Do not mention the smell.",
            'noteWhen' => "Six days ago",
            'giftsTitle' => "Gift ideas",
            'gifts' => ["Guitar strings", "Massage oil", "Unscented cat litter"],
        ],

        'awards' => [
            'label' => "Strangers on the internet approve",
            'github' => "GitHub Trending: #1 Repository of the Day",
            'hn' => "Hacker News: #65 Most Voted Links of All Time",
            'ph' => "Product Hunt: #4 Product of the Day",
        ],

        'agents' => [
            'eyebrow' => "MCP server and REST API",
            'title' => "Use Monica as your backend for your agents.",
            'body' => "While we do not have any AI built-in, and never will, we let your own agent access your data — if you want it.",
            'mcp' => "Explore MCP doc",
            'api' => "Explore API",
            'prompt' => "What should I get Rachel for her birthday?",
            'answer' => "Rachel’s birthday is in 23 days.",
            'saved' => "You saved two ideas in July:",
            'ideas' => ["The scarf she pointed at in Bloomingdale’s", "Anything but a list of pros and cons"],
            'ask' => "Log that I had coffee with Joey at Central Perk today.",
            'used' => "Used Monica",
            'reply' => "Done. Added “Coffee” to Joey’s timeline for 11 October.",
        ],

        'features' => [
            'title' => "Some of the features we offer",
            'lede' => "Everything necessary to record what’s going on in your life",
            'reminders' => [
                'title' => "Birthdays, before they’re belated.",
                'body' => "Reminders for dates, calls and promises. By email, on time.",
                'rows' => [
                    ['name' => "Rachel Green", 'what' => "birthday", 'when' => "in 23 days"],
                    ['name' => "Chandler Bing", 'what' => "call back about Thanksgiving", 'when' => "tomorrow"],
                    ['name' => "Joey Tribbiani", 'what' => "pay back the rent", 'when' => "six years overdue"],
                ],
            ],
            'relationships' => [
                'title' => "Who’s who, and whose.",
                'body' => "Family trees, exes, godparents. Written as sentences.",
                'sentences' => [
                    ["Monica is ", "Ross’s", " sister."],
                    ["Ross is ", "Rachel’s", " lobster."],
                    ["Joey is ", "everyone’s", " roommate."],
                ],
            ],
            'gifts' => [
                'title' => "Gift ideas, saved in July.",
                'body' => "So December is not a panic.",
                'ideas' => ["A foosball table", "That book about dinosaurs"],
                'crossed' => "A list of pros and cons",
            ],
            'notes' => [
                'title' => "Notes you can find again.",
                'body' => "Search every note, on every person.",
                'query' => "allergic",
                'who' => "Ross:",
                'match' => "allergic to kiwi. Monica keeps forgetting.",
            ],
            'details' => [
                'title' => "Remembers the chick and the duck.",
                'body' => "Pets, kids, jobs, food preferences. The details that matter.",
                'fields' => [
                    ['label' => "Pets", 'value' => "A chick and a duck"],
                    ['label' => "Coffee", 'value' => "Central Perk, every day"],
                ],
            ],
            'vaults' => [
                'title' => "A vault for every circle.",
                'body' => "Family, friends, work. Kept apart, shared with whoever you invite.",
                'vaults' => [
                    ['name' => "Family", 'count' => "24 people"],
                    ['name' => "Friends", 'count' => "61 people"],
                    ['name' => "Central Perk", 'count' => "6 people"],
                ],
            ],
        ],

        'privacy' => [
            'eyebrow' => "Privacy",
            'title' => "Unlike all the other players in this field, we care about your privacy.",
            'aside' => "A lot.",
            'source' => [
                'title' => "Open source",
                'body' => "Audit our codebase to make sure we don’t do stupid things.",
                'comment' => "// What we share with third parties",
            ],
            'trackers' => [
                'title' => "No ads, no trackers bullshit",
                'body' => "Nothing to sell. Nobody to sell it to.",
                'label' => "Third-party requests",
                'rows' => ["Advertising", "Analytics", "Data brokers", "Fingerprinting"],
            ],
            'selfHost' => [
                'title' => "We recommend you self-host",
                'body' => "One Docker command. Your server, your rules, your privacy.",
                'pulling' => "Pulling image… done",
                'running' => "Running on your server",
            ],
        ],

        // The prices themselves are not here: the Cloud card reads them from
        // `pricing.prices`, so the homepage and the pricing page cannot quote
        // two different numbers.
        'pricing' => [
            'badge' => "No ads",
            'badgeText' => "Your data is portable on every plan.",
            'title' => "Pay how you like. Or don’t.",
            'lede' => "Host it yourself for free, or let Monica run it for you.",
            'selfHost' => [
                'title' => "Self-host",
                'price' => "Free",
                'per' => "forever",
                'items' => ["Every feature, no limits", "One-command Docker deploy", "Full control of your data", "You are the IT department"],
                'cta' => "Read the docs",
            ],
            'cloud' => [
                'title' => "Cloud",
                'billingLabel' => "Billing period",
                'monthly' => "Monthly",
                'yearly' => "Yearly",
                'perMonth' => "per month",
                'perYear' => "per year",
                'yearlyNote' => "Two months free",
                'lifetime' => "Lifetime",
                'once' => "one time",
                'lifetimeNote' => "No recurring payments",
                'items' => ["Managed hosting", "Automatic updates and backups", "Unlimited people and vaults", "Cancel any time"],
                'cta' => "Start using Monica",
            ],
        ],

        'faq' => [
            'title' => "Questions, answered.",
            'items' => [
                ['q' => "Is this a sales CRM?", 'a' => "No. Nobody here has a pipeline. Monica is for family, friends and the people you mean to keep in touch with."],
                ['q' => "Is self-hosting really free?", 'a' => "Yes. Every feature, no limits, licensed AGPL-3.0. You bring the server."],
                ['q' => "Who can see my data?", 'a' => "You, and whoever you invite to a vault. No ads, no trackers, no data resale. Self-host and it never leaves your server."],
                ['q' => "Can I move between cloud and self-hosted?", 'a' => "Yes, both ways. Export everything, import it on the other side."],
                ['q' => "Does it work with my AI agent?", 'a' => "If it speaks MCP, yes. There is also a full REST API for everything else."],
            ],
        ],
    ],

    'pricing' => [
        // The four prices, as a reader sees them. Everything below quotes them
        // through :free, :monthly, :yearly and :lifetime, and the homepage
        // reads them from here, so a price change is one edit per language
        // (plus `plans` in config.php, for the structured data).
        'prices' => [
            'free' => "$0",
            'monthly' => "$9",
            'yearly' => "$90",
            'lifetime' => "$150",
        ],

        'hero' => [
            'badge' => "No per-contact fees",
            'badgeText' => "Pay monthly, yearly, once, or never.",
            'title' => "Pricing you won’t need a reminder for.",
            'lede' => "Host it yourself for nothing. Let Monica host it for :monthly a month or :yearly a year. Or pay :lifetime once and never think about it again. The price is the same whether you know ten people or ten thousand.",
        ],

        'selfHost' => [
            'eyebrow' => "Option one · free",
            'title' => "Self-host it. It’s free, and it’s the whole thing.",
            'body' => "Monica is open source. One Docker command and it runs on your own machine: your server, your rules, every feature. No trial, no locked tier, no licence key.",
            'items' => [
                "Free forever, AGPL licensed",
                "Every feature hosted Monica has",
                "Your data never leaves your hardware",
                "Updates when you decide to pull them",
            ],
            'cta' => "Read the self-hosting guide",
            'terminal' => [
                'comment' => "# Pull it, run it, done.",
                'pulling' => "Pulling monica:latest…",
                'starting' => "Starting the database…",
                'running' => "Running at http://localhost:8080",
                'outro' => "# Now go and add your mother.",
            ],
        ],

        'plans' => [
            'title' => "Three ways in. All fair.",
            'lede' => "Run it yourself, pay as you go, or pay once. Every plan has every feature. You are only choosing who looks after the server.",
            'footnote' => "Prices in USD. Taxes added at checkout where required. No per-contact, per-reminder or per-vault charges on any plan.",

            'selfHost' => [
                'title' => "Self-host",
                'body' => "For people who already have a server, or want an excuse to.",
                'per' => "forever",
                'items' => [
                    "Full source code, AGPL",
                    "Unlimited contacts and vaults",
                    "You run backups and updates",
                    "Community support",
                ],
                'cta' => "Self-hosting guide",
            ],

            'hosted' => [
                'title' => "Hosted",
                'badge' => "Most chosen",
                'body' => "For people who want Monica to just be there.",
                'billingLabel' => "Billing period",
                'monthly' => "Monthly",
                'yearly' => "Yearly",
                'perMonth' => "/ month",
                'perYear' => "/ year",
                'yearlyNote' => "2 months free",
                'items' => [
                    "Unlimited contacts, reminders, vaults",
                    "Automatic updates and daily backups",
                    "Reminders delivered by email",
                    "Email support from real people",
                    "Cancel any time, export everything",
                ],
                'cta' => "Start with Monica",
            ],

            'lifetime' => [
                'title' => "Lifetime",
                'badge' => "Pay once",
                'body' => "For people who would rather not think about it again.",
                'per' => "once",
                'items' => [
                    "Everything in Hosted",
                    "One payment, no renewals",
                    "Every future version included",
                    "Move to self-hosted whenever you like",
                ],
                'cta' => "Pay once, :lifetime",
            ],
        ],

        'calculator' => [
            'eyebrow' => "The relationship-based pricing calculator",
            'title' => "How much should your social life cost?",
            'lede' => "Tell it about the people in your life. It weighs eleven deeply personal factors and produces a fair, tailored, entirely scientific price.",

            'sliders' => [
                'people' => ['label' => "People you would like to remember", 'help' => "Dunbar says 150. Dunbar has not met your extended family."],
                'birthdays' => ['label' => "Birthdays you forgot last year", 'help' => "Including the one you remembered at 11:48pm."],
                'coffee' => ['label' => "Times you said “we should grab coffee”", 'help' => "And then did not grab coffee."],
                'cousins' => ['label' => "Cousins’ children you cannot name", 'help' => "You know there is a Leo. Possibly two."],
                'reminders' => ['label' => "Reminders you would set", 'help' => "Monica sends every one of them."],
                'mum' => ['label' => "Calls to your mother, per month", 'help' => "She has noticed either way."],
            ],

            'toggles' => [
                'pretend' => ['label' => "You have pretended to remember a name", 'help' => "“Hey… you.”"],
                'notes' => ['label' => "You keep notes on people in your phone", 'help' => "Monica is that idea, with dates attached."],
                'dentist' => ['label' => "You know your dentist’s first name", 'help' => "Impressive, honestly."],
                'belated' => ['label' => "You have sent a “happy belated”", 'help' => "Everyone has. Some more than others."],
            ],

            'social' => [
                'label' => "Your social life",
                'help' => "Applied as a multiplier, because that is how multipliers work.",
                'options' => [
                    'hermit' => "Hermit",
                    'reasonable' => "Reasonable",
                    'mayor' => "Mayor of the town",
                ],
            ],

            'quote' => "Your personalised quote",
            'planLabel' => "Plan",
            'plans' => [
                'monthly' => "Monthly",
                'yearly' => "Yearly",
                'lifetime' => "Lifetime",
            ],

            // :count is a slider's value, :rate a made-up price per unit.
            'lines' => [
                'base' => [
                    'monthly' => "Monica, monthly",
                    'yearly' => "Monica, yearly",
                    'lifetime' => "Monica, lifetime",
                ],
                'people' => ":count people × :rate",
                'reminders' => ":count reminders",
                'birthdays' => ":count forgotten birthdays × :rate guilt",
                'coffee' => ":count theoretical coffees × :rate",
                'cousins' => ":count unnamed cousins’ kids × :rate",
                'mum' => ":count calls to mum × :rate credit",
                'pretend' => "Name-pretending surcharge",
                'notes' => "Migration from your notes app",
                'dentist' => "Dentist familiarity bonus",
                'belated' => "“Happy belated” recovery fee",
                'multiplier' => "Social life multiplier ×:rate",
                'included' => "included",
                'free' => "free",
            ],

            'subtotal' => "Subtotal",
            'refund' => "Relationship-based pricing",
            'refundHelp' => "Not a thing at Monica. Removed in full.",
            'total' => "Your total",
            'per' => [
                'monthly' => "/ month",
                'yearly' => "/ year",
                'lifetime' => "once",
            ],

            'verdicts' => [
                'birthdays' => ":count birthdays next year, all covered.",
                'coffee' => "Go and have one of those coffees.",
                'mum' => "Call your mother. The quote will wait.",
                'default' => "Same as everyone else. That is the point.",
            ],

            'cta' => "Lock in this suspicious price",
            'reset' => "Forget everything and start again",
            'footnote' => "Every line above is made up except the total. Monica costs the same whether you know three people or three thousand, remember every birthday or none of them.",
        ],

        'promises' => [
            'people' => [
                'title' => "Never priced per person",
                'body' => "Meeting someone new should not cost you anything. Contacts, reminders and vaults are unlimited on every plan.",
            ],
            'export' => [
                'title' => "Leave with everything",
                'body' => "Export your whole account whenever you like, and take it to a self-hosted Monica or anywhere else. Cancelling is one button.",
            ],
            'openSource' => [
                'title' => "Open source since 2017",
                'body' => "Paying for hosting pays for the servers and the people who keep building Monica, including for everyone who hosts it themselves.",
            ],
        ],

        'ninety' => [
            'eyebrow' => ":yearly in perspective",
            'title' => "What else costs ninety dollars?",
            'lede' => "A year of hosted Monica, set beside the things people usually spend it on after forgetting something.",
            'about' => "~ :yearly",
            'items' => [
                'bouquets' => ['title' => "Three apology bouquets", 'body' => "One per forgotten birthday. The petrol station kind, bought on the way."],
                'gift' => ['title' => "One express-shipped belated gift", 'body' => "Most of the cost is the shipping. All of it is the guilt."],
                'coffees' => ['title' => "Eighteen coffees", 'body' => "The ones you said you would grab. Monica reminds you to actually grab one."],
                'streaming' => ['title' => "Six months of a streaming service", 'body' => "The one you forgot you were subscribed to."],
                'cards' => ['title' => "A card for every cousin", 'body' => "Plus the stamps. Plus finding out where they live now."],
                'dinner' => ['title' => "Dinner for two, no dessert", 'body' => "Where you finally ask how they have been, and listen."],
                'addressBook' => ['title' => "A replacement address book", 'body' => "Leather, nicely made, and lost again by spring."],
                'monica' => ['title' => "A year of remembering everyone", 'body' => "Birthdays, kids’ names, how the job interview went. That one is Monica."],
            ],
            'footnote' => "Prices are approximate and drawn from experience. A year of Monica is exactly :yearly.",
        ],

        'faq' => [
            'eyebrow' => "Questions about paying",
            'title' => "Frequently asked, rarely forgotten.",
            'intro' => "Every answer starts with the short version. Open the long one if the short one made you suspicious.",
            'search' => "Search questions",
            'categoriesLabel' => "Filter questions by topic",
            'categories' => [
                'all' => "All",
                'money' => "Money",
                'plans' => "Plans",
                'selfHosting' => "Self-hosting",
                'data' => "Your data",
                'leaving' => "Leaving",
            ],
            'progress' => [
                'none' => "0 of :total read. Start anywhere.",
                'some' => ":count of :total read.",
                'many' => ":count of :total read. You now know more about this than most people who sign up.",
                'all' => "All :total read. You could answer the support inbox.",
            ],
            'random' => "Ask me something random",
            'emptyTitle' => "No question matches that",
            'emptyBody' => "Try a shorter word, or write to support. Real people read it.",
            'items' => [
                ['cat' => 'money', 'q' => "How much does Monica cost?", 'short' => "Nothing, :monthly, :yearly or :lifetime.", 'a' => "Self-hosting is free. Hosted Monica is :monthly a month or :yearly a year. Lifetime is :lifetime, paid once. Every option includes every feature."],
                ['cat' => 'money', 'q' => "Is the price per user or per contact?", 'short' => "Neither.", 'a' => "One account pays one price. Add as many contacts, reminders, vaults and notes as you like. Meeting new people should never cost you money."],
                ['cat' => 'money', 'q' => "Are taxes included?", 'short' => "Added at checkout where required.", 'a' => "If your country requires sales tax or VAT, it is shown before you pay, so the number you agree to is the number you are charged."],
                ['cat' => 'money', 'q' => "Can I pay in another currency?", 'short' => "Prices are in US dollars.", 'a' => "Your card provider converts at checkout. The amount in dollars stays the same from year to year."],
                ['cat' => 'money', 'q' => "Will the price increase?", 'short' => "Not for the plan you already have.", 'a' => "If prices change for new customers, existing subscriptions keep their price. You are told well in advance, by email, with the actual number."],
                ['cat' => 'money', 'q' => "Do you offer discounts?", 'short' => "Yearly is two months cheaper.", 'a' => "Paying yearly costs :yearly instead of $108. Students and non-profits can write to support. Self-hosting remains the biggest discount of all: 100%."],
                ['cat' => 'plans', 'q' => "Do you offer lifetime plans?", 'short' => "Yes. :lifetime, once.", 'a' => "Lifetime is hosted Monica with no renewals. It includes every future version for as long as hosted Monica exists, and you can move to self-hosting at any time."],
                ['cat' => 'plans', 'q' => "Is the hosted version different from the self-hosted version?", 'short' => "Same Monica.", 'a' => "Same code, same features. The only difference is who runs the server, applies the updates and keeps the backups."],
                ['cat' => 'plans', 'q' => "Do you offer an enterprise plan?", 'short' => "No.", 'a' => "Monica is a personal CRM for your own life. A sales team would be better served by a sales tool."],
                ['cat' => 'selfHosting', 'q' => "Is Monica really open source?", 'short' => "Yes, since 2017.", 'a' => "The full source is public under the AGPL. You can read it, run it, change it and contribute to it."],
                ['cat' => 'selfHosting', 'q' => "Is self-hosting free?", 'short' => "Completely.", 'a' => "No licence key, no feature gate, no trial. You pay for your own server, if you have one, and your own time."],
                ['cat' => 'selfHosting', 'q' => "Can I move from hosted to self-hosted?", 'short' => "Yes, whenever you like.", 'a' => "Export your account and import it into your own Monica. The format is the same on both sides, so nothing is lost on the way."],
                ['cat' => 'selfHosting', 'q' => "Does subscribing support the open-source project?", 'short' => "Directly.", 'a' => "Hosting revenue pays for servers and for the people who keep developing Monica, including the parts self-hosters use for free."],
                ['cat' => 'data', 'q' => "Is my payment information stored by Monica?", 'short' => "No.", 'a' => "Payments are handled by the payment processor. Monica never sees or stores your card number."],
                ['cat' => 'data', 'q' => "Is my data used for advertising?", 'short' => "Never.", 'a' => "There are no ads, no trackers and no third parties reading what you write about your family."],
                ['cat' => 'data', 'q' => "Is my data used to train AI models?", 'short' => "No.", 'a' => "What you write about the people in your life is not training material, for Monica or for anyone Monica works with."],
                ['cat' => 'data', 'q' => "Are backups included?", 'short' => "Daily, on hosted plans.", 'a' => "Hosted and Lifetime accounts are backed up every day. On a self-hosted Monica, backups are yours to schedule."],
                ['cat' => 'data', 'q' => "Can I export everything?", 'short' => "Everything.", 'a' => "Contacts, notes, reminders, relationships, files. Export is available on every plan, including after you cancel."],
                ['cat' => 'leaving', 'q' => "Can I cancel at any time?", 'short' => "Yes, with one button.", 'a' => "No phone call, no retention form. Your account stays usable until the end of the period you paid for."],
                ['cat' => 'leaving', 'q' => "Are there cancellation fees?", 'short' => "No.", 'a' => "Cancelling costs nothing. Neither does coming back."],
                ['cat' => 'leaving', 'q' => "What happens if my payment fails?", 'short' => "Nothing disappears.", 'a' => "You get an email and a grace period to update your card. Your data stays exactly where it was."],
                ['cat' => 'leaving', 'q' => "How do refunds work?", 'short' => "Ask within 30 days.", 'a' => "If Monica is not for you, write to support within 30 days of paying and the payment is refunded in full."],
                ['cat' => 'leaving', 'q' => "Can I delete my account?", 'short' => "Yes, permanently.", 'a' => "Deleting your account removes your data from the servers. Backups containing it expire on their normal schedule."],
            ],
        ],
    ],

    'personalCrm' => [
        'eyebrow' => "A practical guide",
        'title' => "What is a personal CRM?",
        'lede' => "A personal CRM is a private place to remember the context around the people in your life: what they told you, what matters to them, and what you meant to follow up on.",
        'intro' => "Unlike a sales CRM, it is built for relationships, not pipelines. The point is not to manage people. It is to give your memory a little help so you can show up with more context.",

        'toc' => [
            'label' => "In this guide",
            'items' => [
                ['id' => 'definition', 'title' => "The short definition"],
                ['id' => 'comparison', 'title' => "How it differs from other tools"],
                ['id' => 'contents', 'title' => "What you can keep in one"],
                ['id' => 'fit', 'title' => "Who it helps"],
                ['id' => 'approaches', 'title' => "The main approaches"],
                ['id' => 'history', 'title' => "Where it came from"],
                ['id' => 'privacy', 'title' => "Privacy and ethics"],
                ['id' => 'hosting', 'title' => "Cloud or self-hosted"],
                ['id' => 'choosing', 'title' => "How to choose"],
                ['id' => 'monica', 'title' => "Monica's approach"],
            ],
        ],

        'definition' => [
            'label' => "The short definition",
            'title' => "A personal CRM remembers more than contact details.",
            'body' => "Your address book can tell you Sam's phone number. A personal CRM can remind you that Sam is training for a half marathon, that her daughter is called Maya, and that you promised to send the name of that book.",
            'body2' => "It connects facts to the history of a relationship. Depending on the tool, that can include notes, conversations, activities, important dates, reminders, relationships between people, and custom information you decide matters.",
            'aside' => "A useful personal CRM helps you remember. It does not decide how much a person is worth.",
        ],

        'comparison' => [
            'label' => "Three different jobs",
            'title' => "An address book, a personal CRM, and a traditional CRM are not the same thing.",
            'body' => "All three store information about people, but they are built around different questions. Calling them all contact management hides the important part: what the information is for.",
            'cards' => [
                [
                    'title' => "Address book",
                    'question' => "How can I reach this person?",
                    'body' => "Names, phone numbers, email addresses, postal addresses, and perhaps a birthday. Simple, familiar, and enough for many people.",
                ],
                [
                    'title' => "Personal CRM",
                    'question' => "What context do I want to remember?",
                    'body' => "The person, your relationship, what has happened, and what you want to remember or do later.",
                ],
                [
                    'title' => "Traditional CRM",
                    'question' => "How is this customer relationship progressing?",
                    'body' => "Leads, accounts, deals, service requests, revenue, team activity, and the stages of a business process.",
                ],
            ],
            'tableTitle' => "Personal CRM vs traditional CRM",
            'tableHeadings' => ["", "Personal CRM", "Traditional CRM"],
            'rows' => [
                ["Primary purpose", "Remember personal context and follow through", "Coordinate sales, marketing, or customer service"],
                ["People represented", "Friends, family, neighbours, colleagues, and other people in your life", "Leads, customers, accounts, and business contacts"],
                ["Typical information", "Relationships, memories, conversations, dates, notes, and reminders", "Deals, revenue, campaigns, support history, and pipeline stages"],
                ["Success looks like", "You have the context you need when it matters", "A business process moves forward and can be measured"],
                ["Usually used by", "One person, sometimes a household", "A company or team"],
            ],
            'closing' => "Traditional CRMs are useful tools for the job they were designed to do. The trouble starts when sales language and incentives are carried into private life. Your friends are not leads, and a quiet month is not a stalled pipeline.",
        ],

        'contents' => [
            'label' => "What goes inside",
            'title' => "Keep enough context to be useful. No more than that.",
            'body' => "A personal CRM can become a detailed record of someone else's life. That is a reason to be selective, not a reason to fill every available field. Store information because it helps you remember or follow through, not because the software gives you an empty box.",
            'groups' => [
                ['title' => "Identity and contact details", 'body' => "Names, pronouns, phone numbers, email addresses, locations, and the names a person actually uses."],
                ['title' => "Relationships", 'body' => "How you know someone, the people connected to them, and family or household relationships that help the rest make sense."],
                ['title' => "Important dates", 'body' => "Birthdays, anniversaries, moves, graduations, or any date that matters to that person or to your shared history."],
                ['title' => "Conversations and notes", 'body' => "What you talked about, a recommendation they made, a concern they shared, or a detail you do not want to ask for a third time."],
                ['title' => "Activities and memories", 'body' => "Meals, calls, trips, visits, projects, and other moments you may want to place in time later."],
                ['title' => "Commitments and reminders", 'body' => "A promise you made, a borrowed item, a gift idea, or a reminder to ask how something went."],
            ],
            'note' => "Sensitive information deserves a higher bar. If recording it would feel like a betrayal when read back to the person, that feeling is useful information.",
        ],

        'example' => [
            'label' => "A small example",
            'title' => "What using a personal CRM actually looks like",
            'body' => "The useful part is usually ordinary. It is less about building a perfect database and more about closing small loops your memory would otherwise leave open.",
            'steps' => [
                ["number" => "01", 'title' => "A friend mentions an interview", 'body' => "You make a short note after the conversation. Not a transcript, just the context you want to remember."],
                ["number" => "02", 'title' => "You set a reminder", 'body' => "The reminder is attached to the person and appears after the interview, when asking about it will be useful."],
                ["number" => "03", 'title' => "You follow up with context", 'body' => "You ask how it went because you care. The software remembered the timing; the relationship is still yours."],
            ],
        ],

        'fit' => [
            'label' => "Fit",
            'title' => "Some people need one. Plenty of people do not.",
            'body' => "A personal CRM earns its place only if it solves a real memory or follow-through problem. It should reduce mental load, not create a new administrative hobby.",
            'goodTitle' => "It may help if you…",
            'good' => [
                "care about more people than you can reliably keep in working memory;",
                "have friends or family spread across cities, countries, or life stages;",
                "regularly forget names, dates, promises, or the details people share;",
                "mentor, volunteer, organize a community, or care for an extended family;",
                "want one private place for relationship context scattered across notes and calendars.",
            ],
            'notTitle' => "You probably do not need one if…",
            'not' => [
                "your address book and calendar already cover what you forget;",
                "maintaining records feels heavier than the problem they solve;",
                "you only want a place for phone numbers and birthdays;",
                "you want team pipelines, mass outreach, sales forecasting, or customer analytics. A traditional CRM is a better fit for those jobs.",
            ],
        ],

        'approaches' => [
            'label' => "A useful framework",
            'title' => "Personal CRMs make different tradeoffs.",
            'body' => "Personal CRM is a loose category, not a standard specification. The approaches below are a way to compare products, not official industry labels. Many tools combine several of them.",
            'items' => [
                ['title' => "Networking first", 'body' => "Built around professional connections, introductions, and staying in touch. Useful when work depends on many long-running relationships, but it can import sales language into personal life."],
                ['title' => "Automation first", 'body' => "Pulls context from email, calendars, social accounts, or other services. It reduces manual entry, while asking for broader access and sometimes collecting more than you intended."],
                ['title' => "Productivity first", 'body' => "Treats follow-ups as tasks and recurring reminders. Clear and actionable, though a relationship can start to feel like an inbox if every interaction becomes an obligation."],
                ['title' => "Memory first", 'body' => "Centres notes, activities, dates, and shared history. It asks for more intentional input, but you decide what becomes part of the record."],
                ['title' => "Personal database", 'body' => "Lets you design your own records, fields, and connections. Flexible enough for unusual lives, with more setup and maintenance in return."],
            ],
        ],

        'history' => [
            'label' => "A short history",
            'title' => "Personal CRM borrowed business software's memory, then changed its purpose.",
            'body' => "There is no agreed inventor of the personal CRM. The category grew gradually from address books, contact managers, business CRM software, and personal information tools.",
            'items' => [
                ['date' => "Before software", 'title' => "People kept relationship context on paper", 'body' => "Address books, correspondence files, calendars, and annotated cards separated contact details from the unreliable business of remembering everything else."],
                ['date' => "1987", 'title' => "Contact management reaches personal computers", 'body' => "Act! dates its first contact management product to 1987. Early tools were often described as digital Rolodexes before CRM became the common term."],
                ['date' => "Mid 1990s", 'title' => "CRM becomes a business category", 'body' => "Academic histories place the emergence of the term customer relationship management in the mid 1990s, as contact records became part of wider sales and service systems."],
                ['date' => "1999 onward", 'title' => "CRM moves to the cloud", 'body' => "Salesforce launched in 1999 with web-based CRM. Cloud software made shared records, automatic updates, and integrations normal parts of the category."],
                ['date' => "2010s", 'title' => "Personal CRM becomes a recognizable label", 'body' => "New products applied some of the same ideas to an individual's professional and private relationships. By 2019, the category was established enough to attract both enthusiasm and discomfort about optimizing friendship."],
            ],
            'sourcesLabel' => "Sources for this timeline",
            'sources' => [
                ['label' => "Act! company history", 'url' => 'https://www.act.com/about-us/'],
                ['label' => "Academic history of CRM", 'url' => 'https://www.sciencedirect.com/science/article/pii/S0963868707000182'],
                ['label' => "Salesforce company history", 'url' => 'https://www.salesforce.com/company/our-story'],
                ['label' => "Axios on personal CRM in 2019", 'url' => 'https://www.axios.com/2019/08/27/startups-new-frontier-optimizing-your-friendships'],
            ],
        ],

        'privacy' => [
            'label' => "Privacy and ethics",
            'title' => "Your account is about you. Much of the information inside it is about other people.",
            'body' => "That makes a personal CRM unusually sensitive. It may contain addresses, family connections, private conversations, health details, or memories that were shared in confidence. A password is necessary, but good judgment starts before anything is saved.",
            'principles' => [
                ['title' => "Collect less", 'body' => "Keep what has a clear purpose. More complete is not automatically more useful."],
                ['title' => "Respect the original context", 'body' => "Information shared in a private conversation does not become fair game for enrichment, analysis, or wider distribution because you can copy it."],
                ['title' => "Know where automation sends data", 'body' => "Email sync, transcription, enrichment, and AI features may involve other services. Check what leaves the application, why, for how long, and whether it is used to train models."],
                ['title' => "Plan for loss and departure", 'body' => "Use strong access controls and backups. Make sure you can export your data in a useful format and delete it when you leave."],
                ['title' => "Write for the possible reader", 'body' => "A good test is whether you could explain a note to the person it describes without hiding behind the software."],
            ],
            'closing' => "A personal CRM is not inherently caring or creepy. The difference is often what you collect, how it got there, who can access it, and what you do with it.",
        ],

        'hosting' => [
            'label' => "Where it runs",
            'title' => "Cloud and self-hosting move responsibility around.",
            'body' => "A hosted service asks a provider to operate the application. Self-hosting gives you control over the server and removes that provider from day-to-day operation. Neither choice is automatically safer. Security depends on updates, access controls, backups, monitoring, and the people responsible for them.",
            'tableHeadings' => ["", "Hosted service", "Self-hosted"],
            'rows' => [
                ["Maintenance", "The provider runs and updates the service", "You install, update, and monitor it"],
                ["Control", "You work within the provider's product and policies", "You control the server, configuration, and deployment"],
                ["Backups", "Usually managed by the provider; verify what is included", "You configure, protect, and test them"],
                ["Availability", "Usually accessible without managing infrastructure", "Depends on the infrastructure you operate"],
                ["Data location", "Depends on the provider and its subprocessors", "Depends on the server and services you choose"],
                ["Best fit", "You want the tool without running a service", "You have the skill and desire to operate it yourself"],
            ],
            'note' => "Self-hosting gives you more control. It also gives you more ways to make a serious mistake. Choose it because you want the responsibility, not because the label alone feels secure.",
        ],

        'choosing' => [
            'label' => "Before choosing a tool",
            'title' => "Start with the habit you want, then inspect the software.",
            'body' => "The longest feature list rarely tells you which personal CRM will survive contact with your actual life. A modest tool you keep using is more useful than a perfect system you avoid opening.",
            'questions' => [
                ['title' => "What do you want help remembering?", 'body' => "Names and dates require a different tool from detailed history, follow-up reminders, or a flexible personal database."],
                ['title' => "How much work will capture take?", 'body' => "Decide whether you prefer deliberate manual notes, broad automatic imports, or something between them."],
                ['title' => "What access does it request?", 'body' => "Check whether it reads email, calendars, contacts, social accounts, or messages, and whether each permission is necessary."],
                ['title' => "How does it use AI?", 'body' => "Find out what data is sent to which model provider, what is retained, whether training is allowed, and whether the feature can be disabled."],
                ['title' => "Can you leave?", 'body' => "Look for complete export, understandable formats, account deletion, and a credible plan for the product's long-term maintenance."],
                ['title' => "Who operates it?", 'body' => "Compare the convenience of a hosted service with the control and work of self-hosting. Include backups and updates in the decision."],
                ['title' => "Can it match your relationships?", 'body' => "Rigid fields may be simple. Custom records may fit better. Choose the amount of flexibility you will actually use."],
            ],
        ],

        'monica' => [
            'label' => "Monica's point of view",
            'title' => "Memory over automation. Relationships over networking.",
            'body' => "Monica is one answer to the personal CRM question, not the definition of the category. It began with a simple idea: remember the details that help you care for friends and family, without turning those people into prospects or handing their lives to an advertising system.",
            'principles' => [
                ['title' => "Context matters more than contact data", 'body' => "Monica connects people to notes, activities, reminders, important dates, and the relationships around them."],
                ['title' => "You choose what enters the record", 'body' => "Monica favours intentional memory over invisible enrichment. The goal is not to ingest every possible signal."],
                ['title' => "Ownership is part of the product", 'body' => "Monica is open source, can be self-hosted, and provides a hosted option for people who do not want to run a server."],
                ['title' => "Different lives need different structures", 'body' => "Monica v3 is being built around more customizable records and connections, while keeping the project's privacy and ownership principles."],
            ],
            'currentCta' => "See what Monica can remember",
            'v3Cta' => "Read about Monica v3",
            'privacyCta' => "Read Monica's privacy policy",
            'finalTitle' => "A personal CRM should help you pay attention, then get out of the way.",
            'finalBody' => "If Monica's approach fits the way you want to remember people, you can use the hosted service or run the open-source application yourself.",
            'primaryCta' => "Start using Monica",
            'secondaryCta' => "View Monica on GitHub",
        ],

        'faq' => [
            'label' => "Common questions",
            'title' => "A few honest answers before you build a second brain for your social life.",
            'items' => [
                ['q' => "Is using a personal CRM creepy?", 'a' => [
                    "It can be. Quietly collecting sensitive information, importing private conversations without care, or scoring people crosses reasonable boundaries for many people.",
                    "A small, private set of notes and reminders can also be an ordinary memory aid. What you collect, how it got there, and how you use it matter more than the label.",
                ]],
                ['q' => "Can I use my contacts app, calendar, or notes instead?", 'a' => "Yes. If those tools solve the problem, keep using them. A personal CRM becomes useful when you want the person, context, history, and follow-up connected in one place."],
                ['q' => "Is a personal CRM only for professional networking?", 'a' => "No. Some products are built mainly for professional relationships. Others focus on friends, family, community, or a mixture. The right choice depends on the relationships and habits you actually have."],
                ['q' => "Is self-hosting more private?", 'a' => "It can reduce the number of service providers involved and give you more control. It does not configure updates, backups, encryption, or access controls for you. Privacy and security still depend on how the system is operated."],
                ['q' => "How much information should I record?", 'a' => "Start with the minimum that solves your problem. Dates, a few notes, and the occasional reminder are enough for many people. Add structure only when it earns its maintenance cost."],
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
            'cake' => "Favourite cake",
            'cannotEat' => "Cannot eat",
            'coffee' => "Coffee order",
            'shoeSize' => "Shoe size",
            'nameDay' => "Name day",
            'giftIdeas' => "Gift ideas",
            'idea' => "Idea",
            'given' => "Already given",
            'howWeMet' => "How we met",
        ],
        'types' => [
            'shortText' => "Short text",
            'longText' => "Long text",
            'number' => "Number",
            'multipleChoice' => "Multiple choice",
            'recurringDate' => "Recurring date",
            'repeater' => "Repeater",
            'checkbox' => "Checkbox",
        ],
        'section' => "Little things worth remembering",
        'addField' => "Add a field",
        'fieldCount' => ":count fields",
        'publish' => "Publish this version",
        'draft' => "Draft",
        'published' => "Published",
        'friends' => "Friends",

        'hero' => [
            'title' => "Your contacts, your way.",
            'lede' => "Remember what matters to you. Build contact templates with your own fields, sections and tabs, so every person’s page has room for the details you want to keep.",
            'cta' => "Create your account",
            'label' => "Rachel Green’s contact page in Monica, open on the Little things tab, beside the section of the Friends template that gives the page its fields.",
            'meta' => "Friends template · added 3 years ago",
            'tabs' => ["General", "Ways to connect", "Little things", "Plans"],
            'values' => [
                'cake' => "Cheesecake from Mama’s Little Bakery, Chicago",
                'cannotEat' => ["Lobster", "Raw onion"],
                'coffee' => "Latte, at Central Perk",
                'shoeSize' => "38",
            ],
            'story' => "Ran into Central Perk soaking wet, in a wedding dress, the day she left Barry at the altar. She moved in that night.",
            'behind' => "The template behind it",
        ],

        'birthday' => [
            'title' => "A birthday is useful. So is knowing their favourite cake.",
            'body' => "An address book keeps phone numbers. You might also want to remember how you met, what someone is working towards, or which food they cannot eat.",
            'close' => "With Monica, you choose what belongs on your contact pages.",
            'label' => "An address book entry holding a phone number and a birthday, and Ross Geller’s page in Monica, which also holds his favourite cake, how you met, what he is working towards and what he cannot eat.",
            'addressBook' => "An address book",
            'rows' => [
                ['label' => "Phone", 'value' => "+1 212 555 0174"],
                ['label' => "Birthday", 'value' => "18 October 1967"],
            ],
            'monica' => [
                ['label' => "Birthday", 'value' => "18 October · in three weeks"],
                ['label' => "Favourite cake", 'value' => "Carrot cake, extra walnuts"],
                ['label' => "How we met", 'value' => "Monica’s brother, back in college"],
                ['label' => "Working towards", 'value' => "Tenure at NYU"],
                ['label' => "Cannot eat", 'value' => ["Kiwi", "Lobster"]],
            ],
        ],

        'people' => [
            'title' => "Different people. Different details.",
            'close' => "Create different templates for the people in your life. Each one can have its own structure.",
            'cards' => [
                [
                    'title' => "Friends",
                    'body' => "Their favourite things, plans for the summer, and the story of how you met.",
                    'label' => "A contact page built from a Friends template, with the tabs Favourites, Summer and Our story.",
                    'tabs' => ["Favourites", "Summer", "Our story"],
                    'rows' => [
                        ['label' => "Band", 'value' => "Khruangbin"],
                        ['label' => "Book", 'value' => "The Remains of the Day"],
                        ['label' => "Summer plan", 'value' => "Cycling the Loire, July"],
                    ],
                ],
                [
                    'title' => "Family",
                    'body' => "The traditions they care about, important dates, and the recipe they keep promising to send.",
                    'label' => "A contact page built from a Family template, with the tabs Traditions, Dates and Recipes.",
                    'tabs' => ["Traditions", "Dates", "Recipes"],
                    'rows' => [
                        ['label' => "Christmas Eve", 'value' => "Oysters, then midnight mass"],
                        ['label' => "Name day", 'value' => "26 July"],
                        ['label' => "Promised recipe", 'value' => "Grand-mère’s clafoutis"],
                    ],
                ],
                [
                    'title' => "Professional contacts",
                    'body' => "Their area of expertise, where you first spoke, and the subject you wanted to pick up next time.",
                    'label' => "A contact page built from a template for professional contacts, with the tabs Work, Ways to connect and Next time.",
                    'tabs' => ["Work", "Ways to connect", "Next time"],
                    'rows' => [
                        ['label' => "Expertise", 'value' => "Supply chains in food retail"],
                        ['label' => "First spoke", 'value' => "Lyon, at a logistics panel"],
                        ['label' => "Pick up next time", 'value' => "Her cold-chain pilot"],
                    ],
                ],
            ],
        ],

        'room' => [
            'title' => "Make room for what matters.",
            'body' => [
                "Add fields for text, dates, numbers or a choice from a list. Give them names that make sense to you.",
                "Gather related fields into sections, arrange those sections in tabs, and put everything in the order you prefer. For details that come in multiples, use a repeating group.",
            ],
            'close' => "A section called “Little things worth remembering”? Entirely reasonable.",
            'label' => "The template editor in Monica, with a draft of the Friends template open on its Little things page. The Cannot eat field is selected, and the panel beside it shows its name, its type and its list of choices.",
            'version' => "v2 · based on v1",
            'saved' => "Saved 4 seconds ago",
            'import' => "Import a section",
            'pages' => [
                ['name' => "General", 'count' => 5],
                ['name' => "Little things", 'count' => 6],
                ['name' => "Plans", 'count' => 3],
            ],
            'addPage' => "Add a page",
            'field' => "Field",
            'name' => "Name",
            'type' => "Type",
            'choices' => "Choices",
            'choiceList' => ["Peanuts", "Gluten", "Shellfish", "Dairy", "Raw onion"],
            'addChoice' => "Add a choice",
            'note' => "What you change applies to this draft only.",
        ],

        'reuse' => [
            'title' => "Build it once. Use it again.",
            'body' => [
                "A template gives several contact pages the same structure. Each person keeps their own information.",
                "Add “How we met” to your friends template, and you have a place for a different story on every friend’s page. Choose a default template for each vault to give new contacts the right starting point.",
            ],
            'label' => "One How we met field in the Friends template, filled in with a different story on three friends’ pages, and the Friends template chosen as the default for new contacts in the Friends vault.",
            'template' => "Friends template",
            'stories' => [
                'Rachel' => "Ran into Central Perk in a wedding dress.",
                'Ross' => "Monica’s brother, back in college.",
                'Joey' => "Answered the ad for Chandler’s spare room.",
            ],
            'default' => "Default template",
            'defaultBody' => "New contacts in the Friends vault start here",
        ],

        'versions' => [
            'title' => "Change your mind without losing your notes.",
            'body' => [
                "You may want to add a detail, rename a field or move a section. Your templates can change with you.",
                "Prepare a draft and publish it when it is ready. Existing contacts stay on their current version until you choose to update them.",
                "Remove a field from a template, and the information you already entered is kept. You can still find it, and it returns to the page if you bring the field back.",
            ],
            'label' => "The version history of a template, with a draft v3 waiting to be published while 34 contacts stay on v2, and Rachel Green’s page keeping her shoe size from a field that was removed, with a button to bring the field back.",
            'history' => "Version history",
            'rows' => [
                ['version' => "v3", 'text' => "Added “Name day”, renamed “Allergies” to “Cannot eat”", 'status' => 'draft'],
                ['version' => "v2", 'text' => "Published 2 June · 34 contacts", 'status' => 'published'],
                ['version' => "v1", 'text' => "Published 9 January · 3 contacts", 'status' => null],
            ],
            'notice' => "Publishing v3 leaves 34 contacts on v2 until you update them.",
            'values' => [
                'cake' => "Cheesecake from Mama’s Little Bakery",
                'coffee' => "Latte, at Central Perk",
            ],
            'kept' => "Kept from a removed field",
            'restore' => "Bring the field back",
        ],

        'share' => [
            'title' => "Share the template. Keep the details to yourself.",
            'body' => [
                "Made something useful? Export a whole template or a single section for someone else to import into their account.",
                "The file contains the structure you built, including its labels and choice lists. Your contacts and their information stay with you.",
            ],
            'label' => "Exporting the Little things worth remembering section. The file holds the section, its six field labels and types and the Cannot eat choice list. Your 34 contacts and everything written on their pages stay with you.",
            'export' => "Export this section",
            'inFile' => "In the file",
            'inFileItems' => ["The section and its name", "6 field labels and types", "The “Cannot eat” choice list"],
            'stays' => "Stays with you",
            'staysItems' => ["Your 34 contacts", "Everything written on their pages"],
            'file' => "little-things-worth-remembering.json · 3 KB",
            'download' => "Download",
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
            'title' => "Remember the details that matter.",
            'lede' => "Their number is in your phone. The name of their new partner, their favourite meal, and what they told you last time might be harder to find.",
            'close' => "Keep those details together in Monica, ready for the next conversation.",
            'cta' => "Create your account",
            'label' => "Rachel Green’s contact page in Monica, open on the General tab. Her partner is Joshua, her favourite meal is Monica’s lasagne without beef, and she works on the buying team at Bloomingdale’s. A note from six days ago says she has an interview in Paris next month.",
            'vault' => "Personal",
            'people' => "People",
            'meta' => [
                ['label' => "Category", 'value' => "Friends"],
                ['label' => "Birthday", 'value' => "5 May · in three weeks"],
                ['label' => "Last in touch", 'value' => "six days ago"],
            ],
            'edit' => "Edit contact",
            'tabs' => ["Overview", "General", "Ways to connect", "Relationships"],
            'personal' => "Personal details",
            'rows' => [
                ['label' => "Partner", 'value' => "Joshua, since February"],
                ['label' => "Favourite meal", 'value' => "Monica’s lasagne, no beef"],
                ['label' => "Works at", 'value' => "Bloomingdale’s, buying team"],
            ],
            'lastTime' => "What she told you last time",
            'note' => "Interview in Paris next month, for a job at Louis Vuitton. Hasn’t told her dad yet. Wants to find a flat near the Marais.",
            'added' => "Added six days ago",
        ],

        'audition' => [
            'title' => "“How did the audition go?”",
            'body' => [
                "Joey mentioned an audition last week. You remember it mattered to him. Having that detail on his page gives you somewhere to pick up the conversation.",
                "Keep a record of the things people tell you: a new job, an upcoming move, a project they cannot stop talking about.",
            ],
            'label' => "Two notes on Joey Tribbiani’s page: an audition on Thursday for a hospital drama, and a move out of the apartment by the end of the summer. Below them, a reminder due today to ask Joey how the audition went.",
            'notes' => "Notes",
            'entries' => [
                ['text' => "Audition on Thursday for a part in a hospital drama. Second callback. He’s been practising the crying scene on the roof.", 'added' => "Added 8 days ago"],
                ['text' => "Moving out of the apartment by the end of the summer. Looking at places in Queens.", 'added' => "Added 3 weeks ago"],
            ],
            'reminder' => "Ask Joey how the audition went",
            'today' => "Today",
            'remembered' => "I remembered",
            'forgot' => "I forgot",
        ],

        'little' => [
            'title' => "The little things deserve a place.",
            'lead' => "Rachel’s favourite flowers. How Chandler takes his coffee. The name of Ross’s latest research project.",
            'body' => "Some details are useful. Others simply remind you of who someone is. Keep as much or as little as you want, in your own words.",
            'cards' => [
                ['field' => "Favourite flowers", 'value' => "Peonies. Never lilies.", 'note' => "The white ones from the stall on 6th Avenue.", 'label' => "Rachel Green’s favourite flowers: peonies, never lilies. The white ones from the stall on 6th Avenue."],
                ['field' => "Coffee", 'value' => "Black, two sugars", 'note' => "In the orange mug, if it’s clean.", 'label' => "How Chandler Bing takes his coffee: black, two sugars, in the orange mug if it is clean."],
                ['field' => "Research project", 'value' => "Sediment layers of the late Cretaceous", 'note' => "Ask about the dig in Montana. Allow twenty minutes.", 'label' => "Ross Geller’s research project: sediment layers of the late Cretaceous. Ask about the dig in Montana, and allow twenty minutes."],
            ],
        ],

        'own' => [
            'title' => "Give every person a page of their own.",
            'body' => [
                "Keep contact details, important dates and personal information together. Add a photo, and organise the rest with a template that suits what you want to remember.",
                "Open Monica Geller’s page before dinner to check her address, her birthday, or the dish you promised to bring.",
            ],
            'label' => "Monica Geller’s contact page in Monica: her address and phone number, her birthday and anniversary, and a note from yesterday about the dessert you promised to bring to dinner on Friday.",
            'meta' => [
                ['label' => "Category", 'value' => "Friends"],
                ['label' => "Birthday", 'value' => "22 April"],
                ['label' => "Reminders", 'value' => "1 today"],
            ],
            'connect' => [
                'title' => "Ways to connect",
                'rows' => [
                    ['label' => "Address", 'value' => "90 Bedford Street, Apt 20\nNew York, NY 10014"],
                    ['label' => "Phone", 'value' => "+1 212 555 0187"],
                ],
            ],
            'dates' => [
                'title' => "Important dates",
                'rows' => [
                    ['label' => "Birthday", 'value' => "22 April 1969"],
                    ['label' => "Anniversary", 'value' => "15 May, with Chandler"],
                ],
            ],
            'dinner' => [
                'title' => "Dinner on Friday",
                'text' => "You promised to bring the dessert. Not the trifle. She has already made a list of acceptable options.",
                'added' => "Added yesterday",
            ],
        ],

        'people' => [
            'title' => "Leave room for the people around them.",
            'lead' => "Remembering someone often means remembering their people, too.",
            'body' => "Link Ross to Monica as his sister, Rachel as his former partner, and Emma as his daughter. When you know someone exists but have not met them yet, you can record the connection with just a name, or without one.",
            'label' => "Ross Geller’s relationships in Monica. Family: Monica, his sister, and Emma, his daughter. Former partner: Rachel. Not met yet: Charlie, a colleague known only by name, and a cousin from Long Island whose name is not known.",
            'heading' => "Ross Geller’s people",
            'add' => "Add",
            'groups' => [
                ['title' => "Family", 'people' => [
                    ['name' => "Monica Geller", 'detail' => "Monica is Ross’s sister."],
                    ['name' => "Emma Geller-Green", 'detail' => "Emma is Ross’s daughter."],
                ]],
                ['title' => "Former partner", 'people' => [
                    ['name' => "Rachel Green", 'detail' => "Rachel is Ross’s former partner."],
                ]],
                ['title' => "Not met yet", 'people' => [
                    ['name' => "Charlie", 'detail' => "Ross’s colleague · just a name", 'known' => false],
                    ['name' => "Name not known", 'detail' => "Ross’s cousin, from Long Island", 'known' => false, 'named' => false],
                ]],
            ],
        ],

        'moments' => [
            'title' => "Keep the moments alongside the details.",
            'body' => [
                "A contact page can hold both the everyday facts and the things that happened.",
                "Record dinner with Phoebe, a call with Chandler, or a trip with the whole group. Add everyone who was there, and the event appears on each person’s timeline.",
            ],
            'close' => "Next time you meet, you have a way back to the last conversation.",
            'label' => "A timeline in Monica with three entries for 2026: dinner with Phoebe on 3 October, a call with Chandler on 21 September, and a weekend in Montauk on 14 August with Ross, Rachel, Monica, Chandler and Joey. Beside it, the Montauk weekend appears on all five of their timelines.",
            'timeline' => "Timeline",
            'addEvent' => "Add a life event",
            'entries' => ":count entries",
            'events' => [
                ['title' => "Dinner with Phoebe", 'date' => "3 October", 'body' => "The Thai place on Grove Street. She is writing songs about her taxi again."],
                ['title' => "Call with Chandler", 'date' => "21 September", 'body' => "Forty minutes. Thinking about leaving the job in data reconfiguration."],
                ['title' => "A weekend in Montauk", 'date' => "14 August", 'body' => "Rented the beach house again. Joey lost the car keys in the sand."],
            ],
            'with' => "With :names",
            'onTimelines' => "On :count timelines",
        ],

        'cta' => [
            'title' => "You do not have to remember everything.",
            'body' => "Start with one person and a few details you would like to keep. Add more whenever something feels worth remembering.",
            'button' => "Create your account",
        ],
    ],

    'reminders' => [
        // Words more than one drawing uses.
        'remembered' => "I remembered",
        'forgot' => "I forgot",
        'overdue' => "Overdue",
        'today' => "Today",
        'add' => "Add a reminder",
        'day' => "Day",
        'at' => "At",
        'timeZone' => "Time zone",
        'repeats' => "Repeats",
        'says' => "It will say",
        'optional' => "optional",

        'hero' => [
            'title' => "Remember to reach out.",
            'lede' => "A birthday. A big day. A friend you have been meaning to call.",
            'close' => "Set a reminder in Monica and get a nudge when it is time.",
            'cta' => "Create your account",
            'label' => "The reminders in a Personal vault in Monica, three this week. Overdue: call Phoebe, two days ago, with buttons to answer I remembered or I forgot. In the next seven days: ask Joey about the audition on Tuesday, and Chandler’s birthday in five days. Beside it, the email Monica sends on Tuesday at 09:00 to remind you about Joey, with a button to open his page.",
            'vault' => "Personal",
            'count' => "3 reminders this week",
            'overdueTitle' => "Overdue",
            'overdue' => [
                ['text' => "Call Phoebe", 'when' => "2 days ago"],
            ],
            'upcomingTitle' => "Next seven days",
            'upcoming' => [
                ['text' => "Ask Joey about the audition.", 'when' => "Tuesday"],
                ['text' => "Chandler’s birthday", 'when' => "5 days from now"],
            ],
            'inbox' => "In your inbox, Tuesday 09:00",
            'from' => "From Monica",
            'email' => "You asked to be reminded about Joey Tribbiani today.",
            'open' => "Open Joey’s page",
        ],

        'once' => [
            'title' => "Joey’s audition is on Tuesday.",
            'lead' => "You cannot get him the part. You can remember to ask how it went.",
            'body' => "Add a reminder to Joey’s page, choose the day and time, and write what you want Monica to tell you: “Ask Joey about the audition.”",
            'label' => "Adding a reminder on Joey Tribbiani’s page in Monica: on Tuesday 14 October at 18:00, it will say “Ask Joey about the audition.” It happens once.",
            'heading' => "Add a reminder for Joey",
            'day' => "Tuesday 14 October",
            'at' => "18:00",
            'says' => "Ask Joey about the audition.",
            'summary' => "Reminder on :when, once.",
            'when' => "Tuesday 14 October at 18:00",
            'cancel' => "Cancel",
        ],

        'yearly' => [
            'title' => "Some dates come around every year.",
            'body' => "Save Chandler’s birthday and turn on a reminder for that date. Monica will remind you on the day, each year.",
            'close' => "If you correct the date later, the reminder follows it.",
            'label' => "Chandler Bing’s birthday in Monica, 8 April 1968, with a reminder turned on for the date. It repeats every year at 09:00, New York time, and will say “Chandler’s birthday”. The next one is on 8 April 2027.",
            'birthday' => "Birthday",
            'date' => "8 April 1968",
            'noYear' => "I do not know the year",
            'remind' => "Remind me about this date",
            'repeats' => "Every year",
            'at' => "09:00",
            'zone' => "New York",
            'says' => "Chandler’s birthday",
            'summary' => "Next reminder on :when, on the day.",
            'when' => "8 April 2027 at 09:00",
        ],

        'habit' => [
            'title' => "Make keeping in touch a habit.",
            'lead' => "Call Phoebe every month. Catch up with Rachel every three weeks.",
            'body' => "Reminders can happen once, or repeat every few weeks, months or years. Choose a rhythm that makes sense for each person.",
            'label' => "Two repeating reminders in Monica: call Phoebe, every month, next on 3 November, and catch up with Rachel, every three weeks, next on 24 October. Beside them, the menu that chooses how a reminder repeats, set to every 3 weeks.",
            'rows' => [
                ['text' => "Call Phoebe", 'detail' => "3 November · in three weeks · Every month"],
                ['text' => "Catch up with Rachel", 'detail' => "24 October · in eleven days · Every 3 weeks"],
            ],
            'options' => ["Once", "Every week", "Every 3 weeks", "Every month", "Every year"],
            // The option drawn as chosen, counted from zero.
            'chosen' => 2,
        ],

        'zone' => [
            'title' => "Your time, wherever they are.",
            'lead' => "Each reminder has its own time and time zone.",
            'body' => "If Ross is away in London, you can set a reminder around his day. It keeps that time zone even if you travel or change your own settings.",
            'label' => "A reminder in Monica to wish Ross Geller luck with the lecture, on Thursday 23 October at 08:30, London time. That is 08:30 for Ross in London and 03:30 for you in New York.",
            'heading' => "Wish Ross luck with the lecture",
            'day' => "Thursday 23 October",
            'at' => "08:30",
            'zone' => "London",
            'them' => "Ross in London",
            'you' => "You in New York",
            'yours' => "03:30",
        ],

        'channels' => [
            'title' => "Choose how the nudge reaches you.",
            'lead' => "Receive reminders by email or while you are using Monica.",
            'body' => "Telegram and text messages are also available when enabled on your Monica instance. Choose the channels that work for you, and send yourself a test to check they are connected.",
            'label' => "Notification settings in Monica. Email is connected, with a button to send a test. Notifications in Monica are on. Telegram and text messages are enabled on this instance, each with a button to connect.",
            'heading' => "Notifications",
            'sub' => "Where your reminders reach you",
            'rows' => [
                ['name' => "Email", 'detail' => "monica@geller.example", 'status' => "Connected", 'action' => "Send a test"],
                ['name' => "In Monica", 'detail' => "The bell at the top of every page", 'status' => "On"],
                ['name' => "Telegram", 'detail' => "Enabled on this instance", 'action' => "Connect"],
                ['name' => "Text message", 'detail' => "Enabled on this instance", 'action' => "Connect"],
            ],
        ],

        'answer' => [
            'title' => "Did you remember?",
            'body' => "When a reminder’s day arrives, you can tell Monica how it went.",
            'remembered' => [
                'body' => "You called Chandler, wished Rachel a happy birthday, or asked Joey about the audition. Mark it as remembered from the day itself.",
                'label' => "A reminder due today in Monica: ask Joey about the audition, Tuesday 14 October at 18:00, one time, with a button to answer I remembered.",
                'reminder' => "Ask Joey about the audition.",
                'detail' => "Tuesday 14 October · 18:00 · One time",
            ],
            'forgot' => [
                'body' => "The day got away from you. From the following day, you can mark it as forgotten.",
                'label' => "An overdue reminder in Monica: Phoebe’s birthday, 16 February, two days ago. It repeats every year and comes around again on 16 February 2027. Buttons answer I remembered or I forgot.",
                'reminder' => "Phoebe’s birthday",
                'detail' => "16 February · 2 days ago · Every year · next on 16 February 2027",
            ],
            'notes' => [
                "Your answer moves that occurrence into your history. Leave it unanswered, and it stays overdue so you can come back to it.",
                "For repeating reminders, the next date still comes around. Forgetting Phoebe’s birthday this year does not cancel next year’s nudge.",
            ],
        ],

        'attention' => [
            'title' => "See what needs your attention.",
            'body' => [
                "Find a person’s reminders on their page, or open your vault’s reminders to see everyone together.",
                "See what is overdue, what is due today, and what is coming up. Look back through your history to see the reminders you remembered and the ones you forgot.",
            ],
            'label' => "A vault’s reminders page in Monica. Of 24 reminders in the last 12 months, 75% were remembered and 25% forgotten. Filters for all 5, overdue 1, today 1, upcoming 3 and history 18. Overdue: call Phoebe, 11 October, two days ago, every month. Upcoming, soonest first: ask Joey about the audition tomorrow, catch up with Rachel in eleven days, and Chandler’s birthday on 8 April 2027, which follows his birthday.",
            'heading' => "Reminders",
            'stats' => [
                ['value' => "75%", 'label' => "remembered"],
                ['value' => "25%", 'label' => "forgot"],
            ],
            'period' => "of 24 reminders in the last 12 months",
            'filters' => ["All", "Overdue", "Today", "Upcoming", "History"],
            'overdueNote' => "The day has passed without an answer.",
            'overdue' => ['text' => "Call Phoebe", 'detail' => "11 October · 2 days ago · Every month"],
            'upcomingTitle' => "Upcoming",
            'upcomingNote' => "Soonest first.",
            'upcoming' => [
                ['text' => "Ask Joey about the audition.", 'detail' => "14 October · tomorrow · One time"],
                ['text' => "Catch up with Rachel", 'detail' => "24 October · in eleven days · Every 3 weeks"],
                ['text' => "Chandler’s birthday", 'detail' => "8 April 2027 · 6 months from now · Every year · Follows Birthday"],
            ],
        ],

        'cta' => [
            'title' => "A little help with the follow-through.",
            'body' => "You thought of calling Chandler. Give that thought a day and time.",
            'button' => "Create your account",
        ],
    ],

    'timeline' => [
        // Words more than one drawing uses.
        'with' => "With :names",
        'add' => "Add a life event",
        'optional' => "optional",

        'hero' => [
            'title' => "Keep the moments worth remembering.",
            'intro' => "Dinner with friends. A new job. The afternoon everyone still talks about.",
            'lede' => "Record what happened, who was there, and the details you want to keep. Monica brings those moments together in a timeline you can return to.",
            'cta' => "Create your account",
            'label' => "The timeline of a Personal vault in Monica, 102 entries, with 2 that need your attention. In 2026: Thanksgiving at Monica’s on 26 November, at 90 Bedford Street, New York, where Joey wore the stretchy trousers and nobody mentioned the trifle, with Rachel, Ross, Chandler, Joey and Phoebe. And a coffee with Phoebe on 3 October that was meant to be quick, until three hours later she had planned your whole spring. Beside it, from earlier that year, Monica and Chandler’s wedding on 15 May: at the Moondance Diner, then the roof, with Joey as officiant, ordained online, and 43 guests.",
            'vault' => "Personal",
            'tabs' => ["Your timeline", "Needs your attention"],
            'year' => "2026",
            'count' => "2 entries",
            'events' => [
                ['title' => "Thanksgiving at Monica’s", 'date' => "26/11", 'place' => "90 Bedford Street, New York", 'note' => "Joey wore the stretchy trousers. Nobody mentioned the trifle."],
                ['title' => "Coffee with Phoebe", 'date' => "03/10", 'note' => "Meant to be quick. Three hours later, she had planned my whole spring."],
            ],
            'earlier' => "Earlier that year",
            'wedding' => [
                'title' => "Monica and Chandler’s wedding",
                'type' => "Marriage · 15 May",
                'facts' => [
                    ['label' => "Where", 'value' => "The Moondance Diner, then the roof"],
                    ['label' => "Officiant", 'value' => "Joey, ordained online"],
                ],
                'more' => "and 38 more",
            ],
        ],

        'milestones' => [
            'title' => "Big milestones. Ordinary Tuesdays.",
            'body' => [
                "Monica and Chandler’s wedding deserves an entry. So does a coffee with Phoebe that turned into a three-hour conversation.",
                "Choose from 40 built-in event types, including calls, meals, visits, trips and new jobs. There is room for everyday moments as well as the occasions everyone puts in a calendar.",
            ],
            'label' => "The first step of adding a life event in Monica: choose what happened. Five categories, with Relationships and family selected, and its event types: call, message, meal, visit, time together, marriage and birth, each with the number of fields it asks for.",
            'step' => "Step 1 of 2 · Choose what happened",
            'categoriesTitle' => "Categories",
            'categories' => ["Relationships and family", "Work and education", "Health and wellbeing", "Leisure and culture", "Travel and experiences"],
            'types' => [
                ['name' => "Call", 'fields' => "3 fields"],
                ['name' => "Message", 'fields' => "3 fields"],
                ['name' => "Meal", 'fields' => "3 fields"],
                ['name' => "Visit", 'fields' => "2 fields"],
                ['name' => "Time together", 'fields' => "1 field"],
                ['name' => "Marriage", 'fields' => "3 fields"],
                ['name' => "Birth", 'fields' => "1 field"],
            ],
        ],

        'moment' => [
            'title' => "One moment. Everyone who was there.",
            'lead' => "Thanksgiving at Monica’s involved Rachel, Ross, Chandler, Joey and Phoebe. You should only have to record it once.",
            'body' => "Add the people who took part, and the event appears on each person’s timeline. If you update the details later, the same change appears on every timeline it belongs to.",
            'label' => "Thanksgiving at Monica’s, 26 November 2026, recorded once with Rachel, Ross, Chandler, Joey and Phoebe. Below it, three of their timelines, each showing the same Thanksgiving: Rachel’s, above a call on 12 November; Joey’s, above an audition on 14 October; and Phoebe’s, above a coffee with Phoebe on 3 October.",
            'event' => "Thanksgiving at Monica’s",
            'when' => "26 November 2026 · recorded once",
            'date' => "26/11",
            'timeline' => ":name’s timeline",
            // The entry under Thanksgiving on each timeline, in the order the
            // template draws them: Rachel, Joey, Phoebe.
            'before' => ["Call · 12/11", "Audition · 14/10", "Coffee with Phoebe · 03/10"],
        ],

        'story' => [
            'title' => "Keep more than the date.",
            'lead' => "Where did you go? What made it memorable?",
            'body' => "Add a place, a description and the details that fit the occasion. A walk in the Hudson Highlands becomes more than a date when you remember that Chandler carried both twins for the last two miles.",
            'close' => "Write a short line or keep the whole story.",
            'label' => "The second step of adding a life event in Monica, the details of time together: a walk in the Hudson Highlands, New York, on 15 May 2010. The description is being written: six miles, and Chandler carried both twins for the last two. Ross explained the rock formations the whole way up. Lunch at the ridge.",
            'heading' => "Time together",
            'step' => "Step 2 of 2 · The details",
            'what' => ['label' => "What happened", 'value' => "A walk in the Hudson Highlands"],
            'when' => ['label' => "When", 'value' => "15 May 2010"],
            'where' => ['label' => "Where", 'value' => "Hudson Highlands, New York"],
            'description' => ['label' => "Description", 'value' => "Six miles, and Chandler carried both twins for the last two. Ross explained the rock formations the whole way up. Lunch at the ridge."],
            'back' => "Back",
            'add' => "Add the life event",
        ],

        'years' => [
            'title' => "Look back, year by year.",
            'body' => [
                "Your vault’s timeline brings the events you recorded together, with the most recent first and older entries grouped by year.",
                "Follow the story from swimming lessons to the first day of school. Open a person’s page to see the events they took part in.",
            ],
            'close' => "The dates give you the order. Your notes bring the memories back.",
            'label' => "A timeline in Monica, most recent first, grouped by year. 2010: a walk in the Hudson Highlands on 15 May. 2009: the twins start kindergarten on 8 September, and Erica breaks her arm on 11 June. 2008: swimming lessons on 17 July. Each entry has its place and a note.",
            // Newest first. Each event's icon and colour is in the template,
            // in this order.
            'years' => [
                ['year' => "2010", 'count' => "1 entry", 'events' => [
                    ['title' => "A walk in the Hudson Highlands", 'date' => "15/05", 'place' => "Hudson Highlands, New York", 'note' => "Six miles, and Chandler carried both twins for the last two."],
                ]],
                ['year' => "2009", 'count' => "2 entries", 'events' => [
                    ['title' => "The twins start kindergarten", 'date' => "08/09", 'place' => "An elementary school, Westchester", 'note' => "Jack and Judy drove up to see them go in."],
                    ['title' => "Erica breaks her arm", 'date' => "11/06", 'place' => "A hospital, Westchester", 'note' => "Off the climbing frame, trying to beat Jack to the top."],
                ]],
                ['year' => "2008", 'count' => "1 entry", 'events' => [
                    ['title' => "Swimming lessons", 'date' => "17/07", 'place' => "A pool, Westchester", 'note' => "Joey offered to teach them. Monica hired somebody."],
                ]],
            ],
        ],

        'traditions' => [
            'title' => "Make room for your own traditions.",
            'lead' => "“Meal” works. “Monica’s Thanksgiving” might fit better.",
            'body' => "Create your own event types, organise them into categories, and choose an icon and colour so they are easy to spot. You can also change the types Monica provides or switch off the ones you do not use.",
            'label' => "The life event types in Monica. Two of your own in the category Our traditions, Monica’s Thanksgiving and Christmas tree night, then Meal, supplied by Monica, and Interview, switched off. Beside them, Monica’s Thanksgiving being edited: offered when recording, a gift icon, an orange colour picked from eight, in the category Our traditions.",
            'heading' => "Life event types",
            'add' => "Add a type",
            'category' => "Our traditions",
            'types' => [
                ['name' => "Monica’s Thanksgiving"],
                ['name' => "Christmas tree night"],
                ['name' => "Meal", 'badge' => "Supplied"],
                ['name' => "Interview", 'status' => "Switched off"],
            ],
            'offered' => "Offered when recording",
            'icon' => "Icon",
            'colour' => "Colour",
            'categoryLabel' => "Category",
        ],

        'fields' => [
            'title' => "Choose the details each event holds.",
            'lead' => "A call and a Thanksgiving dinner need different details.",
            'body' => [
                "For calls with Rachel, you might keep the channel and a note about what you discussed. For Thanksgiving, you might add who hosted, what you brought, and whether Joey finished the turkey.",
                "Add your own fields, arrange them in groups, and choose which are required. Changes apply to events you record from then on; earlier entries keep the fields they were recorded with.",
            ],
            'label' => "The fields of two life event types in Monica. Call has three: channel, a dropdown of phone, video or voice call in an app; direction, a dropdown; and what you discussed, long text. Monica’s Thanksgiving has three in a group called The dinner: who hosted, a contact, required; what you brought, short text; and did Joey finish the turkey, a dropdown of yes, no or with help, being edited. Saving applies to events recorded from now on, and last year’s entry keeps its fields.",
            'count' => "3 fields",
            'required' => "Required",
            'call' => [
                'name' => "Call",
                'rows' => [
                    ['label' => "Channel", 'type' => "Dropdown", 'options' => ["Phone", "Video", "Voice call in an app"]],
                    ['label' => "Direction", 'type' => "Dropdown"],
                    ['label' => "What you discussed", 'type' => "Long text"],
                ],
            ],
            'thanksgiving' => [
                'name' => "Monica’s Thanksgiving",
                'group' => "The dinner",
                'rows' => [
                    ['label' => "Who hosted", 'type' => "Contact"],
                    ['label' => "What you brought", 'type' => "Short text"],
                    ['label' => "Did Joey finish the turkey?", 'type' => "Dropdown", 'options' => ["Yes", "No", "With help"]],
                ],
                'note' => "Applies to events you record from now on. Last year’s entry keeps its fields.",
                'save' => "Save changes",
            ],
        ],
    ],

    'relationships' => [
        // Words more than one drawing uses.
        'add' => "Add a relationship",
        'sibling' => "Sibling",

        'hero' => [
            'title' => "Understand how people are connected.",
            'intro' => "Her sister. His partner. The friend who introduced you.",
            'lede' => "Keep track of the people around someone, with relationships that make sense from both sides.",
            'cta' => "Create your account",
            'label' => "Ross Geller’s relationships in Monica, 8 of them. Family: Monica Geller, his sister; Jack Geller, his father; Judy Geller, his mother; and Emma Geller-Green, his daughter. Romantic: Rachel Green, his partner. Friends: Chandler Bing, Joey Tribbiani and Phoebe Buffay.",
            'count' => "8 relationships",
            // The people in each group are in the template, in this order.
            'groups' => [
                ['title' => "Family", 'roles' => ["Sister", "Father", "Mother", "Daughter"]],
                ['title' => "Romantic", 'roles' => ["Partner"]],
                ['title' => "Friends", 'roles' => ["Friend", "Friend", "Friend"]],
            ],
        ],

        'sides' => [
            'title' => "Ross’s sister is Monica. Monica’s brother is Ross.",
            'lead' => "Add a relationship once, and Monica shows it on both people’s pages.",
            'body' => "Choose the type, check who holds each role, and link the two people. Family, friends, partners and colleagues all have a place.",
            'label' => "Adding a relationship in Monica. The type is sibling on both sides, Ross Geller is one sibling and Monica Geller is being chosen as the other, with a button to swap the two roles. Below it, the result on both pages: on Ross’s page, Monica Geller, his sister; on Monica’s page, Ross Geller, her brother.",
            'typeLabel' => "Relationship type",
            'type' => "Sibling ↔ Sibling",
            'swap' => "Swap the two roles",
            'cancel' => "Cancel",
            'submit' => "Add relationship",
            // One card per person, Ross's first.
            'pages' => [
                ['title' => "On Ross’s page", 'role' => "Sister"],
                ['title' => "On Monica’s page", 'role' => "Brother"],
            ],
        ],

        'tree' => [
            'title' => "Some connections are easier to see.",
            'body' => [
                "A family tree brings parents, partners and children together, so you can follow the connections without piecing them together from notes.",
                "Open Ross’s page to see where Monica, his parents and Emma fit into the picture. His immediate family is also shown on his overview.",
            ],
            'label' => "Ross Geller’s family tree in Monica: his parents Jack and Judy Geller above him, his sister Monica Geller and his partner Rachel Green beside him, and his daughter Emma Geller-Green below. Only parentage and partnerships are drawn. Beside it, his immediate family on his overview: his parents Jack, 68, and Judy, 66; his sister Monica, 57; his current partner Rachel, 57; and his daughter Emma, 24.",
            'heading' => "Family tree",
            'note' => "Only parentage and partnerships are drawn here. Friends and colleagues stay in the list.",
            'family' => "Immediate family",
            'add' => "Add",
            'groups' => ["Parents", "Siblings", "Current partner", "Children"],
        ],

        'unknown' => [
            'title' => "You do not need to know everybody yet.",
            'lead' => "Joey mentioned a sister. You want to remember the connection, even if you have never met her.",
            'body' => [
                "Choose someone already in Monica, add someone by name, or record an unnamed person when all you know is their role.",
                "You can keep someone as a partial contact, outside your main contact list, when you only need them for the connection.",
            ],
            'label' => "Adding a relationship to Joey Tribbiani in Monica: a sibling, with three ways to say who. I do not know their name is selected, which records the role and nothing else. The others are I know their name, and choose someone already written down. Below, an unticked box to create a contact record for this person.",
            'subtitle' => "Say how somebody is connected to Joey Tribbiani.",
            // The first is the one selected.
            'options' => [
                ['title' => "I do not know their name", 'hint' => "Records the role and nothing else"],
                ['title' => "I know their name", 'hint' => "A first name on its own is enough"],
                ['title' => "Choose someone already written down", 'hint' => "Links two people you already keep"],
            ],
            'record' => [
                'title' => "Create a contact record for this person",
                'hint' => "Leave it off and they stay out of your list of people, with a page of their own all the same.",
            ],
        ],

        'history' => [
            'title' => "Relationships have a history.",
            'lead' => "People get together. They separate. Connections change.",
            'body' => "Record when a relationship started or ended, and keep past relationships alongside current ones. Ross’s former partners remain part of his story.",
            'label' => "Ross Geller’s romantic history in Monica. Current: Rachel Green, his partner since 6 May 2004. Past, both ended: Emily Waltham, his spouse from 1998 to 1999, and Carol Willick, his spouse from 1987 to 1993. Beside it, the dates of his marriage to Emily being entered: started 1998, ended 1999.",
            'heading' => "Romantic history",
            'current' => "Current",
            'past' => "Past",
            // The people are in the template, in this order: Rachel, Emily, Carol.
            'partners' => ["Partner · since 6 May 2004", "Spouse · 1998 to 1999", "Spouse · 1987 to 1993"],
            'ended' => "Ended",
            'started' => "Started",
            'endedLabel' => "Ended",
            'optional' => "optional",
        ],

        'types' => [
            'title' => "Use the words that fit.",
            'lead' => "“Friend” is a start. Sometimes “Roommate” says more.",
            'body' => [
                "Create your own relationship types and organise them into categories. Choose whether the relationship reads the same from both sides, like Monica and Rachel being roommates, or differently, like a godparent and godchild.",
                "You can also adjust the wording and order of existing types, and stop offering ones you no longer use without removing the relationships already recorded.",
            ],
            'label' => "The relationship types in Monica. In Friends, supplied with your account: Friend, supplied; Roommate, your own; and Pen pal, no longer offered. In Godparents, your own category: Godparent and godchild, your own. Beside them, Roommate being edited: it reads the same from both sides, so Monica Geller is Rachel Green’s roommate, and Rachel Green is Monica Geller’s roommate.",
            'heading' => "Relationship types",
            'add' => "Add a type",
            'categories' => [
                ['name' => "Friends", 'note' => "Supplied with your account", 'types' => [
                    ['name' => "Friend", 'pair' => "Friend ↔ Friend", 'badge' => "Supplied"],
                    ['name' => "Roommate", 'pair' => "Roommate ↔ Roommate", 'badge' => "Yours"],
                    ['name' => "Pen pal", 'pair' => "Pen pal ↔ Pen pal", 'badge' => "Not offered"],
                ]],
                ['name' => "Godparents", 'note' => "Your category", 'types' => [
                    ['name' => "Godparent / Godchild", 'pair' => "Godparent → Godchild", 'badge' => "Yours"],
                ]],
            ],
            'reads' => "How it reads",
            // The first is the one selected.
            'options' => [
                ['title' => "The same from both sides", 'hint' => "Both people are described with the same word, as with Sibling or Friend."],
                ['title' => "Different on each side", 'hint' => "Each person is described with a different word, as with Parent and Child."],
            ],
            'roleLabel' => "Role, on both sides",
            'role' => "Roommate",
            'sentences' => ["Monica Geller is Rachel Green’s roommate.", "Rachel Green is Monica Geller’s roommate."],
        ],
    ],

    'footer' => [
        // The closing line ends every page, so it is two short sentences rather
        // than a pitch. Each one is its own line.
        'closing' => ["Monica remembers.", "You go outside."],
        'start' => "Start using Monica",
        'github' => "View on GitHub",

        'tagline' => "Open source personal CRM. AGPL-3.0.",
        'productLabel' => "Product",
        'developersLabel' => "Developers",
        'companyLabel' => "Company",
        'personalCrm' => "What is a personal CRM?",
        'changelog' => "Changelog",
        'mcp' => "MCP",
        'api' => "API",
        'contactSales' => "Contact sales",
        'privacy' => "Privacy",
        'terms' => "Terms",
        'team' => "Team",

        'art' => "A meadow by a lake, with pandas lounging in the grass and napping in the trees",
        'copyright' => "© :year Monica. No pandas were tracked.",
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
        'rssFeed' => "RSS feed",
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
