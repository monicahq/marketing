---
title: "Die Schönheit eines Monolithen"
slug: monolith
section: engineering
order: 8
description: "Zusammengehörige Arbeit beisammen halten, bis ein echtes Problem uns einen Grund gibt, sie zu trennen."
updated: 2026-11-18
---

Ein Kontakt hat eine Beziehung. Diese Beziehung erscheint in einer Zeitleiste. Eine Erinnerung bezieht sich auf das Leben derselben Person.

Diese Konzepte erfordern ohnehin genug Nachdenken, auch ohne dass wir jedes Mal, wenn sie zusammenspielen, ein Netzwerkgespräch zwischen mehreren Anwendungen debuggen müssen.

Ein Monolith ist attraktiv, weil er einen Großteil dieser Arbeit an einem Ort hält. Die Grenze eines Problems kann nah an dem Code bleiben, den wir lesen müssen, um es zu verstehen.

### Einfach nachzuvollziehen ist wertvoll

Für ein kleines Team ist jeder zusätzliche Dienst etwas, das man ausliefern, beobachten, aktualisieren und erklären muss. Für jemanden, der selbst hostet, ist er eine weitere Anforderung zwischen dem Herunterladen von Monica und dem tatsächlichen Benutzen.

Code auf Prozesse zu verteilen ergibt nicht automatisch saubere Grenzen. Es kann die ganze Verwirrung bewahren und Timeouts hinzufügen. Technisch eine bemerkenswerte Leistung.

Wir sollten Zuständigkeiten innerhalb einer Anwendung trotzdem trennen. Code für Beziehungen sollte keine Ausrede sein, alles mit allem zu vermischen. Ein Monolith ist keine Empfehlung, eine einzige riesige Datei anzulegen.

Das ist eine architektonische Vorliebe, keine vollständige Beschreibung von Monicas Produktionsinfrastruktur. Unterstützende Dienste und Hintergrundarbeit können existieren, ohne dass jedes Produktkonzept zu einem eigenständig bereitgestellten System wird.

Wenn ein gemessenes Problem irgendwann eine andere Grenze verlangt, können wir sie dann erwägen. [Langweilige Technik](/de/handbuch/boring-technology/) heißt nicht, sich der Anpassung zu verweigern.

Solange es keinen Grund gibt, die Komplexität zu verteilen, halte ich sie lieber an einem Ort, an dem ein Mitwirkender sie findet.
