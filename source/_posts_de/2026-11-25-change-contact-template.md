---
title: 'Du kannst jetzt die Vorlage eines Kontakts ändern'
slug: change-contact-template
date: 2026-11-25
author: 'Regis Freyd'
description: 'Weise jemandem eine andere Vorlage zu, wenn seine Seite nicht mehr passt. Monica zeigt dir vorher, was passieren wird, und nichts, was du geschrieben hast, wird jemals gelöscht.'
category: feature
icon: layers
screenshot:
  src: /assets/images/blog/2026-11-25-change-contact-template-preview.webp
  alt: 'Der Bereich Vorlage unter Kontakt bearbeiten, der fragt, ob Monica Geller auf die Vorlage Berufliches Netzwerk wechseln soll, und Kategorie, Geschlecht, Geburtstag und Adresse als Einträge auflistet, die zu Unbenutzte Antworten wandern'
  caption: 'Bevor sich etwas ändert, listet Monica auf, was zu Unbenutzte Antworten verschoben wird.'
pullRequest: 8014
docs: https://my.monicahq.com/docs/en/people/change-the-template
---
Jeder Kontakt in Monica wird von einer Vorlage geprägt. Die Vorlage bestimmt, welche Tabs, Abschnitte und Felder seine Seite zeigt: Ein enger Freund kann eine Seite über Geburtstage und Lieblingsrestaurants haben, ein Kollege eine Seite über sein Team und seine Führungskraft.

Bisher blieb ein Kontakt für immer bei der Vorlage, mit der er angelegt wurde. Wenn du Rachel mit **Einfacher Kontakt** hinzugefügt hast und sie später deine Kollegin wurde, gab es keine Möglichkeit, ihr die Seite **Kollege oder Kollegin** zu geben. Wenn du aus Versehen die falsche Vorlage gewählt hast, musstest du damit leben oder den Kontakt löschen und von vorn anfangen, und dabei alles verlieren, was du über sie geschrieben hattest.

Jetzt kannst du jeden jederzeit auf eine andere Vorlage umstellen, oder auf eine andere Version der Vorlage, die er gerade nutzt. Bevor sich etwas ändert, zeigt dir Monica genau, was passieren wird: die Antworten, die in der neuen Vorlage keinen Platz haben und zu **Unbenutzte Antworten** wandern, die, die zurückkommen, und die Erinnerungen, die enden oder wieder beginnen. Nichts, was du geschrieben hast, wird jemals gelöscht, und du kannst jederzeit zurückwechseln.

## So änderst du die Vorlage eines Kontakts

1. Öffne deinen Tresor. Wähle auf seinem Dashboard in der Seitenleiste **Personen**.

   ![Das Dashboard des Tresors Persönlich, mit Personen in der Seitenleiste unter der Überschrift Personen](/assets/images/blog/2026-11-25-change-contact-template-dashboard.webp "Das Dashboard des Tresors. Personen steht in der Seitenleiste.")

2. Wähle in der Liste der Personen die Person aus, deren Vorlage du ändern möchtest. Die Angaben unter ihrem Namen enden mit der Vorlage, die ihre Seite verwendet.

   ![Die Kontaktseite von Monica Geller, mit Vorlage Einfacher Kontakt am Ende der Angaben unter ihrem Namen und der Schaltfläche Kontakt bearbeiten oben rechts](/assets/images/blog/2026-11-25-change-contact-template-contact.webp "Die Kontaktseite zeigt, welche Vorlage sie verwendet. Kontakt bearbeiten befindet sich oben rechts.")

3. Wähle **Kontakt bearbeiten**, oben rechts auf der Seite der Person.

4. Scrolle nach unten zum Bereich **Vorlage**. Öffne die Liste unter **Vorlage von**, gefolgt von ihrem Namen. Sie zeigt alle Vorlagen, die du für Kontakte nutzen kannst. Eine Vorlage mit mehreren veröffentlichten Versionen listet jede davon auf, und die, die die Person gerade nutzt, ist abgehakt.

   ![Der Bereich Vorlage unter Kontakt bearbeiten, mit Einfacher Kontakt in der Liste ausgewählt](/assets/images/blog/2026-11-25-change-contact-template-panel.webp "Der Bereich Vorlage, ganz unten unter Kontakt bearbeiten.")

5. Wähle die neue Vorlage. Monica ändert noch nichts. Stattdessen erscheint ein Fenster, das fragt, ob die Person auf diese Vorlage umgestellt werden soll, und auflistet, was mit ihrer Seite passieren wird.

   ![Das Fenster mit der Frage, ob Monica auf die Vorlage Eng befreundete Person umgestellt werden soll, mit dem Hinweis, dass keine Daten verloren gehen, und den Schaltflächen Abbrechen und Vorlage ändern](/assets/images/blog/2026-11-25-change-contact-template-confirm.webp "Monica fragt nach, bevor etwas geändert wird.")

6. Lies die Listen im Fenster. Wenn sie für dich passen, wähle **Vorlage ändern**. Um alles zu lassen, wie es war, wähle **Abbrechen**.

Monica bringt dich zurück zur Seite des Kontakts, die jetzt die Tabs und Abschnitte der neuen Vorlage zeigt.

Der Bereich **Vorlage** erscheint nur, wenn es etwas auszuwählen gibt. Wenn du für Kontakte nur eine einzige Vorlage mit nur einer veröffentlichten Version hast, gibt es nichts, worauf du umstellen könntest, und der Bereich bleibt ausgeblendet.

## Was mit dem passiert, was du geschrieben hast

Eine Antwort, für die es in der neuen Vorlage ein passendes Feld gibt, wandert dorthin, und ihre Erinnerung läuft weiter. Ein Geburtstag bleibt ein Geburtstag.

Eine Antwort ohne Platz in der neuen Vorlage wandert zu **Unbenutzte Antworten**. Sie wird auf der Seite nicht mehr angezeigt, aber Monica behält sie, und sie kommt von allein zurück, sobald die Person wieder eine Vorlage mit einem passenden Feld nutzt. Eine Erinnerung zu einem Datum, das dorthin wandert, endet und beginnt wieder, wenn das Datum zurückkommt.

Name, Foto, Beziehungen, Lebensereignisse und Gruppen gehören zur Person und nicht zur Vorlage, daher berührt ein Vorlagenwechsel sie nie.

## Anders überlegt?

Wähle unter **Kontakt bearbeiten** wieder die alte Vorlage, und alles, was zu **Unbenutzte Antworten** gewandert ist, kommt zurück. Du kannst auch im Menü neben **Kontakt bearbeiten** den **Versionsverlauf** öffnen und zu der Vorlage zurückkehren, die die Person zuvor genutzt hat.

Skripte und KI-Assistenten können dasselbe tun, mit denselben Regeln: Die API und der MCP-Server können beide einen Vorlagenwechsel in der Vorschau zeigen und ihn durchführen.
