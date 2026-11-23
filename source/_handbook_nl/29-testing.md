---
title: "Hoe we testen"
slug: testing
section: engineering
order: 5
description: "Vertrouwen moet de gevolgen van een fout volgen, zeker wanneer die fout iemands herinneringen kan kosten."
updated: 2026-11-18
---

In mijn [Laravel-bericht uit 2017](/nl/blog/laravel/) gaf ik toe dat lanceren zonder unittests het project pijn had gedaan. Het ene repareren kon het andere breken. Het was geen bijzonder prettige ontdekking.

De les is niet dat een aantal tests software veilig maakt. Het is dat intuïtie alleen een slechte manier is om gedrag te beschermen waar mensen van afhankelijk zijn.

### Test het gevolg

Voor Monica wegen sommige fouten veel zwaarder dan andere. Een verdwenen notitie, een herinnering die op de verkeerde dag afgaat of informatie die zichtbaar wordt voor de verkeerde persoon verdient meer aandacht dan een decoratief detail dat een beetje scheef staat.

We moeten testen wat iemand verwacht dat er gebeurt, inclusief wat niet mag gebeuren. Een geslaagd verzoek is niet genoeg als het de informatie bij het verkeerde contact heeft opgeslagen.

Een regressietest is vooral nuttig wanneer ze een echte fout vastlegt: de omstandigheden die haar veroorzaakten en de juiste uitkomst. Ze geeft toekomstige wijzigingen iets concreets om te behouden.

Tests vragen ook om oordeelsvermogen. Elke interne methodeaanroep in een test herhalen kan refactoren pijnlijk maken zonder het product veiliger te maken. Een groene testsuite kan nog steeds een verwarrende werkwijze of een ontoegankelijke bediening missen.

Dit zijn prioriteiten, geen bewering over de huidige dekking, releasepoorten of een uitputtend testprogramma. Daarvoor is bewijs uit de echte codebase nodig.

[Uitbrengen](/nl/handboek/shipping/) en testen horen bij elkaar. We willen snel bewegen omdat we de risico's begrijpen, niet omdat we er niet naar hebben gezocht.
