---
title: "La aplicación móvil ya está aquí"
slug: mobile-application
date: 2018-05-28
published_at: 2018-05-28T00:00:00+00:00
author: 'Regis Freyd'
description: "La aplicación móvil oficial ha aterrizado."
original_url: https://www.monicahq.com/blog/mobile-application
---
Desde el lanzamiento público de junio de 2017 recibo correos pidiendo una aplicación móvil casi todos los días.

Entiendo por qué. Una app móvil para Monica tiene todo el sentido. Quieres tener la información disponible al instante, estés donde estés, en el momento adecuado. No cuando estás en casa delante del ordenador.

Empezamos a trabajar en la aplicación móvil hace 6 meses. Es mucho tiempo. Aun así, creo que la mayoría de la gente no se imagina el trabajo que hace falta para publicar una aplicación móvil. Sobre todo cuando el 99,9 % del código lo escribe una sola persona (el increíble @mokto). Que tiene un trabajo a jornada completa. Y a quien nadie paga por hacerlo.

Durante estos meses hemos dedicado mucho esfuerzo a crear todo lo que la aplicación móvil necesitaba. La API ha cambiado bastante para permitir ciertas funciones. Hemos estabilizado el backend para asegurarnos de que todo funcione sin fallos. También hemos invertido mucho tiempo en dejar bien montado el repositorio de la app en GitHub, lo que nos permitirá ir más rápido en el futuro (hablamos de una buena integración continua, pruebas unitarias, publicación automática en las tiendas y demás).

Y seis meses después nos enorgullece anunciar que la primera versión de la aplicación móvil está disponible [en iOS](https://itunes.apple.com/ca/app/monica-personal-crm/id1339447754?mt=8) y en [Android](https://play.google.com/store/apps/details?id=com.monicahq.app).

![imagen](/assets/images/blog/2018-05-28-mobile-app.webp)

Hay un matiz importante: *esta primera versión es de solo lectura*. Es decir, no puedes añadir ni editar nada. Queremos tener una gran aplicación, pero queremos ir despacio y asegurarnos de que funciona bien. En cuanto tengamos la certeza de que esta versión funciona para todo el mundo, añadiremos funciones que te permitirán manipular por completo tus datos como quieras (pista: ya hemos empezado a trabajar en una versión nueva).

Aparte de eso, esta app móvil tiene todo lo que esperas de nosotros:

- Una interfaz sencilla y amable.
- Puedes conectarte a nuestra versión alojada de Monica o entrar en tu propia instancia.
- El código es abierto. Puedes leerlo, abrir incidencias, contribuir. Todo lo que hacemos es abierto y transparente, y creemos que solo la colaboración lleva al mejor producto.
- Código abierto significa que puedes *compilar y ejecutar la aplicación móvil sin pasar por las tiendas oficiales de Apple y Google*, lo cual me parece bastante extraordinario.
- No mostramos anuncios ni revendemos tus datos.
- No tenemos ningún tipo de rastreo en nuestro código.
- La app es gratuita. Sin condiciones.

### ¿Cómo puedes ayudar?

Necesitamos gente que quiera probar la aplicación y [contarnos si hay errores](https://github.com/monicahq/chandler/issues), básicamente. También nos gustaría conocer tu opinión sobre qué deberíamos construir a continuación o cómo podríamos mejorar la app (en experiencia de uso o en disposición de los elementos).

### ¿Qué viene después?

En los próximos días mejoraremos la documentación del repositorio oficial de GitHub, para que a quienes quieran ayudar les resulte facilísimo sumarse al proyecto.

En los próximos meses añadiremos la posibilidad de modificar tus datos desde la aplicación móvil. La meta final es que todo lo que puedes hacer en la web puedas hacerlo en el móvil (con la excepción de exportar tus datos, porque cómo guardarías un archivo en iOS...). Por eso ahora construimos las funcionalidades primero en la API y después en la interfaz (web y móvil).

Para terminar, diría que estoy muy orgulloso de lo que hemos logrado hasta ahora, y todavía más de la comunidad que nos ayuda cada día. Vuestros comentarios y vuestra ayuda hacen posible Monica.
