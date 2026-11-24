---
title: Produktphilosophie
slug: product-philosophy
section: product
order: 1
description: Einfach zu benutzen, durch Iteration gebaut, zuerst das Problem, kluge Voreinstellungen statt Optionen, und nie eine Abkürzung an der Arbeit vorbei, die Beziehungen erfordern.
updated: 2026-11-18
---

### Dinge offensichtlich machen

Ein Produkt sollte einfach zu benutzen sein. Nutzer sollten im Idealfall nie nach Hilfe suchen müssen, um etwas zu tun. Trotzdem sollte auf jedem Bildschirm ein Link zum Hilfecenter vorhanden sein, um Nutzern zu helfen, falls die Oberfläche leider nicht klar genug ist.

Dokumentation sollte das Produkt ergänzen, nicht schlechtes Design ausgleichen.

Wir sollten nicht davon ausgehen, dass etwas intuitiv ist, nur weil es für uns intuitiv ist. Wir haben Hunderte Stunden damit verbracht, das Produkt zu bauen. Wir wissen genau, wo alles ist und warum Dinge so funktionieren, wie sie funktionieren. Jemand, der Monica zum ersten Mal entdeckt, hat nichts von diesem Wissen.

Wir sollten Einfachheit auch nicht mit Minimalismus verwechseln. Eine Beschriftung von einem Button zu entfernen lässt die Oberfläche vielleicht besser aussehen, aber wenn die Leute nicht mehr verstehen, was der Button tut, was haben wir dann eigentlich erreicht?

### Ständig iterieren

Wir sollten immer iterieren. Die erste Version einer Funktion sollte eine etwas peinliche, aber sehr funktionale Lösung für ein Problem oder ein Bedürfnis sein. Dann können wir mit einer schnellen Feedbackschleife aus Bauen, Messen und Lernen eine bessere Version schaffen.

Wir sollten nicht zu sehr an unseren ursprünglichen Ideen hängen. Dass wir drei Wochen damit verbracht haben, etwas auf eine bestimmte Weise zu bauen, heißt nicht, dass es der richtige Weg ist.

Manchmal ist die beste Verbesserung, die wir an einer Funktion vornehmen können, sie komplett neu zu denken. Manchmal ist es, die Hälfte dessen zu entfernen, was wir gebaut haben.

Es gibt auch keine Verpflichtung, eine Funktion ständig weiter zu verbessern. Wenn etwas gut funktioniert, das Problem löst, für das es entworfen wurde, und die Menschen damit zufrieden sind, können wir es einfach in Ruhe lassen. Es besteht keine Notwendigkeit, etwas alle zwei Jahre neu zu gestalten, nur um es neu zu gestalten.

### Mit dem Problem anfangen

Wir sollten immer mit dem Problem anfangen, nicht mit der Lösung. Wir sollten uns auf gut formulierte Problembeschreibungen konzentrieren, um den Kern der Schwierigkeiten zu verstehen, auf die der Nutzer stößt. Erst wenn wir dem Problem genug Gedanken gewidmet haben, können wir das große Ganze erfassen und uns eine Lösung vorstellen.

Wenn uns jemand bittet, eine Funktion umzusetzen, beschreibt er meistens seine bevorzugte Lösung für ein Problem, das er hat. Unsere Verantwortung ist es, das zugrunde liegende Problem zu verstehen, nicht unbedingt, seine Lösung umzusetzen.

Manchmal können wir das Problem mit einer viel einfacheren Lösung beheben. Manchmal löst das Produkt es schon, aber wir haben nicht gut genug dafür gesorgt, dass das offensichtlich ist.

Dass wir etwas bauen können, ist kein besonders guter Grund, es zu bauen. Das gilt im Zeitalter der KI noch mehr, in dem das Schreiben des Codes zunehmend der einfachste Teil beim Bau eines Produkts wird.

Zu verstehen, was man bauen soll, bleibt der schwierige Teil.

### Kluge Voreinstellungen statt Optionen

So weit wie möglich sollten wir der Versuchung widerstehen, Konfigurationsoptionen oder Einstellungen hinzuzufügen. Es ist viel besser, kluge Voreinstellungen zu haben, als das Produkt mit Optionen zu überfrachten. Jede Option erhöht die Komplexität bei Entwicklung, Tests, Dokumentation und beim Verständnis des Produkts.

Eine der Charaktereigenschaften eines Projekt-Maintainers ist der Wunsch, Menschen zu gefallen. Wir wollen, dass Nutzer lieben, was wir in Nächten und Jahren geschaffen haben.

Jedes Mal, wenn wir einen Funktionswunsch erhalten, ist es also nur natürlich, ihn umsetzen zu wollen, besonders wenn es darum geht, eine Option hinzuzufügen. Wir geben den Nutzern ja nur eine Wahl. Was könnte da schon schiefgehen?

Nun, multiplizieren Sie diese Überlegung mit tausend Funktionswünschen, und Sie erhalten ein Produkt, das niemand mehr vollständig versteht, auch nicht die Menschen, die es gebaut haben.

Eine Option hinzuzufügen ist manchmal auch eine Möglichkeit, eine Entscheidung zu umgehen. Statt herauszufinden, was das beste Verhalten wäre, setzen wir beides um und überlassen die Entscheidung dem Nutzer. Das ist nicht unbedingt gutes Produktdesign. Manchmal ist es einfach unsere Faulheit.

Wir sollten so weit wie möglich vermeiden, dass unser Produkt so komplex wird, dass es nicht mehr wartbar ist. 37signals hat einen großartigen Artikel über das [Neinsagen](https://basecamp.com/gettingreal/05.3-start-with-no). Lesen Sie ihn.

Natürlich müssen manche Dinge wirklich konfigurierbar sein. Das Leben von Menschen ist verschieden. Aber es gibt einen grundlegenden Unterschied zwischen dem, Menschen ihr Leben so dokumentieren zu lassen, wie sie wollen, und ihnen zu erlauben, jeden Aspekt der Funktionsweise der Software zu konfigurieren.

### Für das echte Leben bauen

Das Leben ist chaotisch. Menschen vergessen Dinge. Beziehungen ändern sich. Familien sind kompliziert. Informationen sind unvollständig. Manchmal kennen wir nicht einmal den Namen von jemandem, den wir schon mehrmals getroffen haben.

Monica sollte dieser Realität gerecht werden.

Wir sollten Menschen nicht zwingen, Informationen auszufüllen, die sie nicht haben. Wir sollten keine starren Abläufe vorschreiben, wenn es keinen guten Grund dafür gibt. Wir sollten nicht annehmen, dass jeder sein Leben strukturiert und geordnet dokumentiert.

Das Produkt sollte sich an die Unvollkommenheiten des echten Lebens anpassen, nicht erwarten, dass sich das echte Leben an das Produkt anpasst.

### In Jahrzehnten denken

Die meisten Softwareprodukte sind darauf ausgelegt, was Nutzer heute brauchen. Monica muss auch berücksichtigen, was Nutzer in zehn oder zwanzig Jahren brauchen könnten.

Eine heute scheinbar unbedeutende Information kann in Zukunft äußerst wertvoll werden. Der Name von jemandem, den Sie auf einer Reise getroffen haben, ein Gespräch mit Ihren Großeltern oder etwas Lustiges, das Ihr Kind mit fünf Jahren gesagt hat.

Das hat Folgen dafür, wie wir das Produkt gestalten. Wir sollten äußerst vorsichtig sein, Informationen zu verlieren, inkompatible Änderungen einzuführen oder Entscheidungen zu treffen, die Menschen in Jahren am Zugriff auf ihre Daten hindern.

Wir sollten uns auch davor hüten, Funktionen rund um Technologien oder Trends zu bauen, die in ein paar Jahren vielleicht nicht mehr existieren.

Das menschliche Leben hat sich nicht grundlegend verändert, nur weil letzten Dienstag ein neues JavaScript-Framework erschienen ist.

### Die Aufmerksamkeit der Nutzer respektieren

Wir wollen kein Produkt bauen, von dem Menschen abhängig sind.

Wir brauchen keine Serien, Bestenlisten, Engagement-Werte oder Auszeichnungen, um Menschen zu ermutigen, ihr Leben zu dokumentieren. Wir wollen nicht, dass sich Nutzer schuldig fühlen, weil sie Monica seit zwei Wochen nicht geöffnet haben.

Einen erfolgreichen Tag, gemessen daran, wie viele Notizen Sie in Monica hinzugefügt haben, gibt es nicht.

Benachrichtigungen und Erinnerungen sollten existieren, weil sie dem Nutzer etwas bringen, nicht weil sie den Nutzer zurück in die Anwendung holen.

Das ideale Ergebnis der Nutzung von Monica könnte durchaus sein, weniger Zeit vor einem Bildschirm und mehr Zeit mit den Menschen zu verbringen, die Ihnen wichtig sind.

### Menschsein nicht automatisieren

Schließlich werden wir nie eine Funktion umsetzen, die die Notwendigkeit beseitigt, sich um gesunde Beziehungen zu bemühen.

Was meine ich damit? Ein soziales Umfeld zu haben erfordert Zeit und Mühe. Es gibt keinen einfachen Weg zu großartigen Beziehungen. Monica hilft Ihnen, Ihr Leben zu dokumentieren, aber es ersetzt nicht die Notwendigkeit, nun ja, tatsächlich an Ihren Beziehungen zu arbeiten.

Wir können Sie daran erinnern, dass jemand Geburtstag hat. Wir können Ihnen helfen, sich zu erinnern, worüber Sie das letzte Mal gesprochen haben, als Sie jemanden gesehen haben. Wir können Ihnen helfen, sich den Namen der Tochter Ihres Kollegen zu merken.

Aber sich an den Geburtstag von jemandem zu erinnern ist nicht dasselbe, wie sich um ihn zu kümmern. Jemandem eine automatische Nachricht zu schicken ist nicht dasselbe, wie sich die Zeit zu nehmen, ihm zu schreiben.

Wir wollen menschliche Beziehungen nicht in eine Reihe von Aufgaben verwandeln, die erledigt, optimiert oder automatisiert werden müssen. Menschen sind keine Leads in einer Vertriebspipeline. Freundschaften brauchen keine Leistungskennzahlen.

Technologie kann helfen, einen Teil der Reibung zu beseitigen, die mit der Pflege von Beziehungen verbunden ist. Sie sollte nicht die menschliche Mühe beseitigen, die diese Beziehungen überhaupt erst bedeutsam macht.

Monica sollte Ihnen helfen, in Ihrem Leben präsenter zu sein, nicht es an Ihrer Stelle zu leben.
