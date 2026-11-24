---
title: "Code ist eine Verbindlichkeit"
slug: code-liability
section: engineering
order: 3
description: "Der Wert liegt in dem, was die Software den Menschen ermöglicht; der Code ist das, worum wir uns kümmern müssen."
updated: 2026-11-18
---

Eine neue Funktion kann Wert schaffen. Der Code darunter bedeutet Verantwortung.

Jemand muss ihn verstehen, prüfen, testen, die Meldungen übersetzen, die er einführt, und ihn reparieren, wenn sich eine Abhängigkeit ändert. Irgendwann bin womöglich ich dieser Jemand, an einem Sonntag, an dem ich buchstäblich alles andere vorgehabt hatte.

Deshalb finde ich die Zahl der zu Monica hinzugefügten Codezeilen nicht besonders beeindruckend.

### Die Rechnung kommt später

Stellen Sie sich zwei Arten vor, dieselbe persönliche Information abzubilden. Die eine passt in ein bestehendes Konzept. Die andere bringt eigene Bildschirme, Berechtigungen, Hintergrundjobs und Einstellungen mit.

Der zweite Ansatz kann gerechtfertigt sein. Aber wir sollten den Nutzen benennen können, denn jedes dieser beweglichen Teile gehört jetzt zum Projekt.

Das wird noch wichtiger, wenn das Erzeugen von Code billig ist. Ein Werkzeug kann schnell eine große Implementierung liefern, ohne dass das Ergebnis dadurch billig zu verstehen oder sicher zu warten wäre.

Nützliches Verhalten leichtfertig zu löschen ist keine Antwort. [Funktionen zu entfernen](/de/handbuch/removing-features/) verlangt Rücksicht auf die Menschen, die sich darauf verlassen. Der beste Zeitpunkt, unnötigen Code zu vermeiden, liegt vor der Übernahme der Verpflichtung.

Eine kurze Lösung ist auch nicht automatisch gut. Zehn unverständliche Zeilen können mehr Arbeit sein als fünfzig offensichtliche.

Ich will genug Code, damit Monica nützlich und verständlich ist. Ich will keine große Codesammlung, die nur beweist, dass wir sehr beschäftigt waren. Das Repository ist kein Bonusprogramm. Nach einer Million Zeilen gibt es kein Gratis-Sandwich.
