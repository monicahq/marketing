---
title: "Technische Schulden sind nicht immer schlecht"
slug: technical-debt
section: engineering
order: 6
description: "Eine bewusste Abkürzung kann helfen; eine Abkürzung, an die sich niemand erinnert, ist schwerer zurückzuzahlen."
updated: 2026-11-18
---

Manchmal ist die kleine, ein wenig unbeholfene Lösung die richtige.

Monica wird mit begrenzter Zeit gebaut. Drei Abende in die perfekte Abstraktion für ein Problem zu stecken, das nächste Woche vielleicht verschwindet, ist nicht automatisch verantwortungsvolles Engineering. Manchmal ist es eine angenehme Art, das Ausliefern zu vermeiden.

Technische Schulden werden nützlich, wenn der Kompromiss verstanden und eingegrenzt ist und sich lohnt für das, was er uns jetzt ermöglicht.

### Wissen, was man sich leiht

Eine unvollkommene interne Struktur kann für eine erste Version akzeptabel sein. Unklare Zuständigkeit für persönliche Daten ist nicht derselbe Kompromiss. Ein Fehlerpfad, der still und leise die Notizen eines Menschen verwerfen kann, ebenso wenig.

Wichtig sind die Fragen, was schiefgehen könnte, wie schwer sich die Entscheidung rückgängig machen lässt und ob ein künftiger Maintainer sie erkennen kann.

Eine kurze Erklärung, warum wir eine Abkürzung genommen haben, kann wertvoller sein als ein großer Plan, jede Unvollkommenheit zu beseitigen. Mein künftiges Ich verdient es zu wissen, ob etwas Absicht war. Er wird ohnehin schon genug genervt sein.

Schulden verändern sich auch mit der Nutzung. Ein unbeholfenes Stück Code, das niemand anfasst, ist vielleicht weniger dringend als ein kleiner Makel, der jede Funktion im selben Bereich verkompliziert.

Der [Neuaufbau](/de/handbuch/rewrite/) erinnert daran, dass angesammelte Entscheidungen irgendwann prägen, was ein Produkt werden kann. Das heißt nicht, dass jede ursprüngliche Entscheidung töricht war.

Wir sollten Kompromisse bewusst eingehen, die teuren erneut prüfen und uns dagegen sträuben, jede unschöne Datei zum Notfall zu erklären. Manchmal braucht sie nur einen besseren Namen.
