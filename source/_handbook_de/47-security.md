---
title: "Sicherheit ist nie abgeschlossen"
slug: security
section: privacy
order: 5
description: "Persönliche Informationen verdienen fortlaufende Sorgfalt, genaue Erklärungen und gesundes Misstrauen gegenüber absoluten Versprechen."
updated: 2026-11-18
---

Ich würde gern sagen, dass Monica vollkommen sicher ist. Es wäre ein ausgezeichneter Satz für eine Landingpage.

Es wäre auch eine Behauptung, die wir ehrlicherweise nicht aufstellen können.

Sicherheit hängt von Software, Abhängigkeiten, Infrastruktur, Konfiguration und Menschen ab. All das ändert sich. Dass heute kein Problem bekannt ist, heißt nicht, dass es morgen nichts zu finden gibt.

### Die Folgen sollten die Arbeit leiten

Monica enthält Informationen, deren Sensibilität am Feldnamen nicht immer erkennbar ist. Eine schlichte Notiz kann etwas zutiefst Persönliches enthalten. Das sollte prägen, wie wir über Zugriff, versehentliche Offenlegung und die Folgen von Fehlern denken.

Die nützlichen Fragen sind konkret. Wer sollte diesen Eintrag lesen können? Gilt dieselbe Regel auch über andere Schnittstellen? Was passiert, wenn sich der Zugriff ändert? Könnte eine Fehlermeldung etwas verraten, das sie nicht verraten sollte?

Das sind Fragen, die das Engineering beantworten sollte, keine Behauptung, dieser Artikel bescheinige eine bestimmte Implementierung oder ein Auditprogramm.

[Testen](/de/handbuch/testing/) und [öffentlicher Code](/de/handbuch/verify-trust/) helfen. Keines von beidem macht es überflüssig, Meldungen zu untersuchen und die beteiligten Systeme zu pflegen.

Wenn Sie eine mögliche Schwachstelle entdecken, folgen Sie den Hinweisen zur Meldung von Sicherheitsproblemen im aktuellen Repository. Bitte veröffentlichen Sie in einem gewöhnlichen Issue keine echten privaten Daten und keine funktionierende Anleitung zur Ausnutzung, solange das Problem bewertet wird.

Bei selbst gehosteten Installationen zählen auch Ihre Konfiguration und Wartung. Sicherheit ist keine Eigenschaft, die wir an ein Release heften und dann nicht mehr beachten. Ärgerlicherweise braucht sie immer weiter Arbeit.
