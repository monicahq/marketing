---
title: "Wie wir KI beim Bau von Monica einsetzen"
slug: ai-development
section: engineering
order: 4
description: "Programmierhilfe soll eine Änderung leichter verständlich machen, nicht das Verstehen überflüssig."
updated: 2026-11-18
---

Ein Coding-Agent kann eine überzeugende Menge Code schreiben. Das ist nützlich. Es ist auch ein hervorragender Weg, eine überzeugende Menge Code zu bekommen, den man noch nicht verstanden hat.

Für Monica lautet die interessante Frage, ob eine unterstützte Änderung das eigentliche Problem löst und uns in der Lage lässt, das Ergebnis zu pflegen. „Der Agent sagt, es funktioniert“ beantwortet keinen der beiden Teile.

Das ist der Maßstab, an dem ich KI-gestützte Arbeit messen möchte. Es ist weder eine Aufstellung, welches Werkzeug welchen Teil von Monica geschrieben hat, noch die Behauptung, ein bestimmtes automatisiertes Prüfverfahren sei bereits im Einsatz.

### Verantwortung wandert nicht

Wer eine Änderung annimmt, sollte das Verhalten verstehen, das sie einführt. Das schließt die unbequemen Fälle ein: Zugriff auf die Daten einer anderen Person, teilweise Fehlschläge, Datumsangaben, Löschungen und Annahmen über Beziehungen.

Ein generierter Test kann nützlich sein. Er kann aber auch den Fehler der Implementierung sehr gründlich wiederholen. Vertrauen muss daraus entstehen, dass man das beabsichtigte Verhalten prüft, nicht daraus, dass zwei generierte Dateien übereinstimmen.

Ich bevorzuge Änderungen, die klein genug sind, um sie zu lesen und zu besprechen. Wenn das Erklären eines Patches länger dauert als das Schreiben eines einfacheren, war das eingesparte Tippen nicht unbedingt ein Sieg.

Dasselbe gilt für Mitwirkende. Die Hilfe eines Werkzeugs nimmt ihnen nicht die Pflicht ab, ein Problem zu erklären, einen Fehler nachzustellen oder auf eine Review zu antworten.

[Code bleibt eine Verbindlichkeit](/de/handbuch/code-liability/), egal wer ihn getippt hat. Der Agent erbt nicht den Posteingang der Wartung. Eine bedauerliche Einschränkung dieser ansonsten sehr aufregenden Technologie.
