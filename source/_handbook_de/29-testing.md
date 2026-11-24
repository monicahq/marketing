---
title: "Wie wir das Testen angehen"
slug: testing
section: engineering
order: 5
description: "Das Vertrauen sollte den Folgen eines Fehlers entsprechen, besonders wenn der Fehler die Erinnerungen eines Menschen kosten könnte."
updated: 2026-11-18
---

In meinem [Laravel-Beitrag von 2017](/de/blog/laravel/) habe ich eingeräumt, dass der Start ohne Unit-Tests dem Projekt geschadet hat. Eine Sache zu reparieren konnte eine andere kaputt machen. Das war keine besonders erfreuliche Entdeckung.

Die Lehre ist nicht, dass eine Testzahl Software sicher macht. Sie ist, dass Intuition allein ein schlechter Schutz für Verhalten ist, auf das sich Menschen verlassen.

### Die Folgen testen

Bei Monica wiegen manche Fehler viel schwerer als andere. Eine verschwundene Notiz, eine Erinnerung, die am falschen Tag auslöst, oder Informationen, die für die falsche Person sichtbar werden, verdienen mehr Aufmerksamkeit als ein dekoratives Detail, das leicht verrutscht ist.

Wir sollten testen, was die Person erwartet, einschließlich dessen, was nicht passieren darf. Eine erfolgreiche Anfrage genügt nicht, wenn sie die Information beim falschen Kontakt gespeichert hat.

Ein Regressionstest ist besonders nützlich, wenn er einen echten Fehler festhält: die Bedingungen, die ihn verursacht haben, und das richtige Ergebnis. Er gibt künftigen Änderungen etwas Konkretes, das sie bewahren müssen.

Tests brauchen auch Urteilsvermögen. Jeden internen Methodenaufruf in einem Test zu wiederholen kann das Refactoring schmerzhaft machen, ohne das Produkt sicherer zu machen. Eine grüne Testsuite kann trotzdem einen verwirrenden Ablauf oder ein unzugängliches Bedienelement übersehen.

Das sind Prioritäten, keine Aussage über die aktuelle Abdeckung, Freigabeschranken oder ein umfassendes Testprogramm. Dafür braucht es Belege aus der tatsächlichen Codebasis.

[Ausliefern](/de/handbuch/shipping/) und Testen gehören zusammen. Wir wollen schnell vorankommen, weil wir die Risiken verstehen, und nicht, weil wir nicht nach ihnen gesucht haben.
