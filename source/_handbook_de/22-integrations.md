---
title: "Wie wir über Integrationen denken"
slug: integrations
section: product
order: 8
description: "Der Button ist der einfache Teil; die Jahre nach dem Button sind der Teil, in dem es interessant wird."
updated: 2026-11-18
---

„Könnte Monica nicht einfach mit dieser anderen Anwendung synchronisieren?“

Möglicherweise. Das Wort „einfach“ leistet dabei Heldenhaftes.

Eine Verbindung zwischen Produkten muss mit unterschiedlichen Bedeutungen umgehen, nicht bloß mit unterschiedlichen Formaten. Was passiert, wenn sich ein Name auf beiden Seiten ändert? Wenn ein Datensatz gelöscht wird? Wenn ein Zugriffstoken abläuft? Welches System entscheidet, was korrekt ist?

Bei Monica könnte ein Fehler persönliche Informationen überschreiben, die jemand über Jahre gesammelt hat. Das hat mehr Gewicht als ein etwas unbeholfener Import-Button.

### Jemand besitzt die Verbindung

Der andere Dienst kann seine API, seine Preise oder seine Berechtigungen ändern. Er kann verschwinden. Er kann entscheiden, dass eine zuvor kostenlose Funktion jetzt einen Business-Tarif erfordert. Keine dieser Entscheidungen liegt in unserer Hand, nur weil wir eine Integration geschrieben haben.

Das [CalDAV-Beispiel](/de/handbuch/prioritize/) erklärt eine persönliche Grenze bei der Wartung. Es ist eine nützliche Erinnerung daran, dass eine Umsetzung anzunehmen auch bedeutet, die Arbeit danach anzunehmen.

Eine API kann Menschen erlauben, Verbindungen zu bauen, die zu ihren eigenen Bedürfnissen passen, ohne jedes externe Produkt zu einem Teil von Monicas Kern zu machen. Sie braucht trotzdem klares Verhalten und einen sorgfältigen Zugriff auf persönliche Informationen. „Es ist eine Integration“ ist keine Ausnahme vom Datenschutz.

Wir sollten den tatsächlichen Arbeitsablauf bedenken, die ausgetauschten Informationen und wer sie pflegen wird. Manchmal ist die Antwort eine direkte Verbindung. Manchmal ist es ein Export oder ein kleines Skript.

Alles zu verbinden ist ein verlockender Anspruch. Die Verbindungen verständlich zu halten ist ein besserer.
