---
title: "Hoe we AI gebruiken om Monica te bouwen"
slug: ai-development
section: engineering
order: 4
description: "Codeerhulp moet een wijziging makkelijker te begrijpen maken, niet het begrijpen optioneel."
updated: 2026-11-18
---

Een codeeragent kan een overtuigende hoeveelheid code schrijven. Dat is nuttig. Het is ook een uitstekende manier om een overtuigende hoeveelheid code te krijgen die je nog niet hebt begrepen.

Voor Monica is de interessante vraag of een ondersteunde wijziging het eigenlijke probleem oplost en ons in staat laat het resultaat te onderhouden. “De agent zei dat het werkt” beantwoordt geen van beide.

Dit is de maatstaf waaraan ik werk met AI-hulp wil houden. Het is geen overzicht van welk hulpmiddel welk deel van Monica schreef, of de bewering dat er al een bepaald geautomatiseerd reviewproces is.

### Verantwoordelijkheid verschuift niet

Iemand die een wijziging accepteert, moet het gedrag begrijpen dat ze introduceert. Dat omvat de lastige gevallen: toegang tot de gegevens van een ander, gedeeltelijke fouten, datums, verwijderingen en aannames over relaties.

Een gegenereerde test kan nuttig zijn. Ze kan ook de fout van de implementatie heel grondig herhalen. Vertrouwen moet komen uit het controleren van het beoogde gedrag, niet uit twee gegenereerde bestanden die het met elkaar eens zijn.

Ik geef de voorkeur aan wijzigingen die klein genoeg zijn om te lezen en te bespreken. Als het uitleggen van een patch langer duurt dan het schrijven van een eenvoudigere, was het bespaarde typewerk niet per se een overwinning.

Hetzelfde geldt voor bijdragers. Hulp van een hulpmiddel neemt niet weg dat je een probleem moet uitleggen, een bug moet reproduceren of op een review moet reageren.

[Code blijft een last](/nl/handboek/code-liability/), wie haar ook typte. De agent erft de onderhoudsinbox niet. Een jammerlijke beperking van deze verder zeer opwindende technologie.
