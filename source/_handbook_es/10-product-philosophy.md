---
title: Filosofía de producto
slug: product-philosophy
section: product
order: 1
description: Sencillo de usar, construido por iteración, primero el problema, valores predeterminados inteligentes antes que opciones, y nunca un atajo para evitar el trabajo que exigen las relaciones.
updated: 2026-11-18
---

### Haz las cosas evidentes

Un producto debe ser sencillo de usar. Idealmente, los usuarios nunca deberían tener que buscar ayuda para hacer algo. Dicho esto, en cada pantalla debería haber un enlace al centro de ayuda para asistir a los usuarios si, por desgracia, la interfaz no es lo bastante clara.

La documentación debe complementar el producto, no compensar un mal diseño.

No deberíamos dar por hecho que algo es intuitivo solo porque lo es para nosotros. Hemos pasado cientos de horas construyendo el producto. Sabemos exactamente dónde está cada cosa y por qué las cosas funcionan como funcionan. Alguien que descubre Monica por primera vez no tiene nada de ese conocimiento.

Tampoco deberíamos confundir sencillez con minimalismo. Quitar la etiqueta de un botón puede hacer que la interfaz se vea mejor, pero si la gente deja de entender qué hace el botón, ¿qué hemos conseguido en realidad?

### Itera constantemente

Siempre deberíamos iterar. La primera versión de una función debería ser una solución algo vergonzosa pero muy funcional a un problema o a una necesidad. Después, con un ciclo rápido de construir, medir y aprender, podemos crear una versión mejor.

No deberíamos apegarnos demasiado a nuestras ideas originales. Que hayamos pasado tres semanas construyendo algo de cierta manera no significa que sea la manera correcta de hacerlo.

A veces, la mejor mejora que podemos hacer en una función es replantearla por completo. A veces, es quitar la mitad de lo que hemos construido.

Tampoco hay obligación de mejorar continuamente una función. Si algo funciona bien, resuelve el problema para el que fue diseñado y la gente está contenta con ello, podemos simplemente dejarlo en paz. No hay necesidad de rediseñar algo cada dos años solo por rediseñarlo.

### Empieza por el problema

Siempre deberíamos empezar por el problema, no por la solución. Deberíamos centrarnos en enunciados de problema bien formulados para entender el núcleo de las dificultades a las que se enfrenta el usuario. Solo después de pensar lo suficiente en el problema podemos entender del todo el panorama general e imaginar una solución.

Cuando alguien nos pide que implementemos una función, lo que suele estar haciendo es describir su solución preferida a un problema que tiene. Nuestra responsabilidad es entender el problema de fondo, no necesariamente implementar su solución.

A veces podemos resolver ese problema con una solución mucho más sencilla. A veces el producto ya lo resuelve, pero no hemos hecho un buen trabajo para que eso sea evidente.

Que podamos construir algo no es una razón especialmente buena para construirlo. Esto es aún más cierto en la era de la IA, donde escribir el código se está convirtiendo cada vez más en la parte más fácil de construir un producto.

Entender qué construir sigue siendo lo difícil.

### Valores predeterminados inteligentes antes que opciones

En la medida de lo posible, deberíamos resistirnos a añadir opciones de configuración o ajustes. Es mucho mejor tener valores predeterminados inteligentes que contaminar el producto con opciones. Cada opción añade complejidad en ingeniería, en pruebas, en documentación y en la comprensión del producto.

Uno de los rasgos de personalidad de quien mantiene un proyecto es el deseo de complacer a la gente. Queremos que los usuarios amen lo que hemos tardado noches y años en crear.

Así que, cada vez que recibimos una solicitud de función, es natural querer implementarla, sobre todo si se trata de añadir una opción. Al fin y al cabo, solo estamos dando a los usuarios una elección. ¿Qué podría salir mal?

Pues multiplica ese razonamiento por mil solicitudes de funciones y acabas con un producto que nadie entiende del todo, incluidas las personas que lo construyeron.

Añadir una opción también es a veces una forma de evitar tomar una decisión. En lugar de averiguar cuál debería ser el mejor comportamiento, implementamos los dos y dejamos que decida el usuario. Eso no es necesariamente un buen diseño de producto. A veces, es simple pereza por nuestra parte.

Deberíamos resistirnos, en la medida de lo posible, a crear una situación en la que nuestro producto se vuelva tan complejo que ya no sea mantenible. 37signals tiene un gran artículo sobre [decir que no](https://basecamp.com/gettingreal/05.3-start-with-no). Léelo.

Por supuesto, algunas cosas necesitan de verdad ser configurables. Las vidas de la gente son distintas. Pero hay una diferencia fundamental entre dejar que la gente documente su vida como quiera y dejar que configure todos los aspectos del funcionamiento del software.

### Construye para la vida real

La vida es desordenada. La gente olvida cosas. Las relaciones cambian. Las familias son complicadas. La información está incompleta. A veces ni siquiera sabemos el nombre de alguien a quien hemos conocido varias veces.

Monica debería acomodar esa realidad.

No deberíamos obligar a la gente a rellenar información que no tiene. No deberíamos imponer flujos de trabajo rígidos cuando no hay un buen motivo para hacerlo. No deberíamos suponer que todo el mundo documenta su vida de forma estructurada y organizada.

El producto debería adaptarse a las imperfecciones de la vida real, no esperar que la vida real se adapte al producto.

### Piensa en décadas

La mayoría de los productos de software se diseñan en torno a lo que los usuarios necesitan hoy. Monica también tiene que considerar lo que los usuarios podrían necesitar dentro de diez o veinte años.

Un dato aparentemente insignificante hoy puede volverse extremadamente valioso en el futuro. El nombre de alguien que conociste en un viaje, una conversación con tus abuelos o algo gracioso que dijo tu hijo cuando tenía cinco años.

Esto tiene implicaciones en cómo diseñamos el producto. Deberíamos ser extremadamente cuidadosos con perder información, introducir cambios incompatibles o tomar decisiones que impidan a la gente acceder a sus datos dentro de unos años.

También deberíamos desconfiar de construir funciones en torno a tecnologías o tendencias que quizá ya no existan dentro de unos años.

La vida humana no ha cambiado fundamentalmente porque el martes pasado saliera un nuevo framework de JavaScript.

### Respeta la atención del usuario

No queremos construir un producto que la gente no pueda dejar.

No necesitamos rachas, clasificaciones, puntuaciones de interacción ni logros para animar a la gente a documentar su vida. No queremos que los usuarios se sientan culpables porque no han abierto Monica en dos semanas.

No existe eso de un día de éxito medido por cuántas notas has añadido a Monica.

Las notificaciones y los recordatorios deben existir porque aportan valor al usuario, no porque lo hagan volver a la aplicación.

El resultado ideal de usar Monica bien podría ser pasar menos tiempo delante de una pantalla y más tiempo con las personas que te importan.

### No automatices lo humano

Por último, nunca implementaremos una función que elimine la necesidad de esforzarse por mantener relaciones sanas.

¿A qué me refiero? Tener un círculo social requiere tiempo y esfuerzo. No hay una manera fácil de tener grandes relaciones. Monica te ayudará a documentar tu vida, pero no sustituirá la necesidad de, bueno, trabajar de verdad en tus relaciones.

Podemos recordarte que es el cumpleaños de alguien. Podemos ayudarte a recordar de qué hablaste la última vez que viste a alguien. Podemos ayudarte a recordar el nombre de la hija de tu compañero de trabajo.

Pero recordar el cumpleaños de alguien no es lo mismo que preocuparse por esa persona. Enviar a alguien un mensaje automático no es lo mismo que tomarse el tiempo de escribirle.

No queremos convertir las relaciones humanas en una serie de tareas que haya que completar, optimizar o automatizar. Las personas no son clientes potenciales en un embudo de ventas. Las amistades no necesitan indicadores de rendimiento.

La tecnología puede ayudar a quitar parte de la fricción que supone mantener las relaciones. No debería eliminar el esfuerzo humano que hace significativas esas relaciones en primer lugar.

Monica debería ayudarte a estar más presente en tu vida, no a vivirla en tu lugar.
