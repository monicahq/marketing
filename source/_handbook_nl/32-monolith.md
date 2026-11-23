---
title: "De schoonheid van een monoliet"
slug: monolith
section: engineering
order: 8
description: "Samenhangend werk bij elkaar houden tot een echt probleem ons een reden geeft om het te scheiden."
updated: 2026-11-18
---

Een contact heeft een relatie. Die relatie verschijnt in een tijdlijn. Een herinnering verwijst naar het leven van dezelfde persoon.

Over die concepten moet al genoeg nagedacht worden, zonder dat we elke keer dat ze op elkaar inwerken een netwerkgesprek tussen meerdere applicaties moeten debuggen.

Een monoliet is aantrekkelijk omdat veel van dat werk op één plek blijft. De grens van een probleem kan dicht bij de code blijven die we moeten lezen om het te begrijpen.

### Eenvoudig te doorgronden is waardevol

Voor een klein team is elke extra dienst iets nieuws om uit te rollen, te bewaken, te updaten en uit te leggen. Voor iemand die zelf host is het nog een vereiste tussen Monica downloaden en haar daadwerkelijk gebruiken.

Code over processen verdelen levert niet automatisch nette grenzen op. Het kan alle verwarring behouden en er time-outs aan toevoegen. Technisch gezien een opmerkelijke prestatie.

We moeten binnen een applicatie nog steeds verantwoordelijkheden scheiden. Code die relaties afhandelt mag geen excuus worden om alles met alles te vermengen. Een monoliet is geen aanbeveling om één enorm bestand te maken.

Dit is een architectuurvoorkeur, geen volledige beschrijving van Monica's productie-infrastructuur. Ondersteunende diensten en achtergrondwerk kunnen bestaan zonder dat elk productconcept een zelfstandig uitgerold systeem wordt.

Als een gemeten probleem uiteindelijk om een andere grens vraagt, kunnen we die dan overwegen. [Saaie technologie](/nl/handboek/boring-technology/) betekent niet weigeren je aan te passen.

Zolang er geen reden is om de complexiteit te verspreiden, bewaar ik haar liever ergens waar een bijdrager haar kan vinden.
