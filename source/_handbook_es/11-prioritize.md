---
title: ¿Cómo priorizamos las funciones?
slug: prioritize
section: product
order: 2
description: Cómo equilibramos los errores, nuestros propios intereses, las peticiones de la comunidad, el mantenimiento a largo plazo y la ambición de que Monica siga siendo agradable de construir.
updated: 2026-11-18
---

Este tema es picante. Como mantenedor del proyecto, tengo que lidiar constantemente con dos pensamientos enfrentados. Por un lado, está lo que los usuarios quieren y necesitan. Por otro, lo que a mí me gusta hacer. A veces estas prioridades coinciden y a veces no.

Originalmente construí Monica para mí. La publiqué como código abierto para que otros también pudieran aprovecharla. Y decidí alojar nuestra propia instancia para que las personas que no tienen los conocimientos técnicos para alojarla ellas mismas también puedan usarla.

### No somos una empresa de software tradicional

Queremos que Monica genere el dinero suficiente para sostenerse y justificar el tiempo que le dedicamos. Sin embargo, maximizar los ingresos no es la motivación principal del proyecto.

Siempre que puedo, animo a la gente a usar la imagen de Docker y a alojar Monica ella misma si tiene los conocimientos técnicos para hacerlo. Por mucho esfuerzo que pongamos en proteger nuestra instancia alojada, nunca te dará el mismo nivel de control que un sistema que es tuyo y que mantienes tú mismo como es debido.

Esta independencia nos da el lujo de decidir en qué queremos trabajar, sin tener que justificar necesariamente cada decisión desde el punto de vista financiero.

### Los errores van primero

Corregir errores debería tener, en general, prioridad sobre introducir funciones nuevas.

Alguien que usa Monica todos los días y se topa con el mismo error molesto durante tres meses probablemente no se alegra de que acabemos de introducir cinco funciones nuevas.

Por supuesto, no todos los errores son iguales. Un error que causa pérdida de datos es infinitamente más importante que un botón desalineado dos píxeles en un navegador concreto.

Deberíamos usar el criterio, pero el principio general es que hacer que el producto existente funcione bien es más importante que hacerlo más grande.

### Queremos divertirnos

Por eso, aparte de corregir errores, puede que decida trabajar en algo que yo quiero en lugar de en lo que quiere toda la comunidad.

Quiero divertirme con este proyecto. Quiero disfrutar del tiempo que le dedico. Dedico tardes y fines de semana a esto, y hay muchísimas otras cosas que podría hacer con ese tiempo.

Por ejemplo, implementar CalDAV no me divierte. Probablemente nunca lo haga. Y probablemente tampoco aceptaré esa contribución si viene de la comunidad, porque tendría que mantenerla yo durante el resto de la vida del software, no la persona que la aportó.

Puede sonar egoísta. Quizá lo sea. Pero la alternativa es pasar mi tiempo libre trabajando en cosas que no disfruto, perder con el tiempo el interés por el proyecto y dejar de trabajar en él por completo.

No creo que nadie saliera ganando con eso.

La motivación de las personas que mantienen un proyecto de código abierto es un recurso increíblemente importante. Deberíamos protegerla tanto como protegemos la calidad técnica del proyecto.

### Escucha a la comunidad

Sin embargo, tampoco estoy ciego. Si veo que algo sale una y otra vez, me plantearé seriamente implementarlo.

Quiero ayudar a los demás, y una forma de ayudar a los demás es construir algo que necesitan.

Los comentarios de la comunidad son extremadamente valiosos porque nos muestran formas de usar Monica que nosotros nunca habríamos imaginado. Nuestras propias vidas no son necesariamente representativas de las de todos los demás.

Dicho esto, el número de votos a favor de una incidencia de GitHub no es el único criterio para decidir si algo debe construirse.

Una función pedida por cien personas puede ir fundamentalmente en contra de la filosofía del proyecto. Una función pedida por una sola persona puede ser una idea absolutamente brillante que beneficiaría a todos.

La popularidad es un indicio de que quizá haya un problema que merece la pena resolver. No nos dice necesariamente cómo resolverlo ni si Monica es la herramienta adecuada para hacerlo.

### Una contribución no es gratis

Uno de los malentendidos sobre el código abierto es que, si alguien está dispuesto a implementar una función él mismo, no hay motivo para no aceptarla.

Pues no.

Escribir el código inicial es solo una pequeña parte del coste de una función. Una vez que la aceptamos, pasamos a ser responsables de ella. Tenemos que probarla, documentarla, traducirla, protegerla, corregir sus errores y asegurarnos de que sigue funcionando a medida que evoluciona el resto de la aplicación.

La persona que aportó la función puede desaparecer del proyecto al día siguiente. La función, en cambio, ya es responsabilidad nuestra.

Por eso podemos rechazar un pull request perfectamente ejecutado. No significa necesariamente que el código sea malo ni que no agradezcamos el esfuerzo. Simplemente significa que no queremos asumir la responsabilidad a largo plazo de mantener esa función en particular.

### Considera el coste de decir que sí

Cada función en la que trabajamos es una función en la que no estamos trabajando en otra cosa.

Si pasamos tres semanas implementando una integración con otro software, son tres semanas que no dedicaremos a mejorar la funcionalidad central de Monica.

Tenemos una cantidad de tiempo limitada. Deberíamos dedicar la mayor parte posible a lo que hace que Monica sea fundamentalmente mejor en aquello para lo que se supone que sirve.

También deberíamos plantearnos si la función introduce nuevas dependencias de servicios externos, nuevas preocupaciones de seguridad o conceptos totalmente nuevos que los usuarios tendrán que entender.

A veces, una función aparentemente simple esconde una cantidad absurda de complejidad.

### No prometas cosas

No creemos en mantener una hoja de ruta pública detallada que diga a todo el mundo qué se publicará dentro de seis meses.

No sabemos en qué querremos trabajar dentro de seis meses. No sabemos qué problemas descubriremos, qué comentarios recibiremos ni cómo serán nuestras vidas personales.

Podemos compartir ideas sobre hacia dónde queremos llevar el proyecto, pero esas ideas no deben interpretarse como promesas.

De igual modo, una incidencia abierta en GitHub no constituye un compromiso de implementar algo. Significa que conocemos la petición y quizá la consideremos en algún momento.

Prefiero decepcionar a alguien diciéndole que no hoy que decepcionarlo con una promesa que no vamos a cumplir.

### Algunas cosas nunca se implementarán

Da igual cuánta gente pida algo: hay funciones que sencillamente no implementaremos.

Es poco probable que llegue al producto cualquier cosa que vaya fundamentalmente en contra del propósito de Monica, que complique el producto sin necesidad, que comprometa la privacidad o que elimine la necesidad de esforzarse de verdad por mantener buenas relaciones.

No intentamos construir un producto que satisfaga a todo el mundo. Hacerlo probablemente daría como resultado un producto que a nadie le gusta especialmente.

### Cómo decidimos al final

Cuando consideramos trabajar en algo, deberíamos hacernos unas cuantas preguntas:

- ¿Resuelve un problema real?
- ¿Encaja en el alcance de Monica?
- ¿Beneficiaría a una parte significativa de nuestros usuarios?
- ¿Podemos resolver el problema de una forma más sencilla?
- ¿Estamos dispuestos a mantenerlo durante los próximos diez años?
- ¿Disfrutaríamos trabajando en ello?

No necesitamos una complicada hoja de cálculo de Excel con puntuaciones ponderadas para priorizar funciones. Necesitamos sentido común, una visión clara de lo que Monica debería ser y la humildad suficiente para reconocer que a veces podemos equivocarnos.

Siempre habrá más cosas que construir que tiempo para construirlas. Y está perfectamente bien.

Monica no necesita estar terminada. Necesita seguir siendo útil, mantenible y agradable de construir.
