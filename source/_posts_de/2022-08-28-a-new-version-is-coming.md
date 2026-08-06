---
title: "Ein neues Monica kommt"
slug: a-new-version-is-coming
date: 2022-08-28
published_at: 2022-08-28T20:44:00+00:00
author: 'Regis Freyd'
description: "Eine völlig neue Hauptversion ist im Anmarsch."
original_url: https://www.monicahq.com/blog/a-new-version-is-coming
---
[Alexis](https://twitter.com/asbin) und ich [(Regis)](https://twitter.com/maazarin) arbeiten seit einigen Monaten (genau genommen seit Januar 2022) an einer brandneuen Version von Monica. Der ersten echten neuen Hauptversion seit unserem Start vor einigen Jahren.

Ich bin sehr versucht, sie eine „schnellere, neuere, bessere Version“ zu nennen, weil sie das ist, aber ich bin schlecht im Marketing. Also sage ich einfach: Es ist eine neue Version, und ich beantworte unten die Fragen, die Sie vielleicht haben.

**Was meinen Sie mit neuer Version?**

Eine vollständige Neuentwicklung von Monica, von Grund auf.

**Sind Sie verrückt?**

Ja, aber auch: Monicas Codebasis ist inzwischen alt. Alt in dem Sinne, dass sie 7 Jahre auf dem Buckel hat und Hunderte Mitwirkende sie angefasst haben. Es gibt Konzepte im Code, die wir durchgehen ließen, weil wir es damals nicht besser wussten oder Mitwirkende nicht verärgern wollten, und die wir nicht mehr wollen. Das Projekt hat viel zu viele Abhängigkeiten, und die Pflege des Codes ist schwerer geworden als früher. Etwas zu ändern ist riskanter und dauert länger. Außerdem haben wir gesehen, wie Menschen Monica nutzen und was sie damit tun wollen, und der jetzige Code schränkt uns viel zu stark ein, wenn wir das unterstützen wollen. Schließlich ist Monica für uns weiterhin ein Nebenprojekt. Wir sind mit Leidenschaft dabei und wollen auch Freude am Bauen haben. Und die aktuelle Version machte nicht mehr so viel Freude.

**Was heißt Neuentwicklung?**

Wir haben mit einer leeren Codebasis angefangen und von dort aus gebaut. Vorher war es eine Laravel-Anwendung (also PHP), mit Blade-Views und hier und da etwas Vue. Jetzt ist es weiterhin eine Laravel-Anwendung (also weiterhin PHP), vollständig mit Vue 3. Wir haben vieles vereinfacht, manches flexibler und damit etwas komplexer gemacht, doch wir glauben, dass wir damit Monicas Zukunft tragen können.

Das heißt auch: Wir haben eine brandneue Datenstruktur, getragen von einem neuen Datenbankschema.

**Wird die neue Version Monica heißen?**

Derzeit lautet der Codename des neuen Monica Chandler. Diesen Namen behalten wir jedoch nicht, der offizielle Name des neuen Monica wird Monica sein. Der Klarheit halber nennen wir die neue Version im weiteren Text Chandler.

**Sie wählen PHP trotz \<hier neue Sprache/Framework einsetzen>?**

PHP ist eine großartige Sprache. Die Zeiten von PHP 4 oder 5 sind vorbei. Zudem ist es eine sehr einfache Sprache, was bedeutet, dass viele Menschen auf der Welt PHP lesen und verstehen. PHP zu wählen heißt: leichter zum Projekt beitragen, leichter debuggen, leichter warten und für uns leichter Menschen finden, die helfen, falls das künftig nötig wird. Und schließlich ist das PHP-Ökosystem einfach großartig, mit Laravel, das eine der besten Entwicklererfahrungen bietet, die ich kenne.

**Welche Funktionen wird Chandler haben?**

Zum Start wollen wir den Funktionsumfang von Monica v1 zu 100 Prozent (oder fast) abdecken. Auch bei gleichem Umfang wollten wir Funktionen entweder vereinfachen (etwa Aufgaben) oder robuster machen (etwa Erinnerungen).

Ist das erledigt, haben wir so viele Ideen für das, was Monica werden soll, dass es überwältigend ist. Im Kern wurde Monica als eines der ersten persönlichen CRMs (oder PRMs, persönliche Beziehungsverwaltung) geboren. So haben wir es auch positioniert. Doch nach Jahren der Arbeit daran, nach Gesprächen und nach dem Lesen der Tausenden E-Mails, die Sie uns geschickt haben, wurde uns klar: Monica ist vor allem eine Möglichkeit, Ihr Leben zu dokumentieren, was immer das für Sie bedeutet. Monica wird also darum gehen, Ihr Leben zu dokumentieren, und Ihnen Werkzeuge geben, es so zu tun, wie Sie es möchten.

Überall liest man, Produkte sollten eine Haltung und eine starke Persönlichkeit haben, damit Menschen sie so nutzen, wie man es sich vorstellt. Das war die Richtung von v1. Diese Aussage wollen wir nun ändern. Wir wollen, dass Menschen Monica so nutzen und einrichten, wie sie es möchten. Wer sind wir, Ihnen zu sagen, dass Sie für Ihre Kontakte nur 3 Pronomen verwenden sollten, oder welche Beziehungsarten es bei Ihnen zu geben hat? Chandler wird vollständig anpassbar sein, von dem, was Sie in der Oberfläche sehen, bis zu der Art von Daten, die Sie eingeben können. Marketingleute würden sagen: „Bei Chandler dreht sich alles um Sie“, und in gewisser Weise stimmt das. Der Nachteil: Technisch ist das schwerer zu handhaben, aber das ist unser Problem.

**Wann ist sie fertig? Kann ich sie ausprobieren?**

Sie ist fertig, wenn sie fertig ist. Denken Sie daran: Wir arbeiten daran keineswegs in Vollzeit. Alexis und ich haben beide fordernde Hauptberufe, Familien, Freunde und Monica (und außerdem OfficeLife).

ALLERDINGS.

Wir haben schon viel geschafft. Einige große Funktionen, die Sie kennen und schätzen, fehlen in der neuen Version noch: Lebensereignisse, Aktivitäten, Geschenke und CalDAV/CardDAV, um nur einige zu nennen. Besonders Lebensereignisse sind ein großer Brocken, weil wir das Konzept komplett neu denken und wirklich nützlich machen wollen. Und, ein gewaltiges „und“: Derzeit haben wir noch keine API. Da es eine neue Codebasis ist, können wir Ihre bestehenden Kontakte aus v1 nicht einfach kopieren und erwarten, dass sie in v2 auftauchen. Würden wir jetzt etwas veröffentlichen, könnten Sie Ihre Daten nicht importieren. Und das halten wir für ein Problem.

DAVON ABGESEHEN.

Wir brauchen trotzdem Testerinnen und Tester, die uns helfen, Fehler zu finden, auch wenn wir hier keine Fehler machen (lol). Wir brauchen Menschen, die Rechtschreibfehler in der Dokumentation beheben. Was wir also tun könnten: Chandler in einem sehr frühen Alpha-Zustand starten, für alle kostenlos, solange die Alpha-Phase dauert.

**Ist es weiterhin quelloffen? Kann ich es kostenlos nutzen?**

Ja, es ist weiterhin quelloffen, mit derselben Lizenz wie zuvor. Das heißt, Monica ist selbstverständlich kostenlos, es sei denn, Sie nutzen die Fassung, die wir betreiben und die irgendwann etwas kosten wird, wie die aktuelle Version. Ja, Sie können es installieren, wo Sie wollen, auf Ihrem eigenen Server. Da Chandler nicht dieselbe Codebasis ist, haben wir noch nicht das reiche Ökosystem von früher mit all den verschiedenen Installationswegen, aber das kommt noch. Ja, Sie können weiterhin zum Code beitragen, Fehler beheben, Funktionen ergänzen, auch wenn wir uns das Recht vorbehalten, Ihre Pull Requests abzulehnen, wenn wir das Angebotene nicht unterstützen möchten.

**Wie geht es mit Monica v1 weiter?**

Wir unterstützen v1, bis Chandler die Alpha- und Beta-Phase verlassen hat. Danach wird sie abgekündigt, doch wer sie selbst betreibt, kann sie weiter nutzen, wenn er möchte. Die von uns betriebene v1 wird danach nicht mehr unterstützt.

**Kann man jetzt schon zur Codebasis beitragen?**

Das Repository ist bereits [auf GitHub verfügbar](https://github.com/monicahq/chandler), doch wir sind weit davon entfernt, so ausgereift zu sein wie das jetzige Haupt-Repository. Das heißt, wir sind noch nicht bereit, Beiträge von allen aufzunehmen, weil sich fast täglich etwas ändert. Wenn Sie damit leben können, nur zu.

**Wie geht es weiter?**

Zunächst einmal: Vielen Dank, dass Sie diesen Beitrag ganz gelesen haben. Wir sind unserer Gemeinschaft überaus dankbar dafür, wie sehr Sie sich weiterhin für dieses kleine Werkzeug begeistern, das wir mit Freude bauen. Alexis und ich sind nach wie vor hoch motiviert, und wir danken Ihnen, dass Sie mit uns dabei sind. Wir bleiben in Kontakt.
