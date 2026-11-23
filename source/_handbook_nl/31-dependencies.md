---
title: "Afhankelijkheden zijn verplichtingen"
slug: dependencies
section: engineering
order: 7
description: "Een pakket kan een weekend besparen en toch jarenlang aandacht vragen."
updated: 2026-11-18
---

Een pakket toevoegen kan een heel goede beslissing zijn. Zelf een versie schrijven van een moeilijk, goed opgelost probleem is niet per se nobel.

Maar een afhankelijkheid installeren is het begin van een relatie, niet het einde van een taak. Toepasselijk voor Monica.

Dat pakket kan zijn interface wijzigen, een nieuwe runtime eisen, een kwetsbaarheid introduceren of niet meer onderhouden worden. Wij blijven verantwoordelijk voor het effect op onze gebruikers.

### Bekijk het geheel

Voordat we er een toevoegen, moeten we het probleem begrijpen dat het oplost en het deel van Monica dat ervan afhankelijk wordt. Een klein gemak dat op één plek gebruikt wordt, verdient een ander gesprek dan een bibliotheek die tussen elke gebruiker en zijn informatie zit.

Kunnen we het gedrag begrijpen? Past de licentie bij het project? Wat neemt het nog meer mee? Kunnen mensen Monica zelf hosten zonder een account bij een andere dienst te nemen? Als we het later moeten vervangen, hoeveel van de applicatie merkt dat?

Dit zijn nuttige vragen, geen bewering dat elke afhankelijkheid uit het verleden een formele checklist heeft doorstaan. Ook wij maken onvolmaakte keuzes.

[Vertrouwde technologie](/nl/handboek/boring-technology/) en een gezond ecosysteem helpen, maar populariteit is geen onderhoudsgarantie.

Ik wil niet dat we pakketten uit trots afwijzen. Ik wil ook geen twintig nieuwe afhankelijkheden omdat een ervan een iets mooiere dropdown tekent.

Het installatiecommando is kort. Helaas hoeft de verplichting dat niet te zijn.
