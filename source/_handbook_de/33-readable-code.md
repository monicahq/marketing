---
title: "Code wird für Menschen geschrieben"
slug: readable-code
section: engineering
order: 9
description: "Ein künftiger Mitwirkender sollte einer Beziehung folgen können, ohne zuvor ein Rätsel lösen zu müssen."
updated: 2026-11-18
---

Ein Computer führt Code, der einen Menschen unglücklich macht, völlig klaglos aus.

Leider sind es die Menschen, die ihn reparieren müssen.

Monica ist Open Source. Wer sich einem Fehler nähert, kennt vielleicht weder unsere Geschichte noch unsere Begriffe noch die clevere Idee, die uns beim Schreiben des Codes so selbstverständlich erschien. Vielleicht trägt er in einer Sprache bei, die nicht seine erste ist. Er sollte trotzdem eine realistische Chance haben zu verstehen, was passiert.

### Sagen, was der Code bedeutet

Eine Beziehung hat eine Richtung. Eine Erinnerung hat ein Datum und einen Kontext. Ein Löschen hat Folgen. Namen und Struktur sollten das sichtbar machen, statt es hinter einem generischen Mechanismus zu verstecken, der alles Mögliche bedeuten könnte.

Ein wenig Wiederholung kann leichter zu verstehen sein als eine Abstraktion, die sechs vage ähnliche Fälle abdecken will. Die richtige Abstraktion ist nützlich. Die voreilige wird zu einem kleinen Framework, um dessen Pflege niemand gebeten hat.

Kommentare sind besonders wertvoll, wenn sie das Warum erklären: eine kulturelle Annahme, die wir vermieden haben, eine unerwartete Datumsregel, eine Kompatibilitätsentscheidung. Ein Kommentar, der verkündet, dass die nächste Zeile einen Datensatz speichert, ist weniger eine Offenbarung.

Im [ursprünglichen Laravel-Artikel](/de/blog/laravel/) habe ich darüber geschrieben, dass ich die meisten Events und Listener entfernt habe, weil zu viel Verhalten schwer nachzuvollziehen geworden war. Das ist ein historisches Beispiel, kein allgemeines Verbot von Events.

Ich möchte, dass künftige Mitwirkende ihre Zeit damit verbringen, das menschliche Problem zu verstehen. Meine frühere Begeisterung für Raffinesse zu entschlüsseln sollte keine Voraussetzung sein.
