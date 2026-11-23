---
title: "Code wordt voor mensen geschreven"
slug: readable-code
section: engineering
order: 9
description: "Een toekomstige bijdrager moet een relatie kunnen volgen zonder eerst een raadsel op te lossen."
updated: 2026-11-18
---

Een computer voert met plezier code uit die een mens ongelukkig maakt.

Helaas zijn het de mensen die haar moeten repareren.

Monica is open source. Wie een bug aanpakt, kent misschien onze geschiedenis niet, onze terminologie niet, of het slimme idee dat vanzelfsprekend leek toen we de code schreven. Misschien draagt die persoon bij in een taal die niet zijn of haar eerste is. Er moet toch een redelijke kans zijn om te begrijpen wat er gebeurt.

### Zeg wat de code betekent

Een relatie heeft een richting. Een herinnering heeft een datum en een context. Een verwijdering heeft gevolgen. Namen en structuur moeten die dingen zichtbaar maken in plaats van ze te verbergen achter een generiek mechanisme dat van alles kan betekenen.

Een beetje herhaling kan makkelijker te begrijpen zijn dan een abstractie die zes vaag verwante gevallen probeert te dekken. De juiste abstractie is nuttig. De voortijdige wordt een klein framework dat niemand wilde onderhouden.

Commentaar is vooral waardevol wanneer het uitlegt waarom: een culturele aanname die we vermeden, een onverwachte datumregel, een compatibiliteitsbeslissing. Een commentaar dat meldt dat de volgende regel een record opslaat, is minder een openbaring.

In het [oorspronkelijke Laravel-artikel](/nl/blog/laravel/) schreef ik over het verwijderen van de meeste events en listeners, omdat te veel gedrag moeilijk te volgen was geworden. Dat is een historisch voorbeeld, geen algemeen verbod op events.

Ik wil dat toekomstige bijdragers hun tijd besteden aan het begrijpen van het menselijke probleem. Mijn vroegere enthousiasme voor slimmigheden ontcijferen hoort geen vereiste te zijn.
