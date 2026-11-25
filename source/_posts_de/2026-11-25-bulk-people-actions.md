---
title: 'Du kannst jetzt mehrere Personen auf einmal löschen oder ihre Kategorie ändern'
slug: bulk-people-actions
date: 2026-11-25
author: 'Regis Freyd'
description: 'Hake in der Personenliste die gewünschten Personen an und ändere dann ihre Kategorie oder lösche sie in einem Schritt. Monica nennt vor dem Löschen, wer gehen wird, und eine Änderung der Kategorie lässt sich rückgängig machen.'
category: feature
icon: people
screenshot:
  src: /assets/images/blog/2026-11-25-bulk-people-actions-preview.webp
  alt: 'Die Personenliste mit angehakten Einträgen für Chandler Bing, Ross Geller und Rachel Green und einer Leiste darüber mit der Anzeige 3 ausgewählt sowie Kategorie ändern und Löschen'
  caption: 'Hake ein paar Personen an, und eine Leiste zeigt, was du mit ihnen tun kannst.'
pullRequest: 8023
docs: https://my.monicahq.com/docs/en/people/find-people
---
Ein Tresor füllt sich über die Jahre. Menschen, die du nur einmal getroffen hast, Kollegen aus einem Job, den du verlassen hast, die ganze Hochzeitsgesellschaft, die du an einem Abend hinzugefügt hast. Früher oder später willst du aufräumen: das alte Team unter **Bekannte Person** einsortieren oder ein paar Personen ganz gehen lassen.

Bisher hieß das, jede Person einzeln zu öffnen, eine nach der anderen. Um Chandler, Ross und Rachel auf **Eng befreundete Person** zu setzen, hast du drei Seiten bearbeitet. Um zehn Personen zu löschen, hast du zehnmal gelöscht und jedes Mal bestätigt.

Jetzt hat die Personenliste am Anfang jeder Zeile ein Kästchen. Hake die gewünschten Personen an, oder das Kästchen in der Kopfzeile, um die ganze Seite zu übernehmen, und eine Leiste erscheint, mit der du ihre Kategorie ändern oder sie löschen kannst, alle auf einmal. Beim Löschen wird vorher nachgefragt und jede Person genannt, die geht. Nach einer Änderung der Kategorie setzt **Rückgängig** die Kategorien aller wieder so, wie sie waren.

## So gehst du mit mehreren Personen auf einmal vor

1. Öffne deinen Tresor. Wähle auf seinem Dashboard in der Seitenleiste **Personen**.

   ![Das Dashboard des Tresors Persönlich, mit Personen in der Seitenleiste unter der Überschrift Personen](/assets/images/blog/2026-11-25-bulk-people-actions-dashboard.webp "Das Dashboard des Tresors. Personen steht in der Seitenleiste.")

2. Die Liste hat jetzt am Anfang jeder Zeile ein Kästchen und eines in der Kopfzeile.

   ![Die Personenliste mit einem leeren Kästchen am Anfang der Zeilen von Chandler Bing, Ross Geller und Rachel Green und einem in der Kopfzeile neben Name](/assets/images/blog/2026-11-25-bulk-people-actions-list.webp "Ein Kästchen in jeder Zeile und eines in der Kopfzeile für die ganze Seite.")

3. Hake die Personen an, mit denen du etwas tun willst. Um alle auf der Seite zu übernehmen, hake stattdessen das Kästchen in der Kopfzeile an. Die Filter und die Suche machen Platz für eine Leiste, die anzeigt, wie viele Personen ausgewählt sind. Solange jemand ausgewählt ist, wählt ein Klick auf eine Zeile diese aus, statt sie zu öffnen.

4. Um sie in eine Kategorie einzusortieren, wähle **Kategorie ändern** und dann die Kategorie unter **Verschieben nach**. Um ihre Kategorie zu entfernen, wähle **Kategorie entfernen**.

   ![Das Menü Kategorie ändern, geöffnet unter der Auswahlleiste, mit Familie, Eng befreundete Person, Befreundete Person, Kollege oder Kollegin, Bekannte Person und Beruflich unter Verschieben nach und Kategorie entfernen ganz unten](/assets/images/blog/2026-11-25-bulk-people-actions-category.webp "Jede Kategorie deines Kontos und eine Möglichkeit, sie zu entfernen.")

   Monica verschiebt sie sofort und sagt, wie viele Personen sich geändert haben. Hast du es dir anders überlegt? Wähle in dieser Meldung **Rückgängig**, und alle bekommen ihre vorherige Kategorie zurück.

   ![Die Personenliste mit der Meldung 3 Personen nach Eng befreundete Person verschoben und einer Schaltfläche Rückgängig rechts daneben](/assets/images/blog/2026-11-25-bulk-people-actions-undo.webp "Ein Klick auf Rückgängig stellt alles wieder her.")

5. Um sie stattdessen zu löschen, wähle **Löschen**. Monica fragt vorher nach und nennt jede Person, die sie gleich löschen wird. Zum Bestätigen wähle die Schaltfläche, die angibt, wie viele Personen gehen, etwa **3 Personen löschen**. Um sie in Ruhe zu lassen, wähle **Behalten**.

   ![Ein Dialog mit der Frage 3 Personen löschen, der Chandler Bing, Ross Geller und Rachel Green nennt, mit den Schaltflächen Behalten und 3 Personen löschen](/assets/images/blog/2026-11-25-bulk-people-actions-delete.webp "Monica nennt, wer geht, bevor sie jemanden löscht.")

Um die Auswahl aufzuheben, wähle das Kreuz am Ende der Leiste oder drücke die Esc-Taste. Auch wenn du Filter, Suche, Sortierung oder Seite änderst, wird sie aufgehoben.

## Gut zu wissen

Mehrere Personen zu löschen funktioniert genau wie das Löschen einzelner Personen. Alles, was auf ihren Einträgen steht, geht mit ihnen, und es gibt kein Rückgängig, also lies die Namen, bevor du bestätigst. Der Kontakt, der dich selbst darstellt, wird nie gelöscht, auch wenn er ausgewählt ist, die anderen werden es trotzdem.

Eine Person, deren Vorlage kein Kategoriefeld hat, bleibt bei einer Änderung der Kategorie unverändert, und die Meldung weist darauf hin.

Du kannst mit bis zu 500 Personen auf einmal arbeiten.

Skripte und KI-Assistenten können dasselbe: Die API kann mehrere Kontakte löschen oder ihre Kategorien in einer einzigen Anfrage ändern, und der MCP-Server bietet beides als Werkzeuge an.
