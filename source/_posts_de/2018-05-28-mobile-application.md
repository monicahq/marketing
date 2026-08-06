---
title: "Die mobile Anwendung ist da"
slug: mobile-application
date: 2018-05-28
published_at: 2018-05-28T00:00:00+00:00
author: 'Regis Freyd'
description: "Die offizielle mobile Anwendung ist gelandet."
original_url: https://www.monicahq.com/blog/mobile-application
---
Seit dem öffentlichen Start im Juni 2017 erhalte ich fast täglich E-Mails, die nach einer mobilen Anwendung fragen.

Ich verstehe das. Eine mobile App für Monica ergibt so viel Sinn. Sie wollen die Information sofort verfügbar haben, wo immer Sie sind, im richtigen Moment. Nicht erst zu Hause vor dem Rechner.

Wir haben vor 6 Monaten mit der Arbeit an der mobilen Anwendung begonnen. Das ist eine lange Zeit. Trotzdem glaube ich, dass den meisten Menschen nicht klar ist, wie viel Arbeit nötig ist, um eine mobile Anwendung auszuliefern. Besonders, wenn 99,9 Prozent des Codes von einer einzigen Person stammen (dem großartigen @mokto). Der einen Hauptberuf hat. Und dafür nicht bezahlt wird.

In diesen Monaten haben wir viel Mühe darauf verwendet, alles zu schaffen, was die mobile Anwendung braucht. Die API hat sich stark verändert, um bestimmte Funktionen zu ermöglichen. Wir haben das Backend stabilisiert, damit alles reibungslos läuft. Außerdem haben wir viel Zeit darauf verwendet, das GitHub-Repository der mobilen App richtig aufzusetzen, damit wir künftig schneller vorankommen (gemeint sind eine gute CI, Unit-Tests, automatisches Veröffentlichen in den Stores und so weiter).

Sechs Monate später freuen wir uns, die erste Version der mobilen Anwendung ankündigen zu können, verfügbar [für iOS](https://itunes.apple.com/ca/app/monica-personal-crm/id1339447754?mt=8) und [Android](https://play.google.com/store/apps/details?id=com.monicahq.app).

![Bild](/assets/images/blog/2018-05-28-mobile-app.webp)

Ein Vorbehalt allerdings: *Diese erste Version ist nur lesend*. Sie können also nichts anlegen oder bearbeiten. Wir wollen eine großartige Anwendung, aber wir wollen langsam vorgehen und sicherstellen, dass sie gut funktioniert. Sobald wir sicher sind, dass diese Version für alle läuft, ergänzen wir Funktionen, mit denen Sie Ihre Daten vollständig bearbeiten können (kleiner Hinweis: Wir haben bereits mit einer neuen Version begonnen).

Davon abgesehen bringt diese mobile App alles mit, was Sie von uns erwarten:

- Eine einfache und freundliche Oberfläche.
- Sie können sich mit unserer gehosteten Fassung von Monica verbinden oder sich an Ihrer eigenen Instanz anmelden.
- Der Code ist quelloffen. Sie können ihn lesen, Tickets einreichen, zum Code beitragen. Alles, was wir tun, ist offen und transparent, und wir glauben, dass nur Zusammenarbeit zum besten Produkt führt.
- Quelloffen heißt, dass Sie *die mobile Anwendung bauen und ausführen können, ohne die offiziellen Stores von Apple und Google zu benutzen*, was ich ziemlich beeindruckend finde.
- Wir zeigen keine Werbung und verkaufen Ihre Daten nicht weiter.
- Wir haben keinerlei Tracking in unserem Code.
- Die App ist kostenlos. Ohne Hintertür.

### Wie können Sie helfen?

Wir brauchen Menschen, die die Anwendung testen und uns [Fehler melden](https://github.com/monicahq/chandler/issues), im Wesentlichen. Außerdem interessiert uns Ihre Meinung dazu, was wir als Nächstes bauen sollten oder wie wir die App besser machen können (in der Bedienung oder im Aufbau).

### Wie es weitergeht

In den nächsten Tagen verbessern wir die Dokumentation im offiziellen GitHub-Repository, damit Entwickler, die helfen wollen, ganz leicht einsteigen können.

In den kommenden Monaten ergänzen wir die Möglichkeit, Ihre Daten in der mobilen Anwendung zu ändern. Das Ziel ist, dass alles, was Sie im Web tun können, auch mobil möglich ist (mit Ausnahme des Datenexports, denn wie sollte man unter iOS eine Datei ablegen ...). Deshalb bauen wir Funktionen jetzt zuerst in der API und dann in der Oberfläche (Web und Mobil).

Zum Abschluss möchte ich sagen, dass ich sehr stolz auf das bin, was wir bisher erreicht haben, und noch stolzer auf die Gemeinschaft, die uns täglich hilft. Ihre Rückmeldungen und Ihre Hilfe machen Monica möglich.
