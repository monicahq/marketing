---
title: "Monica vs Dex for personal relationship management"
description: "Compare Monica and Dex on LinkedIn, keep-in-touch reminders, contact history, mobile apps, exports and self-hosting."
proposed_path: "/en/compare/monica-vs-dex/"
last_verified: "2026-11-25"
---

# Monica vs Dex

<!-- Maquette : afficher la signature et la date sous le titre. Les deux cartes, les deux liens et les deux scénarios reçoivent le même poids visuel. -->

Dex brings professional contacts and interactions together and uses that history to help you decide when to follow up. Monica gives you structured records for the people in your life, their relationships and the events you want to remember. Both offer reminders, notes and contact timelines. How information reaches that timeline is one of the biggest differences. [Dex interaction guide][dex-timeline] · [Monica timeline guide][monica-timeline]

*Written by the Monica team. Last verified November 25, 2026.*

## Which one fits what you need?

### Choose Dex if staying in touch is the main job

- You keep much of your network on LinkedIn and want new connections and profile updates to feed into your CRM.
- You want follow-up reminders that can move when you interact with someone, and native mobile or desktop apps.
- The subscription tier determines your LinkedIn connection limit. Outlook is listed under Professional. [Dex plans][dex-pricing] · [LinkedIn sync][dex-linkedin] · [Interaction guide][dex-timeline]

[Visit Dex][dex-home]

### Choose Monica if you want to keep a structured personal record

- You want to record how people are related and keep important dates, family events and details you choose to add.
- You want your contacts alongside a record of your possessions and notes, or you want to run the software on your own server.
- Monica’s documented sync covers compatible address books and read-only dates and deadlines. Plan for manual entry if you want to record inbox or LinkedIn interactions. [Monica relationships][monica-relationships] · [Monica possessions][monica-possessions] · [Monica sync guide][monica-dav]

[Explore Monica][monica-home]

## Monica and Dex at a glance

| What matters | Dex | Monica |
| --- | --- | --- |
| LinkedIn | Ongoing connection sync. Premium lists up to 2,500 connections and Professional up to 9,000. Setup uses the mobile or desktop app according to the sync guide. | The documented integrations do not include LinkedIn sync. |
| Email, calendar and contacts | Email and calendar integrations, with Outlook listed under Professional. Dex documents two-way contact sync, with behaviour depending on the source. | CardDAV can sync contacts in both directions. CalDAV can show dates and reminder deadlines in a compatible app, in read-only mode. DAV depends on the instance. |
| Follow-up reminders | Keep-in-touch frequency can reschedule the next reminder when a qualifying interaction changes the last interaction date. Dex also documents birthday reminders. | One-off and recurring reminders, including those tied to recorded dates. In-app and email notifications are documented. Telegram and SMS depend on the instance. |
| Contact history | A timeline for notes, emails, meetings, reminders and LinkedIn updates. Some messages affect the last interaction date without appearing as timeline entries. | A timeline of recorded events with participants. A shared event can appear on each participant’s timeline. |
| Visualising relationships | Related contacts, a Network view and a geographic map. | Typed relationships and a family view showing close relatives around one contact. |
| Mobile and desktop | iOS, Android, Mac and Windows apps, plus web. | Web app usable on a phone, with DAV for compatible contact and calendar apps. |
| AI and integrations | Copilot, research credits that vary by plan, and an external-assistant connection via MCP. | API and MCP for authorised external tools. |
| Hosting and ownership | Managed service. The privacy policy describes what Dex accesses for connected tools. | Self-hosted software under AGPL-3.0 and a managed offering advertised by Monica. |
| Data export | CSV export for contacts, notes and network updates. | Contact-level vCard and Markdown, plus an API-documented JSON export for supported vault data. |
| Advertised entry price | Premium is $144 USD per year at the annual rate. Professional is $240 USD per year at the annual rate. A seven-day trial requires a card. | No software licence fee when self-hosting. Managed hosting is advertised at $90 USD per year or $9 USD monthly. The public signup led to a waitlist when checked. |

[Dex pricing][dex-pricing] · [Dex LinkedIn sync][dex-linkedin] · [Dex contact and network views][dex-contacts] · [Dex changelog][dex-changelog] · [Dex timeline][dex-timeline] · [Dex Copilot][dex-copilot] · [Dex desktop app][dex-desktop] · [Monica notifications][monica-notifications] · [Monica DAV][monica-dav] · [Monica MCP][monica-mcp] · [Monica pricing][monica-pricing]

## Two ways to use these tools

### You want a reminder when a professional relationship goes quiet

You connect LinkedIn and your calendar, then set a keep-in-touch frequency for people you want to check in with. When Dex records a qualifying interaction, it can move the next reminder. Start with Dex if you rely on the date of the last interaction and want the CRM to do some of that tracking for you. Check the interaction rules for the channels you use. A message can count towards the last interaction date without becoming a separate timeline entry. [Dex interaction guide][dex-timeline] · [Dex LinkedIn sync][dex-linkedin]

### You want to remember the people and events around a family gathering

You record the gathering once in Monica, add the people who attended, and link family members using relationship types. The event can appear on each participant’s timeline. You can set a reminder for a specific date or on a repeating schedule. Start with Monica if those relationships, details and dated records are what you want to preserve and you’re comfortable entering the context. [How Monica’s timeline works][monica-timeline] · [Link two people][monica-link] · [Set a reminder][monica-reminders]

## If you’re moving between Dex and Monica

- **From Dex to Monica.** Dex documents CSV exports for contacts, notes and network updates. Monica documents CardDAV sync and contact-level vCard and Markdown exports. A CSV export may need a compatible address book or a conversion step to get basic contact fields into Monica. Try a few records first and check which notes, reminders and contact links need to be recreated. [Dex export guidance][dex-copilot] · [Monica vCard guidance][monica-vcard] · [Monica DAV][monica-dav]
- **From Monica to Dex.** Dex documents CSV import and contact sync. Monica offers contact-level vCard and Markdown and documents JSON exports through the API. Confirm whether your address book or a CSV conversion can bring across the fields you need. Test family relationships, events and reminder cadences separately. [Dex CSV import][dex-csv] · [Monica sharing and export guide][monica-sharing] · [Monica API reference][monica-api]

In the version of Monica’s code we reviewed, the JSON export includes records such as contacts, relationships, life events and reminders. It excludes possessions and the separate notes and lists in Knowledge. If you use those areas, check how you’ll keep or transfer that information before switching. [Monica sharing and export guide][monica-sharing] · [Monica API reference][monica-api]

## Questions worth answering before you choose

### Does Dex update reminders automatically?

Dex’s keep-in-touch cadence can update when an eligible interaction changes the last interaction date. Dex documents how each source affects that date and the timeline. Monica supports recurring reminders on a schedule you set. [Dex interaction guide][dex-timeline] · [Monica reminder guide][monica-reminders]

### Which Dex plan should I check for Outlook or a large LinkedIn network?

Dex lists Outlook, multi-account email sync and up to 9,000 LinkedIn connections under Professional. Premium lists up to 2,500 LinkedIn connections. Check the plan page if your choice depends on a particular integration or quota. [Dex plans][dex-pricing]

### Can I use either product without connecting my inbox?

Both document ways to add contacts and notes directly. If you connect Google or another account to Dex, check what the connection can read and write. If you self-host Monica, you manage the server and can choose which integrations to enable. [Dex contact guide][dex-contacts] · [Dex privacy policy][dex-privacy] · [Monica people features][monica-people] · [Monica self-hosting][monica-self]

## How we checked this comparison

The Monica team wrote this comparison using Dex’s public pricing, help centre and changelog, and Monica’s public documentation and code. Prices are in USD before applicable taxes. Paid Dex features, connected-account behaviour and full migrations weren’t tested with a signed-in account.

[Visit Dex][dex-home] · [Explore Monica][monica-home]

<!-- Avant publication : revérifier les conditions de l’essai et les limites de LinkedIn. Si des captures sont ajoutées, comparer une même action et mentionner le plan et la plateforme. -->

[dex-home]: https://getdex.com/
[dex-pricing]: https://getdex.com/pricing/
[dex-linkedin]: https://getdex.com/docs/faq/linkedin
[dex-timeline]: https://getdex.com/docs/workflows/interactions-and-the-timeline
[dex-contacts]: https://getdex.com/docs/workflows/manage-your-contacts
[dex-changelog]: https://getdex.com/docs/changelog/2026
[dex-desktop]: https://getdex.com/docs/desktop-app
[dex-copilot]: https://getdex.com/docs/ai/copilot
[dex-csv]: https://getdex.com/docs/integrationsandfeatures/import/csv
[dex-privacy]: https://getdex.com/privacypolicy/
[monica-home]: https://www.monicahq.com/en/
[monica-pricing]: https://www.monicahq.com/en/pricing/
[monica-people]: https://www.monicahq.com/en/features/people/
[monica-relationships]: https://my.monicahq.com/docs/en/relationships-and-life-events
[monica-possessions]: https://www.monicahq.com/en/features/possessions/
[monica-link]: https://my.monicahq.com/docs/en/relationships-and-life-events/link-two-people
[monica-timeline]: https://my.monicahq.com/docs/en/relationships-and-life-events/the-timeline
[monica-reminders]: https://my.monicahq.com/docs/en/reminders-and-notifications/set-a-reminder
[monica-notifications]: https://my.monicahq.com/docs/en/reminders-and-notifications/notification-channels
[monica-sharing]: https://my.monicahq.com/docs/en/sharing-export-and-sync
[monica-vcard]: https://my.monicahq.com/docs/en/sharing-export-and-sync/export-a-vcard
[monica-dav]: https://my.monicahq.com/docs/carddav
[monica-mcp]: https://my.monicahq.com/docs/mcp
[monica-api]: https://my.monicahq.com/docs/api
[monica-self]: https://www.monicahq.com/en/handbook/self-hosting/
