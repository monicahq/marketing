---
title: "Abhängigkeiten sind Verpflichtungen"
slug: dependencies
section: engineering
order: 7
description: "Ein Paket kann ein Wochenende sparen und trotzdem jahrelang Aufmerksamkeit verlangen."
updated: 2026-11-18
---

Ein Paket hinzuzufügen kann eine sehr gute Entscheidung sein. Eine eigene Version eines schwierigen, längst gelösten Problems zu schreiben ist nicht von Natur aus edel.

Aber eine Abhängigkeit zu installieren ist der Beginn einer Beziehung, nicht das Ende einer Aufgabe. Wie passend für Monica.

Dieses Paket kann seine Schnittstelle ändern, eine neue Laufzeitumgebung verlangen, eine Sicherheitslücke einführen oder nicht mehr gepflegt werden. Die Auswirkungen auf unsere Nutzerinnen und Nutzer bleiben trotzdem unsere Sache.

### Das Gesamtgefüge betrachten

Bevor wir eines hinzufügen, sollten wir das Problem verstehen, das es löst, und den Teil von Monica, der davon abhängen wird. Eine kleine Annehmlichkeit, die an einer Stelle gebraucht wird, verdient eine andere Diskussion als eine Bibliothek, die zwischen allen Nutzern und ihren Informationen sitzt.

Können wir sein Verhalten verstehen? Passt seine Lizenz zum Projekt? Was bringt es sonst noch mit? Können Menschen Monica selbst hosten, ohne ein Konto bei einem weiteren Dienst anzulegen? Wenn wir es später ersetzen müssen, wie viel von der Anwendung wird das merken?

Das sind nützliche Fragen, keine Behauptung, jede frühere Abhängigkeit habe eine formale Checkliste durchlaufen. Auch wir treffen unvollkommene Entscheidungen.

[Vertraute Technik](/de/handbuch/boring-technology/) und ein gesundes Ökosystem helfen, aber Beliebtheit ist keine Wartungsgarantie.

Ich will nicht, dass wir Pakete aus Stolz ablehnen. Ich will aber auch keine zwanzig neuen Abhängigkeiten, weil eine davon ein etwas hübscheres Dropdown zeichnet.

Der Installationsbefehl ist kurz. Leider muss die Verpflichtung es nicht sein.
