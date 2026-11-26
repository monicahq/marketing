---
title: "Monica vs Mesh (formerly Clay)"
description: "Compare Monica and Mesh, formerly Clay.earth, on contact sync, the free plan, mobile apps, data exports and self-hosting."
proposed_path: "/en/compare/monica-vs-mesh/"
last_verified: "2026-11-25"
---

# Monica vs Mesh (formerly Clay)

<!-- Maquette : afficher la signature et la date sous le titre. Donner aux deux cartes et aux deux liens le même traitement visuel. -->

Clay.earth, the personal CRM, became Mesh in March 2026. Mesh brings contacts together from the accounts you connect and helps keep their profiles up to date. Monica gives you structured records for people, family relationships, possessions and notes, with the option to run it on your own server. Clay.com is a separate service for sales and marketing data. [Mesh’s announcement][mesh-rename] · [Clay.com][clay-com]

*Written by the Monica team. Last verified November 25, 2026.*

## Which one fits what you need?

### Choose Mesh if you want a contact list that builds itself

- You want to bring together people from email, calendars and supported social accounts, with updates when contacts change jobs or move.
- You want a native mobile app or a hosted free plan. Mesh Personal covers up to 1,000 contacts and requires a card.
- Some profile information supplied by Mesh is excluded from its CSV export. [Mesh plans][mesh-pricing] · [Mesh apps][mesh-apps] · [Mesh export guide][mesh-export]

[Visit Mesh][mesh-home]

### Choose Monica if you want to keep a more detailed personal record

- You want to record how people are related, set reminders and keep notes about events you took part in together.
- You want to organise possessions and notes alongside your contacts, or run the software on your own server.
- You’ll enter or sync the details you want to keep. Monica’s documented integrations don’t include a LinkedIn or inbox connector that collects those details for you. [Monica relationships][monica-relationships] · [Monica possessions][monica-possessions] · [Monica sync guide][monica-dav]

[Explore Monica][monica-home]

## Monica and Mesh at a glance

<!-- Maquette : le premier critère est visible sans faire défiler horizontalement. Les cellules donnent le comportement précis. -->

| What matters | Mesh | Monica |
| --- | --- | --- |
| Where contacts come from | Imports people from connected sources such as email, calendars, LinkedIn and other supported services. Mesh can enrich their profiles. | Add people directly or use a compatible CardDAV address book for two-way contact sync where enabled. |
| LinkedIn | An integration can import contacts and refresh profiles. The help centre describes device-specific limits. | You can record profile details yourself. The documented integrations do not include a LinkedIn connector. |
| Dates and follow-ups | Birthday notifications, reminders and prompts to reconnect. | Birthdays and recurring reminders. CalDAV can show dates and reminder deadlines in compatible apps in read-only mode where enabled. |
| Relationships and history | Notes, contact timelines, groups and network updates. Mesh also offers a network visualisation on Vision Pro. | Typed relationships, a family view around a contact, and life events that can appear on several contact timelines. |
| Mobile and desktop | iOS, Android, macOS and Windows apps, plus a web app. | Web app usable on a phone. Compatible phone and desktop apps can display synced contacts and dates through DAV. |
| AI | Mesh offers Nexus and a connection for external assistants via MCP. | Monica can connect to an authorised external assistant via MCP. Its documented workflows use the connected assistant for model responses. |
| Working with other people | A paid Team plan supports a shared workspace. | Individual vaults. You can share selected details of a contact through a revocable, read-only link. |
| Hosting | Managed service. | Self-hosted software under AGPL-3.0 and a managed offering advertised by Monica. |
| Data export | CSV for data you put into Mesh, with some licensed information excluded. | Contact-level vCard and Markdown, plus an API-documented JSON export for supported vault data. |
| Advertised entry price | Personal is free for up to 1,000 contacts, with a card required. Pro is $120 USD per year or $20 USD monthly. | No software licence fee when self-hosting. Managed hosting is advertised at $90 USD per year or $9 USD monthly. The public signup led to a waitlist when checked. |

[Mesh setup guide][mesh-setup] · [Mesh LinkedIn help][mesh-refresh] · [Mesh plans][mesh-pricing] · [Mesh apps][mesh-apps] · [Mesh Vision Pro][mesh-vision] · [Mesh MCP][mesh-mcp] · [Monica sync guide][monica-dav] · [Monica sharing guide][monica-sharing] · [Monica MCP guide][monica-mcp] · [Monica pricing][monica-pricing]

## Two ways to use these tools

<!-- Maquette : mêmes dimensions pour les deux scénarios. Les exemples ci-dessous sont illustratifs. -->

### You want to know when people in your professional network change jobs

You’ve met people across several roles and events, and many are already in your inbox or on LinkedIn. In Mesh, you connect the sources you’re comfortable sharing, review the profiles it builds and use updates or reminders to decide who to contact. Mesh is the better fit if keeping a network current with less manual work is the reason you’re switching. Check what each connection imports. Mesh documents that deleting a contact in an external source leaves the Mesh record in place. [Mesh setup guide][mesh-setup] · [What happens after deletion at the source][mesh-delete]

### You want one place for the details you choose to remember

You want to record how two people are related, remember an important date and keep a note from a gathering that appears on each participant’s timeline. In Monica, you create or sync the people, add the relationships and record the event. You can keep items you own and general notes in the same application. Monica fits if those records are the point of the tool and you’re comfortable adding the context yourself. [Link two people in Monica][monica-link] · [How the timeline works][monica-timeline] · [Monica knowledge features][monica-knowledge]

## If you’re moving between Mesh and Monica

- **From Mesh to Monica.** Mesh can send you a CSV export. It includes data you put into Mesh and excludes certain licensed fields. Monica documents contact sync through CardDAV, and its transfer flow uses supported Monica JSON formats. Test a small sample in a compatible address book and check what reaches Monica. Verify notes, groups and relationships individually before moving the rest. [Mesh export guide][mesh-export] · [Monica vCard and import guidance][monica-vcard] · [Monica sync guide][monica-dav]
- **From Monica to Mesh.** Mesh Pro supports CSV imports. Monica provides contact exports in vCard and Markdown, and documents a JSON export through its API. These formats may require conversion or manual copying before they can be imported into Mesh. Check birthdays, custom fields and notes on a few contacts first. Keep a separate copy of information such as family links, life events or possessions that you need to retain. [Monica sharing and export guide][monica-sharing] · [Monica API reference][monica-api] · [Mesh CSV import][mesh-import]

In the version of Monica’s code we reviewed, the JSON export includes records such as contacts, relationships, life events and reminders. It excludes possessions and the separate notes and lists in Knowledge. If you use those areas, check how you’ll keep or transfer that information before switching. [Monica sharing and export guide][monica-sharing] · [Monica API reference][monica-api]

## Questions worth answering before you choose

### Can I try Mesh without paying?

Mesh advertises a free Personal plan for up to 1,000 contacts and requires a payment card. Its help centre says signup starts on a Pro trial and describes how to downgrade to Personal. Check that selection when signing up. [Mesh plans and trial terms][mesh-plans]

### Can Mesh or Monica keep my phone contacts up to date?

Mesh offers iOS and Android apps and imports contacts from supported sources. Monica documents two-way CardDAV for compatible address-book apps. Changes, including deletions, can travel in both directions with Monica’s CardDAV. Its CalDAV dates and reminder deadlines are read-only. [Mesh apps][mesh-apps] · [Monica sync guide][monica-dav]

### What does self-hosting change?

With Monica you can choose where to run the software. You handle updates, backups and server access. If you connect an external service or assistant, the data it receives depends on the access you grant. For Mesh, review the information each connected account makes available and which data the service can export. [Monica self-hosting][monica-self] · [Monica privacy guide][monica-privacy] · [Mesh security and privacy][mesh-privacy]

## How we checked this comparison

The Monica team wrote this comparison using Mesh’s public pricing, help centre and product documentation, and Monica’s public documentation and code. Prices are in USD before applicable taxes. Paid Mesh features and full migrations weren’t tested with a signed-in account. Plan limits, signup availability and the scope of an export can change.

[Visit Mesh][mesh-home] · [Explore Monica][monica-home]

<!-- Avant publication : revérifier le parcours hébergé de Monica, les conditions de la formule Personal et les formats réellement transférables. Utiliser cette route comme canonique pour Clay.earth et Mesh. -->

[mesh-home]: https://me.sh/
[mesh-rename]: https://me.sh/stories/mesh
[mesh-pricing]: https://me.sh/pricing
[mesh-apps]: https://me.sh/start
[mesh-setup]: https://library.me.sh/knowledge-base/getting-started/
[mesh-refresh]: https://library.me.sh/knowledge-base/editing-a-contact/
[mesh-delete]: https://library.me.sh/knowledge-base/what-happens-when-i-delete-a-contact-outside-of-mesh/
[mesh-mcp]: https://github.com/mesh/mesh-mcp
[mesh-vision]: https://me.sh/apple-vision-pro
[mesh-export]: https://library.me.sh/knowledge-base/export-to-csv/
[mesh-import]: https://library.me.sh/knowledge-base/csv-import/
[mesh-plans]: https://library.me.sh/knowledge-base/subscription-plans/
[mesh-privacy]: https://library.me.sh/knowledge-base/security-and-privacy/
[clay-com]: https://www.clay.com/
[monica-home]: https://www.monicahq.com/en/
[monica-pricing]: https://www.monicahq.com/en/pricing/
[monica-relationships]: https://my.monicahq.com/docs/en/relationships-and-life-events
[monica-link]: https://my.monicahq.com/docs/en/relationships-and-life-events/link-two-people
[monica-timeline]: https://my.monicahq.com/docs/en/relationships-and-life-events/the-timeline
[monica-possessions]: https://www.monicahq.com/en/features/possessions/
[monica-knowledge]: https://my.monicahq.com/docs/en/knowledge
[monica-sharing]: https://my.monicahq.com/docs/en/sharing-export-and-sync
[monica-vcard]: https://my.monicahq.com/docs/en/sharing-export-and-sync/export-a-vcard
[monica-dav]: https://my.monicahq.com/docs/carddav
[monica-mcp]: https://my.monicahq.com/docs/mcp
[monica-api]: https://my.monicahq.com/docs/api
[monica-self]: https://www.monicahq.com/en/handbook/self-hosting/
[monica-privacy]: https://my.monicahq.com/docs/en/your-account-and-security/privacy
