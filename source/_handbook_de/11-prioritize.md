---
title: Wie priorisieren wir Funktionen?
slug: prioritize
section: product
order: 2
description: Wie wir Fehler, unsere eigenen Interessen, Wünsche der Community, langfristige Wartung und den Anspruch, dass Monica Freude beim Bauen macht, gegeneinander abwägen.
updated: 2026-11-18
---

Dieses Thema ist brisant. Als Maintainer des Projekts muss ich ständig mit zwei widersprüchlichen Gedanken umgehen. Auf der einen Seite steht, was Nutzer wollen und brauchen. Auf der anderen, woran ich gern arbeite. Manchmal stimmen diese Prioritäten überein, manchmal nicht.

Ich habe Monica ursprünglich für mich selbst gebaut. Ich habe es als Open Source veröffentlicht, damit auch andere davon profitieren können. Und ich habe beschlossen, eine eigene Instanz zu hosten, damit auch Menschen es nutzen können, die nicht das technische Wissen haben, es selbst zu hosten.

### Wir sind kein klassisches Softwareunternehmen

Wir wollen, dass Monica genug Geld einbringt, um sich selbst zu tragen und die Zeit zu rechtfertigen, die wir darin investieren. Umsatzmaximierung ist jedoch nicht die Hauptmotivation hinter dem Projekt.

Wann immer ich kann, rate ich Menschen, das Docker-Image zu benutzen und Monica selbst zu hosten, wenn sie das technische Wissen dafür haben. So viel Mühe wir auch in die Absicherung unserer gehosteten Instanz stecken, sie wird Ihnen nie dasselbe Maß an Kontrolle geben wie ein System, das Ihnen gehört und das Sie selbst ordentlich pflegen.

Diese Unabhängigkeit gibt uns den Luxus, zu entscheiden, woran wir arbeiten wollen, ohne jede Entscheidung zwangsläufig finanziell begründen zu müssen.

### Fehler kommen zuerst

Fehler zu beheben sollte im Allgemeinen Vorrang davor haben, neue Funktionen einzuführen.

Wer Monica jeden Tag benutzt und drei Monate lang auf denselben nervigen Fehler stößt, interessiert sich wahrscheinlich nicht dafür, dass wir gerade fünf neue Funktionen eingeführt haben.

Natürlich sind nicht alle Fehler gleich. Ein Fehler, der zu Datenverlust führt, ist unendlich wichtiger als ein Button, der in einem bestimmten Browser um zwei Pixel verrutscht ist.

Wir sollten unser Urteilsvermögen einsetzen, aber der Grundsatz lautet: Das vorhandene Produkt ordentlich zum Laufen zu bringen ist wichtiger, als es größer zu machen.

### Wir wollen Spaß haben

Deshalb entscheide ich mich, abgesehen von Fehlerbehebungen, manchmal dafür, an etwas zu arbeiten, das ich will, und nicht an dem, was die ganze Community will.

Ich will Spaß an diesem Projekt haben. Ich will meine Zeit damit gern verbringen. Ich verbringe Abende und Wochenenden damit, und es gibt viele andere Dinge, die ich mit dieser Zeit tun könnte.

CalDAV umzusetzen macht mir zum Beispiel keinen Spaß. Ich werde es wahrscheinlich nie tun. Und ich werde diesen Beitrag wahrscheinlich auch nicht annehmen, wenn er aus der Community kommt, denn ich müsste ihn für den Rest der Lebenszeit der Software pflegen, nicht die Person, die ihn beigesteuert hat.

Das mag egoistisch klingen. Vielleicht ist es das. Aber die Alternative wäre, meine Freizeit mit Dingen zu verbringen, die mir keine Freude machen, irgendwann das Interesse am Projekt zu verlieren und ganz aufzuhören, daran zu arbeiten.

Ich glaube nicht, dass das irgendjemandem nützen würde.

Die Motivation der Menschen, die ein Open-Source-Projekt pflegen, ist eine unglaublich wichtige Ressource. Wir sollten sie genauso schützen wie die technische Qualität des Projekts.

### Auf die Community hören

Ich bin aber auch nicht blind. Wenn ich sehe, dass etwas immer wieder aufkommt, ziehe ich ernsthaft in Betracht, es umzusetzen.

Ich möchte anderen helfen, und eine Möglichkeit, anderen zu helfen, ist, etwas zu bauen, das sie brauchen.

Feedback aus der Community ist äußerst wertvoll, weil es uns Nutzungsweisen von Monica zeigt, auf die wir selbst nie gekommen wären. Unser eigenes Leben ist nicht zwangsläufig repräsentativ für das aller anderen.

Dennoch ist die Zahl der Upvotes bei einem GitHub-Issue nicht das alleinige Kriterium dafür, ob etwas gebaut werden sollte.

Eine Funktion, die hundert Menschen wünschen, kann der Philosophie des Projekts grundlegend widersprechen. Eine Funktion, die ein einziger Mensch wünscht, kann eine absolut brillante Idee sein, von der alle profitieren würden.

Beliebtheit ist ein Hinweis darauf, dass es ein Problem geben könnte, das sich zu lösen lohnt. Sie sagt uns nicht zwangsläufig, wie wir es lösen oder ob Monica das richtige Werkzeug dafür ist.

### Ein Beitrag ist nicht umsonst

Eines der Missverständnisse über Open Source ist, dass es keinen Grund gibt, eine Funktion abzulehnen, wenn jemand bereit ist, sie selbst umzusetzen.

Nun, nein.

Den ersten Code zu schreiben ist nur ein kleiner Teil der Kosten einer Funktion. Sobald wir sie annehmen, sind wir dafür verantwortlich. Wir müssen sie testen, dokumentieren, übersetzen, absichern, ihre Fehler beheben und dafür sorgen, dass sie weiter funktioniert, während sich der Rest der Anwendung weiterentwickelt.

Die Person, die die Funktion beigesteuert hat, kann schon am nächsten Tag aus dem Projekt verschwinden. Die Funktion ist dann aber unsere Verantwortung.

Deshalb lehnen wir vielleicht einen perfekt ausgeführten Pull Request ab. Das heißt nicht zwangsläufig, dass der Code schlecht ist oder dass wir die Mühe nicht schätzen. Es heißt einfach, dass wir die langfristige Verantwortung für die Pflege dieser bestimmten Funktion nicht übernehmen wollen.

### Die Kosten eines Ja bedenken

Jede Funktion, an der wir arbeiten, ist eine Funktion, bei der wir nicht an etwas anderem arbeiten.

Wenn wir drei Wochen damit verbringen, eine Integration mit einer anderen Software umzusetzen, sind das drei Wochen, die wir nicht damit verbringen, die Kernfunktionen von Monica zu verbessern.

Wir haben nur begrenzt Zeit. Wir sollten so viel davon wie möglich für Dinge aufwenden, die Monica grundlegend besser darin machen, wofür es gedacht ist.

Wir sollten auch bedenken, ob die Funktion neue Abhängigkeiten von externen Diensten, neue Sicherheitsbedenken oder ganz neue Konzepte mit sich bringt, die Nutzer verstehen müssen.

Manchmal verbirgt sich hinter einer scheinbar einfachen Funktion eine absurde Menge an Komplexität.

### Nichts versprechen

Wir glauben nicht daran, eine detaillierte öffentliche Roadmap zu pflegen, die allen sagt, was in sechs Monaten veröffentlicht wird.

Wir wissen nicht, woran wir in sechs Monaten arbeiten wollen. Wir wissen nicht, welche Probleme wir entdecken, welches Feedback wir bekommen oder wie unser Privatleben dann aussieht.

Wir können Ideen teilen, wohin sich das Projekt entwickeln soll, aber diese Ideen sollten nicht als Versprechen verstanden werden.

Ebenso ist ein offenes Issue auf GitHub keine Zusage, etwas umzusetzen. Es heißt, dass wir den Wunsch kennen und ihn irgendwann in Betracht ziehen könnten.

Ich enttäusche jemanden lieber heute mit einem Nein, als ihn mit einem Versprechen zu enttäuschen, das wir nicht halten.

### Manches wird nie umgesetzt

Egal, wie viele Menschen etwas wünschen, es gibt Funktionen, die wir schlicht nicht umsetzen werden.

Alles, was grundlegend dem Zweck von Monica widerspricht, das Produkt unnötig komplex macht, die Privatsphäre gefährdet oder die Notwendigkeit beseitigt, sich tatsächlich um gute Beziehungen zu bemühen, wird es voraussichtlich nie ins Produkt schaffen.

Wir versuchen nicht, ein Produkt zu bauen, das alle zufriedenstellt. Das würde wahrscheinlich zu einem Produkt führen, das niemand besonders mag.

### Wie wir letztlich entscheiden

Wenn wir erwägen, an etwas zu arbeiten, sollten wir uns ein paar Fragen stellen:

- Löst es ein echtes Problem?
- Passt es in den Rahmen von Monica?
- Würde ein bedeutender Teil unserer Nutzer davon profitieren?
- Können wir das Problem auf einfachere Weise lösen?
- Sind wir bereit, es die nächsten zehn Jahre zu pflegen?
- Würde uns die Arbeit daran Freude machen?

Wir brauchen keine komplizierte Excel-Tabelle mit gewichteten Punktzahlen, um Funktionen zu priorisieren. Wir brauchen gesunden Menschenverstand, eine klare Vorstellung davon, was Monica sein soll, und genug Demut, um zu erkennen, dass wir manchmal falsch liegen könnten.

Es wird immer mehr zu bauen geben, als Zeit zum Bauen da ist. Das ist völlig in Ordnung.

Monica muss nicht fertig werden. Es muss nützlich, wartbar und angenehm zu bauen bleiben.
