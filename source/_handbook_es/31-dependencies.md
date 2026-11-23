---
title: "Las dependencias son compromisos"
slug: dependencies
section: engineering
order: 7
description: "Un paquete puede ahorrar un fin de semana y aun así requerir atención durante años."
updated: 2026-11-18
---

Añadir un paquete puede ser una muy buena decisión. Escribir nuestra propia versión de un problema difícil y bien resuelto no tiene nada de noble en sí.

Pero instalar una dependencia es el comienzo de una relación, no el final de una tarea. Qué apropiado para Monica.

Ese paquete puede cambiar su interfaz, exigir un nuevo entorno de ejecución, introducir una vulnerabilidad o dejar de mantenerse. Seguimos siendo responsables del efecto sobre nuestros usuarios.

### Piensa en todo el conjunto

Antes de añadir una, deberíamos entender el problema que resuelve y la parte de Monica que dependerá de ella. Una pequeña comodidad usada en un único lugar merece una conversación distinta a la de una biblioteca situada entre cada usuario y su información.

¿Podemos entender su comportamiento? ¿Encaja su licencia con el proyecto? ¿Qué más trae consigo? ¿Pueden las personas autoalojar Monica sin tener que abrir una cuenta en otro servicio? Si más adelante tenemos que sustituirla, ¿cuánto de la aplicación lo notará?

Son preguntas útiles, no una afirmación de que cada dependencia del pasado haya pasado una lista de comprobación formal. Nosotros también tomamos decisiones imperfectas.

[La tecnología conocida](/es/manual/boring-technology/) y un ecosistema sano ayudan, pero la popularidad no garantiza el mantenimiento.

No quiero que rechacemos paquetes por orgullo. Tampoco quiero veinte dependencias nuevas porque una de ellas dibuja un desplegable un poco más bonito.

El comando de instalación es corto. Por desgracia, el compromiso no tiene por qué serlo.
