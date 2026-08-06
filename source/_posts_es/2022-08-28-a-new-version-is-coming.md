---
title: "Llega una nueva Monica"
slug: a-new-version-is-coming
date: 2022-08-28
published_at: 2022-08-28T20:44:00+00:00
author: 'Regis Freyd'
description: "Está en camino una versión mayor completamente nueva."
original_url: https://www.monicahq.com/blog/a-new-version-is-coming
---
[Alexis](https://twitter.com/asbin) y yo [(Regis)](https://twitter.com/maazarin) llevamos unos meses trabajando (desde enero de 2022, en realidad) en una versión completamente nueva de Monica. La primera versión mayor de verdad desde que la lanzamos hace unos años.

Me tienta muchísimo llamarla «una versión más rápida, más moderna, mejor», porque lo es, pero soy malo con el marketing, así que diré simplemente que es una versión nueva y responderé abajo a las preguntas que puedas tener.

**¿Qué queréis decir con versión nueva?**

Una reescritura completa de Monica, desde cero.

**¿Estáis locos?**

Sí, pero también: el código de Monica ya es viejo. Viejo en el sentido de que tiene 7 años y lo han tocado cientos de personas. Hay conceptos en el código que dejamos pasar, ya fuera porque entonces no sabíamos hacerlo mejor o porque no queríamos molestar a quienes contribuían, y que ya no queremos. El proyecto tiene demasiadas dependencias y mantener el código se ha vuelto más difícil que antes. Cambiar algo es más arriesgado y lleva más tiempo. Además, hemos visto cómo usa la gente Monica y qué quiere hacer con ella, y el código actual nos limita demasiado si queremos dar soporte a esos usos. Por último, Monica sigue siendo un proyecto paralelo para nosotros. Nos apasiona muchísimo y también queremos divertirnos construyéndola. Y la versión actual ya no era tan divertida.

**¿Qué queréis decir con reescritura?**

Que hemos partido de un código vacío y hemos empezado desde ahí. Antes era una aplicación Laravel (o sea, PHP), con vistas Blade y algo de Vue aquí y allá. Ahora sigue siendo una aplicación Laravel (o sea, sigue siendo PHP), enteramente con Vue 3. Hemos simplificado muchas cosas, hemos hecho otras más flexibles y por tanto algo más complejas, pero creemos que con esto podemos sostener el futuro de Monica.

Esto también significa que tenemos una estructura de datos completamente nueva, apoyada en un nuevo esquema de base de datos.

**¿La versión nueva se llamará Monica?**

Ahora mismo, el nombre en clave de la nueva Monica es Chandler. No lo mantendremos: el nombre oficial de la nueva Monica será Monica. Por claridad, llamaremos Chandler a la nueva versión durante el resto del artículo.

**¿Elegís PHP a pesar de \<inserta aquí nuevo lenguaje o framework>?**

PHP es un gran lenguaje. Ya no estamos en la época de PHP 4 o 5. Además, es un lenguaje muy sencillo, lo que significa que hay mucha gente en el mundo que lee y entiende PHP. Elegir PHP hace que sea más fácil contribuir al proyecto, más fácil depurar, más fácil mantener y más fácil para nosotros encontrar gente que nos ayude, si hiciera falta en el futuro. Por último, el ecosistema de PHP es sencillamente estupendo, con Laravel abriendo camino con una de las mejores experiencias de desarrollo que conozco.

**¿Qué funcionalidades tendrá Chandler?**

En el lanzamiento queremos igualar el 100 % (o casi) de las funcionalidades que ofrece Monica v1. Aun igualándolas, queríamos simplificarlas (las tareas, por ejemplo) o hacerlas más robustas (los recordatorios, por ejemplo).

Una vez hecho eso, tenemos tantas ideas sobre en qué debería convertirse Monica que abruma. En esencia, Monica nació como el primer CRM personal (o PRM, gestor de relaciones personales) que existió. Y así lo presentamos. Pero después de años trabajando en ella, hablando con la gente y leyendo los miles de correos que nos habéis enviado, nos dimos cuenta de que Monica es sobre todo una forma de documentar tu vida, signifique lo que signifique eso para ti. Así que Monica tratará de documentar tu vida y de darte herramientas para hacerlo a tu manera.

Se lee por todas partes que los productos deben tener criterio y una personalidad fuerte para que la gente los use como tú quieres que los use. Esa fue la dirección de la v1. Ahora queremos cambiar esa idea. Queremos que cada persona use y configure Monica como quiera. ¿Quiénes somos nosotros para decirte que solo deberías usar 3 pronombres para tus contactos, o qué tipos de relación deberías tener? Chandler será totalmente personalizable, desde lo que ves en la interfaz hasta el tipo de datos que puedes introducir. La gente de marketing diría «Chandler eres tú», y en cierto sentido es verdad. La contrapartida: desde el punto de vista técnico es más difícil de gestionar, pero eso es cosa nuestra.

**¿Cuándo estará lista? ¿Puedo probarla?**

Estará lista cuando esté lista. Recuerda que no trabajamos en esto a tiempo completo, en absoluto. Alexis y yo tenemos trabajos exigentes, familias, amigos y Monica (y OfficeLife, además).

AHORA BIEN.

Ya hemos hecho mucho. Algunas funcionalidades importantes que conoces y aprecias todavía faltan en la nueva versión: acontecimientos vitales, actividades, regalos y CalDAV/CardDAV, por nombrar algunas. Los acontecimientos vitales, en particular, son un bocado grande, porque queremos replantear el concepto por completo y hacerlo realmente útil. Además, y este es un «además» enorme, ahora mismo no tenemos API. Como es un código nuevo, no podemos copiar sin más tus contactos de la v1 y esperar que aparezcan en la v2. Así que, si publicáramos algo ahora, no podrías importar tus datos. Y eso nos parece un problema.

DICHO ESTO.

Seguimos necesitando gente que pruebe y nos ayude a encontrar errores, aunque aquí no cometamos errores (lol). Necesitamos gente que corrija erratas en la documentación. Así que lo que podríamos hacer es lanzar Chandler en un estado muy alfa, gratis para todo el mundo hasta que deje de ser alfa.

**¿Sigue siendo de código abierto? ¿Puedo usarla gratis?**

Sí, sigue siendo de código abierto, con la misma licencia que antes. Eso significa que Monica es gratuita, claro, salvo que uses la versión que alojamos nosotros, que con el tiempo costará algo, como la versión actual. Sí, puedes instalarla donde quieras, en tu propio servidor. Como Chandler no comparte código con la anterior, todavía no tenemos el ecosistema tan rico de antes ni todas esas maneras distintas de instalarla en cualquier parte, pero llegaremos. Sí, puedes seguir contribuyendo al código, corregir errores, añadir funcionalidades, aunque seguimos teniendo derecho a rechazar tus pull requests si creemos que no queremos dar soporte a lo que propones.

**¿Cuál es el futuro de Monica v1?**

Daremos soporte a la v1 hasta que Chandler salga de alfa y beta. Después quedará obsoleta, pero quien la tenga alojada podrá seguir usándola si quiere. La v1 que alojamos nosotros dejará de tener soporte a partir de entonces.

**¿Se puede ya contribuir al código?**

El repositorio ya está [disponible en GitHub](https://github.com/monicahq/chandler), pero estamos lejos de tener la madurez del repositorio principal actual. Eso significa que todavía no estamos preparados para recibir contribuciones de todo el mundo, ya que las cosas cambian casi a diario, pero si te parece bien, adelante.

**¿Qué viene después?**

Antes de nada, muchísimas gracias por haber leído esta entrada entera. Estamos muy agradecidos por nuestra comunidad y por cómo seguís apasionados con esta pequeña herramienta que nos divertimos construyendo. Alexis y yo seguimos muy motivados con ella y os damos las gracias por acompañarnos. Seguiremos en contacto.
