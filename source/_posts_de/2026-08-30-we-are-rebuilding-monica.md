---
title: "Wir bauen Monica neu"
slug: we-are-rebuilding-monica
date: 2026-08-30
author: 'Regis Freyd'
description: "Wir bauen Monica von Grund auf neu, und diese neue Reihe dokumentiert, wie."
---
Dies ist der erste Artikel einer Reihe namens **Building Monica**. Ich möchte diese Reihe nutzen, um zu dokumentieren, wie wir Monica, das Open-Source-CRM für Privatpersonen, von Grund auf neu bauen. Ich werde über die Probleme schreiben, die wir lösen wollen, über die Entscheidungen, die wir dabei treffen, und wahrscheinlich auch über einige Dinge, die nicht so laufen wie erwartet.

Vor fast zehn Jahren habe ich angefangen, Monica zu bauen, weil ich schrecklich darin war, mir Dinge über andere Menschen zu merken. Ich vergaß den Namen des Kindes von jemandem, worüber wir beim letzten Treffen gesprochen hatten, oder etwas Wichtiges, das mir einige Monate vorher erzählt worden war. Ich wollte einen Ort, an dem ich das alles aufschreiben konnte, vor allem um mein schlechtes Gedächtnis auszugleichen, also begann ich, ein [professionelles CRM](https://highrisehq.com/) zu benutzen.

Das war keine gute Lösung. Die Software war für Vertriebsleute gemacht, was ich nicht war, und ich hatte wenig Lust, für ein Werkzeug zu bezahlen, das mir beim Geldverdienen helfen sollte, während ich mir eigentlich nur Dinge über meine Freunde und meine Familie merken wollte. Ich habe nach etwas Passenderem gesucht, nichts gefunden und mich deshalb entschieden, es selbst zu bauen.

Aus diesem kleinen Projekt wurde schließlich Monica. Ich habe den Code auf GitHub gestellt, ihn auf [Hacker News](https://news.ycombinator.com/item?id=14497295) veröffentlicht, und von da an ging es etwas verrückt zu. Es stellte sich heraus, dass ich nicht der Einzige war, der so etwas suchte. Alexis kam später als Mitgründer dazu, und über die Jahre haben Tausende von Menschen Monica benutzt, Code beigetragen, das Projekt übersetzt, Fehler gemeldet und die Anwendung auf ihren eigenen Servern installiert. Das Projekt hat inzwischen mehr als 25.000 Sterne auf GitHub und ist zu einem der bekanntesten quelloffenen persönlichen CRMs geworden.

Ich bin sehr stolz darauf, was aus Monica geworden ist. Aber nachdem ich so lange daran gearbeitet habe, bin ich an einem Punkt angekommen, an dem die aktuelle Version nicht mehr das persönliche CRM ist, das ich heute bauen würde.

## Fast zehn Jahre voller Entscheidungen

Als ich mit Monica anfing, hatte ich natürlich keine zehn Jahre Erfahrung darin, darüber nachzudenken, wie man persönliche Beziehungen in Software abbildet. Die meisten Entscheidungen fielen, wenn ein Problem auftauchte. Wir brauchten Kontakte, also habe ich Kontakte gebaut. Wir brauchten Beziehungen, also habe ich Beziehungen hinzugefügt. Dann kamen Erinnerungen, Aktivitäten, Geschenke, Notizen, Haustiere, Adressen und viele weitere Funktionen.

An dieser Art, Software zu bauen, ist nichts grundsätzlich falsch. So ist Monica gewachsen, und viele dieser Entscheidungen waren damals sinnvoll. Aber nach fast zehn Jahren summieren sie sich. Neue Ideen müssen sich um Entscheidungen herumarbeiten, die Jahre früher getroffen wurden, und was einmal wie ein Implementierungsdetail aussah, wird langsam zu einer Grenze dafür, was man mit dem Produkt machen kann.

Mit der Zeit hat das einige Teile von Monica schwerer veränderbar gemacht, als sie sein sollten. Wichtiger noch: Ich habe meine Meinung zu einigen der ursprünglichen Entscheidungen geändert.

## Was würde ich heute bauen?

Irgendwann habe ich mir eine einfache Frage gestellt: Wenn Monica nicht existierte und ich heute ein persönliches CRM bauen müsste, mit allem, was ich im letzten Jahrzehnt gelernt habe, wie würde es aussehen?

Das führte schnell zu Fragen, die viel grundlegender waren als die, welche Funktionen Monica haben sollte. Was genau ist eine Person in Monica? Wie sollten Beziehungen zwischen Menschen funktionieren? Wie sollte Monica die Nutzerin oder den Nutzer selbst abbilden? Was passiert, wenn das Wichtige im Leben eines Menschen keine andere Person ist, sondern ein Tier, eine Organisation oder etwas völlig anderes? Wie sollten Erinnerungen funktionieren, wenn menschliche Beziehungen von Natur aus keinem Zeitplan folgen? Was sollte eine Aktivität darstellen? Und wie viel davon sollte Monica überhaupt für Sie festlegen?

Beziehungen sind ein gutes Beispiel. Zu speichern, dass Monica die Schwester von Ross ist, wirkt nicht besonders kompliziert. Aber wenn Monica die Schwester von Ross ist, dann ist Ross auch der Bruder von Monica. Eine Elternbeziehung setzt eine Kindbeziehung voraus. Manche Beziehungen haben eine Richtung, andere nicht. Echte Familien enthalten Scheidungen, neue Ehen, Stiefkinder, Halbgeschwister, Adoptionen und alle möglichen Konstellationen, die nicht sauber in eine vorgegebene Liste passen. Auch verschiedene Kulturen beschreiben Familienbeziehungen unterschiedlich.

Ich habe für die neue Version viel Zeit damit verbracht, darüber nachzudenken, und ich sehe Beziehungen inzwischen als eigenen Bereich und nicht als Eigenschaft, die an einem Kontakt hängt. Für mich ist das heute offensichtlich. Als wir die ersten Versionen von Monica entworfen haben, war es das nicht.

Anpassbarkeit ist ein weiterer Bereich, in dem ich meine Meinung geändert habe. Bisher hat vor allem Monica festgelegt, was ein Kontakt ist und welche Informationen man über ihn speichern kann, und wir haben rund um diese Struktur Anpassungsmöglichkeiten ergänzt. Für v3 wollen wir das umdrehen. Monica wird weiterhin gute Voreinstellungen mitbringen, weil niemand fünfzig Dinge konfigurieren will, bevor er den ersten Kontakt anlegt, aber Ihr Leben sollte nicht in das Datenbankschema passen müssen, das wir für alle richtig gefunden haben.

Sobald man Dinge auf dieser Ebene ändert, reicht es nicht, ein paar Bildschirme neu zu gestalten. Auch das Fundament muss sich ändern.

## Was v3 werden soll

Monica v3 soll nicht das heutige Produkt mit einer schöneren Oberfläche sein. Die Oberfläche wird sich erheblich verändern, und ich möchte, dass sie sich viel spielerischer und persönlicher anfühlt als die meiste Software, die wir heute benutzen, aber das ist nur ein Teil der Arbeit.

Ich möchte ein sehr leistungsfähiges System bauen, um die Menschen und Beziehungen im Leben eines Menschen zu dokumentieren. Alles auf Einfachheit zu optimieren interessiert mich wenig, wenn dabei ein Produkt herauskommt, das nur einfache Leben abbilden kann. Ich hätte lieber gute Voreinstellungen für alle, die nichts konfigurieren wollen, und gebe denen, die es wollen, enorm viel Kontrolle darüber, wie ihr Monica funktioniert.

Das heißt, Beziehungen als eigenständige Konzepte zu behandeln und die Menschen selbst entscheiden zu lassen, welche Informationen für sie wichtig sind. Monica muss deutlich mehr können als eine vorgegebene Liste von Feldern an einem Kontakt. Der schwierige Teil wird sein, all das zu tun, ohne am Ende Unternehmenssoftware für die Verwaltung von Freunden und Familie zu haben, denn das wäre ziemlich furchtbar.

Es gibt auch Dinge, die ich nicht ändern will. Privatsphäre und Datenhoheit sind für Monica weiterhin enorm wichtig. Das Projekt bleibt Open Source und selbst hostbar. Wenn Sie jahrelang einige der persönlichsten Informationen Ihres Lebens einer Software anvertrauen, sollten Sie meiner Meinung nach so viel Kontrolle über diese Informationen haben wie möglich.

Ich will auch nicht, dass Monica entscheidet, wie wichtig jemand für Sie ist. Sie kann Ihnen helfen, sich zu erinnern, Informationen zu ordnen und Ihnen sagen, dass Sie mit jemandem länger nicht gesprochen haben. Die Beziehung selbst bleibt Ihre Aufgabe.

## Von vorn anfangen, mit zehn Jahren Erfahrung

„Von vorn anfangen“ trifft es natürlich nicht ganz. Als ich Monica 2017 gestartet habe, hatte ich eine Idee und ein Problem, das ich lösen wollte. Diesmal haben wir fast zehn Jahre Erfahrung mit diesem Problem, Tausende Gespräche mit Nutzern, Beiträge von Menschen aus der ganzen Welt, zwei Generationen des Produkts und eine recht lange Liste von Dingen, die wir nicht wieder so machen würden.

Während wir an v3 arbeiten, möchte ich mehr davon öffentlich dokumentieren. Hinter etwas, das von außen recht einfach aussieht, stecken überraschend viele schwierige Probleme, besonders wenn man ernsthaft über Beziehungen, Erinnerungen, Anpassbarkeit und darüber nachdenkt, wie man etwas so Unordentliches wie ein Menschenleben in einer Datenbank abbildet. Ich werde über diese Probleme schreiben, aber auch über die technischen und gestalterischen Entscheidungen, die wir treffen, und über die Dinge, die wir ausprobieren und die am Ende nicht funktionieren.

Darum geht es in **Building Monica**. Ich weiß nicht, wie oft ich einen Artikel veröffentlichen werde, und ich möchte keinen Veröffentlichungsrhythmus erfinden, nur um einen zu haben. Ich schreibe, wenn wir etwas Interessantes zu erzählen haben.

2017 habe ich Monica auf der Grundlage dessen gebaut, was ich damals von dem Problem verstanden habe. Fast zehn Jahre später verstehe ich dieses Problem sehr anders. Deshalb bauen wir es neu.
