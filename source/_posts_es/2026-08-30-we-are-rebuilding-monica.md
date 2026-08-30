---
title: "Estamos reconstruyendo Monica"
slug: we-are-rebuilding-monica
date: 2026-08-30
author: 'Regis Freyd'
description: "Estamos reconstruyendo Monica desde cero, y esta nueva serie va a documentar cómo."
---
Este es el primer artículo de una serie llamada **Building Monica**. Quiero usar esta serie para documentar cómo estamos reconstruyendo Monica, el CRM personal de código abierto, desde cero. Hablaré de los problemas que intentamos resolver, de las decisiones que tomamos por el camino y probablemente de algunas cosas que no salen como esperábamos.

Hace casi diez años empecé a construir Monica porque era terrible recordando cosas sobre la gente. Se me olvidaba el nombre del hijo de alguien, de qué habíamos hablado la última vez que nos vimos, o algo importante que me habían contado unos meses antes. Quería un sitio donde apuntar todo eso, sobre todo para compensar mi mala memoria, así que empecé a usar un [CRM profesional](https://highrisehq.com/).

No era una buena solución. El software estaba hecho para comerciales, que no era mi caso, y no me apetecía especialmente pagar por una herramienta diseñada para ayudarme a ganar dinero cuando lo único que quería era recordar cosas sobre mis amigos y mi familia. Busqué algo más adecuado y no lo encontré, así que decidí construirlo yo mismo.

Ese pequeño proyecto acabó convirtiéndose en Monica. Puse el código en GitHub, lo publiqué en [Hacker News](https://news.ycombinator.com/item?id=14497295) y a partir de ahí las cosas se descontrolaron un poco. Resultó que no era la única persona que buscaba algo así. Alexis se unió después como cofundador y, con los años, miles de personas han usado Monica, han contribuido con código, la han traducido, han reportado errores y la han instalado en sus propios servidores. El proyecto tiene ya más de 25.000 estrellas en GitHub y se ha convertido en uno de los CRM personales de código abierto más conocidos.

Estoy muy orgulloso de lo que Monica ha llegado a ser. Pero después de trabajar en ella tanto tiempo, he llegado a un punto en el que la versión actual ya no es el CRM personal que construiría hoy.

## Casi diez años de decisiones

Cuando empecé Monica, obviamente no tenía diez años de experiencia pensando en cómo representar las relaciones personales en un software. La mayoría de las decisiones se tomaron cuando aparecía un problema. Necesitábamos contactos, así que construí contactos. Necesitábamos relaciones, así que añadí relaciones. Luego llegaron los recordatorios, las actividades, los regalos, las notas, las mascotas, las direcciones y muchas otras funciones.

No hay nada especialmente malo en construir software de esta manera. Así creció Monica, y muchas de esas decisiones tenían sentido en su momento. Pero después de casi diez años, se acumulan. Las ideas nuevas tienen que dar la vuelta a decisiones tomadas años antes, y lo que parecía un detalle de implementación se va convirtiendo poco a poco en un límite a lo que puedes hacer con el producto.

Con el tiempo, esto ha hecho que algunas partes de Monica sean más difíciles de cambiar de lo que deberían. Y más importante todavía: he cambiado de opinión sobre algunas de las decisiones originales.

## ¿Qué construiría hoy?

En algún momento empecé a hacerme una pregunta sencilla: si Monica no existiera y tuviera que construir un CRM personal hoy, con todo lo que he aprendido en la última década, ¿cómo sería?

Eso llevó rápidamente a preguntas mucho más básicas que qué funciones debería tener Monica. ¿Qué es exactamente una persona en Monica? ¿Cómo deberían funcionar las relaciones entre personas? ¿Cómo debería representar Monica al propio usuario? ¿Qué pasa cuando lo importante en la vida de alguien no es otra persona, sino un animal, una organización o algo completamente distinto? ¿Cómo deberían funcionar los recordatorios si las relaciones humanas no siguen un calendario de forma natural? ¿Qué debería representar una actividad? ¿Y cuánto de todo esto debería definir Monica por ti, para empezar?

Las relaciones son un buen ejemplo. Guardar que Monica es la hermana de Ross no parece especialmente complicado. Pero si Monica es la hermana de Ross, Ross también es el hermano de Monica. Una relación de madre o padre implica una relación de hijo o hija. Algunas relaciones tienen una dirección y otras no. Las familias reales incluyen divorcios, nuevos matrimonios, hijastros, medio hermanos, adopciones y todo tipo de estructuras que no encajan bien en una lista predefinida. Además, cada cultura describe los lazos familiares de forma distinta.

He pasado mucho tiempo pensando en esto para la nueva versión, y ahora veo las relaciones como un ámbito propio, en lugar de como un atributo pegado a un contacto. Hoy me parece obvio. No lo era cuando diseñamos las primeras versiones de Monica.

La personalización es otro terreno en el que he cambiado de opinión. Históricamente ha sido Monica la que ha definido qué es un contacto y qué información se puede guardar sobre él, y hemos añadido personalización alrededor de esa estructura. Para la v3 queremos darle la vuelta. Monica seguirá ofreciendo buenos valores por defecto, porque nadie quiere configurar cincuenta cosas antes de añadir su primer contacto, pero tu vida no debería tener que encajar en el esquema de base de datos que nosotros decidimos que era el correcto para todo el mundo.

Cuando empiezas a cambiar cosas a ese nivel, rediseñar unas cuantas pantallas no basta. Los cimientos también tienen que cambiar.

## Qué quiero que sea la v3

Monica v3 no pretende ser el producto actual con una interfaz más bonita. La interfaz va a cambiar bastante, y quiero que resulte mucho más divertida y personal que la mayoría del software que usamos hoy, pero eso es solo una parte del trabajo.

Quiero construir un sistema muy potente para documentar a las personas y las relaciones en la vida de alguien. No me interesa demasiado optimizar todo pensando en la simplicidad si el resultado es un producto que solo sabe representar vidas simples. Prefiero tener buenos valores por defecto para quien no quiere configurar nada, y dar a quien sí quiere un control enorme sobre cómo funciona su Monica.

Eso significa tratar las relaciones como conceptos de primer nivel y dejar que cada persona decida qué información le importa. Monica tiene que poder con mucho más que una lista predefinida de campos colgada de un contacto. La parte difícil será hacer todo esto sin acabar con un software empresarial para gestionar a tus amigos y a tu familia, porque eso sería bastante horrible.

También hay cosas que no quiero cambiar. La privacidad y la propiedad de los datos siguen importando enormemente en Monica. El proyecto seguirá siendo de código abierto y podrás alojarlo tú mismo. Si vas a pasar años metiendo en un software parte de la información más personal de tu vida, creo que deberías tener todo el control posible sobre esa información.

Tampoco quiero que Monica decida cuánto te importa alguien. Puede ayudarte a recordar cosas, a organizar información y decirte que llevas tiempo sin hablar con alguien. La relación sigue siendo tuya y tú eres quien la mantiene.

## Empezar de nuevo con diez años de experiencia

«Empezar de nuevo» no es del todo exacto, claro. Cuando creé Monica en 2017 tenía una idea y un problema que quería resolver. Esta vez tenemos casi diez años de experiencia trabajando en ese problema, miles de conversaciones con usuarios, contribuciones de gente de todo el mundo, dos generaciones del producto y una lista bastante larga de cosas que no volveríamos a hacer igual.

Mientras trabajamos en la v3, quiero documentar más de todo esto en público. Detrás de algo que desde fuera parece bastante simple hay una cantidad sorprendente de problemas difíciles, sobre todo cuando empiezas a pensar en serio en las relaciones, los recordatorios, la personalización y cómo representar en una base de datos algo tan desordenado como una vida humana. Escribiré sobre esos problemas, pero también sobre las decisiones técnicas y de diseño que vamos tomando y sobre las cosas que probamos y no acaban funcionando.

De eso va a tratar **Building Monica**. No sé cada cuánto publicaré un artículo, y no quiero inventarme un calendario de publicación solo por tener uno. Escribiré cuando tengamos algo interesante que contar.

En 2017 construí Monica a partir de lo que entendía del problema en aquel momento. Casi diez años después, entiendo ese problema de una forma muy distinta. Por eso lo estamos reconstruyendo.
