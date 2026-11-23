---
title: "Hoe we over integraties denken"
slug: integrations
section: product
order: 8
description: "De knop is het makkelijke deel; de jaren na de knop zijn waar het interessant wordt."
updated: 2026-11-18
---

„Kan Monica niet gewoon synchroniseren met deze andere applicatie?”

Mogelijk. Dat woordje „gewoon” levert heldhaftig veel werk.

Een koppeling tussen producten moet omgaan met verschillende betekenissen, niet alleen met verschillende formaten. Wat gebeurt er als een naam aan beide kanten verandert? Als een record wordt verwijderd? Als een toegangstoken verloopt? Welk systeem bepaalt wat correct is?

Voor Monica kan een fout persoonlijke informatie overschrijven die iemand jarenlang heeft verzameld. Dat heeft grotere gevolgen dan een enigszins onhandige importknop.

### Iemand is eigenaar van de koppeling

De andere dienst kan zijn API, prijzen of rechten wijzigen. Hij kan verdwijnen. Hij kan besluiten dat een eerder gratis functie nu een zakelijk abonnement vereist. Geen van die beslissingen komt in onze handen omdat wij een integratie hebben geschreven.

Het [CalDAV-voorbeeld](/nl/handboek/prioritize/) legt een persoonlijke onderhoudsgrens uit. Het is een nuttige herinnering dat het accepteren van een implementatie ook betekent dat je het werk daarna accepteert.

Een API kan mensen koppelingen laten bouwen die bij hun eigen behoeften passen zonder dat elk extern product deel wordt van de kern van Monica. Ook die heeft duidelijk gedrag en zorgvuldige toegang tot persoonlijke informatie nodig. „Het is een integratie” is geen vrijstelling van privacy.

We moeten kijken naar de daadwerkelijke workflow, de uitgewisselde informatie en wie het gaat onderhouden. Soms is het antwoord een directe koppeling. Soms is het een export of een klein script.

Alles koppelen is een verleidelijke ambitie. De koppelingen begrijpelijk houden is een betere.
