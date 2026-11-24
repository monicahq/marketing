---
title: "Building Monica: modelar las relaciones entre personas"
slug: modeling-relationships
date: 2026-09-02
author: 'Regis Freyd'
description: "Decidir qué es realmente una relación ha resultado ser uno de los problemas más difíciles de la reconstrucción de Monica."
---
Cuando empezamos a reconstruir Monica, sabía que las relaciones serían una de las áreas que tendríamos que replantear. Lo que no esperaba era lo difícil que sería siquiera definir qué es una relación.

Un CRM personal necesita saber cómo están relacionadas las personas entre sí. Alguien es tu madre, tu hermano, tu amigo, tu compañera de trabajo o tu pareja. Monica lo permite desde hace años y, desde el punto de vista del usuario, es una función bastante simple: seleccionas a una persona, eliges una relación y ya está.

Por desgracia, diseñar lo que ocurre detrás de ese pequeño desplegable no es nada simple.

## Incluso las relaciones simples no lo son tanto

Digamos que Monica es la hermana de Ross. Desde el punto de vista de Monica, Ross es su hermano. Las dos frases describen la misma relación, pero las palabras que usamos dependen de la persona a la que estemos mirando.

Lo mismo pasa por toda la familia. Rachel es la madre de Emma, mientras que Emma es la hija de Rachel. La tía de alguien tiene una sobrina o un sobrino. Una abuela tiene una nieta o un nieto.

Otras relaciones no funcionan así. Chandler y Joey son amigos. La palabra es la misma sin importar desde qué lado se mire. Los primos y los compañeros de trabajo pueden funcionar igual.

Así que ya tenemos comportamientos distintos. A veces una relación cambia de nombre según el lado desde el que se mire, a veces no, y a veces la palabra que usamos depende del género de una de las dos personas.

Y esta es la parte fácil.

## Las familias son un lío

Imagina que dos personas se casan y tienen dos hijos. Se divorcian. Una de ellas se vuelve a casar con alguien que ya tiene hijos de otra relación y quizá tienen otro hijo juntos.

No es una familia especialmente inusual, pero ahora tenemos padres, hijos, hermanos, medio hermanos, hijastros, padrastros, cónyuges y excónyuges.

También empieza a plantear preguntas para las que no creo que exista siempre una respuesta universal. Si te divorcias, ¿tu suegra deja de ser tu suegra? Técnicamente, quizá. Pero ¿qué pasa si la conoces desde hace veinte años y sigues considerándola parte de tu familia? Desde luego no deja de ser la abuela de tus hijos solo porque tu matrimonio haya terminado.

Luego hay padres biológicos, padres adoptivos, familias de acogida y tutores. Alguien puede tener varias personas a las que considera sus padres, y esas relaciones no significan necesariamente lo mismo. Hay familiares con los que se ha perdido el contacto, gente que considera a alguien un hermano o una hermana sin ninguna relación biológica, exparejas que siguen siendo muy cercanas y padres que crían a sus hijos juntos sin seguir siendo pareja.

El árbol genealógico limpio que tendemos a imaginar cuando pensamos en este problema no sobrevive al contacto con muchas familias reales.

E incluso cuando la estructura familiar es sencilla, las relaciones cambian. Quien hoy es tu pareja puede ser tu expareja en cinco años. Eso no significa que la relación antigua deba desaparecer sin más. El hecho de que dos personas estuvieran casadas durante quince años sigue formando parte de su historia, aunque ya no lo estén.

Las relaciones tienen un pasado, lo que hace que representar solo su estado actual también resulte problemático.

## Dos personas pueden no estar de acuerdo sobre su relación

Las relaciones familiares nos dan al menos algunos hechos con los que trabajar. La amistad es aún menos precisa.

Si Monica considera a Rachel una amiga cercana, ¿considera Rachel necesariamente a Monica una amiga cercana? No tenemos ni idea.

El mismo problema existe con los mentores, los conocidos y muchas otras relaciones. Alguien puede considerar a otra persona su mentor aunque esa persona nunca usaría esa palabra. Alguien puede considerar a un viejo amigo prácticamente de la familia mientras que el otro lo ve como alguien a quien conoció hace años.

Esto importa mucho en Monica, porque la información no pretende describir un grafo social objetivo. Es tu información sobre las personas de tu vida.

Cuando escribes que alguien es tu amigo, estás describiendo la relación tal y como tú la entiendes. Monica no tiene la versión de la otra persona y, en muchos casos, probablemente no hay una única respuesta correcta.

Esto se vuelve especialmente extraño cuando el software intenta convertir las relaciones en algo medible. ¿Alguien es mejor amigo porque lo ves cada semana? ¿Un amigo al que no has visto en cinco años es menos importante que un compañero de trabajo con el que hablas todos los días? Obviamente, la frecuencia nos dice algo sobre una relación, pero no nos dice lo que esa relación significa para alguien.

## El tiempo tampoco encaja bien

Un compañero de trabajo puede convertirse en amigo. Un amigo puede convertirse en pareja. Una pareja puede convertirse en expareja y, años después, esa misma persona puede volver a ser un amigo.

Si Monica registra que dos personas están casadas y más tarde se divorcian, ¿qué debería pasar con el matrimonio? Eliminarlo dejaría la información actual correcta, pero también borraría algo bastante importante de su historia.

Podríamos guardar fechas, salvo que a menudo la gente no las conoce. Puedo saber que dos amigos estuvieron juntos sin tener la menor idea de cuándo empezaron a salir ni de cuándo se separaron exactamente. Exigir fechas precisas dejaría el modelo más limpio y el producto bastante más molesto de usar.

Tampoco hay ninguna garantía de que las relaciones pasen limpiamente de un estado a otro. La gente no se despierta necesariamente una mañana y pasa de «amigo» a «pareja». Algunas relaciones tienen un comienzo claro, como un matrimonio. Muchas otras no.

A la base de datos le encantaría que supiéramos cuándo empezó y cuándo terminó todo. La mayor parte del tiempo, no lo sabemos.

## El inglés no es el modelo del mundo entero

Otro problema es que la mayoría de los primeros ejemplos que se nos ocurren están basados en el inglés.

El inglés usa «cousin» para un gran número de relaciones familiares, mientras que otros idiomas pueden ser mucho más precisos. El chino mandarín, por ejemplo, tiene palabras distintas para los primos según el lado de la familia del que vengan, su género y a veces su edad. El sueco distingue a los cuatro abuelos: *mormor* es la madre de tu madre, *morfar* el padre de tu madre, *farmor* la madre de tu padre y *farfar* el padre de tu padre. El inglés simplemente nos da «grandmother» y «grandfather».

El coreano ofrece otro ejemplo. Incluso algo tan simple como «hermano mayor» cambia según quién habla. Un hombre llama a su hermano mayor *hyeong*, mientras que una mujer lo llama *oppa*. El vocabulario de las relaciones contiene información que no está presente en la palabra inglesa «brother».

Esto importa para Monica porque está traducida a muchos idiomas y se usa en todo el mundo. No podemos diseñar todo el sistema de relaciones partiendo de la idea de que el inglés contiene la lista canónica de relaciones y que los demás idiomas solo tienen que traducir esas palabras.

Es un problema con el que ya nos hemos encontrado en Monica, y reconstruirla no lo hace desaparecer por arte de magia.

## La familia no es ni siquiera lo más difícil

Al menos las relaciones familiares suelen tener nombre. El resto de nuestras relaciones está mucho menos estructurado.

«Amigo» puede describir a alguien a quien conoces desde hace treinta años y con quien hablas cada semana, pero también a alguien a quien ves dos veces al año y que te importa muchísimo. Un compañero de trabajo puede ser la persona que se sienta a tu lado todos los días o alguien con quien trabajaste hace quince años.

Y las personas no encajan en una sola categoría a la vez. Alguien puede ser tu compañero de trabajo, tu amigo y tu antiguo compañero de piso. Tu socio puede ser también tu hermano. Tu vecina puede ser la madre de la mejor amiga de tu hija.

A veces lo que importa es el contexto mismo. Conoces a alguien porque fuisteis juntos al colegio, jugasteis en el mismo equipo, vivisteis en el mismo edificio o trabajasteis en el mismo proyecto. «Amigo» puede ser técnicamente correcto, pero pierde la información que explica por qué esa persona forma parte de tu vida.

Aquí es donde una pregunta simple como «¿de dónde conoces a esta persona?» empieza a ser sorprendentemente difícil de responder con un solo campo.

## Una relación puede implicar muchas otras

Supongamos que Ross es el hermano de Monica y que Ross tiene un hijo llamado Ben. Entendemos de inmediato que Monica es la tía de Ben.

El software puede llegar a la misma conclusión. Y una vez que empieza a hacerlo, puede seguir.

Los padres implican hijos. Los hijos con los mismos padres pueden ser hermanos. Los hermanos con hijos crean tías, tíos, sobrinas y sobrinos. Añade otra generación y ya tienes abuelos y nietos. Bastante rápido, un pequeño número de relaciones puede producir un grafo familiar mucho más grande.

Pero el hecho de que el software *pueda* inferir algo no significa necesariamente que deba hacerlo.

La nueva pareja de un padre no es automáticamente un padre para el hijo. Dos personas que comparten un progenitor pueden ser técnicamente medio hermanos, pero quizá no se conocen. La información que Monica tiene también puede ser simplemente incompleta. E incluso si la relación familiar es técnicamente correcta, puede no ser la relación que las personas implicadas usarían para describirse.

Cada vez que el software infiere otra relación, también obtiene otra oportunidad de equivocarse.

## Hay más preguntas que respuestas

Cuanto más trabajamos en esto, más casos límite encontramos.

¿Debería Monica recordar la historia de una relación o solo su estado actual? ¿Pueden dos personas tener varias relaciones al mismo tiempo? ¿Es «mejor amigo» una relación distinta de «amigo», o es otra cosa? ¿Qué pasa cuando conocemos a la madre de alguien pero no tenemos a esa madre como contacto en Monica? ¿Cómo describimos relaciones que nos importan pero que no tienen un nombre cómodo?

Algunas de estas son cuestiones de base de datos. La mayoría no.

La parte difícil es decidir qué queremos decir cuando decimos que dos personas tienen una relación, porque los humanos no usan esa palabra con nada parecido a la precisión que preferiría una base de datos.

Desde la interfaz, todo esto puede acabar reduciéndose a unas pocas palabras en el perfil de alguien: madre, hermano, amigo, compañera de trabajo.

Acertar con esas pocas palabras es uno de los problemas más difíciles a los que nos enfrentamos mientras reconstruimos Monica.
