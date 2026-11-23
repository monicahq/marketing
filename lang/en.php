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

        /**
         * The page names in a breadcrumb trail: one per route key, plus the
         * root, the label a page of the blog index gets, and `label`, which names
         * the trail under the header to a screen reader.
         *
         * Kept apart from `nav` on purpose. A nav label is written to be
         * scanned in a bar four items wide; a breadcrumb is read out in a
         * search result and can afford to say what the page is.
         */
        'breadcrumb' => [
            'home' => "Home",
            'v3' => "Monica v3",
            'pricing' => "Pricing",
            'blog' => "Blog",
            'terms' => "Terms of use",
            'team' => "Team",
            'support' => "Support",
            'about' => "About Monica",
            'privacy' => "Privacy policy",
            'personalCrm' => "Personal CRM guide",
            'templates' => "Contact templates",
            'details' => "Contact details",
            'reminders' => "Reminders",
            'timeline' => "Timeline",
            'people' => "People",
            'relationships' => "Relationships",
            'vaults' => "Vaults",
            'sharing' => "Sharing",
            'api' => "API and MCP",
            'privacyFeatures' => "Privacy and security",
            'languages' => "Languages and formats",
            'aiMemory' => "AI memory",
            'personalData' => "Personal data management",
            'mcpServer' => "MCP server",
            'handbook' => "Handbook",
            'contribute' => "Contribute",
            'page' => "Page :number",
            'label' => "Breadcrumb",
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
            'title' => "Open-source personal CRM and personal database — Monica",
            'description' => "Monica is your personal database: document your contacts, everything you own, and everything you need to remember. Private, open source, self-hostable.",
            'ogTitle' => "Your people. Your things. Your memories — Monica",
            'ogDescription' => "Keep your contacts, belongings and everyday details together in Monica. A personal database you can use yourself or connect to your AI assistants.",

            /**
             * The page's own social card, drawn by `npm run og` into
             * source/og/home-<locale>.jpg. `accent` is the italic second line,
             * `background` a file in scripts/og/backgrounds/ (the filing
             * cabinet when left out), and `alt` describes the finished image.
             */
            'ogImage' => [
                'eyebrow' => "Personal CRM + AI memory",
                'title' => "Your people. Your things.",
                'accent' => "Your memories.",
                'description' => "Contacts, belongings and everyday details, kept together for you and your AI assistants.",
                'alt' => "Monica: your people, your things, your memories. A panda files photos in a wooden cabinet, beside cards for contacts, notes and memories.",
            ],
        ],

        'pricing' => [
            'title' => "Monica pricing: hosted plans and free self-hosting",
            'description' => "Self-host Monica for free, or choose hosting for \$9 USD/month, \$90/year or \$250 once. Every plan includes all features, with no per-contact fees.",
            'ogTitle' => "Your server or ours. Your choice — Monica",
            'ogDescription' => "Host Monica yourself for free, or choose monthly, yearly or lifetime hosting. All plans include every feature, with no per-contact fees.",

            'ogImage' => [
                'eyebrow' => "Pricing",
                'title' => "Your server or ours.",
                'accent' => "Your choice.",
                'description' => "Host Monica yourself for free, or choose monthly, yearly or lifetime hosting. Every feature in every plan.",
            ],
        ],

        'privacy' => [
            'title' => "Privacy policy — Monica",
            'description' => "How Monica handles your data: what we collect, where it is stored, who can see it, and what happens when you close your account. No ads, no trackers, no data resale.",
            'ogTitle' => "Privacy policy — Monica",
            'ogDescription' => "How Monica handles your data: what we collect, where it is stored, who can see it, and what happens when you close your account. No ads, no trackers, no data resale.",

            'ogImage' => [
                'eyebrow' => "Legal",
                'title' => "Privacy policy",
                'description' => "What we collect, where it is stored and who can see it. No ads, no trackers, no data resale.",
            ],
        ],

        'about' => [
            'title' => "About Monica: an independent open-source project",
            'description' => "Meet Régis and Alexis, the people behind Monica. Learn how this independent, open-source personal database started and what guides its development.",
            'ogTitle' => "Two people, one personal database — Monica",
            'ogDescription' => "Meet the people behind Monica, see how the project started and learn why it stays open source, independent and free of advertising.",

            'ogImage' => [
                'eyebrow' => "About Monica",
                'title' => "Two people,",
                'accent' => "one personal database.",
                'description' => "How the project started, and why it stays open source, independent and free of advertising.",
            ],
        ],

        'team' => [
            'title' => "Team — Monica",
            'description' => "Monica is built by two people in Montreal, with hundreds of open-source contributors. Why we build a personal CRM that does not harm human relationships.",
            'ogTitle' => "Monica is a team of 2. With hundreds of contributors.",
            'ogDescription' => "Monica is built by two people in Montreal, with hundreds of open-source contributors. Why we build a personal CRM that does not harm human relationships.",

            'ogImage' => [
                'eyebrow' => "The team",
                'title' => "A team of two.",
                'accent' => "With hundreds of contributors.",
                'description' => "Built in Montreal, as a personal CRM that does not harm human relationships.",
            ],
        ],

        'contribute' => [
            'title' => "Contribute to Monica: code, docs and translations",
            'description' => "Help build Monica with code, documentation, translations or fixes. Find practical ways to contribute to an independent, open-source personal database.",
            'ogTitle' => "Help us keep Monica going.",
            'ogDescription' => "Good documentation, thoughtful translations and useful fixes all help. Find a way to contribute to Monica, whether or not you write code.",

            'ogImage' => [
                'eyebrow' => "Contribute",
                'title' => "Help us keep",
                'accent' => "Monica going.",
                'description' => "Documentation, translations and fixes all help, whether or not you write code.",
            ],
        ],

        'support' => [
            'title' => "Monica support and documentation",
            'description' => "Write to the people who build Monica, Monday to Friday, or start with the documentation: using Monica, the API, MCP, and CardDAV and CalDAV.",
            'ogTitle' => "Help with Monica, from the people who build it",
            'ogDescription' => "Write to us about anything that does not work the way you expect, or start with the documentation that ships inside the app.",

            'ogImage' => [
                'eyebrow' => "Support",
                'title' => "Help with Monica,",
                'accent' => "from the people who build it.",
                'description' => "Write to us about anything that does not work the way you expect.",
            ],
        ],

        'terms' => [
            'title' => "Terms of use — Monica",
            'description' => "The terms of use for Monica, the open-source personal database: what the service covers, your rights over your data, your responsibilities, and the legal small print.",
            'ogTitle' => "Terms of use — Monica",
            'ogDescription' => "The terms of use for Monica, the open-source personal database: what the service covers, your rights over your data, your responsibilities, and the legal small print.",

            'ogImage' => [
                'eyebrow' => "Legal",
                'title' => "Terms of use",
                'description' => "What the service covers, your rights over your data, and your responsibilities.",
            ],
        ],

        'blog' => [
            'title' => "Monica blog: release notes and product decisions",
            'description' => "What we ship, why we build it that way, and what running a small open-source company actually looks like. Written by the people making Monica.",
            'ogTitle' => "Building Monica, one decision at a time",
            'ogDescription' => "Release notes, product decisions and the occasional lesson from running a small open-source project. Written by the people building Monica.",

            'ogImage' => [
                'eyebrow' => "Blog",
                'title' => "Building Monica,",
                'accent' => "one decision at a time.",
                'description' => "Release notes, product decisions and the occasional lesson from running a small open-source project.",
            ],
        ],

        // A post brings its own title and description, so this is only the
        // frame the site puts around them.
        'post' => [
            'title' => ":title — the Monica blog",
        ],

        'handbook' => [
            'title' => "The Monica handbook: how the project is run",
            'description' => "What the project is, the principles behind it, how it makes money, why it is open source, and how marketing and priorities are decided. Written by its maintainer.",
            'ogTitle' => "The Monica handbook",
            'ogDescription' => "How Monica is built and run: the principles, tradeoffs and everyday decisions behind an independent open-source project.",

            'ogImage' => [
                'eyebrow' => "Handbook",
                'title' => "How Monica",
                'accent' => "is built and run.",
                'description' => "The principles, tradeoffs and everyday decisions behind an independent open-source project.",
            ],
        ],

        // Like a post, an article brings its own title and description.
        'handbookArticle' => [
            'title' => ":title — the Monica handbook",
        ],

        // Page 2 of a list is not the list. Without this, four pages of the
        // blog compete for one result under one title.
        'paginated' => ":title (page :page of :total)",
        'paginatedDescription' => "Browse page :page of :total of the Monica blog: release notes, product decisions and notes from the people building Monica.",

        'v3' => [
            'title' => "Monica v3 — rebuilt for the next ten years",
            'description' => "Explore the Monica v3 rebuild: custom records, a connected journal, a complete API and a better mobile experience. Open source, coming before the end of 2026.",
            'ogTitle' => "Monica v3: what we are rebuilding",
            'ogDescription' => "See what is coming in Monica v3: records you design, a connected journal, a complete API and a better mobile experience. Still open source.",

            'ogImage' => [
                'eyebrow' => "What comes next",
                'title' => "Monica v3:",
                'accent' => "what we are rebuilding.",
                'description' => "Records you design, a connected journal, a complete API and a better mobile experience.",
            ],
        ],

        'templates' => [
            'title' => "Contact templates and custom fields — Monica",
            'description' => "Build contact templates with your own fields, sections and tabs. Different templates for friends, family and work, versions you publish when ready, and sections you can share.",
            'ogTitle' => "Your contacts, your way — Monica",
            'ogDescription' => "Remember what matters to you. Build contact templates with your own fields, sections and tabs, so every person’s page has room for the details you want to keep.",

            'ogImage' => [
                'eyebrow' => "Templates",
                'title' => "Your contacts,",
                'accent' => "your way.",
                'description' => "Build contact templates with your own fields, sections and tabs.",
            ],
        ],

        'details' => [
            'title' => "Personal contact management software — Monica",
            'description' => "Keep the details people share with you together: what they told you last time, the little things, the people around them, and the moments you shared.",
            'ogTitle' => "Remember the details that matter — Monica",
            'ogDescription' => "Their number is in your phone. The name of their new partner, their favourite meal, and what they told you last time might be harder to find.",

            'ogImage' => [
                'eyebrow' => "Details",
                'title' => "Remember the details",
                'accent' => "that matter.",
                'description' => "The name of their new partner, their favourite meal, and what they told you last time.",
            ],
        ],

        'reminders' => [
            'title' => "Birthday reminders and personal follow-ups — Monica",
            'description' => "Set a reminder for a birthday, a big day or a friend you mean to call. Once or on a rhythm, in their time zone, by email or in Monica, and a record of what you remembered.",
            'ogTitle' => "Remember to reach out — Monica",
            'ogDescription' => "A birthday. A big day. A friend you have been meaning to call.",

            'ogImage' => [
                'eyebrow' => "Reminders",
                'title' => "Remember to",
                'accent' => "reach out.",
                'description' => "A birthday. A big day. A friend you have been meaning to call.",
            ],
        ],

        'timeline' => [
            'title' => "Personal timeline and life events — Monica",
            'description' => "Record what happened, who was there and the details you want to keep. Life events on everyone’s timeline at once, your own event types and fields, and a look back year by year.",
            'ogTitle' => "Keep the moments worth remembering — Monica",
            'ogDescription' => "Record what happened, who was there, and the details you want to keep. Monica brings those moments together in a timeline you can return to.",

            'ogImage' => [
                'eyebrow' => "Timeline",
                'title' => "Keep the moments",
                'accent' => "worth remembering.",
                'description' => "Record what happened, who was there, and the details you want to keep.",
            ],
        ],

        'people' => [
            'title' => "Personal contact management for everyday life — Monica",
            'description' => "Keep contact details, relationships, shared moments and follow-ups together. A personal CRM you can use yourself or with compatible AI assistants.",
            'ogTitle' => "The people in your life, with a little more context — Monica",
            'ogDescription' => "Names, connections and the moments you share. Give your relationships a place in your personal database.",
            'ogImage' => [
                'eyebrow' => "People",
                'title' => "Remember the person.",
                'description' => "Details, relationships and shared moments.",
                'alt' => "The Monica panda filing cards in a cabinet, with the words “Remember the person.”",
            ],
        ],

        'relationships' => [
            'title' => "Personal relationships and family connections — Monica",
            'description' => "Track family, friends and partners with two-way relationships, family trees and relationship history. Define relationship types that fit the people in your life.",
            'ogTitle' => "Understand how people are connected — Monica",
            'ogDescription' => "Keep track of the people around someone, with relationships that make sense from both sides.",

            'ogImage' => [
                'eyebrow' => "Relationships",
                'title' => "Understand how people",
                'accent' => "are connected.",
                'description' => "Keep track of the people around someone, with relationships that make sense from both sides.",
            ],
        ],

        'vaults' => [
            'title' => "Organize your contacts in separate vaults — Monica",
            'description' => "Keep friends, family and colleagues together or give each group its own space. Each vault has its own contacts, timeline, reminders and default template, all inside your account.",
            'ogTitle' => "A place for each part of your life — Monica",
            'ogDescription' => "Keep them together or give each group its own space. Vaults help you organise Monica around your life.",

            'ogImage' => [
                'eyebrow' => "Vaults",
                'title' => "A place for each",
                'accent' => "part of your life.",
                'description' => "Keep everything together, or give each group its own space.",
            ],
        ],

        'sharing' => [
            'title' => "Share selected contact details privately — Monica",
            'description' => "Share selected sections of a contact’s page through a read-only link. Choose what it shows, give it an end date or a password, see when it was opened, and revoke it at any time.",
            'ogTitle' => "Share only what you choose — Monica",
            'ogDescription' => "Share selected sections of a contact’s page through a read-only link. Choose what it shows, how long it works, and when to stop access.",

            'ogImage' => [
                'eyebrow' => "Sharing",
                'title' => "Share only",
                'accent' => "what you choose.",
                'description' => "Read-only links to the sections of a contact's page you pick, for as long as you decide.",
            ],
        ],

        'api' => [
            'title' => "Personal CRM API and assistant integrations — Monica",
            'description' => "Use Monica with Claude, ChatGPT, Gemini or your own scripts. Connect an assistant through Monica’s MCP server, or build your own connection with the JSON API and an API key.",
            'ogTitle' => "Your contacts, connected to your tools — Monica",
            'ogDescription' => "Use Monica with Claude, ChatGPT, Gemini or your own scripts. Look up a contact, record a moment, or set a reminder from the tools you already use.",

            'ogImage' => [
                'eyebrow' => "API and MCP",
                'title' => "Your contacts,",
                'accent' => "connected to your tools.",
                'description' => "Use Monica with Claude, ChatGPT, Gemini or your own scripts.",
            ],
        ],

        'privacyFeatures' => [
            'title' => "Personal CRM privacy and security controls — Monica",
            'description' => "Control sensitive fields, shared sections and assistant access in Monica. Protect your account with passkeys and two-factor authentication, and review its activity.",
            'ogTitle' => "Personal details deserve a private place — Monica",
            'ogDescription' => "You record things about people because they matter to you. Choose what you keep, what you share, and which tools can access it.",

            'ogImage' => [
                'eyebrow' => "Privacy",
                'title' => "Personal details deserve",
                'accent' => "a private place.",
                'description' => "Choose what you keep, what you share, and which tools can access it.",
            ],
        ],

        'languages' => [
            'title' => "Multilingual personal CRM and name formats — Monica",
            'description' => "Use Monica in more than 30 languages. Write names in the order and forms people use, choose a display name, and set your own date, time, number and time zone preferences.",
            'ogTitle' => "Your language. Their names — Monica",
            'ogDescription' => "Use Monica in a language you feel at home in. Keep people’s names in the forms they use, and choose how dates, times and numbers appear.",

            'ogImage' => [
                'eyebrow' => "Languages",
                'title' => "Your language.",
                'accent' => "Their names.",
                'description' => "Use Monica in a language you feel at home in, and keep names the way people write them.",
            ],
        ],

        'aiMemory' => [
            'title' => "Personal AI memory for your assistants — Monica",
            'description' => "Monica gives Claude, ChatGPT and other compatible assistants a shared, persistent personal memory through its MCP server. Open source, self-hostable, and usable without AI.",
            'ogTitle' => "Your assistants may change. Your memory stays yours — Monica",
            'ogDescription' => "Give compatible AI assistants a shared place to remember your people and everyday details. Open Monica to organize those memories yourself, with or without AI.",

            'ogImage' => [
                'eyebrow' => "AI memory",
                'title' => "Your assistants may change.",
                'accent' => "Your memory stays yours.",
                'description' => "A shared place where compatible AI assistants remember your people and everyday details.",
            ],
        ],

        'mcpServer' => [
            'title' => "Monica MCP server for your personal data",
            'description' => "Connect AI assistants to Monica’s open-source personal database with a remote MCP server, 236 tools, OAuth or API keys, and self-hosting support.",
            'ogTitle' => "Your personal data, connected to your AI agents — Monica",
            'ogDescription' => "Connect a compatible assistant to Monica through MCP. Read and update structured personal records with scoped access, using OAuth or an API key.",

            'ogImage' => [
                'eyebrow' => "MCP server",
                'title' => "Your personal data,",
                'accent' => "connected to your AI agents.",
                'description' => "Read and update structured personal records with scoped access, through OAuth or an API key.",
            ],
        ],

        'personalData' => [
            'title' => "Personal information management software — Monica",
            'description' => "Organize your contacts, belongings, notes, life events and everyday details in one personal database. Meet Monica, the open-source digital life organizer.",
            'ogTitle' => "A home for the details of your life — Monica",
            'ogDescription' => "People, notes, belongings, important moments, and reminders. One personal place for everything you don't want to forget.",

            'ogImage' => [
                'eyebrow' => "Personal data management",
                'title' => "A home for the details",
                'accent' => "of your life.",
                'description' => "People, notes, belongings, important moments and reminders, in one personal place.",
            ],
        ],

        'personalCrm' => [
            'title' => "What is a personal CRM? A practical guide — Monica",
            'description' => "What a personal CRM is, how it differs from an address book and sales CRM, what to store, the privacy tradeoffs, and how to choose the right approach.",
            'ogTitle' => "What is a personal CRM, and would you use one? — Monica",
            'ogDescription' => "An address book remembers a number. A personal CRM helps you remember the person. Learn what to keep, what to leave out and how to choose one.",

            'ogImage' => [
                'eyebrow' => "Guide",
                'title' => "What is a personal CRM,",
                'accent' => "and would you use one?",
                'description' => "An address book remembers a number. A personal CRM helps you remember the person.",
            ],
        ],
    ],

    // The cookie notice in the bottom right corner (`_partials/cookie-notice`).
    'cookies' => [
        'label' => "Cookie notice",
        'title' => "Legally-required cookie banner",
        'body' => "Monica doesn’t stalk your relationships. No third-party cookies, no creepy ad trackers, just a tiny in-house cookie.",
        'private' => "Your private life stays private.",
        'europe' => "Europe will be happy",
        'close' => "Close the cookie notice",
    ],

    'nav' => [
        'label' => "Main",
        'product' => "Product",
        'personalCrm' => "What is a personal CRM",
        'v3' => "Monica v3",
        'features' => "Features",
        'pricing' => "Pricing",
        'blog' => "Blog",
        'handbook' => "Handbook",
        'docs' => "Documentation",
        'contribute' => "Contribute",
        'signIn' => "Log in",
        'toDark' => "Switch to dark mode",
        'toLight' => "Switch to light mode",
        'github' => ":count stars, Monica on GitHub",
        'getStarted' => "Sign up",
        'stars' => ":count stars",

        // The features menu: people, possessions and knowledge, what every space has, and a card for the MCP server.
        'menu' => [
            'groups' => [
                [
                    'icon' => 'people',
                    'title' => "People",
                    'body' => "Everyone you know, and what you know about them.",
                    'items' => [
                        ['icon' => 'profile', 'title' => "Contact details", 'body' => "Phones, addresses, birthdays, pets."],
                        ['icon' => 'relationship', 'title' => "Relationships", 'body' => "Family trees, and who knows whom."],
                        ['icon' => 'reminder', 'title' => "Timeline & reminders", 'body' => "Log it once, hear about it on time."],
                    ],
                ],
                [
                    'icon' => 'tag',
                    'title' => "Possessions",
                    'body' => "What you own, where it is, and who has it.",
                    'items' => [
                        ['icon' => 'layers', 'title' => "Inventory & collections", 'body' => "Books, records, tools, the lot."],
                        ['icon' => 'place', 'title' => "Locations", 'body' => "Which room, which shelf, which box."],
                        ['icon' => 'calendar-repeat', 'title' => "Maintenance & loans", 'body' => "Service dates, and who borrowed what."],
                    ],
                ],
                [
                    'icon' => 'journal',
                    'title' => "Knowledge",
                    'body' => "What you have learned, written down where you will find it.",
                    'items' => [
                        ['icon' => 'note', 'title' => "Notes", 'body' => "Write it down, link it to anyone."],
                        ['icon' => 'tasks', 'title' => "Lists", 'body' => "Gift ideas, packing, things to do."],
                        ['icon' => 'file', 'title' => "Folders & organisation", 'body' => "Group things the way you think."],
                    ],
                ],
            ],
            'spaces' => [
                'label' => "In every space",
                'items' => [
                    ['icon' => 'divider', 'title' => "Templates"],
                    ['icon' => 'vault', 'title' => "Vaults"],
                    ['icon' => 'link', 'title' => "Sharing"],
                    ['icon' => 'text', 'title' => "Languages"],
                    ['icon' => 'lock', 'title' => "Privacy"],
                ],
            ],
            'assistant' => [
                'label' => "New",
                'title' => "Use Monica with your AI assistant",
                'body' => "Ask about the people and things you keep in Monica. You choose which vaults it can read.",
                'question' => "When is Lucie’s birthday?",
                'answer' => "14 March, in three weeks. In January she mentioned wanting a new rain jacket.",
                'cta' => "Connect your assistant",
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
            'title' => "Monica is your personal CRM and database.",
            'subtitle' => "Store the people you know, the things you own, and everything you want to remember.",
            'lede' => "Private by design. Open source. Self-hostable. No ads, no data resale, no awkward “engagement” notifications.",
            'start' => "Start using Monica",
            'github' => "View on GitHub",
            'sales' => "Contact sales",
            'salesJoke' => "Just kidding.",
            'salesTruth' => "We have no sales team.",
        ],

        'product' => [
            // The product picture under the headline. The sidebar switches
            // between six real screens; each screen is read out as its label,
            // because it is a picture of the interface rather than a working copy.
            'screensLabel' => "Screens of Monica",
            'search' => "Search",
            'docs' => "Docs",
            'marketplace' => "Marketplace",
            'admin' => "Admin space",
            'vault' => "Personal",
            'sections' => ['vault' => "This vault", 'people' => "People", 'things' => "Things", 'knowledge' => "Knowledge"],
            'nav' => [
                'dashboard' => "Dashboard",
                'reminders' => "Reminders",
                'settings' => "Vault settings",
                'people' => "People",
                'animals' => "Animals",
                'groups' => "Groups",
                'possessions' => "All possessions",
                'knowledge' => "Knowledge",
            ],
            'settingsCrumb' => "Settings",

            'dashboard' => [
                'label' => "The dashboard of the Personal vault: life events year by year, the three favourite people and who was viewed recently.",
                'add' => "Add somebody",
                'stats' => ["25 people", "1 reminder this week", "3 favourites", "0 life events in the last three months"],
                'timeline' => "Your timeline",
                'attention' => "Needs your attention",
                'addEvent' => "Add a life event",
                'with' => "With",
                'years' => [
                    [
                        'count' => "1 entry",
                        'events' => [
                            ['title' => "A walk in the Hudson Highlands", 'date' => "15/05", 'place' => "Hudson Highlands, New York", 'body' => "Six miles, and Chandler carried both twins for the last two."],
                        ],
                    ],
                    [
                        'count' => "2 entries",
                        'events' => [
                            ['title' => "The twins start kindergarten", 'date' => "08/09", 'place' => "An elementary school, Westchester", 'body' => "Jack and Judy drove up to see them go in."],
                            ['title' => "Erica breaks her arm", 'date' => "11/06", 'place' => "A hospital, Westchester", 'body' => "Off the climbing frame, trying to beat Jack to the top. One night in hospital."],
                        ],
                    ],
                    [
                        'count' => "2 entries",
                        'events' => [
                            ['title' => "Swimming lessons", 'date' => "17/07", 'place' => "A pool, Westchester", 'body' => "Joey offered to teach them. Monica hired somebody."],
                            ['title' => "The twins catch chicken pox", 'date' => "14/02", 'place' => "The house in Westchester", 'body' => "Both at once, on Valentine’s Day. Phoebe brought the oatmeal."],
                        ],
                    ],
                ],
                'favourites' => "Favourite people",
                'recent' => "Recently viewed",
                'today' => "Today",
            ],

            'reminders' => [
                'label' => "The reminders of the Personal vault: one overdue call to Chandler Bing, then the next ones coming up, including Joey’s and Phoebe’s birthdays.",
                'tabs' => ["Coming up", "Sent", "History"],
                'groupedBy' => "Grouped by",
                'byWhen' => "When it is sent",
                'byContact' => "Contact",
                'overdue' => "Overdue",
                'overdueCount' => "1 reminder",
                'upcoming' => "Upcoming",
                'upcomingCount' => "12 reminders",
                'remembered' => "I remembered",
                'forgot' => "I forgot",
                'more' => "More",
                'items' => [
                    ['month' => "Nov", 'repeat' => "Every month", 'title' => "Call about the flat on Bedford Street", 'when' => "1 day ago"],
                    ['month' => "Dec", 'repeat' => "Every month", 'title' => "Call about the flat on Bedford Street", 'when' => "4 weeks from now"],
                    ['month' => "Dec", 'repeat' => "One time", 'title' => "Ask about Tulsa", 'when' => "1 month from now"],
                    ['month' => "Jan", 'repeat' => "Every year", 'title' => "Joey’s birthday", 'when' => "1 month from now"],
                    ['month' => "Feb", 'repeat' => "Every year", 'title' => "Phoebe’s birthday", 'when' => "3 months from now"],
                ],
            ],

            'settings' => [
                'label' => "The settings of the Personal vault: its name, description and colour, the template a new contact starts from, and how to export it.",
                'title' => "Vault settings",
                'intro' => "What Personal is called, what a new contact in it starts from, how to export it, and how to delete it.",
                'nameCard' => "What this vault is called",
                'name' => "Name",
                'description' => "Description",
                'optional' => "optional",
                'descriptionValue' => "Everybody I am related to, and the people who come with them.",
                'hint' => "One or two sentences.",
                'colour' => "Colour",
                'save' => "Save changes",
                'templateCard' => "What a new contact starts from",
                'template' => "Default template",
                'templateValue' => "Version 1 (latest)",
                'exportCard' => "Export this vault",
                'exportBody' => "One file holding the contacts, entities, relationships, life events, reminders and files of this vault, with the templates they use. It can be downloaded for seven days from Export and import.",
            ],

            'people' => [
                'label' => "The people in the Personal vault: three favourites, then everybody else, with their email, phone number and when you last spoke.",
                'title' => "People",
                'add' => "Add somebody",
                'filters' => ["Everybody", "Favourites", "Partial contacts"],
                'searchNames' => "Search names and nicknames",
                'categories' => "Categories",
                'categoryNames' => ["Family", "Close friend", "Friend", "Acquaintance"],
                'show' => "Show these people",
                'columns' => ["Name", "Email", "Phone number", "Last spoke"],
                'favourites' => "Favourites",
                'everybodyElse' => "Everybody else",
                'notYet' => "Not yet",
                'phoneKinds' => ['mobile' => "Mobile", 'home' => "Home", 'work' => "Work"],
            ],

            'possessions' => [
                'label' => "The possessions in the Personal vault: seven kept at My house, room by room, with a chef’s knife set and an engagement ring featured.",
                'title' => "All possessions",
                'add' => "Add a possession",
                'summary' => "10 possessions across 6 locations, $7,285 declared.",
                'locations' => "Locations",
                'manage' => "Manage",
                'all' => "All locations",
                'house' => "My house",
                'rooms' => ["Bathroom", "Bedroom", "Kitchen", "Living room", "Storage space"],
                'noSpot' => "No specific spot",
                'count' => "Possessions",
                'declared' => "Declared value",
                'total' => "$7,285",
                'featured' => "Featured here",
                'keptAt' => "Kept at My house",
                'featuredItems' => [
                    ['title' => "Chef’s knife set", 'meta' => "Kitchen · $520", 'body' => "Monica’s, from culinary school. Chandler is not allowed to touch them."],
                    ['title' => "Engagement ring", 'meta' => "Bedroom · $4,800", 'body' => "Chandler hid it in the champagne glass first, then thought better of it."],
                ],
                'items' => [
                    ['title' => "Bottle of Château Margaux", 'meta' => "Wine · Kitchen", 'value' => "$900"],
                    ['title' => "Chef’s knife set", 'meta' => "Tools and equipment · Kitchen", 'value' => "$520"],
                    ['title' => "Dishwasher", 'meta' => "Household appliances · Kitchen", 'value' => "$650"],
                    ['title' => "Foosball table", 'meta' => "Sports and outdoors · Living room", 'value' => "$300"],
                    ['title' => "Holiday Armadillo costume", 'meta' => "Clothing and accessories · Storage space", 'value' => "$75"],
                ],
            ],

            'knowledge' => [
                'label' => "Knowledge in the Personal vault: eight folders of notes and lists, from About me to Japan trip memories and the Wi-Fi information.",
                'searchNotes' => "Search notes and lists",
                'contents' => "Contents",
                'intro' => "Every folder, note and list in Knowledge. Notes also show their headings, so you can go straight to one.",
                'summary' => "8 folders, 17 notes, 13 lists",
                'notesAndLists' => ":count notes and lists",
                'note' => "Note",
                'list' => "List of :count items",
                'edited' => "Edited 2 minutes ago",
                'folders' => [
                    [
                        'name' => "Personal",
                        'items' => [
                            ['title' => "About me", 'headings' => ["The short version", "Things people should know"]],
                            ['title' => "Favorite things", 'headings' => []],
                            ['title' => "Life goals", 'headings' => ["Work", "Home"]],
                            ['title' => "Personal preferences", 'headings' => []],
                        ],
                    ],
                    [
                        'name' => "Travel",
                        'items' => [
                            ['title' => "Countries visited", 'headings' => []],
                            ['title' => "Japan trip memories", 'headings' => ["Tokyo", "Kyoto"]],
                            ['title' => "Places to visit", 'headings' => []],
                            ['title' => "Travel wishlist", 'headings' => []],
                        ],
                    ],
                    [
                        'name' => "Home",
                        'items' => [
                            ['title' => "Appliances", 'headings' => []],
                            ['title' => "Home maintenance", 'headings' => ["This season"]],
                            ['title' => "Maintenance schedule", 'headings' => []],
                            ['title' => "Wi-Fi information", 'headings' => []],
                        ],
                    ],
                    [
                        'name' => "Health and fitness",
                        'items' => [
                            ['title' => "Health goals", 'headings' => []],
                            ['title' => "Workout history", 'headings' => []],
                            ['title' => "Workout routine", 'headings' => []],
                        ],
                    ],
                    [
                        'name' => "Books and movies",
                        'items' => [
                            ['title' => "Favorite books", 'headings' => []],
                            ['title' => "Movie recommendations", 'headings' => []],
                            ['title' => "Movies watched", 'headings' => []],
                            ['title' => "Reading list", 'headings' => []],
                        ],
                    ],
                ],
            ],

            'profile' => [
                'label' => "Chandler Bing’s page: his life events, his immediate family, the groups he belongs to and his reminders.",
                'pick' => "Chandler Bing’s page",
                'edit' => "Edit contact",
                'category' => "Category",
                'categoryValue' => "Family",
                'birthday' => "Birthday",
                'birthdayValue' => "08/04/1968",
                'lastInTouch' => "Last in touch",
                'never' => "never",
                'reminders' => "Reminders",
                'awaiting' => "1 awaiting an answer",
                'tabs' => ["Overview", "General", "Ways to connect", "Information", "Relationships"],
                'timeline' => "Timeline",
                // 2010 and 2009 are the dashboard's own events; 2007 is his alone.
                'earlier' => [
                    'count' => "2 entries",
                    'events' => [
                        ['title' => "The twins start preschool", 'date' => "05/09", 'place' => "A preschool, Westchester", 'body' => "Monica labelled everything. Chandler cried in the car."],
                        ['title' => "The family holiday in Montauk", 'date' => "12/07", 'place' => "Montauk, New York", 'body' => "The same beach house, ten years on. Nobody got stung."],
                    ],
                ],
                'familyTitle' => "Immediate family",
                'add' => "Add",
                'children' => "Children",
                'partner' => "Current partner",
                'groupsTitle' => "Groups",
                'addToGroup' => "Add to a group",
                'groups' => [
                    ['name' => "Central Perk regulars", 'meta' => "Since 22/09/1994"],
                    ['name' => "Apartment 20", 'meta' => "04/11/1999 to 06/05/2004"],
                    ['name' => "Apartment 19", 'meta' => "Roommate · Until 04/11/1999"],
                ],
                'left' => "Left",
                'reminderTabs' => ["All", "Overdue", "Today", "Upcoming"],
                'overdue' => "Overdue",
                'reminderWhen' => "11/11/2026 · yesterday",
            ],

            'group' => [
                'label' => "The page of the Central Perk regulars group: its seven members, a note to write about it, and what the group did together since 1994.",
                'title' => "Central Perk regulars",
                'description' => "The six of them on the orange couch, and the man behind the counter.",
                'members' => "7 people belong to it",
                'since' => "Since 22/09/1994",
                'edit' => "Edit the group",
                'tabs' => ["Overview", "Members", "Files"],
                'activity' => "Activity",
                'note' => "Note",
                'question' => "What do you want to remember about the group?",
                'placeholder' => "Where they usually meet, who has the spare key, what to bring.",
                'savedOn' => "Saved on the group only. It does not appear on anybody’s own page.",
                'save' => "Save the note",
                'remindersEmpty' => "Nothing to be reminded of. Something like organising the next game, or sending the holiday card.",
                'files' => "Files",
                'filesEmpty' => "A group photo, a schedule or a registration form, kept with the group.",
                'history' => "Shared history",
                'historyHint' => "What the group did together and what you noted about it, newest first.",
                // Newest first: 2004, 1999, 1994. A note has no place and nobody "with".
                'years' => [
                    [
                        'count' => "2 entries",
                        'events' => [
                            ['title' => "One last coffee on the orange couch", 'date' => "06/05", 'place' => "Central Perk, New York", 'body' => "Monica and Chandler moved out the same week. Gunther kept their mugs."],
                            ['title' => "Phoebe’s Thursday set", 'date' => "15/03", 'place' => "", 'body' => "Smelly Cat is the closer. Asking for it before then is not welcome."],
                        ],
                    ],
                    [
                        'count' => "1 entry",
                        'events' => [
                            ['title' => "Joey’s first review, read out loud", 'date' => "12/03", 'place' => "Central Perk, New York", 'body' => "Rachel read it twice. Joey framed the good half."],
                        ],
                    ],
                    [
                        'count' => "1 entry",
                        'events' => [
                            ['title' => "The first coffee together", 'date' => "22/09", 'place' => "Central Perk, New York", 'body' => "Rachel came in wearing a wedding dress. Everybody stayed."],
                        ],
                    ],
                ],
            ],
        ],

        'awards' => [
            'label' => "Strangers on the internet approve",
            'github' => "GitHub Trending: #1 Repository of the Day",
            'hn' => "Hacker News: #65 Most Voted Links of All Time",
            'ph' => "Product Hunt: #4 Product of the Day",
            'docker' => "Docker Hub: 14M downloads",
            // The popover under the GitHub badge, on hover or focus.
            'trendingPopover' => "We have reached Repo of the day, Repo of the week, Repo of the month and Repo of the year multiple times. It’s super cool, and used as an opening line on a date. Never works.",
            // The popover under the Hacker News badge: two paragraphs.
            'hnPopover' => [
                "If you don’t reach the first page of Hacker News, you haven’t really made it.",
                "We stayed two days as the #1 story on the homepage. Yes, it’s true.",
            ],
            // The popover under the Product Hunt badge, which links nowhere on purpose.
            'phPopover' => "Sorry, this link isn’t clickable. We were really popular on that site, but we hate Product Hunt and don’t want to send them any traffic.",
            // The popover under the Docker Hub badge.
            'dockerPopover' => "We are one of the few official Docker images. This is the holy grail for developers.",
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
            'reply' => "Done. Added “Coffee” to Chandler’s timeline for 11 October.",
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
                    ['name' => "Chandler Bing", 'what' => "pay back the rent", 'when' => "six years overdue"],
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
            'lifetime' => "$250",
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
     * The people in the drawings on the feature pages. Every drawing reads a
     * name from here, so a name is spelled one way per language.
     * `listSeparator` joins a list of names in running text.
     */
    'cast' => [
        'rachel' => ['first' => "Rachel", 'full' => "Rachel Green"],
        'ross' => ['first' => "Ross", 'full' => "Ross Geller"],
        'monica' => ['first' => "Monica", 'full' => "Monica Geller"],
        'chandler' => ['first' => "Chandler", 'full' => "Chandler Bing"],
        'joey' => ['first' => "Joey", 'full' => "Chandler Bing"],
        'phoebe' => ['first' => "Phoebe", 'full' => "Phoebe Buffay"],
    ],
    'listSeparator' => ", ",

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
                'rachel' => "Ran into Central Perk in a wedding dress.",
                'ross' => "Monica’s brother, back in college.",
                'joey' => "Answered the ad for Chandler’s spare room.",
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
            'label' => "Two notes on Chandler Bing’s page: an audition on Thursday for a hospital drama, and a move out of the apartment by the end of the summer. Below them, a reminder due today to ask Joey how the audition went.",
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
            'year' => "2026",
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
            'email' => "You asked to be reminded about Chandler Bing today.",
            'open' => "Open Joey’s page",
        ],

        'once' => [
            'title' => "Joey’s audition is on Tuesday.",
            'lead' => "You cannot get him the part. You can remember to ask how it went.",
            'body' => "Add a reminder to Chandler’s page, choose the day and time, and write what you want Monica to tell you: “Ask Joey about the audition.”",
            'label' => "Adding a reminder on Chandler Bing’s page in Monica: on Tuesday 14 October at 18:00, it will say “Ask Joey about the audition.” It happens once.",
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

    /** The people page: who someone is to you, and the way into the feature pages about them. */
    'people' => [
        'hero' => [
            'eyebrow' => "People",
            'title' => "Remember the person, not just the phone number.",
            'lede' => "A contact is more than a name and a way to reach them. Keep the details, connections and shared moments that help you pick up where you left off.",
            'body' => "Monica gives the people in your life a place of their own, alongside your :possessions and :knowledge. Open it yourself, or ask a compatible assistant to work with the information you have saved.",
            'possessions' => "possessions",
            'knowledge' => "personal knowledge",
            'cta' => "Start using Monica",
            'plans' => "See plans",
            'label' => "Rachel’s contact page with personal details, family connections, a shared dinner and a follow-up reminder.",
            'screen' => [
                'birthdayValue' => "May 5",
                'lastValue' => "4 days ago",
                // Rachel's timeline, newest first, as the overview tab shows it.
                'timeline' => [
                    [
                        'year' => "2026",
                        'count' => "3 entries",
                        'events' => [
                            [
                                'type' => "meal",
                                'title' => "Dinner at Monica’s",
                                'date' => "Nov 20",
                                'detail' => "Monica’s apartment, Greenwich Village",
                                'with' => ["Monica", "Ross"],
                            ],
                            [
                                'type' => "call",
                                'title' => "Talked about the job offer",
                                'date' => "Nov 12",
                                'detail' => "45 minutes",
                                'with' => [],
                            ],
                            [
                                'type' => "together",
                                'title' => "Shopping at Bloomingdale’s",
                                'date' => "Oct 3",
                                'detail' => "Bloomingdale’s, Manhattan",
                                'with' => ["Monica", "Phoebe"],
                            ],
                        ],
                    ],
                    [
                        'year' => "2025",
                        'count' => "2 entries",
                        'events' => [
                            [
                                'type' => "together",
                                'title' => "Emma’s first day of school",
                                'date' => "Sep 3",
                                'detail' => "Brooklyn",
                                'with' => ["Ross", "Emma"],
                            ],
                            [
                                'type' => "trip",
                                'title' => "A weekend in Paris",
                                'date' => "Jun 14",
                                'detail' => "Paris, France",
                                'with' => ["Emma"],
                            ],
                        ],
                    ],
                ],
                'reminder' => "Ask about the new role",
                'reminderWhen' => "Nov 27 · in 3 days",
            ],
        ],
        'ui' => [
            'vault' => "Personal",
            'people' => "People",
            'tabs' => ["Overview", "Everyday", "Tastes and attentions", "Relationships"],
            'birthday' => "Birthday",
            'lastInTouch' => "Last in touch",
            'reminders' => "Reminders",
            'noneWaiting' => "none waiting",
            'edit' => "Edit contact",
            'timeline' => "Timeline",
            'addEvent' => "Add a life event",
            'oneEntry' => "1 entry",
            'immediateFamily' => "Immediate family",
            'add' => "Add",
            'children' => "Children",
            'reminderTabs' => ["All", "Overdue", "Today", "Upcoming"],
            'oneTime' => "One time",
            'everyYear' => "Every year",
            'with' => "With",
            'contactDetails' => "Contact details",
            'phones' => "Phones",
            'emails' => "Emails",
            'mobile' => "Mobile",
            'personal' => "Personal",
            'howWeMet' => "How we met",
            'dateWeMet' => "Date we met",
            'place' => "Place or context",
            'introducedBy' => "Introduced by",
            'giftIdeas' => "Gift ideas",
            'ideas' => "Ideas",
            'editSection' => "Edit",
            'family' => "Family",
            'manage' => "Manage",
            'parent' => "Parent",
            'auntUncle' => "Aunt or Uncle",
            'familyTree' => "Family tree",
            'treeNote' => "Only parentage and partnerships are drawn here. Friends and colleagues stay in the list.",
        ],
        'details' => [
            'title' => "Keep the useful little things.",
            'body' => "How you met. Their favourite flowers. The name of the project they were excited about last time. Save what helps you care and follow through, with a contact template that fits the person.",
            'closing' => "You can keep a page simple. Nobody is checking whether you completed the favourite-soup field.",
            'link' => "Explore contact details",
            'label' => "Three sections of Rachel’s contact page: her phone and email, how you met, and lilies saved as a gift idea.",
            'screen' => [
                'dateMet' => "Sep 22, 1994",
                'place' => "Central Perk, in a wedding dress",
                'idea' => "Lilies",
                'ideaNote' => "Her favourite flowers",
            ],
        ],
        'relationships' => [
            'title' => "Make sense of the people around them.",
            'body' => "Family, friends, partners and colleagues belong in the story too. Record a relationship once and see it from both sides. Keep former relationships when they matter, and leave room for people you have not met yet.",
            'label' => "Family connections between Ross, Rachel, Emma and Monica.",
            'link' => "See relationships and family connections",
        ],
        'moments' => [
            'title' => "Keep the moments. Give the next thought a date.",
            'body' => "Record dinner with friends once, with everyone who was there. Set a reminder for a birthday or the call you keep meaning to make. The history gives you context; the reminder gives you a nudge.",
            'link' => "Explore timelines and reminders",
            'label' => "A dinner with friends on Rachel’s timeline, then her reminders: Emma’s birthday every year and a call to Ross back.",
            'screen' => [
                'event' => [
                    'title' => "Dinner with friends",
                    'date' => "Nov 21",
                    'place' => "Central Perk",
                    'with' => ["Ross", "Chandler", "Joey"],
                ],
                'reminders' => [
                    [
                        'title' => "Emma’s birthday",
                        'when' => "Dec 6 · in 12 days",
                    ],
                    [
                        'title' => "Call Ross back",
                        'when' => "Nov 29 · in 5 days",
                    ],
                ],
            ],
        ],
        'assistant' => [
            'title' => "Ask your assistant to check the details.",
            'body' => "A compatible connected assistant can retrieve supported records and help you update them. You can open the same information in Monica whenever you want.",
            'closing' => "Your relationship still belongs to you. So does the slightly awkward phone call.",
            'link' => "See how Monica works with AI assistants",
            'label' => "A question to an assistant, and its answer from Monica about Rachel’s new role.",
            'prompt' => "“Look up Rachel in Monica and find the note about her new role.”",
            'name' => "Your assistant",
            'connected' => "Monica connected",
            'answer' => "Found it. On 12 March you wrote that Rachel starts as a buyer at a fashion house next month, and that she is nervous about the commute.",
        ],
        'faq' => [
            'title' => "A few useful answers.",
            'items' => [
                [
                    'q' => "Do my contacts need a Monica account?",
                    'a' => "No. These are your records. Adding someone does not invite them or give them access. :link is a separate choice.",
                    'link' => [
                        'label' => "Sharing selected contact sections",
                        'page' => "sharing",
                    ],
                ],
                [
                    'q' => "Can I customise contact pages?",
                    'a' => "Yes. Use :link to choose tabs, sections and fields. Different people can use different templates.",
                    'link' => [
                        'label' => "contact templates",
                        'page' => "templates",
                    ],
                ],
                [
                    'q' => "Is this a sales CRM?",
                    'a' => "Monica is built for personal context and relationships. The :link explains the approach in more detail.",
                    'link' => [
                        'label' => "personal CRM guide",
                        'page' => "personalCrm",
                    ],
                ],
            ],
        ],
        'cta' => [
            'title' => "Start with someone you already know.",
            'body' => "Add one person and a few details you would like to remember. That is a perfectly respectable database.",
            'button' => "Start using Monica",
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
            'label' => "Ross Geller’s relationships in Monica, 8 of them. Family: Monica Geller, his sister; Jack Geller, his father; Judy Geller, his mother; and Emma Geller-Green, his daughter. Romantic: Rachel Green, his partner. Friends: Chandler Bing, Chandler Bing and Phoebe Buffay.",
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
            'label' => "Adding a relationship to Chandler Bing in Monica: a sibling, with three ways to say who. I do not know their name is selected, which records the role and nothing else. The others are I know their name, and choose someone already written down. Below, an unticked box to create a contact record for this person.",
            'subtitle' => "Say how somebody is connected to Chandler Bing.",
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

    'vaults' => [
        // Words more than one drawing uses. A vault's tile shows the first
        // letter of its name.
        'personal' => "Personal",
        'work' => "Work",
        'default' => "Default",
        'heading' => "Your vaults",

        'hero' => [
            'title' => "A place for each part of your life.",
            'intro' => "Friends and family. People you know through work. The members of your local club.",
            'lede' => "Keep them together or give each group its own space. Vaults help you organise Monica around your life.",
            'cta' => "Create your account",
            'label' => "Your vaults in Monica. Personal, the default, opened 1 hour ago, with Rachel, Chandler, Ross, Joey and 20 more, no open tasks and 2 dates this month. Work, opened 2 days ago, with Marcel, Inès, Sam and 6 more, 3 open tasks and 1 date this month. And a space to start another vault.",
            'new' => "New vault",
            // Personal first, then Work. The people are in the template.
            'vaults' => [
                ['opened' => "Opened 1 hour ago", 'more' => "and 20 more"],
                ['opened' => "Opened 2 days ago", 'more' => "and 6 more"],
            ],
            'stats' => ["Open tasks", "Dates this month"],
            'another' => [
                'title' => "Start another vault",
                'body' => "Work, a club, the family on the other side. Nothing in it is visible from here.",
            ],
        ],

        'one' => [
            'title' => "One vault might be all you need.",
            'lead' => "Monica starts you with a Personal vault. You can keep everyone there and carry on.",
            'body' => "When you want a separate space, create another vault. Give it a name and a colour so it is easy to recognise.",
            'label' => "Creating a vault in Monica. The name is Work, the description reads: the restaurant, the suppliers and the people I trained with. The colour is teal, chosen from eight, and a preview shows the Work tile in that colour.",
            'create' => "Create a vault",
            'name' => "Name",
            'description' => "Description",
            'optional' => "optional",
            'value' => "The restaurant, the suppliers and the people I trained with.",
            'colour' => "Colour",
            'cancel' => "Cancel",
            'submit' => "Create vault",
        ],

        'split' => [
            'title' => "Central Perk in one. The restaurant in another.",
            'lead' => "Monica Geller might keep Rachel, Chandler and the rest of the group in Personal, with her restaurant colleagues in Work.",
            'body' => "Each vault has its own contact list, relationships, timeline and reminders. A search stays within the vault you are using, so you can focus on that part of your life.",
            'label' => "Two vaults side by side in Monica. In Personal: Rachel Green, roommate; Chandler Bing, partner; Ross Geller, brother; Chandler Bing and Phoebe Buffay, friends. In Work, a search for Rachel finds nobody, because search looks in this vault only. Its people are Marcel Duval, sous-chef; Inès Ortega, pastry chef; and Sam Whitfield, restaurant owner.",
            'people' => "People",
            'search' => "Search Personal",
            'query' => "Rachel",
            'empty' => [
                'title' => "Nobody called Rachel in Work",
                'body' => "Search looks in this vault only. Switch to another vault to search there.",
            ],
            // The people are in the template, in this order.
            'personalRoles' => ["Roommate", "Partner", "Brother", "Friend", "Friend"],
            'workRoles' => ["Sous-chef", "Pastry chef", "Restaurant owner"],
        ],

        'templates' => [
            'title' => "Different spaces can keep different details.",
            'lead' => "You probably remember different things about a close friend and a colleague.",
            'body' => "Choose a default contact template for each vault. New contacts start with the structure you selected, whether that means favourite foods and shared memories or a role and an area of expertise.",
            'label' => "Two contacts in Monica, each from a different vault. Rachel Green, in Personal, uses the Friends and family template: her favourite food is trifle, as long as it has no beef in it, and a shared memory is her arriving at Central Perk in a wedding dress in 1994. Marcel Duval, in Work, uses the Colleagues template: his role is sous-chef and his area of expertise is sauces and fish. Below, the default template for Work is set to Colleagues.",
            // Rachel first, then Marcel.
            'cards' => [
                ['template' => "Personal · Friends and family template", 'fields' => [
                    ['label' => "Favourite foods", 'value' => "Trifle, as long as it has no beef in it"],
                    ['label' => "Shared memories", 'value' => "Arrived at Central Perk in a wedding dress, 1994"],
                ]],
                ['template' => "Work · Colleagues template", 'fields' => [
                    ['label' => "Role", 'value' => "Sous-chef"],
                    ['label' => "Area of expertise", 'value' => "Sauces and fish"],
                ]],
            ],
            'defaultFor' => "Default template for Work",
            'choice' => "Colleagues",
        ],

        'switch' => [
            'title' => "Pick up where you need to.",
            'lead' => "Switch vaults to see the people, events and reminders that belong there.",
            'body' => "Choose a default vault to make the space you use most your starting point.",
            'label' => "The vault switcher in Monica, open while in Work. Your vaults: Personal, the default, with 24 people, and Work, selected, with 9 people, then all vaults. Below, the default vault setting, Personal: the vault you land in after signing in.",
            'counts' => ["24 people", "9 people"],
            'all' => "All vaults",
            'defaultLabel' => "Default vault",
            'hint' => "The vault you land in after signing in.",
        ],

        'apart' => [
            'title' => "Separate spaces, still your account.",
            'lead' => "Vaults organise your information within your account. They are yours alone: other people cannot join them or sign in to see what you have recorded.",
            'body' => "Choose where someone belongs before adding them. Contacts cannot currently move between vaults, and relationships connect people within the same vault.",
        ],
    ],

    'sharing' => [
        // Words more than one drawing uses.
        'optional' => "optional",
        'stops' => "Stops working",
        'week' => "In 7 days",
        'password' => "Password",
        'cancel' => "Cancel",
        'address' => "Address",
        'phone' => "Phone",
        // The sections of Joey's page, in the order the selection lists them.
        'sections' => ["Ways to connect", "Food preferences", "Personal details", "Work", "Notes", "Fields you marked sensitive"],

        'hero' => [
            'title' => "Share only what you choose.",
            'intro' => "Someone needs an address, a phone number, or a few useful details.",
            'lede' => "Share selected sections of a contact’s page through a read-only link. Choose what it shows, how long it works, and when to stop access.",
            'cta' => "Create your account",
            'label' => "Sharing Chandler Bing’s page in Monica, from the Personal vault. The link is read only, always: whoever opens it needs no account, joins nothing, and can change nothing. The link is named Joey’s birthday, it is for Rachel Green, it stops working in 7 days, and no password is set. Going out: 2 of 6 sections and his name, nothing else.",
            'readOnly' => "Read only, always",
            'heading' => "Share Chandler Bing",
            'body' => "A private link to this one page. Whoever opens it needs no account, joins nothing, and can change nothing.",
            'vault' => "Personal · Friends and family",
            'link' => "The link itself",
            'linkBody' => "Both of these are for you. Whoever opens the link never sees them.",
            'name' => "Name this link",
            'nameValue' => "Joey’s birthday",
            'who' => "Who it is for",
            'passwordHint' => "Asked for before the page opens",
            'out' => "Going out",
            'summary' => "2 of 6 sections and his name. Nothing else.",
            'create' => "Create sharing link",
            'note' => "You can change what it shows afterwards, or revoke it.",
        ],

        'visitor' => [
            'title' => "Rachel is organising Joey’s birthday.",
            'lead' => "She needs his address and phone number. Your notes about his auditions can stay with you.",
            'body' => "Create a link to Chandler’s page and select the sections Rachel needs. She can open it without a Monica account and cannot change anything.",
            'label' => "Chandler Bing’s page as Rachel sees it, shared with her by Monica Geller, read only, until 20 October 2026. Ways to connect: his address, 495 Grove Street, Apt 19, New York, and his phone number. A note explains that this is a page from somebody’s private records, with nothing to sign in to and nothing to reply to.",
            'by' => "Shared with you by Monica Geller",
            'until' => "Read only · ends 20 October 2026",
            'oldAddress' => "495 Grove Street, Apt 19, New York",
            'notice' => "This is a page from somebody’s private records, shared with you as it stands today. There is nothing to sign in to and nothing to reply to here.",
        ],

        'selection' => [
            'title' => "A little or a little more. You decide.",
            'lead' => "Each link has its own selection of sections. Share contact information with one person and a different set of details with another.",
            'body' => [
                "Fields you marked sensitive are excluded by default. You can choose to include them when needed.",
                "Life events, relationships, reminders, photos, attached files and change history stay out of the shared page.",
            ],
            'label' => "Two links to Chandler’s page, each with its own sections. For Rachel, Joey’s birthday: ways to connect and food preferences, while personal details, work, notes and the fields you marked sensitive are left out. For the agent, headshots and contracts: ways to connect and work. Never on a shared page: life events, relationships, reminders, photos, attached files and change history.",
            // Which sections each link shows, by their place in `sections`,
            // is in the template.
            'links' => [
                ['title' => "For Rachel", 'meta' => "Joey’s birthday · 2 sections"],
                ['title' => "For the agent", 'meta' => "Headshots and contracts · 2 sections"],
            ],
            'sensitive' => "Sensitive",
            'never' => "Never on a shared page",
            'kept' => ["Life events", "Relationships", "Reminders", "Photos", "Attached files", "Change history"],
        ],

        'expiry' => [
            'title' => "Give the link an end date.",
            'lead' => "Let Rachel’s link work for seven days, thirty days, or three months. You can also leave a link open until you revoke it.",
            'body' => "Add a password when you want another layer of protection. Anyone holding an unprotected link can open it, so share it with care.",
            'label' => "Choosing when a link stops working: in 7 days, on 20 October 2026, is selected. The others are in 30 days, on 12 November 2026, in 3 months, on 13 January 2027, and until you revoke it. Below, a password has been set, and is asked for before the page opens.",
            // The first is the one selected.
            'options' => [
                ['label' => "In 7 days", 'date' => "20 October 2026"],
                ['label' => "In 30 days", 'date' => "12 November 2026"],
                ['label' => "In 3 months", 'date' => "13 January 2027"],
            ],
            'forever' => "Until you revoke it",
            'hint' => "Asked for before the page opens.",
        ],

        'send' => [
            'title' => "Send it your way.",
            'lead' => "Copy the link and send it through the conversation you already use.",
            'body' => "Monica does not email the recipient or send an invitation. If you added a password, pass it along separately.",
            'label' => "A new sharing link in Monica: the link is live. Copy it now, because this is the only time it can be shown in full, so a lost link is replaced rather than recovered. Buttons to copy the link and to open it as a visitor. Nothing is emailed: if you set a password, tell Rachel separately from the address.",
            'heading' => "The link is live",
            'warning' => "Copy it now. This is the only time it can be shown in full, so a lost link is replaced rather than recovered.",
            'copy' => "Copy the link",
            'open' => "Open it as a visitor",
            'note' => "Nothing is emailed. If you set a password, tell Rachel separately from the address.",
        ],

        'update' => [
            'title' => "Keep the details up to date.",
            'lead' => "Joey moved. Update his address in Monica, and Rachel sees the new address the next time she opens the shared page.",
            'body' => "You can also change the sections a link shows, its password or its expiry date without changing the address of the link.",
            'label' => "Joey’s address being edited in your Monica, to 90 Bedford Street, Apt 20, New York. Beside it, Rachel’s shared page, at the same link, already shows the new address, with the same phone number.",
            'edit' => "Edit address",
            'where' => "In your Monica",
            'newAddress' => "90 Bedford Street, Apt 20, New York",
            'save' => "Save changes",
            'shared' => "Rachel’s shared page",
            'same' => "Same link",
        ],

        'visits' => [
            'title' => "See when the link was opened.",
            'lead' => "Each link keeps a visit history, including when it was opened and roughly where the visit came from. Failed password attempts appear there too.",
            'body' => "The history records visits, rather than confirming who was behind them. Recipients do not sign in.",
            'label' => "The visits to a sharing link, 3 in total: opened today at 09:42 from New York, United States; a wrong password today at 09:41, a failed attempt, from New York; and opened yesterday at 21:15 from New York. Locations are approximate, and nothing about the visitor is recorded.",
            'heading' => "Visits",
            'total' => "3 in total",
            // Newest first.
            'entries' => [
                ['what' => "Opened", 'when' => "Today at 09:42 · New York, United States"],
                ['what' => "Wrong password", 'when' => "Today at 09:41 · New York, United States", 'badge' => "Failed attempt"],
                ['what' => "Opened", 'when' => "Yesterday at 21:15 · New York, United States"],
            ],
            'note' => "Locations are approximate. Nothing about the visitor is recorded.",
        ],

        'revoke' => [
            'title' => "Stop access when you are done.",
            'lead' => "The birthday is over. Revoke Rachel’s link, and it stops working immediately.",
            'body' => "You can revoke a link at any time, even if you originally gave it no end date. If someone needs access again, create a new one.",
            'label' => "Revoking Rachel’s link in Monica. The link stops working as soon as you press this, and it cannot be undone. Joey’s page stays as it is.",
            'heading' => "Revoke Rachel’s link?",
            'warning' => "The link stops working as soon as you press this, and it cannot be undone. Joey’s page stays as it is.",
            'confirm' => "Revoke this link",
        ],
    ],

    /**
     * The API and MCP page, "Your contacts, connected to your tools". The
     * assistants' names (Claude, ChatGPT, Gemini) are product names and are
     * the same in every language, so they are in the template. So are the
     * tool names and the request in the code sample, which are code.
     */
    'api' => [
        // Words more than one drawing uses.
        'explore' => "Explore the API",

        'hero' => [
            'title' => "Your contacts, connected to your tools.",
            'intro' => "Use Monica with Claude, ChatGPT, Gemini or your own scripts. Look up a contact, record a moment, or set a reminder from the tools you already use.",
            'lede' => "Connect through MCP where your assistant supports it, or build your own connection with the API.",
            'cta' => "Create your account",
            'label' => "A conversation with Claude about the week ahead, with Monica connected. You ask: Chandler has his audition on Wednesday, remind me next Tuesday to ask him how he’s feeling about it. Claude uses Monica’s create_reminder tool, which adds the reminder Ask Joey about his audition, on Tuesday 20 October, in the Personal vault, and replies that Monica will remind you that day.",
            'chat' => "The week ahead",
            'connected' => "Monica connected",
            'ask' => "Chandler has his audition on Wednesday. Remind me next Tuesday to ask him how he’s feeling about it.",
            'reminder' => "Ask Joey about his audition",
            'when' => "Tuesday 20 October · Personal",
            'done' => "Done. Monica will remind you on Tuesday 20 October to ask Joey about his audition.",
        ],

        'conversation' => [
            'title' => "Keep Monica close to the conversation.",
            'lead' => "You are talking to your assistant about the week ahead. Joey’s audition comes up. Set a reminder while you are thinking about it.",
            'body' => [
                "Monica’s MCP server gives compatible assistants tools to work with your account.",
                "The assistant uses Monica’s available tools to carry out your request.",
            ],
            'label' => "Three example requests and the Monica tool each one uses. Find Chandler Bing in my Personal vault: search_contacts. Record dinner with Phoebe yesterday at Central Perk: create_life_event. Remind me next Tuesday to ask Joey about his audition: create_reminder.",
            'examples' => "Example requests",
            // The tool each request uses is in the template, in this order.
            'requests' => [
                "“Find Chandler Bing in my Personal vault.”",
                "“Record dinner with Phoebe yesterday at Central Perk.”",
                "“Remind me next Tuesday to ask Joey about his audition.”",
            ],
        ],

        'assistants' => [
            'title' => "Claude, ChatGPT, Gemini—and room for more.",
            'lead' => "MCP is a shared connection standard. It lets assistants work with applications such as Monica.",
            'body' => [
                "Use a client that supports connecting to Monica’s remote MCP server. Depending on the product, plan and setup, that can mean Claude, ChatGPT, a Gemini-based tool, or another MCP-compatible application.",
                "Support varies between clients: an assistant’s name alone does not guarantee it can connect. Follow Monica’s connection guide to check the requirements.",
            ],
            'guide' => "Read the assistant connection guide",
            'label' => "The assistants that can connect to Monica: Claude, ChatGPT, Gemini-based tools, and other MCP-compatible clients.",
            'gemini' => "Gemini-based tools",
            'others' => "Other MCP-compatible clients",
        ],

        'scripts' => [
            'title' => "Your scripts can join in, too.",
            'lead' => "The JSON API gives your own software a way to work with Monica.",
            'body' => [
                "Create contacts and vaults, record life events, manage reminders, or build templates. Bring contacts from another system or connect Monica to a workflow you already have.",
                "Requests use an API key. Responses come back as JSON.",
            ],
            'label' => "A request to Monica’s API that creates a contact called Gunther in a vault, authorised with an API key, and the response: 201 Created, with the new contact’s id, its first name and its vault.",
        ],

        'coverage' => [
            'title' => "Useful today. Still growing.",
            'lead' => "Here is how much of Monica you can currently reach through these connections:",
            'caption' => "How much of Monica the JSON API and MCP reach",
            'operations' => "Supported user operations",
            'feature' => "Feature coverage",
            // JSON API first, then MCP.
            'operationsValues' => ["55 of 76", "34 of 76"],
            'featureValues' => ["72.4%", "44.7%"],
            'tools' => "Monica provides :tools, covering :endpoints.",
            'toolsCount' => "87 MCP tools",
            'endpoints' => "60.8% of its 143 API endpoints",
            'audit' => "These figures come from a source-code audit dated :date. Feature coverage uses a checklist of 76 user operations; endpoint coverage counts individual API routes. They measure availability, not reliability or an assistant’s success rate.",
            'date' => "13 October 2026",
        ],

        'scope' => [
            'title' => "Know what you can do.",
            'lead' => "Both connections support finding and creating contacts, recording life events, managing manual reminders, and working on templates.",
            'body' => [
                "Some things still happen in the web app: reading or editing a contact’s complete custom information, managing relationships between people, and creating sharing links.",
                "The API also supports managing vaults and template tabs. MCP does not yet offer those operations.",
            ],
            'label' => "What each connection reaches. Through the API and MCP: find contacts, create contacts, record life events, manage manual reminders, and work on templates. Through the API only, for now: manage vaults and manage template tabs. Only in the web app: a contact’s complete custom information, relationships between people, and sharing links.",
            'groups' => [
                ['title' => "API and MCP", 'items' => ["Find contacts", "Create contacts", "Record life events", "Manage manual reminders", "Work on templates"]],
                ['title' => "API only, for now", 'items' => ["Manage vaults", "Manage template tabs"]],
                ['title' => "In the web app", 'items' => ["A contact’s complete custom information", "Relationships between people", "Sharing links"]],
            ],
        ],

        'access' => [
            'title' => "You choose the access.",
            'lead' => "Create and revoke API keys in your settings. Review connected assistants and disconnect them when you are done.",
            'body' => "Connections work within your account through the operations Monica exposes. Information an assistant retrieves is passed to the service running that assistant, so choose a service you trust with those details.",
            'label' => "Your connections in Monica’s settings. Connected assistants: Claude, last used 4 minutes ago, and ChatGPT, last used 3 days ago, each with a button to disconnect it. API keys: one called Import from old address book, ending in 3f9a, with a button to revoke it, and a button to create a new key.",
            'assistants' => "Connected assistants",
            // Claude first, then ChatGPT.
            'used' => ["Last used 4 minutes ago", "Last used 3 days ago"],
            'disconnect' => "Disconnect",
            'keys' => "API keys",
            'newKey' => "New key",
            'keyName' => "Import from old address book",
            'revoke' => "Revoke",
        ],

        'closing' => [
            'title' => "Start with one useful task.",
            'body' => "Record dinner with Phoebe. Set a reminder about Joey’s audition. Add a contact from your own script.",
            'connect' => "Connect an assistant",
        ],
    ],

    'privacyFeatures' => [
        // Words more than one drawing uses.
        'sensitive' => "Sensitive",
        'phone' => "Phone",
        'healthNote' => "Health note",

        'hero' => [
            'title' => "Personal details deserve a private place.",
            'lede' => "You record things about people because they matter to you. Choose what you keep, what you share, and which tools can access it.",
            'cta' => "Create your account",
            'label' => "Rachel Green’s page in Monica, in the Personal vault. Her phone number and birthday are shown. Her health note is marked sensitive, so its contents stay hidden behind a Reveal button.",
            'vault' => "Personal · Friend",
            'birthday' => "Birthday",
            'birthdayValue' => "5 May 1970",
            'reveal' => "Reveal",
        ],

        'audience' => [
            'title' => "Your contacts do not become an audience.",
            'lead' => "Adding Chandler to Monica does not send him an invitation or tell him what you wrote.",
            'body' => "Your account is for you. Nobody joins your vaults, and the people you record cannot open their pages unless you choose to share something with them.",
            'label' => "Chandler Bing was added to the Personal vault. His page holds a note about leaving his job, and has no sharing links, so Chandler cannot open it.",
            // :name is Chandler's name, drawn in bold.
            'added' => ":name was added to Personal.",
            'notes' => "Notes",
            'notesValue' => "Thinking about leaving his job in statistical analysis and data reconfiguration.",
            'links' => "Sharing links",
            'linksValue' => "None. Chandler cannot open this page.",
        ],

        'hidden' => [
            'title' => "Some details should stay out of sight.",
            'lead' => "Rachel’s phone number and a private note about her health deserve different treatment.",
            'body' => [
                "Mark a field as sensitive to keep its contents hidden on screen until you reveal them. Sensitive values are excluded from contact-list columns and left out of sharing links unless you explicitly include them.",
                "This helps prevent accidental exposure. Anyone signed in to your account can still reveal those values.",
            ],
            'label' => "Editing the Health note field with Mark as sensitive ticked: hidden on screen until you reveal it, and left out of list columns and sharing links. Beside it, the contact list shows names and phone numbers, and explains that Health note cannot be added as a column because it is sensitive.",
            'edit' => "Edit field",
            'fieldLabel' => "Label",
            'mark' => "Mark as sensitive",
            'markBody' => "Hidden on screen until you reveal it. Left out of list columns and sharing links.",
            'name' => "Name",
            'column' => "Health note cannot be added as a column because it is sensitive.",
        ],

        'share' => [
            'title' => "Share a little. Keep the rest.",
            'lead' => "Rachel needs Joey’s address for his birthday party. She does not need everything else on his page.",
            'body' => "Create a read-only sharing link with selected sections, an optional password and an expiry date. Change what it shows or revoke it when access is no longer needed.",
            'label' => "A sharing link called Joey’s birthday, for Rachel Green. It shows Ways to connect and hides everything else on Joey’s page. A password is asked for before the page opens, and the link ends on 20 October 2026, in 7 days. Buttons to change it or revoke it.",
            'link' => "Joey’s birthday",
            'change' => "Change",
            'for' => "For",
            'shows' => "Shows",
            'showsValue' => "Ways to connect",
            'hidden' => "Hidden",
            'hiddenValue' => "Everything else on Joey’s page",
            'password' => "Password",
            'passwordValue' => "Asked for before the page opens",
            'ends' => "Ends",
            'endsValue' => "20 October 2026, in 7 days",
            'revoke' => "Revoke this link",
        ],

        'tools' => [
            'title' => "Connect your tools deliberately.",
            'lead' => "An address-book app, a script or an assistant can access information through the connection you give it.",
            'body' => [
                "Choose whether an API key can read sensitive field values, revoke keys you no longer use, and disconnect assistants from your settings.",
                "When an assistant retrieves information, it passes that information to the service running it. Choose your connections with those details in mind.",
            ],
            'label' => "Creating an API key named Phone address book, with Can read sensitive field values left unticked. Below it, Claude is listed as a connected assistant, connected through OAuth, with a button to disconnect it.",
            'create' => "Create key",
            'keyName' => "Name this key",
            'keyValue' => "Phone address book",
            'sensitive' => "Can read sensitive field values",
            'sensitiveBody' => "Leave this off unless the tool needs them.",
            'assistants' => "Connected assistants",
            'via' => "Connected through OAuth",
            'disconnect' => "Disconnect",
        ],

        'protect' => [
            'title' => "Protect the way in.",
            'lead' => "Use a passkey or add two-factor authentication to your account. Keep recovery codes somewhere safe so you have a way back in.",
            'body' => "Passwords are stored as one-way hashes. Two-factor secrets and recovery codes are encrypted. Monica also stores API keys and sharing-link tokens as hashes rather than keeping their readable originals.",
            'label' => "Signing in: a passkey on a MacBook Air, added 2 days ago and active; an authenticator app, ready to turn on; and recovery codes, a way back in if you lose your device. How Monica stores it: passwords as a one-way hash, two-factor secrets and recovery codes encrypted, API keys and sharing-link tokens as a hash.",
            // In the order they are drawn: a passkey, an authenticator app,
            // recovery codes. The first action is a badge, the others buttons.
            'methods' => [
                ['title' => "Passkey", 'body' => "MacBook Air · added 2 days ago", 'action' => "Active"],
                ['title' => "Authenticator app", 'body' => "Ask for a code every time you sign in.", 'action' => "Turn it on"],
                ['title' => "Recovery codes", 'body' => "A way back in if you lose your device.", 'action' => "Show"],
            ],
            'stores' => "How Monica stores it",
            'rows' => [
                ["Passwords", "one-way hash"],
                ["Two-factor secrets", "encrypted"],
                ["Recovery codes", "encrypted"],
                ["API keys", "hash"],
                ["Sharing-link tokens", "hash"],
            ],
        ],

        'admins' => [
            'title' => "Know what administrators can see.",
            'lead' => "Monica’s administration screens show account information such as your name, email address, sign-in activity and storage usage.",
            'body' => [
                "They do not provide access to your contacts, reminders, files or the details inside your vaults.",
                "That distinction matters: it describes the administration screens. It does not mean the service operator is technically unable to access data stored on the server.",
            ],
            'label' => "Monica Geller’s account in the admin space: her email address, her last sign-in today at 08:12, and 48 MB of storage. Contacts, reminders, files and vault details are not shown there.",
            'space' => "Admin space",
            'email' => "Email",
            'signIn' => "Last sign-in",
            'signInValue' => "Today at 08:12",
            'storage' => "Storage",
            'storageValue' => "48 MB",
            'notice' => "Contacts, reminders, files and vault details are not shown here.",
        ],

        'hosting' => [
            'title' => "Choose where Monica lives.",
            'lead' => "Use the hosted service, or run Monica on your own server.",
            'body' => "Self-hosting lets you choose where your information is stored and who operates the service. It also puts updates, server security and backups in your hands.",
            'label' => "Two ways to run Monica. The hosted service is operated by Monica, and updates, security and backups are handled for you. On your own server, it is operated by you or whoever you choose, and updates, security and backups are in your hands.",
            'operated' => "Operated by",
            'upkeep' => "Updates, security, backups",
            'options' => [
                ['title' => "Hosted service", 'operated' => "Monica", 'upkeep' => "Handled for you"],
                ['title' => "Your own server", 'operated' => "You, or whoever you choose", 'upkeep' => "In your hands"],
            ],
        ],

        'logs' => [
            'title' => "See the activity on your account.",
            'lead' => "Your account logs let you review recorded activity, with its time and internet address. You can also see copies of emails Monica sent you.",
            'body' => "These records give you a way to check what happened when something looks unfamiliar.",
            'label' => "The activity log on a Monica account: signed in with a passkey today at 08:12, created an API key yesterday at 19:40, connected an assistant on 11 October 2026 at 21:05 from a different address, and changed the password on 7 October 2026 at 10:31. A second tab lists the emails Monica sent.",
            'activity' => "Activity",
            'emails' => "Emails sent",
            // What happened and when, newest first. The addresses beside them
            // are in the template, because they are not copy.
            'entries' => [
                ["Signed in with a passkey", "Today at 08:12"],
                ["Created an API key", "Yesterday at 19:40"],
                ["Connected an assistant", "11 October 2026 at 21:05"],
                ["Changed your password", "7 October 2026 at 10:31"],
            ],
        ],
    ],

    'languages' => [
        'hero' => [
            'title' => "Your language. Their names.",
            'lede' => "Use Monica in a language you feel at home in. Keep people’s names in the forms they use, and choose how dates, times and numbers appear.",
            'body' => "The people in your life do not all follow the same conventions. Your address book should leave room for that.",
            'cta' => "Create your account",
            'label' => "The contact list in Monica, with the interface in French. Chandler Bing, Élodie Durand, Dr. Ross Geller and Kim Ji-woo are listed, with Ji-woo’s name also written in Hangul.",
            // The drawing is the product in French, whatever the language of
            // the page around it, because it shows somebody who chose French.
            // Leave these four in French in every language file.
            'window' => [
                'title' => "Personnes",
                'search' => "Rechercher",
                'chandler' => "Anniversaire le 8 avril",
                'elodie' => "Vue il y a 3 jours",
                'ross' => "Anniversaire le 18 octobre",
            ],
        ],

        'language' => [
            'title' => "Make yourself at home.",
            'lead' => "Monica is available in more than 30 languages, including French, Spanish, German, Japanese, Korean and Chinese.",
            'body' => "Choose your language in your preferences. It follows you across the devices you sign in from, and Monica sorts your contacts using that language’s sorting rules.",
            'label' => "The language setting, open on a list of languages each written in its own script, with French selected.",
            'field' => "Language",
            // What each language is called in the reader's language, next to
            // its own name for itself. The keys are language codes.
            'names' => [
                'es' => "Spanish",
                'de' => "German",
                'fr' => "French",
                'ja' => "Japanese",
                'ko' => "Korean",
                'zh' => "Chinese",
            ],
        ],

        'names' => [
            'title' => "A name deserves to be written properly.",
            'lead' => "Not everyone writes their given name first. Not every name fits neatly into two boxes.",
            'body' => [
                "Choose given name first or family name first for each contact, or let it follow your default preference. Add name parts where they help, or enter the full name exactly as it should appear.",
                "There is also room for prefixes, suffixes, nicknames and names before marriage. Ross can keep his “Dr.” Everyone else can decide whether to use it.",
            ],
            'label' => "Two name forms. Ross Geller’s has the prefix Dr., and follows the default name order. Kim Ji-woo’s is set to family name first, with the nickname Jiji.",
            'optional' => "optional",
            'prefix' => "Prefix",
            'prefixValue' => "Dr.",
            'suffix' => "Suffix",
            'suffixPlaceholder' => "Jr, PhD",
            'first' => "First name",
            'last' => "Last name",
            'readsAs' => "Reads as",
            'follow' => "Follow my preference",
            'familyFirst' => "Family name first",
            'nickname' => "Nickname",
            'maiden' => "Name before marriage",
        ],

        'forms' => [
            'title' => "One person. More than one way to write their name.",
            'lead' => "Keep a name in its original writing system alongside another written form, a transliteration or a pronunciation guide.",
            'body' => [
                "A transliteration lets you record the name using another writing system. A pronunciation guide helps you remember how to say it.",
                "These forms belong to the same contact. You enter them yourself, with optional language and writing-system labels to keep them clear.",
            ],
            'label' => "Kim Ji-woo’s name written three ways: 김지우 in Hangul, Kim Ji-woo in Latin letters, and a pronunciation guide.",
            'heading' => "Name",
            'hint' => "Ways of writing the same name.",
            'written' => "Written form · Korean · Hangul",
            'transliteration' => "Transliteration · Latin",
            'pronunciation' => "Pronunciation guide",
            // How Ji-woo's name sounds, spelled for a reader of this language.
            'pronunciationValue' => "kim jee-oo",
            'add' => "Add another way to write this name",
        ],

        'display' => [
            'title' => "Choose the name you want to see.",
            'lead' => "Select one saved form as the contact’s display name. Monica uses it in lists, page titles, notifications and initials.",
            'body' => "The other forms stay on the contact. Changing your interface language does not choose a different name for you.",
            'label' => "The transliteration Kim Ji-woo is chosen as the display name, and appears in the contact list, as the page title and in a birthday notification.",
            'written' => "Written form",
            'transliteration' => "Transliteration",
            'badge' => "Display name",
            'list' => "List",
            'pageTitle' => "Page title",
            'notification' => "Notification",
            'birthday' => ":name’s birthday is tomorrow",
        ],

        'dates' => [
            'title' => "Dates you do not have to decode.",
            'lead' => "Does 04/05 mean April 5 or 4 May? Choose the format you are comfortable reading.",
            'body' => "Set your date format, choose a 12-hour or 24-hour clock, and select the separators used in numbers. These preferences are separate from your language, so you can combine them the way you prefer.",
            'label' => "The dates, times and numbers settings, with day before month, the 24-hour clock and a space between thousands. The preview reads: :preview",
            'heading' => "Dates, times and numbers",
            'format' => "Date format",
            'formatLong' => "13 Oct 2026",
            'clock' => "Clock",
            'twelve' => "12-hour · 6:30 pm",
            'twentyFour' => "24-hour · 18:30",
            'numbers' => "Numbers",
            'preview' => "Preview",
            'previewValue' => "Dinner with Phoebe, 04/05/2026 at 19:00",
        ],

        'timezone' => [
            'title' => "Your day, in your time zone.",
            'lead' => "Choose your time zone by searching for a city, using the map or taking the setting from your device.",
            'body' => "Monica displays dates and times accordingly. Existing reminders keep their own time zones, so changing your preferences does not quietly move a reminder you already set.",
            'label' => "Choosing a time zone by searching for a city: Lisbon is highlighted. Below, a reminder to call Mum on Sundays at 18:00 keeps the New York time zone.",
            'tabs' => ["Search a city", "Map", "From this device"],
            // The first letters of the city typed so far. Both cities below
            // should start with them in this language.
            'query' => "Lis",
            'lisbon' => "Lisbon, Portugal",
            'lismore' => "Lismore, Australia",
            'reminder' => "Call Mum",
            'reminderWhen' => "Sundays at 18:00 · keeps America/New_York",
        ],
    ],

    /**
     * The AI memory page, "One memory for your AI assistants" (route key
     * `aiMemory`). The pictures on it are drawings of the product and of two
     * assistants talking to it, so each carries a `label` that a screen
     * reader reads instead of the drawing itself.
     *
     * The example runs through the page: your copy of The Shining, lent to
     * Chandler, due back on 5 December. Keep the name, the object and the
     * date in step between `how`, `see`, `structure` and `visibility`.
     */
    'aiMemory' => [
        // Words more than one drawing uses.
        // The examples are the demo vault's, as on the homepage: the
        // reader lent Chandler their copy of The Shining, which lives in
        // the freezer, as it does in his and Joey's flat. Chandler rather
        // than Joey because the vault has his photo.
        'borrower' => "Chandler Bing",
        'book' => "The Shining",
        'due' => "Due back 5 December",

        /**
         * Where the illustrations go until they are drawn: the reference, the
         * name and the brief the design gives each one, shown in a dashed
         * frame exactly as the design draws its placeholders.
         */
        'illustrations' => [
            'problem' => [
                'ref' => "I02 · Illustration · Optional",
                'title' => "Islands and a bridge",
                'brief' => "Two islands with separate notebooks, bridged to one central library where a panda organizes them. No suggestion of importing or syncing conversations.",
            ],
        ],

        'hero' => [
            'eyebrow' => "Open-source personal AI memory",
            'title' => "One memory for your AI assistants.",
            'lede' => "Your AI assistants may change. Your memories shouldn’t have to.",
            'body' => "Monica gives compatible AI assistants a shared, persistent personal memory: a place to save your relationships, knowledge, belongings and everyday life. One that you can open, organize and use yourself, even without AI.",
            'cta' => "Get started for free",
            'how' => "See how it works",
            'note' => "Open source. Self-hostable. MCP access included on free accounts.",
        ],

        'problem' => [
            'title' => "Your life doesn’t belong in a single chat.",
            'body' => [
                "You tell your AI assistant about your family, your preferences, your projects and the things you care about. Over time, that information becomes useful context for the conversations that follow.",
                "But you may use more than one assistant. You may switch providers, start a new conversation, or simply want to look something up without asking AI at all.",
                "That’s why Monica gives your personal information a home of its own. Instead of relying exclusively on the memory built into each assistant, you can save information in Monica and retrieve it through compatible assistants whenever you need it.",
            ],
            'closing' => "Less repeating yourself. More continuity across the tools you choose to use.",
        ],

        'how' => [
            'title' => "Tell one assistant. Ask another.",
            'lead' => "With Monica, personal AI memory can persist across conversations and across compatible AI platforms. Save a piece of information today, and ask a different connected assistant to look it up later.",
            'connected' => "Monica connected",
            'steps' => [
                [
                    'title' => "Save something with Claude",
                    'prompt' => "I lent my copy of The Shining to Chandler today. He’s bringing it back on December 5. Save that in Monica.",
                    'body' => "Your assistant records the loan, the borrower and the expected return date in your Monica account.",
                    'label' => "A conversation with Claude, with Monica connected. You ask Claude to save that you lent your copy of The Shining to Chandler, due back on 5 December. Claude uses Monica’s create-possession-loan tool and confirms the loan is saved.",
                    'reply' => "Saved. Monica now shows The Shining on loan to Chandler until 5 December.",
                ],
                [
                    'title' => "See it in Monica",
                    'prompt' => null,
                    'body' => "The loan is a real record in Monica, linked to the book and the person who borrowed it. You can open it directly and review or update it yourself.",
                    'label' => "The page of your copy of The Shining in Monica, stored in the freezer. Its loans section shows it lent to Chandler Bing, due back on 5 December.",
                    'reply' => null,
                ],
                [
                    'title' => "Retrieve it with ChatGPT",
                    'prompt' => "Check Monica. Who has my copy of The Shining?",
                    'body' => "Your connected assistant can look up the recorded loan and tell you who has the book and when it is expected back.",
                    'label' => "A new conversation with ChatGPT, with Monica connected. You ask who has your copy of The Shining. ChatGPT uses Monica’s list-possession-loans tool and answers that Chandler has it, due back on 5 December.",
                    'reply' => "Chandler has your copy of The Shining. It’s due back on 5 December.",
                ],
            ],
            'garage' => "Stored in the freezer",
            'loans' => "Loans",
            'onLoan' => "On loan",
            'closing' => "The conversation changed. The memory stayed.",
            'note' => "This example uses two assistants connected to the same Monica account. Assistant compatibility and access may depend on their configuration and subscription. Saving and retrieving information requires the assistant to use Monica’s tools.",
        ],

        'remember' => [
            'title' => "A personal AI memory for everyday life.",
            'lead' => "Your life is more than a collection of conversations. Monica gives your assistants places to store different kinds of personal information, from the people you know to the things you own.",
            'try' => "Try asking",
            // The glyph, the page each item links to and the colour of its
            // vignette are in the template, in this order. `chips` are the two
            // labels drawn in the vignette: what Monica would record.
            'items' => [
                [
                    'title' => "People and relationships",
                    'body' => "Keep track of the people in your life, how they are related to each other and the moments you share. Record new connections and family relationships, and retrieve information before your next conversation.",
                    'ask' => "Ross and Rachel just had a baby girl named Emma. Record that she’s their daughter in Monica.",
                    'chips' => ["Emma", "Ross and Rachel’s daughter"],
                ],
                [
                    'title' => "Personal knowledge",
                    'body' => "Create a personal knowledge base with folders, notes and lists. Save useful instructions, recommendations, ideas and reference information so you can find them again.",
                    'ask' => "Save Phoebe’s grandmother’s chocolate chip cookie recipe in my Recipes notes.",
                    'chips' => ["Recipes", "Grandma’s cookies"],
                ],
                [
                    'title' => "Your belongings",
                    'body' => "Keep a record of what you own, what it cost, where it is, when it was serviced and who borrowed it.",
                    'ask' => "Record our new recliner in Monica. We paid $1,200 for it and it’s in the living room, facing the TV.",
                    'chips' => ["Recliner", '$1,200'],
                ],
                [
                    'title' => "Life events",
                    'body' => "Build a timeline of the experiences, milestones and moments that matter, including the people you shared them with.",
                    'ask' => "Log our trip to London for Ross’s wedding, with Chandler and Joey.",
                    'chips' => ["London", "Ross’s wedding"],
                ],
                [
                    'title' => "Your preferences",
                    'body' => "Keep a note of your tastes, habits and preferences that your assistants can look up when helping you make decisions.",
                    'ask' => "Save in my preferences note that I’m vegetarian and always sit on the orange couch at Central Perk.",
                    'chips' => ["Orange couch", "Vegetarian"],
                ],
                [
                    'title' => "Things to remember",
                    'body' => "Create reminders for important commitments and recurring occasions. Monica can remind you through its own reminder system, independently of your assistant.",
                    'ask' => "Create a reminder in Monica to feed the chick and the duck every morning.",
                    'chips' => ["Chick and duck", "Every morning"],
                ],
            ],
        ],

        'see' => [
            'title' => "A memory you can actually see.",
            'body' => [
                "Monica is a personal AI memory app you can use directly. The information your assistants save doesn’t disappear into a conversation. It becomes part of your personal records in Monica.",
                "Open a contact. Review a life event. Update a note. Find something you own. Correct information that is no longer accurate.",
                "You don’t need to talk to an AI assistant every time you want to consult your own information. Monica works as a standalone application, with or without a connected assistant.",
            ],
            'closing' => "Your assistants can use Monica. But Monica is built for you.",
            // The drawing: the Maintenance section of the recliner's page, as
            // the application draws it (possessions/maintenance.blade.php).
            'label' => "The maintenance section of a recliner’s page in Monica. The recliner is furniture, kept in the living room. Two jobs are recorded. A cleaning, Leather cleaned, cost $80: done by Central Perk Upholstery on 12 September 2026, condition used to like new, next due 12 March 2027. A repair, Footrest repaired, cost $45: done by Joey Tribbiani on 2 May 2026, condition damaged to used, no next date scheduled.",
            'type' => "Furniture",
            'keptIn' => "kept in",
            'place' => "Living room",
            'item' => "Recliner",
            'title' => "Maintenance",
            'lead' => "The work done on this copy over time, with the condition before and after each job.",
            'costLabel' => "cost",
            'parts' => ["Performed by", "Performed", "Condition", "Next due"],
            'records' => [
                ['type' => "Cleaning", 'title' => "Leather cleaned", 'cost' => '$80', 'parts' => [["Central Perk Upholstery", true], ["12 September 2026", true], ["Used → Like new", true], ["12 March 2027", true]]],
                ['type' => "Repair", 'title' => "Footrest repaired", 'cost' => '$45', 'parts' => [["Joey Tribbiani", true], ["2 May 2026", true], ["Damaged → Used", true], ["Not scheduled", false]]],
            ],
        ],

        'structure' => [
            'title' => "More than a list of memories.",
            'lead' => "Your life has structure. Your memory should too.",
            'body' => [
                "Monica stores information in meaningful records. People can have family relationships. Life events can involve several people. Belongings can have locations, maintenance records and loans. Notes and lists can organize useful information by topic.",
                "When a compatible assistant looks something up, it can retrieve these records and follow supported relationships to understand more of the context. When something changes, it can update supported records rather than simply adding another version of the same fact.",
                "And when you want to organize information in your own way, Monica offers customizable templates and record types.",
            ],
            'label' => "Diagram: Chandler Bing is linked to your copy of The Shining through a loan, and to Thanksgiving dinner through participation, with Monica, Rachel and Ross",
            'belonging' => "Belonging",
            'garage' => "Stored in the freezer",
            'loan' => "Loan",
            'dueShort' => "due 5 December",
            'person' => "Person",
            'tookPart' => "Took part",
            'withYou' => "with you and three others",
            'event' => "Life event · 27 November 2025",
            'dinner' => "Thanksgiving dinner",
            'caption' => "How records connect in Monica. A diagram, not an application screen.",
            'closing' => "A personal database for real life, not just a collection of chat summaries.",
        ],

        'retrieval' => [
            'title' => "Useful today. Still useful months from now.",
            'lead' => "Persistent AI memory becomes valuable when you need information again. Ask your connected assistant to check Monica, whether you’re preparing for a meeting, looking after your home or making plans.",
            'badge' => "Example",
            'ask' => "Ask",
            'items' => [
                [
                    'title' => "Before a meeting",
                    'ask' => "Check Monica. When did I last see Janice, and what did we talk about?",
                    'body' => "Retrieve previous life events and available contact information to prepare for your next conversation.",
                ],
                [
                    'title' => "Before a service appointment",
                    'ask' => "Look up the Porsche’s maintenance history in Monica. When was its last service?",
                    'body' => "Find recorded maintenance dates, costs and next due dates without digging through old conversations.",
                ],
                [
                    'title' => "Before planning a trip",
                    'ask' => "Check my travel preferences note in Monica before booking my flight to Paris.",
                    'body' => "Bring your saved preferences into a new conversation, even if you’re using a different compatible assistant.",
                ],
            ],
            'note' => "Examples of requests you can make once the relevant information has been saved in Monica.",
        ],

        'visibility' => [
            'title' => "See what your AI assistants actually do.",
            'body' => [
                "Connecting an assistant to your personal information is a meaningful decision. You should be able to review what it does with that access.",
                "Monica records calls made by connected assistants. You can review which assistant made a request, when it happened, the tool it used and the recorded request and response, with sensitive values masked. The assistant call history is available for 90 days.",
                "You can disconnect individual assistants or revoke their API keys without deleting your saved information or disconnecting your other assistants.",
            ],
            'warningTitle' => "Know what you’re granting access to.",
            'warning' => "A connected assistant generally has access across your account, rather than only to a selected vault or a read-only view. Fields marked sensitive are withheld from assistants connected through OAuth sign-in. Only connect assistants you trust.",
            'label' => "Monica’s assistant call history. Three calls are listed: ChatGPT used list-possession-loans today at 09:14, Claude used create-possession-loan yesterday at 18:02, and Claude used search-records yesterday at 17:58. The ChatGPT call is expanded, showing its request and response, with a sensitive value masked. Below, the connected assistants, Claude and ChatGPT, each with a Disconnect button.",
            'history' => "Assistant call history",
            'kept' => "Last 90 days",
            'calls' => [
                ['ChatGPT', 'list-possession-loans', "Today at 09:14"],
                ['Claude', 'create-possession-loan', "Yesterday at 18:02"],
                ['Claude', 'search-records', "Yesterday at 17:58"],
            ],
            'request' => "Request",
            'response' => "Response",
            'assistants' => "Connected assistants",
            'used' => ["Last used yesterday", "Last used today"],
            'disconnect' => "Disconnect",
        ],

        'start' => [
            'title' => "Connect your AI assistant in three steps.",
            'lead' => "You don’t need to build your own memory infrastructure. Monica provides a ready-to-use personal information app and a remote AI memory MCP server.",
            'step' => "Step :number",
            'steps' => [
                [
                    'title' => "Create your Monica account",
                    'body' => "Start with a free hosted account, or run Monica on your own infrastructure if you prefer to self-host.",
                ],
                [
                    'title' => "Connect your assistant",
                    'body' => "Monica uses the Model Context Protocol (MCP), an open standard that allows compatible assistants to interact with external applications. Follow the setup guide for your client. Supported connection methods include OAuth sign-in and API keys.",
                ],
                [
                    'title' => "Save your first memory",
                    'body' => "Ask your assistant to save something in Monica. Then open Monica to see the record, or ask your assistant to retrieve it in another conversation.",
                ],
            ],
            'starter' => "Starter prompt",
            'starterPrompt' => "Add Phoebe to Monica and record that she played Smelly Cat at Central Perk tonight.",
            'clientsTitle' => "Looking for AI memory for ChatGPT and Claude?",
            'clients' => [
                "Monica provides setup guides for ChatGPT, Claude Desktop, Claude Code, Cursor, Codex and VS Code. You can connect multiple compatible remote MCP clients to the same account and access the same saved information from each of them.",
                "Client support, available operations and setup requirements depend on the assistant and its plan. Monica uses remote MCP over Streamable HTTP, so clients must support that transport and a compatible authentication method.",
            ],
            'guides' => "Read the MCP setup guides",
            'account' => "Create a free account",
            'clientsLabel' => "Clients with a setup guide",
        ],

        'open' => [
            'title' => "Open-source AI memory. On your terms.",
            'lead' => "Your choice of AI assistant shouldn’t determine where your personal information lives.",
            'body' => [
                "Monica is open source under the AGPL-3.0 license. You can use the hosted service or set up your own instance with Docker. The MCP server is available on self-hosted instances too, so you can build a self-hosted AI memory on infrastructure you manage.",
                "Monica doesn’t run its own AI model. Its job is to store and organize your information and make it accessible to the compatible assistants you connect.",
                "If you change assistants or providers, the information you’ve saved in Monica stays there. Connect another compatible assistant when you need it. And if you stop using AI altogether, you can still use Monica directly.",
            ],
            'closing' => "The assistants may change. Your life doesn’t.",
            'github' => "Explore Monica on GitHub",
            'selfHosting' => "Learn about self-hosting",
        ],

        'compare' => [
            'title' => "How Monica fits into the world of AI memory.",
            'lead' => "Different approaches to memory solve different problems. Monica is designed to give your personal information a home that exists outside any individual conversation or assistant.",
            'items' => [
                [
                    'title' => "Built-in assistant memory",
                    'body' => "Built-in memory can help an assistant personalize its responses. Its behavior depends on the provider, the settings and the information available to that assistant. Monica offers a separate place to keep personal records that compatible assistants can access on request.",
                ],
                [
                    'title' => "Developer-oriented memory infrastructure",
                    'body' => "AI memory infrastructure often focuses on helping developers build applications and agent workflows. Monica is a finished personal information management app with a human-facing interface and a native MCP server. It does not require you to build your own application to get started.",
                ],
                [
                    'title' => "Monica’s personal AI memory",
                    'body' => "Monica combines structured personal records, an interface you can use yourself, multiple assistant connections and a history of assistant calls. It is designed for people who want to keep useful personal information independently of any one AI provider.",
                ],
            ],
            'goodToKnow' => "Good to know",
            'notice' => "Monica complements an assistant’s existing memory. It does not automatically import, replace or synchronize that memory, and it does not perform automatic memory extraction or semantic retrieval itself.",
        ],

        'faq' => [
            'title' => "Frequently asked questions about AI memory.",
            'items' => [
                ['q' => "What is AI memory?", 'a' => "AI memory is a way for an assistant to use information beyond the current conversation. With Monica, that information is stored in a separate personal database. A connected assistant can save supported information there and retrieve it through Monica’s tools later."],
                ['q' => "Can I share AI memory across platforms?", 'a' => "Yes. Multiple compatible assistants can connect to the same Monica account. Information saved by one assistant can then be retrieved by another, provided it has access and uses Monica’s tools. This is independent of each assistant’s built-in memory."],
                ['q' => "Can I use Monica as AI memory for ChatGPT or Claude?", 'a' => "Monica provides setup guides for ChatGPT and Claude, as well as other remote MCP clients. The available connection options and supported operations depend on your assistant’s capabilities, configuration and subscription. See the MCP documentation for setup instructions."],
                ['q' => "Does Monica automatically remember everything I tell my assistant?", 'a' => "No. Monica does not read or monitor your conversations. Information is saved when your assistant calls a Monica tool to save it. You can explicitly ask your assistant to save something in Monica or check Monica when answering a question. Whether it does so automatically depends on the assistant."],
                ['q' => "What information can an assistant save in Monica?", 'a' => "Assistants can create supported records such as people by name, family relationships, life events, reminders, Knowledge notes and lists, belongings, loans and locations. Some operations are currently limited through MCP, including writing contact details such as phone numbers, birthdays and contact notes. Those details can be managed directly in Monica."],
                ['q' => "How does Monica search my personal memory?", 'a' => "Assistants can use keyword search for supported records, find notes and lists, and browse or filter other information. Monica does not provide semantic or vector search. The assistant determines which tools and search terms to use."],
                ['q' => "What is an AI memory MCP server?", 'a' => "An MCP server exposes tools that compatible AI assistants can call. Monica’s remote MCP server lets assistants read and write supported personal records, so Monica can act as a persistent personal memory outside the assistant itself."],
                ['q' => "Can I use Monica without AI?", 'a' => "Yes. Monica is a standalone personal information management application. You can create, view, edit and organize records directly without connecting an assistant."],
                ['q' => "Can I self-host my AI memory?", 'a' => "Yes. Monica is open source under AGPL-3.0 and can be deployed on your own infrastructure using Docker. Its MCP server is also available on self-hosted instances. You are responsible for securing and maintaining your own deployment."],
                ['q' => "Does Monica use my personal information to train AI models?", 'a' => "Monica does not operate or train AI models. When a connected assistant retrieves information, that information is sent to the assistant. Its provider’s privacy, retention and training policies then apply."],
                ['q' => "Can I control which information an assistant accesses?", 'a' => "You can revoke each assistant connection independently. Fields marked sensitive are hidden from assistants connected through OAuth sign-in. Connections otherwise generally have account-wide access; per-vault and read-only access are not currently available."],
                ['q' => "Can I export my personal memory?", 'a' => "Monica supports account and vault JSON exports and individual contact Markdown exports. Knowledge and possession records are not currently included in the account or vault JSON export."],
                ['q' => "Is Monica’s AI memory free?", 'a' => "MCP access is included on free hosted accounts, subject to standard free-plan limits. Self-hosted instances have no Monica-imposed plan limits. An AI assistant provider may have its own subscription requirements or usage limits."],
                ['q' => "What happens if I switch AI assistants?", 'a' => "The information you’ve saved in Monica stays in your account. You can disconnect the previous assistant and connect another compatible one, without moving your Monica records into a different memory system."],
            ],
        ],

        'closing' => [
            'title' => "Give your memories a home of their own.",
            'body' => "One place for the people, knowledge and everyday details that matter to you. Accessible to you and the compatible AI assistants you choose.",
            'lead' => "Start building your personal AI memory with Monica.",
            'cta' => "Get started for free",
            'selfHosting' => "Explore self-hosting",
            'note' => "Open source. Independent of any single AI assistant. Built for humans.",
        ],
    ],

    /**
     * The personal data management page, "Your life. Beautifully organized."
     * (route key `personalData`). English only, like the AI memory page.
     *
     * Its examples come from the demo vault, as the homepage's do, with the
     * same dry asides: Chandler, Joey's recliner Rosita, Monica's hall
     * closet, the Moist Maker. The drawings of the product each carry a
     * `label` that a screen reader reads instead of the drawing itself.
     */
    'personalData' => [
        'hero' => [
            'eyebrow' => "Personal information management, made human",
            'title' => "Your life. Beautifully organized.",
            'lede' => "The people you care about. The things you own. The moments worth remembering. The useful details you can never quite find when you need them.",
            'body' => "Monica brings your personal information together in one place, so your life doesn’t have to live across scattered notes, spreadsheets and your memory.",
            'cta' => "Get started for free",
            'organize' => "See what you can organize",
            'note' => "Open source · Self-hostable · Built for everyday life",
        ],

        'problem' => [
            'eyebrow' => "Sound familiar?",
            'title' => "The little details are everywhere.",
            'body' => "You know you wrote down that recommendation. Somewhere. The model number of your washing machine might be in an old email. The name of the guy who always brings your coffee is buried in a conversation (it’s Gunther). And the date of that important moment? You’re pretty sure you remember it.",
            'lead' => "Your life is full of information worth keeping, but it rarely comes with a good filing system.",
            'items' => [
                ['title' => "In too many places", 'body' => "Notes, messages, spreadsheets and half-forgotten documents all hold different pieces of your life."],
                ['title' => "Hard to find later", 'body' => "Saving something is easy. Remembering where you saved it six months later is the difficult part."],
                ['title' => "Missing the bigger picture", 'body' => "A name, a place and an event might be connected in real life, even when they’re stored separately."],
            ],
            'closing' => "You don’t need another complicated system.",
            'closingMuted' => "You need one personal place that makes sense.",
        ],

        'organize' => [
            'eyebrow' => "One place for real life",
            'title' => "Everything important, in its place.",
            'lead' => "Monica is personal information management software built around the things people actually want to remember. Not just documents. Not just tasks. Your people, your knowledge, your possessions and the moments that connect them.",
            'example' => "Example",
            'crm' => "Explore Monica’s personal CRM",
            // The glyph, the colour and the drawing of each item are in the
            // template, in this order.
            'items' => [
                [
                    'title' => "People and relationships",
                    'body' => "Keep the people in your life close, even when life gets busy. Save contact details, understand family and other relationships, and revisit the moments you’ve shared.",
                    'example' => "Remember who introduced you, how you met, and that Ross and Rachel were on a break.",
                ],
                [
                    'title' => "Notes and knowledge",
                    'body' => "Give useful information a home. Create folders, write notes in Markdown, and keep lists for recommendations, ideas, reference material and the things you want to return to.",
                    'example' => "Keep a list of books to read, and the one recipe for Thanksgiving leftovers that matters.",
                ],
                [
                    'title' => "Belongings and purchases",
                    'body' => "Keep track of what you own, where it lives, what it cost and what happened to it over time. Record purchases, maintenance, insurance details and things you’ve lent to others.",
                    'example' => "Find what you paid for the recliner, or remember who borrowed your Holiday Armadillo costume.",
                ],
                [
                    'title' => "Moments and milestones",
                    'body' => "Remember more than dates. Keep a personal history of visits, trips, conversations, achievements and important changes, with the people involved.",
                    'example' => "Look back at the trip to London, or at every Thanksgiving since the one with the turkey on Monica’s head.",
                ],
                [
                    'title' => "Places and spaces",
                    'body' => "Organize the places where your belongings live, from a home to a room, a cupboard or a shelf. When something moves, update its location.",
                    'example' => "Know which shelf holds the Christmas lights, and what is really in the hall closet.",
                ],
                [
                    'title' => "Dates and reminders",
                    'body' => "Some things are worth remembering at the right time. Set one-time or recurring reminders connected to people, and keep track of whether you followed through.",
                    'example' => "Remember Rachel’s birthday every 5 May, or to call your mom back every Sunday.",
                ],
            ],
            // What the six small drawings show.
            'screens' => [
                'contact' => [
                    'label' => "Chandler Bing’s page in Monica. He lives across the hall in apartment 19, you met when he moved in, his roommate is Joey Tribbiani and his partner is Monica Geller. His last life event is Thanksgiving dinner on 27 November.",
                    'name' => "Chandler Bing",
                    'meta' => "Apartment 19, across the hall",
                    'rows' => [
                        ['who' => "Joey Tribbiani", 'what' => "Roommate"],
                        ['who' => "Monica Geller", 'what' => "Partner"],
                    ],
                    'last' => "Last seen at Thanksgiving dinner",
                ],
                'knowledge' => [
                    'label' => "A Knowledge folder in Monica called Apartment 20, holding a note named The Moist Maker and a list named Books to read.",
                    'folder' => "Apartment 20",
                    'entries' => [
                        ['kind' => 'note', 'name' => "The Moist Maker", 'meta' => "Note · edited yesterday"],
                        ['kind' => 'list', 'name' => "Books to read", 'meta' => "List · 2 items"],
                        ['kind' => 'note', 'name' => "Thanksgiving seating plan", 'meta' => "Note · edited in 1997"],
                    ],
                ],
                'possession' => [
                    'label' => "A recliner named Rosita in Monica, in the living room facing the TV, bought for $1,200. It has never been lent.",
                    'name' => "Rosita",
                    'kind' => "Recliner",
                    'facts' => [['Location', "Living room"], ['Price', '$1,200']],
                    'status' => "Never lent",
                ],
                'event' => [
                    'label' => "A life event in Monica: Thanksgiving dinner on 27 November, with Monica, Rachel, Ross and Chandler. Its note says the turkey arrived late.",
                    'name' => "Thanksgiving dinner",
                    'date' => "27 November",
                    'note' => "The turkey arrived late. So did Ross.",
                ],
                'places' => [
                    'label' => "Nested locations in Monica: apartment 20, then the hall closet, which holds the Holiday Armadillo costume and the Christmas lights.",
                    'path' => ["Apartment 20", "Hall closet"],
                    'items' => ["Holiday Armadillo costume", "Christmas lights", "Do not ask"],
                ],
                'reminder' => [
                    'label' => "A reminder in Monica for Rachel Green’s birthday, every year on 5 May, by email, next in 23 days.",
                    'who' => "Rachel Green",
                    'what' => "Birthday",
                    'when' => "Every year on 5 May",
                    'next' => "In 23 days",
                    'channel' => "By email",
                ],
            ],
        ],

        'questions' => [
            'eyebrow' => "Built for the questions you actually ask",
            'title' => "The little things you’ll be glad you kept.",
            'lead' => "A good personal organization app isn’t about collecting information for its own sake. It’s about being able to find the answer when everyday life asks for it.",
            'items' => [
                ['q' => "Who has my Holiday Armadillo costume?", 'a' => "Keep your belongings and loans connected to the people who borrowed them, including the expected return date."],
                ['q' => "When did I last catch up with Gunther?", 'a' => "Look back at shared moments and get a clearer picture of how you’ve stayed in touch. Even with the people who mostly bring you coffee."],
                ['q' => "What did we pay for the foosball table?", 'a' => "Keep purchases, identifying details and maintenance history together with the item itself."],
                ['q' => "Where did I put those London recommendations?", 'a' => "Save ideas and reference notes in organized Knowledge folders and lists, ready when you need them."],
            ],
            'closing' => "Not every detail needs to live in your head. Some things just need a reliable place to stay.",
        ],

        'structure' => [
            'eyebrow' => "A real app, not just a folder of notes",
            'title' => "Give your information some structure.",
            'body' => [
                "A plain note is useful. But a person isn’t just a note. A possession isn’t just a line in a spreadsheet. And a meaningful event often involves more than one person.",
                "Monica gives different kinds of personal information their own place. Relationships connect people. Life events have dates and participants. Belongings can carry purchases, insurance records, maintenance history and locations.",
            ],
            'closing' => "That structure is what makes Monica a personal database, not merely another place to write things down.",
            'caption' => "A place for the details, the history and the context behind the things in your life.",
            'benefits' => [
                ['title' => "Connected information", 'body' => "Keep the relationships between people, experiences, belongings and places where they naturally belong."],
                ['title' => "Useful history", 'body' => "See what changed over time, from time spent with a friend to maintenance performed on an item."],
                ['title' => "Details that make sense", 'body' => "Use the fields and record types that fit the information you’re keeping."],
            ],
            // The large drawing: the Timeline section of Rosita's page, as
            // the application draws it (possessions/timeline.blade.php).
            'screen' => [
                'label' => "The timeline of a recliner named Rosita in Monica, a piece of furniture kept in the living room and tagged Do not lend. Beside it, the sections of its page: overview, timeline, transactions, insurance, valuations, provenance, maintenance, loans, locations and documents. The timeline gathers four entries. In 2001, the footrest was repaired by Joey. In 1998, Rosita was kept in the living room of apartment 19, where it still is, insured against accidental damage, and purchased together with the other recliner.",
                'type' => "Furniture",
                'keptIn' => "kept in",
                'place' => "Living room",
                'name' => "Rosita",
                'tag' => "Do not lend",
                'sections' => [
                    'overview' => "Overview",
                    'timeline' => "Timeline",
                    'transactions' => "Transactions",
                    'insurance' => "Insurance",
                    'valuations' => "Valuations",
                    'provenance' => "Provenance",
                    'maintenance' => "Maintenance",
                    'loans' => "Loans",
                    'locations' => "Locations",
                    'documents' => "Documents",
                ],
                'title' => "Timeline",
                'lead' => "Everything that happened to this possession, gathered from its other sections and kept in order.",
                'all' => "All",
                'groups' => [
                    [
                        'year' => '2001',
                        'count' => "1 entry",
                        'entries' => [
                            ['section' => 'maintenance', 'noun' => "Maintenance", 'date' => "2 May 2001", 'title' => "Footrest repaired", 'detail' => "Joey Tribbiani · The lever stuck halfway up"],
                        ],
                    ],
                    [
                        'year' => '1998',
                        'count' => "3 entries",
                        'entries' => [
                            ['section' => 'locations', 'noun' => "Location", 'date' => "14 March 1998", 'badge' => "Here now", 'title' => "Kept in Apartment 19 › Living room", 'detail' => "Facing the TV"],
                            ['section' => 'insurance', 'noun' => "Insurance", 'date' => "14 March 1998", 'title' => "Covered by Greenwich Mutual", 'detail' => "Accidental damage"],
                            ['section' => 'transactions', 'noun' => "Transaction", 'date' => "14 March 1998", 'badge' => "Acquisition", 'title' => "Purchase", 'detail' => "Bought together with the other recliner"],
                        ],
                    ],
                ],
            ],
        ],

        'yours' => [
            'eyebrow' => "Your life isn’t a template",
            'title' => "Organize your information your way.",
            'body' => "Some people want to keep a record of their family and friends. Others care more about their home, their collections or the knowledge they’ve accumulated over the years.",
            'closing' => "Monica gives you room for all of it.",
            'items' => [
                ['title' => "Separate the different parts of your life", 'body' => "Use vaults to organize distinct areas, such as personal life or work, within your account."],
                ['title' => "Keep the fields that matter", 'body' => "Choose templates and customize fields to match the people and other records you’re managing."],
                ['title' => "Create your own kinds of records", 'body' => "Your information doesn’t always fit a predefined category. Monica supports custom record types, so you can shape a personal information manager around what matters to you."],
            ],
            // The drawing: Settings, Contacts and more, as the application
            // draws it (settings/account/entity-types/index.blade.php).
            'screen' => [
                'label' => "The Contacts and more settings in Monica. Besides contacts, which are built in and hold 84 profiles, the account has created three kinds of profile of its own: apartments with 2 profiles, pets with 2 profiles and holiday costumes with 3 profiles. Each can be edited, and the rows can be dragged to change their order in the vault navigation.",
                'title' => "Contacts and more",
                'description' => "You already have profiles for people. Create other kinds of profiles for the pets, companies, or things you want to remember. Each has its own information, organized into sections, just like a contact.",
                'create' => "Create a profile type",
                'createNote' => "Start with a kind, such as “Pets.” You’ll add individual pets, such as “Garfield,” afterward.",
                'list' => "Your profile types",
                'listNote' => "Drag a row to change the order in the vault navigation.",
                'contacts' => "Contacts",
                'builtIn' => "Built in",
                'contactsCount' => "84 profiles",
                'locked' => "Can’t be deleted",
                'edit' => "Edit",
                'types' => [
                    ['name' => "Apartments", 'count' => "2 profiles"],
                    ['name' => "Pets", 'count' => "2 profiles"],
                    ['name' => "Holiday costumes", 'count' => "3 profiles"],
                ],
            ],
        ],

        'knowledge' => [
            'eyebrow' => "A home for what you know",
            'title' => "Keep knowledge worth coming back to.",
            'lead' => "A list of favorite books. Directions for taking care of the house. A collection of places to visit. A few notes you wish you’d saved years ago.",
            'body' => [
                "Personal knowledge management doesn’t have to mean building an elaborate second brain. Sometimes it simply means writing something down in a place where you know you’ll find it again.",
                "With Monica, you can organize notes and lists into folders, search their contents and keep your reference information alongside the rest of your personal life.",
            ],
            'cta' => "Get started for free",
            'caption' => "Your notes and lists, organized so they’re useful when you need them.",
            'screen' => [
                'label' => "Monica’s Knowledge area. The sidebar lists four folders: Apartment 20, Recipes, Travel ideas and Books. The Recipes folder is open on a note called The Moist Maker, the recipe for Ross’s Thanksgiving leftover sandwich, and a list called Books to read, with Little Women checked and The Shining not yet.",
                'title' => "Knowledge",
                'folders' => ["Apartment 20", "Recipes", "Travel ideas", "Books"],
                'open' => 1,
                'note' => "The Moist Maker",
                'noteMeta' => "Note · Markdown",
                'noteBody' => [
                    "Ross’s Thanksgiving leftover sandwich.",
                    "Turkey, cranberry sauce, and an extra slice of gravy-soaked bread in the middle.",
                    "Do not leave it in the office fridge.",
                ],
                'list' => "Books to read",
                'listItems' => [
                    ['done' => true, 'name' => "Little Women"],
                    ['done' => false, 'name' => "The Shining (keep it in the freezer)"],
                ],
            ],
        ],

        'ownership' => [
            'eyebrow' => "Your information, your choice",
            'title' => "Personal information deserves a personal home.",
            'lead' => "Your digital life is yours. The software you use to organize it should respect that.",
            'body' => [
                "Monica is an open-source personal information manager that you can use as a hosted application or self-host on your own infrastructure.",
                "There are no ads built into Monica, and the application works without an AI assistant. You can simply open it, review your information and keep it up to date yourself.",
            ],
            'github' => "Explore the open-source project",
            'items' => [
                ['title' => "Open source", 'body' => "Inspect the code, contribute to the project, or run an instance yourself."],
                ['title' => "Self-hostable", 'body' => "Prefer to manage your own infrastructure? Monica can run on your server."],
                ['title' => "Made for people", 'body' => "Use the app directly, without depending on a chatbot or automation to access your information."],
            ],
        ],

        'ai' => [
            'eyebrow' => "And when you want a little help",
            'title' => "Your information can work with AI, too.",
            'body' => [
                "Monica is useful on its own. But if you use AI assistants, you can also connect compatible assistants to your Monica account through the Model Context Protocol (MCP).",
                "Ask an assistant to save a note, record a life event or look up something you’ve already stored. The information remains in Monica, where you can see and manage it yourself.",
            ],
            'link' => "Discover personal AI memory",
        ],

        'faq' => [
            'title' => "A few things you might be wondering.",
            'items' => [
                ['q' => "What is personal information management software?", 'a' => "Personal information management software helps you store, organize and find information related to your everyday life. Monica brings together contacts, relationships, notes, lists, belongings, life events, locations and reminders in one application."],
                ['q' => "How is Monica different from a notes app?", 'a' => "A notes app is a good place to write things down. Monica also gives people, relationships, events and belongings their own structured records. You can still create ordinary notes and lists in Monica’s Knowledge area."],
                ['q' => "Can Monica help me organize my personal life?", 'a' => "Yes. You can use Monica as a personal organization app to keep track of people, important moments, useful knowledge, possessions, locations and reminders. You choose what to record and how to organize it."],
                ['q' => "Is Monica a personal database?", 'a' => "Yes. Monica stores different types of personal information as structured records rather than treating everything as a single text document. It also supports customizable templates and custom record types."],
                ['q' => "Can I use Monica for personal knowledge management?", 'a' => "Yes. Monica includes Knowledge folders, Markdown notes and lists. You can use them to organize reference information, recommendations, instructions and other things you want to remember."],
                ['q' => "Can I keep track of my belongings?", 'a' => "Yes. Monica can record possessions, purchase transactions, maintenance, insurance information, loans to other people and where items are stored."],
                ['q' => "Can I use Monica to keep track of friends and family?", 'a' => "Yes. Monica started as a personal CRM, and people and relationships remain central to the application. You can save contact information, relationships, reminders and life events."],
                ['q' => "Is Monica a family organizer or a shared household account?", 'a' => "Monica can store information about your household and the people in your life, but an account is currently designed for one person. It does not provide a shared multi-user family workspace."],
                ['q' => "Is Monica open source?", 'a' => "Yes. Monica is open source under the AGPL-3.0 license."],
                ['q' => "Can I self-host Monica?", 'a' => "Yes. You can run Monica on your own infrastructure instead of using the hosted service. Self-hosting requires you to manage your own server and its security, backups and configuration."],
                ['q' => "Do I need an AI assistant to use Monica?", 'a' => "No. Monica is a complete application you can use directly. AI connectivity is optional."],
                ['q' => "Can I connect ChatGPT or Claude to Monica?", 'a' => "Monica includes an MCP server and setup guides for compatible AI clients, including ChatGPT and Claude. Availability can depend on the client and its plan. See the AI memory page and the MCP documentation for details."],
                ['q' => "Is Monica free?", 'a' => "Monica offers a free hosted tier with limits, as well as paid options. You can also self-host the open-source software. See the pricing page for plan details."],
                ['q' => "Does Monica import all my contacts and documents automatically?", 'a' => "No. Monica does not currently offer a general-purpose import from Google Contacts, Apple Contacts, CSV files or arbitrary document libraries. You can enter information directly, and certain Monica-format imports are supported."],
            ],
        ],

        'closing' => [
            'eyebrow' => "Keep what matters close",
            'title' => "A place for everything you don’t want to forget.",
            'body' => "Your life is made of people, places, things, moments and countless little details. They deserve more than a handful of scattered notes.",
            'lead' => "Give them a home in Monica.",
            'cta' => "Get started for free",
            'crm' => "Explore Monica’s personal CRM",
            'note' => "Open source · Self-hostable · Made for humans",
        ],
    ],

    /**
     * The MCP server page, "Your personal data, connected to your AI agents"
     * (route key `mcpServer`). English only, like the AI memory page. The
     * technical sibling of that page: endpoints, tools, authentication.
     *
     * Its examples come from the demo vault, as the homepage's do: the
     * reader lent Ross their Holiday Armadillo costume, due back on 28
     * December. Keep the object, the person and the date in step between
     * `workflow` and `visibility`. Tool names are the product's own.
     */
    'mcpServer' => [
        'endpoint' => "https://my.monicahq.com/mcp",
        'selfHosted' => "https://YOUR-MONICA-HOST/mcp",
        'copy' => "Copy",
        'copied' => "Copied",
        'costume' => "Holiday Armadillo costume",
        'borrower' => "Ross Geller",
        'due' => "Due back 28 December",

        'hero' => [
            'eyebrow' => "Built-in Model Context Protocol support",
            'title' => "Your personal data, connected to your AI agents.",
            'lede' => "Monica comes with a built-in MCP server that lets compatible AI assistants work with your personal data, from contacts and relationships to knowledge, reminders, life events and belongings.",
            'body' => "A real personal database. A real application. And a direct connection for your agents through the Model Context Protocol.",
            'connect' => "Connect an AI assistant",
            'start' => "Get started for free",
            'tools' => "Explore MCP tools",
            'trust' => ["Open source", "Remote MCP", "OAuth and API keys", "Self-hostable"],
            'endpointLabel' => "Hosted MCP endpoint",
        ],

        'unlocks' => [
            'title' => "Give your AI assistants something useful to work with.",
            'body' => [
                "The Model Context Protocol (MCP) lets AI assistants call tools exposed by other applications.",
                "With Monica, those tools connect directly to your personal information. An assistant can look up a relationship, create a dated life event, maintain a knowledge note, track a possession or check upcoming reminders, while Monica keeps the records in a structured database you can access yourself.",
            ],
            'closing' => "No separate memory service to build. No custom bridge to maintain. The MCP server is part of Monica.",
            'flow' => [
                ['title' => "Your AI assistant", 'body' => "Sends an MCP tool request, when it decides to."],
                ['title' => "Monica MCP server", 'body' => "Authenticates and executes the supported operation."],
                ['title' => "Your Monica data", 'body' => "Stores and returns structured personal records."],
            ],
        ],

        'workflow' => [
            'title' => "From a conversation to something you can find again.",
            'steps' => [
                [
                    'title' => "Ask your assistant",
                    'prompt' => "I lent my Holiday Armadillo costume to Ross. He’ll bring it back on December 28. Save this in Monica.",
                    'body' => "Your assistant uses Monica’s MCP tools to record the loan, connect it to the person and track the expected return date.",
                    'caption' => "A natural-language request becomes a structured MCP action.",
                    'label' => "A conversation with Claude, with Monica connected. You ask Claude to save that you lent your Holiday Armadillo costume to Ross, due back on 28 December. Claude calls Monica’s create-possession-loan tool and confirms the loan is saved.",
                    'reply' => "Saved. Monica shows the costume on loan to Ross until 28 December.",
                ],
                [
                    'title' => "See it in Monica",
                    'prompt' => null,
                    'body' => "Open the costume in Monica and see its loan history alongside the rest of the information about that belonging.",
                    'caption' => "The same record is visible and editable in Monica.",
                    'label' => "The Holiday Armadillo costume’s page in Monica, stored in the hall closet. Its loans section shows it lent to Ross Geller, due back on 28 December, and an earlier loan to Ross, returned last year.",
                    'reply' => null,
                ],
                [
                    'title' => "Ask later",
                    'prompt' => "Check Monica. Who has my armadillo costume, and when should I get it back?",
                    'body' => "The assistant reads Monica’s records and returns the details you saved.",
                    'caption' => "Your assistant can retrieve the information in a later conversation.",
                    'label' => "A new conversation with ChatGPT, with Monica connected. You ask who has your armadillo costume. ChatGPT calls Monica’s list-possession-loans tool and answers that Ross has it, due back on 28 December, and that he has borrowed it before.",
                    'reply' => "Ross has it, due back on 28 December. It’s the second year running.",
                ],
            ],
            'closet' => "Stored in the hall closet",
            'loans' => "Loans",
            'onLoan' => "On loan",
            'returned' => "Returned last January",
            'connected' => "Monica connected",
            'closing' => "The assistant handles the conversation.",
            'closingMuted' => "Monica keeps the record.",
        ],

        'tools' => [
            'title' => "236 MCP tools. One personal database.",
            'lead' => "Monica exposes 236 registered MCP tools across personal information, relationships, knowledge, everyday events and things you own. Agents can perform supported operations through the same application rules as Monica’s JSON API.",
            // The glyph and the colour of each card are in the template.
            'items' => [
                [
                    'title' => "People and relationships",
                    'body' => "Find people, read their profiles, create contacts by name and manage connections between them.",
                    'prompt' => "Who is Ross related to? Keep it short, he’s been married three times.",
                    'names' => ['search-records', 'get-contact-markdown', 'create-contact-relationship'],
                ],
                [
                    'title' => "Life events and history",
                    'body' => "Record calls, meetings, trips, milestones and moments, then retrieve the details later.",
                    'prompt' => "Log my coffee with Phoebe at Central Perk, and that she played a new song about a cat.",
                    'names' => ['create-life-event', 'list-life-events', 'get-life-event'],
                ],
                [
                    'title' => "Knowledge and notes",
                    'body' => "Create and update Markdown notes, organize folders and maintain lists of information worth keeping.",
                    'prompt' => "Save the Moist Maker recipe in my Recipes notes.",
                    'names' => ['create-knowledge-note', 'search-knowledge', 'update-knowledge-note'],
                ],
                [
                    'title' => "Belongings and possessions",
                    'body' => "Keep track of purchases, maintenance, insurance records, locations and loans.",
                    'prompt' => "Record that the footrest on Rosita was repaired today. Don’t tell Joey who broke it.",
                    'names' => ['create-possession-maintenance-record', 'list-possessions'],
                ],
                [
                    'title' => "Reminders",
                    'body' => "Create recurring or one-time reminders, look up upcoming dates and record whether you remembered.",
                    'prompt' => "Remind me to feed the chick and the duck every morning.",
                    'names' => ['create-contact-reminder', 'list-vault-reminder-occurrences'],
                ],
                [
                    'title' => "Custom structures",
                    'body' => "Define and work with custom entity types, templates and structured fields that reflect how you organize your life.",
                    'prompt' => "Create a record type for my holiday costumes.",
                    'names' => ['create-entity', 'create-entity-type'],
                ],
            ],
            'stats' => [
                ['value' => "236", 'label' => "registered MCP tools"],
                ['value' => "Streamable HTTP", 'label' => "remote transport"],
                ['value' => "OAuth + API keys", 'label' => "connection methods"],
                ['value' => "One account", 'label' => "shared across multiple assistants"],
            ],
            'docs' => "Browse the complete MCP documentation",
        ],

        'connect' => [
            'title' => "Connect with OAuth or an API key.",
            'lead' => "Monica’s remote MCP server supports two authentication methods, so you can connect through an interactive authorization flow or configure a developer-oriented client with a dedicated key.",
            'endpoint' => "Endpoint",
            'firstPrompt' => "First prompt",
            'oauth' => [
                'eyebrow' => "Option A · OAuth",
                'title' => "Connect without copying a secret.",
                'body' => "For MCP clients that support the interactive OAuth flow, add the Monica MCP endpoint, sign in to your account and approve the connection.",
                'steps' => [
                    "Add the Monica remote MCP endpoint in your assistant’s connector settings.",
                    "Sign in to Monica when prompted.",
                    "Review the application name and redirect destination.",
                    "Approve access, then try a first read-only query.",
                ],
                'prompt' => "List my Monica vaults.",
                'caption' => "Authorize each connection through Monica.",
                'screen' => [
                    'label' => "Monica’s authorization screen. Claude asks to connect to your Monica account and will be redirected to claude.ai. Two buttons: Deny and Allow.",
                    'title' => "Claude wants to connect to your Monica account",
                    'body' => "It will be able to read and change the records in your account, through Monica’s MCP tools.",
                    'redirect' => "Redirects to",
                    'host' => "claude.ai",
                    'deny' => "Deny",
                    'allow' => "Allow",
                ],
            ],
            'key' => [
                'eyebrow' => "Option B · API key",
                'title' => "For developer tools and custom MCP clients.",
                'body' => "Create a dedicated API key for your assistant in Monica’s account settings. Configure that key as a bearer credential for the remote MCP endpoint, using the instructions for your chosen client.",
                'header' => "Authorization header concept",
                'headerNote' => "This is the HTTP header concept, not a universal copy-paste client configuration. The exact syntax depends on the client.",
                'prompt' => "Find Gunther in my Personal vault.",
                'caption' => "One key per assistant, each revocable on its own.",
                'screen' => [
                    'label' => "Monica’s API keys settings. Two keys are listed: My AI assistant, created today and last used a minute ago, and Cursor on the work laptop, created in October. Each has a Revoke button.",
                    'title' => "API keys",
                    'keys' => [
                        ['name' => "My AI assistant", 'meta' => "Created today · used a minute ago"],
                        ['name' => "Cursor on the work laptop", 'meta' => "Created 12 October · used yesterday"],
                    ],
                    'revoke' => "Revoke",
                    'create' => "Create a key",
                ],
            ],
            'selfHosted' => "Using your own server? Replace the hosted endpoint with",
            'guides' => "Read the step-by-step setup guides",
        ],

        'clients' => [
            'title' => "Bring the assistant you already use.",
            'body' => "Monica uses the Model Context Protocol, not a proprietary integration tied to one AI provider. It can be connected to compatible remote MCP clients, and the documentation includes setup instructions for:",
            'label' => "Clients with a setup guide",
            'note' => "Different clients support different ways to configure MCP servers, and access may depend on the client or subscription plan. Follow the guide for your setup.",
            'cta' => "See client setup instructions",
        ],

        'structured' => [
            'title' => "Give your agents more than a pile of text.",
            'body' => [
                "Monica stores information in records that reflect everyday life. People have relationships and histories. Life events have dates and participants. Possessions can have purchases, maintenance records, locations and loans. Knowledge lives in notes, folders and lists.",
                "This structure gives your assistant concrete information to look up and update, and gives you a familiar interface to review it yourself.",
                "An assistant can find a person, open their broader profile as Markdown, follow their relationships, read their life events and return a link to the corresponding Monica page.",
            ],
            'callout' => "Structured personal data, available to humans and AI assistants.",
            'caption' => "Structured records are not locked inside a chat.",
            'screen' => [
                'label' => "Ross Geller’s page in Monica. His relationships: Monica Geller, sister; Rachel Green, it’s complicated; Emma, daughter. His life events: became a paleontology professor in 2001, and his third wedding, in Las Vegas, in 1999. He has your Holiday Armadillo costume.",
                'name' => "Ross Geller",
                'meta' => "Paleontologist · friend",
                'relationships' => "Relationships",
                'rows' => [
                    ['who' => "Monica Geller", 'what' => "Sister"],
                    ['who' => "Rachel Green", 'what' => "It’s complicated"],
                    ['who' => "Emma Geller-Green", 'what' => "Daughter"],
                ],
                'events' => "Life events",
                'entries' => [
                    ['what' => "Became a professor of paleontology", 'when' => "2001"],
                    ['what' => "Got married in Las Vegas (third time)", 'when' => "1999"],
                ],
                'has' => "Has your Holiday Armadillo costume",
            ],
        ],

        'visibility' => [
            'title' => "Know what your agents accessed.",
            'lead' => "When you connect an assistant to personal information, visibility matters.",
            'body' => [
                "Monica provides a dedicated MCP history showing tool calls made by connected assistants. Review the assistant, the operation, the result and the request and response details available in the history.",
                "Each connected assistant can be disconnected independently. Revoking one connection does not erase the information already stored in Monica or disconnect your other assistants.",
            ],
            'points' => [
                "Review MCP call history for up to 90 days.",
                "See actions grouped and filterable by assistant, date, outcome and tool.",
                "Revoke individual OAuth connections or API keys.",
                "Mark selected template fields as sensitive; OAuth-connected assistants cannot read those field values.",
            ],
            'warning' => "Connected assistants have account-wide access. Monica does not currently offer read-only or per-vault MCP permissions. Review each connection before approving it.",
            'caption' => "See the calls your assistants make, and disconnect them individually.",
            'screen' => [
                'label' => "Monica’s MCP call history, filtered to the last 7 days. Four calls: ChatGPT used list-possession-loans today at 09:14, Claude used create-possession-loan yesterday at 18:02, Cursor used search-knowledge yesterday at 11:30, and Claude used get-contact-markdown on Monday, which failed. The first call is expanded, with a sensitive value masked.",
                'title' => "MCP history",
                'filters' => ["All assistants", "Last 7 days", "All outcomes"],
                'calls' => [
                    ['ChatGPT', 'openai', 'list-possession-loans', "Today at 09:14", true],
                    ['Claude', 'claude', 'create-possession-loan', "Yesterday at 18:02", true],
                    ['Cursor', 'cursor', 'search-knowledge', "Yesterday at 11:30", true],
                    ['Claude', 'claude', 'get-contact-markdown', "Monday at 22:47", false],
                ],
                'request' => "Request",
                'response' => "Response",
                'failed' => "Failed",
            ],
        ],

        'reference' => [
            'title' => "Built on an open protocol. Ready for your setup.",
            'lead' => "Monica exposes a remote MCP endpoint over HTTPS using Streamable HTTP. MCP tools use Monica’s existing application API behavior and account rules, so you work with the same personal records you see in the web application.",
            'head' => ["Capability", "Monica MCP server"],
            'rows' => [
                ["Protocol", "Model Context Protocol (MCP)"],
                ["Transport", "Remote Streamable HTTP over HTTPS"],
                ["Endpoint", "/mcp on your hosted or self-hosted Monica instance"],
                ["Authentication", "OAuth or bearer API key"],
                ["Tool catalogue", "236 registered tools"],
                ["MCP primitives", "Tools only; no published MCP resources or prompts"],
                ["Data", "People, relationships, life events, reminders, notes, lists, possessions, places and more"],
                ["Hosted request limit", "60 MCP calls per minute per connection"],
                ["Self-hosted", "Available; no application MCP rate limit"],
                ["Documentation", "/docs/mcp and /docs/mcp.md"],
            ],
            'hosted' => "Remote MCP endpoint",
            'pattern' => "Self-hosted endpoint pattern",
            'note' => "Monica is not an MCP framework or an autonomous memory extraction service. Your assistant decides when to invoke a tool and what information to send.",
            'docs' => "Open MCP documentation",
            'github' => "Explore the open-source code",
        ],

        'selfHosting' => [
            'title' => "Your server. Your personal data. Your choice.",
            'body' => [
                "Monica is open source under the AGPL-3.0 license and can be self-hosted. Run the personal database and its built-in MCP server on infrastructure you control, or use Monica’s hosted service and connect to its remote endpoint.",
                "The same core MCP integration is available to free hosted accounts and self-hosted installations. If you self-host, you manage your server’s deployment, security, backups and availability.",
            ],
            'cta' => "Explore self-hosting",
        ],

        'compare' => [
            'title' => "Not just an MCP endpoint. A home for the data behind it.",
            'lead' => "An MCP server is useful when the information behind it stays understandable and manageable. Monica provides the application, the database and the agent connection together.",
            'head' => ["A standalone MCP integration", "Monica"],
            'rows' => [
                ["Connects an assistant to tools", "Yes", "Yes"],
                ["Includes a usable personal information app", "Depends on implementation", "Yes"],
                ["Structured people, events and belongings", "Depends on backend", "Built in"],
                ["Human-readable records", "Depends on backend", "Yes"],
                ["Individual assistant connection history", "Depends on implementation", "Yes"],
                ["Open source and self-hostable", "Depends on project", "Yes"],
            ],
            'caption' => "What a standalone MCP integration and Monica each provide",
            'closing' => "Built for the people whose data it stores, not only for the agents that access it.",
        ],

        'faq' => [
            'title' => "Frequently asked questions",
            'items' => [
                ['q' => "What is the Monica MCP server?", 'a' => "It is Monica’s built-in Model Context Protocol (MCP) server, which lets compatible AI assistants use tools to read and modify supported personal data stored in Monica."],
                ['q' => "Is Monica an open-source MCP server?", 'a' => "Yes. Monica is an open-source application under the AGPL-3.0 license, and its MCP server is included in the application. You can use the hosted service or self-host Monica."],
                ['q' => "What is the MCP endpoint URL?", 'a' => "On the hosted service, the remote MCP endpoint is https://my.monicahq.com/mcp. A self-hosted instance exposes /mcp on its own public address."],
                ['q' => "Does Monica support remote MCP connections?", 'a' => "Yes. Monica uses Streamable HTTP over HTTPS. It does not provide a separate local stdio MCP server. Your client needs remote MCP support."],
                ['q' => "Can I connect Claude or ChatGPT to Monica?", 'a' => "Monica provides setup instructions for Claude Desktop and ChatGPT, as well as developer-oriented clients. Availability and setup requirements depend on the client and, in some cases, subscription plan. Consult the current MCP documentation for the supported flow."],
                ['q' => "Does Monica support OAuth authentication?", 'a' => "Yes. Supported clients can use an interactive OAuth authorization flow. Monica also supports bearer API keys for clients that require manual configuration."],
                ['q' => "Can I use the same Monica data with multiple AI assistants?", 'a' => "Yes. You can connect multiple assistants to a single Monica account. Each connection can be managed and revoked independently, and the assistants can access the same account data within the permissions of their connection."],
                ['q' => "How many MCP tools does Monica offer?", 'a' => "Monica registers 236 MCP tools. Tool availability varies by account permissions, administrator access and enabled features."],
                ['q' => "What kinds of data can MCP tools work with?", 'a' => "Supported tools cover people, relationships, life events, reminders, knowledge notes and lists, possessions, places, templates and other personal record types. Not every operation supported by the web application is available through MCP."],
                ['q' => "Can an assistant save someone’s phone number or birthday in Monica?", 'a' => "Not through the current MCP tools. Assistants can create people by name and manage many related records, but editing a person’s detailed profile fields requires the Monica web interface or JSON API."],
                ['q' => "Can I give an AI assistant read-only access?", 'a' => "Not currently. Standard connected assistants have broad account-wide access. Monica does not yet provide a read-only or per-vault MCP access setting. Some template fields can be marked sensitive, which prevents OAuth-connected assistants from reading those values."],
                ['q' => "Does Monica automatically remember everything I tell an assistant?", 'a' => "No. Monica does not listen to your conversations or automatically extract memories. Information is stored or retrieved when your AI assistant calls Monica’s MCP tools."],
                ['q' => "Is MCP access available on the free plan?", 'a' => "Yes. The MCP server is available on free hosted accounts, subject to the usual account limits and any server-side rate limits. Self-hosting is also available."],
                ['q' => "Can I see what my AI agent did?", 'a' => "Yes. Monica provides a history of MCP tool calls, including request and response details, retained for up to 90 days. You can also disconnect assistants individually."],
                ['q' => "Can I use Monica MCP with my self-hosted instance?", 'a' => "Yes. Replace the hosted MCP endpoint with the /mcp endpoint on your instance. You are responsible for making it securely reachable from your MCP client."],
                ['q' => "Does Monica provide semantic search or automatic memory extraction?", 'a' => "No. Monica provides structured records and keyword search. Any automatic decision to store or retrieve information depends on the connected assistant."],
            ],
        ],

        'closing' => [
            'title' => "Your personal database is ready for your AI agents.",
            'body' => "Connect a compatible assistant, explore Monica’s MCP tools, and start building a personal information system that works for both you and the agents you choose.",
            'connect' => "Connect an AI assistant",
            'start' => "Get started for free",
            'aiMemory' => "Looking for the human side of AI memory?",
            'note' => "Open source · Self-hostable · MCP included",
        ],
    ],

    'footer' => [
        // The closing line ends every page, so it is two short sentences rather
        // than a pitch. Each one is its own line.
        'closing' => ["Monica remembers.", "You go outside."],
        'start' => "Start using Monica",
        'github' => "View on GitHub",

        'tagline' => "Your open-source personal database. AGPL-3.0.",
        'productLabel' => "Product",
        'developersLabel' => "Developers",
        'companyLabel' => "Company",
        'personalCrm' => "What is a personal CRM?",
        'aiMemory' => "AI memory",
        'personalData' => "Personal data management",
        'mcpServer' => "MCP server",
        'changelog' => "Changelog",
        'mcp' => "MCP",
        'api' => "API",
        'contactSales' => "Contact sales",
        'privacy' => "Privacy",
        'terms' => "Terms",
        'team' => "Team",
        'support' => "Support",
        'about' => "About",

        'art' => "A meadow by a lake, with pandas lounging in the grass and napping in the trees",
        'copyright' => "© :year Monica. No pandas were tracked. We wish we could say that Monica is trademarked, but it’s not. Please be nice.",
        'languageLabel' => "Change language",
        // Under the copyright, on a page that is also published as Markdown.
        'markdown' => "View as Markdown",
    ],

    'blog' => [
        'title' => "Blog",
        'lede' => "Notes on building Monica, keeping personal data private, and the small mechanics of staying in touch.",

        'morePosts' => "More posts",
        'previousPost' => "Previous post",
        'nextPost' => "Next post",
        'latestPost' => "This is the latest post",
        'firstPost' => "This is the first post",
        'seeAllPosts' => "See all posts",
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
            'body' => "A private, open-source personal database for your contacts, everything you own, and everything you need to remember. Self-host it, or let us run it.",
            'bodyPost' => "Keep track of the people in your life without handing them to an advertising database.",
            'cta' => "Get started",
        ],


        'openSource' => [
            'title' => "Open source",
            'body' => "Monica has been open source since the beginning. Read the code, run your own instance, send a patch.",
        ],
    ],

    /**
     * Started as the terms published at monicahq.com/terms, then updated in
     * November 2026 to allow the API, the MCP server and the integrations and
     * plugins Monica publishes. This is the authoritative wording; the other
     * locales are translations of it. Change it here first.
     */
    'terms' => [
        'title' => "Our terms of use",
        'updated' => "Last update: :date",
        'updatedOn' => "November 20, 2026",

        'sections' => [
            [
                'title' => "Scope of service",
                'blocks' => [
                    ['text' => "Monica supports the following browsers:"],
                    ['items' => [
                        "Edge (latest)",
                        "Firefox (latest)",
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
                    ['text' => "You have the right to export your data at any time, in the JSON format."],
                    ['text' => "Your data will not be intentionally shown to other users or shared with third parties."],
                    ['text' => "Your personal data will not be shared with anyone without your consent."],
                    ['text' => "Your data is backed up every day."],
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
                    ['text' => "You may not make automated requests to the site, with one exception: you may use Monica's API, its MCP server, and the integrations and plugins published by Monica for Claude, ChatGPT, Gemini and other compatible assistants and agents, as their documentation describes. That access remains subject to these terms, and to reasonable limits that keep the service available to everyone."],
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
     * Started as the policy published at monicahq.com/privacy, then updated in
     * November 2026 for the new hosting and for connecting an external
     * assistant. This is the authoritative wording; the other locales are
     * translations of it. Change it here first.
     *
     * One untitled section: the published policy is a flat run of paragraphs
     * with no headings, and inventing some would be editing a legal document.
     */
    'privacy' => [
        'title' => "Our privacy policy",
        'updated' => "Last update: :date",
        'updatedOn' => "Nov 20, 2026",

        'sections' => [
            [
                'blocks' => [
                    ['text' => "Monica is an open-source project. The hosted version has a premium plan that lets us collect money so we can pay for the servers and additional services, but the main goal is not to make money (otherwise we wouldn't have open-sourced it)."],
                    ['text' => "Monica comes in two flavors: you can either use our hosted version, or download it and run it yourself. In the latter case, we do not track anything at all. We don't know that you've even downloaded the product. Do whatever you want with it (but respect your local laws)."],
                    ['text' => "When you create your account on our hosted version, you are giving the site information about yourself that we collect. This includes your name, your email address and your password, that is encrypted before being stored. We do not store any other personal information."],
                    ['text' => "When you login to the service, we are using cookies to remember your login credentials. This is the only purpose of the cookies."],
                    ['text' => "The hosted version of Monica runs on Laravel Cloud. Apart from us, only Laravel Cloud and the infrastructure providers it relies on have access to those servers."],
                    ['text' => "We do daily backups of the database."],
                    ['text' => "Your password is encrypted with bcrypt, a password hashing algorithm that is highly secure. You can also activate two factor authentication on your account if you need an extra layer of security. Apart from those encryption mechanisms, your data is not encrypted in the database. If someone gets access to the database, they will be able to read your data. We do our best to make sure that this never happens, but it can happen."],
                    ['text' => "If a data breach happens, we will contact the users who are affected to warn them about the breach."],
                    ['text' => "Transactional emails are sent through Resend."],
                    ['text' => "We use Sentry to track errors that happen in production. It records the errors along with the account ID, which lets us debug what's going on."],
                    ['text' => "We also use Laravel Nightwatch, a service of Laravel Holdings Inc., to monitor the application and to find and diagnose errors and performance problems. Nightwatch processes this data on our behalf. It receives technical information about the requests made to Monica (your IP address, the HTTP headers and your browser's user agent), your account ID, and the subject and recipient of the notifications we send. It identifies you by your account ID, not by your name. We rely on our legitimate interest in keeping the service secure and working well: detecting bugs, diagnosing errors and improving performance. This data is stored in the United States and deleted after 30 days."],
                    ['text' => "The site does not currently and will never show ads. It also does not, and don't intend to, sell data to a third party, with or without your consent. We are just against this. Fuck ads."],
                    ['text' => "We do not use any tracking third parties, like Google Analytics or Intercom, that track user behaviours or data, neither on the marketing site or the hosted version. We are deeply against their principles as they would use those data to profile you, which we are totally against."],
                    ['text' => "All the data you put on Monica belongs to you. We do not have any rights on it. Please don't put illegal stuff on it, otherwise we'd be in trouble."],
                    ['text' => "All the information about the contacts you put on Monica are private to you. We do not cross link information between accounts or use one information in an account to populate another account (unlike Facebook for instance)."],
                    ['text' => "You can connect your account to an external assistant or agent, such as Claude, ChatGPT, Gemini or any other application that supports MCP, through Monica's MCP server, the API, or one of the integrations and plugins we publish. Nothing is connected unless you set it up yourself: an assistant only gets access after you approve it from your Monica account, and an API key only works once you have created it. When you create an API key, you also choose whether it can read the values of fields marked sensitive."],
                    ['text' => "Once connected, an assistant works within your account through the operations Monica makes available, to carry out what you ask of it. Depending on your request, it can retrieve the information it needs, such as names, contact details, notes, life events, reminders, templates or vaults, and it can create or change information in your account on your behalf. We never send your data to an assistant ourselves: it only receives what it retrieves while acting on your requests."],
                    ['text' => "Information an assistant retrieves leaves Monica and is processed by the company that runs it (Anthropic for Claude, OpenAI for ChatGPT, Google for Gemini, or the provider of whichever tool you chose), under that company's own terms and privacy policy, not this one. That company may keep it, for instance in your conversation history. Choose an assistant you trust with these details."],
                    ['text' => "You can revoke this access at any time. Your settings list every connected assistant and let you disconnect it, and let you revoke any API key you created. Once you do, that assistant or key can no longer reach your account. You can also remove the connection from the assistant's own settings. Information it already retrieved stays with the company that runs it: delete it there, for instance by deleting the conversation."],
                    ['text' => "We use Stripe to collect payments made to access the paid version. We do not store credit card information or anything concerning the transactions themselves on our servers. However, as per the open-source library we use to process the payments (Laravel Cashier), we store the last 4 digits of the credit card, the brand name (VISA or MasterCard). As a user, you are identified on Stripe by a random number that they generate and use."],
                    ['text' => "Regarding the payments, you can downgrade or cancel your subscription whenever you like, and delete your account too. When you cancel, Stripe is automatically updated and we have no way to charge you again, even if we would like to. The less we deal with payment information, the happier we are."],
                    ['text' => "You can export your data at any time. You can also use the API to export all your data if you know how to do it. You can also request that we process this ourselves and send it to you. Your data will be exported in the JSON format."],
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
        'art' => "A globe seen from above the Atlantic: a panda under the Québec flag, another by the Eiffel Tower in France, and a paper plane flying the dotted line between them",
    ],

    /**
     * The about page: who makes Monica, how it started, and what it will never
     * do. The two people are Régis and Alexis in every language, and their
     * photos are the blog's author photos.
     */
    'about' => [
        'hero' => [
            'eyebrow' => "About",
            'title' => "Built by two people.",
            'lede' => "One wrote the first line. The other made sure it kept running.",
            'body' => [
                "Monica is an open-source personal CRM, made by Régis and Alexis. There is no company of fifty behind it, no investors and no growth target written on a whiteboard. There are two people who would like to remember their friends a little better.",
                "Everything else is the people who use it: the ones who host it themselves, report what broke, translate it into their language and pay for hosting so the two of us can keep working on it.",
            ],
            'team' => "Meet the two of us",
            'history' => "How it started",
        ],

        'team' => [
            'title' => "Meet the team",
            'lede' => "The whole of it.",
            'people' => [
                [
                    'name' => "Régis Freyd",
                    'where' => "Co-founder",
                    'role' => "Started Monica, writes most of the bugs",
                    'bio' => "Wrote the first version in 2017 to keep track of his own friends and family. Still writes features, answers support and argues for fewer settings.",
                    'facts' => [
                        ['k' => "Usually working on", 'v' => "Product and the app"],
                        ['k' => "Favourite part", 'v' => "Deleting code"],
                        ['k' => "Least favourite part", 'v' => "Timezones"],
                    ],
                ],
                [
                    'name' => "Alexis Saettler",
                    'where' => "Co-founder",
                    'role' => "Keeps Monica running, everywhere",
                    'bio' => "Works on the infrastructure and the really hard things: the Docker images, the releases, and everything that only breaks on somebody else’s server. Fixes what Régis ships.",
                    'facts' => [
                        ['k' => "Usually working on", 'v' => "Infrastructure and releases"],
                        ['k' => "Favourite part", 'v' => "A green build"],
                        ['k' => "Least favourite part", 'v' => "Also timezones"],
                    ],
                ],
            ],
        ],

        'facts' => [
            'title' => "The company, in numbers",
            'lede' => "Small ones, mostly. We are fond of them.",
            'items' => [
                ['k' => "Started", 'v' => "2017"],
                ['k' => "People", 'v' => "2"],
                ['k' => "Offices", 'v' => "None"],
                ['k' => "Investors", 'v' => "None"],
                ['k' => "Funded by", 'v' => "Subscriptions"],
                ['k' => "Licence", 'v' => "AGPL"],
                ['k' => "Ads shown", 'v' => "0"],
                ['k' => "Data sold", 'v' => "0"],
                ['k' => "Birthdays forgotten", 'v' => "Fewer each year"],
            ],
        ],

        'history' => [
            'title' => "The road to Monica",
            'lede' => "A personal CRM usually starts with a forgotten birthday.",
            'items' => [
                ['year' => "2017", 'title' => "The first version.", 'body' => "Régis builds a small app to remember things about the people around him, and puts the code on GitHub."],
                ['year' => "2017", 'title' => "Hosted Monica opens.", 'body' => "People who would rather not run a server can pay for one. That revenue is still what keeps the project going."],
                ['year' => "2018", 'title' => "Alexis joins.", 'body' => "First as a contributor, then as the person who keeps Monica installable, upgradable and running on other people’s machines."],
                ['year' => "Later", 'title' => "Thousands of contributors and translators.", 'body' => "Monica is translated by its users into dozens of languages, and patched by people who wanted one thing to work differently."],
                ['year' => "2026", 'title' => "Monica v3.", 'body' => "A rewrite: calmer, faster, easier to host, and built on everything learned from the first version."],
            ],
        ],

        'why' => [
            'title' => "Why Monica exists",
            'body' => [
                "I wanted somewhere to write down what I know about the people I care about: the name of a friend’s new partner, when someone’s mother had surgery, what we talked about last time. Contacts apps store phone numbers. Note apps forget who a note is about.",
                "I also did not want any of that sitting in a company’s database that might be sold, shut down or mined for advertising. What you write about your family is the most private data you have.",
                "So Monica is open source and self-hostable, and the hosted version is paid for by the people who use it. Nobody else is in the room.",
            ],
            'signature' => "Régis",
            'promises' => [
                ['t' => "Open source", 'b' => "The full source is public under the AGPL."],
                ['t' => "Self-hostable", 'b' => "One Docker command and it runs on hardware you control."],
                ['t' => "Funded by users", 'b' => "No investors, no advertising, nobody to answer to but the people who use it."],
                ['t' => "Your data is yours", 'b' => "Export everything, any time, in full. Delete it and it is gone."],
            ],
        ],

        'nos' => [
            'title' => "Not on the roadmap",
            'lede' => "Saying no is most of the work.",
            'items' => [
                ['t' => "Advertising", 'b' => "Nobody needs an ad next to their grandmother’s birthday."],
                ['t' => "Selling your data", 'b' => "Not at any price."],
                ['t' => "A social network", 'b' => "Monica is private. Nobody you add is told about it."],
                ['t' => "Per-contact pricing", 'b' => "Meeting someone new should not cost you money."],
                ['t' => "A sales pipeline", 'b' => "There are plenty of CRMs for that. This one is for your life."],
                ['t' => "Streaks and badges", 'b' => "Calling your mother is not a game."],
            ],
        ],

        'openSource' => [
            'eyebrow' => "Open source",
            'title' => "The code is public. Including the parts we would rather rewrite.",
            'body' => "Every commit happens in the open. Read the source, see what happens to your data, file an issue, send a patch, or fork it and run your own. Contributions are welcome, and so is a well-argued disagreement.",
            'github' => "View on GitHub",
            'docs' => "Documentation",
            'items' => [
                ['t' => "Read the code", 'b' => "Every line, including the server side."],
                ['t' => "Contribute", 'b' => "Issues, patches and translations are welcome."],
                ['t' => "Self-host it", 'b' => "Install it, run it, keep the data on your own server."],
                ['t' => "Built in public", 'b' => "Releases and changes are published on GitHub."],
            ],
        ],

        'signOff' => [
            'title' => "Monica is the address book we always wanted to have.",
            'body' => "We hope it helps you call someone you have been meaning to call.",
            'names' => ["Régis", "Alexis"],
        ],
    ],

    // The contribute page, at /en/contribute/. The links are in `links` in config.php.
    'contribute' => [
        'imageAlt' => "A panda in a top hat pointing at you, above the words: I need you to improve me",
        'badge' => "Open source",
        'since' => "Nights and weekends, since 2017.",
        'title' => "Help us keep Monica going.",
        'lede' => "In the age of AI, it’s difficult to know where open source will go. Since you can now basically replace any software with a few prompts, what does it mean to maintain open source projects these days?",
        'body' => [
            "Honestly, we don’t know. It’s still our passion, and that’s why we want to work on it during nights and weekends. It gives us a sense of contributing something good to the world.",
            "Your reasons might be different, but you still might want to contribute to Monica somehow.",
        ],
        // :sponsor is replaced by a link whose text is `sponsorLink`.
        'sponsor' => "While you can :sponsor, you can also contribute in other ways.",
        'sponsorLink' => "contribute to the project financially",

        'docs' => [
            'title' => "Review our documentation to make sure it’s accurate.",
            'body' => "Submit an issue or even a pull request for any changes you would like to make.",
            'link' => "Read our guidelines for pull requests",
        ],

        'translate' => [
            'title' => "Help us translate the app and the marketing site.",
            'body' => "All translations are directly in the code. We do support many languages, but full disclosure: they are all done by AI. So they might not be super accurate, and obviously, we don’t understand most of them. If you need to add a new language, open an issue, and we will make it happen.",
        ],

        // :tracker and :skills are replaced by links whose text is
        // `trackerLink` and `skillsLink`.
        'tokens' => [
            'eyebrow' => "This one is big",
            'title' => "Spend your own tokens.",
            'body' => "We do believe that the future of open source contributions revolves around tokens. We have many open bugs in our :tracker. We also have many features we would like to implement. So, point Claude or ChatGPT to one of these issues. Please do use our skills in the :skills to strictly follow our guidelines.",
            'trackerLink' => "bug tracker",
            'skillsLink' => "skills folder",
            'closing' => "Spending your own tokens instead of ours will be a tremendous help. We believe this is what will help us the most.",
            'issues' => "Browse open issues",
            'skillsButton' => "Open the skills folder",
        ],
    ],

    /**
     * The support page. The address itself is not here: it lives in
     * config.php and never reaches the HTML in readable form. See
     * _partials/support/email.blade.php.
     *
     * `docs` is in the same order as `supportDocs` in config.php, which
     * holds each entry's URL and icon.
     */
    'support' => [
        'eyebrow' => "Support",
        'title' => "Help with Monica, from the people who build it",
        'lede' => "Write to us about anything that does not work the way you expect, or start with the documentation that ships inside the app.",

        'contactTitle' => "Contact support",
        'emailLabel' => "Email",
        'emailHelp' => "Tell us what you were doing, what you expected and what happened instead. A screenshot helps more than you think.",
        'emailButton' => "Write to support",
        'hoursLabel' => "Opening hours",
        'hours' => "8:00 to 18:00",
        'days' => "Monday to Friday",
        'hoursHelp' => "A message sent outside these hours is read on the next working day.",

        'docsTitle' => "Documentation",
        'docsLede' => "Four guides and references, available inside the app once you sign in.",
        'docs' => [
            ['kind' => "Guide", 'title' => "Using Monica", 'description' => "What each part of the product is for, from your first contact to reminders, templates and sharing a contact with someone."],
            ['kind' => "Reference", 'title' => "API", 'description' => "Read and write your contacts from your own scripts. Every endpoint, with examples in cURL, JavaScript and PHP."],
            ['kind' => "Reference", 'title' => "MCP", 'description' => "Point an assistant at your instance so it can read your directory and record people in it, with the access you have."],
            ['kind' => "Guide", 'title' => "CardDAV and CalDAV", 'description' => "Keep the contacts and calendar apps on your phone and computer in step with Monica."],
        ],
    ],

    'notFound' => [
        'title' => "Page not found.",
        'body' => "This address does not lead anywhere. It may have moved, or it may never have existed.",
    ],

    /**
     * The handbook (`_layouts/handbook`, `_partials/handbook/`). Read in the
     * locales listed in $handbookSlugs in config.php, so a locale that drops
     * out of that list can lose this block with its articles.
     *
     * The articles are Markdown in source/_handbook_<locale>/; this is only
     * the frame around them.
     */
    'handbook' => [
        'title' => "Our handbook",
        'intro' => "This handbook explains what I do, how I think and how I want to move this project forward. Brace yourself, it's very good. At least I think so.",
        'art' => "A panda reading a book, sitting between a pile of books and a cup of coffee",
        'contents' => "Table of contents",
        'sections' => [
            'general' => "General information",
            'product' => "Product",
            'engineering' => "Engineering",
            'community' => "Community and open source",
            'privacy' => "Privacy and security",
            'marketing' => "Marketing",
            'business' => "Running a business",
            'relationships' => "Human relationships",
        ],
        'articles' => ":count articles",
        'words' => ":count words",
        'minutes' => ":count min read",

        'actions' => [
            'label' => "Use this article elsewhere",
            'copy' => "Copy for LLM",
            'copied' => "Copied as Markdown",
            'markdown' => "View as Markdown",
            'claude' => "Open in Claude",
            'chatgpt' => "Open in ChatGPT",

            // The question each assistant is opened with. :url is the
            // article's Markdown file.
            'prompt' => "Read :url and help me understand it. I may have questions about it.",
        ],

        'writtenBy' => "Written by",
        'author' => "Régis Freyd",
        'authorRole' => "Co-founder",

        // :percent is the article's length as a share of the book's.
        'comparison' => "This represents only :percent of the number of words in :title by :author",

        // One book per article, picked from the article's slug, so the same
        // article always compares itself to the same book. Word counts are
        // rounded, as the comparison is.
        'books' => [
            ['title' => "Don Quixote", 'author' => "Miguel de Cervantes", 'words' => 430000],
            ['title' => "A Tale of Two Cities", 'author' => "Charles Dickens", 'words' => 135000],
            ['title' => "The Lord of the Rings", 'author' => "J.R.R. Tolkien", 'words' => 455000],
            ['title' => "The Little Prince", 'author' => "Antoine de Saint-Exupéry", 'words' => 16000],
            ['title' => "Harry Potter and the Philosopher's Stone", 'author' => "J.K. Rowling", 'words' => 77000],
            ['title' => "The Hobbit", 'author' => "J.R.R. Tolkien", 'words' => 95000],
            ['title' => "And Then There Were None", 'author' => "Agatha Christie", 'words' => 66000],
            ['title' => "Dream of the Red Chamber", 'author' => "Cao Xueqin", 'words' => 845000],
            ['title' => "The Catcher in the Rye", 'author' => "J.D. Salinger", 'words' => 73000],
            ['title' => "The Da Vinci Code", 'author' => "Dan Brown", 'words' => 138000],
        ],

        'factTitle' => "Random fact, so we don't die stupid",

        // One per article, picked from its slug like the book above.
        'facts' => [
            "The first computer virus was created in 1983 and was called 'Elk Cloner.' It infected Apple II computers via floppy disks.",
            "The first webcam was used at the University of Cambridge to monitor a coffee pot, ensuring researchers wouldn't make a wasted trip for an empty pot.",
            "The original name of Windows was 'Interface Manager.' Thankfully, they went with something catchier.",
            "The first website ever created is still online. It was created by Tim Berners-Lee in 1991 and is about the World Wide Web project itself.",
            "The Firefox logo isn’t a fox. It’s a red panda. The name 'Firefox' is a nickname for the red panda.",
            "The first email ever sent was by Ray Tomlinson to himself in 1971. It was a test message containing random letters.",
            "In the 1950s, computers were referred to as 'electronic brains,' and programming was considered 'women's work.'",
            "The term 'bug' in software originated when a real moth caused a malfunction in the Harvard Mark II computer in 1947.",
            "Amazon was originally called 'Cadabra,' as in 'abracadabra.' It was changed because it sounded too much like 'cadaver.'",
            "The first computer mouse was made of wood. It was invented by Doug Engelbart in 1964.",
            "There are more than 1.5 billion websites on the internet, but less than 200 million are active.",
            "The QWERTY keyboard layout was designed to slow down typing to prevent mechanical typewriters from jamming.",
            "The first domain ever registered was Symbolics.com on March 15, 1985. It's still active today.",
            "The '@' symbol was chosen for email addresses because it was rarely used in computing, so it wouldn't conflict with existing protocols.",
            "The term 'surfing the internet' was coined in 1992 by librarian Jean Armour Polly, who wrote an article titled 'Surfing the Internet.'",
            "CAPTCHA stands for 'Completely Automated Public Turing test to tell Computers and Humans Apart.'",
            "The first 1GB hard drive, announced in 1980, weighed over 500 pounds and cost $40,000.",
            "Google was initially called 'Backrub' because the system checked backlinks to estimate the importance of sites.",
            "The first YouTube video, titled 'Me at the zoo,' was uploaded on April 23, 2005, by one of the platform's co-founders, Jawed Karim.",
            "The most common password in 2023 is still '123456,' followed closely by 'password.'",
            "The original Space Invaders game caused a shortage of 100-yen coins in Japan due to its popularity.",
            "The first computer programmer was Ada Lovelace in the 1840s, before computers were even built.",
            "The term 'spam' for unwanted emails comes from a Monty Python sketch where the word is repeatedly mentioned.",
            "The first search engine ever was called 'Archie,' created in 1990 to index FTP sites.",
            "The first online transaction was a sale of marijuana between Stanford and MIT students in the early 1970s, over ARPANET.",
            "The longest-running computer program is the 'Doomsday Flight' simulation, running since 1973 to test airline software.",
            "The '404 error' was named after a room at CERN where the original web servers were located.",
            "The first computer game ever created was 'Spacewar!' in 1962, developed by Steve Russell at MIT.",
            "The word 'robot' comes from the Czech word 'robota,' meaning 'forced labor' or 'drudgery.'",
            "The '@' symbol is called 'snail' in Italian and 'monkey's tail' in Dutch.",
        ],
    ],
];
