---
title: "Building Monica: Beziehungen zwischen Menschen modellieren"
slug: modeling-relationships
date: 2026-09-02
author: 'Regis Freyd'
description: "Zu entscheiden, was eine Beziehung eigentlich ist, hat sich als eines der schwierigsten Probleme beim Neubau von Monica erwiesen."
---
Als wir mit dem Neubau von Monica begonnen haben, war mir klar, dass Beziehungen einer der Bereiche sind, die wir neu denken müssen. Womit ich nicht gerechnet hatte, war, wie schwierig es ist, überhaupt zu definieren, was eine Beziehung ist.

Ein persönliches CRM muss wissen, wie Menschen miteinander verbunden sind. Jemand ist deine Mutter, dein Bruder, dein Freund, deine Kollegin oder dein Partner. Monica kann das seit Jahren, und aus Sicht der Nutzerin ist es eine recht einfache Funktion: Du wählst eine Person, wählst eine Beziehung, und fertig.

Zu entwerfen, was hinter diesem kleinen Auswahlmenü passiert, ist dagegen alles andere als einfach.

## Selbst einfache Beziehungen sind nicht so einfach

Nehmen wir an, Monica ist die Schwester von Ross. Aus Monicas Sicht ist Ross ihr Bruder. Beide Aussagen beschreiben dieselbe Beziehung, aber die Worte, die wir verwenden, hängen davon ab, welche Person wir betrachten.

Dasselbe passiert überall in einer Familie. Rachel ist Emmas Mutter, während Emma Rachels Tochter ist. Jemandes Tante hat eine Nichte oder einen Neffen. Eine Großmutter hat eine Enkelin oder einen Enkel.

Andere Beziehungen funktionieren nicht so. Chandler und Joey sind Freunde. Das Wort ist dasselbe, egal von welcher Seite man schaut. Bei Cousins und Kollegen kann es genauso sein.

Damit haben wir schon unterschiedliche Verhaltensweisen. Manchmal ändert eine Beziehung ihren Namen, je nachdem von welcher Seite wir schauen, manchmal nicht, und manchmal hängt das Wort, das wir verwenden, vom Geschlecht einer der beiden Personen ab.

Und das ist der einfache Teil.

## Familien sind unordentlich

Stell dir vor, zwei Menschen heiraten und haben zwei Kinder. Sie lassen sich scheiden. Einer von ihnen heiratet jemanden, der schon Kinder aus einer anderen Beziehung hat, und vielleicht bekommen sie zusammen noch ein Kind.

Das ist keine besonders ungewöhnliche Familie, aber jetzt haben wir Eltern, Kinder, Geschwister, Halbgeschwister, Stiefkinder, Stiefeltern, Ehepartner und Ex-Ehepartner.

Es wirft außerdem Fragen auf, für die es meiner Meinung nach nicht immer eine allgemeingültige Antwort gibt. Wenn du dich scheiden lässt, hört deine Schwiegermutter dann auf, deine Schwiegermutter zu sein? Formal vielleicht. Aber was, wenn du sie seit zwanzig Jahren kennst und sie weiterhin als Teil deiner Familie betrachtest? Die Großmutter deiner Kinder hört sie jedenfalls nicht auf zu sein, nur weil deine Ehe zu Ende gegangen ist.

Dann gibt es leibliche Eltern, Adoptiveltern, Pflegeeltern und Vormunde. Jemand kann mehrere Menschen haben, die er als Eltern betrachtet, und diese Beziehungen bedeuten nicht zwangsläufig dasselbe. Es gibt entfremdete Familienmitglieder, Menschen, die jemanden als Bruder oder Schwester sehen, ohne biologisch verwandt zu sein, frühere Partner, die sich sehr nahe bleiben, und Eltern, die gemeinsam Kinder großziehen, ohne noch ein Paar zu sein.

Der aufgeräumte Familienstammbaum, den wir uns bei diesem Problem gern vorstellen, übersteht den Kontakt mit vielen echten Familien nicht.

Und selbst wenn die Familienstruktur schlicht ist, verändern sich Beziehungen. Wer heute dein Partner ist, kann in fünf Jahren dein Ex-Partner sein. Das heißt nicht, dass die alte Beziehung einfach verschwinden sollte. Dass zwei Menschen fünfzehn Jahre verheiratet waren, bleibt Teil ihrer Geschichte, auch wenn sie es nicht mehr sind.

Beziehungen haben eine Vergangenheit, was es ebenso problematisch macht, nur ihren aktuellen Zustand darzustellen.

## Zwei Menschen müssen sich über ihre Beziehung nicht einig sein

Familienbeziehungen geben uns wenigstens einige Fakten, mit denen wir arbeiten können. Freundschaft ist noch unpräziser.

Wenn Monica Rachel als enge Freundin betrachtet, betrachtet Rachel dann zwangsläufig Monica als enge Freundin? Wir haben keine Ahnung.

Dasselbe Problem gibt es bei Mentoren, Bekannten und vielen anderen Beziehungen. Jemand kann eine andere Person als Mentor sehen, auch wenn diese Person das Wort selbst nie benutzen würde. Jemand kann einen alten Freund praktisch als Familie sehen, während die andere Person in ihm jemanden sieht, den sie vor Jahren gekannt hat.

Das ist in Monica sehr wichtig, denn die Information soll keinen objektiven sozialen Graphen beschreiben. Es sind deine Informationen über die Menschen in deinem Leben.

Wenn du schreibst, dass jemand dein Freund ist, beschreibst du die Beziehung so, wie du sie verstehst. Monica hat die Version der anderen Person nicht, und in vielen Fällen gibt es wahrscheinlich ohnehin keine einzige richtige Antwort.

Besonders seltsam wird es, wenn Software versucht, Beziehungen in etwas Messbares zu verwandeln. Ist jemand ein besserer Freund, weil du ihn jede Woche siehst? Ist eine Freundin, die du seit fünf Jahren nicht gesehen hast, weniger wichtig als ein Kollege, mit dem du täglich sprichst? Natürlich sagt uns die Häufigkeit etwas über eine Beziehung, aber sie sagt uns nicht, was diese Beziehung für jemanden bedeutet.

## Auch die Zeit passt nicht sauber hinein

Ein Kollege kann ein Freund werden. Ein Freund kann ein Partner werden. Ein Partner kann ein Ex-Partner werden, und Jahre später kann dieselbe Person wieder ein Freund werden.

Wenn Monica festhält, dass zwei Menschen verheiratet sind, und sie sich später scheiden lassen, was soll dann mit der Ehe passieren? Sie zu entfernen würde die aktuelle Information richtig machen, aber auch etwas ziemlich Wichtiges aus ihrer Geschichte entfernen.

Wir könnten Datumsangaben behalten, nur kennen die Leute sie oft nicht. Ich kann wissen, dass zwei Freunde einmal zusammen waren, ohne die leiseste Ahnung zu haben, wann sie angefangen haben oder wann genau sie sich getrennt haben. Genaue Daten zu verlangen würde das Modell sauberer machen und das Produkt deutlich nerviger.

Es gibt auch keine Garantie, dass Beziehungen ordentlich von einem Zustand in den nächsten wechseln. Menschen wachen nicht zwangsläufig eines Morgens auf und wechseln von „Freund“ zu „Partner“. Manche Beziehungen haben einen klaren Anfang, etwa eine Ehe. Viele andere nicht.

Die Datenbank würde sehr gerne wissen, wann alles begonnen und wann es geendet hat. Meistens wissen wir es nicht.

## Englisch ist nicht das Modell für die ganze Welt

Ein weiteres Problem ist, dass die meisten der ersten Beispiele, die einem einfallen, auf dem Englischen beruhen.

Englisch verwendet „cousin“ für eine große Zahl von Familienbeziehungen, während andere Sprachen viel genauer sein können. Mandarin zum Beispiel hat unterschiedliche Wörter für Cousins, je nachdem, von welcher Seite der Familie sie kommen, welches Geschlecht sie haben und manchmal wie alt sie sind. Schwedisch unterscheidet alle vier Großeltern: *mormor* ist die Mutter deiner Mutter, *morfar* der Vater deiner Mutter, *farmor* die Mutter deines Vaters und *farfar* der Vater deines Vaters. Englisch gibt uns einfach „grandmother“ und „grandfather“.

Koreanisch liefert ein weiteres Beispiel. Selbst etwas so Einfaches wie „älterer Bruder“ ändert sich danach, wer spricht. Ein Mann nennt seinen älteren Bruder *hyeong*, eine Frau nennt ihn *oppa*. Das Beziehungsvokabular trägt eine Information, die im englischen Wort „brother“ nicht steckt.

Für Monica ist das wichtig, weil Monica in viele Sprachen übersetzt und auf der ganzen Welt benutzt wird. Wir können das gesamte Beziehungssystem nicht auf der Annahme aufbauen, dass Englisch die kanonische Liste der Beziehungen enthält und jede andere Sprache diese Wörter nur zu übersetzen braucht.

Das ist ein Problem, dem wir in Monica schon begegnet sind, und der Neubau lässt es nicht auf magische Weise verschwinden.

## Familie ist nicht einmal der schwierigste Teil

Familienbeziehungen haben wenigstens meist einen Namen. Der Rest unserer Beziehungen ist viel weniger strukturiert.

„Freund“ kann jemanden beschreiben, den du seit dreißig Jahren kennst und mit dem du jede Woche sprichst, aber auch jemanden, den du zweimal im Jahr siehst und der dir sehr viel bedeutet. Ein Kollege kann die Person sein, die täglich neben dir sitzt, oder jemand, mit dem du vor fünfzehn Jahren gearbeitet hast.

Und Menschen passen nicht in jeweils eine Kategorie. Jemand kann dein Kollege, dein Freund und dein früherer Mitbewohner sein. Dein Geschäftspartner kann auch dein Bruder sein. Deine Nachbarin kann der Elternteil der besten Freundin deiner Tochter sein.

Manchmal ist der Kontext selbst das Entscheidende. Du kennst jemanden, weil ihr zusammen in der Schule wart, im selben Team gespielt, im selben Haus gewohnt oder am selben Projekt gearbeitet habt. „Freund“ mag formal richtig sein, verliert aber die Information, die erklärt, warum diese Person überhaupt Teil deines Lebens ist.

An dieser Stelle wird eine einfache Frage wie „woher kennst du diese Person?“ überraschend schwer mit einem einzigen Feld zu beantworten.

## Eine Beziehung kann viele weitere nach sich ziehen

Angenommen, Ross ist Monicas Bruder und Ross hat einen Sohn namens Ben. Wir verstehen sofort, dass Monica Bens Tante ist.

Software kann zu demselben Schluss kommen. Und sobald sie damit anfängt, kann sie weitermachen.

Eltern implizieren Kinder. Kinder mit denselben Eltern sind vielleicht Geschwister. Geschwister mit Kindern erzeugen Tanten, Onkel, Nichten und Neffen. Nimm noch eine Generation dazu, und du hast Großeltern und Enkel. Recht schnell kann eine kleine Zahl von Beziehungen einen viel größeren Familiengraphen erzeugen.

Aber dass Software etwas ableiten *kann*, heißt nicht zwangsläufig, dass sie es sollte.

Der neue Ehepartner eines Elternteils ist nicht automatisch ein Elternteil des Kindes. Zwei Menschen mit einem gemeinsamen Elternteil sind formal vielleicht Halbgeschwister, kennen sich aber möglicherweise nicht. Die Informationen, die Monica hat, können auch einfach unvollständig sein. Und selbst wenn die Familienbeziehung formal richtig ist, muss es nicht die Beziehung sein, mit der die Beteiligten sich selbst beschreiben würden.

Jedes Mal, wenn die Software eine weitere Beziehung ableitet, bekommt sie auch eine weitere Gelegenheit, falsch zu liegen.

## Es gibt mehr Fragen als Antworten

Je länger wir daran arbeiten, desto mehr Sonderfälle finden wir.

Soll Monica die Geschichte einer Beziehung behalten oder nur ihren aktuellen Zustand? Können zwei Menschen mehrere Beziehungen gleichzeitig haben? Ist „bester Freund“ eine andere Beziehung als „Freund“, oder ist das etwas anderes? Was passiert, wenn wir die Mutter von jemandem kennen, diese Mutter aber kein Kontakt in Monica ist? Wie beschreiben wir Beziehungen, die uns wichtig sind, für die es aber keinen bequemen Namen gibt?

Manches davon sind Datenbankprobleme. Das meiste nicht.

Der schwierige Teil ist die Entscheidung, was wir meinen, wenn wir sagen, dass zwei Menschen eine Beziehung haben, denn Menschen benutzen dieses Wort nicht annähernd mit der Genauigkeit, die eine Datenbank bevorzugen würde.

In der Oberfläche wird das alles am Ende vielleicht auf ein paar Worte in einem Profil hinauslaufen: Mutter, Bruder, Freund, Kollegin.

Diese paar Worte richtig hinzubekommen, ist eines der schwierigsten Probleme, mit denen wir beim Neubau von Monica zu tun haben.
